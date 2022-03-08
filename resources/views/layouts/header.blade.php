<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>{{ $data->title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="{{ $data->og_title }}">
    <meta property="og:description" content="{{ $data->og_description }}">
    <meta property="og:image" content="{{ $data->og_image }}">
    <meta property="og:url" content="{{ $data->og_url }}">
    <meta property="description" content="{{ $data->description }}">
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
                                    <li class="rd-nav-item @if ($data->route === 'home') active @endif"><a class="rd-nav-link" href="/">Home</a>
                                    </li>
                                    <li class="rd-nav-item @if ($data->route === 'about') active @endif"><a class="rd-nav-link" href="/about">About Us</a>
                                    </li>
                                    <li class="rd-nav-item @if ($data->route === 'faq') active @endif"><a class="rd-nav-link" href="/faq">FAQ</a>
                                    </li>
                                    <li class="rd-nav-item @if ($data->route === 'contact') active @endif"><a class="rd-nav-link" href="/contact">Contact</a>
                                    </li>
                                    <li class="rd-nav-item @if ($data->route === 'service') active @endif"><a class="rd-nav-link" href="/service">Our Service</a>
                                    </li>
                                    <li class="rd-nav-item @if ($data->route === 'blog') active @endif"><a class="rd-nav-link" href="/blog">Blog</a>
                                    </li>
                                </ul><a class="button button-primary" href="/highlights">Sample Livestream Footage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
