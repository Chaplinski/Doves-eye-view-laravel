@php
    $route = request()->path();
@endphp

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CPlayfair+Display:400,400i,700,900%7CPoppins:300">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ asset('assets/images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a href="index.html"><img class="brand-logo-light" src="{{ asset('assets/images/logo-light-181x41.png') }}" alt="" width="181" height="41"/></a></div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About</a>
                                        <!-- RD Navbar Dropdown-->
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="how-we-work.html">How We Work</a></li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="our-team.html">Our team</a></li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="team-member.html">Team Member</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Services</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Portfolio</a>
                                        <!-- RD Navbar Dropdown-->
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="gallery-1.html">Gallery 1</a></li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="gallery-2.html">Gallery 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                                        <!-- RD Navbar Megamenu-->
                                        <ul class="rd-menu rd-navbar-megamenu">
                                            <li class="rd-megamenu-item">
                                                <h6 class="rd-megamenu-title">Pages 1</h6>
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="timers-&amp;-counters.html">Timers &amp; Counters</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                                                </ul>
                                            </li>
                                            <li class="rd-megamenu-item">
                                                <h6 class="rd-megamenu-title">Pages 2</h6>
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-system.html">Grid system</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icon-lists.html">Icon Lists</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy policy</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">Coming Soon</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search results</a></li>
                                                </ul>
                                            </li>
                                            <li class="rd-megamenu-item">
                                                <h6 class="rd-megamenu-title">Pages 3</h6>
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="single-blog-post.html">Single Blog Post</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="news.html">News</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="news-2.html">News 2</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="pricing.html">Pricing</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                                    </li>
                                </ul><a class="button button-primary" href="#">make an appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
