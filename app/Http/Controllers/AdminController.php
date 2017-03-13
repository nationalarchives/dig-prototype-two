<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show_form()
    {
        return view('admin.show_form');
    }

    public function refresh_and_seed_database()
    {
        $exit_code = Artisan::call('migrate:refresh', [
            '--seed' => true
        ]);

        if ($exit_code == 0) {
            flash(trans('editorial.admin.refresh_and_seed_database_success'), 'success');
            return redirect()->route('collections.index');
        } else {
            flash(trans('editorial.admin.refresh_and_seed_database_failure'), 'danger');
            return back();
        }

    }
}
