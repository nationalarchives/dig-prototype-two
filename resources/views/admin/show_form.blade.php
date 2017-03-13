@extends('layouts.information')

@section('content')
    <h1 class="page-header">{{ trans('editorial.admin.heading') }}</h1>

    <form method="post" action="{{ route('admin.refresh_and_seed_database') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="refresh_and_seed">{{ trans('editorial.admin.refresh_and_seed_database_form.label_text') }}</label>
        </div>

        <input id="refresh_and_seed" class="btn btn-primary" type="submit"
               value="{{ trans('editorial.admin.refresh_and_seed_database_form.button_text') }}">
    </form>

@endsection