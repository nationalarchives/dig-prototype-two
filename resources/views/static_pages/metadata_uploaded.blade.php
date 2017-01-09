@extends('layouts.information')

@section('page_specific_breadcrumbs')
    <li>
        <a href="{{ route('collections.show', ['id' => $batch->series->collection->id] )}}">{{ $batch->series->collection->reference }}</a>
    </li>
    <li><a href="{{ route('series.show', ['id' => $batch->series->id] )}}">{{ $batch->series->reference }}</a></li>
    <li class="active">{{ $batch->name }}</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Metadata validation scenarios</h1>
            <p>Having uploaded a metadata file there are <strong>3 potential responses</strong> shown below:</p>
        </div>
        <div class="col-md-4">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Scenario 1: Problem with file type/structure</h3>
                </div>
                <div class="panel-body">
                    <p>If the uploaded file is not of the expected type and/or structure users will be:</p>
                    <ul>
                        <li>Presented with a description of the problem</li>
                        <li>Asked to upload the data again</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Scenario 2: File structure OK but does not validate against schema</h3>
                </div>
                <div class="panel-body">

                    <p>Because validation against the schema is required <strong>before reviewing submitted
                            metadata</strong> users will be:</p>
                    <ul>
                        <li>Presented with a description of the problem</li>
                        <li>Asked to upload the data again</li>
                    </ul>
                    <p>Intention is to
                        <mark>use a similar pattern to that which is currently being explored for MYC</mark>
                    </p>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Scenario 3: Success</h3>
                </div>
                <div class="panel-body">
                    <p>Where the file:</p>
                    <ol>
                        <li>type and structure are valid</li>
                        <li>contents validate against the schema</li>
                    </ol>
                    <p>Users will be presented with:</p>
                    <ul>
                        <li>a confirmation message</li>
                        <li>a link to the uploaded file</li>
                    </ul>
                    <p><a href="{{ route('batches.show', ['batch' => $batch]) }}" class="btn btn-default pull-right">Continue</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
