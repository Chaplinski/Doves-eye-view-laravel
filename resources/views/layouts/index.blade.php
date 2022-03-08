@extends('layouts.app')
@section('content')
    <!-- Swiper-->
    <section class="section section-lg section-main-bunner">
        <div class="main-bunner-img" style="background-image: url(&quot;assets/images/custom/congratulations-newly-married-couple.jpg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="row row-30 justify-content-lg-between align-items-lg-center">
                    <div class="col-lg-2 order-lg-2 text-center text-lg-right">
                        <div class="block-video-button"><a href="https://youtu.be/LN4XrDlDdRc" data-lightgallery="item"><span class="icon fa-play icon-md"></span></a></div>
                    </div>
                    <div class="col-lg-9 col-xl-8 order-lg-1"><span class="bunner-location">Chicagoland's Very First</span>
                        <h1>Wedding Livestreaming</h1><span class="italic-subtitle offset-top-30" style="text-shadow: -1px -1px 0 #000;">Create and plan your perfect<br>wedding livestream with<br>Dove's Eye View</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Privilege-->
    <section class="section section-lg text-center">
        <div class="container">
            <div class="row row-50">
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInLeft">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-triangle decorate-color-secondary"><img src="{{ asset('assets/images/icons/couple-in-love.png') }}" style="margin-right: auto; margin-left: auto"></div>
                            <div class="box-icon-caption">
                                <h4>Qualified Team</h4>
                                <p>We are a couple who was married during the pandemic, so we understand the need for a high-quality and reliable livestreaming service.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInDown">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><img src="{{ asset('assets/images/icons/zoom-livestream-camera.png') }}" style="margin-right: auto; margin-left: auto"></div>
                            <div class="box-icon-caption">
                                <h4>Livestreaming in HD</h4>
                                <p>Your wedding, bar/bat mitzvah, or memorial livestream will be shot and broadcast in 720p HD using 3 or more cameras.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInRight">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-rectangle decorate-color-primary"><img src="{{ asset('assets/images/icons/live-stream-internet-connection.png') }}" style="margin-right: auto; margin-left: auto"></div>
                            <div class="box-icon-caption">
                                <h4>No WiFi? No Problem.</h4>
                                <p>We always provide our own 4G LTE WiFi hotspot. We are also capable of connecting to most wedding/event venue's internet through their WiFi or with a wired connection.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Blog-->
    <section class="section section-lg bg-gray-light">
        <div class="container">
            <div class="row row-50">
                <div class="col-12 text-center">
                    <h3 class="title-decorate">Latest Posts</h3>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow fadeInUp">
                        <div class="post-modern post-modern-reverse">
                            <div class="post-modern-figure"><a href="/blog/futureofweddings"><img src="{{ asset('assets/images/custom/blog/beach-wedding-chicago.jpg') }}" alt="Wedding live stream services help a Joliet couple tie the knot on the beach." width="370" height="255"/></a><a class="badge-primary badge" href="/blog/usandthem">Wedding</a></div>
                            <div class="post-modern-caption">
                                <p class="post-modern-date">January 18, 2021</p>
                                <h4 class="post-modern-title"><a href="/blog/futureofweddings">Is Wedding Livestreaming Here To Stay?</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInDown">
                        <div class="post-modern">
                            <div class="post-modern-figure"><a href="/blog/sendinginvites"><img src="{{ asset('assets/images/custom/blog/wedding-invitation-save-the-date.jpg') }}" alt="Bride in Chicago, Illinois holding invitation to the best platform to livestream a wedding for her youtube live wedding." width="370" height="255"/></a><a class="badge-secondary badge" href="/blog/sendinginvites">Info</a></div>
                            <div class="post-modern-caption">
                                <p class="post-modern-date">December 16, 2020</p>
                                <h4 class="post-modern-title"><a href="/blog/sendinginvites">How To Send Out Livestream Invites: Tips from our Team</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow fadeInUp">
                        <div class="post-modern post-modern-reverse">
                            <div class="post-modern-figure"><a href="/blog/whotoinvite"><img src="{{ asset('assets/images/custom/blog/wedding-live-stream-invitation-ideas.jpg') }}" alt="A blank wedding livestream invitation in a rustic setting." width="370" height="255"/></a><a class="badge-primary badge" href="/blog/usandthem">Wedding</a></div>
                            <div class="post-modern-caption">
                                <p class="post-modern-date">November 25, 2020</p>
                                <h4 class="post-modern-title"><a href="/blog/whotoinvite">Who Should You Invite to Your Wedding Livestream?</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Owl Carousel-->
    <section class="section-lg context-light review-carousel" id="testimonials">
        <div class="container">
            <div class="wow-outer">
                <div class="wow slideInDown">
                    <h3 class="title-decorate text-center">What Our Clients Say</h3>
                </div>
            </div>
            <div class="owl-carousel owl-dots-secondary dots-offset-lg" data-dots-custom=".owl-pagination-custom" data-items="1" data-sm-items="1" data-dots-each="2" data-lg-items="1" data-dots="false" data-arrows="true" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false">
                <div class="owl-slide">
                    <p>"Dove's Eye View has livestreamed three separate weddings for clients of mine, and I am looking forward to using them again in the future. It was completely stress-free on my end with the way they were able to coordinate everything on their own. The final product was nothing short of fantastic!"</p><span>Peggy Mayer</span>
                    <p><a href="https://www.spotlightmeetings.com/"><u style="color: blue;">Spotlight Meetings and Events</u></a></p>
                </div>
                <div class="owl-slide">
                    <p>"Scott and Carla worked with our wedding venue to coordinate everything. All it took from us was a few short phone calls and they had everything they needed to give us a fantastic livestream. Our relatives kept saying how it looked just like Netflix!"</p><span>Katherine and Tyler</span>
                </div>
                <div class="owl-slide">
                    <p>"Two weeks before our wedding we were told that we had to drastically cut down on the number of attendees due to the pandemic. We then made the decision to livestream our wedding online so that our guests could still be there in spirit. We booked Dove's Eye View on very short notice and the results were absolutely amazing! Once we gave them the green light, Scott and Carla took care of everything! They were able to use our existing wedding website to create a custom livestream webpage all on their own that was easy for everyone to use. The were so great and easy to work with and the best part was, our friends and family from all across the country were able to view our wedding live and be there with us in spirit!"</p><span>Grace and Alex</span>
                </div>

            </div>
            <ul class="owl-pagination-custom">
                <li data-owl-item="0"><img src="{{ asset('assets/images/custom/chicago-wedding-and-event-planner.jpg') }}" alt="Wedding planner from Chicago, Illinois with wedding reception ideas." width="61" height="60"/>
                </li>
                <li data-owl-item="1"><img src="{{ asset('assets/images/custom/bourbonnais-bride-and-groom.jpg') }}" alt="Bride and groom from Bourbonnais, Illinois stand in a field smiling for their wedding videography." width="61" height="60"/>
                </li>
                <li data-owl-item="2"><img src="{{ asset('assets/images/custom/kankakee-bride-and-groom-livestream.jpg') }}" alt="Wedding couple from Kankakee, Illinois preparing for their YouTube livestream." width="61" height="60"/>
                </li>
            </ul>
        </div>
    </section>

    <!--Parallax-->
    <section class="section parallax-container" data-parallax-img="{{ asset('assets/images/custom/illinois-wedding-rings.jpg') }}">
        <div class="parallax-content section-xxl context-dark text-center bg-dark-filter">
            <div class="container">
                <div class="row justify-content-md-center">
                        <div class="container wow-outer">
                            <div class="wow fadeInUp">
                                <h3 class="title-decorate">Weddings, Bar/Bat Mitzvahs, Live Music, Fundraisers</br></br>Let’s Create the Best Livestream for You</h3>
                                <a class="offset-top-50 button button-lg button-primary" href="https://www.doveseyeviewstreaming.com/contact">Get in Touch</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
