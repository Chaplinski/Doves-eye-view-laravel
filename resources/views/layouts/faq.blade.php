@extends('layouts/app')
@section('content')
    <section class="section parallax-container breadcrumb-media-content" data-parallax-img="{{ asset('assets/images/custom/livestream-setup-starved-rock-illinois.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 justify-content-lg-between">
                <div class="col-lg-6">
                    <h3 class="blog-post-title">FAQ</h3>
                    <div class="blog-post-content">

                        <button class="accordion">What is the difference between a wedding livestreaming service and a wedding videographer?</button>
                        <div class="panel">
                            <p>A wedding livestreaming service provides you with the ability to share your wedding day with your loved ones that are unable to attend. Dove's Eye View is Chicago's best livestreaming service because we livestream your wedding ceremony in HD from 3 or more camera angles. You will immediately have a copy of your wedding that you can share with loved ones and watch over and over again.
                                <br /><br />A wedding videographer's primary roles include providing the couple with a highlight reel of their wedding day and a video of the ceremony. In Chicagoland it typically takes a professional wedding videographer 6-12 weeks before you have any footage of your wedding.
                                <br /><br />There’s a lot more to consider when comparing wedding videography and wedding livestreaming, so we made a blog post you can find <a href="/blog/usandthem">here</a>.</p>
                        </div>

                        <button class="accordion">I see that you livestream weddings and other events in Chicago and the Chicago suburbs. Are you willing to travel outside of Chicagoland?</button>
                        <div class="panel">
                            <p>When we say "Chicagoland", we are including areas like Joliet, Kankakee, Downers Grove, Naperville, Schaumburg, and more. If you are a little out of reach from those areas then drop us a line on our <a href="/contact">contact page</a> and we'd be happy to see if we can make the distance work.
                        </div>

                        <button class="accordion">Can I book on short notice?</button>
                        <div class="panel">
                            <p>It would be an honor to be a part of your wedding or special event and we will do our best to fit you into our schedule.</p>
                        </div>

                        <button class="accordion">Some of my guests are not tech savvy. Will it be easy for them to access my livestream?</button>
                        <div class="panel">
                            <p>One of the main reasons Dove's Eye View is the best platform to stream a wedding is because watching your marriage livestream is as easy as clicking a link and pushing play on a video player. As long as your guests can do those two things then there should be no trouble. Remote guests do not need to download any sort of livestream wedding app and they do not need Facebook or any other social media account to watch your wedding livestream. Dove's Eye View is so easy that even Grandma can do it!
                                <br /><br />Check out a sample wedding/event livestream page <a href="/sample">here</a>.</p>
                        </div>

                        <button class="accordion">Do I get to keep a copy of my wedding/event livestream video?</button>
                        <div class="panel">
                            <p>Of course! We livestream your wedding or other event in real time, and then afterwards we share with you a link where you can download a copy of your recorded livestream to keep forever. Your personalized event livestream page also stays online for 2 months after the event date, so you and your remote guests can watch your wedding, bar/bat mitzvah, or memorial service over and over.</p>
                        </div>

                        <button class="accordion">What video resolution do you livestream in?</button>
                        <div class="panel">
                            <p>We livestream weddings, bar/bat mitzvahs, graduations ceremonies, and more in 720p HD video resolution.</p>
                        </div>
                        <button class="accordion">What happens if the internet connection drops?</button>
                        <div class="panel">
                            <p>Although rare, internet connection issues do happen. If the internet drops for a short period of time then in most situations the livestream will resume when the internet does. Unfortunately, remote guests will have missed the part of the wedding/event livestream when the internet was down.<br /><br />However, we record every livestream to a hard drive as we are filming, and if any internet issues come up we upload a high quality video immediately after the event or ceremony for your guests to enjoy. Because storing a video on a hard drive does not rely on an internet connection, this video will include the parts of the livestream that your remote guests missed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5"><img src="{{ asset('assets/images/custom/chicago-wedding-rings.jpg') }}" alt="Chicago couple shows off their bouquet and wedding rings on their wedding day." width="518" height="569"/>
                </div>
            </div>
        </div>
    </section>
@endsection
