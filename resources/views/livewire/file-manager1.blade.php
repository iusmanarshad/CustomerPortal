@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FILE MANAGER 1</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">File manager1</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row align-items-center mb-4">
						<div class="col-xl col-md-4 col-sm-12">
							<div class="tx-18 mb-sm-0 mb-2">Files</div>
						</div><!-- col-end -->
						<div class="col-xl-5 col-md-8 col-sm-12">
							<div class="row">
								<div class="col-sm col-12">
									<div class="input-group mb-sm-0 mb-2">
										<input type="text" class="form-control" placeholder="Search folder.....">
										<span class="input-group-append">
											<button class="btn ripple btn-primary" type="button">Search</button>
										</span>
									</div>
								</div>
								<div class="col-auto">
									<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
										<input type="radio" class="btn-check" name="fmLayout" id="fmGrid" checked="checked">
										<label class="btn btn-outline-primary mb-0" for="fmGrid"><i class="fe fe-grid"></i></label>

										<input type="radio" class="btn-check" name="fmLayout" id="fmList">
										<label class="btn btn-outline-primary mb-0" for="fmList"><i class="fe fe-list"></i></label>
									</div>
								</div>
								<div class="col-auto">
									<div class="btn-group">
										<button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fe fe-clock"></i>
										</button>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item active" href="javascript:void(0);">Date</a></li>
											<li><a class="dropdown-item" href="javascript:void(0);">Name</a></li>
											<li><a class="dropdown-item" href="javascript:void(0);">Type</a></li>
											<li><a class="dropdown-item" href="javascript:void(0);">Size</a></li>
											<li><a class="dropdown-item" href="javascript:void(0);">Starred</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->
					</div>
					<!-- row -->

					<!-- row -->
					<div class="row">
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">My Documents</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">1.2 Gb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">All Projects</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">4.51 Gb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/9.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Demo Files</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">4.51 Gb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">My Images</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">1.7 Gb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/5.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/18.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Project Files</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">2 Gb</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Backup</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">18.9 Gb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Drive Fles</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">515 Mb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/15.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/20.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/13.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Shared</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">21 Gb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle bg-primary">+8</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Bg Images</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">689 Mb</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Sounds</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">310 Kb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/11.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Drivers</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">1.1 Gb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/17.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/14.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Screenshots</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">1 Gb</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">My PDF</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">700 Mb</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/4.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Profile Images</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">400 Mb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/17.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/7.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">word</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">30 Kb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle bg-primary">+2</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/2.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">data</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">20 Kb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/13.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/14.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/3.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">Excel</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">15 Kb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/1.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
							<div class="card p-0 ">
								<div class="d-flex align-items-center px-3 pt-3">
									<a href="javascript:void(0);" class="tx-muted"><i class="fe fe-star"></i></a>
									<div class="float-end ms-auto">
										<a href="javascript:void(0);" class="tx-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
										<div class="dropdown-menu dropdown-menu-start">
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-info me-2"></i> Info</a>
										</div>
									</div>
								</div>
								<div class="card-body pt-0">
									<div class="wd-70">
										<img src="{{asset('build/assets/img/files/8.png')}}" alt="img" class="radius-4">
									</div>
									<h6 class="mb-2 font-weight-semibold">zip</h6>
									<div class="d-flex align-items-cener justify-content-between">
										<span class="tx-muted">14.4 Gb</span>
										<div class="avatar-list-stacked">
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/15.jpg')}}"></div>
											<div class="avatar avatar-xs rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/16.jpg')}}"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row -->

					<ul class="pagination float-end mb-2">
						<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
						<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
						<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
						<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
						<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
					</ul>

@endsection

@section('scripts')

		<!-- Ionicons js -->
		<script src="{{asset('build/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>

		<!-- eva-icons js -->
		<script src="{{asset('build/assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

@endsection
