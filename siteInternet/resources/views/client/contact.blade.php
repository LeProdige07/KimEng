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
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>
        <div class="row">
            <!-- Contact Details -->
            <div class="contact-details col-md-6 ">
                <h3 class="mb-3">Kim Engineering</h3>
                <p>Est à votre disposition 24h/24 et 7j/7. Vous pouvez nous contacter via ce formulaire ou vous rendre
                    directement à nos locaux situés à l'adresse ci-dessous.
                    Nous sommes aptes à vous répondre et à vous servir.<br>
                    Votre satisfaction est notre devoir.
                </p>
                <ul class="contact-short-info mt-4">
                    <li class="mb-3">
                        <i class="tf-ion-ios-home"></i>
                        <span>Immeuble JAGUAR, Première étage - Local 106, 15/17 Colonnel Ebeya, Gombe, Commerce, KINSHASA, République Démocratique du Congo.</span>
                    </li>
                    <li class="mb-3">
                        <i class="tf-ion-android-phone-portrait"></i>
                        <span>Téléphone : +243 905057618</span>
                    </li>
                    <li>
                        <i class="tf-ion-android-mail"></i>
                        <span>Adresse email: info@kimengin.com</span>
                    </li>
                </ul>
                <!-- Footer Social Links -->
                <div class="social-icon">
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100082984827940&mibextid=LQQJ4d"><i
                                    class="tf-ion-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/engineering_kim?t=Ahg4HqWWEsDcU75v85SEIQ&s=03"><i
                                    class="tf-ion-social-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/kim_engineering/?igshid=OGQ5ZDc2ODk2ZA=="><i
                                    class="tf-ion-social-instagram-outline"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/kim-engineering-b6b45a264"><i
                                    class="tf-ion-social-linkedin-outline"></i></a></li>
                    </ul>
                </div>
                <!--/. End Footer Social Links -->
            </div>
            <!-- / End Contact Details -->

            <!-- Contact Form -->
            <div class="contact-form col-md-6 ">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form method="POST" role="form" action="{{ url('/contactez-nous') }}">
                    {{ csrf_field() }}
                    <div class="form-group mb-4">
                        <input type="text" placeholder="Votre Nom" class="form-control" name="name"
                            id="name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <input type="email" placeholder="Votre Email" class="form-control" name="email"
                            id="email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" placeholder="Votre téléphone" class="form-control" name="phone"
                            id="phone">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <input type="text" placeholder="Sujet" class="form-control" name="subject" id="subject">
                        @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                        @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                    <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-transparent" value="Envoyer">
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.559370960803!2d15.310889600000007!3d-4.305386899999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3367f3514623%3A0x73114a3cd065821e!2sJaquar%20Kinshasa!5e0!3m2!1sfr!2scd!4v1734690824969!5m2!1sfr!2scd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--====  End of Google Map  ====-->



@include('include_pages.client_footer')
@endsection
