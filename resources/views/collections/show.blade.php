@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li class="active">{{ $collection->reference }}</li>
@endsection

@section('content')
    <h1 class="page-header">{{ trans('editorial.collections.show.heading') }}</h1>
    @foreach($collection->series as $series)
        @include('partials.individual-series', ['series' => $series])
    @endforeach
@endsection


