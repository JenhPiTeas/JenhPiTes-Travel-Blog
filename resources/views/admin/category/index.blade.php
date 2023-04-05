@extends('layouts.master')

@section('title', 'Category')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4>View Category
                    <a href="{{ url('admin/add-category') }}" class="btn btn-primary float-end">Add Category</a>
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
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <img src="{{ asset('uploads/category') }}/{{ $item->image }}" alt="" width="50"
                                     height="50">
                            </td>
                            <td>
                                @if($item->status == 1)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/edit-category/'. $item->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="{{ url('admin/delete-category/'. $item->id) }}"
                                   class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
