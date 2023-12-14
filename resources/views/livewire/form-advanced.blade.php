@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">ADVANCED FORMS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Advanced Forms</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Single Select Style
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Single Select</label>
										<select name="somename" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
											<!--placeholder-->
											<option title="eg1 is a car"  value="eg1">eg1</option>
											<option value="saab">Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Disabled Select</label>
										<select class="SlectBox form-control" disabled>
											<option value="eg1">eg1</option>
											<option selected value="saab">Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
											<option disabled value="opt1">option1</option>
											<option value="opt2">option2</option>
											<option value="opt3">option3</option>
										</select>
									</div>
									<div class="form-group mb-0">
										<label class="form-label">Inline Select</label>
										<select class="SlectBox form-control">
											<option>selected</option>
											<option>eg1</option>
											<option>Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
											<option>eg1</option>
											<option>Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
											<option>eg1</option>
											<option>Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
											<option>eg1</option>
											<option>Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Multiple Select Styles
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Multiple Select</label>
										<select multiple="multiple" class="testselect2">
											<option selected value="eg1">eg1</option>
											<option value="saab">Saab</option>
											<option value="eg2">eg2</option>
											<option value="eg3">eg3</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Disabled Select</label>
										<select multiple="multiple" class="testselect2" disabled >
										   <option selected value="eg1">eg1</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="eg2">eg2</option>
										   <option value="eg3">eg3</option>
										   <option value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option class="someclass" value="eg3">eg3</option>
										   <option class="someclass" value="eg4">eg4</option>
										   <option class="someclass" value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="eg3">eg3</option>
										   <option value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="hyundai">Hyundai</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
									<div class="form-group mb-0">
										<label class="form-label">Optgroup Support</label>
										<select   multiple="multiple" class="testselect2">
										   <option selected value="eg1">eg1</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="eg2">eg2</option>
										   <option value="eg3">eg3</option>
										   <option value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option class="someclass" value="eg3">eg3</option>
										   <option class="someclass" value="eg4">eg4</option>
										   <option class="someclass" value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="eg3">eg3</option>
										   <option value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="hyundai">Hyundai</option>
										   <option value="mitsubishi">Mitsubishi</option>
									   </select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Multiple Select Styles
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Multiple Select-1</label>
										<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="selectsum1">
										   <option selected value="eg1">eg1</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="eg2">eg2</option>
										   <option value="eg3">eg3</option>
										   <option selected value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
									<div class="form-group mb-0">
										<label class="form-label">Multiple Select-2</label>
										<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="selectsum2">
										   <option selected value="eg1">eg1</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="eg2">eg2</option>
										   <option value="eg3">eg3</option>
										   <option selected value="eg4">eg4</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
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
								<div class="card-header">
									<div class="card-title">
										Telephone Input
									</div>
								</div>
								<div class="card-body">
									<div class="input-group telephone-input">
										<input type="tel" id="mobile-number" placeholder="e.g. +1 702 123 4567">
										<button class="btn ripple btn-primary" type="button">Submit</button>
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
								<div class="card-header">
									<div class="card-title">
										File Upload
									</div>
								</div>
								<div class="card-body">
									<div class="row mb-4">
										<div class="col-sm-12 col-md-4">
											<input type="file" class="dropify" data-height="200" />
										</div>
										<div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
											<input type="file" class="dropify" data-default-file="{{asset('build/assets/img/photos/1.jpg')}}" data-height="200"  />
										</div>
										<div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
											<input type="file" class="dropify" disabled="disabled"  />
										</div>
									</div>
									<div>
										<input id="demo" type="file" name="files" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!--Internal Fileuploads js-->
		<script src="{{asset('build/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!--Internal Fancy uploader js-->
		<script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!--Internal Sumoselect js-->
		<script src="{{asset('build/assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

		<!-- Internal TelephoneInput js-->
		<script src="{{asset('build/assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
		<script src="{{asset('build/assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>

		<!--Internal  Form-elements js-->
		@vite('resources/assets/js/advanced-form-elements.js')

@endsection
