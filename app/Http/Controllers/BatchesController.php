<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;
use App\Series;

class BatchesController extends Controller
{
	public function index() {
		$batches = Batch::all();
		return view('batch.index', compact('batches'));
	}

	public function show(Batch $batch)
    {
        return view('batch.show', compact('batch'));
    }

    public function create(Series $series)
    {
        return view('batch.create', compact('series'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required'
        ]);

        $batch = new Batch($request->all());

        $batch->save();

        flash(trans('editorial.batches.store.success_message', ['name' => $batch->name]), 'success');

        return redirect()->route('series.show', ['series' => $batch->series_id]);

    }

    public function upload_metadata(Request $request)
    {
        $batch = Batch::find($request->id);

        // Redirect if file not present in request
        if ($request->file('metadata_file') === NULL) {
            flash(trans('editorial.batches.upload_metadata.failure_message', ['batch' => $batch->name]), 'danger');
            return redirect()->route('batches.show', ['batch' => $batch]);
        }

        // Determine route and message based on uploaded filename

        $filename = $request->file('metadata_file')->getClientOriginalName();

        if ($filename === 'scenario_one.csv') {
            flash(trans('editorial.batches.upload_metadata.validation_failed.problem_with_file', ['batch' => $batch->name]), 'danger');
            return back();
        }

        if ($filename === 'scenario_two.csv') {
            flash(trans('editorial.batches.upload_metadata.validation_failed.does_not_match_schema', ['batch' => $batch->name]), 'danger');
            return back();
        }

        $path_to_stored_file = $request->file('metadata_file')->store('metadata_files');

        $batch->path_to_metadata_file = $path_to_stored_file;

        $batch->save();

        flash(trans('editorial.batches.upload_metadata.success_message', ['batch' => $batch->name]), 'success');

        return back();

    }

    public function begin_transfer(Batch $batch)
    {
        return view('batch.begin_transfer', compact('batch'));
    }

    public function transfer_files(Request $request)
    {
        $batch = Batch::find($request->id);

        // Redirect if file not present in request
        if ($request->file('transfer_file') === NULL) {

            if ($batch->path_to_transfer_file !== NULL) {
                return view('batch.show', compact('batch'));
            }

            flash(trans('editorial.batches.transfer_statuses.failure_message', ['batch' => $batch->name]), 'danger');
            return view('batch.begin_transfer', compact('batch'));
        }

        $path_to_transfer_file = $request->file('transfer_file')->store('transfer_files');

        $batch->path_to_transfer_file = $path_to_transfer_file;

        $batch->save();

        flash(trans('editorial.batches.transfer_statuses.success_message', ['batch' => $batch->name]), 'success');
        return view('batch.show', compact('batch'));

    }
}
