// Handle sidebar toggle for desktop
document.getElementById('sidebarToggle').addEventListener('click', function () {
    document.getElementById('wrapper').classList.toggle('toggled');
});

// Ensure sidebar is collapsed on mobile by default
if (window.innerWidth < 768) {
    document.getElementById('wrapper').classList.add('toggled');
}

// Adjust sidebar on window resize
window.addEventListener('resize', function () {
    if (window.innerWidth < 768) {
        document.getElementById('wrapper').classList.add('toggled');
    } else {
        document.getElementById('wrapper').classList.remove('toggled');
    }
});