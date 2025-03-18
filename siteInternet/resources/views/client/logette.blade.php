@extends('layouts.client')
@section('title')
    KIM BOX
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
    KIM BOX
@endsection
@include('include_pages.client_breadcrumb')
<section class="about-2 section" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-lg-6">
                <div class="title text-center">
                    <h2>LA KIM BOX</h2>
                    <p>La KIM BOX est le projet phare porté par KIM Engineering depuis <strong>{{ date('Y') - 2021 }} années</strong>. Suivez l'évolution de la KIM BOX au fil du temps.
                    </p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class="row">

            <div class="col-md-6 mb-4 mb-md-0">
                <img loading="lazy" src="frontend/images/logos/logologetteblack.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <h4>UN SOUCI AVEC : </h4>
                <br>
                <ul class="checklist">
                    <li>La stabilité de votre courant ?</li>
                    <li>Le survoltage de vos appareils ?</li>
                    <li>Le changement de phases électriques ?</li>
                    <li>La température de votre logette ?</li>
                    <li>
                        <p><b>Une solution numérique s'offre à vous : le pouvoir de gérer automatiquement, en toute
                                sécurité et avec facilité
                                l'électricité de votre maison à partir de votre téléphone.
                            </b></p>
                    </li><br>
                    <li>
                        <p><b>ALORS, NE CHERCHEZ PLUS...</b></p>
                    </li>
                </ul>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section>
@foreach ($logettes as $key => $logette)
    <section class="{{ $logette->color($key) }}">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-6">
                    <div class="hero-slider">
                        <div class="">
                            <img loading="lazy" class="img-fluid"
                                src="{{ asset('storage/logette_images/' . $logette->logette_image1, env('REDIRECT_HTTPS')) }}"
                                alt="logette-image" />
                        </div>
                        <div class="">
                            <img loading="lazy" class="img-fluid"
                                src="{{ asset('storage/logette_images/' . $logette->logette_image2, env('REDIRECT_HTTPS')) }}"
                                alt="logette-image" />
                        </div>
                        <div class="">
                            <img loading="lazy" class="img-fluid"
                                src="{{ asset('storage/logette_images/' . $logette->logette_image3, env('REDIRECT_HTTPS')) }}"
                                alt="logette-image" />
                        </div>
                        <div class="">
                            <img loading="lazy" class="img-fluid"
                                src="{{ asset('storage/logette_images/' . $logette->logette_image4, env('REDIRECT_HTTPS')) }}"
                                alt="logette-image" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 p-3">
                    <h3 class="column-title mrt-0">{{ $logette->logette_name }}</h3> <br>
                    <p>{{ $logette->logette_description }}</p>
                </div>
            </div>
        </div><br><br><br>
    </section>
@endforeach
<section class="promo-video section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center">
                    <h2>LA SOLUTION NUMERIQUE</h2> <br>
                    <p>Une logette intelligente qui gère automatiquement l'électricité d'un batiment fonctionnant en monophasé,
                        biphasé
                        et triphasé; connectée aux applications web et mobile qui permettent la commande à distance de la logette
                        et donnent en temps réel les paramètres de la logette telles que
                        la température, l'humidité, les tensions de la logette et bien d'autres fonctionnalités.
                    </p>
                    <div class="border"></div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <div class="company-gallery">
                    <img loading="lazy" src="frontend/images/company/china.jpg" class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/forbes.png" class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/vivatech.png" class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/aim.png" class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/primature.jpeg" class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/ishango.png" class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/numerique.png" class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/ade.png" class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/osiane.jpg" class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/anadec.png" style="height : 100px; width : 100px"
                        class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/anapi.jpeg" style="height : 150px; width : 150px"
                        class="img-fluid" alt="logo image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Pricing section
  =========================================== -->


@include('include_pages.client_footer')
@endsection
