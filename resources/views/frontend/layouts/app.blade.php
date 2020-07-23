<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@if(isset($fetchlogo->title)) {{$fetchlogo->title}} @else IT PLUS  @endif</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel = "icon" href ="@if(isset($fetchlogo->favicon)) {{URL::asset('assets/image/logo/'.$fetchlogo->favicon)}} @else  @endif" type = "image/x-icon">
	<!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
	<!-- Colorbox -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/colorbox.css')}}">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery.js')}}"></script>
</head>
<body>
	{{-- <div class="body-inner">
		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
						<ul class="top-info">
							<li><i class="fa fa-mobile">&nbsp;</i>
								<p class="info-text">{{$fetchcon->mobile}}</p>
                            </li>
                            <li><i class="fa fa-envelope">&nbsp;</i>
								<p class="info-text">{{$fetchcon->email}}</p>
							</li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
				<ul class="unstyled">
							<li>
								 <a title="Facebook" href="#">
									<span class="social-icon"><i class="fa fa-facebook"></i></span>
								</a>
								<a title="Twitter" href="#">
									<span class="social-icon"><i class="fa fa-twitter"></i></span>
								</a>
								<a title="Instagram" href="#">
									<span class="social-icon"><i class="fa fa-instagram"></i></span>
								</a> 
							 <a title="Linkdin" href="#">
									<span class="social-icon"><i class="fa fa-github"></i></span>
								</a>
							</li>
						</ul> 
					</div>
					<!--/ Top social end -->
				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</div> --}}
		<!--/ Topbar end -->

		<!-- Header start -->
		<header id="header" class="header-one">
			 {{-- <div class="container">
				<div class="row">
					<div class="logo-area clearfix">
						<div class="logo col-xs-12 col-md-3">
							<a href="{{ url('/') }}" class="logos">
								<img src="@if(isset($fetchlogo->image)) {{URL::asset('assets/image/logo/'.$fetchlogo->image)}} @else  @endif" class="frontlogo desktop" /></a>
							</a>
						</div><!-- logo end -->

						<div class="col-xs-12 col-md-9 header-right">
							<ul class="top-info-box">
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Call Us</p>
											<p class="info-box-subtitle">{{$fetchcon->mobile}}</p>
										</div>
									</div>
								</li>
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Email Us</p>
											<p class="info-box-subtitle">{{$fetchcon->email}}</p>
										</div>
									</div>
								</li>
								<li class="last">
									<div class="info-box last">
										<div class="info-box-content">
											<p class="info-box-title">Website</p>
											<p class="info-box-subtitle">{{$fetchcon->website}}</p>
										</div>
									</div>
								</li>
								<li class="header-get-a-quote">
									<a class="btn btn-primary" href="{{url('/contact')}}">Any Query</a>
								</li>
							</ul><!-- Ul end -->
						</div><!-- header right end -->
					</div><!-- logo area end -->

				</div><!-- Row end -->
			</div><!-- Container end -->  --}}

			<nav class="site-navigation navigation navdown">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="logo col-xs-12 col-md-3 ">
								<a href="{{ url('/') }}" class="logos">
									<img src="@if(isset($fetchlogo->image)) {{URL::asset('assets/image/logo/'.$fetchlogo->image)}} @else  @endif" class="frontlogo desktop" /></a>
								</a>
							</div>
							<div class="site-nav-inner pull-right">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
                                <a href="{{ url('/') }}" class="logos">
                                    <img src="@if(isset($fetchlogo->image)) {{URL::asset('assets/image/logo/'.$fetchlogo->image)}} @else  @endif" class="frontlogo mobile" /></a>
                                </a>
								<div class="collapse navbar-collapse navbar-responsive-collapse">
									<ul class="nav navbar-nav">
										<li class="dropdown"><a href="{{ url('/') }}" >Home </a></li>

										{{-- <li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu"> --}}
												<li class="dropdown"><a href="{{ url('/about') }}">About Us</a></li>
												<li class="dropdown"><a href="{{ url('portfolio') }}">Our Portfolio</a></li>
											{{-- </ul> --}}
										</li>


										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
                                                @foreach($fetchcat as $menuItem)
												<li class="dropdown-submenu">
                                                    @if( ! $menuItem->service->isEmpty())
													<a href="#">{{ $menuItem->category }}</a>
													<ul class="dropdown-menu">
                                                        @foreach($menuItem->service as $subMenuItem)
														<li><a href="{{ url('services/products/'.$subMenuItem->id) }}">{{ $subMenuItem->products }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                    @else
                                                    <li><a href="{{ url('services/'.$menuItem->category_id) }}">{{ $menuItem->category }}</a></li>
                                                @endif
                                                </li>
                                                @endforeach
											</ul>
                                        </li>
                                    <li><a href="{{url('/contact')}}">Contact</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					{{-- <div class="nav-search">
						<span id="search"><i class="fa fa-search"></i></span>
					</div> --}}

					<div class="search-block" style="display: none;">
						<input type="text" class="form-control" placeholder="Type what you want and enter">
						<span class="search-close">&times;</span>
					</div>
				</div>
			</nav>
		</header>

        @yield('content')
        <footer id="footer" class="footer bg-overlay">
			{{-- <div class="footer-main">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12 footer-widget footer-about">
							<h3 class="widget-title">About Us</h3>
							<img src="@if(isset($fetchlogo->image)) {{URL::asset('assets/image/logo/'.$fetchlogo->image)}} @else  @endif" class="frontlogo" />
							<p>@if(isset($fetchlogo->image)) {!! $fetchlogo->description !!} @else  @endif</p>
							<div class="footer-social">
								<ul>
									<li><a href="https://www.facebook.com/ITPLUSBIKANER/" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 col-sm-12 footer-widget">
							<h3 class="widget-title">Working Hours</h3>
							<div class="working-hours">
								We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
								Hotline and Contact form.
								<br><br> Monday - Friday: <span class="text-right">09:30 - 06:30 </span>
								<br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
							</div>
						</div><!-- Col end -->

						<div class="col-md-4 col-sm-12 footer-widget">
							<h3 class="widget-title">Services</h3>
							<ul class="list-arrow">
                                @foreach($fetchcat as $menuItem)
                                <li><a href="{{ url('services/'.$menuItem->category_id) }}">{{ $menuItem->category }}</a></li>
                                    <li><a href="service-single.html">Pre-Construction</a></li>
                                @endforeach

							</ul>
						</div><!-- Col end -->


					</div><!-- Row end -->
				</div><!-- Container end -->
			</div><!-- Footer main end --> --}}

			<div class="copyright" style="color:#fff">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="copyright-info">
                            <span>Copyright © 2020 <a href="{{url('/')}}">@if(isset($fetchlogo->title)) {{$fetchlogo->title}} @else   @endif</a></span>
                            </div>
						</div>

						<div class="col-xs-12 col-sm-6" style="color:#fff">
							<div class="footer-menu">
								<ul class="nav unstyled">
									<li><a href="{{ url('/about')}}"  style="color:#fff">About</a></li>
									<li><a href="{{url('/contact')}}"  style="color:#fff">Contact</a></li>
                                <li><a href="{{url('/portfolio')}}"  style="color:#fff">Our Portfolio</a></li>
								</ul>
							</div>
						</div>
					</div><!-- Row end -->

				</div><!-- Container end -->
			</div>

		</footer><!-- Footer end -->


		<!-- Javascript Files
	================================================== -->

		<!-- initialize jQuery Library -->

		 <!-- Bootstrap jQuery -->
		<script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
		<!-- Owl Carousel -->
		<script type="text/javascript" src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
		<!-- Color box -->
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.colorbox.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/isotope.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/ini.isotope.js')}}"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/gmap3.js')}}"></script>
	    <script type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script> 

	</div>
	<script>
		
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 75 || document.documentElement.scrollTop > 75) {
        $('.navbar').removeClass('px-sm-9 py-sm-3 p-3 navbar-custom');
        $('.navbar').addClass('p-cstm fixed-top');
        $('.navbar').css('padding-right','0');
        $('.main').removeClass('mt-7');
        $('.main').addClass('mt-9');
    } else {
        $('.navbar').addClass('px-sm-9 py-sm-3 p-3 navbar-custom');
        $('.navbar').removeClass('p-cstm fixed-top');
        $('.main').addClass('mt-7');
        $('.main').removeClass('mt-9');
    }
}

	</script>
</body>

</html>
