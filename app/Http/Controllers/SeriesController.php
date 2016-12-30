<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;

class SeriesController extends Controller
{
    public function show(Series $series)
    {
        return view('series.show', compact('series'));
    }
}
