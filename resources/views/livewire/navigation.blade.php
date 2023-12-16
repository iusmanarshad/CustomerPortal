@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">NAVIGATION</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Navigation</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Card Header Navigation</div>
								</div>
								<div class="card-header border-bottom">
									<ul class="nav nav-pills card-header-pills mb-3">
										<li class="nav-item">
											<a class="nav-link active" href="#">Active</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Link</a>
										</li>
										<li class="nav-item">
											<a class="nav-link disabled" href="#" tabindex="-1">Disabled</a>
										</li>
									</ul>
								</div>
								<div class="card-body text-center">
									<h5>Special title treatment</h5>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Navigation</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="nav nav-pills nav-header-pills">
											<li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Home</a></li>
											<li class="nav-item"><a class="nav-link" href="javascript:void(0);">About</a></li>
											<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Pages</a></li>
											<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Custom</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Vertical Navigation</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="nav nav-pills main-nav-column">
											<li class="nav-item"><a class="nav-link thumb active" href="javascript:void(0);">Home</a></li>
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);">About</a></li>
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);">Pages</a></li>
											<li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);">Custom</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">ICON Navigation</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="nav nav-pills">
											<li class="nav-item">
												<a href="javascript:void(0)" class="nav-link thumb1 border active m-1">
													<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
												</a>
											</li>
											<li class="nav-item">
												<a href="javascript:void(0)" class="nav-link thumb1 border m-1">
													<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
												</a>
											</li>
											<li class="nav-item">
												<a href="javascript:void(0)" class="nav-link thumb1 border m-1">
													<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
												</a>
											</li>
											<li class="nav-item">
												<a href="javascript:void(0)" class="nav-link thumb1 border m-1">
													<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
												</a>
											</li>
											<li class="nav-item">
												<a href="javascript:void(0)" class="nav-link thumb1 border m-1">
													<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">ICON NAVBAR</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<ul class="nav nav-pills">
											<li class="nav-item">
												<a class="nav-link thumb2 border active text-center m-2" href="javascript:void(0)">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link thumb2 border m-2" href="javascript:void(0)">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link thumb2 border m-2" href="javascript:void(0)">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link thumb2 border m-2" href="javascript:void(0)">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link thumb2 border m-2" href="javascript:void(0)">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image fs-20"></i> </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Horizontal Alignment</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="br-5 border p-3 mb-3">
											<ul class="nav main-nav flex-column flex-md-row justify-content-center">
												<li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Home</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">About</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Pages</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Custom</a></li>
											</ul>
										</div>
										<div class="br-5 border p-3 mb-3">
											<ul class="nav main-nav flex-column flex-md-row justify-content-end">
												<li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Home</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">About</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Pages</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Custom</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Colored Nav Variations</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="nav-primary br-5 p-2 mb-3">
											<ul class="nav main-nav flex-column flex-md-row">
												<li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Home</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">About</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Pages</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Custom</a></li>
											</ul>
										</div>
										<div class="nav-secondary br-5 p-2 mb-3">
											<ul class="nav main-nav flex-column flex-md-row">
												<li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Home</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">About</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Pages</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Custom</a></li>
											</ul>
										</div>
										<div class="nav-success br-5 p-2 mb-3">
											<ul class="nav main-nav flex-column flex-md-row">
												<li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Home</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">About</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Pages</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Custom</a></li>
											</ul>
										</div>
										<div class="nav-danger br-5 p-2 mb-3">
											<ul class="nav main-nav flex-column flex-md-row">
												<li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Home</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">About</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Pages</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Custom</a></li>
											</ul>
										</div>
										<div class="nav-light br-5 p-2 mb-3">
											<ul class="nav main-nav flex-column flex-md-row">
												<li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Home</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">About</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Pages</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Custom</a></li>
											</ul>
										</div>
										<div class="nav-dark br-5 p-2">
											<ul class="nav main-nav flex-column flex-md-row">
												<li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Home</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">About</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Pages</a></li>
												<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Custom</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Simple Tab Navigation</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="border radius-3 overflow-hidden">
											<div class="bg-gray-100">
												<ul class="nav nav-tabs">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tabCont1">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont2">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont3">Contact</a></li>
												</ul>
											</div>
											<div class="tab-content p-3">
												<div class="tab-pane active" id="tabCont1">
													Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
												</div>
												<div class="tab-pane" id="tabCont2">
													At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
												</div>
												<div class="tab-pane" id="tabCont3">
													Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Colored Tab Navigation</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="border border-primary radius-3 overflow-hidden">
											<div class="primary-nav-tab">
												<ul class="nav nav-tabs">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tabCont4">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont5">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont6">Contact</a></li>
												</ul>
											</div>
											<div class="card-body tab-content">
												<div class="tab-pane active show" id="tabCont4">
													Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
												</div>
												<div class="tab-pane" id="tabCont5">
													At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
												</div>
												<div class="tab-pane" id="tabCont6">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
												</div>
											</div>
										</div>
										<div class="border border-secondary radius-3 overflow-hidden mt-3">
											<div class="secondary-nav-tab">
												<ul class="nav nav-tabs">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tabCont7">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont8">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont9">Contact</a></li>
												</ul>
											</div>
											<div class="card-body tab-content">
												<div class="tab-pane active show" id="tabCont7">
													Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
												</div>
												<div class="tab-pane" id="tabCont8">
													At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
												</div>
												<div class="tab-pane" id="tabCont9">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
												</div>
											</div>
										</div>
										<div class="border border-success radius-3 overflow-hidden mt-3">
											<div class="success-nav-tab">
												<ul class="nav nav-tabs">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tabCont10">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont11">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont12">Contact</a></li>
												</ul>
											</div>
											<div class="card-body tab-content">
												<div class="tab-pane active show" id="tabCont10">
													Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
												</div>
												<div class="tab-pane" id="tabCont11">
													At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
												</div>
												<div class="tab-pane" id="tabCont12">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
												</div>
											</div>
										</div>
										<div class="border border-danger radius-3 overflow-hidden mt-3">
											<div class="danger-nav-tab">
												<ul class="nav nav-tabs">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tabCont13">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont14">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont15">Contact</a></li>
												</ul>
											</div>
											<div class="card-body tab-content">
												<div class="tab-pane active show" id="tabCont13">
													Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
												</div>
												<div class="tab-pane" id="tabCont14">
													At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
												</div>
												<div class="tab-pane" id="tabCont15">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
												</div>
											</div>
										</div>
										<div class="border border-light radius-3 overflow-hidden mt-3">
											<div class="light-nav-tab">
												<ul class="nav nav-tabs">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tabCont16">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont17">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont18">Contact</a></li>
												</ul>
											</div>
											<div class="card-body tab-content">
												<div class="tab-pane active show" id="tabCont16">
													Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
												</div>
												<div class="tab-pane" id="tabCont17">
													At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
												</div>
												<div class="tab-pane" id="tabCont18">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
												</div>
											</div>
										</div>
										<div class="border border-dark radius-3 overflow-hidden mt-3">
											<div class="dark-nav-tab">
												<ul class="nav nav-tabs">
													<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tabCont19">Home</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont20">About</a></li>
													<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabCont21">Contact</a></li>
												</ul>
											</div>
											<div class="card-body tab-content">
												<div class="tab-pane active show" id="tabCont19">
													Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
												</div>
												<div class="tab-pane" id="tabCont20">
													At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
												</div>
												<div class="tab-pane" id="tabCont21">
														Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
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



@endsection
