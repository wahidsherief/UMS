<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="website/styles/bootstrap4/bootstrap.min.css">
<link href="website/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="website/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="website/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="website/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="website/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="website/styles/responsive.css">
@yield('website_links')

<link href="website/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
</head>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>01774861411</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>info.ums.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">

                                    {{-- @if (Route::has('login'))

                                    @auth

									<div class="login_button"><a href="{{ route('student.dashboard') }}">Dashboard</a></div>

                                    @else

									<div class="login_button"><a href="{{ route('login') }}">Register or Login</a></div>

                                        {{-- @if (Route::has('register'))
                                        <li class="main_nav_item">   <a href="{{ route('register') }}">Register</a></li>
                                        @endif --}}
                                    {{-- @endauth

                            @endif --}}





								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">U<span>MS</span></div>
								</a>
							</div>
							{{-- <nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li  class="{{(request()->is('/')) ? 'active' : '' }}"><a href="{{route('index')}}" >Home</a></li>
									<li class="{{(request()->is('/about'))? 'active' : ''}}"><a href="{{route('about')}}">About</a></li>
									<li><a href="{{route('courses')}}"class=" {{ (request()->is('/'))? 'active': ''}}">Courses</a></li>
									<li><a href="{{route('news')}}"class=" {{ (request()->is('/'))? 'active': ''}}">News</a></li>

									<li><a href="{{route('contact')}}"class=" {{ (request()->is('/'))? 'active': ''}}">Contact</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav> --}}

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="#">About</a></li>
				<li class="menu_mm"><a href="#">Courses</a></li>
				<li class="menu_mm"><a href="#">Blog</a></li>
				<li class="menu_mm"><a href="#">Page</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>




@yield('content')





</div>

<script src="website/js/jquery-3.2.1.min.js"></script>
<script src="website/styles/bootstrap4/popper.js"></script>
<script src="website/styles/bootstrap4/bootstrap.min.js"></script>
<script src="website/plugins/greensock/TweenMax.min.js"></script>
<script src="website/plugins/greensock/TimelineMax.min.js"></script>
<script src="website/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="website/plugins/greensock/animation.gsap.min.js"></script>
<script src="website/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="website/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="website/plugins/easing/easing.js"></script>
<script src="website/plugins/parallax-js-master/parallax.min.js"></script>
<script src="website/js/custom.js"></script>
<script src="website/js/contact.js"></script>
<script src="website/js/courses.js"></script>
<script src="website/js/blog.js"></script>
<script src="website/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="website/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
</body>
</html>
