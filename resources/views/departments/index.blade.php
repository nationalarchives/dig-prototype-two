@extends('layouts.dashboard')

@section('content')
    <h1 class="page-header">Departments</h1>
    <ul>
        @foreach($departments as $department)
            <li>
                {{ $department->name }}
                <ul>
                    @foreach($department->users as $user)
                        <li>{{ $user->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection