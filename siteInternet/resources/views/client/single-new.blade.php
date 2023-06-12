@extends('layouts.client')
@section('title')
    La nouvelle
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
    {{$nouvelle->nouvelle_titre}}
@endsection
@section('breadcrumb_contenu')
<li class="breadcrumb-item"><a href="{{url('/news')}}" class="text-white">News</a></li>
@endsection
@include('include_pages.client_breadcrumb')
<!-- blog details part start -->
<section class="blog-details section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article class="post">
                    <div class="post-image mb-5">
                        <img loading="lazy" class="img-fluid w-100"
                            src="{{ asset('storage/nouvelle_images/' . $nouvelle->nouvelle_image) }}" alt="post-image">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <h3>{{ $nouvelle->nouvelle_titre }}</h3>
                        <!-- blockquote -->
                        <blockquote>{{ $nouvelle->sujet }}
                        </blockquote>
                        <p>{{ $nouvelle->nouvelle_contenu }}</p>
                        <!-- post share -->
                        <ul class="post-content-share list-inline mb-5">
                            <li class="list-inline-item">
                                <a href="{{ $nouvelle->twitter }}">
                                    <i class="tf-ion-social-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $nouvelle->linkedin }}">
                                    <i class="tf-ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $nouvelle->facebook }}">
                                    <i class="tf-ion-social-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $nouvelle->instagram }}">
                                    <i class="tf-ion-social-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- sidebar -->
                <aside class="sidebar pl-0 pl-lg-4">
                    <div class="widget-categories widget">
                        <h2>Nos services</h2>
                        <!-- widget categories list -->
                        <ul class="widget-categories-list">
                            @foreach ($services as $service)
                                <li>
                                    <a href="{{ url('/services_us') }}">{{ $service->service_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget-post widget">
                        <h2>Les dernières nouvelles</h2>
                        <!-- latest news -->
                        <ul class="widget-post-list">
                            @foreach ($recentnouvelles as $nouvelle)
                                <li class="widget-post-list-item">
                                    <div class="widget-post-image">
                                        <a href="single-post.html">
                                            <img loading="lazy" src="{{ asset('storage/nouvelle_images/' . $nouvelle->nouvelle_image) }}"
                                                alt="post-img">
                                        </a>
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="{{ url('/single_new', $nouvelle->id) }}">
                                            <h5>{{ $nouvelle->nouvelle_titre }}</h5>
                                        </a>
                                        <h6>{{ $nouvelle->created_at }}</h6>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- blog details part end -->

@include('include_pages.client_footer')
@endsection
