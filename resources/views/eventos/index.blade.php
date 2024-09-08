<x-menu>
    {{-- <div class="container mt-4">
        <div class="row">
            @foreach($events as $event)
            <div class="col-md-4 mb-4">
                <div class="card card-theme">
                    <img src="{{ $event->imagem }}" class="card-img-top" alt="{{ $event->nome }}">
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
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}

    <style>
        table {
            text-align: center
        }
    </style>

    <div class="container mt-4">
        <table id="event-table" class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Hora Início</th>
                    <th>Hora Fim</th>
                    <th>Localização</th>
                    <th>Vagas</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->nome }}</td>
                    <td>{{ $event->descricao }}</td>
                    <td>{{ $event->data }}</td>
                    <td>{{ $event->hora_inicio }}</td>
                    <td>{{ $event->hora_fim }}</td>
                    <td>{{ $event->localizacao }}</td>
                    <td>{{ $event->vagas }}</td>
                    <td>
                        @if($event->ativo) 
                            <span class="badge bg-success">Ativo</span> 
                        @else 
                            <span class="badge bg-danger">Inativo</span> 
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-menu>
