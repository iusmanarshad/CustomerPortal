@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">DASHBOARD</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0)">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-xxl-5 col-xl-12">
							<div class="row">
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-column mb-0">
												<div class="mb-3">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">View Report</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">View All Orders</a></li>
													</ul>
													<div class="avatar radius-4 bg-primary-transparent">
														<i class="fa fa-store tx-primary"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="mb-2">
														<h5 class="mb-0 numberfont">$43,038.00</h5>
													</div>
													<div class="d-flex justify-content-between">
														<p class="mb-0">Total Orders</p>
														<span class="tx-12 font-weight-semibold numberfont tx-primary"><i class="fe fe-arrow-up-right me-1"></i>+12.86%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-column mb-0">
												<div class="mb-3">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">View Report</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">View All Customers</a></li>
													</ul>
													<div class="avatar radius-4 bg-orange-transparent">
														<i class="fa fa-users tx-orange"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="mb-2">
														<h5 class="mb-0 numberfont">93,238</h5>
													</div>
													<div class="d-flex justify-content-between">
														<p class="mb-0">Total Customers</p>
														<span class="tx-12 font-weight-semibold numberfont tx-orange"><i class="fe fe-arrow-up-right me-1"></i>+5.64%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-column mb-0">
												<div class="mb-3">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">View Report</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">View All Sales</a></li>
													</ul>
													<div class="avatar radius-4 bg-warning-transparent">
														<i class="fa fa-rocket tx-warning"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="mb-1">
														<h5 class="mb-0 numberfont">1,13,038</h5>
													</div>
													<div class="d-flex align-items-center justify-content-between">
														<p class="mb-0">Total Sales</p>
														<span class="tx-12 font-weight-semibold numberfont tx-warning"><i class="fe fe-arrow-up-right me-1"></i>+2.61%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-column mb-0">
												<div class="mb-3">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
													</ul>
													<div class="avatar radius-4 bg-green-transparent">
														<i class="fa fa-wallet tx-green"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="mb-1">
														<h5 class="mb-0 numberfont">$83,438.00</h5>
													</div>
													<div class="d-flex align-items-center justify-content-between">
														<p class="mb-0">Total Conversion</p>
														<span class="tx-12 font-weight-semibold numberfont tx-green"><i class="fe fe-arrow-up-right me-1"></i>+12.86%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Customers By Category</div>
										</div>
										<div class="card-body">
											<div class="mb-4">
												<div class="flex-between mb-2">
													<p class="mb-0 tx-14 text-start">Men</p>
													<span>60%</span>
												</div>
												<div class="progress">
													<div class="progress-bar-xs progress-bar-striped progress-bar-animated bg-primary wd-60p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="mb-4">
												<div class="flex-between mb-2">
													<p class="mb-0 tx-14 text-start">Women</p>
													<span>40%</span>
												</div>
												<div class="progress">
													<div class="progress-bar-xs progress-bar-striped progress-bar-animated bg-primary wd-40p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="mb-0">
												<div class="flex-between mb-2">
													<p class="mb-0 tx-14 text-start">Visits Per Day</p>
													<span>45%</span>
												</div>
												<div class="progress">
													<div class="progress-bar-xs progress-bar-striped progress-bar-animated bg-secondary wd-45p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="card-footer">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar bg-primary-transparent rounded-circle">
														<i class="fe fe-user tx-primary"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="mb-1 flex-between">
														<h6 class="mb-0">Total Customers Rate</h6>
														<p class="mb-0 tx-success font-weight-semibold tx-15"><i class="fe fe-arrow-up me-1"></i>+2.3%</p>
													</div>
													<div class="flex-between">
														<span class="badge badge-light-transparent">This Month</span>
														<a href="javascript:void(0);" class="tx-inverse tx-12">show analytics</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-7 col-xl-12">
							<div class="row">
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<h6>Available Balance</h6>
												<div class="align-self-start">
													<span class="badge badge-sm badge-primary-transparent">Primary Account</span>
												</div>
											</div>
											<div class="mb-3 mt-2">
												<h3 class="numberfont">$3,87,275.00</h3>
												<span class="tx-muted tx-12">01-08-2021 to 11-04-2022</span>
											</div>
											<div class="d-flex justify-content-between align-items-center">
												<span class=tx-muted>Debit Card | Visa</span>
												<div class="btn-list">
													<a href="javascript:void(0);" class="btn btn-sm btn-primary">Withdraw</a>
													<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary">Link Account</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between mb-3">
												<div class="me-1 mb-1">
													<h6 class="mb-1">Primary Card</h6>
													<a href="javascript:void(0);" class="tx-12 op-7">view all cards</a>
												</div>
												<div class="min-w-fit-content">
													<div class="avatar bg-primary radius-4">
														<i class="fab fa-paypal"></i>
													</div>
												</div>
											</div>
											<p class="tx-20 mb-4 numberfont">XXXX XXXX XXXX 1116</p>
											<div class="d-flex justify-content-between">
												<p class="mb-0 tx-18">Isa Bella</p>
												<span class="tx-15">12/24</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Sales Chart</div>
										</div>
										<div class="card-body">
											<div id="chartA"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-4 col-lg-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Visitors From Location</div>
								</div>
								<div class="card-body">
									<div class="ht-250 world-map" id="vmap"></div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="border-top-0 px-0 pt-0 pb-2">
														<div class="d-flex align-items-center">
															<div class="me-3">
																<div class="avatar"><img src="{{asset('build/assets/img/flags/russia_flag.jpg')}}" alt="flag" class="br-5 shadow"></div>
															</div>
															<span>Russia</span>
														</div>
													</td>
													<td class="border-top-0 px-0 pt-0 pb-2 text-end"><span class="tx-muted numberfont">10,341</span></td>
													<td class="border-top-0 px-0 pt-0 pb-2 text-end"><span class="tx-success"><i class="fe fe-arrow-up me-1 numberfont"></i> +0.61%</span></td>
												</tr>
												<tr>
													<td class="border-top-0 px-0 pt-0 pb-2">
														<div class="d-flex align-items-center">
															<div class="me-3">
																<div class="avatar"><img src="{{asset('build/assets/img/flags/austria.jpg')}}" alt="flag" class="br-5 shadow"></div>
															</div>
															<span>Australia</span>
														</div>
													</td>
													<td class="border-top-0 px-0 pt-0 pb-2 text-end"><span class="tx-muted numberfont">3,837</span></td>
													<td class="border-top-0 px-0 pt-0 pb-2 text-end"><span class="tx-success"><i class="fe fe-arrow-up me-1 numberfont"></i> +0.11%</span></td>
												</tr>
												<tr>
													<td class="border-top-0 p-0">
														<div class="d-flex align-items-center">
															<div class="me-3">
																<div class="avatar"><img src="{{asset('build/assets/img/flags/brazil.jpg')}}" alt="flag" class="br-5"></div>
															</div>
															<span>Brazil</span>
														</div>
													</td>
													<td class="border-top-0 p-0 text-end"><span class="tx-muted numberfont">2,893</span></td>
													<td class="border-top-0 p-0 text-end"><span class="tx-danger"><i class="fe fe-arrow-down me-1 numberfont"></i>-0.28%</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Top Selling Products
									</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled custom-list-group mb-0">
										<li class="list-group-item border-0 px-0 pt-0">
											<div class="d-sm-flex">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar"><img src="{{asset('build/assets/img/ecommerce/2.jpg')}}" alt="img" class="radius-4"></div>
												</div>
												<div class="flex-1">
													<div class="d-flex">
														<h6 class="mb-0 me-1">Positive White Color Wireless Earbuds</h6>
														<p class="mb-0 tx-15 font-weight-semibold min-w-fit-content ms-auto numberfont">$53.25</p>
													</div>
													<div class="d-sm-flex">
														<div class="me-sm-1 mb-1 mb-sm-0">
															<span class="pe-2 border-end tx-muted">12-04-2022</span>
															<span class="ps-2 tx-danger">only 8 items left</span>
														</div>
														<div class="ms-auto min-w-fit-content">
															<span class="tx-muted numberfont">1.1K sales</span>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="list-group-item border-0 px-0 pt-0">
											<div class="d-sm-flex">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar"><img src="{{asset('build/assets/img/ecommerce/4.jpg')}}" alt="img" class="radius-4"></div>
												</div>
												<div class="flex-1">
													<div class="d-flex">
														<h6 class="mb-0 me-1">Beautiful Wooden Chair</h6>
														<p class="mb-0 tx-15 font-weight-semibold min-w-fit-content ms-auto numberfont">$30.56</p>
													</div>
													<div class="d-sm-flex">
														<div class="me-sm-1 mb-1 mb-sm-0">
															<span class="pe-2 border-end tx-muted">14-04-2022</span>
															<span class="ps-2 tx-green">in stock</span>
														</div>
														<div class="ms-auto min-w-fit-content">
															<span class="tx-muted numberfont">531 sales</span>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="list-group-item border-0 px-0 pt-0">
											<div class="d-sm-flex">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar"><img src="{{asset('build/assets/img/ecommerce/8.jpg')}}" alt="img" class="radius-4"></div>
												</div>
												<div class="flex-1">
													<div class="d-flex">
														<h6 class="mb-0 me-1">Stylish Backpack Black Colour</h6>
														<p class="mb-0 tx-15 font-weight-semibold min-w-fit-content ms-auto numberfont">$25</p>
													</div>
													<div class="d-sm-flex">
														<div class="me-sm-1 mb-1 mb-sm-0">
															<span class="pe-2 border-end tx-muted">24-04-2022</span>
															<span class="ps-2 tx-danger">3 items left</span>
														</div>
														<div class="ms-auto min-w-fit-content">
															<span class="tx-muted numberfont">1.5K sales</span>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="list-group-item border-0 px-0 pt-0">
											<div class="d-sm-flex">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar"><img src="{{asset('build/assets/img/ecommerce/1.jpg')}}" alt="img" class="radius-4"></div>
												</div>
												<div class="flex-1">
													<div class="d-flex">
														<h6 class="mb-0 me-1">Lastest Smart Phone 5G</h6>
														<p class="mb-0 tx-15 font-weight-semibold min-w-fit-content ms-auto numberfont">$223.98</p>
													</div>
													<div class="d-sm-flex">
														<div class="me-sm-1 mb-1 mb-sm-0">
															<span class="pe-2 border-end tx-muted">11-04-2022</span>
															<span class="ps-2 tx-green">in stock</span>
														</div>
														<div class="ms-auto min-w-fit-content">
															<span class="tx-muted numberfont">773 sales</span>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="list-group-item border-0 px-0 pt-0">
											<div class="d-sm-flex">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar"><img src="{{asset('build/assets/img/ecommerce/7.jpg')}}" alt="img" class="radius-4"></div>
												</div>
												<div class="flex-1">
													<div class="d-flex">
														<h6 class="mb-0 me-1">Sports Shoes For Men (Pair of 1)</h6>
														<p class="mb-0 tx-15 font-weight-semibold min-w-fit-content ms-auto numberfont">$323.98</p>
													</div>
													<div class="d-sm-flex">
														<div class="me-sm-1 mb-1 mb-sm-0">
															<span class="pe-2 border-end tx-muted">18-04-2022</span>
															<span class="ps-2 tx-green">in stock</span>
														</div>
														<div class="ms-auto min-w-fit-content">
															<span class="tx-muted numberfont">2773 sales</span>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="list-group-item border-0 px-0 pt-0">
											<div class="d-sm-flex">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar"><img src="{{asset('build/assets/img/ecommerce/5.jpg')}}" alt="img" class="radius-4"></div>
												</div>
												<div class="flex-1">
													<div class="d-flex">
														<h6 class="mb-0 me-1">Beautiful White Colour Flower Pot</h6>
														<p class="mb-0 tx-15 font-weight-semibold min-w-fit-content ms-auto numberfont">$320.05</p>
													</div>
													<div class="d-sm-flex">
														<div class="me-sm-1 mb-1 mb-sm-0">
															<span class="pe-2 border-end tx-muted">16-04-2022</span>
															<span class="ps-2 tx-danger">few items left</span>
														</div>
														<div class="ms-auto min-w-fit-content">
															<span class="tx-muted numberfont">1.61K sales</span>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Top Customers
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<th class="border-top-0 bg-black-03 br-bs-5 br-ts-5">Customer</th>
													<th class="border-top-0 bg-black-03">Orders</th>
													<th class="border-top-0 bg-black-03 br-be-5 br-te-5">Total</th>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<span class="avatar"><img src="{{asset('build/assets/img/users/5.jpg')}}" alt="img" class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Rounnath Roshna</h6>
																<span class="tx-muted">rounnath1116@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0 numberfont">10,234</td>
													<td class="border-top-0 numberfont">$121K</td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<span class="avatar"><img src="{{asset('build/assets/img/users/6.jpg')}}" alt="img" class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Hasina Yae</h6>
																<span class="tx-muted">hasina393@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0 numberfont">10,134</td>
													<td class="border-top-0 numberfont">$325K</td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<span class="avatar"><img src="{{asset('build/assets/img/users/8.jpg')}}" alt="img" class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Nasiha May</h6>
																<span class="tx-muted">nasiha458@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0 numberfont">9,394</td>
													<td class="border-top-0 numberfont">$301K</td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<span class="avatar"><img src="{{asset('build/assets/img/users/7.jpg')}}" alt="img" class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Manisha Tex</h6>
																<span class="tx-muted">mansiha@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0 numberfont">12,038</td>
													<td class="border-top-0 numberfont">$431K</td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<span class="avatar"><img src="{{asset('build/assets/img/users/9.jpg')}}" alt="img" class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Rehna Klaw</h6>
																<span class="tx-muted">rehna394@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0 numberfont">8,234</td>
													<td class="border-top-0 numberfont">$95K</td>
												</tr>
												<tr>
													<td class="border-top-0 pb-1">
														<div class="d-flex">
															<div class="me-2">
																<span class="avatar"><img src="{{asset('build/assets/img/users/3.jpg')}}" alt="img" class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Rihana Ray</h6>
																<span class="tx-muted">rihana852@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0 pb-1 numberfont">7,234</td>
													<td class="border-top-0 pb-1 numberfont">$71K</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Product Summary</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered text-nowrap mb-0" id="productSummary">
											<thead>
												<tr>
													<th>Date</th>
													<th>Client Name</th>
													<th>Product</th>
													<th>Transaction ID</th>
													<th>Cost</th>
													<th>Payment Method</th>
													<th>Status</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>01-01-22</td>
													<td><a href="{{url('userlist')}}">Sean Black</a></td>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar avatar-sm me-2">
																<img src="{{asset('build/assets/img/ecommerce/22.jpg')}}" alt="avatar" class="br-5 shadow">
															</div>
															<a href="{{url('product-details')}}">Et et kasd ipsum clita</a>
														</div>
													</td>
													<td><a href="{{url('invoice')}}">#11002255660</a></td>
													<td>$4,350</td>
													<td>Online</td>
													<td><span class="badge badge-pill bg-success-transparent tx-success px-3 py-2 tx-11">Delivered</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-edit"></i></a>
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>10-11-21</td>
													<td><a href="{{url('userlist')}}">Santi Argo</a></td>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar avatar-sm me-2">
																<img src="{{asset('build/assets/img/ecommerce/16.jpg')}}" alt="avatar" class="br-5 shadow">
															</div>
															<a href="javascript:void(0)">Sed vero et ipsum et</a>
														</div>
													</td>
													<td><a href="{{url('invoice')}}">#23412858169</a></td>
													<td>$18,900</td>
													<td>Cash On Delivery</td>
													<td><span class="badge badge-pill bg-primary-transparent tx-primary px-3 py-2 tx-11">Shipped</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-edit"></i></a>
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>26-01-22</td>
													<td><a href="{{url('userlist')}}">Carmen Goh</a></td>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar avatar-sm me-2">
																<img src="{{asset('build/assets/img/ecommerce/20.jpg')}}" alt="avatar" class="br-5 shadow">
															</div>
															<a href="{{url('product-details')}}">Rebum dolores at erat ipsum</a>
														</div>
													</td>
													<td><a href="{{url('invoice')}}">#51702935164</a></td>
													<td>$3,200</td>
													<td>Online</td>
													<td><span class="badge badge-pill bg-secondary-transparent text-dark px-3 py-2 tx-11">Pending</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-edit"></i></a>
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>17-09-21</td>
													<td><a href="{{url('userlist')}}">Emma Grate</a></td>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar avatar-sm me-2">
																<img src="{{asset('build/assets/img/ecommerce/18.jpg')}}" alt="avatar" class="br-5 shadow">
															</div>
															<a href="{{url('product-details')}}">Ipsum et sit diam ut</a>
														</div>
													</td>
													<td><a href="{{url('invoice')}}">#71802951620</a></td>
													<td>$22,600</td>
													<td>Online</td>
													<td><span class="badge badge-pill bg-success-transparent tx-success px-3 py-2 tx-11">Delivered</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-edit"></i></a>
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>06-08-21</td>
													<td><a href="{{url('userlist')}}">Anne Gloindian</a></td>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar avatar-sm me-2">
																<img src="{{asset('build/assets/img/ecommerce/7.jpg')}}" alt="avatar" class="br-5 shadow">
															</div>
															<a href="{{url('product-details')}}">No stet eos justo voluptua</a>
														</div>
													</td>
													<td><a href="{{url('invoice')}}">#91012557664</a></td>
													<td>$6,700</td>
													<td>Cash On Delivery</td>
													<td><span class="badge badge-pill bg-danger-transparent tx-danger px-3 py-2 tx-11">Cancelled</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-edit"></i></a>
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>25-01-22</td>
													<td><a href="{{url('userlist')}}">Tex Ryta</a></td>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar avatar-sm me-2">
																<img src="{{asset('build/assets/img/ecommerce/11.jpg')}}" alt="avatar" class="br-5 shadow">
															</div>
															<a href="{{url('product-details')}}">Dolor sea lorem lorem diam</a>
														</div>
													</td>
													<td><a href="{{url('invoice')}}">#41506275962</a></td>
													<td>$8,600</td>
													<td>Cash On Delivery</td>
													<td><span class="badge badge-pill bg-primary-transparent tx-primary px-3 py-2 tx-11">Shipped</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-edit"></i></a>
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>17-04-21</td>
													<td><a href="{{url('userlist')}}">Barry Kade</a></td>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar avatar-sm me-2">
																<img src="{{asset('build/assets/img/ecommerce/17.jpg')}}" alt="avatar" class="br-5 shadow">
															</div>
															<a href="{{url('product-details')}}">Eos justo nonumy stet sit</a>
														</div>
													</td>
													<td><a href="{{url('invoice')}}">#12352990666</a></td>
													<td>$49,670</td>
													<td>Online</td>
													<td><span class="badge badge-pill bg-secondary-transparent text-dark px-3 py-2 tx-11">Pending</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-edit"></i></a>
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>08-02-21</td>
													<td><a href="{{url('userlist')}}">Marge Areen</a></td>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar avatar-sm me-2">
																<img src="{{asset('build/assets/img/ecommerce/21.jpg')}}" alt="avatar" class="br-5 shadow">
															</div>
															<a href="{{url('product-details')}}">Diam voluptua stet invidunt sed</a>
														</div>
													</td>
													<td><a href="{{url('invoice')}}">#47652758630</a></td>
													<td>$1,000</td>
													<td>Cash On Delivery</td>
													<td><span class="badge badge-pill bg-success-transparent tx-success px-3 py-2 tx-11">Delivered</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-edit"></i></a>
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-trash"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>01-01-22</td>
													<td><a href="{{url('userlist')}}">Ruby Bartlett</a></td>
													<td>
														<div class="d-flex align-items-center">
															<div class="avatar avatar-sm me-2">
																<img src="{{asset('build/assets/img/ecommerce/9.jpg')}}" alt="avatar" class="br-5 shadow">
															</div>
															<a href="{{url('product-details')}}">No voluptua amet sit clita</a>
														</div>
													</td>
													<td><a href="{{url('invoice')}}">#31201254680</a></td>
													<td>$15,500</td>
													<td>Online</td>
													<td><span class="badge badge-pill bg-danger-transparent tx-danger px-3 py-2 tx-11">Cancelled</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-edit"></i></a>
															<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-trash"></i></a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

@endsection

@section('scripts')

		<!-- Apexchart js -->
		<!-- @vite('resources/assets/js/apexcharts.js') -->

		<!-- Select2 js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.full.min.js')}}"></script>

		<!--Internal  Vector-maps js -->
		<script src="{{asset('build/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>

		<!-- Data tables -->
		<script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!-- Internal index js -->
		@vite('resources/assets/js/index-1.js')

@endsection
