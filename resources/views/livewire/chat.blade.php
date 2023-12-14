@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">CHAT</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chat</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm mb-4">
						<div class="col-xl-12">
							<div class="row">
								<div class="col-xxl-3 col-lg-12 col-xl-6">
									<div class="card">
										<div class="main-content-app">
											<div class="main-content-left main-content-left-chat overflow-hidden">
												<div class="panel tabs-style2">
													<div class="panel-head p-3 border-bottom">
														<ul class="nav nav-tabs p-0">
															<li class="nav-item flex-1"><a class="nav-link active" data-bs-toggle="tab" href="javascript:void(0);">Recents</a></li>
															<li class="nav-item flex-1"><a class="nav-link" data-bs-toggle="tab" href="javascript:void(0);">Groups</a></li>
															<li class="nav-item flex-1"><a class="nav-link" data-bs-toggle="tab" href="javascript:void(0);">Calls</a></li>
														</ul>
													</div>
												</div>
												<div class="main-chat-list" id="ChatList">
													<div class="panel-body p-0 border-0">
														<div class="tab-content">
															<div class="tab-pane active" id="style2tab1">
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar avatar-status"><img alt="" src="{{asset('build/assets/img/users/5.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Socrates Itumay</h6> <span class="tx-muted tx-11 align-self-start min-w-fit-content">2 hr</span>
																		</div>
																		<p class="mb-0 tx-12">Consetetur sanctus consetetur amet amet stet,.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar"><img alt="" src="{{asset('build/assets/img/users/2.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Eos Tempor</h6> <span class="tx-muted tx-11">3 hr</span>
																		</div>
																		<p class="mb-0 tx-12">Ipsum lorem kasd sed labore sed elitr.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed selected">
																	<div class="mg-e-10">
																		<span class="avatar avatar-status"><img alt="" src="{{asset('build/assets/img/users/5.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Ut Nonumy</h6> <span class="tx-muted tx-11">4 hr</span>
																		</div>
																		<p class="mb-0 tx-12">Erat labore elitr takimata sea dolor. Et duo takimata consetetur.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar avatar-status"><img alt="" src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Ipsum Et</h6> <span class="tx-muted tx-11">5 hr</span>
																		</div>
																		<p class="mb-0 tx-12">Aliquyam justo diam eirmod rebum diam. Dolores dolores dolor justo.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar"><img alt="" src="{{asset('build/assets/img/users/3.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Et Kasd</h6> <span class="tx-muted tx-11">3 hr</span>
																		</div>
																		<p class="mb-0 tx-12">Sit takimata sanctus takimata takimata et ipsum no. Eos duo elitr.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar"><img alt="" src="{{asset('build/assets/img/users/4.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Dolor Dlita</h6> <span class="tx-muted tx-11">4 hr</span>
																		</div>
																		<p class="mb-0 tx-12">Erat clita gubergren sit labore. Dolor labore eirmod takimata diam.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar"><img alt="" src="{{asset('build/assets/img/users/4.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Voluptua Ipsum</h6> <span class="tx-muted tx-11">1 D</span>
																		</div>
																		<p class="mb-0 tx-12">Stet erat diam lorem ut ea ut ut at. At dolor dolore.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar avatar-status"><img alt="" src="{{asset('build/assets/img/users/5.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Socrates Itumay</h6> <span class="tx-muted tx-11">1 D</span>
																		</div>
																		<p class="mb-0 tx-12">Consetetur sanctus consetetur amet amet stet,.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar"><img alt="" src="{{asset('build/assets/img/users/2.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Eos Tempor</h6> <span class="tx-muted tx-11">2 D</span>
																		</div>
																		<p class="mb-0 tx-12">Ipsum lorem kasd sed labore sed elitr.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar avatar-status"><img alt="" src="{{asset('build/assets/img/users/5.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Ut Nonumy</h6> <span class="tx-muted tx-11">2 D</span>
																		</div>
																		<p class="mb-0 tx-12">Erat labore elitr takimata sea dolor. Et duo takimata consetetur.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar avatar-status"><img alt="" src="{{asset('build/assets/img/users/6.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Ipsum Et</h6> <span class="tx-muted tx-11">2 D</span>
																		</div>
																		<p class="mb-0 tx-12">Aliquyam justo diam eirmod rebum diam. Dolores dolores dolor justo.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar"><img alt="" src="{{asset('build/assets/img/users/3.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Et Kasd</h6> <span class="tx-muted tx-11">1 W</span>
																		</div>
																		<p class="mb-0 tx-12">Sit takimata sanctus takimata takimata et ipsum no. Eos duo elitr.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
																	<div class="mg-e-10">
																		<span class="avatar"><img alt="" src="{{asset('build/assets/img/users/4.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Dolor Dlita</h6> <span class="tx-muted tx-11">4 hr</span>
																		</div>
																		<p class="mb-0 tx-12">Erat clita gubergren sit labore. Dolor labore eirmod takimata diam.</p>
																	</div>
																</div>
																<div class="chat-item d-flex pd-x-13 py-3">
																	<div class="mg-e-10">
																		<span class="avatar"><img alt="" src="{{asset('build/assets/img/users/4.jpg')}}" class="rounded-circle"></span>
																	</div>
																	<div class="flex-1">
																		<div class="flex-between mb-1">
																			<h6 class="mb-0">Voluptua Ipsum</h6> <span class="tx-muted tx-11">1 W</span>
																		</div>
																		<p class="mb-0 tx-12">Stet erat diam lorem ut ea ut ut at. At dolor dolore.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="col-lg-12 col-xxl-6 col-xl-6">
									<div class="card">
										<div class="main-content-app">

											<div class="main-content-body main-content-body-chat">
												<div class="main-chat-header">
													<div class="main-header-arrow me-3">
														<a href="javascript:void(0);" class="tx-inverse" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
													</div>
													<div class="mg-e-10">
														<span class="avatar"><img alt="" src="{{asset('build/assets/img/users/9.jpg')}}" class="rounded-circle"></span>
													</div>
													<div class="flex-1">
														<div class="flex-between d-block d-sm-flex">
															<div>
																<h5 class="mb-0">Voluptua Ipsum</h5>
																<span class="tx-muted tx-12">active 2 min ago</span>
															</div>
															<div class="btn-list d-flex align-items-center ms-auto">
																<a class="btn btn-sm btn-def tx-muted" href="javascript:void(0);" data-bs-toggle="tooltip" title="Call"><i class="fe fe-phone"></i></a>
																<a class="btn btn-sm btn-def tx-muted" href="javascript:void(0);" data-bs-toggle="tooltip" title="Delete Chat"><i class="fe fe-trash"></i></a>
																<a class="btn btn-sm btn-def tx-muted" href="javascript:void(0);" data-bs-toggle="tooltip" title="View Info"><i class="fe fe-alert-circle"></i></a>
															</div>
														</div>
													</div>
												</div><!-- main-chat-header -->
												<div class="main-chat-body" id="ChatBody">
													<div class="content-inner chat">
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
																		<span>Hi, I'll catch you in few  minutes. Please wait!</span>
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
																				<svg  width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
																				<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
																				<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
																				<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
																				<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
																				<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
																				<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
																				<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
																				<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
																				<svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
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
												</div>
												<div class="main-chat-footer br-bs-10 br-be-10">
													<input class="form-control radius-7" placeholder="Type your message here..." type="text">
													<a class="btn btn-outline-primary btn-icon me-2" data-bs-toggle="tooltip" href="javascript:void(0);" title="Attach Files"><i class="fe fe-paperclip"></i></a>
													<a class="btn btn-primary btn-icon" href="javascript:void(0);"><i class="fe fe-send"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-xxl-3 col-xl-12">
									<div class="card overflow-hidden">
										<div class="main-content-app">
											<div class="card-body p-0 chat-main">
												<div class="float-end ms-auto m-4">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
												<div class="text-center border-bottom chat-image p-4">
													<div class="avatar-xl avatar-status offline mb-3 mx-auto">
														<a href="{{url('contacts')}}"><img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}"></a>
													</div>
													<a href="{{url('contacts')}}"><h5 class="mb-1">Voluptua Ipsum</h5></a>
													<p class="tx-muted mt-0 mb-1 pt-0 tx-13">UI/UX Designer</p>
													<p class="tx-muted mt-0 pt-0 tx-13 mb-0">+773(161)-123-567</p>
												</div>
												<div class="p-4 border-bottom-dashed">
													<h6 class="mb-3">Contact Details :</h6>
													<div class="d-flex mg-b-15">
														<span class="avatar-sm rounded-circle bg-primary-transparent"><i class="fe fe-mail tx-primary tx-14"></i></span>
														<div class="flex-1 ms-2">
															<p class="mb-1 font-weight-semibold tx-13">Email:</p>
															<span class="tx-muted tx-12">volupipsum @demo.com</span>
														</div>
													</div>
													<div class="d-flex">
														<span class="avatar-sm rounded-circle bg-warning-transparent"><i class="fe fe-map-pin tx-warning tx-14"></i></span>
														<div class="flex-1 ms-2">
															<p class="mb-1 font-weight-semibold tx-13">Address:</p>
															<span class="tx-muted tx-12">2nd street,<br>houston texas,<br>united states.</span>
														</div>
													</div>
												</div>
												<div class="p-4">
													<h6 class="mb-3">Shared Files :</h6>

													<div class="d-flex mb-3">
														<div class="me-2">
															<div class="pd-10 border br-5 tx-muted">
																<i class="fa fa-folder-open tx-16"></i>
															</div>
														</div>
														<div class="flex-1">
															<div class="d-flex">
																<div class="mb-0">
																	<p class="mb-1 font-weight-semibold tx-13">Document</p>
																	<span class="tx-muted tx-12">1.2mb</span>
																</div>
																<div class="ms-auto">
																	<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-download"></i></a>
																</div>
															</div>
														</div>
													</div>
													<div class="d-flex mb-3">
														<div class="me-2">
															<div class="pd-10 border br-5 tx-muted">
																<i class="fa fa-image tx-16"></i>
															</div>
														</div>
														<div class="flex-1">
															<div class="d-flex">
																<div class="mb-0">
																	<p class="mb-1 font-weight-semibold tx-13">Image</p>
																	<span class="tx-muted tx-12">5.2mb</span>
																</div>
																<div class="ms-auto">
																	<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-download"></i></a>
																</div>
															</div>
														</div>
													</div>
													<div class="d-flex mb-0">
														<div class="me-2">
															<div class="pd-10 border br-5 tx-muted">
																<i class="fa fa-play tx-16"></i>
															</div>
														</div>
														<div class="flex-1">
															<div class="d-flex">
																<div class="mb-0">
																	<p class="mb-1 font-weight-semibold tx-13">Video</p>
																	<span class="tx-muted tx-12">21.2mb</span>
																</div>
																<div class="ms-auto">
																	<a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-download"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row -->

@endsection

@section('scripts')

		<!-- Ionicons js -->
		<script src="{{asset('build/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>

		<!--Internal  lightslider js -->
		<script src="{{asset('build/assets/plugins/lightslider/js/lightslider.min.js')}}"></script>

		<!--Internal  Chat js -->
		@vite('resources/assets/js/chat.js')

@endsection
