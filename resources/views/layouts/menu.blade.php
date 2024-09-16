<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <title>Menu Vertical com Ícones - Roxo</title> --}}
        <title>{{ config('app.name') }}</title>
        
        <!-- Link do CSS do Bootstrap 5.3.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Link para o Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Link do CSS -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-dark.css') }}">

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
            <a href="#" class="nav-link active"><i class="fas fa-home"></i>Início</a>
            <a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-user"></i>Usuários</a>
            
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
                    <a href="{{ route('eventos.meus') }}">Meus eventos</a>
                </div>
            </div>

            <a href="#" class="nav-link"><i class="fas fa-envelope"></i> Contato</a>
        </div>

        <!-- Conteúdo principal -->
        <div class="container mx-auto d-flex justify-content-center w-100" id="mainContent">
            <!-- Aqui é onde o conteúdo passado para o componente será exibido -->
            {{ $slot }}
        </div>

        <!-- Rodapé --> 
        <!-- Rodapé -->
<footer class="bg-dark text-white text-center text-lg-start mt-5">
    <div class="container p-4">
        <div class="row">
            <!-- Sobre a Empresa -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">MinhaMarca</h5>
                <p>
                    Nós fornecemos serviços de consultoria, desenvolvimento e manutenção. Nosso objetivo é oferecer as melhores soluções tecnológicas para nossos clientes.
                </p>
            </div>

            <!-- Links Rápidos -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#" class="text-white">Início</a>
                    </li>
                    <li>
                        <a href="#" class="text-white">Sobre</a>
                    </li>
                    <li>
                        <a href="{{ route('eventos.index') }}" class="text-white">Eventos</a>
                    </li>
                    <li>
                        <a href="#" class="text-white">Contato</a>
                    </li>
                </ul>
            </div>

            <!-- Redes Sociais -->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Siga-nos</h5>
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3 bg-black">
        © 2024 MinhaMarca. Todos os direitos reservados.
    </div>
</footer>

        <!-- Scripts do Bootstrap 5.3.3 e JavaScript para controlar o menu e tema -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Script para controlar o tema e o menu -->
        <script src="{{ asset('js/theme.js') }}"></script>
    </body>
</html>
