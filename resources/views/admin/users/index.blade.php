@extends('layouts.master')

@section('title', 'View Users')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">

            <div class="card-header">
                <h4>View Users
                    <a href="{{ url('admin/add-post') }}" class="btn btn-primary btn-sm float-end">Add User</a>
                </h4>
            </div>
            <div class="card-body">

                @if(session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table id="dataTable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->role_as == 1)
                                    <span class="badge bg-success">Admin</span>
                                @else
                                    <span class="badge bg-danger">User</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/user/'. $user->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>

@endsection
