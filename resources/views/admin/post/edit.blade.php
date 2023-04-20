@extends('layouts.master')

@section('title', 'Edit Post')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit Post</h4>
            </div>
            <div class="card-body">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                <form action="{{ url('admin/update-post/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <select name="category_id" required class="form-control">
                            <option value="">-- Select Category --</option>
                            @foreach($category as $categoryItem)
                                <option
                                    value="{{ $categoryItem->id }}" {{ $post->category_id == $categoryItem->id ? 'selected' : '' }} >
                                    {{ $categoryItem->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Post Name</label>
                        <input type="text" name="name" value="{{ $post->name }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Slug</label>
                        <input type="text" name="slug" value="{{ $post->slug }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="summernote" class="form-control"
                                  rows="3">{{ $post->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Youtube Iframe Link</label>
                        <input type="file" name="yt_iframe" value="{{ $post->yt_iframe }}" class="form-control">
                    </div>

                    <h4>SEO Tags</h4>
                    <div class="mb-3">
                        <label for="" class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" value="{{ $post->meta_title }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Meta Description</label>
                        <textarea name="meta_description" class="form-control"
                                  rows="3"> {{ $post->meta_description }} </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Meta Keywords</label>
                        <textarea name="meta_keywords" class="form-control"
                                  rows="3"> {{ $post->meta_keywords }} </textarea>
                    </div>

                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" {{ $post->status == 1 ? 'checked' : '' }} >
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary float-end">Save Post</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>

@endsection
