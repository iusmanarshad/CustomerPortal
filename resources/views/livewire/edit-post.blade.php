@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">EDIT POST</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit-Post</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-md-12">
							<div class="card ">
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Blog Title</label>
										<input type="text" class="form-control" value="Myths about workouts">
									</div>
									<div class="form-group">
										<label class="form-label">Category</label>
										<select class="form-control select2 form-select">
											<option>Select</option>
											<option value="1">IT</option>
											<option value="2">Language</option>
											<option value="3">Science</option>
											<option value="4" selected>Health & Fitness</option>
											<option value="5">Humanities</option>
											<option value="6">Business & Marketing</option>
											<option value="7">Maths</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Edit Content</label>
										<div class="ql-wrapper">
											<div id="quillEditor">
												<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
												<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
											</div>
										</div>
									</div>
									<div class="mb-4">
										<div>
											<input id="demo" type="file" name="files" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
										</div>
									</div>
								</div>
								<div class="card-footer ">
									<a href="javascript:void(0)" class="btn btn-secondary">Save to Draft</a>
									<a href="javascript:void(0)" class="btn btn-primary float-end">Publish Now</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

		<!--Internal quill js -->
		<script src="{{asset('build/assets/plugins/quill/quill.min.js')}}"></script>

		<!--Internal Fileuploads js-->
		<script src="{{asset('build/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!--Internal Fancy uploader js-->
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!-- Internal Summernote js-->
		<script src="{{asset('build/assets/plugins/summernote-editor/summernote1.js')}}"></script>

		<!-- Internal Select2.min js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')

		<!-- Internal Form-editor js -->
		@vite('resources/assets/js/form-editor-2.js')

@endsection
