@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

		<!-- /Loader -->
		<div class="bg-svg svg-4">
			<div class="page">
				<div class="z-index-10">
					<div class="container p-5 p-sm-0">
						<div class="row justify-content-center">
							<div class="col-xl-5 col-lg-8 col-sm">
								<div class="card-sigin">
									<h2 class="tx-30 text-center text-dark">Under Maintenance</h2>
									<p class="tx-12 text-muted text-center">Our website is currently undergoing scheduled maintenance. We Should be back shortly. Thank you for your patience!</p>
									<div class="row row-sm mx-auto">
										<div id="count-down" class="center-block my-3 mx-auto">
											<div class="clock-presenter days_dash">
												<div class="digit"></div>
												<div class="digit"></div>
												<p class="mt-2 text-white-50">Days</p>
											</div>
											<div class="clock-presenter hours_dash">
												<div class="digit"></div>
												<div class="digit"></div>
												<p class="mt-2 text-white-50">Hours</p>
											</div>
											<div class="clock-presenter minutes_dash">
												<div class="digit"></div>
												<div class="digit"></div>
												<p class="mt-2 text-white-50">Minutes</p>
											</div>
											<div class="clock-presenter seconds_dash">
												<div class="digit"></div>
												<div class="digit"></div>
												<p class="mt-2 text-white-50">Seconds</p>
											</div>
										</div>
									</div>
									<div class="input-group text-center sub-input mt-sm-5 ms-auto me-auto mt-6">
										<input type="text" class="form-control input-lg " placeholder="Enter your Email">
										<div class="input-group-append">
											<button type="button" class="btn Sub  btn-primary btn-lg bd-te-3  bd-be-3">
												Subscribe
											</button>
										</div>
									</div>
									<div class="mg-t-20 text-center">
										<p class="tx-muted mb-0">Go back to <a href="{{url('index')}}" class="font-weight-semibold tx-primary tx-15">Home</a></p>
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

		<!-- Jquery.Coutdown js -->
		<script src="{{asset('build/assets/plugins/jquery-countdown/jquery.lwtCountdown-1.0.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jquery-countdown/count-down.js')}}"></script>

@endsection
