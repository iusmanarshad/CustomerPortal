@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TYPOGRAPHY</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Typography</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Default Heading Text</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<h1>h1. Heading</h1>
										<h2>h2. Heading</h2>
										<h3>h3. Heading</h3>
										<h4>h4. Heading</h4>
										<h5>h5. Heading</h5>
										<h6>h6. Heading</h6>
									</div>
								</div>
							</div>
						</div><!-- col-end-->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Heading With Colored Text</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<h1 class="tx-primary">h1. Heading</h1>
										<h2  class="tx-secondary">h2. Heading</h2>
										<h3  class="tx-danger">h3. Heading</h3>
										<h4  class="tx-teal">h4. Heading</h4>
										<h5  class="tx-orange">h5. Heading</h5>
										<h6  class="tx-success">h6. Heading</h6>
									</div>
								</div>
							</div>
						</div><!-- col-end-->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Display headings</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<h1 class="display-1">Display 1</h1>
										<h1 class="display-2">Display 2</h1>
										<h1 class="display-3">Display 3</h1>
										<h1 class="display-4">Display 4</h1>
										<h1 class="display-5">Display 5</h1>
										<h1 class="display-6">Display 6</h1>
									</div>
								</div>
							</div>
						</div><!-- col-end-->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Inline Text Elements</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<p>You can use the mark tag to <mark>highlight</mark> text.</p>
										<p><del>This line of text is meant to be treated as deleted text.</del></p>
										<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
										<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
										<p><u>This line of text will render as underlined</u></p>
										<p><small>This line of text is meant to be treated as fine print.</small></p>
										<p><strong>This line rendered as bold text.</strong></p>
										<p class="mb-0"><em>This line rendered as italicized text.</em></p>
									</div>
								</div>
							</div>
						</div><!-- col-end-->

						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header">
									<div class="card-title">Font Size</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td class="bg-custom"><b>Classes</b></td>
													<td><code>.tx-[size]</code></td>
												</tr>
												<tr>
													<td class="bg-custom"><b>Values</b></td>
													<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 50</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered mg-b-0">
											<tbody>
												<tr>
													<td class="bg-custom"><b>Classes</b></td>
													<td><code>.tx-[viewport]-[size]</code></td>
												</tr>
												<tr>
													<td class="bg-custom"><b>Viewports</b></td>
													<td>xs | sm | md | lg | xl</td>
												</tr>
												<tr>
													<td class="bg-custom"><b>Sizes</b></td>
													<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 50 (step of 2)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div><!-- col-end-->

						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header">
									<div class="card-title">Font Weight</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered mg-b-0">
											<tbody>
												<tr>
													<td class="bg-custom"><b>Classes</b></td>
													<td><code>.tx-[weight]</code></td>
												</tr>
												<tr>
													<td class="bg-custom"><b>Weight</b></td>
													<td>bold | semibold | medium | normal | light | thin | xthin</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div><!-- col-end-->

						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header">
									<div class="card-title">Font Color</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered text-nowrap">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p"><b>Classes</b></td>
													<td><code>.tx-[color]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p"><b>Colors</b></td>
													<td>primary | success | warning | danger | info | indigo | purple | orange | teal | pink | black | white | inverse</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered text-nowrap">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p"><b>Classes</b></td>
													<td><code>.tx-gray-[num]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p"><b>Colors</b></td>
													<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="table-responsive">
										<table class="table table-bordered text-nowrap mg-b-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p"><b>Classes</b></td>
													<td><code>.tx-white-[transparency]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p"><b>Colors</b></td>
													<td>2 | 3 | 4 | 5 | 6 | 7 | 8</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div><!-- col-end-->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Font Spacing</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p"><b>Classes</b></td>
													<td><code>.tx-spacing-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p"><b>Values</b></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered mg-b-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p"><b>Classes</b></td>
													<td><code>.tx-spacing--[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p"><b>Values</b></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 ( negative spacing result )</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div><!-- col-end-->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Height</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p"><b>Classes</b></td>
													<td><code>.lh-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p"><b>Values</b></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered mg-b-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p"><b>Classes</b></td>
													<td><code>.lh-[viewport]-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p"><b>View Port</b></td>
													<td>xs | sm | md | lg | xl</td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p"><b>Values</b></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div><!-- col-end-->

					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- Ionicons js -->
		<script src="{{asset('build/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>

@endsection
