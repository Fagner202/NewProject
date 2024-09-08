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