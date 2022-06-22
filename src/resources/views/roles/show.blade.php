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
                    <span class="h2 text-primary">Role</span>
                    @can('role-create')
                        <span class="float-right">
                            <a class="btn btn-primary" href="{{ route('roles.index') }}">Back</a>
                        </span>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="lead">
                        <strong class="font-weight-bold">Name:</strong>
                        <span class="text-primary">{{ $role->name }}</span>
                    </div>
                    <div class="lead">
                        <strong class="font-weight-bold">Permissions:</strong>
                        @if (!empty($rolePermissions))
                            @foreach ($rolePermissions as $permission)
                                <label class="badge badge-success">{{ $permission->name }}</label>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
