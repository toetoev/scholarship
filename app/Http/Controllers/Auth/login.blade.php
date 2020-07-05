<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V9</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('signup/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('signup/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('signup/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('signup/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('signup/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>


    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}" >
                <span class="login100-form-title p-b-37">
                    {{ __('Login') }}
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                    <input class="input100" type="text" name="username" placeholder="{{ __('E-Mail Address') }}">
                    <span class="focus-input100"></span>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                    <input class="input100" type="password" name="pass" placeholder="{{ __('Password') }}">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-25"> 
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label>Remember me</label>
                </div>
                

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        {{ __('Login') }}
                    </button>
                </div>
               
            </form>

            
        </div>
    </div>
    
    

    <div id="dropDownSelect1"></div>
    
    <!--===============================================================================================-->
    <script src="{{asset('signup/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('signup/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('signup/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('signup/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('signup/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('signup/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('signup/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('signup/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('signup/js/main.js')}}"></script>

</body>
</html>