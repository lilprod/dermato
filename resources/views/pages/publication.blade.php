	<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>DERMAFRIK | Publications</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS
			============================================= -->

			<link rel="stylesheet" href="{{asset('assets/website/assets/css/linearicons.css') }}">
			<link rel="stylesheet" href="{{asset('assets/website/assets/css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{asset('assets/website/assets/css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{asset('assets/website/assets/css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{asset('assets/website/assets/css/nice-select.css') }}">							
			<link rel="stylesheet" href="{{asset('assets/website/assets/css/animate.min.css') }}">
			<link rel="stylesheet" href="{{asset('assets/website/assets/css/jquery-ui.css') }}">			
			<link rel="stylesheet" href="{{asset('assets/website/assets/css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{asset('assets/website/assets/css/main.css') }}">
		</head>
		<body>	
			   @include('website.hearder')
			  <!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Publications				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home')}}">Accueil</a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('home')}}"> Publications</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start Sample Area -->
			<section class="sample-text-area">
				<div class="container">


					<div class="row">

					</div>

				</div>
			</section>

			<!-- start footer Area -->		
				@include('website.footer')
			<!-- End footer Area -->

			<script src="{{asset('assets/website/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('assets/website/assets/js/vendor/bootstrap.min.js') }}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('assets/website/assets/js/easing.min.js') }}"></script>			
			<script src="{{asset('assets/website/assets/js/hoverIntent.js') }}"></script>
			<script src="{{asset('assets/website/assets/js/superfish.min.js') }}"></script>	
			<script src="{{asset('assets/website/assets/js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{asset('assets/website/assets/js/jquery.magnific-popup.min.js') }}"></script>	
 			<script src="{{asset('assets/website/assets/js/jquery-ui.js') }}"></script>			
			<script src="{{asset('assets/website/assets/js/owl.carousel.min.js') }}"></script>						
			<script src="{{asset('assets/website/assets/js/jquery.nice-select.min.js') }}"></script>							
			<script src="{{asset('assets/website/assets/js/mail-script.js') }}"></script>	
			<script src="{{asset('assets/website/assets/js/main.js') }}"></script>	
		</body>
	</html>