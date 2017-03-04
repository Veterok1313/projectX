@extends('layouts.list')

@section('content')
    @if (count($items))
        @foreach($items as $entity)
            <div class="news__point {{$entity->image?null:'news__point_without-pic'}}">
                @if($entity->image)
                    <div class="news__point__pic">
                        <img src="{{ $entity->image_full }}" alt="{{ $entity->title }}">
                    </div>
                @endif
                <div class="news__point__info">
                    <span class="date">{{ \Carbon\Carbon::parse($entity->date)->format('d.m.Y') }}</span>
                    <h5 class="news__point__title link-dashed">{{ $entity->title }}</h5>
                    <p class="news__point__text">{{ $entity-> preview }}</p>
                    <a class="news__point__mask" href="{{route($page->slug.'.show', $entity)}}"></a>
                </div>
            </div>
        @endforeach
        {{  $items->appends(\Request::except('page'))->links('common.paginate') }}
    @else
        <p>@lang('news::index.no_records')</p>
    @endif

@endsection