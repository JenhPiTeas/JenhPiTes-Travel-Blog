@extends('layouts.app')

@section('content')

    {{--    <div class="container">--}}
    {{--        <h3>Explore by cities</h3>--}}
    {{--        <div class="row">--}}
    {{--            @foreach(\App\Models\Category::where('navbar_status', 1)->where('status', 1)->get() as $category)--}}
    {{--                <div class="col-3 mb-4">--}}
    {{--                    <div class="bg-image w-100" style="height: 200px;">--}}
    {{--                        <img src="{{ asset('uploads/category/'.$category->image) }}" class="img-fluid" alt="..."/>--}}
    {{--                        <div class="mask text-light d-flex justify-content-center flex-column text-center"--}}
    {{--                             style="background-color: rgba(0, 0, 0, 0.5)">--}}
    {{--                            <h5 class="card-title">{{ $category->name }}</h5>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            @endforeach--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="container">
        <div class="row">

            @foreach(\App\Models\Category::where('navbar_status', 1)->where('status', 1)->get() as $category)
                <div class="col-3 bg-image ripple" style="height: 200px;">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"/>
                    <a href="#!">
                        <div class="card-topic mask text-light d-flex justify-content-center flex-column text-center">
                            <h5 class=" card-title">{{ $category->name }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
