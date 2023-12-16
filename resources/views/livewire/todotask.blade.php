@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TODO TASK</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Todotask</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-body">
									<div class="panel tabs-style2">
										<div class="panel-head">
											<ul class="nav nav-tabs p-0 d-sm-flex d-block">
												<li class="nav-item ms-1 ms-sm-0"><a class="nav-link tx-14  mt-2 mg-sm-t-0 font-weight-semibold active" data-bs-toggle="tab" href="#todoTaskTab1">Overview</a></li>
												<li class="nav-item  mt-2 mg-sm-t-0"><a class="nav-link tx-14 font-weight-semibold" data-bs-toggle="tab" href="#todoTaskTab2">Tasks</a></li>
												<li class="nav-item  mt-2 mg-sm-t-0"><a class="nav-link tx-14 font-weight-semibold" data-bs-toggle="tab" href="#todoTaskTab3">Milestones</a></li>
												<li class="nav-item  mt-2 mg-sm-t-0"><a class="nav-link tx-14 font-weight-semibold" data-bs-toggle="tab" href="#todoTaskTab4">Files</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="panel-body p-0 border-0">
								<div class="tab-content">
									<div class="tab-pane active" id="todoTaskTab1">
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-xl-6">
														<div class="card">
															<div class="card-header">
																<div class="card-title">Tasks Progress</div>
															</div>
															<div class="card-body">
																<div class="row">
																	<div class="col-xl-6 col-lg-12 col-md-12">
																		<div class="mb-2">
																			<span>65% completed</span>
																			<span class="tx-muted float-end tx-11">463 / 773</span>
																		</div>
																		<div class="progress">
																			<div class="progress-bar progress-bar-striped progress-bar-animated wd-65p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																	<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
																		<div class="d-flex flex-wrap mg-xl-t-0-f mt-2">
																			<span class="avatar rounded-circle bg-primary-transparent"><i class="fe fe-briefcase tx-primary"></i></span>
																			<div class="mg-s-10">
																				<p class="mb-1 font-weight-semibold">Total Projects</p>
																				<span class="tx-muted">746</span>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
																		<div class="d-flex flex-wrap mg-xl-t-0-f mt-2">
																			<span class="avatar rounded-circle bg-secondary-transparent"><i class="fe fe-users tx-secondary"></i></span>
																			<div class="mg-s-10">
																				<p class="mb-1 font-weight-semibold">Total Clients</p>
																				<span class="tx-muted">138</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div><!-- col-end -->
													<div class="col-xl-3">
														<div class="card">
															<div class="card-header">
																<div class="card-title d-flex justify-content-between">
																	Designer Team
																	<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu tx-13">
																		<a class="dropdown-item" href="javascript:void(0);">Action</a>
																		<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																		<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																	</div>
																</div>
															</div>
															<div class="card-body">
																<div class="d-sm-flex align-items-center flex-wrap">
																	<div class="avatar-list-stacked">
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																		<div class="avatar avatar-sm bg-primary rounded-circle">+18</div>
																	</div>
																	<div class="ms-sm-auto mg-sm-t-0-f mt-2">
																		<span>Total : 25</span>
																		<span class="ms-2">Active : 24</span>
																	</div>
																</div>
															</div>
														</div>
													</div><!-- col-end -->
													<div class="col-xl-3">
														<div class="card">
															<div class="card-header">
																<div class="card-title d-flex justify-content-between">
																	Developer Team
																	<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu tx-13">
																		<a class="dropdown-item" href="javascript:void(0);">Action</a>
																		<a class="dropdown-item" href="javascript:void(0);">Another action</a>
																		<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
																	</div>
																</div>
															</div>
															<div class="card-body">
																<div class="d-sm-flex align-items-center flex-wrap">
																	<div class="avatar-list-stacked">
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																		<div class="avatar avatar-sm bg-primary rounded-circle">+5</div>
																	</div>
																	<div class="ms-sm-auto mg-sm-t-0-f mt-2">
																		<span>Total : 15</span>
																		<span class="ms-2">Active : 9</span>
																	</div>
																</div>
															</div>
														</div>
													</div><!-- col-end -->
												</div>
											</div><!-- col-end -->
											<div class="col-md-12">
												<div class="row">
													<div class="col-xl-4 col-lg-12">
														<div class="card">
															<div class="card-body">
																<div class="mb-3 d-flex">
																	<div class="flex-1">
																		<span class="tx-muted me-3 d-inline-block"><i class="fe fe-tag me-1 tx-12 d-inline-block"></i>Development</span>
																		<span class="tx-muted me-3 d-inline-block"><i class="fe fe-calendar me-1 tx-12 d-inline-block"></i>20-02-2022</span>
																		<span class="badge  badge-teal rounded-pill me-3">High Priority</span>
																	</div>
																	<a href="javascript:void(0);" class="tx-inverse ms-3" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu">
																		<a href="javascript:void(0);" class="dropdown-item">Action</a>
																		<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																		<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																	</div>
																</div>
																<div class="mb-4">
																	<h5>Server side validation</h5>
																	<p class="tx-muted">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita labore tempor et sanctus et ipsum stet, eos.</p>
																	<div class="mb-2">
																		<span>20% Completed</span>
																		<span class="tx-muted tx-11 float-end">25 / 110</span>
																	</div>
																	<div class="progress">
																		<div class="progress-bar bg-warning wd-20p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
																<div class="d-flex">
																	<div class="avatar-list-stacked">
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																		<div class="avatar avatar-sm bg-primary rounded-circle">+1</div>
																	</div>
																	<div class="ms-auto">
																		<span class="badge badge-sm badge-danger-transparent"><span class="d-sm-inline d-none">Due date:</span> 08-03-2022</span>
																	</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="d-flex align-items-center">
																	<span class="badge  badge-primary-transparent rounded-pill">In progress</span>
																	<div class="ms-auto">
																		<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-message-circle mx-1 tx-13"></i>3 <span class="d-sm-inline d-none">comments</span></a>
																		<a href="javascript:void(0);" class="tx-muted ms-3"><i class="fe fe-paperclip mx-1 tx-13"></i>2 <span class="d-sm-inline d-none">files</span></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="card">
															<div class="card-body">
																<div class="mb-3 d-flex">
																	<div class="flex-1">
																		<span class="tx-muted me-3 d-inline-block"><i class="fe fe-tag me-1 tx-12 d-inline-block"></i>Development</span>
																		<span class="tx-muted me-3 d-inline-block"><i class="fe fe-calendar me-1 tx-12 d-inline-block"></i>20-02-2022</span>
																		<span class="badge  badge-teal rounded-pill me-3">High Priority</span>
																	</div>
																	<a href="javascript:void(0);" class="tx-inverse ms-3" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu">
																		<a href="javascript:void(0);" class="dropdown-item">Action</a>
																		<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																		<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																	</div>
																</div>
																<div class="mb-4">
																	<h5>Server side validation</h5>
																	<p class="tx-muted">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita labore tempor et sanctus et ipsum stet, eos.</p>
																	<div class="mb-2">
																		<span class="tx-green">100% Completed</span>
																		<span class="tx-muted tx-11 float-end">120 / 120</span>
																	</div>
																	<div class="progress">
																		<div class="progress-bar bg-green wd-100p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
																<div class="d-flex">
																	<div class="avatar-list-stacked">
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																		<div class="avatar avatar-sm bg-primary rounded-circle">+1</div>
																	</div>
																	<div class="ms-auto">
																		<span class="badge badge-sm badge-danger-transparent"><span class="d-sm-inline d-none">Due date:</span> 08-03-2022</span>
																	</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="d-flex align-items-center">
																	<span class="badge  badge-green-transparent rounded-pill">Completed</span>
																	<div class="ms-auto">
																		<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-message-circle mx-1 tx-13"></i>3 <span class="d-sm-inline d-none">comments</span></a>
																		<a href="javascript:void(0);" class="tx-muted ms-3"><i class="fe fe-paperclip mx-1 tx-13"></i>2 <span class="d-sm-inline d-none">files</span></a>
																	</div>
																</div>
															</div>
														</div>
														<div class="card">
															<div class="card-body">
																<div class="mb-3 d-flex">
																	<div class="flex-1">
																		<span class="tx-muted me-3 d-inline-block"><i class="fe fe-tag me-1 tx-12 d-inline-block"></i>UI/UX</span>
																		<span class="tx-muted me-3 d-inline-block"><i class="fe fe-calendar me-1 tx-12 d-inline-block"></i>12-02-2022</span>
																		<span class="badge  badge-orange rounded-pill me-3">New</span>
																		<span class="badge  badge-purple rounded-pill me-3">Medium Priority</span>
																	</div>
																	<a href="javascript:void(0);" class="tx-inverse ms-3" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu">
																		<a href="javascript:void(0);" class="dropdown-item">Action</a>
																		<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																		<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																	</div>
																</div>
																<div class="mb-4">
																	<h5>Designing Landing Page</h5>
																	<p class="tx-muted">Et erat kasd dolor takimata magna. Labore sed aliquyam dolor at gubergren no takimata, amet eos et sed est.</p>
																	<div class="mb-2">
																		<span class="tx-warning">This task hasn't started yet</span>
																		<span class="tx-muted tx-11 float-end">0 / 235</span>
																	</div>
																	<div class="progress">
																		<div class="progress-bar wd-0p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
																<div class="d-flex">
																	<div class="avatar-list-stacked">
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																		<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																		<div class="avatar avatar-sm bg-primary rounded-circle">+3</div>
																	</div>
																	<div class="ms-auto">
																		<span class="badge badge-sm badge-danger-transparent"><span class="d-sm-inline d-none">Due date:</span> 28-04-2022</span>
																	</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="d-flex align-items-center">
																	<span class="badge  badge-light-transparent rounded-pill">Pending</span>
																	<div class="ms-auto">
																		<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-message-circle mx-1 tx-13"></i>3 <span class="d-sm-inline d-none">comments</span></a>
																		<a href="javascript:void(0);" class="tx-muted ms-3"><i class="fe fe-paperclip mx-1 tx-13"></i>2 <span class="d-sm-inline d-none">files</span></a>
																	</div>
																</div>
															</div>
														</div>
													</div><!-- col-end -->
													<div class="col-xl-4 col-lg-12">
														<div class="card">
															<div class="card-header">
																<div class="card-title mb-0">Other Tasks</div>
															</div>
															<div class="card-body">
																<ul class="list-unstyled mb-0">
																	<li>
																		<div class="d-flex flex-wrap">
																			<div class="align-self-start">
																				<label class="ckbox mb-0 mg-t-3 me-2"><input type="checkbox" checked><span></span></label>
																			</div>
																			<div class="flex-1 d-flex">
																				<div class="flex-1">
																					<div class="mb-2 d-sm-flex flex-wrap">
																						<div class="flex-1">
																							<p class="tx-14 font-weight-semibold mb-0"><a href="javascript:void(0);">Designing Landing Page</a></p>
																							<p class="tx-12 mb-0 tx-muted">Sit diam nonumy et amet ipsum.</p>
																						</div>
																						<div class="align-self-start">
																							<span class="badge badge-purple badge-xs rounded-pill">Medium Priority</span>
																						</div>
																					</div>
																					<div class="d-flex align-items-start flex-wrap">
																						<p class="mb-0 tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>UI/UX</p>
																						<p class="mb-0 ms-2 badge badge-xs badge-primary-transparent">In progress</p>
																						<p class="mb-0 ms-2 badge badge-xs badge-danger-transparent">22-05-22</p>
																						<p class="mb-0 ms-2"><a href="javascript:void(0);" class="tx-inverse tx-12"><i class="fe fe-message-circle mx-1 tx-11"></i>3</a></p>
																						<p class="mb-0 ms-2"><a href="javascript:void(0);" class="tx-inverse tx-12"><i class="fe fe-paperclip mx-1 tx-11"></i>2</a></p>
																					</div>
																				</div>
																				<div class="align-self-start ms-3">
																					<a href="javascript:void(0);" class="tx-inverse align-self-start" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu">
																						<a href="javascript:void(0);" class="dropdown-item">Action</a>
																						<a href="javascript:void(0);" class="dropdown-item">Another action</a>
																						<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex flex-wrap">
																			<div class="align-self-start">
																				<label class="ckbox mb-0 mg-t-3 me-2"><input type="checkbox"><span></span></label>
																			</div>
																			<div class="flex-1 d-flex">
																				<div class="flex-1">
																					<div class="mb-2 d-sm-flex flex-wrap">
																						<div class="flex-1">
																							<p class="tx-14 font-weight-semibold mb-0"><a href="javascript:void(0);">Designing Landing Page</a></p>
																							<p class="tx-12 mb-0 tx-muted">Sit diam nonumy et amet ipsum.</p>
																						</div>
																						<div class="align-self-start">
																							<span class="badge badge-teal badge-xs rounded-pill">High Priority</span>
																						</div>
																					</div>
																					<div class="d-flex align-items-start flex-wrap">
																						<p class="mb-0 tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>UI/UX</p>
																						<p class="mb-0 ms-2 badge badge-xs badge-green-transparent">Completed</p>
																						<p class="mb-0 ms-2 badge badge-xs badge-danger-transparent">09-03-22</p>
																						<p class="mb-0 ms-2"><a href="javascript:void(0);" class="tx-inverse tx-12"><i class="fe fe-message-circle mx-1 tx-11"></i>38</a></p>
																						<p class="mb-0 ms-2"><a href="javascript:void(0);" class="tx-inverse tx-12"><i class="fe fe-paperclip mx-1 tx-11"></i>1</a></p>
																					</div>
																				</div>
																				<div class="align-self-start ms-3">
																					<a href="javascript:void(0);" class="tx-inverse align-self-start" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu">
																						<a href="javascript:void(0);" class="dropdown-item">Action</a>
																						<a href="javascript:void(0);" class="dropdown-item">Another action</a>
																						<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex flex-wrap">
																			<div class="align-self-start">
																				<label class="ckbox mb-0 mg-t-3 me-2"><input type="checkbox" checked><span></span></label>
																			</div>
																			<div class="flex-1 d-flex">
																				<div class="flex-1">
																					<div class="mb-2 d-sm-flex flex-wrap">
																						<div class="flex-1">
																							<p class="tx-14 font-weight-semibold mb-0"><a href="javascript:void(0);">Designing Landing Page</a></p>
																							<p class="tx-12 mb-0 tx-muted">Sit diam nonumy et amet ipsum.</p>
																						</div>
																						<div class="align-self-start">
																							<span class="badge badge-purple badge-xs rounded-pill">Medium Priority</span>
																						</div>
																					</div>
																					<div class="d-flex align-items-start flex-wrap">
																						<p class="mb-0 tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>UI/UX</p>
																						<p class="mb-0 ms-2 badge badge-xs badge-primary-transparent">In progress</p>
																						<p class="mb-0 ms-2 badge badge-xs badge-danger-transparent">22-05-22</p>
																						<p class="mb-0 ms-2"><a href="javascript:void(0);" class="tx-inverse tx-12"><i class="fe fe-message-circle mx-1 tx-11"></i>8</a></p>
																						<p class="mb-0 ms-2"><a href="javascript:void(0);" class="tx-inverse tx-12"><i class="fe fe-paperclip mx-1 tx-11"></i>13</a></p>
																					</div>
																				</div>
																				<div class="align-self-start ms-3">
																					<a href="javascript:void(0);" class="tx-inverse align-self-start" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu">
																						<a href="javascript:void(0);" class="dropdown-item">Action</a>
																						<a href="javascript:void(0);" class="dropdown-item">Another action</a>
																						<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex flex-wrap">
																			<div class="align-self-start">
																				<label class="ckbox mb-0 mg-t-3 me-2"><input type="checkbox" checked><span></span></label>
																			</div>
																			<div class="flex-1 d-flex">
																				<div class="flex-1">
																					<div class="mb-2 d-sm-flex flex-wrap">
																						<div class="flex-1">
																							<p class="tx-14 font-weight-semibold mb-0"><a href="javascript:void(0);">Designing Landing Page</a></p>
																							<p class="tx-12 mb-0 tx-muted">Sit diam nonumy et amet ipsum.</p>
																						</div>
																						<div class="align-self-start">
																							<span class="badge badge-purple badge-xs rounded-pill">Medium Priority</span>
																						</div>
																					</div>
																					<div class="d-flex align-items-start flex-wrap">
																						<p class="mb-0 tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>UI/UX</p>
																						<p class="mb-0 ms-2 badge badge-xs badge-primary-transparent">In progress</p>
																						<p class="mb-0 ms-2 badge badge-xs badge-danger-transparent">28-05-22</p>
																						<p class="mb-0 ms-2"><a href="javascript:void(0);" class="tx-inverse tx-12"><i class="fe fe-message-circle mx-1 tx-11"></i>18</a></p>
																						<p class="mb-0 ms-2"><a href="javascript:void(0);" class="tx-inverse tx-12"><i class="fe fe-paperclip mx-1 tx-11"></i>3</a></p>
																					</div>
																				</div>
																				<div class="align-self-start ms-3">
																					<a href="javascript:void(0);" class="tx-inverse align-self-start" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu">
																						<a href="javascript:void(0);" class="dropdown-item">Action</a>
																						<a href="javascript:void(0);" class="dropdown-item">Another action</a>
																						<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex flex-wrap">
																			<div class="align-self-start">
																				<label class="ckbox mb-0 mg-t-3 me-2"><input type="checkbox"><span></span></label>
																			</div>
																			<div class="flex-1 d-flex">
																				<div class="flex-1">
																					<div class="mb-2 d-sm-flex flex-wrap">
																						<div class="flex-1">
																							<p class="tx-14 font-weight-semibold mb-0"><a href="javascript:void(0);">Designing Landing Page</a></p>
																							<p class="tx-12 mb-0 tx-muted">Sit diam nonumy et amet ipsum.</p>
																						</div>
																						<div class="align-self-start">
																							<span class="badge badge-purple badge-xs rounded-pill">Medium Priority</span>
																						</div>
																					</div>
																					<div class="d-flex align-items-start flex-wrap">
																						<p class="mb-0 tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>UI/UX</p>
																						<p class="mb-0 ms-2 badge badge-xs badge-primary-transparent">In progress</p>
																						<p class="mb-0 ms-2 badge badge-xs badge-danger-transparent">28-05-22</p>
																						<p class="mb-0 ms-2"><a href="javascript:void(0);" class="tx-inverse tx-12"><i class="fe fe-message-circle mx-1 tx-11"></i>18</a></p>
																						<p class="mb-0 ms-2"><a href="javascript:void(0);" class="tx-inverse tx-12"><i class="fe fe-paperclip mx-1 tx-11"></i>3</a></p>
																					</div>
																				</div>
																				<div class="align-self-start ms-3">
																					<a href="javascript:void(0);" class="tx-inverse align-self-start" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu">
																						<a href="javascript:void(0);" class="dropdown-item">Action</a>
																						<a href="javascript:void(0);" class="dropdown-item">Another action</a>
																						<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
														<div class="card">
															<div class="card-header">
																<div class="card-title">Messages</div>
															</div>
															<div class="card-body">
																<ul class="list-unstyled mb-0">
																	<li>
																		<div class="d-flex pos-relative">
																			<a href="{{url('chat')}}" class="masked-link"></a>
																			<div class="avatar">
																				<img src="{{asset('build/assets/img/users/12.jpg')}}" alt="img" class="rounded-circle">
																			</div>
																			<div class="ms-2 flex-1">
																				<div class="d-flex align-items-center mb-1">
																					<h6 class="mb-0">Dulcie Ssli</h6>
																					<span class="ms-auto tx-11 tx-green">Now</span>
																				</div>
																				<p class="tx-muted tx-12">Et lorem at Kasd. Nonumy voluptua ea labore ut.</p>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex pos-relative">
																			<a href="{{url('chat')}}" class="masked-link"></a>
																			<div class="avatar">
																				<img src="{{asset('build/assets/img/users/13.jpg')}}" alt="img" class="rounded-circle">
																			</div>
																			<div class="ms-2 flex-1">
																				<div class="d-flex align-items-center mb-1">
																					<h6 class="mb-0">Ray Sin</h6>
																					<span class="ms-auto tx-11 tx-muted">13:23</span>
																				</div>
																				<p class="tx-muted tx-12">Lorem dolor stet, invidunt erat stet sit dolores et et.</p>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex pos-relative">
																			<a href="{{url('chat')}}" class="masked-link"></a>
																			<div class="avatar">
																				<img src="{{asset('build/assets/img/users/14.jpg')}}" alt="img" class="rounded-circle">
																			</div>
																			<div class="ms-2 flex-1">
																				<div class="d-flex align-items-center mb-1">
																					<h6 class="mb-0">Fay Daway</h6>
																					<span class="ms-auto tx-11 tx-muted">07-03-2022</span>
																				</div>
																				<p class="tx-muted tx-12">Vero kasd vero amet sed ipsum. Ipsum eos.</p>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex pos-relative">
																			<a href="{{url('chat')}}" class="masked-link"></a>
																			<div class="avatar">
																				<img src="{{asset('build/assets/img/users/5.jpg')}}" alt="img" class="rounded-circle">
																			</div>
																			<div class="ms-2 flex-1">
																				<div class="d-flex align-items-center mb-1">
																					<h6 class="mb-0">Greg Arias</h6>
																					<span class="ms-auto tx-11 tx-muted">07-01-2022</span>
																				</div>
																				<p class="tx-muted tx-12">Sadipscing dolor dolores takimata erat et.</p>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex pos-relative">
																			<a href="{{url('chat')}}" class="masked-link"></a>
																			<div class="avatar">
																				<img src="{{asset('build/assets/img/users/12.jpg')}}" alt="img" class="rounded-circle">
																			</div>
																			<div class="ms-2 flex-1">
																				<div class="d-flex align-items-center mb-1">
																					<h6 class="mb-0">Sidl Dls</h6>
																					<span class="ms-auto tx-11 tx-muted">01-01-2022</span>
																				</div>
																				<p class="tx-muted tx-12">Et rebum ut eos stet. Erat nonumy et.</p>
																			</div>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div><!-- col-end -->
													<div class="col-xl-4 col-lg-12">
														<div class="card">
															<div class="card-header">
																<div class="card-title">Daily Tasks Report</div>
															</div>
															<div class="card-body">
																<canvas id="todoChart" class="todoChart"></canvas>
															</div>
														</div>
														<div class="card">
															<div class="card-header">
																<div class="card-title">Active Members</div>
															</div>
															<div class="card-body">
																<div class="table-responsive">
																	<table class="table border-start-0 border-end-0" id="activeMembers">
																		<thead>
																			<tr>
																				<th>Member</th>
																				<th>Duration</th>
																				<th>Status</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>
																					<div class="d-flex align-items-center">
																						<img src="{{asset('build/assets/img/users/2.jpg')}}" class="avatar-sm rounded-circle" alt="img">
																						<span class="ms-2">Ajitho Cin</span>
																					</div>
																				</td>
																				<td>
																					<span class="tx-muted">3 hours</span>
																				</td>
																				<td>
																					<span class="badge badge-sm badge-green-transparent">Online</span>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="d-flex align-items-center">
																						<img src="{{asset('build/assets/img/users/4.jpg')}}" class="avatar-sm rounded-circle" alt="img">
																						<span class="ms-2">Jack Aranda</span>
																					</div>
																				</td>
																				<td>
																					<span class="tx-muted">10 hours</span>
																				</td>
																				<td>
																					<span class="badge badge-sm badge-green-transparent">Online</span>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="d-flex align-items-center">
																						<img src="{{asset('build/assets/img/users/6.jpg')}}" class="avatar-sm rounded-circle" alt="img">
																						<span class="ms-2">Perry Scop</span>
																					</div>
																				</td>
																				<td>
																					<span class="tx-muted">5 hours</span>
																				</td>
																				<td>
																					<span class="badge badge-sm badge-light-transparent">Offline</span>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="d-flex align-items-center">
																						<img src="{{asset('build/assets/img/users/8.jpg')}}" class="avatar-sm rounded-circle" alt="img">
																						<span class="ms-2">Karen Onnabit</span>
																					</div>
																				</td>
																				<td>
																					<span class="tx-muted">5 hours</span>
																				</td>
																				<td>
																					<span class="badge badge-sm badge-green-transparent">Online</span>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="d-flex align-items-center">
																						<img src="{{asset('build/assets/img/users/10.jpg')}}" class="avatar-sm rounded-circle" alt="img">
																						<span class="ms-2">Rita Book</span>
																					</div>
																				</td>
																				<td>
																					<span class="tx-muted">20 hours</span>
																				</td>
																				<td>
																					<span class="badge badge-sm badge-light-transparent">Offline</span>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div><!-- col-end -->
												</div>
											</div><!-- col-end -->
										</div>
									</div>
									<div class="tab-pane" id="todoTaskTab2">
										<div class="row">
											<div class="col-xl-4">
												<h5>New Tasks</h5>
												<div class="card">
													<div class="card-body">
														<div class="mb-3 d-flex">
															<div class="flex-1">
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-tag me-1 tx-12 d-inline-block"></i>UI/UX</span>
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-calendar me-1 tx-12 d-inline-block"></i>12-02-2022</span>
																<span class="badge  badge-orange rounded-pill me-3">New</span>
																<span class="badge  badge-purple rounded-pill me-3">Medium Priority</span>
															</div>
															<a href="javascript:void(0);" class="tx-inverse ms-3" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu">
																<a href="javascript:void(0);" class="dropdown-item">Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
															</div>
														</div>
														<div class="mb-4">
															<h5>Designing Landing Page</h5>
															<p class="tx-muted">Et erat kasd dolor takimata magna. Labore sed aliquyam dolor at gubergren no takimata, amet eos et sed est.</p>
															<div class="mb-2">
																<span class="tx-warning">This task hasn't started yet</span>
																<span class="tx-muted tx-11 float-end">0 / 235</span>
															</div>
															<div class="progress">
																<div class="progress-bar wd-0p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="d-flex">
															<div class="avatar-list-stacked">
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																<div class="avatar avatar-sm bg-primary rounded-circle">+3</div>
															</div>
															<div class="ms-auto">
																<span class="badge badge-sm badge-danger-transparent"><span class="d-sm-inline d-none">Due date:</span> 28-04-2022</span>
															</div>
														</div>
													</div>
													<div class="card-footer">
														<div class="d-flex align-items-center">
															<span class="badge  badge-light-transparent rounded-pill">Pending</span>
															<div class="ms-auto">
																<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-message-circle mx-1 tx-13"></i>3 <span class="d-sm-inline d-none">comments</span></a>
																<a href="javascript:void(0);" class="tx-muted ms-3"><i class="fe fe-paperclip mx-1 tx-13"></i>2 <span class="d-sm-inline d-none">files</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-body">
														<div class="mb-3 d-flex">
															<div class="flex-1">
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-tag me-1 tx-12 d-inline-block"></i>UI/UX</span>
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-calendar me-1 tx-12 d-inline-block"></i>12-02-2022</span>
																<span class="badge  badge-orange rounded-pill me-3">New</span>
																<span class="badge  badge-warning rounded-pill me-3">Low Priority</span>
															</div>
															<a href="javascript:void(0);" class="tx-inverse ms-3" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu">
																<a href="javascript:void(0);" class="dropdown-item">Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
															</div>
														</div>
														<div class="mb-4">
															<h5>Designing Landing Page</h5>
															<p class="tx-muted">Et erat kasd dolor takimata magna. Labore sed aliquyam dolor at gubergren no takimata, amet eos et sed est.</p>
															<div class="mb-2">
																<span class="tx-warning">This task hasn't started yet</span>
																<span class="tx-muted tx-11 float-end">0 / 235</span>
															</div>
															<div class="progress">
																<div class="progress-bar wd-0p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="d-flex">
															<div class="avatar-list-stacked">
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																<div class="avatar avatar-sm bg-primary rounded-circle">+3</div>
															</div>
															<div class="ms-auto">
																<span class="badge badge-sm badge-danger-transparent"><span class="d-sm-inline d-none">Due date:</span> 28-04-2022</span>
															</div>
														</div>
													</div>
													<div class="card-footer">
														<div class="d-flex align-items-center">
															<span class="badge  badge-light-transparent rounded-pill">Pending</span>
															<div class="ms-auto">
																<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-message-circle mx-1 tx-13"></i>3 <span class="d-sm-inline d-none">comments</span></a>
																<a href="javascript:void(0);" class="tx-muted ms-3"><i class="fe fe-paperclip mx-1 tx-13"></i>2 <span class="d-sm-inline d-none">files</span></a>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4">
												<h5>Priority Tasks</h5>
												<div class="card">
													<div class="card-body">
														<div class="mb-3 d-flex">
															<div class="flex-1">
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-tag me-1 tx-12 d-inline-block"></i>Development</span>
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-calendar me-1 tx-12 d-inline-block"></i>20-02-2022</span>
																<span class="badge  badge-teal rounded-pill me-3">High Priority</span>
															</div>
															<a href="javascript:void(0);" class="tx-inverse ms-3" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu">
																<a href="javascript:void(0);" class="dropdown-item">Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
															</div>
														</div>
														<div class="mb-4">
															<h5>Server side validation</h5>
															<p class="tx-muted">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita labore tempor et sanctus et ipsum stet, eos.</p>
															<div class="mb-2">
																<span>20% Completed</span>
																<span class="tx-muted tx-11 float-end">25 / 110</span>
															</div>
															<div class="progress">
																<div class="progress-bar bg-warning wd-20p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="d-flex">
															<div class="avatar-list-stacked">
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																<div class="avatar avatar-sm bg-primary rounded-circle">+1</div>
															</div>
															<div class="ms-auto">
																<span class="badge badge-sm badge-danger-transparent"><span class="d-sm-inline d-none">Due date:</span> 08-03-2022</span>
															</div>
														</div>
													</div>
													<div class="card-footer">
														<div class="d-flex align-items-center">
															<span class="badge  badge-primary-transparent rounded-pill">In progress</span>
															<div class="ms-auto">
																<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-message-circle mx-1 tx-13"></i>3 <span class="d-sm-inline d-none">comments</span></a>
																<a href="javascript:void(0);" class="tx-muted ms-3"><i class="fe fe-paperclip mx-1 tx-13"></i>2 <span class="d-sm-inline d-none">files</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-body">
														<div class="mb-3 d-flex">
															<div class="flex-1">
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-tag me-1 tx-12 d-inline-block"></i>Development</span>
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-calendar me-1 tx-12 d-inline-block"></i>20-02-2022</span>
																<span class="badge  badge-teal rounded-pill me-3">High Priority</span>
															</div>
															<a href="javascript:void(0);" class="tx-inverse ms-3" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu">
																<a href="javascript:void(0);" class="dropdown-item">Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
															</div>
														</div>
														<div class="mb-4">
															<h5>Server side validation</h5>
															<p class="tx-muted">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita labore tempor et sanctus et ipsum stet, eos.</p>
															<div class="mb-2">
																<span>50% Completed</span>
																<span class="tx-muted tx-11 float-end">55 / 110</span>
															</div>
															<div class="progress">
																<div class="progress-bar bg-primary wd-50p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="d-flex">
															<div class="avatar-list-stacked">
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																<div class="avatar avatar-sm bg-primary rounded-circle">+1</div>
															</div>
															<div class="ms-auto">
																<span class="badge badge-sm badge-danger-transparent"><span class="d-sm-inline d-none">Due date:</span> 08-03-2022</span>
															</div>
														</div>
													</div>
													<div class="card-footer">
														<div class="d-flex align-items-center">
															<span class="badge  badge-primary-transparent rounded-pill">In progress</span>
															<div class="ms-auto">
																<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-message-circle mx-1 tx-13"></i>3 <span class="d-sm-inline d-none">comments</span></a>
																<a href="javascript:void(0);" class="tx-muted ms-3"><i class="fe fe-paperclip mx-1 tx-13"></i>2 <span class="d-sm-inline d-none">files</span></a>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4">
												<h5>In Progress</h5>
												<div class="card">
													<div class="card-body">
														<div class="mb-3 d-flex">
															<div class="flex-1">
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-tag me-1 tx-12 d-inline-block"></i>Development</span>
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-calendar me-1 tx-12 d-inline-block"></i>20-02-2022</span>
																<span class="badge  badge-warning rounded-pill me-3">Low Priority</span>
															</div>
															<a href="javascript:void(0);" class="tx-inverse ms-3" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu">
																<a href="javascript:void(0);" class="dropdown-item">Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
															</div>
														</div>
														<div class="mb-4">
															<h5>Server side validation</h5>
															<p class="tx-muted">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita labore tempor et sanctus et ipsum stet, eos.</p>
															<div class="mb-2">
																<span>50% Completed</span>
																<span class="tx-muted tx-11 float-end">55 / 110</span>
															</div>
															<div class="progress">
																<div class="progress-bar bg-primary wd-50p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="d-flex">
															<div class="avatar-list-stacked">
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																<div class="avatar avatar-sm bg-primary rounded-circle">+1</div>
															</div>
															<div class="ms-auto">
																<span class="badge badge-sm badge-danger-transparent"><span class="d-sm-inline d-none">Due date:</span> 08-03-2022</span>
															</div>
														</div>
													</div>
													<div class="card-footer">
														<div class="d-flex align-items-center">
															<span class="badge  badge-primary-transparent rounded-pill">In progress</span>
															<div class="ms-auto">
																<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-message-circle mx-1 tx-13"></i>3 <span class="d-sm-inline d-none">comments</span></a>
																<a href="javascript:void(0);" class="tx-muted ms-3"><i class="fe fe-paperclip mx-1 tx-13"></i>2 <span class="d-sm-inline d-none">files</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-body">
														<div class="mb-3 d-flex">
															<div class="flex-1">
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-tag me-1 tx-12 d-inline-block"></i>Development</span>
																<span class="tx-muted me-3 d-inline-block"><i class="fe fe-calendar me-1 tx-12 d-inline-block"></i>20-02-2022</span>
																<span class="badge  badge-purple rounded-pill me-3">Medium Priority</span>
															</div>
															<a href="javascript:void(0);" class="tx-inverse ms-3" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu">
																<a href="javascript:void(0);" class="dropdown-item">Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
															</div>
														</div>
														<div class="mb-4">
															<h5>Server side validation</h5>
															<p class="tx-muted">Justo kasd duo sanctus et elitr et, sed diam clita lorem sed eirmod, clita labore tempor et sanctus et ipsum stet, eos.</p>
															<div class="mb-2">
																<span>30% Completed</span>
																<span class="tx-muted tx-11 float-end">35 / 110</span>
															</div>
															<div class="progress">
																<div class="progress-bar bg-warning wd-30p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="d-flex">
															<div class="avatar-list-stacked">
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
																<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
																<div class="avatar avatar-sm bg-primary rounded-circle">+1</div>
															</div>
															<div class="ms-auto">
																<span class="badge badge-sm badge-danger-transparent"><span class="d-sm-inline d-none">Due date:</span> 08-03-2022</span>
															</div>
														</div>
													</div>
													<div class="card-footer">
														<div class="d-flex align-items-center">
															<span class="badge  badge-primary-transparent rounded-pill">In progress</span>
															<div class="ms-auto">
																<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-message-circle mx-1 tx-13"></i>3 <span class="d-sm-inline d-none">comments</span></a>
																<a href="javascript:void(0);" class="tx-muted ms-3"><i class="fe fe-paperclip mx-1 tx-13"></i>2 <span class="d-sm-inline d-none">files</span></a>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
										</div>
									</div>
									<div class="tab-pane" id="todoTaskTab3">
										<div class="row">
											<div class="col-xl-12">
												<div class="row align-items-center">
													<div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
														<div class="form-group mb-4">
															<label for="fromDate" class="form-label mt-0">From</label>
															<div class="input-group">
																<div class="input-group date" data-date-format="mm-dd-yyyy">
																	<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
																	<input class="form-control" id="fromDate" type="text" placeholder="mm-dd-yyyy">
																</div>
															</div>
														</div>
													</div><!-- col-end -->
													<div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
														<div class="form-group">
															<div class="input-group">
																<div class="input-group-text">
																	<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
																</div>
																<input type="text" class="form-control" id="toDate" placeholder="Choose date">
															</div>
														</div>
													</div><!-- col-end -->
													<div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
														<a href="javascript:void(0);" class="btn btn-primary">Apply</a>
													</div><!-- col-end -->
													<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 text-lg-end">
														<div class="btn-group mg-y-sm-0-f mg-y-10" role="group" aria-label="Basic radio toggle button group">
															<input type="radio" class="btn-check" name="milestoneLayout" id="milestoneGrid" checked="checked">
															<label class="btn btn-outline-primary mb-0" for="milestoneGrid"><i class="fe fe-grid"></i></label>

															<input type="radio" class="btn-check" name="milestoneLayout" id="milestoneList1">
															<label class="btn btn-outline-primary mb-0"><i class="fe fe-list"></i></label>
														</div>
														<div class="btn-group ms-2 mg-y-sm-0-f mg-y-10">
															<button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fe fe-clock"></i>
															</button>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item active" href="javascript:void(0);">Date</a></li>
																<li><a class="dropdown-item" href="javascript:void(0);">Name</a></li>
																<li><a class="dropdown-item" href="javascript:void(0);">Progress</a></li>
															</ul>
														</div>
													</div><!-- col-end -->
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4 col-lg-6 col-md-12">
												<div class="card">
													<div class="card-body p-0">
														<div class="d-flex">
															<div class="p-4 bg-primary text-black tx-center d-flex rounded-start">
																<div class="my-auto">
																	<span class="mb-1 op-7">Mar</span>
																	<p class="mb-0 tx-28">09</p>
																</div>
															</div>
															<div class="p-4 flex-1">
																<a href="javascript:void(0);" class="float-end tx-muted" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu">
																	<a href="javascript:void(0);" class="dropdown-item">Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																</div>
																<div class="mb-2">
																	<h5 class="mb-1">Designing Applee Logo</h5>
																	<span class="tx-muted tx-12"><i class="fe fe-tag me-1 tx-11 d-inline-flex"></i>UI/UX</span>
																</div>
																<div class="mb-1">
																	<span class="tx-muted font-weight-semibold">50% Completed</span>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-primary wd-50p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4 col-lg-6 col-md-12">
												<div class="card">
													<div class="card-body p-0">
														<div class="d-flex">
															<div class="p-4 bg-warning text-black tx-center d-flex rounded-start">
																<div class="my-auto">
																	<span class="mb-1 op-7">Mar</span>
																	<p class="mb-0 tx-28">10</p>
																</div>
															</div>
															<div class="p-4 flex-1">
																<a href="javascript:void(0);" class="float-end tx-muted" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu">
																	<a href="javascript:void(0);" class="dropdown-item">Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																</div>
																<div class="mb-2">
																	<h5 class="mb-1">Fixing Bug in Demo</h5>
																	<span class="tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>Development</span>
																</div>
																<div class="mb-1">
																	<span class="tx-muted font-weight-semibold">25% Completed</span>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-warning wd-25p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4 col-lg-6 col-md-12">
												<div class="card">
													<div class="card-body p-0">
														<div class="d-flex">
															<div class="p-4 bg-primary text-black tx-center d-flex rounded-start">
																<div class="my-auto">
																	<span class="mb-1 op-7">Mar</span>
																	<p class="mb-0 tx-28">11</p>
																</div>
															</div>
															<div class="p-4 flex-1">
																<a href="javascript:void(0);" class="float-end tx-muted" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu">
																	<a href="javascript:void(0);" class="dropdown-item">Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																</div>
																<div class="mb-2">
																	<h5 class="mb-1">Server Side Validation</h5>
																	<span class="tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>Development</span>
																</div>
																<div class="mb-1">
																	<span class="tx-muted font-weight-semibold">65% Completed</span>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-primary wd-65p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4 col-lg-6 col-md-12">
												<div class="card">
													<div class="card-body p-0">
														<div class="d-flex">
															<div class="p-4 bg-warning text-black tx-center d-flex rounded-start">
																<div class="my-auto">
																	<span class="mb-1 op-7">Mar</span>
																	<p class="mb-0 tx-28">17</p>
																</div>
															</div>
															<div class="p-4 flex-1">
																<a href="javascript:void(0);" class="float-end tx-muted" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu">
																	<a href="javascript:void(0);" class="dropdown-item">Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																</div>
																<div class="mb-2">
																	<h5 class="mb-1">Elitr Ipsum Vero Et</h5>
																	<span class="tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>Est/Sit, Dolor</span>
																</div>
																<div class="mb-1">
																	<span class="tx-muted font-weight-semibold">20% Completed</span>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-warning wd-20p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4 col-lg-6 col-md-12">
												<div class="card">
													<div class="card-body p-0">
														<div class="d-flex">
															<div class="p-4 bg-green tx-white tx-center d-flex rounded-start">
																<div class="my-auto">
																	<span class="mb-1 op-7">Mar</span>
																	<p class="mb-0 tx-28">12</p>
																</div>
															</div>
															<div class="p-4 flex-1">
																<a href="javascript:void(0);" class="float-end tx-muted" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu">
																	<a href="javascript:void(0);" class="dropdown-item">Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																</div>
																<div class="mb-2">
																	<h5 class="mb-1">Designing Wireframe</h5>
																	<span class="tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>UI/UX</span>
																</div>
																<div class="mb-1">
																	<span class="tx-muted font-weight-semibold">100% Completed</span>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-green wd-100p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4 col-lg-6 col-md-12">
												<div class="card">
													<div class="card-body p-0">
														<div class="d-flex">
															<div class="p-4 bg-primary text-black tx-center d-flex rounded-start">
																<div class="my-auto">
																	<span class="mb-1 op-7">Mar</span>
																	<p class="mb-0 tx-28">14</p>
																</div>
															</div>
															<div class="p-4 flex-1">
																<a href="javascript:void(0);" class="float-end tx-muted" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu">
																	<a href="javascript:void(0);" class="dropdown-item">Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																</div>
																<div class="mb-2">
																	<h5 class="mb-1">Accusam Diam Stet</h5>
																	<span class="tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>Rebum</span>
																</div>
																<div class="mb-1">
																	<span class="tx-muted font-weight-semibold">75% Completed</span>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-primary wd-75p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4 col-lg-6 col-md-12">
												<div class="card">
													<div class="card-body p-0">
														<div class="d-flex">
															<div class="p-4 bg-green tx-white tx-center d-flex rounded-start">
																<div class="my-auto">
																	<span class="mb-1 op-7">Mar</span>
																	<p class="mb-0 tx-28">15</p>
																</div>
															</div>
															<div class="p-4 flex-1">
																<a href="javascript:void(0);" class="float-end tx-muted" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu">
																	<a href="javascript:void(0);" class="dropdown-item">Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																</div>
																<div class="mb-2">
																	<h5 class="mb-1">Takimata Voluptua Lorem</h5>
																	<span class="tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>Diam</span>
																</div>
																<div class="mb-1">
																	<span class="tx-muted font-weight-semibold">100% Completed</span>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-green wd-100p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4 col-lg-6 col-md-12">
												<div class="card">
													<div class="card-body p-0">
														<div class="d-flex">
															<div class="p-4 bg-primary text-black tx-center d-flex rounded-start">
																<div class="my-auto">
																	<span class="mb-1 op-7">Mar</span>
																	<p class="mb-0 tx-28">16</p>
																</div>
															</div>
															<div class="p-4 flex-1">
																<a href="javascript:void(0);" class="float-end tx-muted" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu">
																	<a href="javascript:void(0);" class="dropdown-item">Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																</div>
																<div class="mb-2">
																	<h5 class="mb-1">Et Ut Vero Sea</h5>
																	<span class="tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>Sit</span>
																</div>
																<div class="mb-1">
																	<span class="tx-muted font-weight-semibold">55% Completed</span>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-primary wd-55p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
											<div class="col-xl-4 col-lg-6 col-md-12">
												<div class="card">
													<div class="card-body p-0">
														<div class="d-flex">
															<div class="p-4 bg-primary text-black tx-center d-flex rounded-start">
																<div class="my-auto">
																	<span class="mb-1 op-7">Mar</span>
																	<p class="mb-0 tx-28">13</p>
																</div>
															</div>
															<div class="p-4 flex-1">
																<a href="javascript:void(0);" class="float-end tx-muted" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu">
																	<a href="javascript:void(0);" class="dropdown-item">Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Another Action</a>
																	<a href="javascript:void(0);" class="dropdown-item">Something else here</a>
																</div>
																<div class="mb-2">
																	<h5 class="mb-1">No Sit Accusam</h5>
																	<span class="tx-muted tx-12"><i class="fe fe-tag me-1 tx-11"></i>Invidunt</span>
																</div>
																<div class="mb-1">
																	<span class="tx-muted font-weight-semibold">60% Completed</span>
																</div>
																<div class="progress">
																	<div class="progress-bar bg-primary wd-60p ht-5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
										</div>
									</div>
									<div class="tab-pane" id="todoTaskTab4">
										<div class="row">
											<div class="col-xl-12">
												<div class="card">
													<div class="card-body">
														<div class="table-responsive">
															<table class="table border-start-0 border-end-0 text-nowrap" id="todoFiles">
																<thead>
																	<tr>
																		<th>Name</th>
																		<th>Files</th>
																		<th>Task</th>
																		<th>Modified</th>
																		<th>Type</th>
																		<th>Size</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<a href="{{url('file-manager1')}}" class="d-flex align-items-center">
																				<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="wd-40 me-2">
																				<span>Sit Ea Aliquyaam</span>
																			</a>
																		</td>
																		<td>
																			<span class="tx-muted">108 files</span>
																		</td>
																		<td>
																			<span class="tx-muted">Designing Logo</span>
																		</td>
																		<td>
																			<span class="tx-muted">21-12-2021, 13:20</span>
																		</td>
																		<td>
																			<span class="tx-muted">Folder</span>
																		</td>
																		<td>
																			<span class="tx-muted">28 gb</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="{{url('file-manager1')}}" class="d-flex align-items-center">
																				<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="wd-40 me-2">
																				<span>Est Et Stet</span>
																			</a>
																		</td>
																		<td>
																			<span class="tx-muted">82 files</span>
																		</td>
																		<td>
																			<span class="tx-muted">Server Side Validation</span>
																		</td>
																		<td>
																			<span class="tx-muted">29-12-2021, 15:20</span>
																		</td>
																		<td>
																			<span class="tx-muted">Folder</span>
																		</td>
																		<td>
																			<span class="tx-muted">281 gb</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="{{url('file-manager1')}}" class="d-flex align-items-center">
																				<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="wd-40 me-2">
																				<span>Et Nonumy</span>
																			</a>
																		</td>
																		<td>
																			<span class="tx-muted">7 files</span>
																		</td>
																		<td>
																			<span class="tx-muted">Designing Wireframe</span>
																		</td>
																		<td>
																			<span class="tx-muted">30-12-2021, 01:20</span>
																		</td>
																		<td>
																			<span class="tx-muted">Folder</span>
																		</td>
																		<td>
																			<span class="tx-muted">6.5 gb</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="{{url('file-manager1')}}" class="d-flex align-items-center">
																				<img src="{{asset('build/assets/img/files/7.png')}}" alt="img" class="wd-40 me-2">
																				<span>Lorem</span>
																			</a>
																		</td>
																		<td>
																			<span class="tx-muted">1 file</span>
																		</td>
																		<td>
																			<span class="tx-muted">Amet Sed Et Sed</span>
																		</td>
																		<td>
																			<span class="tx-muted">31-01-2022, 10:25</span>
																		</td>
																		<td>
																			<span class="tx-muted">Word Document</span>
																		</td>
																		<td>
																			<span class="tx-muted">150 mb</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="{{url('file-manager1')}}" class="d-flex align-items-center">
																				<img src="{{asset('build/assets/img/files/2.png')}}" alt="img" class="wd-40 me-2">
																				<span>Sed Amet</span>
																			</a>
																		</td>
																		<td>
																			<span class="tx-muted">1 file</span>
																		</td>
																		<td>
																			<span class="tx-muted">Labore Vero Dolor</span>
																		</td>
																		<td>
																			<span class="tx-muted">021-01-2022, 08:38</span>
																		</td>
																		<td>
																			<span class="tx-muted">Pdf</span>
																		</td>
																		<td>
																			<span class="tx-muted">350 kb</span>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!--Internal  Chart.bundle js -->
		<script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- INTERNAL Select2 js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.full.min.js')}}"></script>

		<!-- Flatpickr js -->
		<script src="{{asset('build/assets/plugins/flatpickr/flatpickr.js')}}"></script>

		<!-- Internal Data tables -->
		<script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- todotask js -->
		@vite('resources/assets/js/todotask.js')

@endsection
