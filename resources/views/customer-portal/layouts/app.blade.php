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
		<title> Zem - Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!-- Favicon -->
		<link rel="icon" href="{{asset('build/assets/img/brand/favicon-white.png')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link id="style" href="{{asset('build/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >

        <!-- APP CSS & APP SCSS -->
        @vite(['resources/css/app.css' , 'resources/sass/app.scss'])

        @yield('styles')

	</head>

	<body class="ltr main-body app sidebar-mini">

    	<!-- Progress bar on scroll -->
		<div class="progress-top-bar"></div>

        <!-- Back-to-top -->
        <a href="#top" id="back-to-top" class="back-to-top rounded-circle shadow"><i class="las la-arrow-up"></i></a>

		<!-- Loader -->
		<div id="global-loader" >
			<img src="{{asset('build/assets/img/loader.svg')}}" class="loader-img" alt="loader">
		</div>
		<!-- /Loader -->

        <!-- PAGE -->
		<div class="page">

            <div class="layout-position-binder">

                <!-- app-Header -->
                @include('customer-portal.layouts.components.app-header')
                <!-- /app-Header -->

                <!--App-Sidebar-->
                @include('customer-portal.layouts.components.app-sidebar')
                <!-- /App-Sidebar-->

            </div>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">
                    @yield('content')

                </div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

            <!-- Sidebar-right-->
            @include('customer-portal.layouts.components.sidebar-right')
            <!--/Sidebar-right-->

            <!-- Country-selector modal-->
            @include('customer-portal.layouts.components.modal')
            <!-- Country-selector modal-->

            <!-- Footer opened -->
			@include('customer-portal.layouts.components.footer')
            <!-- Footer closed -->

            @yield('modals')

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->
        @include('customer-portal.layouts.components.scripts')

        <!-- APP JS-->
		@vite('resources/js/app.js')
        <!-- END SCRIPTS -->

        <!-- sticky js-->
		<script src="{{asset('build/assets/sticky.js')}}"></script>

	</body>
</html>
