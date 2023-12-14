@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">CONTACTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Contacts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-12 col-xl-4">
							<div class="card">
								<div class="card-body p-0">
									<div class="p-3 border-bottom">
										<div class="d-flex align-items-center mb-3">
											<h5 class="mb-0">Contacts </h5>
											<div class="ms-auto d-flex align-items-center">
												<a href="javascript:void(0);" class="btn btn-sm btn-def tx-muted"><i class="fe fe-user-plus"></i></a>
												<a href="javascript:void(0);" class="btn btn-sm btn-def tx-muted ms-1"><i class="fe fe-settings"></i></a>
											</div>
										</div>
										<div class="input-group mb-0">
											<input type="text" class="form-control" placeholder="Name, Mobile Number...">
											<span class="input-group-append">
												<button class="btn ripple btn-primary" type="button">Search</button>
											</span>
										</div>
									</div>
									<div class="panel tabs-style2">
										<div class="panel-head p-3 border-bottom">
											<ul class="nav nav-tabs p-0 d-sm-flex d-block">
												<li class="nav-item flex-1 mb-sm-0 mb-2"><a class="nav-link active" data-bs-toggle="tab" href="#contactsTab1">Contacts</a></li>
												<li class="nav-item flex-1"><a class="nav-link" data-bs-toggle="tab" href="#contactsTab2">Groups</a></li>
											</ul>
										</div>
										<div class="panel-body border-0 p-0">
											<div class="main-contacts-list" id="mainContactList">
												<div class="tab-content">
													<div class="tab-pane active" id="contactsTab1">
														<div class="">
															<div class="mb-3">
																<p class="tx-24 tx-muted">A</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_1" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/10.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Annie Bella</h6>
																					<span class="tx-muted tx-12">+130-472027</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_2" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/5.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Anso Keta</h6>
																					<span class="tx-muted tx-12">+131-442427</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_3" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/2.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Alice Tuece</h6>
																					<span class="tx-muted tx-12">+130-472027</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="mb-3">
																<p class="tx-24 tx-muted">C</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_4" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/4.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Conce Noring</h6>
																					<span class="tx-muted tx-12">+120-676027</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_5" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/8.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Chris Anthem</h6>
																					<span class="tx-muted tx-12">+180-728468</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_6" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/10.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Col Fays</h6>
																					<span class="tx-muted tx-12">+190-928578</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_7" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/12.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Carmen Goah</h6>
																					<span class="tx-muted tx-12">+210-837612</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_8" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/14.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Clyde Stale</h6>
																					<span class="tx-muted tx-12">+310-155830</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="mb-3">
																<p class="tx-24 tx-muted">D</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_10" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/18.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Del Phineum</h6>
																					<span class="tx-muted tx-12">+320-585136</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_11" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/20.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Dee End</h6>
																					<span class="tx-muted tx-12">+310-651186</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_12" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/1.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Des Ignayshun</h6>
																					<span class="tx-muted tx-12">+310-817559</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_13" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/3.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Dave Allippa</h6>
																					<span class="tx-muted tx-12">+310-837687</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_14" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/5.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Dee Zynah</h6>
																					<span class="tx-muted tx-12">+310-928653</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_15" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/7.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Dulcie Veeta</h6>
																					<span class="tx-muted tx-12">+310-186170</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="mb-3">
																<p class="tx-24 tx-muted">E</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_16" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/18.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">En Tra</h6>
																					<span class="tx-muted tx-12">+130-452822</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_17" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/5.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Emma Watt</h6>
																					<span class="tx-muted tx-12">+210-771037</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="mb-3">
																<p class="tx-24 tx-muted">F</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_18" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/9.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Fos Ill</h6>
																					<span class="tx-muted tx-12">+170-795299</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="mb-3">
																<p class="tx-24 tx-muted">K</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_19" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/15.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Koen Low</h6>
																					<span class="tx-muted tx-12">+570-897259</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_20" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/17.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Kalp Eosn</h6>
																					<span class="tx-muted tx-12">+310-849587</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_21" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/19.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Kasse Osn</h6>
																					<span class="tx-muted tx-12">+510-426557</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_22" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/1.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Kasp Nale</h6>
																					<span class="tx-muted tx-12">+210-257825</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_23" class="nav-link active show p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/2.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Kristie Protens</h6>
																					<span class="tx-muted tx-12">+110-486158</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="mb-3">
																<p class="tx-24 tx-muted">M</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_24" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/10.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Mon Saow</h6>
																					<span class="tx-muted tx-12">+160-601175</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_25" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/15.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Man Go</h6>
																					<span class="tx-muted tx-12">+110-751591</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_26" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/20.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Maso Ole</h6>
																					<span class="tx-muted tx-12">+570-195269</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_27" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/2.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Mole Lee</h6>
																					<span class="tx-muted tx-12">+410-142583</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_28" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/6.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Min Gyl</h6>
																					<span class="tx-muted tx-12">+420-126397</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_29" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/11.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Marvo Chari</h6>
																					<span class="tx-muted tx-12">+210-217223</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_30" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/16.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Mava Aldu</h6>
																					<span class="tx-muted tx-12">+450-586188</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="mb-3">
																<p class="tx-24 tx-muted">N</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_31" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/3.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Ne Inte</h6>
																					<span class="tx-muted tx-12">+120-611273</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_32" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/7.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Natu Natu</h6>
																					<span class="tx-muted tx-12">+111-556573</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_33" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/12.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Noori Laow</h6>
																					<span class="tx-muted tx-12">+510-297284</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_34" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/17.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Nam Itha</h6>
																					<span class="tx-muted tx-12">+710-172981</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="mb-3">
																<p class="tx-24 tx-muted">O</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_35" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/4.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Or Ieo</h6>
																					<span class="tx-muted tx-12">+730-174077</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_36" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/8.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Oraio Naiah</h6>
																					<span class="tx-muted tx-12">+150-442528</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_37" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/13.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Ol Ammo</h6>
																					<span class="tx-muted tx-12">+430-775037</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="mb-3">
																<p class="tx-24 tx-muted">P</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_37" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/1.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Poo Lachi</h6>
																					<span class="tx-muted tx-12">+130-144779</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_38" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/3.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Pars Cel</h6>
																					<span class="tx-muted tx-12">+110-472126</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_39" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/6.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Pep Si</h6>
																					<span class="tx-muted tx-12">+100-175097</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_40" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/9.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Pati Dar</h6>
																					<span class="tx-muted tx-12">+110-145993</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="mb-0">
																<p class="tx-24 tx-muted">R</p>
																<ul class="nav flex-column">
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_41" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/12.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Ram Esh</h6>
																					<span class="tx-muted tx-12">+410-579116</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_42" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/15.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Rakool Prit</h6>
																					<span class="tx-muted tx-12">+121-275087</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																	<li class="nav-item contact-item flex-1 mb-3">
																		<a href="#contact_43" class="nav-link p-0" data-bs-toggle="tab">
																			<div class="d-flex">
																				<div class="avatar"><img src="{{asset('build/assets/img/users/18.jpg')}}" alt="img" class="rounded-circle"></div>
																				<div class="flex-1 ms-2">
																					<h6 class="mb-1 text-body">Remo Mane</h6>
																					<span class="tx-muted tx-12">+111-348913</span>
																				</div>
																			</div>
																		</a>
																		<div class="contact_links d-none d-sm-block">
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
																			<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="contactsTab2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-8">
							<div class="tab-content">
								<div class="tab-pane active" id="contact_23">
									<div class="card">
										<div class="card-body">
											<div class="d-sm-flex d-block align-items-center mb-3">
												<div class="avatar-status avatar-lg">
													<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}">
												</div>
												<div class="flex-1">
													<div class="d-sm-flex d-block mt-3 mt-sm-0">
														<div class="mg-sm-s-20">
															<h5 class="mg-b-5">Kristie Protens</h5>
															<p class="mb-0 tx-muted tx-12">Web Designer</p>
														</div>
														<div class="ms-auto btn-list d-flex mt-3 mt-sm-0">
															<a href="javascript:void(0);" class="btn btn-primary-light btn-icon" data-placement="top" data-bs-toggle="tooltip" title="Edit Profile"><i class="fe fe-edit"></i></a>
															<a href="javascript:void(0);" class="btn btn-success-light btn-icon" data-placement="top" data-bs-toggle="tooltip" title="Delete Profile"><i class="fe fe-trash-2"></i></a>
															<a href="javascript:void(0);" class="btn btn-danger-light btn-icon" data-placement="top" data-bs-toggle="tooltip" title="Add Favorite"><i class="fe fe-star"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="btn-list d-flex contact-btn-list mb-3">
												<a href="javascript:void(0);" class="btn btn-sm border rounded-circle btn-icon tx-inverse" data-bs-toggle="tooltip" title="Call"><i class="fe fe-phone tx-14-f"></i></a>
												<a href="javascript:void(0);" class="btn btn-sm border rounded-circle btn-icon tx-inverse" data-bs-toggle="tooltip" title="Video"><i class="fe fe-video tx-14-f"></i></a>
												<a href="javascript:void(0);" class="btn btn-sm border rounded-circle btn-icon tx-inverse" data-bs-toggle="tooltip" title="message"><i class="fe fe-message-square tx-14-f"></i></a>
												<a href="javascript:void(0);" class="btn btn-sm border rounded-circle btn-icon tx-inverse" data-bs-toggle="tooltip" title="Add to Group"><i class="fe fe-user-plus tx-14-f"></i></a>
												<a href="javascript:void(0);" class="btn btn-sm border rounded-circle btn-icon tx-inverse" data-bs-toggle="tooltip" title="Block"><i class="fe fe-slash tx-14-f"></i></a>
											</div>
											<div class="pb-2 mb-3 border-bottom-dashed">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-2">
															<label class="tx-muted tx-14">Status </label>
														</div>
														<div class="col-xl-10">
															<p class="mb-0 tx-14">Online</p>
														</div>
													</div>
												</div>
												<div class="form-group mb-0">
													<div class="row">
														<div class="col-xl-2">
															<label class="tx-muted tx-14">About </label>
														</div>
														<div class="col-xl-10">
															<p class="mb-0 tx-14">Amet sea amet rebum at kasd. Ea dolor eirmod consetetur sit duo gubergren justo, sadipscing lorem sit et elitr. Rebum.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="pb-2 mb-3 border-bottom-dashed">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-2">
															<label class="tx-muted tx-14">Full Name </label>
														</div>
														<div class="col-xl-10">
															<p class="mb-0 tx-14">Karolina Kristie Protens</p>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-2">
															<label class="tx-muted tx-14">Email </label>
														</div>
														<div class="col-xl-10">
															<p class="mb-1 tx-14">kristie@email.com <span class="badge badge-sm bg-custom tx-muted rounded-pill ms-3">Primary</span> </p>
															<p class="mb-0 tx-14">kri.stie@gmail.com</p>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-2">
															<label class="tx-muted tx-14">Contact </label>
														</div>
														<div class="col-xl-10">
															<p class="mb-1 tx-14">+110-15975375</p>
															<p class="mb-0 tx-14">+110-45379314 <span class="badge badge-sm bg-custom tx-muted rounded-pill ms-3">Primary</span> </p>
														</div>
													</div>
												</div>
												<div class="form-group mb-0">
													<div class="row">
														<div class="col-xl-2">
															<label class="tx-muted tx-14">Work</label>
														</div>
														<div class="col-xl-10">
															<p class="mb-1 tx-14">+(210)-11965772</p>
														</div>
													</div>
												</div>
											</div>
											<div class="pb-0">
												<div class="form-group mb-0">
													<div class="row">
														<div class="col-xl-2">
															<label class="tx-muted tx-14">Total Call Duration</label>
														</div>
														<div class="col-xl-10">
															<p class="mb-1 tx-14">20 hrs : 43 mins : 23s</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row" id="contact-row">
								<div class="col-xl-12">
									<h5 class="mb-3 tx-muted">Recent Contacts</h5>
								</div>
								<div class="col-xxl-4 col-md-6 col-sm-12">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3 border-bottom">
												<div class="d-flex">
													<div class="flex-1 d-flex align-items-center">
														<div class="me-2">
															<img src="{{asset('build/assets/img/users/12.jpg')}}" alt="img" class="avatar rounded-circle">
														</div>
														<div class="flex-1">
															<h6 class="mg-b-5">Alphen Libbe</h6>
															<p class="mb-0 tx-muted tx-11">Web Designer</p>
														</div>
													</div>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu tx-13">
															<a class="dropdown-item" href="javascript:void(0);">Action</a>
															<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														</div>
													</div>
												</div>
											</div>
											<div class="p-3">
												<div class="d-flex align-items-center">
													<p class="mb-0">+110-3893679</p>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-4 col-md-6 col-sm-12">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3 border-bottom">
												<div class="d-flex">
													<div class="flex-1 d-flex align-items-center">
														<div class="me-2">
															<img src="{{asset('build/assets/img/users/2.jpg')}}" alt="img" class="avatar rounded-circle">
														</div>
														<div class="flex-1">
															<h6 class="mg-b-5">Barboosa Barsi</h6>
															<p class="mb-0 tx-muted tx-11">Excecutive</p>
														</div>
													</div>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu tx-13">
															<a class="dropdown-item" href="javascript:void(0);">Action</a>
															<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														</div>
													</div>
												</div>
											</div>
											<div class="p-3">
												<div class="d-flex align-items-center">
													<p class="mb-0">+110-7853379</p>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-4 col-md-6 col-sm-12">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3 border-bottom">
												<div class="d-flex">
													<div class="flex-1 d-flex align-items-center">
														<div class="me-2">
															<img src="{{asset('build/assets/img/users/14.jpg')}}" alt="img" class="avatar rounded-circle">
														</div>
														<div class="flex-1">
															<h6 class="mg-b-5">Cuk Kumbar</h6>
															<p class="mb-0 tx-muted tx-11">Consultant</p>
														</div>
													</div>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu tx-13">
															<a class="dropdown-item" href="javascript:void(0);">Action</a>
															<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														</div>
													</div>
												</div>
											</div>
											<div class="p-3">
												<div class="d-flex align-items-center">
													<p class="mb-0">+110-4853672</p>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-4 col-md-6 col-sm-12">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3 border-bottom">
												<div class="d-flex">
													<div class="flex-1 d-flex align-items-center">
														<div class="me-2">
															<img src="{{asset('build/assets/img/users/4.jpg')}}" alt="img" class="avatar rounded-circle">
														</div>
														<div class="flex-1">
															<h6 class="mg-b-5">Sodi Yum</h6>
															<p class="mb-0 tx-muted tx-11">Designer</p>
														</div>
													</div>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu tx-13">
															<a class="dropdown-item" href="javascript:void(0);">Action</a>
															<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														</div>
													</div>
												</div>
											</div>
											<div class="p-3">
												<div class="d-flex align-items-center">
													<p class="mb-0">+110-3893679</p>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-4 col-md-6 col-sm-12">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3 border-bottom">
												<div class="d-flex">
													<div class="flex-1 d-flex align-items-center">
														<div class="me-2">
															<img src="{{asset('build/assets/img/users/16.jpg')}}" alt="img" class="avatar rounded-circle">
														</div>
														<div class="flex-1">
															<h6 class="mg-b-5">Tort Oise</h6>
															<p class="mb-0 tx-muted tx-11">Developer</p>
														</div>
													</div>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu tx-13">
															<a class="dropdown-item" href="javascript:void(0);">Action</a>
															<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														</div>
													</div>
												</div>
											</div>
											<div class="p-3">
												<div class="d-flex align-items-center">
													<p class="mb-0">+110-7893473</p>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-4 col-md-6 col-sm-12">
									<div class="card">
										<div class="card-body p-0">
											<div class="p-3 border-bottom">
												<div class="d-flex">
													<div class="flex-1 d-flex align-items-center">
														<div class="me-2">
															<img src="{{asset('build/assets/img/users/6.jpg')}}" alt="img" class="avatar rounded-circle">
														</div>
														<div class="flex-1">
															<h6 class="mg-b-5">Vamp Aire</h6>
															<p class="mb-0 tx-muted tx-11">Analyst</p>
														</div>
													</div>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu tx-13">
															<a class="dropdown-item" href="javascript:void(0);">Action</a>
															<a class="dropdown-item" href="javascript:void(0);">Another action</a>
															<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
														</div>
													</div>
												</div>
											</div>
											<div class="p-3">
												<div class="d-flex align-items-center">
													<p class="mb-0">+110-4268713</p>
													<div class="ms-auto">
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-message-square tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-phone tx-15"></i></a>
														<a href="javascript:void(0);" class="btn btn-def btn-sm tx-muted"><i class="fe fe-video tx-15"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- End Row -->

@endsection

@section('scripts')

		<!-- Contact js -->
		@vite('resources/assets/js/contact.js')

@endsection
