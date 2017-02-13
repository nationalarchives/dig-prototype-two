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
}
