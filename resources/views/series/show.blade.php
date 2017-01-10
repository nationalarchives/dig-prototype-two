@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li>
        <a href="{{ route('collections.show', ['id' => $series->collection->id] )}}">{{ $series->collection->reference }}</a>
    </li>
    <li class="active">{{ $series->reference }}</li>
@endsection

@section('content')
    <h1 class="page-header">{{ $series->name }}</h1>
    <p>{{ trans('editorial.series.preamble') }}</p>
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th scope="row">{{ trans('editorial.series.reference') }}</th>
                    <td>{{ $series->reference }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ trans('editorial.series.name') }}</th>
                    <td>{{ $series->name }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ trans('editorial.series.description') }}</th>
                    <td>{{ $series->description }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ trans('editorial.series.parent_collection') }}</th>
                    <td>{{ $series->collection->name }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ trans('editorial.series.transferring_department') }}</th>
                    <td>{{ $series->collection->department->name }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <h2 class="sub-title">{{ trans('editorial.series.batches.heading', [ 'series' => $series->reference ]) }}</h2>
            <ul class="list-group">
                @foreach($series->batches as $batch)
                    <li class="list-group-item">
                        <a href="/batch/{{$batch->id}}">{{ $batch->name }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ trans('editorial.series.create_batch', ['series' => $series->reference]) }}</h3>
                </div>
                <div class="panel-body">
                    <a href="{{ route('batches.create', ['series' => $series->id]) }}"
                       class="btn btn-default">{{ trans('editorial.series.create_batch', ['series' => $series->reference]) }}</a>
                </div>
            </div>

            @include('partials.pie-chart')

        </div>
    </div>

@endsection

@section('scripts')
@endsection