@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">BLOG</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-12 col-xxl-6 col-lg-6 col-md-12">
							<div class="card overflow-hidden">
								<a href="{{url('blog-details')}}" class="background-image-blog mb-0"></a>
								<div class="card-body">
									<a href="{{url('blog-details')}}" class="mt-4"><h4 class="font-weight-semibold">Best Place To visit For a Holiday idea of denouncing pleasure?</h4></a>
									<p class="mb-0 tx-muted">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
									<div class="mt-3 flex-between">
										<a href="{{url('blog-details')}}" class="btn btn-primary">Read Article</a>
										<span class="tx-11 tx-muted">Read in 3 minutes</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-xxl-3 col-lg-6 col-md-12">
							<div class="card overflow-hidden">
								<a href="{{url('blog-details')}}"><img class="w-100 br-be-0 br-bs-0" src="{{asset('build/assets/img/photos/11.jpg')}}" alt="img"></a>
								<div class="card-body">
									<a href="{{url('blog-details')}}"><h4 class="font-weight-semibold">10 Ways To Immediately Start Selling Products!</h4></a>
									<p class="mb-0 tx-muted">Those who do not know how  pursues or desires to  occur in which toil and pain can procure him some great pleasure. To take a trivial example  pain was born and I will give you a complete account of the system.</p>
									<div class="mt-3 flex-between">
										<a href="{{url('blog-details')}}" class="btn btn-primary">Read Article</a>
										<span class="tx-11 tx-muted">Read in 10 minutes</span>
									</div>
								</div>
								</div>
						</div>
						<div class="col-xl-6 col-xxl-3 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Recent Articles</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled mb-0">
										<li class="mb-4">
											<h5 class="font-weight-semibold">10 Ways to Immediately Start Selling Products!</h5>
											<p class="mb-0 tx-muted">Eos lorem eos erat clita diam sea sed et nonumy, et ut sit vero dolor gubergren ipsum magna at. Amet.</p>
											<a href="{{url('blog-details')}}" class="btn btn-outline-primary btn-sm mt-2">Read Article</a>
										</li>
										<li class="mb-4">
											<h5 class="font-weight-semibold">7 Interesting Facts Everyone Must Know about Healty Diet Plans.</h5>
											<p class="mb-0 tx-muted">Eos lorem eos erat clita diam sea sed et nonumy, et ut sit vero dolor gubergren ipsum magna at. Amet.</p>
											<a href="{{url('blog-details')}}" class="btn btn-outline-primary btn-sm mt-2">Read Article</a>
										</li>
										<li class="mb-0">
											<h5 class="font-weight-semibold">10 Ways to Immediately Start Selling Products!</h5>
											<p class="mb-0 tx-muted">Eos lorem eos erat clita diam sea sed et nonumy, et ut sit vero dolor gubergren ipsum magna at. Amet.</p>
											<a href="{{url('blog-details')}}" class="btn btn-outline-primary btn-sm mt-2">Read Article</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-12">
							<div class="d-lg-flex d-block align-items-center justify-content-between mb-2">
								<h4 class="mb-0 tx-capitalize">All Things you must learn about Technology</h4>
								<a href="javascript:void(0);" class="btn btn-primary rounded-pill mt-lg-0 mt-2">See All Articles</a>
							</div>
						</div>
						<div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
							<div class="card overflow-hidden">
								<a href="{{url('blog-details')}}"><img class="br-be-0 br-bs-0 w-100" src="{{asset('build/assets/img/photos/2.jpg')}}" alt="img"></a>
								<div class="card-body">
									<a href="{{url('blog-details')}}"><h5>How To Become Better With Building In 1 Month !</h5></a>
									<p class="tx-muted mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<div class="mt-3 flex-between">
										<a href="{{url('blog-details')}}" class="btn btn-primary">Read Article</a>
										<span class="tx-11 tx-muted">Read in 3 minutes</span>
									</div>
								</div>
							 </div>
						</div>
						<div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
							<div class="card overflow-hidden">
								<a href="{{url('blog-details')}}"><img class="br-be-0 br-bs-0 w-100" src="{{asset('build/assets/img/photos/1.jpg')}}" alt="img"></a>
								<div class="card-body">
									<a href="{{url('blog-details')}}"><h5>10 Ways To Immediately Start Selling Products !</h5></a>
									<p class="tx-muted mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<div class="mt-3 flex-between">
										<a href="{{url('blog-details')}}" class="btn btn-primary">Read Article</a>
										<span class="tx-11 tx-muted">Read in 5 minutes</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
							<div class="card overflow-hidden">
								<a href="{{url('blog-details')}}"><img class="br-be-0 br-bs-0 w-100" src="{{asset('build/assets/img/photos/9.jpg')}}" alt="img"></a>
								<div class="card-body">
									<a href="{{url('blog-details')}}"><h5>3 Easy Ways To Make Your mobile Faster & Even !</h5></a>
									<p class="tx-muted mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<div class="mt-3 flex-between">
										<a href="{{url('blog-details')}}" class="btn btn-primary">Read Article</a>
										<span class="tx-11 tx-muted">Read in 10 minutes</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-xl-6 col-lg-6  col-sm-6">
							<div class="card overflow-hidden">
								<a href="{{url('blog-details')}}"><img class="br-be-0 br-bs-0 w-100" src="{{asset('build/assets/img/photos/2.jpg')}}" alt="img"></a>
								<div class="card-body">
									<a href="{{url('blog-details')}}"><h5>How To Become Better With Building In 1 Month !</h5></a>
									<p class="tx-muted mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<div class="mt-3 flex-between">
										<a href="{{url('blog-details')}}" class="btn btn-primary">Read Article</a>
										<span class="tx-11 tx-muted">Read in 5 minutes</span>
									</div>
								</div>
							 </div>
						</div>
					</div>
					<!-- /row -->
					<ul class="pagination justify-content-end mb-4">
						<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
						<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
						<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
						<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
						<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
					</ul>

@endsection

@section('scripts')



@endsection
