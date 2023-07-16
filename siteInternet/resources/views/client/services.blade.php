@extends('layouts.client')
@section('title')
    Nos Services
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
    Services
@endsection
@include('include_pages.client_breadcrumb')
<!-- Start Services Section
            ==================================== -->

<section class="services" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center">
                    <h2 id="service">Nos Services</h2>
                    <p>Nous vous proposons des services modernes et très adaptés à vos besoins.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>
        <div id="service" class="row no-gutters">
            @foreach ($services as $key => $service)
                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 {{ $service->color($key) }} text-center">
                        <div class="service-icon text-center">
                            <img loading="lazy" src="{{ asset('storage/service_images/' . $service->service_image, env('REDIRECT_HTTPS')) }}"
                                alt="amazing caves coverimage" class="img-fluid">
                        </div>
                        <h3>{{ $service->service_name }}</h3>
                        <p>{{ $service->service_description }}</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
            @endforeach
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->
<!-- Start Team Skills
            =========================================== -->
<section class="team-skills section-sm" id="skills">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center">
                    <h2>Nos Compétences</h2>
                    <p>Nous disposons d'une équipe d'ingénieurs dans divers domaines.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class="row justify-content-between">
            <div class="col-md-5">
                <div class="team-skills-content">
                    <h2 class="mb-3">Travaillons en toute simplicité</h2>
                    <p>Actuellement, il y a beaucoup de généralistes sur le marché, la bonne qualité dans le travail
                        n'est pas assurée. Nous mettons sur le marché des ingénieurs performants disposant d'années
                        d'expériences professionnelles.</p>
                    <a href="contact.html" class="btn btn-main mt-20">Contactez-nous</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="progress-block">
                    <ul>
                        <li class="mb-3">
                            <span>Electronique industrielle</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 99%;">
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <span>Electricité</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 99%;">
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <span>Développement Web</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 99%;">
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <span>Internet des objets</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 99%;">
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <span>Robotique et Domotique</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 99%;">
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div> <!-- End row -->
        <div class="row">
            <div class="col-md-12 mt-4">
                <div id="clients-slider" class="clients-logo-slider">
                    @foreach ($clientsatisfaits as $clientsatisfait)
                        <img loading="lazy"
                            src="{{ asset("storage/clientsatisfait_images/$clientsatisfait->logo_client ", env('REDIRECT_HTTPS')) }}"
                            alt="Client logo">
                    @endforeach
                </div>
            </div>
        </div>
    </div> <!-- End container -->
</section> <!-- End section -->
<!--Start Counter Section ==================================== -->
<section class="counter-wrapper section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 text-center">
                <div class="title">
                    <h2>Nos valeurs</h2>
                    <p>Nos réalisations, projet après projet, font de nous une des meilleures entreprises en Nouvelle
                        Technologie.
                        Dans notre travail, nous cultivons des valeurs telles que l'étude, la conception, l'innovation,
                        la cohésion
                        et sommes fiers de vous satisfaire avec nos services.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- first count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-alarm-outline"></i>
                    <div>
                        <span class="counter" data-count="150">0</span>
                    </div>
                    <h3>Clients Satisfaits</h3>
                </div>
            </div>
            <!-- end first count item -->

            <!-- second count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-analytics-outline"></i>
                    <div>
                        <span class="counter" data-count="130">0</span>
                    </div>
                    <h3>Projets Réalisés</h3>
                </div>
            </div>
            <!-- end second count item -->

            <!-- third count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-compose-outline"></i>
                    <div>
                        <span class="counter" data-count="99">0</span>
                    </div>
                    <h3>Collaborations</h3>

                </div>
            </div>
            <!-- end third count item -->

            <!-- fourth count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item kill-border">
                    <i class="tf-ion-ios-bolt-outline"></i>
                    <div>
                        <span class="counter" data-count="250">0</span>
                    </div>
                    <h3>Formations</h3>
                </div>
            </div>
            <!-- end fourth count item -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->
<!-- Start Testimonial
            =========================================== -->
@include('include_pages.client_temoignage')


@include('include_pages.client_footer')
@endsection
