<div class="panel panel-default">
    <div class="panel-heading">{{ trans('editorial.batches.show.metadata_uploaded', ['batch' => $batch->name]) }}</div>
    <div class="panel-body">
        <a href="{{ $batch->path_to_metadata_file }}">{{ $batch->path_to_metadata_file }}</a>
    </div>
</div>