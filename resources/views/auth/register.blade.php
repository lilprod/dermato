<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blackdermatologists - Signin</title>


        <!--[if lt IE 10]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="CodedThemes" />

        <link rel="icon" href="http://html.codedthemes.com/datta-able/bootstrap/assets/images/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="{{asset('assets/admin/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">

        <link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/animation/css/animate.min.css') }}">

        <link rel="stylesheet" href="{{asset('assets/admin/assets/css/style.css') }}">

        <link rel="stylesheet" href="{{asset('/assets/admin/assets/css/intlTelInput.css') }}">
    </head>

    <body>
        <div class="auth-wrapper">
                <div class="auth-content subscribe">
                <div class="card">

                    <div class="row no-gutters">
                        <div class="col-md-4 col-lg-2 d-none d-md-flex d-lg-flex theme-bg align-items-center justify-content-center">
                            <img src="{{asset('assets/admin/assets/images/user/user.png') }}" alt="lock images" class="img-fluid">
                        </div>

                        <div class="col-md-8 col-lg-10">
                            <div class="card-body ">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row ">
                                  <div class="col-sm-12">  
                                        <a href="{{ route('home') }}"><h3 class="mb-4 text-center">Sign up</h3></a>
                                    </div>

                                <div class="col-sm-6">
                                    @include('inc.messages')
                                        <div class="form-group mb-3">
                                            <label>Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>First Name</label>
                                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" placeholder="Firstame">

                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Phone number</label>
                                            <input id="output" type="hidden" name="phone_number" value=""/>
                                            <input type="tel" id="phone" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="Phone number">

                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Confirm password</label>
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <!--<div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Address">

                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>-->

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Gender</label>
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Birth Date</label>
                                            <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" required autocomplete="birth_date" placeholder="Birth Date" value="{{ old('birth_date') }}">

                                            @error('birth_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Title</label>
                                            <select class="form-control" id="title" name="title">
                                                <option value="DR">Doctor</option>
                                                <option value="PR">Professor</option>
                                            </select>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Exercice Place</label>
                                            <input type="text" class="form-control @error('exercice_place') is-invalid @enderror" name="exercice_place" value="{{ old('exercice_place') }}" required autocomplete="exercice_place" placeholder="Exercice Place">

                                            @error('exercice_place')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Region</label>
                                            <select class="form-control" id="region" name="region" required>
                                                <option value = "">--Select Region--</option>
                                                @foreach( $regions as $region)
                                                    <option value="{{ $region->id }}">{{$region->title}}</option>
                                                @endforeach
                                                <!--<option value="WEST AFRICA">WEST AFRICA</option>
                                                <option value="EAST AFRICA">EAST AFRICA</option>
                                                <option value="NORTHEN AFRICA">NORTHEN AFRICA</option>
                                                <option value="MIDDLE AFRICA">MIDDLE AFRICA</option>
                                                <option value="SOUTHERN AFRICA">SOUTHERN AFRICA</option>-->
                                            </select>

                                            @error('region')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label>Country</label>

                                            <select class="form-control" name="country" id="country">
                                            </select>

                                            <!--<input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" placeholder="Country">-->

                                            @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Profile Image</label>
                                        <input type="file" class="form-control" name="profile_picture">
                                    </div>
                                </div>

                                        <!--<div class="form-group text-left">
                                            <div class="checkbox checkbox-fill d-inline">
                                            <input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
                                            <label for="checkbox-fill-2" class="cr">Send me the <a href="#!"> Newsletter</a> weekly.</label>
                                            </div>
                                        </div>-->

                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-primary shadow-2 mb-4" type="submit">Sign up</button>
                                        <p class="mb-0 text-muted">All ready have an account? <a href="{{route('login')}}"> Log in</a></p>
                                    </div>
                                    
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

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
<script src="{{asset('assets/admin/assets/js/vendor-all.min.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function() {

         $('#region').on('change', function () {

            var region_id = $(this).val();

            if(region_id){
                $.ajax({
                    url: '{!!URL::route('getCountries')!!}',
                    type: 'GET',
                    data : { 'id' : region_id},
                    dataType: 'json',

                    success:function(data){
                        //console.log('data');

                        if(data) {
                            $('#country').empty();

                            $('#country').focus;

                            $('#country').append('<option value = "">--Select Country--</option>');

                            $.each(data, function(key, value){
                                $('select[name = "country"]').append('<option value= "'+ value.title +'">' + value.title + '</option>');
                            });

                            //$('select[name = "country"]').selectmenu('refresh', true);

                            //$('select[name = "country"]').refresh();

                            } else {
                                $('#country').empty();
                            } 
                        }
                        });
                    }
                    else{
                        $('#country').empty();
                    }
                
         });
    });
    </script>
    
    <script src="{{asset('assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
