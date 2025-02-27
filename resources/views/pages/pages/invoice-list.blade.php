@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Invoice List</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Invoice</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
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
                                <div class="col-xl-3">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-1">
                                                    <h6 class="mb-1">Total Invoices Amount</h6>
                                                    <div class="">
                                                        <span class="text-lg fw-semibold mb-2">$<span class="count-up" data-count="192.87">192.87</span>K</span> 
                                                    </div>
                                                </div>
                                                <div class="avatar avatar-lg bg-primary-transparent   ms-auto  p-2"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" class="svg-primary"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-1">
                                                    <h6 class="mb-1">Total Paid Invoices</h6>
                                                    <div class="">
                                                        <span class="text-lg  fw-semibold mb-2">$<span class="count-up" data-count="68.83">68.83</span>K</span> 
                                                    </div>
                                                </div>
                                                <div class="avatar avatar-lg bg-secondary-transparent ms-auto p-2"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-secondary"><path d="M11.5,20h-6a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h3v5a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,11.56,2H5.5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2Zm1-14.59L15.09,8H13.5a1,1,0,0,1-1-1ZM7.5,14h6a1,1,0,0,0,0-2h-6a1,1,0,0,0,0,2Zm4,2h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-4-6h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm13.71,6.29a1,1,0,0,0-1.42,0l-3.29,3.3-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.21,16.29Z"/></svg>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-1">
                                                    <h6 class="mb-1">Pending Invoices</h6>
                                                    <div class="">
                                                        <span class="text-lg  fw-semibold mb-2">$<span class="count-up" data-count="81.57">81.57</span>K</span> 
                                                    </div>
                                                </div>
                                                <div class="avatar avatar-lg bg-pink-transparent ms-auto   p-2"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="svg-pink"><path d="M19,12h-7V5c0-0.6-0.4-1-1-1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9C20,12.4,19.6,12,19,12z M12,19.9c-3.8,0.6-7.4-2.1-7.9-5.9C3.5,10.2,6.2,6.6,10,6.1V13c0,0.6,0.4,1,1,1h6.9C17.5,17.1,15.1,19.5,12,19.9z M15,2c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h6c0.6,0,1-0.4,1-1C22,5.1,18.9,2,15,2z M16,8V4.1C18,4.5,19.5,6,19.9,8H16z"/></svg>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-1">
                                                    <h6 class="mb-1">Overdue Invoices</h6>
                                                    <div class="">
                                                        <span class="text-lg  fw-semibold mb-2">$<span class="count-up" data-count="32.47">32.47</span>K</span> 
                                                    </div>
                                                </div>
                                                <div class="avatar avatar-lg bg-light ms-auto p-2"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="svg-dark"><path d="M19,12h-7V5c0-0.6-0.4-1-1-1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9C20,12.4,19.6,12,19,12z M12,19.9c-3.8,0.6-7.4-2.1-7.9-5.9C3.5,10.2,6.2,6.6,10,6.1V13c0,0.6,0.4,1,1,1h6.9C17.5,17.1,15.1,19.5,12,19.9z M15,2c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h6c0.6,0,1-0.4,1-1C22,5.1,18.9,2,15,2z M16,8V4.1C18,4.5,19.5,6,19.9,8H16z"/></svg>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Manage Invoices
                                            </div>
                                            <div class="d-flex">
                                                <button class="btn btn-sm btn-primary btn-wave waves-light"><i class="ri-add-line fw-semibold align-middle me-1"></i> Create Invoice</button>
                                                <div class="dropdown ms-2">
                                                    <button class="btn btn-icon btn-secondary-light btn-sm btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">All Invoices</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Paid Invoices</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Pending Invoices</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Overdue Invoices</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Client</th>
                                                            <th scope="col">Invoice ID</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Issued Date</th>
                                                            <th scope="col">Due Date</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Selena Deoyl</p>
                                                                        <p class="mb-0 fs-12 text-muted">selenadeoyl114@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                                    #SPK12032932
                                                                </a>
                                                            </td>
                                                            <td>
                                                                $4,873.99
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-primary-transparent">Due By 1 Day</span>
                                                            </td>
                                                            <td>
                                                                18,Nov 2022
                                                            </td>
                                                            <td>
                                                                18,Dec 2022
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Roman Killon</p>
                                                                        <p class="mb-0 fs-12 text-muted">romankillon143@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                                    #SPK12032945
                                                                </a>
                                                            </td>
                                                            <td>
                                                                $2199.49
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-danger-transparent">Overdue</span>
                                                            </td>
                                                            <td>
                                                                30,Nov 2022
                                                            </td>
                                                            <td>
                                                                30,Dec 2022
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Json Taylor</p>
                                                                        <p class="mb-0 fs-12 text-muted">jsontaylor2416@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                                    #SPK12032901
                                                                </a>
                                                            </td>
                                                            <td>
                                                                $212.45
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-transparent">Paid</span>
                                                            </td>
                                                            <td>
                                                                25,Nov 2022
                                                            </td>
                                                            <td>
                                                                25,Dec 2022
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Charlie Davieson</p>
                                                                        <p class="mb-0 fs-12 text-muted">charliedavieson@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                                    #SPK12032922
                                                                </a>
                                                            </td>
                                                            <td>
                                                                $1569.99
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-transparent">Paid</span>
                                                            </td>
                                                            <td>
                                                                18,Nov 2022
                                                            </td>
                                                            <td>
                                                                18,Dec 2022
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Suzika Stallone</p>
                                                                        <p class="mb-0 fs-12 text-muted">suzikastallone3214@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                                    #SPK12032912
                                                                </a>
                                                            </td>
                                                            <td>
                                                                $512.99
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning-transparent">Pending</span>
                                                            </td>
                                                            <td>
                                                                13,Nov 2022
                                                            </td>
                                                            <td>
                                                                13,Dec 2022
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Kevin Powell</p>
                                                                        <p class="mb-0 fs-12 text-muted">kevinpowell@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                                    #SPK12032931
                                                                </a>
                                                            </td>
                                                            <td>
                                                                $3,423.99
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning-transparent">Pending</span>
                                                            </td>
                                                            <td>
                                                                21,Nov 2022
                                                            </td>
                                                            <td>
                                                                21,Dec 2022
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Darla Jung</p>
                                                                        <p class="mb-0 fs-12 text-muted">darlajung555@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                                    #SPK12032958
                                                                </a>
                                                            </td>
                                                            <td>
                                                                $2,982.99
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-transparent">Paid</span>
                                                            </td>
                                                            <td>
                                                                15,Oct 2022
                                                            </td>
                                                            <td>
                                                                15,Nov 2022
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Joseph Samurai</p>
                                                                        <p class="mb-0 fs-12 text-muted">josephsamurai@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                                    #SPK12032919
                                                                </a>
                                                            </td>
                                                            <td>
                                                                $1,623.99
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-transparent">Paid</span>
                                                            </td>
                                                            <td>
                                                                15,Nov 2022
                                                            </td>
                                                            <td>
                                                                15,Dec 2022
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Kiara Advensh</p>
                                                                        <p class="mb-0 fs-12 text-muted">kiaraadvensh87@gmail.com</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="fw-semibold text-primary">
                                                                    #SPK12032978
                                                                </a>
                                                            </td>
                                                            <td>
                                                                $1923.99
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-transparent">Paid</span>
                                                            </td>
                                                            <td>
                                                                02,Nov 2022
                                                            </td>
                                                            <td>
                                                                18,Dec 2022
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print"><i class="ri-printer-line"></i></button>
                                                                <button class="btn btn-danger-light btn-icon ms-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination mb-0 float-end">
                                                    <li class="page-item disabled">
                                                        <a class="page-link">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item active" aria-current="page">
                                                        <a class="page-link" href="javascript:void(0);">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0);">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
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

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

@endsection