@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">MEDIA OBJECT</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Media object</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Example</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="d-block d-sm-flex">
											<img alt="avatar" class="avatar-lg br-5 mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/4.jpg')}}">
											<div class="mg-sm-s-20">
												<h5 class="mg-b-5">Media heading</h5>
												<p class="mb-0">Et gubergren eirmod dolor lorem gubergren lorem dolore ut diam, labore sit no tempor rebum sanctus sea aliquyam. Amet sadipscing et et gubergren sit, at diam ipsum at duo sanctus.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Media Object With Date</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="d-block d-sm-flex">
											<img alt="avatar" class="avatar-lg br-5 mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/14.jpg')}}">
											<div class="mg-sm-s-20">
												<h5 class="mg-b-5">Media heading <small class="tx-muted font-weight-semibold ms-1">Posted On Jan 11, 2022</small> </h5>
												<p class="mb-0">No ipsum vero eos et sed takimata accusam eos eos, et sit amet labore vero vero dolores eirmod nonumy. Et duo dolore stet erat et justo erat no. Diam sadipscing.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Nesting</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="d-block d-sm-flex">
											<img alt="avatar" class="avatar-lg br-5 mg-b-20 mg-sm-b-0" src="{{asset('build/assets/img/users/9.jpg')}}">
											<div class="mg-sm-s-20">
												<h5 class="mg-b-5">Media heading</h5>
												<p class="mb-0">Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												<div class="d-block d-sm-flex mg-t-25">
													<img alt="" class="avatar-lg br-5 mg-b-20 mg-sm-b-0" src="{{asset('build/assets/img/users/8.jpg')}}">
													<div class="mg-sm-s-20">
														<h5 class="mg-b-5">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Vertical Alignment</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="d-block d-sm-flex align-items-center">
											<img alt="avatar" class="avatar-lg br-5 mg-b-20 mg-sm-b-0" src="{{asset('build/assets/img/users/13.jpg')}}">
											<div class="mg-sm-s-20">
												<h5 class="mg-b-5">Media heading <small class="tx-muted font-weight-semibold ms-1">Posted On Jan 16, 2022</small> </h5>
												Gubergren duo et sed elitr dolor elitr amet vero dolores. Amet est elitr nonumy dolor diam nonumy. Et sed takimata dolor dolores eirmod. Sed sed invidunt takimata nonumy dolores nonumy.
												Sadipscing sed dolor no aliquyam erat labore accusam duo tempor, gubergren vero sadipscing magna dolores. Et diam duo sit justo rebum lorem, takimata takimata tempor et ut gubergren. Eos dolore takimata at amet lorem. Labore.
												Kasd aliquyam ipsum ut dolor clita diam. Elitr et diam dolores dolores ut aliquyam, diam dolore diam amet et sit.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Order</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="d-block d-sm-flex">
											<img alt="avatar" class="avatar-lg br-5 order-2 mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/18.jpg')}}">
											<div class="order-1 mg-sm-e-20">
												<h5 class="mg-b-5">Media heading <small class="tx-muted font-weight-semibold ms-1">27 Nov, 2022</small> </h5>
												<p class="mb-0">Et gubergren eirmod dolor lorem gubergren lorem dolore ut diam, labore sit no tempor rebum sanctus sea aliquyam. Amet sadipscing et et gubergren sit, at diam ipsum at duo sanctus. Et gub er gren eirmod dolor lorem guber gren lorem dolore ut diam, labore sit no tempor rebum sanctus sea aliquyam. Amet sadipscing et et gubergren sit, at diam ipsum at duo sanctus.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Media List</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="list-unstyled">
											<li>
												<div class="d-block d-sm-flex">
													<img alt="avatar" class="avatar-lg br-5 mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/12.jpg')}}">
													<div class="mg-sm-s-20">
														<h5 class="mg-b-5">Media heading</h5>
														<p class="mb-0">Et gubergren eirmod dolor lorem gubergren lorem dolore ut diam, labore sit no tempor rebum sanctus sea aliquyam. Amet sadipscing et et gubergren sit, at diam ipsum at duo sanctus.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="d-block d-sm-flex">
													<img alt="avatar" class="avatar-lg br-5 mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/19.jpg')}}">
													<div class="mg-sm-s-20">
														<h5 class="mg-b-5">Media heading</h5>
														<p class="mb-0">Et gubergren eirmod dolor lorem gubergren lorem dolore ut diam, labore sit no tempor rebum sanctus sea aliquyam. Amet sadipscing et et gubergren sit, at diam ipsum at duo sanctus.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="d-block d-sm-flex">
													<img alt="avatar" class="avatar-lg br-5 mg-b-10 mg-sm-b-0" src="{{asset('build/assets/img/users/6.jpg')}}">
													<div class="mg-sm-s-20">
														<h5 class="mg-b-5">Media heading</h5>
														<p class="mb-0">Et gubergren eirmod dolor lorem gubergren lorem dolore ut diam, labore sit no tempor rebum sanctus sea aliquyam. Amet sadipscing et et gubergren sit, at diam ipsum at duo sanctus.</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- Ionicons js -->
		<script src="{{asset('build/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

        <!-- eva-icons js -->
		<script src="{{asset('build/assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

@endsection
