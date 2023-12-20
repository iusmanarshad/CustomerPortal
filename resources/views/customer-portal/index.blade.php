@extends('customer-portal.layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">DASHBOARD</span>
        </div>
        <div class="justify-content-center mt-2">
            <ol class="breadcrumb breadcrumb-style3">
                <li class="breadcrumb-item tx-15"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="row">
        <div class="col-xl col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column mb-0">
                        <div class="mb-3">
                            <a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
                            </ul>
                            <div class="avatar radius-4 bg-primary-transparent">
                                <i class="fa fa-fire tx-primary"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">435</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">Total Campaign</p>
                                <span class="badge badge-success-transparent badge-sm rounded-pill">+12.86%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column mb-0">
                        <div class="mb-3">
                            <a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
                            </ul>
                            <div class="avatar radius-4 bg-secondary-transparent">
                                <i class="fa fa-envelope tx-secondary"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">2,348</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">Mails Sent</p>
                                <span class="badge badge-danger-transparent badge-sm rounded-pill">-1.5%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column mb-0">
                        <div class="mb-3">
                            <a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
                            </ul>
                            <div class="avatar radius-4 bg-warning-transparent">
                                <i class="fa fa-handshake tx-warning"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">5,417</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">Total Deals</p>
                                <span class="badge badge-danger-transparent badge-sm rounded-pill">-1.5%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column mb-0">
                        <div class="mb-3">
                            <a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
                            </ul>
                            <div class="avatar radius-4 bg-success-transparent">
                                <i class="fa fa-users tx-success"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">43,294</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">Total Clients</p>
                                <span class="badge badge-success-transparent badge-sm rounded-pill">+2.86%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column mb-0">
                        <div class="mb-3">
                            <a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
                            </ul>
                            <div class="avatar radius-4 bg-purple-transparent">
                                <i class="fa fa-coins tx-purple"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">$43,038.00</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">Total Revenue</p>
                                <span class="badge badge-success-transparent badge-sm rounded-pill">+5.1%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Upcomming Deadlines
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap mb-0" id="recentInvoices">
                            <thead>
                                <tr>
                                    <th class="tx-center wd-5p">S.No.</th>
                                    <th>ID</th>
                                    <th>From</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="tx-center">1</td>
                                    <th>#INV110039</th>
                                    <th>No Sit Ipsum</th>
                                    <th>11-04-2022</th>
                                    <th>$12,890</th>
                                    <th><span class="badge badge-sm rounded-pill badge-success-transparent">Paid</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="tx-center">2</td>
                                    <th>#INV456158</th>
                                    <th>Takimata Sccusam Auo</th>
                                    <th>12-04-2022</th>
                                    <th>$22,890</th>
                                    <th><span class="badge badge-sm rounded-pill badge-warning-transparent">On Hold</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="tx-center">3</td>
                                    <th>#INV785134</th>
                                    <th>Et Eed Sit</th>
                                    <th>15-04-2022</th>
                                    <th>$2,720</th>
                                    <th><span
                                            class="badge badge-sm rounded-pill badge-primary-transparent">Processing</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="tx-center">4</td>
                                    <th>#INV758125</th>
                                    <th>Clita Gusto Smet</th>
                                    <th>16-04-2022</th>
                                    <th>$40,120</th>
                                    <th><span class="badge badge-sm rounded-pill badge-success-transparent">Paid</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="tx-center">5</td>
                                    <th>#INV758612</th>
                                    <th>Eirmod Fliquyam Dorem</th>
                                    <th>18-04-2022</th>
                                    <th>$7,120</th>
                                    <th><span class="badge badge-sm rounded-pill badge-warning-transparent">On Hold</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="tx-center">6</td>
                                    <th>#INV175367</th>
                                    <th>Elitr Eolore Dst</th>
                                    <th>19-04-2022</th>
                                    <th>$17,200</th>
                                    <th><span
                                            class="badge badge-sm rounded-pill badge-primary-transparent">Processing</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="tx-center">7</td>
                                    <th>#INV456823</th>
                                    <th>Sed Ft Wakimata</th>
                                    <th>20-04-2022</th>
                                    <th>$7,100</th>
                                    <th><span class="badge badge-sm rounded-pill badge-success-transparent">Paid</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="tx-center">8</td>
                                    <th>#INV523671</th>
                                    <th>Stet Et Donsetetur</th>
                                    <th>25-04-2022</th>
                                    <th>$31,100</th>
                                    <th><span class="badge badge-sm rounded-pill badge-warning-transparent">On Hold</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="tx-center">9</td>
                                    <th>#INV123856</th>
                                    <th>Labore Et Dlita</th>
                                    <th>28-04-2022</th>
                                    <th>$12,100</th>
                                    <th><span
                                            class="badge badge-sm rounded-pill badge-primary-transparent">Processing</span>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="tx-center">10</td>
                                    <th>#INV785692</th>
                                    <th>Est Rusto Sliquyam</th>
                                    <th>29-04-2022</th>
                                    <th>$20,100</th>
                                    <th><span class="badge badge-sm rounded-pill badge-success-transparent">Paid</span>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
