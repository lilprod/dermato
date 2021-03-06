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
		<title>DERMAFRIK | Posts par Catégorie</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
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
		<body class="blog-page">	
			  @include('website.hearder')
			  <!-- #header -->
			<!-- start banner Area -->
			<!--<section class="banner-area relative blog-home-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content blog-header-content col-lg-12">
							<h1 class="text-white">
								Dude You’re Getting
								a Telescope				
							</h1>	
							<p class="text-white">
								There is a moment in the life of any aspiring astronomer that it is time to buy that first
							</p>
							<a href="#" class="primary-btn">View More</a>
						</div>	
					</div>
				</div>
			</section>-->
			<!-- End banner Area -->	

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Actualités				
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home')}}">Accueil </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('blog')}}">Actualités </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start top-category-widget Area -->
			<section class="top-category-widget-area pt-90 pb-90 ">
				<div class="container">
					<div class="row">		
						<!--<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="#" target="_blank">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('assets/website/assets/img/blog/cat-widget1.jpg') }}" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Social life</h4>
								        <span></span>								        
								        <p>Enjoy your social life together</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="#" target="_blank">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('assets/website/assets/img/blog/cat-widget2.jpg') }}" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Politics</h4>
								        <span></span>								        
								        <p>Be a part of politics</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="#" target="_blank">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('assets/website/assets/img/blog/cat-widget3.jpg') }}" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Food</h4>
								        <span></span>
								        <p>Let the food be finished</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>	-->											
					</div>
				</div>	
			</section>
			<!-- End top-category-widget Area -->
			
			<!-- Start post-content Area -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">

							<div class="row">
								<h4 class="posts-title">Catégorie : {{ $data->title }}</h4>
							</div><br>

							@foreach($data->posts as $post)
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<!--<ul class="tags">
										<li><a href="#">Food,</a></li>
										<li><a href="#">Technology,</a></li>
										<li><a href="#">Politics,</a></li>
										<li><a href="#">Lifestyle</a></li>
									</ul>-->
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$post->author}}</a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$post->created_at->format('m/d/Y')}}</a> <span class="lnr lnr-calendar-full"></span></p>
										<!--<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
										<p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span></p>	-->					
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="{{url('/storage/cover_images/'.$post->cover_image ) }}" alt="">
									</div>
									<a class="posts-title" href="{{$post->getLink()}}"><h3>{{$post->title}}</h3></a>
									<p>
										{!! \Illuminate\Support\Str::limit($post->body, 200, '...') !!}
									</p>
									<a href="{{$post->getLink()}}" class="primary-btn">View More</a>
								</div>
							</div>


							@endforeach

		                    <nav class="blog-pagination justify-content-center d-flex">
		                        <!--<ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>-->
		                    </nav>
						</div>

						

						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" action="#">
			                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
								<!--<div class="single-sidebar-widget user-info-widget">
									<img src="img/blog/user-info.png" alt="">
									<a href="#"><h4>Charlie Barber</h4></a>
									<p>
										Senior blog writer
									</p>
									<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-github"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
									<p>
										Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.
									</p>
								</div>-->

								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Dernières articles</h4>
									<div class="popular-post-list">

										@foreach($latestposts as $post)
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="{{url('/storage/cover_images/'.$post->cover_image ) }}" alt="">
											</div>
											<div class="details">
												<a href="{{$post->getLink()}}"><h6>{{$post->title}}</h6></a>
												<p>{{$post->created_at->format('m/d/Y')}}</p>
												<!--<p>02 Hours ago</p>-->
											</div>
										</div>		
										@endforeach												
									</div>
								</div>

								<div class="single-sidebar-widget ads-widget">
									<a href="#"><img class="img-fluid" src="{{asset('assets/website/assets/img/blog/ads-banner.jpg') }}" alt=""></a>
								</div>

								<div class="single-sidebar-widget post-category-widget">
									<h4 class="category-title">Post Catgories</h4>
									<ul class="cat-list">
										@foreach( $categories as $category)
										<li>
											<a href="{{$category->getLink()}}" class="d-flex justify-content-between">
												<p>{{$category->title}}</p>
												<p>{{count($category->posts)}}</p>
											</a>
										</li>	
										@endforeach															
									</ul>
								</div>	

								<div class="single-sidebar-widget newsletter-widget">
									<h4 class="newsletter-title">Newsletter</h4>
									<p>
										Here, I focus on a range of items and features that we use in life without
										giving them a second thought.
									</p>
									<div class="form-group d-flex flex-row">
									   <div class="col-autos">
									      <div class="input-group">
									        <div class="input-group-prepend">
									          <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
									        </div>
									        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
									      </div>
									    </div>
									    <a href="#" class="bbtns">Subcribe</a>
									</div>	
									<p class="text-bottom">
										You can unsubscribe at any time
									</p>								
								</div>

								<!--<div class="single-sidebar-widget tag-cloud-widget">
									<h4 class="tagcloud-title">Tag Clouds</h4>
									<ul>
										<li><a href="#">Technology</a></li>
										<li><a href="#">Fashion</a></li>
										<li><a href="#">Architecture</a></li>
										<li><a href="#">Fashion</a></li>
										<li><a href="#">Food</a></li>
										<li><a href="#">Technology</a></li>
										<li><a href="#">Lifestyle</a></li>
										<li><a href="#">Art</a></li>
										<li><a href="#">Adventure</a></li>
										<li><a href="#">Food</a></li>
										<li><a href="#">Lifestyle</a></li>
										<li><a href="#">Adventure</a></li>
									</ul>
								</div>-->								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
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