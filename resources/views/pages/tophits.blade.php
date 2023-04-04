@extends('components.app')
@section('contents')
<link rel="stylesheet" href="{{asset ('izzy/css/music.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" />
<section class="background-hits section-overlay text-left">
    <div class="container">
        <div class="full-height vertical-middle">
            <div class="col-md-12">
                <h1 class="black hyper text-white os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">FINEST TUNES
                </h1>
                <h4 class="text-semi-white">
                    OUR TOP SAMPLES
                </h4>
                <object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle.svg') }}">
                    <img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-circle-lined.svg') }}">
                    <img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle-rotated.svg') }}">
                    <img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
            </div>
        </div>
    </div>
</section>
<section class="section section-dark text-left">
    <div class="container">
        <header>
            <div class="col-md-12 padding-bottom">
                <h1 class="text-white text-caps">
                    LATEST SINGLE
                </h1>
                <object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle.svg') }}">
                    <img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-circle-lined.svg') }}">
                    <img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle-rotated.svg') }}">
                    <img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
            </div>
        </header>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if($latestHit)
                <p class="text-white" >{{$latestHit->title}}</p>
                <audio controls>
                    <source src="{{asset('Audio/'.$latestHit->audio_file)}}">
                    Your browser does not support the audio element.
                </audio>
                @else
                <p class="text-white" >No Hits Uploaded Yet.</p>
                @endif
            </div>
        </div>
    </div>
</section>
<section class="section section-dark text-left">
    <div class="container">
        <header>
            <div class="col-md-12 padding-bottom">
                <h1 class="text-white text-caps">
                    top hits
                </h1>
                <object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle.svg') }}">
                    <img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-circle-lined.svg') }}">
                    <img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle-rotated.svg') }}">
                    <img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
            </div>
        </header>
        <div class="container">
            <div class="row">
                @forelse ( $topHits as $hits )

                <div class="col-md-6 os-animation margin-top" data-os-animation="fadeInUp" data-os-animation-delay="0s">

                    <p class="text-white" >{{$hits->title}}</p>
                    <audio controls id="audio" >
                        <source src="{{asset('Audio/'.$hits->audio_file)}}">
                        Your browser does not support the audio element.
                    </audio>
                </div>

                @empty

                <div class="col-md-6 os-animation margin-top" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    no audio yet
                </div>
                @endforelse
            </div>

        </div>
    </div>
</section>

<script src="{{asset ('izzy/js/music.js')}}"></script>
@endsection
