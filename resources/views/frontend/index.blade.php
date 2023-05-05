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

        <div class="bg-danger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="owl-carousel category-carousel owl-theme">

                            <div class="item">
                                <div class="card">
                                    <img src="" alt="Image">
                                    <div class="card-body">
                                        <h4>Category</h4>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
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
