<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DERMAFRIK') }}</title>
    <!--[if lt IE 11]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:1629436,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

    <link rel="icon" href="http://html.codedthemes.com/datta-able/bootstrap/assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/admin/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">

    <link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/animation/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/notification/css/notification.min.css') }}">

    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/data-tables/css/datatables.min.css') }}">

    <link rel="stylesheet" href="{{asset('/assets/admin/assets/css/intlTelInput.css') }}">
    </head>
<body>

<!--<div class="loader-bg">
<div class="loader-track">
<div class="loader-fill"></div>
</div>
</div>-->


<nav class="pcoded-navbar navbar-dark navbar-collapse brand-blue">
     <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{route('dashboard')}}" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">DERMAFRIK</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>

                <li data-username="Dashboard " class="nav-item active pcoded-trigger">
                    <a href="{{route('dashboard')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>

                <li data-username="Home " class="nav-item">
                    <a href="{{route('home')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-arrow-left"></i></span><span class="pcoded-mtext">Retour au site</span></a>
                </li>

                <li class="nav-item pcoded-menu-caption">
                <label>Address book</label>

                <li data-username="My Contacts" class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Doctors</span></a>

                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('doctors.index')}}" class="">Doctors</a></li>
                        <li class=""><a href="{{route('doctors.create')}}" class="">New</a></li>
                        <!--<li class=""><a href="{{route('doimport')}}" class="">Import Data</a></li>-->
                    </ul>
                </li>

                <li class="nav-item pcoded-menu-caption">
                <label>Posts</label>

                <li data-username="Posts" class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Posts</span></a>

                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('posts.index')}}" class="">Posts</a></li>
                        <li class=""><a href="{{route('posts.create')}}" class="">New</a></li>
                    </ul>
                </li>
                
                <li class="nav-item pcoded-menu-caption">
                <label>Categories</label>

                <li data-username="Categories" class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Categories</span></a>

                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('categories.index')}}" class="">Categories</a></li>
                        <li class=""><a href="{{route('categories.create')}}" class="">New</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-menu-caption">
                <label>Countries</label>

                <li data-username="Countries" class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Countries</span></a>

                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('countries.index')}}" class="">Countries</a></li>
                        <li class=""><a href="{{route('countries.create')}}" class="">New</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-menu-caption">
                <label>Regions</label>

                <li data-username="Regions" class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Regions</span></a>

                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('regions.index')}}" class="">Regions</a></li>
                        <li class=""><a href="{{route('regions.create')}}" class="">New</a></li>
                    </ul>
                </li>


                <li class="nav-item pcoded-menu-caption">
                <label>Administration</label>

                <li data-username="Permissions" class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Permissions</span></a>

                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('permissions.index')}}" class="">Permissions</a></li>
                        <li class=""><a href="{{route('permissions.create')}}" class="">New</a></li>
                    </ul>
                </li>

                <li data-username="Roles" class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Roles</span></a>

                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('roles.index')}}" class="">Roles</a></li>
                        <li class=""><a href="{{route('roles.create')}}" class="">New</a></li>
                    </ul>
                </li>


                <li data-username="Users" class="nav-item pcoded-hasmenu">
                <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Users</span></a>

                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('users.index')}}" class="" >Users</a></li>
                        <li class=""><a href="{{route('users.create')}}" class="">New</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>


<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
        <a href="{{route('dashboard')}}" class="b-brand">
        <div class="b-bg">
            <i class="feather icon-trending-up"></i>
        </div>
        <span class="b-title">{{ config('app.name', 'Blackdermatologists') }}</span>
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="#!">
        <i class="feather icon-more-horizontal"></i>
    </a>
<div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
        <li><a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
        <!--<li class="nav-item dropdown">
        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Dropdown</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#!">Action</a></li>
                <li><a class="dropdown-item" href="#!">Another action</a></li>
                <li><a class="dropdown-item" href="#!">Something else here</a></li>
            </ul>
        </li>-->
        <!--<li class="nav-item">
            <div class="main-search">
                <div class="input-group">
                    <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                    <a href="#!" class="input-group-append search-close">
                        <i class="feather icon-x input-group-text"></i>
                    </a>
                    <span class="input-group-append search-btn btn btn-primary">
                        <i class="feather icon-search input-group-text"></i>
                    </span>
                </div>
            </div>
        </li>-->
    </ul>
