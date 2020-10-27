
<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-2  col-md-6">
				<div class="single-footer-widget">
					<h6>Liens Utiles</h6>
					<ul class="footer-nav">
						<li><a href="{{route('home')}}">Accueil</a></li>
				        <li><a href="{{route('directory')}}">Repertoire</a></li>
				        <li><a href="{{route('blog')}}">Actualités</a></li>
				        <li><a href="{{route('publications')}}">Publications</a></li>
				        <li><a href="{{route('contact')}}">Contacts</a></li>	
					</ul>
				</div>
			</div>
			<div class="col-lg-4  col-md-6">
				<div class="single-footer-widget mail-chimp">
					<h6 class="mb-20">Contactez-nous</h6>
					<p>
						56/8, bir uttam qazi nuruzzaman road, west panthapath, kalabagan, Dhanmondi, Dhaka - 1205
					</p>
					<h3>012-6532-568-9746</h3>
					<h3>012-6532-568-97468</h3>
				</div>
			</div>							
			<div class="col-lg-6  col-md-12">
				@include('inc.messages')
				<div class="single-footer-widget newsletter">
					<h6>Newsletter</h6>
					<p>Veuillez souscrire à notre newletter pour ne manquer aucune publication</p>
					<div id="mc_embed_signup">
						<form  action="{{url('newsletter')}}" method="POST" class="form-inline">

							@csrf
							<div class="form-group row" style="width: 100%">
								<div class="col-lg-8 col-md-12">
									<input name="email" placeholder="Votre adresse email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre adresse email  '" required="" type="email">
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>
								</div> 
							
								<div class="col-lg-4 col-md-12">
									<button class="nw-btn primary-btn" type="submit">Souscrire<span class="lnr lnr-arrow-right"></span></button>
								</div> 
							</div>		
							<div class="info"></div>
						</form>
					</div>		
				</div>
			</div>					
		</div>

		<div class="row footer-bottom d-flex justify-content-between">
			<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developpé <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://sparkcorpoation.org" target="_blank">SPARK CORPORATION</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			<div class="col-lg-4 col-sm-12 footer-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<!--<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>-->
			</div>
		</div>
	</div>
</footer>