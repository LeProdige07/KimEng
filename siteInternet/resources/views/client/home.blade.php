@extends('layouts.client')
@section('title')
Accueil
@endsection
@section('content')

@include('include_pages.client_navbar')

@include('include_pages.client_slider')

@include('include_pages.client_services')

@include('include_pages.client_apropos')

@include('include_pages.client_contenu')

@include('include_pages.client_temoignage')

@include('include_pages.client_news')

@include('include_pages.client_footer')
@endsection
