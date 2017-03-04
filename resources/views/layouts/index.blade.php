<!DOCTYPE html>
<html class="no-js" lang="{!! lang() !!}">

<head>

    <meta charset="utf-8">

    @hasSection('meta-title')
        <title>@yield('meta-title')</title>
        @elseif(isset($meta->title) && $meta->title)
            <title>{{$meta->title}}</title>
        @endif

        @if(isset($og->site_name) && $og->site_name)
            <meta property="og:site_name" content="{{$og->site_name}}" />
        @endif

        @if(isset($og->image) && $og->image)
            <meta property="og:image" content="{{$og->image}}" />
        @endif

        @if(isset($og->title) && $og->title)
            <meta property="og:title" content="{{$og->title}}" />
        @endif

        @if(isset($og->description) && $og->description)
            <meta property="og:description" content="{{$og->description}}" />
        @endif


        @if(isset($meta->keywords) && $meta->keywords)
            <meta name="keywords" content="{{$meta->keywords}}" />
        @endif

        @if(isset($meta->description) && $meta->description)
            <meta name="description" content="{{$meta->description}}" />
        @endif

        <meta name="format-detection" content="telephone=no">
        <meta name="robots" content="noodp, noydir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta name="theme-color" content="#0073be"/>

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicons/favicon.ico') }}"/>
        <link rel="apple-touch-icon" href="/favicons/apple-touch-icon.png" sizes="180x180">


        <link rel="stylesheet" href="/css/reset.css"/>
        <link rel="stylesheet" href="/css/slick.css">
        <link rel="stylesheet" type="text/css" href="/css/slider-pro.css" media="screen"/>
        <link rel="stylesheet" href="/css/jquery.formstyler.css">
        <link rel="stylesheet" href="/css/basictable.css">
        <link rel="stylesheet" href="/css/social-likes_birman.css">
        <link rel="stylesheet" href="/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="/css/ion.rangeSlider.skinFlat.css">
        <link rel="stylesheet" href="/css/style.css"/>
        <link rel="stylesheet" href="/css/media.css">
        <link rel="stylesheet" href="/css/fonts.css"/>
        <link rel="stylesheet" href="/css/jquery.fancybox.css">

        @stack('css')


        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmjHlOEzqUhPWgDTcgf5C9yFoKmkld66M&amp;libraries=places"></script>
</head>

<body>
<div class="b-page">
    <div class="b-page__wrapper">
        <div class="wrapper">
            @include('parts.header')
            @include('parts.mobile-header')

            <div class="menu-block">
                @include('category::menu')
                @include('search::main')
                <div class="clear"></div>
            </div>
        </div><!--end wrapper -->
        @yield('content')
        <div class="page__buffer"></div>
    </div>

    @include('parts.footer')
</div>


<script src="/js/jquery-1.12.0.js"></script>
<script src="/js/slick.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/jquery.basictable.js"></script>
<script src="/js/social-likes.min.js"></script>
<script src="/js/jquery.formstyler.js"></script>
<script type="text/javascript" src="/js/jquery.sliderPro.min.js"></script>
<script src="/js/ion.rangeSlider.js"></script>
<script src="/js/core.js"></script>

@stack('js')

</body>

</html>

