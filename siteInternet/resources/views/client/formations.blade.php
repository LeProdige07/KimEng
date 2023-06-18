@extends('layouts.client')
@section('title')
    Formations
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
    Formations
@endsection
@include('include_pages.client_breadcrumb')
<!-- Start Portfolio Section
          =========================================== -->

<section class="portfolio section-sm" id="portfolio">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <!-- section title -->
                <div class="title text-center">
                    <h2>Nos Formations</h2>
                    <p>Kim Engineering, dans sa vision de révolutionner la RDC et l'Afrique, met à la disposition du public des formations dans le numérique.</p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-filter">
                    <button type="button" data-filter="all">Toutes les formations</button>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="filtr-container">
                            @foreach ($formations as $formation)
                                <div class="col-md-3 col-sm-6 col-xs-6 filtr-item "
                                    data-category="{{ $formation->formation_name }}">
                                    <div class="portfolio-block">
                                        <img class="img-fluid"
                                            src="storage/formation_images/{{ $formation->formation_image1 }}"
                                            alt="formation image">
                                        <div class="caption">
                                            <a class="search-icon"
                                                href="storage/formation_images/{{ $formation->formation_image2 }}"
                                                data-lightbox="image-1">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                            <h4><a
                                                    href="{{ url('/single_formation', $formation->id) }}">{{ $formation->formation_name }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- /end col-lg-12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- End section -->
@include('include_pages.client_footer')
@endsection
