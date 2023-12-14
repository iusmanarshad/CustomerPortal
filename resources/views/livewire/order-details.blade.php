@extends('layouts.app')

@section('styles')

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">ORDER DETAILS</span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb breadcrumb-style3">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Ecommerce</a></li>
							<li class="breadcrumb-item active" aria-current="page">Order Details</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row -->
                <div class="row row-sm">
                    <div class="col-xl-8">
                        <div class="card">
							<div class="card-header">
								<div class="card-title">Order Details</div>
							</div>
                            <div class="card-body">
                                <div class="table-responsive border radius-7">
                                    <table class="table mb-0 border-0">
                                        <thead>
                                            <tr>
                                                <th colspan="4" class="tx-uppercase bg-custom">order number #1116773</th>
                                                <th class="bg-custom tx-right">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="fe fe-download tx-12"></i> Save</a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="border-top">Product Description</th>
                                                <th class="border-top">Brand</th>
                                                <th class="tx-center border-top">Quantity</th>
                                                <th class="tx-right border-top">Unit Price</th>
                                                <th class="tx-right border-top">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="me-2">
                                                            <div class="avatar-xl">
                                                                <img src="{{asset('build/assets/img/ecommerce/1.jpg')}}" alt="img" class="br-5">
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-2 tx-capitalize">Smart Phone</h6>
                                                            <p class="mb-1 tx-muted font-weight-semibold">Color: <span>Red</span></p>
                                                            <p class="mb-0 tx-muted font-weight-semibold">Size: <span>XL</span></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Beerok</td>
                                                <td class="tx-center">2</td>
                                                <td class="tx-right">$24.23</td>
                                                <td class="tx-right">$48.46</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="me-2">
                                                            <div class="avatar-xl">
                                                                <img src="{{asset('build/assets/img/ecommerce/2.jpg')}}" alt="img" class="br-5">
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-2 tx-capitalize">Bluetooth Earbuds</h6>
                                                            <p class="mb-1 tx-muted font-weight-semibold">Color: <span>White</span></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Hydra</td>
                                                <td class="tx-center">1</td>
                                                <td class="tx-right">$53.00</td>
                                                <td class="tx-right">$53.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="me-2">
                                                            <div class="avatar-xl">
                                                                <img src="{{asset('build/assets/img/ecommerce/3.jpg')}}" alt="img" class="br-5">
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <h6 class="mb-2 tx-capitalize">High Performane Laptop</h6>
                                                            <p class="mb-1 tx-muted font-weight-semibold">Color: <span>White</span></p>
                                                            <p class="mb-0 tx-muted font-weight-semibold">Size: <span>M</span></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Ultron</td>
                                                <td class="tx-center">2</td>
                                                <td class="tx-right">$36.35</td>
                                                <td class="tx-right">$72.70</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" rowspan="5" class="border-end tx-14">
                                                   <span class="me-1"> Order Note:</span> <span class="tx-muted">Ship all the ordered items together.</span>
                                                </td>
                                                <td class="font-weight-semibold">Subtotal</td>
                                                <td class="tx-right font-weight-semibold">$173.30</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-semibold tx-muted border-top-0">Discount <a href="#" class="ms-1 tx-inverse" data-bs-toggle="tooltip" data-bs-placement="top" title="help me"><i class="fe fe-help-circle tx-13"></i></a></td>
                                                <td class="tx-right font-weight-semibold tx-muted border-top-0">-$10.00</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-semibold tx-muted border-top-0">Tax <a href="#" class="ms-1 tx-inverse" data-bs-toggle="tooltip" data-bs-placement="top" title="help me"><i class="fe fe-help-circle tx-13"></i></a></td>
                                                <td class="tx-right font-weight-semibold tx-muted border-top-0">+$5.19</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-semibold tx-muted border-top-0">Delivery <a href="#" class="ms-1 tx-inverse" data-bs-toggle="tooltip" data-bs-placement="top" title="help me"><i class="fe fe-help-circle tx-13"></i></a></td>
                                                <td class="tx-right font-weight-semibold tx-muted border-top-0">+$1.12</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-semibold border-top-dashed tx-15">Total</td>
                                                <td class="tx-right font-weight-semibold border-top-dashed tx-15">$169.61</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
							<div class="card-header">
								<div class="card-title">Track Order</div>
							</div>
                            <div class="card-body">
                                <div class="order-track">
                                    <div class="accordion" id="basicAccordion">
                                        <div class="accordion-item border-0 bg-transparent">
                                            <div class="accordion-header" id="headingOne">
                                                <a class="px-0 pt-0" role="button" data-bs-toggle="collapse" data-bs-target="#basicOne" aria-expanded="true" aria-controls="basicOne">
                                                    <div class="d-flex">
                                                        <div class="me-2">
                                                            <span class="avatar-sm rounded-circle bg-primary-transparent tx-primary border border-primary"><i class="fe fe-package tx-12"></i></span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <p class="font-weight-semibold mb-0 tx-15">Order Placed</p>
                                                            <span class="tx-12">Mar 03, 2022</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="basicOne" class="accordion-collapse collapse show border-top-0" aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
                                                <div class="accordion-body pt-0 pd-s-40">
                                                    <div class="sub-track">
                                                        <p class="mb-0">Order placed successfully by <a href="javascript:void(0);" class="font-weight-semibold tx-primary">Sansa Taylor</a></p>
                                                        <span class="tx-muted">Mar 03, 2022, 15:36</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" id="basicAccordion1">
                                        <div class="accordion-item border-0 bg-transparent">
                                            <div class="accordion-header" id="headingTwo">
                                                <a class="px-0 pt-0" role="button" data-bs-toggle="collapse" data-bs-target="#basicTwo" aria-expanded="true" aria-controls="basicTwo">
                                                    <div class="d-flex">
                                                        <div class="me-2">
                                                            <span class="avatar-sm rounded-circle bg-primary-transparent tx-primary border border-primary"><i class="fe fe-check-circle tx-12"></i></span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <p class="font-weight-semibold mb-0 tx-15">Picked</p>
                                                            <span class="tx-12">Mar 03, 15:10</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="basicTwo" class="accordion-collapse show collapse border-top-0" aria-labelledby="headingTwo" data-bs-parent="#basicAccordion1">
                                                <div class="accordion-body pt-0 pd-s-40">
                                                    <div class="sub-track">
                                                        <p class="mb-0">Your order has been picked up by <span class="font-weight-semibold">Smart Good Services</span></p>
                                                        <span class="tx-muted">Mar 03, 2022, 15:36</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" id="basicAccordion2">
                                        <div class="accordion-item border-0 bg-transparent">
                                            <div class="accordion-header" id="headingThree">
                                                <a class="px-0 pt-0" role="button" data-bs-toggle="collapse" data-bs-target="#basicThree" aria-expanded="true" aria-controls="basicThree">
                                                    <div class="d-flex">
                                                        <div class="me-2">
                                                            <span class="avatar-sm rounded-circle bg-primary-transparent tx-primary border border-primary"><i class="fe fe-truck tx-12"></i></span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <p class="font-weight-semibold mb-0 tx-15">Shipping</p>
                                                            <span class="tx-12">Mar 03, 15:10</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="basicThree" class="accordion-collapse show collapse border-top-0" aria-labelledby="headingThree" data-bs-parent="#basicAccordion2">
                                                <div class="accordion-body pt-0 pd-s-40">
                                                    <div class="sub-track">
                                                        <p class="mb-0">Your order has arrived USA <span class="font-weight-semibold">SGS Warehouse</span></p>
                                                        <span class="tx-muted">Mar 03, 2022, 15:36</span>
                                                    </div>
                                                    <div class="sub-track">
                                                        <p class="mb-0">Your order has been picked up by <span class="font-weight-semibold">SGS Agent</span> and on the way to Hyderabad</p>
                                                        <span class="tx-muted">Mar 03, 2022, 15:36</span>
                                                    </div>
                                                    <div class="sub-track">
                                                        <p class="mb-0">Your order has arrived in Hyderabad and expected Delivery is <span class="font-weight-semibold">Apr 16, 2022</span> </p>
                                                        <span class="tx-muted">Mar 03, 2022, 15:36</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" id="basicAccordion3">
                                        <div class="accordion-item border-0 bg-transparent next-step">
                                            <div class="accordion-header" id="headingFour">
                                                <a class="collapsed px-0 pt-0" role="button" data-bs-toggle="collapse" data-bs-target="#basicFour" aria-expanded="true" aria-controls="basicFour">
                                                    <div class="d-flex">
                                                        <div class="me-2">
                                                            <span class="avatar-sm rounded-circle bg-custom tx-muted border"><i class="fe fe-package tx-12"></i></span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <p class="font-weight-semibold mb-0 tx-15">Out For Delivery</p>
                                                            <span class="tx-muted tx-12">Mar 03, 15:10 (expected)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="basicFour" class="accordion-collapse collapse border-top-0" aria-labelledby="headingFour" data-bs-parent="#basicAccordion3">
                                                <div class="accordion-body pt-0 pd-s-40">
                                                    <div class="sub-track">
                                                        <p class="mb-0">Your order is out for devlivery</p>
                                                        <span class="tx-muted tx-11">Mar 03, 2022, 15:36 (expected)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" id="basicAccordion4">
                                        <div class="accordion-item border-0 bg-transparent next-step">
                                            <div class="accordion-header" id="headingFive">
                                               <a class="collapsed px-0 pt-0" role="button" data-bs-toggle="collapse" aria-expanded="true" >
                                                    <div class="d-flex">
                                                        <div class="me-2">
                                                            <span class="avatar-sm rounded-circle bg-custom tx-muted border"><i class="fe fe-package tx-12"></i></span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <p class="font-weight-semibold mb-0 tx-15">Delivered</p>
                                                            <span class="tx-12">Mar 03, 15:10</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
							<div class="card-header">
								<div class="card-title">Customer Details</div>
							</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-3 tx-muted tx-14">Name</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-3 tx-14">Elisa Jones</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-3 tx-muted tx-14">Mail</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-3 tx-14">elisaparker1116@demo.com</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-3 tx-muted tx-14">Mobile Number</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-3 tx-14">+(773)-1614311</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-3 tx-muted tx-14">Billing Address</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-3 tx-14">
                                            Sed rebum., RD. 12,<br>
                                            NW, Dolor et.,
                                            Gubergren
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-0 tx-muted tx-14">Shipping Address</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-0 tx-14">
                                            Sed rebum., RD. 12,<br>
                                            NW, Dolor et.,
                                            Gubergren
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
							<div class="card-header">
								<div class="card-title">Payment Details</div>
							</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-3 tx-muted tx-14">Transaction ID</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-3 tx-14">#7731614311</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-3 tx-muted tx-14">Mode Of Payment</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-3 tx-14">Debit Card</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-3 tx-muted tx-14">Card Holder Name</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-3 tx-14">Elisa Jones</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-0 tx-muted tx-14">Card Number</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-0 tx-14">XXXX XXXX XXXX 1116</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
							<div class="card-header">
								<div class="card-title">Shipping Details</div>
							</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-3 tx-muted tx-14">Shipping</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-3 tx-14">SafeX Delivery</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <p class="mb-0 tx-muted tx-14">Type Of Delivery</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <p class="mb-0 tx-14">International Shipping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- /row -->

@endsection

@section('scripts')



@endsection
