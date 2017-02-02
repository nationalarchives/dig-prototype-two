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

    public function update(Request $request)
    {
        $batch = Batch::find($request->id);

        $path_to_stored_file = $request->file('metadata_file')->store('metadata_files');

        $batch->path_to_metadata_file = $path_to_stored_file;

        $batch->save();

        flash(trans('editorial.batches.upload_metadata.success_message', ['batch' => $batch->name]), 'success');

        return redirect()->route('static.metadata_uploaded', ['batch' => $batch]);
    }
}
