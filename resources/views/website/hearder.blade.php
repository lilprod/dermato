<!-- Header -->
<header id="header" id="home">
	<div class="header-top">
		<div class="container">
  		<div class="row align-items-center">
  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
        		<a href="{{route('home')}}"><img src="img/logo.png" alt="" title="" /></a>			
  			</div>
  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  <!--<a class="btns" href="tel:+953 012 3654 896">+953 012 3654 896</a>
  				<a class="btns" href="mailto:contact@dermafrik.com">contact@dermafrik.com</a>-->

          @guest	
          <a class="btns" href="{{route('register')}}"><i class="lnr lnr-user"></i> Register</a>	
          <a class="btns" href="{{route('login')}}"><i class="lnr lnr-enter"></i> Login</a>
          @endguest

  				 <!--<a class="icons" href="tel:+953 012 3654 896">
  					<span class="lnr lnr-phone-handset"></span>
  				</a>

  				<a class="icons" href="mailto:contact@dermafrik.com">
  					<span class="lnr lnr-envelope"></span>
  				</a>	-->  
          @guest  
          <a class="icons" href="{{route('register')}}" title="Register">
            <span class="lnr lnr-user"></span>
          </a>  

          <a class="icons" href="{{route('login')}}" title="Login">
            <span class="lnr lnr-enter"></span> 
          </a>
          @endguest
  			</div>
  		</div>			  					
		</div>
</div>
<div class="container main-menu" style="background-image: -webkit-linear-gradient(0deg, #04091e 0%, #04091e 100%);">
	<div class="row align-items-center justify-content-between d-flex">
      <nav id="nav-menu-container" style="margin: auto;">
      	@guest
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{route('home')}}">Accueil</a></li>
          <li><a href="{{route('directory')}}">Repertoire</a></li>
          <li><a href="{{route('blog')}}">Actualités</a></li>
          <li><a href="{{route('publications')}}">Publications</a></li>
          <li><a href="{{route('contact')}}">Contacts</a></li>
          <!--<li><a href="{{route('login')}}">Login</a></li>
          <li><a href="{{route('register')}}">Register</a></li>-->
          <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('assets/website/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
          <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('assets/website/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
        </ul>
        @else

        <ul class="nav-menu">
          <li class="menu-active"><a href="{{route('home')}}">Accueil</a></li>
          <li><a href="{{route('directory')}}">Repertoire</a></li>
          <li><a href="{{route('blog')}}">Actualités</a></li>
          <li><a href="{{route('publications')}}">Publications</a></li>
          <li><a href="{{route('contact')}}">Contacts</a></li>	
	        <li class="menu-has-children"><a href="#!"> <span class="lnr lnr-user"></span> {{auth()->user()->name}} {{auth()->user()->firstname}}</a>
	          <ul>
              <li><a href="{{route('dashboard')}}" target="_blank">My Account</a></li>
	            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
              </li>
	         </ul>	
         </li>

        
         <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('assets/website/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
          <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('assets/website/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
        </ul>
        @endguest
      </nav><!-- #nav-menu-container -->
  	<div class="menu-social-icons">
		<a href="#"><i class="fa fa-facebook"></i></a>
		<!--<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-dribbble"></i></a>
		<a href="#"><i class="fa fa-behance"></i></a>-->
	</div>	    		
	</div>
</div>
</header>