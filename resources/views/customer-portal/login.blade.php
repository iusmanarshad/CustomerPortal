@extends('customer-portal.layouts.custom-app')

@section('styles')

@endsection

@section('content')

    <style>
        .divider.or::before {
            content: "";
        }
    </style>
        <div class="bg-svg">
			<div class="page" >
				<div class="z-index-10">
					<div class="container">
						<div class="row">
							<div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 mx-auto my-auto py-4 justify-content-center">
								<div class="card-sigin">
									<!-- Demo content-->
									<div class="main-card-signin d-md-flex">
										<div class="wd-100p">
											<div class="d-flex">
												<a href="{{url('index')}}">
													<img src="{{asset('build/assets/img/brand/favicon-white.png')}}" class="sign-favicon ht-40 logo-dark" alt="logo">
													<img src="https://portal.drummlaw.com/images/logo-vertical.png?2f53a5cc78e3cc90eac057c437ede744" class="sign-favicon ht-40 logo-light-theme" alt="logo">
												</a>
											</div>
											<div class="mt-1">
												<h5 class="tx-medium tx-primary">Customer Portal</h5>
												<h2 class="tx-medium tx-primary">Welcome back!</h2>
												<h6 class="font-weight-semibold mb-4 text-muted">Please sign in to continue.</h6>
												<div class="panel tabs-style7 scaleX mt-2">
													{{--<div class="panel-head">
														<ul class="nav nav-tabs d-block d-sm-flex">
															<li class="nav-item"><a class="nav-link tx-14 font-weight-semibold text-sm-center text-start active" data-bs-toggle="tab" href="#signinTab1">Email</a></li>
															<li class="nav-item"><a class="nav-link tx-14 font-weight-semibold text-sm-center text-start" data-bs-toggle="tab" href="#signinTab2">Mobile Number</a></li>
														</ul>
													</div>--}}
													<div class="panel-body p-0">
														<div class="tab-content mt-3">
															<div class="tab-pane active" id="signinTab1">
																<form action="{{ route('postLogin') }}" method="POST">
                                                                    @csrf
																	<div class="form-group">
																		<input class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email" type="email">
																	</div>
																	<div class="form-group">
																		<input class="form-control" name="password" id="password" placeholder="Password" type="password">
																	</div>
																	<div class="d-flex align-items-center justify-content-between">
																		<p class="mb-0"><a href="javascript:void(0);" class="tx-primary">Forgot password?</a></p>
																		<button type="submit" class="btn btn-primary">Log In</button>
																	</div>
																</form>

                                                                @if ($errors->any())
                                                                    <div class="alert alert-danger mb-0 mt-2">
                                                                        <ul class="mb-0">
                                                                            @foreach ($errors->all() as $error)
                                                                                <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif
                                                                {{--<div class="divider my-4 or tx-muted"></div>
                                                                <a href="javascript:void(0);" class="btn btn-block btn-outline-primary tx-center flex-center"><i class="bx bxl-google tx-22 me-2"></i>Signin With Google</a>
                                                                <div class="d-flex">
                                                                    <a href="javascript:void(0);" class="btn btn-block btn-outline-primary tx-center mt-1 flex-1 flex-center"><i class="bx bxl-facebook tx-22 me-2"></i>Facebook</a>
                                                                    <a href="javascript:void(0);" class="btn btn-block btn-outline-primary tx-center mt-1 ms-1 flex-1 flex-center"><i class="bx bxl-twitter tx-22 me-2"></i>Twitter</a>
                                                                </div>--}}
															</div>
															{{--<div class="tab-pane" id="signinTab2">
																<div id="mobile-num" class="input-group mb-2">
																	<a href="javascript:void(0);" class="input-group-text bg-white text-muted">
																		<span>+91</span>
																	</a>
																	<input class="form-control" type="number" placeholder="Mobile Number">
																</div>
																<div id="login-otp" class="justify-content-around mb-4">
																	<input class="form-control  text-center me-2" id="txt1" maxlength="1" onkeyup="move(event, '', 'txt1', 'txt2')">
																	<input class="form-control  text-center me-2" id="txt2" maxlength="1" onkeyup="move(event, 'txt1', 'txt2', 'txt3')">
																	<input class="form-control  text-center me-2" id="txt3" maxlength="1" onkeyup="move(event, 'txt2', 'txt3', 'txt4')">
																	<input class="form-control  text-center" id="txt4" maxlength="1" onkeyup="move(event, 'txt3', 'txt4', '')">
																</div>
																<span class="tx-muted">Note : Login with registered mobile number to generate OTP.</span>
																<div class="container-login100-form-btn mt-3">
																	<a href="javascript:void(0);" class="btn login100-form-btn btn-primary" id="generate-otp">
																		Proceed
																	</a>
																</div>
															</div>--}}
														</div>
													</div>
												</div>
												{{--<div class="tx-center mt-3">
													<p class="mb-0 tx-muted">Don't have an account? <a href="{{url('signup')}}" class="tx-primary font-weight-semibold tx-15">Create an Account</a></p>
												</div>--}}
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

		<!-- generate-otp js -->
		@vite('resources/assets/js/generate-otp.js')

@endsection
