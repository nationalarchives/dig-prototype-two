@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li><a href="{{ route('collections.show', ['id' => $batch->series->collection->id] )}}">{{ $batch->series->collection->reference }}</a></li>
    <li><a href="{{ route('series.show', ['id' => $batch->series->id] )}}">{{ $batch->series->reference }}</a></li>
    <li class="active">{{ $batch->name }}</li>
@endsection

@section('content')
    <h1 class="page-header">{{ $batch->name }}</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('editorial.records.records_relating_to') }}
                </div>
                <div class="panel-body">
                    {{ $batch->series->reference }}
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <table class="table">
                <tr>
                    <th colspan="2"></th>
                    <th colspan="2">{{ trans('editorial.records.closure_status_description') }}</th>
                </tr>
                <tr>
                    <th>{{ trans('editorial.records.reference') }}</th>
                    <th>{{ trans('editorial.records.title') }}</th>
                    <th>{{ trans('editorial.records.document_is_open') }}</th>
                    <th>{{ trans('editorial.records.description_is_open') }}</th>
                </tr>
                @foreach($batch->records as $record)
                    <tr>
                        <td>{{ $record->reference }}</td>
                        <td><a href="/record/{{$record->id}}">{{ $record->title }}</a></td>
                        <td>{{ ($record->document_is_open) ? 'Open' : 'Closed' }}</td>
                        <td>{{ ($record->description_is_open) ? 'Open' : 'Closed' }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection


