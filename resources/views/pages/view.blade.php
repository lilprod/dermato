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
		<title>DERMAFRIK | Détails Dermatologue</title>

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
			<link rel="stylesheet" type="text/css" href="{{asset('css/btn.css') }}">
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
								Détails du Dermatologue				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home')}}">Accueil</a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Détails du Dermatologue</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start Sample Area -->
			<section class="sample-text-area">
				<div class="container">

					<div class="row">
						<div class="col-lg-3">
						</div>

						<div class="col-lg-6">

							<div class="single-price no-padding">
								
								<div class="price-bottom">
									<img class="img-fluid rounded-circle" src="{{url('/storage/profile_images/'.$doctor->profile_picture) }}" alt="doctor-image">
								</div>

								<div class="price-top">
									<h4>{{ $doctor->name }} {{ $doctor->firstname }}</h4>
									<p>
										@if($doctor->title == 'PR')
											<span class="d-block">Professeur</span>
										@elseif($doctor->title == 'DR')
											<span class="d-block">Dermatologue</span>
										@endif
									</p>

									<ul class="lists">
										@if($doctor->gender == 'M')
											<li class=""><b>Genre :</b> Masculin</li>
										@elseif($doctor->gender == 'F')
											<li class=""><b>Genre :</b> Feminin</li>
										@endif
										<li><b>Email :</b> {{ $doctor->email }}</li>

										<li><b>Téléphone :</b> {{ $doctor->phone_number }}</li>

										<li><b>Date de naissance :</b> {{ $doctor->birth_date }}</li>

										<li><b>Région :</b> {{ $doctor->region }}</li>

										<li><b>Pays :</b> {{ $doctor->country }}</li>

										<li><b>Lieu d'exercice :</b> {{ $doctor->exercice_place }}</li>
									</ul>

									<a href="{{route('directory')}}" class="genric-btn info-border circle arrow">Retour au Repertoire<span class="lnr lnr-arrow-left"></span></a>

								</div>
								
							</div>
						</div>

						<div class="col-lg-3">

						</div>
					</div>

				</div>
			</section>

			<!-- start footer Area -->	
			<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>	
				@include('website.footer')
			<!-- End footer Area -->

			<script src="{{asset('assets/website/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script type="text/javascript">
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function() {scrollFunction()};

				function scrollFunction() {
				  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				    document.getElementById("myBtn").style.display = "block";
				  } else {
				    document.getElementById("myBtn").style.display = "none";
				  }
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
				  document.body.scrollTop = 0; // For Safari
				  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
				}
			</script>
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