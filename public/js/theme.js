const toggleMenuBtn = document.getElementById('toggleMenuBtn');
const sidebarMenu = document.getElementById('sidebarMenu');
const mainContent = document.getElementById('mainContent');
const themeIcon = document.getElementById('themeIcon');
const body = document.body;

// Função para verificar e aplicar o tema salvo
function applySavedTheme() {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        body.classList.add('dark');
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
    } else {
        body.classList.remove('dark');
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
    }
}

// Verifica e aplica o tema salvo quando a página é carregada
applySavedTheme();

// Toggle do menu
toggleMenuBtn.addEventListener('click', function() {
    sidebarMenu.classList.toggle('show');
    if (sidebarMenu.classList.contains('show')) {
        mainContent.style.marginLeft = '250px';
    } else {
        mainContent.style.marginLeft = '0';
    }
});

// Alternância de tema e salvamento no localStorage
themeIcon.addEventListener('click', function() {
    body.classList.toggle('dark');
    if (body.classList.contains('dark')) {
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
        localStorage.setItem('theme', 'dark'); // Salva o tema escuro
    } else {
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
        localStorage.setItem('theme', 'light'); // Salva o tema claro
    }
});