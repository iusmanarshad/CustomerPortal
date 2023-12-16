@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FILE DETAILS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">File details</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
                    <div class="row row-sm">
                        <div class="col-xl-8 col-lg-12 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="card-body px-4 pt-4">
                                    <a href="{{url('blog-details')}}"><img src="{{asset('build/assets/img/photos/28.jpg')}}" alt="img" class="cover-image radius-4 w-100"></a>
									<div id="owl-demo2" class="owl-carousel owl-carousel-icons2 mg-t-30">
                                        <div class="item">
                                            <div class="card overflow-hidden mb-0">
												<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/photos/33.jpg')}}" alt="img"></a>
												<div class="card-footer bd-t-0 py-3">
													<div class="d-flex">
														<div>
															<h6 class="mb-0">221.jpg</h6>
														</div>
														<div class="ms-auto">
															<h6 class="tx-muted mb-0">120 KB</h6>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="item">
											<div class="card overflow-hidden  ">
												<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/photos/30.jpg')}}" alt="img"></a>
												<div class="card-footer bd-t-0 py-3">
													<div class="d-flex">
														<div>
															<h6 class="mb-0">221.jpg</h6>
														</div>
														<div class="ms-auto">
															<h6 class="tx-muted mb-0">120 KB</h6>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="item">
                                            <div class="card overflow-hidden  ">
												<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/photos/31.jpg')}}" alt="img"></a>
												<div class="card-footer bd-t-0 py-3">
													<div class="d-flex">
														<div>
															<h6 class="mb-0">221.jpg</h6>
														</div>
														<div class="ms-auto">
															<h6 class="tx-muted mb-0">120 KB</h6>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="item">
                                            <div class="card overflow-hidden  ">
												<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/photos/32.jpg')}}" alt="img"></a>
												<div class="card-footer bd-t-0 py-3">
													<div class="d-flex">
														<div>
															<h6 class="mb-0">221.jpg</h6>
														</div>
														<div class="ms-auto">
															<h6 class="tx-muted mb-0">120 KB</h6>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="item">
                                            <div class="card overflow-hidden  ">
												<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/photos/33.jpg')}}" alt="img"></a>
												<div class="card-footer bd-t-0 py-3">
													<div class="d-flex">
														<div>
															<h6 class="mb-0">221.jpg</h6>
														</div>
														<div class="ms-auto">
															<h6 class="tx-muted mb-0">120 KB</h6>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="item">
                                            <div class="card overflow-hidden  ">
												<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/photos/34.jpg')}}" alt="img"></a>
												<div class="card-footer bd-t-0 py-3">
													<div class="d-flex">
														<div>
															<h6 class="mb-0">221.jpg</h6>
														</div>
														<div class="ms-auto">
															<h6 class="tx-muted mb-0">120 KB</h6>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="item">
                                            <div class="card overflow-hidden  ">
												<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/photos/30.jpg')}}" alt="img"></a>
												<div class="card-footer bd-t-0 py-3">
													<div class="d-flex">
														<div>
															<h6 class="mb-0">221.jpg</h6>
														</div>
														<div class="ms-auto">
															<h6 class="tx-muted mb-0">120 KB</h6>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="item">
                                            <div class="card overflow-hidden  ">
												<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/photos/32.jpg')}}" alt="img"></a>
												<div class="card-footer bd-t-0 py-3">
													<div class="d-flex">
														<div>
															<h6 class="mb-0">221.jpg</h6>
														</div>
														<div class="ms-auto">
															<h6 class="tx-muted mb-0">120 KB</h6>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="item">
                                            <div class="card overflow-hidden  ">
												<a href="{{url('file-details')}}"><img src="{{asset('build/assets/img/photos/34.jpg')}}" alt="img"></a>
												<div class="card-footer bd-t-0 py-3">
													<div class="d-flex">
														<div>
															<h6 class="mb-0">221.jpg</h6>
														</div>
														<div class="ms-auto">
															<h6 class="tx-muted mb-0">120 KB</h6>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
								<div class="card-header">
									<div class="card-title">
										File details :
									</div>
								</div>
                                <div class="card-body">
                                    <div class="row">
										<div class="col-xl-12">
											<div class="table-responsive border br-5">
												<table class="table mb-0 border-0">
													<tbody>
														<tr>
															<th class="bd-e" scope="row" class="border-top-0">Name</th>
															<td class="border-top-0">cover.jpg</td>
														</tr>
														<tr>
															<th class="bd-e" scope="row">Size</th>
															<td>20.5 Mb</td>
														</tr>
														<tr>
															<th class="bd-e" scope="row">Date</th>
															<td>04-03-2022</td>
														</tr>
														<tr>
															<th class="bd-e" scope="row">Measurements</th>
															<td>1036 &times; 414</td>
														</tr>
														<tr>
															<th class="bd-e" scope="row">Format</th>
															<td>.jpg</td>
														</tr>
														<tr>
															<th class="bd-e" scope="row">Loaction</th>
															<td>storage/My Images/cover.jpg</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
                                </div>
                            </div>
							<div class="card">
								<div class="card-header">
									<div class="card-title">
										Recently Added
									</div>
								</div>
                                <div class="card-body">
                                    <div class="row row-sm file-detailimg">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="card">
                                                <img src="{{asset('build/assets/img/media/1.jpg')}}" alt="img" class="br-5">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="card">
                                                <img src="{{asset('build/assets/img/media/2.jpg')}}" alt="img" class="br-5">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="card">
                                                <img src="{{asset('build/assets/img/media/3.jpg')}}" alt="img" class="br-5">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="card">
                                                <img src="{{asset('build/assets/img/media/4.jpg')}}" alt="img" class="br-5">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="card">
                                                <img src="{{asset('build/assets/img/media/5.jpg')}}" alt="img" class="br-5">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="card">
                                                <img src="{{asset('build/assets/img/media/6.jpg')}}" alt="img" class="br-5">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="card">
                                                <img src="{{asset('build/assets/img/media/7.jpg')}}" alt="img" class="br-5">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="card">
                                                <img src="{{asset('build/assets/img/media/8.jpg')}}" alt="img" class="br-5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                	<!-- End Row -->

@endsection

@section('scripts')

		<!-- Ionicons js -->
		<script src="{{asset('build/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>

		<!-- Internal Owl Carousel js-->
		<script src="{{asset('build/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
		@vite('resources/assets/js/owl-carousel.js')

@endsection
