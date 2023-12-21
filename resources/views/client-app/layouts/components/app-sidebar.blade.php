

				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="/portal/questionnaire">
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
									<a class="side-menu__item {{ request()->is('portal/questionnaire') ? 'active' : '' }}" data-bs-toggle="slide" href="/portal/questionnaire">
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
