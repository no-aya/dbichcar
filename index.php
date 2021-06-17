<!DOCTYPE html>
<html lang="FR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>DBICHCAR</title>
	<?php include("includes/components.html"); ?>

</head>

<body data-ng-app="themeonApp">

	<?php include("includes/loader.html") ?>

	<!--Page Wrapper Start-->
	<div id="wrapper" class="home">

		<!--Header Section Start-->
		<?php include("includes/menu.html") ?>
		<!--Header Section End-->

		<!--banner Section start-->
		<section class="banner">
			<div id="rev_slider_wrapper">
				<div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper " data-alias="concept1" style="background-color:#000000;padding:0px;">
					<!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
					<div id="rev_slider_202_1" class="rev_slider" style="display:none;" data-version="5.1.1RC">
						<ul>
							<!-- SLIDE  -->
							<li data-index="rs-672">
								<!-- MAIN IMAGE -->
								<img src="https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="rev-slidebg" data-no-retina>
							</li>
							<li data-index="rs-672">
								<!-- MAIN IMAGE -->
								<img src="https://images.pexels.com/photos/1134857/pexels-photo-1134857.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="rev-slidebg" data-no-retina>
							</li>
						</ul>
					</div>
				</div>
			</div>


			<!--reserve car section start -->
			<div class="reserve-form">
				<div class="container">
					<div class="row reserve-form-wrap">
						<div class="form-head clearfix">
							<div class="location">
								<h2>Réservez votre voiture</h2>
							</div>
							<div class="availability">
								<h2>6 <span>Disponibles</span></h2>
							</div>
						</div>

						<form>
							<div class="row">
								<div class="col-xs-12 col-sm-6">

									<label>Agence de départ</label>
									<div class="input-wrap clearfix">
										<input type="text" class="form-control" placeholder="Aéroport ou adresse">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<label>Agence d'arrivée</label>
									<div class="input-wrap clearfix">
										<input type="text" class="form-control" placeholder="Aéroport ou adresse" id="agence-arr">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>

								</div>
								<div class="col-xs-12 col-sm-3">
									<label>Date de départ</label>
									<div class="input-wrap clearfix">
										<input type="text" class="form-control pick-date" placeholder="04/03/2021">
										<i class="fa fa-calendar-o" aria-hidden="true"></i>
									</div>

									<label>Date d'arrivée</label>
									<div class="input-wrap clearfix">
										<input type="text" class="form-control pick-date" placeholder="06/08/2021">
										<i class="fa fa-calendar-o" aria-hidden="true"></i>
									</div>

								</div>
								<div class="col-xs-12 col-sm-3">
									<label>Heure de départ</label>
									<div class="input-wrap clearfix">
										<input type="text" class="form-control time-pick" placeholder="21:40">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
									</div>

									<label>Heure d'arrivée</label>
									<div class="input-wrap clearfix">
										<input type="text" class="form-control time-pick" placeholder="07:00">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
									</div>

								</div>
							</div>
							<input type="checkbox" name="vehicle2" value="Car" id="car-check" onClick="adress();">
							<label class="check" for="car-check"><span class="check-box" onClick="adress();"></span>
								Retouner à la même agence </label>
							<button class="find-car">
								<i class="fa fa-binoculars" aria-hidden="true"></i>Trouver une voiture
							</button>
						</form>
						<script>
							function adress() {
								if (document.getElementById("car-check").checked) {
									document.getElementById("agence-arr").disabled = true;
								} else {
									document.getElementById("agence-arr").disabled = false;
								}
							}
						</script>

					</div>
				</div>
			</div>

			<!--reserve car section start -->
		</section>
		<!--banner Section End-->

		<!--Content Area Start-->
		<div id="content">
			<!-- get our best offer section start-->
			<section class="get-bestoffer">

				<div class="container">
					<div class="row">
						<h2>Offrez vous <span>le meilleur</span></h2>
						<div class="get-left col-xs-12 col-sm-6">
							<ul>
								<li>
									<div class="clearfix">
										<span class="offer-icon"><i class="fa fa-car" aria-hidden="true"></i></span>
										<div class="offer-details">
											<h3>Large variété de voiture</h3>
											<div class="divider-dotted">

											</div>
											<p>
												Lorem ipsum dolor sit amet, onsectetuer adipiscing elitcommodo ligula
												eget dolor. Aenean massa. Cum sociis natoque tibus et magnis dis
												parturient montes.
											</p>
										</div>
									</div>
								</li>

								<li>
									<div class="clearfix">
										<span class="offer-icon"> <i class="fa fa-briefcase" aria-hidden="true"></i></span>
										<div class="offer-details">
											<h3>Assurance incluse</h3>
											<div class="divider-dotted">

											</div>
											<p>
												Lorem ipsum dolor sit amet, onsectetuer adipiscing elitcommodo ligula
												eget dolor. Aenean massa. Cum sociis natoque tibus et magnis dis
												parturient montes.
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="clearfix">
										<span class="offer-icon"><i class="fa fa-binoculars" aria-hidden="true"></i></span>
										<div class="offer-details">
											<h3>Capturez nos bons plans</h3>
											<div class="divider-dotted">

											</div>
											<p>
												Lorem ipsum dolor sit amet, onsectetuer adipiscing elitcommodo ligula
												eget dolor. Aenean massa. Cum sociis natoque tibus et magnis dis
												parturient montes.
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-4 text-center car-center-pic">
							<img src="assets/images/2016-Volvo-XC90-top-view1.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- get our best offer section start-->
			<!-- we_do-wrap section start here -->
			<section class="we_do-wrap">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12  col-md-5 car-drive-right">
							<div class="car-pic">

							</div>
						</div>
						<div class="col-xs-12  col-md-7 we-do-right">
							<div class="we-do-right-wrap">
								<div class="section-head">
									<h2>ce que <strong>nous faisons</strong></h2>
								</div>
								<div class="triangle-divider triangle-gap">

								</div>
								<div class="we_do-description clearfix">
									<p>
										Quelle meilleure façon d’explorer une nouvelle ville que de naviguer autour de
										la ville dans une location voiture Marrakech aéroport. Dirigez-vous sans effort
										vers la ville et prenez toutes les attractions majeures de la ville. DBICHCAR
										fournit à ses clients des véhicules qui répondent le mieux à leurs besoins en
										matière de transport. Dites-nous vos besoins et nous fournirons la solution la
									</p>
									<div class="we-do-right-info  ">
										<p>
											plus satisfaisante. Quel que soit le type d’événement, nos conseillers
											professionnels vous conseillent gratuitement sur la base de la description
											de votre mission.
										</p>

										<ul class="white-list list-styled">
											<li>
												<span> Fournir la solution la plus satisfaisante</span>
											</li>
											<li>
												<span> Fournir un service irréprochable</span>
											</li>
											<li>
												<span> Le tout à des prix affordable à tous</span>
											</li>
										</ul>
									</div>

									<blockquote class="blockquote  blockquote-warning we-do-blockquote">
										<p>
											<span class="blockquote-sign">’’</span>Notre objectif est de vous fournir le
											meilleur service et le meilleur prix.
										</p>
									</blockquote>
								</div>

								<ul class="feature-we_do clearfix">
									<li class="small-item">
										<i class="fa fa-users" aria-hidden="true"></i>Équipe D'assistance
									</li>
									<li>
										<i class="fa fa-user-secret" aria-hidden="true"></i>Conseillers automobiles
									</li>
									<li>
										<i class="fa fa-life-ring" aria-hidden="true"></i>Assistance 24h/24 et 7j/7
									</li>
									<li class="small-item">
										<i class="fa fa-lock" aria-hidden="true"></i>Des véhicules sécurisés
									</li>
									<li>
										<i class="fa fa-map" aria-hidden="true"></i>Suivi GPS et aide
									</li>
									<li>
										<i class="fa fa-car" aria-hidden="true"></i>Large gamme de voitures
									</li>
								</ul>

							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- we_do-wrap section end here -->
			<!-- rental vehicles section start here -->
			<section class="rental-vehicles">
				<div class="container">
					<div class="row">
						<h2>Nos voitures <span>en vedette</span></h2>
						<p>
							Lorem ipsum dolor sit amet, onsectetuer adipiscing elitcommodo ligula eget dolor .
						</p>
						<div class="rental-per-day">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<div class="rental-car">
										<figure class="car-img">
											<img src="https://www.oyamacar.fr/images/data/03-2020/front-5e675cfece6328f14.png" alt="" />
										</figure>
										<div class="car-details ">
											<div class="car-info clearfix">
												<h5>Peugeot 208 Diesel</h5>
											</div>
											<span>à partir de <small> 26 €</small> <strong>/ par jour</strong></span>

										</div>
										<ul class="car-more-info clearfix">
											<li>
												<i class="fa fa-car" aria-hidden="true"></i>4
											</li>
											<li>
												<i class="fa fa-tachometer" aria-hidden="true"></i>Diesel
											</li>
											<li>
												Manuel
											</li>
											<li>
												<i class="fa fa-road" aria-hidden="true"></i>15000
											</li>
											<li class="orange-btn">
												<a href="vehicles-page.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Réserver</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="rental-car">
										<figure class="car-img"><img src="https://www.oyamacar.fr/images/data/03-2020/front-5e67626f8ab336a10.png" alt="" /></figure>
										<div class="car-details ">
											<div class="car-info clearfix">
												<h5>Dacia Duster Automatique</h5>
											</div>
											<span>à partir de<small> 40€</small> <strong>/ par jour</strong></span>

										</div>
										<ul class="car-more-info clearfix">
											<li>
												<i class="fa fa-car" aria-hidden="true"></i>4
											</li>
											<li>
												<i class="fa fa-tachometer" aria-hidden="true"></i>Diesel
											</li>
											<li>
												<i class="fa fa-cog" aria-hidden="true"></i>Auto
											</li>
											<li>
												<i class="fa fa-road" aria-hidden="true"></i>15000
											</li>
											<li class="orange-btn">
												<a href="vehicles-page.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Réserver</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<div class="rental-car">
										<figure class="car-img"><img src="https://www.oyamacar.fr/images/data/03-2020/front-5e675fc0bab443a06.png" alt="" /></figure>
										<div class="car-details ">
											<div class="car-info clearfix">
												<h5>Citroen C3 Diesel</h5>
											</div>
											<span>à partir <small> 28 €</small> <strong>/ par jour</strong></span>

										</div>
										<ul class="car-more-info clearfix">
											<li>
												<i class="fa fa-car" aria-hidden="true"></i>4
											</li>
											<li>
												<i class="fa fa-tachometer" aria-hidden="true"></i>Diesel
											</li>
											<li>
												<i class="fa fa-cog" aria-hidden="true"></i>Auto
											</li>
											<li>
												<i class="fa fa-road" aria-hidden="true"></i>15000
											</li>
											<li class="orange-btn">
												<a href="vehicles-page.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Réserver</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="rental-car">
										<figure class="car-img">
											<img src="https://www.oyamacar.fr/images/data/03-2020/front-5e67609b7175e892c.jpg" alt="" />
										</figure>

										<div class="car-details ">
											<div class="car-info clearfix">
												<h5>Dacia Logan diesel</h5>
											</div>
											<span>à partir de <small> 30 €</small> <strong>/ par jour</strong></span>

										</div>
										<ul class="car-more-info clearfix">
											<li>
												<i class="fa fa-car" aria-hidden="true"></i>4
											</li>
											<li>
												<i class="fa fa-tachometer" aria-hidden="true"></i>Diesel
											</li>
											<li>
												<i class="fa fa-cog" aria-hidden="true"></i>Auto
											</li>
											<li>
												<i class="fa fa-road" aria-hidden="true"></i>15000
											</li>
											<li class="orange-btn">
												<a href="vehicles-page.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Réserver</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- rental vehicles section end here -->
			<section class="all-vehicles-wrapper">
				<div class="offer-overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<div class="all-vehicle">
								<h2><span> Offres</span> EXCLUSIVES</h2>
								<p>
									Lorem ipsum dolor sit amet, onsectetuer adipiscing elitcommodo ligula eget dolor.
									Aenean massa. Cum sociis natoque tibus et magnis dis parturient montes.
								</p>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<li class="orange-btn orange-btn-edit">
								<a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>Découvrir maintenant</a>
							</li>
						</div>
					</div>
				</div>
			</section>
			<section class="filter-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php include("includes/filter-bar.html") ?>
						</div>

					</div>
					<div class="row">
						<div class="col-sm-4 col-md-3">
							<div class="filter-cars">
								<div class="filter-inner">
									<img src="https://www.oyamacar.fr/images/data/03-2020/front-5e675df103d37821f.png" alt="" />
								</div>
								<div class="filter-car-details clearfix">

									<h5>Dacia Logan Essence </h5>
									<span>à partir <em>38 €</em> <small> 30 €</small> <strong>/ par jour</strong></span>
									<span class="discount">-20%</span>
								</div>
								<ul class="filter-car-more-info clearfix">
									<li>
										<i class="fa fa-car" aria-hidden="true"></i>4
									</li>
									<li>
										<i class="fa fa-tachometer" aria-hidden="true"></i>Essence
									</li>
									<li>
										<i class="fa fa-cog" aria-hidden="true"></i>Manuel
									</li>
									<li>
										<i class="fa fa-road" aria-hidden="true"></i>15000
									</li>
									<li class="orange-btn">
										<a href="vehicles-page.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Réserver</a>
									</li>
								</ul>

							</div>

						</div>
						<div class="col-sm-4 col-md-3">
							<div class="filter-cars">
								<div class="filter-inner">
									<img src="https://www.oyamacar.fr/images/data/03-2020/front-5e67626f8ab336a10.png" alt="" />
								</div>
								<div class="filter-car-details clearfix">

									<h5>Dacia Duster Automatique</h5>
									<span>à partir de <small> 40 €</small> <strong>/ par jour</strong></span>

								</div>
								<ul class="filter-car-more-info clearfix">
									<li>
										<i class="fa fa-car" aria-hidden="true"></i>4
									</li>
									<li>
										<i class="fa fa-tachometer" aria-hidden="true"></i>Diesel
									</li>
									<li>
										<i class="fa fa-cog" aria-hidden="true"></i>Auto
									</li>
									<li>
										<i class="fa fa-road" aria-hidden="true"></i>15000
									</li>
									<li class="orange-btn">
										<a href="vehicles-page.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Réserver</a>
									</li>
								</ul>

							</div>

						</div>
						<div class="col-sm-4 col-md-3">
							<div class="filter-cars">
								<div class="filter-inner">
									<img src="https://www.oyamacar.fr/images/data/03-2020/front-5e67626f8ab336a10.png" alt="" />
								</div>
								<div class="filter-car-details clearfix">

									<h5>Dacia Duster Automatique</h5>
									<span>à partir de <small> 40 €</small> <strong>/ par jour</strong></span>

								</div>
								<ul class="filter-car-more-info clearfix">
									<li>
										<i class="fa fa-car" aria-hidden="true"></i>4
									</li>
									<li>
										<i class="fa fa-tachometer" aria-hidden="true"></i>Diesel
									</li>
									<li>
										<i class="fa fa-cog" aria-hidden="true"></i>Auto
									</li>
									<li>
										<i class="fa fa-road" aria-hidden="true"></i>15000
									</li>
									<li class="orange-btn">
										<a href="vehicles-page.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Réserver</a>
									</li>
								</ul>

							</div>

						</div>
						<div class="col-sm-4 col-md-3">
							<div class="filter-cars">
								<div class="filter-inner">
									<img src="https://www.oyamacar.fr/images/data/03-2020/front-5e67626f8ab336a10.png" alt="" />
								</div>
								<div class="filter-car-details clearfix">

									<h5>Dacia Duster Automatique</h5>
									<span>à partir de <small> 40 €</small> <strong>/ par jour</strong></span>

								</div>
								<ul class="filter-car-more-info clearfix">
									<li>
										<i class="fa fa-car" aria-hidden="true"></i>4
									</li>
									<li>
										<i class="fa fa-tachometer" aria-hidden="true"></i>Diesel
									</li>
									<li>
										<i class="fa fa-cog" aria-hidden="true"></i>Auto
									</li>
									<li>
										<i class="fa fa-road" aria-hidden="true"></i>15000
									</li>
									<li class="orange-btn">
										<a href="vehicles-page.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Réserver</a>
									</li>
								</ul>

							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="preview-more">
								<a href="" class="button"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Voir
									plus</a>
							</div>
						</div>
					</div>
				</div>

			</section>
			<section class="need-help-wrapper">
				<div class="container">
					<div class="read-blog-wrapper">
						<div class="row">
							<div class="col-sm-12">
								<figure>
									<img src="assets/images/comma.png" alt="" />
								</figure>
								<h2>nos <strong> ACTULALItés</strong></h2>
								<p>
									Lorem ipsum dolor sit amet, onsectetuer adipiscing elitcommodo ligula eget dolor.
								</p>
								<p>
									Aenean massa. Cum sociis natoque tibus et magnis dis parturient montes.
								</p>
							</div>
						</div>
					</div>

					<div class="read-blog-listing">

						<div class="blog-read-wrap" id="blog-slider">
							<div class="item">
								<h5>Voitures neuves au Maroc : le marché a progressé de 13,60%</h5>
								<p>
									À regarder de plus près les chiffres du segment des véhicules particuliers pour ce
									seul mois de mai, 13 140 voitures particulières ont été vendues contre...
								</p>

								<div class="blog-date-comment">
									<span class="blog-date">06 Juin 2021</span>
								</div>
							</div>
							<div class="item">
								<h5>Voitures neuves au Maroc : le marché a progressé de 13,60%</h5>
								<p>
									À regarder de plus près les chiffres du segment des véhicules particuliers pour ce
									seul mois de mai, 13 140 voitures particulières ont été vendues contre...
								</p>

								<div class="blog-date-comment">
									<span class="blog-date">06 Juin 2021</span>
								</div>
							</div>
							<div class="item">
								<h5>Voitures neuves au Maroc : le marché a progressé de 13,60%</h5>
								<p>
									À regarder de plus près les chiffres du segment des véhicules particuliers pour ce
									seul mois de mai, 13 140 voitures particulières ont été vendues contre...
								</p>

								<div class="blog-date-comment">
									<span class="blog-date">06 Juin 2021</span>
								</div>
							</div>
							<div class="item">
								<h5>Voitures neuves au Maroc : le marché a progressé de 13,60%</h5>
								<p>
									À regarder de plus près les chiffres du segment des véhicules particuliers pour ce
									seul mois de mai, 13 140 voitures particulières ont été vendues contre...
								</p>

								<div class="blog-date-comment">
									<span class="blog-date">06 Juin 2021</span>
								</div>
							</div>
						</div>

						<a href="#" class="button carousal-btn"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Voir
							+</a>
					</div>

				</div>
			</section>
			<section>
				<div class="awards-wrapper">
					<div class="container-fluid">
					</div>
				</div>
			</section>
			<section class="map-wrapper">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13587.104038426043!2d-7.997682099999994!3d31.63998269999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b66db1a51e8ae9c!2sWeb%20agency%2C%20website%20design%20%26%20SEO!5e0!3m2!1sen!2sus!4v1623860370956!5m2!1sen!2sus" style="width: 100%;" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</section>
			<section class="contact-us-wrapper">
				<div class="container">
					<h2>Contactez-<span>Nous</span></h2>
					<div class="contact-us">
						<form name="contactForm" method="post" novalidate id="contact" class="contact-form" data-ng-controller='themeonCtrl'>
							<div class="row">

								<div class="col-sm-4">
									<div class="input-text-wrap">
										<input type="text" placeholder="Nom Complet" id="name" class="contact-name" name="name" required data-ng-model="contactformData.name" data-ng-class="{'error' : contactForm.name.$error.pattern || submit && contactForm.name.$invalid}" />
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<div class="input-text-wrap">
										<input type="email" placeholder="Email" id="email" class="contact-mail" name="email" required data-ng-model="contactformData.email" data-ng-class="{'error' : contactForm.email.$error.pattern || submit && contactForm.email.$invalid}" />
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<div class="input-text-wrap">
										<input type="text" placeholder="Objet" id="sub" class="contact-subject" name="subject" required data-ng-model="contactformData.subject" data-ng-class="{'error' : contactForm.subject.$error.required && contactForm.subject.$blured || submit && contactForm.subject.$invalid}" />
										<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
									</div>

								</div>
								<div class="col-sm-8">
									<div class="textarea-wrap">
										<textarea placeholder="Votre message ici" id="message" name="message" data-ng-model="contactformData.message" required data-ng-class="{'error' : contactForm.message.$error.required && contactForm.message.$blured || submit && contactForm.message.$invalid}"></textarea>
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</div>

								</div>

							</div>
							<div class="row pull-right">
								<button type="submit" class="orange-btn" data-ng-click="submitcontactForm(contactForm.$invalid)" data-ng-disabled="submitButtonDisabled">
									<i class="fa fa-plus-circle" aria-hidden="true"></i>Envoyer le message
								</button>
							</div>
						</form>
					</div>
				</div>
			</section>

		</div>
		<!--Content Area End-->


		<?php include("includes/footer.html") ?>

	</div>

	<?php include("includes/scripts.html") ?>
</body>

</html>