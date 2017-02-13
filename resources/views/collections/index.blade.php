@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li class="active">{{ trans('editorial.collections.breadcrumb_active') }}</li>
@endsection

@section('content')
    <h1 class="page-header">{{ trans('editorial.collections.heading', ['name' => Auth::user()->department->name]) }} <a
                href="{{ route('collections.create') }}"
                class="btn btn-default pull-right">{{ trans('editorial.collections.create.title') }}</a></h1>
    @if(count($collections) === 1)
        <p>{{ trans('editorial.collections.description_singular', ['collection_number' => count($collections), 'name' => Auth::user()->department->name]) }}</p>
    @else
        <p>{{ trans('editorial.collections.description', ['collection_number' => count($collections), 'name' => Auth::user()->department->name]) }}</p>
    @endif
    <div class="row">
        @foreach($collections as $collection)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>{{ $collection->reference }}</h3>
                        <p>{{ $collection->name }}</p>

                        <p>
                            <a href="{{ route('collections.show', ['id' => $collection->id]) }}"
                               class="btn btn-default btn-sm" role="button">View {{ $collection->series->count() }}
                                series <span
                                        class="glyphicon glyphicon-chevron-right"></span></a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection