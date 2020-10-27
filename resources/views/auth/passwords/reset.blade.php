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

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="row justify-content-center">
                                    <div class="col-sm-10">
                                        <div class="mb-4">
                                            <i class="feather icon-mail auth-icon"></i>
                                        </div> 

                                        <h3 class="mb-4">Reset Password</h3>

                                        <div class="input-group mb-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="input-group mb-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="input-group mb-3">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                        </div>

                                        <button type="submit" class="btn btn-primary mb-4 shadow-2">{{ __('Reset Password') }}</button>
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

