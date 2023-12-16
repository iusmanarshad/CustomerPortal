@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SEARCH</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Search</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="card">
								<div class="card-body p-0">
									<div class="p-sm-4 p-3 border-bottom">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="Ipsum" placeholder="Searching.....">
											<span class="input-group-append">
												<button class="btn btn-primary" type="button">Search</button>
											</span>
										</div>
										<ul class="nav main-nav search-nav flex-column flex-md-row">
											<li class="nav-item mb-md-0 mb-3"><a class="nav-link active" href="javascript:void(0);"><i class="fe fe-search me-1"></i> All</a></li>
											<li class="nav-item mb-md-0 mb-3"><a class="nav-link" href="javascript:void(0);"><i class="fe fe-file-text me-1"></i> News</a></li>
											<li class="nav-item mb-md-0 mb-3"><a class="nav-link" href="javascript:void(0);"><i class="fe fe-image me-1"></i> Images</a></li>
											<li class="nav-item mb-md-0 mb-3"><a class="nav-link" href="javascript:void(0);"><i class="fe fe-map-pin me-1"></i> Maps</a></li>
											<li class="nav-item mb-md-0 mb-3"><a class="nav-link" href="javascript:void(0);"><i class="fe fe-book me-1"></i> Books</a></li>
											<li class="nav-item mb-md-0 mb-3"><a class="nav-link" href="javascript:void(0);"><i class="fe fe-more-vertical me-1"></i> more</a></li>
										</ul>
									</div>
									<div class="px-sm-4 pt-sm-4 px-3 pt-3 pb-0">
										<p class="tx-muted mb-0">About 1,26,00,00,000 results (0.61 seconds) </p>
									</div>
									<div class="result-container-main p-sm-4 p-3">
										<div class="row">
											<div class="col-xl-9">
												<div class="results-all">
													<div class="main-result-container">
														<div class="main-result">
															<div class="d-flex align-items-center mb-1">
																<a href="javascript:void(0)" class="me-3 tx-14">http://www.samplewebsite.com</a>
																<a href="javascript:void(0)" role="button" class="tx-inverse" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fe fe-more-vertical"></i>
																</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
																</ul>
															</div>
															<a href="javascript:void(0);" class="text-primary tx-capitalize tx-18 mb-1">Eirmod Aliquyamt: Dolor Accusam Sit</a>
															<p class="mb-0"><span class="font-weight-semibold">Erat ut labore dolor</span> invidunt eirmod nonumy elitr invidunt clita. Et labore lorem ipsum erat est et, labore dolore sed.</p>
															<div class="table-responsive sub-result mg-sm-s--8-f ms-0 mt-2">
																<table class="table d-sm-table d-block">
																	<tbody>
																		<tr class="d-sm-table-row d-block">
																			<td class="d-sm-table-cell d-block">
																				<a href="javascript:void(0);" class="tx-primary tx-capitalize tx-18 mb-1">Dolores ipsum</a>
																				<p class="mb-0 sub-result-text">Duo sanctus gubergren dolor clita sed duo kasd et,.</p>
																			</td>
																			<td class="d-sm-table-cell d-block">
																				<a href="javascript:void(0);" class="tx-primary tx-capitalize tx-18 mb-1">Dolores ipsum</a>
																				<p class="mb-0 sub-result-text">Duo sanctus gubergren dolor clita sed duo kasd et,.</p>
																			</td>
																		</tr>
																		<tr class="d-sm-table-row d-block">
																			<td class="d-sm-table-cell d-block">
																				<a href="javascript:void(0);" class="tx-primary tx-capitalize tx-18 mb-1">Dolores ipsum</a>
																				<p class="mb-0 sub-result-text">Duo sanctus gubergren dolor clita sed duo kasd et,.</p>
																			</td>
																			<td class="d-sm-table-cell d-block">
																				<a href="javascript:void(0);" class="tx-primary tx-capitalize tx-18 mb-1">Dolores ipsum</a>
																				<p class="mb-0 sub-result-text">Duo sanctus gubergren dolor clita sed duo kasd et,.</p>
																			</td>
																		</tr>
																		<tr class="d-sm-table-row d-block">
																			<td colspan="2" class="py-0 d-sm-table-cell d-block">
																				<a href="javascript:void(0)" class="tx-primary">More from spruko.com &#x226B; </a>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<div class="main-result-container">
														<div class="main-result">
															<div class="d-flex align-items-center mb-1">
																<a href="javascript:void(0)" class="me-3 tx-14">http://www.samplewebsite.com</a>
																<a href="javascript:void(0)" role="button" class="tx-inverse" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fe fe-more-vertical"></i>
																</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
																</ul>
															</div>
															<a href="javascript:void(0);" class="text-primary tx-capitalize tx-18 mb-1">Eirmod Aliquyamt: Dolor Accusam Sit</a>
															<p class="mb-0"><span class="font-weight-semibold">Erat ut labore dolor</span> invidunt eirmod nonumy elitr invidunt clita. Et labore lorem ipsum erat est et, labore dolore sed.</p>
															<div class="sub-result mg-sm-s--15-f ms-0 mt-3">
																<div class="d-flex align-items-center mb-1">
																	<a href="javascript:void(0)" class="me-3 tx-14">http://www.samplewebsite.com</a>
																	<a href="javascript:void(0)" role="button" class="tx-inverse" data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="fe fe-more-vertical"></i>
																	</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
																		<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
																		<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
																		<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
																	</ul>
																</div>
																<a href="javascript:void(0);" class="text-primary tx-capitalize tx-18 mb-1">Eirmod Aliquyamt: Dolor Accusam Sit</a>
																<p class="mb-0"><span class="font-weight-semibold">Erat ut labore dolor</span> invidunt eirmod nonumy elitr invidunt clita. Et labore lorem ipsum erat est et, labore dolore sed.</p>
															</div>
														</div>
													</div>
													<div class="main-result-container">
														<div class="main-result">
															<div class="d-flex align-items-center pb-2 border-bottom">
																<span class="me-3 tx-16 mb-0 d-inline-flex align-items-center"><i class="fe fe-image me-2"></i> Related Images</span>
																<a href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fe fe-more-vertical"></i>
																</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
																</ul>
															</div>
															<div class="my-3">
																<div class="tags-group">
																	<label class="tag-item">
																		<input type="checkbox" name="value" value="design" class="selectgroup-input" checked>
																		<span class="tag rounded-pill">Design</span>
																	</label>
																	<label class="tag-item">
																		<input type="checkbox" name="value" value="bootstrap" class="selectgroup-input">
																		<span class="tag rounded-pill">Bootstrap</span>
																	</label>
																	<label class="tag-item">
																		<input type="checkbox" name="value" value="wireframe" class="selectgroup-input">
																		<span class="tag rounded-pill">Wireframe</span>
																	</label>
																	<label class="tag-item">
																		<input type="checkbox" name="value" value="php" class="selectgroup-input">
																		<span class="tag rounded-pill">PHP</span>
																	</label>
																	<label class="tag-item">
																		<input type="checkbox" name="value" value="css" class="selectgroup-input">
																		<span class="tag rounded-pill">CSS</span>
																	</label>
																	<label class="tag-item">
																		<input type="checkbox" name="value" value="javascript" class="selectgroup-input">
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
																</div>
																<div class="mt-2">
																	<a href="javascript:void(0);"><img src="{{asset('build/assets/img/media/5.jpg')}}" alt="img" class="wd-20p br-5"></a>
																	<a href="javascript:void(0);"><img src="{{asset('build/assets/img/media/4.jpg')}}" alt="img" class="wd-20p br-5"></a>
																	<a href="javascript:void(0);"><img src="{{asset('build/assets/img/media/10.jpg')}}" alt="img" class="wd-20p br-5"></a>
																	<a href="javascript:void(0);"><img src="{{asset('build/assets/img/media/3.jpg')}}" alt="img" class="wd-20p br-5"></a>
																</div>
															</div>
															<a href="javascript:void(0)" class="tx-primary">More images &#x226B; </a>
														</div>
													</div>
													<div class="main-result-container">
														<div class="main-result">
															<div class="d-flex align-items-center mb-1">
																<a href="javascript:void(0)" class="me-3 tx-14">http://www.samplewebsite.com</a>
																<a href="javascript:void(0)" role="button" class="tx-inverse" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fe fe-more-vertical"></i>
																</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
																</ul>
															</div>
															<a href="javascript:void(0);" class="text-primary tx-capitalize tx-18 mb-1">Eirmod Aliquyamt: Dolor Accusam Sit</a>
															<p class="mb-0"><span class="font-weight-semibold">Erat ut labore dolor</span> invidunt eirmod nonumy elitr invidunt clita. Et labore lorem ipsum erat est et, labore dolore sed.</p>
														</div>
													</div>
													<div class="main-result-container">
														<div class="main-result">
															<div class="d-flex align-items-center mb-1">
																<a href="javascript:void(0)" class="me-3 tx-14">http://www.samplewebsite.com</a>
																<a href="javascript:void(0)" role="button" class="tx-inverse" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fe fe-more-vertical"></i>
																</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
																</ul>
															</div>
															<a href="javascript:void(0);" class="text-primary tx-capitalize tx-18 mb-1">Eirmod Aliquyamt: Dolor Accusam Sit</a>
															<p class="mb-0"><span class="font-weight-semibold">Erat ut labore dolor</span> invidunt eirmod nonumy elitr invidunt clita. Et labore lorem ipsum erat est et, labore dolore sed.</p>
														</div>
													</div>
													<div class="main-result-container">
														<div class="main-result">
															<div class="d-flex align-items-center mb-1">
																<a href="javascript:void(0)" class="me-3 tx-14">http://www.samplewebsite.com</a>
																<a href="javascript:void(0)" role="button" class="tx-inverse" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fe fe-more-vertical"></i>
																</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
																	<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
																</ul>
															</div>
															<a href="javascript:void(0);" class="text-primary tx-capitalize tx-18 mb-1">Eirmod Aliquyamt: Dolor Accusam Sit</a>
															<p class="mb-0"><span class="font-weight-semibold">Erat ut labore dolor</span> invidunt eirmod nonumy elitr invidunt clita. Et labore lorem ipsum erat est et, labore dolore sed.</p>
														</div>
													</div>
												</div>
											</div><!-- col-end -->

											<div class="col-xl-3">
												<div class="d-xl-block d-none" id="scroll-stickybar">
													<div class="border radius-4">
														<div class="p-4">
															<h6 class="mb-0">Filter results:</h6>
															<div class="mt-3">
																<ul class="list-group border-0">
																	<li class="list-group-item p-0 mb-2 border-0">
																		<label class="d-flex align-items-center mb-0">
																			<span class="check-box mb-0">
																				<span class="ckbox"><input type="checkbox"><span></span></span>
																			</span>
																			<span class="ms-3 my-auto">
																				Trending
																			</span>
																		</label>
																	</li>
																	<li class="list-group-item p-0 mb-2 border-0">
																		<label class="d-flex align-items-center mb-0">
																			<span class="check-box mb-0">
																				<span class="ckbox"><input type="checkbox" checked><span></span></span>
																			</span>
																			<span class="ms-3 my-auto">
																				Recent
																			</span>
																		</label>
																	</li>
																	<li class="list-group-item p-0 mb-2 border-0">
																		<label class="d-flex align-items-center mb-0">
																			<span class="check-box mb-0">
																				<span class="ckbox"><input type="checkbox"><span></span></span>
																			</span>
																			<span class="ms-3 my-auto">
																				Popular
																			</span>
																		</label>
																	</li>
																	<li class="list-group-item p-0 mb-2 border-0">
																		<label class="d-flex align-items-center mb-0">
																			<span class="check-box mb-0">
																				<span class="ckbox"><input type="checkbox" checked><span></span></span>
																			</span>
																			<span class="ms-3 my-auto">
																				Most Viewed
																			</span>
																		</label>
																	</li>
																	<li class="list-group-item p-0 mb-2 border-0">
																		<label class="d-flex align-items-center mb-0">
																			<span class="check-box mb-0">
																				<span class="ckbox"><input type="checkbox" checked><span></span></span>
																			</span>
																			<span class="ms-3 my-auto">
																				Rated
																			</span>
																		</label>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="border radius-4 mt-3">
														<div class="p-4">
															<h6 class="mb-0">Similar Searches:</h6>
															<div class="mt-3">
																<div class="similar-search">
																	<a href="javascript:void(0);" class="text-primary tx-capitalize tx-16 mb-1">Eirmod Aliquyamt: Dolor Accusam Sit</a>
																	<p class="mb-0"><span class="font-weight-semibold">Erat ut labore dolor</span> invidunt eirmod nonumy elitr invidunt clita. Et labore lorem ipsum erat est et, labore dolore sed.</p>
																</div>
																<div class="similar-search">
																	<a href="javascript:void(0);" class="text-primary tx-capitalize tx-16 mb-1">Eirmod Aliquyamt: Dolor Accusam Sit</a>
																	<p class="mb-0"><span class="font-weight-semibold">Erat ut labore dolor</span> invidunt eirmod nonumy elitr invidunt clita. Et labore lorem ipsum erat est et, labore dolore sed.</p>
																</div>
																<div class="similar-search">
																	<a href="javascript:void(0);" class="text-primary tx-capitalize tx-16 mb-1">Eirmod Aliquyamt: Dolor Accusam Sit</a>
																	<p class="mb-0"><span class="font-weight-semibold">Erat ut labore dolor</span> invidunt eirmod nonumy elitr invidunt clita. Et labore lorem ipsum erat est et, labore dolore sed.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- col-end -->
										</div>
									</div>
								</div>
								<div class="card-footer">
									<ul class="pagination pagination-style2 mb-0 justify-content-center">
										<li class="page-item page-prev"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
										<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
										<li class="page-item d-sm-block d-none"><a class="page-link" href="javascript:void(0);">3</a></li>
										<li class="page-item d-sm-block d-none"><a class="page-link" href="javascript:void(0);">4</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fe fe-more-horizontal"></i></a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">10</a></li>
										<li class="page-item page-next ms-1"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
										<li class="page-item pagination-jump ms-3 d-md-block d-none">
											<div class="d-flex align-items-center">
												<span class="tx-muted me-2">Go To Page</span>
												<input type="number" class="p-1 wd-30 ht-30 radius-4 form-control">
												<a href="javascript:void(0)" class="ms-2">Go</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- col-end -->
					</div>
					<!-- /row -->

@endsection

@section('scripts')



@endsection
