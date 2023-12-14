@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">POSITION</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Position</li>
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
									<div class="card-title">Set Position</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-b-20">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.pos-relative</code></td>
													<td>Set a relative position to an element.</td>
												</tr>
												<tr>
													<td><code>.pos-absolute</code></td>
													<td>Set an absolute position to an element.</td>
												</tr>
												<tr>
													<td><code>.pos-fixed</code></td>
													<td>Set a fixed position to an element.</td>
												</tr>
												<tr>
													<td><code>.pos-static</code></td>
													<td>Set a static position to an element.</td>
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
									<div class="card-title">Cornering</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-b-20">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.t-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.r-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.b-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.l-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
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
									<div class="card-title">X and Y Position</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-b-20">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.t-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.r-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.b-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.l-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
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
									<div class="card-title">Negative Corner</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-b-20">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.t--[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.r--[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.b--[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.l--[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
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
									<div class="card-title">Z-Index Property</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-b-20">
										<table class="table border-0 mb-0 text-nowrap">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.z-index-[value]</code></td>
													<td>0 | 10 | 50 | 100 | 150 | 200</td>
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
