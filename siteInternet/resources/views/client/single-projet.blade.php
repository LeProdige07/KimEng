@extends('layouts.client')
@section('title')
Projets | {{$project->project_name}}
@endsection
@section('content')

@include('include_pages.client_navbar')
@section('breadcrumb_title')
{{$project->project_name}}
@endsection
@section('breadcrumb_contenu')
<li class="breadcrumb-item"><a href="{{url('/projets_us')}}" class="text-white">Projets</a></li>
@endsection
@include('include_pages.client_breadcrumb')

<section class="blog-details section">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <div class="hero-slider">
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image1, env('REDIRECT_HTTPS')) }}"
                        alt="project-image" />
                    </div>
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image2, env('REDIRECT_HTTPS')) }}"
                        alt="project-image" />
                    </div>
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image3, env('REDIRECT_HTTPS')) }}"
                        alt="project-image" />
                    </div>
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image4, env('REDIRECT_HTTPS')) }}"
                        alt="project-image" />
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <h3 class="column-title mrt-0">Projet : {{$project->project_name}}</h3>
                <p>{{ $project->project_description }}</p>

                <ul class="project-info list-unstyled">
                    <li>
                        <p class="column-title mrt-0"><strong>Service du projet</strong></p>
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
