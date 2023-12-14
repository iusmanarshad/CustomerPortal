@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SWEET ALERTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item breadcrumb-style3 tx-15"><a href="javascript:void(0);">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sweet alert</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="row">

						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Sweet-alert</div>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label class="form-label">Title</label>
											<input type="text" id="title" class="form-control" placeholder="Enter Title">
										</div>
										<div class="form-group">
											<label for="message" class="form-label">Message</label>
											<input type="text" id="message" class="form-control" placeholder="Enter Your Message">
										</div>
										<div class="btn-list">
											<input type='button' class="btn btn-primary mt-2" value='Simple alert' id='but1'>
											<input type='button' class="btn btn-secondary mt-2" value='Alert with title' id='but2'>
											<input type='button' class="btn btn-success mt-2" value='Alert with image' id='but3'>
											<input type='button' class="btn btn-danger mt-2" value='With timer' id='but4'>
										</div>
									</form>
								</div>
							</div>
						</div><!-- col end -->

						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Alert</div>
								</div>
								<div class="card-body">
									<p class="card-subtitle">A Basic Message</p>
									<div class="tx-center">
										<a href="javascript:void(0)" class="btn btn-primary" id='swal-basic'>
											Click me !
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Title alert</div>
								</div>
								<div class="card-body">
									<p class="card-subtitle">A title with a text under</p>
									<div class="tx-center">
										<a href="javascript:void(0)" class="btn btn-danger" id='swal-title'>
											Click me !
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Success alert</div>
								</div>
								<div class="card-body">
									<p class="card-subtitle">A Success Message</p>
									<div class="tx-center">
										<a href="javascript:void(0)" class="btn btn-success" id='swal-success'>
											Click me !
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Warning alert</div>
								</div>
								<div class="card-body">
									<p class="card-subtitle">A warning message</p>
									<div class="tx-center">
										<a href="javascript:void(0)" class="btn btn-warning" id='swal-warning'>
											Click me !
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Passing a parameter alert</div>
								</div>
								<div class="card-body">
									<p class="card-subtitle">By passing a parameter</p>
									<div class="tx-center">
										<a href="javascript:void(0)" class="btn btn-secondary" id='swal-parameter'>
											Click me !
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Image alert</div>
								</div>
								<div class="card-body">
									<p class="card-subtitle">A message with custom Image</p>
									<div class="tx-center">
										<a href="javascript:void(0)" class="btn btn-info" id='swal-image'>
											Click me !
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Timer alert</div>
								</div>
								<div class="card-body">
									<p class="card-subtitle">A message with auto close timer</p>
									<div class="tx-center">
										<a href="javascript:void(0)" class="btn btn-dark" id='swal-timer'>
											Click me !
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Ajax Alert</div>
								</div>
								<div class="card-body">
									<p class="card-subtitle">With a loader (for a AJAX requests)</p>
									<div class="tx-center">
										<a href="javascript:void(0)" class="btn btn-light" id='swal-ajax'>
											Click me !
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- Sweet-alert js  -->
		<script src="{{asset('build/assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		@vite('resources/assets/js/sweet-alert.js')

@endsection
