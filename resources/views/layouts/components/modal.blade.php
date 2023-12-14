

			<!-- Country-selector modal-->
			<div class="modal fade" id="country-selector">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header border-bottom">
							<h6 class="modal-title">Choose Country</h6>
							<button aria-label="Close" class="btn btn-def" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&#x2715;</span></button>
						</div>
						<div class="modal-body">
							<ul class="row p-3 list-unstyled mb-0">
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block active"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/us_flag.jpg')}}" class="me-3 language"></span>Usa </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/italy_flag.jpg')}}" class="me-3 language"></span>Italy </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/spain_flag.jpg')}}" class="me-3 language"></span>Spain </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/india_flag.jpg')}}" class="me-3 language"></span>India </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/french_flag.jpg')}}" class="me-3 language"></span>France </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/mexico.jpg')}}" class="me-3 language"></span>Mexico </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/singapore.jpg')}}" class="me-3 language"></span>Singapore </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/poland.jpg')}}" class="me-3 language"></span>Poland </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/austria.jpg')}}" class="me-3 language"></span>Austria </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/russia_flag.jpg')}}" class="me-3 language"></span>Russia </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/germany_flag.jpg')}}" class="me-3 language"></span>Germany </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/argentina.jpg')}}" class="me-3 language"></span>Argentina </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/brazil.jpg')}}" class="me-3 language"></span>Brazil </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/uae.jpg')}}" class="me-3 language"></span>U.A.E </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/china.jpg')}}" class="me-3 language"></span>China </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/uk.jpg')}}" class="me-3 language"></span>U.K </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/malaysia.jpg')}}" class="me-3 language"></span>Malaysia </a> </li>
								<li class="col-lg-6 mb-2"> <a href="#" class="btn btn-country btn-lg btn-block"> <span class="country-selector"><img alt="" src="{{asset('build/assets/img/flags/canada.jpg')}}" class="me-3 language"></span>Canada </a> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Country-selector modal-->

			<!-- Message Modal -->
			<div class="modal fade" id="chatModal" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog modal-dialog-right chatbox" role="document">
					<div class="modal-content chat radius-7 border-0">
						<div class="card overflow-hidden mb-0 border-0">
							<!-- action-header -->
							<div class="action-header clearfix flex-between">
								<div class="float-start hidden-xs d-flex align-items-center flex-1">
									<div class="avatar avatar-md rounded-circle">
										<img src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle" alt="img">
									</div>
									<div class="ms-2 mt-0">
										<p class="tx-20 text-white mb-0 font-weight-semibold">Sarah Syd</p>
										<span class="me-3 text-white tx-11 op-8">active now</span>
									</div>
								</div>
								<div class="btn-list">
									<a href="javascript:void(0)" class="btn btn-sm btn-def white text-white" data-bs-toggle="modal" data-bs-target="#audioModal"><i class="fe fe-phone"></i></a>
									<a href="javascript:void(0)" class="btn btn-sm btn-def white text-white" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="fe fe-video"></i></a>
									<a href="javascript:void(0)" class="btn btn-sm btn-def white text-white" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
									<ul class="dropdown-menu">
										<li><a href="javascript:void(0)" class="dropdown-item"><i class="fe fe-user me-1"></i> View profile</a></li>
										<li><a href="javascript:void(0)" class="dropdown-item"><i class="fe fe-user-plus me-1"></i>Add friends</a></li>
										<li><a href="javascript:void(0)" class="dropdown-item"><i class="fe fe-plus me-1"></i> Add to group</a></li>
										<li><a href="javascript:void(0)" class="dropdown-item"><i class="fe fe-minus me-1"></i> Clear chat</a></li>
										<li><a href="javascript:void(0)" class="dropdown-item"><i class="fe fe-slash me-1"></i> Block</a></li>
									</ul>
									<a href="javascript:void(0)" class="btn btn-sm btn-def white text-white" data-bs-dismiss="modal"><i class="fe fe-x-circle"></i></a>
								</div>
							</div>
							<!-- action-header end -->

							<!-- msg_card_body -->
							<div class="card-body msg_card_body">
								<div class="chat-box-single-line">
									<span class="timestamp">Today</span>
								</div>
								<div class="d-flex justify-content-start chat_block">
									<div class="me-1 d-flex align-items-end">
										<div class="avatar avatar-sm">
											<img src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle" alt="img">
										</div>
									</div>
									<div class="msg_block">
										<div class="msg_container">
											<div class="msg_cotainer-main">
												<span>Hi there! How are you?</span>
											</div>
											<span class="tx-10 tx-muted msg_time">8:10 AM</span>
										</div>
										<div class="msg_container">
											<div class="msg_cotainer-main">
												<span> Hey I'm Waiting for your reply.</span>
											</div>
											<div class="msg_cotainer-main">
												<span>I've to go to outside....</span>
											</div>
											<span class="tx-10 tx-muted msg_time">8:35 AM</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-end chat_block">
									<div class="msg_block_send">
										<div class="msg_container_send">
											<div class="msg_cotainer_send-main">
												<span>Hi, I am coming there in few minutes. Please wait!</span>
											</div>
											<span class="msg_time_send">8:38 AM</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-start chat_block">
									<div class="me-1 d-flex align-items-end">
										<div class="avatar avatar-sm">
											<img src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle" alt="img">
										</div>
									</div>
									<div class="msg_block">
										<div class="msg_container">
											<div class="msg_cotainer-main">
												<span>Ok Thanks!</span>
											</div>
											<div class="msg_cotainer-main">
												<span>I'm waiting for your message.</span>
											</div>
											<span class="tx-10 tx-muted msg_time">8:39 AM</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-end chat_block">
									<div class="msg_block_send">
										<div class="msg_container_send">
											<div class="msg_cotainer_send-main">
												<span>Hey, I am at Coffee shop you said</span>
											</div>
											<div class="msg_cotainer_send-main">
												<span>I can't see you here.</span>
											</div>
											<div class="msg_cotainer_send-main">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0)" class="btn btn-sm btn-def white"><i class="fe fe-play-circle"></i></a>
													<span class="mx-2">
														<svg  width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="#7987a1" class="color000 svgShape"></path></svg></g></svg>
														<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="#7987a1" class="color000 svgShape"></path></svg></g></svg>
														<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="#7987a1" class="color000 svgShape"></path></svg></g></svg>
														<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="#7987a1" class="color000 svgShape"></path></svg></g></svg>
														<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="#7987a1" class="color000 svgShape"></path></svg></g></svg>
														<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="#7987a1" class="color000 svgShape"></path></svg></g></svg>
														<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="#7987a1" class="color000 svgShape"></path></svg></g></svg>
														<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="#7987a1" class="color000 svgShape"></path></svg></g></svg>
														<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="#7987a1" class="color000 svgShape"></path></svg></g></svg>
														<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="#7987a1" class="color000 svgShape"></path></svg></g></svg>
													</span>
													<a href="javascript:void(0)" class="btn btn-sm btn-def white"><i class="fe fe-download"></i></a>
												</div>
											</div>
											<span class="msg_time_send">9:15 AM</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-start chat_block">
									<div class="me-1 d-flex align-items-end">
										<div class="avatar avatar-sm">
											<img src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle" alt="img">
										</div>
									</div>
									<div class="msg_block">
										<div class="msg_container">
											<div class="msg_cotainer-main">
												<span>I just went to vegetable store.</span>
											</div>
											<div class="msg_cotainer-main">
												<span>You can come here or wait for just 5 min</span>
											</div>
											<span class="tx-10 tx-muted msg_time">9:15 AM</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-end chat_block">
									<div class="msg_block_send">
										<div class="msg_container_send">
											<div class="msg_cotainer_send-main">
												<span>Ok then I'll wait...</span>
											</div>
											<div class="msg_cotainer_send-main">
												<span>just call me or come inside to coffee shop when you came by</span>
											</div>
											<span class="msg_time_send">9:15 AM</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-start chat_block">
									<div class="me-1 d-flex align-items-end">
										<div class="avatar avatar-sm">
											<img src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle" alt="img">
										</div>
									</div>
									<div class="msg_block">
										<div class="msg_container">
											<div class="msg_cotainer-main">
												<span>Deal... Bye</span>
											</div>
											<div class="msg_cotainer-main">
												<span>Enjoy your coffee</span>
											</div>
											<span class="tx-10 tx-muted msg_time">9:16 AM</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-end chat_block">
									<div class="msg_block_send">
										<div class="msg_container_send">
											<div class="msg_cotainer_send-main">
												<span>Definitely and Bye...</span>
											</div>
											<span class="msg_time_send">9:17 AM</span>
										</div>
										<div class="msg_container_send">
											<div class="msg_cotainer_send-main media-files">
												<img src="{{asset('build/assets/img/ecommerce/30.jpg')}}" alt="img">
											</div>
											<span class="msg_time_send">9:30 AM</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-start chat_block">
									<div class="me-1 d-flex align-items-end">
										<div class="avatar avatar-sm">
											<img src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle" alt="img">
										</div>
									</div>
									<div class="msg_block">
										<div class="msg_container">
											<div class="msg_cotainer-main">
												<span>I'm in coffee shop..</span>
											</div>
											<span class="tx-10 tx-muted msg_time">9:45 AM</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-end chat_block">
									<div class="msg_block_send">
										<div class="msg_container_send">
											<div class="msg_cotainer_send-main">
												<span>come to 8th number table</span>
											</div>
											<span class="msg_time_send">9:46 AM</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-start chat_block">
									<div class="me-1 d-flex align-items-end">
										<div class="avatar avatar-sm">
											<img src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle" alt="img">
										</div>
									</div>
									<div class="msg_block">
										<div class="msg_container">
											<div class="msg_cotainer-main">
												<span>Ok.. coming...</span>
											</div>
											<span class="tx-10 tx-muted msg_time">9:46 AM</span>
										</div>
									</div>
								</div>
							</div>
							<!-- msg_card_body end -->

							<!-- card-footer -->
							<div class="card-footer">
								<div class="form-group mb-0 d-flex">
									<div class="input-group pos-relative">
										<input type="text" class="form-control radius-4" placeholder="Type something here...">
										<div class="chat_input_icons">
											<a href="javascript:void(0)" class="tx-muted me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="emoji"><i class="ti-face-smile"></i></a>
											<a href="javascript:void(0)" class="tx-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="attach files"><i class="fe fe-paperclip"></i></a>
										</div>
									</div>
									<button type="button" class="btn btn-primary rounded-circle ms-2">
										<i class="far fa-paper-plane" aria-hidden="true"></i>
									</button>
								</div>
							</div><!-- card-footer end -->
						</div>
					</div>
				</div>
			</div>
            <!-- /modal -->

			<!--Video Modal -->
			<div id="videoModal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Zem Video call</h5>
							<img src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="flex-center mt-4 p-2">
								<a class="btn btn-outline-primary rounded-circle ht-40 wd-40 flex-center" href="javascript:void(0);">
									<i class="fas fa-volume-up"></i>
								</a>
								<a class="btn btn-danger rounded-circle ht-50 wd-50 flex-center mx-3" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
									<i class="fas fa-phone"></i>
								</a>
								<a class="btn btn-outline-primary rounded-circle ht-40 wd-40 flex-center" href="javascript:void(0);">
									<i class="fas fa-microphone-slash"></i>
								</a>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div>
            <!-- modal -->

			<!-- Audio Modal -->
			<div id="audioModal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Zem Voice call</h5>
							<img src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="flex-center mt-4 p-2">
								<a class="btn btn-outline-primary rounded-circle ht-40 wd-40 flex-center" href="javascript:void(0);">
									<i class="fas fa-volume-up"></i>
								</a>
								<a class="btn btn-danger rounded-circle ht-50 wd-50 flex-center mx-3" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
									<i class="fas fa-phone"></i>
								</a>
								<a class="btn btn-outline-primary rounded-circle ht-40 wd-40 flex-center" href="javascript:void(0);">
									<i class="fas fa-microphone-slash"></i>
								</a>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div>
			<!-- modal -->
            