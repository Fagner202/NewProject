<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu Vertical com Ícones - Roxo</title>
        
        <!-- Link do CSS do Bootstrap 5.3.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Link para o Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Link do CSS -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <!-- Barra horizontal no topo -->
        <div class="top-bar">
            <div>
                <button class="toggle-btn" id="toggleMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
                <span style="margin-left: 20px; font-size: 20px; font-weight: 500;">MinhaMarca</span>
            </div>
            <div class="theme-toggle">
                <i class="fas fa-sun" id="themeIcon"></i> <!-- Ícone de sol/lua para tema -->
            </div>
        </div>

        <!-- Menu de Navegação Vertical -->
        <div class="vertical-nav" id="sidebarMenu">
            <a href="#" class="navbar-brand px-3">MinhaMarca</a>
            <a href="#" class="nav-link active"><i class="fas fa-home"></i> Início</a>
            <a href="#" class="nav-link"><i class="fas fa-user"></i> Sobre</a>
            
            <!-- Dropdown para Serviços -->
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-cogs"></i> Serviços
                </a>
                <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <a href="#">Consultoria</a>
                    <a href="#">Desenvolvimento</a>
                    <a href="#">Manutenção</a>
                </div>
            </div>

            <!-- Dropdown para Eventos -->
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="eventsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-calendar"></i> Eventos
                </a>
                <div class="dropdown-menu" aria-labelledby="eventsDropdown">
                    <a href="{{ route('eventos.index') }}">Todos os eventos</a>
                    <a href="#">Meus eventos</a>
                </div>
            </div>

            <a href="#" class="nav-link"><i class="fas fa-envelope"></i> Contato</a>
        </div>

        <!-- Conteúdo principal -->
        <div class="container mx-auto d-flex justify-content-center" id="mainContent">
            <h2>Conteúdo</h2>
        </div>

        <!-- Scripts do Bootstrap 5.3.3 e JavaScript para controlar o menu e tema -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Script para controlar o tema e o menu -->
        <script src="{{ asset('js/theme.js') }}"></script>
    </body>
</html>
