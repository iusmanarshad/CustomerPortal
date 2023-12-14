@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<span class="main-content-title mg-b-0 mg-b-lg-1">BREADCRUMBS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">ELements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Basic Styling
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb mg-b-0">
												<li class="breadcrumb-item">
													<a href="javascript:void(0);">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="javascript:void(0);">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Breadcrumb Style-02
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-style2 mb-0">
												<li class="breadcrumb-item">
													<a href="javascript:void(0);">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="javascript:void(0);">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Breadcrumb Style-03
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-style3 mb-0">
												<li class="breadcrumb-item">
													<a href="javascript:void(0);">
														<svg class="svg-icon mb-1" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
													</a>
												</li>
												<li class="breadcrumb-item">
													<a href="javascript:void(0);">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Breadcrumbs-Center align
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<nav class="breadcrumb-center">
											<ol class="breadcrumb breadcrumb-style2 mb-0">
												<li class="breadcrumb-item">
													<a href="javascript:void(0);">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="javascript:void(0);">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Breadcrumbs-Right align</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<nav class="breadcrumb-end">
											<ol class="breadcrumb breadcrumb-style3 mb-0">
												<li class="breadcrumb-item">
													<a href="javascript:void(0);">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="javascript:void(0);">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')



@endsection
