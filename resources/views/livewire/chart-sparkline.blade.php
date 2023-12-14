@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SPARKLINE CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sparkline Charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap">
										<span id="sparkline1">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										<div class="mg-t-10 mg-sm-t-0-f">
											<span id="sparkline2">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
										<div class="mg-t-10 mg-sm-t-0-f">
											<span id="sparkline11">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-->
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Area Chart</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap">
										<div class="mg-sm-e-30">
											<span id="sparkline3">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
										</div>
										<div class="mg-sm-e-30 mg-t-10 mg-sm-t-0-f">
											<span id="sparkline4">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
										</div>
										<div class="mg-sm-e-0 mg-t-10 mg-sm-t-0-f">
											<span id="sparkline14">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap">
										<div class="mg-sm-e-30">
											<span id="sparkline5">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-e-30 mg-t-10 mg-sm-t-0-f">
											<span id="sparkline6">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-e-30 mg-t-10 mg-sm-t-0-f">
											<span id="sparkline16">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-->

						<div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Stacked Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap">
										<div class="mg-sm-e-30">
											<span id="sparkline7">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
										</div>
										<div class="mg-sm-e-30 mg-t-10 mg-sm-t-0-f">
											<span id="sparkline8">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
										</div>
										<div class="mg-sm-e-0 mg-t-10 mg-sm-t-0-f">
											<span id="sparkline18">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-12">
							<!-- div -->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pie Chart</div>
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap">
										<span id="sparkline9">3,4,4</span>
										<div class="mg-xs-s-30 ms-2 mg-xs-t-0 mg-t-0">
											<span id="sparkline10">3,4,4,7,5,9</span>
										</div>
										<div class="mg-xs-s-30 ms-2 mg-xs-t-0 mg-t-0">
											<span id="sparkline01">3,4,4,7,5,9</span>
										</div>
										<div class="mg-xs-s-30 ms-2 mg-xs-t-0 mg-t-0">
											<span id="sparkline02">3,4,4,7,5,9</span>
										</div>
									</div>
								</div>
							</div>
						<!-- /div -->
						</div><!-- col-6 -->
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!-- Internal Jquery-sparkline js -->
		<script src="{{asset('build/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
		@vite('resources/assets/js/chart.sparkline.js')

@endsection
