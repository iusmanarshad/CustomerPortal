@extends('layouts.app')

@section('styles')

@endsection

@section('content')

				  	<!-- breadcrumb -->
                      <div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">HEIGHTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Heights</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Height Values</div>
								</div>
								<div class="card-body">
									<div class="example">
										<div class="d-flex flex-wrap">
											<div class="d-flex align-items-center justify-content-center br-5 wd-150 ht-50 bg-custom me-2 mb-2">
												.ht-50
											</div>
											<div class="d-flex align-items-center justify-content-center br-5 wd-150 ht-80 bg-custom me-2 mb-2">
												.ht-80
											</div>
											<div class="d-flex align-items-center justify-content-center br-5 wd-150 ht-100 bg-custom me-2 mb-2">
												.ht-100
											</div>
											<div class="d-flex align-items-center justify-content-center br-5 wd-150 ht-150 bg-custom me-2 mb-2">
												.ht-150
											</div>
										</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.ht-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.ht-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5) Regular Height</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.ht-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>150 | 200 | 250 | 300 | ... | 850 &nbsp; (step of 50) Bigger Height</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Percentage Height</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.ht-[value]p</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Media Query Height</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.ht-[size]-[value]</code></td>
													<td class="border-top-0"><code>.ht-[size]-[value]p</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>
														<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the height value (refer to code above)</p>
													</td>
													<td>
														<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the height value (refer to code above)</p>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Extra Height Classes</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.ht-100v</code></td>
													<td class="border-top-0"><code>.ht-auto</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>Set a height to an element based on viewport height.</td>
													<td>Set an auto height to an element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

@endsection

@section('scripts')



@endsection
