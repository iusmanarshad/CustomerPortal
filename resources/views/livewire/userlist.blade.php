@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content mt-2">
							<a class="btn ripple btn-primary" data-bs-target="#Vertically" data-bs-toggle="modal" href=""><i class="fe fe-plus"></i> Add New User</a>
						</div>
						<div class="btn-list mt-2">
							<button id="userlist-1" class="btn btn-primary data-table-btn me-2">Delete User</button>
							<button type="button" class="btn btn-secondary">
								<i class="fe fe-download me-1"></i> Download User Data
							</button>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive  deleted-table">
										<table id="user-datatable" class="table table-bordered text-nowrap border-bottom Userlist">
											<thead>
												<tr>
													<th class="wd-2">
														Photo
													</th>
													<th>Name</th>
													<th>Role</th>
													<th>Last Active</th>
													<th>Country</th>
													<th>Verification</th>
													<th>Joined Date</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/9.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Clark</p>
														<p class="tx-13 tx-muted mb-0">Clark.b773@gmail.com</p>
													</td>
													<td>
														<span class="tx-muted tx-13">User</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">2 days ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Italy</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-success-transparent tx-success tx-11">Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">16-04-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Sarah</p>
														<p class="tx-13 tx-muted mb-0">Sarah.B245@gmail.com</p>
													</td>
													<td>
														<span class="tx-muted tx-13">Admin</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">3 days ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Saudi</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-secondary-transparent tx-secondary tx-11">Not Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">11-11-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar avatar bg-secondary text-white rounded-circle">
															CX
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">James</p>
														<p class="tx-13 tx-muted mb-0">james.j@gmail.com</p>
													</td>
													<td>
														<span class="tx-muted tx-13">User</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">2 days ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Chicago</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-success-transparent tx-success tx-11">Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">27-8-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/10.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">David</p>
														<p class="tx-13 tx-muted mb-0">david1558@gmail.in</p>
													</td>
													<td>
														<span class="tx-muted tx-13">Agent</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">1 day ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Austria</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-secondary-transparent tx-secondary tx-11">Not Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">31-4-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/3.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Mary</p>
														<p class="tx-13 tx-muted mb-0">mary009@gmail.com</p>
													</td>
													<td>
														<span class="tx-muted tx-13">Admin</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">1 hr ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Paris</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-success-transparent tx-success tx-11">Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">21-4-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/11.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Charles</p>
														<p class="tx-13 tx-muted mb-0">charles.charlie@gmail.com</p>
													</td>
													<td>
														<span class="tx-muted tx-13">User</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">22 hrs ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Los Vegas</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-success-transparent tx-success tx-11">Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">09-11-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Richard</p>
														<p class="tx-13 tx-muted mb-0">richard1885@gmail.com</p>
													</td>
													<td>
														<span class="tx-muted tx-13">Manager</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">1 hr ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Japan</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-secondary-transparent tx-secondary tx-11">Not Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">13-04-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Linda</p>
														<p class="tx-12 tx-muted mb-0">linda.123@gmail.com</p>
													</td>
													<td>
														<span class="tx-muted tx-13">Admin</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">10 min ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Russia</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-success-transparent tx-success tx-11">Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">09-07-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar avatar bg-warning text-white rounded-circle">
															E
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Emily</p>
														<p class="tx-13 tx-muted mb-0">emily.j@hotmail.in</p>
													</td>
													<td>
														<span class="tx-muted tx-13">User</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">1 day ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">France</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-success-transparent tx-success tx-11">Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">16-11-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/14.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Tony</p>
														<p class="tx-13 tx-muted mb-0">tonay568@gmail.org</p>
													</td>
													<td>
														<span class="tx-muted tx-13">Agent</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">10 min ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Canada</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-success-transparent tx-success tx-11">Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">13-12-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/13.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Stanley</p>
														<p class="tx-13 tx-muted mb-0">Stanley.l@hotmail.com</p>
													</td>
													<td>
														<span class="tx-muted tx-13">Admin</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">5 min ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Spain</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-secondary-transparent tx-secondary tx-11">Not Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">07-06-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/5.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Sylvia</p>
														<p class="tx-13 tx-muted mb-0">sylvia.N@gmail.com</p>
													</td>
													<td>
														<span class="tx-muted tx-13">User</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">2 days ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Italy</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-success-transparent tx-success tx-11">Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">31-12-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/15.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Melvin</p>
														<p class="tx-13 tx-muted mb-0">melvin@gmail.com</p>
													</td>
													<td>
														<span class="tx-muted tx-13">Admin</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">1 hr ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">Mexico</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-success-transparent tx-success tx-11">Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">14-09-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="avatar rounded-circle">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}">
														</div>
													</td>
													<td>
														<p class="tx-14 font-weight-semibold text-dark mb-1">Josephine</p>
														<p class="tx-13 tx-muted mb-0">josephine@hotmail.in</p>
													</td>
													<td>
														<span class="tx-muted tx-13">User</span>
													</td>
													<td>
														<span class="badge bg-light tx-muted tx-13">1 day ago</span>
													</td>
													<td>
														<span class="tx-muted tx-13">USA</span>
													</td>
													<td>
														<span class="badge font-weight-semibold bg-success-transparent tx-success tx-11">Verified</span>
													</td>
													<td>
														<span class="tx-muted tx-13">06-08-2021</span>
													</td>
													<td>
														<a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="Edit">
															<i class="las la-pen"></i>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

@endsection
					
@section('modals')

                    <!-- New User Modal-->
                    <div class="modal fade" id="Vertically">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Add User</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="p-4">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="inputName1" placeholder="Role">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                            <div class="form-group mb-0 justify-content-end">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                                        <label for="checkbox-2" class="custom-control-label mt-1 text-dark">New User?</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="button">Add</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /New User Modal-->

@endsection

@section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Data tables -->
		<script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!--Internal  Userlist js -->
		@vite('resources/assets/js/user-list.js')

@endsection
