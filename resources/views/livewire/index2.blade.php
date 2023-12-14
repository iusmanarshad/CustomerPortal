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
								<li class="breadcrumb-item active" aria-current="page">Projects</li>
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
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar radius-4 bg-primary-transparent">
														<i class="fa fa-briefcase tx-primary"></i>
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
														<p class="mb-0">Total Projects</p>
													</div>
													<div class="flex-between">
														<p class="font-weight-semibold tx-16 mb-0 numberfont">2,123</p>
														<span class="badge badge-primary-transparent">This Month</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar radius-4 bg-warning-transparent">
														<i class="fa fa-play tx-warning"></i>
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
														<p class="mb-0">On Going</p>
													</div>
													<div class="flex-between">
														<p class="font-weight-semibold tx-16 mb-0 numberfont">1,039</p>
														<span class="badge badge-warning-transparent">This Month</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar radius-4 bg-success-transparent">
														<i class="fa fa-cube tx-success"></i>
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
														<p class="mb-0">Upcoming</p>
													</div>
													<div class="flex-between">
														<p class="font-weight-semibold tx-16 mb-0 numberfont">1,024</p>
														<span class="badge badge-success-transparent">Next Month</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Project Report</div>
										</div>
										<div class="card-body">
											<div class="mt-3" id="projectReport"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title flex-between">
										Today's Progress
										<div class="btn-list d-flex">
											<a href="javascript:void(0);" data-bs-toggle="tooltip" title="Close Project" class="btn btn-circle-sm btn-outline-danger flex-center"><i class="fe fe-power tx-12"></i></a>
											<a href="javascript:void(0);" data-bs-toggle="tooltip" title="View Project" class="btn btn-circle-sm btn-primary flex-center"><i class="fe fe-eye tx-12"></i></a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-12">
											<div class="mb-2">
												<span class="tx-14">65% completed</span>
											</div>
											<div class="progress mb-4">
												<div class="progress-bar progress-bar-striped progress-bar-animated wd-65p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="d-flex flex-wrap mg-xl-t-0-f mt-2">
												<span class="avatar rounded-circle bg-primary-transparent"><i class="fe fe-file tx-primary"></i></span>
												<div class="mg-s-10">
													<p class="mb-1 font-weight-semibold">Total Tasks</p>
													<span class="tx-muted numberfont">746</span>
												</div>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="d-flex flex-wrap mg-xl-t-0-f mt-2">
												<span class="avatar rounded-circle bg-secondary-transparent"><i class="fe fe-check-square tx-secondary"></i></span>
												<div class="mg-s-10">
													<p class="mb-1 font-weight-semibold">Completed Tasks</p>
													<span class="tx-muted numberfont">138</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header flex-between">
									<div class="card-title">
										Ongoing Tasks
									</div>
									<a href="{{url('todotask')}}" class="tx-inverse font-weight-normal tx-12">View All</a>
								</div>
								<div class="card-body">
									<ul class="list-unstyled mb-0">
										<li class="list-item">
											<div class="d-flex">
												<div class="me-2 my-auto">
													<div class="avatar radius-7 bg-primary-transparent">
														<i class="fe fe-monitor tx-primary"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="d-flex justify-content-between mb-1">
														<p class="tx-14 mb-0 me-1">Designing a Landing Page</p>
														<label class="ckbox mb-0 mg-t-3 me-2 min-w-fit-content"><input type="checkbox"><span></span></label>
													</div>
													<div class="flex-between">
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></span>
															<span class="avatar avatar-xs bg-primary rounded-circle">+8</span>
														</span>
														<span class="badge badge-sm badge-danger-transparent me-1 min-w-fit-cotent">14-04-22</span>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex">
												<div class="me-2 my-auto">
													<div class="avatar radius-7 bg-warning-transparent">
														<i class="fe fe-code tx-warning"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="d-flex justify-content-between mb-1">
														<p class="tx-14 mb-0 me-1">Fixing Responsive Issues</p>
														<label class="ckbox mb-0 mg-t-3 me-2 min-w-fit-content"><input type="checkbox"><span></span></label>
													</div>
													<div class="flex-between">
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/9.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></span>
														</span>
														<span class="badge badge-sm badge-danger-transparent me-1 min-w-fit-cotent">16-04-22</span>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex">
												<div class="me-2 my-auto">
													<div class="avatar radius-7 bg-orange-transparent">
														<i class="fe fe-airplay tx-orange"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="d-flex justify-content-between mb-1">
														<p class="tx-14 mb-0 me-1">Creating Home Page For Project</p>
														<label class="ckbox mb-0 mg-t-3 me-2 min-w-fit-content"><input type="checkbox"><span></span></label>
													</div>
													<div class="flex-between">
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}"></span>
														</span>
														<span class="badge badge-sm badge-danger-transparent me-1 min-w-fit-cotent">15-04-22</span>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex">
												<div class="me-2 my-auto">
													<div class="avatar radius-7 bg-green-transparent">
														<i class="fe fe-terminal tx-green"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="d-flex justify-content-between mb-1">
														<p class="tx-14 mb-0 me-1">Fixing Bugs In At sit Project</p>
														<label class="ckbox mb-0 mg-t-3 me-2 min-w-fit-content"><input type="checkbox"><span></span></label>
													</div>
													<div class="flex-between">
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/13.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}"></span>
														</span>
														<span class="badge badge-sm badge-danger-transparent me-1 min-w-fit-cotent">18-04-22</span>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xxl-4 col-xl-6 col-lg-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Recent Activity</div>
								</div>
								<div class="card-body py-4">
									<ul class="list-unstyled mb-0 recent-activity-1">
										<li class="list-item">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar bg-primary-gradient rounded-circle"><i class="fe fe-package tx-white"></i></div>
												</div>
												<div class="flex-1">
													<p class="tx-14 mb-1">New project created <a href="javascript:void(0);" class="tx-primary font-weight-semibold">Demo Project</a>.</p>
													<span class="tx-muted tx-11">13 Apr 2022</span>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar bg-secondary-gradient rounded-circle"><i class="fe fe-file tx-white"></i></div>
												</div>
												<div class="flex-1">
													<p class="tx-14 mb-1">New Task Generated <a href="{{url('todotask')}}" class="tx-primary font-weight-semibold">My Task</a>.</p>
													<span class="tx-muted tx-11">12 Apr 2022</span>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar bg-orange-gradient rounded-circle"><i class="fe fe-user tx-white"></i></div>
												</div>
												<div class="flex-1">
													<p class="tx-14 mb-1"><a href="javascript:void(0);" class="tx-primary font-weight-semibold">Adam Shah</a> commented on a project <a href="javascript:void(0);" class="tx-primary font-weight-semibold">Landig Project</a>.</p>
													<span class="tx-muted tx-11">11 Apr 2022</span>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex">
												<div class="me-3">
													<div class="avatar bg-success-gradient rounded-circle"><i class="fe fe-file tx-white"></i></div>
												</div>
												<div class="flex-1">
													<p class="tx-14 mb-1">New task generated <a href="{{url('todotask')}}" class="tx-primary font-weight-semibold">Demo Task</a>.</p>
													<span class="tx-muted tx-11">01 Apr 2022</span>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex">
												<div class="me-2">
													<div class="avatar bg-purple-gradient rounded-circle"><i class="fe fe-package tx-white"></i></div>
												</div>
												<div class="flex-1">
													<p class="tx-14 mb-1">New project has been created by <a href="javascript:void(0);" class="tx-primary font-weight-semibold">Levine Monk</a></p>
													<span class="tx-muted tx-11">11 Mar 2022</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-6 col-lg-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Upcoming Shedules</div>
								</div>
								<div class="card-body py-4">
									<ul class="list-unstyled mb-0">
										<li class="list-item">
											<div class="d-sm-flex align-items-center">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar flex-column radius-7 tx-center bg-primary-transparent tx-primary tx-12 font-weight-semibold">
														<span>14</span>
														<span>Apr</span>
													</div>
												</div>
												<div class="flex-1 d-sm-flex justify-content-between">
													<div class="me-sm-1 mb-1 mb-sm-0">
														<p class="mb-sm-1 mb-0 tx-14 font-weight-semibold">Meeting with client</p>
														<span class="tx-muted">video conference</span>
													</div>
													<div class="min-w-fit-content font-weight-semibold d-inline-flex">
														<span class="tx-muted"><i class="fe fe-clock me-1 tx-13 d-inline-flex"></i>09:00</span>
														<span class="mx-2">To</span>
														<span class="tx-muted"><i class="fe fe-clock me-1 tx-13 d-inline-flex"></i>12:00</span>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-sm-flex align-items-center">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar flex-column radius-7 tx-center bg-secondary-transparent tx-secondary tx-12 font-weight-semibold">
														<span>15</span>
														<span>Apr</span>
													</div>
												</div>
												<div class="flex-1 d-sm-flex justify-content-between">
													<div class="me-sm-1 mb-1 mb-sm-0">
														<p class="mb-sm-1 mb-0 tx-14 font-weight-semibold">Jack's Birthday</p>
														<span class="tx-muted">Down Town</span>
													</div>
													<div class="min-w-fit-content font-weight-semibold d-inline-flex">
														<span class="tx-muted"><i class="fe fe-clock me-1 tx-13 d-inline-flex"></i>08:00</span>
														<span class="mx-2">To</span>
														<span class="tx-muted"><i class="fe fe-clock me-1 tx-13 d-inline-flex"></i>13:00</span>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-sm-flex align-items-center">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar flex-column radius-7 tx-center bg-orange-transparent tx-orange tx-12 font-weight-semibold">
														<span>16</span>
														<span>Mar</span>
													</div>
												</div>
												<div class="flex-1 d-sm-flex justify-content-between">
													<div class="me-sm-1 mb-1 mb-sm-0">
														<p class="mb-sm-1 mb-0 tx-14 font-weight-semibold">Lunch with team members</p>
														<span class="tx-muted">Labore nonumy eos</span>
													</div>
													<div class="min-w-fit-content font-weight-semibold d-inline-flex">
														<span class="tx-muted"><i class="fe fe-clock me-1 tx-13 d-inline-flex"></i>12:45</span>
														<span class="mx-2">To</span>
														<span class="tx-muted"><i class="fe fe-clock me-1 tx-13 d-inline-flex"></i>13:35</span>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-sm-flex align-items-center">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar flex-column radius-7 tx-center bg-success-transparent tx-success tx-12 font-weight-semibold">
														<span>18</span>
														<span>May</span>
													</div>
												</div>
												<div class="flex-1 d-sm-flex justify-content-between">
													<div class="me-sm-1 mb-1 mb-sm-0">
														<p class="mb-sm-1 mb-0 tx-14 font-weight-semibold">Meeting with client</p>
														<span class="tx-muted">video conference</span>
													</div>
													<div class="min-w-fit-content font-weight-semibold d-inline-flex">
														<span class="tx-muted"><i class="fe fe-clock me-1 tx-13 d-inline-flex"></i>09:30</span>
														<span class="mx-2">To</span>
														<span class="tx-muted"><i class="fe fe-clock me-1 tx-13 d-inline-flex"></i>10:45</span>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-sm-flex align-items-center">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar flex-column radius-7 tx-center bg-purple-transparent tx-purple tx-12 font-weight-semibold">
														<span>24</span>
														<span>May</span>
													</div>
												</div>
												<div class="flex-1 d-sm-flex justify-content-between">
													<div class="me-sm-1 mb-1 mb-sm-0">
														<p class="mb-sm-1 mb-0 tx-14 font-weight-semibold">Group Discussion With Agents</p>
														<span class="tx-muted">Golden Park</span>
													</div>
													<div class="min-w-fit-content font-weight-semibold d-inline-flex">
														<span class="tx-muted"><i class="fe fe-clock me-1 tx-13 d-inline-flex"></i>19:00</span>
														<span class="mx-2">To</span>
														<span class="tx-muted"><i class="fe fe-clock me-1 tx-13 d-inline-flex"></i>19:30</span>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Team Members</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<th class="border-top-0 bg-black-03 br-bs-5 br-ts-5">Member</th>
													<th class="border-top-0 bg-black-03">Tasks</th>
													<th class="border-top-0 bg-black-03 br-be-5 br-te-5">Status</th>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<span class="avatar"><img src="{{asset('build/assets/img/users/2.jpg')}}" alt="img" class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Albert Dom</h6>
																<span class="tx-muted">albertdom1116@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0 numberfont">152</td>
													<td class="border-top-0"><span class="badge badge-green-transparent">online</span></td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<span class="avatar bg-primary-transparent rounded-circle"><i class="fa fa-user tx-primary"></i></span>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Hannu Tax</h6>
																<span class="tx-muted">hannu393@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0 numberfont">138</td>
													<td class="border-top-0"><span class="badge badge-green-transparent">online</span></td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<span class="avatar"><img src="{{asset('build/assets/img/users/6.jpg')}}" alt="img" class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Asif Xat</h6>
																<span class="tx-muted">asif394@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0 numberfont">381</td>
													<td class="border-top-0"><span class="badge badge-light-transparent">offline</span></td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex">
															<div class="me-2">
																<span class="avatar bg-secondary-transparent rounded-circle"><i class="fa fa-user tx-secondary"></i></span>
															</div>
															<div class="flex-1">
																<h6 class="mb-1">Aisha Ray</h6>
																<span class="tx-muted">aisha852@demo.com</span>
															</div>
														</div>
													</td>
													<td class="border-top-0 numberfont">831</td>
													<td class="border-top-0"><span class="badge badge-green-transparent">online</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Project Summary</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered text-nowrap mb-0" id="projectSummary">
											<thead>
												<tr>
													<th class="wd-5p tx-center">S.No.</th>
													<th class="wd-25p">Title</th>
													<th class="wd-15p">Assigned To</th>
													<th>Progress</th>
													<th>Status</th>
													<th>Due Date</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="tx-center">1</td>
													<td><span class="tx-14">Home Page</span></td>
													<td>
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></span>
															<span class="avatar avatar-xs bg-primary rounded-circle">+8</span>
														</span>
													</td>
													<td>
														<div class="wd-65p">
															<div class="flex-between mb-1">
																<p class="mb-0">25%</p>
																<span class="tx-muted tx-12">12/45</span>
															</div>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-bar-animated wd-25p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
													<td><span class="badge badge-sm rounded-pill badge-warning-transparent">in progress</span></td>
													<td>14-04-2022</td>
												</tr>
												<tr>
													<td class="tx-center">2</td>
													<td><span class="tx-14">Landing Design</span></td>
													<td>
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}"></span>
														</span>
													</td>
													<td>
														<div class="wd-65p">
															<div class="flex-between mb-1">
																<p class="mb-0">95%</p>
																<span class="tx-muted tx-12">45/50</span>
															</div>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-bar-animated wd-95p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
													<td><span class="badge badge-sm rounded-pill badge-warning-transparent">in progress</span></td>
													<td>20-04-2022</td>
												</tr>
												<tr>
													<td class="tx-center">3</td>
													<td><span class="tx-14">New Template Design</span></td>
													<td>
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></span>
														</span>
													</td>
													<td>
														<div class="wd-65p">
															<div class="flex-between mb-1">
																<p class="mb-0">0%</p>
																<span class="tx-muted tx-12">0/36</span>
															</div>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-bar-animated wd-0p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
													<td><span class="badge badge-sm rounded-pill badge-danger-transparent">pending</span></td>
													<td>29-05-2022</td>
												</tr>
												<tr>
													<td class="tx-center">4</td>
													<td><span class="tx-14">HR Management Template Design</span></td>
													<td>
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/9.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></span>
															<span class="avatar avatar-xs bg-primary rounded-circle">+2</span>
														</span>
													</td>
													<td>
														<div class="wd-65p">
															<div class="flex-between mb-1">
																<p class="mb-0">35%</p>
																<span class="tx-muted tx-12">22/71</span>
															</div>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-bar-animated wd-35p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
													<td><span class="badge badge-sm rounded-pill badge-warning-transparent">in progress</span></td>
													<td>18-04-2022</td>
												</tr>
												<tr>
													<td class="tx-center">5</td>
													<td><span class="tx-14">Designing New Template</span></td>
													<td>
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></span>
															<span class="avatar avatar-xs bg-primary rounded-circle">+6</span>
														</span>
													</td>
													<td>
														<div class="wd-65p">
															<div class="flex-between mb-1">
																<p class="mb-0">100%</p>
																<span class="tx-muted tx-12">171/171</span>
															</div>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-bar-animated wd-100p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
													<td><span class="badge badge-sm rounded-pill badge-success-transparent">completed</span></td>
													<td>11-04-2022</td>
												</tr>
												<tr>
													<td class="tx-center">6</td>
													<td><span class="tx-14">Documentation Project</span></td>
													<td>
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/5.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/9.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/11.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/13.jpg')}}"></span>
														</span>
													</td>
													<td>
														<div class="wd-65p">
															<div class="flex-between mb-1">
																<p class="mb-0">50%</p>
																<span class="tx-muted tx-12">30/60</span>
															</div>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-bar-animated wd-50p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
													<td><span class="badge badge-sm rounded-pill badge-warning-transparent">in progress</span></td>
													<td>18-04-2022</td>
												</tr>
												<tr>
													<td class="tx-center">7</td>
													<td><span class="tx-14">Developing Backend</span></td>
													<td>
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/13.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/15.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/17.jpg')}}"></span>
															<span class="avatar avatar-xs bg-primary rounded-circle">+3</span>
														</span>
													</td>
													<td>
														<div class="wd-65p">
															<div class="flex-between mb-1">
																<p class="mb-0">100%</p>
																<span class="tx-muted tx-12">85/85</span>
															</div>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-bar-animated wd-100p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
													<td><span class="badge badge-sm rounded-pill badge-success-transparent">completed</span></td>
													<td>12-04-2022</td>
												</tr>
												<tr>
													<td class="tx-center">8</td>
													<td><span class="tx-14">Multipurpose Dashboard Template</span></td>
													<td>
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></span>
														</span>
													</td>
													<td>
														<div class="wd-65p">
															<div class="flex-between mb-1">
																<p class="mb-0">0%</p>
																<span class="tx-muted tx-12">0/77</span>
															</div>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-bar-animated wd-0p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
													<td><span class="badge badge-sm rounded-pill badge-danger-transparent">pending</span></td>
													<td>16-05-2022</td>
												</tr>
												<tr>
													<td class="tx-center">9</td>
													<td><span class="tx-14">Design New Dashboard Template</span></td>
													<td>
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/5.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}"></span>
															<span class="avatar avatar-xs bg-primary rounded-circle">+5</span>
														</span>
													</td>
													<td>
														<div class="wd-65p">
															<div class="flex-between mb-1">
																<p class="mb-0">30%</p>
																<span class="tx-muted tx-12">25/84</span>
															</div>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-bar-animated wd-30p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
													<td><span class="badge badge-sm rounded-pill badge-warning-transparent">in progress</span></td>
													<td>15-04-2022</td>
												</tr>
												<tr>
													<td class="tx-center">10</td>
													<td><span class="tx-14">Server Side Validation</span></td>
													<td>
														<span class="avatar-list-stacked me-1">
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/11.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}"></span>
															<span class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></span>
															<span class="avatar avatar-xs bg-primary rounded-circle">+2</span>
														</span>
													</td>
													<td>
														<div class="wd-65p">
															<div class="flex-between mb-1">
																<p class="mb-0">80%</p>
																<span class="tx-muted tx-12">101/120</span>
															</div>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-bar-animated wd-80p ht-7" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
													<td><span class="badge badge-sm rounded-pill badge-warning-transparent">in progress</span></td>
													<td>17-04-2022</td>
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
		@vite('resources/assets/js/index-2.js')

@endsection
