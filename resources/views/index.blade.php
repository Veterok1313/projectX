@extends('layouts.index')

@section('logo')
    <div class="logo main-logo">
        <a class="logo-back" href="{!! home() !!}">@lang('Вернуться на главную')</a>
        <a class="logo-a" href="{!! home() !!}"></a>
    </div>
@endsection

@section('content')
    <div class="wrapper">
        @include('slider::main')
        @include('parts.sale-section')
    </div>
    <div class="sales-blc">
        <div class="wrapper">
            <h2 class="main-page-title">Хиты продаж</h2>
            <div class="scroll-container">
                <div class="sales-blc__items">
                    <div class="sales-blc__item">
                        <div class="sales-blc__item__pic">
                            <img src="img/content/product1.jpg" alt="product">
                        </div>
                        <div class="sales-blc__item__colors">
                            <span class="sales-blc__item__color sales-blc__item__color_olive"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_brown"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_light-brown"></span>
                        </div>
                        <span class="sales-blc__item__fabric">Factory</span>
                        <h6 class="sales-blc__item__name">Комод «Эльба темная». Очень длинное название в две строки</h6>
                        <div class="sales-blc__item__prices">
                            <span class="price">2300 <span class="price-currency">KGS</span></span>
                            <span class="old-price">2500</span>
                            <a class="basket-link" href="#"></a>
                        </div>
                        <a class="sales-blc__item__mask" href="#"></a>
                        <span class="sale-product"></span>
                    </div>
                    <div class="sales-blc__item">
                        <div class="sales-blc__item__pic">
                            <img src="img/content/product2.jpg" alt="product">
                        </div>
                        <div class="sales-blc__item__colors">
                            <span class="sales-blc__item__color sales-blc__item__color_dark-brown"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_beige"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_light-beige"></span>
                        </div>
                        <span class="sales-blc__item__fabric">Factory</span>
                        <h6 class="sales-blc__item__name">Комод «Эльба темная». Очень длинное название в две строки</h6>
                        <div class="sales-blc__item__prices">
                            <span class="price">2660 <span class="price-currency">KGS</span></span>
                            <a class="basket-link" href="#"></a>
                        </div>
                        <a class="sales-blc__item__mask" href="#"></a>
                        <span class="popular-product">хит продаж</span>
                    </div>
                    <div class="sales-blc__item">
                        <div class="sales-blc__item__pic">
                            <img src="img/content/product3.jpg" alt="product">
                        </div>
                        <div class="sales-blc__item__colors">
                            <span class="sales-blc__item__color sales-blc__item__color_orange"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_white"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_black-red"></span>
                        </div>
                        <span class="sales-blc__item__fabric">Factory</span>
                        <h6 class="sales-blc__item__name">Комод «Эльба темная». Очень длинное название в две строки</h6>
                        <div class="sales-blc__item__prices">
                            <span class="price">9500 <span class="price-currency">KGS</span></span>
                            <span class="old-price">20500</span>
                            <a class="basket-link" href="#"></a>
                        </div>
                        <a class="sales-blc__item__mask" href="#"></a>
                        <span class="sale-product"></span>
                    </div>
                    <div class="sales-blc__item">
                        <div class="sales-blc__item__pic">
                            <img src="img/content/product4.jpg" alt="product">
                        </div>
                        <div class="sales-blc__item__colors">
                            <span class="sales-blc__item__color sales-blc__item__color_dark-brown"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_beige"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_light-beige"></span>
                        </div>
                        <span class="sales-blc__item__fabric">Factory</span>
                        <h6 class="sales-blc__item__name">Комод «Эльба темная». Очень длинное название в две строки</h6>
                        <div class="sales-blc__item__prices">
                            <span class="price">4550 <span class="price-currency">KGS</span></span>
                            <a class="basket-link" href="#"></a>
                        </div>
                        <a class="sales-blc__item__mask" href="#"></a>
                        <span class="new-product">новинка</span>
                    </div>
                    <div class="sales-blc__item">
                        <div class="sales-blc__item__pic">
                            <img src="img/content/product5.jpg" alt="product">
                        </div>
                        <div class="sales-blc__item__colors">
                            <span class="sales-blc__item__color sales-blc__item__color_grey"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_beige"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_light-beige"></span>
                        </div>
                        <span class="sales-blc__item__fabric">Factory</span>
                        <h6 class="sales-blc__item__name">Комод «Эльба темная». Очень длинное название в две строки</h6>
                        <div class="sales-blc__item__prices">
                            <span class="price">37000<span class="price-currency">KGS</span></span>
                            <a class="basket-link" href="#"></a>
                        </div>
                        <a class="sales-blc__item__mask" href="#"></a>
                    </div>
                    <div class="sales-blc__item">
                        <div class="sales-blc__item__pic">
                            <img src="img/content/product4.jpg" alt="product">
                        </div>
                        <div class="sales-blc__item__colors">
                            <span class="sales-blc__item__color sales-blc__item__color_dark-woody"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_beige"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_light-beige"></span>
                        </div>
                        <span class="sales-blc__item__fabric">Factory</span>
                        <h6 class="sales-blc__item__name">Комод «Эльба темная». Очень длинное название в две строки</h6>
                        <div class="sales-blc__item__prices">
                            <span class="price">12600 <span class="price-currency">KGS</span></span>
                            <a class="basket-link" href="#"></a>
                        </div>
                        <a class="sales-blc__item__mask" href="#"></a>
                    </div>
                    <div class="sales-blc__item">
                        <div class="sales-blc__item__pic">
                            <img src="img/content/product7.jpg" alt="product">
                        </div>
                        <div class="sales-blc__item__colors">
                            <span class="sales-blc__item__color sales-blc__item__color_dark-brown"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_beige"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_light-beige"></span>
                        </div>
                        <span class="sales-blc__item__fabric">Factory</span>
                        <h6 class="sales-blc__item__name">Комод «Эльба темная». Очень длинное название в две строки</h6>
                        <div class="sales-blc__item__prices">
                            <span class="price">27530 <span class="price-currency">KGS</span></span>
                            <a class="basket-link" href="#"></a>
                        </div>
                        <a class="sales-blc__item__mask" href="#"></a>
                    </div>
                    <div class="sales-blc__item">
                        <div class="sales-blc__item__pic">
                            <img src="img/content/product8.jpg" alt="product">
                        </div>
                        <div class="sales-blc__item__colors">
                            <span class="sales-blc__item__color sales-blc__item__color_orange"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_white"></span>
                            <span class="sales-blc__item__color sales-blc__item__color_black-red"></span>
                        </div>
                        <span class="sales-blc__item__fabric">Factory</span>
                        <h6 class="sales-blc__item__name">Комод «Эльба темная». Очень длинное название в две строки</h6>
                        <div class="sales-blc__item__prices">
                            <span class="price">102 360 <span class="price-currency">KGS</span></span>
                            <span class="old-price">200 500</span>
                            <a class="basket-link" href="#"></a>
                        </div>
                        <a class="sales-blc__item__mask" href="#"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        @include('news::main')
        <div class="clients-blc">
            <div class="clients-blc__left">
                <h2 class="main-title main-title_clients"><a  class="main-title__link" href="#">Наши клиенты</a></h2>
            </div>
            <div class="clients-blc__right">
                <div class="partners-slider">
                    <div class="partners-slide">
                        <a href="#">
                            <img src="img/content/logo1.jpg" alt="partner logo">
                            <span class="part__vHelper"></span>
                        </a>
                    </div>  <!-- partners-slide -->
                    <div class="partners-slide">
                        <a href="#">
                            <img src="img/content/logo2.jpg" alt="partner logo">
                            <span class="part__vHelper"></span>
                        </a>
                    </div>  <!-- partners-slide -->
                    <div class="partners-slide">
                        <a href="#">
                            <img src="img/content/logo3.jpg" alt="partner logo">
                            <span class="part__vHelper"></span>
                        </a>
                    </div>  <!-- partners-slide -->
                    <div class="partners-slide">
                        <a href="#">
                            <img src="img/content/logo4.jpg" alt="partner logo">
                            <span class="part__vHelper"></span>
                        </a>
                    </div>  <!-- partners-slide -->
                    <div class="partners-slide">
                        <a href="#">
                            <img src="img/content/logo1.jpg" alt="partner logo">
                            <span class="part__vHelper"></span>
                        </a>
                    </div>  <!-- partners-slide -->
                    <div class="partners-slide">
                        <a href="#">
                            <img src="img/content/logo2.jpg" alt="partner logo">
                            <span class="part__vHelper"></span>
                        </a>
                    </div>  <!-- partners-slide -->
                    <div class="partners-slide">
                        <a href="#">
                            <img src="img/content/logo3.jpg" alt="partner logo">
                            <span class="part__vHelper"></span>
                        </a>
                    </div>  <!-- partners-slide -->
                    <div class="partners-slide">
                        <a href="#">
                            <img src="img/content/logo4.jpg" alt="partner logo">
                            <span class="part__vHelper"></span>
                        </a>
                    </div>  <!-- partners-slide -->
                </div>  <!-- partners-slider -->
            </div>
        </div>
    </div>
@endsection
