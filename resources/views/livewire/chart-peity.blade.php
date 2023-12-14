@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">PEITY CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Peity Charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap">
										<div>
											<span class="peity-line" data-peity='{ "fill": false, "stroke": "#4deeea", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-s-30 mg-t-10 mg-sm-t-0-f">
											<span class="peity-line" data-peity='{ "fill": false, "stroke": "#ffda82", "height": 70, "width": 200 }'>-10,-4,-4,-7,-5,-9,-10,-1,-4,-4,-7,-5,-9,-10</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-->
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Area Chart</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap">
										<div>
											<span class="peity-line" data-peity='{ "fill": "rgba(79, 183, 227,.2)", "stroke": "#4deeea", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-s-30 mg-t-10 mg-sm-t-0-f">
											<span class="peity-line" data-peity='{ "fill": "rgba(255, 218, 130,.2)", "stroke": "#ffda82", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pie Chart</div>
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap">
										<div class="mg-e-20 my-1">
											<span class="peity-pie" data-peity='{ "fill": ["#4deeea", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>1/5</span>
										</div>
										<div class="mg-e-20 my-1">
											<span class="peity-pie" data-peity='{ "fill": ["#fd9caf", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>226/360</span>
										</div>
										<div class="mg-e-20 my-1">
											<span class="peity-pie" data-peity='{ "fill": ["#ffda82", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>0.52/1.561</span>
										</div>
										<div class="mg-e-20 my-1">
											<span class="peity-pie" data-peity='{ "fill": ["#2dce89 ", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>1,4</span>
										</div>
										<div class="mg-e-20 my-1">
											<span class="peity-pie" data-peity='{ "fill": ["#4ac9bd", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>226,134</span>
										</div>
										<div class="mg-e-20 my-1">
											<span class="peity-pie" data-peity='{ "fill": ["#ffc107", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>0.52,1.041</span>
										</div>
										<div class="mg-e-0 my-1">
											<span class="peity-pie" data-peity='{ "fill": ["#ffda82","#fd9caf","#4deeea"], "height": 70, "width": 70 }'>10,4,4</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Donut Chart</div>
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap">
										<div class="mg-e-20 my-1">
											<span class="peity-donut" data-peity='{ "fill": ["#4deeea", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>1/5</span>
										</div>
										<div class="mg-e-20 my-1">
											<span class="peity-donut" data-peity='{ "fill": ["#fd9caf", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>226/360</span>
										</div>
										<div class="mg-e-20 my-1">
											<span class="peity-donut" data-peity='{ "fill": ["#ffda82", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>0.52/1.561</span>
										</div>
										<div class="mg-e-20 my-1">
											<span class="peity-donut" data-peity='{ "fill": ["#2dce89 ", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>1,4</span>
										</div>
										<div class="mg-e-20 my-1">
											<span class="peity-donut" data-peity='{ "fill": ["#4ac9bd", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>226,134</span>
										</div>
										<div class="mg-e-20 my-1">
											<span class="peity-donut" data-peity='{ "fill": ["#ffc107", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70 }'>0.52,1.041</span>
										</div>
										<div class="mg-e-0 my-1">
											<span class="peity-donut" data-peity='{ "fill": ["#ffda82","#fd9caf","#4deeea"], "height": 70, "width": 70 }'>10,4,4</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Data Attributes</div>
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap">
										<div class="mg-e-10 my-1">
											<p class="data-attributes mb-0">
												<span data-peity='{ "fill": ["#4deeea", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70, "innerRadius": 10, "radius": 40 }'>1/7</span>
											</p>
										</div>
										<div class="mg-e-10 my-1">
											<p class="data-attributes mb-0">
												<span data-peity='{ "fill": ["#ffda82", "rgba(67, 87, 133, .09)"],"height": 70, "width": 70, "innerRadius": 14, "radius": 36 }'>2/7</span>
											</p>
										</div>
										<div class="mg-e-10 my-1">
											<p class="data-attributes mb-0">
												<span data-peity='{ "fill": ["#2dce89", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70, "innerRadius": 16, "radius": 32 }'>3/7</span>
											</p>
										</div>
										<div class="mg-e-10 my-1">
											<p class="data-attributes mb-0">
												<span data-peity='{ "fill": ["#4ac9bd ", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70, "innerRadius": 18, "radius": 28 }'>4/7</span>
											</p>
										</div>
										<div class="mg-e-10 my-1">
											<p class="data-attributes mb-0">
												<span data-peity='{ "fill": ["#ffc107", "rgba(67, 87, 133, .09)"], "height": 70, "width": 70, "innerRadius": 20, "radius": 24 }'>5/7</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="d-lg-flex flex-wrap">
										<div class="mg-e-10 my-1 wd-250 border pd-x-20 pd-t-20 bg-light">
											<span class="peity-bar" data-peity='{ "fill": ["#4deeea"], "height": 70, "width": 150 }'>10,4,4,7,5,9,10,5,4,4</span>
										</div>
										<div class="mg-e-10 my-1 wd-250 border pd-x-20 pd-t-20 bg-light">
											<span class="peity-bar" data-peity='{ "fill": ["#ffda82","#4deeea"], "height": 70, "width": 150 }'>10,4,4,7,5,9,10,5,4.7</span>
										</div>
									</div>
									<div class="d-lg-flex">
										<div class="mg-e-10 my-1 wd-250 border pd-x-20 pd-b-20 bg-light">
											<span class="peity-bar" data-peity='{ "fill": ["#4deeea"], "height": 70, "width": 150 }'>-10,-12,-12,-7,-5,-9,-10,-5,-13,-12</span>
										</div>
										<div class="mg-e-10 my-1 wd-250 border pd-x-20 pd-b-20 bg-light">
											<span class="peity-bar" data-peity='{ "fill": ["#4deeea","#ffda82"], "height": 70, "width": 150 }'>-10,-12,-12,-7,-5,-9,-10,-5,-13,-12</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-->
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!-- jQuery Peity js -->
		<script src="{{asset('build/assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- Internal Peity js -->
		@vite('resources/assets/js/chart.peity.js')

@endsection
