@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li>
        <a href="{{ route('collections.show', ['id' => $batch->series->collection->id] )}}">{{ $batch->series->collection->reference }}</a>
    </li>
    <li><a href="{{ route('series.show', ['id' => $batch->series->id] )}}">{{ $batch->series->reference }}</a></li>
    <li class="active">{{ $batch->name }}</li>
@endsection

@section('content')
    @include('partials.progress-bar', ['batch' => $batch])
    <h1 class="page-header">{{ $batch->name }}</h1>
    @if($batch->metadataHasBeenUploaded())
        @include('partials.begin-transfer')
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('editorial.batches.show.schema_heading', ['batch' => $batch->name]) }}</div>
                <div class="panel-body">
                    {{ $batch->path_to_schema_file }}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            @if($batch->metadataHasBeenUploaded())
                @include('partials.link-to-metadata')
            @else
                @include('partials.upload-metadata-form')
            @endif
        </div>
    </div>
    @if($batch->metadataHasBeenUploaded())
        @include('partials.records-within-batch', ['batch' => $batch])
    @endif
@endsection


