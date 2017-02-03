<a href="/series/{{$series->id}}">
    <div class="panel panel-default individual-series">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $series->reference }}: {{ $series->name }}</h3>
            {!! showBatchCount($series) !!}
        </div>
        <div class="panel-body">
            <div class="col-md-1">
                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
            </div>
            <div class="col-md-11">
                <p>{{ $series->description }}</p>
            </div>
        </div>
        <div class="panel-footer">
            {{ trans('editorial.series.type', ['type' => $series->type]) }}
        </div>
    </div>
</a>