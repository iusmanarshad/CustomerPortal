@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">ECHART CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Echart Charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Data Attributes</div>
								</div>
								<div class="card-body">
									<div id="echart5" class="ht-300"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Data Attributes</div>
								</div>
								<div class="card-body">
									<div id="echart6" class="ht-300"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body">
									<div id="echart1" class="ht-300"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Vertical Bar Chart</div>
								</div>
								<div class="card-body">
									<div id="echart3"  class="ht-300"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div id="echart2"  class="ht-300"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Vertical Line Chart</div>
								</div>
								<div class="card-body">
									<div id="echart4"  class="ht-300"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Data Attributes</div>
								</div>
								<div class="card-body">
									<div id="echart7"  class="ht-300"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Data Attributes</div>
								</div>
								<div class="card-body">
									<div id="echart8"  class="ht-300"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Data Attributes</div>
								</div>
								<div class="card-body">
									<div id="index"  class="ht-300"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!--Internal Echart Plugin -->
		<script src="{{asset('build/assets/plugins/echart/echart.js')}}"></script>
		@vite('resources/assets/js/echarts.js')

@endsection
