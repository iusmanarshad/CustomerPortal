@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">CART</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cart</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row opened -->
					 <div class="row">
						<div class="col-lg-12 col-xl-8 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-xl-auto col-sm-auto">
											<div class="avatar avatar-xl"><img src="{{asset('build/assets/img/ecommerce/2.jpg')}}" alt="img" class="br-5"></div>
										</div>
										<div class="col-xl col-sm">
											<h6 class="mb-3 tx-capitalize mg-sm-t-0-f mg-t-20">Bluetooth Earbuds</h6>
											<div class="d-sm-flex d-block align-items-center">
												<div class="form-group mb-0">
													<select name="quantity" class="form-control nice-select wd-80">
														<option value="blue" selected>Blue</option>
														<option value="green">Green</option>
														<option value="red">Red</option>
														<option value="yellow">Yellow</option>
													</select>
												</div>
												<div class="handle-counter justify-content-start my-2 my-sm-0 mb-0 ms-0 ms-sm-2">
													<button class="counter-minus btn btn-white lh-2 shadow-none"><i class="fe fe-minus"></i></button>
													<input type="text" value="2" class="qty">
													<button class="counter-plus btn btn-white lh-2 shadow-none"><i class="fe fe-plus"></i></button>
												</div>
											</div>
										</div>
										<div class="col-xl-auto col-sm-auto">
											<div class="text-sm-end  mg-sm-t-0-f mg-t-20">
												<p class="mb-2 tx-muted">Price:</p>
												<p class="font-weight-semibold tx-20 mb-0">$172</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer br-be-10 br-bs-10">
									<div class="text-end">
										<a href="javascript:void(0);" class="tx-danger tx-14 mx-3" data-bs-toggle="card-remove"><i class="fe fe-trash tx-13 mx-1"></i>Remove</a>
										<a href="{{url('wish-list')}}" class="tx-primary tx-14"><i class="fe fe-heart tx-13 mx-1"></i>Add to Wishlist</a>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-xl-auto col-sm-auto">
											<div class="avatar avatar-xl"><img src="{{asset('build/assets/img/ecommerce/4.jpg')}}" alt="img" class="br-5"></div>
										</div>
										<div class="col-xl col-sm">
											<h6 class="mb-3 tx-capitalize mg-sm-t-0-f mg-t-20">Beautiful Wooden Chair</h6>
											<div class="d-sm-flex d-block align-items-center">
												<div class="form-group mb-0">
													<select name="quantity" class="form-control nice-select wd-60">
														<option value="1" selected>M</option>
														<option value="2">L</option>
														<option value="3">XL</option>
														<option value="4">XXL</option>
													</select>
												</div>
												<div class="form-group mb-0 my-2 my-sm-0 mb-0 ms-0 ms-sm-2">
													<select name="quantity" class="form-control nice-select wd-80">
														<option value="pink" selected>Pink</option>
														<option value="green">Green</option>
														<option value="red">Red</option>
														<option value="yellow">Yellow</option>
													</select>
												</div>
												<div class="handle-counter justify-content-start my-2 my-sm-0 mb-0 ms-0 ms-sm-2">
													<button class="counter-minus btn btn-white lh-2 shadow-none"><i class="fe fe-minus"></i></button>
													<input type="text" value="1" class="qty">
													<button class="counter-plus btn btn-white lh-2 shadow-none"><i class="fe fe-plus"></i></button>
												</div>
											</div>
										</div>
										<div class="col-xl-auto col-sm-auto">
											<div class="text-sm-end  mg-sm-t-0-f mg-t-20">
												<p class="mb-2 tx-muted">Price:</p>
												<p class="font-weight-semibold tx-20 mb-0">$50</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer br-be-10 br-bs-10">
									<div class="text-end">
										<a href="javascript:void(0);" class="tx-danger tx-14 mx-3" data-bs-toggle="card-remove"><i class="fe fe-trash tx-13 mx-1"></i>Remove</a>
										<a href="{{url('wish-list')}}" class="tx-primary tx-14"><i class="fe fe-heart tx-13 mx-1"></i>Add to Wishlist</a>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-xl-auto col-sm-auto">
											<div class="avatar avatar-xl"><img src="{{asset('build/assets/img/ecommerce/3.jpg')}}" alt="img" class="br-5"></div>
										</div>
										<div class="col-xl col-sm">
											<h6 class="mb-3 tx-capitalize mg-sm-t-0-f mg-t-20">High Performane Laptop</h6>
											<div class="d-sm-flex d-block align-items-center">
												<div class="form-group mb-0">
													<select name="quantity" class="form-control nice-select wd-60">
														<option value="1" selected>14' Inch</option>
														<option value="2">15' Inch</option>
													</select>
												</div>
												<div class="form-group mb-0 my-2 my-sm-0 mb-0 ms-0 ms-sm-2">
													<select name="quantity" class="form-control nice-select wd-80">
														<option value="white" selected>White</option>
														<option value="green">Green</option>
														<option value="red">Red</option>
														<option value="yellow">Yellow</option>
													</select>
												</div>
												<div class="handle-counter justify-content-start my-2 my-sm-0 mb-0 ms-0 ms-sm-2">
													<button class="counter-minus btn btn-white lh-2 shadow-none"><i class="fe fe-minus"></i></button>
													<input type="text" value="3" class="qty">
													<button class="counter-plus btn btn-white lh-2 shadow-none"><i class="fe fe-plus"></i></button>
												</div>
											</div>
										</div>
										<div class="col-xl-auto col-sm-auto">
											<div class="text-sm-end  mg-sm-t-0-f mg-t-20">
												<p class="mb-2 tx-muted">Price:</p>
												<p class="font-weight-semibold tx-20 mb-0">$72</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer br-be-10 br-bs-10">
									<div class="text-end">
										<a href="javascript:void(0);" class="tx-danger tx-14 mx-3" data-bs-toggle="card-remove"><i class="fe fe-trash tx-13 mx-1"></i>Remove</a>
										<a href="{{url('wish-list')}}" class="tx-primary tx-14"><i class="fe fe-heart tx-13 mx-1"></i>Add to Wishlist</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-4 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="pb-3 mb-3 border-bottom-dashed">
										<p class="font-weight-semibold tx-16 mb-2">Delivery</p>
										<div class="row">
											<div class="col-md-6">
												<div class="item-group">
													<label class="item-box mb-0 w-100">
														<input type="radio" name="item" value="design" class="selectgroup-input" checked>
														<span class="item d-flex flex-column br-5 p-2 mb-3 mb-md-0 border">
															<span class="mb-1">Free Delivery</span>
															<span class="mb-0">Expected Date: 26-03-2022</span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="item-group">
													<label class="item-box mb-0 w-100">
														<input type="radio" name="item" value="design" class="selectgroup-input">
														<span class="item d-flex flex-column br-5 p-2 border">
															<span class="mb-1">Express Delivery</span>
															<span class="mb-0">Expected Date: 20-03-2022</span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="pb-3 mb-3 border-bottom-dashed">
										<p class="font-weight-semibold tx-16 mb-2">Have Promo Code?</p>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Promo Code">
											<button class="btn btn-primary"> Apply</button>
										</div>
										<div class="text-end mt-2">
											<a href="javascript:void(0);" class="tx-primary tx-12">View Coupons</a>
										</div>
									</div>
									<div class="pb-3 mb-3 border-bottom-dashed">
										<div class="flex-between mb-1">
											<span class="tx-16">Sub Total:</span>
											<span class="tx-16 text-end">$78.56</span>
										</div>
										<div class="flex-between mb-1">
											<span class="tx-14 tx-muted">Discount:</span>
											<span class="tx-14 tx-muted text-end">-$8.00</span>
										</div>
										<div class="flex-between mb-1">
											<span class="tx-14 tx-muted">Delivery:</span>
											<span class="tx-14 tx-muted text-end">$0.00</span>
										</div>
										<div class="flex-between mb-0">
											<span class="tx-14 tx-muted">Tax:</span>
											<span class="tx-14 tx-muted text-end">+$10.00</span>
										</div>
									</div>
									<div class="pb-3 mb-3 border-bottom-dashed">
										<div class="flex-between mb-0">
											<span class="tx-16 font-weight-semibold">Total:</span>
											<span class="tx-16 font-weight-semibold text-end">$80.56</span>
										</div>
									</div>
									<div class="mb-0 pb-0">
										<div class="btn-list text-end product-btn">
											<a href="{{url('shop')}}" class="btn btn-outline-primary">Continue Shopping</a>
											<a href="{{url('check-out')}}" class="btn btn-primary">Proceed to Checkout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!-- Internal HandleCounter js -->
		@vite('resources/assets/js/handleCounter.js')

		<!-- Internal Nice-select js-->
		<script src="{{asset('build/assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

@endsection
