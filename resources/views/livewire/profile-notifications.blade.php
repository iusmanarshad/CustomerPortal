@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">NOTIFICATIONS LIST</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Notifications List</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- container -->
					<div class="container">
						<ul class="notification contents">
							<li>
								<div class="notification-time">
									<span class="date">Friday</span>
									<span class="time">11:11</span>
								</div>
								<div class="notification-icon">
									<a href="javascript:void(0);"></a>
								</div>
								<div class="notification-body">
									<div class="d-flex mt-sm-0 mt-4">
										<div class="avatar avatar-status me-3">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></a>
										</div>
										<div class="flex-1">
											<div class="d-flex">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Ray Manta</h5>
													<p class="mb-0 tx-13 mb-0 tx-muted">Project assigned by the manager all<span class="badge badge-primary-transparent tx-12 font-weight-semibold text-primiary ms-1 me-1">files</span>and<span class="badge badge-primary-transparent tx-primary tx-12 font-weight-semibold ms-1 me-1">folders</span>were included</p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">11, Mar 2022</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="notification-time">
									<span class="date">Saturday</span>
									<span class="time">09:15</span>
								</div>
								<div class="notification-icon">
									<a href="javascript:void(0);"></a>
								</div>
								<div class="notification-body">
									<div class="d-flex mt-sm-0 mt-4">
										<div class="avatar avatar-status offline mb-3  me-3 my-auto">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}"></a>
										</div>
										<div class="flex-1">
											<div class="d-flex">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Joseph Arima</h5>
													<p class="mb-0 tx-13 mb-0 tx-muted">Admin and other team accepted your work request</p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">16, Apr 2022</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="notification-time">
									<span class="date">Yesterday</span>
									<span class="time">11:43</span>
								</div>
								<div class="notification-icon">
									<a href="javascript:void(0);"></a>
								</div>
								<div class="notification-body">
									<div class="d-flex mt-sm-0 mt-4">
										<div class="avatar  avatar-status mb-3 me-3 my-auto">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/15.jpg')}}"></a>
										</div>
										<div class="flex-1">
											<div class="d-flex">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Simon Cyre</h5>
													<p class="mb-0 tx-13 mb-0 tx-muted">Temporary data will be <span class="badge badge-danger-transparent tx-12 font-weight-semibold me-1 ms-1">deleted</span> once dedicated time complated</p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">21, Apr 2022</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="notification-time">
									<span class="date">Today</span>
									<span class="time">04:18</span>
								</div>
								<div class="notification-icon">
									<a href="javascript:void(0);"></a>
								</div>
									<div class="notification-body">
									<div class="d-flex mt-sm-0 mt-4">
										<div class="avatar  avatar-status mb-3  me-3 my-auto shadow">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></a>
										</div>
										<div class="flex-1">
											<div class="d-flex">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Ason Odn</h5>
													<p class="mb-0 tx-12 mb-0 tx-muted">Approved date for sanction of loan is verified <i class="fe fe-check tx-success"></i></p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">19, May 2022</span>
													 </span>
												</div>
											</div>
										</div>
									</div>
							   </div>
							</li>
							<li>
								<div class="notification-time">
									<span class="date">Today</span>
									<span class="time">13:22</span>
								</div>
								<div class="notification-icon">
									<a href="javascript:void(0);"></a>
								</div>
								<div class="notification-body">
									<div class="d-flex mt-sm-0 mt-4">
										<div class="avatar avatar-status offline mb-3  me-3 my-auto">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/11.jpg')}}"></a>
										</div>
										<div class="flex-1">
											<div class="d-flex">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Messi Logn</h5>
													<p class="mb-0 tx-13 mb-0 tx-muted">Social network accounts are at risk check your <span class="badge badge-success-transparent font-weight-semibold tx-12 ms-1 me-1">login</span> details</p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">02, Aug 2022</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="notification-time">
									<span class="date">Today</span>
									<span class="time">24:00</span>
								</div>
								<div class="notification-icon">
									<a href="javascript:void(0);"></a>
								</div>
								<div class="notification-body">
									<div class="d-flex mt-sm-0 mt-4">
										<div class="avatar  avatar-status mb-3  me-3 my-auto shadow">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/13.jpg')}}"></a>
										</div>
										<div class="flex-1">
											<div class="d-flex">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Holly Golightly</h5>
													<p class="mb-0 tx-13 mb-0 tx-muted">Changed the password of gmail 4 hrs ago. <span class="badge badge-secondary">Update</span></p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">14, Jun 2022</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="notification-time">
									<span class="date">Today</span>
									<span class="time">20:25</span>
								</div>
								<div class="notification-icon">
									<a href="javascript:void(0);"></a>
								</div>
								<div class="notification-body">
									<div class="d-flex mt-sm-0 mt-4">
										<div class="avatar  avatar-status mb-3  me-3 my-auto shadow">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}"></a>
										</div>
										<div class="flex-1">
											<div class="d-flex">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Kissy Suzuki</h5>
													<p class="mb-0 tx-13 mb-0 tx-muted">Completed target date to change data heirarchy</p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">21, Jul 2022</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="notification-time">
									<span class="date">Saturday</span>
									<span class="time">09:15</span>
								</div>
								<div class="notification-icon">
									<a href="javascript:void(0);"></a>
								</div>
								<div class="notification-body">
									<div class="d-flex mt-sm-0 mt-4">
										<div class="avatar avatar-status offline mb-3  me-3 my-auto">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}"></a>
										</div>
										<div class="flex-1">
											<div class="d-flex">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Joseph Arima</h5>
													<p class="mb-0 tx-13 mb-0 tx-muted">Admin and other team accepted your work request</p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">16, Apr 2022</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="notification-time">
									<span class="date">Yesterday</span>
									<span class="time">11:43</span>
								</div>
								<div class="notification-icon">
									<a href="javascript:void(0);"></a>
								</div>
								<div class="notification-body">
									<div class="d-flex mt-sm-0 mt-4">
										<div class="avatar  avatar-status mb-3 me-3 my-auto">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/15.jpg')}}"></a>
										</div>
										<div class="flex-1">
											<div class="d-flex">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Simon Cyre</h5>
													<p class="mb-0 tx-13 mb-0 tx-muted">Temporary data will be <span class="badge badge-danger-transparent tx-12 font-weight-semibold me-1 ms-1">deleted</span> once dedicated time complated</p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">21, Apr 2022</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="notification-time">
									<span class="date">Today</span>
									<span class="time">04:18</span>
								</div>
								<div class="notification-icon">
									<a href="javascript:void(0);"></a>
								</div>
									<div class="notification-body">
									<div class="d-flex mt-sm-0 mt-4">
										<div class="avatar  avatar-status mb-3  me-3 my-auto shadow">
											<a class="" href="{{url('profile')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></a>
										</div>
										<div class="flex-1">
											<div class="d-flex">
												<div class="mt-0">
													<h5 class="mb-1 tx-15 font-weight-semibold text-dark">Ason Odn</h5>
													<p class="mb-0 tx-12 mb-0 tx-muted">Approved date for sanction of loan is verified <i class="fe fe-check tx-success"></i></p>
												</div>
												<div class="ms-auto">
													<span class="float-end badge notification-badge">
														<span class="tx-11 font-weight-semibold">19, May 2022</span>
													 </span>
												</div>
											</div>
										</div>
									</div>
							   </div>
							</li>
						</ul>
					</div>
					<!-- container closed -->

@endsection

@section('scripts')

		<!-- loadmore js -->
		<script src="{{asset('build/assets/plugins/loadmore/loadmore.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/loadmore/loadmore.js')}}"></script>

@endsection
