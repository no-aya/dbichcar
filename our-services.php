<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Nos services</title>
	<?php include("includes/components.html") ?>
</head>

<body>

	<!--Loader Start-->
	<?php include("includes/loader.html"); ?>
	<!--Loader End-->

	<!--Page Wrapper Start-->
	<div id="wrapper" class="our-service">

		<!--Header Section Start-->
		<?php include("includes/menu.html") ?>
		<!--Header Section End-->

		<!--Content Section Start-->
		<div id="content">
			<section class="banner2" style="background-image: url(https://images.unsplash.com/photo-1616255956153-4e681ebf8442?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=795&q=80); filter: brightness(0.9);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 ">
							<h1>Nos services</h1>
						</div>
						<div class="col-xs-12 col-sm-6">
							<ol class="breadcrumb">
								<li>
									<a href=".">Acceuil</a>
								</li>
								<li class="active">
									Nos services
								</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<div class="container">
				<div class="row po-rel pattern">
					<div class="col-xs-12 col-sm-9">
						<div class="row services-inner-section">
							<div class="col-xs-12 col-sm-6">
								<div class="view-services">
									<figure class="services-img-section">
										<a class="fancybox-button" data-fancybox-group="fancybox-button" href="assets/images/service-img1.jpg" title=""> <img src="https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="service-img1" /></a>
										<div class="img-overlay">
											<div class="img-overlay-wrapper">
												<h6><a href="services-page.php"><i class="fa fa-plus-circle"></i>Voir le service</a></h6>
											</div>
										</div>
									</figure>

									<h5 class="view-title-style">Assurance Complète incluse</h5>
									<p>
										Fusce vulputate eleifend sapien. stibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan
									</p>
									<a href="services-page.php" class="read-more-btn">Lire plus<i class="fa fa-angle-right"></i></a>
								</div>

								<div class="view-services">
									<figure class="services-img-section">
										<img src="https://images.unsplash.com/photo-1563720223523-491ff04651de?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="service-img4" />
										<div class="img-overlay">
											<div class="img-overlay-wrapper">
												<h6><a href="services-page.php"><i class="fa fa-plus-circle"></i>Voir le service</a></h6>
											</div>
										</div>
									</figure>
									<h5 class="view-title-style">Location voitures de luxe</h5>
									<p>
										Fusce vulputate eleifend sapien. stibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan
									</p>
									<a href="services-page.php" class="read-more-btn">Lire plus<i class="fa fa-angle-right"></i></a>
								</div>


							</div>

							<div class="col-xs-12 col-sm-6">

								<div class="view-services">
									<figure class="services-img-section">
										<img src="https://images.unsplash.com/photo-1429216967620-ece20ff3a5f9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=755&q=80" alt="service-img4" />
										<div class="img-overlay">
											<div class="img-overlay-wrapper">
												<h6><a href="services-page.php"><i class="fa fa-plus-circle"></i>Voir le service</a></h6>
											</div>
										</div>
									</figure>
									<h5 class="view-title-style">Transparence & confiance</h5>
									<p>
										Fusce vulputate eleifend sapien. stibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan
									</p>
									<a href="services-page.php" class="read-more-btn">Lire plus<i class="fa fa-angle-right"></i></a>
								</div>

								<div class="view-services">
									<figure class="services-img-section">
										<img src="https://images.pexels.com/photos/97079/pexels-photo-97079.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="service-img2" />
										<div class="img-overlay">
											<div class="img-overlay-wrapper">
												<h6><a href="services-page.php"><i class="fa fa-plus-circle"></i>Voir le service</a></h6>
											</div>
										</div>
									</figure>
									<h5 class="view-title-style">Délivré sur place</h5>
									<p>
										Fusce vulputate eleifend sapien. stibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan
									</p>
									<a href="services-page.php" class="read-more-btn">Lire plus<i class="fa fa-angle-right"></i></a>
								</div>

							</div>
						</div>

					</div>

					<div class="col-xs-12 col-sm-3">
					<?php include("includes/help-card.html")?>

						<a href="#" class="orange-btn pdf-down"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Télecharger notre brochure</a>

						<div class="inner-info-section">
							<?php include("includes/services-card.html")?>
							<?php include("includes/contact-card.html") ?>
						</div>

					</div>

					<div class="border-line">
						&nbsp;
					</div>

				</div>

			</div>

		</div>
		<!--Content Section End-->

		<!--Footer Section start-->
		<?php include("includes/footer.html") ?>
		<!--Footer Section End-->
	</div>
	<!--Page Wrapper End-->

	<?php include("includes/scripts.html") ?>

</body>

</html>