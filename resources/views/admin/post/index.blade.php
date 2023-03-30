@extends('layouts.master')

@section('title', 'View Posts')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">

            <div class="card-header">
                <h4>View Posts
                    <a href="{{ url('admin/add-post') }}" class="btn btn-primary btn-sm float-end">Add Post</a>
                </h4>
            </div>
            <div class="card-body">

                @if(session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Post Name</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                @if($item->status == 1)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/edit-post/'. $item->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="{{ url('admin/delete-post/'. $item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>

@endsection
