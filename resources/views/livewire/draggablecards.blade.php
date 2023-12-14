@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">DRAGGABLE CARDS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Draggable cards</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="sortable">
						<div class="row row-sm">
							<div class="col-xl-4 col-sm-12 col-md-6  col-lg-4">
								<div class="card card-draggable">
									<div class="card-header">
										<div class="card-title">
											Card Title
										</div>
									</div>
									<div class="card-body">
										There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
									</div>
								</div>
								<div class="card card-draggable">
									<img alt="Image" class="img-fluid card-img-top" src="{{asset('build/assets/img/photos/16.jpg')}}">
									<div class="card-body">
										<p class="card-title">Card Title</p>
										Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.
									</div>
								</div>
								<div class="card card-primary card-draggable">
									<div class="card-header">
										<div class="card-title">
											Card Primary
										</div>
									</div>
									<div class="card-body">
										<p class="card-subtitle">This is the card subtitle</p>
										<p class="mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
								<div class="card card-bg-primary card-draggable">
									<div class="card-header">
										<div></div>
									</div>
									<div class="card-body">
										<p class="card-title">Card BG Primary</p>
										<p class="card-subtitle">This is the card subtitle</p>
										<p class="mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<div class="card-footer">
										<p class="mb-0">Basic Card Footer</p>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-md-6 col-lg-4">
								<div class="card card-bg-secondary card-draggable">
									<div class="card-body">
										<p class="card-title">Card BG Secondary</p>
										There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
									</div>
								</div>
								<div class="card card-draggable">
									<div class="card-body">
										<p class="card-title">Card Title</p>
										<p class="card-subtitle">This is the card subtitle</p>
										<p class="mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<div class="card-footer">
										<p class="mb-0">Basic Card Footer</p>
									</div>
								</div>
								<div class="card card-bg-dark card-draggable">
									<div class="card-body">
										<p class="card-title">Card BG Dark</p>
										There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
									</div>
								</div>
								<div class="card card-draggable">
									<div class="card-body">
										<p class="card-title">Card Title</p>
										Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
									</div>
									<img alt="Image" class="img-fluid card-img-bottom" src="{{asset('build/assets/img/photos/12.jpg')}}">
								</div>
							</div>
							<div class="col-xl-4 col-sm-12 col-md-12 col-lg-4">
								<div class="card card-success card-draggable">
									<div class="card-body">
										<p class="card-title">Card Success</p>
										There are many variations of passages of Lorem Ipsum available, but the majority have suffered
									</div>
								</div>
								<div class="card card-draggable">
									<div class="card-header bg-white">
										<p class="card-title">Overlay With Card Header</p>
									</div>
									<div class="card-body">
										<div class="pos-relative">
											<img alt="Image" class="img-fluid card-img" src="{{asset('build/assets/img/photos/3.jpg')}}">
											<div class="card-img-overlay bg-black-5">
												<p class="tx-white op-8"> Lorem Ipsum Diam et consetetur nonumy dolor justo dolor et amet. Ea. Diam gubergren et nonumy. Sed diam est et no at rebum, et diam ea sanctus.</p>
											</div><!-- card-img-overlay -->
										</div>
									</div>
								</div>
								<div class="card card-draggable">
									<div class="card-header">
										<div class="card-title flex-between">
											Card With Alert Notifications
											<div class="card-options">
												<a href="javascript:void(0);" class="card-options-collapse tx-inverse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="javascript:void(0);" class="card-options-fullscreen tx-inverse" data-bs-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
												<a href="javascript:void(0);" class="card-options-remove tx-inverse" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
									</div>
									<div class="card-alert alert-primary">
										<p class="mb-0">This is an Primary Alert.</p>
									</div>
									<div class="card-body">
										There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
									</div>
								</div>
								<div class="card card-draggable">
									<img alt="Image" class="img-fluid card-img" src="{{asset('build/assets/img/photos/3.jpg')}}">
									<div class="card-body p-0">
										<div class="card-img-overlay bg-black-5">
											<p class="card-title tx-white">Card Title On Image Overlay</p>
											<p class="tx-white op-8"> Lorem Ipsum Diam et consetetur nonumy dolor justo dolor et amet. Ea. Diam gubergren et nonumy. Sed diam est et no at rebum, et diam ea sanctus.</p>
											<a href="javascript:void(0);" class="tx-white">Read More</a>
										</div><!-- card-img-overlay -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!--- Internal Draggable js-->
		<script src="{{asset('build/assets/plugins/draggable/jquery-ui-draggable.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/draggable/draggable.js')}}"></script>

@endsection
