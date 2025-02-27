@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Order Details</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <!-- Start::row-1 -->
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="card custom-card">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <div class="card-title">
                                                                Order No - <span class="text-primary">#SPK-1023</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-body p-0">
                                                            <div class="table-responsive">
                                                                <table class="table text-nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Item</th>
                                                                            <th scope="col">Tracking No</th>
                                                                            <th scope="col">Price</th>
                                                                            <th scope="col">Quantity</th>
                                                                            <th scope="col">Total Price</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="me-3 lh-1">
                                                                                        <span class="avatar avatar-xxl bd-gray-200">
                                                                                            <img src="{{asset('build/assets/images/ecommerce/png/14.png')}}" alt="">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="mb-1 fs-14 fw-semibold">
                                                                                            <a href="javascript:void(0);">Sports shoes series 4</a>
                                                                                        </div>
                                                                                        <div class="mb-1">
                                                                                            <span class="me-1">Dial Size:</span><span class="text-muted">44mm</span>
                                                                                        </div>
                                                                                        <div class="mb-1">
                                                                                            <span class="me-1">Color:</span><span class="text-muted">Metallic Black</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1218153635</a></td>
                                                                            <td>
                                                                                <span class="fs-15 fw-semibold">$1,249</span>
                                                                            </td>
                                                                            <td class="">1</td>
                                                                            <td>
                                                                                <span class="fs-15 fw-semibold">$1,249</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="me-3 lh-1">
                                                                                        <span class="avatar avatar-xxl bd-gray-200">
                                                                                            <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="mb-1 fs-14 fw-semibold">
                                                                                            <a href="javascript:void(0);">Cactus plant with gray color pot</a>
                                                                                        </div>
                                                                                        <div class="mb-1">
                                                                                            <span class="me-1">Size:</span><span class="text-muted">Large</span>
                                                                                        </div>
                                                                                        <div class="mb-1">
                                                                                            <span class="me-1">Color:</span><span class="text-muted">Orange<span class="badge bg-info ms-3">32% Off</span></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td><a href="javascrpt:void(0);" class="text-primary">SPK1120324532</a></td>
                                                                            <td>
                                                                                <span class="fs-15 fw-semibold">$799</span>
                                                                            </td>
                                                                            <td class="">1</td>
                                                                            <td>
                                                                            <span class="fs-15 fw-semibold">$799</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="me-3 lh-1">
                                                                                        <span class="avatar avatar-xxl bd-gray-200">
                                                                                            <img src="{{asset('build/assets/images/ecommerce/png/40.png')}}" alt="">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="mb-1 fs-14 fw-semibold">
                                                                                            <a href="javascript:void(0);">Smart watch for women</a>
                                                                                        </div>
                                                                                        <div class="mb-1">
                                                                                            <span class="me-1">Size:</span><span class="text-muted">Large</span>
                                                                                        </div>
                                                                                        <div class="mb-1">
                                                                                            <span class="me-1">Color:</span><span class="text-muted">Orange<span class="badge bg-info ms-3">32% Off</span></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td><a href="javascrpt:void(0);" class="text-primary">SPK1120324932</a></td>
                                                                            <td>
                                                                                <span class="fs-15 fw-semibold">$800</span>
                                                                            </td>
                                                                            <td class="">2</td>
                                                                            <td>
                                                                                <span class="fs-15 fw-semibold">$1600</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="me-3 lh-1">
                                                                                        <span class="avatar avatar-xxl bd-gray-200">
                                                                                            <img src="{{asset('build/assets/images/ecommerce/png/6.png')}}" alt="">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="mb-1 fs-14 fw-semibold">
                                                                                            <a href="javascript:void(0);">Combo mini plant sets</a>
                                                                                        </div>
                                                                                        <div class="mb-1">
                                                                                            <span class="me-1">Dial Size:</span><span class="text-muted">44mm</span>
                                                                                        </div>
                                                                                        <div class="mb-1">
                                                                                            <span class="me-1">Color:</span><span class="text-muted">Metallic Black</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td><a href="javascript:void(0);" class="text-primary">SPK12181536395</a></td>
                                                                            <td>
                                                                                <span class="fs-15 fw-semibold">$7,249</span>
                                                                            </td>
                                                                            <td class="">1</td>
                                                                            <td>
                                                                                <span class="fs-15 fw-semibold">$3,249</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-top-0">
                                                            <div class="btn-list float-end">
                                                                <button type="button" class="d-inline-flex btn btn-primary btn-wave"><i class="ri-printer-line me-1 align-middle"></i>Print</button>
                                                                <button type="button" class="d-inline-flex btn btn-secondary btn-wave"><i class="ri-share-forward-line me-1 align-middle"></i>Share Details</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="card custom-card">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                Customer Details
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="list-unstyled order-details-list">
                                                                <li>
                                                                    <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">Name : </span>Jacob Smith</div>
                                                                </li>
                                                                <li>
                                                                    <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">Email : </span><a href="javascript:void(0);" class="text-primary">jacobsmith232@gmail.com</a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">Phone : </span>(555) - 0123 - 1215</div>
                                                                </li>
                                                                <li>
                                                                    <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">Land Mark : </span>Lf-21-089</div>
                                                                </li>
                                                                <li>
                                                                    <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">Street : </span>Lincoln Street</div>
                                                                </li>
                                                                <li>
                                                                    <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">City : </span>Los Angeles</div>
                                                                </li>
                                                                <li>
                                                                    <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">State : </span>San Fransisco</div>
                                                                </li>
                                                                <li>
                                                                    <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">Zip : </span>200071</div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="card custom-card overflow-hidden">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                Delivery Address
                                                            </div>
                                                        </div>
                                                        <div class="card-body p-0">
                                                            <div class="p-3"> 
                                                                <div class="mb-3"> 
                                                                    <span class="fs-15 fw-semibold">Billing Address :</span> 
                                                                </div> 
                                                                <ul class="list-unstyled order-details-list">
                                                                    <li>
                                                                        <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">Street : </span>2840 Wilderness Pl</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">City/Town : </span>Boulder</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">State/Province/Region : </span>Colorado</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">Zip/Postal Code : </span>80301</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">Phone Number : </span>(303) 447-0600</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="fs-14 text-muted"><span class="me-2 text-default fw-semibold">Country : </span>United States</div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="alert alert-success d-flex align-items-center rounded-0 shadow-none" role="alert">
                                                                <svg class="flex-shrink-0 me-2 svg-success" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"></path><path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                                                                <div>
                                                                    <strong>Shipping address</strong> is same as billing address   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="card custom-card">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                Shipping Details
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center">
                                                            <div class="text-center mb-2">
                                                                <span class="avatar avatar-xxl">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/29.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-15 fw-semibold">
                                                                FedEx Home Delivery Services
                                                            </div>
                                                            <div class="text-muted fs-12 mb-3">Scan barcode to track order</div>
                                                            <div><img src="{{asset('build/assets/images/ecommerce/png/41.png')}}" alt=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Payment Summary
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class=" fs-14">Total Items</div>
                                                    <div class="fw-semibold fs-16">05</div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class=" fs-14">Sub Total</div>
                                                    <div class="fw-semibold fs-16">$10,308</div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class=" fs-14">Applied Coupen</div>
                                                    <div class="badge bg-success-transparent fs-11">SPKFIR</div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class=" fs-14">Discount</div>
                                                    <div class="fw-semibold fs-16 text-success">10%- $301.8</div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class=" fs-14">Delivery Charges</div>
                                                    <div class="fw-semibold fs-16 text-danger">-$150</div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class=" fs-14">Service Tax (18%)</div>
                                                    <div class="fw-semibold fs-16">- $45.029</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="fs-18 fw-semibold">Total</div>
                                                <h4 class="fw-semibold">$12,234</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Order Tracking
                                            </div>
                                            <div class="ms-auto text-success">#SPK1218153635</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="order-track">
                                                <div class="accordion" id="basicAccordion">
                                                    <div class="accordion-item border-0 bg-transparent mb-2">
                                                        <div class="accordion-header" id="headingOne">
                                                            <a class="px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicOne" aria-expanded="true" aria-controls="basicOne">
                                                                <div class="d-flex ">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-md  avatar-rounded bg-light text-muted">
                                                                            <i class="bx bxs-cart"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <p class="fw-semibold mb-0 fs-14">Order Placed</p>
                                                                        <span class="fs-12 text-success">Nov 03, 2022</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div id="basicOne" class="accordion-collapse collapse show border-top-0" aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
                                                            <div class="accordion-body pt-0 ps-5 ms-2">
                                                                <div class="fs-12">
                                                                    <p class="mb-0">Order placed successfully by <a href="javascript:void(0);" class="font-weight-semibold text-primary">Sansa Taylor</a></p>
                                                                    <span class="text-muted op-7">Nov 03, 2022, 15:36</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="basicAccordion1">
                                                    <div class="accordion-item border-0 bg-transparent mb-2">
                                                        <div class="accordion-header" id="headingTwo">
                                                            <a class="px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicTwo" aria-expanded="true" aria-controls="basicTwo">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-md avatar-rounded bg-light text-muted">
                                                                            <i class='bx bxs-badge-check' ></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <p class="fw-semibold mb-0 fs-14">Picked</p>
                                                                        <span class="fs-12">Nov 03, 15:10</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div id="basicTwo" class="accordion-collapse show collapse border-top-0" aria-labelledby="headingTwo" data-bs-parent="#basicAccordion1">
                                                            <div class="accordion-body pt-0 ps-5 ms-2">
                                                                <div class="fs-12">
                                                                    <p class="mb-0">Your order has been picked up by <span class="font-weight-semibold">Smart Good Services</span></p>
                                                                    <span class="text-muted op-7">Nov 03, 2022, 15:36</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="basicAccordion2">
                                                    <div class="accordion-item border-0 bg-transparent mb-2">
                                                        <div class="accordion-header" id="headingThree">
                                                            <a class="px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" data-bs-target="#basicThree" aria-expanded="true" aria-controls="basicThree">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-md avatar-rounded bg-light text-muted">
                                                                            <i class='bx bxs-truck' ></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <p class="fw-semibold mb-0 fs-14">Shipping</p>
                                                                        <span class="fs-12">Nov 03, 15:10</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div id="basicThree" class="accordion-collapse show collapse border-top-0" aria-labelledby="headingThree" data-bs-parent="#basicAccordion2">
                                                            <div class="accordion-body pt-0 ps-5 ms-2">
                                                                <div class="fs-12 mb-3">
                                                                    <p class="mb-0">Arrived USA <span class="font-weight-semibold">SGS Warehouse</span></p>
                                                                    <span class="text-muted op-7">Nov 03, 2022, 15:36</span>
                                                                </div>
                                                                <div class="fs-12 mb-3">
                                                                    <p class="mb-0">picked up by <span class="font-weight-semibold">SGS Agent</span> and on the way to Hyderabad</p>
                                                                    <span class="text-muted op-7">Nov 03, 2022, 15:36</span>
                                                                </div>
                                                                <div class="fs-12">
                                                                    <p class="mb-0">Arrived in Hyderabad and expected Delivery is <span class="font-weight-semibold">Apr 16, 2022</span> </p>
                                                                    <span class="text-muted op-7">Nov 03, 2022, 15:36</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="basicAccordion3">
                                                    <div class="accordion-item border-0 bg-transparent next-step mb-2">
                                                        <div class="accordion-header" id="headingFour">
                                                            <a class="collapsed px-0 pt-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#basicFour" aria-expanded="true" aria-controls="basicFour">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-md avatar-rounded bg-success text-white border"><i class="bx bxs-package"></i></span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <p class="fw-semibold mb-0 fs-14">Out For Delivery</p>
                                                                        <span class="text-muted fs-12">Nov 03, 15:10 (expected)</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div id="basicFour" class="accordion-collapse collapse border-top-0" aria-labelledby="headingFour" data-bs-parent="#basicAccordion3">
                                                            <div class="accordion-body pt-0 ps-5 ms-2">
                                                                <div class="fs-12">
                                                                    <p class="mb-0">Your order is out for devlivery</p>
                                                                    <span class="text-muted op-7">Nov 03, 2022, 15:36 (expected)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion" id="basicAccordion4">
                                                    <div class="accordion-item border-0 bg-transparent next-step mb-2">
                                                        <div class="accordion-header" id="headingFive">
                                                        <a class="collapsed px-0 pt-0" href="javascript:void(0)" role="button" data-bs-toggle="collapse" aria-expanded="true" >
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-md avatar-rounded bg-success text-white border"><i class="bx bxs-package"></i></span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <p class="fw-semibold mb-0 fs-14">Delivered</p>
                                                                        <span class="fs-12 text-muted">Nov 03, 18:42</span>
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
                            </div>

                            <!--End::row-1 -->

                        </div>
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')
  

@endsection