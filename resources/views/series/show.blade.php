@extends('layouts.dashboard')

@section('content')
    <h1 class="page-header">{{ $series->reference }}: {{ $series->name }}</h1>
@endsection