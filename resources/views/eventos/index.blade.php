<x-menu>  
    <div class="container mt-4">

        <!-- Formulário de Filtro -->
        <form action="{{ route('eventos.index') }}" method="GET" class="mb-4 p-3 bg-light rounded shadow-sm">
            <div class="row g-3">
                <!-- Filtro por Nome -->
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" name="nome" class="form-control" placeholder="Nome do evento" value="{{ request('nome') }}">
                    </div>
                </div>
        
                <!-- Filtro por Data -->
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-calendar-alt"></i>
                        </span>
                        <input type="date" name="data" class="form-control" value="{{ request('data') }}">
                    </div>
                </div>
        
                <!-- Filtro por Localização -->
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        <input type="text" name="localizacao" class="form-control" placeholder="Localização" value="{{ request('localizacao') }}">
                    </div>
                </div>
        
                <!-- Botões de Pesquisa e Limpar -->
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i> Pesquisar
                    </button>
                    <a href="{{ route('eventos.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Limpar Filtros
                    </a>
                </div>
            </div>
        </form>
        

        <!-- Lista de Eventos -->

        <div class="row">
            @foreach($eventos as $index => $evento)
                <div class="col-md-6 mb-4">
                    <div class="card w-100">
                        <div class="card-header text-center">
                            <h3>{{ $evento->nome }}</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Descrição:</strong> {{ $evento->descricao }}
                            </p>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Data</th>
                                        <td>{{ $evento->data }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Hora de Início</th>
                                        <td>{{ $evento->hora_inicio }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Hora de Fim</th>
                                        <td>{{ $evento->hora_fim }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Localização</th>
                                        <td>{{ $evento->localizacao }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Vagas</th>
                                        <td>{{ number_format($evento->vagas, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td>{{ $evento->ativo ? 'Ativo' : 'Inativo' }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Atualizado em</th>
                                        <td>{{ $evento->updated_at }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-right">
                            <form action="{{ route('eventos.destroy', $evento->id) }} "method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
    
                @if(($index + 1) % 2 == 0)
                    </div><div class="row">
                @endif
            @endforeach
        </div>
    </div>
</x-menu>
