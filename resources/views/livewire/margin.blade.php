@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">MARGINS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Margins</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">

							<div class="card">
								<div class="card-header">
									<div class="card-title">Margin Values</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<div class="d-sm-flex align-items-end flex-wrap">
											<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
												<div class="flex-center wd-sm-150 ht-80 bg-custom mg-0">
													.mg-0
												</div>
											</div>
											<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
												<div class="flex-center wd-sm-150 ht-80 bg-custom mg-10">
													.mg-10
												</div>
											</div>
											<div class="bg-white-100 br-5 overflow-hidden mb-2">
												<div class="flex-center wd-sm-150 ht-80 bg-custom mg-20">
													.mg-20
												</div>
											</div>
										</div>
										<div class="table-responsive border radius-4 mg-t-20">
											<table class="table border-0 mb-0">
												<tbody>
													<tr>
														<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
														<td class="border-top-0"><code>.mg-[value]</code></td>
													</tr>
													<tr>
														<td class="bg-custom wd-20p font-weight-semibold">Values</td>
														<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<div class="card-title">Margin-top Values</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap align-items-baseline">
										<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-t-0">
												.mg-t-0
											</div>
										</div>
										<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-t-20">
												.mg-t-20
											</div>
										</div>
										<div class="bg-white-100 br-5 overflow-hidden mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-t-40">
												.mg-t-40
											</div>
										</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.mg-t-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<div class="card-title">Margin-right Values</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap">
										<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-e-20">
												.mg-e-20
											</div>
										</div>
										<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-e-40">
												.mg-e-40
											</div>
										</div>
										<div class="bg-white-100 br-5 overflow-hidden mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-e-0">
												.mg-e-0
											</div>
										</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.mg-e-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<div class="card-title">Margin-bottom Values</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<div class="d-sm-flex flex-wrap align-items-baseline">
											<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
												<div class="flex-center wd-sm-150 ht-80 bg-custom mg-b-0">
													.mg-b-0
												</div>
											</div>
											<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
												<div class="flex-center wd-sm-150 ht-80 bg-custom mg-b-20">
													.mg-b-20
												</div>
											</div>
											<div class="bg-white-100 br-5 overflow-hidden mb-2">
												<div class="flex-center wd-sm-150 ht-80 bg-custom mg-b-40">
													.mg-b-40
												</div>
											</div>
										</div>
										<div class="table-responsive border radius-4 mg-t-20">
											<table class="table border-0 mb-0">
												<tbody>
													<tr>
														<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
														<td class="border-top-0"><code>.mg-b-[value]</code></td>
													</tr>
													<tr>
														<td class="bg-custom wd-20p font-weight-semibold">Values</td>
														<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<div class="card-title">Margin-left Values</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap">
										<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-s-0">
												.mg-s-0
											</div>
										</div>
										<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-s-20">
												.mg-s-20
											</div>
										</div>
										<div class="bg-white-100 br-5 overflow-hidden mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-s-40">
												.mg-s-40
											</div>
										</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.mg-s-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<div class="card-title">Margin-x Values</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap">
										<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-x-0">
												.mg-x-0
											</div>
										</div>
										<div class="bg-white-100 br-5 overflow-hidden me-sm-3 mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-x-20">
												.mg-x-20
											</div>
										</div>
										<div class="bg-white-100 br-5 overflow-hidden mb-2">
											<div class="flex-center wd-sm-150 ht-80 bg-custom mg-x-40">
												.mg-x-40
											</div>
										</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.mg-x-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<div class="card-title">Margin-y Values</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex flex-wrap">
										<div class="wd-200 ht-100p bg-white-100  br-5 overflow-hidden m-2">
											<div class="flex-center bg-custom mg-y-0">
												.mg-y-0
											</div>
										</div>
										<div class="wd-200 ht-100p bg-white-100 br-5 overflow-hidden m-2">
											<div class="flex-center bg-custom mg-y-20">
												.mg-y-20
											</div>
										</div>
										<div class="wd-200 ht-100p bg-white-100 br-5 overflow-hidden m-2">
											<div class="flex-center bg-custom mg-y-40">
												.mg-y-40
											</div>
										</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.mg-y-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
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
									<div class="card-title">Media Query Margin</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="border-top-0">
														<code>
															.mg-[breakpoint]-t-[value]<br>
															.mg-[breakpoint]-r-[value]<br>
															.mg-[breakpoint]-b-[value]<br>
															.mg-[breakpoint]-l-[value]
														</code>
													</td>
													<td>
														<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the margin value (refer to code above)</p>
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
									<div class="card-title">Auto Margin</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.mg-t-auto</code></td>
													<td>Set a top margin to auto</td>
												</tr>
												<tr>
													<td><code>.mg-e-auto</code></td>
													<td>Set a right margin to auto</td>
												</tr>
												<tr>
													<td><code>.mg-b-auto</code></td>
													<td>Set a bottom margin to auto</td>
												</tr>
												<tr>
													<td><code>.mg-x-auto</code></td>
													<td>Set x-axis margin to auto</td>
												</tr>
												<tr>
													<td><code>.mg-y-auto</code></td>
													<td>Set y-axis margin to auto</td>
												</tr>
												<tr>
													<td><code>.mg-s-auto</code></td>
													<td>Set a left margin to auto</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
					</div>
					<!-- /row -->

@endsection

@section('scripts')



@endsection
