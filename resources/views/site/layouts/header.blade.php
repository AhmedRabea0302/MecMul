<!DOCTYPE html>
<html>

<head>
    <!-- Meta Tags
    ======================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">

    <!-- Title Name
    ================================-->
    <title>MEC</title>

    <!-- Fave Icons
    ================================-->
    <link rel="shortcut icon" href="{{asset('assets/site')}}/images/fav.png">

    <!-- Google Web Fonts
    ================================================== -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,800">

    <!-- Css Base And Vendor
    ===================================-->
    <link rel="stylesheet" href="{{asset('assets/site')}}/vendor/bootstrap/css/bootstrap-en.css">
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('assets/site')}}/vendor/bootstrap/css/bootstrap-ar.css">
    @endif
    <link rel="stylesheet" href="{{asset('assets/site')}}/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('assets/site')}}/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('assets/site')}}/vendor/wow-master/animate.css">
    <link rel="stylesheet" href="{{asset('assets/site')}}/vendor/Magnific-Popup-master/dist/magnific-popup.css">
    <!-- Site Css
    ====================================-->
    <link rel="stylesheet" href="{{asset('assets/site')}}/css/style.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <header id="header">
        <div class="container">
            <a class="logo" href="{{route('site_home')}}">
                <img alt="logo" src="{{asset('assets/site')}}/images/logo.png">
            </a>
            <button class="btn btn-responsive-nav" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="header-social">
                <li><a href="{{$social_link->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{$social_link->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{$social_link->gmail}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul><!--End header-social-->
        </div><!--End container-->
        <div class="navbar-collapse nav-main-collapse collapse">
            <div class="container">
                <nav class="nav-main">
                    <ul class="nav navbar-nav">
                        <li @if(Request::route()->getName() == 'site_home')class="active" @endif>
                            <a href="{{route('site_home')}}">
                                {{ trans('translate.home') }}
                            </a>
                        </li>
                        <li @if(Request::route()->getName() == 'site_about')class="active" @endif>
                            <a href="{{route('site_about')}}">
                                {{ trans('translate.about') }}
                            </a>
                        </li>
                        <li @if(Request::route()->getName() == 'site_services')class="active" @endif>
                            <a href="{{route('site_services')}}">
                                {{ trans('translate.services') }}
                            </a>
                        </li>
                        <li @if(Request::route()->getName() == 'site_yacht')class="active" @endif>
                            <a href="{{route('site_yacht')}}">
                                {{ trans('translate.yacht') }}
                            </a>
                        </li>
                        <li @if(Request::route()->getName() == 'site_gallery')class="active" @endif>
                            <a href="{{route('site_gallery')}}">
                                {{ trans('translate.gallery') }}
                            </a>
                        </li>

                        <li @if(Request::route()->getName() == 'site_faq')class="active" @endif>
                            <a href="{{route('site_faq')}}">
                                {{ trans('translate.faq') }}
                            </a>
                        </li>
                        <li @if(Request::route()->getName() == 'site_contact')class="active" @endif>
                            <a href="{{route('site_contact')}}">
                                {{ trans('translate.contact') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('site_lang', ['locale' => 'en'])}}">
                                {{ trans('translate.english') }}
                            </a>
                        </li>

                        <li>
                            <a href="{{route('site_lang', ['locale' => 'ar'])}}">
                                {{ trans('translate.arabic') }}
                            </a>
                        </li>
                        <li id="hover-bg"></li>
                    </ul>
                </nav>
            </div><!--End Container-->
        </div>
    </header><!--End Header-->