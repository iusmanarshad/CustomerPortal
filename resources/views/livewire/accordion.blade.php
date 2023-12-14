@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">ACCORDION</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Accordion</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Accordion</div>
								</div>
								<div class="card-body">
									<div class="accordion" id="basicAccordion">
										<div class="accordion-item border-default">
											<div class="accordion-header" id="headingOne">
												<a href="javascript:void(0);" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#basicOne" aria-expanded="true" aria-controls="basicOne">
													Accordion Item #1
												</a>
											</div>
											<div id="basicOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item border-default">
											<div class="accordion-header" id="headingTwo">
												<a href="javascript:void(0);" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#basicTwo" aria-expanded="false" aria-controls="basicTwo">
													Accordion Item #2
												</a>
											</div>
											<div id="basicTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#basicAccordion">
												<div class="accordion-body">
													<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item border-default">
											<div class="accordion-header" id="headingThree">
												<a href="javascript:void(0);" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#basicThree" aria-expanded="false" aria-controls="basicThree">
													Accordion Item #3
												</a>
											</div>
											<div id="basicThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#basicAccordion">
												<div class="accordion-body">
													<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
									<div class="card-title">Custom Accordion</div>
								</div>
								<div class="card-body">
									<div class="accordion custom-accordion" id="customAccordion">
										<div class="accordion-item">
											<div class="accordion-header" id="heading4">
												<a href="javascript:void(0);" role="button" data-bs-toggle="collapse" data-bs-target="#customOne" aria-expanded="true" aria-controls="customOne">
													Custom Accordion Item #1
												</a>
											</div>
											<div id="customOne" class="accordion-collapse collapse show" aria-labelledby="heading4" data-bs-parent="#customAccordion">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header" id="heading5">
												<a href="javascript:void(0);" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#customTwo" aria-expanded="false" aria-controls="customTwo">
													Custom Accordion Item #2
												</a>
											</div>
											<div id="customTwo" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#customAccordion">
												<div class="accordion-body">
													<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header" id="heading6">
												<a href="javascript:void(0);" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#customThree" aria-expanded="false" aria-controls="customThree">
													Custom Accordion Item #3
												</a>
											</div>
											<div id="customThree" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#customAccordion">
												<div class="accordion-body">
													<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
									<div class="card-title">Accordion Style-1</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-style1" id="accordionStyle1">
										<div class="accordion-item">
											<div class="accordion-header" id="heading7">
												<a href="javascript:void(0);" class="" role="button" data-bs-toggle="collapse" data-bs-target="#custom4" aria-expanded="true" aria-controls="custom4">
													Accordion Style-1 Item #1
													<span class="accordion-controls">
														<span class="expand"><i class="fe fe-plus-circle"></i></span>
														<span class="shrink"><i class="fe fe-minus-circle"></i></span>
													</span>
												</a>
											</div>
											<div id="custom4" class="accordion-collapse collapse show" aria-labelledby="heading7" data-bs-parent="#accordionStyle1">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header" id="heading8">
												<a href="javascript:void(0);" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#custom5" aria-expanded="false" aria-controls="custom5">
													Accordion Style-1 Item #2
													<span class="accordion-controls">
														<span class="expand"><i class="fe fe-plus-circle"></i></span>
														<span class="shrink"><i class="fe fe-minus-circle"></i></span>
													</span>
												</a>
											</div>
											<div id="custom5" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionStyle1">
												<div class="accordion-body">
													<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header" id="heading9">
												<a href="javascript:void(0);" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#custom6" aria-expanded="false" aria-controls="custom6">
													Accordion Style-1 Item #3
													<span class="accordion-controls">
														<span class="expand"><i class="fe fe-plus-circle"></i></span>
														<span class="shrink"><i class="fe fe-minus-circle"></i></span>
													</span>
												</a>
											</div>
											<div id="custom6" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionStyle1">
												<div class="accordion-body">
													<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
									<div class="card-title">Accordion Style-2</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-style2" id="accordionStyle2">
										<div class="accordion-item">
											<div class="accordion-header" id="heading13">
												<a href="javascript:void(0);" class="" role="button" data-bs-toggle="collapse" data-bs-target="#custom9" aria-expanded="true" aria-controls="custom9">
													Accordion Style-2 Item #1
													<span class="accordion-controls">
														<span class="expand"><i class="fe fe-plus-circle"></i></span>
														<span class="shrink"><i class="fe fe-minus-circle"></i></span>
													</span>
												</a>
											</div>
											<div id="custom9" class="accordion-collapse collapse show" aria-labelledby="heading13" data-bs-parent="#accordionStyle2">
												<div class="accordion-body">
													<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header" id="heading14">
												<a href="javascript:void(0);" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#custom10" aria-expanded="false" aria-controls="custom10">
													Accordion Style-2 Item #2
													<span class="accordion-controls">
														<span class="expand"><i class="fe fe-plus-circle"></i></span>
														<span class="shrink"><i class="fe fe-minus-circle"></i></span>
													</span>
												</a>
											</div>
											<div id="custom10" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionStyle2">
												<div class="accordion-body">
													<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header" id="heading15">
												<a href="javascript:void(0);" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#custom11" aria-expanded="false" aria-controls="custom11">
													Accordion Style-2 Item #3
													<span class="accordion-controls">
														<span class="expand"><i class="fe fe-plus-circle"></i></span>
														<span class="shrink"><i class="fe fe-minus-circle"></i></span>
													</span>
												</a>
											</div>
											<div id="custom11" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionStyle2">
												<div class="accordion-body">
													<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
									<div class="card-title">Accordion With Elements</div>
								</div>
								<div class="card-body">
									<div class="accordion accordion-style1" id="accordionWithElements">
										<div class="accordion-item">
											<div class="accordion-header" id="heading11">
												<a href="javascript:void(0);" role="button" data-bs-toggle="collapse" data-bs-target="#custom7" aria-expanded="false" aria-controls="custom7">
													Accordion With Images
													<span class="accordion-controls">
														<span class="expand"><i class="fe fe-plus-circle"></i></span>
														<span class="shrink"><i class="fe fe-minus-circle"></i></span>
													</span>
												</a>
											</div>
											<div id="custom7" class="accordion-collapse collapse show" aria-labelledby="heading11" data-bs-parent="#accordionWithElements">
												<div class="accordion-body">
													<div class="row">
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid radius-4 mb-3 mb-lg-0" src="{{asset('build/assets/img/photos/13.jpg')}}" alt="accr-img">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid radius-4 mb-3 mb-lg-0" src="{{asset('build/assets/img/photos/21.jpg')}}" alt="accr-img">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid radius-4 mb-3 mb-lg-0" src="{{asset('build/assets/img/photos/22.jpg')}}" alt="accr-img">
														</div>
														<div class="col-lg-3 col-md-6">
															<img class="img-fluid radius-4 mb-3 mb-lg-0" src="{{asset('build/assets/img/photos/20.jpg')}}" alt="accr-img">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header" id="heading12">
												<a href="javascript:void(0);" class="collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#custom8" aria-expanded="false" aria-controls="custom8">
													Accordion With Tables
													<span class="accordion-controls">
														<span class="expand"><i class="fe fe-plus-circle"></i></span>
														<span class="shrink"><i class="fe fe-minus-circle"></i></span>
													</span>
												</a>
											</div>
											<div id="custom8" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionWithElements">
												<div class="accordion-body table-responsive">
													<table class="table mb-0 table-bordered border-top mb-0">
														<thead>
															<tr>
																<th>#</th>
																<th>First Name</th>
																<th>Last Name</th>
																<th>User ID</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th scope="row">1</th>
																<td>Barb</td>
																<td>Akew</td>
																<td>Barb1171</td>
															</tr>
															<tr>
																<th scope="row">2</th>
																<td>Con</td>
																<td>Junktivitas</td>
																<td>Con1568</td>
															</tr>
															<tr>
																<th scope="row">3</th>
																<td>Perry</td>
																<td>Tonitus</td>
																<td>Perry7956</td>
															</tr>
														</tbody>
													</table>
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
