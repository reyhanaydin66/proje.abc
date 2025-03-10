@extends('layouts.master')

@section('styles')
 
        <!-- JSVECTOR MAPS CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/jsvectormap/css/jsvectormap.min.css')}}">
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="page-header-breadcrumb d-md-flex d-block align-items-center justify-content-between ">
                        <h4 class="fw-medium mb-0">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="text-white-50">Dashboards</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Sales</li>
                        </ol>
                    </div>
                    <!-- END PEAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <!-- Start::row -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2">
                                        <div class="col card-background flex-fill">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div>
                                                            <p class="fw-medium mb-1 text-muted">Total Sales</p>
                                                            <h3 class="mb-0">$18,645</h3>
                                                        </div>
                                                        <div class="avatar avatar-md br-4 bg-primary-transparent ms-auto">
                                                            <i class="bi bi-cart-check fs-20"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <span class="badge bg-primary-transparent rounded-pill">+24% <i class="fe fe-arrow-down"></i></span>
                                                        <a href="javascript:void(0);" class="text-muted fs-11 ms-auto text-decoration-underline mt-auto">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col card-background flex-fill">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div>
                                                            <p class="fw-medium mb-1 text-muted">Total Revenue</p>
                                                            <h3 class="mb-0">$34,876</h3>
                                                        </div>
                                                        <div class="avatar avatar-md br-4 bg-secondary-transparent ms-auto">
                                                            <i class="bi bi-archive fs-20"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <span class="badge bg-success-transparent rounded-pill">+0.26% <i class="fe fe-arrow-down"></i></span>
                                                        <a href="javascript:void(0);" class="text-muted fs-11 ms-auto text-decoration-underline mt-auto">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col card-background flex-fill">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div>
                                                            <p class="fw-medium text-muted mb-1">Total Products</p>
                                                            <h3 class="mb-0">26,231</h3>
                                                        </div>
                                                        <div class="avatar avatar-md br-4 bg-info-transparent ms-auto">
                                                            <i class="bi bi-handbag fs-20"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <span class="badge bg-danger-transparent rounded-pill">+06% <i class="fe fe-arrow-down"></i></span>
                                                        <a href="javascript:void(0);" class="text-muted fs-11 ms-auto text-decoration-underline mt-auto">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col card-background flex-fill">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div>
                                                            <p class="fw-medium mb-1 text-muted">Total Expenses</p>
                                                            <h3 class="mb-0">$73,579</h3>
                                                        </div>
                                                        <div class="avatar avatar-md br-4 bg-warning-transparent ms-auto">
                                                            <i class="bi bi-currency-dollar fs-20"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <span class="badge bg-success-transparent rounded-pill">+10% <i class="fe fe-arrow-up"></i></span>
                                                        <a href="javascript:void(0);" class="text-muted fs-11 ms-auto text-decoration-underline mt-auto">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col card-background flex-fill">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div>
                                                            <p class="fw-medium text-muted mb-1">Active Subscribers</p>
                                                            <h3 class="mb-0">1,468</h3>
                                                        </div>
                                                        <div class="avatar avatar-md br-4 bg-danger-transparent ms-auto">
                                                            <i class="bi bi-bell fs-20"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <span class="badge bg-danger-transparent rounded-pill">+16% <i class="fe fe-arrow-down"></i></span>
                                                        <a href="javascript:void(0);" class="text-muted fs-11 ms-auto text-decoration-underline mt-auto">view more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-1 -->
                            <div class="row">
                                <div class="col-xxl-3 col-xl-12">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-6 col-lg-6">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">Recent Activity</div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="task-list mb-0">
                                                        <li class="">
                                                            <div class="">
                                                                <i class="task-icon bg-primary"></i>
                                                                <h6 class="fw-semibold mb-0">Task Finished</h6>
                                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <span class="fs-12 text-muted">Adam Berry finished task on
                                                                            <a href="javascript:void(0)" class="fw-semibold text-primary"> AngularJS Template</a></span>
                                                                    </div>
                                                                    <div class="min-w-fit-content ms-2 text-end">

                                                                        <p class="mb-0 text-muted fs-11">09 July 2021</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="">
                                                            <div class="">
                                                                <i class="task-icon bg-info"></i>
                                                                <h6 class="fw-semibold mb-0">Task Overdue</h6>
                                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <span class="fs-12 text-muted">Petey Cruiser finished</span>
                                                                            <a href="javascript:void(0)" class="fw-semibold text-info"> Integrated management</a>
                                                                    </div>
                                                                    <div class="min-w-fit-content ms-2 text-end">

                                                                        <p class="mb-0 text-muted fs-11">29 June 2021</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="">
                                                            <div class="">
                                                                <i class="task-icon bg-warning"></i>
                                                                <h6 class="fw-semibold mb-0">Task Finished</h6>
                                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <span class="fs-12 text-muted">Adam Berry finished task on</span>
                                                                            <a href="javascript:void(0)" class="fw-semibold text-warning"> AngularJS Template</a>
                                                                    </div>
                                                                    <div class="min-w-fit-content ms-2 text-end">

                                                                        <p class="mb-0 text-muted fs-11">09 July 2021</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="">
                                                            <div class="">
                                                                <i class="task-icon bg-success"></i>
                                                                <h6 class="fw-semibold mb-0">Task Finished</h6>
                                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <span class="fs-12 text-muted">Adam Berry finished task on</span>
                                                                            <a href="javascript:void(0)" class="fw-semibold text-success"> AngularJS Template</a>
                                                                    </div>
                                                                    <div class="min-w-fit-content ms-2 text-end">

                                                                        <p class="mb-0 text-muted fs-11">09 July 2021</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="mb-0">
                                                            <div class="">
                                                                <i class="task-icon bg-secondary"></i>
                                                                <h6 class="fw-semibold mb-0">New Comment</h6>
                                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <span class="fs-12 text-muted">Adam Berry finished task on</span>
                                                                            <a href="javascript:void(0)" class="fw-semibold text-secondary"> Project Management</a>
                                                                    </div>
                                                                    <div class="min-w-fit-content ms-2 text-end">

                                                                        <p class="mb-0 text-muted fs-11">25 Aug 2021</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-6 col-lg-6">
                                            <div class="card custom-card overflow-hidden">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Sales by Country
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-outline-light btn-sm">View All</button>
                                                    </div>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table text-nowrap mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="row" class="fw-semibold ps-4">Country</th>
                                                                    <th scope="row" class="fw-semibold">Sales</th>
                                                                    <th scope="row" class="fw-semibold">Bounce</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="top-selling">
                                                                <tr>
                                                                    <td  class=" ps-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/flags/canada_flag.jpg')}}" class="rounded-circle" alt="">
                                                                            </span>
                                                                            <div class="ms-2">
                                                                                <p class="mb-0 fw-semibold">Canada</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="fw-semibold">2500</span>
                                                                    </td>
                                                                    <td><span class="badge badge-sm bg-success-transparent text-success">24.4%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td  class=" ps-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/flags/germany_flag.jpg')}}" class="rounded-circle" alt="">
                                                                            </span>
                                                                            <div class="ms-2">
                                                                                <p class="mb-0 fw-semibold">Germany</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="fw-semibold">846</span>
                                                                    </td>
                                                                    <td><span class="badge badge-sm bg-danger-transparent text-danger">22.33%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=" ps-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/flags/mexico_flag.jpg')}}" class="rounded-circle" alt="">
                                                                            </span>
                                                                            <div class="ms-2">
                                                                                <p class="mb-0 fw-semibold">Mexico</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="fw-semibold">1,024</span>
                                                                    </td>
                                                                    <td><span class="badge badge-sm bg-danger-transparent text-danger">14.8%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=" ps-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/flags/russia_flag.jpg')}}" class="rounded-circle" alt="">
                                                                            </span>
                                                                            <div class="ms-2">
                                                                                <p class="mb-0 fw-semibold">Russia</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="fw-semibold">482</span>
                                                                    </td>
                                                                    <td><span class="badge badge-sm bg-success-transparent text-success">05.8%</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=" ps-4 border-bottom-0">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/flags/us_flag.jpg')}}" class="rounded-circle" alt="">
                                                                            </span>
                                                                            <div class="ms-2">
                                                                                <p class="mb-0 fw-semibold">USA</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="border-bottom-0">
                                                                        <span class="fw-semibold">1,410</span>
                                                                    </td>
                                                                    <td class="border-bottom-0"><span class="badge badge-sm bg-danger-transparent text-danger">13.08%</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6  col-xl-12">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header  justify-content-between">
                                                    <div class="card-title">Sales Statistics</div>
                                                    <div class="dropdown d-flex">
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light btn-wave waves-effect waves-light d-flex align-items-center me-2"><i class="ri-filter-3-line me-1"></i>Filter</a>
                                                        <a href="javascript:void(0);" class="btn dropdown-toggle btn-sm btn-wave waves-effect waves-light btn-primary d-flex align-items-center" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-calendar-2-line me-1"></i>This Week</a>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Month</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Share Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                    <div class="card-body">
                                                    <div id="earnings"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12">
                                            <div class="card custom-card overflow-hidden">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Top Selling Products
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-outline-light btn-icons btn-sm text-muted my-1" data-bs-toggle="dropdown">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu mb-0">
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="card-body p-0">
                                                            <div class="table-responsive">
                                                                <table class="table text-nowrap table-hover rounded-3 overflow-hidden">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="row" class="ps-4">Product Name</th>
                                                                            <th scope="row">stock</th>
                                                                            <th scope="row">Price</th>
                                                                            <th scope="row">Sold</th>
                                                                            <th scope="row">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class=" ps-4">
                                                                                <div class="d-flex align-items-center">
                                                                                <div class="avatar avatar-sm me-2">
                                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/6.jpg')}}" alt="avatar" class="rounded-1">
                                                                                </div>
                                                                                <a href="{{url('product-details')}}">Sports Shoes For Men</a>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="mt-sm-1 d-block">
                                                                                    <span
                                                                                        class="badge bg-success-transparent text-success">In Stock</span>
                                                                                </div>
                                                                            </td>
                                                                            <td> $73.800</td>
                                                                            <td>1,534</td>
                                                                            <td>
                                                                                <div class="g-2">
                                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                                    </a>
                                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=" ps-4">
                                                                                <div class="d-flex align-items-center">
                                                                                <div class="avatar avatar-sm me-2">
                                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/5.jpg')}}" alt="avatar" class="rounded-1">
                                                                                </div>
                                                                                <a href="{{url('product-details')}}">Beautiful flower Frame</a>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="mt-sm-1 d-block">
                                                                                    <span
                                                                                        class="badge bg-info-transparent text-info">Few-left</span>
                                                                                </div>
                                                                            </td>
                                                                            <td> $73.800</td>
                                                                            <td>4,987</td>
                                                                            <td>
                                                                                <div class="g-2">
                                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                                    </a>
                                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=" ps-4">
                                                                                <div class="d-flex align-items-center">
                                                                                <div class="avatar avatar-sm me-2">
                                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/3.jpg')}}" alt="avatar" class="rounded-1">
                                                                                </div>
                                                                                <a href="{{url('product-details')}}">Small alarm Watch</a>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="mt-sm-1 d-block">
                                                                                    <span
                                                                                        class="badge bg-danger-transparent text-danger">Out Of Stock</span>
                                                                                </div>
                                                                            </td>
                                                                            <td> $13.800</td>
                                                                            <td>87,875</td>
                                                                            <td>
                                                                                <div class="g-2">
                                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                                    </a>
                                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=" ps-4">
                                                                                <div class="d-flex align-items-center">
                                                                                <div class="avatar avatar-sm me-2">
                                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/4.jpg')}}" alt="avatar" class="rounded-1">
                                                                                </div>
                                                                                <a href="{{url('product-details')}}">Black colord lens cemara</a>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="mt-sm-1 d-block">
                                                                                    <span
                                                                                        class="badge bg-success-transparent text-success">In Stock</span>
                                                                                </div>
                                                                            </td>
                                                                            <td> $14.600</td>
                                                                            <td>98,876</td>
                                                                            <td>
                                                                                <div class="g-2">
                                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                                    </a>
                                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=" ps-4">
                                                                                <div class="d-flex align-items-center">
                                                                                <div class="avatar avatar-sm me-2">
                                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/1.jpg')}}" alt="avatar" class="rounded-1">
                                                                                </div>
                                                                                <a href="{{url('product-details')}}">Smart Phone</a>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="mt-sm-1 d-block">
                                                                                    <span
                                                                                        class="badge bg-danger-transparent text-danger">Out Of Stock</span>
                                                                                </div>
                                                                            </td>
                                                                            <td> $13.800</td>
                                                                            <td>87,875</td>
                                                                            <td>
                                                                                <div class="g-2">
                                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                                    </a>
                                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class=" ps-4">
                                                                                <div class="d-flex align-items-center">
                                                                                <div class="avatar avatar-sm me-2">
                                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/2.jpg')}}" alt="avatar" class="rounded-1">
                                                                                </div>
                                                                                <a href="{{url('product-details')}}"> Black colored Headset</a>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="mt-sm-1 d-block">
                                                                                    <span
                                                                                        class="badge bg-info-transparent text-info">Few-left</span>
                                                                                </div>
                                                                            </td>
                                                                            <td> $23.800</td>
                                                                            <td>1,987</td>
                                                                            <td>
                                                                                <div class="g-2">
                                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                                    </a>
                                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </td>
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
                                </div>
                                <div class="col-xxl-3 col-xl-12">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Sales Value
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-outline-light btn btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                            View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                                        </a>
                                                        <ul class="dropdown-menu mb-0" role="menu">
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                        </ul>
                                                    </div>
                                            </div>
                                                <div class="card-body p-0">
                                                    <div class="">
                                                        <div class=" border-bottom">
                                                            <div id="avgsales"></div>
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex p-4 border-end">
                                                                <div class="text-center">
                                                                    <p class="mb-1 text-muted"> <i class="bx bxs-circle text-primary fs-13  me-1"></i>Sale Items</p>
                                                                    <h5 class="mb-0">186,75.00 </h5>
                                                                </div>
                                                            </div>

                                                            <div class="d-flex p-4">
                                                                <div class="text-center">
                                                                    <p class="mb-1 text-muted"> <i class="bx bxs-circle text-primary text-opacity-25 fs-13  me-1"></i>Sale Revenue</p>
                                                                    <h5 class=" mb-0">$122,39 </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                    Monthly Profits
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-outline-light btn btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                                            View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                                        </a>
                                                        <ul class="dropdown-menu mb-0" role="menu">
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                        </ul>
                                                    </div>
                                            </div>
                                                <div class="card-body p-0">
                                                    <div class="d-flex flex-wrap px-3 py-4 border-bottom justify-content-between">
                                                        <div>
                                                            <h4 class="mb-1 text-xl">$78,344</h4>
                                                            <p class="text-muted mb-0">Total Profit Growth Of 85%</p>
                                                        </div>
                                                        <div class="ms-sm-auto">
                                                            <div class="mt-2">
                                                                <span id="sparkline8"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 ">
                                                        <ul class="mb-0 mt-1 monthly-profit">
                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-md br-5 bg-warning-transparent text-warning"><i class="fe fe-box"></i></span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <div class="d-flex justify-content-between">
                                                                            <h6 class="fw-semibold">
                                                                                Fashion
                                                                            </h6>
                                                                            <div>
                                                                                <p class="mb-0 fs-13 text-muted">
                                                                                    <i class="fe fe-arrow-up-right me-1 text-success brround"></i>93.0%
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="progress progress-xs">
                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 90%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-md br-5 bg-primary-transparent text-primary"><i class="fe fe-home"></i></span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <div class="d-flex justify-content-between">
                                                                            <h6 class="fw-semibold">
                                                                                Home Furniture
                                                                            </h6>
                                                                            <div>
                                                                                <p class="mb-0 fs-13 text-muted">
                                                                                    <i class="fe fe-arrow-up-right me-1 text-success brround"></i>97.0%
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="progress progress-xs">
                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 80%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-md br-5 bg-secondary-transparent text-secondary"><i class="fe fe-tv"></i></span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <div class="d-flex justify-content-between">
                                                                            <h6 class="fw-semibold">
                                                                                Electronics
                                                                            </h6>
                                                                            <div>
                                                                                <p class="mb-0 fs-13 text-muted">
                                                                                    <i class="fe fe-arrow-up-right me-1 text-success brround"></i>80.0%
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="progress progress-xs">
                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 80%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-3">
                                                                        <span class="avatar avatar-md br-5 bg-info-transparent text-info"><i class="fe fe-zap"></i></span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <div class="d-flex justify-content-between">
                                                                            <h6 class="fw-semibold">
                                                                            Groceries
                                                                            </h6>
                                                                            <div>
                                                                                <p class="mb-0 fs-13 text-muted">
                                                                                    <i class="fe fe-arrow-up-right me-1 text-success brround"></i>80.0%
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="progress progress-xs">
                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 80%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-1 END -->
                            <div class="row">
                                <div class="col-xxl-3 col-xl-5">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Transactions History
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-outline-light btn btn-sm text-muted" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <ul class="mb-0 sales-transaction-history-list">
                                                <li>
                                                    <div class="d-flex">
                                                        <a aria-label="anchor" href="javascript:void(0);"><span class="avatar avatar-md rounded-circle br-5 bg-success-transparent text-success border-success border-opacity-25 border me-3"><i class="fe fe-credit-card"></i></span></a>
                                                        <div class="w-100">
                                                            <a href="javascript:void(0);">
                                                                <span class="mb-1 fs-14 fw-semibold text-default me-3">ATM Withdrawl</span>
                                                            </a>
                                                            <p class="fs-12 text-muted me-3 mb-0">Just now</p>
                                                        </div>
                                                        <div class=" my-auto">
                                                            <h6 class="mb-0 text-success">
                                                                $2,45,000
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <a aria-label="anchor" href="javascript:void(0);"><span class="avatar avatar-md rounded-circle br-5 bg-danger-transparent text-danger border-danger border-opacity-25 me-3 border"><i class="fe fe-smartphone"></i></span></a>
                                                        <div class="w-100">
                                                            <a href="javascript:void(0);">
                                                                <span class="mb-1 fs-14 fw-semibold text-default me-3">Movies Subscription</span>
                                                            </a>
                                                            <p class="fs-12 text-muted me-3 mb-0">Yesterday</p>
                                                        </div>
                                                        <div class=" my-auto">
                                                            <h6 class="mb-0 text-danger">
                                                                -$100.00
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <a aria-label="anchor" href="javascript:void(0);"><span class="avatar avatar-md rounded-circle br-5 bg-success-transparent text-success border-success border-opacity-25 border me-3"><i class="fe fe-arrow-down"></i></span></a>
                                                        <div class="w-100">
                                                            <a href="javascript:void(0);">
                                                                <span class="mb-1 fs-14 fw-semibold text-default me-3">Recieved from John</span>
                                                            </a>
                                                            <p class="fs-12 text-muted me-3 mb-0">17-04-2022</p>
                                                        </div>
                                                        <div class=" my-auto">
                                                            <h6 class="mb-0 text-success">
                                                                $1,50,000
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <a aria-label="anchor" href="javascript:void(0);"><span class="avatar avatar-md rounded-circle br-5 bg-danger-transparent text-danger border-danger border-opacity-25 me-3 border"><i class="fe fe-credit-card"></i></span></a>
                                                        <div class="w-100">
                                                            <a href="javascript:void(0);">
                                                                <span class="mb-1 fs-14 fw-semibold text-default me-3">Credit Card</span>
                                                            </a>
                                                            <p class="fs-12 text-muted me-3 mb-0">25-04-2022</p>
                                                        </div>
                                                        <div class=" my-auto">
                                                            <h6 class="mb-0 text-danger">
                                                                -$3,000
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <a aria-label="anchor" href="javascript:void(0);"><span class="avatar avatar-md rounded-circle br-5 bg-success-transparent text-success border-success border-opacity-25 border me-3"><i class="fe fe-repeat"></i></span></a>
                                                        <div class="w-100">
                                                            <a href="javascript:void(0);">
                                                                <span class="mb-1 fs-14 fw-semibold text-default me-3">Transfer to XYZ Card</span>
                                                            </a>
                                                            <p class="fs-12 text-muted me-3 mb-0">30-04-2022</p>
                                                        </div>
                                                        <div class=" my-auto">
                                                            <h6 class="mb-0 text-success">
                                                                $15,000
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <a aria-label="anchor" href="javascript:void(0);"><span class="avatar avatar-md rounded-circle br-5 bg-danger-transparent text-danger border-danger border-opacity-25 me-3 border"><i class="fe fe-repeat"></i></span></a>
                                                        <div class="w-100">
                                                            <a href="javascript:void(0);">
                                                                <span class="mb-1 fs-14 fw-semibold text-default me-3">Transfer to XYZ Card</span>
                                                            </a>
                                                            <p class="fs-12 text-muted me-3 mb-0">30-04-2022</p>
                                                        </div>
                                                        <div class=" my-auto">
                                                            <h6 class="mb-0 text-success">
                                                                $15,000
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-9 col-xl-7">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div>
                                                <h5 class="card-title mb-0">Recent Orders</h5>
                                            </div>
                                            <div class="ms-auto">
                                                <a aria-label="anchor" href="javascript:void(0)" class="btn btn-outline-light btn-icons btn-sm text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    <a class="d-flex dropdown-item border-bottom" href="javascript:void(0)">
                                                        <i class="ri-share-forward-line me-2"></i>Share
                                                    </a>
                                                    <a class="d-flex dropdown-item border-bottom" href="javascript:void(0)">
                                                        <i class="ri-download-2-line me-2"></i>Download
                                                    </a>
                                                    <a class="d-flex dropdown-item" href="javascript:void(0)">
                                                        <i class="ri-delete-bin-7-line me-2"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap table-hover border table-bordered">
                                                    <thead class="border-top">
                                                        <tr>
                                                            <th scope="row" class="border-bottom-0 text-center">S.NO</th>
                                                            <th scope="row" class="border-bottom-0">Customer Name</th>
                                                            <th scope="row" class="border-bottom-0">Order ID</th>
                                                            <th scope="row" class="border-bottom-0">Order Date</th>
                                                            <th scope="row" class="border-bottom-0">Price</th>
                                                            <th scope="row" class="border-bottom-0">Status</th>
                                                            <th scope="row" class="border-bottom-0">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">01</td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-md me-2 avatar-rounded lh-1">
                                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="avatar">
                                                                    </div>
                                                                    <div class="lh-1">
                                                                        <a href="{{url('product-details')}}">Patty Furniture</a>
                                                                        <p class="text-muted fs-11 mb-0 mt-1">patty@spruko.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="text-decoration-underline text-primary">#123SP90</span></td>
                                                            <td>01 Apr 2022</td>
                                                            <td> $73.800</td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent text-success">Delivered</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                    </a>
                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">02</td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-md me-2 avatar-rounded lh-1">
                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="avatar">
                                                                    </div>
                                                                    <div class="lh-1">
                                                                        <a href="{{url('product-details')}}">Allie Grate</a>
                                                                        <p class="fs-11 text-muted mb-0 mt-1">allie@spruko.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="text-decoration-underline text-primary">#123SP91</span></td>
                                                            <td>02 Apr 2022</td>
                                                            <td> $73.800</td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent text-success">Delivered</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                    </a>
                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">03</td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-md me-2 avatar-rounded lh-1">
                                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="avatar">
                                                                    </div>
                                                                    <div class="lh-1">
                                                                        <a href="{{url('product-details')}}">Peg Legge</a>
                                                                        <p class="fs-11 text-muted mb-0 mt-1">peg@spruko.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="text-decoration-underline text-primary">#123SP92</span></td>
                                                            <td>24 Mar 2022</td>
                                                            <td> $13.800</td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-danger-transparent text-danger">Cancelled</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                    </a>
                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">04</td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-md me-2 avatar-rounded lh-1">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="avatar">
                                                                    </div>
                                                                <div class="lh-1">
                                                                        <a href="{{url('product-details')}}">Maureen Biologist</a>
                                                                        <p class="fs-11 text-muted mb-0 mt-1">maureen@spruko.com</p>
                                                                </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="text-decoration-underline text-primary">#123SP93</span></td>
                                                            <td>22 Mar 2022</td>
                                                            <td> $14.600</td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-info-transparent text-info">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                    </a>
                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">05</td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md me-2 avatar-rounded lh-1">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="avatar">
                                                                </div>
                                                                    <div class="lh-1">
                                                                        <a href="{{url('product-details')}}">Olive Yew</a>
                                                                        <p class="text-muted mb-0 mt-1 fs-11">olive@spruko.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="text-decoration-underline text-primary">#123SP94</span></td>
                                                            <td>20 Mar 2022</td>
                                                            <td> $74.965</td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent text-warning">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a aria-label="anchor" class="btn  btn-primary-light btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                                        <span class="ri-pencil-line fs-14"></span>
                                                                    </a>
                                                                    <a aria-label="anchor" class="btn btn-danger-light btn-sm ms-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                        <span class="ri-delete-bin-7-line fs-14"></span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row -->

                        </div>
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')

        <!-- JSVECTOR MAPS JS -->
        <script src="{{asset('build/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

        <!-- CHARTJS CHART JS -->
        <script src="{{asset('build/assets/libs/chart.js/chart.min.js')}}"></script>

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- CRM-DASHBOARD JS -->
        @vite(entrypoints: 'resources/assets/js/sales-dashboard.js')
        

@endsection