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
    <title>Education</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="{{asset('../education/css/linearicons.css')}}">
            <link rel="stylesheet" href="{{asset('../education/css/font-awesome.min.css')}}">
            <link rel="stylesheet" href="{{asset('../education/css/bootstrap.css')}}">
            <link rel="stylesheet" href="{{asset('../education/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('../education/css/nice-select.css')}}">                           
            <link rel="stylesheet" href="{{asset('../education/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('../education/css/owl.carousel.css')}}">          
            <link rel="stylesheet" href="{{asset('../education/css/jquery-ui.css')}}">         
            <link rel="stylesheet" href="{{asset('../education/css/main.css')}}">

            <style type="text/css">
                .card-body{
                    color: white;
                    background: #374EB5;
                }
            </style>
            


        </head>
        <body>  
            <section class="banner-area relative" id="home">
                <header id="header" id="home">
                    <div class="header-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>           
                                </div>
                                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                                    <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+953 012 3654 896</span></a>
                                    <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">support@colorlib.com</span></a>         
                                </div>
                            </div>                              
                        </div>
                    </div>
                    <div class="container main-menu">
                        <div class="row align-items-center justify-content-between d-flex">
                            <div id="logo">
                                <a href="index.html"><img src="{{asset('education/img/logo.png')}}" alt="" title="" /></a>
                            </div>
                            <nav id="nav-menu-container">
                                <ul class="nav-menu">
                                    <li><a href="template">Home</a></li>
                                    <li><a href="about">About</a></li>
                                    <li><a href="courses">Courses</a></li>
                                    <li><a href="event">Events</a></li>
                                    <li><a href="gallery">Gallery</a></li>
                                    <li class="menu-has-children"><a href="">Blog</a>
                                        <ul>
                                            <li><a href="blog-home">Blog Home</a></li>
                                            <li><a href="blog-single">Blog Single</a></li>
                                        </ul>
                                    </li>                                                                         
                                    <li><a href="contact">Contact</a></li>

                                </ul>
                            </nav><!-- #nav-menu-container -->                  
                        </div>
                    </div>
                </header><!-- #header -->



                <div class="container mt-4 py-5" style="height: 500px;">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Register') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>
        </html>
