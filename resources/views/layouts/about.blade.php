@extends('layouts/app')
@section('content')
<section class="section parallax-container breadcrumb-media-content" data-parallax-img="{{ asset('assets/images/custom/bouquet-champagne-bride.jpg') }}">
    <div class="parallax-content breadcrumbs-custom context-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <h2 class="breadcrumbs-custom-title">About Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg bg-default bg-gray-light">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-6 pr-xl-5"><img src="{{ asset('assets/images/custom/chicago-bride-livestream.jpg') }}" alt="A bride in Chicago is wearing a flower crown during her wedding livestream video." width="518" height="430"/>
            </div>
            <div class="col-lg-6">
                <h3>What We Do</h3>
                <div class="text-with-divider">
                    <div class="divider"></div>
                    <h4 class="font-italic text-opacity-black">We offer top-notch personalized livestreaming services for weddings, bar/bat mitzvahs, memorials, and more.</h4>
                </div>
                <p>Most event planners have found that they have to trim down their guest lists for weddings and other events due to current limitations. Now you can share your wedding day, bar/bat mitzvah, or graduation ceremony with all of your loved ones, near and far. Dove's Eye View is a husband and wife team that was married during the pandemic, so we understand the need for a reliable team that produces high-quality livestreams.</p>
                <p>We'll stream your event in 720p HD video resolution in real-time using a 3-camera setup. Our clients have their own custom Dove's Eye View <a href="/sample">webpage</a>, complete with embedded livestream, wedding/event program, and other options.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-6">
                <h3>Who We Are</h3>
                <p>We are a newly married Chicago couple who want to help you bridge the connection between your loved ones and your wedding or other special event. Having planned our wedding through a pandemic, we know how important a support system can be, even from a distance. Our friends and family were able to watch our Chicagoland wedding ceremony livestream from as far away as Denver, Texas, and London, England.</p><br />
                <h4>Carla Chaplinski</h4>
                <p>Librarian by day and creator by night, you can usually find Carla cuddled up on the couch with a cat and a book, moving on her yoga mat, or cross stitching something fun. At Dove’s Eye View she manages our social media, client services, and her biggest role is making sure that we have up to date details of your wedding party, venue, and ceremony in advance.</p><br />
                <h4>Scott Chaplinski</h4>
                <p>Musician and full-time software engineer, Scott likes playing euchre, doing puzzles, and going for an afternoon run. Prior to starting Dove’s Eye View he owned a live trivia company, was a camera operator at WEIU-TV, and won several awards from the National Institute of Standards and Technology for mobile app development. He is currently pursuing his Masters in Computer Science at Illinois Institute of Technology.</p>
            </div>
            <div class="col-lg-6 pr-xl-5"><img src="{{ asset('assets/images/custom/groom-bride-smiling-kankakee.jpg') }}" alt="The owners of Dove's Eye View on their wedding day, smiling and reacting to what is around them in Kankakee, Illinois." width="518" height="650"/>
            </div>
        </div>
    </div>
</section>
@endsection
