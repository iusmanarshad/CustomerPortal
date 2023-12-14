@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FORM WIZARD</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Basic Content Wizard
									</div>
								</div>
								<div class="card-body">
									<div id="wizard1" class="br-5">
										<h3>Personal Information</h3>
										<section>
											<div class="control-group form-group">
												<label for="wizName" class="form-label">Name</label>
												<input type="text" id="wizName" class="form-control required" placeholder="Name">
											</div>
											<div class="control-group form-group">
												<label for="wizEmail" class="form-label">Email</label>
												<input type="email" id="wizEmail" class="form-control required" placeholder="Email Address">
											</div>
											<div class="control-group form-group">
												<label for="wizNumber" class="form-label">Phone Number</label>
												<input type="number" id="wizNumber" class="form-control required" placeholder="Number">
											</div>
											<div class="control-group form-group mb-0">
												<label for="wizAddress" class="form-label">Address</label>
												<input type="text" id="wizAddress" class="form-control required" placeholder="Address">
											</div>
										</section>
										<h3>Billing Information</h3>
										<section>
											<div class="table-responsive border br-5">
												<table class="table border-0 mb-0">
													<tbody>
														<tr>
															<td class="border-top-0"><p class="tx-16 mb-0">Cart Subtotal</p></td>
															<td class="border-top-0"><p class="tx-16 mb-0 text-end">$773.00</p></td>
														</tr>
														<tr>
															<td><p class="tx-16 mb-0">Totals</p></td>
															<td><p class="tx-16 mb-0 text-end">$1116.00</p></td>
														</tr>
														<tr>
															<td><p class="tx-18 mb-0 font-weight-semibold">Order Total</p></td>
															<td><p class="tx-18 mb-0 font-weight-semibold text-end">$1611.00</p></td>
														</tr>
													</tbody>
												</table>
											</div>
										</section>
										<h3>Payment Details</h3>
										<section>
											<div class="form-group">
												<label for="wizCardHolder" class="form-label" >Card Holder Name</label>
												<input type="text" id="wizCardHolder" class="form-control" placeholder="First Name">
											</div>
											<div class="form-group">
												<label for="wizCardNumber" class="form-label">Card number</label>
												<div class="input-group">
													<input type="text" id="wizCardNumber" class="form-control" placeholder="Search for...">
													<button class="btn btn-secondary" type="button">
														<i class="fab fa-cc-visa"></i> &nbsp;
														<i class="fab fa-cc-amex"></i> &nbsp;
														<i class="fab fa-cc-mastercard"></i>
													</button>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<div class="form-group mb-sm-0">
														<label class="form-label">Expiration</label>
														<div class="input-group">
															<input type="number" class="form-control" placeholder="MM" name="expiremonth">
															<input type="number" class="form-control" placeholder="YY" name="expireyear">
														</div>
													</div>
												</div>
												<div class="col-sm-4 ">
													<div class="form-group mb-0">
														<label for="wizCvv" class="form-label">CVV <i class="fa fa-question-circle"></i></label>
														<input type="number" id="wizCvv" class="form-control" required>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Basic Wizard with Validation
									</div>
								</div>
								<div class="card-body">
									<div id="wizard2" class="br-5">
										<h3>Personal Information</h3>
										<section>
											<p class="mg-b-20 tx-14">Try the keyboard navigation by clicking arrow left or right!</p>
											<div class="row row-sm">
												<div class="col-md-5 col-lg-4">
													<label for="firstname" class="form-label">Firstname: <span class="tx-danger">*</span></label>
													<input type="text" id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" required>
												</div>
												<div class="col-md-5 col-lg-4">
													<label for="lastname" class="form-label">Lastname: <span class="tx-danger">*</span></label>
													<input type="text" id="lastname" class="form-control" name="lastname" placeholder="Enter lastname" required>
												</div>
											</div>
										</section>
										<h3>Billing Information</h3>
										<section>
											<p class="mg-b-20 tx-14">Try the keyboard navigation by clicking arrow left or right!</p>
											<div class="form-group wd-xs-300">
												<label for="email" class="form-label">Email: <span class="tx-danger">*</span></label>
												<input type="email" id="email" class="form-control" name="email" placeholder="Enter email address" required>
											</div>
										</section>
										<h3>Payment Details</h3>
										<section>
											<div class="form-group">
												<label for="name11" class="form-label" >CardHolder Name</label>
												<input type="text" id="name11" class="form-control" placeholder="First Name">
											</div>
											<div class="form-group">
												<label for="cardnumber" class="form-label">Card number</label>
												<div class="input-group">
													<input type="text" id="cardnumber" class="form-control" placeholder="Search for...">
													<button class="btn btn-secondary" type="button">
														<i class="fab fa-cc-visa"></i> &nbsp;
														<i class="fab fa-cc-amex"></i> &nbsp;
														<i class="fab fa-cc-mastercard"></i>
													</button>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<div class="form-group mb-sm-0">
														<label class="form-label">Expiration</label>
														<div class="input-group">
															<input type="number" class="form-control" placeholder="MM" name="expiremonth">
															<input type="number" class="form-control" placeholder="YY" name="expireyear">
														</div>
													</div>
												</div>
												<div class="col-sm-4 ">
													<div class="form-group mb-0">
														<label for="cvv" class="form-label">CVV <i class="fa fa-question-circle"></i></label>
														<input type="number" id="cvv" class="form-control" required>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vertical Orientation Wizard
									</div>
									<div id="wizard3">
										<h3>Personal Information</h3>
										<section>
											<div class="control-group form-group">
												<label class="form-label">Name</label>
												<input type="text" class="form-control required" placeholder="Name">
											</div>
											<div class="control-group form-group">
												<label class="form-label">Email</label>
												<input type="email" class="form-control required" placeholder="Email Address">
											</div>
											<div class="control-group form-group">
												<label class="form-label">Phone Number</label>
												<input type="number" class="form-control required" placeholder="Number">
											</div>
											<div class="control-group form-group mb-2">
												<label class="form-label">Address</label>
												<input type="text" class="form-control required" placeholder="Address">
											</div>
											<div class="mb-2">
												<input type="file" class="dropify" data-height="200" />
											</div>
											<div class="mb-0">
												<input id="demo" type="file" name="files" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
											</div>
										</section>

										<h3>Billing Information</h3>
										<section>
											<div class="table-responsive mg-t-20">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td>Cart Subtotal</td>
															<td class="text-end">$792.00</td>
														</tr>
														<tr>
															<td><span>Totals</span></td>
															<td class="text-end tx-muted"><span>$792.00</span></td>
														</tr>
														<tr>
															<td><span>Order Total</span></td>
															<td><h2 class="price text-end mb-0">$792.00</h2></td>
														</tr>
													</tbody>
												</table>
											</div>
										</section>

										<h3>Payment Details</h3>
										<section>
											<div class="form-group">
												<label class="form-label" >CardHolder Name</label>
												<input type="text" class="form-control" id="name12" placeholder="First Name">
											</div>
											<div class="form-group">
												<label class="form-label">Card number</label>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search for...">
													<span class="input-group-append">
														<button class="btn btn-secondary" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
														<i class="fab fa-cc-mastercard"></i></button>
													</span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<div class="form-group mb-sm-0">
														<label class="form-label">Expiration</label>
														<div class="input-group">
															<input type="number" class="form-control" placeholder="MM" name="expiremonth">
															<input type="number" class="form-control" placeholder="YY" name="expireyear">
														</div>
													</div>
												</div>
												<div class="col-sm-4 ">
													<div class="form-group mb-0">
														<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
														<input type="number" class="form-control" required>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->


@endsection

@section('scripts')

		<!-- Internal Jquery.steps js -->
		<script src="{{asset('build/assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>		
		<script src="{{asset('build/assets/plugins/parsleyjs/parsley.min.js')}}"></script>
		
		<!--Internal  Form-wizard js -->
		@vite('resources/assets/js/form-wizard.js')

		<!--Internal Fileuploads js-->
		<script src="{{asset('build/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <!-- <script src="{{asset('build/assets/plugins/fileuploads/js/file-upload.js')}}"></script> -->

		<!--Internal Fancy uploader js-->
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

@endsection
