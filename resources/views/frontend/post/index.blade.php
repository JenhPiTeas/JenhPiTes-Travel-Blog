@extends('layouts.app')

@section('content')

    <div class="py-1">
        <div class="container-fluid">
            {{--            <div class="row">--}}
            {{--                <div class="col-md-9">--}}

            {{--                    @forelse($posts as $post)--}}
            {{--                        <div class="card card-shadow mt-4">--}}
            {{--                            <div class="card-body">--}}
            {{--                                <a href="{{ url('tutorial/'.$category->slug.'/'.$post->slug) }}">--}}
            {{--                                    <h2>{{ $post->name }}</h2>--}}
            {{--                                </a>--}}
            {{--                                <h6 class="text-muted">--}}
            {{--                                    <i class="fas fa-user fa-fw"></i> {{ $post->user->name }}--}}
            {{--                                    <i class="fas fa-clock fa-fw ms-3"></i> {{ $post->created_at->diffForHumans() }}--}}
            {{--                                </h6>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    @empty--}}
            {{--                        <div class="card card-shadow mt-4">--}}
            {{--                            <div class="card-body">--}}
            {{--                                <h2>No post found</h2>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    @endforelse--}}

            {{--                </div>--}}
            {{--            </div>--}}

            <div>
                <div class="rounded-3 bg-image">
                    <img src="{{ asset('uploads/category/'.$category->image) }}" class="w-100" style="height: 400px;"/>
                    <a href="{{ url('tutorial/'.$category->slug) }}">
                        <div
                            class="card-destination card-topic mask text-light d-flex justify-content-end flex-column text-start p-3">
                            <div>
                                <h3 class="card-title-destination">{{ $category->name }}</h3>
                                <i class="fas fa-map-marker-alt fa-fw text-danger"></i>
                                <span> {{ $category->name }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <h5 class="mt-5">Summary</h5>
            <p>{{ $category->description }}</p>

            <h5 class="mt-3">See in Google map</h5>
            <iframe
                class="w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123694.60247358258!2d107.81357705089405!3d14.342982986794516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316bff3ec83864ed%3A0x38ea5406b5d91f3f!2sKon%20Tum%2C%20Vietnam!5e0!3m2!1sen!2sus!4v1681809473940!5m2!1sen!2sus"
                height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>



        </div>
    </div>

@endsection
