@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SHOP</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Products</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-12">
							<div class="d-md-flex d-block align-items-center mb-3">
								<div class="btn-group">
									<button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
										Featured
									</button>
									<ul class="dropdown-menu dropdown-menu-end">
										<li><a class="dropdown-item active" href="javascript:void(0);">Featured</a></li>
										<li><a class="dropdown-item" href="javascript:void(0);">Newly Added</a></li>
										<li><a class="dropdown-item" href="javascript:void(0);">Low to High</a></li>
										<li><a class="dropdown-item" href="javascript:void(0);">High to Low</a></li>
									</ul>
								</div>
								<div class="btn-group ms-4" role="group" aria-label="Basic radio toggle button group">
									<input type="radio" class="btn-check" name="shopLayout" id="shopGrid"  checked="checked">
									<label class="btn btn-outline-primary mb-0" for="shopGrid"><i class="fe fe-grid"></i></label>

									<input type="radio" class="btn-check" name="shopLayout" id="shopList">
									<label class="btn btn-outline-primary mb-0" for="shopList"><i class="fe fe-list"></i></label>
								</div>
								<div class="btn-group ms-0 ms-xs-4 my-2 my-md-0" role="group" aria-label="Basic radio toggle button group">
									<input type="radio" class="btn-check" name="layout" id="layout1" checked="checked">
									<label class="btn btn-outline-primary mb-0" for="layout1">|</label>

									<input type="radio" class="btn-check" name="layout" id="layout2">
									<label class="btn btn-outline-primary mb-0" for="layout2">||</label>

									<input type="radio" class="btn-check" name="layout" id="layout3">
									<label class="btn btn-outline-primary mb-0" for="layout3">|||</label>

									<input type="radio" class="btn-check" name="layout" id="layout4">
									<label class="btn btn-outline-primary mb-0" for="layout4">||||</label>
								</div>
								<div class="ms-auto">
									<p class="mb-0 tx-14 font-weight-semibold">Showing 1-130  of 2,300 Results</p>
								</div>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="row">
								<div class="col-xl-3">
									<div class="card stickyBar">
										<div class="card-body">
											<div class="mb-1 text-end">
												<a href="javascript:void(0);" class="btn btn-sm rounded-pill btn-outline-primary">Clear all</a>
											</div>
											<div class="pb-3 border-bottom-dashed">
												<p class="h5 mb-2">Category:</p>
												<ul class="list-unstyled mb-0">
													<li class=" mb-1">
														<a href="javascript:void(0);" class="tx-14 d-flex tx-inverse">Clothing <span class="ms-auto tx-11">(1,937)</span></a>
													</li>
													<li class=" mb-1">
														<a href="javascript:void(0);" class="tx-14 d-flex tx-inverse">Bags <span class="ms-auto tx-11">(372)</span></a>
													</li>
													<li class=" mb-1">
														<a href="javascript:void(0);" class="tx-14 d-flex tx-inverse">Accessories <span class="ms-auto tx-11">(2,898)</span></a>
													</li>
													<li class=" mb-1">
														<a href="javascript:void(0);" class="tx-14 d-flex tx-inverse">Beauty <span class="ms-auto tx-11">(12,537)</span></a>
													</li>
													<li class=" mb-1">
														<a href="javascript:void(0);" class="tx-14 d-flex tx-inverse">T-Shirts <span class="ms-auto tx-11">(2,537)</span></a>
													</li>
													<li class="mb-0">
														<a href="javascript:void(0);" class="tx-14 d-flex tx-inverse">Clothing <span class="ms-auto tx-11">(1,937)</span></a>
													</li>
												</ul>
											</div>
											<div class="mt-3 pb-3 border-bottom-dashed">
												<p class="h5 mb-3 flex-between">
													Brand
													<a href="javascript:void(0);" class="tx-primary font-weight-normal tx-12">Clear</a>
												</p>
												<ul class="list-unstyled mb-0">
													<li class=" mb-3">
														<label class="ckbox">
															<input type="checkbox" checked><span>Diam</span>
														</label>
													</li>
													<li class=" mb-3">
														<label class="ckbox">
															<input type="checkbox"><span>Et EosInvidunt</span>
														</label>
													</li>
													<li class=" mb-3">
														<label class="ckbox">
															<input type="checkbox" checked><span>Sit Dolor</span>
														</label>
													</li>
													<li class=" mb-3">
														<label class="ckbox">
															<input type="checkbox" checked><span>Dolore Eos</span>
														</label>
													</li>
													<li class=" mb-3">
														<label class="ckbox">
															<input type="checkbox"><span>Eos Labore</span>
														</label>
													</li>
													<li class=" mb-3">
														<label class="ckbox">
															<input type="checkbox"><span>Duo Rebum</span>
														</label>
													</li>
													<li class=" mb-0">
														<label class="ckbox">
															<input type="checkbox" checked><span>Dolor</span>
														</label>
													</li>
												</ul>
											</div>
											<div class="mt-3">
												<p class="h5 mb-3 flex-between">
													Colors
													<a href="javascript:void(0);" class="tx-primary font-weight-normal tx-12">Clear</a>
												</p>
												<div class="d-flex flex-wrap">
													<div class="me-2">
														<label class="colorinput">
															<input name="color" type="checkbox" value="primary" class="colorinput-input" checked>
															<span class="colorinput-color bg-primary"></span>
														</label>
													</div>
													<div class="me-2">
														<label class="colorinput">
															<input name="color" type="checkbox" value="secondary" class="colorinput-input">
															<span class="colorinput-color bg-secondary"></span>
														</label>
													</div>
													<div class="me-2">
														<label class="colorinput">
															<input name="color" type="checkbox" value="success" class="colorinput-input" checked>
															<span class="colorinput-color bg-success"></span>
														</label>
													</div>
													<div class="me-2">
														<label class="colorinput">
															<input name="color" type="checkbox" value="teal" class="colorinput-input" checked>
															<span class="colorinput-color bg-teal"></span>
														</label>
													</div>
													<div class="me-2">
														<label class="colorinput">
															<input name="color" type="checkbox" value="orange" class="colorinput-input">
															<span class="colorinput-color bg-orange"></span>
														</label>
													</div>
													<div class="me-2">
														<label class="colorinput">
															<input name="color" type="checkbox" value="purple" class="colorinput-input">
															<span class="colorinput-color bg-purple"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-9">
									<div class="card">
										<div class="card-body">
											<div class="row align-items-center">
												<div class="col-md-7">
													<h4 class="mb-0">Clothing</h4>
												</div>
												<div class="col-md-5">
													<div class="input-group mb-0">
														<input type="text" class="form-control" value="clothing" placeholder="search by brand name, product name, category...">
														<span class="input-group-append">
															<button class="btn btn-primary" type="button">Search</button>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
											<div class="card overflow-hidden product-card">
												<div class="card-body p-0">
													<div class="mask-container">
														<img src="{{asset('build/assets/img/ecommerce/1.jpg')}}" alt="img" class="img-fluid w-100">
														<div class="product-options pos-absolute a-center">
															<div class="btn-list d-flex align-items-center">
																<a href="{{url('wish-list')}}" class="btn btn-icon bg-danger" data-bs-toggle="tooltip" title="Add to wishlist"><span class="tx-white"><i class="fa fa-heart"></i></span></a>
																<a href="{{url('product-cart')}}" class="btn btn-icon bg-success" data-bs-toggle="tooltip" title="Add to cart"><span class="tx-white"><i class="fa fa-shopping-cart"></i></span></a>
															</div>
														</div>
														<span class="badge badge-primary badge-md pos-absolute t-15 r-15 product-badge">20% off</span>
													</div>
													<div class="p-4 tx-center pos-relative">
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<h5 class="mb-2 tx-capitalize">Black 5'G Mobile Phone</h5>
														<span class="tx-15 ms-auto mb-2">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<p class="mb-0 text-center	 font-weight-semibold tx-22">$55 <span class="tx-muted font-weight-normal tx-16 ms-1"><del>$59</del></span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
											<div class="card overflow-hidden product-card">
												<div class="card-body p-0">
													<div class="mask-container">
														<img src="{{asset('build/assets/img/ecommerce/2.jpg')}}" alt="img" class="img-fluid w-100">
														<div class="product-options pos-absolute a-center">
															<div class="btn-list d-flex align-items-center">
																<a href="{{url('wish-list')}}" class="btn btn-icon bg-danger" data-bs-toggle="tooltip" title="Add to wishlist"><span class="tx-white"><i class="fa fa-heart"></i></span></a>
																<a href="{{url('product-cart')}}" class="btn btn-icon bg-success" data-bs-toggle="tooltip" title="Add to cart"><span class="tx-white"><i class="fa fa-shopping-cart"></i></span></a>
															</div>
														</div>
													</div>
													<div class="p-4 tx-center pos-relative">
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<h5 class="mb-2 tx-capitalize">Stylish Bluetooth Earbuds</h5>
														<span class="tx-15 ms-auto mb-2">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<p class="mb-0 text-center	 font-weight-semibold tx-22">$155 <span class="tx-muted font-weight-normal tx-16 ms-1"><del>$95</del></span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
											<div class="card overflow-hidden product-card">
												<div class="card-body p-0">
													<div class="mask-container">
														<img src="{{asset('build/assets/img/ecommerce/3.jpg')}}" alt="img" class="img-fluid w-100">
														<div class="product-options pos-absolute a-center">
															<div class="btn-list d-flex align-items-center">
																<a href="{{url('wish-list')}}" class="btn btn-icon bg-danger" data-bs-toggle="tooltip" title="Add to wishlist"><span class="tx-white"><i class="fa fa-heart"></i></span></a>
																<a href="{{url('product-cart')}}" class="btn btn-icon bg-success" data-bs-toggle="tooltip" title="Add to cart"><span class="tx-white"><i class="fa fa-shopping-cart"></i></span></a>
															</div>
														</div>
													</div>
													<div class="p-4 tx-center pos-relative">
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<h5 class="mb-2 tx-capitalize">Laptop</h5>
														<span class="tx-15 ms-auto mb-2">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<p class="mb-0 text-center	 font-weight-semibold tx-22">$71 <span class="tx-muted font-weight-normal tx-16 ms-1"><del>$69</del></span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
											<div class="card overflow-hidden product-card">
												<div class="card-body p-0">
													<div class="mask-container">
														<img src="{{asset('build/assets/img/ecommerce/4.jpg')}}" alt="img" class="img-fluid w-100">
														<div class="product-options pos-absolute a-center">
															<div class="btn-list d-flex align-items-center">
																<a href="{{url('wish-list')}}" class="btn btn-icon bg-danger" data-bs-toggle="tooltip" title="Add to wishlist"><span class="tx-white"><i class="fa fa-heart"></i></span></a>
																<a href="{{url('product-cart')}}" class="btn btn-icon bg-success" data-bs-toggle="tooltip" title="Add to cart"><span class="tx-white"><i class="fa fa-shopping-cart"></i></span></a>
															</div>
														</div>
													</div>
													<div class="p-4 tx-center pos-relative">
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<h5 class="mb-2 tx-capitalize">Modern 4-Stand chair</h5>
														<span class="tx-15 ms-auto mb-2">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<p class="mb-0 text-center font-weight-semibold tx-22">$215 <span class="tx-muted font-weight-normal tx-16 ms-1"><del>$259</del></span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
											<div class="card overflow-hidden product-card">
												<div class="card-body p-0">
													<div class="mask-container">
														<img src="{{asset('build/assets/img/ecommerce/5.jpg')}}" alt="img" class="img-fluid w-100">
														<div class="product-options pos-absolute a-center">
															<div class="btn-list d-flex align-items-center">
																<a href="{{url('wish-list')}}" class="btn btn-icon bg-danger" data-bs-toggle="tooltip" title="Add to wishlist"><span class="tx-white"><i class="fa fa-heart"></i></span></a>
																<a href="{{url('product-cart')}}" class="btn btn-icon bg-success" data-bs-toggle="tooltip" title="Add to cart"><span class="tx-white"><i class="fa fa-shopping-cart"></i></span></a>
															</div>
														</div>
														<span class="badge badge-primary badge-md pos-absolute t-15 r-15 product-badge">25% off</span>
													</div>
													<div class="p-4 tx-center pos-relative">
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<h5 class="mb-2 tx-capitalize">	Flower Pot for Home Decor</h5>
														<span class="tx-15 ms-auto mb-2">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<p class="mb-0 text-center font-weight-semibold tx-22">$505 <span class="tx-muted font-weight-normal tx-16 ms-1"><del>$650</del></span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
											<div class="card overflow-hidden product-card">
												<div class="card-body p-0">
													<div class="mask-container">
														<img src="{{asset('build/assets/img/ecommerce/6.jpg')}}" alt="img" class="img-fluid w-100">
														<div class="product-options pos-absolute a-center">
															<div class="btn-list d-flex align-items-center">
																<a href="{{url('wish-list')}}" class="btn btn-icon bg-danger" data-bs-toggle="tooltip" title="Add to wishlist"><span class="tx-white"><i class="fa fa-heart"></i></span></a>
																<a href="{{url('product-cart')}}" class="btn btn-icon bg-success" data-bs-toggle="tooltip" title="Add to cart"><span class="tx-white"><i class="fa fa-shopping-cart"></i></span></a>
															</div>
														</div>
													</div>
													<div class="p-4 tx-center pos-relative">
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<h5 class="mb-2 tx-capitalize">LED Bulb</h5>
														<span class="tx-15 ms-auto mb-2">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<p class="mb-0 text-center font-weight-semibold tx-22">$20 <span class="tx-muted font-weight-normal tx-16 ms-1"><del>$39</del></span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
											<div class="card overflow-hidden product-card">
												<div class="card-body p-0">
													<div class="mask-container">
														<img src="{{asset('build/assets/img/ecommerce/7.jpg')}}" alt="img" class="img-fluid w-100">
														<div class="product-options pos-absolute a-center">
															<div class="btn-list d-flex align-items-center">
																<a href="{{url('wish-list')}}" class="btn btn-icon bg-danger" data-bs-toggle="tooltip" title="Add to wishlist"><span class="tx-white"><i class="fa fa-heart"></i></span></a>
																<a href="{{url('product-cart')}}" class="btn btn-icon bg-success" data-bs-toggle="tooltip" title="Add to cart"><span class="tx-white"><i class="fa fa-shopping-cart"></i></span></a>
															</div>
														</div>
														<span class="badge badge-primary badge-md pos-absolute t-15 r-15 product-badge">10% off</span>
													</div>
													<div class="p-4 tx-center pos-relative">
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<h5 class="mb-2 tx-capitalize">Men's White Shoes </h5>
														<span class="tx-15 ms-auto mb-2">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<p class="mb-0 text-center	 font-weight-semibold tx-22">$25 <span class="tx-muted font-weight-normal tx-16 ms-1"><del>$59</del></span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
											<div class="card overflow-hidden product-card">
												<div class="card-body p-0">
													<div class="mask-container">
														<img src="{{asset('build/assets/img/ecommerce/8.jpg')}}" alt="img" class="img-fluid w-100">
														<div class="product-options pos-absolute a-center">
															<div class="btn-list d-flex align-items-center">
																<a href="{{url('wish-list')}}" class="btn btn-icon bg-danger" data-bs-toggle="tooltip" title="Add to wishlist"><span class="tx-white"><i class="fa fa-heart"></i></span></a>
																<a href="{{url('product-cart')}}" class="btn btn-icon bg-success" data-bs-toggle="tooltip" title="Add to cart"><span class="tx-white"><i class="fa fa-shopping-cart"></i></span></a>
															</div>
														</div>
													</div>
													<div class="p-4 tx-center pos-relative">
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<h5 class="mb-2 tx-capitalize">Classy Black Bag</h5>
														<span class="tx-15 ms-auto mb-2">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<p class="mb-0 text-center	 font-weight-semibold tx-22">$55 <span class="tx-muted font-weight-normal tx-16 ms-1"><del>$59</del></span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
											<div class="card overflow-hidden product-card">
												<div class="card-body p-0">
													<div class="mask-container">
														<img src="{{asset('build/assets/img/ecommerce/9.jpg')}}" alt="img" class="img-fluid w-100">
														<div class="product-options pos-absolute a-center">
															<div class="btn-list d-flex align-items-center">
																<a href="{{url('wish-list')}}" class="btn btn-icon bg-danger" data-bs-toggle="tooltip" title="Add to wishlist"><span class="tx-white"><i class="fa fa-heart"></i></span></a>
																<a href="{{url('product-cart')}}" class="btn btn-icon bg-success" data-bs-toggle="tooltip" title="Add to cart"><span class="tx-white"><i class="fa fa-shopping-cart"></i></span></a>
															</div>
														</div>
													</div>
													<div class="p-4 tx-center pos-relative">
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<h5 class="mb-2 tx-capitalize"> Artificial Flower Bunch</h5>
														<span class="tx-15 ms-auto mb-2">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<p class="mb-0 text-center	 font-weight-semibold tx-22">$30 <span class="tx-muted font-weight-normal tx-16 ms-1"><del>$50</del></span></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

@endsection

@section('scripts')



@endsection
