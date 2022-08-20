@extends('layouts/app')
@section('content')
<section class="section parallax-container breadcrumb-media-content" data-parallax-img="{{ asset('assets/images/custom/bridesmaids-on-wedding-day.jpg') }}">
    <div class="parallax-content breadcrumbs-custom context-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <h2 class="breadcrumbs-custom-title">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg text-center bg-default">
    <div class="container">
        <div class="row row-50">
            <div class="col-md-6 col-lg-6">
                <div class="box-icon-classic">
                    <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><img src="{{ asset('assets/images/icons/chicago-wedding-facebook-livestream.png') }}" style="margin-right: auto; margin-left: auto"></div>
                    <div class="box-icon-caption">
                        <h4>Serving Chicagoland<br /><br />Including Kankakee, Joliet, Naperville, and more...</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="box-icon-classic">
                    <div class="box-icon-inner decorate-rectangle decorate-color-primary"><img src="{{ asset('assets/images/icons/zoom-wedding-livestream-email.png') }}" style="margin-right: auto; margin-left: auto"></div>
                    <div class="box-icon-caption">
                        <h4><a href="mailto:info@doveseyeviewstreaming.com">info@doveseyeviewstreaming.com</a></h4>
                        <p>Questions? Comments? Interested in booking? Send us an email!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact us-->
<section class="section section-lg bg-gray-1 text-center">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
                <h3>Get in Touch</h3>
                <h4>Please contact us at <a href="mailto:info@doveseyeviewstreaming.com">info@doveseyeviewstreaming.com</a></h4>
            </div>
        </div>
    </div>
</section>
@endsection
