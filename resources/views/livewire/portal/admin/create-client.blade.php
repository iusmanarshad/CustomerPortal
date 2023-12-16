@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <form id="createClientForm" action="{{ route('admin.client.create') }}" method="POST">
        @csrf
        <div id="wizard2" class="br-5">
            <h3>Personal Information</h3>
            <section>
                <p class="mg-b-20 tx-14">Try the keyboard navigation by clicking arrow left or right!</p>
                <div class="row row-sm">
                    <div class="col-md-5 col-lg-4">
                        <label for="firstname" class="form-label">Firstname: <span class="tx-danger">*</span></label>
                        <input type="text" id="firstname" class="form-control" name="first_name"
                            placeholder="Enter first name" required>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <label for="lastname" class="form-label">Lastname: <span class="tx-danger">*</span></label>
                        <input type="text" id="lastname" class="form-control" name="last_name"
                            placeholder="Enter last name">
                    </div>
                </div>
            </section>
            <h3>Account Information</h3>
            <section>
                <p class="mg-b-20 tx-14">Try the keyboard navigation by clicking arrow left or right!</p>
                <div class="row row-sm">
                    <div class="col-md-5 col-lg-4">
                        <label for="email" class="form-label">Email: <span class="tx-danger">*</span></label>
                        <input type="email" id="email" class="form-control" name="email"
                            placeholder="Enter email address" required>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <label for="password" class="form-label">Password: <span class="tx-danger">*</span></label>
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="Enter password" required>
                    </div>
                </div>
            </section>
            <h3>Owner Details</h3>
            <section>
                <div class="form-group">
                    <label for="owner_name" class="form-label">Owner Name</label>
                    <input type="text" id="owner_name" name="owner_name" class="form-control" placeholder="Owner Name">
                </div>
            </section>
        </div>
    </form>
@endsection

@section('scripts')
    <!-- Internal Jquery.steps js -->
    <script src="{{ asset('build/assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/parsleyjs/parsley.min.js') }}"></script>

    <script>
        $('#wizard2').steps({
        headerTag: 'h3',
        bodyTag: 'section',
        autoFocus: true,
        titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
        onFinished: function (event, currentIndex) {
            console.log("Finished the wizard")
            document.getElementById('createClientForm').submit();
            //$("#form").submit();
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            if (currentIndex < newIndex) {
                // Step 1 form validation
                if (currentIndex === 0) {
                    var fname = $('#firstname').parsley();
                    var lname = $('#lastname').parsley();
                    if (fname.isValid() && lname.isValid()) {
                        return true;
                    } else {
                        fname.validate();
                        lname.validate();
                    }
                }
                // Step 2 form validation
                if (currentIndex === 1) {
                    console.log("2nd the wizard")
                    var email = $('#email').parsley();
                    if (email.isValid()) {
                        return true;
                    } else {
                        email.validate();
                    }
                }
                // Always allow step back to the previous step even if the current step is not valid.
            } else {
                return true;
            }
        }
    });
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
