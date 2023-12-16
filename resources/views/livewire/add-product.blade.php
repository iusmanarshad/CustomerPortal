@extends('layouts.app')

@section('styles')

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">ADD-PRODUCT</span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb breadcrumb-style3">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Ecommerce</a></li>
							<li class="breadcrumb-item active" aria-current="page">Add-Product</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-9">
                        <div class="card">
							<div class="card-header">
								<div class="card-title">Add New Product</div>
							</div>
                            <div class="card-body">
                                <form action="#">
									<div class="row">
										<div class="col-xl-6">
											<div class="form-group">
												<label for="productName" class="form-label">Product Name</label>
												<input type="text" class="form-control" id="productName" placeholder="Enter Product Name">
											</div>
										</div>
										<div class="col-xl-6">
											<div class="form-group">
												<label class="form-label">Product Category</label>
												<select name="product-category" class="form-control form-select select2" data-bs-placeholder="Select Category">
													<option label="Choose one"></option>
													<option value="all">All</option>
													<option value="accessories">Accessories</option>
													<option value="children">Children</option>
													<option value="electronics">Electronics</option>
													<option value="fashion">Fashion</option>
													<option value="homeAppliances">Home Appliances</option>
													<option value="medicalHealth">Medical Health</option>
													<option value="petSupplies">Pet Supplies</option>
													<option value="others">Others</option>
												</select>
											</div>
										</div>
										<div class="col-xl-12">
											<div class="form-group">
												<label class="form-label">Product Description</label>
												<div id="summernote"><p>product description goes here..</p><ul><li>highlight</li><li>product</li><li>features</li></ul></div>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="form-group">
												<label for="productPrice" class="form-label">Product Price</label>
												<input type="number" id="productPrice" class="form-control" placeholder="Enter Product Price">
											</div>
										</div>
										<div class="col-xl-6">
											<div class="form-group">
												<label for="productDiscount" class="form-label">Product discount(%)</label>
												<input type="number" id="productDiscount" class="form-control" placeholder="Enter Product Discount in %">
											</div>
										</div>
										<div class="col-xl-12">
											<div class="form-group">
												<label class="form-label">Product Images</label>
												<div>
													<input id="productImage" type="file" name="files" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
												</div>
											</div>
										</div>
										<div class="col-xl-12">
											<div class="form-group">
												<label class="form-label">Product Tags</label>
												<div class="p-2 border br-5">
													<input type="text" data-role="tagsinput" value="tags" class="form-control">
												</div>
											</div>
										</div>
									</div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
							<div class="card-header">
								<div class="card-title">Publilsh</div>
							</div>
                            <div class="card-body">
								<form action="#">
									<div class="form-group">
										<div class="row align-items-center">
											<div class="col-10 order-2">
												<label class="form-label mt-0">Sheduled Publish</label>
											</div>
											<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
												<label for="sheduledPost" class="mt-1">
													<input type="checkbox" class="custom-switch-input" id="sheduledPost">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="form-label mt-0">Sheduled Date</label>
										<input class="form-control" id="sheduledDate" placeholder="DD-MM-YYYY" type="text">
									</div>
									<div class="form-group">
										<label  class="form-label">Visiblility</label>
										<select name="visibility-status" class="form-control form-select select2-no-search" data-bs-placeholder="Visibility Status">
											<option label="Choose one"></option>
											<option value="public">Public</option>
											<option value="private">Private</option>
										</select>
									</div>
								</form>
                            </div>
                        </div>
						<div class="card">
							<div class="card-header">
								<div class="card-title">Company Details</div>
							</div>
							<div class="card-body">
								<form action="#">
									<div class="form-group">
										<label for="companyName" class="form-label">Company Name</label>
										<input type="text" class="form-control" id="companyName" placeholder="Enter Company Name">
									</div>
									<div class="form-group">
										<label for="operatorName" class="form-label">Operator/Owner Name</label>
										<input type="text" class="form-control" id="operatorName" placeholder="Enter Operator/Owner Name">
									</div>
									<div class="form-group">
										<label for="brandName" class="form-label">Brand Name</label>
										<input type="text" class="form-control" id="brandName" placeholder="Enter Brand Name">
									</div>
								</form>
							</div>
						</div>
                    </div>
					<div class="col-xl-12">
						<div class="form-group">
							<div class="btn-list">
								<input type="button" class="btn btn-secondary" value="Save As Draft">
								<input type="button" class="btn btn-primary" value="Publish">
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection

@section('scripts')

		<!-- INTERNAL Summernote Editor js -->
		<script src="{{asset('build/assets/plugins/summernote-editor/summernote1.js')}}"></script>
		@vite('resources/assets/js/summernote.js')

		<!-- Internal Select2.min js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal Fancy uploader js-->
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>

		<!-- Internal Input tags js-->
		<script src="{{asset('build/assets/plugins/inputtags/inputtags.js')}}"></script>

		<!-- Flatpickr js -->
		<script src="{{asset('build/assets/plugins/flatpickr/flatpickr.js')}}"></script>

		<!-- Sticky js -->
		@vite('resources/assets/js/add-product.js')

@endsection
