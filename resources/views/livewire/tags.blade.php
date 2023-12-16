@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<span class="main-content-title mg-b-0 mg-b-lg-1">TAGS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tags</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Default Tags</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="tags">
											<span class="tag">First tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
											<span class="tag">Second tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
											<span class="tag">Third tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
											<span class="tag">Fourth tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Rounded Pill Tags</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="tags">
											<span class="tag rounded-pill">One<a href="javascript:void(0)" class="tag-addon rounded-circle"><i class="fe fe-x"></i></a></span>
											<span class="tag rounded-pill">Two<a href="javascript:void(0)" class="tag-addon rounded-circle"><i class="fe fe-x"></i></a></span>
											<span class="tag rounded-pill">Three<a href="javascript:void(0)" class="tag-addon rounded-circle"><i class="fe fe-x"></i></a></span>
											<span class="tag rounded-pill">Four<a href="javascript:void(0)" class="tag-addon rounded-circle"><i class="fe fe-x"></i></a></span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Link Tag</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="tags">
											<a href="javascript:void(0)" class="tag tag-rounded">First tag</a>
											<a href="javascript:void(0)" class="tag tag-rounded">Second tag</a>
											<a href="javascript:void(0)" class="tag tag-rounded">Third tag</a>
											<a href="javascript:void(0)" class="tag tag-rounded">Fourth tag</a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Colored Tags</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="tags">
											<span class="tag rounded-pill tag-primary">primary tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-secondary">secondary tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-success">success tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-danger">danger tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-light">light tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-dark">dark tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Light Tags</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="tags">
											<span class="tag rounded-pill tag-primary-transparent">primary tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-secondary-transparent">secondary tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-success-transparent">success tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-danger-transparent">danger tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-light-transparent">light tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-dark-transparent">dark tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">outline Tags</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="tags">
											<span class="tag rounded-pill tag-outline-primary">primary tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-outline-secondary">secondary tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-outline-success">success tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-outline-danger">danger tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-outline-light">light tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
											<span class="tag rounded-pill tag-outline-dark">dark tag<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a> </span>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tags Group</div>
								</div>
								<div class="card-body">
									<div class="tags-group">
										<label class="tag-item">
											<input type="checkbox" name="value" value="design" class="selectgroup-input" checked>
											<span class="tag rounded-pill">Design</span>
										</label>
										<label class="tag-item">
											<input type="checkbox" name="value" value="bootstrap" class="selectgroup-input" checked>
											<span class="tag rounded-pill">Bootstrap</span>
										</label>
										<label class="tag-item">
											<input type="checkbox" name="value" value="wireframe" class="selectgroup-input">
											<span class="tag rounded-pill">Wireframe</span>
										</label>
										<label class="tag-item">
											<input type="checkbox" name="value" value="php" class="selectgroup-input" checked>
											<span class="tag rounded-pill">PHP</span>
										</label>
										<label class="tag-item">
											<input type="checkbox" name="value" value="css" class="selectgroup-input">
											<span class="tag rounded-pill">CSS</span>
										</label>
										<label class="tag-item">
											<input type="checkbox" name="value" value="photoshop" class="selectgroup-input" checked>
											<span class="tag rounded-pill">Photoshop</span>
										</label>
										<label class="tag-item">
											<input type="checkbox" name="value" value="javascript" class="selectgroup-input" checked>
											<span class="tag rounded-pill">Javascript</span>
										</label>
										<label class="tag-item">
											<input type="checkbox" name="value" value="uiux" class="selectgroup-input">
											<span class="tag rounded-pill">UI/UX</span>
										</label>
										<label class="tag-item">
											<input type="checkbox" name="value" value="latestui" class="selectgroup-input">
											<span class="tag rounded-pill">Latest UI</span>
										</label>
										<label class="tag-item">
											<input type="checkbox" name="value" value="tools" class="selectgroup-input" checked>
											<span class="tag rounded-pill">Tools</span>
										</label>
										<label class="tag-item">
											<input type="checkbox" name="value" value="html" class="selectgroup-input" checked>
											<span class="tag rounded-pill">HTML</span>
										</label>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Input Tags</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="form-group mb-0">
											<div class="p-2 border radius-4">
												<input type="text" data-role="tagsinput" value="Javascript, UI/UX, Photoshop, Bootstrap" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Multiple Select Tags</div>
								</div>
								<div class="card-body">
									<select class="form-control select2" multiple="multiple">
										<option value="html" selected>
											HTML
										</option>
										<option value="css">
											CSS
										</option>
										<option value="bootstrap">
											Bootstrap
										</option>
										<option value="javascript" selected>
											Javascript
										</option>
										<option value="es6">
											ES6
										</option>
										<option value="jquery">
											JQuery
										</option>
										<option value="reactjs" selected>
											React js
										</option>
										<option value="nodejs">
											Node js
										</option>
										<option value="mongodb">
											Mongo DB
										</option>
									</select>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- Internal Input tags js-->
		<script src="{{asset('build/assets/plugins/inputtags/inputtags.js')}}"></script>

        <!-- Internal Tags js -->
		@vite('resources/assets/js/tags.js')

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')

@endsection
