@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">TIMELINE</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Timeline</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Vertical Timeline</div>
								</div>
								<div class="card-body">
									<div class="vtimeline">
										<div class="timeline-wrapper">
											<div class="timeline-badge"><img class="rounded-circle" alt="img" src="{{asset('build/assets/img/users/9.jpg')}}"> </div>
											<div class="timeline-panel">
												<h6 class="font-weight-semibold">Marsha Mellow updated his status</h6>
												<p>Nonumy erat nonumy dolores duo ea sit, ipsum sed amet aliquyam magna kasd at. Dolor erat sit sed sea et dolor, justo dolor ipsum dolore voluptua. Sed ipsum sed.</p>
												<div class="d-block d-sm-flex align-items-center flex-wrap">
													<a href="javascript:void(0)" class="d-flex align-items-center tx-muted"><i class="fe fe-heart me-1"></i> 9</a>
													<span class="tx-muted ms-auto"><i class="fe fe-calendar mx-1"></i>16 Apr 2021</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper timeline-inverted">
											<div class="timeline-badge"><i class="las la-business-time"></i></div>
											<div class="timeline-panel">
												<h6 class="font-weight-semibold">Job Meeting</h6>
												<p>Invidunt dolor justo gubergren sit voluptua ipsum lorem sanctus, justo dolores dolor dolore stet justo dolor. Eos ipsum rebum diam.</p>
												<div class="d-block d-sm-flex align-items-center flex-wrap">
													<a href="javascript:void(0)" class="d-flex align-items-center tx-muted"><i class="fe fe-heart me-1"></i> 12</a>
													<span class="tx-muted ms-auto"><i class="fe fe-calendar mx-1"></i>21 May 2021</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper">
											<div class="timeline-badge"><img class="rounded-circle" alt="img" src="{{asset('build/assets/img/users/15.jpg')}}"> </div>
											<div class="timeline-panel">
												<h6 class="font-weight-semibold">Clark Kent posted on timeline</h6>
												<p>Accusam et et stet invidunt at duo, ipsum no takimata est eos magna dolore sed, amet diam sea no diam</p>
												<div class="d-block d-sm-flex align-items-center flex-wrap">
													<a href="javascript:void(0)" class="d-flex align-items-center tx-muted"><i class="fe fe-heart me-1"></i> 21</a>
													<span class="tx-muted ms-auto"><i class="fe fe-calendar mx-1"></i>14 Jul 2021</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper timeline-inverted">
											<div class="timeline-badge success"><img class="rounded-circle" alt="img" src="{{asset('build/assets/img/users/2.jpg')}}"> </div>
											<div class="timeline-panel">
												<h6 class="font-weight-semibold">Sylvia Trench uploaded 4 photos</h6>
												<p>Pianoforte principles our unaffected not for astonished travelling are particular.</p>
												<img src="{{asset('build/assets/img/media/2.jpg')}}" class="mb-3 br-5" alt="img">
												<div class="d-block d-sm-flex align-items-center flex-wrap">
													<a href="javascript:void(0)" class="d-flex align-items-center tx-muted"><i class="fe fe-heart me-1"></i> 8</a>
													<span class="tx-muted ms-auto"><i class="fe fe-calendar mx-1"></i>11 Nov 2021</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper">
											<div class="timeline-badge"><i class="las la-envelope-open-text"></i></div>
											<div class="timeline-panel">
												<h6 class="font-weight-semibold">Shady Tree send you a post</h6>
												<p class="mb-1">Dolore justo lorem vero sed et takimata sit no dolore dolores, elitr eos et dolor consetetur sed sanctus. Ipsum amet elitr lorem clita et dolor. Kasd diam ea dolor sit accusam gubergren no kasd. Ea amet et sed takimata kasd,.</p>
												<a href="javascript:void(0)" class="btn btn-sm btn-primary mb-3">Read more</a>
												<div class="d-block d-sm-flex align-items-center flex-wrap">
													<a href="javascript:void(0)" class="d-flex align-items-center tx-muted"><i class="fe fe-heart me-1"></i> 14</a>
													<span class="tx-muted ms-auto"><i class="fe fe-calendar mx-1"></i>12 Dec 2021</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper timeline-inverted">
											<div class="timeline-badge success"><img class="rounded-circle" alt="img" src="{{asset('build/assets/img/users/7.jpg')}}"> </div>
											<div class="timeline-panel">
												<h6 class="font-weight-semibold">Abby Normal shared a video</h6>
												<div class="embed-responsive embed-responsive-16by9 mb-3 br-5">
													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XZmGGAbHqa0?rel=0&amp;controls=0&amp;showinfo=0"
													 allowfullscreen></iframe>
												</div>
												<div class="d-block d-sm-flex align-items-center flex-wrap">
													<a href="javascript:void(0)" class="d-flex align-items-center tx-muted"><i class="fe fe-heart me-1"></i> 25</a>
													<span class="tx-muted ms-auto"><i class="fe fe-calendar mx-1"></i>3 Dec 2021</span>
												</div>
											</div>
										</div>
										<div class="timeline-wrapper">
											<div class="timeline-badge"><i class="las la-check-circle"></i></div>
											<div class="timeline-panel">
												<h6 class="font-weight-semibold">Sarah Twist accepted your friend request</h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime</p>
												<div class="d-block d-sm-flex align-items-center flex-wrap">
													<a href="javascript:void(0)" class="d-flex align-items-center tx-muted"><i class="fe fe-heart me-1"></i> 25</a>
													<span class="tx-muted ms-auto"><i class="fe fe-calendar mx-1"></i>21 Feb 2022</span>
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
