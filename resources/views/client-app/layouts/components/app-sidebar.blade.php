

				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="/dashboard">
								<img src="{{asset('build/assets/img/brand/logo-white.png')}}" class="main-logo  desktop-dark" alt="logo">
								<img src="{{asset('assets/images/brand/logo-horizontal.png')}}" class="main-logo  desktop-dark-1" alt="logo">
								<img src="{{asset('build/assets/img/brand/favicon-white.png')}}" class="main-logo  mobile-dark" alt="logo">
								<img src="{{asset('assets/images/brand/logo.png')}}" class="main-logo  mobile-dark-1" alt="logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg
									fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
								</svg></div>
							<ul class="side-menu">
                                <li class="slide">
                                    <a class="side-menu__item {{ request()->is('dashboard*') ? 'active' : '' }}" data-bs-toggle="slide" href="dashboard">
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
                                        <span class="side-menu__label mx-2">Home</span>
                                    </a>
                                </li>

                                @if (auth()->user()->role_id != 3)
                                    <li class="slide">

                                        <a class="side-menu__item {{ request()->is('questionnaire') ? 'active' : '' }}" data-bs-toggle="slide" href="/questionnaire">
                                            <svg class="ionicon side-menu__icon"
                                                    viewBox="0 0 512 512">
                                                    <title>Questionnaire</title>
                                                    <path
                                                        d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32" />
                                                    <path d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256M400 179V64h-48v69"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="side-menu__label mx-2">Questionnaire</span>
                                        </a>
                                    </li>
                                @endif

                                <li class="slide">
                                    <a class="side-menu__item {{ request()->is('announcements*') ? 'active' : '' }}" data-bs-toggle="slide" href="/announcements">
                                        <svg class="ionicon side-menu__icon" viewBox="0 0 1920 1920">
                                            <title>Announcements</title>
                                            <path d="M1587.162 31.278c11.52-23.491 37.27-35.689 63.473-29.816 25.525 6.099 43.483 28.8 43.483 55.002V570.46C1822.87 596.662 1920 710.733 1920 847.053c0 136.32-97.13 250.503-225.882 276.705v513.883c0 26.202-17.958 49.016-43.483 55.002a57.279 57.279 0 0 1-12.988 1.468c-21.12 0-40.772-11.745-50.485-31.171C1379.238 1247.203 964.18 1242.347 960 1242.347H564.706v564.706h87.755c-11.859-90.127-17.506-247.003 63.473-350.683 52.405-67.087 129.657-101.082 229.948-101.082v112.941c-64.49 0-110.57 18.861-140.837 57.487-68.781 87.868-45.064 263.83-30.269 324.254 4.18 16.828.34 34.673-10.277 48.34-10.73 13.665-27.219 21.684-44.499 21.684H508.235c-31.171 0-56.47-25.186-56.47-56.47v-621.177h-56.47c-155.747 0-282.354-126.607-282.354-282.353v-56.47h-56.47C25.299 903.523 0 878.336 0 847.052c0-31.172 25.299-56.471 56.47-56.471h56.471v-56.47c0-155.634 126.607-282.354 282.353-282.354h564.593c16.941-.112 420.48-7.002 627.275-420.48Zm-5.986 218.429c-194.71 242.371-452.216 298.164-564.705 311.04v572.724c112.489 12.876 369.995 68.556 564.705 311.04ZM903.53 564.7H395.294c-93.402 0-169.412 76.01-169.412 169.411v225.883c0 93.402 76.01 169.412 169.412 169.412H903.53V564.7Zm790.589 123.444v317.93c65.618-23.379 112.94-85.497 112.94-159.021 0-73.525-47.322-135.53-112.94-158.909Z" fill-rule="evenodd"/>
                                        </svg>
                                        <span class="side-menu__label flex-grow-0 overflow-visible position-relative mx-2">
                                            Announcements
                                        </span>
                                        <span class="badge badge-top rounded-pill bg-danger invisible" style="position: initial !important; right: 10px" id="unread-announcement-count">

                                        </span>
                                    </a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item {{ request()->is('messages*') ? 'active' : '' }}" data-bs-toggle="slide" href="/messages">
                                        <svg class="ionicon side-menu__icon" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1">
                                            <path fill="none" stroke="currentColor" stroke-width="1.2" d="M14.86,5.3H5.32A3.81,3.81,0,0,0,1.5,9.11v5.73a3.82,3.82,0,0,0,3.82,3.82H7.23l2.86,2.86L13,18.66h1.91a3.82,3.82,0,0,0,3.82-3.82V9.11A3.81,3.81,0,0,0,14.86,5.3Z" fill="none"/>
                                            <path fill="none" stroke="currentColor" stroke-width="1.2" d="M18.68,14.84A3.82,3.82,0,0,0,22.5,11V5.3a3.82,3.82,0,0,0-3.82-3.82H9.14A3.82,3.82,0,0,0,5.32,5.3" fill="none" />
                                        </svg>
                                        <span class="side-menu__label flex-grow-0 overflow-visible position-relative mx-2">
                                            Messages
                                        </span>
                                        <span class="badge badge-top rounded-pill bg-danger invisible" style="position: initial !important; right: 10px" id="unread-message-count">

                                        </span>
                                    </a>
                                </li>
							</ul>
							<div class="slide-right" id="slide-right">
                                <svg fill="#7b8191"
									width="24" height="24" viewBox="0 0 24 24">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
								</svg>
                            </div>
						</div>
					</aside>
				</div>
