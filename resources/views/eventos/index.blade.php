<x-menu>
    <div class="container mt-4">
        <!-- Botão para adicionar novo evento -->
        <div class="row mb-4">
            <div class="col-md-12 text-end">
                <a href="{{ route('eventos.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Adicionar Evento
                </a>
            </div>
        </div>

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
            
                        <!-- Alinhar os botões "Excluir" e "Editar" -->
                        <div class="d-flex justify-content-end">
                            <!-- Botão de exclusão com ícone de lixeira -->
                            <button class="btn btn-danger me-2" id="sendAjax" onclick="myFunction('{{ $event->id }}')">
                                <i class="fas fa-trash-alt"></i> Excluir
                            </button>
            
                            <!-- Botão de editar com ícone de editar -->
                            <a href="{{ route('eventos.edit', $event->id) }}" class="btn btn-warning">
                                <i class="fas fa-pencil-alt"></i> Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
            @endforeach
        </div>
    </div>
</x-menu>

<script>
    function myFunction(eventId) {
        if (confirm('Tem certeza de que deseja excluir este evento?')) {
            fetch(`/eventos/${eventId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Evento excluído com sucesso!');
                    location.reload(); // Recarrega a página para refletir a exclusão
                } else {
                    alert('Ocorreu um erro ao tentar excluir o evento.');
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                alert('Ocorreu um erro ao tentar excluir o evento.');
            });
        }
    }
</script>
