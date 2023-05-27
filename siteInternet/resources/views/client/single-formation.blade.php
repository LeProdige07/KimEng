@extends('layouts.client')
@section('title')
Formation | {{$formation->formation_name}}
@endsection
@section('content')

@include('include_pages.client_navbar')

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Formation : {{$formation->formation_name}}</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<br>
<section class="blog-details section">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <div class="hero-slider">
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/formation_images/' . $formation->formation_image1) }}"
                        alt="formation-image" />
                    </div>
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/formation_images/' . $formation->formation_image2) }}"
                        alt="formation-image" />
                    </div>
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/formation_images/' . $formation->formation_image3) }}"
                        alt="formation-image" />
                    </div>
                    <div class="slider-item">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/formation_images/' . $formation->formation_image4) }}"
                        alt="formation-image" />
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <h3 class="column-title mrt-0">Formation : {{$formation->formation_name}}</h3>
                <p>{{ $formation->formation_description }}</p>
            </div>
        </div>
    </div>
</section>
<br>
@include('include_pages.client_footer')
@endsection
