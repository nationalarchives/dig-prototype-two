@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li>
        <a href="{{ route('collections.show', ['id' => $record->batch->series->collection->id] )}}">{{ $record->batch->series->collection->reference }}</a>
    </li>
    <li>
        <a href="{{ route('series.show', ['id' => $record->batch->series->id] )}}">{{ $record->batch->series->reference }}</a>
    </li>
    <li><a href="{{ route('batches.show', ['id' => $record->batch->id] )}}">{{ $record->batch->name }}</a></li>
    <li class="active">{{ $record->reference }}</li>
@endsection

@section('content')
    <h1 class="page-header">{{ $record->title }}</h1>
    <div class="panel panel-default">
        <div class="panel-body">
            <h4>{{ $record->access_conditions }} <span class="label label-success pull-right">{{ ($record->document_is_open) ? 'Open' : 'Closed or retained' }}</span>
            </h4>
        </div>
    </div>
    <table class="table">
        <tbody>
        <tr>
            <th>{{ trans('editorial.records.title') }}</th>
            <td>{{ $record->title }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.note') }}</th>
            <td>{{ $record->note }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.arrangement') }}</th>
            <td>{{ $record->arrangement }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.held_by') }}</th>
            <td>{{ $record->batch->series->collection->department->name }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.legal_status') }}</th>
            <td>{{ $record->legal_status }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.physical_description') }}</th>
            <td>{{ $record->physical_description }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.closure_status_description') }}</th>
            <td>
                <span class="label label-default">{{ ($record->document_is_open) ? 'Open' : 'Closed or retained' }}
                        document</span>
                <span class="label label-default">{{ ($record->description_is_open) ? 'Open' : 'Closed' }}
                    description</span>
            </td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.access_conditions') }}</th>
            <td>{{ $record->access_conditions }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.foi_decision_date') }}</th>
            <td>{{ $record->foi_decision_date }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.exemption') }}</th>
            <td>{{ $record->exemption }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.date') }}</th>
            <td>{{ $record->covering_date }}</td>
        </tr>
        </tbody>
    </table>
@endsection