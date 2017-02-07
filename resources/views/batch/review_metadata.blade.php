@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li>
        <a href="{{ route('collections.show', ['id' => $batch->series->collection->id] )}}">{{ $batch->series->collection->reference }}</a>
    </li>
    <li><a href="{{ route('series.show', ['id' => $batch->series->id] )}}">{{ $batch->series->reference }}</a></li>
    <li><a href="{{ route('batches.show', ['id' => $batch->id] )}}">{{ $batch->name }}</a></li>
    <li class="active">{{ trans('editorial.batches.review_metadata.breadcrumb') }}</li>
@endsection

@section('content')
    <h1 class="page-header">{{ trans('editorial.batches.review_metadata.heading', ['batch' => $batch->name]) }}</h1>
    <p>{{ trans('editorial.batches.review_metadata.description') }}</p>

    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#summary" aria-controls="summary" role="tab"
                                                      data-toggle="tab">{{ trans('editorial.batches.review_metadata.tabs.droid_comparison') }}</a>
            </li>
            <li role="presentation"><a href="#records-preview" aria-controls="records-preview" role="tab"
                                       data-toggle="tab">{{ trans('editorial.batches.review_metadata.tabs.records_preview') }}</a>
            </li>
            <li role="presentation"><a href="#records-summary" aria-controls="records-summary" role="tab"
                                       data-toggle="tab">{{ trans('editorial.batches.review_metadata.tabs.records_summary') }}</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="summary">
                @include('partials.comparison-table')
            </div>
            <div role="tabpanel" class="tab-pane" id="records-preview">
                @include('partials.records-within-batch')
            </div>
            <div role="tabpanel" class="tab-pane" id="records-summary">
                @include('partials.pie-chart')
            </div>
        </div>

    </div>

    <form class="pull-left" method="POST" action="{{ route('batches.delete_metadata', ['id' => $batch->id]) }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <input type="submit" class="btn btn-danger" value="{{ trans('editorial.batches.review_metadata.buttons.delete') }}">
    </form>
    <a href="{{ route('batches.show', ['id' => $batch->id] )}}"
       class="btn btn-primary pull-right">{{ trans('editorial.batches.review_metadata.buttons.continue') }}</a>

@endsection