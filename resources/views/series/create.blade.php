@extends('layouts.dashboard')

@section('page_specific_breadcrumbs')
    <li class="active">Transferring {{ strtolower(trans('editorial.series.breadcrumb_active')) }}</li>
@endsection

@section('content')

    <h1>{{ trans('editorial.series.breadcrumb_active') }} you are transferring</h1>


@endsection