@extends('layouts.client')
@section('title')
Nos Logettes
@endsection
@section('content')
@include('include_pages.client_navbar')
@section('breadcrumb_title')
Logettes
@endsection
@include('include_pages.client_breadcrumb')
<section class="promo-video section-sm">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2>Notre logette Intelligente</h2>
					<p>Une logette qui gère automatiquemennt l'électricité d'un batiment, qui fonctionne en monophasé, biphasé
						et triphasé; connectée à une application mobile qui permet la commande à distance de la logette et donne en temps réel
						la température, l'humidité, les tensions de la logette et bien d'autres fonctionnalités.
					</p>
					<div class="border"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- /section title -->
			<div class="col-md-8 mx-auto">
				{{-- <iframe src="https://www.youtube.com/watch?v=DPBRGWUgQsA&list=RDfXl5dPuiJa0&index=6" width="100%" height="360" frameborder="0"
					webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}
			</div>
		</div>
	</div>
</section>
<!-- Start Pricing section
		=========================================== -->
<section class="pricing-table" id="pricing">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title title-white text-center ">
					<h2>Notre meilleur tarif</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium soluta deserunt eaque, est, quia hic odit sed incidunt officiis quidem.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>
		<div class="row">
			<!-- single pricing table -->
			<div class="col-lg-4 col-md-6">
				<div class="pricing-item">

					<!-- plan name & value -->
					<div class="price-title">
						<h3>Basic</h3>
						<strong class="value">$19</strong>
						<p>Perfect for single freelancers who work by themselves</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li><i class="tf-ion-ios-arrow-forward"></i> 1GB Disk Space</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 10 Email Account</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 1 GB Storage</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 2 GB Bandwidth</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="contact.html">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->

			<!-- single pricing table -->
			<div class="col-lg-4 col-md-6  ">
				<div class="pricing-item">

					<!-- plan name & value -->
					<div class="price-title">
						<h3>Standard</h3>
						<strong class="value">$39</strong>
						<p>Suitable for small businesses with up to 5 employees</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li><i class="tf-ion-ios-arrow-forward"></i> 1GB Disk Space</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 50 Email Account</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 1 GB Storage</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 10 GB Bandwidth</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="contact.html">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->

			<!-- single pricing table -->
			<div class="col-lg-4 col-md-6 ">
				<div class="pricing-item">

					<!-- plan name & value -->
					<div class="price-title">
						<h3>Enterprise</h3>
						<strong class="value">$59</strong>
						<p>Great for large businesses with more than 5 employees</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Disk Space</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Email Account</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Storage</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Bandwidth</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="contact.html">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->


		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

@include('include_pages.client_footer')
@endsection
