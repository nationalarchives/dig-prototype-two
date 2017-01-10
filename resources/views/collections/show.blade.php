@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li class="active">{{ $collection->reference }}</li>
@endsection

@section('content')
    <h1 class="page-header">{{ $collection->name }}</h1>
        @foreach($collection->series as $series)
            <a href="/series/{{$series->id}}">
                <div class="panel panel-default individual-series">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $series->reference }}: {{ $series->name }}</h3>
                        <span class="label label-info">{{ $series->transfer_status }}</span>
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
                        {{ trans('editorial.series.type', ['type' => $series->type]) }}
                    </div>
                </div>
            </a>
        @endforeach
@endsection


