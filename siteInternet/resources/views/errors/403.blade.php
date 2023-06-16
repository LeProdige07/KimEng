@extends('layouts.client')
@section('title')
Page introuvable : 403
@endsection
@section('content')
<section class="page-404 section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>403</h1>
				<h2>Page réfusée</h2>
				<p>Désolé, cette page que vous essayez de voir vous est réfusée.</p>
				<a href="{{url('/')}}" class="btn btn-main mt-20">Aller à l'accueil</a>
			</div>
		</div>
	</div>
</section>
@endsection