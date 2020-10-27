	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
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
		<title>DERMAFRIK | Repertoire</title>

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
								Repertoire				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home')}}">Accueil</a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('directory')}}"> Repertoire</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->

			<!-- Start Sample Area -->
			<section class="sample-text-area">
				<div class="container">


					<div class="row">
						<div class="col-lg-4">
							
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Recherche</h4>
								</div>

								<div class="card-body">

									<form class="appoinment-form" action="{{ route('search') }}" method="POST">
										@csrf
				                        <div class="row">

				                           <div class="col-lg-12 d-flex flex-column">
				                                <input name="name" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'" class="form-control mt-20" type="text">
				                            </div>

				                            <div class="col-lg-12 d-flex flex-column">
				                                <input name="firstname" placeholder="Prénom(s)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prénom(s)'" class="form-control mt-20" type="text">
				                            </div>


				                            <div class="col-lg-12 d-flex flex-column">
				                                <input name="phone_number" placeholder="Téléphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Téléphone'" class="form-control mt-20" type="text">
				                            </div>

				                            <div class="col-lg-12 d-flex flex-column">
				                                <input name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="form-control mt-20" type="email">
				                            </div>

				                            <div class="col-lg-12 d-flex flex-column">
				                                <!--<input name="country" placeholder="Pays" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pays'" class="form-control mt-20" type="text">-->
				                                
				                                <select class="form-control mt-20" id="region" name="country">
	                                                <option value= "">--Selectionner le Pays--</option>
	                                                @foreach( $countries as $country)
	                                                    <option value="{{ $country->title }}">{{$country->title}}</option>
	                                                @endforeach
                                            	</select>
				                            </div>
				                            <div class="col-lg-12 d-flex justify-content-end send-btn">
				                                <button class="genric-btn primary mt-20 text-uppercase ">chercher</button>
				                            </div>

				                            <div class="alert-msg"></div>
				                        </div>
		                    		</form>	
		                    	</div>
		                    </div>

						</div>



					</div>
					
				</div>
			</section>
			<!-- End contact-page Area -->

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