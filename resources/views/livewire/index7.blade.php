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
								<li class="breadcrumb-item active" aria-current="page">Sales</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-xxl-7 col-xl-12">
							<div class="card">
								<div class="card-header flex-between">
									<div class="card-title">
										Sales Analytics
									</div>
									<div class="btn-group">
										<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">1D</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">1W</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">1M</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-primary">1Y</a>
									</div>
								</div>
								<div class="card-body">
									<div id="salesReport"></div>
								</div>
							</div>
						</div>
						<div class="col-xxl-5 col-xl-12">
							<div class="row">
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar radius-4 bg-primary-transparent">
														<i class="fa fa-cubes-stacked tx-primary"></i>
													</div>
												</div>
												<div class="flex-1">
													<p class="mb-2">Total Sales</p>
													<h5 class="font-weight-semibold mb-1 numberfont">52,283</h5>
													<div class="flex-between tx-12">
														<span class="tx-muted me-1">since last month</span>
														<span class="numberfont tx-success min-w-fit-content"><i class="fe fe-arrow-up-right me-1 tx-14"></i>+1.25%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar radius-4 bg-secondary-transparent">
														<i class="fa fa-credit-card tx-secondary"></i>
													</div>
												</div>
												<div class="flex-1">
													<p class="mb-2">Total Purchase</p>
													<h5 class="font-weight-semibold mb-1 numberfont">$52,283</h5>
													<div class="flex-between tx-12">
														<span class="tx-muted me-1">since last month</span>
														<span class="numberfont tx-success min-w-fit-content"><i class="fe fe-arrow-up-right me-1 tx-14"></i>8.34%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar radius-4 bg-warning-transparent">
														<i class="fa fa-arrow-rotate-left tx-warning"></i>
													</div>
												</div>
												<div class="flex-1">
													<p class="mb-2">Total Returns</p>
													<h5 class="font-weight-semibold mb-1 numberfont">$52,283</h5>
													<div class="flex-between tx-12">
														<span class="tx-muted me-1">since last month</span>
														<span class="tx-danger min-w-fit-content"><i class="fe fe-arrow-down-right me-1 tx-14"></i>-0.56%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar radius-4 bg-success-transparent">
														<i class="fa fa-chart-line tx-success"></i>
													</div>
												</div>
												<div class="flex-1">
													<p class="mb-2">Marketing</p>
													<h5 class="font-weight-semibold mb-1 numberfont">52,283</h5>
													<div class="flex-between tx-12">
														<span class="tx-muted me-1">since last month</span>
														<span class="numberfont tx-success min-w-fit-content"><i class="fe fe-arrow-up-right me-1 tx-14"></i>+2.31%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Sales By Category
											</div>
										</div>
										<div class="card-body">
											<div class="d-sm-flex mb-3">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar bg-primary-transparent tx-primary br-5"><i class="fa fa-cubes-stacked"></i></div>
												</div>
												<div class="flex-1">
													<div class="flex-between mb-1">
														<p class="mb-0">Total Sales</p>
														<span class="badge badge-primary-transparent">40% Target Reached</span>
													</div>
													<h5 class="mb-0 numberfont">55,283 <span class="tx-muted tx-13"> / 120K</span></h5>
												</div>
											</div>
											<div class="progress-bar bg-gray-300 ht-25 radius-7 justify-content-start d-flex flex-row mg-b-10">
												<div class="bg-primary text-black wd-50p flex-center tx-11">50%</div>
												<div class="bg-secondary text-black wd-30p flex-center tx-11">30%</div>
												<div class="bg-success wd-10p flex-center tx-11">10%</div>
											</div>
											<span class="tx-13 d-block d-sm-inline-block"><i class="fa fa-circle tx-primary tx-8 mg-e-10"></i>Electronics</span>
											<span class="tx-13 d-block d-sm-inline-block mx-sm-3"><i class="fa fa-circle tx-secondary tx-8 mg-e-10"></i>Medical</span>
											<span class="tx-13 d-block d-sm-inline-block"><i class="fa fa-circle tx-success tx-8 mg-e-10"></i>Home Appliances</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row row-deck">
						<div class="col-xxl-4 col-xl-6">
							<div class="card">
								<div class="card-header flex-between">
									<div class="card-title">
										Stores By Country
									</div>
									<a href="javascript:void(0);" class="tx-inverse font-weight-normal tx-12">View All</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<th class="border-top-0 bg-black-03 br-bs-5 br-ts-5">Country</th>
													<th class="border-top-0 bg-black-03">Stores</th>
													<th class="border-top-0 bg-black-03 br-be-5 br-te-5">Growth</th>
												</tr>
												<tr>
													<td class="border-top-0 pb-2">
														<div class="d-flex align-items-center">
															<div class="me-3">
																<div class="avatar"><img src="{{asset('build/assets/img/flags/russia_flag.jpg')}}" alt="flag" class="br-5 shadow"></div>
															</div>
															<span>Russia</span>
														</div>
													</td>
													<td class="numberfont border-top-0 pb-2">152</td>
													<td class="border-top-0 pb-2"><span class="badge badge-success-transparent">+2.58%</span></td>
												</tr>
												<tr>
													<td class="border-top-0 pb-2">
														<div class="d-flex align-items-center">
															<div class="me-3">
																<div class="avatar"><img src="{{asset('build/assets/img/flags/us_flag.jpg')}}" alt="flag" class="br-5 shadow"></div>
															</div>
															<span>USA</span>
														</div>
													</td>
													<td class="numberfont border-top-0 pb-2">226</td>
													<td class="border-top-0 pb-2"><span class="badge badge-success-transparent">+1.58%</span></td>
												</tr>
												<tr>
													<td class="border-top-0 pb-2">
														<div class="d-flex align-items-center">
															<div class="me-3">
																<div class="avatar"><img src="{{asset('build/assets/img/flags/argentina.jpg')}}" alt="flag" class="br-5 shadow"></div>
															</div>
															<span>Argentina</span>
														</div>
													</td>
													<td class="numberfont border-top-0 pb-2">468</td>
													<td class="border-top-0 pb-2"><span class="badge badge-danger-transparent">-1.88%</span></td>
												</tr>
												<tr>
													<td class="border-top-0 pb-2">
														<div class="d-flex align-items-center">
															<div class="me-3">
																<div class="avatar"><img src="{{asset('build/assets/img/flags/austria.jpg')}}" alt="flag" class="br-5 shadow"></div>
															</div>
															<span>Austria</span>
														</div>
													</td>
													<td class="numberfont border-top-0 pb-2">468</td>
													<td class="border-top-0 pb-2"><span class="badge badge-success-transparent">+9.61%</span></td>
												</tr>
												<tr>
													<td class="border-top-0 pb-0">
														<div class="d-flex align-items-center">
															<div class="me-3">
																<div class="avatar"><img src="{{asset('build/assets/img/flags/brazil.jpg')}}" alt="flag" class="br-5 shadow"></div>
															</div>
															<span>Brazil</span>
														</div>
													</td>
													<td class="numberfont border-top-0 pb-0">3,183</td>
													<td class="border-top-0 pb-0"><span class="badge badge-danger-transparent">-0.13%</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-6">
							<div class="card">
								<div class="card-header flex-between">
									<div class="card-title">
										Upcoming Products
									</div>
									<a href="javascript:void(0);" class="tx-inverse font-weight-normal tx-12">View All</a>
								</div>
								<div class="card-body">
									<ul class="list-unstyled mb-0">
										<li class="list-item">
											<div class="d-flex">
												<div class="me-2">
													<div class="avatar"><img src="{{asset('build/assets/img/ecommerce/2.jpg')}}" alt="img" class="radius-4"></div>
												</div>
												<div class="flex-1">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
													</ul>
													<p class="mb-1 tx-primary font-weight-semibold"><i class="fe fe-clock me-1 tx-11"></i>26-04-2022</p>
													<h6 class="mb-1">Positive White Color Bluetooth Earbuds</h6>
													<div class="d-flex align-items-center">
														<p class="mb-0 pe-2 border-end">
															<span class="me-1 tx-muted">Qty:</span>
															<span class="numberfont">225</span>
														</p>
														<p class="mb-0 ps-2">
															<span class="me-1 tx-muted">Color: </span>
															<span>White</span>
														</p>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex">
												<div class="me-2">
													<div class="avatar"><img src="{{asset('build/assets/img/ecommerce/8.jpg')}}" alt="img" class="radius-4"></div>
												</div>
												<div class="flex-1">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
													</ul>
													<p class="mb-1 tx-primary font-weight-semibold"><i class="fe fe-clock me-1 tx-11"></i>29-04-2022</p>
													<h6 class="mb-1">Stylish Backpack Black Colour</h6>
													<div class="d-flex align-items-center">
														<p class="mb-0 pe-2 border-end">
															<span class="me-1 tx-muted">Qty:</span>
															<span class="numberfont">1,289</span>
														</p>
														<p class="mb-0 ps-2">
															<span class="me-1 tx-muted">Color: </span>
															<span>White, Blue, Red</span>
														</p>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex">
												<div class="me-2">
													<div class="avatar"><img src="{{asset('build/assets/img/ecommerce/1.jpg')}}" alt="img" class="radius-4"></div>
												</div>
												<div class="flex-1">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
													</ul>
													<p class="mb-1 tx-primary font-weight-semibold"><i class="fe fe-clock me-1 tx-11"></i>30-04-2022</p>
													<h6 class="mb-1">Lastest Smart Phone 5G</h6>
													<div class="d-flex align-items-center">
														<p class="mb-0 pe-2 border-end">
															<span class="me-1 tx-muted">Qty:</span>
															<span class="numberfont">121K</span>
														</p>
														<p class="mb-0 ps-2">
															<span class="me-1 tx-muted">Color: </span>
															<span>Black, Red</span>
														</p>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex">
												<div class="me-2">
													<div class="avatar"><img src="{{asset('build/assets/img/ecommerce/7.jpg')}}" alt="img" class="radius-4"></div>
												</div>
												<div class="flex-1">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
													</ul>
													<p class="mb-1 tx-primary font-weight-semibold"><i class="fe fe-clock me-1 tx-11"></i>26-04-2022</p>
													<h6 class="mb-1">Sports Shoes For Men (Pair of 1)</h6>
													<div class="d-flex align-items-center">
														<p class="mb-0 pe-2 border-end">
															<span class="me-1 tx-muted">Qty:</span>
															<span class="numberfont">225</span>
														</p>
														<p class="mb-0 ps-2">
															<span class="me-1 tx-muted">Color: </span>
															<span>White</span>
														</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-12">
							<div class="card">
								<div class="card-header flex-between" >
									<div class="card-title">
										Team Members
									</div>
									<a href="javascript:void(0);" class="tx-inverse font-weight-normal tx-12">View All</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<th class="border-top-0 bg-black-03 br-bs-5 br-ts-5">Name</th>
													<th class="border-top-0 bg-black-03">Position</th>
													<th class="border-top-0 bg-black-03">Target</th>
													<th class="border-top-0 bg-black-03 br-be-5 br-te-5">Status</th>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/users/2.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0 font-weight-semibold">Texi Wan</p>
																<span class="tx-muted tx-12">text.123@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0">Admin</td>
													<td class="border-top-0">
														<div class="progress mb-0">
															<div class="progress-bar progress-bar-striped progress-bar-animated wd-25p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="border-top-0">
														<span class="badge badge-sm rounded-pill badge-success-transparent">Online</span>
													</td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/users/17.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0 font-weight-semibold">Vin Patrol</p>
																<span class="tx-muted tx-12">vinmi.753@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0">Sales Exc.</td>
													<td class="border-top-0">
														<div class="progress mb-0">
															<div class="progress-bar progress-bar-striped progress-bar-animated wd-45p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="border-top-0">
														<span class="badge badge-sm rounded-pill badge-danger-transparent">Offline</span>
													</td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/users/5.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0 font-weight-semibold">Inv Xenon</p>
																<span class="tx-muted tx-12">xenon856@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0">Member</td>
													<td class="border-top-0">
														<div class="progress mb-0">
															<div class="progress-bar progress-bar-striped progress-bar-animated wd-75p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="border-top-0">
														<span class="badge badge-sm rounded-pill badge-success-transparent">Online</span>
													</td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/users/13.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0 font-weight-semibold">Salman Ixo</p>
																<span class="tx-muted tx-12">salmo.111@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0">Marketing</td>
													<td class="border-top-0">
														<div class="progress mb-0">
															<div class="progress-bar progress-bar-striped progress-bar-animated wd-75p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="border-top-0">
														<span class="badge badge-sm rounded-pill badge-success-transparent">Online</span>
													</td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/users/8.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0 font-weight-semibold">Ian Soher</p>
																<span class="tx-muted tx-12">ian12.22@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0">Sales</td>
													<td class="border-top-0">
														<div class="progress mb-0">
															<div class="progress-bar progress-bar-striped progress-bar-animated wd-50p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td class="border-top-0">
														<span class="badge badge-sm rounded-pill badge-success-transparent">Online</span>
													</td>
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
									<div class="card-title">
										Products List
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered text-nowrap mb-0" id="productList">
											<thead>
												<tr>
													<th class="tx-center">S.No.</th>
													<th>Product</th>
													<th>Quantity</th>
													<th>Unit Price</th>
													<th>Total Amount</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="tx-center">1</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/1.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Latest Smart Phone 5g</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#123908</a>
															</div>
														</div>
													</th>
													<th>1,298</th>
													<th>$22</th>
													<th>$37,390</th>
													<th><span class="badge badge-sm rounded-pill badge-success-transparent">In Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">2</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/2.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Positive White Color Earbuds</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#293581</a>
															</div>
														</div>
													</th>
													<th>3,379</th>
													<th>$25</th>
													<th>$85,153</th>
													<th><span class="badge badge-sm rounded-pill badge-success-transparent">In Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">3</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/3.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Demo Laptop i11 11th Gen 8GB/1TB</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#156374</a>
															</div>
														</div>
													</th>
													<th>0</th>
													<th>$1,999</th>
													<th>$0</th>
													<th><span class="badge badge-sm rounded-pill badge-danger-transparent">Out Of Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">4</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/4.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Wooden Chair Royal</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#153975</a>
															</div>
														</div>
													</th>
													<th>0</th>
													<th>$52</th>
													<th>$0</th>
													<th><span class="badge badge-sm rounded-pill badge-danger-transparent">Out Of Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">5</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/5.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Beutiful Flower Pot White Color</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#175893</a>
															</div>
														</div>
													</th>
													<th>5,392</th>
													<th>$10</th>
													<th>$53,920</th>
													<th><span class="badge badge-sm rounded-pill badge-success-transparent">In Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">6</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/6.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Flourescent Bulb 10W</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#153697</a>
															</div>
														</div>
													</th>
													<th>0</th>
													<th>$5</th>
													<th>$0</th>
													<th><span class="badge badge-sm rounded-pill badge-danger-transparent">Out Of Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">7</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/7.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Abidas Shoes For Men</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#753169</a>
															</div>
														</div>
													</th>
													<th>29,291</th>
													<th>$899</th>
													<th>$1,29,380</th>
													<th><span class="badge badge-sm rounded-pill badge-success-transparent">In Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">8</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/8.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Stylish Laptop Backpack</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#587961</a>
															</div>
														</div>
													</th>
													<th>11,298</th>
													<th>$59</th>
													<th>$96,950</th>
													<th><span class="badge badge-sm rounded-pill badge-success-transparent">In Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">9</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/9.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Flower Set Gift Pack</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#753698</a>
															</div>
														</div>
													</th>
													<th>12,125</th>
													<th>$35</th>
													<th>$2,78,390</th>
													<th><span class="badge badge-sm rounded-pill badge-success-transparent">In Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">10</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/10.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Bayron Eye Lenses Frame For Men</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#754125</a>
															</div>
														</div>
													</th>
													<th>298</th>
													<th>$150</th>
													<th>$37,125</th>
													<th><span class="badge badge-sm rounded-pill badge-warning-transparent">Few Left</span></th>
												</tr>
												<tr>
													<td class="tx-center">11</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/11.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Gift Box Wrapper For Events</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#758964</a>
															</div>
														</div>
													</th>
													<th>2,380</th>
													<th>$10</th>
													<th>$23,800</th>
													<th><span class="badge badge-sm rounded-pill badge-success-transparent">In Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">12</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/12.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Soby IM1116 V7 Headset</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#975153</a>
															</div>
														</div>
													</th>
													<th>98</th>
													<th>$255</th>
													<th>$45,125</th>
													<th><span class="badge badge-sm rounded-pill badge-warning-transparent">Few Left</span></th>
												</tr>
												<tr>
													<td class="tx-center">13</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/13.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Apexa 7th Gen</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#254365</a>
															</div>
														</div>
													</th>
													<th>12,741</th>
													<th>$1,289</th>
													<th>$21,29,500</th>
													<th><span class="badge badge-sm rounded-pill badge-success-transparent">In Stock</span></th>
												</tr>
												<tr>
													<td class="tx-center">14</td>
													<th>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar-sm"><img src="{{asset('build/assets/img/ecommerce/14.jpg')}}" alt="img" class="radius-4"></div>
															</div>
															<div class="flex-1">
																<p class="mb-0"><a href="javascript:void(0);">Clipboard For Students</a></p>
																<a href="javascript:void(0);" class="tx-primary tx-12">#852147</a>
															</div>
														</div>
													</th>
													<th>0</th>
													<th>$11</th>
													<th>$0</th>
													<th><span class="badge badge-sm rounded-pill badge-danger-transparent">Out Of Stock</span></th>
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

		<!-- Select2 js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.full.min.js')}}"></script>

		<!-- Data tables -->
		<script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!-- Internal index js -->
		@vite('resources/assets/js/index-7.js')

@endsection
