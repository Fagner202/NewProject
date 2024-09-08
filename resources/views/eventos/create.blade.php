<x-menu>
    <div class="container mt-4 mb-5"> <!-- Adicionei margem no final para afastar do footer -->
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10"> <!-- Aumentei a largura ocupada no desktop -->
                <div class="card shadow-sm card-theme"> <!-- Adicionada classe card-theme para alternar cores -->
                    <div class="card-header">
                        <h5>Criar Novo Evento</h5>
                    </div>
                    <div class="card-body">
                        <!-- Formulário de criação de evento -->
                        <form action="{{ route('eventos.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do Evento</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="data" class="form-label">Data do Evento</label>
                                <input type="date" class="form-control" id="data" name="data" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="hora_inicio" class="form-label">Hora de Início</label>
                                        <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="hora_fim" class="form-label">Hora de Término</label>
                                        <input type="time" class="form-control" id="hora_fim" name="hora_fim" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="localizacao" class="form-label">Localização</label>
                                <input type="text" class="form-control" id="localizacao" name="localizacao" required>
                            </div>

                            <div class="mb-3">
                                <label for="vagas" class="form-label">Número de Vagas</label>
                                <input type="number" class="form-control" id="vagas" name="vagas" min="1" required>
                            </div>

                            <div class="mb-3">
                                <label for="ativo" class="form-label">Status do Evento</label>
                                <select class="form-select" id="ativo" name="ativo" required>
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Criar Evento</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-menu>
