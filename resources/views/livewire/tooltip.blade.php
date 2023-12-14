@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TOOLTIPS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">ELements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tooltips</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Default Tooltip</div>
								</div>
								<div class="card-body">
									<div class="tx-10 mb-1 font-weight-bold tx-muted text-uppercase">
										STATIC EXAMPLE
									</div>
									<div class="tooltip-static-demo br-5">
										<div class="row align-items-center">
											<div class="col-sm-6 col-lg-3">
												<div class="tooltip bs-tooltip-top" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the top
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="tooltip bs-tooltip-bottom" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the bottom
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="tooltip bs-tooltip-start" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the left
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="tooltip bs-tooltip-end" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the right
													</div>
												</div>
											</div>
										</div>
									</div><!-- tooltip-static-demo -->
									<div class="mt-2">
										<div class="tx-10 mb-1 font-weight-bold tx-muted text-uppercase">
											EXAMPLE
										</div>
										<div class="pd-20 bg-custom br-5">
											<div class="text-wrap">
												<div class="row align-items-center tx-center">
													<div class="col-sm-6 col-lg-3">
														<button class="btn btn-primary mb-lg-0 mb-2" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3">
														<button class="btn btn-primary mb-lg-0 mb-2" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3">
														<button class="btn btn-primary mb-lg-0 mb-2" data-bs-placement="left" data-bs-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3">
														<button class="btn btn-primary" data-bs-placement="right" data-bs-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Colored Tooltip</div>
								</div>
								<div class="card-body">
									<div class="tx-10 mb-1 font-weight-bold tx-muted text-uppercase">
										STATIC EXAMPLE
									</div>
									<div class="tooltip-static-demo br-5">
										<div class="row align-items-center">
											<div class="col-sm-6 col-lg-3">
												<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the top
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="tooltip tooltip-secondary bs-tooltip-bottom" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the bottom
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="tooltip tooltip-primary1 bs-tooltip-start" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the left
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-3">
												<div class="tooltip tooltip-secondary1 bs-tooltip-end" role="tooltip">
													<div class="tooltip-arrow"></div>
													<div class="tooltip-inner">
														Tooltip on the right
													</div>
												</div>
											</div>
										</div>
									</div><!-- tooltip-static-demo -->

									<div class="mt-2">
										<div class="tx-10 mb-1 font-weight-bold tx-muted text-uppercase">
											EXAMPLE
										</div>
										<div class="text-wrap">
											<div class="bg-custom pd-20 br-5">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button class="btn btn-primary mb-lg-0 mb-2" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3">
														<button class="btn btn-secondary mb-lg-0 mb-2" data-bs-placement="bottom" data-bs-toggle="tooltip-secondary" title="Tooltip on bottom" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3">
														<button class="btn btn-success mb-lg-0 mb-2" data-bs-placement="left" data-bs-toggle="tooltip-primary1" title="Tooltip on left" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3">
														<button class="btn btn-danger" data-bs-placement="right" data-bs-toggle="tooltip-secondary1" title="Tooltip on right" type="button">Hover me</button>
													</div>
												</div>
											</div>
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

		<!-- tootip js -->
		@vite('resources/assets/js/tooltip.js')

@endsection
