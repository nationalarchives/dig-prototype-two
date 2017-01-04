<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CollectionsController extends Controller
{

    public function index()
    {
        $collections = Collection::all();
        return view('collections.index', compact('collections'));
    }


    public function create()
    {
        return view('collections.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'reference' => 'required',
            'name' => 'required'
        ]);

        $collection = new Collection($request->all());
        $collection->department_id = Auth::user()->department->id;
        $collection->save();

        flash(trans('editorial.collections.store.success_message', ['reference' => $collection->reference]), 'success');

        return redirect()->route('collections.index');
    }


    public function show(Collection $collection)
    {
        return view('collections.show', compact('collection'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
