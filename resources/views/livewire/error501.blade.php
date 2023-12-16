@extends('layouts.app')

@section('styles')

@endsection

@section('content')

			<!-- main-content -->
			<div class="main-content app-content flex-center m-0 pt-2">

				<!-- Main-error-wrapper -->
				<div class="main-error-wrapper flex-center flex-column">
					<h1>501<span class="tx-20">error</span></h1>
					<h2 class="tx-center">Oopps. The page you were looking for doesn't exist.</h2>
					<h6 class="tx-center">You may have mistyped the address or the page may have moved.</h6><a class="btn btn-primary" href="{{url('index')}}">Back to Home</a>
				</div>
				<!-- /Main-error-wrapper -->

			</div>
			<!-- main-content closed -->

@endsection

@section('scripts')



@endsection
