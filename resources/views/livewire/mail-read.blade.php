@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">READ MAIL</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Read-mail</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row opened -->
					<div class="row row-sm">
						<!-- Col -->
						<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-body p-0">
									<div class="p-3 border-bottom">
										<a href="{{url('mail-compose')}}" class="btn btn-primary btn-block" id="btnCompose">Compose</a>
									</div>
									<div class="p-3 border-bottom">
										<ul class="nav nav-pills main-nav-column">
											<li class="nav-item"><a class="nav-link thumb" href="{{url('mail-inbox')}}"><i class="fe fe-mail"></i> Inbox <span class="ms-auto">10</span></a></li>
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-star"></i> Starred</a></li>
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-send"></i> Sent</a></li>
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-file"></i> Drafts <span class="ms-auto">3</span></a></li>
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-alert-triangle"></i> Spam <span class="ms-auto">15</span></a></li>
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-users"></i> Contacts <span class="ms-auto">2</span></a></li>
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-trash-2"></i> Deleted</a></li>
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);"><i class="ti ti-archive tx-15-f"></i> Archive</a></li>
										</ul>
									</div>
									<div class="p-3">
										<ul class="nav nav-pills main-nav-column">
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-help-circle"></i> Help</a></li>
											<li class="nav-item"><a class="nav-link thumb" href="{{url('mail-settings')}}"><i class="fe fe-settings"></i> Settings</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /Col -->
						<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Clita vero tempor lorem sea</div>
								</div>
								<div class="card-body">
									<div class="d-flex">
										<img alt="avatar" class="avatar rounded-circle mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/4.jpg')}}">
										<div class="flex-1 d-flex align-items-center flex-wrap flex-md-nowrap">
											<div class="ms-2 mb-1 mb-sm-0">
												<h5 class="mg-b-5">Alica Nestle <span class="tx-13 font-weight-normal"><a href="{{url('mail-compose')}}" class="tx-primary">nsdlai.rer@gmail.com</a></span></h5>
												<p class="mb-0">To: <span><a href="{{url('mail-compose')}}" class="tx-primary">asdedlai.rer@gmail.com</a></span></p>
											</div>
											<div class="ms-sm-auto ms-2 d-flex align-items-center">
												<div class="me-md-3">
													<span class="tx-muted">07 Mar 2022, 05:34 PM</span>
												</div>
												<div class="btn-list d-none d-md-flex tx-8">
													<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted" data-bs-toggle="tooltip" title="Rated"><i class="fe fe-star"></i></a>
													<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted" data-bs-toggle="tooltip" title="Reply"><i class="fe fe-corner-up-left"></i></a>
													<div class="btn btn-def btn-sm tx-muted">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical  tx-gray-600  tx-18" data-bs-toggle="tooltip" title="" data-bs-original-title="View more"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0);">Reply</a>
															<a class="dropdown-item" href="javascript:void(0);">Report Spam</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
															<a class="dropdown-item" href="javascript:void(0);">Print</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mt-5">
										<h6 class="mb-3">Hi Sir/Madam</h6>
										<p>Clita est et no tempor tempor aliquyam, et aliquyam voluptua duo labore. Sanctus sed magna et amet. Ipsum ipsum consetetur consetetur labore est sadipscing et ea eirmod. Rebum amet consetetur duo no gubergren sanctus. Erat.</p>
										<p>Erat takimata no sea ut diam voluptua et, lorem ut consetetur eirmod sadipscing et dolore vero accusam, labore nonumy no takimata clita at magna et. Dolores aliquyam ipsum est elitr. Et ipsum voluptua ut sea diam sanctus no elitr ipsum aliquyam, dolor et amet sit eirmod labore stet, sed sit.</p>
										<p>Voluptua erat et duo consetetur et et tempor. Lorem sed sed et labore duo, amet aliquyam rebum aliquyam sed kasd. Ea ut invidunt vero et.</p>
										<p class="mb-0">Thanking you Sir/Madam</p>
										<hr>
										<div class="float-end">
											<a href="javascript:void(0);" class="btn btn-sm btn-light"><i class="fe fe-download"></i></a>
										</div>
										<p>3 Attachments<a href="javascript:void(0);"> View All Images</a></p>
										<div class="d-flex flex-wrap">
											<div class="m-2">
												<a href="javascript:void(0);"><img class="wd-150 br-5 mb-2" src="{{asset('build/assets/img/photos/1.jpg')}}" alt="placeholder image"></a>
												<div class="mb-3 mb-lg-0">
													<span>1.jpg</span><small class="float-end tx-11">120 Kb</small>
												</div>
											</div>
											<div class="m-2">
												<a href="javascript:void(0);"><img class="wd-150 br-5 mb-2" src="{{asset('build/assets/img/photos/2.jpg')}}" alt="placeholder image"></a>
												<div class="mb-3 mb-lg-0">
													<span>2.jpg</span><small class="float-end tx-11">164 Kb</small>
												</div>
											</div>
											<div class="m-2">
												<a href="javascript:void(0);"><img class="wd-150 br-5 mb-2" src="{{asset('build/assets/img/photos/3.jpg')}}" alt="placeholder image"></a>
												<div class="mb-3 mb-lg-0">
													<span>3.jpg</span><small class="float-end tx-11">69 Kb</small>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<a class="btn btn-primary mt-1 mb-1" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
									<a class="btn btn-info mt-1 mb-1" href="javascript:void(0);"><i class="fa fa-share"></i> Forward</a>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!-- eva-icons js -->
		<script src="{{asset('build/assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

@endsection
