document.addEventListener('DOMContentLoaded', function() {
    // Elementos del DOM
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarClose = document.getElementById('sidebarClose');
    const overlay = document.querySelector('.overlay');
    const body = document.body;
    const mainContent = document.getElementById('main-content');
    
    // Detectar si es móvil
    let isMobile = window.matchMedia('(max-width: 992px)').matches;
    
    // Estado inicial del sidebar (expandido en desktop, colapsado en móvil)
    let sidebarExpanded = !isMobile && localStorage.getItem('sidebarExpanded') !== 'false';
    
    // Inicializar el sidebar
    function initSidebar() {
        if (isMobile) {
            // Comportamiento móvil
            sidebar.classList.remove('active', 'collapsed');
            overlay.classList.remove('active');
            body.style.overflow = 'auto';
        } else {
            // Comportamiento desktop
            if (sidebarExpanded) {
                expandSidebar();
            } else {
                collapseSidebar();
            }
        }
        // Forzar reflow para evitar glitches
        void sidebar.offsetHeight;
    }
    
    // Expandir sidebar
    function expandSidebar() {
        if (isMobile) {
            // Modo móvil: mostrar como overlay
            sidebar.classList.add('active');
            overlay.classList.add('active');
            body.style.overflow = 'hidden';
        } else {
            // Modo desktop: expandir completamente
            sidebar.classList.remove('collapsed');
            localStorage.setItem('sidebarExpanded', 'true');
        }
        sidebarExpanded = true;
    }
    
    // Colapsar sidebar
    function collapseSidebar() {
        if (isMobile) {
            // Modo móvil: ocultar
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
            body.style.overflow = 'auto';
        } else {
            // Modo desktop: colapsar (solo íconos)
            sidebar.classList.add('collapsed');
            localStorage.setItem('sidebarExpanded', 'false');
        }
        sidebarExpanded = false;
    }
    
    // Alternar estado del sidebar
    function toggleSidebar() {
        if (isMobile) {
            // En móviles siempre se expande al hacer toggle
            expandSidebar();
        } else {
            // En desktop alternar entre estados
            if (sidebarExpanded) {
                collapseSidebar();
            } else {
                expandSidebar();
            }
        }
    }
    
    // Manejar cambios de tamaño de pantalla
    function handleResize() {
        const newIsMobile = window.matchMedia('(max-width: 992px)').matches;
        
        if (isMobile !== newIsMobile) {
            isMobile = newIsMobile;
            initSidebar();
        }
    }
    
    // Event listeners
    sidebarToggle.addEventListener('click', toggleSidebar);
    
    if (sidebarClose) {
        sidebarClose.addEventListener('click', collapseSidebar);
    }
    
    overlay.addEventListener('click', collapseSidebar);
    
    // Optimización: usar requestAnimationFrame para resize
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(handleResize, 100);
    });
    
    // Forzar reflow después de transiciones
    sidebar.addEventListener('transitionend', function() {
        void mainContent.offsetHeight;
    });
    
    // Inicializar
    initSidebar();
});