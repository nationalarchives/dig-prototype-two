<div class="btn-group btn-group-justified progress-status" role="group" aria-label="status">

    {!! progressBarItem(trans('editorial.progress_bar.metadata_uploaded'), $batch) !!}

    {!! progressBarItem(trans('editorial.progress_bar.metadata_validated'), $batch) !!}

    <div class="btn-group" role="group">
        <button type="button"
                class="btn btn-default"> {{ trans('editorial.progress_bar.transfer_initiated') }}
        </button>
    </div>
    <div class="btn-group" role="group">
        <button type="button"
                class="btn btn-default"> {{ trans('editorial.progress_bar.transferred') }}
        </button>
    </div>

</div>

