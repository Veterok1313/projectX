<header class="header-container header-type-classic header-navbar-classic header-scroll-resize">
    <div class="topbar">
        <div class="container topbar-wap">
            <div class="row">
                <div class="col-sm-6 col-left-topbar">
                    <div class="left-topbar">
                        @include('tree::menu')
                    </div>
                </div>
                <div class="col-sm-6 col-right-topbar">
                    <div class="right-topbar">
                        <div class="user-login">
                            <ul class="nav top-nav">
                                <li><a data-rel="loginModal" href="{{ route('user.login') }}"> Вход </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-container">
        <div class="navbar navbar-default navbar-scroll-fixed">
            <div class="navbar-default-wrap">
                <div class="container">
                    <div class="row">
                        <div class="navbar-default-col">
                            <div class="navbar-wrap">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar bar-top"></span>
                                        <span class="icon-bar bar-middle"></span>
                                        <span class="icon-bar bar-bottom"></span>
                                    </button>
                                    <a class="navbar-search-button search-icon-mobile" href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a class="cart-icon-mobile" href="#">
                                        <i class="elegant_icon_bag"></i><span>0</span>
                                    </a>

                                </div>
                                <nav class="collapse navbar-collapse primary-navbar-collapse">
                                    <ul class="nav navbar-nav primary-nav">
                                        <li class="current-menu-item menu-item-has-children dropdown">
                                            <a href="./" class="dropdown-hover">
                                                <span class="underline">Смартфоны</span> <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Xiaomi</a></li>
                                                <li><a href="#">Samsung</a></li>
                                                <li><a href="#">Lenovo</a></li>

                                            </ul>
                                        </li>

                                        <li><a href="collection.html"><span class="underline">Чехлы и защитные стекла</span></a></li>
                                        <li class="menu-item-has-children dropdown">
                                            <a href="#" class="dropdown-hover">
                                                <span class="underline">Аксессуары</span> <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-default.html">Наушники</a></li>
                                                <li><a href="blog-center.html">USB-кабели</a></li>
                                                <li><a href="blog-masonry.html">Флеш и SD-карты</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children dropdown">
                                            <a href="#" class="dropdown-hover">
                                                <span class="underline">Зарядные устройства</span> <span class="caret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="header-right">
                                    <div class="navbar-minicart navbar-minicart-topbar">
                                        <div class="navbar-minicart">
                                            <a class="minicart-link" href="#">
                                                <span class="minicart-icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>0</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>