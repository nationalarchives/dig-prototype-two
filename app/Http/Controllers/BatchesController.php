<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;
use App\Series;

class BatchesController extends Controller
{
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
}
