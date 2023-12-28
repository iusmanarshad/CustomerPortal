@extends('layouts.app')

@section('styles')

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">PROFILE</span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb breadcrumb-style3">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
							<li class="breadcrumb-item active" aria-current="page">Profile</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->

				<div class="row">
					<div class="col-xl-12">
						<div class="card overflow-hidden">
							<div class="card-body p-0">
								<div class="profile-cover ht-350"></div>
								<div class="px-4 pt-4 pos-relative">
									<div class="rounded-circle profile-img">
										<img src="{{asset('build/assets/img/users/8.jpg')}}" alt="img" class="avatar-xxl rounded-circle">
									</div>
									<div class="mt-4 d-sm-flex">
										<div class="mt-0 mb-sm-0 mb-3">
											<h3 class="mb-1">Json Taylor</h3>
											<span class="tx-muted">UI/UX Designer</span>
										</div>
										<div class="ms-auto mg-sm-t-0-f mt-2">
											<div class="d-sm-flex">
												<div class="d-flex align-items-center me-4 mb-2 mg-b-sm-0-f">
													<span class="avatar rounded-circle bg-primary-transparent"><i class="fe fe-briefcase tx-primary"></i></span>
													<div class="ms-2">
														<p class="mb-1 font-weight-semibold">Projects</p>
														<span class="tx-muted">746</span>
													</div>
												</div>
												<div class="d-flex align-items-center me-4 mb-2 mg-b-sm-0-f">
													<span class="avatar rounded-circle bg-warning-transparent"><i class="fe fe-cast tx-warning"></i></span>
													<div class="ms-2">
														<p class="mb-1 font-weight-semibold">Following</p>
														<span class="tx-muted">12K</span>
													</div>
												</div>
												<div class="d-flex align-items-center">
													<span class="avatar rounded-circle bg-green-transparent"><i class="fe fe-users tx-green"></i></span>
													<div class="ms-2">
														<p class="mb-1 font-weight-semibold">Followers</p>
														<span class="tx-muted">325K</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="panel tabs-style7 scaleX mt-2">
									<div class="panel-head">
										<ul class="nav nav-tabs d-block d-sm-flex">
											<li class="nav-item"><a class="nav-link tx-14 font-weight-semibold text-sm-center text-start active" data-bs-toggle="tab" href="#profileTab1">About</a></li>
											<li class="nav-item ms-sm-2 ms-0"><a class="nav-link tx-14 font-weight-semibold text-sm-center text-start" data-bs-toggle="tab" href="#profileTab2">Edit Profile</a></li>
											<li class="nav-item ms-sm-2 ms-0"><a class="nav-link tx-14 font-weight-semibold text-sm-center text-start" data-bs-toggle="tab" href="#profileTab3">Timeline</a></li>
											<li class="nav-item ms-sm-2 ms-0"><a class="nav-link tx-14 font-weight-semibold text-sm-center text-start" data-bs-toggle="tab" href="#profileTab4">Gallery</a></li>
											<li class="nav-item ms-sm-2 ms-0"><a class="nav-link tx-14 font-weight-semibold text-sm-center text-start" data-bs-toggle="tab" href="#profileTab5">Friends</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="panel-body p-0 border-0">
							<div class="tab-content">
								<div class="tab-pane active" id="profileTab1">
									<div class="card">
										<div class="card-body p-0 border-0">
											<div class="p-4">
												<h4 class="tx-15 text-uppercase font-weight-semibold mb-3">About Me</h4>
												<p class="mb-1">Labore sadipscing amet ea ipsum ipsum, diam amet voluptua clita sea takimata labore, et duo et tempor vero dolores ipsum. Kasd rebum tempor lorem dolor at, et ut magna lorem.
													Labore sadipscing amet ea ipsum ipsum, diam amet voluptua clita sea takimata labore, et duo et tempor vero dolores ipsum. Kasd rebum tempor lorem dolor at, et ut magna lorem.
												</p>
												<p class="mb-0">Labore sadipscing amet ea ipsum ipsum, diam amet voluptua clita sea takimata labore, et duo et tempor vero dolores ipsum. Kasd rebum tempor lorem dolor at, et ut magna lorem.
													Labore sadipscing amet ea ipsum ips, Kasd rebum tempor lorem dolor at, et ut magna lorem.
												</p>
											</div>
											<div class="border-top"></div>
											<div class="p-4">
												<h4 class="tx-15 text-uppercase font-weight-semibold mb-3">Skills</h4>
												<span class="badge badge-lg badge-light rounded-pill mb-3 mb-sm-0">HTML</span>
												<span class="badge badge-lg badge-light rounded-pill mb-3 mb-sm-0">CSS</span>
												<span class="badge badge-lg badge-light rounded-pill mb-3 mb-sm-0">Javascript</span>
												<span class="badge badge-lg badge-light rounded-pill mb-3 mb-sm-0">Jquery</span>
												<span class="badge badge-lg badge-light rounded-pill mb-3 mb-sm-0">Adobe Photoshop</span>
												<span class="badge badge-lg badge-light rounded-pill">Figma</span>
											</div>
											<div class="border-top"></div>
											<div class="p-4">
												<h4 class="tx-15 text-uppercase font-weight-semibold mb-3">Contact Details</h4>
												<div class="d-sm-flex">
													<div class="d-flex align-items-center me-4 mb-3 mb-sm-0">
														<span class="avatar rounded-circle bg-custom"><i class="icon ion-md-phone-portrait tx-muted op-7"></i></span>
														<div class="ms-3">
															<p class="mb-1 font-weight-semibold">Mobile</p>
															<span class="tx-muted">+(110)-23493090</span>
														</div>
													</div>
													<div class="d-flex align-items-center me-4 mb-3 mb-sm-0">
														<span class="avatar rounded-circle bg-custom"><i class="icon ion-logo-slack tx-muted op-7"></i></span>
														<div class="ms-3">
															<p class="mb-1 font-weight-semibold">Slack</p>
															<span class="tx-muted">@spruko.w</span>
														</div>
													</div>
													<div class="d-flex align-items-center">
														<span class="avatar rounded-circle bg-custom"><i class="icon ion-md-locate tx-muted op-7"></i></span>
														<div class="ms-3">
															<p class="mb-1 font-weight-semibold">Current Address</p>
															<span class="tx-muted">San Francisco, CA</span>
														</div>
													</div>
												</div>
											</div>
											<div class="border-top"></div>
											<div class="p-4">
												<h4 class="tx-15 text-uppercase font-weight-semibold mb-3">Social Media</h4>
												<div class="d-md-flex">
													<div class="d-flex align-items-center me-4 mb-3 mb-md-0">
														<span class="avatar rounded-circle bg-custom"><i class="icon ion-logo-github tx-muted op-7"></i></span>
														<div class="ms-3">
															<p class="mb-1 font-weight-semibold">Github</p>
															<a href="javascript:void(0);" class="tx-inverse">github.com/spruko</a>
														</div>
													</div>
													<div class="d-flex align-items-center me-4 mb-3 mb-md-0">
														<span class="avatar rounded-circle bg-custom"><i class="icon ion-logo-twitter tx-muted op-7"></i></span>
														<div class="ms-3">
															<p class="mb-1 font-weight-semibold">Twitter</p>
															<a href="javascript:void(0);" class="tx-inverse">twitter.com/spruko.me</a>
														</div>
													</div>
													<div class="d-flex align-items-center">
														<span class="avatar rounded-circle bg-custom"><i class="icon ion-logo-linkedin tx-muted op-7"></i></span>
														<div class="ms-3">
															<p class="mb-1 font-weight-semibold">Linkedin</p>
															<a href="javascript:void(0);" class="tx-inverse">spruko.com/</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="profileTab2">
									<div class="card">
										<div class="card-body border-0">
											<div class="d-flex">
												<div class="ms-auto">
													<a href="javascript:void(0);" class="btn btn-sm btn-primary rounded-pill">Save Changes</a>
													<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger rounded-pill">Cancel</a>
												</div>
											</div>
											<form class="form-horizontal">
												<h4 class="tx-15 text-uppercase font-weight-semibold mb-3">Name</h4>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">First Name</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"
																placeholder="First Name" value="Json">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">last Name</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"
																placeholder="Last Name" value="Taylor">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Nick Name</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"
																placeholder="Nick Name" value="Spruha">
														</div>
													</div>
												</div>
												<h4 class="tx-15 text-uppercase font-weight-semibold mb-3">About Yourself</h4>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">About</label>
														</div>
														<div class="col-md-9">
															<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="about..">Labore sadipscing amet ea ipsum ipsum, diam amet voluptua clita sea takimata labore, et duo et tempor vero dolores ipsum. Kasd rebum tempor lorem dolor at, et ut magna lorem. Labore sadipscing amet ea ipsum ipsum, diam amet voluptua clita sea takimata labore, et duo et tempor vero dolores ipsum. Kasd rebum tempor lorem dolor at, et ut magna lorem.</textarea>
														</div>
													</div>
												</div>
												<h4 class="tx-15 text-uppercase font-weight-semibold mb-3">Work</h4>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Designation</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"
																placeholder="Designation" value="UI/UX Designer">
														</div>
													</div>
												</div>
												<h4 class="tx-15 text-uppercase font-weight-semibold mb-3">Contact</h4>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Email<i>(required)</i></label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control" placeholder="Email"
																value="info@Spruha.in">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Website</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"
																placeholder="Website" value="@spruko.w">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Phone</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"
																placeholder="phone number" value="+125 3545654">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Address</label>
														</div>
														<div class="col-md-9">
															<textarea class="form-control" name="example-textarea-input"
																rows="2"
																placeholder="Address">San Francisco, CA</textarea>
														</div>
													</div>
												</div>
												<h4 class="tx-15 text-uppercase font-weight-semibold mb-3">Social Info</h4>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Twitter</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"
																placeholder="twitter" value="twitter.com/spruko.me">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Facebook</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"
																placeholder="facebook"
																value="https://www.facebook.com/Spruha">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Google+</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control" placeholder="google"
																value="spruko.com">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Linked in</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"
																placeholder="linkedin" value="linkedin.com/in/spruko">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Github</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control" placeholder="github"
																value="github.com/sprukos">
														</div>
													</div>
												</div>
												<h4 class="tx-15 text-uppercase font-weight-semibold mb-3">Email Preferences</h4>
												<div class="form-group mb-0">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Verified User</label>
														</div>
														<div class="col-md-9">
															<label class="ckbox mg-b-10-f">
																<input type="checkbox" checked>
																<span>Accept to receive post or page notification emails</span>
															</label>
															<label class="ckbox">
																<input type="checkbox" checked>
																<span> Accept to receive email sent to multiple recipients</span>
															</label>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="profileTab3">
									<div class="row row-sm">
										<div class="col-12">
											<div class="card">
												<div class="card-header px-4 pt-4 pb-0">
													<div class="d-flex">
														<div class="me-2">
															<div class="avatar">
																<img alt="img" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}">
															</div>
														</div>
														<div class="ms-2">
															<h6 class="mb-0 mg-t-2">Mintrona Pechon Pechon</h6>
															<span class="tx-primary">just now</span>
														</div>
														<div class="ms-auto">
															<div class="dropdown">
																<a data-bs-toggle="dropdown" href="JavaScript:void(0);" class="tx-inverse"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu shadow">
																	<a class="dropdown-item" href="javascript:void(0);">Edit Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Delete Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<p class="mg-t-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
													<div class="row row-sm">
														<div class="col">
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5 mb-2 mt-2 me-4" src="{{asset('build/assets/img/media/1.jpg')}}"></a>
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5" src="{{asset('build/assets/img/media/2.jpg')}}"></a>
														</div>
													</div>
													<div class="mg-t-15">
														<div class="avatar-list-stacked me-2">
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
															<div class="avatar avatar-sm bg-primary rounded-circle">+8</div>
														</div>
														<h6 class="mb-0 mt-3">28 people like your photo</h6>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header px-4 pt-4 pb-0">
													<div class="d-flex">
														<div class="me-2">
															<div class="avatar">
																<img alt="img" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}">
															</div>
														</div>
														<div class="ms-2">
															<h6 class="mb-0 mg-t-2">Soejn Kin</h6>
															<span class="tx-muted tx-12">Mar 14 2021, 09:10AM</span>
														</div>
														<div class="ms-auto">
															<div class="dropdown">
																<a data-bs-toggle="dropdown" href="JavaScript:void(0);" class="tx-inverse"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu shadow">
																	<a class="dropdown-item" href="javascript:void(0);">Edit Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Delete Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<p class="mg-t-0">Amet voluptua consetetur no accusam diam kasd gubergren et sed tempor. Ea sit eos ea et dolor invidunt sea diam,.</p>
													<div class="row row-sm">
														<div class="col">
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5 mb-2 mt-2 me-4" src="{{asset('build/assets/img/media/3.jpg')}}"></a>
														</div>
													</div>
													<div class="mg-t-15">
														<div class="avatar-list-stacked me-2">
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
															<div class="avatar avatar-sm bg-primary rounded-circle">+8</div>
														</div>
														<h6 class="mb-0 mt-3">237 people like your photo</h6>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header px-4 pt-4 pb-0">
													<div class="d-flex">
														<div class="me-2">
															<div class="avatar">
																<img alt="img" class="rounded-circle" src="{{asset('build/assets/img/users/11.jpg')}}">
															</div>
														</div>
														<div class="ms-2">
															<h6 class="mb-0 mg-t-2">Oensk Lson</h6>
															<span class="tx-muted tx-12">Mar 15 2022, 01:08AM</span>
														</div>
														<div class="ms-auto">
															<div class="dropdown">
																<a data-bs-toggle="dropdown" href="JavaScript:void(0);" class="tx-inverse"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu shadow">
																	<a class="dropdown-item" href="javascript:void(0);">Edit Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Delete Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<p class="mg-t-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
													<div class="row row-sm">
														<div class="col">
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5 mb-2 mt-2 me-4" src="{{asset('build/assets/img/media/1.jpg')}}"></a>
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5" src="{{asset('build/assets/img/media/2.jpg')}}"></a>
														</div>
													</div>
													<div class="mg-t-15">
														<div class="avatar-list-stacked me-2">
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
															<div class="avatar avatar-sm bg-primary rounded-circle">+8</div>
														</div>
														<h6 class="mb-0 mt-3">185 people like your photo</h6>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header px-4 pt-4 pb-0">
													<div class="d-flex">
														<div class="me-2">
															<div class="avatar">
																<img alt="img" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}">
															</div>
														</div>
														<div class="ms-2">
															<h6 class="mb-0 mg-t-2">Tson Down</h6>
															<span class="tx-muted tx-12">Apr 20 2022, 04:05AM</span>
														</div>
														<div class="ms-auto">
															<div class="dropdown">
																<a data-bs-toggle="dropdown" href="JavaScript:void(0);" class="tx-inverse"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu shadow">
																	<a class="dropdown-item" href="javascript:void(0);">Edit Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Delete Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<p class="mg-t-0">Diam nonumy vero sed tempor sanctus stet justo. Sed gubergren duo justo justo labore tempor ut magna sed, takimata lorem voluptua invidunt et..</p>
													<div class="row row-sm">
														<div class="col">
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5 mb-2 mt-2 me-4" src="{{asset('build/assets/img/media/4.jpg')}}"></a>
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5 me-4" src="{{asset('build/assets/img/media/5.jpg')}}"></a>
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5 mt-2 mt-xl-0" src="{{asset('build/assets/img/media/6.jpg')}}"></a>
														</div>
													</div>
													<div class="mg-t-15">
														<div class="avatar-list-stacked me-2">
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
															<div class="avatar avatar-sm bg-primary rounded-circle">+5</div>
														</div>
														<h6 class="mb-0 mt-3">103 people like your photo</h6>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header px-4 pt-4 pb-0">
													<div class="d-flex">
														<div class="me-2">
															<div class="avatar">
																<img alt="img" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}">
															</div>
														</div>
														<div class="ms-2">
															<h6 class="mb-0 mg-t-2">Uslod Loen</h6>
															<span class="tx-muted tx-12">Jun 21 2022, 02:03PM</span>
														</div>
														<div class="ms-auto">
															<div class="dropdown">
																<a data-bs-toggle="dropdown" href="JavaScript:void(0);" class="tx-inverse"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu shadow">
																	<a class="dropdown-item" href="javascript:void(0);">Edit Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Delete Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<p class="mg-t-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
													<div class="row row-sm">
														<div class="col">
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5 mb-2 mt-2 me-4" src="{{asset('build/assets/img/media/1.jpg')}}"></a>
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5" src="{{asset('build/assets/img/media/2.jpg')}}"></a>
														</div>
													</div>
													<div class="mg-t-15">
														<div class="avatar-list-stacked me-2">
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
															<div class="avatar avatar-sm bg-primary rounded-circle">+11</div>
														</div>
														<h6 class="mb-0 mt-3">228 people like your photo</h6>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header px-4 pt-4 pb-0">
													<div class="d-flex">
														<div class="me-2">
															<div class="avatar">
																<img alt="img" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}">
															</div>
														</div>
														<div class="ms-2">
															<h6 class="mb-0 mg-t-2">Sarah Chxn</h6>
															<span class="tx-muted tx-12">11 Nov 2022, 10:30AM</span>
														</div>
														<div class="ms-auto">
															<div class="dropdown">
																<a data-bs-toggle="dropdown" href="JavaScript:void(0);" class="tx-inverse"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu shadow">
																	<a class="dropdown-item" href="javascript:void(0);">Edit Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Delete Post</a>
																	<a class="dropdown-item" href="javascript:void(0);">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<p class="mg-t-0">Lorem ut eos amet no eirmod dolores. Et dolor sadipscing est sit, no consetetur erat sanctus no duo. Takimata elitr..</p>
													<div class="row row-sm">
														<div class="col">
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5 mb-2 mt-2 me-4" src="{{asset('build/assets/img/media/5.jpg')}}"></a>
															<a href="{{url('gallery')}}"><img alt="img" class="wd-200 br-5" src="{{asset('build/assets/img/media/6.jpg')}}"></a>
														</div>
													</div>
													<div class="mg-t-15">
														<div class="avatar-list-stacked me-2">
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></div>
															<div class="avatar avatar-sm rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
															<div class="avatar avatar-sm bg-primary rounded-circle">+9</div>
														</div>
														<h6 class="mb-0 mt-3">9K people like your photo</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="profileTab4">
									<div class="masonry row">
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/1.jpg')}}" class="js-img-viewer"
													data-caption="IMAGE-01" data-id="lion">
													<img src="{{asset('build/assets/img/photos/1.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/2.jpg')}}" class="js-img-viewer"
													data-caption="IMAGE-02" data-id="camel">
													<img src="{{asset('build/assets/img/photos/2.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/3.jpg')}}" class="js-img-viewer"
													data-caption="IMAGE-03" data-id="hippo">
													<img src="{{asset('build/assets/img/photos/3.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/4.jpg')}}" class="js-img-viewer"
													data-caption="IMAGE-04" data-id="koala">
													<img src="{{asset('build/assets/img/photos/4.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/5.jpg')}}" class="js-img-viewer"
													data-caption="IMAGE-05" data-id=" bear">
													<img src="{{asset('build/assets/img/photos/5.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/6.jpg')}}" class=" js-img-viewer"
													data-caption="IMAGE-06" data-id=" rhino">
													<img src="{{asset('build/assets/img/photos/6.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/7.jpg')}}" class=" js-img-viewer"
													data-caption="IMAGE-07" data-id=" rhino">
													<img src="{{asset('build/assets/img/photos/7.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/8.jpg')}}" class=" js-img-viewer"
													data-caption="IMAGE-08" data-id=" rhino">
													<img src=" {{asset('build/assets/img/photos/8.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/9.jpg')}}" class=" js-img-viewer"
													data-caption="IMAGE-09" data-id=" rhino">
													<img src="{{asset('build/assets/img/photos/9.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/10.jpg')}}" class=" js-img-viewer"
													data-caption="IMAGE-10" data-id=" rhino">
													<img src="{{asset('build/assets/img/photos/10.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/11.jpg')}}" class=" js-img-viewer"
													data-caption="IMAGE-11" data-id=" rhino">
													<img src="{{asset('build/assets/img/photos/11.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-sm-6">
											<div class="brick">
												<a href="{{asset('build/assets/img/photos/12.jpg')}}" class=" js-img-viewer"
													data-caption="IMAGE-11" data-id=" rhino">
													<img src="{{asset('build/assets/img/photos/12.jpg')}}" alt="" />
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="profileTab5">
									<div class="row row-sm">
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card border">
												<div class="card-body text-center">
													<div class="dropdown float-end">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-right shadow">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2 float-start"></i> Message</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2  float-start"></i> Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2 float-start"></i> View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2 float-start"></i> Delete</a>
														</div>
													</div>
													<a href="{{url('profile')}}">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}">
														<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">James Thomas</h4>
														<span class="tx-muted">Web designer</span>
														<div class="mt-3 d-flex mx-auto text-center justify-content-center">
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-facebook tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-twitter tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-linkedin tx-18"></i></div>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card border">
												<div class="card-body text-center">
													<div class="dropdown float-end">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-right shadow">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2 float-start"></i> Message</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2  float-start"></i> Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2 float-start"></i> View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2 float-start"></i> Delete</a>
														</div>
													</div>
													<a href="{{url('profile')}}">
														<img alt="avatar" class="rounded-circle"
															src="{{asset('build/assets/img/users/3.jpg')}}">
														<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Reynante Labares</h4>
														<span class="tx-muted">Web designer</span>
														<div class="mt-3 d-flex mx-auto text-center justify-content-center">
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-facebook tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-twitter tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-linkedin tx-18"></i></div>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card border">
												<div class="card-body text-center">
													<div class="dropdown float-end">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-right shadow">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2 float-start"></i> Message</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2  float-start"></i> Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2 float-start"></i> View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2 float-start"></i> Delete</a>
														</div>
													</div>
													<a href="{{url('profile')}}">
														<img alt="avatar" class="rounded-circle"
															src="{{asset('build/assets/img/users/4.jpg')}}">
														<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Owen Bongcaras</h4>
														<span class="tx-muted">Web designer</span>
														<div class="mt-3 d-flex mx-auto text-center justify-content-center">
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-facebook tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-twitter tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-linkedin tx-18"></i></div>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card border">
												<div class="card-body text-center">
													<div class="dropdown float-end">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-right shadow">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2 float-start"></i> Message</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2  float-start"></i> Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2 float-start"></i> View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2 float-start"></i> Delete</a>
														</div>
													</div>
													<a href="{{url('profile')}}">
														<img alt="avatar" class="rounded-circle"
															src="{{asset('build/assets/img/users/8.jpg')}}">
														<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Stephen Metcalfe</h4>
														<span class="tx-muted">Administrator</span>
														<div class="mt-3 d-flex mx-auto text-center justify-content-center">
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-facebook tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-twitter tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-linkedin tx-18"></i></div>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card border">
												<div class="card-body text-center">
													<div class="dropdown float-end">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-right shadow">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2 float-start"></i> Message</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2  float-start"></i> Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2 float-start"></i> View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2 float-start"></i> Delete</a>
														</div>
													</div>
													<a href="{{url('profile')}}">
														<img alt="avatar" class="rounded-circle"
															src="{{asset('build/assets/img/users/12.jpg')}}">
														<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Socrates Itumay</h4>
														<span class="tx-muted">Project Manager</span>
														<div class="mt-3 d-flex mx-auto text-center justify-content-center">
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-facebook tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-twitter tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-linkedin tx-18"></i></div>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card border">
												<div class="card-body text-center">
													<div class="dropdown float-end">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-right shadow">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2 float-start"></i> Message</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2  float-start"></i> Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2 float-start"></i> View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2 float-start"></i> Delete</a>
														</div>
													</div>
													<a href="{{url('profile')}}">
														<img alt="avatar" class="rounded-circle"
															src="{{asset('build/assets/img/users/13.jpg')}}">
														<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Odne Tho</h4>
														<span class="tx-muted">Web Designer</span>
														<div class="mt-3 d-flex mx-auto text-center justify-content-center">
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-facebook tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-twitter tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-linkedin tx-18"></i></div>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card border">
												<div class="card-body text-center">
													<div class="dropdown float-end">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-right shadow">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2 float-start"></i> Message</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2  float-start"></i> Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2 float-start"></i> View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2 float-start"></i> Delete</a>
														</div>
													</div>
													<a href="{{url('profile')}}">
														<img alt="avatar" class="rounded-circle"
															src="{{asset('build/assets/img/users/14.jpg')}}">
														<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Ayran Myan</h4>
														<span class="tx-muted">App Developer</span>
														<div class="mt-3 d-flex mx-auto text-center justify-content-center">
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-facebook tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-twitter tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-linkedin tx-18"></i></div>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card border">
												<div class="card-body text-center">
													<div class="dropdown float-end">
														<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-right shadow">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-message-square me-2 float-start"></i> Message</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit-2 me-2  float-start"></i> Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-eye me-2 float-start"></i> View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-2 float-start"></i> Delete</a>
														</div>
													</div>
													<a href="{{url('profile')}}">
														<img alt="avatar" class="rounded-circle"
															src="{{asset('build/assets/img/users/8.jpg')}}">
														<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Hawk Yso</h4>
														<span class="tx-muted">Administrator</span>
														<div class="mt-3 d-flex mx-auto text-center justify-content-center">
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-facebook tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-twitter tx-18"></i></div>
															<div class="btn btn-icon btn-outline-primary rounded-circle mx-3"><i class="bx bxl-linkedin tx-18"></i></div>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

@endsection

@section('scripts')

		<!-- smart photo master js -->
		<script src="{{asset('build/assets/plugins/SmartPhoto-master/smartphoto.js')}}"></script>
		@vite('resources/assets/js/gallery.js')

		<!-- eva-icons js -->
		<script src="{{asset('build/assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

@endsection
