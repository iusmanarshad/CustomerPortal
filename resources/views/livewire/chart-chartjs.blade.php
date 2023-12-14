@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">CHARTJS CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chartjs charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartLine1"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Area Chart</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartArea1"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Stacked Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartStacked1"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Stacked Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartStacked2"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<div class="row row-sm">
						<div class="col-sm-12 col-md-6 col-xl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Solid Color</div>
								</div>
								<div class="card-body">
									<div class="ht-200 ht-lg-250">
										<canvas id="chartBar1"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6 col-xl-4 mg-t-20 mg-md-t-0">
							<div class="card">
								<div class="card-header">
									<div class="card-title">With Transparency</div>
								</div>
								<div class="card-body">
									<div class="ht-200 ht-lg-250">
										<canvas id="chartBar2"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6 col-xl-4 mg-t-20 mg-xl-t-0">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Using Gradient Color</div>
								</div>
								<div class="card-body">
									<div class="ht-200 ht-lg-250">
										<canvas id="chartBar3"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Horizontal Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartBar4"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Horizontal Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartBar5"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-6">
							<div class="card mg-b-md-20 overflow-hidden">
								<div class="card-header">
									<div class="card-title">Pie Chart</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartPie"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-sm-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Donut Chart</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartDonut"></canvas>
									</div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!--Internal  Chart.bundle js -->
		<script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!--Internal Chartjs js -->
		@vite('resources/assets/js/chart.chartjs.js')

@endsection
