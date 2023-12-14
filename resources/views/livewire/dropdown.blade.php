@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">DROPDOWNS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Example</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary" data-bs-toggle="dropdown" id="dropdownMenuButton01" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary" data-bs-toggle="dropdown" id="dropdownMenuButton11" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-success" data-bs-toggle="dropdown" id="dropdownMenuButton12" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger" data-bs-toggle="dropdown" id="dropdownMenuButton13" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Rounded button dropdowns</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-rounded btn-secondary" data-bs-toggle="dropdown" id="dropdownMenuButton4" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-rounded btn-primary" data-bs-toggle="dropdown" id="dropdownMenuButton5" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-rounded btn-success" data-bs-toggle="dropdown" id="dropdownMenuButton6" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-rounded btn-danger" data-bs-toggle="dropdown" id="dropdownMenuButton16" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Outline button dropdowns</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary" data-bs-toggle="dropdown" id="dropdownMenuButton8" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-primary" data-bs-toggle="dropdown" id="dropdownMenuButton9" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-success" data-bs-toggle="dropdown" id="dropdownMenuButton10" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Rounded Outline button dropdowns</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-rounded btn-outline-secondary" data-bs-toggle="dropdown" id="dropdownMenuButton02" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-rounded btn-outline-primary" data-bs-toggle="dropdown" id="dropdownMenuButton03" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-rounded btn-outline-success" data-bs-toggle="dropdown" id="dropdownMenuButton14" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Split button dropdowns</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-secondary">Action</button>
												<button type="button" class="btn btn-secondary dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-primary">Action</button>
												<button type="button" class="btn btn-primary dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-success">Action</button>
												<button type="button" class="btn btn-success dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Rounded split button dropdowns</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-secondary btn-rounded">Action</button>
												<button type="button" class="btn btn-secondary btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-primary btn-rounded">Action</button>
												<button type="button" class="btn btn-primary btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-success btn-rounded">Action</button>
												<button type="button" class="btn btn-success btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Outline split button dropdowns</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-outline-secondary">Action</button>
												<button type="button" class="btn btn-outline-secondary dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-outline-primary">Action</button>
												<button type="button" class="btn btn-outline-primary dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-outline-success">Action</button>
												<button type="button" class="btn btn-outline-success dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Rounded Outline split  button dropdowns</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-outline-secondary btn-rounded">Action</button>
												<button type="button" class="btn btn-outline-secondary  btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-outline-primary btn-rounded">Action</button>
												<button type="button" class="btn btn-outline-primary btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown btn-group">
												<button type="button" class="btn btn-outline-success btn-rounded">Action</button>
												<button type="button" class="btn btn-outline-success btn-rounded dropdown-toggle split-dropdown" data-bs-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Active Menu Item</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item active" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										 </div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item  active" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										 </div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-success" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item   active" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										 </div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Disabled Menu Item</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item disabled" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item disabled" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-success" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item disabled" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Dropdown Sizes</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" id="dropdownMenuButton" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary" data-bs-toggle="dropdown" id="dropdownMenuButton1" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-success btn-lg" data-bs-toggle="dropdown" id="dropdownMenuButton2" type="button">Dropdown <i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-xl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Dropdown Header</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-success" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
													<a class="dropdown-item" href="javascript:void(0);">Action</a>
													<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Dropdown Divider</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
													<a class="dropdown-item" href="javascript:void(0);">Action</a> <a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
													<a class="dropdown-item" href="javascript:void(0);">Action</a> <a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</div>
											</div>
										</div>
										<div class="btn-group m-1">
											<div class="dropdown">
												<button aria-expanded="false" aria-haspopup="true" class="btn btn-success" data-bs-toggle="dropdown" type="button">Dropdown<i class="fa fa-chevron-down ms-2 tx-10"></i></button>
												<div class="dropdown-menu tx-13">
													<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
													<a class="dropdown-item" href="javascript:void(0);">Action</a> <a class="dropdown-item" href="javascript:void(0);">Another action</a>
													<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													<div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0);">Separated link</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xxl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Dropright & Dropleft</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="row row-xs">
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropup mg-t-10 mg-md-t-0 d-sm-block d-none">
													<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" id="dropleftMenuButton" type="button">Dropleft Menu</button>
													<div aria-labelledby="dropleftMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropend mg-t-10 mg-md-t-0">
													<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" id="droprightMenuButton" type="button">Dropright Menu</button>
													<div aria-labelledby="dropleftMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="dropdown mg-t-10 mg-md-t-0 d-sm-block d-none">
													<button aria-expanded="false" aria-haspopup="true" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" id="dropleftMenuButton1" type="button">Dropleft Menu</button>
													<div aria-labelledby="dropleftMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropstart mg-t-10 mg-md-t-0">
													<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" id="dropleftMenuButton2" type="button">Dropleft Menu</button>
													<div aria-labelledby="dropleftMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12 col-md-12 col-xxl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Dropdown with icons</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="btn-group mb-2 mt-2">
											<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="fe fe-mail "></i>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>

												<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
											</ul>
										</div>
										<div class="btn-group mb-2 mt-2">
											<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="fe fe-more-horizontal"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>

												<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
											</ul>
										</div>
										<div class="btn-group mb-2 mt-2">
											<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="fe fe-more-vertical"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>

												<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
											</ul>
										</div>
										<div class="btn-group mb-2 mt-2">
											<button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="fe fe-settings"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>

												<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- eva-icons js -->
		<script src="{{asset('build/assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

@endsection
