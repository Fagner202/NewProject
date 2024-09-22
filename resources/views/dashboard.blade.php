<x-menu>
    <div class="container mt-4">
        <p class="lead">Este sistema foi desenvolvido para facilitar o gerenciamento e a participação em eventos, oferecendo uma plataforma integrada e intuitiva. Abaixo estão as principais funcionalidades disponíveis no sistema:</p>
    
        <h2 class="mt-5">Funcionalidades Principais</h2>
    
        <h3 class="mt-4">Cadastro e Login de Usuários</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Os usuários podem se registrar e fazer login na plataforma.</li>
            <li class="list-group-item">Implementação de roles e permissões para diferentes tipos de usuários (ex: admin, organizador, participante).</li>
        </ul>
    
        <h3 class="mt-4">Gerenciamento de Eventos</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Possibilidade de criar, ler, atualizar e deletar eventos (CRUD).</li>
            <li class="list-group-item">Os eventos possuem detalhes como nome, data, localização, descrição e imagem.</li>
        </ul>
    
        <h3 class="mt-4">Inscrições e Participantes</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Usuários podem se inscrever em eventos de seu interesse.</li>
            <li class="list-group-item">Lista de participantes é gerada para cada evento.</li>
            <li class="list-group-item">Possibilidade de cancelar a inscrição de eventos.</li>
        </ul>
    
        <h3 class="mt-4">Administração de Eventos</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Administradores podem gerenciar todos os eventos e usuários na plataforma.</li>
            <li class="list-group-item">Funções de adicionar, editar eventos e visualizar estatísticas de inscrições.</li>
        </ul>
    
        <h3 class="mt-4">Sistema de Notificações</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Envio de e-mails de confirmação para os inscritos nos eventos.</li>
            <li class="list-group-item">Notificações para os participantes sobre mudanças importantes no evento.</li>
        </ul>
    
        <h3 class="mt-4">Calendário de Eventos</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Visualização de eventos em um calendário interativo, com filtragem por data, localização ou categoria.</li>
        </ul>
    
        <h3 class="mt-4">Feedback e Avaliações</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Participantes podem deixar feedback e avaliações sobre os eventos que participaram.</li>
            <li class="list-group-item">Média de avaliações é exibida para cada evento.</li>
        </ul>
    
        <h2 class="mt-5">Recursos Adicionais</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Busca e Filtros Avançados:</strong> Permitir aos usuários buscar eventos por palavras-chave, categorias, data, etc.</li>
            <li class="list-group-item"><strong>Integração com APIs:</strong> Como Google Maps para localização de eventos ou APIs de pagamento para eventos pagos.</li>
            <li class="list-group-item"><strong>Design Responsivo:</strong> Utilização de frameworks de front-end como Bootstrap ou Tailwind CSS para garantir acessibilidade em dispositivos móveis.</li>
        </ul>
    
        <h2 class="mt-5">Tecnologias e Conceitos Aplicados</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Laravel Eloquent:</strong> Gerenciamento de banco de dados e relações entre modelos.</li>
            <li class="list-group-item"><strong>Autenticação e Autorização:</strong> Controle de acesso e gerenciamento de permissões.</li>
            <li class="list-group-item"><strong>Middleware:</strong> Proteção de rotas e controle de acesso a recursos.</li>
            <li class="list-group-item"><strong>Livewire ou Inertia.js:</strong> Interatividade e atualizações em tempo real sem recarregar a página.</li>
            <li class="list-group-item"><strong>Testes Automatizados:</strong> Garantia da qualidade do código através de testes automatizados.</li>
        </ul>
    
        <p class="mt-5 text-muted">Aproveite a plataforma para organizar e participar de eventos com facilidade e eficiência!</p>
    </div>
</x-menu>