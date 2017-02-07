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
    {{--<form action="{{ route('batches.transfer_files', ['id' => $batch->id]) }}" method="post"--}}
          {{--enctype="multipart/form-data" multiple="multiple">--}}
        {{--{{ csrf_field() }}--}}
        {{--<div class="form-group">--}}
            {{--<input type="hidden" name="id" value="{{ $batch->id }}">--}}
            {{--<input type="hidden" name="_method" value="PATCH">--}}
            {{--<label for="reference">{{ trans('editorial.batches.upload.label') }}</label>--}}
            {{--<input type="file" name="transfer_file">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<input type="submit" class="btn btn-default">--}}
        {{--</div>--}}
    {{--</form>--}}
    <form id="dragDrop" action="{{ route('batches.transfer_files', ['id' => $batch->id]) }}" method="post" enctype="multipart/form-data" multiple="multiple">
        {{ csrf_field() }}
        <div class="form-group-lg">
            <input type="hidden" name="id" value="{{ $batch->id }}">
            <input type="hidden" name="_method" value="PATCH">
            <label for="input">{{ trans('editorial.batches.upload.label') }}</label>
            <input type="file" name="transfer_file">
        </div>
        <div class="form-group-lg">
            <input type="submit" class="btn btn-default">
        </div>
    </form>

@endsection