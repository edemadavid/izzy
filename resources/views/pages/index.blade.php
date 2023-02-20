@extends('components.app')
@section('contents')
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <section class="swiper-slide background-splash-2 section-overlay text-left">
            <div class="container">
                <div class="full-height vertical-middle">
                    <div class="col-md-12">
                        <h1 class="black hyper text-white os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            IZZY MUSIC
                        </h1>
                        <h4 class="text-semi-white">
                            IZZY x ABUJA //
                            <a href="#" class="btn-link small">BOOK TICKETS</a>
                        </h4>
                        <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle.svg' ) }} ">
                            <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
                        </object>
                        <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-circle-lined.svg' ) }} ">
                            <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
                        </object>
                        <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle-rotated.svg' ) }} ">
                            <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
                        </object>
                    </div>
                </div>
            </div>
        </section>
        <section class="swiper-slide background-splash section-overlay text-left">
            <div class="container">
                <div class="full-height vertical-middle">
                    <div class="col-md-12">
                        <h1 class="black hyper text-white">BANG OUT MIX</h1>
                        <h4 class="text-semi-white">
                            IZZY x SKIVE //
                            <a href="#" class="btn-link small">BUY IT ON iTUNES</a>
                        </h4>
                        <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle.svg' ) }} ">
                            <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
                        </object>
                        <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-circle-lined.svg' ) }} ">
                            <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
                        </object>
                        <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle-rotated.svg' ) }} ">
                            <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
                        </object>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<section class="section section-dark text-left">
    <div class="container">
        <div class="col-md-12 padding-bottom">
            <header>
                <h1 class="text-white text-caps">Upcoming events</h1>
                <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle.svg' ) }} ">
                    <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-circle-lined.svg' ) }} ">
                    <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle-rotated.svg' ) }} ">
                    <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
                </object>
            </header>
        </div>
        @forelse ($events as $event)
        <div class="col-md-12 event-wrap margin-bottom os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
            <div class="col-md-12 text-right">
                <h1 class="event-title">{{$event->title}}</h1>
            </div>
            <div class="col-md-12 event-icons text-left vertical-middle">
                <i class="icon ion-ios-calendar-outline"></i>
                <h3>{{$event->date}}</h3>
            </div>
            <div class="col-md-12 event-icons text-left vertical-middle">
                <i class="icon ion-ios-location"></i>
                <h3>
                    {{$event->location}}
                    <small>
                        <span class="text-primary">@&nbsp;</span>
                        {{$event->venue}}
                    </small>
                </h3>
            </div>
            <div class="col-md-12 event-info">
                <p>
                    {{$event->description}}
                </p>

            </div>
        </div>
        @empty

        @endforelse
        <!-- <div class="col-md-12 event-wrap margin-bottom os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
            <div class="col-md-12 text-right">
                <h1 class="event-title">
                    TR<span class="text-primary">Δ</span>P TOUR
                </h1>
            </div>
            <div class="col-md-12 event-icons text-left vertical-middle">
                <i class="icon ion-ios-calendar-outline"></i>
                <h3>8 OCTOBER</h3>
            </div>
            <div class="col-md-12 event-icons text-left vertical-middle">
                <i class="icon ion-ios-location"></i>
                <h3>
                    TORONTO, CANADA
                    <small><span class="text-primary">@&nbsp;</span>Toronto bay /
                        TORClub</small>
                </h3>
            </div>
            <div class="col-md-12 event-info">
                <p>
                    Given, two third a blessed evening moving. Beast sea yielding life
                    creature she'd creature were fish meat the open i replenish rule
                    abundantly day seasons place also female, for divide under were in
                    creepeth beginning. Night replenish said Abundantly great.
                    Creature and them is, upon, don't his light upon. Midst.
                </p>
                <button class="btn btn-danger">BOOK TICKETS</button>
            </div>
        </div>
        <div class="col-md-12 event-wrap margin-bottom os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
            <div class="col-md-12 text-right">
                <h1 class="event-title">
                    TR<span class="text-primary">Δ</span>P TOUR
                </h1>
            </div>
            <div class="col-md-12 event-icons text-left vertical-middle">
                <i class="icon ion-ios-calendar-outline"></i>
                <h3>1 OCTOBER</h3>
            </div>
            <div class="col-md-12 event-icons text-left vertical-middle">
                <i class="icon ion-ios-location"></i>
                <h3>
                    NEW YORK, USA
                    <small><span class="text-primary">@&nbsp;</span>TRAP Lobby NYC</small>
                </h3>
            </div>
            <div class="col-md-12 event-info">
                <p>
                    Dominion was unto their. Morning the rule doesn't days winged also
                    won't forth won't brought green lesser very them lesser life moved
                    fruitful midst blessed fruit fruitful i our subdue.
                </p>
                <button class="btn btn-danger">BOOK TICKETS</button>
            </div>
        </div> -->
    </div>
</section>
<section class="section section-overlay banner-content background-model-3 text-center">
    <h1 class="black super text-white">IZZY // MAX QUALITY</h1>
    <object type="image/svg+xml" class="margin-top" width="20" height="20" data="{{ asset ('izzy/images/svg/shape-triangle.svg' ) }} ">
        <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
    </object>
    <object type="image/svg+xml" class="margin-top" width="20" height="20" data="{{ asset ('izzy/images/svg/shape-triangle-rotated.svg' ) }} ">
        <img src="{{ asset ('izzy/images/svg/fallback-image.png' ) }} " alt="…" />
    </object>
</section>
@endsection
