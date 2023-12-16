@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TABLES</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Basic tables</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">SIMPLE TABLE</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Kevin Powell</td>
													<td>Front End Developer</td>
													<td>$350,570</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>De Kariyo</td>
													<td>Account Manager</td>
													<td>$430,640</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julia Anni</td>
													<td>Senior Developer</td>
													<td>$555,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Kelly Diamond</td>
													<td>Accountant</td>
													<td>$934,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha Taylor</td>
													<td>System Designer</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">STRIPED ROWS</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Kevin Powell</td>
													<td>Front End Developer</td>
													<td>$350,570</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>De Kariyo</td>
													<td>Account Manager</td>
													<td>$430,640</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julia Anni</td>
													<td>Senior Developer</td>
													<td>$555,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Kelly Diamond</td>
													<td>Accountant</td>
													<td>$934,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha Taylor</td>
													<td>System Designer</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bordered Table</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Kevin Powell</td>
													<td>Front End Developer</td>
													<td>$350,570</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>De Kariyo</td>
													<td>Account Manager</td>
													<td>$430,640</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julia Anni</td>
													<td>Senior Developer</td>
													<td>$555,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Kelly Diamond</td>
													<td>Accountant</td>
													<td>$934,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha Taylor</td>
													<td>System Designer</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Hoverable Rows Table</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-hover mb-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Kevin Powell</td>
													<td>Front End Developer</td>
													<td>$350,570</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>De Kariyo</td>
													<td>Account Manager</td>
													<td>$430,640</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julia Anni</td>
													<td>Senior Developer</td>
													<td>$555,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Kelly Diamond</td>
													<td>Accountant</td>
													<td>$934,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha Taylor</td>
													<td>System Designer</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Primary Table</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Nowa Primary Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-primary mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Secondary Table</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Nowa secondary Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-secondary mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Info Table</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Nowa info Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-info mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Success Table</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Nowa success Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-success mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Danger Table</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Nowa danger Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-danger mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Warning Table</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Nowa warning Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-warning mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
					</div>
					<!-- /row -->

@endsection

@section('scripts')



@endsection
