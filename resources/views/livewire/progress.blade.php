@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">PROGRESS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Progress</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Progress</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="progress mg-b-20">
											<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-indigo wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Striped Progress</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped progress-bar-animated wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-info wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Progress Label</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-lg bg-secondary wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-lg bg-success wd-70p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-lg bg-danger wd-80p" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-lg bg-dark wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Progressbar Style</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="progress progress-style ht-5 mb-4">
											<div class="progress-bar bg-primary wd-80p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
										<div class="progress progress-style ht-5 mb-4">
											<div class="progress-bar bg-dark wd-70p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
										<div class="progress progress-style ht-5 mb-4">
											<div class="progress-bar bg-indigo wd-60p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
										<div class="progress progress-style ht-5 mb-4">
											<div class="progress-bar bg-success wd-50p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
										<div class="progress progress-style ht-5 mb-4">
											<div class="progress-bar bg-warning wd-40p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
										<div class="progress progress-style ht-5">
											<div class="progress-bar bg-danger wd-30p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12 col-lg-12">
							<div class="card" id="progress3">
								<div class="card-header">
									<div class="card-title">Progress Sizes</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<span class="font-weight-semibold tx-muted tx-11 d-block mg-b-5">Size Super Extra Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar ht-2 wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-secondary ht-2 wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-teal ht-2 wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="font-weight-semibold tx-muted tx-11 d-block mg-t-20 mg-b-5">Size Extra Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-secondary progress-bar-xs wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-teal progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="font-weight-semibold tx-muted tx-11 d-block mg-t-20 mg-b-5">Size Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-sm wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-secondary progress-bar-sm wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-teal progress-bar-sm wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="font-weight-semibold tx-muted tx-11 d-block mg-t-20 mg-b-5">Size Normal</span>
										<div class="progress mg-b-10">
											<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-secondary wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-teal wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="font-weight-semibold tx-muted tx-11 d-block mg-t-20 mg-b-5">Size Large</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-lg wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-secondary progress-bar-lg wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-teal progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

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

@endsection
