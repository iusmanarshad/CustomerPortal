<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme-color="default">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Laravel Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="laravel admin, admin dashboard, admin laravel dashboard template, admin panel template, laravel admin template, laravel bootstrap 5 admin template, bootstrap ui kit, laravel dashboard bootstrap 5, laravel envato templates, flat ui, html and css templates, laravel html dashboard template, laravel html5, laravel jquery html, laravel premium, premium quality, sidebar bootstrap 5, laravel template admin bootstrap 5">

		<!-- Title -->
		<title> DrummLaw </title>

		<!-- Favicon -->
		<link rel="icon" href="{{asset('assets/images/brand/favicon.png')}}" type="image/x-icon"/>

        <!-- BOOTSTRAP CSS -->
	    <link id="style" href="{{asset('build/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >

        <!-- APP CSS & APP SCSS -->
        @vite(['resources/css/app.css' , 'resources/sass/app.scss'])

        @yield('styles')

	</head>

	<body class="ltr error-page1 bg-primary">

    	<!-- Progress bar on scroll -->
		<div class="progress-top-bar"></div>

        <!-- Back-to-top -->
        <a href="#top" id="back-to-top" class="back-to-top rounded-circle shadow"><i class="las la-arrow-up"></i></a>

		<!-- Loader -->
		<div id="global-loader" >
			<img src="{{asset('build/assets/img/loader.svg')}}" class="loader-img" alt="loader">
		</div>
		<!-- /Loader -->

        <div class="square-box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>

        @yield('content')

        <!-- SCRIPTS -->
        @include('layouts.components.custom-scripts')

        <!-- APP JS-->
		@vite('resources/js/app.js')
        <!-- END SCRIPTS -->

        <!-- sticky js-->
		<script src="{{asset('build/assets/sticky.js')}}"></script>

	</body>
</html>
