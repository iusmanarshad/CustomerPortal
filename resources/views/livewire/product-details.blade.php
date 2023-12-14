@extends('layouts.app')

@section('styles')

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">PRODUCT DETAILS</span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb breadcrumb-style3">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Ecommerce</a></li>
							<li class="breadcrumb-item active" aria-current="page">Product details</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body ">
								<div class="row row-sm ">
									<div class=" col-xl-6 col-lg-12 col-md-12">
										<div class="row">
											<div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 order-md-1 order-2">
												<div class="clearfix carousel-slider">
													<div id="thumbcarousel" class="carousel slide" data-bs-interval="t">
														<div class="carousel-inner">
															<ul class="list-unstyled carousel-item active d-md-block d-flex">
																<li data-bs-target="#Slider" data-bs-slide-to="0" class="thumb active m-2">
																	<img src="{{asset('build/assets/img/ecommerce/38.png')}}" alt="img">
																</li>
																<li data-bs-target="#Slider" data-bs-slide-to="1" class="thumb m-2">
																	<img src="{{asset('build/assets/img/ecommerce/40.png')}}" alt="img">
																</li>
																<li data-bs-target="#Slider" data-bs-slide-to="2" class="thumb m-2">
																	<img src="{{asset('build/assets/img/ecommerce/41.png')}}" alt="img">
																</li>
																<li data-bs-target="#Slider" data-bs-slide-to="3" class="thumb m-2">
																	<img src="{{asset('build/assets/img/ecommerce/39.png')}}" alt="img">
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="text-center my-2 d-md-none d-block">
													<a href="{{url('product-cart')}}" class="btn ripple btn-primary me-2 btn-block d-sm-inline"><i class="fe fe-shopping-cart"> </i> Add to cart</a>
													<a href="{{url('check-out')}}" class="btn ripple btn-secondary btn-block d-sm-inline"><i class="fe fe-credit-card"> </i> Buy Now</a>
												</div>
											</div>
											<div class="col-xl-10 col-lg-9 col-md-9 col-sm-12 order-md-2 order-1">
												<div class="product-carousel  border br-5">
													<div id="Slider" class="carousel slide" data-bs-ride="false">
														<div class="carousel-inner">
															<div class="carousel-item active">
																<img src="{{asset('build/assets/img/ecommerce/38.png')}}" alt="img" class="img-fluid mx-auto d-block">
																<div class="text-center mt-5 mb-5 btn-list"></div>
															</div>
															<div class="carousel-item">
																<img src="{{asset('build/assets/img/ecommerce/40.png')}}" alt="img" class="img-fluid mx-auto d-block">
																<div class="text-center mb-5 mt-5 btn-list"></div>
															</div>
															<div class="carousel-item">
																<img src="{{asset('build/assets/img/ecommerce/41.png')}}" alt="img" class="img-fluid mx-auto d-block">
																<div class="text-center  mb-5 mt-5 btn-list"></div>
															</div>
															<div class="carousel-item"> <img src="{{asset('build/assets/img/ecommerce/39.png')}}" alt="img" class="img-fluid mx-auto d-block">
																<div class="text-center  mb-5 mt-5 btn-list"></div>
															</div>
														</div>
													</div>
												</div>
												<div class="text-center mt-4 d-md-block d-none">
													<a href="{{url('product-cart')}}" class="btn ripple btn-primary me-2"><i class="fe fe-shopping-cart"> </i> Add to cart</a>
													<a href="{{url('check-out')}}" class="btn ripple btn-secondary"><i class="fe fe-credit-card"> </i> Buy Now</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-12 col-md-12">
										<div class="mt-4 mt-xl-0">
											<h3 class="mb-1 tx-capitalize">Women's Party Wear Frock</h3>

											<p class="tx-muted tx-12">Tempor</p>

											<div class="mb-3">
												<p class="h3 tx-26 mb-0">$253</p>
												<span class="tx-13 tx-muted">No cost EMI available. <a href="javascript:void(0);" class="tx-primary tx-13">see all EMI options</a></span>
											</div>

											<div class="d-sm-flex align-items-center mb-3">
												<span class="h6 mb-0 me-2">Size:</span>
												<div class="me-4 d-sm-flex align-items-center mg-sm-t-0 mg-t-3 mg-sm-b-0-f mg-b-5">
													<span class="d-flex mb-3 mb-sm-0 tx-15"><label class="rdiobox mb-0"><input name="rdio" type="radio" checked> <span>S</span></label></span>
													<span class="d-flex ms-sm-3 m-0 mb-3 mb-sm-0 tx-15"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>M</span></label></span>
													<span class="d-flex ms-sm-3 m-0 mb-3 mb-sm-0 tx-15"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>L</span></label></span>
													<span class="d-flex ms-sm-3 m-0 mb-3 mb-sm-0 tx-15"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>XL</span></label></span>
													<span class="d-flex ms-sm-3 m-0 mb-3 mb-sm-0 tx-15"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>XXL</span></label></span>
												</div>
												<a href="javascript:void(0)" class="tx-primary tx-13">view chart</a>
											</div>

											<div class="d-sm-flex align-items-center mb-3">
												<span class="h6 mb-0 me-2">Quantity:</span>
												<div class="handle-counter justify-content-start mg-sm-t-0 mg-t-3" id="handleCounter4">
													<button class="counter-minus btn btn-white lh-2 shadow-none"><i class="fe fe-minus"></i></button>
													<input type="text" value="2" class="qty">
													<button class="counter-plus btn btn-white lh-2 shadow-none"><i class="fe fe-plus"></i></button>
												</div>
											</div>

											<div class="mb-3">
												<a href="{{url('product-cart')}}" class="btn btn-primary tx-16"><i class="fe fe-shopping-cart me-2 tx-14 d-inline-block"></i>Add to cart</a>
											</div>

											<div class="mb-3">
												<div class="d-flex flex-wrap align-items-center mb-2">
													<div class="me-2">
														<span class="avatar-sm br-5 bg-primary-transparent"><i class="fe fe-box tx-primary"></i></span>
													</div>
													<span class="me-4">Free delivery available to this product.</span>
													<span><a href="javascript:void(0);" class="tx-primary tx-13"><i class="fe fe-edit-2 me-1 tx-12"></i>change address</a></span>
												</div>
												<div class="d-flex flex-wrap align-items-center mb-2">
													<div class="me-2">
														<span class="avatar-sm br-5 bg-warning-transparent"><i class="fe fe-rotate-ccw tx-warning"></i></span>
													</div>
													<span class="me-4">10 Days return policy.</span>
													<span><a href="javascript:void(0);" class="tx-primary tx-13">know more</a></span>
												</div>
												<div class="d-flex flex-wrap align-items-center">
													<div class="me-2">
														<span class="avatar-sm br-5 bg-teal-transparent"><i class="fe fe-check-circle tx-teal"></i></span>
													</div>
													<span class="me-4">1 year warranty available.</span>
													<span><a href="javascript:void(0);" class="tx-primary tx-13">terms & conditions</a></span>
												</div>
											</div>

											<div class="colors d-flex me-2">
												<span class="mt-2">colors:</span>
												<div class="d-flex flex-wrap ms-4">
													<div class="me-2">
														<label class="colorinput">
															<input name="color" type="radio" value="azure"
																class="colorinput-input" checked>
															<span class="colorinput-color bg-dark"></span>
														</label>
													</div>
													<div class="me-2">
														<label class="colorinput">
															<input name="color" type="radio" value="indigo"
																class="colorinput-input">
															<span class="colorinput-color bg-secondary"></span>
														</label>
													</div>
													<div class="me-2">
														<label class="colorinput">
															<input name="color" type="radio" value="purple"
																class="colorinput-input">
															<span class="colorinput-color bg-danger"></span>
														</label>
													</div>
													<div class="me-2">
														<label class="colorinput">
															<input name="color" type="radio" value="pink"
																class="colorinput-input">
															<span class="colorinput-color bg-pink"></span>
														</label>
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
				<div class="row row-sm">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="mb-4">
									<h5>Description:</h5>
									<p class="mb-2 tx-muted">
										Invidunt tempor stet no ipsum et, aliquyam at takimata tempor kasd at sed sed magna justo, sanctus tempor amet ipsum elitr sed takimata et. Voluptua vero invidunt sed.
										Eirmod lorem et dolores dolor takimata, ut invidunt amet eos et amet. Ut dolore clita erat consetetur et dolore ut..
										Diam sadipscing kasd stet dolores takimata. Eos takimata et gubergren aliquyam et est. Ea kasd dolor et sea et eirmod.
										Ipsum ea clita at labore sadipscing no amet magna magna, dolor lorem accusam dolor gubergren eos at tempor lorem. Consetetur et accusam et nonumy sit, clita ipsum magna eos vero.
									</p>
									<p class="mb-0 tx-muted">
										Dolore dolores et rebum diam tempor eirmod takimata accusam elitr et. Clita et nonumy sadipscing est eirmod lorem kasd sadipscing,.
									</p>
								</div>
								<div class="mb-4">
									<h5>Features:</h5>
									<div class="row">
										<div class="col-lg-4 col-md-6">
											<ul class="list-unstyled mb-0">
												<li class="mb-2 tx-muted d-flex"><span><i class="fa fa-check me-2 tx-12 tx-primary"></i></span><span>Sed lorem et ipsum sed no rebum, eos voluptua clita eos lorem justo et consetetur..</span></li>
												<li class="mb-2 tx-muted d-flex"><span><i class="fa fa-check me-2 tx-12 tx-primary"></i></span><span>Kasd at ipsum et sed duo elitr at et et,.</span></li>
												<li class="mb-2 tx-muted d-flex"><span><i class="fa fa-check me-2 tx-12 tx-primary"></i></span><span>Ea sadipscing takimata elitr ipsum dolor ea at tempor amet, erat sanctus sed gubergren sed,.</span></li>
											</ul>
										</div>
										<div class="col-lg-4 col-md-6">
											<ul class="list-unstyled mb-0">
												<li class="mb-2 tx-muted d-flex"><span><i class="fa fa-check me-2 tx-12 tx-primary"></i></span><span>Accusam tempor tempor erat dolor sit lorem elitr elitr. Sadipscing amet lorem sit ipsum, ipsum ipsum dolor stet amet stet diam consetetur..</span></li>
												<li class="mb-2 tx-muted d-flex"><span><i class="fa fa-check me-2 tx-12 tx-primary"></i></span><span>Diam sea amet sit dolor diam. Diam et eos.</span></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="mb-0">
									<h5>Specifications:</h5>
									<div class="row">
										<div class="col-lg-8 col-md-12">
											<div class="table-responsive border radius-4">
												<table class="table border-0 mb-0">
													<tr>
														<td class="fw-semibold border-top-0">Dimensions</td>
														<td class="border-top-0"> 33 x 22 x 3 cm</td>
													</tr>
													<tr>
														<td class="fw-semibold">Manufacturer</td>
														<td>Abidas Company</td>
													</tr>
													<tr>
														<td class="fw-semibold">Item Number</td>
														<td>11003979FAB</td>
													</tr>
													<tr>
														<td class="fw-semibold">Water Resistant</td>
														<td>No</td>
													</tr>
												</table>
											</div>
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
									Ratings and Reviews
								</div>
							</div>
							<div class="card-body">
								<div class="d-block d-sm-flex pb-2 border-bottom-dashed">
									<img alt="avatar" class="avatar mg-b-10 mg-sm-b-0 rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}">
									<div class="mg-sm-s-10 flex-1">
										<h6 class="mg-b-5 font-weight-semibold">Joanne Scott</h6>
										<p class="mb-0 tx-12 tx-muted mx-wd-md-65p">Amet sadipscing et et gubergren sit, at diam ipsum at duo sanctus.</p>
										<div class="mt-1">
											<div class="d-flex align-items-center">
												<div class="tx-warning">
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
												</div>
												<div class="btn-list d-flex align-items-center ms-4">
													<div class="p-2">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="tooltip" title="helpful" aria-label="helpful"><i class="fe fe-thumbs-up"></i></a>
														<span class="tx-muted tx-12">128</span>
													</div>
													<div class="p-2">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="tooltip" title="not helpful" aria-label="not helpful"><i class="fe fe-thumbs-down"></i></a>
														<span class="tx-muted tx-12"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="d-block d-sm-flex pb-2 mt-3 border-bottom-dashed">
									<img alt="avatar" class="avatar mg-b-10 mg-sm-b-0 rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
									<div class="mg-sm-s-10 flex-1">
										<h6 class="mg-b-5 font-weight-semibold">Elena Gell</h6>
										<p class="mb-0 tx-12 tx-muted mx-wd-md-65p">Invidunt ipsum amet sit takimata justo. Ipsum dolore ut dolor invidunt dolor, gubergren invidunt labore ipsum dolor justo ipsum justo accusam. Labore voluptua labore invidunt kasd duo ipsum stet. No.</p>
										<div class="mt-1">
											<div class="d-flex align-items-center">
												<div class="tx-warning">
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star tx-gray-400"></i>
													<i class="bx bxs-star tx-gray-400"></i>
												</div>
												<div class="btn-list d-flex align-items-center ms-4">
													<div class="p-2">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="tooltip" title="helpful" aria-label="helpful"><i class="fe fe-thumbs-up"></i></a>
														<span class="tx-muted tx-12">52</span>
													</div>
													<div class="p-2">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="tooltip" title="not helpful" aria-label="not helpful"><i class="fe fe-thumbs-down"></i></a>
														<span class="tx-muted tx-12">13</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="d-block d-sm-flex mt-3">
									<img alt="avatar" class="avatar mg-b-10 mg-sm-b-0 rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}">
									<div class="mg-sm-s-10 flex-1">
										<h6 class="mg-b-5 font-weight-semibold">Albert Ion</h6>
										<p class="mb-0 tx-12 tx-muted mx-wd-md-65p">Eirmod sadipscing invidunt sadipscing at labore voluptua amet consetetur sed eos. Amet stet ipsum ut sed kasd erat aliquyam et. Duo.</p>
										<div class="mt-1">
											<div class="d-flex align-items-center">
												<div class="tx-warning">
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star tx-gray-400"></i>
												</div>
												<div class="btn-list d-flex align-items-center ms-4">
													<div class="p-2">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="tooltip" title="helpful" aria-label="helpful"><i class="fe fe-thumbs-up"></i></a>
														<span class="tx-muted tx-12">12</span>
													</div>
													<div class="p-2">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="tooltip" title="not helpful" aria-label="not helpful"><i class="fe fe-thumbs-down"></i></a>
														<span class="tx-muted tx-12"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									FAQ's
								</div>
							</div>
							<div class="card-body">
								<div class="accordion accordion-style2" id="accordionFaq">
									<div class="accordion-item">
										<div class="accordion-header" id="faq1">
											<a class="collapsed tx-14" role="button" data-bs-toggle="collapse" data-bs-target="#accordion1" aria-expanded="true" aria-controls="accordion1">
												Does this have a warranty?
												<span class="accordion-controls">
													<span class="expand"><i class="fe fe-plus"></i></span>
													<span class="shrink"><i class="fe fe-minus"></i></span>
												</span>
											</a>
										</div>
										<div id="accordion1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#accordionFaq">
											<div class="accordion-body tx-13 tx-muted">
												Yes, Dolore sed lorem at eirmod gubergren dolor lorem diam ipsum sed, amet gubergren rebum dolor sanctus amet sit est dolore,.
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header" id="faq2">
											<a class="collapsed tx-14" role="button" data-bs-toggle="collapse" data-bs-target="#accordion2" aria-expanded="false" aria-controls="accordion2">
												Is this returnable?
												<span class="accordion-controls">
													<span class="expand"><i class="fe fe-plus"></i></span>
													<span class="shrink"><i class="fe fe-minus"></i></span>
												</span>
											</a>
										</div>
										<div id="accordion2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#accordionFaq">
											<div class="accordion-body tx-13 tx-muted">
												Yes, Lorem kasd at clita diam amet tempor sadipscing, diam takimata ut dolor justo, at sed consetetur labore dolore et at invidunt, stet at at sed eirmod, ea vero et ipsum.
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header" id="faq3">
											<a class="collapsed tx-14" role="button" data-bs-toggle="collapse" data-bs-target="#accordion3" aria-expanded="false" aria-controls="accordion3">
												How to use my warranty card?
												<span class="accordion-controls">
													<span class="expand"><i class="fe fe-plus"></i></span>
													<span class="shrink"><i class="fe fe-minus"></i></span>
												</span>
											</a>
										</div>
										<div id="accordion3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#accordionFaq">
											<div class="accordion-body tx-13 tx-muted">
												Erat ipsum et ut justo aliquyam lorem lorem sed, vero magna dolores et voluptua lorem dolore, sed erat at clita stet sed, et sit lorem voluptua ipsum labore elitr diam vero justo. Amet et diam.
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header" id="faq4">
											<a class="collapsed tx-14" role="button" data-bs-toggle="collapse" data-bs-target="#accordion4" aria-expanded="false" aria-controls="accordion4">
												What happens if i ordered this product mistakenly?
												<span class="accordion-controls">
													<span class="expand"><i class="fe fe-plus"></i></span>
													<span class="shrink"><i class="fe fe-minus"></i></span>
												</span>
											</a>
										</div>
										<div id="accordion4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#accordionFaq">
											<div class="accordion-body tx-13 tx-muted">
												Takimata voluptua ut dolor amet gubergren et. Erat rebum ea rebum est est lorem amet aliquyam, eos amet consetetur dolor.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									Write a Review
								</div>
							</div>
							<div class="card-body">
								<form>
									<div class="mb-3">
										<div class="row">
											<div class="form-group mb-0 col-md-6">
												<label for="name" class="form-label">Your Name</label>
												<input class="form-control" id="name" placeholder="Your Name" type="text">
											</div>
											<div class="form-group mb-0 col-md-6">
												<label for="email" class="form-label">Email</label>
												<input class="form-control" id="email" placeholder="Email Address" type="text">
											</div>
										</div>
									</div>
									<span class="star-rating">
										<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
										<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
										<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
										<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
										<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
									</span>
									<div class="form-group">
										<label for="comment" class="form-label">Comment</label>
										<textarea class="form-control" id="comment"></textarea>
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary" type="button">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
						<h5 class="tx-muted mb-3">Related Products</h5>
					</div>
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
				</div>
				<!-- /row -->

@endsection

@section('scripts')

		<!-- Internal HandleCounter js -->
		@vite('resources/assets/js/handleCounter.js')

@endsection
