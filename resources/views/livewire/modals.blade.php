@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">MODALS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Modals</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Modal Component</div>
								</div>
								<div class="card-body">
									<div class="modal d-block pos-static">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h6 class="modal-title">Modal Title</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<h6>Modal Body</h6>
													<p>Ipsum sed invidunt amet clita gubergren, ea erat dolores lorem sed gubergren sadipscing. Dolores clita ea justo at vero, magna voluptua ipsum sadipscing et sea sea sanctus..</p>
												</div>
												<div class="modal-footer">
													<button class="btn btn-sm btn-primary" type="button">Save changes</button>
													<button class="btn btn-sm btn-secondary" type="button">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- col-end -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">

						<div class="col-sm-12 col-lg-6 col-xl-4 col-xxl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Modal</div>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" data-bs-target="#basicModal" data-bs-toggle="modal" href="javascript:void(0)">Launch Modal</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xl-4 col-xxl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Static Modal</div>
								</div>
								<div class="card-body">
									<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
										Static Modal
									</button>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xl-4 col-xxl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Scrolling Long Content</div>
								</div>
								<div class="card-body">
									<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#scrollingContentModal">
										Launch Modal
									</button>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xl-4 col-xxl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Scrollable Modal</div>
								</div>
								<div class="card-body">
									<button type="button" class="btn btn-teal" data-bs-toggle="modal" data-bs-target="#scrollableModal">
										Launch Modal
									</button>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xl-4 col-xxl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Vertically Centered Modal</div>
								</div>
								<div class="card-body">
									<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalCenteredModal">
										Launch Modal
									</button>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xl-4 col-xxl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Vertically Centered Scrollable Modal</div>
								</div>
								<div class="card-body">
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalCenteredScrollModal">
										Launch Modal
									</button>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xl-4 col-xxl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Popover Modal</div>
								</div>
								<div class="card-body">
									<button type="button" class="btn btn-teal" data-bs-toggle="modal" data-bs-target="#popover">
										Launch Modal
									</button>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xl-4 col-xxl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Grid Modal</div>
								</div>
								<div class="card-body">
									<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#gridModal">
										Launch Modal
									</button>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xl-4 col-xxl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Toggle Between Modals</div>
								</div>
								<div class="card-body">
									<a class="btn btn-success" data-bs-toggle="modal" href="#toggleBetweenModal" role="button">Open first modal</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-xl col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Varying Modal Content</div>
								</div>
								<div class="card-body">
									<div class="btn-list">
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@fat">Open modal for @fat</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">

						<div class="col-md-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Extra Large Modal</div>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" data-bs-target="#extraLargeModal" data-bs-toggle="modal" href="javascript:void(0)">Launch Modal</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-md-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Large Modal</div>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" data-bs-target="#largeModal" data-bs-toggle="modal" href="javascript:void(0)">Launch Modal</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-md-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Small Modal</div>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" data-bs-target="#smallModal" data-bs-toggle="modal" href="javascript:void(0)">Launch Modal</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Full Screen Modal</div>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" data-bs-target="#fullScreenModal" data-bs-toggle="modal" href="javascript:void(0)">Launch Demo</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Full Screen Below SM</div>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" data-bs-target="#fullScreenSm" data-bs-toggle="modal" href="javascript:void(0)">Launch Demo</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Full Screen Below MD</div>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" data-bs-target="#fullScreenMd" data-bs-toggle="modal" href="javascript:void(0)">Launch Demo</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Full Screen Below LG</div>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" data-bs-target="#fullScreenLg" data-bs-toggle="modal" href="javascript:void(0)">Launch Demo</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Full Screen Below XL</div>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" data-bs-target="#fullScreenXl" data-bs-toggle="modal" href="javascript:void(0)">Launch Demo</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Full Screen Below XXL</div>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" data-bs-target="#fullScreenXxl" data-bs-toggle="modal" href="javascript:void(0)">Launch Demo</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Success Alert Modal</div>
								</div>
								<div class="card-body">
									<a class="btn btn-success" data-bs-target="#successModal" data-bs-toggle="modal" href="javascript:void(0)">Launch Modal</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Danger Alert Modal</div>
								</div>
								<div class="card-body">
									<a class="btn btn-danger" data-bs-target="#dangerModal" data-bs-toggle="modal" href="javascript:void(0)">Launch Modal</a>
								</div>
							</div>
						</div><!-- col-end -->

						<div class="col-sm-12 col-lg-6 col-xxl-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Select2 Inside Modals</div>
								</div>
								<div class="card-body">
									<a class="btn btn-teal" data-bs-target="#select2Modal" data-bs-toggle="modal" href="javascript:void(0)">Launch Modal</a>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="card">
						<div class="card-header">
							<div class="card-title">Modals With Effect</div>
						</div>
						<div class="card-body">
							<div class="row ">
								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#effectModal">Scale</a>
								</div>
								<!-- col-end -->

								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-slide-in-right" data-bs-toggle="modal" href="#effectModal">Slide In Right</a>
								</div>
								<!-- col-end -->

								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-slide-in-bottom" data-bs-toggle="modal" href="#effectModal">Slide In Bottom</a>
								</div>
								<!-- col-end -->

								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-newspaper" data-bs-toggle="modal" href="#effectModal">Newspaper</a>
								</div>
								<!-- col-end -->

								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#effectModal">Fall</a>
								</div>
								<!-- col-end -->

								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#effectModal">Flip Horizontal</a>
								</div>
								<!-- col-end -->

								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-flip-vertical" data-bs-toggle="modal" href="#effectModal">Flip Vertical</a>
								</div>
								<!-- col-end -->

								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#effectModal">Super Scaled</a>
								</div>
								<!-- col-end -->

								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-sign" data-bs-toggle="modal" href="#effectModal">Sign</a>
								</div>
								<!-- col-end -->

								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#effectModal">Rotate Bottom</a>
								</div>
								<!-- col-end -->

								<div class="col-sm-6 col-md-4 col-xl-3">
									<a class="modal-effect btn btn-block btn-outline-primary mb-3" data-bs-effect="effect-rotate-left" data-bs-toggle="modal" href="#effectModal">Rotate Left</a>
								</div>
								<!-- col-end -->

							</div>
						</div>
					</div>
					<!-- /row -->

