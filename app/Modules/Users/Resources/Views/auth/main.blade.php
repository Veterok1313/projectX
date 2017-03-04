@if(Auth::check())
    <a href="{{ route('user.personal') }}"> {{ Auth::user()->name }}</a>
    <a href="{{ route('user.logout') }}"> @lang('users::index.logout')</a>
@else
    <a class="header-enter-link header-enter-link_enter modalbox fancybox.ajax" href="{{ route('user.login') }}">
        @lang('users::index.signIn')
    </a>
    <a class="header-enter-link" href="{{ route('user.register') }}">
        @lang('users::index.signUp')
    </a>
@endif

