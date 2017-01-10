@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li>
        <a href="{{ route('collections.show', ['id' => $batch->series->collection->id] )}}">{{ $batch->series->collection->reference }}</a>
    </li>
    <li><a href="{{ route('series.show', ['id' => $batch->series->id] )}}">{{ $batch->series->reference }}</a></li>
    <li><a href="{{ route('batches.show', ['id' => $batch->id] )}}">{{ $batch->name }}</a></li>
    <li class="active">{{ trans('editorial.batches.show.metadata_uploaded', ['batch' => $batch->name]) }}</li>
@endsection

@section('content')
    <h1>{{ trans('editorial.static_pages.metadata_upload.heading', ['batch' => $batch->name]) }}</h1>
    <p>{{ trans('editorial.static_pages.metadata_upload.introductory_text') }}</p>

    @include('partials.comparison-table')

    @include('partials.pie-chart', ['series' => $batch->series])
    <a href="" class="btn btn-danger">Delete and resubmit this metadata</a>

@endsection

@section('scripts')
    <script>
        // Toggling matches
        $('#show-ok').on('click', function (e) {
            var $this = $(this);
            var text = ($(e.target).text() === 'Hide matches') ? 'Show matches' : 'Hide matches';
            e.preventDefault();
            $('#comparison-table .success').toggle();
            $(e.target).text(text);
        }).click();
    </script>
@endsection