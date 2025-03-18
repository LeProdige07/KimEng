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
    <div class="container p-0">

        <div class="row w-100">
            <div class="col-lg-6">
                <div class="hero-slider">
                    <div class="">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image1, env('REDIRECT_HTTPS')) }}"
                        alt="project-image" />
                    </div>
                    <div class="">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image2, env('REDIRECT_HTTPS')) }}"
                        alt="project-image" />
                    </div>
                    <div class="">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image3, env('REDIRECT_HTTPS')) }}"
                        alt="project-image" />
                    </div>
                    <div class="">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/project_images/' . $project->project_image4, env('REDIRECT_HTTPS')) }}"
                        alt="project-image" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 p-3">
                <h5 class="column-title mrt-0">{{$project->project_name}}</h3> <br>
                <p>{{ $project->project_description }}</p> <br>

                <ul class="project-info list-unstyled">
                    <li>
                        <div class="column-title mrt-0" style="font-size: 22px">Service du projet : <strong class="ml-1">{{ $project->project_service }}</strong></h5>
                        <p class="project-info-content"></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<br>
@include('include_pages.client_footer')
@endsection
