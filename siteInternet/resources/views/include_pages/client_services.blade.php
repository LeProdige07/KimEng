<section id="services" class="service-2 section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6">
                <!-- section title -->
                <div class="title text-center">
                    <h2>Les services que nous offrons.</h2>
                    <p>Nous vous offrons des services de qualité dans un délai de temps fiable. Nos portes sont ouvertes à tous.</p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 text-center d-none d-md-block">
                <img loading="lazy" src="frontend/images/team/_K8A7893.jpg" class="img-fluid inline-block" alt="">
            </div>
            <div class="col-md-8">
                <div class="row text-center">
                    @foreach ($services as $service)
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <div class="service-icon text-center">
                                    <img loading="lazy"
                                        src="{{ asset('storage/service_images/' . $service->service_image, env('REDIRECT_HTTPS')) }}"
                                        alt="service image" class="img-fluid">
                                </div>
                                <br>
                                <h4>{{$service->service_name}}</h4>
                                <p>{{$service->service_description}}</p>
                            </div>
                        </div><!-- END COL -->
                    @endforeach
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section>
