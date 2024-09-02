<div class="container mt-4">
    <div class="row">
        @foreach($items as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $item->imagem }}" class="card-img-top" alt="{{ $item->nome }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nome }}</h5>
                        <p class="card-text">{{ $item->descricao }}</p>
                        <p class="card-text"><strong>Data:</strong> {{ $item->data }}</p>
                        <p class="card-text"><strong>Hora Início:</strong> {{ $item->hora_inicio }}</p>
                        <p class="card-text"><strong>Hora Fim:</strong> {{ $item->hora_fim }}</p>
                        <p class="card-text"><strong>Localização:</strong> {{ $item->localizacao }}</p>
                        <p class="card-text"><strong>Vagas:</strong> {{ $item->vagas }}</p>
                        <p class="card-text"><strong>Status:</strong> {{ $item->ativo ? 'Ativo' : 'Inativo' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
