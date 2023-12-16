@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<span class="main-content-title mg-b-0 mg-b-lg-1">AVATARS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Avatars</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Default Avatars
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="avatar-group">
											<div class="avatar avatar-xs">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
											</div>
											<div class="avatar avatar-sm">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
											</div>
											<div class="avatar">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
											</div>
											<div class="avatar avatar-lg">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
											</div>
											<div class="avatar avatar-xl">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
											</div>
											<div class="avatar avatar-xxl">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Avatars With Initials
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="avatar-group">
											<div class="avatar avatar-xs bg-primary rounded-circle">
												Z
											</div>
											<div class="avatar avatar-sm bg-secondary rounded-circle">
												E
											</div>
											<div class="avatar bg-orange rounded-circle">
												M
											</div>
											<div class="avatar avatar-lg bg-danger rounded-circle">
												B
											</div>
											<div class="avatar avatar-xl bg-teal rounded-circle d-none d-sm-flex">
												T
											</div>
											<div class="avatar avatar-xxl bg-success rounded-circle d-none d-sm-flex">
												S
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Avatar Shapes
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="avatar-group">
											<div class="avatar avatar-lg">
												<img alt="avatar" class="radius-3" src="{{asset('build/assets/img/users/5.jpg')}}">
											</div>
											<div class="avatar avatar-xl mx-2">
												<img alt="avatar" src="{{asset('build/assets/img/users/6.jpg')}}">
											</div>
											<div class="avatar avatar-xxl">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Status Indicator
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="avatar-group">
											<div class="avatar-status avatar-lg me-2">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}">
											</div>
											<div class="avatar-status avatar-xxl offline">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Avatars with numbers</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="avatar-group">
											<div class="avatar-badge avatar-xs">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
												<span class="badge rounded-circle bg-primary number-badge">2</span>
											</div>
											<div class="avatar-badge avatar-sm">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
												<span class="badge rounded-circle badge-secondary number-badge">2</span>
											</div>
											<div class="avatar-badge avatar">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
												<span class="badge rounded-circle bg-orange number-badge">11</span>
											</div>
											<div class="avatar-badge avatar-lg">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
												<span class="badge rounded-circle bg-success number-badge">3</span>
											</div>
											<div class="avatar-badge avatar-xl">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
												<span class="badge rounded-circle bg-teal number-badge">3</span>
											</div>
											<div class="avatar-badge avatar-xxl">
												<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
												<span class="badge rounded-circle bg-danger number-badge">3</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Stacked Avatars in Numbers
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="avatar-list-stacked">
											<div class="avatar rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></div>
											<div class="avatar rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
											<div class="avatar rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/8.jpg')}}"></div>
											<div class="avatar rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}"></div>
											<div class="avatar rounded-circle"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
											<div class="avatar bg-primary rounded-circle">+8</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')



@endsection
