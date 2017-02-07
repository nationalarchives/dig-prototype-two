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
    {{--<form class="dropzone" action="{{ route('batches.transfer_files', ['id' => $batch->id]) }}" method="post"--}}
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
    <form action="{{ route('batches.transfer_files', ['id' => $batch->id]) }}" id="dragDrop" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group file-area">
            <input type="file" name="files" id="images" required="required" multiple="multiple"/>
            <div class="file-dummy">
                <div class="success">Great, your file(s) are selected and ready to be uploaded.</div>
                <div class="default">
                    <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
                    <p>Drag your files here or click in this area</p>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button class="uploadButton" type="submit">Upload file(s)</button>
        </div>
    </form>
    <div id="files">
        <h4>File list</h4>
        <ul id="filePreview"></ul>
        <a id="remove" href="#" title="Remove file">Remove file</a>
    </div>
@endsection