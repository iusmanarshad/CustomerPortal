@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">PRICING</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pricing</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-md-12">
							<div class="tx-center">
								<h3>Best Plans For You!</h3>
								<p class="tx-muted">We have several plans to showcase your business.</p>
								<div class="panel tabs-style5 w-fit-content mx-auto">
									<div class="panel-head">
										<ul class="nav nav-tabs bg-white">
											<li class="nav-item"><a class="nav-link tx-14 font-weight-semibold active" data-bs-toggle="tab" href="#pricingTab1">Monthly</a></li>
											<li class="nav-item"><a class="nav-link tx-14 font-weight-semibold" data-bs-toggle="tab" href="#pricingTab2">Yearly</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-body p-0 border-0">
								<div class="tab-content mt-4">
									<div class="tab-pane active" id="pricingTab1">
										<div class="container">
											<div class="row align-items-center">
												<div class="col-xl-4 col-md-12">
													<div class="card pricing-card">
														<div class="card-body">
															<div class="tx-center">
																<h4>Basic</h4>
																<p class="tx-muted">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
																<p class="tx-50">$10</p>
															</div>
															<ul class="list-unstyled mb-4">
																<li class="mb-3 tx-14 tx-primary"><span><i class="fa fa-check me-2 tx-10"></i></span>2 Free Domain Name</li>
																<li class="mb-3 tx-14 tx-primary"><span><i class="fa fa-check me-2 tx-10"></i></span>3 One-Click Apps</li>
																<li class="mb-3 tx-14 tx-muted"><span><i class="fa fa-check me-2 tx-10"></i></span>1 Databases</li>
																<li class="mb-3 tx-14 tx-muted"><span><i class="fa fa-check me-2 tx-10"></i></span>Money BackGuarantee</li>
																<li class="mb-0 tx-14 tx-muted"><span><i class="fa fa-check me-2 tx-10"></i></span>24/7 support</li>
															</ul>
															<div class="tx-center">
																<a href="javascript:void(0);" class="btn btn-primary-light btn-block">Choose Plan</a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-12">
													<div class="card pricing-card bg-primary-transparent text-primary premium-card">
														<div class="card-body">
															<div class="tx-center">
																<h4>Premium</h4>
																<p class="op-8">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
																<p class="tx-50">$29</p>
															</div>
															<ul class="list-unstyled mb-4">
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>2 Free Domain Name</span></li>
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>3 One-Click Apps</span></li>
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>1 Databases</span></li>
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>Money BackGuarantee</span></li>
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>Visitors Monitoring</span></li>
																<li class="mb-3 tx-14"><span class="op-7"><i class="fa fa-check me-2 tx-10"></i>Regular Updates</span><span class="badge badge-light rounded-pill ms-3">Yearly paln</span></li>
																<li class="mb-0 tx-14"><span class="op-7"><i class="fa fa-check me-2 tx-10"></i>24/7 support</span><span class="badge badge-light rounded-pill ms-3">Yearly paln</span></li>
															</ul>
															<div class="tx-center">
																<a href="javascript:void(0);" class="btn btn-primary btn-block">Choose Plan</a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-12">
													<div class="card pricing-card">
														<div class="card-body">
															<div class="tx-center">
																<h4>Standard</h4>
																<p class="tx-muted">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
																<p class="tx-50">$15</p>
															</div>
															<ul class="list-unstyled mb-4">
																<li class="mb-3 tx-14 tx-primary"><span><i class="fa fa-check me-2 tx-10"></i></span>2 Free Domain Name</li>
																<li class="mb-3 tx-14 tx-primary"><span><i class="fa fa-check me-2 tx-10"></i></span>3 One-Click Apps</li>
																<li class="mb-3 tx-14 tx-primary"><span><i class="fa fa-check me-2 tx-10"></i></span>1 Databases</li>
																<li class="mb-3 tx-14 tx-muted"><span><i class="fa fa-check me-2 tx-10"></i></span>Money BackGuarantee</li>
																<li class="mb-0 tx-14 tx-muted"><span><i class="fa fa-check me-2 tx-10"></i></span>24/7 support</li>
															</ul>
															<div class="tx-center">
																<a href="javascript:void(0);" class="btn btn-primary-light btn-block">Choose Plan</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="pricingTab2">
										<div class="container">
											<div class="row align-items-center">
												<div class="col-xl-4 col-md-12">
													<div class="card pricing-card">
														<div class="card-body">
															<div class="tx-center">
																<h4>Basic</h4>
																<p class="tx-muted">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
																<p class="tx-50">$170</p>
															</div>
															<ul class="list-unstyled mb-4">
																<li class="mb-3 tx-14 tx-primary"><span><i class="fa fa-check me-2 tx-10"></i></span>2 Free Domain Name</li>
																<li class="mb-3 tx-14 tx-primary"><span><i class="fa fa-check me-2 tx-10"></i></span>3 One-Click Apps</li>
																<li class="mb-3 tx-14 tx-muted"><span><i class="fa fa-check me-2 tx-10"></i></span>1 Databases</li>
																<li class="mb-3 tx-14 tx-muted"><span><i class="fa fa-check me-2 tx-10"></i></span>Money BackGuarantee</li>
																<li class="mb-0 tx-14 tx-muted"><span><i class="fa fa-check me-2 tx-10"></i></span>24/7 support</li>
															</ul>
															<div class="tx-center">
																<a href="javascript:void(0);" class="btn btn-primary-light btn-block">Choose Plan</a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-12">
													<div class="card pricing-card bg-primary-transparent text-primary premium-card">
														<div class="card-body">
															<div class="tx-center">
																<h4>Premium</h4>
																<p class="op-8">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
																<p class="tx-50">$319</p>
															</div>
															<ul class="list-unstyled mb-4">
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>2 Free Domain Name</span></li>
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>3 One-Click Apps</span></li>
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>1 Databases</span></li>
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>Money BackGuarantee</span></li>
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>Visitors Monitoring</span></li>
																<li class="mb-3 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>Regular Updates</span></li>
																<li class="mb-0 tx-14"><span><i class="fa fa-check me-2 tx-10"></i>24/7 support</span></li>
															</ul>
															<div class="tx-center">
																<a href="javascript:void(0);" class="btn btn-primary btn-block">Choose Plan</a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-12">
													<div class="card pricing-card">
														<div class="card-body">
															<div class="tx-center">
																<h4>Standard</h4>
																<p class="tx-muted">Sed duo rebum et et dolores sed amet rebum magna. Et sea elitr.</p>
																<p class="tx-50">$239</p>
															</div>
															<ul class="list-unstyled mb-4">
																<li class="mb-3 tx-14 tx-primary"><span><i class="fa fa-check me-2 tx-10"></i></span>2 Free Domain Name</li>
																<li class="mb-3 tx-14 tx-primary"><span><i class="fa fa-check me-2 tx-10"></i></span>3 One-Click Apps</li>
																<li class="mb-3 tx-14 tx-primary"><span><i class="fa fa-check me-2 tx-10"></i></span>1 Databases</li>
																<li class="mb-3 tx-14 tx-muted"><span><i class="fa fa-check me-2 tx-10"></i></span>Money BackGuarantee</li>
																<li class="mb-0 tx-14 tx-muted"><span><i class="fa fa-check me-2 tx-10"></i></span>24/7 support</li>
															</ul>
															<div class="tx-center">
																<a href="javascript:void(0);" class="btn btn-primary-light btn-block">Choose Plan</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

@endsection

@section('scripts')

		<!--Internal  Chart.bundle js -->
		<script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- Ionicons js -->
		<script src="{{asset('build/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>
        
		<!-- eva-icons js -->
		<script src="{{asset('build/assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

@endsection
