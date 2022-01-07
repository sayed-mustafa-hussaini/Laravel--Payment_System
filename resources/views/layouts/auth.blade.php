
<!doctype html>
<html lang="en" dir="ltr">
  <head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Flaira - Bootstrap HTML Admin Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin dashboard template,admin panel template,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin panel,admin template,bootstrap admin template,dashboard template,	bootstrap admin template,premium admin templates,html admin template,ecommerce dashboard,admin panel template,bootstrap admin theme,bootstrap admin panel">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/brand/favi.png')}}" />

		<!-- TITLE -->
		<title>Login – Your Software Development Partner - Payments System</title>

		<!-- BOOTSTRAP CSS -->
		<link href="{{url('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{url('public/assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{url('public/assets/css/skin-modes.css')}}" rel="stylesheet"/>

		<!-- SIDE-MENU CSS -->
		<link href="{{url('public/assets/css/sidemenu.css')}}" rel="stylesheet">

		<!-- SINGLE-PAGE CSS -->
		<link href="{{url('public/assets/plugins/single-page/css/main.css')}}" rel="stylesheet" type="text/css">

		<!--C3 CHARTS CSS -->
		<link href="{{url('public/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="{{url('public/assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet"/>

		<!-- SELECT2 CSS -->
		<link href="{{url('public/assets/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="{{url('public/assets/css/icons.css')}}" rel="stylesheet"/>

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{url('public/assets/colors/color1.css')}}" />
		

		<style>
			.btn-primary{
				background: #E30613 !important;
				border-color: #E30613 !important;
			}
		</style>

	</head>

	<body style="    overflow-y: auto !important;">

		<!-- BACKGROUND-IMAGE -->
		<div class="login-img" style="background: #E30613 !important">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="{{url('public/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
			</div>
				@yield('content')

		</div>

		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY JS -->
		<script src="{{url('public/assets/js/jquery-3.4.1.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{url('public/assets/plugins/bootstrap/js/popper.min.js')}}"></script>

		<!-- SPARKLINE JS -->
		<script src="{{url('public/assets/js/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE JS -->
		<script src="{{url('public/assets/js/circle-progress.min.js')}}"></script>

		<!-- RATING STAR JS -->
		<script src="{{url('public/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- INPUT MASK JS -->
		<script src="{{url('public/assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

		<!-- CUSTOM SCROLL BAR JS-->
		<script src="{{url('public/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
		<script src="{{url('public/assets/plugins/p-scroll/p-scroll.js')}}"></script>
		<script src="{{url('public/assets/plugins/p-scroll/p-scroll-1.js')}}"></script>

		<!-- SELECT2 JS -->
		<script src="{{url('public/assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- CUSTOM JS-->
		<script src="{{url('public/assets/js/custom.js')}}"></script>

	</body>
</html>
