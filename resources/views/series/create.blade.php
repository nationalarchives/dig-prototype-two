@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li>
        <a href="{{ route('collections.show', ['id' => $collection->id] )}}">{{ $collection->reference }}</a>
    </li>
    <li class="active">{{ trans('editorial.series.create.breadcrumb_active', ['collection' => $collection->name]) }}</li>
@endsection

@section('content')
    <h1 class="page-header">{{ trans('editorial.series.heading', ['name' => Auth::user()->department->name]) }}</h1>

    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('series.store') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="collection_id" value="{{$collection->id}}">

                <div class="form-group">
                    <label for="reference">{{ trans('editorial.series.create.labels.reference') }}</label>
                    <input name="reference" id="reference" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">{{ trans('editorial.series.create.labels.name') }}</label>
                    <input name="name" id="name" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">{{ trans('editorial.series.create.labels.description') }}</label>
                    <input name="description" id="description" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="type">{{ trans('editorial.series.create.labels.type') }}</label>
                    <input name="type" id="type" type="text" class="form-control">
                </div>

                <input type="submit" class="btn btn-default">
            </form>
        </div>
    </div>
@endsection