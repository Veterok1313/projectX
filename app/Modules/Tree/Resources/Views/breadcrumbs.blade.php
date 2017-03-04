@if ($breadcrumbs)
    <div class="bread-crumbs">
    <ul class="g-clearfix">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$breadcrumb->last)
                <li class="bread-crumbs__item">
                    <a href="{{ $breadcrumb->url }}" class="breadcrumbs__link">{{ $breadcrumb->title }}</a>
                    <div class="bread-crumbs__separator"></div></li>
            @else
                <li class="bread-crumbs__item"><span>{{ $breadcrumb->title }}</span></li>
            @endif
        @endforeach
    </ul>
    </div>
@endif