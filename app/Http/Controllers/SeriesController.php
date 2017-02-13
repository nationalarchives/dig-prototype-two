<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;
use App\Collection;

class SeriesController extends Controller
{
	public function index() {
		$series = Series::all();
		return view('series.index', compact('series'));
	}

    public function show(Series $series)
    {
        return view('series.show', compact('series'));
    }

    public function create(Collection $collection)
    {
        return view('series.create', compact('collection'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'collection_id' => 'required',
            'reference' => 'required'
        ]);

        $series = new Series($request->all());

        $series->save();

        flash(trans('editorial.series.store.success_message', ['name' => $series->name]), 'success');

        return redirect()->route('series.index');
    }
}
