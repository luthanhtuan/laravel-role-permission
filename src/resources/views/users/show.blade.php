@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="justify-content-center">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif
            <div class="card border-primary">
                <div class="card-header border-primary">
                    <span class="h2 text-primary">User</span>
                    @can('role-create')
                        <span class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
                        </span>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="lead">
                        <strong class="font-weight-bold">Name:</strong>
                        <span class="text-primary">{{ $user->name }}</span>
                    </div>
                    <div class="lead">
                        <strong class="font-weight-bold">Email:</strong>
                        <span class="text-primary">{{ $user->email }}</span>
                    </div>
                    <div class="lead">
                        <strong class="font-weight-bold">Password:</strong>
                        <span class="text-primary">********</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
