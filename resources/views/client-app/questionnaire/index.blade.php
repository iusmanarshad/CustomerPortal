@extends('client-app.layouts.app')

@section('styles')
@endsection

@section('content')

    <questionnaire></questionnaire>

@endsection

@section('scripts')
    <!-- Ionicons js -->
    <script src="{{ asset('build/assets/plugins/ionicons/ionicons.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('build/assets/plugins/moment/moment.js') }}"></script>

    <!-- Internal Data tables -->
    <script src="{{ asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    @vite('resources/assets/js/table-data.js')

    <!-- INTERNAL Select2 js -->
    <script src="{{ asset('build/assets/plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- tootip js -->
    @vite('resources/assets/js/tooltip.js')

    <!-- modal js -->
    @vite('resources/assets/js/modal.js')

    <!--Internal Sumoselect js-->
	<script src="{{asset('build/assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

    <!-- Internal TelephoneInput js-->
    <script src="{{asset('build/assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
    <script src="{{asset('build/assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>

    <!--Internal  Form-elements js-->
    @vite('resources/assets/js/advanced-form-elements.js')

    <!-- Theme Color js -->
	@vite('resources/assets/js/toast.js')

@endsection
