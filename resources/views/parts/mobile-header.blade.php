<div class="mobile-items">
    <div class="mobile-menu">
        <div class="btn-menu static">
            @include('tree::mobile-menu')
        </div>
        <div class="btn-enter">
            @include('users::auth.main-mobile')
        </div>
        <div class="btn-basket">
            <a href="#" class="btn-basket__link"><span class="mob-span">50 товаров</span></a>
        </div>
        <div class="btn-city static">
            @include('regions::main-mobile')
        </div>
        <div class="btn-search static">
            @include('search::main-mobile')
        </div>
    </div>
</div>