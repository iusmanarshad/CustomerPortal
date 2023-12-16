@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">BORDERS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Border</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row page-border">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Set Border</div>
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap">
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd bd-2">.bd</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd-s bd-2  ">.bd-s</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd-t bd-2 ">.bd-t</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd-y bd-2 ">.bd-y</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd-e bd-2">.bd-e</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd-x bd-2  ">.bd-x</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd-e bd-b bd-2 mb-0">.bd-b</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p bg-custom">Class</th>
													<th class="wd-70p bg-custom">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd"</code></td>
													<td>Add border in all sides of an element using default color and width.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-t"</code></td>
													<td>Add border to top side of element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-e"</code></td>
													<td>Add border to right side of element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-b"</code></td>
													<td>Add border to bottom side of element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-s"</code></td>
													<td>Add border to left side of element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-x"</code></td>
													<td>Add border to left and right side of element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd-y"</code></td>
													<td>Add border to top and bottom side of element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div><!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Border Sizes</div>
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap">
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd">.bd</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd bd-2">.bd .bd-2</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd bd-3">.bd .bd-3</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd bd-4">.bd .bd-4</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd bd-5">.bd .bd-5</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p bg-custom">Class</th>
													<th class="wd-70p bg-custom">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd"</code></td>
													<td>Set 1px (default) border to element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd bd-2"</code></td>
													<td>Set 2px border to element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd bd-3"</code></td>
													<td>Set 3px border to element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd bd-4"</code></td>
													<td>Set 4px border to element.</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">class="bd bd-5"</code></td>
													<td>Set 5px border to element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div><!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Remove Border</div>
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap">
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd bd-2 bd-t-0">.bd-t-0</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd bd-2 bd-e-0">.bd-e-0</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd bd-2 bd-b-0">.bd-b-0</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd bd-2 bd-s-0">.bd-s-0</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom  bd bd-2 bd-x-0">.bd-x-0</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bg-custom bd bd-2 bd-y-0">.bd-y-0</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p bg-custom">Class</th>
													<th class="wd-70p bg-custom">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-t-0</code></td>
													<td>Remove top border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-e-0</code></td>
													<td>Remove right border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-b-0</code></td>
													<td>Remove bottom border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-s-0</code></td>
													<td>Remove left border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-x-0</code></td>
													<td>Remove left and right border of an element</td>
												</tr>
												<tr>
													<td><code class="pd-0 bg-transparent">.bd-y-0</code></td>
													<td>Remove top and bottom border of an element</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div><!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Border Color</div>
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap">
										<div class="p-5 w-40 mg-s-10 mb-2 bd bd-2 bd-primary">.bd-primary</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bd bd-2 bd-secondary">.bd-secondary</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bd bd-2 bd-success">.bd-success</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bd bd-2 bd-danger">.bd-danger</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bd bd-2 bd-warning">.bd-warning</div>
										<div class="p-5 w-40 mg-s-10 mb-2 bd bd-2 bd-teal">.bd-teal</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code class="pd-0 bg-transparent">.bd-[value]</code></td>
													<td class="border-top-0"><code class="pd-0 bg-transparent">.bd-gray-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>primary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
													<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Border Radius</div>
								</div>
								<div class="card-body">
									<div class="d-flex d-flex flex-wrap">
										<div class="wd-80 ht-80 mg-s-10 bd bd-2 bg-custom radius-1 my-1"></div>
										<div class="wd-80 ht-80 mg-s-10 bd bd-2 bg-custom radius-4 my-1"></div>
										<div class="wd-80 ht-80 mg-s-10 bd bd-2 bg-custom radius-4 my-1"></div>
										<div class="wd-80 ht-80 mg-s-10 bd bd-2 bg-custom radius-4 my-1"></div>
										<div class="wd-80 ht-80 mg-s-10 bd bd-2 bg-custom radius-30 my-1"></div>
										<div class="wd-80 ht-80 mg-s-10 bd bd-2 bg-custom radius-40 my-1"></div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code class="pd-0 bg-transparent">.radius</code></td>
													<td class="border-top-0"><code class="pd-0 bg-transparent">.radius-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>Set a border radius of 2px (default) to an element.</td>
													<td>0 | 1 | 3 | 5 | 7 | 10 | 20 | 30 | 40 | 50 </td>
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
