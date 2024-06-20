@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Link para a página anterior --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        @else
            <li class="waves-effect"><a href="{{ $paginator->previousPageUrl() }}"><i class="material-icons">chevron_left</i></a></li>
        @endif

        {{-- Elementos de Paginação --}}
        @foreach ($elements as $element)
            {{-- "Três Pontos" Separator --}}
            @if (is_string($element))
                <li class="disabled"><a href="#!">{{ $element }}</a></li>
            @endif

            {{-- Array de Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="#!">{{ $page }}</a></li>
                    @else
                        <li class="waves-effect"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Link para a próxima página --}}
        @if ($paginator->hasMorePages())
            <li class="waves-effect"><a href="{{ $paginator->nextPageUrl() }}"><i class="material-icons">chevron_right</i></a></li>
        @else
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        @endif
    </ul>
@endif

{{-- .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination li.active {
    background-color: #ee6e73;
}

.pagination li a {
    color: #ee6e73;
}

.pagination li.disabled a {
    color: #bdbdbd;
} --}}