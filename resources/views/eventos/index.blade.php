<x-menu>  
    <div class="container mt-4">
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
