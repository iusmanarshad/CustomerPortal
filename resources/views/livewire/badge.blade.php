@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">BADGES</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">ELements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Badges</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- ROW-OPEN -->
					<div class="row">

						<div class="col-xl-6 col-lg-12 col-md-6">
							<div class="card" id="badge">
								<div class="card-header">
									<div class="card-title">Simple Badges</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<h1>Heading 1 <span class="badge bg-light">New</span></h1>
										<h2>Heading 2 <span class="badge bg-light">New</span></h2>
										<h3>Heading 3 <span class="badge bg-light ">New</span></h3>
										<h4>Heading 4 <span class="badge bg-light ">New</span></h4>
										<h5>Heading 5 <span class="badge bg-light ">New</span></h5>
										<h6>Heading 6 <span class="badge bg-light ">New</span></h6>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-6">
							<div class="card" id="badge1">
								<div class="card-header">
									<div class="card-title">Colored Badges</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<h1 class="tx-primary">Heading 1 <span class="badge bg-primary">New</span></h1>
										<h2 class="tx-danger">Heading 2 <span class="badge bg-danger">New</span></h2>
										<h3 class="tx-warning">Heading 3 <span class="badge bg-warning">New</span></h3>
										<h4 class="tx-success">Heading 4 <span class="badge bg-success">New</span></h4>
										<h5 class="tx-info">Heading 5 <span class="badge bg-info">New</span></h5>
										<h6 class="tx-secondary">Heading 6 <span class="badge bg-secondary">New</span></h6>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card" id="badge2">
								<div class="card-header">
									<div class="card-title">BADGES</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<span class="badge bg-primary me-1 my-2">Primary</span>
										<span class="badge bg-secondary me-1">Secondary</span>
										<span class="badge bg-success me-1">Success</span>
										<span class="badge bg-danger me-1">Danger</span>
										<span class="badge bg-warning me-1">Warning</span>
										<span class="badge bg-info me-1">Info</span>
										<span class="badge bg-light me-1">Light</span>
										<span class="badge bg-dark me-1">Dark</span>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card" id="badge12">
								<div class="card-header">
									<div class="card-title">BADGE SIZES</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<span class="badge bg-primary me-1 my-2">Primary</span>
										<span class="badge badge-sm bg-secondary me-1">Secondary</span>
										<span class="badge badge-md bg-success me-1">Success</span>
										<span class="badge badge-lg bg-danger me-1">Danger</span>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card" id="badge3">
								<div class="card-header">
									<div class="card-title">Pill Badges</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<span class="badge badge-pill bg-primary me-1 my-2">Primary</span>
										<span class="badge badge-sm badge-pill bg-secondary me-1">Secondary</span>
										<span class="badge badge-md badge-pill bg-success me-1">Success</span>
										<span class="badge badge-lg badge-pill bg-danger me-1">Danger</span>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card" id="badge13">
								<div class="card-header">
									<div class="card-title">Light Badges</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<span class="badge badge-primary-transparent me-1 my-2">Primary</span>
										<span class="badge badge-sm badge-secondary-transparent me-1">Secondary</span>
										<span class="badge badge-md badge-success-transparent me-1">Success</span>
										<span class="badge badge-lg badge-danger-transparent me-1">Danger</span>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Buttons with square Badges</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<button type="button" class="btn btn-primary mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge  bg-white ms-1">2</span>
										</button>
										<button type="button" class="btn btn-secondary  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white ms-1">1</span>
										</button>
										<button type="button" class="btn btn-success  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white ms-1">5</span>
										</button>
										<button type="button" class="btn btn-danger  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white ms-1">4</span>
										</button>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Border buttons with square Badges</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<button type="button" class="btn btn-outline-primary mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge  bg-primary ms-1">2</span>
										</button>
										<button type="button" class="btn btn-outline-success mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-success ms-1">65</span>
										</button>
										<button type="button" class="btn btn-outline-secondary   mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge  bg-secondary ms-1">1</span>
										</button>
										<button type="button" class="btn btn-outline-info  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-info ms-1">5333</span>
										</button>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Buttons with rounded Badges</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<button type="button" class="btn btn-info  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white rounded-pill ms-1">3</span>
										</button>
										<button type="button" class="btn btn-primary mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge  bg-white rounded-pill ms-1">22</span>
										</button>
										<button type="button" class="btn btn-secondary  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white rounded-pill ms-1">145</span>
										</button>
										<button type="button" class="btn btn-success  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-white rounded-pill ms-1">3225</span>
										</button>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Border buttons with rounded Badges</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<button type="button" class="btn btn-outline-primary mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge  bg-primary rounded-pill ms-1">2</span>
										</button>
										<button type="button" class="btn btn-outline-success mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-success rounded-pill ms-1">65</span>
										</button>
										<button type="button" class="btn btn-outline-secondary   mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge  bg-secondary rounded-pill ms-1">43</span>
										</button>
										<button type="button" class="btn btn-outline-info  mt-1 mb-1 me-3">
											<span>Notifications</span>
											<span class="badge bg-info rounded-pill ms-1">563</span>
										</button>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Link Badges</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<button type="button" class="btn btn-primary mt-1 mb-1 me-3">Primary <span class="badge bg-light ms-1">22</span></button>
										<button type="button" class="btn btn-success mt-1 mb-1 me-3">Success <span class="badge bg-light  ms-1">New</span></button>
										<button type="button" class="btn btn-info mt-1 mb-1 me-3">Info <span class="badge bg-light  ms-1">5</span></button>
										<button type="button" class="btn btn-warning mt-1 mb-1 me-3">Warning <span class="badge bg-light badge-light  ms-1">2</span></button>
										<button type="button" class="btn btn-danger mt-1 mb-1 me-3">Danger <span class="badge bg-light badge-pill  ms-1">Updated</span></button>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Link Badges</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<button type="button" class="btn btn-primary position-relative  me-5">
											Inbox
											<span class="badge badge-top rounded-pill bg-info">
												8
											</span>
										</button>
										<button type="button" class="btn btn-success position-relative  mb-2 mt-2  me-5">
											Inbox
											<span class="badge badge-top rounded-pill bg-warning">
												82
											</span>
										</button>
										<button type="button" class="btn btn-danger position-relative  mb-2 mt-2  me-5">
											Inbox
											<span class="badge badge-top rounded-pill bg-success">
												539
											</span>
										</button>
										<button type="button" class="btn btn-teal position-relative  mb-2 mt-2  me-5">
											Inbox
											<span class="badge badge-top rounded-pill bg-warning">
												9+
											</span>
										</button>
										<button type="button" class="btn btn-info position-relative  mb-2 mt-2  me-5">
											Inbox
											<span class="badge badge-top rounded-pill bg-danger">
												99+
											</span>
										</button>
										<button type="button" class="btn btn-warning position-relative  mb-2 mt-2  me-5">
											Inbox
											<span class="badge badge-top rounded-pill bg-primary">
												999+
											</span>
										</button>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- ROW CLOSED -->

@endsection

@section('scripts')



@endsection
