@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

        <div class="bg-svg">
			<div class="page" >
				<div class="z-index-10">
					<div class="container">
						<div class="row">
							<div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 py-4 justify-content-center mx-auto my-auto">
								<div class="card-sigin ">
									<!-- Demo content-->
									<div class="main-card-signin d-md-flex">
										<div class="wd-100p">
											<div class="d-flex">
												<a href="{{url('index')}}">
													<img src="{{asset('build/assets/img/brand/favicon-white.png')}}" class="sign-favicon ht-40 logo-dark" alt="logo">
													<img src="{{asset('build/assets/img/brand/favicon-white-1.png')}}" class="sign-favicon ht-40 logo-light-theme" alt="logo">
												</a>
											</div>
											<div class="mt-3">
												<h2 class="tx-medium tx-primary">Get Started</h2>
												<h6 class="font-weight-semibold mb-4 text-muted">It's free to signup and only takes a minute.</h6>
												<form action="#">
													<div class="row">
														<div class="col-xl-6">
															<div class="form-group">
																<input class="form-control" placeholder="First Name" type="text">
															</div>
														</div>
														<div class="col-xl-6">
															<div class="form-group">
																<input class="form-control" placeholder="Last Name" type="text">
															</div>
														</div>
														<div class="col-xl-12">
															<div class="form-group">
																<input class="form-control" placeholder="Email" type="email">
															</div>
														</div>
														<div class="col-xl-12">
															<div class="form-group">
																<input class="form-control" placeholder="Mobile Number" type="text">
															</div>
														</div>
														<div class="col-xl-12">
															<div class="form-group">
																<input class="form-control" placeholder="Password" type="password">
															</div>
														</div>
													</div>

													<button class="btn btn-primary btn-block">Create Account</button>
												</form>
												<div class="divider my-4 or tx-muted"></div>
												<a href="javascript:void(0);" class="btn btn-block btn-outline-primary tx-center flex-center"><i class="bx bxl-google tx-22 me-2"></i>Signin With Google</a>
												<div class="d-flex">
													<a href="javascript:void(0);" class="btn btn-block btn-outline-primary tx-center mt-1 flex-1 flex-center"><i class="bx bxl-facebook tx-22 me-2"></i>Facebook</a>
													<a href="javascript:void(0);" class="btn btn-block btn-outline-primary tx-center mt-1 ms-1 flex-1 flex-center"><i class="bx bxl-twitter tx-22 me-2"></i>Twitter</a>
												</div>
												<div class="tx-center mt-3">
													<p class="mb-0 tx-muted">Already have an account? <a href="{{url('signin')}}" class="tx-primary font-weight-semibold tx-15">Sign In</a></p>
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



@endsection
