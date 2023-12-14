@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">MORRIS CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Morris charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div class="morris-wrapper-demo" id="morrisLine1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div class="morris-wrapper-demo" id="morrisLine2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Area Chart</div>
								</div>
								<div class="card-body">
									<div class="morris-wrapper-demo" id="morrisArea1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Area Chart</div>
								</div>
								<div class="card-body">
									<div class="morris-wrapper-demo" id="morrisArea2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Stacked Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="morris-wrapper-demo" id="morrisBar3"></div>
								</div>
							</div>
						</div><!-- col-6 -->

						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Stacked Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="morris-wrapper-demo" id="morrisBar4"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="morris-wrapper-demo" id="morrisBar1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="morris-wrapper-demo" id="morrisBar2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Donut Chart</div>
								</div>
								<div class="card-body">
									<div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Donut Chart</div>
								</div>
								<div class="card-body">
									<div class="morris-donut-wrapper-demo" id="morrisDonut2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!--Internal  Morris js -->
		<script src="{{asset('build/assets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/morris.js/morris.min.js')}}"></script>

		<!--Internal Chart Morris js -->
		@vite('resources/assets/js/chart.morris.js')

@endsection
