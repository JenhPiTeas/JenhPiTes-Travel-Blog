@extends('layouts.app')

@section('content')

    <div class="py-1">
        <div class="container-fluid">
            <div>
                <div class="rounded-3 bg-image">
                    <img src="{{ asset('uploads/category/'.$category->image) }}" class="w-100" style="height: 400px;"/>
                    <div
                        class="card-destination card-topic mask text-light d-flex justify-content-end flex-column text-start p-3">
                        <div>
                            <h3 class="card-title-destination">{{ $category->name }}</h3>
                            <i class="fas fa-map-marker-alt fa-fw text-danger"></i>
                            <span> {{ $category->name }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="mt-5">Summary</h5>
            <p>{{ $category->description }}</p>

            <h5 class="mt-3">See in Google map</h5>
{{--            <iframe--}}
{{--                class="w-100"--}}
{{--                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123694.60247358258!2d107.81357705089405!3d14.342982986794516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316bff3ec83864ed%3A0x38ea5406b5d91f3f!2sKon%20Tum%2C%20Vietnam!5e0!3m2!1sen!2sus!4v1681809473940!5m2!1sen!2sus"--}}
{{--                height="600" style="border:0;" allowfullscreen="" loading="lazy"--}}
{{--                referrerpolicy="no-referrer-when-downgrade"></iframe>--}}

            <h5 class="mt-5">Articles {{ $category->name }}</h5>

            <div class="row g-2">
                @forelse($posts as $post)
                    <div class="col-2 g-2">
                        <div class="card" style="height: 300px; overflow: hidden;">
                            <img src="{{ asset('uploads/post/'.$post->yt_iframe) }}" class="card-img-top" alt="..." height="200px">
                            <div class="card-body px-3">
                                <div class="text-muted mb-2">
                                    <i class="fas fa-map-marker-alt fa-fw"></i>
                                    <span> {{ $category->name }}</span>
                                </div>
                                <h5 class="card-text text-truncate"> {{ $post->name }}</h5>
                            </div>
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

@endsection
