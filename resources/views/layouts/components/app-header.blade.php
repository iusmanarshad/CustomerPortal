

				<div class="main-header side-header sticky nav nav-item">
					<div class=" main-container container-fluid">
						<div class="main-header-left">
							<div class="responsive-logo">
								<a href="{{url('index')}}" class="header-logo">
									<img src="{{asset('build/assets/img/brand/logo-white.png')}}" class="mobile-logo dark-logo-1" alt="logo">
									<img src="{{asset('build/assets/img/brand/logo-white-1.png')}}" class="mobile-logo-1 dark-logo-1" alt="logo">
								</a>
							</div>
							<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
								<!-- <div class="icon"></div> -->
								<a class="open-toggle" href="javascript:void(0)"><i
										class="header-icon fe fe-align-left"></i></a>
								<a class="close-toggle" href="javascript:void(0)"><i class="header-icon fe fe-x"></i></a>
							</div>
							<div class="logo-horizontal">
								<a href="{{url('index')}}" class="header-logo">
									<img src="{{asset('build/assets/img/brand/logo-white.png')}}" class="mobile-logo dark-logo-1" alt="logo">
									<img src="{{asset('build/assets/img/brand/logo-white-1.png')}}" class="mobile-logo-1 dark-logo-1" alt="logo">
								</a>
							</div>
							<div class="main-header-center ms-4 d-sm-none d-md-none d-lg-block form-group">
								<input class="form-control radius-4" placeholder="Search..." type="search">
								<button class="btn br-te-4 br-be-4"><i class="fas fa-search"></i></button>
							</div>
						</div>
						<div class="main-header-right">
							<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
								data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
								aria-controls="navbarSupportedContent-4" aria-expanded="false"
								aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical"></span>
							</button>
							<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
								<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
									<ul class="nav nav-item header-icons navbar-nav-right ms-auto">
										<li class="dropdown nav-item">
											<a class="new nav-link" data-bs-target="#country-selector"
												data-bs-toggle="modal" href="javascript:void(0)"><svg class="ionicon header-icon-svgs"
													viewBox="0 0 512 512">
													<title>Language</title>
													<path
														d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48z"
														fill="none" stroke="currentColor" stroke-miterlimit="10"
														stroke-width="32" />
													<path
														d="M256 48c-58.07 0-112.67 93.13-112.67 208S197.93 464 256 464s112.67-93.13 112.67-208S314.07 48 256 48z"
														fill="none" stroke="currentColor" stroke-miterlimit="10"
														stroke-width="32" />
													<path
														d="M117.33 117.33c38.24 27.15 86.38 43.34 138.67 43.34s100.43-16.19 138.67-43.34M394.67 394.67c-38.24-27.15-86.38-43.34-138.67-43.34s-100.43 16.19-138.67 43.34"
														fill="none" stroke="currentColor" stroke-linecap="round"
														stroke-linejoin="round" stroke-width="32" />
													<path fill="none" stroke="currentColor" stroke-miterlimit="10"
														stroke-width="32" d="M256 48v416M464 256H48" />
												</svg></a>
										</li>
										<li class="dropdown nav-item">
											<a class="new nav-link theme-layout nav-link-bg layout-setting">
												<span class="dark-layout"><svg
														class="ionicon header-icon-svgs" viewBox="0 0 512 512">
														<title>Dark Theme</title>
														<path
															d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
															fill="none" stroke="currentColor" stroke-linecap="round"
															stroke-linejoin="round" stroke-width="32" />
													</svg></span>
												<span class="light-layout"><svg
														class="ionicon header-icon-svgs" viewBox="0 0 512 512">
														<title>Light Theme</title>
														<path fill="none" stroke="currentColor" stroke-linecap="round"
															stroke-miterlimit="10" stroke-width="32"
															d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94" />
														<circle cx="256" cy="256" r="80" fill="none" stroke="currentColor"
															stroke-linecap="round" stroke-miterlimit="10"
															stroke-width="32" />
													</svg></span>
											</a>
										</li>
										<li class="dropdown nav-item  main-header-shop">
											<a class="new nav-link" data-bs-toggle="dropdown" href="javascript:void(0)"><svg class="ionicon header-icon-svgs"
													viewBox="0 0 512 512">
													<title>Cart</title>
													<circle cx="176" cy="416" r="16" fill="none" stroke="currentColor"
														stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
													<circle cx="400" cy="416" r="16" fill="none" stroke="currentColor"
														stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
													<path fill="none" stroke="currentColor" stroke-linecap="round"
														stroke-linejoin="round" stroke-width="32"
														d="M48 80h64l48 272h256" />
													<path
														d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128"
														fill="none" stroke="currentColor" stroke-linecap="round"
														stroke-linejoin="round" stroke-width="32" />
												</svg><span class="badge bg-secondary-transparent tx-secondary header-badge">2</span></a>
											<div class="dropdown-menu">
												<div class="p-3 text-start border-bottom">
													<div class="d-flex align-items-center">
														<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Shopping
															Cart</h6>
														<a href="{{url('product-cart')}}"
															class="btn btn-sm btn-primary ms-auto my-auto float-end tx-13">View
															All</a>
													</div>
													<p class="mb-0 font-weight-semibold tx-muted tx-12">Total items: 5</p>
												</div>
												<ul class="list-unstyled main-message-list shopping-scroll">
													<li class="mb-0 pos-relative">
														<div class="d-flex pd-x-13 py-2 pos-relative">
															<a href="{{url('product-cart')}}" class="masked-link"></a>
															<div class="avatar-lg"><img src="{{asset('build/assets/img/ecommerce/2.jpg')}}"
																	alt="img" class="radius-4"></div>
															<div class="flex-1 ms-2">
																<p class="mb-0 tx-default tx-13 font-weight-semibold mb-0">Bluetooth Earbuds</p>
																<div class="d-flex justify-content-between">
																	<div class="mt-1">
																		<p class="mb-0 tx-default tx-12"><span
																				class="me-1 tx-muted">Color: </span>Blue</p>
																		<p class="mb-0 tx-default tx-12"><span
																				class="me-1 tx-muted">Quantity: </span>2</p>
																	</div>
																	<p
																		class="mb-0 font-weight-semibold tx-14 align-self-end">
																		Price: <span class="tx-secondary">$23</span></p>
																</div>
															</div>
														</div>
														<div class="pos-absolute t-10 r-10">
															<a href="javascript:void(0);" class="tx-muted"><i
																	class="fe fe-trash-2 tx-danger tx-15"></i></a>
														</div>
													</li>
													<li class="mb-0 pos-relative">
														<div class="d-flex pd-x-13 py-2 pos-relative">
															<a href="{{url('product-cart')}}" class="masked-link"></a>
															<div class="avatar-lg"><img src="{{asset('build/assets/img/ecommerce/4.jpg')}}"
																	alt="img" class="radius-4"></div>
															<div class="flex-1 ms-2">
																<p class="mb-0 tx-default tx-13 font-weight-semibold mb-0">Beautiful Pink Teddybear</p>
																<div class="d-flex justify-content-between">
																	<div class="mt-1">
																		<p class="mb-0 tx-default tx-12"><span
																				class="me-1 tx-muted">Color: </span>Pink</p>
																		<p class="mb-0 tx-default tx-12"><span
																				class="me-1 tx-muted">Quantity: </span>1</p>
																	</div>
																	<p
																		class="mb-0 font-weight-semibold tx-14 align-self-end">
																		Price: <span class="tx-secondary">$12</span></p>
																</div>
															</div>
														</div>
														<div class="pos-absolute t-10 r-10">
															<a href="javascript:void(0);" class="tx-muted"><i
																	class="fe fe-trash-2 tx-danger tx-15"></i></a>
														</div>
													</li>
													<li class="mb-0 pos-relative">
														<div class="d-flex pd-x-13 py-2 pos-relative">
															<a href="{{url('product-cart')}}" class="masked-link"></a>
															<div class="avatar-lg"><img src="{{asset('build/assets/img/ecommerce/3.jpg')}}"
																	alt="img" class="radius-4"></div>
															<div class="flex-1 ms-2">
																<p class="mb-0 tx-default tx-13 font-weight-semibold mb-0">Modern Chair</p>
																<div class="d-flex justify-content-between">
																	<div class="mt-1">
																		<p class="mb-0 tx-default tx-12"><span
																				class="me-1 tx-muted">Color: </span>white</p>
																		<p class="mb-0 tx-default tx-12"><span
																				class="me-1 tx-muted">Quantity: </span>3</p>
																	</div>
																	<p
																		class="mb-0 font-weight-semibold tx-14 align-self-end">
																		Price: <span class="tx-secondary">$38</span></p>
																</div>
															</div>
														</div>
														<div class="pos-absolute t-10 r-10">
															<a href="javascript:void(0);" class="tx-muted"><i
																	class="fe fe-trash-2 tx-danger tx-15"></i></a>
														</div>
													</li>
													<li class="mb-0 pos-relative">
														<div class="d-flex pd-x-13 py-2 pos-relative">
															<a href="{{url('product-cart')}}" class="masked-link"></a>
															<div class="avatar-lg"><img src="{{asset('build/assets/img/ecommerce/5.jpg')}}"
																	alt="img" class="radius-4"></div>
															<div class="flex-1 ms-2">
																<p class="mb-0 tx-default tx-13 font-weight-semibold mb-0">Professional Camera With Lens
																</p>
																<div class="d-flex justify-content-between">
																	<div class="mt-1">
																		<p class="mb-0 tx-default tx-12"><span
																				class="me-1 tx-muted">Color: </span>black</p>
																		<p class="mb-0 tx-default tx-12"><span
																				class="me-1 tx-muted">Quantity: </span>1</p>
																	</div>
																	<p
																		class="mb-0 font-weight-semibold tx-14 align-self-end">
																		Price: <span class="tx-secondary">$235</span></p>
																</div>
															</div>
														</div>
														<div class="pos-absolute t-10 r-10">
															<a href="javascript:void(0);" class="tx-muted"><i
																	class="fe fe-trash-2 tx-danger tx-15"></i></a>
														</div>
													</li>
													<li class="mb-0 pos-relative">
														<div class="d-flex pd-x-13 py-2 pos-relative">
															<a href="{{url('product-cart')}}" class="masked-link"></a>
															<div class="avatar-lg"><img src="{{asset('build/assets/img/ecommerce/1.jpg')}}"
																	alt="img" class="radius-4"></div>
															<div class="flex-1 ms-2">
																<p class="mb-0 tx-default tx-13 font-weight-semibold mb-0">Iconic Women's Dress</p>
																<div class="d-flex justify-content-between">
																	<div class="mt-1">
																		<p class="mb-0 tx-default tx-12"><span
																				class="me-1 tx-muted">Color: </span>red</p>
																		<p class="mb-0 tx-default tx-12"><span
																				class="me-1 tx-muted">Quantity: </span>1</p>
																	</div>
																	<p
																		class="mb-0 font-weight-semibold tx-14 align-self-end">
																		Price: <span class="tx-secondary">$32</span></p>
																</div>
															</div>
														</div>
														<div class="pos-absolute t-10 r-10">
															<a href="javascript:void(0);" class="tx-muted"><i
																	class="fe fe-trash-2 tx-danger tx-15"></i></a>
														</div>
													</li>
												</ul>
												<div class="text-center dropdown-footer">
													<a class="btn btn-primary btn-block text-center"
														href="{{url('check-out')}}">Proceed to checkout</a>
												</div>
											</div>
										</li>
										<li class="dropdown nav-item  main-header-message">
											<a class="new nav-link" data-bs-toggle="dropdown" href="javascript:void(0)"><svg class="ionicon header-icon-svgs"
													viewBox="0 0 512 512">
													<title>Messages</title>
													<rect x="48" y="96" width="416" height="320" rx="40" ry="40" fill="none"
														stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
														stroke-width="32" />
													<path fill="none" stroke="currentColor" stroke-linecap="round"
														stroke-linejoin="round" stroke-width="32"
														d="M112 160l144 112 144-112" />
												</svg><span class="badge bg-secondary-transparent tx-secondary header-badge">5</span></a>
											<div class="dropdown-menu">
												<div class="p-3 text-start border-bottom">
													<div class="d-flex align-items-center">
														<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Messages
														</h6>
														<a href="{{url('chat')}}"
															class="btn btn-sm btn-primary ms-auto my-auto float-end tx-13">View
															All</a>
													</div>
													<span class="tx-muted tx-11">You have 5 unread messages</span>
												</div>
												<ul class="list-unstyled main-message-list chat-scroll">
													<li class="mb-0">
														<div class="d-flex pd-x-13 py-2 pos-relative">
															<a href="{{url('chat')}}" class="masked-link"></a>
															<div class="mg-e-10">
																<span class="avatar-sm"><img alt=""
																		src="{{asset('build/assets/img/users/5.jpg')}}"
																		class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<div class="flex-between mb-1">
																	<p class="mb-0 tx-default tx-13 font-weight-semibold mb-0">Socrates Itumay</p> <span
																		class="tx-muted tx-11 align-self-start min-w-fit-content">2
																		hr</span>
																</div>
																<p class="mb-0 tx-12 tx-muted">Consetetur sanctus consetetur
																	amet amet stet,.</p>
															</div>
														</div>
													</li>
													<li class="mb-0">
														<div class="d-flex pd-x-13 py-2 pos-relative">
															<a href="{{url('chat')}}" class="masked-link"></a>
															<div class="mg-e-10">
																<span class="avatar-sm avatar-status"><img alt=""
																		src="{{asset('build/assets/img/users/1.jpg')}}"
																		class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<div class="flex-between mb-1">
																	<p class="mb-0 tx-default tx-13 font-weight-semibold mb-0">Sadipscing Et</p> <span
																		class="tx-muted tx-11 align-self-start min-w-fit-content">1
																		D</span>
																</div>
																<p class="mb-0 tx-12 tx-muted">Accusam amet ea voluptua
																	labore ipsum.</p>
															</div>
														</div>
													</li>
													<li class="mb-0">
														<div class="d-flex pd-x-13 py-2 pos-relative">
															<a href="{{url('chat')}}" class="masked-link"></a>
															<div class="mg-e-10">
																<span class="avatar-sm avatar-status"><img alt=""
																		src="{{asset('build/assets/img/users/9.jpg')}}"
																		class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<div class="flex-between mb-1">
																	<p class="mb-0 tx-default tx-13 font-weight-semibold mb-0">Ea Labore</p> <span
																		class="tx-muted tx-11 align-self-start min-w-fit-content">2
																		D</span>
																</div>
																<p class="mb-0 tx-12 tx-muted">Diam ea nonumy kasd eirmod
																	sed..</p>
															</div>
														</div>
													</li>
													<li class="mb-0">
														<div class="d-flex pd-x-13 py-2 pos-relative">
															<a href="{{url('chat')}}" class="masked-link"></a>
															<div class="mg-e-10">
																<span class="avatar-sm"><img alt=""
																		src="{{asset('build/assets/img/users/8.jpg')}}"
																		class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<div class="flex-between mb-1">
																	<p class="mb-0 tx-default tx-13 font-weight-semibold mb-0">Kasd Ipsum</p> <span
																		class="tx-muted tx-11 align-self-start min-w-fit-content">1
																		W</span>
																</div>
																<p class="mb-0 tx-12 tx-muted">Et diam aliquyam ut dolor
																	labore consetetur.</p>
															</div>
														</div>
													</li>
													<li class="mb-0">
														<div class="d-flex pd-x-13 py-2 pos-relative">
															<a href="{{url('chat')}}" class="masked-link"></a>
															<div class="mg-e-10">
																<span class="avatar-sm"><img alt=""
																		src="{{asset('build/assets/img/users/6.jpg')}}"
																		class="rounded-circle"></span>
															</div>
															<div class="flex-1">
																<div class="flex-between mb-1">
																	<p class="mb-0 tx-default tx-13 font-weight-semibold mb-0">Eirmod Emet</p> <span
																		class="tx-muted tx-11 align-self-start min-w-fit-content">2
																		W</span>
																</div>
																<p class="mb-0 tx-12 tx-muted">Est sea accusam no ea sea ea.
																</p>
															</div>
														</div>
													</li>
												</ul>
												<div class="text-center dropdown-footer">
													<a class="btn btn-primary btn-block text-center"
														href="javascript:void(0)">MARK ALL AS READ</a>
												</div>
											</div>
										</li>
										<li class="dropdown nav-item main-header-notification d-flex">
											<a class="new nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
												<svg class="ionicon header-icon-svgs"
													viewBox="0 0 512 512">
													<title>Shortcuts</title>
													<path
														d="M448 256L272 88v96C103.57 184 64 304.77 64 424c48.61-62.24 91.6-96 208-96v96z"
														fill="none" stroke="currentColor" stroke-linejoin="round"
														stroke-width="32" />
												</svg>
											</a>
											<div class="dropdown-menu">
												<div class="p-3 text-start border-bottom">
													<div class="d-flex align-items-center">
														<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Shortcuts
														</h6>
														<ul class="ah-actions actions align-items-center ms-auto d-flex">
															<li>
																<a href="javascript:void(0)" class="header-icon-svgs">
																	<i class="fe fe-edit"></i>
																</a>
															</li>
															<li>
																<a href="javascript:void(0)" class="header-icon-svgs">
																	<i class="fe fe-plus"></i>
																</a>
															</li>
														</ul>
													</div>
													<span class="tx-muted tx-11">At nonumy duo dolores ipsum.</span>
												</div>
												<ul class="list-unstyled main-shortcut-list text-center p-2">
													<li class="d-inline-block m-1">
														<a href="{{url('calendar')}}" class="p-3 dropdown-item border radius-4"
															data-bs-toggle="tooltip" data-bs-placement="top"
															title="calendar">
															<svg
																class="ionicon header-icon-svgs" viewBox="0 0 512 512">
																<title>calendar</title>
																<rect x="48" y="80" width="416" height="384" rx="48"
																	fill="none" stroke="currentColor"
																	stroke-linejoin="round" stroke-width="32" />
																<path fill="none" stroke="currentColor"
																	stroke-linecap="round" stroke-linejoin="round"
																	stroke-width="32"
																	d="M128 48v32M384 48v32M464 160H48M304 260l43.42-32H352v168M191.87 306.63c9.11 0 25.79-4.28 36.72-15.47a37.9 37.9 0 0011.13-27.26c0-26.12-22.59-39.9-47.89-39.9-21.4 0-33.52 11.61-37.85 18.93M149 374.16c4.88 8.27 19.71 25.84 43.88 25.84 28.59 0 52.12-15.94 52.12-43.82 0-12.62-3.66-24-11.58-32.07-12.36-12.64-31.25-17.48-41.55-17.48" />
															</svg>
														</a>
													</li>
													<li class="d-inline-block m-1">
														<a href="{{url('contacts')}}" class="p-3 dropdown-item border radius-4"
															data-bs-toggle="tooltip" data-bs-placement="top"
															title="contacts">
															<svg
																class="ionicon header-icon-svgs" viewBox="0 0 512 512">
																<title>contacts</title>
																<path
																	d="M402 168c-2.93 40.67-33.1 72-66 72s-63.12-31.32-66-72c-3-42.31 26.37-72 66-72s69 30.46 66 72z"
																	fill="none" stroke="currentColor" stroke-linecap="round"
																	stroke-linejoin="round" stroke-width="32" />
																<path
																	d="M336 304c-65.17 0-127.84 32.37-143.54 95.41-2.08 8.34 3.15 16.59 11.72 16.59h263.65c8.57 0 13.77-8.25 11.72-16.59C463.85 335.36 401.18 304 336 304z"
																	fill="none" stroke="currentColor" stroke-miterlimit="10"
																	stroke-width="32" />
																<path
																	d="M200 185.94c-2.34 32.48-26.72 58.06-53 58.06s-50.7-25.57-53-58.06C91.61 152.15 115.34 128 147 128s55.39 24.77 53 57.94z"
																	fill="none" stroke="currentColor" stroke-linecap="round"
																	stroke-linejoin="round" stroke-width="32" />
																<path
																	d="M206 306c-18.05-8.27-37.93-11.45-59-11.45-52 0-102.1 25.85-114.65 76.2-1.65 6.66 2.53 13.25 9.37 13.25H154"
																	fill="none" stroke="currentColor" stroke-linecap="round"
																	stroke-miterlimit="10" stroke-width="32" />
															</svg>
														</a>
													</li>
													<li class="d-inline-block m-1">
														<a href="{{url('file-manager')}}"
															class="p-3 dropdown-item border radius-4"
															data-bs-toggle="tooltip" data-bs-placement="top"
															title="file-manager">
															<svg
																class="ionicon header-icon-svgs" viewBox="0 0 512 512">
																<title>file-manager</title>
																<path
																	d="M440 432H72a40 40 0 01-40-40V120a40 40 0 0140-40h75.89a40 40 0 0122.19 6.72l27.84 18.56a40 40 0 0022.19 6.72H440a40 40 0 0140 40v240a40 40 0 01-40 40zM32 192h448"
																	fill="none" stroke="currentColor" stroke-linecap="round"
																	stroke-linejoin="round" stroke-width="32" />
															</svg>
														</a>
													</li>
													<li class="d-inline-block m-1">
														<a href="{{url('mail-inbox')}}" class="p-3 dropdown-item border radius-4"
															data-bs-toggle="tooltip" data-bs-placement="top" title="mail">
															<svg
																class="ionicon header-icon-svgs" viewBox="0 0 512 512">
																<title>mail</title>
																<rect x="48" y="96" width="416" height="320" rx="40" ry="40"
																	fill="none" stroke="currentColor" stroke-linecap="round"
																	stroke-linejoin="round" stroke-width="32" />
																<path fill="none" stroke="currentColor"
																	stroke-linecap="round" stroke-linejoin="round"
																	stroke-width="32" d="M112 160l144 112 144-112" />
															</svg>
														</a>
													</li>
													<li class="d-inline-block m-1">
														<a href="{{url('gallery')}}" class="p-3 dropdown-item border radius-4"
															data-bs-toggle="tooltip" data-bs-placement="top"
															title="gallery">
															<svg
																class="ionicon header-icon-svgs" viewBox="0 0 512 512">
																<title>gallery</title>
																<rect x="48" y="80" width="416" height="352" rx="48" ry="48"
																	fill="none" stroke="currentColor"
																	stroke-linejoin="round" stroke-width="32" />
																<circle cx="336" cy="176" r="32" fill="none"
																	stroke="currentColor" stroke-miterlimit="10"
																	stroke-width="32" />
																<path
																	d="M304 335.79l-90.66-90.49a32 32 0 00-43.87-1.3L48 352M224 432l123.34-123.34a32 32 0 0143.11-2L464 368"
																	fill="none" stroke="currentColor" stroke-linecap="round"
																	stroke-linejoin="round" stroke-width="32" />
															</svg>
														</a>
													</li>
													<li class="d-inline-block m-1">
														<a href="{{url('blog')}}" class="p-3 dropdown-item border radius-4"
															data-bs-toggle="tooltip" data-bs-placement="top" title="blog">
															<svg
																class="ionicon header-icon-svgs" viewBox="0 0 512 512">
																<title>blog</title>
																<path
																	d="M368 415.86V72a24.07 24.07 0 00-24-24H72a24.07 24.07 0 00-24 24v352a40.12 40.12 0 0040 40h328"
																	fill="none" stroke="currentColor"
																	stroke-linejoin="round" stroke-width="32" />
																<path
																	d="M416 464h0a48 48 0 01-48-48V128h72a24 24 0 0124 24v264a48 48 0 01-48 48z"
																	fill="none" stroke="currentColor"
																	stroke-linejoin="round" stroke-width="32" />
																<path fill="none" stroke="currentColor"
																	stroke-linecap="round" stroke-linejoin="round"
																	stroke-width="32"
																	d="M240 128h64M240 192h64M112 256h192M112 320h192M112 384h192" />
																<path
																	d="M176 208h-64a16 16 0 01-16-16v-64a16 16 0 0116-16h64a16 16 0 0116 16v64a16 16 0 01-16 16z" />
															</svg>
														</a>
													</li>
													<li class="d-inline-block m-1">
														<a href="{{url('shop')}}" class="p-3 dropdown-item border radius-4"
															data-bs-toggle="tooltip" data-bs-placement="top" title="shop">
															<svg
																class="ionicon header-icon-svgs" viewBox="0 0 512 512">
																<title>shop</title>
																<circle cx="176" cy="416" r="16" fill="none"
																	stroke="currentColor" stroke-linecap="round"
																	stroke-linejoin="round" stroke-width="32" />
																<circle cx="400" cy="416" r="16" fill="none"
																	stroke="currentColor" stroke-linecap="round"
																	stroke-linejoin="round" stroke-width="32" />
																<path fill="none" stroke="currentColor"
																	stroke-linecap="round" stroke-linejoin="round"
																	stroke-width="32" d="M48 80h64l48 272h256" />
																<path
																	d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128"
																	fill="none" stroke="currentColor" stroke-linecap="round"
																	stroke-linejoin="round" stroke-width="32" />
															</svg>
														</a>
													</li>
													<li class="d-inline-block m-1">
														<a href="{{url('form-elements')}}"
															class="p-3 dropdown-item border radius-4"
															data-bs-toggle="tooltip" data-bs-placement="top" title="forms">
															<svg
																class="ionicon header-icon-svgs" viewBox="0 0 512 512">
																<title>forms</title>
																<path
																	d="M416 221.25V416a48 48 0 01-48 48H144a48 48 0 01-48-48V96a48 48 0 0148-48h98.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62z"
																	fill="none" stroke="currentColor"
																	stroke-linejoin="round" stroke-width="32" />
																<path d="M256 56v120a32 32 0 0032 32h120" fill="none"
																	stroke="currentColor" stroke-linecap="round"
																	stroke-linejoin="round" stroke-width="32" />
															</svg>
														</a>
													</li>
												</ul>
												<div class="dropdown-footer">
													<a href="javascript:void(0)"
														class="btn btn-outline-primary btn-block"
														id="openAllBtn">OPEN ALL</a>
												</div>
											</div>
										</li>
										<li class="nav-item full-screen fullscreen-button">
											<a class="new nav-link full-screen-link" href="javascript:void(0)"><svg class="ionicon header-icon-svgs"
													viewBox="0 0 512 512">
													<title>Full Width</title>
													<path fill="none" stroke="currentColor" stroke-linecap="round"
														stroke-linejoin="round" stroke-width="32"
														d="M432 320v112H320M421.8 421.77L304 304M80 192V80h112M90.2 90.23L208 208M320 80h112v112M421.77 90.2L304 208M192 432H80V320M90.23 421.8L208 304" />
												</svg></a>
										</li>
										<li class="dropdown right-toggle">
											<a class="new nav-link nav-link pe-0" data-bs-toggle="sidebar-right"
												data-bs-target=".sidebar-right">
												<svg class="ionicon header-icon-svgs"
													viewBox="0 0 512 512">
													<title>Side Menu</title>
													<path fill="none" stroke="currentColor" stroke-linecap="round"
														stroke-miterlimit="10" stroke-width="32"
														d="M80 160h352M80 256h352M80 352h352" />
												</svg>
												<span class="pulse"></span>
											</a>
										</li>
										<li class="search-icon d-lg-none d-block">
											<form class="navbar-form" role="search">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search">
													<span class="input-group-btn">
														<button type="reset" class="btn btn-default">
															<i class="fas fa-times"></i>
														</button>
														<button type="submit" class="btn btn-default nav-link resp-btn">
															<svg
																class="ionicon header-icon-svgs" viewBox="0 0 512 512">
																<title>Search</title>
																<path
																	d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
																	fill="none" stroke="currentColor" stroke-miterlimit="10"
																	stroke-width="32" />
																<path fill="none" stroke="currentColor"
																	stroke-linecap="round" stroke-miterlimit="10"
																	stroke-width="32" d="M338.29 338.29L448 448" />
															</svg>
														</button>
													</span>
												</div>
											</form>
										</li>
										<li class="dropdown main-profile-menu nav-item">
											<a class="new nav-link profile-user rounded-circle shadow d-flex"
												href="javascript:void(0)" data-bs-toggle="dropdown"><img alt=""
													src="{{asset('build/assets/img/users/11.jpg')}}"></a>
											<ul class="dropdown-menu">
												<li class="bg-primary p-3 br-ts-5 br-te-5 ">
													<div class="d-flex wd-100p">
														<div class="avatar"><img alt="avatar" class="rounded-circle"
																src="{{asset('build/assets/img/users/11.jpg')}}"></div>
														<div class="ms-3 my-auto">
															<h6 class="tx-15 text-black font-weight-semibold mb-0">Json
																Taylor</h6><span class="text-black op-8 tx-11">Web
																Designer</span>
														</div>
													</div>
												</li>
												<li><a class="dropdown-item" href="{{url('profile')}}"><i
															class="fe fe-user"></i>Profile</a></li>
												<li><a class="dropdown-item" href="{{url('mail-read')}}"><i
															class="fe fe-mail"></i>Inbox</a></li>
												<li><a class="dropdown-item" href="{{url('settings')}}"><i
															class="fe fe-settings"></i>Settings</a></li>
												<li><a class="dropdown-item" href="{{url('signup')}}"><i
															class="fe fe-power"></i>Log Out</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>