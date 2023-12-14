@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<span class="main-content-title mg-b-0 mg-b-lg-1">TABS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tabs</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row opened -->
					<div class="row">

						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Style Tabs</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="panel tabs-style1">
											<div class="panel-head">
												<ul class="nav nav-tabs d-sm-flex d-block">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#style1tab1">Home</a></li>
													<li class="nav-item ms-sm-2 ms-0"><a class="nav-link" data-bs-toggle="tab" href="#style1tab2">About</a></li>
													<li class="nav-item ms-sm-2 ms-0"><a class="nav-link" data-bs-toggle="tab" href="#style1tab3">Contact</a></li>
												</ul>
											</div>
											<div class="panel-body">
												<div class="tab-content">
													<div class="tab-pane active" id="style1tab1">
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="style1tab2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
													<div class="tab-pane" id="style1tab3">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tabs Style-2</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="panel tabs-style2">
											<div class="panel-head">
												<ul class="nav nav-tabs d-sm-flex d-block">
													<li class="nav-item mb-2 mb-sm-0"><a class="nav-link active" data-bs-toggle="tab" href="#style2tab1">Home</a></li>
													<li class="nav-item ms-sm-2 ms-0 mb-2 mb-sm-0"><a class="nav-link" data-bs-toggle="tab" href="#style2tab2">About</a></li>
													<li class="nav-item ms-sm-2 ms-0"><a class="nav-link" data-bs-toggle="tab" href="#style2tab3">Contact</a></li>
												</ul>
											</div>
											<div class="panel-body">
												<div class="tab-content">
													<div class="tab-pane active" id="style2tab1">
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="style2tab2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
													<div class="tab-pane" id="style2tab3">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tabs Style-3</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="panel tabs-style3 d-sm-flex d-block">
											<div class="panel-head">
												<ul class="nav nav-tabs mb-sm-0 mb-2">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#style3tab1">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#style3tab2">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#style3tab3">Contact</a></li>
												</ul>
											</div>
											<div class="panel-body ms-sm-2 ms-0">
												<div class="tab-content">
													<div class="tab-pane active" id="style3tab1">
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="style3tab2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
													<div class="tab-pane" id="style3tab3">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tabs Style-4</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="panel tabs-style4 d-sm-flex d-block">
											<div class="panel-head">
												<ul class="nav nav-tabs mb-sm-0 mb-2">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#style4tab1">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#style4tab2">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#style4tab3">Contact</a></li>
												</ul>
											</div>
											<div class="panel-body me-sm-2 me-0">
												<div class="tab-content">
													<div class="tab-pane active" id="style4tab1">
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="style4tab2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
													<div class="tab-pane" id="style4tab3">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tabs Style-5</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="panel tabs-style5">
											<div class="panel-head">
												<ul class="nav nav-tabs d-sm-flex d-block">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#style5tab1">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#style5tab2">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#style5tab3">Contact</a></li>
												</ul>
											</div>
											<div class="panel-body">
												<div class="tab-content">
													<div class="tab-pane active" id="style5tab1">
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="style5tab2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
													<div class="tab-pane" id="style5tab3">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tabs Style-6</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="panel tabs-style6">
											<div class="panel-head">
												<ul class="nav nav-tabs d-sm-flex d-block">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#style6tab1">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#style6tab2">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#style6tab3">Contact</a></li>
												</ul>
											</div>
											<div class="panel-body">
												<div class="tab-content">
													<div class="tab-pane active" id="style6tab1">
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="style6tab2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
													<div class="tab-pane" id="style6tab3">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tabs Style-7</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="panel tabs-style7">
											<div class="panel-head">
												<ul class="nav nav-tabs d-sm-flex d-block">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#style7tab1">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#style7tab2">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#style7tab3">Contact</a></li>
												</ul>
											</div>
											<div class="panel-body">
												<div class="tab-content">
													<div class="tab-pane active" id="style7tab1">
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="style7tab2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
													<div class="tab-pane" id="style7tab3">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tabs Style-7 With Effect</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="panel tabs-style7 scaleX">
											<div class="panel-head">
												<ul class="nav nav-tabs d-sm-flex d-block">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#scaleXtab1">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#scaleXtab2">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#scaleXtab3">Contact</a></li>
												</ul>
											</div>
											<div class="panel-body">
												<div class="tab-content">
													<div class="tab-pane active" id="scaleXtab1">
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="scaleXtab2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
													<div class="tab-pane" id="scaleXtab3">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- Ionicons js -->
		<script src="{{asset('build/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Input tags js-->
		<script src="{{asset('build/assets/plugins/inputtags/inputtags.js')}}"></script>

		<!--- Tabs JS-->
		<script src="{{asset('build/assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
		@vite('resources/assets/js/tabs.js')

@endsection
