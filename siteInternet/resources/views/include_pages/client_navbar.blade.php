<header class="navigation fixed-top">
    <div class="container">
        <!-- main nav -->
        <nav class="navbar navbar-expand-lg navbar-light px-0">
            <!-- logo -->
            <div class="logo">
                <a class="d-block" href="{{ url('/') }}">
                    <img loading="lazy" class="logo-default" style="height : 100px; width : 100px" src="{{asset('frontend/images/logos/logo.jpg')}}" alt="logo" />
                    <img loading="lazy" class="logo-white" style="height : 100px; width : 100px" src="{{asset('frontend/images/logos/logo2.jpg')}}" alt="logo" />
                </a>
            </div>
            <!-- /logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                    </li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item {{ request()->is('services_us') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/services_us')}}">Services</a>
                    </li>
                    <li class="nav-item {{ request()->is('projets_us') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/projets_us')}}">Projets</a>
                    </li>
                    <li class="nav-item {{ request()->is('formations_us') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/formations_us')}}">Formations</a>
                    </li>
                    <li class="nav-item {{ request()->is('team') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/team')}}">Equipe</a>
                    </li>
                    <li class="nav-item {{ request()->is('logette') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/logette')}}">Logette</a>
                    </li>
                    <li class="nav-item {{ request()->is('news') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/news')}}">News</a>
                    </li>
                    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
