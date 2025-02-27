@extends('layouts.master')

@section('styles')

        <!-- JSVECTORMAP CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/jsvectormap/css/jsvectormap.min.css')}}">
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="page-header-breadcrumb d-md-flex d-block align-items-center justify-content-between ">
                        <h4 class="fw-medium mb-0">Ecommerce-Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="text-white-50">Dashboards</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
                        </ol>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <!-- Start::row-1 -->
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="card custom-card">
                                        <div class="card-body p-0">
                                            <div class="row row-cols-sm-2 row-cols-xxl-5 g-0 ecommerce-cards">
                                                <div class="col d-flex p-4 tx-white pos-relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="masked-link"></a>
                                                    <div class="me-3 my-auto">
                                                        <div class="avatar avatar-lg bg-secondary-transparent radius-5"><i class="ti ti-package fs-20"></i></div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="mb-0 text-muted">Total Products</p>
                                                        <div class="">
                                                            <span class="text-xl fw-semibold">45,280</span>
                                                            <span class="ms-2 fs-13 text-secondary"><i class="fe fe-arrow-up-right me-1 d-inline-block fs-12"></i>1.31%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex p-4 tx-white pos-relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="masked-link"></a>
                                                    <div class="me-3 my-auto">
                                                        <div class="avatar avatar-lg bg-pink-transparent radius-5"><i class="ti ti-packge-import fs-20"></i></div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="mb-0 text-muted">Total Orders</p>
                                                        <div class="">
                                                            <span class="text-xl fw-semibold">12,088</span>
                                                            <span class="ms-2 fs-13 text-pink"><i class="fe fe-arrow-up-right me-1 d-inline-block fs-12"></i>12.05%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex p-4 tx-white pos-relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="masked-link"></a>
                                                    <div class="me-3 my-auto">
                                                        <div class="avatar avatar-lg bg-info-transparent radius-5"><i class="ti ti-rocket fs-20"></i></div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="mb-0 text-muted">Total Sales</p>
                                                        <div class="">
                                                            <span class="text-xl fw-semibold">10,500</span>
                                                            <span class="ms-2 fs-13 text-info"><i class="fe fe-arrow-down-right fs-12 me-1 d-inlineblock"></i>1.14%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex p-4 tx-white pos-relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="masked-link"></a>
                                                    <div class="me-3 my-auto">
                                                        <div class="avatar avatar-lg bg-orange-transparent radius-5"><i class="ti ti-wallet fs-20"></i></div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="mb-0 text-muted">Income</p>
                                                        <div class="">
                                                            <span class="text-xl fw-semibold">$69,270</span>
                                                            <span class="ms-2 fs-13 text-orange"><i class="fe fe-arrow-up-right me-1 d-inline-block fs-12 "></i>2.58%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex p-4 tx-white pos-relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="masked-link"></a>
                                                    <div class="me-3 my-auto">
                                                        <div class="avatar avatar-lg bg-success-transparent radius-5"><i class="ti ti-coin fs-20"></i></div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="mb-0 text-muted">Expenses</p>
                                                        <div class="">
                                                            <span class="text-xl fw-semibold">$21,520</span>
                                                            <span class="ms-2 fs-13 text-success"><i class="fe fe-arrow-down-right fs-12 me-1 d-inlineblock"></i>14.69%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">Earnings</div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-outline-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="col-xl-4 col-md-4  m-1 m-md-0">
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <span class="avatar avatar-md br-5 bg-primary-transparent text-primary me-2"><i class="fe fe-arrow-up"></i></span>
                                                                <div class="">
                                                                    <h5 class="mb-0">180.32k</h5>
                                                                    <p class="mb-0 tx-muted">Total Orders </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-4  m-1 m-md-0">
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <span class="avatar avatar-md br-5 bg-secondary-transparent text-secondary me-2"><i class="fe fe-arrow-down"></i></span>
                                                                <div class="">
                                                                    <h5 class="mb-0">743.32k</h5>
                                                                    <p class="mb-0 tx-muted">Total Sales </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="projectstatistics"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card overflow-hidden">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Top Countries By Sales
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-outline-light btn btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="true">
                                                            View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="card-body">
                                                            <div id="country-sales"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="card-body">
                                                            <div class="">
                                                                <div class="d-flex mb-1">
                                                                    <p class="mb-0">Usa</p>
                                                                    <span class="ms-auto">75%</span>
                                                                </div>
                                                                <div class="progress progress-xs mb-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar bg-primary" style="width: 75%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-4">
                                                                <div class="d-flex mb-1">
                                                                    <p class="mb-0">India</p>
                                                                    <span class="ms-auto">55%</span>
                                                                </div>
                                                                <div class="progress progress-xs mb-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar bg-secondary" style="width: 55%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-4">
                                                                <div class="d-flex mb-1">
                                                                    <p class="mb-0">Vatican City</p>
                                                                    <span class="ms-auto">60%</span>
                                                                </div>
                                                                <div class="progress progress-xs mb-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar bg-info" style="width: 60%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-4">
                                                                <div class="d-flex mb-1">
                                                                    <p class="mb-0">Palau</p>
                                                                    <span class="ms-auto">80%</span>
                                                                </div>
                                                                <div class="progress progress-xs mb-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar bg-warning" style="width: 80%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-4">
                                                                <div class="d-flex mb-1">
                                                                    <p class="mb-0">Sao Tome and Principe</p>
                                                                    <span class="ms-auto">45%</span>
                                                                </div>
                                                                <div class="progress progress-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar bg-success" style="width: 45%">
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
                                <div class="col-xxl-6 col-xl-12">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Invoice
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-outline-light btn btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="true">
                                                            View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="mb-3">
                                                            <a href="{{url('invoice-details')}}">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-top justify-content-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar bg-primary-transparent rounded-circle"><i class="ti ti-building-skyscraper fs-18"></i></span>
                                                                        </div>
                                                                        <div>
                                                                            <p class="mb-0 fw-semibold">Hedges Corp Ed</p>
                                                                            <p class="mb-0 text-muted fs-12">30 Invoices</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-success-transparent badge-sm rounded-pill min-w-fit-content ms-1">Paid</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="mb-3">
                                                            <a href="{{url('invoice-details')}}">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-top justify-content-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar"><img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img" class="rounded-circle"></span>
                                                                        </div>
                                                                        <div>
                                                                            <p class="mb-0 fw-semibold">Charlie Beth</p>
                                                                            <p class="mb-0 text-muted fs-12">11 Invoices</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-warning-transparent badge-sm rounded-pill min-w-fit-content ms-1">Unpaid</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="mb-3">
                                                            <a href="{{url('invoice-details')}}">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-top justify-content-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar bg-secondary-transparent  rounded-circle"><i class="ti ti-user fs-18 "></i></span>
                                                                        </div>
                                                                        <div>
                                                                            <p class="mb-0 fw-semibold">Nikson Bey</p>
                                                                            <p class="mb-0 text-muted fs-12">21 Invoices</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-success-transparent badge-sm rounded-pill min-w-fit-content ms-1">Paid</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="mb-3">
                                                            <a href="{{url('invoice-details')}}">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-top justify-content-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar"><img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img" class="rounded-circle"></span>
                                                                        </div>
                                                                        <div>
                                                                            <p class="mb-0 fw-semibold">Malbi Inf Et.</p>
                                                                            <p class="mb-0 text-muted fs-12">07 Invoices</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-success-transparent badge-sm rounded-pill min-w-fit-content ms-1">Paid</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="mb-3">
                                                            <a href="{{url('invoice-details')}}">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-top justify-content-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar"><img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img" class="rounded-circle"></span>
                                                                        </div>
                                                                        <div>
                                                                            <p class="mb-0 fw-semibold">Hedges Corp Ed.</p>
                                                                            <p class="mb-0 text-muted fs-12">37 Invoices</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-danger-transparent badge-sm rounded-pill min-w-fit-content ms-1">Overdue</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="{{url('invoice-details')}}">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-top justify-content-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar"><img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img" class="rounded-circle"></span>
                                                                        </div>
                                                                        <div>
                                                                            <p class="mb-0 fw-semibold">Bickle Bob</p>
                                                                            <p class="mb-0 text-muted fs-12">313 Invoices</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-secondary-transparent badge-sm rounded-pill min-w-fit-content ms-1">Unpaid</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="card custom-card overflow-hidden">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Sales By Category
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-outline-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div id="salesDonut"></div>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="row row-cols-12 border-top border-block-start-dashed">
                                                        <div class="col p-0">
                                                            <div class="ps-4 py-3 pe-3 text-center border-end border-inline-end-dashed">
                                                                <span class="text-muted fs-12 mb-1 crm-lead-legend mobile d-inline-block">Electronics
                                                                </span>
                                                                <div><span class="text-md fw-semibold">7,724</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col p-0">
                                                            <div class="p-3 text-center border-end border-inline-end-dashed">
                                                                <span class="text-muted fs-12 mb-1 crm-lead-legend desktop d-inline-block">Women's
                                                                </span>
                                                                <div><span class="text-md fw-semibold">4,987</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="col p-0">
                                                            <div class="p-3 text-center border-end border-inline-end-dashed">
                                                                <span class="text-muted fs-12 mb-1 crm-lead-legend laptop d-inline-block">Men's
                                                                </span>
                                                                <div><span class="text-md fw-semibold">8,093</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col p-0">
                                                            <div class="p-3 text-center">
                                                                <span class="text-muted fs-12 mb-1 crm-lead-legend tablet d-inline-block">Kid's
                                                                </span>
                                                                <div><span class="text-md fw-semibold">979</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card overflow-hidden">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">Top Selling Products</div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-outline-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table text-nowrap mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="text-center">S.no</th>
                                                                    <th scope="col">Product</th>
                                                                    <th scope="col">Total Sales</th>
                                                                    <th scope="col">Stock</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="top-selling">
                                                                <tr>
                                                                    <td class="text-center lh-1">
                                                                        01
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/ecommerce/jpg/1.jpg')}}" class="rounded-1" alt="">
                                                                            </span>
                                                                            <div class="flex-1 ms-2">
                                                                                <p class="mb-0">Black color Smart mobile phone</p>
                                                                                <a href="javascript:void(0);" class="text-primary ">#129470</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="fw-semibold">5,093</span>
                                                                    </td>
                                                                    <td><span class="badge badge-sm bg-success-transparent text-success">In Stock</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center lh-1">
                                                                        02
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/ecommerce/jpg/3.jpg')}}" class="rounded-1" alt="">
                                                                            </span>
                                                                            <div class="flex-1 ms-2">
                                                                                <p class="mb-0">Small alarm watch</p>
                                                                                <a href="javascript:void(0);" class="text-primary ">#199470</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="fw-semibold">7,093</span>
                                                                    </td>
                                                                    <td><span class="badge badge-sm bg-success-transparent text-success">In Stock</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center lh-1">
                                                                        03
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/ecommerce/jpg/4.jpg')}}" class="rounded-1" alt="">
                                                                            </span>
                                                                            <div class="flex-1 ms-2">
                                                                                <p class="mb-0">Black color lens cemara</p>
                                                                                <a href="javascript:void(0);" class="text-primary ">#153470</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="fw-semibold">34,093</span>
                                                                    </td>
                                                                    <td><span class="badge badge-sm bg-danger-transparent text-danger">Out Of Stock</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center lh-1">
                                                                        04
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/ecommerce/jpg/5.jpg')}}" class="rounded-1" alt="">
                                                                            </span>
                                                                            <div class="flex-1 ms-2">
                                                                                <p class="mb-0">Beautiful flower Frame</p>
                                                                                <a href="javascript:void(0);" class="text-primary ">#123470</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="fw-semibold">1,793</span>
                                                                    </td>
                                                                    <td><span class="badge badge-sm bg-danger-transparent text-danger">Out Of Stock</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center lh-1">
                                                                        05
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md">
                                                                                <img src="{{asset('build/assets/images/ecommerce/jpg/6.jpg')}}" class="rounded-1" alt="">
                                                                            </span>
                                                                            <div class="flex-1 ms-2">
                                                                                <p class="mb-0">Sports shoes   for men</p>
                                                                                <a href="javascript:void(0);" class="text-primary ">#193470</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="fw-semibold">50,793</span>
                                                                    </td>
                                                                    <td><span class="badge badge-sm bg-success-transparent text-success">In Stock</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::row-1 -->

                            <!-- Start:: row-2 -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Order Summary
                                            </div>
                                            <div class="d-sm-flex">
                                                <div class="me-3 mb-2 mb-sm-0">
                                                    <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=" example">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Product Name</th>
                                                            <th scope="col">Transaction Id</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Payment method</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/ecommerce/jpg/2.jpg')}}" alt="" class="rounded-1">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fs-14">Black colored Headset</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold">#1234-4567</span>
                                                            </td>
                                                            <td>
                                                                $1,299.99
                                                            </td>
                                                            <td>
                                                                <span class="">02-03-2023</span>
                                                            </td>
                                                            <td>
                                                                <span class="">Cash On Delivery</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-transparent">Delivered</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/ecommerce/jpg/3.jpg')}}" alt="" class="rounded-1">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fs-14">Small alarm watch</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold">#1902-9883</span>
                                                            </td>
                                                            <td>
                                                                $99.99
                                                            </td>
                                                            <td>
                                                                <span class="">02-03-2023</span>
                                                            </td>
                                                            <td>
                                                                <span class="">Cash On Delivery</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-danger-transparent">cancelled</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/ecommerce/jpg/5.jpg')}}" alt="" class="rounded-1">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fs-14">Beautiful flower Frame</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold">#1962-9033</span>
                                                            </td>
                                                            <td>
                                                                $199.99
                                                            </td>
                                                            <td>
                                                                <span class="">03-02-2023</span>
                                                            </td>
                                                            <td>
                                                                <span class="">Cash On Delivery</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-primary-transparent">Shipped</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/ecommerce/jpg/4.jpg')}}" alt="" class="rounded-1">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fs-14">Black color lens cemara</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold">#8745-1232</span>
                                                            </td>
                                                            <td>
                                                                $79.00
                                                            </td>
                                                            <td>
                                                                <span class="">	01-03-2023</span>
                                                            </td>
                                                            <td>
                                                                <span class="">Online</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning-transparent">Pending</span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/ecommerce/jpg/1.jpg')}}" alt="" class="rounded-1">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fs-14">Black color Smart mobile phone</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold">#1734-9743</span>
                                                            </td>
                                                            <td>
                                                                $199.99
                                                            </td>
                                                            <td>
                                                                <span class="">03-03-2023</span>
                                                            </td>
                                                            <td>
                                                                <span class="">Online</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-transparent">Delivered</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm">
                                                                            <img src="{{asset('build/assets/images/ecommerce/jpg/6.jpg')}}" alt="" class="rounded-1">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fs-14">Sports shoes   for men</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold">#1802-9883</span>
                                                            </td>
                                                            <td>
                                                                $39.99
                                                            </td>
                                                            <td>
                                                                <span class="">02-03-2023</span>
                                                            </td>
                                                            <td>
                                                                <span class="">Cash On Delivery</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-danger-transparent">cancelled</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                                </div>
                                                <div class="ms-auto">
                                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                                        <ul class="pagination mb-0">
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="javascript:void(0);">
                                                                    Prev
                                                                </a>
                                                            </li>
                                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link text-primary" href="javascript:void(0);">
                                                                    next
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-2 -->

                        </div>
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')

        <!-- JSVECTOR MAPS JS -->
        <script src="{{asset('build/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- ECOMMERCE DASHBOARD JS -->
        @vite('resources/assets/js/ecommerce-dashboard.js')


@endsection