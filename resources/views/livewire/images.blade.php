@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">IMAGES</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Images</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="card mg-b-20">
						<div class="card-header">
							<div class="card-title">Responsive Image</div>
						</div>
						<div class="card-body">
							<div class="text-wrap">
								<img alt="Responsive image" class="img-fluid br-5" src="{{asset('build/assets/img/photos/12.jpg')}}">
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="card mg-b-20">
						<div class="card-header">
							<div class="card-title">Image Thumbnail</div>
						</div>
						<div class="card-body">
							<div class="text-wrap">
								<img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200" src="{{asset('build/assets/img/photos/13.jpg')}}">
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="card mg-b-20">
						<div class="card-header">
							<div class="card-title">right and left Aligning</div>
						</div>
						<div class="card-body">
							<div class="text-wrap">
								<div class="d-flex flex-wrap justify-content-between">
									<img alt="img" class="br-5 wd-100p wd-sm-200" src="{{asset('build/assets/img/photos/14.jpg')}}">
									<img alt="img" class="br-5 wd-100p wd-sm-200 mg-t-10 mg-sm-t-0" src="{{asset('build/assets/img/photos/20.jpg')}}">
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="card">
						<div class="card-header">
							<div class="card-title">Background Image</div>
						</div>
						<div class="card-body">
							<div class="text-wrap">
								<figure class="pos-relative br-5 w-fit-content overflow-hidden">
									<img alt="Responsive image" src="{{asset('build/assets/img/photos/16.jpg')}}">
									<figcaption class="pos-absolute br-5 a-0 p-3 bg-black op-8 tx-white">
										<h6 class="tx-14 tx-sm-16 tx-white tx-semibold">What Does Royalty-Free Mean?</h6>
										<p class="mg-b-0">Means you just need to pay. You don't need to pay additional or ongoing fees for each person who sees.</p>
									</figcaption>
								</figure>
							</div>
						</div>
					<!-- /row -->
					</div>

@endsection

@section('scripts')



@endsection
