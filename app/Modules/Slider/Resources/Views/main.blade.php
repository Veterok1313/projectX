@if($slider)
    <div class="slider-main">
        @foreach($slider as $slide)
        <div class="slider-main__slide">
            <a
                href="@if(isset($slide->link)) {{ $slide->link }} @endif"
                @if(isset($slide->link_type))
                    @if($slide->link_type == 'in')
                        target="_self"
                    @else
                        target="_blank"
                    @endif
                @endif
            ><img src="/uploads/slider/full/{{ $slide->image }}" alt="pic"></a>
        </div>
        @endforeach
    </div>
@endif
