@extends('layouts.app')

@section('title', "JenhPiTes")
@section('meta_description', "JenhPiTes")
@section('meta_keywords', "JenhPiTes")

@section('content')

    <div class="container-fluid">

        <h5 class="mb-3">
            <i class="fas fa-binoculars fa-fw fa-lg text-danger me-1"></i> Explore by cities
        </h5>

        <div class="row g-2">
            @foreach(\App\Models\Category::where('navbar_status', 1)->where('status', 1)->get() as $category)
                <div class="col-3 g-2">
                    <div class="rounded-3 bg-image" style="height: 150px;">
                        <img src="{{ asset('uploads/category/'.$category->image) }}" class="img-fluid"/>
                        <a href="{{ url('tutorial/'.$category->slug) }}">
                            <div
                                class="card-topic mask text-light d-flex justify-content-center flex-column text-center">
                                <h5 class=" card-title">{{ $category->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <h5 class="mb-3 mt-5">
            <i class="fas fa-star fa-fw fa-lg text-danger me-1"></i> Explore in <span class="text-danger fw-bold">Phnom Penh</span>
        </h5>

        <div class="owl-carousel owl-theme bg-danger">
            <div class="item">
                <div class="row g-2">
                    @php $posts = \App\Models\Post::where('status', 1)->where('category_id', 21)->get(); @endphp
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <div class="col-4 g-2">
                                <a href="{{ url('tutorial/'.$post->category->slug.'/'.$post->slug) }}">
                                    <div class="card" style="height: 300px; overflow: hidden;">
                                        <img src="{{ asset('uploads/post/'.$post->yt_iframe) }}" class="card-img-top" alt="..."
                                             height="200px">
                                        <div class="card-body px-3">
                                            <div class="text-muted mb-2">
                                                <i class="fas fa-map-marker-alt fa-fw"></i>
                                                <span>{{ $post->category->name }}</span>
                                            </div>
                                            <h5 class="card-text text-truncate">{{ $post->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <h5 class="mb-3 mt-5">
            <i class="fas fa-star fa-fw fa-lg text-danger me-1"></i> Explore in <span class="text-danger fw-bold">Siem Reap</span>
        </h5>

        <h5 class="mb-3 mt-5">
            <i class="fas fa-star fa-fw fa-lg text-danger me-1"></i> Explore in <span
                class="text-danger fw-bold">Kampot</span>
        </h5>

    </div>

@endsection
