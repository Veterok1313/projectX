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

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon.ico') }}"/>

    <link rel='stylesheet' href='/css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/swatches-and-photos.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/prettyPhoto.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/jquery.selectBox.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel='stylesheet' href='/css/elegant-icon.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/commerce.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/custom.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/magnific-popup.css' type='text/css' media='all'/>

    @stack('css')


        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmjHlOEzqUhPWgDTcgf5C9yFoKmkld66M&amp;libraries=places"></script>
</head>

<body>
    <div class="offcanvas open">
        <div class="offcanvas-wrap">
            <div class="offcanvas-user clearfix">
                <a class="offcanvas-user-wishlist-link" href="wishlist.html">
                    <i class="fa fa-heart-o"></i> My Wishlist
                </a>
                <a class="offcanvas-user-account-link" href="my-account.html">
                    <i class="fa fa-user"></i> Login
                </a>
            </div>

        </div>
    </div>
    <div id="wrapper" class="wide-wrap">
        <div class="offcanvas-overlay"></div>
        @include('parts.header')
        <div class="content-container no-padding">
            <div class="container-full">
                @section('page_content')
                @show
            </div>
        </div>
        @include('parts.footer')
    </div>


    <script type='text/javascript' src='/js/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='/js/easing.min.js'></script>
    <script type='text/javascript' src='/js/imagesloaded.pkgd.min.js'></script>
    <script type='text/javascript' src='/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='/js/superfish-1.7.4.min.js'></script>
    <script type='text/javascript' src='/js/jquery.appear.min.js'></script>
    <script type='text/javascript' src='/js/script.js'></script>
    <script type='text/javascript' src='/js/swatches-and-photos.js'></script>
    <script type='text/javascript' src='/js/jquery.cookie.min.js'></script>
    <script type='text/javascript' src='/js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='/js/jquery.prettyPhoto.init.min.js'></script>
    <script type='text/javascript' src='/js/jquery.selectBox.min.js'></script>
    <script type='text/javascript' src='/js/jquery.touchSwipe.min.js'></script>
    <script type='text/javascript' src='/js/jquery.transit.min.js'></script>
    <script type='text/javascript' src='/js/jquery.carouFredSel.js'></script>
    <script type='text/javascript' src='/js/jquery.magnific-popup.js'></script>
    <script type='text/javascript' src='/js/isotope.pkgd.min.js'></script>

    <script type='text/javascript' src='/js/extensions/revolution.extension.video.min.js'></script>
    <script type='text/javascript' src='/js/extensions/revolution.extension.slideanims.min.js'></script>
    <script type='text/javascript' src='/js/extensions/revolution.extension.actions.min.js'></script>
    <script type='text/javascript' src='/js/extensions/revolution.extension.layeranimation.min.js'></script>
    <script type='text/javascript' src='/js/extensions/revolution.extension.kenburn.min.js'></script>
    <script type='text/javascript' src='/js/extensions/revolution.extension.navigation.min.js'></script>
    <script type='text/javascript' src='/js/extensions/revolution.extension.migration.min.js'></script>
    <script type='text/javascript' src='/js/extensions/revolution.extension.parallax.min.js'></script>

@stack('js')

</body>

</html>

