@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SETTINGS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Settings</a></li>
								<li class="breadcrumb-item active" aria-current="page">Settings</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

                    <!-- row -->
                    <div class="row">
						<div class="col-md-12">
							<div class="card overflow-hidden">
								<div class="card-body p-0">
									<div class="d-lg-flex main-settings-row">
										<div class="border-end border-bottom bd-lg-b-0 d-flex flex-column mn-wd-20p">
											<ul class="nav nav-pills main-nav-column p-3">
												<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#general"><i class="fe fe-settings"></i> General</a></li>
												<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#langAndReg"><i class="fe fe-flag"></i> Language & Region</a></li>
												<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#notifications"><i class="fe fe-bell"></i> Notifications</a></li>
												<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#secAndVer"><i class="fe fe-shield"></i> Security & Verification</a></li>
												<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#others"><i class="fe fe-alert-triangle"></i> Privacy & Others</a></li>
												<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#integration"><i class="fe fe-grid"></i> Integration</a></li>
											</ul>
										</div>
										<div class="flex-1">
											<div class="tab-content">
												<div class="tab-pane active" id="general">
													<div class="p-4 border-bottom">
														<h5 class="mb-0">General Settings</h5>
													</div>
													<div class="p-4 main-settings-app" id="generalSettings">
														<form class="form-horizontal">
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Personal Info</p>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label for="userName" class="form-label">User Name</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<input type="text" class="form-control" id="userName" placeholder="User Name" value="Jason Taylor">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label for="email" class="form-label">Email</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<input type="text" class="form-control" id="email" placeholder="Email" value="json.taylor@gmail.com">
																	</div>
																</div>
															</div>
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Contact</p>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label for="mobileNumber" class="form-label">Mobile Number</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<input type="text" class="form-control" id="mobileNumber" placeholder="Mobile Number" value="+(110)-3984922">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label for="altNumber" class="form-label">Alternate Number</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<input type="text" class="form-control" id="altNumber" placeholder="Alternate Number" value="+(110)-19549223">
																	</div>
																</div>
															</div>
														</form>
													</div>
													<div class="p-3 mt-auto border-top">
														<div class="text-end btn-list">
															<a href="javascript:void(0);" class="btn btn-outline-danger">Discard</a>
															<a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="langAndReg">
													<div class="p-4 border-bottom">
														<h5 class="mb-0">Laguage & Region Settings</h5>
													</div>
													<div class="p-4 main-settings-app" id="landRegSettings">
														<form class="form-horizontal">
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Region</p>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label class="form-label">Country</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<select class="form-control select2">
																			<option>USA</option>
																			<option>India</option>
																			<option>Canada</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label  class="form-label">City</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<input type="text" class="form-control" id="Number" placeholder="Alternate Number" value="Mystic Falls">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label for="state" class="form-label">State</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<input type="text" class="form-control" id="state" placeholder="Alternate Number" value="Rebum Est.">
																	</div>
																</div>
															</div>
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Language</p>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label class="form-label">Language</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<select class="form-control select2">
																			<option>US English</option>
																			<option>Arabic</option>
																			<option>Korean</option>
																		</select>
																	</div>
																</div>
															</div>
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Date & Time</p>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label class="form-label">Date Format</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<select class="form-control select2">
																			<option>DD-MM-YY</option>
																			<option selected>DD-MM-YYYY</option>
																			<option>MM-DD-YY</option>
																			<option>MM-DD-YYYY</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label class="form-label">Timezone</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
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
														</form>
													</div>
													<div class="p-3 mt-auto border-top">
														<div class="text-end btn-list">
															<a href="javascript:void(0);" class="btn btn-outline-danger">Discard</a>
															<a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="notifications">
													<div class="p-4 border-bottom">
														<h5 class="mb-0">Notifications Settings</h5>
													</div>
													<div class="p-4 main-settings-app" id="notificationsSettings">
														<form class="form-horiontal">
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">General</p>
															<div class="form-group mb-2">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="form-label font-weight-semibold mt-0 mb-0">Comments</label>
																		<p class="tx-muted tx-12">Enable notifications form comments on your posts and replies to your comments</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="cmts" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="cmts" checked>
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<div class="form-group mb-2">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="form-label font-weight-semibold mt-0 mb-0">Tags</label>
																		<p class="tx-muted tx-12">Receive notifications when someone mentioned in a comment or a post.</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="tgs" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="tgs">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="form-label font-weight-semibold mt-0 mb-0">Reminders</label>
																		<p class="tx-muted tx-12">Receive notifications to remind you of Tasks, Events, Updates etc.</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="rmdrs" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="rmdrs" checked>
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Workspace</p>
															<div class="form-group mb-2">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="form-label font-weight-semibold mt-0 mb-0">Weekly, Monthly Report</label>
																		<p class="tx-muted tx-12">Receive weekly and monthly report of workspace details including projects, hires etc.</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="rprt" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="rprt" checked>
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<div class="form-group mb-2">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="form-label font-weight-semibold mt-0 mb-0">Company Announcements</label>
																		<p class="tx-muted tx-12">Receive notifications about company announcements.</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="ancmnts" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="ancmnts" checked>
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Personal</p>
															<div class="form-group">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="form-label font-weight-semibold mt-0 mb-0">Profile</label>
																		<p class="tx-muted tx-12">Enable notifications from profile activity.</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="prfl" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="prfl">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Account</p>
															<div class="form-group mb-0">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="form-label font-weight-semibold mt-0 mb-0">Security</label>
																		<p class="tx-muted tx-12">Receive notifications on password change, mobile number change or any other changes in your account.</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="scrty" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="scrty" checked>
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
														</form>
													</div>
													<div class="p-3 mt-auto border-top">
														<div class="text-end btn-list">
															<a href="javascript:void(0);" class="btn btn-outline-danger">Discard</a>
															<a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="secAndVer">
													<div class="p-4 border-bottom">
														<h5 class="mb-0">Security & Verfication Settings</h5>
													</div>
													<div class="p-4 main-settings-app" id="secAndverifSettings">
														<form class="form-horizontal">
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Security</p>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label class="form-label">2 Step Verification<a href="#" class="ms-2 tx-inverse" data-bs-toggle="tooltip" data-bs-placement="top" title="help"><i class="fe fe-help-circle tx-14"></i></a></label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<label for="twoStepVerification" class="mb-0 mt-1">
																			<input type="checkbox" class="custom-switch-input" id="twoStepVerification">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label for="changeNumber" class="form-label">Change Number</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<input type="text" class="form-control" id="changeNumber" placeholder="Enter new mobile number">
																		<p class="tx-warning mt-2">You need to verify mobile number first.</p>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label class="form-label">Change Password</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<div class="row">
																			<div class="col-xl-6 col-md-12">
																				<input type="password" class="form-control" id="password2" placeholder="Enter current password">
																			</div>
																			<div class="col-xl-6 col-md-12">
																				<input type="password" class="form-control mt-1 mt-lg-0" id="password" placeholder="Enter new password">
																			</div>
																			<div class="col-md-12">
																				<p class="tx-muted mt-2">Use a strong password of atleast 8 characters in combination of letters, numbers and special characters.</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary mb-3">Identity Verificaton <a href="#" class="ms-2 tx-inverse" data-bs-toggle="tooltip" data-bs-placement="top" title="help"><i class="fe fe-help-circle tx-14"></i></a></p>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<p class="tx-muted"><span class="font-weight-semibold">Verification only takes a few minutes,</span> helps secure your payments and transactions.</p>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<a href="javascript:void(0);" class="btn btn-outline-primary rounded-pill">Upload ID</a>
																	</div>
																</div>
															</div>
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary mb-3">Mobile Number Verificaton <a href="#" class="ms-2 tx-inverse" data-bs-toggle="tooltip" data-bs-placement="top" title="help"><i class="fe fe-help-circle tx-14"></i></a></p>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label for="numberVerif" class="form-label">Mobile Number</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<div class="row">
																			<div class="col-md-6">
																				<input type="text" class="form-control" id="numberVerif" placeholder="Enter mobile number">
																			</div>
																			<div class="col-md-3">
																				<a href="javascript:void(0);" class="btn btn-outline-primary rounded-pill mt-3 mt-md-0">Verify</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary mb-3">Mail Verificaton <a href="#" class="ms-2 tx-inverse" data-bs-toggle="tooltip" data-bs-placement="top" title="help"><i class="fe fe-help-circle tx-14"></i></a></p>
															<div class="form-group">
																<div class="row">
																	<div class="col-xl-3 col-md-12">
																		<label for="mailVerif" class="form-label">Mail</label>
																	</div>
																	<div class="col-xl-9 col-md-12">
																		<div class="row">
																			<div class="col-md-6">
																				<input type="text" class="form-control" id="mailVerif" placeholder="Enter Mail">
																			</div>
																			<div class="col-md-3">
																				<a href="javascript:void(0);" class="btn btn-outline-primary rounded-pill mt-3 mt-md-0">Verify</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</form>
													</div>
													<div class="p-3 mt-auto border-top">
														<div class="text-end btn-list">
															<a href="javascript:void(0);" class="btn btn-outline-danger">Discard</a>
															<a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="others">
													<div class="p-4 border-bottom">
														<h5 class="mb-0">Privacy & Other Settings</h5>
													</div>
													<div class="p-4 main-settings-app" id="otherSettings">
														<form class="form-horizontal">
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Privacy</p>
															<div class="form-group">
																<div class="row align-items-center">
																	<div class="col-10 order-2">
																		<label class="form-label mt-0">Profile Visibility</label>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="profileVis" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="profileVis" checked>
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row align-items-center">
																	<div class="col-10 order-2">
																		<label class="form-label mt-0">Online Status</label>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="onlineStatus" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="onlineStatus" checked>
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<p class="font-weight-semibold tx-15 pb-2 border-bottom-dashed tx-primary">Others</p>
															<div class="form-group mb-0">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="form-label font-weight-semibold mt-0 mb-0">Auto Reply</label>
																		<p class="tx-muted tx-12">Enable this feature to reply automatically to a message while you are on offline.</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="autoReply" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="autoReply">
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
														</form>
													</div>
													<div class="p-3 mt-auto border-top">
														<div class="text-end btn-list">
															<a href="javascript:void(0);" class="btn btn-outline-danger">Discard</a>
															<a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="integration">
													<div class="p-4 border-bottom">
														<h5 class="mb-0">Integration Settings</h5>
													</div>
													<div class="p-4 main-settings-app" id="integrationSettings">
														<form class="form-horizontal">
															<div class="form-group">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="font-weight-semibold form-label mb-0 mt-0">Dropbox</label>
																		<p class="tx-muted tx-12">Bring your Files and Cloud together.</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="intDropbox" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="intDropbox" checked>
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="font-weight-semibold form-label mb-0 mt-0">Google Calendar</label>
																		<p class="tx-muted tx-12">Manage your Shedules and Upcoming Events in less time.</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="intCal" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="intCal" checked>
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-10 order-2">
																		<label class="font-weight-semibold form-label mb-0 mt-0">Facebook</label>
																		<p class="tx-muted tx-12">Connect with Family, Friends and other people you know and get updates.</p>
																	</div>
																	<div class="col-xl-auto col-lg-auto col-md-auto col-sm-12 order-1">
																		<label for="intFb" class="mt-1">
																			<input type="checkbox" class="custom-switch-input" id="intFb" checked>
																			<span class="custom-switch-indicator"></span>
																		</label>
																	</div>
																</div>
															</div>
														</form>
													</div>
													<div class="p-3 mt-auto border-top">
														<div class="btn-list text-end">
															<a href="javascript:void(0);" class="btn btn-outline-danger">Discard</a>
															<a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
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
                    <!--/ row -->

@endsection

@section('scripts')

		<!-- Internal Select2 js-->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')

		<!-- settings js -->
		@vite('resources/assets/js/settings.js')

@endsection
