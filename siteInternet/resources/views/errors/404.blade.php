@extends('layouts.client')
@section('title')
Page introuvable : 404
@endsection
@section('content')
<section class="page-404 section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>404</h1>
				<h2>Page introuvable</h2>
				<p>Désolé, cette page que vous essayez de voir est introuvable.</p>
				<a href="{{url('/')}}" class="btn btn-main mt-20">Aller à l'accueil</a>
			</div>
		</div>
	</div>
</section>
@endsection
