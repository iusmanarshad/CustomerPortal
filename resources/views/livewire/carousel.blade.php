@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">CAROUSEL</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Carousel</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Static Carousel</div>
								</div>
								<div class="card-body">
									<div class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/1.jpg')}}">
											</div>
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/2.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/3.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">With Controls</div>
								</div>
								<div class="card-body">
									<div class="carousel slide" data-bs-ride="carousel" id="carouselExample2">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/4.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/5.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/16.jpg')}}">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExample2" role="button" data-bs-slide="prev">
											<i class="fe fe-chevron-left" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#carouselExample2" role="button" data-bs-slide="next">
											<i class="fe fe-chevron-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Custom Controls</div>
								</div>
								<div class="card-body">
									<div class="carousel slide" data-bs-ride="carousel" id="carouselExample3">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/20.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/8.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/9.jpg')}}">
											</div>
										</div>
										<a class="carousel-control-prev custom" href="#carouselExample3" role="button" data-bs-slide="prev">
											<i class="fe fe-chevron-left" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next custom" href="#carouselExample3" role="button" data-bs-slide="next">
											<i class="fe fe-chevron-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">With Indicator</div>
								</div>
								<div class="card-body">
									<div class="carousel slide" data-bs-ride="carousel" id="carouselExample4">
										<ol class="carousel-indicators">
											<li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample4"></li>
											<li data-bs-slide-to="1" data-bs-target="#carouselExample4"></li>
											<li data-bs-slide-to="2" data-bs-target="#carouselExample4"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/10.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/11.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/12.jpg')}}">
											</div>
										</div>
										<a class="carousel-control-prev custom" href="#carouselExample4" role="button" data-bs-slide="prev">
											<i class="fe fe-chevron-left" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next custom" href="#carouselExample4" role="button" data-bs-slide="next">
											<i class="fe fe-chevron-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">With Caption</div>
								</div>
								<div class="card-body">
									<div class="carousel slide" data-bs-ride="carousel" id="carouselExample5">
										<ol class="carousel-indicators">
											<li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample5"></li>
											<li data-bs-slide-to="1" data-bs-target="#carouselExample5"></li>
											<li data-bs-slide-to="2" data-bs-target="#carouselExample5"></li>
										</ol>
										<div class="carousel-inner bg-dark">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100 op-3" src="{{asset('build/assets/img/photos/13.jpg')}}">
												<div class="carousel-caption d-none d-md-block">
													<h5>First Slide</h5>
													<p class="tx-14">Vero ipsum sanctus et sanctus sit ipsum dolore. Diam nonumy dolores labore amet vero est ut.</p>
												</div>
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100 op-3" src="{{asset('build/assets/img/photos/14.jpg')}}">
												<div class="carousel-caption d-none d-md-block">
													<h5>Second Slide</h5>
													<p class="tx-14">Vero ipsum sanctus et sanctus sit ipsum dolore. Diam nonumy dolores labore amet vero est ut.</p>
												</div>
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100 op-3" src="{{asset('build/assets/img/photos/15.jpg')}}">
												<div class="carousel-caption d-none d-md-block">
													<h5>Third Slide</h5>
													<p class="tx-14">Vero ipsum sanctus et sanctus sit ipsum dolore. Diam nonumy dolores labore amet vero est ut.</p>
												</div>
											</div>
										</div>
										<a class="carousel-control-prev custom" href="#carouselExample5" role="button" data-bs-slide="prev">
											<i class="fe fe-chevron-left" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next custom" href="#carouselExample5" role="button" data-bs-slide="next">
											<i class="fe fe-chevron-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl-4 col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Fade Animate Carousel</div>
								</div>
								<div class="card-body">
									<div class="carousel slide carousel-fade" data-bs-ride="carousel" id="carouselExample6">
										<ol class="carousel-indicators">
											<li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample6"></li>
											<li data-bs-slide-to="1" data-bs-target="#carouselExample6"></li>
											<li data-bs-slide-to="2" data-bs-target="#carouselExample6"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/6.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/17.jpg')}}">
											</div>
											<div class="carousel-item ">
												<img alt="img" class="d-block w-100" src="{{asset('build/assets/img/photos/18.jpg')}}">
											</div>
										</div>
										<a class="carousel-control-prev custom" href="#carouselExample6" role="button" data-bs-slide="prev">
											<i class="fe fe-chevron-left" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next custom" href="#carouselExample6" role="button" data-bs-slide="next">
											<i class="fe fe-chevron-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Multi Slider</div>
								</div>
								<div class="card-body">
									<p class="card-subtitle">Multislider is a jQuery powered slideshow that specializes in showing more than one slide at a time. There's no need to find messy CSS and JS work arounds for other single-slide solutions. Multislider allows the developer to focus fully on each individual slide as it's own component, and then displays as many slides as you decide in a manner that is fluid, consistent, and dymanic.</p>
									<div id="basicSlider">
										<div class="MS-content">
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/19.jpg')}}" alt="img" class="br-5"> </a>
											</div>
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/20.jpg')}}" alt="img" class="br-5"> </a>
											</div>
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/21.jpg')}}" alt="img" class="br-5"> </a>
											</div>
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/22.jpg')}}" alt="img" class="br-5"> </a>
											</div>
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/23.jpg')}}" alt="img" class="br-5"> </a>
											</div>
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/24.jpg')}}" alt="img" class="br-5"> </a>
											</div>
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/25.jpg')}}" alt="img" class="br-5"> </a>
											</div>
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/26.jpg')}}" alt="img" class="br-5"> </a>
											</div>
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/9.jpg')}}" alt="img" class="br-5"> </a>
											</div>
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/10.jpg')}}" alt="img" class="br-5"> </a>
											</div>
											<div class="item">
												<a href="javascript:void(0)"> <img src="{{asset('build/assets/img/photos/5.jpg')}}" alt="img" class="br-5"> </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- row closed -->

@endsection

@section('scripts')



@endsection
