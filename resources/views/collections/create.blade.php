@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li class="active">{{ trans('editorial.collections.create.breadcrumb_active') }}</li>
@endsection

@section('content')

    <h1>{{ trans('editorial.collections.create.title') }}</h1>
    <form action="{{ route('collections.store') }}" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="reference">{{ trans('editorial.collections.create.reference') }}</label>
            <input type="text" class="form-control" name="reference" value="{{ old('reference') }}">
        </div>

        <div class="form-group">
            <label for="">{{ trans('editorial.collections.create.name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>

        <input type="hidden" name="department_id" value="{{ Auth::user()->department->id }}">

        <div class="form-group">
            <input type="submit" class="btn btn-default"
                   value="{{ trans('editorial.collections.create.submit_button') }}"></div>
    </form>
@endsection