@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li class="active">{{ trans('editorial.series.breadcrumb_active') }}</li>
@endsection

@section('content')
    <h1 class="page-header">{{ trans('editorial.series.heading', ['name' => Auth::user()->department->name]) }}</h1>
    <div class="alert alert-info">
        {{ trans('editorial.series.count_series', ['series_number' => count($series), 'name' => Auth::user()->department->name]) }}
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach($series as $series)
                @include('partials.individual-series', ['series' => $series])
            @endforeach
        </div>
    </div>
@endsection