@extends('layouts.information')

@section('content')
        <div class="row">
            <div tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">{{ trans('editorial.introduction.title') }}</h1>
                            </div>
                            <div class="modal-body">
                                <p>{{ trans('editorial.introduction.description') }}</p>
                            </div>
                            <div class="modal-footer">
                                <a href="/" type="button" class="btn btn-primary">Continue to prototype</a>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </div>
@endsection