@if (count($items))
    @foreach ($items as $item)
        <a href="{!! URL::route($item->slug) !!}">
            {{$item->title}}
            <i class="fa fa-long-arrow-right"></i>
        </a>
    @endforeach
@endif