@extends('layouts.client')
@section('title')
Les Nouvelles sur Kim Engineering
@endsection
@section('content')
    @include('include_pages.client_navbar')

    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>News</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="posts section">
        <div class="container">
            <div class="row">
                <!-- /section title -->
                @foreach ($nouvelles as $nouvelle)
                    <!-- single blog post -->
                    <article class="col-lg-4 col-md-6">
                        <div class="post-item">
                            <div class="media-wrapper">
                                <img loading="lazy" src="{{ asset('storage/nouvelle_images/' . $nouvelle->nouvelle_image) }}" alt="amazing caves coverimage"
                                    class="img-fluid">
                            </div>

                            <div class="content">
                                <h3><a href="single-post.html">{{$nouvelle->nouvelle_titre}}</a></h3>
                                <p>{{$nouvelle->sujet}}</p>
                                <a class="btn btn-main" href="{{url('/single_new',$nouvelle->id)}}">En savoir plus</a>
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
