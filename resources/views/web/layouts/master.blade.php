<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>otravelsolution - {{isset($pageTitle)?$pageTitle:''}}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="otravelsolution is the best travel solution in worldwide">
	<meta name="keywords" content="car rental, taxi, cab, booking">
	<meta name="author" content="theLaraSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="{{URL::to('frontend')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{URL::to('frontend')}}/css/bootstrap-datetimepicker.min.css" />
	<!-- Fontawesome css -->
	<link rel="stylesheet" href="{{URL::to('frontend')}}/css/font-awesome.min.css">
	<!-- Magnific-popup css -->
	<link rel="stylesheet" href="{{URL::to('frontend')}}/css/magnific-popup.css">
	<!-- Rev Slider css -->
	<link rel="stylesheet" href="{{URL::to('frontend')}}/js/revolution-slider/css/settings.css">
	<!-- Owl Carousel css -->
	<link rel="stylesheet" href="{{URL::to('frontend')}}/css/owl.theme.css">
	<link rel="stylesheet" href="{{URL::to('frontend')}}/css/owl.carousel.css">
	<!-- Main css -->
	<link rel="stylesheet" href="{{URL::to('frontend')}}/css/style-blue.css">
	
	@laravelPWA
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

	<!-- PRE LOADER -->
	<div class="preloader">
		<div class="cssload-dots">
			<div class="cssload-dot"></div>
			<div class="cssload-dot"></div>
			<div class="cssload-dot"></div>
			<div class="cssload-dot"></div>
			<div class="cssload-dot"></div>
		</div>
	</div>

	<!-- Navigation Section -->
	@include('web.layouts.header')

	<!-- Body Part -->
	@yield('body')

	<footer>
		<div class="container"> 
			<!-- social Section -->
			<div class="socialLinks" >
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="footer-copyright">
						<p>&copy; 2021 Otravelsolution | All Rights Reserved. | Design & Developed By Softme Limited</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Bootstrap --> 
	<script src="{{URL::to('frontend')}}/js/jquery-2.1.4.min.js"></script> 
	<script src="{{URL::to('frontend')}}/js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="{{URL::to('frontend')}}/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script> 
	<!-- Popup --> 
	<script src="{{URL::to('frontend')}}/js/jquery.magnific-popup.min.js"></script> 
	<script src="{{URL::to('frontend')}}/js/magnific-popup-options.js"></script> 
	<!-- Carousel --> 
	<script src="{{URL::to('frontend')}}/js/owl.carousel.js"></script> 
	<!-- Sticky Header --> 
	<script src="{{URL::to('frontend')}}/js/jquery.sticky.js"></script> 
	<!-- Parallax --> 
	<script src="{{URL::to('frontend')}}/js/jquery.parallax.js"></script> 
	<!-- Counter --> 
	<script src="{{URL::to('frontend')}}/js/counter.js"></script> 
	<script src="{{URL::to('frontend')}}/js/smoothscroll.js"></script> 
	<!-- Revolution Slider --> 
	<script type="text/javascript" src="{{URL::to('frontend')}}/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
	<script type="text/javascript" src="{{URL::to('frontend')}}/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 
	<!-- Custom --> 
	<script src="{{URL::to('frontend')}}/js/custom.js"></script>
</body>

</html>