@if (count($items))
    <nav class="main-menu">
        <ul class="main-menu__items">
            @foreach ($items as $item)
                <li class="main-menu__item">
                    <a href="{!! URL::route($item->slug) !!}">{{$item->title}}</a>
                </li>
            @endforeach
        </ul>
    </nav>
@endif