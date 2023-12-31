@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">WIDTHS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Width</li>
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
									<div class="card-title">Width Values</div>
								</div>
								<div class="card-body">
									<div class="example">
										<div class="d-md-flex">
											<div class="d-flex align-items-center justify-content-center wd-200 ht-100 bg-custom mt-4 mt-md-0 br-5">
												.wd-200
											</div>
											<div class="d-flex align-items-center justify-content-center wd-150 ht-100 bg-custom ms-md-4 mt-4 mt-md-0 br-5">
												.wd-150
											</div>
											<div class="d-flex align-items-center justify-content-center wd-100 ht-100 bg-custom ms-md-4 mt-4 mt-md-0 br-5">
												.wd-100
											</div>
											<div class="d-flex align-items-center justify-content-center wd-80 ht-100 bg-custom ms-md-4 mt-4 mt-md-0 br-5">
												.wd-80
											</div>
										</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Smaller Width</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]</code></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive border radius-4 mg-t-10">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Regular Width</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]</code></td>
													<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5)</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive border radius-4 mg-t-10">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Bigger Width</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]</code></td>
													<td>150 | 200 | 250 | 300 | ... | 1000 &nbsp; (step of 50)</td>
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
									<div class="card-title">Percentage Width</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[value]p</code></td>
													<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
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
									<div class="card-title">Media Query Width</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-[size]-[value]</code></td>
													<td rowspan="2" class="border-start">
														<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the width value (refer to code above)</p>
													</td>
												</tr>
												<tr>
													<td><code>.wd-[size]-[value]p</code></td>
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
									<div class="card-title">Extra Width Classes</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.wd-100v</code></td>
													<td>Set a width to an element based on viewport width.</td>
												</tr>
												<tr>
													<td><code>.wd-auto</code></td>
													<td>Set an auto width to an element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

@endsection

@section('scripts')



@endsection
