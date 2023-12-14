@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">EDITABLE TABLES</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Editable tables</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Editable DataTable</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered text-nowrap border-bottom" id="basicEditable">
											<thead>
												<tr>
													<th class="wd-20p">Name</th>
													<th class="wd-25p">Position</th>
													<th class="wd-20p">Office</th>
													<th class="wd-15p">Age</th>
													<th class="wd-20p">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Jackson</td>
													<td>System Designer</td>
													<td>Sed at</td>
													<td>41</td>
													<td>$520,800</td>
												</tr>
												<tr>
													<td>Vadett Summers</td>
													<td>UI Developer</td>
													<td>Japan</td>
													<td>28</td>
													<td>$270,750</td>
												</tr>
												<tr>
													<td>Lisbon Mox</td>
													<td>Junior Lecturer</td>
													<td>San Deigo</td>
													<td>45</td>
													<td>$286,000</td>
												</tr>
												<tr>
													<td>Shahid Lorey</td>
													<td>System Manager</td>
													<td>Lorem Consetetur</td>
													<td>25</td>
													<td>$83,000</td>
												</tr>
												<tr>
													<td>Jennifer Zal</td>
													<td>Ethical Hacker</td>
													<td>Denver</td>
													<td>25</td>
													<td>$153,000</td>
												</tr>
												<tr>
													<td>Cha Nolan</td>
													<td>Android Developer</td>
													<td>Bap Atla</td>
													<td>23</td>
													<td>$160,499</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Adding Row In Editable DataTables</div>
								</div>
								<div class="card-body">
									<div class="table-responsive ">
										<button id="addRowButton" class="btn btn-primary mb-3"> Add New Row</button>
										<table class="table table-bordered text-nowrap border-bottom" id="addRowDataTable">
											<thead>
												<tr>
													<th class="wd-20p">Name</th>
													<th class="wd-25p">Position</th>
													<th class="wd-20p">Office</th>
													<th class="wd-15p">Age</th>
													<th class="wd-20p">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Jackson</td>
													<td>System Designer</td>
													<td>Sed at</td>
													<td>41</td>
													<td>$520,800</td>
												</tr>
												<tr>
													<td>Vadett Summers</td>
													<td>UI Developer</td>
													<td>Japan</td>
													<td>28</td>
													<td>$270,750</td>
												</tr>
												<tr>
													<td>Lisbon Mox</td>
													<td>Junior Lecturer</td>
													<td>San Deigo</td>
													<td>45</td>
													<td>$286,000</td>
												</tr>
												<tr>
													<td>Shahid Lorey</td>
													<td>System Manager</td>
													<td>Lorem Consetetur</td>
													<td>25</td>
													<td>$83,000</td>
												</tr>
												<tr>
													<td>Jennifer Zal</td>
													<td>Ethical Hacker</td>
													<td>Denver</td>
													<td>25</td>
													<td>$153,000</td>
												</tr>
												<tr>
													<td>Cha Nolan</td>
													<td>Android Developer</td>
													<td>Bap Atla</td>
													<td>23</td>
													<td>$160,499</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Custom Editable Tables</div>
								</div>
								<div class="card-body">
									<div class="table-responsive ">
										<table class="table table-bordered text-nowrap border-bottom" id="customEditableTable">
											<thead>
												<tr>
													<th class="wd-20p">Name</th>
													<th class="wd-25p">Position</th>
													<th class="wd-20p">Office</th>
													<th class="wd-15p">Age</th>
													<th class="wd-20p">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Jackson</td>
													<td>System Designer</td>
													<td>Sed at</td>
													<td>41</td>
													<td>$520,800</td>
												</tr>
												<tr>
													<td>Vadett Summers</td>
													<td>UI Developer</td>
													<td>Japan</td>
													<td>28</td>
													<td>$270,750</td>
												</tr>
												<tr>
													<td>Lisbon Mox</td>
													<td>Junior Lecturer</td>
													<td>San Deigo</td>
													<td>45</td>
													<td>$286,000</td>
												</tr>
												<tr>
													<td>Shahid Lorey</td>
													<td>System Manager</td>
													<td>Lorem Consetetur</td>
													<td>25</td>
													<td>$83,000</td>
												</tr>
												<tr>
													<td>Jennifer Zal</td>
													<td>Ethical Hacker</td>
													<td>Denver</td>
													<td>25</td>
													<td>$153,000</td>
												</tr>
												<tr>
													<td>Cha Nolan</td>
													<td>Android Developer</td>
													<td>Bap Atla</td>
													<td>23</td>
													<td>$160,499</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

@endsection

@section('scripts')

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>

		<!-- Editable Data tables -->
		<script src="{{asset('build/assets/plugins/edit-table/bst-edittable.js')}}"></script>
        <script src="{{asset('build/assets/plugins/edit-table/edit-table.js')}}"></script>
        
@endsection
