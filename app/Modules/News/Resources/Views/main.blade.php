@if (count($items))
    <div class="news-blc">
        <h2 class="main-page-title"><a  class="main-title__link" href="{{ url('/news') }}">Новости</a></h2>
        <a class="more-news" href="{{ url('/news') }}">все новости</a>
        <div class="news-blc__items">
            @foreach($items as $item)
                <div class="news-blc__item">
                <div class="news-blc__item__left">
                    @if($item->image_thumb)
                        <div class="news-blc__item__left__pic">
                            <img src="{{ $item->image_thumb }}" alt="{{ $item->title }}">
                        </div>
                    @endif
                </div>
                <div class="news-blc__item__right">
                    <span class="date">{{ $item->date }}</span>
                    <h3 class="news-blc__item__title link-dashed">{{$item->title}}</h3>
                    <p class="news-blc__item__descr">{{ nl2br(e($item->preview)) }}</p>
                </div>
                <a class="news-blc__item__mask" href="{!! route('news.show', $item->id) !!}"></a>
            </div>
            @endforeach
        </div>
    </div>
@endif