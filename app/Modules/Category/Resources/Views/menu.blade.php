@if (count($items))
    <nav class="menu">
        <ul class="menu__items">
            @foreach ($items as $item)
                @if($item->children()->get()->isEmpty())
                    <li class="menu__item">
                        <a class="menu__item__link" href="{!! route('category.index',['id' => $item->id]) !!}">
                            {{$item->title}}
                        </a>
                    </li>
                @else
                    <li class="menu__item menu__item_down">
                        <a class="menu__item__link" href="{!! route('category.index',['id' => $item->id]) !!}">
                            {{$item->title}}
                        </a>
                        <ul class="menu__item__dropdown">
                            @foreach($item->children()->get() as $value)

                                <li class="@if(isset($category) && $category == $value->id) active-dropdown @endif">
                                    <a href="{!! route('category.index',['id' => $value->id]) !!}">
                                        {{$value->title}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif

            @endforeach
        </ul>
    </nav>
@endif