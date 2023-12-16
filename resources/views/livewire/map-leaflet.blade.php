@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">LEAFLET MAPS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Maps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Leaflet maps</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic</div>
								</div>
								<div class="card-body">
									<div class="ht-300" id="leaflet1"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">With Popup</div>
								</div>
								<div class="card-body">
									<div class="ht-300" id="leaflet2"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Map with Circle</div>
								</div>
								<div class="card-body">
									<div class="ht-200 ht-sm-300 ht-md-400 mb-0" id="leaflet3"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!--Internal  Leaflet-maps js -->
		<script src="{{asset('build/assets/plugins/leaflet/leaflet.js')}}"></script>
		@vite('resources/assets/js/map-leafleft.js')

@endsection
