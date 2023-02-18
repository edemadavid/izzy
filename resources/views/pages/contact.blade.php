@extends('components.app')

@section('title')

@endsection

@section('contents')
<!-- Splash -->
<section class="background-model-6 section-overlay text-left">
    <div class="container">
        <div class="full-height vertical-middle">
            <div class="col-md-12">
                <h1 class="black hyper text-white os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">REACH US
                </h1>
                <h4 class="text-semi-white">
                    FOR EVERY QUESTION YOU MAY HAVE
                </h4>
                <object type="image/svg+xml" width="15" height="15" data="{{ asset('izzy/images/svg/shape-triangle.svg') }}">
                <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-circle-lined.svg') }}">
                <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle-rotated.svg') }}">
                <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
            </div>
        </div>
    </div>
</section>
<section class="section section-dark">
    <div class="container">
        <header>
            <div class="col-md-12 padding-bottom">
            <h1 class="text-white text-caps">
            Studio
            </h1>
            <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle.svg') }}">
            <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
            </object>
            <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-circle-lined.svg') }}">
            <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
            </object>
            <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle-rotated.svg') }}">
            <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
            </object>
            </div>
        </header>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="google-map" id="map" style="height:500px;"></div>
        </div>
        <div class="icon-block col-md-6 margin-top">
            <i class="icon icon-block ion-ios-time-outline"></i>
            <span class="icon-block-title">
            STUDIO WORK HOURS
            </span>
            <p>
            Monday - Saturday: 12:00 - 19:00 <br>
            <span class="text-primary">//</span> Sunday : Closed
            </p>
        </div>
        <div class="icon-block col-md-6 margin-top">
            <i class="icon icon-block ion-ionic"></i>
            <span class="icon-block-title">
            INFORMATION
            </span>
            <p>
            Green set subdue isn't subdue dry l fish fowl creeping called which, appear.
            </p>
        </div>
    </div>
</section>
<section class="section section-overylay banner-content background-splash-2 text-center section-overlay">
    <h1 class="black super text-white">
    PLEASURE TO MEET YOU
    </h1>
    <object type="image/svg+xml" class="margin-top" width="20" height="20" data="{{ asset ('izzy/images/svg/shape-triangle.svg') }}">
    <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
    </object>
    <object type="image/svg+xml" class="margin-top" width="20" height="20" data="{{ asset ('izzy/images/svg/shape-triangle-rotated.svg') }}">
    <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
    </object>
    <p class="lead text-white">Why you should consider hire a proffesional producer for your next single?</p>
</section>
<section class="section section-dark">
    <div class="container">
        <header>
            <div class="col-md-12 padding-bottom">
                <h1 class="text-white text-caps">
                Contact
                </h1>
                <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle.svg') }}">
                <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-circle-lined.svg') }}">
                <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
                <object type="image/svg+xml" width="15" height="15" data="{{ asset ('izzy/images/svg/shape-triangle-rotated.svg') }}">
                <img src="{{ asset ('izzy/images/svg/fallback-image.png') }}" alt="…" />
                </object>
            </div>
        </header>
        <div class="row vertical-middle-desktop">
            <div class=" col-md-6">
                <form id="contact_form" class="contact-form text-left" method="POST">
                    <div class="col-md-12 form-input-icon">
                        <i class="icon ion-ios-person"></i>
                        <input id="name" name="name" type="text" placeholder="Name" required>
                    </div>
                    <div class="col-md-12 form-input-icon">
                        <i class="icon ion-at"></i>
                        <input id="email" name="email" type="email" placeholder="E-mail" required>
                    </div>
                    <div class="col-md-12 form-textarea-icon">
                        <i class="icon ion-edit"></i>
                        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <p class="text-semi-white margin-top tiny">
                            <span class="text-primary">//&nbsp;</span>
                            You need to fill all fields.
                        </p>
                        <input type="submit" class="contact-form-submit btn btn-danger" value="SEND">
                    </div>
                    <div id="messages" class="col-md-12"></div>
                </form>
            </div>
            <div class=" col-md-6">
                <div class="col-md-12 margin-top">
                    <p class="icon-left padding-left lead text-white"><i class="icon ion-alert"></i> Usually we respond the day after, or late at night. Weekends excluded.</p>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('js')
<script src="{{ asset('izzy/js/contact.min.js') }}"></script>
@endsection
