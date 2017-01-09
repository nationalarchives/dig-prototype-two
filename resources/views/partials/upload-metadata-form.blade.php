<div class="panel panel-default">
    <div class="panel-heading">{{ trans('editorial.batches.show.metadata_upload', ['batch' => $batch->name]) }}</div>
    <div class="panel-body">
        <form action="{{ route('batches.update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $batch->id }}">
                <input type="hidden" name="_method" value="PATCH">
                <label for="reference">{{ trans('editorial.batches.upload.label') }}</label>
                <input type="file" name="metadata_file">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default">
            </div>
        </form>
    </div>
</div>