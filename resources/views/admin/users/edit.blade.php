@extends('layouts.master')

@section('title', 'Edit User')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">

            <div class="card-header">
                <h4>Edit User</h4>
            </div>

            <div class="card-body">

                <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label>Created At</label>
                    <input type="text" class="form-control" value="{{ $user->created_at }}" disabled>
                </div>

                <form action="{{ url('admin/update-user/'.$user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="" class="form-label">Role as</label>
                        <select name="role_as" class="form-control">
                            <option value="1" {{ $user->role_as == '1' ? 'selected' : '' }}>Admin</option>
                            <option value="0" {{ $user->role_as == '0' ? 'selected' : '' }}>User</option>
                            <option value="2" {{ $user->role_as == '2' ? 'selected' : '' }}>Blogger</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" >Update User Role</button>
                    </div>
                </form>

            </div>

        </div>

    </div>

@endsection
