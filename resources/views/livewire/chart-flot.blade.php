@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FLOT CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Flot Charts</li>
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
									<div class="ht-200 ht-sm-300" id="flotLine1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div class="ht-200 ht-sm-300" id="flotLine2"></div>
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
									<div class="ht-200 ht-sm-300" id="flotArea1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6 ">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Area Chart</div>
								</div>
								<div class="card-body">
									<div class="ht-200 ht-sm-300" id="flotArea2"></div>
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
									<div class="ht-200 ht-sm-300" id="flotBar1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="ht-200 ht-sm-300" id="flotBar2"></div>
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
									<div class="card-title">Pie Chart</div>
								</div>
								<div class="card-body">
									<div class="ht-200 ht-sm-300" id="flotPie1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pie Chart</div>
								</div>
								<div class="card-body">
									<div class="ht-200 ht-sm-300" id="flotPie2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!-- Internal Flot js -->
		<script src="{{asset('build/assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>

		<!-- Internal Chart flot js -->
		@vite('resources/assets/js/chart.flot.js')

@endsection
