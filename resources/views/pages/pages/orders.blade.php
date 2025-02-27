@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Orders</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body d-flex align-items-center  flex-xxl-nowrap flex-wrap">
                                            <div class="flex-fill">
                                                <span class="mb-0 fs-14 text-muted">Total number of orders placed upto now : <span class="fw-semibold text-success">28</span></span>
                                            </div>
                                            <div class="dropdown my-sm-0 my-2">
                                                <button class="btn btn-light dropdown-toggle mx-sm-1 mx-0 my-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Sort By
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Date</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Price</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Category</a></li>
                                                </ul>
                                            </div>
                                            <div class="d-flex" role="search">
                                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-sm btn-light mx-1 my-0" type="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4  col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header d-block">
                                            <div class="d-sm-flex d-block justify-content-between">
                                                <div class="">
                                                    <span class="fs-14 fw-semibold">Order Id</span>
                                                    <span class="d-sm-block text-primary">#SPK-12031</span>
                                                </div>
                                                <div class="text-sm-end">
                                                    <p class="fs-14 fw-semibold mb-0">Ordered Status</p>
                                                    <span class="badge bg-success fs-11 rounded-1">Confirmed</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center  flex-xxl-nowrap flex-wrap">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xxxl bd-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="mb-1 fs-14 fw-semibold">
                                                        <a href="javascript:void(0);">Ugaoo self water plants</a>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Address : <span class="text-muted fs-13">
                                                            2nd street,houston texas,united states.</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Date : <span class="text-muted fs-13">
                                                            20-Jan-2023</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex mb-1">
                                                        <h5 class="mb-1">$1,229</h5>
                                                        <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$1,799</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                                            <div><a href="{{url('products')}}" class="btn btn-sm btn-info-light">Shop Similar</a></div>
                                            <div class="mt-sm-0 mt-2">
                                                <button class="btn btn-sm btn-danger-light">Cancel Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4  col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header d-block">
                                            <div class="d-sm-flex d-block justify-content-between">
                                                <div class="">
                                                    <span class="fs-14 fw-semibold">Order Id</span>
                                                    <span class="d-sm-block text-primary">#SPK-1233</span>
                                                </div>
                                                <div class="text-sm-end">
                                                    <p class="fs-14 fw-semibold mb-0">Ordered Status</p>
                                                    <span class="badge bg-danger fs-11 rounded-1">Cancelled</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center  flex-xxl-nowrap flex-wrap">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xxxl bd-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/2.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="mb-1 fs-14 fw-semibold">
                                                        <a href="javascript:void(0);">Colored leaf plant with pot</a>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Address : <span class="text-muted fs-13">
                                                            3nd street,houston texas,united states.</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Date : <span class="text-muted fs-13">
                                                            24-Jan-2023</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex mb-1">
                                                        <h5 class="mb-1">$3,229</h5>
                                                        <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$1,799</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                                            <div class="mt-sm-0 mt-2">
                                                <a href="{{url('products')}}" class="btn btn-sm btn-primary-light">Back to Shop</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4  col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header d-block">
                                            <div class="d-sm-flex d-block justify-content-between">
                                                <div class="">
                                                    <span class="fs-14 fw-semibold">Order Id</span>
                                                    <span class="d-sm-block text-primary">#SPK-1235</span>
                                                </div>
                                                <div class="text-sm-end">
                                                    <p class="fs-14 fw-semibold mb-0">Ordered Status</p>
                                                    <span class="badge bg-warning fs-11 rounded-1">Shipped</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center  flex-xxl-nowrap flex-wrap">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xxxl bd-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="mb-1 fs-14 fw-semibold">
                                                        <a href="javascript:void(0);">Green color money plant</a>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Address : <span class="text-muted fs-13">
                                                            3nd street,houston texas,united states.</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Date : <span class="text-muted fs-13">
                                                            24-Jan-2023</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex mb-1">
                                                        <h5 class="mb-1">$2,800</h5>
                                                        <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$1,098</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                                            <div><a href="{{url('products')}}" class="btn btn-sm btn-info-light">Shop Similar</a></div>
                                            <div class="mt-sm-0 mt-2">
                                                <button class="btn btn-sm btn-danger-light">Cancel Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4  col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header d-block">
                                            <div class="d-sm-flex d-block justify-content-between">
                                                <div class="">
                                                    <span class="fs-14 fw-semibold">Order Id</span>
                                                    <span class="d-sm-block text-primary">#SPK-1236</span>
                                                </div>
                                                <div class="text-sm-end">
                                                    <p class="fs-14 fw-semibold mb-0">Ordered Status</p>
                                                    <span class="badge bg-warning fs-11 rounded-1">Shipped</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center  flex-xxl-nowrap flex-wrap">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xxxl bd-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/4.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="mb-1 fs-14 fw-semibold">
                                                        <a href="javascript:void(0);">Ugoa big leaf plant</a>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Address : <span class="text-muted fs-13">
                                                            3nd street,houston texas,united states.</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Date : <span class="text-muted fs-13">
                                                            25-Jan-2023</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex mb-1">
                                                        <h5 class="mb-1">$8,800</h5>
                                                        <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$6,098</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                                            <div><a href="{{url('products')}}" class="btn btn-sm btn-info-light">Shop Similar</a></div>
                                            <div class="mt-sm-0 mt-2">
                                                <button class="btn btn-sm btn-danger-light">Cancel Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4  col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header d-block">
                                            <div class="d-sm-flex d-block justify-content-between">
                                                <div class="">
                                                    <span class="fs-14 fw-semibold">Order Id</span>
                                                    <span class="d-sm-block text-primary">#SPK-12036</span>
                                                </div>
                                                <div class="text-sm-end">
                                                    <p class="fs-14 fw-semibold mb-0">Ordered Status</p>
                                                    <span class="badge bg-success fs-11 rounded-1">Confirmed</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center  flex-xxl-nowrap flex-wrap">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xxxl bd-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/15.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="mb-1 fs-14 fw-semibold">
                                                        <a href="javascript:void(0);">Omega Sports shoes</a>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Address : <span class="text-muted fs-13">
                                                            2nd street,houston texas,united states.</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Date : <span class="text-muted fs-13">
                                                            28-Jan-2023</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex mb-1">
                                                        <h5 class="mb-1">$1,234</h5>
                                                        <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$880</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                                            <div><a href="{{url('products')}}" class="btn btn-sm btn-info-light">Shop Similar</a></div>
                                            <div class="mt-sm-0 mt-2">
                                                <button class="btn btn-sm btn-danger-light">Cancel Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4  col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header d-block">
                                            <div class="d-sm-flex d-block justify-content-between">
                                                <div class="">
                                                    <span class="fs-14 fw-semibold">Order Id</span>
                                                    <span class="d-sm-block text-primary">#SPK-12038</span>
                                                </div>
                                                <div class="text-sm-end">
                                                    <p class="fs-14 fw-semibold mb-0">Ordered Status</p>
                                                    <span class="badge bg-primary fs-11 rounded-1">Out For Delivery</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center  flex-xxl-nowrap flex-wrap">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xxxl bd-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="mb-1 fs-14 fw-semibold">
                                                        <a href="javascript:void(0);">Cactus plant  with gray color pot</a>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Address : <span class="text-muted fs-13">
                                                            2nd street,houston texas,united states.</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Date : <span class="text-muted fs-13">
                                                            30-Jan-2023</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex mb-1">
                                                        <h5 class="mb-1">$5,234</h5>
                                                        <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$580</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                                            <div><a href="{{url('products')}}" class="btn btn-sm btn-info-light">Shop Similar</a></div>
                                            <div class="mt-sm-0 mt-2">
                                                <button class="btn btn-sm btn-danger-light">Cancel Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4  col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header d-block">
                                            <div class="d-sm-flex d-block justify-content-between">
                                                <div class="">
                                                    <span class="fs-14 fw-semibold">Order Id</span>
                                                    <span class="d-sm-block text-primary">#SPK-1239</span>
                                                </div>
                                                <div class="text-sm-end">
                                                    <p class="fs-14 fw-semibold mb-0">Ordered Status</p>
                                                    <span class="badge bg-danger fs-11 rounded-1">Cancelled</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center  flex-xxl-nowrap flex-wrap">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xxxl bd-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/16.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="mb-1 fs-14 fw-semibold">
                                                        <a href="javascript:void(0);">Omega Sports shoes</a>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Address : <span class="text-muted fs-13">
                                                            3nd street,houston texas,united states.</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Date : <span class="text-muted fs-13">
                                                            24-Jan-2023</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex mb-1">
                                                        <h5 class="mb-1">$4,229</h5>
                                                        <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$2,799</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                                            <div class="mt-sm-0 mt-2">
                                                <a href="{{url('products')}}" class="btn btn-sm btn-primary-light">Back to Shop</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4  col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header d-block">
                                            <div class="d-sm-flex d-block justify-content-between">
                                                <div class="">
                                                    <span class="fs-14 fw-semibold">Order Id</span>
                                                    <span class="d-sm-block text-primary">#SPK-120348</span>
                                                </div>
                                                <div class="text-sm-end">
                                                    <p class="fs-14 fw-semibold mb-0">Ordered Status</p>
                                                    <span class="badge bg-primary fs-11 rounded-1">Out For Delivery</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center  flex-xxl-nowrap flex-wrap">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xxxl bd-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/10.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="mb-1 fs-14 fw-semibold">
                                                        <a href="javascript:void(0);">Light lemon color lilly flowers</a>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Address : <span class="text-muted fs-13">
                                                            2nd street,houston texas,united states.</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Date : <span class="text-muted fs-13">
                                                            31-Jan-2023</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex mb-1">
                                                        <h5 class="mb-1">$4,234</h5>
                                                        <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$280</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                                            <div><a href="{{url('products')}}" class="btn btn-sm btn-info-light">Shop Similar</a></div>
                                            <div class="mt-sm-0 mt-2">
                                                <button class="btn btn-sm btn-danger-light">Cancel Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4  col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header d-block">
                                            <div class="d-sm-flex d-block justify-content-between">
                                                <div class="">
                                                    <span class="fs-14 fw-semibold">Order Id</span>
                                                    <span class="d-sm-block text-primary">#SPK-12043</span>
                                                </div>
                                                <div class="text-sm-end">
                                                    <p class="fs-14 fw-semibold mb-0">Ordered Status</p>
                                                    <span class="badge bg-success fs-11 rounded-1">Confirmed</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center  flex-xxl-nowrap flex-wrap">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xxxl bd-gray-200">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/18.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="mb-1 fs-14 fw-semibold">
                                                        <a href="javascript:void(0);">Omega Sports shoes</a>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Address : <span class="text-muted fs-13">
                                                            2nd street,houston texas,united states.</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="fw-semibold mb-0">Delivery Date : <span class="text-muted fs-13">
                                                            31-Jan-2023</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex mb-1">
                                                        <h5 class="mb-1">$9,229</h5>
                                                        <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$4,799</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                                            <div><a href="{{url('products')}}" class="btn btn-sm btn-info-light">Shop Similar</a></div>
                                            <div class="mt-sm-0 mt-2">
                                                <button class="btn btn-sm btn-danger-light">Cancel Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::row-1 -->

                            <!-- Start: pagination -->
                            <div class="float-end mb-4">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="pagination mb-0 gap-2">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0);">
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a></li>
                                        <li class="page-item">
                                            <a class="page-link text-primary" href="javascript:void(0);">
                                                next
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- End: pagination -->
                        </div>
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')
  

@endsection