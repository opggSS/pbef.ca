<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta tags reserved for SEO -->
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords"  content="" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Full page slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fullpage.css')}}" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    @yield('css')
    <title>
        @if($current_page=='home')
        @elseif($current_page=='aboutus')About Us -
        @elseif($current_page=='projects')Projects -
        @elseif($current_page=='gallery')Gallery -
        @elseif($current_page=='publicinfo')Public Info -
        @elseif($current_page=='donate')Donate -
        @endif Prosperous Badminton Education Foundation
    </title>
</head>
<body>
<div id="menubar" class="row">
    <div class="col-2 mt-2 mt-sm-0" id="menu-logo">
        @if($current_page=='home')
        <a href="{{url('/')}}">
            <img src="{{url('/images/foundation-logo.png')}}" alt="logo" width="150">
        </a>
        @elseif($current_page=='aboutus')
            <a id="back-btn" class="mt-2 mt-lg-0 ml-2 ml-md-3 ml-lg-0 d-inline-block" href="#">< </a><a class="d-none d-lg-inline-block" href="{{url('/')}}">Home</a > <span class="d-none d-lg-inline-block">| About Us</span>
        @elseif($current_page=='projects')
            <a id="back-btn" class="mt-2 mt-lg-0 ml-2 ml-md-3 ml-lg-0 d-inline-block" href="#">< </a><a class="d-none d-lg-inline-block" href="{{url('/')}}">Home</a > <span class="d-none d-lg-inline-block">| Projects</span>
        @elseif($current_page=='gallery')
            <a id="back-btn" class="mt-2 mt-lg-0 ml-2 ml-md-3 ml-lg-0 d-inline-block" href="#">< </a><a class="d-none d-lg-inline-block" href="{{url('/')}}">Home</a > <span class="d-none d-lg-inline-block">| Gallery</span>
        @elseif($current_page=='publicinfo')
            <a id="back-btn" class="mt-2 mt-lg-0 ml-2 ml-md-3 ml-lg-0 d-inline-block" href="#">< </a><a class="d-none d-lg-inline-block" href="{{url('/')}}">Home</a > <span class="d-none d-lg-inline-block">| Public Info</span>
        @elseif($current_page=='donate')
            <a id="back-btn" class="mt-2 mt-lg-0 ml-2 ml-md-3 ml-lg-0 d-inline-block" href="#">< </a><a class="d-none d-lg-inline-block" href="{{url('/')}}">Home</a > <span class="d-none d-lg-inline-block">| Donate</span>
        @endif
    </div>
    @if($current_page !='donate')
    <div class="col-10 d-none d-lg-inline-block">
        <ul class="nav nav-tabs">
            <li><a @if($current_page=='home') class="active" @endif href="{{url('/')}}">HOME</a></li>
            <li class="dropdown"><a @if($current_page=='aboutus') class="active" @endif data-toggle="dropdown" href="#" onclick="switchActive(this)">ABOUT US</a>
                <ul class="dropdown-menu">
                    <li class="mt-2"><a href="{{url('/about_us')}}">OUR JOURNEY</a></li>
                    <li class="mt-2"><a href="{{url('/about_us')}}">CONTACT US</a></li>
                </ul>
            </li>
            <li class="dropdown"><a data-toggle="dropdown" href="#" onclick="switchActive(this)">PROJECTS</a>
                <ul class="dropdown-menu">
                    <li class="mt-2"><a href="{{url('/projects')}}">SCHOOL</a></li>
                    <li class="mt-2"><a href="{{url('/projects')}}">COMMUNITY</a></li>
                </ul>
            </li>
            <li><a @if($current_page=='gallery') class="active" @endif href="{{url('/gallery')}}">GALLERY</a></li>
            <li><a @if($current_page=='publicinfo') class="active" @endif href="{{url('/public_info')}}">PUBLIC INFO</a></li>
            <li><a id="menu-donate" href="{{url('/donate')}}">DONATE</a></li>
        </ul>
    </div>
    <div class="offset-4 offset-sm-6 col-2 d-inline-block d-lg-none mt-3">
        <a id="menu-donate-mobile" href="{{url('/donate')}}">DONATE</a>
    </div>
    @else
        <div class="col-10 d-none d-lg-inline-block"></div>
        <div class="offset-4 offset-sm-6 col-2 d-inline-block d-lg-none mt-3"></div>
    @endif
    <div class="col-2 offset-1 offset-sm-0 d-inline-block d-lg-none">
        <nav class="navbar pt-4">
            <button class="nav-toggler" type="button" data-toggle="collapse" data-target="#mobile-nav-collapse" width="30">
                <img src="{{url('/images/nav-hamburger.png')}}" alt="btn" width="30">
            </button>
        </nav>
    </div>
</div>
<div id="mobile-menubar" class="container position-fixed w-100 bg-white">
    <div class="col-12 d-block d-lg-none text-center d-lg-none">
        <ul class="collapse d-lg-none p-0" id="mobile-nav-collapse">
            <li class="p-3"><a id="menu-active" href="{{url('/')}}">HOME</a></li>
            <li class="p-3"><a class="toggle-btn" data-toggle="collapse" data-target="#about-collapse" href="#" onclick="addActive(this)">ABOUT US</a></li>
            <ul class="collapse sub-collapse p-0" id="about-collapse">
                <li class="p-3"><a href="{{url('/about_us')}}">OUR JOURNEY</a></li>
                <li class="p-3"><a href="{{url('/about_us')}}">CONTACT US</a></li>
            </ul>
            <li class="toggle-btn p-3"><a class="toggle-btn" data-toggle="collapse" data-target="#projects-collapse" href="#" onclick="addActive(this)">PROJECTS</a></li>
            <ul class="collapse sub-collapse p-0" id="projects-collapse">
                <li class="p-3"><a href="{{url('/projects')}}">SCHOOL</a></li>
                <li class="p-3"><a href="{{url('/projects')}}">COMMUNITY</a></li>
            </ul>
            <li class="p-3"><a href="{{url('/gallery')}}">GALLERY</a></li>
            <li class="p-3"><a href="{{url('/public_info')}}">PUBLIC INFO</a></li>
            <!-- <li class="p-3"><a id="menu-donate" href="donate.html">DONATE</a></li> -->
        </ul>
    </div>
</div>
<div id="socialmedia">
    <ul>
        <li><a href=""><img src="{{url('/images/foundation-ins-logo.png')}}" alt="ins logo"></a></li>
        <li><a href=""><img src="{{url('/images/foundation-fb-logo.png')}}" alt="facebook logo"></a></li>
        <li><a href=""><img src="{{url('/images/foundation-twitter-logo.png')}}" alt="twitter logo"></a></li>
    </ul>
</div>