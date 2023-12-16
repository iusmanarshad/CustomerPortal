@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

        <div class="bg-svg svg-5">
			<div class="page">
				<div class="z-index-10">
					<div class="container">
						<!-- main-error-wrapper -->
						<div class="main-error-wrapper flex-center flex-column tx-center">
							<h1 class="text-white">500<span class="tx-20">error</span></h1>
							<h2 class="text-white">Oopps! The page you were looking for doesn't exist.</h2>
							<h6 class="">You may have mistyped the address or the page may have moved.</h6>
							<a class="btn btn-secondary" href="{{url('index')}}">Back to Home</a>
						</div>
						<!-- /main-error-wrapper -->
					</div>
				</div>
			</div>
		</div>


@endsection

@section('scripts')



@endsection
