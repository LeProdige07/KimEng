@extends('layouts.client')
@section('title')
Projets
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
Projets
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
                    <h2>Nos Projets</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis. Lorem ipsum dolor sit
                        amet,
                        consectetur adipisicing elit. Minima, vitae? </p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-filter">
                    <button type="button" data-filter="all">All</button>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="filtr-container">
                            @foreach ($projects as $project)
                                <div class="col-md-3 col-sm-6 col-xs-6 filtr-item "
                                    data-category="{{ $project->project_service }}">
                                    <div class="portfolio-block">
                                        <img class="img-fluid"
                                            src="storage/project_images/{{ $project->project_image1 }}"
                                            alt="project image">
                                        <div class="caption">
                                            <a class="search-icon"
                                                href="storage/project_images/{{ $project->project_image2 }}"
                                                data-lightbox="image-1">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                            <h4><a
                                                    href="{{ url('/single_projet', $project->id) }}">{{ $project->project_name }}</a>
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
@include('include_pages.client_contenu')

@include('include_pages.client_footer')
@endsection
