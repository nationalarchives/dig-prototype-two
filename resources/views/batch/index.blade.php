@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li class="active">{{ trans('editorial.batches.breadcrumb_active') }}</li>
@endsection

@section('content')
    <h1 class="page-header">{{ trans('editorial.batches.heading', ['name' => Auth::user()->department->name]) }}</h1>
    <div class="alert alert-info">
        {{ trans('editorial.batches.count_batches', ['batches_number' => count($batches), 'name' => Auth::user()->department->name]) }}
    </div>
    <div class="container-fluid">
        <div class="row">
            <ul class="list-group">
                @foreach($batches as $batch)
                    @include('partials.individual-batches', ['batches' => $batches])
                @endforeach
            </ul>
        </div>
    </div>
@endsection