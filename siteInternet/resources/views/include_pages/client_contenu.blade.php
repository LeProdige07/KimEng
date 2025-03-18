<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 text-center">
				<h2>Réalisons Ensemble</h2>
				<p>"Une étoile ne suffit pas pour éclairer la nuit, il en faut plusieurs", dit-on.
					Nous sommes passionnés de pouvoir partager et inspirer les autres avec nos prouesses technologiques.<br>
				Faites-nous confiance.</p>
				<a href="{{url('/contact')}}" class="btn btn-main">Contactez-nous</a>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Counter Section
==================================== -->
<section class="counter-wrapper section-sm">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 text-center">
				<div class="title">
					<h2>Nos valeurs</h2>
					<p>Nos réalisations, projet après projet, font de nous une des meilleures entreprises dans le numérique en République Démocratique du Congo.
						Dans notre travail, nous cultivons des valeurs telles que l'innovation, la cohésion, l'intégrité, l'honnêteté, la responsabilité et l'engagement
						qui rendent fiers de continuer à vous satisfaire avec nos services.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- first count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-alarm-outline"></i>
					<div>
						<span class="counter" data-count="{{ $count_projets }}">0</span>
					</div>
					<h3>Clients Satisfaits</h3>
				</div>
			</div>
			<!-- end first count item -->

			<!-- second count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-analytics-outline"></i>
					<div>
						<span class="counter" data-count="{{ $count_projets }}">0</span>
					</div>
					<h3>Projets Réalisés</h3>
				</div>
			</div>
			<!-- end second count item -->

			<!-- third count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-compose-outline"></i>
					<div>
						<span class="counter" data-count="{{ $count_partenaires }}">0</span>
					</div>
					<h3>Collaborations</h3>

				</div>
			</div>
			<!-- end third count item -->

			<!-- fourth count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item kill-border">
					<i class="tf-ion-ios-bolt-outline"></i>
					<div>
						<span class="counter" data-count="{{ $count_formations }}">0</span>
					</div>
					<h3>Formations</h3>
				</div>
			</div>
			<!-- end fourth count item -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->
