<div class="panel panel-default">
    <div class="panel-heading">{{ trans('editorial.batches.show.metadata_uploaded', ['batch' => $batch->name]) }}</div>
    <div class="panel-body">
        <a class="btn btn-default" href="{{ route('batches.review_metadata', ['batch' => $batch]) }}">{{ trans('editorial.batches.show.metadata_review_button') }}</a>
    </div>
</div>