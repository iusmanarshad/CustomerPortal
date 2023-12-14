@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FLEX</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Flex</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row  -->
					<div class="row row-sm">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Enable Flex</div>
								</div>
								<div class="card-body">
									<div class="d-flex pd-10 bg-gray-300 br-5">
										I'm a flexbox container!
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Direction</div>
								</div>
								<div class="card-body">
									<div>
										<div class="d-flex flex-row border p-3 br-5  mg-b-20">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row-reverse border p-3 br-5 ">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Justify Content</div>
								</div>
								<div class="card-body">
									<div>
										<div class="d-flex flex-row justify-content-start mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-end mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-center mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-between mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row justify-content-around  border p-3 br-5">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Align Items</div>
								</div>
								<div class="card-body">
									<div>
										<div class="d-flex flex-row align-items-start ht-100 mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-center  ht-100 mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-end ht-100 mg-b-20 border p-3 br-5">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
										<div class="d-flex flex-row align-items-stretch ht-100  border p-3 br-5">
											<div class="pd-10 bg-gray-300">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-500">
												Flex item 3
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Align Self</div>
								</div>
								<div class="card-body">
									<div>
										<div class="d-flex flex-row ht-100 mg-b-20  border p-3 br-5">
											<div class="pd-10 bg-gray-200 align-self-start">
												Flex item 1
											</div>
											<div class="pd-10 bg-gray-300 align-self-center">
												Flex item 2
											</div>
											<div class="pd-10 bg-gray-400 align-self-end">
												Flex item 3
											</div>
											<div class="pd-10 bg-gray-500 align-self-stretch">
												Flex item 4
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Fill</div>
								</div>
								<div class="card-body">
									<div>
										<div class="d-flex  border p-3 br-5">
											<div class="pd-10 bg-gray-300 flex-fill">
												Flex item with a lot of content
											</div>
											<div class="pd-10 bg-gray-400 flex-fill">
												Flex item
											</div>
											<div class="pd-10 bg-gray-500 flex-fill">
												Flex item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Grow and Shrink</div>
								</div>
								<div class="card-body">
									<div>
										<div class="d-flex  border p-3 br-5">
											<div class="pd-10 bg-gray-300 flex-grow-1">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item
											</div>
											<div class="pd-10 bg-gray-500">
												Third flex item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Auto Margins</div>
								</div>
								<div class="card-body">
									<div>
										<div class="d-flex  border p-3 br-5">
											<div class="pd-10 bg-gray-300">
												Flex item
											</div>
											<div class="pd-10 bg-gray-400">
												Flex item
											</div>
											<div class="pd-10 bg-gray-500 mg-s-auto">
												Third flex item
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
					</div>
					<!-- row closed -->

@endsection

@section('scripts')



@endsection
