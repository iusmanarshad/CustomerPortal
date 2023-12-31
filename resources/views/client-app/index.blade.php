@extends('client-app.layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">Home</span>
        </div>
    </div>
    <!-- /breadcrumb -->

    <client-dashboard :user-id="{{ auth()->user()->id }}"></client-dashboard>
@endsection

@section('scripts')
    <!-- Select2 js -->
    <script src="{{ asset('build/assets/plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- Data tables -->
    <script src="{{ asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>

    <!-- Internal index js -->
    @vite('resources/assets/js/index-4.js')
@endsection
