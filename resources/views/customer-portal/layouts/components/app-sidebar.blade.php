

				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="{{url('index')}}">
								<img src="{{asset('build/assets/img/brand/logo-white.png')}}" class="main-logo  desktop-dark" alt="logo">
								<img src="{{asset('assets/images/brand/logo-blue.png')}}" class="main-logo  desktop-dark-1" alt="logo">
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
										<span class="side-menu__label mx-2">Dashboard</span>
                                        {{--<i class="angle fe fe-chevron-right"></i>--}}
                                    </a>
									{{--<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0)">Dashboard</a></li>
										<li><a class="slide-item" href="{{url('index')}}">General</a></li>
										<li><a class="slide-item" href="{{url('index1')}}">Ecommerce</a></li>
										<li><a class="slide-item" href="{{url('index2')}}">Projects</a></li>
										<li><a class="slide-item" href="{{url('index3')}}">HRM</a></li>
										<li><a class="slide-item" href="{{url('index4')}}">CRM</a></li>
										<li><a class="slide-item" href="{{url('index5')}}">Analytics</a></li>
										<li><a class="slide-item" href="{{url('index6')}}">Crypto</a></li>
										<li><a class="slide-item" href="{{url('index7')}}">Sales</a></li>
									</ul>--}}
								</li>
                                <li class="slide is-expanded">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <svg class="ionicon side-menu__icon" viewBox="0 0 32 32" version="1.1">
                                            <title>Clients</title>
                                            <path d="M16 21.416c-5.035 0.022-9.243 3.537-10.326 8.247l-0.014 0.072c-0.018 0.080-0.029 0.172-0.029 0.266 0 0.69 0.56 1.25 1.25 1.25 0.596 0 1.095-0.418 1.22-0.976l0.002-0.008c0.825-3.658 4.047-6.35 7.897-6.35s7.073 2.692 7.887 6.297l0.010 0.054c0.127 0.566 0.625 0.982 1.221 0.982 0.69 0 1.25-0.559 1.25-1.25 0-0.095-0.011-0.187-0.031-0.276l0.002 0.008c-1.098-4.78-5.305-8.295-10.337-8.316h-0.002zM9.164 11.102c0 0 0 0 0 0 2.858 0 5.176-2.317 5.176-5.176s-2.317-5.176-5.176-5.176c-2.858 0-5.176 2.317-5.176 5.176v0c0.004 2.857 2.319 5.172 5.175 5.176h0zM9.164 3.25c0 0 0 0 0 0 1.478 0 2.676 1.198 2.676 2.676s-1.198 2.676-2.676 2.676c-1.478 0-2.676-1.198-2.676-2.676v0c0.002-1.477 1.199-2.674 2.676-2.676h0zM22.926 11.102c2.858 0 5.176-2.317 5.176-5.176s-2.317-5.176-5.176-5.176c-2.858 0-5.176 2.317-5.176 5.176v0c0.004 2.857 2.319 5.172 5.175 5.176h0zM22.926 3.25c1.478 0 2.676 1.198 2.676 2.676s-1.198 2.676-2.676 2.676c-1.478 0-2.676-1.198-2.676-2.676v0c0.002-1.477 1.199-2.674 2.676-2.676h0zM31.311 19.734c-0.864-4.111-4.46-7.154-8.767-7.154-0.395 0-0.784 0.026-1.165 0.075l0.045-0.005c-0.93-2.116-3.007-3.568-5.424-3.568-2.414 0-4.49 1.448-5.407 3.524l-0.015 0.038c-0.266-0.034-0.58-0.057-0.898-0.063l-0.009-0c-4.33 0.019-7.948 3.041-8.881 7.090l-0.012 0.062c-0.018 0.080-0.029 0.173-0.029 0.268 0 0.691 0.56 1.251 1.251 1.251 0.596 0 1.094-0.417 1.22-0.975l0.002-0.008c0.684-2.981 3.309-5.174 6.448-5.186h0.001c0.144 0 0.282 0.020 0.423 0.029 0.056 3.218 2.679 5.805 5.905 5.805 3.224 0 5.845-2.584 5.905-5.794l0-0.006c0.171-0.013 0.339-0.035 0.514-0.035 3.14 0.012 5.765 2.204 6.442 5.14l0.009 0.045c0.126 0.567 0.625 0.984 1.221 0.984 0.69 0 1.249-0.559 1.249-1.249 0-0.094-0.010-0.186-0.030-0.274l0.002 0.008zM16 18.416c-0 0-0 0-0.001 0-1.887 0-3.417-1.53-3.417-3.417s1.53-3.417 3.417-3.417c1.887 0 3.417 1.53 3.417 3.417 0 0 0 0 0 0.001v-0c-0.003 1.886-1.53 3.413-3.416 3.416h-0z"/>
                                        </svg>
                                        <span class="side-menu__label mx-2">Clients</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <svg class="ionicon side-menu__icon" viewBox="0 0 1920 1920">
                                            <title>Announcements</title>
                                            <path d="M1587.162 31.278c11.52-23.491 37.27-35.689 63.473-29.816 25.525 6.099 43.483 28.8 43.483 55.002V570.46C1822.87 596.662 1920 710.733 1920 847.053c0 136.32-97.13 250.503-225.882 276.705v513.883c0 26.202-17.958 49.016-43.483 55.002a57.279 57.279 0 0 1-12.988 1.468c-21.12 0-40.772-11.745-50.485-31.171C1379.238 1247.203 964.18 1242.347 960 1242.347H564.706v564.706h87.755c-11.859-90.127-17.506-247.003 63.473-350.683 52.405-67.087 129.657-101.082 229.948-101.082v112.941c-64.49 0-110.57 18.861-140.837 57.487-68.781 87.868-45.064 263.83-30.269 324.254 4.18 16.828.34 34.673-10.277 48.34-10.73 13.665-27.219 21.684-44.499 21.684H508.235c-31.171 0-56.47-25.186-56.47-56.47v-621.177h-56.47c-155.747 0-282.354-126.607-282.354-282.353v-56.47h-56.47C25.299 903.523 0 878.336 0 847.052c0-31.172 25.299-56.471 56.47-56.471h56.471v-56.47c0-155.634 126.607-282.354 282.353-282.354h564.593c16.941-.112 420.48-7.002 627.275-420.48Zm-5.986 218.429c-194.71 242.371-452.216 298.164-564.705 311.04v572.724c112.489 12.876 369.995 68.556 564.705 311.04ZM903.53 564.7H395.294c-93.402 0-169.412 76.01-169.412 169.411v225.883c0 93.402 76.01 169.412 169.412 169.412H903.53V564.7Zm790.589 123.444v317.93c65.618-23.379 112.94-85.497 112.94-159.021 0-73.525-47.322-135.53-112.94-158.909Z" fill-rule="evenodd"/>
                                        </svg>
                                        <span class="side-menu__label mx-2">Announcements</span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <svg class="ionicon side-menu__icon" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1">
                                            <path fill="none" stroke="currentColor" stroke-width="1.2" d="M14.86,5.3H5.32A3.81,3.81,0,0,0,1.5,9.11v5.73a3.82,3.82,0,0,0,3.82,3.82H7.23l2.86,2.86L13,18.66h1.91a3.82,3.82,0,0,0,3.82-3.82V9.11A3.81,3.81,0,0,0,14.86,5.3Z" fill="none"/>
                                            <path fill="none" stroke="currentColor" stroke-width="1.2" d="M18.68,14.84A3.82,3.82,0,0,0,22.5,11V5.3a3.82,3.82,0,0,0-3.82-3.82H9.14A3.82,3.82,0,0,0,5.32,5.3" fill="none" />
                                        </svg>
                                        <span class="side-menu__label mx-2">Messages</span>
                                    </a>
                                </li>
								{{--<li class="side-item side-item-category">WEB APPS</li>
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
								</li>--}}
							</ul>
							<div class="slide-right" id="slide-right"><svg fill="#7b8191"
									width="24" height="24" viewBox="0 0 24 24">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
								</svg></div>
						</div>
					</aside>
				</div>
