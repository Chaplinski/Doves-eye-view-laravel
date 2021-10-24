@extends('layouts/app')
@section('content')
<section class="section parallax-container breadcrumb-media-content" data-parallax-img="{{ asset('assets/images/custom/wedding-reception-place-setting.jpg') }}">
    <div class="parallax-content breadcrumbs-custom context-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <h2 class="breadcrumbs-custom-title">Our Service</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Boxed Grid System-->
<section class="section section-lg bg-gray-light text-center">
    <div class="container">
        <div class="row row-50">
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-md-items="1" data-lg-items="2" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
                <div class="pricing-corporate box-pricing-selected" style="padding: 35px 25px !important;">
                    <h4 class="pricing-corporate-title">What You Get</h4>
                    <ul class="pricing-corporate-list">
                        <li>Online Consultation</li>
                        <li>3-Camera Wedding Livestream</li>
                        <li>720p Standard HD Video Resolution</li>
                        <!--                            <li>Remote Guest List Management</li>-->
                        <li>Personalized Livestream Webpage</li>
                        <li>Add Guest Book, Facebook Comments, and more</li>
                        <li>Experienced Team of Professionals</li>
                        <li>Copy of Livestream on USB Thumb Drive</li>
                        <li>We Provide Our Own Internet</li>
                    </ul><a class="button button-white-outline button-lg button-block" style="margin-top: 30px !important;" href="/contact">Contact Us Now</a>
                </div>
                <div class="pricing-corporate box-pricing" style="max-width: unset;">
                    <h4 class="pricing-corporate-title">How It Works</h4>
                    <p style="text-align: left !important;">After your initial consultation we will set up your personalized wedding livestream webpage.<br><br>
                        Customize your livestream page with a digital program of your wedding ceremony, a guest book, Facebook comments, and more! You can view a sample wedding livestream page <a href="/sample">here</a>.<br><br>
                        Match your wedding hashtag to your custom url so it’s easy to share your wedding livestream with your remote guests:<br>
                        www.doveseyeviewwedding.com/<i>yourlivestreamnamehere</i><br><br>
                        We will arrive to set up our equipment 60-90 minutes before the start of the ceremony. For best quality audio, we connect directly off the audio board of your venue. However, we do provide our own microphone as a backup option.<br><br>
                        A recording of your wedding livestream will stay embedded on your personalized wedding livestream page for you and your remote guests for three months. Within two weeks of your wedding ceremony we will send you a copy of your livestream video on a USB thumb drive for you to keep forever.
                    </p>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection
