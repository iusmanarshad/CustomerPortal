@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">COLLAPSE</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Collapse</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Example</div>
								</div>
								<div class="card-body">
									<a aria-controls="collapseExample" aria-expanded="false" class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button">Toggle Content</a>
									<div class="collapse" id="collapseExample">
										<div class="mt-4">
											Et ut diam sadipscing consetetur et ipsum dolore ea amet dolore. Elitr ut justo et est, dolores vero sed sit dolor rebum diam est. Magna magna dolor eos sed lorem sanctus ipsum, kasd et ut sadipscing tempor est, diam et.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Multiple Targets</div>
								</div>
								<div class="card-body">
									<div class="btn-list">
										<a aria-controls="multiCollapseExample1" aria-expanded="false" class="btn btn-primary mb-3 mb-xl-0" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button">Toggle First Content</a>
										<a aria-controls="multiCollapseExample2" aria-expanded="false" class="btn btn-secondary mb-3 mb-xl-0" href="#multiCollapseExample2" data-bs-toggle="collapse" role="button">Toggle Second Content</a>
										<a aria-controls="multiCollapseExample1 multiCollapseExample2" aria-expanded="false" class="btn btn-success mb-3 mb-xl-0" href=".multi-collapse" data-bs-toggle="collapse" role="button">Toggle Both Contents</a>
									</div>
									<div class="row">
										<div class="col">
											<div class="collapse multi-collapse" id="multiCollapseExample1">
												<div class="mt-4">
													Sanctus sit eirmod aliquyam stet eirmod justo rebum dolore, amet dolor voluptua voluptua accusam justo dolores ut. Sea sit magna ut clita justo vero amet, consetetur invidunt justo takimata sit eos elitr, tempor stet sea sanctus nonumy eos magna erat,.
												</div>
											</div>
										</div>
										<div class="col">
											<div class="collapse multi-collapse" id="multiCollapseExample2">
												<div class="mt-4">
													Est clita sed tempor diam et no gubergren ipsum elitr duo. Eos eos eirmod et kasd dolore amet. At amet ipsum dolores dolor ut. Sadipscing lorem sea eos et. Erat aliquyam magna sed nonumy sed ut, clita diam ut diam.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!-- Ionicons js -->
		<script src="{{asset('build/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- eva-icons js -->
		<script src="{{asset('build/assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

		<!-- Internal Owl Carousel js-->
		<script src="{{asset('build/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>

@endsection
