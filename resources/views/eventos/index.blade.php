<x-menu>
    <div class="container mt-4">
        <div class="row">
            @foreach($events as $event)
                <div class="col-md-4 mb-4">
                    <div class="card card-theme">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->nome }}</h5>
                            <p class="card-text">{{ $event->descricao }}</p>
                            <p><strong>Data:</strong> {{ $event->data }}</p>
                            <p><strong>Hora:</strong> {{ $event->hora_inicio }} - {{ $event->hora_fim }}</p>
                            <p><strong>Local:</strong> {{ $event->localizacao }}</p>
                            <p><strong>Vagas:</strong> {{ $event->vagas }}</p>
                            <p><strong>Status:</strong> 
                                @if($event->ativo) 
                                    <span class="badge bg-success">Ativo</span> 
                                @else 
                                    <span class="badge bg-danger">Inativo</span> 
                                @endif
                            </p>
                            <!-- Botão de exclusão com ícone de lixeira -->
                            <div class="text-end">
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i> Excluir
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-menu>
