

				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="{{url('index')}}">
								<img src="{{asset('build/assets/img/brand/logo-white.png')}}" class="main-logo  desktop-dark" alt="logo">
								<img src="{{asset('build/assets/img/brand/logo-white-1.png')}}" class="main-logo  desktop-dark-1" alt="logo">
								<img src="{{asset('build/assets/img/brand/favicon-white.png')}}" class="main-logo  mobile-dark" alt="logo">
								<img src="{{asset('build/assets/img/brand/favicon-white-1.png')}}" class="main-logo  mobile-dark-1" alt="logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg
									fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
								</svg></div>
							<ul class="side-menu">
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
										<svg class="ionicon side-menu__icon"
												viewBox="0 0 512 512">
												<title>Home</title>
												<path
													d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"
													fill="none" stroke="currentColor" stroke-linecap="round"
													stroke-linejoin="round" stroke-width="32" />
												<path d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256M400 179V64h-48v69"
													fill="none" stroke="currentColor" stroke-linecap="round"
													stroke-linejoin="round" stroke-width="32" />
										</svg>
										<span class="side-menu__label">Dashboard</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Dashboard</a></li>
										<li><a class="slide-item" href="{{url('index')}}">General</a></li>
										<li><a class="slide-item" href="{{url('index1')}}">Ecommerce</a></li>
										<li><a class="slide-item" href="{{url('index2')}}">Projects</a></li>
										<li><a class="slide-item" href="{{url('index3')}}">HRM</a></li>
										<li><a class="slide-item" href="{{url('index4')}}">CRM</a></li>
										<li><a class="slide-item" href="{{url('index5')}}">Analytics</a></li>
										<li><a class="slide-item" href="{{url('index6')}}">Crypto</a></li>
										<li><a class="slide-item" href="{{url('index7')}}">Sales</a></li>
									</ul>
								</li>
								<li class="side-item side-item-category">WEB APPS</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Apps</title>
											<rect x="64" y="64" width="80" height="80" rx="40" ry="40" fill="none"
												stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
											<rect x="216" y="64" width="80" height="80" rx="40" ry="40" fill="none"
												stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
											<rect x="368" y="64" width="80" height="80" rx="40" ry="40" fill="none"
												stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
											<rect x="64" y="216" width="80" height="80" rx="40" ry="40" fill="none"
												stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
											<rect x="216" y="216" width="80" height="80" rx="40" ry="40" fill="none"
												stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
											<rect x="368" y="216" width="80" height="80" rx="40" ry="40" fill="none"
												stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
											<rect x="64" y="368" width="80" height="80" rx="40" ry="40" fill="none"
												stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
											<rect x="216" y="368" width="80" height="80" rx="40" ry="40" fill="none"
												stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
											<rect x="368" y="368" width="80" height="80" rx="40" ry="40" fill="none"
												stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
										</svg><span class="side-menu__label">Apps</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Apps</a></li>
										<li><a class="slide-item" href="{{url('cards')}}">Cards</a></li>
										<li><a class="slide-item" href="{{url('draggablecards')}}">Draggablecards</a></li>
										<li><a class="slide-item" href="{{url('rangeslider')}}">Range-slider</a></li>
										<li><a class="slide-item" href="{{url('calendar')}}">Calendar</a></li>
										<li><a class="slide-item" href="{{url('contacts')}}">Contacts</a></li>
										<li><a class="slide-item" href="{{url('notification')}}">Notification</a></li>
										<li><a class="slide-item" href="{{url('treeview')}}">Treeview</a></li>
										<li class="sub-slide">
											<a class="slide-item side-menu__item-sub" data-bs-toggle="sub-slide"
												href="javascript:void(0)"><span class="sub-side-menu__label">File
													Manager</span><i class="sub-angle fe fe-chevron-down"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="{{url('file-manager')}}">File Manager</a>
												</li>
												<li><a class="sub-side-menu__item" href="{{url('file-manager1')}}">Files</a></li>
												<li><a class="sub-side-menu__item" href="{{url('file-details')}}">File Details</a>
												</li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="slide-item side-menu__item-sub" data-bs-toggle="sub-slide"
												href="javascript:void(0)"><span class="sub-side-menu__label">Mail</span><i
													class="sub-angle fe fe-chevron-down"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="{{url('mail-compose')}}">New Mail</a>
												</li>
												<li><a class="sub-side-menu__item" href="{{url('mail-inbox')}}">Inbox</a></li>
												<li><a class="sub-side-menu__item" href="{{url('mail-read')}}">Read Mail</a></li>
												<li><a class="sub-side-menu__item" href="{{url('chat')}}">Chat</a></li>
												<li><a class="sub-side-menu__item" href="{{url('mail-settings')}}">Mail
														Settings</a></li>
											</ul>
										</li>
									</ul>
								</li>

								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Elements</title>
											<path
												d="M448 341.37V170.61A32 32 0 00432.11 143l-152-88.46a47.94 47.94 0 00-48.24 0L79.89 143A32 32 0 0064 170.61v170.76A32 32 0 0079.89 369l152 88.46a48 48 0 0048.24 0l152-88.46A32 32 0 00448 341.37z"
												fill="none" stroke="currentColor" stroke-linecap="round"
												stroke-linejoin="round" stroke-width="32" />
											<path fill="none" stroke="currentColor" stroke-linecap="round"
												stroke-linejoin="round" stroke-width="32"
												d="M69 153.99l187 110 187-110M256 463.99v-200" />
										</svg><span class="side-menu__label">Elements</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Elements</a></li>
										<li><a class="slide-item" href="{{url('alerts')}}">Alerts</a></li>
										<li><a class="slide-item" href="{{url('avatar')}}">Avatar</a></li>
										<li><a class="slide-item" href="{{url('breadcrumbs')}}">Breadcrumbs</a></li>
										<li><a class="slide-item" href="{{url('buttons')}}">Buttons</a></li>
										<li><a class="slide-item" href="{{url('badge')}}">Badge</a></li>
										<li><a class="slide-item" href="{{url('dropdown')}}">Dropdown</a></li>
										<li><a class="slide-item" href="{{url('list-group')}}">List Group</a></li>
										<li><a class="slide-item" href="{{url('navigation')}}">Navigation</a></li>
										<li><a class="slide-item" href="{{url('images')}}">Images</a></li>
										<li><a class="slide-item" href="{{url('pagination')}}">Pagination</a></li>
										<li><a class="slide-item" href="{{url('popover')}}">Popover</a></li>
										<li><a class="slide-item" href="{{url('progress')}}">Progress</a></li>
										<li><a class="slide-item" href="{{url('spinners')}}">Spinners</a></li>
										<li><a class="slide-item" href="{{url('media-object')}}">Media Object</a></li>
										<li><a class="slide-item" href="{{url('typography')}}">Typography</a></li>
										<li><a class="slide-item" href="{{url('tooltip')}}">Tooltip</a></li>
										<li><a class="slide-item" href="{{url('toast')}}">Toast</a></li>
										<li><a class="slide-item" href="{{url('tags')}}">Tags</a></li>
										<li><a class="slide-item" href="{{url('tabs')}}">Tabs</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Advanced UI</title>
											<circle cx="256" cy="184" r="120" fill="none" stroke="currentColor"
												stroke-linejoin="round" stroke-width="32" />
											<circle cx="344" cy="328" r="120" fill="none" stroke="currentColor"
												stroke-linejoin="round" stroke-width="32" />
											<circle cx="168" cy="328" r="120" fill="none" stroke="currentColor"
												stroke-linejoin="round" stroke-width="32" />
										</svg><span class="side-menu__label">Advanced UI</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Advanced UI</a></li>
										<li><a class="slide-item" href="{{url('accordion')}}">Accordion</a></li>
										<li><a class="slide-item" href="{{url('carousel')}}">Carousel</a></li>
										<li><a class="slide-item" href="{{url('collapse')}}">Collapse</a></li>
										<li><a class="slide-item" href="{{url('modals')}}">Modals</a></li>
										<li><a class="slide-item" href="{{url('timeline')}}">Timeline</a></li>
										<li><a class="slide-item" href="{{url('sweet-alert')}}">Sweet Alert</a></li>
										<li><a class="slide-item" href="{{url('rating')}}">Ratings</a></li>
										<li><a class="slide-item" href="{{url('search')}}">Search</a></li>
										<li><a class="slide-item" href="{{url('userlist')}}">Userlist</a></li>
										<li><a class="slide-item" href="{{url('file-attached-tags')}}">File Attachments</a></li>
									</ul>
								</li>
								<li class="side-item side-item-category">Pages</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Pages</title>
											<rect x="128" y="128" width="336" height="336" rx="57" ry="57" fill="none"
												stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
											<path
												d="M383.5 128l.5-24a56.16 56.16 0 00-56-56H112a64.19 64.19 0 00-64 64v216a56.16 56.16 0 0056 56h24"
												fill="none" stroke="currentColor" stroke-linecap="round"
												stroke-linejoin="round" stroke-width="32" />
										</svg><span class="side-menu__label">Pages</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Pages</a></li>
										<li><a class="slide-item" href="{{url('profile-notifications')}}">Notifications-list</a>
										</li>
										<li><a class="slide-item" href="{{url('invoice')}}">Invoice</a></li>
										<li><a class="slide-item" href="{{url('pricing')}}">Pricing</a></li>
										<li><a class="slide-item" href="{{url('gallery')}}">Gallery</a></li>
										<li><a class="slide-item" href="{{url('todotask')}}">Todotask</a></li>
										<li><a class="slide-item" href="{{url('widgets')}}">Widgets</a></li>
										<li><a class="slide-item" href="{{url('emptypage')}}">Empty Page</a></li>
										<li><a class="slide-item" href="{{url('about-us')}}">About us</a></li>
										<li><a class="slide-item" href="{{url('landing')}}" target="_blank">Landing</a></li>
										<li><a class="slide-item" href="{{url('faq')}}">Faqs</a></li>
										<li><a class="slide-item" href="{{url('settings')}}">Settings</a></li>
										<li class="sub-slide">
											<a class="slide-item side-menu__item-sub" data-bs-toggle="sub-slide"
												href="javascript:void(0)"><span
													class="sub-side-menu__label">Authentication</span><i
													class="sub-angle fe fe-chevron-down"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="{{url('profile')}}">Profile</a></li>
												<li><a class="sub-side-menu__item" href="{{url('signin')}}">Sign In</a></li>
												<li><a class="sub-side-menu__item" href="{{url('signup')}}">Sign Up</a></li>
												<li><a class="sub-side-menu__item" href="{{url('forgot')}}">Forgot Password</a>
												</li>
												<li><a class="sub-side-menu__item" href="{{url('reset')}}">Reset Password</a></li>
												<li><a class="sub-side-menu__item" href="{{url('lockscreen')}}">Lockscreen</a>
												</li>
												<li><a class="sub-side-menu__item"
														href="{{url('underconstruction')}}">underconstruction</a></li>
												<li><a class="sub-side-menu__item" href="{{url('error404')}}">Error 404</a></li>
												<li><a class="sub-side-menu__item" href="{{url('error500')}}">Error 500</a></li>
												<li><a class="sub-side-menu__item" href="{{url('error501')}}">Error 501</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="slide-item side-menu__item-sub" data-bs-toggle="sub-slide"
												href="javascript:void(0)"><span
													class="sub-side-menu__label">Ecommerce</span><i
													class="sub-angle fe fe-chevron-down"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="{{url('shop')}}">Shop</a></li>
												<li><a class="sub-side-menu__item" href="{{url('product-details')}}">Product
														Details</a></li>
												<li><a class="sub-side-menu__item" href="{{url('add-product')}}">Add Product</a>
												</li>
												<li><a class="sub-side-menu__item" href="{{url('product-cart')}}">Cart</a></li>
												<li><a class="sub-side-menu__item" href="{{url('order-details')}}">Order
														Details</a></li>
												<li><a class="sub-side-menu__item" href="{{url('check-out')}}">Check Out</a></li>
												<li><a class="sub-side-menu__item" href="{{url('wish-list')}}">Wishlist</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="slide-item side-menu__item-sub" data-bs-toggle="sub-slide"
												href="javascript:void(0)"><span class="sub-side-menu__label">Blog</span><i
													class="sub-angle fe fe-chevron-down"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="{{url('blog')}}">Blog</a></li>
												<li><a class="sub-side-menu__item" href="{{url('blog-details')}}">Blog Details</a>
												</li>
												<li><a class="sub-side-menu__item" href="{{url('edit-post')}}">Blog Edit</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="slide-item side-menu__item-sub" data-bs-toggle="sub-slide"
												href="javascript:void(0)"><span class="sub-side-menu__label">Forms</span><i
													class="sub-angle fe fe-chevron-down"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="{{url('form-elements')}}">Form
														Elements</a></li>
												<li><a class="sub-side-menu__item" href="{{url('form-advanced')}}">Advanced
														Forms</a></li>
												<li><a class="sub-side-menu__item" href="{{url('form-layouts')}}">Form Layouts</a>
												</li>
												<li><a class="sub-side-menu__item" href="{{url('form-validation')}}">Form
														Validation</a></li>
												<li><a class="sub-side-menu__item" href="{{url('form-wizards')}}">Form Wizards</a>
												</li>
												<li><a class="sub-side-menu__item" href="{{url('form-editor')}}">Form Editor</a>
												</li>
												<li><a class="sub-side-menu__item" href="{{url('form-sizes')}}">Elements Sizes</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Utilities</title>
											<path fill="none" stroke="currentColor" stroke-linejoin="round"
												stroke-width="32"
												d="M336 320H32L184 48l152 272zM265.32 194.51A144 144 0 11192 320" />
										</svg><span class="side-menu__label">Utilities</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Utilities</a></li>
										<li><a class="slide-item" href="{{url('background')}}">Background</a></li>
										<li><a class="slide-item" href="{{url('border')}}">Border</a></li>
										<li><a class="slide-item" href="{{url('display')}}">Display</a></li>
										<li><a class="slide-item" href="{{url('flex')}}">Flex</a></li>
										<li><a class="slide-item" href="{{url('height')}}">Height</a></li>
										<li><a class="slide-item" href="{{url('margin')}}">Margin</a></li>
										<li><a class="slide-item" href="{{url('padding')}}">Padding</a></li>
										<li><a class="slide-item" href="{{url('position')}}">Position</a></li>
										<li><a class="slide-item" href="{{url('width')}}">Width</a></li>
										<li><a class="slide-item" href="{{url('extras')}}">Extras</a></li>
									</ul>
								</li>
								<li class="side-item side-item-category">MULTI LEVEL</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Menu Level</title>
											<path fill="none" stroke="currentColor" stroke-linecap="round"
												stroke-miterlimit="10" stroke-width="32"
												d="M80 160h352M80 256h352M80 352h352" />
										</svg><span class="side-menu__label">Menu-levels</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Menu-Levels</a></li>
										<li><a class="slide-item" href="javascript:void(0)">Level-1</a></li>
										<li class="sub-slide">
											<a class="slide-item side-menu__item-sub" data-bs-toggle="sub-slide"
												href="javascript:void(0)"><span
													class="sub-side-menu__label">Level-2</span><i
													class="sub-angle fe fe-chevron-down me-4"></i></a>
											<ul class="sub-slide-menu">
												<li><a class="sub-side-menu__item" href="javascript:void(0)">Level-2.1</a>
												</li>
												<li><a class="sub-side-menu__item" href="javascript:void(0)">Level-2.2</a>
												</li>
												<li class="sub-slide2">
													<a class="sub-side-menu__item side-menu__item-sub2"
														data-bs-toggle="sub-slide2" href="javascript:void(0)"><span
															class="sub-side-menu__label">Level-2.3</span><i
															class="sub-angle2 fe fe-chevron-down"></i></a>
													<ul class="sub-slide-menu1">
														<li><a class="sub-slide-item2"
																href="javascript:void(0)">Level-2.3.1</a></li>
														<li><a class="sub-slide-item2"
																href="javascript:void(0)">Level-2.3.2</a></li>
														<li><a class="sub-slide-item2"
																href="javascript:void(0)">Level-2.3.3</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="side-item side-item-category">Settings</li>
								<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="{{url('switcher-1')}}"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Switcher</title>
											<circle cx="368" cy="256" r="128" fill="none" stroke="currentColor"
												stroke-linejoin="round" stroke-width="32" />
											<rect x="16" y="128" width="480" height="256" rx="128" ry="128" fill="none"
												stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
										</svg><span class="side-menu__label">Switcher</span></a>
								</li>
								<li class="side-item side-item-category">General</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Icons</title>
											<circle cx="256" cy="256" r="192" fill="none" stroke="currentColor"
												stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" />
											<circle cx="256" cy="256" r="64" fill="none" stroke="currentColor"
												stroke-miterlimit="10" stroke-width="32" />
											<path fill="none" stroke="currentColor" stroke-linecap="round"
												stroke-miterlimit="10" stroke-width="32"
												d="M224 192L171 85M288 192l53-107M327.55 255.81l119.41.13M299.09 313.13l72.25 95.06M184.45 255.81l-119.41.13M212.91 313.13l-72.25 95.06" />
										</svg><span class="side-menu__label">Icons</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Icons</a></li>
										<li><a class="slide-item" href="{{url('icons')}}">Font Awesome </a></li>
										<li><a class="slide-item" href="{{url('icons2')}}">Material Design Icons</a></li>
										<li><a class="slide-item" href="{{url('icons3')}}">Simple Line Icons</a></li>
										<li><a class="slide-item" href="{{url('icons4')}}">Feather Icons</a></li>
										<li><a class="slide-item" href="{{url('icons5')}}">Ionic Icons</a></li>
										<li><a class="slide-item" href="{{url('icons6')}}">Flag Icons</a></li>
										<li><a class="slide-item" href="{{url('icons7')}}">Pe7 Icons</a></li>
										<li><a class="slide-item" href="{{url('icons8')}}">Themify Icons</a></li>
										<li><a class="slide-item" href="{{url('icons9')}}">Typicons Icons</a></li>
										<li><a class="slide-item" href="{{url('icons10')}}">Weather Icons</a></li>
										<li><a class="slide-item" href="{{url('icons11')}}">Material Icons</a></li>
										<li><a class="slide-item" href="{{url('icons12')}}">Bootstrap Icons</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Charts</title>
											<rect x="64" y="320" width="48" height="160" rx="8" ry="8" fill="none"
												stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
												stroke-width="32" />
											<rect x="288" y="224" width="48" height="256" rx="8" ry="8" fill="none"
												stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
												stroke-width="32" />
											<rect x="400" y="112" width="48" height="368" rx="8" ry="8" fill="none"
												stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
												stroke-width="32" />
											<rect x="176" y="32" width="48" height="448" rx="8" ry="8" fill="none"
												stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
												stroke-width="32" />
										</svg><span class="side-menu__label">Charts</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Charts</a></li>
										<li><a class="slide-item" href="{{url('chart-morris')}}">Morris Charts</a></li>
										<li><a class="slide-item" href="{{url('chart-flot')}}">Flot Charts</a></li>
										<li><a class="slide-item" href="{{url('chart-chartjs')}}">ChartJS</a></li>
										<li><a class="slide-item" href="{{url('chart-echart')}}">Echart</a></li>
										<li><a class="slide-item" href="{{url('chart-sparkline')}}">Sparkline</a></li>
										<li><a class="slide-item" href="{{url('chart-peity')}}">Chart-peity</a></li>
									</ul>
								</li>
								<li class="side-item side-item-category">COMPONENTS</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Tables</title>
											<rect x="64" y="176" width="384" height="256" rx="28.87" ry="28.87" fill="none"
												stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
											<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
												stroke-width="32" d="M144 80h224M112 128h288" />
										</svg><span class="side-menu__label">Tables</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Tables</a></li>
										<li><a class="slide-item" href="{{url('table-basic')}}">Basic Tables</a></li>
										<li><a class="slide-item" href="{{url('table-data')}}">Data Tables</a></li>
										<li><a class="slide-item" href="{{url('table-editable')}}">Editable Tables</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><svg class="ionicon side-menu__icon"
											viewBox="0 0 512 512">
											<title>Maps</title>
											<path d="M448 64L64 240.14h200a8 8 0 018 8V448z" fill="none"
												stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
												stroke-width="32" />
										</svg><span class="side-menu__label">Maps</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Maps</a></li>
										<li><a class="slide-item" href="{{url('map-leaflet')}}">Leaflet Maps</a></li>
										<li><a class="slide-item" href="{{url('map-vector')}}">Vector Maps</a></li>
									</ul>
								</li>
							</ul>
							<div class="slide-right" id="slide-right"><svg fill="#7b8191"
									width="24" height="24" viewBox="0 0 24 24">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
								</svg></div>
						</div>
					</aside>
				</div>