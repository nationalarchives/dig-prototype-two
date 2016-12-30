@extends('layouts.dashboard')

@section('content')
    <h1 class="page-header">{{ $record->title }}</h1>
    <table class="table">
        <tbody>
        <tr>
            <th>{{ trans('editorial.records.reference') }}</th>
            <td>{{ $record->reference }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.description') }}</th>
            <td>{{ $record->description }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.closure_status_description') }}</th>
            <td>
                    <span class="label label-default">{{ ($record->description_is_open) ? 'Open' : 'Closed' }}
                        document</span>
                <span class="label label-default">{{ ($record->description_is_open) ? 'Open' : 'Closed' }}
                    description</span>
            </td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.date') }}</th>
            <td>{{ $record->covering_date }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.department') }}</th>
            <td>{{ $record->batch->series->collection->department->name }}</td>
        </tr>
        <tr>
            <th>{{ trans('editorial.records.legal_status') }}</th>
            <td>{{ $record->legal_status }}</td>
        </tr>
        </tbody>
    </table>
@endsection