<ul class="navbar-nav ml-auto">
<!--<li>
<div class="dropdown">
    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
<div class="dropdown-menu dropdown-menu-right notification">
    <div class="noti-head">
        <h6 class="d-inline-block m-b-0">Notifications</h6>
        <div class="float-right">
            <a href="#!" class="m-r-10">mark as read</a>
            <a href="#!">clear all</a>
        </div>
    </div>
<ul class="noti-body">
    <li class="n-title">
        <p class="m-b-0">NEW</p>
    </li>
    <li class="notification">
        <div class="media">
            <img class="img-radius" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                <p>New ticket Added</p>
            </div>
        </div>
    </li>
    <li class="n-title">
        <p class="m-b-0">EARLIER</p>
    </li>
    <li class="notification">
        <div class="media">
            <img class="img-radius" src="../assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                <p>Prchace New Theme and make payment</p>
            </div>
        </div>
    </li>
    <li class="notification">
        <div class="media">
            <img class="img-radius" src="../assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
            <div class="media-body">
                <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                <p>currently login</p>
            </div>
        </div>
    </li>
    </ul>
        <div class="noti-footer">
            <a href="#!">show all</a>
        </div>
    </div>
    </div>
    </li>-->

    <!--<li><a href="#!" class="displayChatbox"><i class="icon feather icon-mail"></i></a></li>-->
    <li>
        <div class="dropdown drp-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon feather icon-settings"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-notification">
                <div class="pro-head">
                    <img src="{{url('/storage/profile_images/'.auth()->user()->profile_picture) }}" class="img-radius" alt="User-Profile-Image">
                    <span>{{ Auth::user()->name }}</span>
                    <a href="{{ route('logout') }}" class="dud-logout" title="Logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="feather icon-log-out"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
                <ul class="pro-body">
                    <li><a href="{{route('setting')}}" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                    <li><a href="{{route('profils.index')}}" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                    <!--<li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                    <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>-->
                </ul>
            </div>
        </div>
    </li>
</ul>
</div>
</header>



    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">


                    <div class="main-body">
                        <div class="page-wrapper">

                        <div class="row">

                            @yield('content')

                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="../assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="../assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="../assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="../assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="../assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->

    <script type="text/javascript" src="{{asset('assets/admin/assets/js/intlTelInput.js') }}"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

      <script>
      var input = document.querySelector("#phone");
      output = document.querySelector("#output");
      var iti = window.intlTelInput(input, {
        separateDialCode: true,
        /*nationalMode: true,
        initialCountry: "auto",
           geoIpLookup: function(callback) {
            $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
              var countryCode = (resp && resp.country) ? resp.country : "";
              callback(countryCode);
            });
          },*/
        utilsScript: "{{asset('assets/admin/assets/js/utils.js?1537727621611') }}" // just for formatting/placeholders etc
      });

      var handleChange = function() {
        var text = iti.getNumber();
        var textNode = document.createTextNode(text);
        output.innerHTML = "";
        output.appendChild(textNode);
        document.getElementById("output").value=text;
      };

      // listen to "keyup", but also "change" to update when the user selects a country
      input.addEventListener('change', handleChange);
      input.addEventListener('keyup', handleChange);
      
        
    </script>
    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script> 

    <script> CKEDITOR.replace('article-ckeditor'); </script>

    <script src="{{asset('assets/admin/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/admin/assets/js/menu-setting.min.js') }}"></script>
    <script src="{{asset('assets/admin/assets/js/pcoded.min.js') }}"></script>

    <script src="{{asset('assets/admin/assets/plugins/amchart/js/amcharts.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/amchart/js/gauge.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/amchart/js/serial.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/amchart/js/light.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/amchart/js/pie.min.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/amchart/js/ammap.min.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/amchart/js/usaLow.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/amchart/js/radar.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/amchart/js/worldLow.js') }}"></script>

    <script src="{{asset('assets/admin/assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/data-tables/js/datatables.min.js') }}"></script>
    <script src="{{asset('assets/admin/assets/js/pages/tbl-datatable-custom.js') }}"></script>

    @stack('role')
    @stack('permission')
    @stack('user')
    @stack('post')
    @stack('scripts')
    @stack('slug')

    <!--<script src="{{asset('assets/admin/assets/js/pages/dashboard-custom.js') }}"></script>-->
</body>

</html>
