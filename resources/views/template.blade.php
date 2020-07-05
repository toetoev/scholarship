<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
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

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="colorlib.com">
	<!-- Site Title -->
	<title>Education</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('education/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('education/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('education/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('education/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('education/css/nice-select.css')}}">						
			<link rel="stylesheet" href="{{asset('education/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('education/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('education/css/jquery-ui.css')}}">	
			<link rel="stylesheet" href="{{asset('education/css/main.css')}}">
			<link href="{{asset('css/main.css')}}" rel="stylesheet" />
		</head>
		<body>	
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
							<a href="index.html"><img src="{{asset('img/logo.png')}}" alt="" title="" /></a>
						</div>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
								<li><a href="/">Home</a></li>
								<li><a href="about">About</a></li>
								<li><a href="courses">Courses</a></li>			          		          
								<li><a href="contact">Contact</a></li>
								@guest
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
								@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
								@endif
								@else
								<li>
									<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
							@endguest
							<li>
								<div class="s128" style="margin-top: -5px;">
								<form>
									<div class="inner-form mx-1">
										<div class="row">
											<div class="input-field first" id="first">
												<input class="input" type="text" placeholder="Keyword" id="search_input" />
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							</li>
						</div>

					</ul>
				</nav><!-- #nav-menu-container -->		    		
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	@yield('banner')
	<!-- End banner Area -->	

	<!-- Start upcoming-event Area -->
	@yield('event')
	<!-- End upcoming-event Area -->

	<!-- start footer Area -->		
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Top Products</h4>
						<ul>
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li>
						</ul>								
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Quick links</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>								
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Features</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>								
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Resources</h4>
						<ul>
							<li><a href="#">Guides</a></li>
							<li><a href="#">Research</a></li>
							<li><a href="#">Experts</a></li>
							<li><a href="#">Agencies</a></li>
						</ul>								
					</div>
				</div>																		
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Newsletter</h4>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
								<div class="input-group">
									<input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
											<span class="lnr lnr-arrow-right"></span>
										</button>    
									</div>
									<div class="info"></div>  
								</div>
							</form> 
						</div>
					</div>
				</div>											
			</div>
			<div class="footer-bottom row align-items-center justify-content-between">
				<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="col-lg-6 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>						
			</div>
		</footer>	
		<!-- End footer Area -->	


		<script src="{{asset('education/js/vendor/jquery-2.2.4.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="{{asset('education/js/vendor/bootstrap.min.js')}}"></script>			
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="{{asset('education/js/easing.min.js')}}"></script>			
		<script src="{{asset('education/js/hoverIntent.js')}}"></script>
		<script src="{{asset('education/js/superfish.min.js')}}"></script>	
		<script src="{{asset('education/js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('education/js/jquery.magnific-popup.min.js')}}"></script>	
		<script src="{{asset('education/js/jquery.tabs.min.js')}}"></script>						
		<script src="{{asset('education/js/jquery.nice-select.min.js')}}"></script>	
		<script src="{{asset('education/js/owl.carousel.min.js')}}"></script>									
		<script src="{{asset('education/js/mail-script.js')}}"></script>	
		<script src="{{asset('education/js/main.js')}}"></script>
		<script type="text/javascript">
			$(document).ready(function () {

				$("#search_input").change(function (argument) {
					var search = $("#search_input").val();
					console.log(search);
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					}),

					$.ajax({
						url:'getforms',
						data:{},
						type:'POST',
						dataType:'json',
						data: {search:search},
						success:function(data){

							var html = '';
							$.each(data, function(i,v){
								var uname = v.uname;
								var major = v.mname;
								var grade = v.grade;
								var photo = v.logo;

								html += `						
								<div class="single-popular-carusel col-lg-3 col-md-6">
								<div class="thumb-wrap relative">
								<div class="thumb relative">
								<div class="overlay overlay-bg"></div>	
								<img class="img-fluid" src="${photo}" style="width: 250px; height: 200px;">
								</div>
								<div class="meta d-flex justify-content-between">
								<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>

								</div>
								<div class="details">
								<a href="course-details.html">
								<h4>
								${uname}
								</h4>
								</a>
								<p>
								${major}				
								</p>
								<a href="#" class="btn btn-outline-dark">More Details</a>
								</div>
								</div>			
								</div>`;

							});

							$(".search_posts").html(html);
						}
					});
				})

			})
		</script>	
	</body>
	</html>

	<script>
		var btnDelete = document.getElementById('clear');
		var search_input = document.getElementById('search_input');

      btnDelete.addEventListener('click', function(e)
      {
      	e.preventDefault();
      	search_input.value = ''
      })
      document.addEventListener('click', function(e)
      {
      	if (document.getElementById('first').contains(e.target))
      	{
      		search_input.classList.add('isFocus')
      	}
      	else
      	{
          // Clicked outside the box
          search_input.classList.remove('isFocus')
      }
  });

</script>