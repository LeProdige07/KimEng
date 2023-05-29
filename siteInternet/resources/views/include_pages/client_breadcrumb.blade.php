<section class="single-page-header" style="background-image: url({{asset('frontend/images/about-header.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>@yield('breadcrumb_title')</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" class="text-white">Accueil</a></li>
                    @yield('breadcrumb_contenu')
                    <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb_title')</li>
                </ol>
            </div>
        </div>
    </div>
</section>