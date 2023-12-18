@extends('customer-portal.layouts.app')

@section('styles')
@endsection

@section('content')
    <create-client></create-client>
@endsection

@section('scripts')
    <!-- Internal Jquery.steps js -->
    <script src="{{ asset('build/assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/parsleyjs/parsley.min.js') }}"></script>

    <script>

    </script>

    <!--Internal Fileuploads js-->
    <script src="{{ asset('build/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <!-- <script src="{{ asset('build/assets/plugins/fileuploads/js/file-upload.js') }}"></script> -->

    <!--Internal Fancy uploader js-->
    <script src="{{ asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
@endsection
