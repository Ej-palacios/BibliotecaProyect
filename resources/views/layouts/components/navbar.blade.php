<nav class="navbar navbar-expand navbar-light bg-white shadow-sm sticky-top">
    <div class="container-fluid px-4">
        <!-- Botón para toggle sidebar -->
        <button class="btn btn-toggle rounded-circle me-3" id="sidebarToggle" aria-label="Toggle sidebar">
            <i class="fas fa-bars"></i>
        </button>
        
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center" >
            <i class="fas fa-book-open text-primary me-2"></i>
            <span class="fw-semibold">Library System</span>
        </a>
        
        <!-- Search bar -->
        <div class="search-bar d-none d-md-flex ms-3">
            <div class="input-group input-group-sm rounded-pill">
                <span class="input-group-text bg-transparent border-end-0">
                    <i class="fas fa-search text-muted"></i>
                </span>
                <input type="text" class="form-control border-start-0 ps-0" placeholder="Search books, members...">
            </div>
        </div>
        
        <!-- Right controls -->
        <div class="navbar-controls ms-auto">
            <!-- Notifications -->
            <div class="dropdown notification-dropdown me-3">
                <button class="btn btn-icon position-relative" type="button" id="notificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge-notification">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end shadow py-2" aria-labelledby="notificationsDropdown" style="width: 320px;">
                    <div class="px-3 py-2 border-bottom">
                        <h6 class="mb-0">Notifications</h6>
                    </div>
                    <a class="dropdown-item notification-item" href="#">
                        <div class="notification-icon bg-primary-light">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <div class="notification-content">
                            <p class="mb-0">New reservation received</p>
                            <small class="text-muted">2 min ago</small>
                        </div>
                    </a>
                    <a class="dropdown-item notification-item" href="#">
                        <div class="notification-icon bg-warning-light">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="notification-content">
                            <p class="mb-0">Overdue book alert</p>
                            <small class="text-muted">1 hour ago</small>
                        </div>
                    </a>
                    <div class="px-3 py-2 border-top text-center">
                        <a href="#" class="text-primary">View all notifications</a>
                    </div>
                </div>
            </div>
            
            <!-- User profile -->
            <div class="dropdown user-dropdown">
                <button class="btn d-flex align-items-center p-0" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="me-2 text-end d-none d-lg-block">
                        <p class="mb-0 fw-medium">Admin User</p>
                        <small class="text-muted">Administrator</small>
                    </div>
                    <div class="avatar avatar-sm bg-primary text-white rounded-circle">
                        <i class="fas fa-user"></i>
                    </div>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" >
                            <i class="fas fa-user me-2"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" >
                            <i class="fas fa-cog me-2"></i> Settings
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                        <form id="logout-form"  method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>