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
                        <h4><a href="mailto:info@doveseyeviewwedding.com">info@doveseyeviewwedding.com</a></h4>
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
                <!-- RD Mailform-->
                <form class="rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" id="contact-form" action="site/pages/submit.php">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required" required>
                        <label class="form-label" for="contact-name">Your Name</label>
                    </div>
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required" required>
                        <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone" type="tel" name="phone" data-constraints="@Required" required>
                        <label class="form-label" for="contact-phone">Phone</label>
                    </div>
                    <div class="form-wrap">
                        <select class="form-select" id="contact-find-us" name="find-us" data-constraints="@Required" required>
                            <option value="not-enabled" disabled selected>How Did You Find Out About Us?</option>
                            <option value="search">Search Engine (Google, Bing, etc)</option>
                            <option value="social">Social Media(Facebook, Instagram, etc)</option>
                            <option value="planner">My Wedding Planner Found You</option>
                            <option value="family">Friend/Family Recommended You</option>
                        </select>
                        <label class="form-label" for="contact-find-us">Phone</label>
                    </div>
                    <div class="form-wrap">
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required" required></textarea>
                        <label class="form-label" for="contact-message">Message</label>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-7 col-lg-5">
                            <button class="button button-block button-lg button-gradient g-recaptcha" data-sitekey="6LfU5nUaAAAAALJvaPTMOpa89jX_tN1ZiepJNjX7" data-callback='onSubmit' data-action='submit'type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
