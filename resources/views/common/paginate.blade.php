@if ($paginator->hasPages())
    <noindex>
        <div class="result">
            <ul class="pagination">
                @if (!$paginator->onFirstPage())
                    <li class="pagination__item pagination__item_larr">
                        <a aria-label="Previous" class="pagination__link" href="{{ $paginator->previousPageUrl() }}">Предыдущая</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="pagination__item pagination__item_current"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="pagination__item pagination__item_current"><span>{{ $page }}</span></li>
                            @else
                                <li class="pagination__item"><a class="pagination__link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="pagination__item pagination__item_rarr">
                        <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next" class="pagination__link">Следующая</a>
                    </li>
                @endif
            </ul>
            <div class="clear"></div>
        </div>
    </noindex>
@endif

