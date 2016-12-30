<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;

class BatchesController extends Controller
{
    public function show(Batch $batch)
    {
        return view('batch.show', compact('batch'));
    }
}
