@extends('layouts.app')

@section('title', "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keywords', "$post->meta_keywords")

@section('content')

    <div class="container-fluid">
        <div class="py-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">

                        <div class="category-heading">
                            <h4 class="mb-0"> {!! $post->name !!}</h4>
                        </div>

                        <div class="card mt-4">
                            <div class="card-body">
                                {!! $post->description !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
