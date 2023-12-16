@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">FORM ELEMENTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Default Form</div>
								</div>
								<div class="card-body">
									<form class="form-horizontal" >
										<div class="form-group">
											<input type="text" class="form-control" id="inputName" placeholder="Name">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="inputEmail" placeholder="Email">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="inputPassword" placeholder="Password">
										</div>
										<div class="form-group mb-0 justify-content-end">
											<div class="checkbox">
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="chekOut">
													<label for="chekOut" class="custom-control-label mt-1">Check me Out</label>
												</div>
											</div>
										</div>
										<div class="form-group mb-0 mt-3">
											<div class="btn-list">
												<a href="javascript:void(0)" class="btn btn-primary" role="button">Sign in</a>
												<a href="javascript:void(0)" class="btn btn-secondary" role="button">Cancel</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card ">
								<div class="card-header">
									<div class="card-title">Vertical Form</div>
								</div>
								<div class="card-body">
									<form >
										<div class="">
											<div class="form-group">
												<label for="inpEmail">Email address</label>
												<input type="email" class="form-control" id="inpEmail" placeholder="Enter email">
											</div>
											<div class="form-group">
												<label for="inpPassword">Password</label>
												<input type="password" class="form-control" id="inpPassword" placeholder="Password">
											</div>
											<div class="checkbox">
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="chkOut">
													<label for="chkOut" class="custom-control-label mt-1">Check me Out</label>
												</div>
											</div>
										</div>
										<a href="javascript:void(0)" class="btn btn-primary mt-3 mb-0" role="button">Submit</a>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Form Input and Textarea
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg">
											<input class="form-control" placeholder="Input box" type="text">
										</div>
										<div class="col-lg mg-t-10 mg-lg-t-0">
											<input class="form-control" placeholder="Input box (readonly)" readonly type="text">
										</div>
										<div class="col-lg mg-t-10 mg-lg-t-0">
											<input class="form-control" disabled placeholder="Input box (disabled)" type="text">
										</div>
									</div>
									<div class="row">
										<div class="col-lg mg-t-10">
											<textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
										</div>
										<div class="col-lg mg-t-10">
											<textarea class="form-control" placeholder="Textarea (readonly)" readonly rows="3"></textarea>
										</div>
										<div class="col-lg mg-t-10">
											<textarea class="form-control" disabled placeholder="Texarea (disabled)" rows="3"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Form Input Sizes</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg">
											<input class="form-control form-control-sm mg-b-10" placeholder="Input sm box" type="text">
											<input class="form-control mg-b-10" placeholder="Input box" type="text">
											<input class="form-control form-control-lg" placeholder="Input lg box" type="text">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Valid State Input</div>
								</div>
								<div class="card-body">
									<form class="needs-validation was-validated">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group has-success mg-b-0">
													<input class="form-control" placeholder="Input box (success state)" required="" type="text" value="This is input">
													<textarea class="form-control mg-t-10" placeholder="Textarea (success state)" required="" rows="3">This is textarea</textarea>
												</div>
											</div>
											<div class="col-lg-6 mg-t-20 mg-lg-t-0">
												<div class="form-group has-danger mg-b-0">
													<input class="form-control" placeholder="Input box (invalid state)" required="" type="text">
													<textarea class="form-control mg-t-10" placeholder="Textarea (invalid state)" required="" rows="3"></textarea>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">File Browser</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-12">
											<div class="mb-3">
											<label for="formFile" class="form-label">Default file input example</label>
											<input class="form-control" type="file" id="formFile">
											</div>
											<div class="mb-3">
											<label for="formFileMultiple" class="form-label">Multiple files input example</label>
											<input class="form-control" type="file" id="formFileMultiple" multiple>
											</div>
											<div class="mb-3">
											<label for="formFileDisabled" class="form-label">Disabled file input example</label>
											<input class="form-control" type="file" id="formFileDisabled" disabled>
											</div>
											<div class="mb-3">
											<label for="formFileSm" class="form-label">Small file input example</label>
											<input class="form-control form-control-sm" id="formFileSm" type="file">
											</div>
											<div>
											<label for="formFileLg" class="form-label">Large file input example</label>
											<input class="form-control form-control-lg" id="formFileLg" type="file">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->


						<!--div-->
						<div class="col-md-12 col-xl-12 col-xxl-6 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Custom Checkboxes & Radios
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-4">
											<label class="ckbox"><input type="checkbox"><span>Checkbox Unchecked</span></label>
										</div>
										<div class="col-lg-4">
											<label class="ckbox"><input checked type="checkbox"><span>Checkbox Checked</span></label>
										</div>
										<div class="col-lg-4">
											<label class="ckbox"><input disabled type="checkbox"><span>Checkbox Disabled</span></label>
										</div>
									</div>
									<div class="row mg-t-15">
										<div class="col-lg-4">
											<label class="rdiobox"><input name="rdio" type="radio"> <span>Radio Unchecked</span></label>
										</div>
										<div class="col-lg-4">
											<label class="rdiobox"><input checked name="rdio" type="radio"> <span>Radio Checked</span></label>
										</div>
										<div class="col-lg-4">
											<label class="rdiobox"><input disabled name="rdio" type="radio"> <span>Radio Disabled</span></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xxl-6  col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Toggle Switches</div>
								</div>
								<div class="card-body">
									<div class="main-toggle-group-demo">
										<div class="main-toggle">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-secondary">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-success">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-dark">
											<span></span>
										</div>
									</div>
									<div class="main-toggle-group-demo mg-t-10">
										<div class="main-toggle on">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-secondary on">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-success on">
											<span></span>
										</div>
										<div class="main-toggle main-toggle-dark on">
											<span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Input Groups</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-4">
											<div class="input-group mb-3">
												<span class="input-group-text" id="basic-addon1">@</span>
												<input aria-describedby="basic-addon1" aria-label="Username" class="form-control" placeholder="Username" type="text">
											</div><!-- input-group -->
										</div>
										<div class="col-lg-4">
											<div class="input-group mb-3">
												<input aria-describedby="basic-addon2" aria-label="Recipient's username" class="form-control" placeholder="Recipient's username" type="text">
												<span class="input-group-text" id="basic-addon2">@example.com</span>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="input-group mb-3">
												<span class="input-group-text">$</span>
												<input aria-label="Amount (to the nearest dollar)" class="form-control" type="text">
												<span class="input-group-text">.00</span>
											</div><!-- input-group -->
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<div class="input-group">
												<div class="input-group-text">
													<label class="ckbox wd-16 mg-b-0"><input class="mg-0" type="checkbox"><span></span></label>
												</div>
												<input class="form-control" placeholder="Text input with checkbox" type="text">
											</div><!-- input-group -->
										</div><!-- col-4 -->
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<div class="input-group">
												<div class="input-group-text">
													<label class="rdiobox wd-16 mg-b-0"><input type="radio"><span></span></label>
												</div>
												<input class="form-control" placeholder="Text input with radiobox" type="text">
											</div><!-- input-group -->
										</div><!-- col-4 -->
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<div class="input-group">
												<input class="form-control" placeholder="Search for..." type="text">
												<button class="btn btn-primary br-ts-0 br-bs-0" type="button"><i class="fa fa-search"></i></button>
											</div><!-- input-group -->
										</div><!-- col-4 -->
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Input Mask</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-3">
											<div class="input-group">
												<div class="input-group-text">
													Date:
												</div>
												<input class="form-control" id="dateMask" placeholder="MM/DD/YYYY" type="text">
											</div><!-- input-group -->
										</div><!-- col-4 -->
										<div class="col-lg-3 mg-t-20 mg-lg-t-0">
											<div class="input-group">
												<div class="input-group-text">
													Phone:
												</div>
											<input class="form-control" id="phoneMask" placeholder="(000) 000-0000" type="text">
											</div><!-- input-group -->
										</div>
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<div class="input-group">
												<div class="input-group-text">
													Phone + Ext.:
												</div>
											<input class="form-control" id="phoneExtMask" placeholder="(000) 000-0000 ext 0000" type="text">
											</div><!-- input-group -->
										</div>
										<div class="col-lg-2 mg-t-20 mg-lg-t-0">
											<div class="input-group">
												<div class="input-group-text">
													SSN:
												</div><!-- input-group-text -->
												<input class="form-control" id="ssnMask" placeholder="000-00-0000" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Basic Date picker
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-text">
												<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
											</div>
											<input type="text" class="form-control" id="date" placeholder="Choose date">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Date picker With Time
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-text">
												<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
											</div>
											<input type="text" class="form-control" id="datetime" placeholder="Choose date with time">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Human Friendly dates
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-text">
												<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
											</div>
											<input type="text" class="form-control" id="humanfrienndlydate" placeholder="Human friendly dates">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Date range picker
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-text">
												<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
											</div>
											<input type="text" class="form-control" id="daterange" placeholder="Date range picker">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--div-->

						<!--div-->
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Basic Time picker
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-text">
												<i class="typcn typcn-stopwatch tx-24 lh--9 op-6"></i>
											</div>
											<input type="text" class="form-control" id="timepikcr" placeholder="Choose time">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Time Pickr with 24hr Format
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-text">
												<i class="typcn typcn-stopwatch tx-24 lh--9 op-6"></i>
											</div>
											<input type="text" class="form-control" id="timepickr1" placeholder="Choose time in 24hr format">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Time Picker with Limits
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-text">
												<i class="typcn typcn-stopwatch tx-24 lh--9 op-6"></i>
											</div>
											<input type="text" class="form-control" id="limittime" placeholder="choose time min 16:00 to max 22:30">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										DateTimePicker with Limited Time Range
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-text">
												<i class="typcn typcn-stopwatch tx-24 lh--9 op-6"></i>
											</div>
											<input type="text" class="form-control" id="limitdatetime" placeholder="date with time limit from 16:00 to 22:00">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--div-->

						<!--div-->
						<div class="col-xxl-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Inline Calendar
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<input type="text" class="form-control" id="inlinecalendar" placeholder="Choose date">
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Date Picker with week numbers
										</div>
									</div>
									<div class="card-body">
										<div class="form-group mb-0">
											<div class="input-group">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
												<input type="text" class="form-control" id="weeknum" placeholder="Choose date">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Inline Time Picker
										</div>
									</div>
									<div class="card-body">
										<div class="form-group mb-0">
											<input type="text" class="form-control" id="inlinetime" placeholder="Choose time">
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Preloading time
										</div>
									</div>
									<div class="card-body">
										<div class="form-group mb-0">
											<div class="input-group">
												<div class="input-group-text">
													<i class="typcn typcn-stopwatch tx-24 lh--9 op-6"></i>
												</div>
												<input type="text" class="form-control" id="pretime" placeholder="Preloading time">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Color Picker
									</div>
								</div>
								<div class="card-body">
									<div class="container  p-0 p-md-5">
										<div class="d-flex justify-content-between">
											<div>
												<div class="theme-container"></div>
												<div class="pickr-container"></div>
											</div>
											<div>
												<div class="theme-container1"></div>
												<div class="pickr-container1"></div>
											</div>
											<div>
												<div class="theme-container2"></div>
												<div class="pickr-container2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Select
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Default Select</label>
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Country">
											<option value="br">Brazil</option>
											<option value="cz">Czech Republic</option>
											<option value="de">Germany</option>
											<option value="pl" selected>Poland</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Customize Select</label>
										<select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country">
											<option value="br">Brazil</option>
											<option value="cz">Czech Republic</option>
											<option value="de">Germany</option>
											<option value="pl" selected>Poland</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Select2 with image</label>
										<select name="members" class="form-control select2 select2-img" data-bs-placeholder="Selct One">
											<option label="Choose one"></option>
											<option value="1" selected>Angeline Julliet</option>
											<option value="2">Helena Rose</option>
											<option value="13">Daniel Obrien</option>
											<option value="15">Jorah Randy</option>
											<option value="3">Emma Watson</option>
											<option value="5">Bonny Benett</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Disabled Select</label>
										<select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country" disabled>
												<option value="br">Brazil</option>
												<option value="cz">Czech Republic</option>
												<option value="de">Germany</option>
												<option value="pl" selected>Poland</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

					</div>
					<!-- row closed -->

@endsection

@section('scripts')

		<!--Internal  jquery.maskedinput js -->
		<script src="{{asset('build/assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

		<!--internal color picker js-->
		<script src="{{asset('build/assets/plugins/colorpicker/pickr.es5.min.js')}}"></script>
        @vite('resources/assets/js/colorpicker.js')

		<!-- Internal Select2.min js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>


		<!-- Flatpickr js -->
		<script src="{{asset('build/assets/plugins/flatpickr/flatpickr.js')}}"></script>
		@vite('resources/assets/js/flatpickr.js')

		<!-- Internal form-elements js -->
		@vite('resources/assets/js/form-elements.js')

@endsection
