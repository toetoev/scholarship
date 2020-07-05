<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('loginform/css/style.css')}}">
</head>
<body>
    <div class="main">
       <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{asset('loginform/images/signin-image.jpg')}}" alt="sing up image"></figure>
                    <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">{{ __('Login') }}</h2>
                    <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="email" id="email" 
                            placeholder="{{__('E-Mail Address') }}"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="{{ __('Password') }}"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong >{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="checkbox" id="remember-me" class="agree-term" value="" >
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>

                        <div class="form-group form-button">
                            <button type="submit" class="form-submit" value="Log in"/>
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('loginform/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('loginform/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>