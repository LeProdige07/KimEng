@extends('layouts.client')
@section('title')
À propos de nous
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
À propos de nous
@endsection
@include('include_pages.client_breadcrumb')
    <section class="about-shot-info section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-20">
                    <h2 class="mb-3">Nous créons des solutions<br> numériques.</h2>
                    <p>Nous vous écoutons, comprenons vos besoins et les étudions pour vous apporter une solution numérique
                        adaptée.</p>
                    <p>Nous concevons des solutions numériques adaptées à vos besoins avec un tarif accessible à tout le monde.
                    </p>
                    <p>Nous avons une équipe qui travaille avec dévouement et passion pour réaliser chaque projet avec beaucoup de
                        professionalisme.
                        Nous ne cesserons de vous donner le meilleur de nous.
                    </p>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img loading="lazy" class="img-fluid" src="frontend/images/team/_K8A7653.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="company-mission section-sm bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Notre Mission</h3>
                    <p>Est de résoudre les problèmes de la société avec la nouvelle technologie, d'où notre projet phare
                        KIM BOX qui vient résoudre un problème réel de mauvaise manipulation de
                        l'électricité en facilitant
                        la gestion de l'électricité à partir d'un système intelligent.</p>
                    <p>Et parce que chaque jour, nous sommes confrontés aux problèmes, nous continuerons à innover pour vous
                        apporter les solutions
                        technologiques adaptées à ces problèmes.
                    </p>
                    <img loading="lazy" src="frontend/images/team/reunion.jpg" alt="" class="img-fluid mt-30">
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <h3>Notre Vision</h3>
                    <p>Nous sommes à l'ère du numérique : la 4ème révolution industrielle. La seule option qui se présente à
                        notre pays est de s'adapter ou de disparaitre.
                        C'est pourquoi nous nous donnons cette lourde charge de révolutionner la RDC et l'Afrique avec les nouvelles
                        technologies.</p>
                    <p>Le numérique est actuellement l'une des portes vers le développement durable.
                        Notre bien aimé continent doit s'adapter et évoluer dans le numérique. Telle est notre vision.
                    </p>
                    <img loading="lazy" src="frontend/images/team/_K8A7686.jpg" alt="" class="img-fluid mt-30">
                </div>
            </div>
        </div>
    </section>

    <!--
    Start Call To Action
    ==================================== -->
    <section class="call-to-action-2 section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Concevoir les systèmes numériques intelligents qui répondent à vos besoins
                        en respectant les normes de sécurité <br> et en offrant un environnement sans danger.</h2>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <section class="section gallery">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center">
                        <h2>Notre Galerie</h2>
                        <p>Vivez les activités de Kim Engineering à travers ces images.</p>
                        <div class="border"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="company-gallery">
                        @foreach ($galeries as $galery)
                            <img loading="lazy" src="storage/galery_images/{{$galery->image}}" alt="event image">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Our Team
      =========================================== -->
    <section class="team" id="team">
        <div class="container">
            <div class="row justify-content-center">
                <!-- section title -->
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center ">
                        <h2>Notre Equipe</h2>
                        <p>Avec une équipe compétente et professionnelle, nous vous offrons un travail de qualité et garanti.</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->
            </div>
            <div class="row">
                <!-- team member -->
                @foreach ($personnels as $personnel)
                    <!-- team member -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-member text-center">
                            <div class="member-photo">
                                <!-- member photo -->
                                <img loading="lazy" class="img-fluid" src="storage/personnel_images/{{ $personnel->image }}"
                                    alt="Member Image">
                                <!-- /member photo -->

                                <!-- member social profile -->
                                <div class="mask">
                                    <ul class="clearfix">
                                        <li><a href="{{ $personnel->facebook }}"><i class="tf-ion-social-facebook"></i></a>
                                        </li>
                                        <li><a href="{{ $personnel->twitter }}"><i class="tf-ion-social-twitter"></i></a>
                                        </li>
                                        <li><a href="{{ $personnel->google }}"><i
                                                    class="tf-ion-social-google-outline"></i></a></li>
                                        <li><a href="{{ $personnel->instagram }}"><i
                                                    class="tf-ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /member social profile -->
                            </div>

                            <!-- member name & designation -->
                            <div class="member-content">
                                <h3>{{ $personnel->names }}</h3>
                                <span>{{ $personnel->poste }}</span>
                                <p>{{ $personnel->description }}</p>
                            </div>
                            <!-- /member name & designation -->
                        </div>
                    </div>
                    <!-- end team member -->
                @endforeach
                <!-- end team member -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->
    <!--
    Start Counter Section
    ==================================== -->
    @include('include_pages.client_contenu')

    @include('include_pages.client_footer')
@endsection
