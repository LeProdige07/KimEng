<!DOCTYPE html>
<html lang="fr">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Kim Engineering | Est une entreprise qui oeuvre dans la conception électronique, Internet des objets,le Web, la domotique... | @yield('title')</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Site internet de Kim Engineering">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Kim Engineering">
  <meta name="generator" content="Kim Engineering">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/logos/LOGO-KIM-BLACK-PNG.png', env('REDIRECT_HTTPS'))}}" />

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/themefisher-font/style.css', env('REDIRECT_HTTPS'))}}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/bootstrap.min.css', env('REDIRECT_HTTPS'))}}">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/lightbox2/css/lightbox.min.css', env('REDIRECT_HTTPS'))}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/animate/animate.css', env('REDIRECT_HTTPS'))}}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/slick/slick.css', env('REDIRECT_HTTPS'))}}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('frontend/css/style.css', env('REDIRECT_HTTPS'))}}">

</head>
<body id="body">

  <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!--
  End Preloader
  ==================================== -->
<!-- Content -->

@yield('content')

<!-- End content -->

<!-- Main jQuery -->
<script src="{{asset('frontend/plugins/jquery/jquery.min.js', env('REDIRECT_HTTPS'))}}"></script>

<!-- Bootstrap4 -->
<script src="{{asset('frontend/plugins/bootstrap/bootstrap.min.js', env('REDIRECT_HTTPS'))}}"></script>
<!-- Parallax -->
<script src="{{asset('frontend/plugins/parallax/jquery.parallax-1.1.3.js', env('REDIRECT_HTTPS'))}}"></script>
<!-- lightbox -->
<script src="{{asset('frontend/plugins/lightbox2/js/lightbox.min.js', env('REDIRECT_HTTPS'))}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('frontend/plugins/slick/slick.min.js', env('REDIRECT_HTTPS'))}}"></script>
<!-- filter -->
<script src="{{asset('frontend/plugins/filterizr/jquery.filterizr.min.js', env('REDIRECT_HTTPS'))}}"></script>
<!-- Smooth Scroll js -->
<script src="{{asset('frontend/plugins/smooth-scroll/smooth-scroll.min.js', env('REDIRECT_HTTPS'))}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="{{asset('frontend/plugins/google-map/gmap.js', env('REDIRECT_HTTPS'))}}"></script>

<!-- Custom js -->
<script src="{{asset('frontend/js/script.js', env('REDIRECT_HTTPS'))}}"></script>

</body>

</html>
