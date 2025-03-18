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
                    <li><p><b>Une solution numérique s'offre à vous : le pouvoir de gérer automatiquement, en toute sécurité et avec facilité
                        l'électricité de votre maison à partir de votre téléphone.
                        </b></p></li><br>
                    <li><p><b>ALORS, NE CHERCHEZ PLUS...</b></p></li>
                </ul>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section>
<section class="promo-video section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center">
                    <h2>LA SOLUTION NUMERIQUE</h2>
                    <p>Une logette qui gère automatiquement l'électricité d'un batiment fonctionnant en monophasé,
                        biphasé
                        et triphasé; connectée à une application mobile qui permet la commande à distance de la logette
                        et donne en temps réel
                        la température, l'humidité, les tensions de la logette et bien d'autres fonctionnalités.
                    </p>
                    <div class="border"></div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img loading="lazy" src="frontend/images/company/logette3.jpg" class="img-fluid" alt="logo image">
            </div>
            <div class="col-lg-6">
                <p>La KIM BOX est notre projet phare. Un projet très impactant apportant une solution utile
                    à la société. Le parcours que suit ce projet est juste impéccable. Elle remporte le deuxiéme prix du
                    concours HACKMAKER organisé par l'agence universitaire francophone(AUF).
                </p>
            </div>
        </div> <!-- End row --> --}}
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
                    <img loading="lazy" src="frontend/images/company/anadec.png" style="height : 100px; width : 100px" class="img-fluid" alt="logo image">
                    <img loading="lazy" src="frontend/images/company/anapi.jpeg" style="height : 150px; width : 150px" class="img-fluid" alt="logo image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Pricing section
  =========================================== -->


@include('include_pages.client_footer')
@endsection
