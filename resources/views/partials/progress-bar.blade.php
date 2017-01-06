<div class="btn-group btn-group-justified progress-status" role="group" aria-label="status">

    @foreach(trans('editorial.progress_bar') as $link)
        <div class="btn-group" role="group">
            <button type="button"
                    class="btn btn-default success">{{ $link }}
                <span class="glyphicon glyphicon-ok pull-right" aria-hidden="true"></span></button>
        </div>

    @endforeach

</div>

