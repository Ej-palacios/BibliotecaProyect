document.addEventListener('DOMContentLoaded', function() {
    const loadingScreen = document.getElementById('loading-screen');
    
    // Mostrar loading al iniciar
    loadingScreen.classList.remove('loading-hidden');
    
    // Ocultar cuando todo esté cargado
    window.addEventListener('load', function() {
        setTimeout(function() {
            loadingScreen.classList.add('loading-hidden');
        }, 500); // Medio segundo para asegurar la transición
    });
    
    // Manejar transiciones entre páginas
    document.addEventListener('turbolinks:click', function() {
        loadingScreen.classList.remove('loading-hidden');
    });
    
    document.addEventListener('turbolinks:render', function() {
        setTimeout(function() {
            loadingScreen.classList.add('loading-hidden');
        }, 500);
    });
    
    // Para navegación tradicional (sin Turbolinks)
    const links = document.querySelectorAll('a:not([target="_blank"])');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.href && !this.href.startsWith('javascript:')) {
                loadingScreen.classList.remove('loading-hidden');
            }
        });
    });
});