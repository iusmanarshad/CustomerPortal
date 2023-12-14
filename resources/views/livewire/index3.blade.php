@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">DASHBOARD</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0)">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">HRM</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-xxl-8 col-xl-12">
							<div class="row">
								<div class="col-xl-4 col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap">
												<div class="me-3">
													<div class="avatar radius-4 bg-primary-transparent">
														<i class="fa fa-users tx-primary"></i>
													</div>
												</div>
												<div class="flex-1">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
													</ul>
													<div class="mb-1">
														<p class="mb-0">Total Employees</p>
													</div>
													<div class="flex-between">
														<p class="font-weight-semibold tx-16 mb-0 numberfont">2,123</p>
														<span class="tx-12 font-weight-semibold numberfont tx-primary"><i class="fe fe-arrow-up-right me-1"></i>+12.86%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap">
												<div class="me-3">
													<div class="avatar radius-4 bg-warning-transparent">
														<i class="fa fa-user-minus tx-warning"></i>
													</div>
												</div>
												<div class="flex-1">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
													</ul>
													<div class="mb-1">
														<p class="mb-0">Employees In Leave</p>
													</div>
													<div class="flex-between">
														<p class="font-weight-semibold tx-16 mb-0 numberfont">123</p>
														<span class="tx-12 font-weight-semibold numberfont tx-warning"><i class="fe fe-arrow-down-right me-1"></i>-2.86%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap">
												<div class="me-3">
													<div class="avatar radius-4 bg-success-transparent">
														<i class="fa fa-wallet tx-success"></i>
													</div>
												</div>
												<div class="flex-1">
													<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
														<li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
													</ul>
													<div class="mb-1">
														<p class="mb-0">Total Revenue</p>
													</div>
													<div class="flex-between">
														<p class="font-weight-semibold tx-16 mb-0 numberfont">$46,392.00</p>
														<span class="tx-12 font-weight-semibold numberfont tx-success"><i class="fe fe-arrow-up-right me-1"></i>+5.60%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Monthly Report</div>
										</div>
										<div class="card-body">
											<div id="revenueReport"></div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Team Analytics
											</div>
										</div>
										<div class="card-body">
											<div class="panel tabs-style6">
												<div class="panel-head">
													<ul class="nav nav-tabs">
														<li class="nav-item flex-1"><a class="nav-link tx-14 active" data-bs-toggle="tab" href="#absentMembers"><i class="fe fe-corner-right-down me-2 tx-13"></i>Absent</a></li>
														<li class="nav-item flex-1"><a class="nav-link tx-14" data-bs-toggle="tab" href="#remoteMembers"><i class="fe fe-check-square me-2 tx-13"></i>Remote Work</a></li>
													</ul>
												</div>
												<div class="panel-body px-0 pb-0">
													<div class="tab-content">
														<div class="tab-pane active" id="absentMembers">
															<div class="table-responsive">
																<table class="table border-0 mb-0 text-nowrap">
																	<tbody>
																		<tr>
																			<th class="border-top-0 bg-black-03 br-bs-5 br-ts-5">Member</th>
																			<th class="border-top-0 bg-black-03">From</th>
																			<th class="border-top-0 bg-black-03 br-be-5 br-te-5">To</th>
																		</tr>
																		<tr>
																			<td class="border-top-0">
																				<div class="d-flex">
																					<div class="me-2">
																						<span class="avatar"><img src="{{asset('build/assets/img/users/2.jpg')}}" alt="img" class="rounded-circle"></span>
																					</div>
																					<div class="flex-1">
																						<h6 class="mb-1">Albert Dom</h6>
																						<span class="tx-muted tx-12">Sick Leave</span>
																					</div>
																				</div>
																			</td>
																			<td class="border-top-0">15-04-2022</td>
																			<td class="border-top-0">17-04-2022</td>
																		</tr>
																		<tr>
																			<td class="border-top-0">
																				<div class="d-flex">
																					<div class="me-2">
																						<span class="avatar"><img src="{{asset('build/assets/img/users/13.jpg')}}" alt="img" class="rounded-circle"></span>
																					</div>
																					<div class="flex-1">
																						<h6 class="mb-1">Vin Patrol</h6>
																						<span class="tx-muted tx-12">Casual Leave</span>
																					</div>
																				</div>
																			</td>
																			<td class="border-top-0">11-04-2022</td>
																			<td class="border-top-0">16-04-2022</td>
																		</tr>
																		<tr>
																			<td class="border-top-0">
																				<div class="d-flex">
																					<div class="me-2">
																						<span class="avatar"><img src="{{asset('build/assets/img/users/4.jpg')}}" alt="img" class="rounded-circle"></span>
																					</div>
																					<div class="flex-1">
																						<h6 class="mb-1">Rehna Beg</h6>
																						<span class="tx-muted tx-12">Sick Leave</span>
																					</div>
																				</div>
																			</td>
																			<td class="border-top-0">15-04-2022</td>
																			<td class="border-top-0">16-04-2022</td>
																		</tr>
																		<tr>
																			<td class="border-top-0">
																				<div class="d-flex">
																					<div class="me-2">
																						<span class="avatar"><img src="{{asset('build/assets/img/users/8.jpg')}}" alt="img" class="rounded-circle"></span>
																					</div>
																					<div class="flex-1">
																						<h6 class="mb-1">Arash Uytx</h6>
																						<span class="tx-muted tx-12">Casual Leave</span>
																					</div>
																				</div>
																			</td>
																			<td class="border-top-0">13-04-2022</td>
																			<td class="border-top-0">18-04-2022</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="tab-pane" id="remoteMembers">
															<div class="table-responsive">
																<table class="table border-0 mb-0 text-nowrap">
																	<tbody>
																		<tr>
																			<th class="border-top-0 bg-black-03 br-bs-5 br-ts-5">Member</th>
																			<th class="border-top-0 bg-black-03">From</th>
																			<th class="border-top-0 bg-black-03 br-be-5 br-te-5">To</th>
																		</tr>
																		<tr>
																			<td class="border-top-0">
																				<div class="d-flex">
																					<div class="me-2">
																						<span class="avatar"><img src="{{asset('build/assets/img/users/3.jpg')}}" alt="img" class="rounded-circle"></span>
																					</div>
																					<div class="flex-1">
																						<h6 class="mb-1">Krish Lwo</h6>
																						<span class="tx-muted tx-12">Work From Home</span>
																					</div>
																				</div>
																			</td>
																			<td class="border-top-0">10-01-2021</td>
																			<td class="border-top-0">30-11-2022</td>
																		</tr>
																		<tr>
																			<td class="border-top-0">
																				<div class="d-flex">
																					<div class="me-2">
																						<span class="avatar"><img src="{{asset('build/assets/img/users/11.jpg')}}" alt="img" class="rounded-circle"></span>
																					</div>
																					<div class="flex-1">
																						<h6 class="mb-1">Hank Mwi</h6>
																						<span class="tx-muted tx-12">Work From Home</span>
																					</div>
																				</div>
																			</td>
																			<td class="border-top-0">11-03-2022</td>
																			<td class="border-top-0">12-08-2022</td>
																		</tr>
																		<tr>
																			<td class="border-top-0">
																				<div class="d-flex">
																					<div class="me-2">
																						<span class="avatar"><img src="{{asset('build/assets/img/users/7.jpg')}}" alt="img" class="rounded-circle"></span>
																					</div>
																					<div class="flex-1">
																						<h6 class="mb-1">Rabbu Yar</h6>
																						<span class="tx-muted tx-12">Work From Home</span>
																					</div>
																				</div>
																			</td>
																			<td class="border-top-0">11-05-2021</td>
																			<td class="border-top-0">16-04-2022</td>
																		</tr>
																		<tr>
																			<td class="border-top-0">
																				<div class="d-flex">
																					<div class="me-2">
																						<span class="avatar"><img src="{{asset('build/assets/img/users/12.jpg')}}" alt="img" class="rounded-circle"></span>
																					</div>
																					<div class="flex-1">
																						<h6 class="mb-1">Matrix Opod</h6>
																						<span class="tx-muted tx-12">Work From Home</span>
																					</div>
																				</div>
																			</td>
																			<td class="border-top-0">17-05-2021</td>
																			<td class="border-top-0">24-04-2022</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Recently Connected
											</div>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table border-0 mb-0">
													<tbody>
														<tr>
															<th class="border-top-0 bg-black-03 br-bs-5 br-ts-5">Member</th>
															<th class="border-top-0 bg-black-03">Time</th>
															<th class="border-top-0 bg-black-03 br-be-5 br-te-5">Status</th>
														</tr>
														<tr>
															<td class="border-top-0">
																<div class="d-flex">
																	<div class="me-2">
																		<span class="avatar"><img src="{{asset('build/assets/img/users/2.jpg')}}" alt="img" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<h6 class="mb-1">Diam Ipsum</h6>
																		<span class="tx-muted tx-12">UI Developer</span>
																	</div>
																</div>
															</td>
															<td class="border-top-0">Today, 10:03</td>
															<td class="border-top-0"><span class="badge badge-success-transparent">online</span></td>
														</tr>
														<tr>
															<td class="border-top-0">
																<div class="d-flex">
																	<div class="me-2">
																		<span class="avatar"><img src="{{asset('build/assets/img/users/6.jpg')}}" alt="img" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<h6 class="mb-1">No Eirmod</h6>
																		<span class="tx-muted tx-12">Developer</span>
																	</div>
																</div>
															</td>
															<td class="border-top-0">Today, 08:38</td>
															<td class="border-top-0"><span class="badge badge-light-transparent">offline</span></td>
														</tr>
														<tr>
															<td class="border-top-0">
																<div class="d-flex">
																	<div class="me-2">
																		<span class="avatar"><img src="{{asset('build/assets/img/users/8.jpg')}}" alt="img" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<h6 class="mb-1">Eirmod Vonsetetur</h6>
																		<span class="tx-muted tx-12">Engineer</span>
																	</div>
																</div>
															</td>
															<td class="border-top-0">14-04-2022, 10:43</td>
															<td class="border-top-0"><span class="badge badge-success-transparent">online</span></td>
														</tr>
														<tr>
															<td class="border-top-0">
																<div class="d-flex">
																	<div class="me-2">
																		<span class="avatar"><img src="{{asset('build/assets/img/users/9.jpg')}}" alt="img" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<h6 class="mb-1">Est Eos</h6>
																		<span class="tx-muted tx-12">Cloud Engineer</span>
																	</div>
																</div>
															</td>
															<td class="border-top-0">13-04-2022, 15:43</td>
															<td class="border-top-0"><span class="badge badge-light-transparent">offline</span></td>
														</tr>
														<tr>
															<td class="border-top-0">
																<div class="d-flex">
																	<div class="me-2">
																		<span class="avatar"><img src="{{asset('build/assets/img/users/11.jpg')}}" alt="img" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<h6 class="mb-1">Et Duo</h6>
																		<span class="tx-muted tx-12">Cloud Engineer</span>
																	</div>
																</div>
															</td>
															<td class="border-top-0">12-04-2022, 15:43</td>
															<td class="border-top-0"><span class="badge badge-success-transparent">online</span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-12">
							<div class="row">
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Overall Target
											</div>
										</div>
										<div class="card-body">
											<div class="d-sm-flex d-block">
												<div class="me-3">
													<div class="avatar radius-4 bg-primary-gradient">
														<i class="fa fa-bullseye tx-white"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="mb-1 flex-between">
														<p class="mb-0 tx-16 font-weight-semibold numberfont">$34,234.00 <span class="tx-muted font-weight-normal">/ $121K</span></p>
														<span class="badge badge-primary-transparent">60% Reached</span>
													</div>
													<div class="progress">
														<div class="progress-bar progress-bar-sm progress-bar-striped progress-bar-animated bg-primary wd-60p ht-8" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer">
											<div class="d-flex flex-column">
												<div class="mb-1 flex-between">
													<h6 class="mb-0">Target Rate</h6>
													<p class="mb-0 tx-success numberfont font-weight-semibold tx-15"><i class="fe fe-arrow-up me-1"></i>+2.3%</p>
												</div>
												<div class="flex-between">
													<span class="badge badge-light-transparent">From Last Month</span>
													<a href="javascript:void(0);" class="tx-inverse tx-12">show analytics</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Applicants Report</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xl-4 col-sm-4">
													<div class="d-flex flex-wrap mb-sm-0 mb-2">
														<span class="avatar rounded-circle bg-primary-transparent"><i class="fe fe-box tx-primary"></i></span>
														<div class="mg-s-10">
															<p class="mb-1 font-weight-semibold">Total</p>
															<span class="tx-muted numberfont">746</span>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-sm-4">
													<div class="d-flex flex-wrap mb-sm-0 mb-2">
														<span class="avatar rounded-circle bg-warning-transparent"><i class="fe fe-user-check tx-warning"></i></span>
														<div class="mg-s-10">
															<p class="mb-1 font-weight-semibold">Selected</p>
															<span class="tx-muted numberfont">746</span>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-sm-4">
													<div class="d-flex flex-wrap mb-sm-0 mb-2">
														<span class="avatar rounded-circle bg-orange-transparent"><i class="fe fe-user-x tx-orange"></i></span>
														<div class="mg-s-10">
															<p class="mb-1 font-weight-semibold">Rejected</p>
															<span class="tx-muted numberfont">746</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title flex-between">
												Today's Events
												<a href="javascript:void(0);" class="tx-inverse font-weight-normal tx-12">View All</a>
											</div>
										</div>
										<div class="card-body">
											<ul class="list-unstyled mb-0">
												<li class="list-item">
													<div class="d-sm-flex">
														<span class="avatar"><img src="{{asset('build/assets/img/users/14.jpg')}}" alt="img" class="radius-4"></span>
														<div class="mg-sm-s-10 mt-2 mt-sm-0 flex-1">
															<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
															<ul class="dropdown-menu">
																<li class="mb-0"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
																<li class="mb-0"><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
																<li class="mb-0"><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
															</ul>
															<a href="{{url('calendar')}}" class="tx-primary tx-12 mb-0">Birthday</a>
															<div class="d-sm-flex justify-content-between align-items-end clear-end">
																<div class="mb-sm-0 mb-1">
																	<p class="mb-0 tx-14 font-weight-semibold">Robert Partick</p>
																	<span class="tx-muted tx-12">Team Member</span>
																</div>
																<div class="btn-list">
																	<a href="javascript:void(0);" class="btn btn-outline-primary btn-sm"><i class="fe fe-clock tx-13 me-1 d-inline-flex"></i>Wish Later</a>
																	<a href="javascript:void(0);" class="btn btn-primary btn-sm">
																		<svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
																		Wish Now
																	</a>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class="list-item">
													<div class="d-sm-flex">
														<span class="avatar"><img src="{{asset('build/assets/img/users/8.jpg')}}" alt="img" class="radius-4"></span>
														<div class="mg-sm-s-10 mt-2 mt-sm-0 flex-1">
															<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
															<ul class="dropdown-menu">
																<li class="mb-0"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
																<li class="mb-0"><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
																<li class="mb-0"><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
															</ul>
															<a href="{{url('calendar')}}" class="tx-primary tx-12 mb-0">Birthday</a>
															<div class="d-sm-flex justify-content-between align-items-end clear-end">
																<div class="mb-sm-0 mb-1">
																	<p class="mb-0 tx-14 font-weight-semibold">Jessica Shah</p>
																	<span class="tx-muted tx-12">Team Leader</span>
																</div>
																<div class="btn-list">
																	<a href="javascript:void(0);" class="btn btn-outline-primary btn-sm"><i class="fe fe-clock tx-13 me-1 d-inline-flex"></i>Wish Later</a>
																	<a href="javascript:void(0);" class="btn btn-primary btn-sm">
																		<svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
																		Wish Now
																	</a>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class="list-item">
													<div class="d-sm-flex">
														<span class="avatar"><img src="{{asset('build/assets/img/users/6.jpg')}}" alt="img" class="radius-4"></span>
														<div class="mg-sm-s-10 mt-2 mt-sm-0 flex-1">
															<a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
															<ul class="dropdown-menu">
																<li class="mb-0"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
																<li class="mb-0"><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
																<li class="mb-0"><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
															</ul>
															<a href="{{url('calendar')}}" class="tx-primary tx-12 mb-0">Birthday</a>
															<div class="d-sm-flex justify-content-between align-items-end clear-end">
																<div class="mb-sm-0 mb-1">
																	<p class="mb-0 tx-14 font-weight-semibold">Saji Max</p>
																	<span class="tx-muted tx-12">Team Member</span>
																</div>
																<div class="btn-list">
																	<a href="javascript:void(0);" class="btn btn-outline-primary btn-sm"><i class="fe fe-clock tx-13 me-1 d-inline-flex"></i>Wish Later</a>
																	<a href="javascript:void(0);" class="btn btn-primary btn-sm">
																		<svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
																		Wish Now
																	</a>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header flex-between">
											<div class="card-title">
												Major Requirements
											</div>
											<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">Post Now</a>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xl-4 col-sm-4">
													<div class="d-flex flex-wrap mb-sm-0 mb-2">
														<span class="avatar radius-4 bg-primary-transparent"><i class="fe fe-code tx-primary"></i></span>
														<div class="mg-s-10">
															<p class="mb-1 font-weight-semibold">Designer</p>
															<span class="tx-muted tx-12">12 Vacancies</span>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-sm-4">
													<div class="d-flex flex-wrap mb-sm-0 mb-2">
														<span class="avatar radius-4 bg-warning-transparent"><i class="fe fe-terminal tx-warning"></i></span>
														<div class="mg-s-10">
															<p class="mb-1 font-weight-semibold">Developer</p>
															<span class="tx-muted tx-12">50 Vacancies</span>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-sm-4">
													<div class="d-flex flex-wrap mb-sm-0 mb-2">
														<span class="avatar radius-4 bg-orange-transparent"><i class="fe fe-user tx-orange"></i></span>
														<div class="mg-s-10">
															<p class="mb-1 font-weight-semibold">Team Lead</p>
															<span class="tx-muted tx-12">2 Vacancies</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Employees Category
											</div>
										</div>
										<div class="card-body">
											<div class="d-flex mb-3">
												<div class="me-2">
													<div class="avatar bg-primary-transparent rounded-circle"><i class="icon ion-md-man tx-primary tx-26"></i></div>
												</div>
												<div class="flex-1">
													<div class="flex-between mb-2">
														<p class="mb-0 tx-14 text-start">Men</p>
														<span>60%</span>
													</div>
													<div class="progress">
														<div class="progress-bar ht-5 progress-bar-striped progress-bar-animated bg-primary wd-60p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
											<div class="d-flex">
												<div class="me-2">
													<div class="avatar bg-warning-transparent rounded-circle"><i class="icon ion-md-woman tx-warning tx-26"></i></div>
												</div>
												<div class="flex-1">
													<div class="flex-between mb-2">
														<p class="mb-0 tx-14 text-start">Women</p>
														<span>40%</span>
													</div>
													<div class="progress">
														<div class="progress-bar ht-5 progress-bar-striped progress-bar-animated bg-primary wd-40p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Payroll Report</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered text-nowrap mb-0" id="payrollReport">
											<thead>
												<tr>
													<th class="tx-center">S.No.</th>
													<th>Employee</th>
													<th>Department</th>
													<th>Employee Role</th>
													<th>Total Salary</th>
													<th>Total Leaves</th>
													<th>Net Salary</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="tx-center">1</td>
													<td>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar"><img src="{{asset('build/assets/img/users/2.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Robert Steeve</h6>
																<span class="tx-muted tx-12">robertsteeve112@demo.com</span>
															</div>
														</div>
													</td>
													<td>Front End</td>
													<td>UI Designer</td>
													<td>$12,000</td>
													<td>2</td>
													<td>$11,890</td>
													<td><span class="badge badge-sm badge-success-transparent rounded-pill">sent</span></td>
												</tr>
												<tr>
													<td class="tx-center">2</td>
													<td>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar"><img src="{{asset('build/assets/img/users/4.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Steeve Robert</h6>
																<span class="tx-muted tx-12">steeverobert121@demo.com</span>
															</div>
														</div>
													</td>
													<td>Front End</td>
													<td>UI Developer</td>
													<td>$15,000</td>
													<td>0</td>
													<td>$15,000</td>
													<td><span class="badge badge-sm badge-success-transparent rounded-pill">sent</span></td>
												</tr>
												<tr>
													<td class="tx-center">3</td>
													<td>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar"><img src="{{asset('build/assets/img/users/6.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Mary Rose</h6>
																<span class="tx-muted tx-12">marymary334@demo.com</span>
															</div>
														</div>
													</td>
													<td>Back End</td>
													<td>PHP Developer</td>
													<td>$22,000</td>
													<td>1</td>
													<td>$21,890</td>
													<td><span class="badge badge-sm badge-warning-transparent rounded-pill">pending</span></td>
												</tr>
												<tr>
													<td class="tx-center">4</td>
													<td>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar"><img src="{{asset('build/assets/img/users/8.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Stella Rose</h6>
																<span class="tx-muted tx-12">stellarose258@demo.com</span>
															</div>
														</div>
													</td>
													<td>Android</td>
													<td>Ionic Developer</td>
													<td>$21,500</td>
													<td>0</td>
													<td>$21,500</td>
													<td><span class="badge badge-sm badge-danger-transparent rounded-pill">technical issue</span></td>
												</tr>
												<tr>
													<td class="tx-center">5</td>
													<td>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar"><img src="{{asset('build/assets/img/users/10.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">John Abraham</h6>
																<span class="tx-muted tx-12">abrahamjohn394@demo.com</span>
															</div>
														</div>
													</td>
													<td>Front End</td>
													<td>UI Designer</td>
													<td>$12,000</td>
													<td>3</td>
													<td>$11,835</td>
													<td><span class="badge badge-sm badge-success-transparent rounded-pill">sent</span></td>
												</tr>
												<tr>
													<td class="tx-center">6</td>
													<td>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar"><img src="{{asset('build/assets/img/users/12.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Richard Bose</h6>
																<span class="tx-muted tx-12">richardrichi.1233@demo.com</span>
															</div>
														</div>
													</td>
													<td>Front End</td>
													<td>UI Developer</td>
													<td>$12,000</td>
													<td>4</td>
													<td>$11,780</td>
													<td><span class="badge badge-sm badge-warning-transparent rounded-pill">pending</span></td>
												</tr>
												<tr>
													<td class="tx-center">7</td>
													<td>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar"><img src="{{asset('build/assets/img/users/14.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Abagnale Mal</h6>
																<span class="tx-muted tx-12">abgnalemal000@demo.com</span>
															</div>
														</div>
													</td>
													<td>Back End</td>
													<td>Java Developer</td>
													<td>$25,000</td>
													<td>0</td>
													<td>$25,000</td>
													<td><span class="badge badge-sm badge-success-transparent rounded-pill">sent</span></td>
												</tr>
												<tr>
													<td class="tx-center">8</td>
													<td>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar"><img src="{{asset('build/assets/img/users/3.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Rose Mary</h6>
																<span class="tx-muted tx-12">rosemary434@demo.com</span>
															</div>
														</div>
													</td>
													<td>Back End</td>
													<td>PHP Developer</td>
													<td>$22,000</td>
													<td>0</td>
													<td>$22,000</td>
													<td><span class="badge badge-sm badge-danger-transparent rounded-pill">technical issue</span></td>
												</tr>
												<tr>
													<td class="tx-center">9</td>
													<td>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar"><img src="{{asset('build/assets/img/users/5.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Johnson Oley</h6>
																<span class="tx-muted tx-12">johnsonoley394@demo.com</span>
															</div>
														</div>
													</td>
													<td>Android</td>
													<td>Ionic Developer</td>
													<td>$21,500</td>
													<td>1</td>
													<td>$21,455</td>
													<td><span class="badge badge-sm badge-warning-transparent rounded-pill">pending</span></td>
												</tr>
												<tr>
													<td class="tx-center">10</td>
													<td>
														<div class="d-flex">
															<div class="me-2">
																<div class="avatar"><img src="{{asset('build/assets/img/users/7.jpg')}}" alt="img" class="rounded-circle"></div>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Stephen Msi</h6>
																<span class="tx-muted tx-12">stephenmsi222@demo.com</span>
															</div>
														</div>
													</td>
													<td>Back End</td>
													<td>PHP Developer</td>
													<td>$25,000</td>
													<td>0</td>
													<td>$25,000</td>
													<td><span class="badge badge-sm badge-success-transparent rounded-pill">sent</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

@endsection

@section('scripts')

		<!-- Select2 js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.full.min.js')}}"></script>

		<!-- Data tables -->
		<script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!-- Internal index js -->
		@vite('resources/assets/js/index-3.js')

@endsection
