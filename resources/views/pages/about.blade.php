<!DOCTYPE html>
<html lang="en">
<head>
<title>DERMAFRIK - A propos</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="La maison de l'immobilier">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('assets/website/assets/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{asset('assets/website/assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/website/assets/styles/about_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/website/assets/styles/about_responsive.css') }}">
</head>

<body>

<div class="super_container">
	
	<!-- Home -->
	<div class="home">
		<!-- Image by: https://unsplash.com/@jbriscoe -->
		<div class="home_background" style="background-image:url(assets/website/assets/images/home_background.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_title">
							<h2>à propos de nous</h2>
						</div>
						<div class="breadcrumbs">
							<span><a href="index.html">Accueil</a></span>
							<span><a href="#"> A propos</a></span>
							<!--<span><a href="#"> Nos agents</a></span>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('website.hearder')

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-lg-1 order-2">
					<h2 class="intro_title">Anderson</h2>
					<div class="intro_subtitle">La maison de l'immobilier</div>
					<p class="intro_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tellus eros, placerat quis fermentum et, viverra sit amet lacus. Nam gravida semper augue id sagittis. Cras nec arcu quis velit tempor porttitor sit amet vel risus. Sed vestibulum lectus ut leo molestie, id suscipit magna mattis. Vivamus nisl ligula, varius congue dui sit amet, vestibulum sollicitudin mauris. Vestibulum quis ligula in nunc varius maximus ac et nunc. Nulla sed magna turpis.</p>
					<div class="button intro_button trans_200"><a class="trans_200" href="{{route('contact')}}">Ecrivez-nous</a></div>
				</div>
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="intro_image">
						<img src="{{asset('assets/website/assets/images/intro.png') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="milestones_background parallax-window" data-parallax="scroll" data-image-src="{{asset('assets/website/assets/images/milestones.jpg') }}"></div>
		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="{{asset('assets/website/assets/images/milestone_1.svg') }}" alt=""></div>
						<div class="milestone_counter" data-end-value="310">0</div>
						<div class="milestone_text">Propriétés vendus</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="{{asset('assets/website/assets/images/milestone_2.svg') }}" alt=""></div>
						<div class="milestone_counter" data-end-value="129">0</div>
						<div class="milestone_text">clients</div>
					</div>
				</div>

				<!-- Milestone -->
				<!--<div class="col-lg-2 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="{{asset('assets/website/assets/images/milestone_3.svg') }}" alt=""></div>
						<div class="milestone_counter" data-end-value="14">0</div>
						<div class="milestone_text">agents</div>
					</div>
				</div>-->

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="{{asset('assets/website/assets/images/milestone_4.svg') }}" alt=""></div>
						<div class="milestone_counter" data-end-value="521">0</div>
						<div class="milestone_text">Propriétés à vendre</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="{{asset('assets/website/assets/images/milestone_5.svg') }}" alt=""></div>
						<div class="milestone_counter" data-end-value="1107">0</div>
						<div class="milestone_text">contrats</div>
					</div>
				</div>

				<!-- Milestone -->
				<!--<div class="col-lg-2 milestone_col">
					<div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column justify-content-end"><img src="{{asset('assets/website/assets/images/milestone_6.svg') }}" alt=""></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">investments</div>
					</div>
				</div>-->

			</div>
		</div>
	</div>

	<!-- Agents -->

<!-- 	<div class="agents">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>out agents</h3>
						<span class="section_subtitle">The best out there</span>
					</div>
				</div>
			</div>

			<div class="row agents_row">-->
				
				<!-- Agent -->
				<!--<div class="col-lg-3 agent_col text-center">
					<div class="agent_image mx-auto">
						<img src="{{asset('assets/website/assets/images/agent_1.jpg') }}" alt="image by Andrew Robles">
					</div>
					<div class="agent_content">
						<div class="agent_name">michael williams</div>
						<div class="agent_role">Real Estate Agent</div>
						<div class="agent_social">
							<ul class="agent_social_list">
								<li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>-->

				<!-- Agent -->
				<!--<div class="col-lg-3 agent_col text-center">
					<div class="agent_image mx-auto">
						<img src="{{asset('assets/website/assets/images/agent_2.jpg') }}" alt="https://unsplash.com/@gabrielsilverio">
					</div>
					<div class="agent_content">
						<div class="agent_name">michael williams</div>
						<div class="agent_role">Real Estate Agent</div>
						<div class="agent_social">
							<ul class="agent_social_list">
								<li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>-->

				<!-- Agent -->
				<!--<div class="col-lg-3 agent_col text-center">
					<div class="agent_image mx-auto">
						<img src="{{asset('assets/website/assets/images/agent_3.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
					</div>
					<div class="agent_content">
						<div class="agent_name">michael williams</div>
						<div class="agent_role">Real Estate Agent</div>
						<div class="agent_social">
							<ul class="agent_social_list">
								<li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>-->

				<!-- Agent -->
				<!--<div class="col-lg-3 agent_col text-center">
					<div class="agent_image mx-auto">
						<img src="{{asset('assets/website/assets/images/agent_4.jpg') }}" alt="https://unsplash.com/@michaeldam">
					</div>
					<div class="agent_content">
						<div class="agent_name">michael williams</div>
						<div class="agent_role">Real Estate Agent</div>
						<div class="agent_social">
							<ul class="agent_social_list">
								<li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>-->

			<!--<div class="row">
				<div class="col-lg-12 text-center">
					<div class="agents_more">
						<div class="button agents_more_button trans_200"><a class="trans_200" href="#">read more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->


	@include('website.footer')

</div>

<script src="{{asset('assets/website/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{asset('assets/website/assets/styles/bootstrap4/popper.js') }}"></script>
<script src="{{asset('assets/website/assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{asset('assets/website/assets/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{asset('assets/website/assets/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{asset('assets/website/assets/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{asset('assets/website/assets/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{asset('assets/website/assets/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{asset('assets/website/assets/plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{asset('assets/website/assets/plugins/easing/easing.js') }}"></script>
<script src="{{asset('assets/website/assets/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{asset('assets/website/assets/js/about_custom.js') }}"></script>
</body>

</html>