@endsection

@section('modals')					

					<!-- Basic modal -->
					<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Modal Title</h6>
									<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6>Modal Body</h6>
									<p>Woohoo, you're reading this text in a modal!</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End Basic modal -->

					<!-- Static modal -->
					<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Modal title</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									I will not close if you click outside me. Don't even try to press escape key.
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="button" class="btn btn-sm btn-primary">Understood</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End Static modal -->

					<!-- Scrolling content modal -->
					<div class="modal fade" id="scrollingContentModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Modal title</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the text the modal, we use an inline style set a minimum height, thereby extending the length of the overall modal and demonstrating the overflow scrolling. When content becomes longer than the height of the viewport, scrolling will move the modal as needed.
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save Changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End scrolling content modal -->

					<!-- scrollable modal -->
					<div class="modal fade" id="scrollableModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Modal title</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the text the modal, we use an inline style set a minimum height, thereby extending the length of the overall modal and demonstrating the overflow scrolling. When content becomes longer than the height of the viewport, scrolling will move the modal as needed.
									<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
									<p>This content should appear at the bottom after you scroll.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save Changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End scrollable modal -->

					<!-- Vertically centered modal -->
					<div class="modal fade" id="verticalCenteredModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Modal title</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									This is a vertically centered modal.
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save Changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End vertically centered modal -->

					<!-- Vertically centered scrollable modal -->
					<div class="modal fade" id="verticalCenteredScrollModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Modal title</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									This is some placeholder content to show a vertically centered modal. We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the prefedined max-height of modal, content will be cropped and scrollable within the modal.
									<br><br><br><br><br><br><br><br><br><br>
									<p>Just like that.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save Changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End vertically centered scrollable modal -->

					<!-- popover modal -->
					<div class="modal fade" id="popover" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Popover Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h5>Popover in a modal</h5>
									<p>This <button type="button" class="btn btn-sm btn-success" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="default2"  data-bs-placement="right" title="Popover right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">button</button> triggers a popover on click.</p>
									<hr>
									<h5>Tooltips in a modal</h5>
									<p> <button class="btn btn-sm btn-success me-1" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top" type="button">This link</button>and <button class="btn btn-sm btn-success" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top" type="button">that link</button> have tooltips on hover.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-primary" type="button">Save changes</button>
									<button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End popover modal -->

					<!-- Grid modal -->
					<div class="modal fade" id="gridModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Grid Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<div class="container-fluid modal-example-row">
										<div class="row">
										<div class="col-md-4">.col-md-4</div>
										<div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
										</div>
										<div class="row">
										<div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
										<div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
										</div>
										<div class="row">
										<div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
										</div>
										<div class="row">
										<div class="col-sm-9">
											Level 1: .col-sm-9
											<div class="row">
											<div class="col-8 col-sm-6">
												Level 2: .col-8 .col-sm-6
											</div>
											<div class="col-4 col-sm-6">
												Level 2: .col-4 .col-sm-6
											</div>
											</div>
										</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!--End Grid modal -->

					<!-- Toggle Between modals -->
					<div class="modal fade" id="toggleBetweenModal" aria-hidden="true" tabindex="-1">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Modal 1</h5>
									<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									Show a second modal and hide this one with the button below.
								</div>
								<div class="modal-footer">
									<button class="btn btn-primary" data-bs-target="#toggleBetweenModal2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="toggleBetweenModal2" aria-hidden="true" tabindex="-1">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Modal 2</h5>
									<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
								Hide this modal and show the first with the button below.
								</div>
								<div class="modal-footer">
									<button class="btn btn-primary" data-bs-target="#toggleBetweenModal" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End toggle between modals -->

					<!-- Varying modal -->
					<div class="modal fade" id="varyingModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">New message</h5>
									<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<form>
										<div class="mb-3">
											<label for="recipient-name" class="col-form-label">Recipient:</label>
											<input type="text" class="form-control" id="recipient-name">
										</div>
										<div class="mb-3">
											<label for="message-text" class="col-form-label">Message:</label>
											<textarea class="form-control" id="message-text"></textarea>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="button" class="btn btn-sm btn-primary">Send message</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End varying modal -->

					<!-- Extra-large  modal -->
					<div class="modal fade" id="extraLargeModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-xl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Extra-large Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!--End Extra-large modal -->

					<!-- Large modal -->
					<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Large Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!--End large modal -->

					<!-- Small modal -->
					<div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-sm" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Small Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<p>Nemo enim ipsam volupta, sed quia consequu nesciunt.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!--End small modal -->

					<!-- Full screen modal -->
					<div class="modal fade" id="fullScreenModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-fullscreen" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Full Screen Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6>Modal Body</h6>
									<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End full-screen modal -->

					<!-- Full screen below sm modal -->
					<div class="modal fade" id="fullScreenSm" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-fullscreen-sm-down" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Full Screen Below SM</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6>Modal Body</h6>
									<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End full screen below sm modal -->

					<!-- Full screen below md modal -->
					<div class="modal fade" id="fullScreenMd" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-fullscreen-md-down" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Full Screen Below MD</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6>Modal Body</h6>
									<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End full screen below md modal -->

					<!-- Full screen below lg modal -->
					<div class="modal fade" id="fullScreenLg" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-fullscreen-lg-down" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Full Screen Below LG</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6>Modal Body</h6>
									<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End full screen below lg modal -->

					<!-- Full screen below xl modal -->
					<div class="modal fade" id="fullScreenXl" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-fullscreen-xl-down" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Full Screen Below XL</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6>Modal Body</h6>
									<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End full screen below xl modal -->

					<!-- Full screen below xxl modal -->
					<div class="modal fade" id="fullScreenXxl" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-fullscreen-xxl-down" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Full Screen Below XXL</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6>Modal Body</h6>
									<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End full screen below xxl modal -->

					<!-- Success alert modal -->
					<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body tx-center">
									<i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1"></i>
									<h4 class="tx-success mt-1">Congratulations!</h4>
									<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Continue</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End success alert modal -->

					<!-- Danger alert modal -->
					<div class="modal fade" id="dangerModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body tx-center">
									<i class="icon ion-ios-close-circle-outline tx-100 tx-danger lh-1"></i>
									<h4 class="tx-danger mt-1">Error: Cannot process your entry!</h4>
									<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Continue</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End danger alert modal -->

					<!-- Select2 modal -->
					<div class="modal fade" id="select2Modal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Select2 Modal</h6>
									<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6 class="mb-2">Modal Body</h6>

									<!-- Select2 -->
									<div class="form-group">
										<select class="form-control form-select select2">
											<option value="option1">
											Option-1
											</option>
											<option value="option2">
											Option-2
											</option>
											<option value="option3">
											Option-3
											</option>
											<option value="option4">
											Option-4
											</option>
											<option value="option5">
											Option-5
											</option>
										</select>
									</div>
									<!-- Select2 -->

									<p class="mb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Continue</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End select2 alert modal -->

					<!-- Effect modal -->
					<div class="modal fade" id="effectModal" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h6 class="modal-title">Modal Title</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<h6>Modal Body</h6>
									<p>Woohoo, you're reading this text in a modal!</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
									<button class="btn btn-sm btn-primary" type="button">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End effect modal -->

@endsection



@section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- modal js -->
        @vite('resources/assets/js/modal.js')

@endsection
