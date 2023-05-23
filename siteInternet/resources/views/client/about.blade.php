@extends('layouts.client')
@section('title')
A propos de nous
@endsection
@section('content')

@include('include_pages.client_navbar')

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>A propos de nous</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{url('/')}}" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">A propos de nous</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-20">
				<h2 class="mb-3">We Create Designs<br> and technology</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus
					dolor harum voluptatibus modi dicta ducimus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat
					cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas.
					Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam!
				</p>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<img loading="lazy" class="img-fluid" src="frontend/images/company/company-image.jpg" alt="">
			</div>
		</div>
	</div>
</section>


<section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Notre Mission</h3>
				<p>Est de résoudre les problèmes de la société avec la nouvelle technologie, d'où notre projet phare 
					de la LOGETTE INTELLIGENTE qui vient résoudre un problème réel de mauvaise manipulation de l'électricité en facilitant 
					la gestion de l'électricité à partir d'un système intelligent.
					Et parce que chaque jour, nous sommes confrontés aux problèmes, nous continuerons d'innover pour vous apporter les solutions 
					technologiques adaptées à ces problèmes.
				</p>
				<img loading="lazy" src="frontend/images/company/company-image-2.jpg" alt="" class="img-fluid mt-30">
			</div>
			<div class="col-md-6 mt-5 mt-md-0">
				<h3>Notre Vision</h3>
				<p>Nous sommes à l'ère du numérique, la 4ème révolution industrielle. La seule option qui se présente à notre pays est de s'adapter ou de disparaitre.
					C'est pourquoi nous nous donnons cette lourde charge de révolutionner la RDC avec les nouvelles technologies. Le numérique est actuellement une des portes vers le développement durable.
					Notre bien aimé pays doit s'adapter et évoluer dans le numérique. Telle est notre vision.
				</p>
				<img loading="lazy" src="frontend/images/company/company-image-3.jpg" alt="" class="img-fluid mt-30">
			</div>
		</div>
	</div>
</section>


<section class="promo-video section-sm">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2>Our Promo Video</h2>
					<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu.Sed condimentum iaculis ex,
						in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
					<div class="border"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- /section title -->
			<div class="col-md-8 mx-auto">
				<iframe src="https://player.vimeo.com/video/51119176" width="100%" height="360" frameborder="0"
					webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

<!--
Start Call To Action
==================================== -->
<section class="call-to-action-2 section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Concevoir les systèmes numériques intelligents qui répondent à vos besoins 
					en respectant les normes de sécurité et en offrant un environnement sans danger.</h2>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<section class="section gallery">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center">
					<h2>Sneak Peak Gallery</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore numquam esse vitae recusandae qui
						aspernatur, blanditiis, laboriosam dignissimos dolore facere provident ex? Porro, praesentium consectetur
						tempore. Nulla, error eius dolorem.</p>
						<div class="border"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="company-gallery">
					<img loading="lazy" src="frontend/images/company/gallery-1.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-2.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-3.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-4.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-5.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-5.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-1.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-2.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-3.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-4.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-5.jpg" alt="">
					<img loading="lazy" src="frontend/images/company/gallery-5.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Start Our Team
		=========================================== -->
<section class="team" id="team">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center ">
					<h2>Our Team</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati, quis
						similique quos.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>
		<div class="row">
			<!-- team member -->
			<div class="col-lg-4 col-md-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img loading="lazy" class="img-fluid" src="frontend/images/team/member-1.jpg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Michael Jonson</h3>
						<span>Head Of Marketing</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->

				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-lg-4 col-md-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img loading="lazy" class="img-fluid" src="frontend/images/team/member-2.jpg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Carrick Mollenkamp</h3>
						<span>Web Developer</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-lg-4 col-md-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img loading="lazy" class="img-fluid" src="frontend/images/team/member-3.jpg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>David Gauthier</h3>
						<span>Head Of Management</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->

				</div>
			</div>
			<!-- end team member -->
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->
<!--
Start Counter Section
==================================== -->
@include('include_pages.client_contenu')

@include('include_pages.client_footer')
@endsection
