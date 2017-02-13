<div class="btn-group btn-group-justified progress-status" role="group" aria-label="status">

    {!! progressBarItem(trans('editorial.progress_bar.metadata_validated'), $batch, $batch->metadataHasBeenUploaded()) !!}

    {!! progressBarItem(trans('editorial.progress_bar.transfer_initiated'), $batch, $batch->filesTransferred()) !!}

    {!! progressBarItem(trans('editorial.progress_bar.transferred'), $batch, $batch->filesTransferred()) !!}

</div>


