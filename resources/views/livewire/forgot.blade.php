@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

        <div class="bg-svg svg-2">
			<div class="page" >
				<div class="z-index-10">
					<div class="container">
						<div class="row">
							<div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 py-4 justify-content-center mx-auto my-auto">
								<div class="card-sigin">
									<!-- Demo content-->
									<div class="main-card-signin d-md-flex">
										<div class="wd-100p">
											<div class="d-flex">
												<a href="{{url('index')}}">
													<img src="{{asset('build/assets/img/brand/favicon-white.png')}}" class="sign-favicon ht-40 logo-dark" alt="logo">
													<img src="{{asset('build/assets/img/brand/favicon-white-1.png')}}" class="sign-favicon ht-40 logo-light-theme" alt="logo">
												</a>
											</div>
											<div class="wd-100p">
												<div class="mt-3">
													<h2 class="tx-medium tx-primary">Forgot Passowrd!</h2>
													<h6 class="font-weight-semibold mb-4 text-muted">Please enter your mail</h6>
													<!-- <h4>Please Enter Your Email</h4> -->
													<form action="#">
														<div class="form-group">
															<input class="form-control" placeholder="Enter your email" type="email">
														</div>
														<button class="btn btn-primary btn-block">Proceed</button>
													</form>
												</div>
												<div class="mg-t-20 text-center">
													<p class="mb-0 tx-muted">Take me back to <a href="{{url('signin')}}" class="tx-primary font-weight-semibold tx-15">Sign In</a></p>
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
