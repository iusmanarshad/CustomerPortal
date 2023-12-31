@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">DASHBOARD</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0)">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Analytics</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-xxl-8 col-xl-12">
							<div class="row">
								<div class="col-xl-3 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex">
												<div class="flex-1">
													<p class="mb-3">Total Users</p>
													<div class="mt-1">
														<h5 class="font-weight-semibold mb-2 numberfont">52,283</h5>
														<p class="mb-0"><span class="badge badge-success-transparent">+2.31%</span><span class="tx-muted ms-2 tx-12">since last month</span></p>
													</div>
												</div>
												<div class="ms-2">
													<div class="avatar radius-4 bg-primary-transparent">
														<i class="fa fa-users tx-primary"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex">
												<div class="flex-1">
													<p class="mb-3">Total Sessions</p>
													<div class="mt-1">
														<h5 class="font-weight-semibold mb-2 numberfont">56.2K</h5>
														<p class="mb-0"><span class="badge badge-success-transparent">+1.05%</span><span class="tx-muted ms-2 tx-12">since last month</span></p>
													</div>
												</div>
												<div class="ms-2">
													<div class="avatar radius-4 bg-secondary-transparent">
														<i class="fa fa-globe tx-secondary"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex">
												<div class="flex-1">
													<p class="mb-3">Avg. Session Duration</p>
													<div class="mt-1">
														<h5 class="font-weight-semibold mb-2 numberfont">11min 16sec</h5>
														<p class="mb-0"><span class="badge badge-danger-transparent">-1.51%</span><span class="tx-muted ms-2 tx-12">since last month</span></p>
													</div>
												</div>
												<div class="ms-2">
													<div class="avatar radius-4 bg-warning-transparent">
														<i class="fa fa-clock tx-warning"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6">
									<div class="card">
										<div class="card-body">
											<div class="d-flex">
												<div class="flex-1">
													<p class="mb-3">Bounce Rate</p>
													<div class="mt-1">
														<h5 class="font-weight-semibold mb-2 numberfont">77.3%</h5>
														<p class="mb-0"><span class="badge badge-success-transparent">+5.19%</span><span class="tx-muted ms-2 tx-12">since last month</span></p>
													</div>
												</div>
												<div class="ms-2">
													<div class="avatar radius-4 bg-success-transparent">
														<i class="fa fa-angles-down tx-success"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												Audience Report
											</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xl-3 col-sm-3 col-12 p-0">
													<div class="tx-center pd-b-7 pd-sm-b-0-f bd-sm-e bd-e-0 bd-b bd-sm-b-0 bd-b-dashed bd-e-dashed">
														<p class="mb-0 tx-muted font-weight-semibold">Avg. Sessions :</p>
														<div class="mt-2">
															<span class="mb-0 font-weight-semibold tx-15 numberfont">684</span>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-sm-3 col-12 p-0">
													<div class="tx-center pd-y-7 pd-sm-y-0-f bd-sm-e bd-e-0 bd-b bd-sm-b-0 bd-b-dashed bd-e-dashed">
														<p class="mb-0 tx-muted font-weight-semibold">Conversion Rate :</p>
														<div class="mt-2">
															<span class="mb-0 font-weight-semibold tx-15 numberfont">1,284</span>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-sm-3 col-12 p-0">
													<div class="tx-center pd-y-7 pd-sm-y-0-f bd-sm-e bd-e-0 bd-b bd-sm-b-0 bd-b-dashed bd-e-dashed">
														<p class="mb-0 tx-muted font-weight-semibold">Avg. Session Duration :</p>
														<div class="mt-2">
															<span class="mb-0 font-weight-semibold tx-15 numberfont">11min 16sec</span>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-sm-3 col-12 p-0">
													<div class="tx-center pd-t-7 pd-sm-t-0-f">
														<p class="mb-0 tx-muted font-weight-semibold">Growth Rate :</p>
														<div class="mt-2">
															<span class="tx-12 font-weight-semibold tx-success numberfont"><i class="fe fe-arrow-up-right me-1"></i>+5.64%</span>
														</div>
													</div>
												</div>
											</div>
											<div id="audienceReport"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Active Users</div>
								</div>
								<div class="card-body">
									<div class="d-flex mb-3">
										<div class="me-2">
											<span class="avatar br-5 bg-primary-transparent tx-primary"><i class="fe fe-users"></i></span>
										</div>
										<div class="flex-1">
											<h5 class="mb-0 numberfont">1,340</h5>
											<span class="tx-muted tx-12">users are active now</span>
										</div>
									</div>
									<div class="progress-bar ht-25 radius-4 d-flex flex-row mg-b-20">
										<div class="bg-primary wd-50p text-black flex-center tx-11">50%</div>
										<div class="bg-secondary wd-30p text-white flex-center tx-11">30%</div>
										<div class="bg-success wd-10p flex-center tx-11">10%</div>
										<div class="bg-purple wd-10p flex-center tx-11">10%</div>
									</div>
									<div class="mg-b-15">
										<div class="row align-items-center">
											<div class="col-md-4">
												<span class="tx-14"><i class="fa fa-circle tx-primary tx-8 me-1"></i>Direct</span>
											</div>
											<div class="col-md-8">
												<span class="badge badge-success-transparent me-1">+2.6%</span>
												<span class="tx-muted tx-12">since last 6 months</span>
											</div>
										</div>
									</div>
									<div class="mg-b-15">
										<div class="row align-items-center">
											<div class="col-md-4">
												<span class="tx-14"><i class="fa fa-circle tx-secondary tx-8 me-1"></i>Referred</span>
											</div>
											<div class="col-md-8">
												<span class="badge badge-danger-transparent me-1">-1.6%</span>
												<span class="tx-muted tx-12">since last 6 months</span>
											</div>
										</div>
									</div>
									<div class="mg-b-15">
										<div class="row align-items-center">
											<div class="col-md-4">
												<span class="tx-14"><i class="fa fa-circle tx-success tx-8 me-1"></i>Social</span>
											</div>
											<div class="col-md-8">
												<span class="badge badge-success-transparent me-1">+3.5%</span>
												<span class="tx-muted tx-12">since last 6 months</span>
											</div>
										</div>
									</div>
									<div class="mb-0">
										<div class="row align-items-center">
											<div class="col-md-4">
												<span class="tx-14"><i class="fa fa-circle tx-purple tx-8 me-1"></i>Email</span>
											</div>
											<div class="col-md-8">
												<span class="badge badge-success-transparent me-1">+1.8%</span>
												<span class="tx-muted tx-12">since last 6 months</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<div class="card-title">Top Pages</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<th class="border-top-0 bg-black-03 br-bs-5 br-ts-5">Website</th>
													<th class="border-top-0 bg-black-03">Visits</th>
													<th class="border-top-0 bg-black-03 br-be-5 br-te-5">Status</th>
												</tr>
												<tr>
													<td class="border-top-0"><a href="javascript:void(0);" class="tx-inverse"><i class="fe fe-globe me-1 tx-13"></i>demo/template.nit</a></td>
													<td class="border-top-0 numberfont">20.2K</td>
													<td class="border-top-0"><span class="tx-12 font-weight-semibold tx-success"><i class="fe fe-arrow-up-right me-1"></i>+5.37%</span></td>
												</tr>
												<tr>
													<td class="border-top-0"><a href="javascript:void(0);" class="tx-inverse"><i class="fe fe-slack me-1 tx-13"></i>dashboard/licence.demo</a></td>
													<td class="border-top-0 numberfont">18.3K</td>
													<td class="border-top-0"><span class="tx-12 font-weight-semibold tx-success"><i class="fe fe-arrow-up-right me-1"></i>+2.64%</span></td>
												</tr>
												<tr>
													<td class="border-top-0"><a href="javascript:void(0);" class="tx-inverse"><i class="fe fe-zap me-1 tx-13"></i>web/page/demo.xis</a></td>
													<td class="border-top-0 numberfont">18.1K</td>
													<td class="border-top-0"><span class="tx-12 font-weight-semibold tx-danger"><i class="fe fe-arrow-down-right me-1"></i>-1.46%</span></td>
												</tr>
												<tr>
													<td class="border-top-0"><a href="javascript:void(0);" class="tx-inverse"><i class="fe fe-codepen me-1 tx-13"></i>landing/page.demo</a></td>
													<td class="border-top-0 numberfont">15.2K</td>
													<td class="border-top-0"><span class="tx-12 font-weight-semibold tx-success"><i class="fe fe-arrow-up-right me-1"></i>+3.75%</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row row-deck">
						<div class="col-xl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Browser Usuage
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<th class="border-top-0 bg-black-03 br-bs-5 br-ts-5">Browser</th>
													<th class="border-top-0 bg-black-03">Sessions</th>
													<th class="border-top-0 bg-black-03 br-be-5 br-te-5">Bounce Rate</th>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex align-items-center">
															<div class="me-2">
																<span class="avatar avatar-sm bg-primary-gradient tx-white"><i class="fab fa-chrome tx-14"></i></span>
															</div>
															<p class="mb-0">Chrome</p>
														</div>
													</td>
													<td class="border-top-0 numberfont">23,379</td>
													<td class="border-top-0"><span class="tx-12 font-weight-semibold tx-success numberfont"><i class="fe fe-arrow-up-right me-1"></i>+5.37%</span></td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex align-items-center">
															<div class="me-2">
																<span class="avatar avatar-sm bg-secondary-gradient tx-white"><i class="fab fa-safari tx-14"></i></span>
															</div>
															<p class="mb-0">Safari</p>
														</div>
													</td>
													<td class="border-top-0 numberfont">20,937</td>
													<td class="border-top-0"><span class="tx-12 font-weight-semibold tx-success numberfont"><i class="fe fe-arrow-up-right me-1"></i>+1.74%</span></td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex align-items-center">
															<div class="me-2">
																<span class="avatar avatar-sm bg-warning-gradient tx-white"><i class="fab fa-opera tx-14"></i></span>
															</div>
															<p class="mb-0">Opera</p>
														</div>
													</td>
													<td class="border-top-0 numberfont">20,848</td>
													<td class="border-top-0"><span class="tx-12 font-weight-semibold tx-danger numberfont"><i class="fe fe-arrow-down-right me-1"></i>-11.43%</span></td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex align-items-center">
															<div class="me-2">
																<span class="avatar avatar-sm bg-success-gradient tx-white"><i class="fab fa-firefox tx-14"></i></span>
															</div>
															<p class="mb-0">Firefox</p>
														</div>
													</td>
													<td class="border-top-0 numberfont">18,120</td>
													<td class="border-top-0"><span class="tx-12 font-weight-semibold tx-success numberfont"><i class="fe fe-arrow-up-right me-1"></i>7.61%</span></td>
												</tr>
												<tr>
													<td class="border-top-0">
														<div class="d-flex align-items-center">
															<div class="me-2">
																<span class="avatar avatar-sm bg-purple-gradient tx-white"><i class="fab fa-edge tx-14"></i></span>
															</div>
															<p class="mb-0">Edge</p>
														</div>
													</td>
													<td class="border-top-0 numberfont">14,986</td>
													<td class="border-top-0"><span class="tx-12 font-weight-semibold tx-danger numberfont"><i class="fe fe-arrow-up-right me-1"></i>-1.14%</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Sessions By Device
									</div>
								</div>
								<div class="card-body">
									<div id="sessionsDevice"></div>
									<div class="d-flex mg-b-15">
										<div class="me-2">
											<span class="avatar avatar-sm radius-4 bg-primary-transparent tx-primary"><i class="fe fe-smartphone"></i></span>
										</div>
										<div class="flex-1">
											<div class="flex-between mb-1">
												<p class="mb-0"><span class="pe-2 border-end">Mobile</span><span class="ps-2 tx-muted">39.3%</span></p>
												<span class="badge badge-success-transparent me-1">+1.6%</span>
											</div>
											<div class="progress">
												<div class="progress-bar progress-bar-striped progress-bar-animated ht-5 bg-primary" style="width: 39.3%"></div>
											</div>
										</div>
									</div>
									<div class="d-flex mg-b-15">
										<div class="me-2">
											<span class="avatar avatar-sm radius-4 bg-secondary-transparent tx-secondary"><i class="fe fe-monitor"></i></span>
										</div>
										<div class="flex-1">
											<div class="flex-between mb-1">
												<p class="mb-0"><span class="pe-2 border-end">Desktop</span><span class="ps-2 tx-muted">36.4%</span></p>
												<span class="badge badge-danger-transparent me-1">-5.2%</span>
											</div>
											<div class="progress">
												<div class="progress-bar progress-bar-striped progress-bar-animated ht-5 bg-secondary" style="width: 36.4%"></div>
											</div>
										</div>
									</div>
									<div class="d-flex">
										<div class="me-2">
											<span class="avatar avatar-sm radius-4 bg-success-transparent tx-success"><i class="fe fe-tablet"></i></span>
										</div>
										<div class="flex-1">
											<div class="flex-between mb-1">
												<p class="mb-0"><span class="pe-2 border-end">Tablet</span><span class="ps-2 tx-muted">24.3%</span></p>
												<span class="badge badge-success-transparent me-1">+2.7%</span>
											</div>
											<div class="progress">
												<div class="progress-bar progress-bar-striped progress-bar-animated ht-5 bg-success" style="width: 24.3%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Sessions By Country
									</div>
								</div>
								<div class="card-body pb-0">
									<div class="chart-wrapper">
										<div id="sessionsCountry"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

@endsection

@section('scripts')


@endsection
