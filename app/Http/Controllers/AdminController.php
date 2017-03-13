<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_form()
    {
        return view('admin.show_form');
    }
}
