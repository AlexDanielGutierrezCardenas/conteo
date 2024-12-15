 <!-- Sidebar -->
 <nav class="navbar-vertical navbar">
     <div class="nav-scroller">
         <!-- Brand logo -->
         <a class="navbar-brand" href="index.html">
             <img src="{{ asset('admin_assets/images/brand/logo/logo.svg') }}" alt="" />
         </a>
         <!-- Navbar nav -->
         <ul class="navbar-nav flex-column" id="sideNavbar">
             <li class="nav-item">
                 <a class="nav-link has-arrow "
                     href="index.html">
                     <i data-feather="home" class="nav-icon icon-xs me-2"></i>Dash
                 </a>

             </li>


             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">Layouts & Pages</div>
             </li>

             <li class="nav-item">
                <a class="nav-link "
                    " href="{{route('votos_todos.index')}}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Votos
                </a>
            </li>

             <li class="nav-item">
                 <a class="nav-link "
                 " href="{{route('recintos.index')}}">
                     <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                     </i>
                     Recintos
                 </a>
             </li>
             <li class="nav-item">
                <a class="nav-link "
                " href="{{route('resultados.index')}}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Resultados
                </a>
            </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">UI Components</div>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow  "
                     href="docs/accordions.html">
                     <i data-feather="package" class="nav-icon icon-xs me-2">
                     </i> Components
                 </a>
             </li>


             <li class="nav-item">
                 <a class="nav-link has-arrow " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false"
                     aria-controls="navMenuLevel">
                     <i data-feather="corner-left-down" class="nav-icon icon-xs me-2">
                     </i> Menu Level
                 </a>
                 <div id="navMenuLevel" class="collapse "
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link has-arrow "
                                 data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                                 aria-controls="navMenuLevelSecond">
                                 Two Level
                             </a>
                             <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                 <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link "
                                             href="#!"> NavItem 1</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link"
                                             href="#!"> NavItem 2</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link has-arrow "
                                 href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree"
                                 aria-expanded="false" aria-controls="navMenuLevelThree">
                                 Three Level
                             </a>
                             <div id="navMenuLevelThree" class="collapse "
                                 data-bs-parent="#navMenuLevel">
                                 <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link "
                                             href="#!" data-bs-toggle="collapse"
                                             data-bs-target="#navMenuLevelThreeOne" aria-expanded="false"
                                             aria-controls="navMenuLevelThreeOne">
                                             NavItem 1
                                         </a>
                                         <div id="navMenuLevelThreeOne"
                                             class="collapse collapse "
                                             data-bs-parent="#navMenuLevelThree">
                                             <ul class="nav flex-column">
                                                 <li class="nav-item">
                                                     <a class="nav-link "
                                                         href="#!">
                                                         NavChild Item 1
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link "
                                             href="#!"> Nav Item 2</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                 </div>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">Documentation</div>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow "
                     href="docs/index.html">
                     <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                     </i> Docs
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link has-arrow "
                     href="docs/changelog.html">
                     <i data-feather="git-pull-request" class="nav-icon icon-xs me-2">
                     </i> Changelog
                 </a>
             </li>
         </ul>
     </div>
 </nav>
