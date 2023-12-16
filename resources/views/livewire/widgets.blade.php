@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">WIDGETS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item active" aria-current="page">Widgets</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-8">
											<div class="">
												<div >
													<h6 class="mb-2">Orders</h6>
												</div>
												<div class="pb-0 mt-0">
													<div class="d-flex">
														<h4 class="tx-20 font-weight-semibold mb-2">$5,472<span class="tx-primary font-weight-semibold ms-1 tx-11"><i class="fa fa-caret-up ms-2 tx-primary"></i> +427</span></h4>
													</div>
													<p class="mb-0 tx-muted tx-11">Since Last Month</p>
												</div>
											</div>
										</div>
										<div class="col-4">
											<div class="h-100 w-100 d-flex align-items-center justify-content-center">
												<div class="ht-50 wd-50 radius-4 bg-primary-transparent tx-primary d-flex align-items-center justify-content-center overflow-hidden">
													<i class="fe fe-shopping-bag tx-17"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-3 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-8">
											<div class="">
												<div >
													<h6 class="mb-2">Profit</h6>
												</div>
												<div class="pb-0 mt-0">
													<div class="d-flex">
														<h4 class="tx-20 font-weight-semibold mb-2">$8,943<span class="tx-warning font-weight-semibold ms-1 tx-11"><i class="fa fa-caret-up ms-2 tx-warning"></i> +788</span></h4>
													</div>
													<p class="mb-0 tx-muted tx-11">Since Last Month</p>
												</div>
											</div>
										</div>
										<div class="col-4">
											<div class="h-100 w-100 d-flex align-items-center justify-content-center">
												<div class="ht-50 wd-50 radius-4 bg-warning-transparent tx-warning d-flex align-items-center justify-content-center overflow-hidden">
													<i class="fe fe-external-link tx-17"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-3 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-8">
											<div class="">
												<div >
													<h6 class="mb-2">Earnings</h6>
												</div>
												<div class="pb-0 mt-0">
													<div class="d-flex">
														<h4 class="tx-20 font-weight-semibold mb-2">$4,589<span class="font-weight-semibold tx-orange ms-1 tx-11"><i class="fa fa-caret-down ms-2 tx-orange"></i> -453</span></h4>
													</div>
													<p class="mb-0 tx-muted tx-11">Since Last Month</p>
												</div>
											</div>
										</div>
										<div class="col-4">
											<div class="h-100 w-100 d-flex align-items-center justify-content-center">
												<div class="ht-50 wd-50 radius-4 bg-orange-transparent tx-orange d-flex align-items-center justify-content-center overflow-hidden">
													<i class="fe fe-dollar-sign tx-17"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-3 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-8">
											<div class="">
												<div >
													<h6 class="mb-2">Orders</h6>
												</div>
												<div class="pb-0 mt-0">
													<div class="d-flex">
														<h4 class="tx-20 font-weight-semibold mb-2">$5,472<span class="tx-primary font-weight-semibold ms-1 tx-11"><i class="fa fa-caret-up ms-2 tx-primary"></i> +427</span></h4>
													</div>
													<p class="mb-0 tx-muted tx-11">Since Last Month</p>
												</div>
											</div>
										</div>
										<div class="col-4">
											<div class="h-100 w-100 d-flex align-items-center justify-content-center">
												<div class="ht-50 wd-50 radius-4 bg-primary-transparent tx-primary d-flex align-items-center justify-content-center overflow-hidden">
													<i class="fe fe-shopping-bag tx-17"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

					<!-- row -->
					<div class="row">
						<div class="col-sm-12 col-lg-12 col-xl-4">
							<div class="card overflow-hidden">
								<div class="card-header pb-0">
									<div class="row justify-content-between">
										<div class="w-auto">
											<h3 class="card-title mb-1">My Profile</h3>
											<p class="tx-11">76% completed. <a href="{{url('profile')}}" class="text-primary">Info</a> </p>
										</div>
										<div class="w-auto">
											<a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class=""><i class="fe fe-more-vertical tx-gray-600 tx-18"></i></a>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="javascript:void(0);">Reply</a>
												<a class="dropdown-item" href="javascript:void(0);">Report Spam</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
												<a class="dropdown-item" href="javascript:void(0);">Show Original</a>
												<a class="dropdown-item" href="javascript:void(0);">Print</a>
												<a class="dropdown-item" href="javascript:void(0);">Filter</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body pb-0 px-0">
									<div class="px-3 pb-3 w-100">
										<div class="d-flex flex-column align-items-center justify-content-center">
											<div class="avatar-xl rounded-circle me-0 mb-1 p-1 bg-blue-light">
												<a href="{{url('profile')}}">
													<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}">
												</a>
											</div>
											<h6 class="tx-20 mb-0"><a href="{{url('profile')}}">Nick Taylor</a></h6>
											<span class="tx-11 font-weight-semibold text-muted"><a href="{{url('profile')}}">UI / UX Designer</a></span>
											<div class="d-flex align-items-center mt-2 border radius-4">
												<p class="mb-0 p-2 border-end" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Achievements">
													<svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30" version="1.1">
														<g>
														<path style=" stroke:none;fill-rule:nonzero;fill:rgb(30.980392%,71.764706%,89.019608%);fill-opacity:1;" d="M 20 20 C 20 24.140625 16.640625 27.5 12.5 27.5 C 8.359375 27.5 5 24.140625 5 20 C 5 15.859375 8.359375 12.5 12.5 12.5 C 16.640625 12.5 20 15.859375 20 20 Z M 20 20 "></path>
														<path style=" stroke:none;fill-rule:nonzero;fill:rgb(72.156863%,88.627451%,95.294118%);fill-opacity:1;" d="M 23.636719 6.4375 L 17.136719 2.6875 C 17.136719 2.683594 17.136719 2.683594 17.136719 2.683594 C 16.539062 2.339844 15.773438 2.546875 15.429688 3.144531 L 12.503906 8.214844 L 15.296875 13.042969 C 15.292969 13.042969 15.292969 13.042969 15.292969 13.042969 C 16.992188 13.726562 18.375 15.011719 19.195312 16.632812 L 24.09375 8.144531 C 24.441406 7.546875 24.234375 6.78125 23.636719 6.4375 Z M 23.636719 6.4375 "></path>
														<path style=" stroke:none;fill-rule:nonzero;fill:rgb(58.431373%,82.745098%,93.333333%);fill-opacity:1;" d="M 12.5 12.5 C 13.488281 12.5 14.429688 12.695312 15.296875 13.042969 L 9.570312 3.144531 C 9.570312 3.144531 9.570312 3.144531 9.570312 3.140625 C 9.222656 2.542969 8.460938 2.339844 7.863281 2.6875 L 1.363281 6.4375 C 0.765625 6.78125 0.558594 7.546875 0.90625 8.144531 L 5.804688 16.632812 C 7.039062 14.183594 9.570312 12.5 12.5 12.5 Z M 12.5 12.5 "></path>
														</g>
													</svg>
													24
												</p>
												<p class="mb-0 p-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Teams">
													<svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30" version="1.1">
														<g>
														<path style=" stroke:none;fill-rule:nonzero;fill:rgb(30.980392%,71.764706%,89.019608%);fill-opacity:1;" d="M 22.882812 15.277344 C 21.78125 16.257812 20.34375 16.875 18.75 16.875 C 18.410156 16.875 18.078125 16.84375 17.753906 16.789062 C 17.722656 16.761719 17.679688 16.738281 17.648438 16.710938 C 19.84375 18.542969 21.25 21.289062 21.25 24.375 C 21.25 25.066406 20.691406 25.625 20 25.625 L 27.5 25.625 C 28.191406 25.625 28.75 25.066406 28.75 24.375 C 28.75 20.328125 26.339844 16.851562 22.882812 15.277344 Z M 22.882812 15.277344 "></path>
														<path style=" stroke:none;fill-rule:nonzero;fill:rgb(72.156863%,88.627451%,95.294118%);fill-opacity:1;" d="M 11.25 16.875 C 7.796875 16.875 5 14.078125 5 10.625 C 5 7.171875 7.796875 4.375 11.25 4.375 C 14.703125 4.375 17.5 7.171875 17.5 10.625 C 17.496094 14.074219 14.699219 16.871094 11.25 16.875 Z M 11.25 16.875 "></path>
														<path style=" stroke:none;fill-rule:nonzero;fill:rgb(72.156863%,88.627451%,95.294118%);fill-opacity:1;" d="M 11.25 16.875 C 7.796875 16.875 5 14.078125 5 10.625 C 5 7.171875 7.796875 4.375 11.25 4.375 C 14.703125 4.375 17.5 7.171875 17.5 10.625 C 17.496094 14.074219 14.699219 16.871094 11.25 16.875 Z M 11.25 16.875 "></path>
														<path style=" stroke:none;fill-rule:nonzero;fill:rgb(58.431373%,82.745098%,93.333333%);fill-opacity:1;" d="M 15.382812 15.277344 C 14.28125 16.257812 12.84375 16.875 11.25 16.875 C 9.65625 16.875 8.21875 16.261719 7.113281 15.277344 C 3.65625 16.851562 1.25 20.328125 1.25 24.375 C 1.25 25.066406 1.808594 25.625 2.5 25.625 L 20 25.625 C 20.691406 25.625 21.25 25.066406 21.25 24.375 C 21.25 20.328125 18.839844 16.851562 15.382812 15.277344 Z M 15.382812 15.277344 "></path>
														<path style=" stroke:none;fill-rule:nonzero;fill:rgb(44.705882%,77.254902%,90.980392%);fill-opacity:1;" d="M 18.75 4.375 C 17.335938 4.375 16.046875 4.863281 15 5.652344 C 15.339844 5.910156 15.652344 6.203125 15.933594 6.523438 C 16.011719 6.613281 16.085938 6.707031 16.160156 6.800781 C 16.3125 6.996094 16.457031 7.195312 16.585938 7.410156 C 16.699219 7.597656 16.804688 7.792969 16.902344 7.992188 C 16.953125 8.109375 17.007812 8.21875 17.054688 8.335938 C 17.175781 8.640625 17.273438 8.949219 17.34375 9.273438 C 17.363281 9.351562 17.375 9.429688 17.386719 9.507812 C 17.453125 9.871094 17.5 10.242188 17.5 10.625 C 17.5 11.019531 17.453125 11.398438 17.382812 11.769531 C 17.371094 11.828125 17.367188 11.882812 17.355469 11.9375 C 17.285156 12.25 17.1875 12.554688 17.070312 12.847656 C 17.027344 12.964844 16.980469 13.082031 16.929688 13.199219 C 16.824219 13.421875 16.707031 13.640625 16.578125 13.847656 C 16.25 14.386719 15.847656 14.863281 15.382812 15.277344 C 16.246094 15.671875 17.042969 16.179688 17.753906 16.789062 C 18.078125 16.84375 18.410156 16.875 18.75 16.875 C 22.199219 16.871094 24.996094 14.074219 25 10.625 C 25 7.171875 22.203125 4.375 18.75 4.375 Z M 18.75 4.375 "></path>
														</g>
													</svg>
													10
												</p>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-4 border-end">
												<div class="d-flex flex-column justify-content-center align-items-center">
													<span class="tx-20 font-weight-semibold">1,200</span>
													<div class="text-muted tx-11 text-center">Followers</div>
												</div>
											</div>
											<div class="col-4 border-end">
												<div class="d-flex flex-column justify-content-center align-items-center">
													<span class="tx-20 font-weight-semibold">1,053</span>
													<div class="text-muted tx-11 text-center">Following</div>
												</div>
											</div>
											<div class="col-4">
												<div class="d-flex flex-column justify-content-center align-items-center">
													<span class="tx-20 font-weight-semibold">280</span>
													<div class="text-muted tx-11 text-center">Projects</div>
												</div>
											</div>
											<div class="col-md-12 mt-3">
												<p class="text-muted text-center px-4 mb-0">Nonumy et dolores ut ea sadipscing. Sed ut diam, Lorem sit dolores sanctus vero amet. ea takimata sed sit..</p>
											</div>
											<div class="col-md-12 my-3">
												<div class="d-flex align-items-center justify-content-center">
													<div class="media me-2">
														<div class="wd-30 ht-30 d-flex align-items-center justify-content-center radius-40 bg-primary-transparent text-primary">
															<a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Github"><i class="icon ion-logo-github tx-16"></i></a>
														</div>
													</div>
													<div class="media mt-0 me-2">
														<div class="wd-30 ht-30 d-flex align-items-center justify-content-center radius-40 bg-secondary-transparent">
															<a href="#" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Twitter"><i class="fe fe-twitter tx-16"></i></a>
														</div>
													</div>
													<div class="media mt-0 me-2">
														<div class="wd-30 ht-30 d-flex align-items-center justify-content-center radius-40 bg-orange-transparent">
															<a href="#" class="text-orange" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Portfolio"><i class="icon ion-md-link tx-16"></i></a>
														</div>
													</div>
													<div class="media mt-0">
														<div class="wd-30 ht-30 d-flex align-items-center justify-content-center radius-40 bg-teal-transparent">
															<a href="#" class="text-teal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Linkedin"><i class="icon ion-logo-linkedin tx-16"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12">
												<a href="{{url('profile')}}" class="btn btn-sm btn-block btn-primary py-2">View Profile</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-lg-12 col-xl-4">
							<div class="card">
								<div class="card-header pb-0">
									<div class="d-flex align-items-center justify-content-between mb-2">
										<h3 class="card-title mb-0">Recent Activity</h3>
										<a href="javascript:void(0)" class="tx-primary">View All</a>
									</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled mb-0 recent-activity">
										<li>
											<div class="d-flex flex-1 ms-4 activity-item">
												<div class="avatar avatar-sm rounded-circle bg-primary-gradient shadow">
													<i class="fe fe-folder"></i>
												</div>
												<div class="ms-2 flex-1">
													<div class="d-flex align-items-center justify-content-between">
														<p class="mb-0">Created a <a href="javascript:void(0)" class="tx-primary">New Project.</a></p>
														<span class="tx-11 tx-muted">08:45</span>
													</div>
													<p class="mb-0 tx-12 tx-muted">Sea ea takimata eirmod ut.</p>
												</div>
											</div>
										</li>
										<li>
											<div class="d-flex flex-1 ms-4 activity-item">
												<div class="avatar avatar-sm rounded-circle shadow">
													<img src="{{asset('build/assets/img/users/6.jpg')}}" alt="avatar" class="rounded-circle">
												</div>
												<div class="ms-2 flex-1">
													<div class="d-flex align-items-center justify-content-between">
														<p class="mb-0"><a href="javascript:void(0)" class="font-weight-semibold">Katy Perri</a> commented.</p>
														<span class="tx-11 tx-muted">yesterday</span>
													</div>
													<div class="mt-2 p-2 border br-5">
														<ul class="list-unstyled tx-muted">
															<li class="mb-0">
																<p class="mb-0 tx-12"> <a href="javascript:void(0)" class="tx-primary">@Json_Taylor</a> Takimata rebum diam kasd sadipscing eirmod.</p>
															</li>
														</ul>
														<div class="input-group input-group-sm mt-2">
															<input type="text" class="form-control p-3 radius-4" placeholder="@katy_perri">
															<a href="javascript:void(0)" class="btn btn-primary bg-primary text-white border-0 input-group-text"><i class="fe fe-arrow-up"></i></a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="d-flex flex-1 ms-4 activity-item">
												<div class="avatar avatar-sm rounded-circle bg-primary-gradient shadow">
													<img src="{{asset('build/assets/img/users/10.jpg')}}" class="rounded-circle" alt="avatar">
												</div>
												<div class="ms-2 flex-1">
													<div class="d-flex align-items-center justify-content-between">
														<p class="mb-0"><a href="javascript:void(0)" class="font-weight-semibold">Neon Tarly</a> shared a link.</p>
														<span class="tx-11 tx-muted">20 Jan 22</span>
													</div>
													<p class="mb-0 tx-12 tx-muted"><a href="javascript:void(0)" class="tx-primary">http://Et-Sed-dolor_sed</a></p>
												</div>
											</div>
										</li>
										<li>
											<div class="d-flex flex-1 ms-4 activity-item">
												<div class="avatar avatar-sm rounded-circle bg-primary-gradient shadow">
													<img src="{{asset('build/assets/img/users/13.jpg')}}" class="rounded-circle" alt="avatar">
												</div>
												<div class="ms-2 flex-1">
													<div class="d-flex align-items-center justify-content-between">
														<p class="mb-0"><a href="javascript:void(0)" class="font-weight-semibold">Wanda Rag</a> uploaded 3 files.</p>
														<span class="tx-11 tx-muted">01 Jan 22</span>
													</div>
													<p class="mb-0 tx-12 tx-muted">Sanctus justo magna ipsum clita.</p>
													<div class="d-flex align-items-center mt-2 p-2 bg-gray-100 br-5 pos-relative">
														<div class="wd-40">
															<img src="{{asset('build/assets/img/files/1.png')}}" alt="docx">
														</div>
														<div class="ms-1 tx-11">
															<p class="mb-0">WORD_Document</p>
															<span class="small tx-11">35.9mb <a href="#" class="ms-1"><i class="fe fe-download tx-11"></i></a> </span>
														</div>
														<a href="#" class="tx-11 more pos-absolute">+2 More</a>
													</div>
												</div>
											</div>
										</li>
										<li class="mb-0">
											<div class="d-flex flex-1 ms-4 activity-item">
												<div class="avatar avatar-sm rounded-circle bg-secondary-gradient shadow">
													<i class="fe fe-clipboard"></i>
												</div>
												<div class="ms-2 flex-1">
													<div class="d-flex align-items-center justify-content-between">
														<p class="mb-0">Created a <a href="javascript:void(0)" class="tx-primary">New Task.</a></p>
														<span class="tx-11 tx-muted">31 Dec 21</span>
													</div>
													<p class="mb-0 tx-12 tx-muted">Aliquyam et dolor et sed labore.</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-12">
							<div class="card">
								<div class="card-body iconfont text-start">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mb-3">Real time users</h4>
									</div>
									<div class="d-flex mb-0">
										<div class="">
											<h4 class="mb-1 font-weight-semibold">154<span class="tx-success tx-13 ms-2">(+0.98%)</span></h4>
											<p class="mb-1 tx-12 tx-muted">Overview of Last month</p>
										</div>
										<div class="avatar bg-primary-transparent rounded-circle ms-auto mt-0">
											<i class="fe fe-users tx-primary tx-14"></i>
										</div>
									</div>

									<div class="progress progress-sm mt-1">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-primary wd-70p" role="progressbar"></div>
									</div>
									<small class="mb-0  tx-muted">Monthly<span class="float-end tx-muted">70%</span></small>
								</div>
							</div>
							<div class="card">
								<div class="card-body iconfont text-start">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mb-3">Total visits</h4>
									</div>
									<div class="d-flex mb-0">
										<div class="">
											<h4 class="mb-1 font-weight-semibold">5274<span class="tx-danger tx-13 ms-2">(-12.45%)</span></h4>
											<p class="mb-1 tx-12 tx-muted">Overview of Last month</p>
										</div>
										<div class="avatar bg-warning-transparent rounded-circle ms-auto mt-0">
											<i class="fe fe-zap tx-warning tx-14"></i>
										</div>
									</div>

									<div class="progress progress-sm mt-1">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-warning wd-50p" role="progressbar"></div>
									</div>
									<small class="mb-0  tx-muted">Monthly<span class="float-end tx-muted">50%</span></small>
								</div>
							</div>
							<div class="card">
								<div class="card-body iconfont text-start">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mb-3">Bounce Rate</h4>
									</div>
									<div class="d-flex mb-0">
										<div class="">
											<h4 class="mb-1   font-weight-semibold">76.3%<span class="tx-success tx-13 ms-2">(+13.52%)</span></h4>
											<p class="mb-1 tx-12 tx-muted">Overview of Last month</p>
										</div>
										<div class="avatar bg-teal-transparent rounded-circle ms-auto mt-0">
											<i class="fe fe-trending-up tx-teal tx-14"></i>
										</div>
									</div>

									<div class="progress progress-sm mt-1">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-teal wd-60p" role="progressbar"></div>
									</div>
									<small class="mb-0  tx-muted">Monthly<span class="float-end tx-muted">60%</span></small>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

					<!-- row -->
					<div class="row">
						<!-- col -->
						<div class="col-lg-4 col-md-4">
							<div class="card bg-primary-gradient">
								<div class="card-body">
									<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
										<!-- Carousel items -->
										<div class="carousel-inner">
											<div class="carousel-item active flex-column">
												<i class="si si-social-facebook tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">12th June</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">20% Off</span>on buy</h3>
												<div class="text-white m-t-20">
													<i>- Trevor	Hart</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
												<i class="si si-social-google tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">24th July</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">60% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Joseph	Vaughan</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
											   <i class="si si-social-twitter tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">9th Aug</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">90% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Alan	Hemmings</i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- col -->
						<div class="col-lg-4 col-md-4">
							<div class="card bg-secondary-gradient">
								<div class="card-body">
									<div id="myCarousel0" class="carousel slide" data-bs-ride="carousel">
										<!-- Carousel items -->
										<div class="carousel-inner">
											<div class="carousel-item active flex-column">
												<i class="si si-social-facebook tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">11th June</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">30% Off</span>on buy</h3>
												<div class="text-white m-t-20">
													<i>- Alan Hemmings</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
											   <i class="si si-social-google tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">21st July</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">70% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Eric Lee</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
											   <i class="si si-social-twitter tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">12th Aug</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">80% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Eric Lee</i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- col -->
						<div class="col-lg-4 col-md-4">
							<div class="card bg-teal-gradient">
								<div class="card-body">
									<div id="myCarousel1" class="carousel slide" data-bs-ride="carousel">
										<!-- Carousel items -->
										<div class="carousel-inner">
											<div class="carousel-item active flex-column">
												<i class="si si-social-facebook tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">25th June</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold me-2">30% Off</span>on buy</h3>
												<div class="text-white m-t-20">
													<i>- Eric Lee</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
												<i class="si si-social-google tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">6th July</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold">70% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Eric Lee</i>
												</div>
											</div>
											<div class="carousel-item flex-column">
												<i class="si si-social-twitter tx-30 text-white mb-2"></i>
												<p class="text-white mt-2">7th Aug</p>
												<h3 class="text-white font-light">Now Get <span class="font-bold">80% Off</span> on buy</h3>
												<div class="text-white m-t-20">
													<i>- Eric Lee</i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end row -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-6 col-lg-12">
							<div class="row">
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Subscriptions</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 text-center">
													<div class="rounded-circle ht-60 wd-60 bg-light bg-light d-flex align-items-center justify-content-center mx-auto">
														<div class="ht-50 wd-50 rounded-circle bg-primary d-flex align-items-center justify-content-center">
															<i class="fe fe-shopping-bag tx-17 text-white"></i>
														</div>
													</div>
													<h4 class="tx-24 font-weight-semibold my-2">472K</h4>
													<p class="tx-11 mb-1"><span class="badge badge-sm bg-success-transparent tx-success">+13%</span> of target</p>
													<p class="mb-1 tx-13 text-start">Target</p>
													<div class="progress progress-style ht-5">
														<div class="progress-bar bg-primary wd-80p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Sales</div>
										</div>
										<div class="card-body text-center">
											<div class="rounded-circle ht-60 wd-60 bg-light bg-light d-flex align-items-center justify-content-center mx-auto">
												<div class="ht-50 wd-50 rounded-circle bg-secondary d-flex align-items-center justify-content-center">
													<i class="fe fe-shopping-bag tx-17 text-white"></i>
												</div>
											</div>
											<h4 class="tx-24 font-weight-semibold my-2">572K</h4>
											<p class="tx-11"><span class="badge badge-sm bg-success-transparent tx-success">+13%</span> of target</p>
											<p class="mb-1 tx-13 text-start">Sales Target</p>
											<div class="progress progress-style ht-5">
												<div class="progress-bar bg-secondary wd-80p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Sessions by Countries
											</div>
										</div>
										<div class="card-body">
											<ul class="sales-session mb-0">
												<li>
													<div class="d-flex justify-content-between">
														<h6>1. United States </h6>
														<p class="font-weight-semibold mb-2">$273.12 <span class="tx-muted font-weight-normal">(2.17%)</span></p>
													</div>
													<div class="progress">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-60p bg-primary  ht-5" role="progressbar"></div>
													</div>
												</li>
												<li>
													<div class="d-flex justify-content-between">
														<h6>2. United kingdom</h6>
														<p class="font-weight-semibold mb-2">$423.10 <span class="tx-muted font-weight-normal">(12.43%)</span></p>
													</div>
													<div class="progress">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-70p ht-5 bg-info" role="progressbar"></div>
													</div>
												</li>
												<li>
													<div class="d-flex justify-content-between">
														<h6>3. Australia</h6>
														<p class="font-weight-semibold mb-2">$547.18 <span class="tx-muted font-weight-normal">(3.14%)</span></p>
													</div>
													<div class="progress">
															<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar wd-60p ht-5 bg-danger" role="progressbar"></div>
													</div>
												</li>
												<li class="mb-0">
													<div class="d-flex justify-content-between">
														<h6>4. Canada</h6>
														<p class="font-weight-semibold mb-2">$728.32 <span class="tx-muted font-weight-normal">(7.23%)</span></p>
													</div>
													<div class="progress">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-50p ht-5 bg-warning" role="progressbar"></div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card">
										<div class="card-header">
											<div class="d-flex align-items-center justify-content-between">
												<h3 class="card-title mb-0">Tasks</h3>
												<a href="#" class="tx-primary">View All</a>
											</div>
										</div>
										<div class="card-body pt-3">
											<ul class="tasks-all mb-0">
												<li>
													<div class="d-flex align-items-center">
														<div class="avatar-sm bg-primary-gradient rounded-circle d-flex align-items-center justify-content-center shadow">
															<a href="#" class="text-white d-flex align-items-center justify-content-center"><i class="fe fe-activity"></i></a>
														</div>
														<div class="ms-2 flex-1">
															<div class="d-flex align-items-center justify-content-between">
																<p class="mb-0 tx-13">To Do</p>
																<a href="#" class="tx-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="javascript:void(0);">Change Status</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
																</ul>
															</div>
															<p class="tx-muted mb-0 tx-11 d-flex align-items-center">2m ago <span class="ms-2 d-flex align-items-center"> <span class="rounded-circle ht-5 wd-5 bg-gray-400 me-1"></span> in progress</span> </p>
														</div>
													</div>
												</li>
												<li>
													<div class="d-flex align-items-center">
														<div class="avatar-sm bg-secondary-gradient rounded-circle d-flex align-items-center justify-content-center shadow">
															<a href="#" class="text-dark d-flex align-items-center justify-content-center"><i class="fe fe-command"></i></a>
														</div>
														<div class="ms-2 flex-1">
															<div class="d-flex align-items-center justify-content-between">
																<p class="mb-0 tx-13">Task In Progress</p>
																<a href="#" class="tx-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="javascript:void(0);">Change Status</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
																</ul>
															</div>
															<p class="tx-muted mb-0 tx-11 d-flex align-items-center">2m ago <span class="ms-2 d-flex align-items-center"> <span class="rounded-circle ht-5 wd-5 bg-gray-400 me-1"></span>started</span> </p>
														</div>
													</div>
												</li>
												<li>
													<div class="d-flex align-items-center">
														<div class="avatar-sm bg-orange-gradient rounded-circle d-flex align-items-center justify-content-center shadow">
															<a href="#" class="text-white d-flex align-items-center justify-content-center"><i class="fe fe-globe"></i></a>
														</div>
														<div class="ms-2 flex-1">
															<div class="d-flex align-items-center justify-content-between">
																<p class="mb-0 tx-13">Completed Task</p>
																<a href="#" class="tx-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="javascript:void(0);">Change Status</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
																</ul>
															</div>
															<p class="tx-muted mb-0 tx-11 d-flex align-items-center">2m ago <span class="ms-2 d-flex align-items-center"> <span class="rounded-circle ht-5 wd-5 bg-gray-400 me-1"></span>completed</span> </p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex justify-content-between">
										<h4 class="card-title">Browser Usage</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-0">Tells you where your visitors originated from, such as search engines, social networks or website referrals. <a href="">Learn more</a></p>
								</div><!-- card-header -->
								<div class="card-body p-0">
									<div class="browser-stats">
										<div class="d-flex align-items-center item  border-bottom">
											<div class="d-flex">
												<img src="{{asset('build/assets/img/svgicons/chrome.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Chrome</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="d-flex">
													<span class="me-4 my-auto">35,502</span>
													<span class="tx-success fs-15"><i class="fe fe-arrow-up"></i>12.75%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center item  border-bottom">
											<div class="d-flex">
												<img src="{{asset('build/assets/img/svgicons/opera.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Opera</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="d-flex">
													<span class="me-4 my-auto">12,563</span>
													<span class="tx-danger"><i class="fe fe-arrow-down"></i>15.12%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center item  border-bottom">
											<div class="d-flex">
												<img src="{{asset('build/assets/img/svgicons/edge.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Internet Explorer</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="d-flex">
													<span class="me-4 mt-1">25,364</span>
													<span class="tx-success"><i class="fe fe-arrow-up"></i>24.37%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center item  border-bottom">
											<div class="d-flex">
												<img src="{{asset('build/assets/img/svgicons/firefox.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Firefox</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="d-flex">
													<span class="me-4 mt-1">14,635</span>
													<span class="tx-success"><i class="fe fe-arrow-up"></i>15,63%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center item  border-bottom">
											<div class="d-flex">
												<img src="{{asset('build/assets/img/svgicons/firefox.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Firefox</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="d-flex">
													<span class="me-4 mt-1">14,635</span>
													<span class="tx-success"><i class="fe fe-arrow-up"></i>15,63%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center item border-bottom">
											<div class="d-flex">
												<img src="{{asset('build/assets/img/svgicons/uc-browser.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Ucbrowser</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="d-flex">
													<span class="me-4 mt-1">15,453</span>
													<span class="tx-danger"><i class="fe fe-arrow-down"></i>23.70%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center item">
											<div class="d-flex">
												<img src="{{asset('build/assets/img/svgicons/safari.svg')}}" alt="img" class="ht-30 wd-30 me-2">
												<div class="">
													<h6 class="">Safari</h6>
													<span class="sub-text">Mozilla Foundation, Inc.</span>
												</div>
											</div>
											<div class="ms-auto my-auto">
												<div class="d-flex">
													<span class="me-4 mt-1">35,657</span>
													<span class="tx-danger"><i class="fe fe-arrow-down"></i>12.54%</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- card -->
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-xxl-6 col-xl-12">
							<div class="row">
								<div class="col-xl-6 col-lg-6">
									<div class="card text-center">
										<div class="card-body ">
											<div class="feature widget-2 text-center mt-0 mb-3">
												<i class="ti-bar-chart project bg-primary-transparent mx-auto tx-primary "></i>
											</div>
											<h6 class="mb-1 tx-muted">Total Revenue</h6>
											<h3 class="font-weight-semibold">$125.465</h3>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card text-center">
										<div class="card-body ">
											<div class="feature widget-2 text-center mt-0 mb-3">
												<i class="ti-pie-chart project bg-pink-transparent mx-auto text-pink "></i>
											</div>
											<h6 class="mb-1 tx-muted">Marketing Spend</h6>
											<h3 class="font-weight-semibold">$75.045</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6 col-lg-6">
									<div class="card text-center">
										<div class="card-body">
											<div class="feature widget-2 text-center mt-0 mb-3">
												<i class="ti-pulse  project bg-teal-transparent mx-auto text-teal "></i>
											</div>
											<h6 class="mb-1 tx-muted">Total Profit</h6>
											<h3 class="font-weight-semibold">$46.352</h3>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6">
									<div class="card text-center">
										<div class="card-body ">
											<div class="feature widget-2 text-center mt-0 mb-3">
												<i class="ti-stats-up project bg-success-transparent mx-auto tx-success "></i>
											</div>
											<h6 class="mb-1 tx-muted">Total Investiment</h6>
											<h3 class="font-weight-semibold">62%</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-6 col-xl-12">
							<div class="row">
								<div class="col-xl-6">
									<div class="card">
										<div class="card-header pb-3">
											<div class="card-title">MAIN TASKS</div>
										</div>
										<div class="card-body p-0 customers mt-1">
											<div class="">
												<label class="p-2 mt-2 d-flex">
													<span class="check-box mb-0 ms-2">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
													<span class="ms-3 me-5 my-auto">
														sharing the information with clients or stakeholders.
													</span>
													<span class="ms-auto"><span class="badge badge-primary-transparent font-weight-semibold px-2 py-1 tx-11 me-2">Today</span></span>
												</label>
												<label class="p-2 mt-2 d-flex">
													<span class="check-box mb-0 ms-2">
														<span class="ckbox"><input type="checkbox" checked><span></span></span>
													</span>
													<span class="ms-3 me-5 my-auto">
														Hearing the information and responding.
													</span>
													<span class="ms-auto"><span class="badge badge-primary-transparent font-weight-semibold px-2 py-1 tx-11 me-2 float-end">22 hrs</span></span>
												</label>
												<label class="p-2 mt-2 d-flex">
													<span class="check-box mb-0 ms-2">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
													<span class="ms-3 me-5 my-auto">
														Setting up and customizing your own sales.
													</span>
													<span class="ms-auto"> <span class="badge badge-light-transparent font-weight-semibold px-2 py-1 tx-11 me-2">1 Day</span></span>
												</label>
												<label class="p-2 mt-2 d-flex">
													<span class="check-box mb-0 ms-2">
														<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
													</span>
													<span class="ms-3 me-5 my-auto">
														To have a complete 360° overview of sales information, having.
													</span>
													<span class="ms-auto"> <span class="badge badge-light-transparent font-weight-semibold px-2 py-1 tx-11 me-2">2 Days</span></span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="card">
										<div class="card-header">
											<div class="d-flex justify-content-between">
												<div>
													<h3 class="card-title mb-1">Billings</h3>
													<span class="tx-muted tx-11">204 transactions</span>
												</div>
												<a href="javascript:void(0)" class="tx-primary">View History</a>
											</div>
										</div>
										<div class="card-body">
											<div class="panel">
												<div class="panel tabs-style6">
													<div class="panel-head">
														<ul class="nav nav-tabs">
															<li class="nav-item flex-1"><a class="nav-link active" data-bs-toggle="tab" href="#tab_received"><i class="fe fe-corner-right-down me-2 tx-13"></i>Recieved</a></li>
															<li class="nav-item flex-1"><a class="nav-link" data-bs-toggle="tab" href="#tab_paid"><i class="fe fe-check-square me-2 tx-13"></i>Paid</a></li>
														</ul>
													</div>
													<div class="panel-body p-0">
														<div class="tab-content">
															<div class="tab-pane active" id="tab_received">
																<ul class="list-unstyled mb-0 mt-3">
																	<li>
																		<div class="d-flex">
																			<div class="avatar avatar-sm rounded-circle bg-gray-200 shadow">
																				<img src="{{asset('build/assets/img/users/10.jpg')}}" alt="avatar" class="rounded-circle">
																			</div>
																			<div class="flex-1 ms-3">
																				<p class="tx-14 font-weight-semibold mb-0 d-flex align-items-center justify-content-between">Joseph Arimathea<span class="tx-success">+$5,000</span></p>
																				<p class="mb-0 d-flex align-items-center justify-content-between"><a href="{{url('invoice')}}" class="tx-primary tx-11">15 Invoices</a><span class="tx-muted tx-11">Today</span></p>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex">
																			<div class="avatar avatar-sm rounded-circle bg-gray-200">
																				<span class="tx-muted font-weight-normal">PS</span>
																			</div>
																			<div class="flex-1 ms-3">
																				<p class="tx-14 font-weight-semibold mb-0 d-flex align-items-center justify-content-between">Penelope Smallbone<span class="tx-success">+$20,400</span></p>
																				<p class="mb-0 d-flex align-items-center justify-content-between"><a href="{{url('invoice')}}" class="tx-primary tx-11">2 Invoices</a><span class="tx-muted tx-11">20 Jan 22</span></p>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex">
																			<div class="avatar avatar-sm rounded-circle bg-gray-200 shadow">
																				<img src="{{asset('build/assets/img/users/8.jpg')}}" alt="avatar" class="rounded-circle">
																			</div>
																			<div class="flex-1 ms-3">
																				<p class="tx-14 font-weight-semibold mb-0 d-flex align-items-center justify-content-between">Ruby Bartlett<span class="tx-success">+$49,250</span></p>
																				<p class="mb-0 d-flex align-items-center justify-content-between"><a href="{{url('invoice')}}" class="tx-primary tx-11">37 Invoices</a><span class="tx-muted tx-11">17 Jan 22</span></p>
																			</div>
																		</div>
																	</li>
																	<li class="mb-0">
																		<div class="d-flex">
																			<div class="avatar avatar-sm rounded-circle bg-gray-200 shadow">
																				<img src="{{asset('build/assets/img/users/5.jpg')}}" alt="avatar" class="rounded-circle">
																			</div>
																			<div class="flex-1 ms-3">
																				<p class="tx-14 font-weight-semibold mb-0 d-flex align-items-center justify-content-between">Sylvia Trench<span class="tx-success">+$9,260</span></p>
																				<p class="mb-0 d-flex align-items-center justify-content-between"><a href="{{url('invoice')}}" class="tx-primary tx-11">4 Invoices</a><span class="tx-muted tx-11">10 Jan 22</span></p>
																			</div>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="tab-pane" id="tab_paid">
																<ul class="list-unstyled mb-0 mt-3">
																	<li>
																		<div class="d-flex">
																			<div class="avatar avatar-sm rounded-circle bg-gray-200 shadow">
																				<img src="{{asset('build/assets/img/users/4.jpg')}}" alt="avatar" class="rounded-circle">
																			</div>
																			<div class="flex-1 ms-3">
																				<p class="tx-14 font-weight-semibold mb-0 d-flex align-items-center justify-content-between">Tiffany Case<span class="tx-danger">-$6,030</span></p>
																				<p class="mb-0 d-flex align-items-center justify-content-between"><a href="{{url('invoice')}}" class="tx-primary tx-11">2 Invoices</a><span class="tx-muted tx-11">15 Jan 22</span></p>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex">
																			<div class="avatar avatar-sm rounded-circle bg-gray-200 shadow">
																				<img src="{{asset('build/assets/img/users/5.jpg')}}" alt="avatar" class="rounded-circle">
																			</div>
																			<div class="flex-1 ms-3">
																				<p class="tx-14 font-weight-semibold mb-0 d-flex align-items-center justify-content-between">Shady Tree<span class="tx-danger">-$5,800</span></p>
																				<p class="mb-0 d-flex align-items-center justify-content-between"><a href="{{url('invoice')}}" class="tx-primary tx-11">7 Invoices</a><span class="tx-muted tx-11">14 Jan 22</span></p>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="d-flex">
																			<div class="avatar avatar-sm rounded-circle bg-gray-200">
																				<span class="tx-muted font-weight-normal">KS</span>
																			</div>
																			<div class="flex-1 ms-3">
																				<p class="tx-14 font-weight-semibold mb-0 d-flex align-items-center justify-content-between">Kissy Suzuki<span class="tx-danger">-$42,000</span></p>
																				<p class="mb-0 d-flex align-items-center justify-content-between"><a href="{{url('invoice')}}" class="tx-primary tx-11">2 Invoices</a><span class="tx-muted tx-11">13 Jan 22</span></p>
																			</div>
																		</div>
																	</li>
																	<li class="mb-0">
																		<div class="d-flex">
																			<div class="avatar avatar-sm rounded-circle bg-gray-200 shadow">
																				<img src="{{asset('build/assets/img/users/11.jpg')}}" alt="avatar" class="rounded-circle">
																			</div>
																			<div class="flex-1 ms-3">
																				<p class="tx-14 font-weight-semibold mb-0 d-flex align-items-center justify-content-between">Henry Flex<span class="tx-danger">-$68,100</span></p>
																				<p class="mb-0 d-flex align-items-center justify-content-between"><a href="{{url('invoice')}}" class="tx-primary tx-11">7 Invoices</a><span class="tx-muted tx-11">11 Jan 22</span></p>
																			</div>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- Select2 js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.full.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')

@endsection
