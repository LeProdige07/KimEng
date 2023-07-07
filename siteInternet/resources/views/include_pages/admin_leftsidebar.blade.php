<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{asset('frontend/images/logos/LOGO-KIM-WHITE-PNG.png', env('REDIRECT_HTTPS'))}}" alt="Kim Engineering Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Kim Engineering</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{ request()->is('home') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tableau de Bord
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tableau de Bord </p>
                            </a>
                        </li>
                    </ul>
                </li>
                 @permission('User', 'read')
                    <li
                        class="nav-item has-treeview
            {{ request()->is('users') ? 'menu-open' : '' }}
            ">
                        <a href="#" class="nav-link
                {{ request()->is('users') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Utilisateurs
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}"
                                    class="nav-link {{ request()->is('users') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Administrateurs</p>
                                </a>
                            </li>
                        </ul>

                    </li>
                @endpermission
                @permission('Role', 'read')
                <li class="nav-item has-treeview {{ request()->is('roles') ? 'menu-open' : '' }}
            ">
                    <a href="#" class="nav-link {{ request()->is('roles') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Roles
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}"
                                class="nav-link {{ request()->is('roles') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endpermission
                @permission('Service', 'read')
                <li
                    class="nav-item has-treeview
            {{ request()->is('services') ? 'menu-open' : '' }} {{ request()->is('services/create') ? 'menu-open' : '' }}
            ">
                    <a href="#"
                        class="nav-link
                {{ request()->is('services') ? 'active' : '' }} {{ request()->is('services/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Services
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('services.index') }}"
                                class="nav-link {{ request()->is('services') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Services</p>
                            </a>
                        </li>
                    </ul>
                    @permission('Service', 'create')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('services.create') }}"
                                    class="nav-link {{ request()->is('services/create') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Créer un service</p>
                                </a>
                            </li>
                        </ul>
                    @endpermission
                </li>
                @endpermission
                @permission('Project', 'read')
                <li
                    class="nav-item has-treeview
            {{ request()->is('projects') ? 'menu-open' : '' }} {{ request()->is('projects/create') ? 'menu-open' : '' }}
            ">
                    <a href="#"
                        class="nav-link
                {{ request()->is('projects') ? 'active' : '' }} {{ request()->is('projects/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Projects
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('projects.index') }}"
                                    class="nav-link {{ request()->is('projects') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                        </ul>
                    @permission('Project', 'create')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('projects.create') }}"
                                    class="nav-link {{ request()->is('projects/create') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Créer un project</p>
                                </a>
                            </li>
                        </ul>
                    @endpermission
                </li>
                @endpermission
                @permission('Formation', 'read')
                <li
                    class="nav-item has-treeview
            {{ request()->is('formations') ? 'menu-open' : '' }} {{ request()->is('formations/create') ? 'menu-open' : '' }}
            ">
                    <a href="#"
                        class="nav-link
                {{ request()->is('formations') ? 'active' : '' }} {{ request()->is('formations/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Formations
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('formations.index') }}"
                                    class="nav-link {{ request()->is('formations') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Formations</p>
                                </a>
                            </li>
                        </ul>
                    @permission('Formation', 'create')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('formations.create') }}"
                                    class="nav-link {{ request()->is('formations/create') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Créer une formation</p>
                                </a>
                            </li>
                        </ul>
                    @endpermission
                </li>
                @endpermission
                @permission('Personnel', 'read')
                <li
                    class="nav-item has-treeview
            {{ request()->is('personnels') ? 'menu-open' : '' }} {{ request()->is('personnels/create') ? 'menu-open' : '' }}
            ">
                    <a href="#"
                        class="nav-link
                {{ request()->is('personnels') ? 'active' : '' }} {{ request()->is('personnels/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Personnel
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('personnels.index') }}"
                                    class="nav-link {{ request()->is('personnels') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Personnel</p>
                                </a>
                            </li>
                        </ul>
                    @permission('Personnel', 'create')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('personnels.create') }}"
                                    class="nav-link {{ request()->is('personnels/create') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Créer un membre</p>
                                </a>
                            </li>
                        </ul>
                    @endpermission
                </li>

                @endpermission
                @permission('Nouvelle', 'read')
                <li
                    class="nav-item has-treeview
            {{ request()->is('nouvelles') ? 'menu-open' : '' }} {{ request()->is('nouvelles/create') ? 'menu-open' : '' }}
            ">
                    <a href="#"
                        class="nav-link
                {{ request()->is('nouvelles') ? 'active' : '' }} {{ request()->is('nouvelles/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            News
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('nouvelles.index') }}"
                                    class="nav-link {{ request()->is('nouvelles') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Infos</p>
                                </a>
                            </li>
                        </ul>
                    @permission('Nouvelle', 'create')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('nouvelles.create') }}"
                                    class="nav-link {{ request()->is('nouvelles/create') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Créer une info</p>
                                </a>
                            </li>
                        </ul>
                    @endpermission
                </li>
                @endpermission
                @permission('Temoignage', 'read')
                <li
                    class="nav-item has-treeview
            {{ request()->is('temoignages') ? 'menu-open' : '' }} {{ request()->is('temoignages/create') ? 'menu-open' : '' }}
            ">
                    <a href="#"
                        class="nav-link
                {{ request()->is('temoignages') ? 'active' : '' }} {{ request()->is('temoignages/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Témoignages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('temoignages.index') }}"
                                    class="nav-link {{ request()->is('temoignages') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Témoignages</p>
                                </a>
                            </li>
                        </ul>
                    @permission('Temoignage', 'create')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('temoignages.create') }}"
                                    class="nav-link {{ request()->is('temoignages/create') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Créer un témoignage</p>
                                </a>
                            </li>
                        </ul>
                    @endpermission
                </li>
                @endpermission
                @permission('LogetteInfo', 'read')
                <li class="nav-item has-treeview
        {{ request()->is('logette_infos') ? 'menu-open' : '' }}
        ">
                    <a href="#" class="nav-link
            {{ request()->is('logette_infos') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Précommandes Logette
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('logette_infos.index') }}"
                                    class="nav-link {{ request()->is('logette_infos') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Précommandes Logette</p>
                                </a>
                            </li>
                        </ul>
                </li>
                @endpermission
                @permission('Galery', 'read')
                <li class="nav-item has-treeview
        {{ request()->is('galeries') ? 'menu-open' : '' }}
        ">
                    <a href="#" class="nav-link
            {{ request()->is('galeries') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Galerie
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('galeries.index') }}"
                                    class="nav-link {{ request()->is('galeries') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Galerie</p>
                                </a>
                            </li>
                        </ul>
                </li>
                @endpermission
                @permission('Clientsatisfait', 'read')
                <li
                    class="nav-item has-treeview {{ request()->is('clientsatisfaits') ? 'menu-open' : '' }}
            {{ request()->is('clientsatisfaits/create') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('clientsatisfaits') ? 'active' : '' }}
                {{ request()->is('clientsatisfaits/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Partenaires
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('clientsatisfaits.index') }}"
                                class="nav-link {{ request()->is('clientsatisfaits') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Partenaires</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endpermission
                @permission('Contact', 'read')
                <li class="nav-item has-treeview
        {{ request()->is('contacts') ? 'menu-open' : '' }}
        ">
                    <a href="#" class="nav-link
            {{ request()->is('contacts') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Mails de contact
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('contacts.index') }}"
                                    class="nav-link {{ request()->is('contacts') ? 'active' : '' }}">
                                    <i class="far fa-file nav-icon"></i>
                                    <p>Mails de contact</p>
                                </a>
                            </li>
                        </ul>
                </li>
                @endpermission
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
