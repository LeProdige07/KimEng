@extends('layouts.client')
@section('title')
    Logette Intelligente
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
    Logette Intelligente
@endsection
@include('include_pages.client_breadcrumb')
<section class="promo-video section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center">
                    <h2>Notre logette Intelligente</h2>
                    <p>Une logette qui gère automatiquemennt l'électricité d'un batiment, qui fonctionne en monophasé,
                        biphasé
                        et triphasé; connectée à une application mobile qui permet la commande à distance de la logette
                        et donne en temps réel
                        la température, l'humidité, les tensions de la logette et bien d'autres fonctionnalités.
                    </p>
                    <div class="border"></div>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img loading="lazy" src="frontend/images/team/_K8A7678.jpg" class="img-fluid" alt="team image">
            </div>
            <div class="col-lg-6">
                <p>Kim Engineering est composé d'une équipe d'ingénieurs compétents et qualifiés dans divers domaines
                    tels que l'électronique industrielle, l'électricité, l'internet des objets connectés, le
                    développement web et bien d'autres domaines énumérés en dessous.</p>
            </div>
        </div> <!-- End row -->
    </div>
</section>
<!-- Start Pricing section
  =========================================== -->


@include('include_pages.client_footer')
@endsection
