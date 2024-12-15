<div class="header">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm px-3">
        <!-- Navbar toggle -->
        <a id="nav-toggle" href="#" class="btn btn-outline-primary me-3">
            <i data-feather="menu" class="nav-icon icon-sm"></i>
        </a>

        <!-- Search bar -->
        <div class="ms-lg-3 d-none d-lg-block flex-grow-1">
            <form class="d-flex align-items-center w-50 mx-auto">
                <input type="search" class="form-control rounded-pill shadow-sm" placeholder="Search..." />
            </form>
        </div>

        <!-- Right-side menu -->
        <ul class="navbar-nav ms-auto align-items-center">
            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a class="btn btn-light btn-icon rounded-circle shadow-sm position-relative" href="#" id="dropdownNotification" data-bs-toggle="dropdown" aria-expanded="false">
                    <i data-feather="bell" class="icon-sm"></i>
                    <span class="badge bg-danger position-absolute top-0 start-100 translate-middle p-1 rounded-circle"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-3 shadow-lg">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="text-dark fw-bold mb-0">Notifications</h6>
                        <a href="#" class="text-muted"><i data-feather="settings" class="icon-xs"></i></a>
                    </div>
                    <ul class="list-group notification-list">
                        <li class="list-group-item">
                            <a href="#" class="d-flex align-items-start text-decoration-none">
                                <div class="me-3">
                                    <i data-feather="user" class="text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Rishi Chopra</h6>
                                    <small>Mauris blandit erat id nunc.</small>
                                </div>
                            </a>
                        </li>
                        <!-- Add more notification items here -->
                    </ul>
                    <div class="text-center mt-2">
                        <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                </div>
            </li>

            <!-- User Menu -->
            <li class="nav-item dropdown ms-3">
                <a class="rounded-circle" href="#" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar avatar-md avatar-indicators avatar-online">
                        <img alt="avatar" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" class="rounded-circle shadow-sm" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-lg p-3">
                    <div class="mb-3 text-center">
                        <h6 class="fw-bold mb-0">{{ Auth::user()->name }}</h6>
                        <small class="text-muted">Role: {{ ucfirst(Auth::user()->role) }}</small>
                    </div>
                    <ul class="list-unstyled">
                        <li><a class="dropdown-item" href="#"><i data-feather="user" class="me-2"></i>Editar Perfil</a></li>
                        <li><a class="dropdown-item" href="#"><i data-feather="activity" class="me-2"></i>Actividades Logos</a></li>
                        <li><a class="dropdown-item" href="#"><i data-feather="settings" class="me-2"></i>Cuenta Configuraciones</a></li>
                        <li>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i data-feather="power" class="me-2"></i>Salir
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>
