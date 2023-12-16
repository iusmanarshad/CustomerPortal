@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FORM LAYOUTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Horizontal Alignment
									</div>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="row">
											<div class="col-md-5">
												<input class="form-control" placeholder="Enter your username" type="text">
											</div>
											<div class="col-md-5 mg-md-t-0 mt-2">
												<input class="form-control" placeholder="Enter your password" type="password">
											</div>
											<div class="col-md  mg-md-t-0 mt-3">
												<button class="btn btn-primary btn-block">Sign In</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Vertical Alignment
									</div>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input class="form-control" placeholder="Enter your username" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Enter your password" type="password">
												</div>
												<button class="btn btn-primary pd-x-20">Sign In</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Basic Example
									</div>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<input class="form-control" placeholder="Enter your username" type="text">
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Enter Your Email" type="email">
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Enter Your Password" type="password">
										</div>
										<div class="form-group">
											<label class="ckbox">
												<input type="checkbox"><span class="tx-13">I agree terms and conditions</span>
											</label>
										</div>
										<button class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Left Label Alignment
									</div>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="row align-items-center">
											<div class="col-md-4">
												<label class="form-label">Firstname</label>
											</div>
											<div class="col-md-8">
												<div class="form-group">
													<input class="form-control" placeholder="Enter your firstname" type="text">
												</div>
											</div>
										</div>
										<div class="row align-items-center">
											<div class="col-md-4">
												<label class="form-label">Lastnane</label>
											</div>
											<div class="col-md-8">
												<div class="form-group">
													<input class="form-control" placeholder="Enter your lastname" type="text">
												</div>
											</div>
										</div>
										<div class="row align-items-center">
											<div class="col-md-4">
												<label class="form-label">Email</label>
											</div>
											<div class="col-md-8">
												<div class="form-group">
													<input class="form-control" placeholder="Enter your email" type="email">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="ckbox">
												<input type="checkbox"><span class="tx-13">I agree terms and conditions</span>
											</label>
										</div>
										<div class="btn-list">
											<button class="btn btn-primary">Register</button>
											<button class="btn btn-secondary">Cancel</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Form Group Wrapper
									</div>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-floating mg-md-b-0-f">
													<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
													<label for="floatingInput">Email address</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-floating mg-md-b-0-f">
													<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
													<label for="floatingPassword">Password</label>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="card-header">
									Form in Modal
								</div>
								<div class="card-body">
									<div class="tx-center">
										<a class="btn btn-primary" data-bs-target="#modaldemo1" data-bs-toggle="modal" href="">View Live Demo</a>
									</div><!-- pd-y-30 -->
									<div class="modal">
										<div class="modal-dialog wd-xl-400" role="document">
											<div class="modal-content">
												<div class="modal-body pd-sm-40">
													<button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
													<h5 class="modal-title mg-b-5">Create New Account</h5>
													<p class="mg-b-20">Let's get you all setup so you can begin using our app.</p>
													<div class="form-group">
														<input class="form-control" placeholder="Firstname" type="text">
													</div>
													<div class="form-group">
														<input class="form-control" placeholder="Lastname" type="text">
													</div>
													<div class="form-group">
														<input class="form-control" placeholder="Phone" type="text">
													</div>
													<div class="form-group">
														<input class="form-control" placeholder="Email" type="text">
													</div>
													<div class="form-group mg-b-25">
														<label class="ckbox mg-b-5"><input type="checkbox"><span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span></label> <label class="ckbox"><input checked type="checkbox"><span class="tx-13">Yes, I want to receive email from your newsletter.</span></label>
													</div><button class="btn btn-primary btn-block">Continue</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Form in Dropdown</div>
								</div>
								<div class="card-body">
									<div class="main-dropdown-form-demo">
										<button class="btn btn-primary pd-x-20" data-bs-toggle="dropdown">Live Example <i class="icon ion-ios-arrow-down mg-s-5 tx-12"></i></button>
										<div class="dropdown-menu">
											<h6 class="dropdown-title">Subscribe</h6>
											<p class="mg-b-20">Don't miss any update from us.</p>
											<div class="form-group">
												<input class="form-control" placeholder="Enter your fullname" type="text">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Enter your email" type="email">
											</div><button class="btn btn-primary btn-block">Subscribe</button>
										</div>
									</div><!-- main-dropdown-demo -->
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Payment Details
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
											<div class="card card-body border shadow-none">
												<h5 class="card-title mg-b-20">Your Payment Details</h5>
												<div class="form-group">
													<label class="form-label">Name on Card</label> <input class="form-control" required type="text">
												</div>
												<div class="form-group">
													<label class="form-label">Card Number</label>
													<div class="input-group">
														<input class="form-control pd-r-80" required type="text">
														<div class="input-group-text">
															<img alt="" class="wd-30 mg-e-5" src="{{asset('build/assets/img/photos/37.png')}}">
															<img alt="" class="wd-30" src="{{asset('build/assets/img/photos/36.png')}}">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row row-sm">
														<div class="col-sm-9">
															<label class="form-label">Expiration Date</label>
															<div class="row row-sm">
																<div class="col-sm-7">
																	<div class="form-group">
																		<select class="form-control select2-no-search">
																		<option label="Choose one"></option>
																		<option value="January">January</option>
																		<option value="February">February</option>
																		<option value="March">March</option>
																		<option value="April">April</option>
																		<option value="May">May</option>
																	</select>
																	</div>
																</div>
																<div class="col-sm-5">
																	<div class="form-group mb-0">
																		<select class="form-control select2-no-search">
																		<option label="Choose one"></option>
																		<option value="2018">2018</option>
																		<option value="2019">2019</option>
																		<option value="2020">2020</option>
																		<option value="2021">2021</option>
																		<option value="2022">2022</option>
																	</select>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<label class="form-label">CVC</label>
															<div class="form-group">
																<input class="form-control" required type="text">
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="ckbox">
														<input checked type="checkbox">
														<span class="tx-13">Save my card for future purchases</span>
													</label>
												</div>
												<button class="btn btn-primary btn-block mt-3">Complete Payment</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					
@endsection

@section('modals')

					<!-- modal -->
					<div id="modaldemo1" class="modal">
						<div class="modal-dialog wd-xl-400" role="document">
							<div class="modal-content">
								<div class="modal-body pd-20 pd-sm-40">
									<button type="button" class="close pos-absolute t-15 r-20 tx-26" data-bs-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h5 class="modal-title mg-b-5">Create New Account</h5>
									<p class="mg-b-20">Let's get you all setup so you can begin using our app.</p>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Firstname">
									</div>
									<!-- form-group -->
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Lastname">
									</div>
									<!-- form-group -->
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Phone">
									</div>
									<!-- form-group -->
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
									<!-- form-group -->
									<div class="form-group mg-b-25">
										<label class="ckbox mg-b-5">
											<input type="checkbox">
											<span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span>
										</label>
										<label class="ckbox">
											<input type="checkbox" checked>
											<span class="tx-13">Yes, I want to receive email from your newsletter.</span>
										</label>
									</div>
									<!-- form-group -->
									<button class="btn btn-primary btn-block">Continue</button>
								</div>
								<!-- modal-body -->
							</div>
							<!-- modal-content -->
						</div>
						<!-- modal-dialog -->
					</div>
					<!-- modal -->

@endsection

@section('scripts')

		<!--Internal  Select2 js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Form-layouts js -->
		@vite('resources/assets/js/form-layouts.js')

@endsection
