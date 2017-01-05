@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li><a href="{{ route('series.show', ['id' => $series->id] )}}">{{ $series->reference }}</a></li>
    <li class="active">{{ trans('editorial.series.create_batch', ['series' => $series->reference]) }}</li>
@endsection

@section('content')
    <h1>{{ trans('editorial.batches.create.title') }}</h1>
    <form action="{{ route('batches.store') }}" method="post">

        {{ csrf_field() }}

        <input type="hidden" name="series_id" value="{{ $series->id }}">

        <div class="form-group">
            <label for="name">{{ trans('editorial.batches.create.name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="type">{{ trans('editorial.batches.create.type') }}</label>
            <input type="text" class="form-control" name="type" value="{{ old('type') }}">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-default"
                   value="{{ trans('editorial.batches.create.submit_button') }}"></div>
    </form>
@endsection