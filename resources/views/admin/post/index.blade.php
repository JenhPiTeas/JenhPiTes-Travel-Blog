@extends('layouts.master')

@section('title', 'Blog Dashboard')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4>View Post
                    <a href="{{ url('admin/add-post') }}" class="btn btn-primary btn-sm float-end">Add Post</a>
                </h4>
            </div>
            <div class="card-body">
                Your Content
            </div>
        </div>

    </div>

@endsection
