@extends('layouts.dashboard')

@section('content')
    <h1 class="page-header">{{ Auth::user()->department->name }} collections</h1>
    @foreach($collections as $collection)
        <h2 class="sub-header">{{ $collection->reference }}: {{ $collection->name }}</h2>
    @endforeach
@endsection