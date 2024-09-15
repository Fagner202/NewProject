@if ($eventos->hasPages())

    <style>

        body.dark nav ul li a {
            background-color: #2C2F33 !important;
            color: white !important;
        }

        body.dark nav ul li span {
            background-color: #2C2F33 !important;
            color: white !important;
        }
    </style>

    <nav>
        <ul class="pagination justify-content-center">
            {{-- Link para a página anterior --}}
            @if ($eventos->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">Anterior</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $eventos->previousPageUrl() }}" rel="prev">Anterior</a>
                </li>
            @endif

            {{-- Links das páginas numéricas --}}
            @foreach ($eventos->getUrlRange(1, $eventos->lastPage()) as $page => $url)
                @if ($page == $eventos->currentPage())
                    <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            {{-- Link para a próxima página --}}
            @if ($eventos->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $eventos->nextPageUrl() }}" rel="next">Próximo</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">Próximo</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
