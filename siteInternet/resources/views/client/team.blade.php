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
                    <h2>Notre Equipe</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Notre Equipe</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--
    Start About Section
    ==================================== -->
    <section class="about" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <!-- section title -->
                    <div class="title text-center">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa placeat voluptas tempore
                            recusandae quasi nesciunt in, facilis animi. Sint, possimus?</p>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img loading="lazy" src="frontend/images/about-us.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum
                        nulla
                        sed justo tempor posuere sit amet sit amet ligula. Curabitur felis nibh, imperdiet eu erat non,
                        luctus cursus
                        lectus. Donec maximus diam leo, sed fringilla nisl auctor eget. Donec dictum neque est, ac faucibus
                        ex blandit
                        a.</p>
                    <p>Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed
                        fringilla nisl
                        auctor eget. Donec dictum neque est, ac faucibus ex blandit a</p>
                    <h4>Lorem ipsum dolor sit.</h4>
                    <ul class="feature-list">
                        <li> <i class="tf-ion-android-checkmark-circle"></i> Web Development</li>
                        <li> <i class="tf-ion-android-checkmark-circle"></i> Application Development</li>
                        <li> <i class="tf-ion-android-checkmark-circle"></i> Website Design</li>
                        <li> <i class="tf-ion-android-checkmark-circle"></i> UI/UX Design</li>
                        <li> <i class="tf-ion-android-checkmark-circle"></i> SEO Service</li>
                    </ul>
                    <a href="{{url('/services_us')}}" class="btn btn-main mt-20">En savoir plus</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->
    <!-- Start Our Team
      =========================================== -->
    <section class="team" id="team">
        <div class="container">
            <div class="row justify-content-center">
                <!-- section title -->
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center ">
                        <h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati,
                            quis
                            similique quos.</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->
            </div>
            <div class="row">
                @foreach ($personnels as $personnel)
                    <!-- team member -->
                    <div class="col-lg-4 col-md-6">
                        <div class="team-member text-center">
                            <div class="member-photo">
                                <!-- member photo -->
                                <img loading="lazy" class="img-fluid" src="storage/personnel_images/{{ $personnel->image }}"
                                    alt="Member Image">
                                <!-- /member photo -->

                                <!-- member social profile -->
                                <div class="mask">
                                    <ul class="clearfix">
                                        <li><a href="{{$personnel->facebook}}"><i class="tf-ion-social-facebook"></i></a>
                                        </li>
                                        <li><a href="{{$personnel->twitter}}"><i class="tf-ion-social-twitter"></i></a>
                                        </li>
                                        <li><a href="{{ $personnel->google}}"><i
                                                    class="tf-ion-social-google-outline"></i></a></li>
                                        <li><a href="{{$personnel->instagram}}"><i class="tf-ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /member social profile -->
                            </div>

                            <!-- member name & designation -->
                            <div class="member-content">
                                <h3>{{$personnel->names}}</h3>
                                <span>{{$personnel->poste}}</span>
                                <p>{{$personnel->description}}</p>
                            </div>
                            <!-- /member name & designation -->
                        </div>
                    </div>
                    <!-- end team member -->
                @endforeach
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->


    @include('include_pages.client_footer')
@endsection
