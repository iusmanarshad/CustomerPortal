@extends('layouts.app')

@section('styles')

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
					  <span class="main-content-title mg-b-0 mg-b-lg-1">CALENDAR</span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb breadcrumb-style3">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
							<li class="breadcrumb-item active" aria-current="page">Calendar</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-xl-3 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title mb-3">Draggable Events</h6>
										<div id="external-events">
											<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary text-black">
												<div class="fc-event-main">My Event 1</div>
											</div>
											<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary text-black" data-class="bg-secondary">
												<div class="fc-event-main">My Event 2</div>
											</div>
											<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-green" data-class="bg-green">
												<div class="fc-event-main">My Event 3</div>
											</div>
											<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-purple" data-class="bg-purple">
												<div class="fc-event-main">My Event 4</div>
											</div>
											<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-indigo text-black" data-class="bg-indigo">
												<div class="fc-event-main">My Event 5</div>
											</div>
											<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger" data-class="bg-danger">
												<div class="fc-event-main">My Event 6</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<h6 class="card-title mb-3">Custom Event</h6>
										<form action="#">
											<div class="form-group">
												<label for="eventTitle" class="form-label">Event Title:</label>
												<input class="form-control" id="eventTitle" placeholder="your title here..." type="text">
											</div>
											<div class="form-group">
												<label class="form-label">Event Date:</label>
												<input class="form-control" id="fromDate" placeholder="DD-MM-YYYY" type="text">
											</div>
											<label class="form-label">Event Type:</label>
											<div class="form-group">
												<select name="event-type" class="form-control form-select select2" data-bs-placeholder="Select Type">
													<option label="Choose one"></option>
													<option value="day">Birthday</option>
													<option value="day">Anniversary</option>
													<option value="day">Wedding Day</option>
													<option value="day">Others</option>
												</select>
											</div>
											<label class="form-label">Reminder:</label>
											<div class="form-group">
												<select class="form-control form-select select2" data-bs-placeholder="Choose Reminder">
													<option label="Choose one"></option>
													<option value="day">1 day before</option>
													<option value="day">3 days before</option>
													<option value="day">5 days before</option>
													<option value="day">1 week before</option>
												</select>
											</div>
											<div class="btn-list">
												<button class="btn btn-primary">ADD</button>
												<button class="btn btn-outline-danger">RESET</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div id='calendar2'></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">List Calendar</h3>
							</div>
							<div class="card-body">
								<div id='calendar'></div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->

@endsection

@section('scripts')

		<!-- Internal Select2.min js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- FULL CALENDAR JS -->
		<script src='{{asset('build/assets/plugins/fullcalendar/moment.min.js')}}'></script>
		<script src='{{asset('build/assets/plugins/fullcalendar/fullcalendar.min.js')}}'></script>
		<script src='{{asset('build/assets/plugins/fullcalendar/calendar-events.js')}}'></script>
		@vite('resources/assets/js/fullcalendar.js')

		<!-- Flatpickr js -->
		<script src="{{asset('build/assets/plugins/flatpickr/flatpickr.js')}}"></script>
		@vite('resources/assets/js/flatpickr.js')

@endsection
