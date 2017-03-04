<button class="btn-toggle"><span class="mob-span">Меню</span></button>
<nav id="menuVertical" class="menuVertical">
    @if (count($items))
    <ul>
        @foreach ($items as $item)
            @if(!$item->children()->get()->isEmpty())
                <li>
                    <a class="menuVertical__has-submenu" href="{!! URL::route($item->slug) !!}">{{$item->title}}</a>
                    <button class="menuVertical__show-submenu"></button>
                    <ul>
                        @foreach($item->children()->get() as $value)
                            <li><a href="{!! URL::route($value->slug) !!}"> {{$value->title}}</a></li>
                        @endforeach
                        <li><a href="#m1_2">Контакты</a></li>
                    </ul>
                </li>
            @else
                <li><a href="{!! URL::route($item->slug) !!}">{{$item->title}}</a></li>
            @endif
        @endforeach
    </ul>
    @endif
</nav><!--menuVertical-->