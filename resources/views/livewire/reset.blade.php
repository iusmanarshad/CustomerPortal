@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

        <div class="bg-svg svg-2">
			<div class="page" >
				<div class="z-index-10">
					<div class="container">
						<div class="row">
							<div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 py-4 justify-content-center mx-auto">
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
											<div class="mt-3">
												<h2 class="tx-medium tx-primary">Reset Password!</h2>
												<h6 class="font-weight-semibold mb-4 text-muted">Enter your mail and reset your password</h6>
												<form action="#">
													<div class="form-group text-start">
														<input class="form-control" placeholder="Enter your email" type="text">
													</div>
													<div class="form-group text-start">
														<input class="form-control" placeholder="Enter your password" type="password">
													</div>
													<div class="form-group text-start">
														<input class="form-control" placeholder="Enter your password" type="password">
													</div>
													<a href="{{url('index')}}" class="btn btn-primary btn-block">Reset Password</a>
												</form>
											</div>
											<div class="mg-t-20 text-center">
												 <p class="tx-muted mb-0">Take me back to <a href="{{url('signin')}}" class="font-weight-semibold tx-primary tx-15">Sign In</a></p>
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
