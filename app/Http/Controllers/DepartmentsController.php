<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;

class DepartmentsController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }
}
