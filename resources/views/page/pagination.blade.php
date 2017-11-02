

@if ($paginator->hasPages())
    <div align="center">
        <nobr>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span>&lt;&lt;</span>
            @else
                <a href="{{$fragment_url.\Illuminate\Pagination\Paginator::getNumberPage($paginator->previousPageUrl())}}" rel="prev">&lt;</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span>{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <b>{{ $page }}</b>
                        @else

                            <a href="{{$fragment_url.\Illuminate\Pagination\Paginator::getNumberPage($url)}}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{$fragment_url.\Illuminate\Pagination\Paginator::getNumberPage($paginator->nextPageUrl())}}" rel="next">&gt;</a>
            @else
                <span>&gt;&gt;</span>
            @endif
        </nobr>
    </div>
@endif
