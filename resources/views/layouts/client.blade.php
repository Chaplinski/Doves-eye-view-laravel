@extends('layouts/client-app')
@section('content')
    <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-7">
                    <h3 style="font-style: italic; font-family: 'Playfair Display', serif; display: block">{{ $data->title_names }}</h3>
                    <h4 style="font-style: italic; font-family: 'Playfair Display', serif; display: block">{{ $date }}</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <iframe width="800" height="500" src="https://www.youtube.com/embed/{{ $data->youtube_hash }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h6><br>{{ $data->title_names }}'s Wedding is at {{ $event_start }} CST, but their Livestream will begin streaming at {{ $stream_start }}.<br><br>For those at home, please take this extra 15 minutes to ensure the audio and video feed are working for you.</h6>
            </div>
        </div>
    </section>
@endsection
