<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portfolio evando arkana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="{{ asset('template_fe/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template_fe/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('template_fe/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('template_fe/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/style.css') }}">

	{{-- style --}}
	<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .social-icons a {
            text-decoration: none;
            color: #000;
            font-size: 2rem;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #0077b5;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">ARKANA<span>.</span></a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
					<li class="nav-item"><a href="#services-section" class="nav-link"><span>Certificate</span></a></li>
					<li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid px-md-0">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<div class="one-third order-md-last img" style="background-image:url(images/bg_1.jpg);">
							<div class="overlay"></div>
							<div class="overlay-1"></div>
						</div>
						<div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Hallo! Nama Saya Arkana</span>
								<h1 class="mb-4 mt-3">Creative <span>UI/UX</span> Designer &amp; Backend</h1>
								<p><a href="#" class="btn btn-primary">Hire me</a> <a href="#" class="btn btn-primary btn-outline-primary">Download CV</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid px-md-0">
					<div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<div class="one-third order-md-last img" style="background-image:url(images/bg_2.jpg);">
							<div class="overlay"></div>
							<div class="overlay-1"></div>
						</div>
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">We Design &amp; Build Website</span>
								<h1 class="mb-4 mt-3">Hi, I am <span>Arkana</span> This is my favorite work.</h1>
								<p><a href="#" class="btn btn-primary">Hire me</a> <a href="#" class="btn btn-primary btn-outline-primary">Download CV</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img bg-light" id="section-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-suitcase"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="750">0</strong>
							<span>Project Complete</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-loyalty"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="568">0</strong>
							<span>Happy Clients</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-coffee"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="478">0</strong>
							<span>Cups of coffee</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-calendar"></span>
						</div>
						<div class="text">
							<strong class="number" data-number="780">0</strong>
							<span>Years experienced</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img-about img d-flex align-items-stretch">
						<div class="overlay"></div>
						<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(template_fe/images/1.jpg);">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								@foreach($about as $about)
								<span class="subheading"></span>
								<h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">{{ $about->title }}</h2>
								<p></p>

								<ul class="about-info mt-4 px-md-0 px-2">
									<li class="d-flex"><span>Name:</span> <span>{{ $about->content }}</span></li>
									<li class="d-flex"><span>Date of birth:</span> <span>Oktober 16, 2007</span></li>
									<li class="d-flex"><span>Address:</span> <span>Bogor City</span></li>
									<li class="d-flex"><span>Zip code:</span> <span>16620</span></li>
									<li class="d-flex"><span>Email:</span> <span>evandoarkanaa@gmail.com</span></li>
									<li class="d-flex"><span>Phone: </span> <span>+62 85695212222</span></li>
								</ul>
								@endforeach
							</div>
							<div class="col-md-12">
								<div class="my-interest d-lg-flex w-100">
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-listening"></span>
										</div>
										<div class="text">Music</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-suitcases"></span>
										</div>
										<div class="text">Travel</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-video-player"></span>
										</div>
										<div class="text">Movie</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-football"></span>
										</div>
										<div class="text">Sports</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="ftco-section bg-light" id="skills-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Skills</span>
					<h2 class="mb-4">My Skills</h2>
					<p>skills that still need to be honed and developed</p>
				</div>
			</div>
			<div class="row progress-circle mb-5">
				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='95'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">95<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='98'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">98<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4">PHP</h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='68'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold">68<sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>

		
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="services-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<h2 class="mb-4">CERTIFICATE</h2>
					<p>several awards from those I participated in</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-3d-design"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Web Design</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div> 
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-app-development"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Web Application</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div> 
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-web-programming"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Web Development</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div> 
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-branding"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Banner Design</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div> 
				</div>
			</div>

	<section class="ftco-section ftco-project" id="projects-section">
		<div class="container-fluid px-md-4">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">PROJEK</h2>
					<p>Ini beberapa projek yang sudah berhasil saya kembangkan&diselesaikan</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(template_fe/images/projek1.png);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">TrackingAPP </a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(template_fe/images/projek2.png);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Dashboard &amp; Admin</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(template_fe/images/projek3.png);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Flutter</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	

	<footer class="ftco-footer ftco-section">
		<div class="container">
		  <div class="row justify-content-between">
			<div class="col-lg-4 col-md-6 mb-4">
			  <h3 class="footer-heading">About Me</h3>
			  <p>Hi, I am Evando Arkana, a passionate I am a student at SMKN 1 Ciomas dedicated to delivering excellent solutions and services to clients. Feel free to reach out to me for collaborations or inquiries.</p>
			</div>
	  
			<div class="col-lg-4 col-md-6 mb-4">
			  <h3 class="footer-heading">Contact Information</h3>
			  <ul class="list-unstyled">
				<li><span class="icon fa fa-map-marker"></span> Bogor City</li>
				<li><span class="icon fa fa-phone"></span> <a href="tel:+1234567890">+62 85695366102</a></li>
				<li><span class="icon fa fa-envelope"></span> <a href="mailto:your.email@example.com">evandoarkanaa@gmail.com</a></li>
			  </ul>
			</div>
	  
			<div class="col-lg-4 col-md-12">
			  <h3 class="footer-heading">Follow Me</h3>
			  <ul class="social-links list-inline">
				<li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
				<li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-tiktok"></i></a></li>
				<li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
			  </ul>
			</div>
		  </div>
	  
		  <div class="row mt-4">
			<div class="col-md-12 text-center">
			  <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script> All rights reserved. Designed with <span class="fa fa-heart text-danger"></span> by Evando Arkana</p>
			</div>
		  </div>
		</div>
	  </footer>
	  
	  <style>
	  .footer-section {
		background: #343a40;
		color: #fff;
		padding: 40px 0;
	  }
	  .footer-heading {
		font-size: 20px;
		margin-bottom: 20px;
		color: #ffc107;
	  }
	  .footer-section a {
		color: #ffffff;
		text-decoration: none;
	  }
	  .footer-section a:hover {
		color: #fff;
		text-decoration: underline;
	  }
	  .social-links li {
		display: inline-block;
		margin: 0 10px;
	  }
	  .social-links li a {
		color: #ffc107;
		font-size: 20px;
	  }
	  .social-links li a:hover {
		color: #fff;
	  }
	  </style>
	  
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<script src="{{ asset('template_fe/js/jquery.min.js') }}">
		</script>
		<script src="{{ asset('template_fe/js/jquery-migrate-3.0.1.min.js') }}"></script>
		<script src="{{ asset('template_fe/js/popper.min.js') }}"></script>
		<script src="{{ asset('template_fe/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('template_fe/js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('template_fe/js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('template_fe/js/jquery.stellar.min.js') }}"></script>
		<script src="{{ asset('template_fe/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('template_fe/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('template_fe/js/jquery.animateNumber.min.js') }}"></script>
		<script src="{{ asset('template_fe/js/scrollax.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
		</script>
		<script src="{{ asset('template_fe/js/google-map.js') }}"></script>
	
		<script src="{{ asset('template_fe/js/main.js') }}"></script>

	</body>
	</html>