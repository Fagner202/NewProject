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
    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        /* Barra horizontal no topo */
        .top-bar {
            background-color: #6f42c1;
            color: white;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            height: 60px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        /* Botão dentro da barra horizontal */
        .toggle-btn {
            background-color: transparent;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .toggle-btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Menu vertical fixo */
        .vertical-nav {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 60px;
            left: -250px;
            background-color: white;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border-right: 1px solid #e9ecef;
        }

        /* Menu exibido */
        .vertical-nav.show {
            left: 0;
        }

        /* Estilo dos links no menu */
        .vertical-nav a {
            color: #6f42c1;
            padding: 15px;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-weight: 500;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 18px;
        }

        .vertical-nav a i {
            margin-right: 10px;
        }

        .vertical-nav a:hover {
            background-color: #e9ecef;
            color: #59359c;
        }

        .vertical-nav .active {
            background-color: #6f42c1;
            color: white;
        }

        /* Conteúdo principal */
        .container {
            transition: margin-left 0.3s ease;
            padding-top: 80px;
            padding-left: 20px;
            padding-right: 20px;
            max-width: 1000px;
        }

        h1, p {
            color: #343a40;
        }
    </style>
</head>
<body>

<!-- Barra horizontal no topo -->
<div class="top-bar">
    <button class="toggle-btn" id="toggleMenuBtn">
        <i class="fas fa-bars"></i>
    </button>
    <span style="margin-left: 20px; font-size: 20px; font-weight: 500;">MinhaMarca</span>
</div>

<!-- Menu de Navegação Vertical -->
<div class="vertical-nav bg-light" id="sidebarMenu">
    <a href="#" class="navbar-brand px-3">MinhaMarca</a>
    <a href="#" class="nav-link active"><i class="fas fa-home"></i> Início</a>
    <a href="#" class="nav-link"><i class="fas fa-user"></i> Sobre</a>
    <a href="#" class="nav-link"><i class="fas fa-cogs"></i> Serviços</a>
    <a href="#" class="nav-link"><i class="fas fa-envelope"></i> Contato</a>
</div>

<!-- Conteúdo principal -->
<div class="container" id="mainContent" style="margin-left: 0px;">
   <!-- Aqui é onde o conteúdo passado para o componente será exibido -->
   {{ $slot }}
</div>

<!-- Scripts do Bootstrap 5.3.3 e JavaScript para controlar o menu -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const toggleMenuBtn = document.getElementById('toggleMenuBtn');
    const sidebarMenu = document.getElementById('sidebarMenu');
    const mainContent = document.getElementById('mainContent');
    
    toggleMenuBtn.addEventListener('click', function() {
        sidebarMenu.classList.toggle('show');
        if (sidebarMenu.classList.contains('show')) {
            mainContent.style.marginLeft = '250px';
        } else {
            mainContent.style.marginLeft = '0';
        }
    });
</script>

</body>
</html>
