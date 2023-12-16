@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">BLOG DETAILS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog-details</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12">
							<div class="card overflow-hidden">
								<div class="card-body">
									<div class="pd-x-0 pd-sm-x-80">
										<h2 class="mb-1">Inside Nature</h2>
										<p class="tx-muted mb-0">Accusam diam ut no labore est sed invidunt kasd tempor accusam. Eos amet takimata dolores no, sit stet ipsum vero. Dolore tempor dolor vero invidunt lorem stet. Ipsum at duo erat aliquyam sadipscing, elitr lorem sed voluptua vero dolore sit.</p>
									</div>
									<div class="my-4">
										<img src="{{asset('build/assets/img/photos/28.jpg')}}" alt="img" class="cover-image radius-4 w-100">
									</div>
									<div class="pd-x-0 pd-sm-x-80">
										<div class="d-sm-flex d-block align-items-center tx-muted mb-3">
											<div class="d-flex align-items-center me-4 mb-3 mb-sm-0">
												<span class="avatar-sm"><img src="{{asset('build/assets/img/users/6.jpg')}}" alt="avatar" class="rounded-circle"></span>
												<span class="ms-2 tx-14">by <a href="javascript:void(0);" class="tx-inverse tx-italic">Kristie Morgan</a></span>
											</div>
											<span><i class="fe fe-calendar me-2 tx-14"></i>17-03-2022</span>
										</div>
										<div class="mb-4">
											<h5 class="font-weight-semibold mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Elitr vero et at eirmod labore et clita invidunt lorem.Dolores magna rebum gubergren justo.</h5>
											<p class=" tx-muted">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
											<p class="mb-0 tx-muted">but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Comments
									</div>
								</div>
								<div class="card-body">
									<div class="d-block d-sm-flex pb-2 border-bottom-dashed">
										<img alt="avatar" class="avatar mg-b-10 mg-sm-b-0 rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}">
										<div class="mg-sm-s-10 flex-1">
											<h6 class="mg-b-5 font-weight-semibold">Joanne Scott</h6>
											<p class="mb-0 tx-12 tx-muted">Amet sadipscing et et gubergren sit, at diam ipsum at duo sanctus.</p>
											<div class="mt-1">
												<div class="flex-between">
													<div class="btn-list">
														<a href="javascript:void(0);" class="btn btn-sm btn-primary-light btn-rounded"><i class="fe fe-corner-up-left me-1 tx-13 d-inline-block"></i>Reply</a>
														<a href="javascript:void(0);" class="btn btn-sm btn-warning-light tx-warning btn-rounded"><i class="fe fe-alert-triangle me-1 tx-13 d-inline-block"></i>Report</a>
													</div>
													<div class="btn-list d-flex align-items-center">
														<a href="javascript:void(0);" class="p-2 tx-inverse" data-bs-toggle="tooltip" title="helpful"><i class="fe fe-thumbs-up"></i></a>
														<a href="javascript:void(0);" class="p-2 tx-inverse" data-bs-toggle="tooltip" title="not helpful"><i class="fe fe-thumbs-down"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="d-block d-sm-flex pb-2 border-bottom-dashed mt-3">
										<img alt="avatar" class="avatar mg-b-10 mg-sm-b-0 rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}">
										<div class="mg-sm-s-10 flex-1">
											<h6 class="mg-b-5 font-weight-semibold">Julia Max</h6>
											<p class="mb-0 tx-12 tx-muted">Labore sit no tempor rebum sanctus sea aliquyam. Amet sadipscing et et gubergren sit, at diam ipsum at duo sanctus.</p>
											<div class="mt-1">
												<div class="flex-between">
													<div class="btn-list">
														<a href="javascript:void(0);" class="btn btn-sm btn-primary-light btn-rounded"><i class="fe fe-corner-up-left me-1 tx-13 d-inline-block"></i>Reply</a>
														<a href="javascript:void(0);" class="btn btn-sm btn-warning-light tx-warning btn-rounded"><i class="fe fe-alert-triangle me-1 tx-13 d-inline-block"></i>Report</a>
													</div>
													<div class="btn-list d-flex align-items-center">
														<a href="javascript:void(0);" class="p-2 tx-inverse" data-bs-toggle="tooltip" title="helpful"><i class="fe fe-thumbs-up"></i></a>
														<a href="javascript:void(0);" class="p-2 tx-inverse" data-bs-toggle="tooltip" title="not helpful"><i class="fe fe-thumbs-down"></i></a>
													</div>
												</div>
												<div class="d-block d-sm-flex mg-t-10">
													<img alt="avatar" class="avatar mg-b-10 mg-sm-b-0 rounded-circle" src="{{asset('build/assets/img/users/11.jpg')}}">
													<div class="mg-sm-s-10 flex-1">
														<h6 class="mg-b-5 font-weight-semibold">Socret Mals
															<span class="tx-14 ms-0" data-bs-toggle="tooltip" title="verified"><i class="fe fe-check-circle tx-success tx-12"></i></span>
														</h6>
														<p class="mb-0 tx-12 tx-muted">Et lorem sit vero sit. Vero magna dolores dolor duo. Eirmod sea diam.</p>
														<div class="mt-1">
															<div class="flex-between">
																<div class="btn-list">
																	<a href="javascript:void(0);" class="btn btn-sm btn-primary-light btn-rounded"><i class="fe fe-corner-up-left me-1 tx-13 d-inline-block"></i>Reply</a>
																	<a href="javascript:void(0);" class="btn btn-sm btn-warning-light tx-warning btn-rounded"><i class="fe fe-alert-triangle me-1 tx-13 d-inline-block"></i>Report</a>
																</div>
																<div class="btn-list d-flex align-items-center">
																	<a href="javascript:void(0);" class="p-2 tx-inverse" data-bs-toggle="tooltip" title="helpful"><i class="fe fe-thumbs-up"></i></a>
																	<a href="javascript:void(0);" class="p-2 tx-inverse" data-bs-toggle="tooltip" title="not helpful"><i class="fe fe-thumbs-down"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="d-block d-sm-flex mt-3">
										<img alt="avatar" class="avatar mg-b-10 mg-sm-b-0 rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}">
										<div class="mg-sm-s-10 flex-1">
											<h6 class="mg-b-5 font-weight-semibold">Samatha Fae</h6>
											<p class="mb-0 tx-12 tx-muted">Dolor sadipscing ut rebum dolores labore voluptua. Et erat dolor.</p>
											<div class="mt-1">
												<div class="flex-between">
													<div class="btn-list">
														<a href="javascript:void(0);" class="btn btn-sm btn-primary-light btn-rounded"><i class="fe fe-corner-up-left me-1 tx-13 d-inline-block"></i>Reply</a>
														<a href="javascript:void(0);" class="btn btn-sm btn-warning-light tx-warning btn-rounded"><i class="fe fe-alert-triangle me-1 tx-13 d-inline-block"></i>Report</a>
													</div>
													<div class="btn-list d-flex align-items-center">
														<a href="javascript:void(0);" class="p-2 tx-inverse" data-bs-toggle="tooltip" title="helpful"><i class="fe fe-thumbs-up"></i></a>
														<a href="javascript:void(0);" class="p-2 tx-inverse" data-bs-toggle="tooltip" title="not helpful"><i class="fe fe-thumbs-down"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Add a Comment
									</div>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Your Name">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email Address">
										</div>
										<div class="form-group">
											<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Review"></textarea>
										</div>
										<a href="javascript:void(0);" class="btn btn-primary">Send Reply</a>
									</form>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Gallery
									</div>
								</div>
								<div class="card-body">
									<div class="text-center demo-gallery">
										<div class="masonry row">
											<div class="col-xl-4 col-lg-4 col-sm-6">
												<div class="brick">
													<a href="{{asset('build/assets/img/photos/1.jpg')}}" class="js-img-viewer" data-caption="IMAGE-01"
														data-id="lion">
														<img src="{{asset('build/assets/img/photos/1.jpg')}}" alt="img" />
													</a>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-sm-6">
												<div class="brick">
													<a href="{{asset('build/assets/img/photos/2.jpg')}}" class="js-img-viewer" data-caption="IMAGE-02"
														data-id="camel">
														<img src="{{asset('build/assets/img/photos/2.jpg')}}" alt="img" />
													</a>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-sm-6">
												<div class="brick">
													<a href="{{asset('build/assets/img/photos/3.jpg')}}" class="js-img-viewer" data-caption="IMAGE-03"
														data-id="hippo">
														<img src="{{asset('build/assets/img/photos/3.jpg')}}" alt="img" />
													</a>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-sm-6">
												<div class="brick">
													<a href="{{asset('build/assets/img/photos/4.jpg')}}" class="js-img-viewer" data-caption="IMAGE-04"
														data-id="koala">
														<img src="{{asset('build/assets/img/photos/4.jpg')}}" alt="img" />
													</a>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-sm-6">
												<div class="brick">
													<a href="{{asset('build/assets/img/photos/5.jpg')}}"  class="js-img-viewer" data-caption="IMAGE-05"
														data-id=" bear">
														<img src="{{asset('build/assets/img/photos/5.jpg')}}" alt="img" />
													</a>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-sm-6">
												<div class="brick">
													<a href="{{asset('build/assets/img/photos/6.jpg')}}" class=" js-img-viewer" data-caption="IMAGE-06"
														data-id=" rhino">
														<img src="{{asset('build/assets/img/photos/6.jpg')}}" alt="img" />
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<div class="card-title">About Author</div>
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap">
										<div class="me-2">
											<span class="avatar-xxl"><img src="{{asset('build/assets/img/users/6.jpg')}}" alt="avatar" class="radius-4"></span>
										</div>
										<div class="flex-1">
											<a href="javascript:void(0);" class="btn btn-def btn-sm tx-primary float-end" data-bs-toggle="tooltip" title="unfollow"><i class="fe fe-cast"></i></a>
											<h5 class="font-weight-semibold mb-0">Kristie Morgan</h5>
											<span class="tx-muted tx-12">Novelist</span>
											<div class="mt-2 d-flex align-items-center">
												<div class="me-3">
													<p class="mb-1 tx-muted font-weight-semibold">Articles</p>
													<span class="mb-1 font-weight-semibold">500</span>
												</div>
												<div>
													<p class="mb-1 tx-muted font-weight-semibold">Followers</p>
													<span class="mb-1 font-weight-semibold">39.3K</span>
												</div>
											</div>
										</div>
									</div>
									<div class="mt-2">
										<p class="mb-1 tx-muted">Et nonumy aliquyam stet clita sanctus lorem, consetetur rebum rebum vero sit eirmod duo magna, invidunt duo dolor ea at takimata ut.</p>
										<p class="tx-muted mb-0">Sed eirmod accusam et sed ea sit est, lorem ipsum eos,. Elitr labore erat elitr dolor.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<div class="card-title">Related Articles</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled mb-0">
										<li class="mb-4">
											<h5 class="font-weight-semibold">10 Ways to Immediately Start Selling Products!</h5>
											<p class="mb-0 tx-muted">Eos lorem eos erat clita diam sea sed et nonumy, et ut sit vero dolor gubergren ipsum magna at. Amet.</p>
											<a href="{{url('blog-details')}}" class="btn btn-outline-primary btn-sm mt-2">Read Article</a>
										</li>
										<li class="mb-4">
											<h5 class="font-weight-semibold">7 Interesting Facts Everyone Must Know about Healty Diet Plans.</h5>
											<p class="mb-0 tx-muted">Eos lorem eos erat clita diam sea sed et nonumy, et ut sit vero dolor gubergren ipsum magna at. Amet.</p>
											<a href="{{url('blog-details')}}" class="btn btn-outline-primary btn-sm mt-2">Read Article</a>
										</li>
										<li class="mb-0">
											<h5 class="font-weight-semibold">10 Ways to Immediately Start Selling Products!</h5>
											<p class="mb-0 tx-muted">Eos lorem eos erat clita diam sea sed et nonumy, et ut sit vero dolor gubergren ipsum magna at. Amet.</p>
											<a href="{{url('blog-details')}}" class="btn btn-outline-primary btn-sm mt-2">Read Article</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Categories
									</div>
								</div>
								<div class="card-body">
									<div class="tags">
										<a href="javascript:void(0);" class="tag rounded-pill">Life style</a>
										<a href="javascript:void(0);" class="tag rounded-pill">Health</a>
										<a href="javascript:void(0);" class="tag rounded-pill">Tourism</a>
										<a href="javascript:void(0);" class="tag rounded-pill">Web designing</a>
										<a href="javascript:void(0);" class="tag rounded-pill">Medical</a>
										<a href="javascript:void(0);" class="tag rounded-pill">Hotels</a>
										<a href="javascript:void(0);" class="tag rounded-pill">Real estate</a>
										<a href="javascript:void(0);" class="tag rounded-pill">Business</a>
										<a href="javascript:void(0);" class="tag rounded-pill">Shopping</a>
										<a href="javascript:void(0);" class="tag rounded-pill">Marketing</a>
										<a href="javascript:void(0);" class="tag rounded-pill">Housing</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--End Row-->

@endsection

@section('scripts')

		<!-- smart photo master js -->
		<script src="{{asset('build/assets/plugins/SmartPhoto-master/smartphoto.js')}}"></script>
		@vite('resources/assets/js/gallery.js')

@endsection
