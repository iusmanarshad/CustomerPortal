@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">EXTRAS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Extras</li>
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
									<div class="card-title">Opacity</div>
								</div>
								<div class="card-body">
									<div class="example">
										<div class="d-flex flex-wrap">
											<div class="flex-1 bg-primary tx-white p-3 ht-100 p-3 op-1">.op-1</div>
											<div class="flex-1 bg-primary tx-white p-3 ht-100 p-3 op-2">.op-2</div>
											<div class="flex-1 bg-primary tx-white p-3 ht-100 p-3 op-3">.op-3</div>
											<div class="flex-1 bg-primary tx-white p-3 ht-100 p-3 op-4">.op-4</div>
											<div class="flex-1 bg-primary tx-white p-3 ht-100 p-3 op-5">.op-5</div>
											<div class="flex-1 bg-primary tx-white p-3 ht-100 p-3 op-6">.op-6</div>
											<div class="flex-1 bg-primary tx-white p-3 ht-100 p-3 op-7">.op-7</div>
											<div class="flex-1 bg-primary tx-white p-3 ht-100 p-3 op-8">.op-8</div>
											<div class="flex-1 bg-primary tx-white p-3 ht-100 p-3 op-9">.op-9</div>
										</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-20">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.op-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive border radius-4 mg-t-10">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.op-[breakpoint]-[value]</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>
														<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</p>
													</td>
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
									<div class="card-title">Shadow</div>
								</div>
								<div class="card-body">
									<div class="table-responsive border radius-4">
										<table class="table border-0 mb-0">
											<tbody>
												<tr>
													<td class="bg-custom wd-20p border-top-0 font-weight-semibold">Classes</td>
													<td class="border-top-0"><code>.shadow-base</code></td>
													<td class="border-top-0"><code>.shadow-none</code></td>
												</tr>
												<tr>
													<td class="bg-custom wd-20p font-weight-semibold">Values</td>
													<td>Add shadow to any box element.</td>
													<td>Remove shadow to any box element.</td>
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
