<!-- Sidebar -->
<nav class="navbar-vertical navbar bg-dark text-light">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand text-center py-4">
            <h5 class="text-light uppercase">Software Electoral</h5>
            <img 
                src="{{ asset('admin_assets/images/login/logo.jpeg') }}" 
                alt="Logo" 
                class="img-fluid mb-2 rounded-circle" 
                style="width: 80px; height: 80px; object-fit: cover;">
            
        </a>

        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link text-light d-flex align-items-center py-3" href="#!">
                    <i data-feather="home" class="icon-sm me-3"></i> 
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Section Header -->
            <li class="nav-item mt-4">
                <div class="navbar-heading text-uppercase fw-bold text-secondary">Seccion de Candidatos</div>
            </li>

            <!-- Front End Management -->
            <li class="nav-item">
                <a class="nav-link text-light d-flex align-items-center has-arrow py-3" data-bs-toggle="collapse" data-bs-target="#manageFrontEnd" aria-expanded="false">
                    <i data-feather="layers" class="icon-sm me-3"></i> 
                    <span>Administrar Candidatos</span>
                </a>
                <div id="manageFrontEnd" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Billing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">404 Error</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Manage Users -->
            <li class="nav-item mt-4">
                <a class="nav-link text-light d-flex align-items-center has-arrow py-3" data-bs-toggle="collapse" data-bs-target="#manageUsers" aria-expanded="false">
                    <i data-feather="users" class="icon-sm me-3"></i> 
                    <span>Administrar Recintos</span>
                </a>
                <div id="manageUsers" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Billing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Pricing</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Authentication -->
            <li class="nav-item mt-4">
                <a class="nav-link text-light d-flex align-items-center has-arrow py-3" data-bs-toggle="collapse" data-bs-target="#authentication" aria-expanded="false">
                    <i data-feather="lock" class="icon-sm me-3"></i> 
                    <span>Authentication</span>
                </a>
                <div id="authentication" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light py-2" href="#!">Forgot Password</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Documentation -->
            <li class="nav-item mt-4">
                <div class="navbar-heading text-uppercase fw-bold text-secondary">Documentacion</div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light d-flex align-items-center py-3" href="#!">
                    <i data-feather="clipboard" class="icon-sm me-3"></i> 
                    <span>Docs</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<style>
    .nav-link:hover {
    background-color: #2a2a2a;
    color: #ffffff;
}

</style>
