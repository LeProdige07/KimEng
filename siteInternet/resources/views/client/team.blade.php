@extends('layouts.client')
@section('title')
Notre Equipe
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
Equipe
@endsection
@include('include_pages.client_breadcrumb')
<!--
    Start About Section
    ==================================== -->
<section class="about" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <!-- section title -->
                <div class="title text-center">
                    <h2>L'équipe</h2>
                    <p>Kim Engineering est composé d'une équipe pleine de valeurs dans le travail
                        telles que l'étude, la conception, l'innovation et la cohésion.</p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img loading="lazy" src="frontend/images/team/_K8A7678.jpg" class="img-fluid" alt="team image">
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
                <h4>Nos compétences</h4>
                <ul class="feature-list">
                    <li> <i class="tf-ion-android-checkmark-circle"></i>Electronique industrielle</li>
                    <li> <i class="tf-ion-android-checkmark-circle"></i>Electricité</li>
                    <li> <i class="tf-ion-android-checkmark-circle"></i>Développement Web</li>
                    <li> <i class="tf-ion-android-checkmark-circle"></i>Internet des objets</li>
                    <li> <i class="tf-ion-android-checkmark-circle"></i>Robotique</li>
                    <li> <i class="tf-ion-android-checkmark-circle"></i>Domotique</li>
                </ul>
                <a href="{{ url('/services_us') }}" class="btn btn-main mt-20">En savoir plus</a>
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
                    <h2>Kim Engineering</h2>
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
                                    <li><a href="{{ $personnel->facebook }}"><i class="tf-ion-social-facebook"></i></a>
                                    </li>
                                    <li><a href="{{ $personnel->twitter }}"><i class="tf-ion-social-twitter"></i></a>
                                    </li>
                                    <li><a href="{{ $personnel->google }}"><i
                                                class="tf-ion-social-linkedin-outline"></i></a></li>
                                    <li><a href="{{ $personnel->instagram }}"><i
                                                class="tf-ion-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-content">
                            <h3>{{ $personnel->names }}</h3>
                            <span>{{ $personnel->poste }}</span>
                            <p>{{ $personnel->description }}</p>
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
