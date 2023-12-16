@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">MAIL COMPOSE</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Mail Compose</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row opened -->
					<div class="row row-sm">

						<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-body p-0">
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
						</div><!-- col-end -->

						<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
							<div class="card overflow-hidden">
								<div class="card-header">
									<div class="card-title">Compose Mail</div>
								</div>
								<div class="card-body">
									<form >
										<div class="form-group">
											<div class="row align-items-center">
												<label class="col-sm-2">To</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" placeholder="recepient@mail.com">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row align-items-center">
												<label class="col-sm-2">Subject</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" placeholder="Enter your subject here">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row ">
												<label class="col-sm-2">Message</label>
												<div class="col-sm-10">
													<textarea rows="10" class="form-control" placeholder="Your message..."></textarea>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="card-footer">
									<div class="d-sm-flex">
										<div class="btn-list">
											<a href="javascript:void(0);" class="btn btn-sm btn-def" data-bs-toggle="tooltip" data-bs-placement="top" title="Attach"><i class="bx bx-paperclip tx-muted tx-18"></i></a>
											<a href="javascript:void(0);" class="btn btn-sm btn-def" data-bs-toggle="tooltip" data-bs-placement="top" title="Link"><i class="bx bx-link tx-muted tx-18"></i></a>
											<a href="javascript:void(0);" class="btn btn-sm btn-def" data-bs-toggle="tooltip" data-bs-placement="top" title="Photos"><i class="bx bx-image tx-muted tx-18"></i></a>
											<a href="javascript:void(0);" class="btn btn-sm btn-def" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bx bx-trash tx-muted tx-18"></i></a>
										</div>
										<div class="ms-auto">
											<a class="btn btn-primary" href="{{url('mail-compose')}}"><i class="far fa-paper-plane me-2"></i> Send</a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- row closed -->

@endsection

@section('scripts')



@endsection
