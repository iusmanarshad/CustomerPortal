@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">RANGE SLIDER</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Range slider</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">

							<!--div-->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Range Slider (Modern Skin)</div>
								</div>
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider2" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider3" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider4" data-extra-classes="irs-modern" name="example_name" type="text">
										</div>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Range Slider (Modern Skin)
									</div>
								</div>
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider2" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider4" data-extra-classes="irs-outline" name="example_name" type="text">
										</div>
									</div>
								</div>
							</div>
							<!--/div-->

							<!--div-->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Range Slider</div>
								</div>
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-lg-12">
											<input class="rangeslider1" name="example_name" type="text" value="">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider2" name="example_name" type="text" value="">
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider3" name="example_name" type="text" value="">
										</div>
										<div class="col-lg-12 mg-t-20">
											<input class="rangeslider4" name="example_name" type="text" value="">
										</div>
									</div>
								</div>
							</div>
							<!--/div-->

						</div>
					</div>

@endsection

@section('scripts')

		<!--Internal Ion.rangeSlider.min js -->
		<script src="{{asset('build/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

		<!-- Internal  rangeslider js -->
		@vite('resources/assets/js/rangeslider.js')

@endsection
