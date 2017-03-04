<header class="header">

    @hasSection('logo')
       @yield('logo')
    @else
        <div class="logo">
            <a class="logo-back" href="{!! home() !!}">Вернуться на главную</a>
            <a class="logo-a" href="{!! home() !!}"></a>
        </div>
    @endif

    <div class="header__left">
        <div class="header__left__top">
            @include('tree::menu')
            <div class="header-info">
                <div class="header-enter-links">
                   @include('users::auth.main')
                </div>
                <div class="header-info__region">
                    <label for="region">Регион:</label>
                    <select  name="region" id="region">
                        <option>Нижневартовск</option>
                        <option>Длинное название</option>
                        <option>блаблаблаблаблаблаблабла</option>
                        <option>Ош</option>
                        <option>Джалал-Абад</option>
                    </select>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header__left__bot">
            <div class="header__left__bot__item header__left__bot__item_slogan">
                {!! widget('slogan') !!}
            </div>
            <div class="header__left__bot__item">
                <span class="phone phone_icon">{{ widget('header.feedback.phone') }}</span>
                <a class="modalbox phone-info" href="#feedback">@lang('index.feedback')</a>
            </div>
            <div class="header__left__bot__item">
                <span class="phone">{{ widget('header.affiliates.phone') }}</span>
                <a class="phone-info" href="#">@lang('index.affiliates')</a>
            </div>
            <div class="header__left__bot__item header__left__bot__item_basket">
                <span class="basket_top">В корзине<b><a href="#">4 товара</a></b></span>
                <span class="basket_top">на сумму:<b>15 600 KGS</b></span>
            </div>
        </div>
    </div>  <!-- header__left -->
    <div class="clear"></div>
</header>