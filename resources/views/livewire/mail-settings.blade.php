@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">MAIL SETTINGS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Mail</a></li>
								<li class="breadcrumb-item active" aria-current="page">Mail-settings</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">

						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="panel tabs-style7 scaleX">
										<div class="panel-head">
											<ul class="nav nav-tabs">
												<li class="nav-item"><a class="nav-link tx-14 font-weight-semibold active" data-bs-toggle="tab" href="#mailSettingsTab1">General</a></li>
												<li class="nav-item"><a class="nav-link tx-14 font-weight-semibold" data-bs-toggle="tab" href="#mailSettingsTab2">Notifications</a></li>
												<li class="nav-item"><a class="nav-link tx-14 font-weight-semibold" data-bs-toggle="tab" href="#mailSettingsTab3">Security</a></li>
											</ul>
										</div>
										<div class="panel-body p-0 mt-4">
											<div class="tab-content">
												<div class="tab-pane active" id="mailSettingsTab1">
													<h5 class="font-weight-semibold">General and Basic Info Settings</h5>
													<p class="tx-muted mb-4">Tempor accusam labore dolor takimata invidunt dolores no lorem lorem eirmod. Takimata lorem dolor aliquyam clita est. Dolore dolor et.</p>
													<form class="form-horizontal">
														<div class="form-group">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">User Name</label>
																</div>
																<div class="col-md-9">
																	<input type="text" class="form-control"  placeholder="User Name" value="Jason Taylor">
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">Email</label>
																</div>
																<div class="col-md-9">
																	<input type="text" class="form-control"  placeholder="Email" value="json.taylor@gmail.com">
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">Language</label>
																</div>
																<div class="col-md-9">
																	<select class="form-control select2">
																		<option>US English</option>
																		<option>Arabic</option>
																		<option>Korean</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">Timezone</label>
																</div>
																<div class="col-md-9">
																	<select class="form-control select2">
																		<option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
																		<option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
																		<option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
																		<option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
																		<option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
																		<option value="America/Anchorage">(GMT-09:00) Alaska</option>
																		<option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
																		<option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
																		<option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
																		<option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
																		<option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
																		<option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
																		<option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
																		<option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
																		<option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
																		<option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
																		<option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
																		<option value="America/Havana">(GMT-05:00) Cuba</option>
																		<option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
																		<option value="America/Caracas">(GMT-04:30) Caracas</option>
																		<option value="America/Santiago">(GMT-04:00) Santiago</option>
																		<option value="America/La_Paz">(GMT-04:00) La Paz</option>
																		<option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
																		<option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
																		<option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
																		<option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
																		<option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
																		<option value="America/Araguaina">(GMT-03:00) UTC-3</option>
																		<option value="America/Montevideo">(GMT-03:00) Montevideo</option>
																		<option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
																		<option value="America/Godthab">(GMT-03:00) Greenland</option>
																		<option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
																		<option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
																		<option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
																		<option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
																		<option value="Atlantic/Azores">(GMT-01:00) Azores</option>
																		<option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
																		<option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
																		<option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
																		<option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
																		<option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
																		<option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
																		<option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
																		<option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
																		<option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
																		<option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
																		<option value="Asia/Beirut">(GMT+02:00) Beirut</option>
																		<option value="Africa/Cairo">(GMT+02:00) Cairo</option>
																		<option value="Asia/Gaza">(GMT+02:00) Gaza</option>
																		<option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
																		<option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
																		<option value="Europe/Minsk">(GMT+02:00) Minsk</option>
																		<option value="Asia/Damascus">(GMT+02:00) Syria</option>
																		<option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
																		<option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
																		<option value="Asia/Tehran">(GMT+03:30) Tehran</option>
																		<option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
																		<option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
																		<option value="Asia/Kabul">(GMT+04:30) Kabul</option>
																		<option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
																		<option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
																		<option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
																		<option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
																		<option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
																		<option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
																		<option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
																		<option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
																		<option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
																		<option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
																		<option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
																		<option value="Australia/Perth">(GMT+08:00) Perth</option>
																		<option value="Australia/Eucla">(GMT+08:45) Eucla</option>
																		<option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
																		<option value="Asia/Seoul">(GMT+09:00) Seoul</option>
																		<option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
																		<option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
																		<option value="Australia/Darwin">(GMT+09:30) Darwin</option>
																		<option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
																		<option value="Australia/Hobart">(GMT+10:00) Hobart</option>
																		<option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
																		<option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
																		<option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
																		<option value="Asia/Magadan">(GMT+11:00) Magadan</option>
																		<option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
																		<option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
																		<option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
																		<option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
																		<option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
																		<option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
																		<option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group mb-0">
															<div class="row">
																<div class="col-sm-3 col">
																	<label class="form-label">Verification</label>
																</div>
																<div class="col-sm-9 col">
																	<div class="tags-group">
																		<label class="tag-item">
																			<input type="checkbox" value="mobilenumber" class="selectgroup-input" checked>
																			<span class="tag rounded-pill">Mobile Number</span>
																		</label>
																		<label class="tag-item">
																			<input type="checkbox" value="altmail" class="selectgroup-input">
																			<span class="tag rounded-pill">Alternate Mail</span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="tab-pane" id="mailSettingsTab2">
													<h5 class="font-weight-semibold">Notification Settings</h5>
													<p class="tx-muted mb-4">Ipsum ut accusam dolores est dolore amet, amet ipsum et.</p>
													<form class="form-horizontal">
														<div class="form-group">
															<div class="row align-items-center">
																<div class="col-sm order-2 mt-2 mt-sm-0">
																	<label class="form-label m-0">Notifications from unknown mails</label>
																</div>
																<div class="col-sm-auto order-1">
																	<label for="unknownMail" class="mb-0">
																		<input type="checkbox" class="custom-switch-input" id="unknownMail" checked>
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row align-items-center">
																<div class="col-sm order-2 mt-2 mt-sm-0">
																	<label class="form-label m-0">Notifications from spam mails</label>
																</div>
																<div class="col-sm-auto order-1">
																	<label for="spamMail" class="mb-0">
																		<input type="checkbox" class="custom-switch-input" id="spamMail" checked>
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row align-items-center">
																<div class="col-sm order-2 mt-2 mt-sm-0">
																	<label class="form-label m-0">Notifications from blocked contacts</label>
																</div>
																<div class="col-sm-auto order-1">
																	<label for="blockedContacts" class="mb-0">
																		<input type="checkbox" class="custom-switch-input" id="blockedContacts">
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row align-items-center">
																<div class="col-sm order-2 mt-2 mt-sm-0">
																	<label class="form-label m-0">Allow all mails</label>
																</div>
																<div class="col-sm-auto order-1">
																	<label for="allowAll" class="mb-0">
																		<input type="checkbox" class="custom-switch-input" id="allowAll">
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group mb-4">
															<div class="row align-items-center">
																<div class="col-sm order-2 mt-2 mt-sm-0">
																	<label class="form-label m-0">Block all mails</label>
																</div>
																<div class="col-sm-auto order-1">
																	<label for="blockAll" class="mb-0">
																		<input type="checkbox" class="custom-switch-input" id="blockAll">
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-2 col">
																	<label class="form-label">Connected networks</label>
																</div>
																<div class="col-md-10 col">
																	<div class="tags-group">
																		<label class="tag-item">
																			<input type="checkbox" name="mobilenumber" value="mobilenumber" class="selectgroup-input" checked>
																			<span class="tag avatar-sm radius-7"><i class="ti ti-facebook tx-12"></i></span>
																		</label>
																		<label class="tag-item">
																			<input type="checkbox" name="mobilenumber" value="mobilenumber" class="selectgroup-input">
																			<span class="tag avatar-sm radius-7"><i class="ti ti-linkedin tx-12"></i></span>
																		</label>
																		<label class="tag-item">
																			<input type="checkbox" name="mobilenumber" value="mobilenumber" class="selectgroup-input">
																			<span class="tag avatar-sm radius-7"><i class="ti ti-dropbox tx-12"></i></span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
														<div class="mb-3 main-content-label">Notifications from</div>
														<div class="form-group">
															<div class="row align-items-center">
																<div class="col-sm order-2 mt-2 mt-sm-0">
																	<label class="form-label m-0">
																		<svg class="mx-1" width="20px" height="20px"><defs></defs><g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Ebene 1" viewBox="0 0 1024 1024" width="20px" height="20px"><path fill="var(--primary-bg-color)" d="M1024,512C1024,229.23016,794.76978,0,512,0S0,229.23016,0,512c0,255.554,187.231,467.37012,432,505.77777V660H302V512H432V399.2C432,270.87982,508.43854,200,625.38922,200,681.40765,200,740,210,740,210V336H675.43713C611.83508,336,592,375.46667,592,415.95728V512H734L711.3,660H592v357.77777C836.769,979.37012,1024,767.554,1024,512Z" class="color1877f2 svgShape"></path><path fill="#ffffff" d="M711.3,660,734,512H592V415.95728C592,375.46667,611.83508,336,675.43713,336H740V210s-58.59235-10-114.61078-10C508.43854,200,432,270.87982,432,399.2V512H302V660H432v357.77777a517.39619,517.39619,0,0,0,160,0V660Z" class="colorfff svgShape"></path></svg></g></svg>
																		Facebook
																	</label>
																</div>
																<div class="col-sm-auto order-1">
																	<label for="loginFacebook" class="mb-0">
																		<input type="checkbox" class="custom-switch-input" id="loginFacebook" checked>
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row align-items-center">
																<div class="col-sm order-2 mt-2 mt-sm-0">
																	<label class="form-label m-0">
																		<svg class="mx-1" width="24px" height="18px" version="1.1"><defs></defs><g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="20px" data-name="047-dropbox" viewBox="0 0 98.488 98.488"><path fill="var(--primary-bg-color)" d="M305.244,19.07,276.27,0,256,17.057l29.214,18.177Z" data-name="Path 115" transform="translate(-206.756)" class="color1e88e5 svgShape"></path><path fill="var(--primary-bg-color)" d="M28.974,0,0,19.064l20.036,16.17L49.244,17.057Z" data-name="Path 116" class="color1e88e5 svgShape"></path><path fill="var(--primary-bg-color)" d="M49.244,201.351l-20.27,17.057L0,199.338l20.03-16.17,29.214,18.183,29.208-18.183,20.036,16.17-28.974,19.07Z" data-name="Path 117" transform="translate(0 -147.934)" class="color1e88e5 svgShape"></path><path fill="var(--primary-bg-color)" d="M148.512,334.908a3.055,3.055,0,0,1-1.687.5,3.107,3.107,0,0,1-1.982-.72l-18.066-15.2-18.066,15.2a3.089,3.089,0,0,1-3.675.215L96,328.961v9.092l30.839,18.466,30.716-18.466v-9.1Z" data-name="Path 118" transform="translate(-77.534 -258.032)" class="color1e88e5 svgShape"></path></svg></g></svg>
																		Dropbox
																	</label>
																</div>
																<div class="col-sm-auto order-1">
																	<label for="loginDropbox" class="mb-0">
																		<input type="checkbox" class="custom-switch-input" id="loginDropbox">
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group mb-0">
															<div class="row align-items-center">
																<div class="col-sm order-2 mt-2 mt-sm-0">
																	<label class="form-label m-0">
																		<svg class="mx-1" width="20px" height="20px" version="1.1"><defs ></defs><g ><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="7.025 7.025 497.951 497.95"><linearGradient id="a" x1="-974.482" x2="-622.378" y1="1306.773" y2="1658.877" gradientTransform="translate(1054.43 -1226.825)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4deeea" class="stopColor2489be svgShape"></stop><stop offset="1" stop-color="#4deeea" class="stopColor0575b3 svgShape"></stop></linearGradient><path fill="var(--primary-bg-color)" d="M256 7.025C118.494 7.025 7.025 118.494 7.025 256S118.494 504.975 256 504.975 504.976 393.506 504.976 256C504.975 118.494 393.504 7.025 256 7.025zm-66.427 369.343h-54.665V199.761h54.665v176.607zM161.98 176.633c-17.853 0-32.326-14.591-32.326-32.587 0-17.998 14.475-32.588 32.326-32.588s32.324 14.59 32.324 32.588c.001 17.997-14.472 32.587-32.324 32.587zm232.45 199.735h-54.4v-92.704c0-25.426-9.658-39.619-29.763-39.619-21.881 0-33.312 14.782-33.312 39.619v92.704h-52.43V199.761h52.43v23.786s15.771-29.173 53.219-29.173c37.449 0 64.257 22.866 64.257 70.169l-.001 111.825z"></path></svg></g></svg>
																		Linkedin
																	</label>
																</div>
																<div class="col-sm-auto order-1">
																	<label for="loginLinkedin" class="mb-0">
																		<input type="checkbox" class="custom-switch-input" id="loginLinkedin">
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="tab-pane" id="mailSettingsTab3">
													<h5 class="font-weight-semibold">Security Settings</h5>
													<p class="tx-muted mb-4">Est elitr justo lorem at et dolore diam consetetur diam ea. Justo sit nonumy voluptua takimata lorem takimata erat, sit.</p>
													<form class="form-horizontal">
														<div class="form-group mb-4">
															<div class="row align-items-center">
																<div class="col-md-3">
																	<label class="form-label m-0">2 Step verifiction <a href="{{url('mail-settings')}}" class="ms-2 tx-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="help"><i class="fe fe-help-circle"></i></a></label>
																</div>
																<div class="col-md-9">
																	<label for="twoStep" class="mb-0">
																		<input type="checkbox" class="custom-switch-input" id="twoStep">
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
														</div>
														<div class="mb-2 main-content-label">Change Password</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">New Password</label>
																</div>
																<div class="col-md-9">
																	<input type="password" class="form-control"  placeholder="Enter new password">
																</div>
															</div>
														</div>
														<div class="form-group mb-4">
															<div class="row">
																<div class="col-md-3">
																	<label class="form-label">Re-Enter Password</label>
																</div>
																<div class="col-md-9">
																	<input type="password" class="form-control"  placeholder="Re-Enter your password">
																</div>
															</div>
														</div>
														<div class="mb-2 main-content-label">Account</div>
														<div class="form-group mb-0">
															<div class="row">
																<div class="col-md-3">
																	<a class="btn btn-outline-danger" href="javascript:void(0);">Deactivate Account</a>
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="btn-list text-end">
										<a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
										<a href="javascript:void(0);" class="btn btn-secondary">Restore to default</a>
									</div>
								</div>
							</div>
						</div><!-- col-end -->

					</div>
					<!-- /row -->

@endsection

@section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')

@endsection
