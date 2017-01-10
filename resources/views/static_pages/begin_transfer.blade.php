@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li>
        <a href="{{ route('collections.show', ['id' => $batch->series->collection->id] )}}">{{ $batch->series->collection->reference }}</a>
    </li>
    <li><a href="{{ route('series.show', ['id' => $batch->series->id] )}}">{{ $batch->series->reference }}</a></li>
    <li><a href="{{ route('batches.show', ['id' => $batch->id] )}}">{{ $batch->name }}</a></li>
    <li class="active">{{ trans('editorial.batches.show.begin_transfer', ['batch' => $batch->name]) }}</li>
@endsection

@section('content')
    <h1>{{ trans('editorial.static_pages.begin_transfer.heading') }}</h1>
    <form id="dragDrop" action="upload.php" method="POST">
        <input type="file" multiple="">
        <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
        <p>Drag your files here or click in this area.</p>
        <button type="submit">Upload</button>
    </form>
@endsection