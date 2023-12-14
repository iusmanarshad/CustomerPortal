@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TOAST</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Toast</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="row">

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Example</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
											<div class="toast-header">
												<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="tx-muted me-3">5 min ago</small>
												<button aria-label="Close" class="close tx-normal" data-bs-dismiss="toast" type="button">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="toast-body">
												Hello, world! This is a toast message.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Toast With Button</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
											<div class="toast-header">
												<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="tx-muted me-3">5 min ago</small>
											</div>
											<div class="toast-body">
												<div class="btn-list">
													<a href="javascript:void(0)" class="btn btn-sm btn-primary">Take Action</a>
													<a href="javascript:void(0)" class="btn btn-sm btn-outline-danger" data-bs-dismiss="toast">Close</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Stacking</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
											<div class="toast-header">
												<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="tx-muted me-3">Just now</small>
												<button aria-label="Close" class="ms-2 mb-1 close" data-bs-dismiss="toast" type="button">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="toast-body">
												See? Just like this.
											</div>
										</div>
										<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
											<div class="toast-header">
												<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="tx-muted me-3">1 min ago</small> <button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="toast-body">
												Heads up, toasts will stack automatically.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Placement</div>
								</div>
								<div class="card-body">
									<div class="text-wrap mb-3">
										<div class="d-flex align-items-center justify-content-end">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="tx-muted me-3">Just now</small> <button aria-label="Close" class="close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
									<div class="text-wrap">
										<div class="d-flex align-items-center justify-content-center">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="tx-muted me-3">2 min ago</small> <button aria-label="Close" class="close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Color Toasts</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="row">
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show m-1" role="alert" data-bs-autohide="false">
													<div class="toast-header bg-primary text-black p-2">
														<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="me-3">11 min ago</small>
														<button aria-label="Close" class="close tx-normal" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="toast-body p-3">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show m-1" role="alert" data-bs-autohide="false">
													<div class="toast-header bg-secondary text-black p-2">
														<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="me-3">11 min ago</small>
														<button aria-label="Close" class="close tx-normal" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="toast-body p-3">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show m-1" role="alert" data-bs-autohide="false">
													<div class="toast-header bg-success text-white p-2">
														<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="me-3">11 min ago</small>
														<button aria-label="Close" class="close tx-normal" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="toast-body p-3">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show m-1" role="alert" data-bs-autohide="false">
													<div class="toast-header bg-danger text-white p-2">
														<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="me-3">11 min ago</small>
														<button aria-label="Close" class="close tx-normal" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="toast-body p-3">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Live Toast</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
										<div class="position-fixed end-0 top-0 p-3 z-9999">
											<div aria-atomic="true" aria-live="assertive" id="liveToast" class="toast fade border-primary" role="alert">
												<div class="toast-header bg-primary border-bottom-primary text-black">
													<h6 class="tx-14 mg-b-0 mg-e-auto">Notification</h6><small class="me-3">11 min ago</small>
													<button aria-label="Close" class="close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="toast-body tx-primary">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- col-end -->

					</div>

@endsection

@section('scripts')

		<!-- Internal Input tags js-->
		<script src="{{asset('build/assets/plugins/inputtags/inputtags.js')}}"></script>

        <!-- Theme Color js -->
		@vite('resources/assets/js/toast.js')

@endsection
