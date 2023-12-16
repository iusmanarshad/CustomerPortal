@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">INVOICE</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Invoice</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="d-lg-flex">
										<div class="d-flex">
											<a href="{{url('index')}}"><img src="{{asset('build/assets/img/brand/favicon-white.png')}}" class="sign-favicon ht-40" alt="logo"></a>
											<div class="mb-4 ms-2">
												<h2 class="mb-0">Zem</h2>
												<span class="tx-muted">zembt5@gmail.com</span>
											</div>
										</div>
										<div class="ms-auto">
											<address class="tx-muted text-end">
												Cecilia Chapman<br>
												P.O. Box 283 8562 Fusce Rd., 20620<br>
												ypurdomain@example.com
											</address>
										</div>
									</div>
									<div class="invoice-highlight">
										<div class="row row-sm p-3">
											<div class="col-lg-6">
												<p class="h3 mb-3">Invoice :</p>
												<p class="mb-2">#INV-0033970</p>
												<p class="mb-2">Issued Date <span class="op-8">11-03-2022</span></p>
												<p class="mb-0">Due Date <span class="op-8">30-04-2022</span></p>
											</div>
											<div class="col-lg-6 text-end">
												<p class="h3">To :</p>
												<address class="mb-0">
													Kyla Olsen<br>
													Muskegon, KY<br>
													Chelsea, 12482<br>
													ypurdomain@example.com
												</address>
											</div>
										</div>
									</div>
									<div class="table-responsive border radius-4 mg-t-30">
										<table class="table table-invoice mb-0 border-0">
											<thead>
												<tr>
													<th class="wd-20p">Product</th>
													<th class="wd-40p">Description</th>
													<th class="tx-center">QNTY</th>
													<th class="tx-right">Unit</th>
													<th class="tx-right">Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Logo Creation</td>
													<td class="tx-12">Logo and business cards design</td>
													<td class="tx-center">2</td>
													<td class="tx-right">$60.00</td>
													<td class="tx-right">$120.00</td>
												</tr>
												<tr>
													<td>Online Store Design & Development</td>
													<td class="tx-12">Design/Development for all popular modern browsers</td>
													<td class="tx-center">3</td>
													<td class="tx-right">$80.00</td>
													<td class="tx-right">$240.00</td>
												</tr>
												<tr>
													<td>App Design</td>
													<td class="tx-12">Promotional mobile application</td>
													<td class="tx-center">1</td>
													<td class="tx-right">$40.00</td>
													<td class="tx-right">$40.00</td>
												</tr>
												<tr>
													<td class="valign-middle" colspan="2" rowspan="4">
														<div class="invoice-notes">
															<label class="main-content-label tx-13">Notes</label>
															<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
														</div><!-- invoice-notes -->
													</td>
													<td class="tx-right">Sub-Total</td>
													<td class="tx-right" colspan="2">$400.00</td>
												</tr>
												<tr>
													<td class="tx-right">Tax</td>
													<td class="tx-right" colspan="2">3%</td>
												</tr>
												<tr>
													<td class="tx-right">Discount</td>
													<td class="tx-right" colspan="2">10%</td>
												</tr>
												<tr>
													<td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
													<td class="tx-right" colspan="2">
														<h4 class="tx-bold mb-0">$450.00</h4>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer text-end">
									<div class="btn-list">
										<button type="button" class="btn btn-primary me-0 me-sm-2"><i class="fe fe-credit-card me-1"></i> Pay Invoice</button>
										<button type="button" class="btn btn-secondary me-0 me-sm-2"><i class="fe fe-send me-1"></i> Send Invoice</button>
										<button type="button" class="btn btn-info" onclick="javascript:window.print();"><i class="fe fe-printer me-1"></i> Print Invoice</button>
									</div>
								</div>
							</div>
						</div><!-- col-end -->
					</div>
					<!-- End Row -->

@endsection

@section('scripts')



@endsection
