@extends('layouts.app')

@section('content')

    <h4> Hello world</h4>

    <div class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">

                    <div class="category-heading">
                        <h4>{{ $category->name }}</h4>
                    </div>

                    @forelse($posts as $post)
                        <div class="card card-shadow mt-4">
                            <div class="card-body">
                                <a href="{{ url('tutorial/'.$category->slug.'/'.$post->slug) }}">
                                    <h2>{{ $post->name }}</h2>
                                </a>
                                <h6 class="text-muted">
                                    <i class="fas fa-user fa-fw"></i> {{ $post->user->name }}
                                    <i class="fas fa-clock fa-fw ms-3"></i> {{ $post->created_at->diffForHumans() }}
                                </h6>
                            </div>
                        </div>
                    @empty
                        <div class="card card-shadow mt-4">
                            <div class="card-body">
                                <h2>No post found</h2>
                            </div>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>

@endsection
