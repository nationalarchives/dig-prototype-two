@extends('layouts.dashboard')

@section('content')
    <h1 class="page-header">{{ trans('editorial.collections_heading', ['name' => Auth::user()->department->name]) }}</h1>
    @foreach($collections as $collection)
        <h2 class="sub-header">{{ $collection->reference }}: {{ $collection->name }}</h2>

        @foreach($collection->series as $series)
            <a href="/series/{{$series->id}}">
                <div class="panel panel-default individual-series">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $series->reference }}: {{ $series->name }}</h3>
                        <span class="label label-default">{{ $series->transfer_status }}</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-1">
                            <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-11">
                            <p>{{ $series->description }}</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                        {{ trans('editorial.series_type', ['type' => $series->type]) }}
                    </div>
                </div>
            </a>
        @endforeach
    @endforeach
@endsection