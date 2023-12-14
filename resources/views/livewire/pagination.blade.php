@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">PAGINATION</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pagination</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Pagination</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="pagination mb-0">
											<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
											<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Custom Pagination</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="pagination custom-pagination mb-0">
											<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
											<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Circled Pagination</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="pagination pagination-circled mb-0">
											<li class="page-item page-prev"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
											<li class="page-item page-number-starts active"><a class="page-link" href="javascript:void(0);">1</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fe fe-more-horizontal"></i></a></li>
											<li class="page-item page-number-ends"><a class="page-link" href="javascript:void(0);">20</a></li>
											<li class="page-item page-next"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pagination Style - 1</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="pagination pagination-style1 mb-0">
											<li class="page-item page-prev"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
											<li class="page-item thumb page-number-starts active"><a class="page-link" href="javascript:void(0);">1</a></li>
											<li class="page-item thumb"><a class="page-link" href="javascript:void(0);">2</a></li>
											<li class="page-item thumb"><a class="page-link" href="javascript:void(0);">3</a></li>
											<li class="page-item thumb"><a class="page-link" href="javascript:void(0);">4</a></li>
											<li class="page-item thumb"><a class="page-link" href="javascript:void(0);"><i class="fe fe-more-horizontal"></i></a></li>
											<li class="page-item thumb page-number-ends"><a class="page-link" href="javascript:void(0);">10</a></li>
											<li class="page-item page-next"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
										</ul>
									 </div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pagination Style - 2</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="pagination pagination-style2 mb-0">
											<li class="page-item page-prev"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
											<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fe fe-more-horizontal"></i></a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">10</a></li>
											<li class="page-item page-next"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pagination With Button</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="pagination pagination-style2 mb-0">
											<li class="page-item page-prev"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
											<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fe fe-more-horizontal"></i></a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">10</a></li>
											<li class="page-item page-next"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
											<li class="page-item pagination-jump ms-0 ms-sm-3 d-none d-sm-block">
												<div class="d-flex align-items-center">
													<span class="tx-muted me-2">Go To Page</span>
													<input type="number" class="p-1 wd-30 ht-30 radius-4 form-control">
													<a href="javascript:void(0)" class="ms-2">Go</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Colored Pagination</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="row">
											<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
												<ul class="pagination pagination-success mb-3 mb-xxl-0">
													<li class="page-item page-prev"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fe fe-more-horizontal"></i></a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">10</a></li>
													<li class="page-item page-next"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
												</ul>
											</div>
											<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
												<ul class="pagination pagination-danger mb-3 mb-xxl-0">
													<li class="page-item page-prev"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fe fe-more-horizontal"></i></a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">10</a></li>
													<li class="page-item page-next"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
												</ul>
											</div>
											<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
												<ul class="pagination pagination-light mb-3 mb-lg-0">
													<li class="page-item page-prev"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fe fe-more-horizontal"></i></a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">10</a></li>
													<li class="page-item page-next"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
												</ul>
											</div>
											<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
												<ul class="pagination pagination-dark mb-3 mb-sm-0">
													<li class="page-item page-prev"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fe fe-more-horizontal"></i></a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">10</a></li>
													<li class="page-item page-next"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pagination Sizes</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="row align-items-center">
											<div class="col-xl-4 col-lg-6 col-md-12">
												<ul class="pagination pagination-sm mb-3 mb-lg-0">
													<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
												</ul>
											</div>
											<div class="col-xl-4 col-lg-6 col-md-12">
												<ul class="pagination mb-3 mb-lg-0">
													<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
												</ul>
											</div>
											<div class="col-xl-4 col-lg-6 col-md-12">
												<ul class="pagination pagination-lg mb-3 mb-lg-0">
													<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

@endsection
