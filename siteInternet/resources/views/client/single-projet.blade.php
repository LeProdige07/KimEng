@extends('layouts.client')
@section('title')
Accueil
@endsection
@section('content')

@include('include_pages.client_navbar')

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Blog Single</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<br>
<section>
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <div class="hero-slider">
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image1) }}"
                        alt="project-image" />
                    </div>
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image2) }}"
                        alt="project-image" />
                    </div>
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image3) }}"
                        alt="project-image" />
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">

                <h3 class="column-title mrt-0">{{ $project->project_name }}</h3>
                <p>{{ $project->project_description }}</p>

                <ul class="project-info list-unstyled">
                    <li>
                        <p class="project-info-label">Partenaire</p>
                        <p class="project-info-content">{{ $project->client_name }}</p>
                    </li>
                    <li>
                        <p class="project-info-label">Durée du projet</p>
                        <p class="project-info-content">{{ $project->duree }}</p>
                    </li>
                    <li>
                        <p class="project-info-label">Service</p>
                        <p class="project-info-content">{{ $project->project_service }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<br>
@include('include_pages.client_footer')
@endsection
