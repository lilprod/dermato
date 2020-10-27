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
    </head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content subscribe">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4 col-lg-6 d-none d-md-flex d-lg-flex theme-bg align-items-center justify-content-center">
                        <img src="{{asset('assets/admin/assets/images/user/lock.png') }}" alt="lock images" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <div class="card-body text-center">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-sm-10">
                                    <a href="{{ route('home') }}"><h3 class="mb-4">Login</h3></a>

                                    <div class="input-group mb-3">
                                        <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="form-group text-left">
                                        <div class="checkbox checkbox-fill d-inline">
                                         <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="checkbox-fill-a1" class="cr"> Save credentials</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary shadow-2 mb-4" type="submit">Login</button>

                                    <p class="mb-2 text-muted">I don't have an account? <a href="{{route('register')}}"> Sign up</a></p>

                                    @if (Route::has('password.request'))
                                    <p class="mb-2 text-muted">Forgot password? <a href="{{ route('password.request') }}">Reset</a></p>
                                    @endif
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{asset('assets/admin/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{asset('assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
