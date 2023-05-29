@extends('layouts.client')
@section('title')
    Contactez-nous
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
Contactez-nous
@endsection
@include('include_pages.client_breadcrumb')
<!--Start Contact Us
     =========================================== -->
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center">
                    <h2>Contactez-nous</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab
                        maxime nam
                        ut numquam molestiae quaerat incidunt?</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>
        <div class="row">
            <!-- Contact Details -->
            <div class="contact-details col-md-6 ">
                <h3 class="mb-3">Contact Details</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi
                    blanditiis ex
                    explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam
                    labore
                    adipisci.</p>
                <ul class="contact-short-info mt-4">
                    <li class="mb-3">
                        <i class="tf-ion-ios-home"></i>
                        <span>Ishango, Immeuble ROYAL, Boulevard du 30 Juin, KINSHASA/GOMBE</span>
                    </li>
                    <li class="mb-3">
                        <i class="tf-ion-android-phone-portrait"></i>
                        <span>Phone: +243 905057618</span>
                    </li>
                    <li>
                        <i class="tf-ion-android-mail"></i>
                        <span>Email: hello@meghna.com</span>
                    </li>
                </ul>
                <!-- Footer Social Links -->
                <div class="social-icon">
                    <ul>
                        <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
                    </ul>
                </div>
                <!--/. End Footer Social Links -->
            </div>
            <!-- / End Contact Details -->

            <!-- Contact Form -->
            <div class="contact-form col-md-6 ">
                <form id="contact-form" method="post" role="form">
                    <div class="form-group mb-4">
                        <input type="text" placeholder="Votre Nom" class="form-control" name="name" id="name"
                            required>
                    </div>

                    <div class="form-group mb-4">
                        <input type="email" placeholder="Votre Email" class="form-control" name="email"
                            id="email" required>
                    </div>

                    <div class="form-group mb-4">
                        <input type="text" placeholder="Sujet" class="form-control" name="subject" id="subject"
                            required>
                    </div>

                    <div class="form-group mb-4">
                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" required></textarea>
                    </div>
                    <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                    </div>

                </form>
            </div>
            <!-- ./End Contact Form -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

<!--================================
    =            Google Map            =
    =================================-->
<div class="google-map">
    <div id="map_canvas" class="map_canvas" data-latitude="-4.3214406" data-longitude="15.2762192"
        data-marker="images/marker.png" data-marker-name="Bingo"></div>
</div>
<!--====  End of Google Map  ====-->



@include('include_pages.client_footer')
@endsection
