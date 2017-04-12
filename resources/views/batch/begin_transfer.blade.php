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
    <form class="dragDrop" action="{{ route('batches.transfer_files', ['id' => $batch->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group file-area">
            <input type="hidden" name="id" value="{{ $batch->id }}">
            <input type="hidden" name="_method" value="PATCH">
            <input type="file" name="transfer_file" required="required" multiple="multiple"/>
            <div class="file-dummy">
                <div class="default">
                    <h4>Drag your files here or click in this area</h4>
                </div>
                <div class="success">
                    <h4>Great, your file(s) are selected and ready to be uploaded.</h4>
                    <hr/>
                </div>
                <div class="success">
                    <h5>File list</h5>
                    <ul class="list-group text-left">
                        <li class="list-group-item">Transfer_file.pdf <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></li>
                    </ul>
                </div>
            </div>
            <div class="success">
                <div class="form-group uploadButton">
                    <button type="button" class="btn btn-block">Click to submit file(s)</button>
                </div>
            </div>
        </div>
    </form>
@endsection