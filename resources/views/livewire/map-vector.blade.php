@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">VECTOR MAPS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Maps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Vector maps</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6">
							<div class="card mg-b-20" id="map">
								<div class="card-header">
									<div class="card-title">Vector Map - World</div>
								</div>
								<div class="card-body">
									<div class="ht-300" id="vmap"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mg-b-20" id="map1">
								<div class="card-header">
									<div class="card-title">Vector Map - Canada</div>
								</div>
								<div class="card-body">
									<div class="ht-300" id="vmap3"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mg-b-20" id="map2">
								<div class="card-header">
									<div class="card-title">Vector Map - USA</div>
								</div>
								<div class="card-body">
									<div class="ht-300" id="vmap2"></div>
								</div><!-- col-->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mg-b-20" id="map6">
								<div class="card-header">
									<div class="card-title">Vector Map - Germany</div>
								</div>
								<div class="card-body">
									<div class="ht-300" id="vmap7"></div>
								</div><!-- col-->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mg-b-20" id="map7">
								<div class="card-header">
									<div class="card-title">Vector Map - Russia</div>
								</div>
								<div class="card-body">
									<div class="ht-300" id="vmap8"></div>
								</div><!-- col-->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card" id="map8">
								<div class="card-header">
									<div class="card-title">Vector Map - France</div>
								</div>
								<div class="card-body">
									<div class="ht-300" id="vmap9"></div>
								</div><!-- col-->
							</div>
						</div>
					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!--Internal  Vector-maps js -->
		<script src="{{asset('build/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.canada.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.germany.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.russia.js')}}"></script>
		<script src="{{asset('build/assets/plugins/jqvmap/maps/jquery.vmap.france.js')}}"></script>

		<!-- Internal Vector-sampledata js -->
		<script src="{{asset('build/assets/jquery.vmap.sampledata.js')}}"></script>
		@vite('resources/assets/js/vector-map.js')

@endsection
