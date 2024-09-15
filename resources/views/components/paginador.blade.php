@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center">
            {{-- Link para a página anterior --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">Anterior</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Anterior</a>
                </li>
            @endif

            {{-- Links das páginas numéricas --}}
            @foreach ($paginator->links() as $link)
                {{-- "Três pontinhos" indicando intervalo de páginas --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $link }}</span></li>
                @endif

                {{-- Links das páginas numéricas --}}
                @if (is_array($link))
                    @foreach ($link as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Link para a próxima página --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Próximo</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">Próximo</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
