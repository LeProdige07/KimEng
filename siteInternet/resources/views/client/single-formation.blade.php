@extends('layouts.client')
@section('title')
Formation | {{$formation->formation_name}}
@endsection
@section('content')

@include('include_pages.client_navbar')
@section('breadcrumb_title')
Formation : {{$formation->formation_name}}
@endsection
@section('breadcrumb_contenu')
<li class="breadcrumb-item"><a href="{{url('/formations_us')}}" class="text-white">Formations</a></li>
@endsection

@include('include_pages.client_breadcrumb')

<section class="blog-details section">
    <div class="container p-0">

        <div class="row w-100">
            <div class="col-lg-6">
                <div class="hero-slider">
                    <div class="">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/formation_images/' . $formation->formation_image1, env('REDIRECT_HTTPS')) }}"
                        alt="formation-image" />
                    </div>
                    <div class="">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/formation_images/' . $formation->formation_image2, env('REDIRECT_HTTPS')) }}"
                        alt="formation-image" />
                    </div>
                    <div class="">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/formation_images/' . $formation->formation_image3, env('REDIRECT_HTTPS')) }}"
                        alt="formation-image" />
                    </div>
                    <div class="">
                        <img loading="lazy" class="img-fluid"
                        src="{{ asset('storage/formation_images/' . $formation->formation_image4, env('REDIRECT_HTTPS')) }}"
                        alt="formation-image" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 p-3">
                <h3 class="column-title mrt-0">Formation : {{$formation->formation_name}}</h3> <br>
                <p>{{ $formation->formation_description }}</p>
            </div>
        </div>
    </div>
</section>
<br>
@include('include_pages.client_footer')
@endsection
