@extends('customer-portal.layouts.app')

@section('styles')
@endsection

@section('content')
    @if (session('status') && session('status') == 'success-alert')
        <div class="alert style-2 alert-outline-success alert-dismissible fade show mt-3" role="alert">
            <div class="alert_content success">
                <span class="avatar avatar-sm rounded-circle bg-success shadow mx-1">
                    <i class="fas fa-check-circle text-white"></i>
                </span>
                <div class="ms-2">
                    <p class="mb-0 tx-14 tx-success font-weight-semibold">{{ session('alert-heading') }}</p>
                    <span class="tx-12 tx-muted">{{ session('alert-text') }}</span>
                </div>
            </div>
            <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title tx-primary mg-b-0 mg-b-lg-1">Clients</span>
        </div>
        {{--<div class="justify-content-center mt-2">
            <ol class="breadcrumb breadcrumb-style3">
                <li class="breadcrumb-item tx-15"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Main</li>
            </ol>
        </div>--}}
    </div>
    <!-- /breadcrumb -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="d-flex flex-row w-full justify-content-between align-items-center">
                            <div>
                                All Clients
                            </div>
                            <button type="button" class="btn btn-outline-primary mx-2 button-icon" id="addClientModalBtn" data-bs-toggle="modal"
                                data-bs-target="#addClientModal">
                                <i class="fe fe-plus me-2"></i> Add Client
                            </button>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="fieExportDataTable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">Owner Name</th>
                                    <th class="border-bottom-0">Email</th>
                                    <th class="border-bottom-0">Phone No.</th>
                                    <th class="border-bottom-0">Status</th>
                                    <th class="border-bottom-0">Notes</th>
                                    <th class="border-bottom-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->owner_name }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td></td>
                                        <td>
                                            <span class="tag rounded-pill tag-outline-success me-1">Active</span>
                                        </td>
                                        <td>
                                            <div data-bs-placement="top" data-bs-toggle="tooltip" title="View all notes"
                                                class="btn">
                                                <i class="ti-receipt"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div data-bs-placement="top" data-bs-toggle="tooltip" title="Invite by email"
                                                class="btn">
                                                <i class="ti-email text-primary"></i>
                                            </div>

                                            <div aria-label="Basic example" class="btn-group mb-1" role="group">
                                                <button class="btn btn-primary btn-icon" type="button" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title="View">
                                                    <i class="ti-eye text-white"></i>
                                                </button>
                                                <button class="btn btn-primary btn-icon" type="button" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title="Edit">
                                                    <i class="ti-pencil-alt text-white"></i>
                                                </button>
                                                <button class="btn btn-primary btn-icon" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title="Delete" type="button">
                                                    <i class="ti-trash text-white" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->



    <!-- Delete confirmation modal -->
    <div class="modal fade" id="deleteConfirmationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this user?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete confirmation modal -->

    <!-- Add client modal -->
    <div class="modal fade" id="addClientModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Add Client</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="createClientForm" action="{{ route('portal.client.create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inpFirstName">First Name</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="inpFirstName" name="first_name" value="{{ old('first_name') }}" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                            <label for="inpLastName">Last Name</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="inpLastName" name="last_name" value="{{ old('last_name') }}" placeholder="Enter last name">
                        </div>
                        <div class="form-group">
                            <label for="inpOwnerName">Owner Name</label>
                            <input type="text" class="form-control @error('owner_name') is-invalid @enderror" id="inpOwnerName" name="owner_name" value="{{ old('owner_name') }}" placeholder="Enter owner name">
                        </div>
                        <div class="form-group">
                            <label for="inpEmail">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="inpEmail" name="email" value="{{ old('email') }}" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="inpPassword">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="inpPassword" name="password" placeholder="Password">
                        </div>
                    </form>

                    @if ($errors->any())
                        <div class="alert alert-danger mb-0 mt-2">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                    <button class="btn btn-sm btn-primary" data-bs-dismiss="modal" type="button" id="createClientButton">Save Changes</button>
                </div>

            </div>

        </div>
    </div>
    <!-- Add client modal -->
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

    <script>
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
    </script>

@endsection
