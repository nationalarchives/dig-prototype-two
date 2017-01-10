@if($series->hasBatchesWithMetadata())
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('editorial.series.summary_heading') }}</h3>
        </div>
        <div class="panel-body">
            <div id="piechart"></div>
        </div>
    </div>
@endif