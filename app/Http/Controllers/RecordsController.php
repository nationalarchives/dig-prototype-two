<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class RecordsController extends Controller
{
    public function show(Record $record)
    {
        return view('record.show', compact('record'));
    }
}
