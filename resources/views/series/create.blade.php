@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    {{--<li><a href="{{ route('collection.show', ['id' => $collection->id] )}}">{{ $series->reference }}</a></li>--}}
    <li class="active">{{ trans('editorial.series.create.breadcrumb_active') }}</li>
@endsection

@section('content')

    <h1>{{ trans('editorial.series.create.heading') }}</h1>
    <p>{{ trans('editorial.series.create.description') }}</p>
    <form action="{{ route('series.store') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}
        <input type="hidden" name="collection_id" value="{{ $collection->id }}">

        <div class="form-group">
            <label for="collectionIdentifier">{{ trans('editorial.series.create.identifier') }}</label>
            <input type="text" class="form-control" name="collectionIdentifier" value="{{ old('collectionIdentifier') }}" placeholder="*">
        </div>

        <div class="form-group">
            <label for="collectionDescription">{{ trans('editorial.series.create.collection_description') }}</label>
            <input type="text" class="form-control" name="collectionDescription" value="{{ old('collectionDescription') }}" placeholder="*">
        </div>

        <div class="form-group">
            <label for="">{{ trans('editorial.series.create.type_of_collection') }}</label>
            <input value="{{ trans('editorial.series.create.collection_type') }}" type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="creatingBody">{{ trans('editorial.series.create.creating_body') }}</label>
            <input placeholder="*" type="text" class="form-control" name="creatingBody" value="{{ old('creatingBody') }}">
        </div>

        <div class="form-group">
            <label for="transferringBody">{{ trans('editorial.series.create.transferring_body') }}</label>
            <input placeholder="*" type="text" class="form-control" name="transferringBody" value="{{ old('transferringBody') }}">
        </div>

        <div class="form-group">
            <label for="seriesIdentifier">{{ trans('editorial.series.create.series_identifier') }}</label>
            <input placeholder="*" type="text" class="form-control" name="seriesIdentifier" value="{{ old('transferringBody') }}">
        </div>

        <input type="hidden" name="department_id" value="{{ Auth::user()->department->id }}">

        <div class="form-group">
            <input type="submit" class="btn btn-default" value="{{ trans('editorial.series.create.submit_button') }}"></div>
    </form>

@endsection