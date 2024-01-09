@extends('customer-portal.layouts.app')

@section('styles')
@endsection

@section('content')

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title tx-primary mg-b-0 mg-b-lg-1">Messages</span>
        </div>
    </div>
    <!-- /breadcrumb -->
    <portal-messages :user-id="{{ auth()->user()->id }}" :associate-id="{{ auth()->user()->associate_id }}"></portal-messages>

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

    {{-- <script>
        document.getElementById('createClientButton').addEventListener('click', function () {
            // Submit the form when the button is clicked
            document.getElementById('createClientForm').submit();
        });
    </script>

    <script>
        // Assuming you're using jQuery
        $(document).ready(function () {

            // Clear the session data
            @if(session('modalOpen') || $errors->any())
                // Get the button element by its ID
                var addClientModalBtn = document.getElementById('addClientModalBtn');

                // Programmatically click the button
                addClientModalBtn.click();

                @php session(['modalOpen' => null]) @endphp
                @php $errors = null @endphp
            @endif
        });
    </script> --}}

@endsection
