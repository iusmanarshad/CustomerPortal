@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">LIST GROUP</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">List Group</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic List group</div>
								</div>
								<div class="card-body">
									<ul class="list-group">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
										<li class="list-group-item">A fourth item</li>
										<li class="list-group-item">And a fifth one</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Custom List group</div>
								</div>
								<div class="card-body">
									<ul class="list-group custom-list-group">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
										<li class="list-group-item">A fourth item</li>
										<li class="list-group-item">And a fifth one</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic List group with Active item</div>
								</div>
								<div class="card-body">
									<ul class="list-group">
										<li class="list-group-item active" aria-current="true">An active item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
										<li class="list-group-item">A fourth item</li>
										<li class="list-group-item">And a fifth one</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic List group with Disabled item</div>
								</div>
								<div class="card-body">
									<ul class="list-group">
										<li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
										<li class="list-group-item">A fourth item</li>
										<li class="list-group-item">And a fifth one</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">List group with Link</div>
								</div>
								<div class="card-body">
									<div class="list-group">
										<a href="javascript:void(0);" class="list-group-item list-group-item-action active" aria-current="true">
											The current link item
										</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action">A second link item</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action">A third link item</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action">A fourth link item</a>
										<a href="javascript:void(0);" class="list-group-item list-group-item-action disabled" tabindex="-1">A disabled link item</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">List group with Buttons</div>
								</div>
								<div class="card-body">
									<div class="list-group">
										<button type="button" class="list-group-item list-group-item-action active" aria-current="true">
											The current button
										</button>
										<button type="button" class="list-group-item list-group-item-action">A second item</button>
										<button type="button" class="list-group-item list-group-item-action">A third button item</button>
										<button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
										<button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Numbered list group</div>
								</div>
								<div class="card-body">
									<ol class="list-group list-group-numbered">
										<li class="list-group-item">Cras justo odio</li>
										<li class="list-group-item">Cras justo odio</li>
										<li class="list-group-item">Cras justo odio</li>
										<li class="list-group-item">Cras justo odio</li>
										<li class="list-group-item">Cras justo odio</li>
									</ol>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">List group with flush</div>
								</div>
								<div class="card-body">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
										<li class="list-group-item">A fourth item</li>
										<li class="list-group-item">A fifth item</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Numbered list group with custom content</div>
								</div>
								<div class="card-body">
									<ol class="list-group list-group-numbered">
										<li class="list-group-item d-flex justify-content-between align-items-start">
											<div class="ms-2 me-auto">
											<div class="fw-bold">Subheading</div>
											Cras justo odio
											</div>
											<span class="badge bg-primary rounded-pill">14</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-start">
											<div class="ms-2 me-auto">
											<div class="fw-bold">Subheading</div>
											Cras justo odio
											</div>
											<span class="badge bg-primary rounded-pill">14</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-start">
											<div class="ms-2 me-auto">
											<div class="fw-bold">Subheading</div>
											Cras justo odio
											</div>
											<span class="badge bg-primary rounded-pill">14</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-start">
											<div class="ms-2 me-auto">
											<div class="fw-bold">Subheading</div>
											Cras justo odio
											</div>
											<span class="badge bg-primary rounded-pill">14</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-start">
											<div class="ms-2 me-auto">
											<div class="fw-bold">Subheading</div>
											Cras justo odio
											</div>
											<span class="badge bg-primary rounded-pill">14</span>
										</li>
									</ol>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Horizontal List Group With Responsive Breakpoints</div>
								</div>
								<div class="card-body">
									<ul class="list-group list-group-horizontal">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
									<ul class="list-group list-group-horizontal-sm mt-2">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
									<ul class="list-group list-group-horizontal-md mt-2">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
									<ul class="list-group list-group-horizontal-lg mt-2">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
									<ul class="list-group list-group-horizontal-xl mt-2">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
									<ul class="list-group list-group-horizontal-xxl mt-2">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Custom Horizontal List Group With Responsive Breakpoints</div>
								</div>
								<div class="card-body">
									<ul class="list-group custom-list-group-horizontal list-group-horizontal">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
									<ul class="list-group custom-list-group-horizontal list-group-horizontal-sm mt-2">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
									<ul class="list-group custom-list-group-horizontal list-group-horizontal-md mt-2">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
									<ul class="list-group custom-list-group-horizontal list-group-horizontal-lg mt-2">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
									<ul class="list-group custom-list-group-horizontal list-group-horizontal-xl mt-2">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
									<ul class="list-group custom-list-group-horizontal list-group-horizontal-xxl mt-2">
										<li class="list-group-item">An item</li>
										<li class="list-group-item">A second item</li>
										<li class="list-group-item">A third item</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">List group with Checkboxes</div>
								</div>
								<div class="card-body">
									<ul class="list-group">
										<li class="list-group-item">
											<label class="d-flex align-items-center mb-0">
												<span class="check-box mb-0 ms-2">
													<span class="ckbox"><input type="checkbox"><span></span></span>
												</span>
												<span class="ms-3 my-auto">
													First checkbox
												</span>
											</label>
										</li>
										<li class="list-group-item">
											<label class="d-flex align-items-center mb-0">
												<span class="check-box mb-0 ms-2">
													<span class="ckbox"><input type="checkbox"><span></span></span>
												</span>
												<span class="ms-3 my-auto">
													Second checkbox
												</span>
											</label>
										</li>
										<li class="list-group-item">
											<label class="d-flex align-items-center mb-0">
												<span class="check-box mb-0 ms-2">
													<span class="ckbox"><input type="checkbox"><span></span></span>
												</span>
												<span class="ms-3 my-auto">
													Third checkbox
												</span>
											</label>
										</li>
										<li class="list-group-item">
											<label class="d-flex align-items-center mb-0">
												<span class="check-box mb-0 ms-2">
													<span class="ckbox"><input type="checkbox"><span></span></span>
												</span>
												<span class="ms-3 my-auto">
													Fourth checkbox
												</span>
											</label>
										</li>
										<li class="list-group-item">
											<label class="d-flex align-items-center mb-0">
												<span class="check-box mb-0 ms-2">
													<span class="ckbox"><input type="checkbox"><span></span></span>
												</span>
												<span class="ms-3 my-auto">
													Fifth checkbox
												</span>
											</label>
										</li>
										<li class="list-group-item">
											<label class="d-flex align-items-center mb-0">
												<span class="check-box mb-0 ms-2">
													<span class="ckbox"><input type="checkbox"><span></span></span>
												</span>
												<span class="ms-3 my-auto">
													Sixth checkbox
												</span>
											</label>
										</li>
										<li class="list-group-item">
											<label class="d-flex align-items-center mb-0">
												<span class="check-box mb-0 ms-2">
													<span class="ckbox"><input type="checkbox"><span></span></span>
												</span>
												<span class="ms-3 my-auto">
													Seventh checkbox
												</span>
											</label>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Contextual classes</div>
								</div>
								<div class="card-body">
									<ul class="list-group">
										<li class="list-group-item">A simple default list group item</li>
										<li class="list-group-item list-group-item-primary">A simple primary list group item</li>
										<li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
										<li class="list-group-item list-group-item-success">A simple success list group item</li>
										<li class="list-group-item list-group-item-danger">A simple danger list group item</li>
										<li class="list-group-item list-group-item-light">A simple light list group item</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card" >
								<div class="card-header">
									<div class="card-title">Custom content</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="list-group">
											<a class="list-group-item list-group-item-action active" href="javascript:void(0);">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-2 tx-14">List group item heading</h5><small class="tx-12 font-weight-semibold">3 d ago</small>
												</div>
												<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="tx-12">Donec id elit non mi porta.</small>
											</a>
											<a class="list-group-item list-group-item-action" href="javascript:void(0);">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-2 tx-14">List group item heading</h5><small class="tx-12 font-weight-semibold">3 d ago</small>
												</div>
												<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="tx-12">Donec id elit non mi porta.</small>
											</a>
											<a class="list-group-item list-group-item-action" href="javascript:void(0);">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-2 tx-14">List group item heading</h5><small class="tx-12 font-weight-semibold">3 d ago</small>
												</div>
												<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="tx-12">Donec id elit non mi porta.</small>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card" >
								<div class="card-header">
									<div class="card-title">Custom content with image</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="list-group">
											<a class="list-group-item list-group-item-action active" href="javascript:void(0);">
												<div class="d-block w-100 d-sm-flex">
													<img alt="img" class="rounded-circle avatar mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/3.jpg')}}">
													<div class="mg-sm-s-10 flex-1">
														<div class="d-flex w-100 justify-content-between">
															<h5 class="mb-2 tx-14">List group item heading</h5><small class="tx-12 font-weight-semibold">3 d ago</small>
														</div>
														<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="tx-12">Donec id elit non mi porta.</small>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action" href="javascript:void(0);">
												<div class="d-block w-100 d-sm-flex">
													<img alt="img" class="rounded-circle avatar mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/8.jpg')}}">
													<div class="mg-sm-s-10 flex-1">
														<div class="d-flex w-100 justify-content-between">
															<h5 class="mb-2 tx-14">List group item heading</h5><small class="tx-12 font-weight-semibold">3 d ago</small>
														</div>
														<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="tx-12">Donec id elit non mi porta.</small>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action" href="javascript:void(0);">
												<div class="d-block w-100 d-sm-flex">
													<img alt="img" class="rounded-circle avatar mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/11.jpg')}}">
													<div class="mg-sm-s-10 flex-1">
														<div class="d-flex w-100 justify-content-between">
															<h5 class="mb-2 tx-14">List group item heading</h5><small class="tx-12 font-weight-semibold">3 d ago</small>
														</div>
														<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="tx-12">Donec id elit non mi porta.</small>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">USER LIST</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="list-group">
											<div class="list-group-item">
												<div class="d-block d-sm-flex">
													<img class="rounded-circle avatar mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/2.jpg')}}" alt="avatar">
													<div class="mg-sm-s-10">
														<small class="font-weight-semibold tx-12 float-end ms-auto tx-muted">4 hr ago</small>
														<h5 class="mg-b-5">Blake Vanessa</h5>
														<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="d-block d-sm-flex">
													<img class="rounded-circle avatar mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/18.jpg')}}" alt="avatar">
													<div class="mg-sm-s-10">
														<small class="font-weight-semibold tx-12 float-end ms-auto tx-muted">4 hr ago</small>
														<h5 class="mg-b-5">Blake Vanessa</h5>
														<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="d-block d-sm-flex">
													<img class="rounded-circle avatar mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/19.jpg')}}" alt="avatar">
													<div class="mg-sm-s-10">
														<small class="font-weight-semibold tx-12 float-end ms-auto tx-muted">4 hr ago</small>
														<h5 class="mg-b-5">Blake Vanessa</h5>
														<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Unordered List</div>
								</div>
								<div class="card-body">
									<ul class="unlist-style-1">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>Nulla volutpat aliquam velit
											<ul class="mt-3">
												<li>Phasellus iaculis neque</li>
												<li>Purus sodales ultricies</li>
												<li>Ac tristique libero volutpat at</li>
											</ul>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Unorder List Style-02</div>
								</div>
								<div class="card-body">
									<ul class="unlist-style-2">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Nulla volutpat aliquam velit
											<ul class="mt-3">
												<li>Phasellus iaculis neque</li>
												<li>Purus sodales ultricies</li>
 												<li>Ac tristique libero volutpat at</li>
											</ul>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Unorder List Style-03</div>
								</div>
								<div class="card-body">
									<ul class="unlist-style-3">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>Nulla volutpat aliquam velit
											<ul class="mt-3">
												<li>Phasellus iaculis neque</li>
												<li>Purus sodales ultricies</li>
												<li>Vestibulum laoreet porttitor sem</li>
												<li>Ac tristique libero volutpat at</li>
											</ul>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Ordered list</div>
								</div>
								<div class="card-body">
									<ol class="list-style-1">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>Nulla volutpat aliquam velit
										<ol class="list-style-1 mt-3">
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
											<li>Vestibulum laoreet porttitor sem</li>
											<li>Ac tristique libero volutpat at</li>
										</ol>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
									</ol>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Ordered List Style-02</div>
								</div>
								<div class="card-body">
									<ul class="list-style-2">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>Nulla volutpat aliquam velit
											<ol class="mt-3">
												<li>Phasellus iaculis neque</li>
												<li>Purus sodales ultricies</li>
												<li>Vestibulum laoreet porttitor sem</li>
												<li>Ac tristique libero volutpat at</li>
											</ol>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Ordered List Style-03</div>
								</div>
								<div class="card-body">
									<ul class="list-style-3">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>Nulla volutpat aliquam velit
											<ol class="mt-3">
												<li>Phasellus iaculis neque</li>
												<li>Purus sodales ultricies</li>
												<li>Vestibulum laoreet porttitor sem</li>
												<li>Ac tristique libero volutpat at</li>
											</ol>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Order With unorder</div>
								</div>
								<div class="card-body">
									<ol class="list-style-1">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>
											<ul class="unlist-style-1 mt-3">
												<li>Phasellus iaculis neque</li>
												<li>Vestibulum laoreet porttitor sem</li>
												<li>Ac tristique libero volutpat at</li>
											</ul>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
									</ol>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">List Unstyled</div>
								</div>
								<div class="card-body">
									<ol class="list-unstyled">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>Nulla volutpat aliquam velit
											<ol class="list-style-1 mt-3">
												<li>Purus sodales ultricies</li>
												<li>Ac tristique libero volutpat at
													<ul class="unlist-style-3 mt-3">
														<li>Phasellus iaculis neque</li>
														<li>Purus sodales ultricies</li>
													</ul>
												</li>
											</ol>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
									</ol>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')



@endsection
