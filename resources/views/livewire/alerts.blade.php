@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">ALERTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Alerts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Basic Alerts
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="row">
											<div class="col-md-6">
												<div class="alert alert-success alert-dismissible fade show" role="alert">
													<strong>Well done!</strong> Your data submitted successfully.
												</div>
											</div>
											<div class="col-md-6">
												<div class="alert alert-info alert-dismissible fade show" role="alert">
													<strong>Heads up!</strong> Please read all the instructions carefully.
												</div>
											</div>
											<div class="col-md-6">
												<div class="alert alert-warning alert-dismissible fade show" role="alert">
													<strong>Warning!</strong> There is problem with your connectioin.
												</div>
											</div>
											<div class="col-md-6">
												<div class="alert alert-danger mg-b-0 alert-dismissible fade show" role="alert">
													<strong>Oh snap!</strong> Submission failed. Please try again.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Link color Alerts
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="row">
											<div class="col-md-6">
												<div class="alert alert-primary" role="alert">
													A simple primary alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
											</div>
											<div class="col-md-6">
												<div class="alert alert-secondary" role="alert">
													A simple secondary alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
											</div>
											<div class="col-md-6">
												<div class="alert alert-success" role="alert">
													A simple success alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
											</div>
											<div class="col-md-6">
												<div class="alert alert-info" role="alert">
													A simple danger alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
											</div>
											<div class="col-md-6">
												<div class="alert alert-warning" role="alert">
													A simple warning alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
											</div>
											<div class="col-md-6">
												<div class="alert alert-danger" role="alert">
													A simple info alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
											</div>
											<div class="col-md-6">
												<div class="alert alert-light" role="alert">
													A simple light alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
											</div>
											<div class="col-md-6">
												<div class="alert alert-dark mb-0" role="alert">
													A simple dark alert with <a href="javascript:void(0);" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Additional Content Alert
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="alert alert-success mb-2" role="alert">
											<h4 class="alert-heading">Well done!</h4>
											<p>Aww yeah, Your data submitted successfully. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
											<hr>
											<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
										</div>
										<div class="alert alert-warning mb-2" role="alert">
											<h4 class="alert-heading">Warning!</h4>
											<p>Aww yeah, Your data submitted successfully. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
											<hr>
											<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
										</div>
										<div class="alert alert-danger mb-0" role="alert">
											<h4 class="alert-heading">Error!</h4>
											<p>Aww yeah, Your data submitted successfully. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
											<hr>
											<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Alert With Icon</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="alert alert-default" role="alert">
											<span class="me-2"><i class="fas fa-download"></i></span>
											<span class="alert-inner--text"> An <strong>Default!</strong> alert with an icon</span>
										</div>
										<div class="alert alert-primary" role="alert">
											<span class="me-2"><i class="fas fa-info-circle"></i></span>
											<span class="alert-inner--text"> An <strong>Primary!</strong> alert with an icon</span>
										</div>
										<div class="alert alert-success" role="alert">
											<span class="me-2"><i class="fas fa-thumbs-up"></i></span>
											<span class="alert-inner--text"> An <strong>Success!</strong> alert with an icon</span>
										</div>
										<div class="alert alert-info" role="alert">
											<span class="me-2"><i class="fas fa-info-circle"></i></span>
											<span class="alert-inner--text"> An <strong>Info!</strong> alert with an icon</span>
										</div>
										<div class="alert alert-warning" role="alert">
											<span class="me-2"><i class="fas fa-exclamation-triangle"></i></span>
											<span class="alert-inner--text"> An <strong>Warning!</strong> alert with an icon</span>
										</div>
										<div class="alert alert-danger mb-0" role="alert">
											<span class="me-2"><i class="fas fa-skull-crossbones"></i></span>
											<span class="alert-inner--text"> An <strong>Danger!</strong> alert with an icon</span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Alert With Dismissing
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="alert alert-default alert-dismissible fade show" role="alert">
											<span class="alert-inner--text"><strong>Holy guacamole!</strong> This is an default alert — check it out!</span>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-primary alert-dismissible fade show" role="alert">
											<span class="alert-inner--text"><strong>Holy guacamole!</strong> This is an primary alert — check it out!</span>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<span class="alert-inner--text"><strong>Holy guacamole!</strong> This is an success alert — check it out!</span>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											<span class="alert-inner--text"><strong>Holy guacamole!</strong> This is an warning alert — check it out!</span>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-info alert-dismissible fade show" role="alert">
											<span class="alert-inner--text"><strong>Holy guacamole!</strong> This is an info alert — check it out!</span>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
											<span class="alert-inner--text"><strong>Holy guacamole!</strong> This is an danger alert — check it out!</span>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Outline Alerts
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="alert alert-outline-success alert-dismissible fade show" role="alert">
											<strong>Well done!</strong> Your data submitted successfully.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-outline-info alert-dismissible fade show" role="alert">
											<strong>Heads up!</strong> Please read all the instructions carefully.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-outline-warning alert-dismissible fade show" role="alert">
											<strong>Warning!</strong> There is problem with your connectioin.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-outline-danger mg-b-0 alert-dismissible fade show" role="alert">
											<strong>Oh snap!</strong> Submission failed. Please try again.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Solid Colored Alerts
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="alert alert-solid-success alert-dismissible fade show" role="alert">
											<strong>Well done!</strong> Your data submitted successfully.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-solid-info alert-dismissible fade show" role="alert">
											<strong>Heads up!</strong> Please read all the instructions carefully.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-solid-warning alert-dismissible fade show" role="alert">
											<strong>Warning!</strong> There is problem with your connectioin.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert alert-solid-danger mg-b-0 alert-dismissible fade show" role="alert">
											<strong>Oh snap!</strong> Submission failed. Please try again.
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Alerts Style-01
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="alert style-1 alert-warning alert-dismissible fade show" role="alert">
											<p class="mb-0 alert_content text-warning">
												<span class="avatar avatar-sm bg-warning radius-4 me-2"><i class="fas fa-exclamation-triangle text-white"></i></span>
												Oops! Something went wrong.
											</p>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert style-1 alert-success alert-dismissible fade show" role="alert">
											<p class="mb-0 alert_content">
												<span class="avatar avatar-sm bg-success radius-4 me-2"><i class="fas fa-check-circle text-white"></i></span>
												Success! Your data submitted successfully.
											</p>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert style-1 alert-info alert-dismissible fade show" role="alert">
											<p class="mb-0 alert_content">
												<span class="avatar avatar-sm bg-info rounded-circle me-2"><i class="fas fa-info-circle text-white"></i></span>
												Did you see? Please read below instructions carefully.
											</p>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert style-1 alert-danger alert-dismissible fade show mb-0" role="alert">
											<p class="mb-0 alert_content">
												<span class="avatar avatar-sm bg-danger rounded-circle me-2"><i class="fas fa-exclamation-triangle text-white"></i></span>
												Failed! Uploading failed. Please try again.
											</p>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Alerts Style-02
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="alert style-2 alert-outline-warning alert-dismissible fade show" role="alert">
											<div class="alert_content warning">
												<span class="avatar avatar-sm rounded-circle bg-warning shadow mx-1">
													<i class="fas fa-exclamation-triangle text-white"></i>
												</span>
												<div class="ms-2">
													<p class="mb-0 tx-14 tx-warning font-weight-semibold">Oops! Something went wrong</p>
													<span class="tx-12 tx-muted">Sorry! There was a problem with your connection.</span>
												</div>
											</div>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert style-2 alert-outline-success alert-dismissible fade show" role="alert">
											<div class="alert_content success">
												<span class="avatar avatar-sm rounded-circle bg-success shadow mx-1">
													<i class="fas fa-check-circle text-white"></i>
												</span>
												<div class="ms-2">
													<p class="mb-0 tx-14 tx-success font-weight-semibold">Everything successful!</p>
													<span class="tx-12 tx-muted">Your application was successfully submitted.</span>
												</div>
											</div>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="alert style-2 alert-outline-info alert-dismissible fade show" role="alert">
											<div class="alert_content info">
												<span class="avatar avatar-sm rounded-circle bg-info shadow mx-1">
													<i class="fas fa-info-circle text-white"></i>
												</span>
												<div class="ms-2">
													<p class="mb-0 tx-14 tx-info font-weight-semibold">Did you see?</p>
													<span class="tx-12 tx-muted">Please read below instructions carefully.</span>
												</div>
											</div>
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Extra Alerts
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="row">
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div class="alert style-3 alert-outline-success alert-dismissible fade show" role="alert">
													<div class="alert_content">
														<div class="mx-1">
															<span class="avatar avatar-sm rounded-circle bg-success-transparent">
																<i class="fas fa-cloud-upload-alt tx-success"></i>
															</span>
														</div>
														<div class="ms-2">
															<p class="mb-1 tx-14 tx-success font-weight-semibold">Upload Successful</p>
															<span class="tx-12 tx-muted"><strong>samplefile.txt</strong> was uploaded successfully.</span>
														</div>
													</div>
													<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div class="alert style-3 alert-outline-danger alert-dismissible fade show" role="alert">
													<div class="alert_content">
														<div class="mx-1">
															<span class="avatar avatar-sm rounded-circle bg-danger-transparent">
																<i class="fas fa-save tx-danger"></i>
															</span>
														</div>
														<div class="ms-2">
															<p class="mb-1 tx-14 tx-danger font-weight-semibold">Saving failed</p>
															<span class="tx-12 tx-muted d-block mb-2">Your work couldn't be saved.</span>
															<a href="javascript:void(0)" class="btn btn-sm btn-danger">Retry</a>
														</div>
													</div>
													<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div class="alert style-3 alert-outline-info alert-dismissible fade show" role="alert">
													<div class="alert_content">
														<div class="mx-1">
															<span class="avatar avatar-sm rounded-circle bg-info-transparent">
																<i class="fas fa-sync-alt tx-info"></i>
															</span>
														</div>
														<div class="ms-2">
															<p class="mb-1 tx-14 tx-info font-weight-semibold">Update available</p>
															<span class="tx-12 tx-muted d-block mb-2 wd-90p">New software version is available for yor device.</span>
															<div class="btn-list">
																<a href="javascript:void(0)" class="btn btn-sm btn-info">Update</a>
																<a href="javascript:void(0)" class="btn btn-sm btn-outline-info">Not now</a>
															</div>
														</div>
													</div>
													<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div class="alert style-3 alert-outline-warning alert-dismissible fade show" role="alert">
													<div class="alert_content">
														<div class="mx-1">
															<span class="avatar avatar-sm rounded-circle bg-warning-transparent">
																<i class="fas fa-trash-alt tx-warning"></i>
															</span>
														</div>
														<div class="ms-2">
															<p class="mb-1 tx-14 tx-warning font-weight-semibold">File Deleted</p>
															<span class="tx-12 tx-muted d-block mb-2 wd-90p">Files <strong>sample.txt</strong> has been successfully deleted.</span>
															<a href="javascript:void(0)" class="btn btn-sm btn-block btn-outline-warning">Restore now</a>
														</div>
													</div>
													<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Alerts Style-04
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="row">
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div class="alert style-4 alert-success alert-dismissible fade show" role="alert">
													<div class="alert_content">
														<h5>Well done!</h5>
														<p class="mb-0">Your data submitted successfully.</p>
													</div>
													<div class="alert_inner_icn">
														<span class="avatar avatar-sm rounded-circle bg-success text-white"><i class="fas fa-check-circle"></i></span>
													</div>
													<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div class="alert style-4 alert-info alert-dismissible fade show" role="alert">
													<div class="alert_content">
														<h5>Do you know?</h5>
														<p class="mb-0">Please read instructions carefully. <a href="javascript:void(0)" class="tx-info"><strong>click here</strong></a></p>
													</div>
													<div class="alert_inner_icn">
														<span class="avatar avatar-sm rounded-circle bg-info text-white"><i class="fas fa-info-circle"></i></span>
													</div>
													<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div class="alert style-4 alert-warning alert-dismissible fade show" role="alert">
													<div class="alert_content">
														<h5>Warning!</h5>
														<p class="mb-0">There is a problem with your interenet connection.</p>
													</div>
													<div class="alert_inner_icn">
														<span class="avatar avatar-sm rounded-circle bg-warning text-white"><i class="fas fa-exclamation-triangle"></i></span>
													</div>
													<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-12">
												<div class="alert style-4 alert-danger alert-dismissible fade show" role="alert">
													<div class="alert_content">
														<h5>Failed!</h5>
														<p class="mb-0">Can't update software. Please try again.</p>
													</div>
													<div class="alert_inner_icn">
														<span class="avatar avatar-sm rounded-circle bg-danger text-white"><i class="fas fa-times"></i></span>
													</div>
													<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
											</div>
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
