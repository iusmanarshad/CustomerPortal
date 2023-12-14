@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SPINNERS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Spinners</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Example</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="spinner-border" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Border Spinners</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="spinner-border tx-primary" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-border tx-secondary" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-border tx-success" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-border tx-danger" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-border tx-warning" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-border tx-info" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-border text-light" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-border text-dark mb-1" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Growing Spinners</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="spinner-grow" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow tx-primary" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow tx-secondary" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow tx-success" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow tx-danger" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow tx-warning" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow tx-info" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-light" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-dark" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Spinner Sizes</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="d-flex align-items-center">
											<div class="me-4">
												<div class="spinner-border spinner-border-xs" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow spinner-grow-xs" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
											<div class="me-4">
												<div class="spinner-border spinner-border-sm" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow spinner-grow-sm" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
											<div class="me-4">
												<div class="spinner-border spinner-border-lg" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow spinner-grow-lg" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
											<div class="me-0">
												<div class="spinner-border spinner-border-xl" role="status">
													<span class="sr-only">Loading...</span>
												</div>
												<div class="spinner-grow spinner-grow-xl" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Alignment</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="spinner-border" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="float-end">
											<div class="spinner-border" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Button</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<button class="btn btn-sm btn-primary" type="button">
											<span class="spinner-border spinner-border-xs" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-sm btn-primary" type="button">
											<span class="spinner-grow spinner-grow-xs" role="status" aria-hidden="true"></span>
											Loading...
										</button>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Circle Loader</div>
								</div>
								<div class="card-body">
									<div class="text-center">
										<div class="lds-circle">
											<div></div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Ring Loader</div>
								</div>
								<div class="card-body">
									<div class="text-center">
										<div class="lds-dual-ring"></div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Lines Loader</div>
								</div>
								<div class="card-body">
									<div class="text-center">
										<div class="lds-lines">
											<div></div>
											<div></div>
											<div></div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Heart Loader</div>
								</div>
								<div class="card-body">
									<div class="text-center">
										<div class="lds-heart"><div></div></div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Ripple Loader</div>
								</div>
								<div class="card-body">
									<div class="text-center">
										<div class="lds-ripple">
											<div></div>
											<div></div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Spinner Loader</div>
								</div>
								<div class="card-body">
									<div class="text-center">
										<div class="lds-spinner">
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
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- Ionicons js -->
		<script src="{{asset('build/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- eva-icons js -->
		<script src="{{asset('build/assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

@endsection
