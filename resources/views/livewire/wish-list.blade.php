@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">WISH LIST</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Wish-list</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-md-7">
											<h4 class="mb-0">Wishlist</h4>
										</div>
										<div class="col-md-5">
											<div class="input-group mb-0">
												<input type="text" class="form-control" placeholder="search by brand name, product name, category...">
												<span class="input-group-append">
													<button class="btn btn-primary" type="button">Search</button>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="row">
								<div class="col-xl-3 col-md-6 col-sm-6 Wishlist-card">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3">
												<div class="pos-relative">
													<a href="{{url('shop')}}" class="masked-link"></a>
													<div class="text-center mb-2 pos-relative">
														<img class="w-100 br-5" src="{{asset('build/assets/img/ecommerce/4.jpg')}}"  alt="img" >
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<span class="badge badge-secondary badge-md pos-absolute t-15 r-15 product-badge">20% off</span>
													</div>
													<h5 class="mb-2 tx-capitalize lh-4">Modern 4-Stand chair</h5>
													<div class="mb-2 flex-between">
														<p class="mb-0 font-weight-semibold tx-primary tx-18">Price: $100</p>
														<span class="tx-green">In Stock</span>
													</div>
													<div class="mb-2">
														<span class="tx-17 ms-auto">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<span class="tx-11 tx-muted">(92)</span>
													</div>
													<p class="mb-2 tx-muted">Eirmod dolor et takimata erat.</p>
												</div>
												<div class="btn-list flex-between">
													<a href="javascript:void(0);" class="btn btn-outline-danger" data-bs-toggle="card-remove">Remove</a>
													<a href="{{url('check-out')}}" class="btn btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 col-sm-6 Wishlist-card">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3">
												<div class="pos-relative">
													<a href="{{url('shop')}}" class="masked-link"></a>
													<div class="text-center mb-2 pos-relative">
														<img class="w-100 br-5" src="{{asset('build/assets/img/ecommerce/5.jpg')}}"  alt="img" >
														<a href="{{url('product-details')}}" class="masked-link"></a>
													</div>
													<h5 class="mb-2 tx-capitalize lh-4">Flower Pot for Home Decor</h5>
													<div class="mb-2 flex-between">
														<p class="mb-0 font-weight-semibold tx-primary tx-18">Price: $200</p>
														<span class="tx-danger">2 Items Left</span>
													</div>
													<div class="mb-2">
														<span class="tx-17 ms-auto">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<span class="tx-11 tx-muted">(92)</span>
													</div>
													<p class="mb-2 tx-muted">Eirmod dolor et takimata erat.</p>
												</div>
												<div class="btn-list flex-between">
													<a href="javascript:void(0);" class="btn btn-outline-danger" data-bs-toggle="card-remove">Remove</a>
													<a href="{{url('check-out')}}" class="btn btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 col-sm-6 Wishlist-card">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3">
												<div class="pos-relative">
													<a href="{{url('shop')}}" class="masked-link"></a>
													<div class="text-center mb-2 pos-relative">
														<img class="w-100 br-5" src="{{asset('build/assets/img/ecommerce/1.jpg')}}"  alt="img" >
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<span class="badge badge-secondary badge-md pos-absolute t-15 r-15 product-badge">15% off</span>
													</div>
													<h5 class="mb-2 tx-capitalize lh-4">Black 5'G Mobile Phone</h5>
													<div class="mb-2 flex-between">
														<p class="mb-0 font-weight-semibold tx-primary tx-18">Price: $60</p>
														<span class="tx-green">In Stock</span>
													</div>
													<div class="mb-2">
														<span class="tx-17 ms-auto">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<span class="tx-11 tx-muted">(92)</span>
													</div>
													<p class="mb-2 tx-muted">Eirmod dolor et takimata erat.</p>
												</div>
												<div class="btn-list flex-between">
													<a href="javascript:void(0);" class="btn btn-outline-danger" data-bs-toggle="card-remove">Remove</a>
													<a href="{{url('check-out')}}" class="btn btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 col-sm-6 Wishlist-card">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3">
												<div class="pos-relative">
													<a href="{{url('shop')}}" class="masked-link"></a>
													<div class="text-center mb-2 pos-relative">
														<img class="w-100 br-5" src="{{asset('build/assets/img/ecommerce/2.jpg')}}"  alt="img" >
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<span class="badge badge-secondary badge-md pos-absolute t-15 r-15 product-badge">30% off</span>
													</div>
													<h5 class="mb-2 tx-capitalize lh-4">Stylish Bluetooth Earbuds</h5>
													<div class="mb-2 flex-between">
														<p class="mb-0 font-weight-semibold tx-primary tx-18">Price: $75</p>
														<span class="tx-green">In Stock</span>
													</div>
													<div class="mb-2">
														<span class="tx-17 ms-auto">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<span class="tx-11 tx-muted">(92)</span>
													</div>
													<p class="mb-2 tx-muted">Eirmod dolor et takimata erat.</p>
												</div>
												<div class="btn-list flex-between">
													<a href="javascript:void(0);" class="btn btn-outline-danger" data-bs-toggle="card-remove">Remove</a>
													<a href="{{url('check-out')}}" class="btn btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 col-sm-6 Wishlist-card">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3">
												<div class="pos-relative">
													<a href="{{url('shop')}}" class="masked-link"></a>
													<div class="text-center mb-2 pos-relative">
														<img class="w-100 br-5" src="{{asset('build/assets/img/ecommerce/3.jpg')}}"  alt="img" >
														<a href="{{url('product-details')}}" class="masked-link"></a>
													</div>
													<h5 class="mb-2 tx-capitalize lh-4">Laptop</h5>
													<div class="mb-2 flex-between">
														<p class="mb-0 font-weight-semibold tx-primary tx-18">Price: $20</p>
														<span class="tx-danger">Out Of Stock</span>
													</div>
													<div class="mb-2">
														<span class="tx-17 ms-auto">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<span class="tx-11 tx-muted">(92)</span>
													</div>
													<p class="mb-2 tx-muted">Eirmod dolor et takimata erat.</p>
												</div>
												<div class="btn-list flex-between">
													<a href="javascript:void(0);" class="btn btn-outline-danger" data-bs-toggle="card-remove">Remove</a>
													<a href="{{url('check-out')}}" class="btn btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 col-sm-6 Wishlist-card">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3">
												<div class="pos-relative">
													<a href="{{url('shop')}}" class="masked-link"></a>
													<div class="text-center mb-2 pos-relative">
														<img class="w-100 br-5" src="{{asset('build/assets/img/ecommerce/6.jpg')}}"  alt="img" >
														<a href="{{url('product-details')}}" class="masked-link"></a>
													</div>
													<h5 class="mb-2 tx-capitalize lh-4">LED Bulb</h5>
													<div class="mb-2 flex-between">
														<p class="mb-0 font-weight-semibold tx-primary tx-18">Price: $100</p>
														<span class="tx-green">In Stock</span>
													</div>
													<div class="mb-2">
														<span class="tx-17 ms-auto">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<span class="tx-11 tx-muted">(92)</span>
													</div>
													<p class="mb-2 tx-muted">Eirmod dolor et takimata erat.</p>
												</div>
												<div class="btn-list flex-between">
													<a href="javascript:void(0);" class="btn btn-outline-danger" data-bs-toggle="card-remove">Remove</a>
													<a href="{{url('check-out')}}" class="btn btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 col-sm-6 Wishlist-card">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3">
												<div class="pos-relative">
													<a href="{{url('shop')}}" class="masked-link"></a>
													<div class="text-center mb-2 pos-relative">
														<img class="w-100 br-5" src="{{asset('build/assets/img/ecommerce/7.jpg')}}"  alt="img" >
														<a href="{{url('product-details')}}" class="masked-link"></a>
														<span class="badge badge-secondary badge-md pos-absolute t-15 r-15 product-badge">5% off</span>
													</div>
													<h5 class="mb-2 tx-capitalize lh-4">Men's White Shoes </h5>
													<div class="mb-2 flex-between">
														<p class="mb-0 font-weight-semibold tx-primary tx-18">Price: $10</p>
														<span class="tx-danger">10 Items Left</span>
													</div>
													<div class="mb-2">
														<span class="tx-17 ms-auto">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<span class="tx-11 tx-muted">(92)</span>
													</div>
													<p class="mb-2 tx-muted">Eirmod dolor et takimata erat.</p>
												</div>
												<div class="btn-list flex-between">
													<a href="javascript:void(0);" class="btn btn-outline-danger" data-bs-toggle="card-remove">Remove</a>
													<a href="{{url('check-out')}}" class="btn btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 col-sm-6 Wishlist-card">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3">
												<div class="pos-relative">
													<a href="{{url('shop')}}" class="masked-link"></a>
													<div class="text-center mb-2 pos-relative">
														<img class="w-100 br-5" src="{{asset('build/assets/img/ecommerce/8.jpg')}}"  alt="img" >
														<a href="{{url('product-details')}}" class="masked-link"></a>
													</div>
													<h5 class="mb-2 tx-capitalize lh-4">Classy Black Bag</h5>
													<div class="mb-2 flex-between">
														<p class="mb-0 font-weight-semibold tx-primary tx-18">Price: $30</p>
														<span class="tx-green">In Stock</span>
													</div>
													<div class="mb-2">
														<span class="tx-17 ms-auto">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<span class="tx-11 tx-muted">(92)</span>
													</div>
													<p class="mb-2 tx-muted">Eirmod dolor et takimata erat.</p>
												</div>
												<div class="btn-list flex-between">
													<a href="javascript:void(0);" class="btn btn-outline-danger" data-bs-toggle="card-remove">Remove</a>
													<a href="{{url('check-out')}}" class="btn btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 col-sm-6 Wishlist-card">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3">
												<div class="pos-relative">
													<a href="{{url('shop')}}" class="masked-link"></a>
													<div class="text-center mb-2 pos-relative">
														<img class="w-100 br-5" src="{{asset('build/assets/img/ecommerce/9.jpg')}}"  alt="img" >
														<a href="{{url('product-details')}}" class="masked-link"></a>
													</div>
													<h5 class="mb-2 tx-capitalize lh-4"> Artificial Flower Bunch</h5>
													<div class="mb-2 flex-between">
														<p class="mb-0 font-weight-semibold tx-primary tx-18">Price: $5</p>
														<span class="tx-green">In Stock</span>
													</div>
													<div class="mb-2">
														<span class="tx-17 ms-auto">
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star text-warning"></i>
															<i class="ion ion-md-star-half text-warning"></i>
															<i class="ion ion-md-star-outline text-warning"></i>
														</span>
														<span class="tx-11 tx-muted">(92)</span>
													</div>
													<p class="mb-2 tx-muted">Eirmod dolor et takimata erat.</p>
												</div>
												<div class="btn-list flex-between">
													<a href="javascript:void(0);" class="btn btn-outline-danger" data-bs-toggle="card-remove">Remove</a>
													<a href="{{url('check-out')}}" class="btn btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

@endsection

@section('scripts')



@endsection
