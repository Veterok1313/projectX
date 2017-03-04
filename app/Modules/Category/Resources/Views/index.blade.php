@extends('layouts.list')

@section('content')

    @if(isset($entity) && $entity->banner)
    <div class="banner">
        <img src="{{ $entity->imagePath('full', 'banner') }}" alt="{{ $entity->title }}">
    </div>
    @endif

    <h1 class="page-title">{{ $entity->title }}</h1>

    {!! $entity->content !!}

    <div class="scroll-container">
        <div class="sales-blc__items sales-blc__items_inner">
            @foreach($items as $item)
            <div class="sales-blc__item">
                <div class="category__item__pic">
                    @if($item->imagePath('thumb') )
                        <img src="{{ $item->imagePath('thumb') }}" alt="{{ $item->title }}">
                    @else
                        <img src="{{ asset('/img/nophoto.png') }}" alt="{{ $item->title }}">
                    @endif
                </div>
                <h6 class="category__item__name">{{ $item->title }}</h6>
                <div class="category-result">Всего серий: <span>7</span></div>
                <a class="sales-blc__item__mask" href="{{ route('category.index', ['id' => $item->id]) }}"></a>
            </div>
            @endforeach
        </div>
    </div>
@endsection