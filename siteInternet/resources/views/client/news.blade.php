@extends('layouts.client')
@section('title')
    Les Nouvelles sur Kim Engineering
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
    News
@endsection
@include('include_pages.client_breadcrumb')
<section class="posts section">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-lg-6">
                <div class="title text-center">
                    <h2>Toutes les publications</h2>
                    <p>Soyez au courant de l'évolution de Kim Engineering et n'hésitez pas à nous contacter pour solliciter nos services.
                    </p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>
        <div class="row">
            <!-- /section title -->
            @foreach ($nouvelles as $nouvelle)
                <!-- single blog post -->
                <article class="col-lg-4 col-md-6">
                    <div class="post-item">
                        <div class="media-wrapper">
                            <img loading="lazy"
                                src="{{ asset('storage/nouvelle_images/' . $nouvelle->nouvelle_image, env('REDIRECT_HTTPS')) }}"
                                alt="amazing caves coverimage" class="img-fluid">
                        </div>

                        <div class="content">
                            <h3><a href="single-post.html">{{ $nouvelle->nouvelle_titre }}</a></h3>
                            <p>{{ $nouvelle->sujet }}</p>
                            <a class="btn btn-main" href="{{ url('/single_new', $nouvelle->id) }}">En savoir plus</a>
                        </div>
                    </div>
                </article>
                <!-- /single blog post -->
            @endforeach
        </div>
    </div>
</section>

@include('include_pages.client_footer')
@endsection
