@extends('layouts.inner')

@section('content')
    <div class="post">
        <div class="post__content">
            <span class="date">{{ \Carbon\Carbon::parse($entity->date)->format('d.m.Y') }}</span>
            @if($entity->image)
                <div class="post__pic">
                    <img src="{{$entity->image_full}}" alt="{{$entity->title}}">
                </div>
            @endif
            {!! $entity->content !!}
        </div>
        <a href="{{route($page->slug)}}" class="post__back">Назад к списку</a>
        @include('parts.social')
    </div>

@endsection