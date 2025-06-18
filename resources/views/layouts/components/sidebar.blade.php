<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <i class="fas fa-atom fa-2x text-accent"></i>
            <div class="logo-text">
                <h4 class="app-name mb-0">Libreria</h4>
                <small class="app-version">v2.1.0</small>
            </div>
        </div>
        <button class="btn btn-close-sidebar d-lg-none" id="sidebarClose">
            <i class="fas fa-times"></i>
        </button>
    </div>
    
    <ul class="sidebar-menu">
        <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt"></i>
                <span class="menu-text">Dashboard</span>
                <span class="badge bg-accent ms-auto">New</span>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="{{ route('books.index') }}" class="menu-link {{ request()->routeIs('books.*') ? 'active' : '' }}">
                <i class="fas fa-book"></i>
                <span class="menu-text">Book Catalog</span>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="{{ route('books.create') }}" class="menu-link {{ request()->routeIs('books.create') ? 'active' : '' }}">
                <i class="fas fa-plus-circle"></i>
                <span class="menu-text">Add New Book</span>
            </a>
        </li>
        
        <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('members.*') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                <span class="menu-text">Members</span>
                <span class="badge bg-warning ms-auto">5</span>
            </a>
        </li>
        
        <li class="menu-item">
            <a  class="menu-link {{ request()->routeIs('loans.*') ? 'active' : '' }}">
                <i class="fas fa-exchange-alt"></i>
                <span class="menu-text">Loans</span>
            </a>
        </li>
        
        <li class="menu-item">
            <a  class="menu-link {{ request()->routeIs('fines.*') ? 'active' : '' }}">
                <i class="fas fa-file-invoice-dollar"></i>
                <span class="menu-text">Fines</span>
                <span class="badge bg-danger ms-auto">3</span>
            </a>
        </li>
        
        <li class="menu-item">
            <a  class="menu-link {{ request()->routeIs('reports.*') ? 'active' : '' }}">
                <i class="fas fa-chart-line"></i>
                <span class="menu-text">Reports</span>
            </a>
        </li>
    </ul>
    
    <div class="sidebar-footer">
        <a  class="menu-link {{ request()->routeIs('settings') ? 'active' : '' }}">
            <i class="fas fa-cog"></i>
            <span class="menu-text">Settings</span>
        </a>
    </div>
</div>