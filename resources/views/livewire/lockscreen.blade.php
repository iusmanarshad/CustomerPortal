@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

        <div class="bg-svg svg-3">
			<div class="page" >
				<div class="z-index-10">
					<div class="container">
						<div class="row">
							<div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 py-4 justify-content-center mx-auto">
								<div class="card-sigin">
									<!-- Demo content-->
									<div class="main-card-signin d-md-flex">
										<div class="wd-100p">
											<div class="d-flex mx-auto">
												<a href="{{url('index')}}" class="mx-auto d-flex">
													<img src="{{asset('build/assets/img/brand/favicon-white.png')}}" class="sign-favicon ht-40 mx-auto logo-dark" alt="logo">
													<img src="{{asset('build/assets/img/brand/favicon-white-1.png')}}" class="sign-favicon ht-40 mx-auto logo-light-theme" alt="logo">
													<h1 class="main-logo1 ms-1 me-0 my-auto tx-28 text-light ms-2">zem</h1>
												</a>
											</div>
											<div class="mt-3">
												<div class="avatar avatar-xxl avatar-xxl mx-auto text-center mb-2"><img alt="" class="avatar avatar-xxl rounded-circle  mt-2 mb-2 " src="{{asset('build/assets/img/users/6.jpg')}}"></div>
												<div class="mx-auto text-center mg-b-20">
													<h5 class="mg-b-15 tx-16 text-dark">Rita Morgan</h5>
													<h6 class="tx-13 text-muted text-white-50">Enter password to unlock screen</h6>
												</div>
												<form action="#">
													<div class="form-group">
														<input class="form-control" placeholder="Enter your password" type="password" value="">
													</div>
													<a href="{{url('index')}}" class="btn btn-primary btn-block">Unlock</a>
												</form>
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
