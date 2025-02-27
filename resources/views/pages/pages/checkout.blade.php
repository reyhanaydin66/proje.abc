@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

            <!-- PAGE HEADER -->
            <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <h4 class="fw-medium mb-0">Checkout</h4>
                <div class="ms-sm-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- END PAGE HEADER -->

            <!-- APP CONTENT -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <div class="container">
                        <!-- Start::row-1 -->
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card custom-card">
                                    <div class="card-body p-0 product-checkout">
                                        <ul class="nav nav-tabs tab-style-6 nav-justified d-sm-flex d-block border-bottom border-block-end-dashed" id="myTab1" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="order-tab" data-bs-toggle="tab"
                                                    data-bs-target="#order-tab-pane" type="button" role="tab"
                                                    aria-controls="order-tab" aria-selected="true"><i
                                                        class="ri-truck-line me-2 align-middle d-inline-block"></i>Shipping</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="confirmed-tab" data-bs-toggle="tab"
                                                    data-bs-target="#confirm-tab-pane" type="button" role="tab"
                                                    aria-controls="confirmed-tab" aria-selected="false"><i
                                                        class="ri-user-3-line me-2 align-middle d-inline-block"></i>Order-Summary</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="shipped-tab" data-bs-toggle="tab"
                                                    data-bs-target="#shipped-tab-pane" type="button" role="tab"
                                                    aria-controls="shipped-tab" aria-selected="false"><i
                                                        class="ri-bank-card-line me-2 align-middle d-inline-block"></i>Payment</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="delivered-tab" data-bs-toggle="tab"
                                                    data-bs-target="#delivery-tab-pane" type="button" role="tab"
                                                    aria-controls="delivered-tab" aria-selected="false"><i
                                                        class="ri-checkbox-circle-line me-2 align-middle d-inline-block"></i>Confirmation</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane" role="tabpanel"
                                                aria-labelledby="order-tab-pane" tabindex="0">
                                                <div class="p-4">
                                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">01</p>
                                                    <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                        <div>Shipping Address :</div>
                                                        <div class="mt-sm-0 mt-2">
                                                            <button aria-label="button" type="button" class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#modal-new-address"><i class="ri-add-line me-1 align-middle fs-14 fw-semibold"></i>Add New Address</button>
                                                            <div class="modal fade"  id="modal-new-address" tabindex="-1" aria-labelledby="modal-new-address" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="staticBackdropLabel">New Address
                                                                            </h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row gy-3">
                                                                                <div class="col-xl-6">
                                                                                    <label for="fullname-new" class="form-label">Full Name</label>
                                                                                    <input type="text" class="form-control" id="fullname-new" placeholder="Full Name">
                                                                                </div>
                                                                                <div class="col-xl-6">
                                                                                    <label for="email-new" class="form-label">Email</label>
                                                                                    <input type="email" class="form-control" id="email-new" placeholder="email">
                                                                                </div>
                                                                                <div class="col-xl-6">
                                                                                    <label for="phonenumber-new" class="form-label">Phone Number</label>
                                                                                    <input type="number" class="form-control" id="phonenumber-new" placeholder="Phone">
                                                                                </div>
                                                                                <div class="col-xl-6">
                                                                                    <label for="address-new" class="form-label">Address</label>
                                                                                    <input type="text" class="form-control" id="address-new" placeholder="Address">
                                                                                </div>
                                                                                <div class="col-xl-12">
                                                                                    <div class="row">
                                                                                        <div class="col-xl-6">
                                                                                            <label for="pincode-new" class="form-label">Pincode</label>
                                                                                            <input type="number" class="form-control" id="pincode-new" placeholder="Pinicode">
                                                                                        </div>
                                                                                        <div class="col-xl-6">
                                                                                            <label for="city-new" class="form-label">City</label>
                                                                                            <input type="text" class="form-control" id="city-new" placeholder="City">
                                                                                        </div>
                                                                                        <div class="col-xl-6">
                                                                                            <label for="state-new" class="form-label">State</label>
                                                                                            <input type="text" class="form-control" id="state-new" placeholder="State">
                                                                                        </div>
                                                                                        <div class="col-xl-6">
                                                                                            <label for="country-new" class="form-label">Country</label>
                                                                                            <input type="text" class="form-control" id="country-new" placeholder="Country">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-success">Save
                                                                                Address</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row gy-4 mb-4">
                                                        <div class="col-xl-6">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="fullname-add" value="Json Taylor" placeholder="Name">
                                                                <label for="fullname-add">Full Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-floating">
                                                                <input type="email" class="form-control" id="email-add" value="jsontaylor2413@gmail.com" placeholder="name@example.com">
                                                                <label for="email-add">Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-floating">
                                                                <input type="email" class="form-control is-valid" id="phoneno-add" value="(555) 555-1234" placeholder="1234-XX-XXXX">
                                                                <label for="phoneno-add">Phone No</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-floating">
                                                                <textarea class="form-control" placeholder="Address Here" id="address-add">MIG-1-11,Monroe Street,Washington D.C,USA</textarea>
                                                                <label for="address-add">Address</label>
                                                            </div>
                                                            <div class="form-check mt-1">
                                                                <input class="form-check-input form-checked-outline form-checked-success" type="checkbox" value="" id="invalidCheck" required checked>
                                                                <label class="form-check-label text-success" for="invalidCheck">
                                                                    Same as Billing Address ?
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="row gy-2">
                                                                <div class="col-xl-3">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control is-valid" id="pincode-add" value="20071" placeholder="Name">
                                                                        <label for="pincode-add">Pin Code</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" id="city-add" value="Georgetown" placeholder="Name">
                                                                        <label for="city-add">City</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" id="state-add" value="Washington, D.C" placeholder="Name">
                                                                        <label for="state-add">State</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" id="country-add" value="USA" placeholder="Name">
                                                                        <label for="country-add">Country</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row gy-3">
                                                        <p class="fs-15 fw-semibold mb-1">Shipping Methods :</p>
                                                        <div class="col-xl-6">
                                                            <div class="form-check shipping-method-container mb-0">
                                                                <input id="shipping-method1" name="shipping-methods" type="radio" class="form-check-input" checked>
                                                                <div class="form-check-label">
                                                                <div class="d-sm-flex align-items-center justify-content-between">
                                                                    <div class="shipping-partner-details me-sm-5 me-0">
                                                                        <p class="mb-0 fw-semibold">UPS</p>
                                                                        <p class="text-muted fs-11 mb-0">Delivered By 24,Nov</p>
                                                                    </div>
                                                                    <div class="fw-semibold me-sm-5 me-0">
                                                                        $9.99
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-check shipping-method-container mb-0">
                                                                <input id="shipping-method2" name="shipping-methods" type="radio" class="form-check-input">
                                                                <div class="form-check-label">
                                                                <div class="d-sm-flex align-items-center justify-content-between">
                                                                    <div class="shipping-partner-details me-sm-5 me-0">
                                                                        <p class="mb-0 fw-semibold">USPS</p>
                                                                        <p class="text-muted fs-11 mb-0">Delivered By 22,Nov</p>
                                                                    </div>
                                                                    <div class="fw-semibold me-sm-5 me-0">
                                                                        $10.49
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-check shipping-method-container mb-0">
                                                                <input id="shipping-method3" name="shipping-methods" type="radio" class="form-check-input">
                                                                <div class="form-check-label">
                                                                <div class="d-sm-flex align-items-center justify-content-between">
                                                                    <div class="shipping-partner-details me-sm-5 me-0">
                                                                        <p class="mb-0 fw-semibold">FedEx</p>
                                                                        <p class="text-muted fs-11 mb-0">Delivered Tomorrow</p>
                                                                    </div>
                                                                    <div class="fw-semibold me-sm-5 me-0">
                                                                        $12.29
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-check shipping-method-container mb-0">
                                                                <input id="shipping-method4" name="shipping-methods" type="radio" class="form-check-input">
                                                                <div class="form-check-label">
                                                                <div class="d-sm-flex align-items-center justify-content-between">
                                                                    <div class="shipping-partner-details me-sm-5 me-0">
                                                                        <p class="mb-0 fw-semibold">DHL</p>
                                                                        <p class="text-muted fs-11 mb-0">Delivered Today</p>
                                                                    </div>
                                                                    <div class="fw-semibold me-sm-5 me-0">
                                                                        $18.99
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                                    <button type="button" class="btn btn-success d-inline-flex" id="personal-details-trigger">Order Summary<i class="ri-user-3-line ms-2 align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade border-0 p-0" id="confirm-tab-pane"
                                                role="tabpanel" aria-labelledby="confirm-tab-pane" tabindex="0">
                                                <div class="p-4">
                                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">02</p>
                                                    <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                        <div>Order Summary :</div>
                                                    </div>
                                                    <ul class="list-group mb-0 border-0 rounded-0">
                                                        <li class="list-group-item  border-bottom border-block-end-dashed">
                                                            <div class="d-flex align-items-start flex-wrap">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-xxl bd-gray-200">
                                                                        <img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fw-semibold  fs-15">Green color money plant with pot</p>
                                                                    <p class="mb-0 fs-14 fw-semibold">$189<span class="ms-1 text-muted fs-11"><s>$987</s></span></p>
                                                                    <p class="mb-0 text-muted fs-12">Quantity : 1  <span class="badge bg-success-transparent ms-3">50% Off</span></p>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 text-end">
                                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                                            <i class="ri-close-line fs-15 text-danger bg-danger-transparent rounded-1"></i>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item  border-bottom border-block-end-dashed">
                                                            <div class="d-flex align-items-start flex-wrap">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-xxl bd-gray-200">
                                                                        <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fw-semibold  fs-15">Cactus plants with gray color pot </p>
                                                                    <p class="mb-0 fs-14 fw-semibold">$129<span class="ms-1 text-muted fs-11"><s>$198</s></span></p>
                                                                    <p class="mb-0 text-muted fs-12">Quantity : 2  <span class="badge bg-success-transparent ms-3">30% Off</span></p>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 text-end">
                                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                                            <i class="ri-close-line fs-15 text-danger bg-danger-transparent rounded-1"></i>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item  border-bottom">
                                                            <div class="d-flex align-items-start flex-wrap">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-xxl bd-gray-200">
                                                                        <img src="{{asset('build/assets/images/ecommerce/png/5.png')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <p class="mb-0 fw-semibold fs-15">Combo Cactus plants with color pots</p>
                                                                    <p class="mb-0 fs-14 fw-semibold">$329<span class="ms-1 text-muted fs-11"><s>$50</s></span></p>
                                                                    <p class="mb-0 text-muted fs-12">Quantity : 4  <span class="badge bg-success-transparent ms-3">70% Off</span></p>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 text-end">
                                                                        <a aria-label="anchor" href="javascript:void(0)">
                                                                            <i class="ri-close-line fs-15 text-danger bg-danger-transparent rounded-1"></i>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                    <button type="button" class="btn btn-danger-light d-inline-flex" id="back-shipping-trigger"><i class="ri-truck-line me-2 align-middle"></i>Back To Shipping</button>
                                                    <button type="button" class="btn btn-success mt-sm-0 mt-2 d-inline-flex" id="payment-trigger">Continue To Payment<i class="bi bi-credit-card-2-front align-middle ms-2"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade border-0 p-0" id="shipped-tab-pane" role="tabpanel"
                                                aria-labelledby="shipped-tab-pane" tabindex="0">
                                                <div class="p-4">
                                                    <p class="mb-1 fw-semibold text-muted op-5 fs-20">03</p>
                                                    <div class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                        <div>Payment Details :</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Delivery Address</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Address" aria-label="address" aria-describedby="payment-address" value="MIG-1-11,Monroe Street,Washington D.C,USA">
                                                                    <button type="button" class="btn btn-info-light input-group-text" id="payment-address">Change</button>
                                                                </div>
                                                            </div>
                                                            <div class="card custom-card border shadow-none mb-3">
                                                                <div class="card-header">
                                                                    <div class="card-title">
                                                                        Payment Methods
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="btn-group mb-3 d-sm-flex d-block" role="group" aria-label="Basic radio toggle button group">
                                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                                                        <label class="btn btn-outline-light text-default" for="btnradio1">C.O.D(Cash on delivery)</label>
                                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                                        <label class="btn btn-outline-light text-default mt-sm-0 mt-1" for="btnradio2">UPI</label>
                                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" checked>
                                                                        <label class="btn btn-outline-light text-default mt-sm-0 mt-1" for="btnradio3">Credit/Debit Card</label>
                                                                    </div>
                                                                    <div class="row gy-3">
                                                                        <div class="col-xl-12">
                                                                            <label for="payment-card-number" class="form-label">Card Number</label>
                                                                            <input type="text" class="form-control" id="payment-card-number" placeholder="Card Number" value="1245 - 5447 - 8934 - XXXX">
                                                                        </div>
                                                                        <div class="col-xl-12">
                                                                            <label for="payment-card-name" class="form-label">Name On Card</label>
                                                                            <input type="text" class="form-control" id="payment-card-name" placeholder="Name On Card" value="JSON TAYLOR">
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <label for="payment-cardexpiry-date" class="form-label">Expiration Date</label>
                                                                            <input type="text" class="form-control" id="payment-cardexpiry-date" placeholder="MM/YY" value="08/2024">
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <label for="payment-cvv" class="form-label">CVV</label>
                                                                            <input type="text" class="form-control" id="payment-cvv" placeholder="XXX" value="341">
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <label for="payment-security" class="form-label">O.T.P</label>
                                                                            <input type="text" class="form-control" id="payment-security" placeholder="XXXXXX" value="183467">
                                                                            <label for="payment-security" class="form-label mt-1 text-success fs-11"><sup><i class="ri-star-s-fill"></i></sup>Do not share O.T.P with anyone</label>
                                                                        </div>
                                                                        <div class="col-xl-12">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input form-checked-success" type="checkbox" value="" id="payment-card-save" checked>
                                                                                <label class="form-check-label" for="payment-card-save">
                                                                                    Save this card
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <div class="row gy-3">
                                                                        <p class="fs-15 fw-semibold mb-1">Other Cards :</p>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <div class="form-check payment-card-container mb-0 lh-1">
                                                                                <input id="payment-card1" name="payment-cards" type="radio" class="form-check-input" checked>
                                                                                <div class="form-check-label">
                                                                                <div class="d-sm-flex d-block align-items-center justify-content-between">
                                                                                    <div class="me-2 lh-1">
                                                                                        <img src="{{asset('build/assets/images/payment-cards/1.png')}}" alt="" class="avatar avatar-lg">
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <div class="form-check payment-card-container mb-0 lh-1">
                                                                                <input id="payment-card2" name="payment-cards" type="radio" class="form-check-input">
                                                                                <div class="form-check-label">
                                                                                <div class="d-sm-flex d-block align-items-center justify-content-between">
                                                                                    <div class="me-2 lh-1">
                                                                                            <img src="{{asset('build/assets/images/payment-cards/3.png')}}" alt=" "  class="avatar avatar-lg">
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <div class="form-check payment-card-container mb-0 lh-1">
                                                                                <input name="payment-cards" type="radio" class="form-check-input">
                                                                                <div class="form-check-label">
                                                                                <div class="d-sm-flex d-block align-items-center justify-content-between">
                                                                                    <div class="me-2 lh-1">
                                                                                        <img src="{{asset('build/assets/images/payment-cards/4.png')}}" alt="" class="avatar avatar-lg">
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6">
                                                                            <div class="form-check payment-card-container mb-0 lh-1">
                                                                                <input name="payment-cards" type="radio" class="form-check-input">
                                                                                <div class="form-check-label">
                                                                                <div class="d-sm-flex d-block align-items-center justify-content-between">
                                                                                    <div class="me-2 lh-1">
                                                                                        <img src="{{asset('build/assets/images/payment-cards/5.png')}}" alt="" class="avatar avatar-lg">
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                    <button type="button" class="btn btn-danger-light d-inline-flex" id="back-personal-trigger"><i class="ri-user-3-line me-2 align-middle"></i>Back To Personal Info</button>
                                                    <button type="button" class="btn btn-success mt-sm-0 mt-2" id="continue-payment-trigger">Continue Payment<i class="bi bi-credit-card-2-front align-middle ms-2"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade border-0 p-0" id="delivery-tab-pane" role="tabpanel"
                                                aria-labelledby="delivery-tab-pane" tabindex="0">
                                                <div class="p-5 checkout-payment-success my-3">
                                                    <div class="mb-5">
                                                        <h5 class="text-success fw-semibold">Payment Successful... &#128522;</h5>
                                                    </div>
                                                    <div class="mb-5">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/24.png')}}" alt="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <p class="mb-1 fs-14">You can track your order with Order Id <b>SPK#1FR</b> from <a class="link-success" href="javascript:void(0);"><u>Track Order</u></a></p>
                                                        <p class="text-muted">Thankyou for shopping with us.</p>
                                                    </div>
                                                    <a href="{{url('products')}}" class="btn btn-success">Continue Shopping<i class="bi bi-cart ms-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title me-1">Order Details</div><span class="badge bg-success-transparent rounded-pill">03</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="p-3 border-bottom border-block-end-dashed">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="fw-semibold fs-14">Products</div>
                                                <div class="fw-semibold fs-14">Quantity</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="text-muted fs-15"> Hoodie</div>
                                                <div class="fw-semibold fs-15n ">1</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="text-muted  fs-14 ">T-shirt</div>
                                                <div class="fw-semibold fs-14">2</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="text-muted  fs-14 ">Jacket</div>
                                                <div class="fw-semibold fs-14">4</div>
                                            </div>
                                        </div>
                                        <div class="p-3 border-bottom border-block-end-dashed">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="fs-12 fw-semibold bg-primary-transparent p-2 rounded">SPRUKO25</div>
                                                <div class="text-success">COUPON APPLIED</div>
                                            </div>
                                        </div>
                                        <div class="p-3 border-bottom border-block-end-dashed">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="text-muted op-7">Sub Total</div>
                                                <div class="fw-semibold fs-14">$318</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="text-muted op-7">Discount</div>
                                                <div class="fw-semibold fs-14 text-success">10% - $31.8</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="text-muted op-7">Delivery Charges</div>
                                                <div class="fw-semibold fs-14 text-danger">- $29</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="text-muted op-7">Service Tax (18%)</div>
                                                <div class="fw-semibold fs-14">- $45.29</div>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="fs-15">Total :</div>
                                                <div class="fw-semibold fs-16 text-dark"> $1,387</div>
                                            </div>
                                        </div>
                                        <div class="p-2 m-2 bg-success-transparent">
                                            <div class="d-flex  justify-content-between  align-items-center">
                                                <p class="fs-12 mb-0 text-success">Your total savings amount</p>
                                                <div class="fw-semibold fs-16 text-Success"> $687</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->
                    </div>

                </div>
            </div>
            <!-- END APP CONTENT -->

@endsection

@section('scripts')

        <!-- INTERNAL CHECKOUT JS -->
        @vite('resources/assets/js/checkout.js')


@endsection