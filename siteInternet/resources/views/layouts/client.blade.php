<!DOCTYPE html>
<html lang="fr">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Kim Engineering | </title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="#" />

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="^{{asset('frontend/plugins/themefisher-font/style.css')}}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/lightbox2/css/lightbox.min.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/animate/animate.css')}}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/slick/slick.css')}}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

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
<script src="{{asset('frontend/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap4 -->
<script src="{{asset('frontend/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- Parallax -->
<script src="{{asset('frontend/plugins/parallax/jquery.parallax-1.1.3.js')}}"></script>
<!-- lightbox -->
<script src="{{asset('frontend/plugins/lightbox2/js/lightbox.min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('frontend/plugins/slick/slick.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('frontend/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- Smooth Scroll js -->
<script src="{{asset('frontend/plugins/smooth-scroll/smooth-scroll.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="{{asset('frontend/plugins/google-map/gmap.js')}}"></script>

<!-- Custom js -->
<script src="{{asset('frontend/js/script.js')}}"></script>

</body>

</html>
