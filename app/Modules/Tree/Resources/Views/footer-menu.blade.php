
@if (count($items))
    <ul class="footer__left__list">
        @foreach ($items as $item)
        <li class="footer__left__list__item"><a class="link-dashed" href="{!! URL::route($item->slug) !!}">{{$item->title}}</a></li>
        @endforeach
    </ul>
@endif