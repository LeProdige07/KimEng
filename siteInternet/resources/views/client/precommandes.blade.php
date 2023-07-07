@extends('layouts.client')
@section('title')
    Précommande de la Logette
@endsection
@section('content')
    @include('include_pages.client_navbar')
@section('breadcrumb_title')
    Précommande de la Logette Intelligente
@endsection
@include('include_pages.client_breadcrumb')

<!-- Start Pricing section
  =========================================== -->
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center">
                    <h2>Précommandez la logette intelligente</h2>
                    <p>A travers ce formulaire, nous recevons votre précommande pour notre logette intelligente qui sera
                        bientôt sur le marché.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>
        <div class="row">
            <!-- Contact Form -->
            <div class="contact-form col-md-6 ">
                @if (Session::has('status'))
                    <div class="alert alert-success">
                        {{ Session::get('status') }}
                    </div>
                @endif
                <form id="contact-form" method="post" role="form" action="{{ route('logette_infos.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group mb-4">
                        <span class="text-danger">*</span>
                        <input type="text" placeholder="Votre Nom" class="form-control" name="nom" id="nom"
                            required>
                        @if ($errors->has('nom'))
                            <span class="text-danger">{{ $errors->first('nom') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <span class="text-danger">*</span>
                        <input type="text" placeholder="Votre Post-nom" class="form-control" name="postnom"
                            id="postnom" required>
                        @if ($errors->has('postnom'))
                            <span class="text-danger">{{ $errors->first('postnom') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <span class="text-danger">*</span>
                        <input type="text" placeholder="Votre Prénom" class="form-control" name="prenom"
                            id="prenom" required>
                        @if ($errors->has('prenom'))
                            <span class="text-danger">{{ $errors->first('prenom') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <span class="text-danger">*</span>
                        <input type="email" placeholder="Votre Email" class="form-control" name="email"
                            id="email" required>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <input type="text" placeholder="Votre Téléphone" class="form-control" name="tel"
                            id="tel">
                        @if ($errors->has('tel'))
                            <span class="text-danger">{{ $errors->first('tel') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <span class="text-danger">*</span>
                        <input type="text" placeholder="Votre Profession" class="form-control" name="fonction"
                            id="fonction" required>
                        @if ($errors->has('fonction'))
                            <span class="text-danger">{{ $errors->first('fonction') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <span class="text-danger">*</span>
                        <select name="commune" id="commune" class="form-control" required>
                            <option value="Lingwala">Lingwala</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Ngaliema">Ngaliema</option>
                            <option value="Kintambo">Kintambo</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="Mont-Ngafula">Mont-Ngafula</option>
                            <option value="Barumbu">Barumbu</option>
                            <option value="Bumbu">Bumbu</option>
                            <option value="Selembao">Selembao</option>
                            <option value="Ngiri-Ngiri">Ngiri-Ngiri</option>
                            <option value="Kalamu">Kalamu</option>
                            <option value="Bandal">Bandal</option>
                            <option value="Limete">Limété</option>
                            <option value="Lemba">Lemba</option>
                            <option value="Matete">Matete</option>
                            <option value="Ngaba">Ngaba</option>
                            <option value="Makala">Makala</option>
                            <option value="Masina">Masina</option>
                            <option value="Kinsensu">Kinsensu</option>
                            <option value="Ndjili">Nd'jili</option>
                            <option value="Kimbanseke">Kimbanseke</option>
                            <option value="Nsele">Nsele</option>
                            <option value="Kinkole">Kinkole</option>
                            <option value="Maluku">Maluku</option>
                        </select>
                        @if ($errors->has('commune'))
                            <span class="text-danger">{{ $errors->first('commune') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <input type="text" placeholder="Votre Quartier" class="form-control" name="quartier"
                            id="quartier">
                        @if ($errors->has('quartier'))
                            <span class="text-danger">{{ $errors->first('quartier') }}</span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <input type="text" placeholder="Rue et N° " class="form-control" name="rue"
                            id="rue">
                        @if ($errors->has('rue'))
                            <span class="text-danger">{{ $errors->first('rue') }}</span>
                        @endif
                    </div>

                    <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-transparent" value="Soumettre">
                    </div>

                </form>
            </div>
            <!-- ./End Contact Form -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

@include('include_pages.client_footer')
@endsection
