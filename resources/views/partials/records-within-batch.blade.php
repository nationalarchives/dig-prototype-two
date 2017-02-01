<div class="row">
    <div class="col-md-12">
        <h2 class="sub-header">{{ trans('editorial.batches.show.records_heading', ['batch' => $batch->name]) }}</h2>
    </div>
</div>
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
                <th>{{ trans('editorial.records.title') }}</th>
                <th>{{ trans('editorial.records.document_is_open') }}</th>
                <th>{{ trans('editorial.records.description_is_open') }}</th>
            </tr>
            @foreach($batch->records as $record)
                <tr>
                    <td><a href="/record/{{$record->id}}">{{ $record->title }}</a></td>
                    <td>{{ ($record->document_is_open) ? 'Open' : 'Closed' }}</td>
                    <td>{{ ($record->description_is_open) ? 'Open' : 'Closed' }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>