@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">DISPLAYS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Displays</li>
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
									<div class="card-title">Basic Display</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-t-15">
										<table class="table border-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p bg-custom">Class</th>
													<th class="wd-70p bg-custom">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.d-inline</code></td>
													<td>Set an inline display property of an element.</td>
												</tr>
												<tr>
													<td><code>.d-inline-block</code></td>
													<td>Set an inline-block display property of an element.</td>
												</tr>
												<tr>
													<td><code>.d-block</code></td>
													<td>Set a block display property of an element.</td>
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
									<div class="card-title">Hiding Elements</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4 mg-t-15">
										<table class="table border-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p bg-custom">Class</th>
													<th class="wd-60p bg-custom">Screen Size</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.d-none</code></td>
													<td>Hidden on all</td>
												</tr>
												<tr>
													<td><code>.d-none .d-sm-block</code></td>
													<td>Hidden only on xs</td>
												</tr>
												<tr>
													<td><code>.d-sm-none .d-md-block</code></td>
													<td>Hidden only on sm</td>
												</tr>
												<tr>
													<td><code>.d-md-none .d-lg-block</code></td>
													<td>Hidden only on md</td>
												</tr>
												<tr>
													<td><code>.d-lg-none .d-xl-block</code></td>
													<td>Hidden only on lg</td>
												</tr>
												<tr>
													<td><code>.d-xl-none</code></td>
													<td>Hidden only on xl</td>
												</tr>
												<tr>
													<td><code>.d-xxl-none</code></td>
													<td>Hidden only on xxl</td>
												</tr>
												<tr>
													<td><code>.d-block</code></td>
													<td>Visible on all</td>
												</tr>
												<tr>
													<td><code>.d-block .d-sm-none</code></td>
													<td>Visible only on xs</td>
												</tr>
												<tr>
													<td><code>.d-none .d-sm-block .d-md-none</code></td>
													<td>Visible only on sm</td>
												</tr>
												<tr>
													<td><code>.d-none .d-md-block .d-lg-none</code></td>
													<td>Visible only on md</td>
												</tr>
												<tr>
													<td><code>.d-none .d-lg-block .d-xl-none</code></td>
													<td>Visible only on lg</td>
												</tr>
												<tr>
													<td><code>.d-none .d-xl-block</code></td>
													<td>Visible only on xl</td>
												</tr>
												<tr>
													<td><code>.d-none .d-xxl-block</code></td>
													<td>Visible only on xxl</td>
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
