<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Custom Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

        <style>
            html, body {
                height: 100%;
                margin: 0;
            }

            body {
                display: flex;
                flex-direction: column;
                transition: background-color 0.3s, color 0.3s;
            }

            body.light-mode {
                background-color: #ffffff;
                color: #000000;
            }

            body.dark-mode {
                background-color: #121212;
                color: #ffffff;
            }

            /* Cartões */
            .card-theme {
                transition: background-color 0.3s, color 0.3s;
            }

            /* Estilo para o modo claro */
            body.light-mode .card-theme {
                background-color: #ffffff;
                color: #000000;
                border: 1px solid #dee2e6;
            }

            /* Estilo para o modo escuro */
            body.dark-mode .card-theme {
                background-color: #333333;
                color: #ffffff;
                border: 1px solid #444444;
            }

            /* Adapte as classes do Bootstrap conforme necessário */
            .navbar-light-mode {
                background-color: #f8f9fa;
                color: #000000;
            }

            .navbar-dark-mode {
                background-color: #343a40;
                color: #ffffff;
            }

            .content {
                flex: 1;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-primary bg-primary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('eventos.index') }}">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Usúario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin</a>
                        </li>
                    </ul>
                    <!-- Container para o ícone, alinhado à direita -->
                    <div class="d-flex ms-auto">
                        <button id="theme-toggle" class="btn btn-outline-light ms-2">
                            <i class="fa-solid fa-moon"></i> <!-- Ícone de lua para modo escuro -->
                        </button>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <button class="btn btn-outline-light ms-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i> Sair
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <!-- Aqui é onde o conteúdo passado para o componente será exibido -->
            {{ $slot }}
        </div>

        <footer class="bg-primary text-white text-center py-3">
            <div class="container">
                <p class="mb-0">© 2024 Eventos. Todos os direitos reservados.</p>
                <div class="d-flex justify-content-center mt-2">
                    <a href="#" class="text-white me-3">Privacidade</a>
                    <a href="#" class="text-white">Termos de Serviço</a>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const themeToggleButton = document.getElementById('theme-toggle');
                let currentTheme = localStorage.getItem('theme') || 'light';

                // Aplica o tema atual ao body
                document.body.classList.add(`${currentTheme}-mode`);
                
                // Altera o ícone conforme o tema atual
                themeToggleButton.innerHTML = currentTheme === 'light' ? 
                    '<i class="fa-solid fa-moon"></i>' : '<i class="fa-solid fa-sun"></i>';

                // Alternar tema ao clicar no botão
                themeToggleButton.addEventListener('click', () => {
                    document.body.classList.remove(`${currentTheme}-mode`);
                    
                    // Alterna entre claro e escuro
                    currentTheme = currentTheme === 'light' ? 'dark' : 'light';
                    
                    document.body.classList.add(`${currentTheme}-mode`);
                    themeToggleButton.innerHTML = currentTheme === 'light' ? 
                        '<i class="fa-solid fa-moon"></i>' : '<i class="fa-solid fa-sun"></i>';
                    
                    // Salva o tema no localStorage
                    localStorage.setItem('theme', currentTheme);
                });
            });

        </script>
    </body>
</html>
