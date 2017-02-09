<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;

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

	public function create()
	{
		return view('series.create');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'collectionIdentifier' => 'required',
//			'collectionDescription' => 'required',
//			'creatingBody' => 'required',
//			'transferringBody' => 'required',
//			'seriesIdentifier' => 'required'
		]);

		$series = new Series($request->all());

		$series->save();

//		flash(trans('editorial.series.store.success_message', ['name' => $series->name]), 'success');

		return redirect()->route('collection.show', ['collection' => $series->collection_id]);

	}
}
