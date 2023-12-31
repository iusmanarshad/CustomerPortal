<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme-color="default">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

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

	<body class="ltr main-body app sidebar-mini">

        <div class="loader-container">
            <div class="loader"></div>
        </div>


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
                @include('client-app.layouts.components.app-header')
                <!-- /app-Header -->

                <!--App-Sidebar-->
                @include('client-app.layouts.components.app-sidebar')
                <!-- /App-Sidebar-->

            </div>

			<!-- main-content -->
			<div class="main-content app-content" id="app">
				<!-- container -->
				<div class="main-container container-fluid">
                    @yield('content')
                </div>
				<!-- Container closed -->

                <client-unread-message-badge :user-id="{{ auth()->user()->id }}"></client-unread-message-badge>
			</div>
			<!-- main-content closed -->

            <!-- Sidebar-right-->
            @include('client-app.layouts.components.sidebar-right')
            <!--/Sidebar-right-->

            <!-- Country-selector modal-->
            @include('client-app.layouts.components.modal')
            <!-- Country-selector modal-->

            <!-- Footer opened -->
			@include('client-app.layouts.components.footer')
            <!-- Footer closed -->

            @yield('modals')

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->
        @include('client-app.layouts.components.scripts')

        <!-- APP JS-->
		@vite('resources/js/app.js')
        <!-- END SCRIPTS -->

        <!-- sticky js-->
		<script src="{{asset('build/assets/sticky.js')}}"></script>

        <style>
            .loader-container {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 255, 255, 0.9);
                justify-content: center;
                align-items: center;
                z-index: 9999;
            }

            .loader {
                border: 16px solid #f3f3f3;
                border-top: 16px solid #3498db;
                border-radius: 50%;
                width: 80px;
                height: 80px;
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        </style>
	</body>
</html>
