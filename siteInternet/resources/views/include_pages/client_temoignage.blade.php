<section class="testimonial section" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- testimonial wrapper -->
                <div class="testimonial-slider">
                    @foreach ($temoignages as $temoignage)
                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p>{{$temoignage->temoin_contenu}}
                                </p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img loading="lazy" src="storage/temoin_images/{{ $temoignage->temoin_image }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="client-meta">
                                <h3>{{$temoignage->temoin_name}}</h3>
                                <span>{{$temoignage->grade}}</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->
                    @endforeach
                </div>
            </div> <!-- end col lg 12 -->
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End Section -->
