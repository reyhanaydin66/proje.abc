@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Pricing</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <!-- Start:: row-1 -->
                            <div class="row mb-4">
                                <div class="col-xl-12">
                                    <div class="card bg-transparent border-0">
                                        <h5 class="fw-semibold text-center text-fixed-white mb-0"> Simple Pricing Style-1 For Everyone </h5>
                                        <div class="d-flex justify-content-center mt-4">
                                            <ul class="nav nav-tabs mb-3 mt-2 tab-style-6 bg-primary-transparent" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pricing-monthly1" data-bs-toggle="tab"
                                                        data-bs-target="#pricing-monthly1-pane" type="button" role="tab"
                                                        aria-controls="pricing-monthly1-pane" aria-selected="true">Monthly</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pricing-yearly1" data-bs-toggle="tab"
                                                        data-bs-target="#pricing-yearly1-pane" type="button" role="tab"
                                                        aria-controls="pricing-yearly1-pane" aria-selected="false">Yearly</button>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tab-content" id="myTabContent1">
                                        <div class="tab-pane show active p-0 border-0" id="pricing-monthly1-pane"
                                            role="tabpanel" aria-labelledby="pricing-monthly1" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card overflow-hidden">
                                                        <div class="card-body p-0">
                                                            <div class="p-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                                    <div class="d-flex">
                                                                        <i class="ti ti-free-rights fs-24 text-primary me-1"></i>
                                                                        <div class="fs-18 fw-semibold ">Free</div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-success-transparent">For Indivudials</span>
                                                                    </div>
                                                                </div>
                                                                <div class="fs-25 fw-bold mb-1">$0<sub class="text-muted fw-semibold fs-11">/ Per Month</sub></div>
                                                                <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                                <div class="fs-12 mb-3"><span>Billed Monthly</span></div>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">2 Free</strong>Websites
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">1 GB</strong>Hard disk storage
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">1 Year</strong>Email support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">2</strong>Licenses
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            Custom SEO optimizataion
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            Chat Support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-grid">
                                                                        <button type="button" class="btn btn-light btn-wave">Choose Plan</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card overflow-hidden">
                                                        <div class="card-body p-0">
                                                            <div class="p-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                                    <div class="d-flex">
                                                                        <i class="ti ti-api-app  fs-24 text-primary me-1"></i>
                                                                        <div class="fs-18 fw-semibold">Team</div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-success-transparent">
                                                                            For Small Teams
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="fs-25 fw-bold mb-1">$149<sub class="text-muted fw-semibold fs-11">/ Per Month</sub></div>
                                                                <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                                <div class="fs-12 mb-3"><span>Billed Monthly</span></div>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">5 Free</strong>Websites
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">5 GB</strong>Hard disk storage
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">2 Years</strong>Email support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">5</strong>Licenses
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            Custom SEO optimizataion
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            Chat Support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-grid">
                                                                        <button type="button" class="btn btn-light btn-wave">Choose Plan</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="custom-card  border border-primary rounded card">
                                                        <div class="d-flex flex-column p-0">
                                                            <div class="card-body p-0">
                                                                <div class="p-4">
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <div class="d-flex">
                                                                            <i class="ti ti-businessplan text-primary fs-24 me-1"></i>
                                                                            <div class="fs-18 fw-semibold">Business</div>
                                                                        </div>
                                                                        <div>
                                                                            <span class="badge bg-primary-transparent">
                                                                                For Business Purpose
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fs-25 fw-bold mb-1">$1,299<sub class="text-muted fw-semibold fs-11">/ Per Month</sub></div>
                                                                    <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                                    <div class="fs-12 mb-3 text-primary"><span>Billed Monthly</span></div>
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                            </span>
                                                                            <span>
                                                                                <strong class="me-1">10 Free</strong>Websites
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                            </span>
                                                                            <span>
                                                                                <strong class="me-1">20 GB</strong>Hard disk storage
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                            </span>
                                                                            <span>
                                                                                <strong class="me-1">3 Years</strong>Email support
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                            </span>
                                                                            <span>
                                                                                <strong class="me-1">15</strong>Licenses
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                            </span>
                                                                            <span>
                                                                                Custom SEO optimizataion
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                            </span>
                                                                            <span>
                                                                                Chat Support
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-grid">
                                                                            <button type="button" class="btn btn-primary btn-wave">Choose Plan</button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane p-0 border-0" id="pricing-yearly1-pane"
                                            role="tabpanel" aria-labelledby="pricing-yearly1" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card overflow-hidden">
                                                        <div class="card-body p-0">
                                                            <div class="p-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                                    <div class="d-flex">
                                                                        <i class="ti ti-free-rights fs-24 text-primary me-1"></i>
                                                                        <div class="fs-18 fw-semibold ">Free</div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-success-transparent">For Indivudials</span>
                                                                    </div>
                                                                </div>
                                                                <div class="fs-25 fw-bold mb-1">$0<sub class="text-muted fw-semibold fs-11">/ Per year</sub></div>
                                                                <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                                <div class="fs-12 mb-3"><span>Billed yearly</span></div>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">2 Free</strong>Websites
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">1 GB</strong>Hard disk storage
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">1 Year</strong>Email support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">2</strong>Licenses
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            Custom SEO optimizataion
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            Chat Support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-grid">
                                                                        <button type="button" class="btn btn-light btn-wave">Choose Plan</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card overflow-hidden">
                                                        <div class="card-body p-0">
                                                            <div class="p-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                                    <div class="d-flex">
                                                                        <i class="ti ti-api-app  fs-24 text-primary me-1"></i>
                                                                        <div class="fs-18 fw-semibold">Team</div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-success-transparent">
                                                                            For Small Teams
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="fs-25 fw-bold mb-1">$10,49<sub class="text-muted fw-semibold fs-11">/ Per year</sub></div>
                                                                <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                                <div class="fs-12 mb-3"><span>Billed yearly</span></div>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">5 Free</strong>Websites
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">5 GB</strong>Hard disk storage
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">2 Years</strong>Email support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">5</strong>Licenses
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            Custom SEO optimizataion
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            Chat Support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-grid">
                                                                        <button type="button" class="btn btn-light btn-wave">Choose Plan</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="custom-card border border-primary rounded card">
                                                        <div class=" d-flex flex-column p-0">
                                                            <div class="card-body p-0">
                                                                <div class="p-4">
                                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <div class="d-flex">
                                                                            <i class="ti ti-businessplan text-primary fs-24 me-1"></i>
                                                                            <div class="fs-18 fw-semibold">Business</div>
                                                                        </div>
                                                                        <div>
                                                                            <span class="badge bg-primary-transparent">
                                                                                For Business Purpose
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fs-25 fw-bold mb-1">$50,299<sub class="text-muted fw-semibold fs-11">/ Per year</sub></div>
                                                                    <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                                    <div class="fs-12 mb-3 text-primary"><span>Billed yearly</span></div>
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                            </span>
                                                                            <span>
                                                                                <strong class="me-1">10 Free</strong>Websites
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                            </span>
                                                                            <span>
                                                                                <strong class="me-1">20 GB</strong>Hard disk storage
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                            </span>
                                                                            <span>
                                                                                <strong class="me-1">3 Years</strong>Email support
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                            </span>
                                                                            <span>
                                                                                <strong class="me-1">15</strong>Licenses
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                            </span>
                                                                            <span>
                                                                                Custom SEO optimizataion
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center mb-3">
                                                                            <span class="me-2">
                                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                            </span>
                                                                            <span>
                                                                                Chat Support
                                                                            </span>
                                                                        </li>
                                                                        <li class="d-grid">
                                                                            <button type="button" class="btn btn-primary btn-wave">Choose Plan</button>
                                                                        </li>
                                                                    </ul>
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
                            <!-- End:: row-1 -->

                            <!-- Start:: row-2 -->
                            <div class="row justify-content-center mb-4">
                                <div class="col-xxl-10 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="container-lg">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-9">
                                                <h5 class="fw-semibold text-center"> Simple Pricing Style-2 For Everyone  </h5>
                                                <p class="text-muted text-center">Choose plan that suits best for your business needs, Our plans scales with you based on your needs</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mb-4">
                                            <ul class="nav nav-tabs mb-3 tab-style-6 bg-primary-transparent" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="monthly" data-bs-toggle="tab"
                                                        data-bs-target="#monthly-pane" type="button" role="tab"
                                                        aria-controls="monthly-pane" aria-selected="true">Monthly</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="yearly" data-bs-toggle="tab"
                                                        data-bs-target="#yearly-pane" type="button" role="tab"
                                                        aria-controls="yearly-pane" aria-selected="false">Yearly</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane show active p-0 border-0" id="monthly-pane"
                                                role="tabpanel" aria-labelledby="monthly" tabindex="0">
                                                <div class="row">
                                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                        <div class="card custom-card overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="p-4">
                                                                    <h6 class="fw-semibold ">Free</h6>
                                                                    <div class="pb-4 pt-2 d-flex">
                                                                        <div class="">
                                                                            <p class="mt-2 text-xxl fw-semibold mb-0">$0</p>
                                                                            <p class="text-muted op-5 fs-11 fw-semibold mb-0">per month</p>
                                                                        </div>
                                                                        <div class="pricing-svg1 ms-auto">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 92 92" viewBox="0 0 92 92"><path fill="#f3eefd" d="M32.63403 32.90607H9.57324C4.83838 32.90607 1 36.74445 1 41.47956c0 4.73486 3.83838 8.57324 8.57324 8.57324h23.06079c4.73486 0 8.57324-3.83838 8.57324-8.57324C41.20728 36.74445 37.3689 32.90607 32.63403 32.90607zM77.82153 59.88581H48.74487c-4.73511 0-8.57349 3.8385-8.57349 8.57349l0 0c0 4.73486 3.83838 8.57336 8.57349 8.57336h29.07666c4.73511 0 8.57349-3.8385 8.57349-8.57336l0 0C86.39502 63.72431 82.55664 59.88581 77.82153 59.88581zM82.42651 17.69147H67.75464c-4.73511 0-8.57349 3.83838-8.57349 8.57336s3.83838 8.57336 8.57349 8.57336h14.67188C87.16162 34.8382 91 30.99982 91 26.26484S87.16162 17.69147 82.42651 17.69147z"></path><rect width="36.443" height="15.95" x="28.529" y="39.369" fill="#8e54e9"></rect><rect width="23.14" height="10.128" x="15.251" y="68.248" fill="#8e54e9"></rect><rect width="23.14" height="10.128" x="55.111" y="68.248" fill="#8e54e9"></rect><rect width="28.569" height="8.075" x="32.467" y="43.306" fill="#FFF"></rect><circle cx="21.126" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="26.821" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="32.517" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="60.985" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="66.681" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="72.376" cy="73.312" r="1.822" fill="#FFF"></circle><rect width="12.396" height="12.396" x="16.819" y="15.375" fill="#FFF"></rect><rect width="12.396" height="12.396" x="64.287" y="15.375" fill="#FFF"></rect><circle cx="46.751" cy="29.347" r="5.005" fill="#FFF"></circle><circle cx="46.751" cy="66.754" r="5.005" fill="#FFF"></circle><rect width="7.349" height="7.349" x="70.902" y="50.917" fill="#FFF"></rect><rect width="7.349" height="7.349" x="15.251" y="50.917" fill="#FFF"></rect><path fill="#010101" d="M38.3916 67.24335H19.42163v-8.47998h3.17993c.27002 0 .5-.22009.5-.5v-7.34998c0-.27002-.22998-.5-.5-.5h-7.34985c-.28003 0-.5.22998-.5.5v7.34998c0 .27991.21997.5.5.5h3.16992v8.47998h-3.16992c-.55005 0-1 .45007-1 1v10.13c0 .55005.44995 1 1 1H38.3916c.55005 0 1-.44995 1-1v-10.13C39.3916 67.69343 38.94165 67.24335 38.3916 67.24335zM15.75171 57.76337v-6.34998h6.34985v6.34998C19.90606 57.76337 18.13821 57.76337 15.75171 57.76337zM37.3916 77.37336H16.25171v-8.13H37.3916V77.37336zM78.25171 67.24335h-3.17993v-8.47998h3.17993c.28003 0 .5-.22009.5-.5v-7.34998c0-.27002-.21997-.5-.5-.5h-7.34985c-.28027 0-.5.22998-.5.5v7.34998c0 .27991.21973.5.5.5h3.16992v8.47998H55.11182c-.55005 0-1 .45007-1 1v10.13c0 .55005.44995 1 1 1h23.13989c.55005 0 1-.44995 1-1v-10.13C79.25171 67.69343 78.80176 67.24335 78.25171 67.24335zM71.40186 57.76337v-6.34998h6.34985v6.34998C75.55621 57.76337 73.78835 57.76337 71.40186 57.76337zM77.25171 77.37336H56.11182v-8.13h21.13989V77.37336z"></path><path fill="#010101" d="M47.25171,61.28327v-4.95996h17.71997c0.55005,0,1-0.44995,1-1V43.09333h4.51001
                                                                                c0.28003,0,0.5-0.21997,0.5-0.5V28.27326h5.69995c0.28003,0,0.5-0.22998,0.5-0.5v-12.3999c0-0.27002-0.21997-0.5-0.5-0.5
                                                                                H64.29175c-0.28003,0-0.5,0.22998-0.5,0.5v12.3999c0,0.27002,0.21997,0.5,0.5,0.5h5.68994v13.82007h-4.01001v-2.71997
                                                                                c0-0.56006-0.44995-1-1-1H47.25171v-3.55005c2.80005-0.25,5-2.60999,5-5.47998c0-3.03003-2.46997-5.5-5.5-5.5
                                                                                c-3.04004,0-5.51001,2.46997-5.51001,5.5c0,2.87,2.19995,5.22998,5.01001,5.47998v3.55005H28.53174c-0.55005,0-1,0.43994-1,1
                                                                                v2.71997h-4.02002V28.27326h5.69995c0.28003,0,0.5-0.22998,0.5-0.5v-12.3999c0-0.27002-0.21997-0.5-0.5-0.5H16.82178
                                                                                c-0.28003,0-0.5,0.22998-0.5,0.5v12.3999c0,0.27002,0.21997,0.5,0.5,0.5h5.68994v14.32007c0,0.28003,0.22998,0.5,0.5,0.5
                                                                                h4.52002v12.22998c0,0.55005,0.44995,1,1,1h17.71997v4.95996c-2.81006,0.25-5.01001,2.6001-5.01001,5.4701
                                                                                c0,3.03992,2.46997,5.5,5.51001,5.5c3.03003,0,5.5-2.46008,5.5-5.5C52.25171,63.88337,50.05176,61.53327,47.25171,61.28327z
                                                                                M64.79175,27.27326v-11.3999h11.38989v11.3999C75.36244,27.27326,64.30791,27.27326,64.79175,27.27326z M42.2417,29.34333
                                                                                c0-2.47998,2.03003-4.5,4.51001-4.5s4.5,2.02002,4.5,4.5c0,2.50336-2.03354,4.51001-4.5,4.51001
                                                                                C44.30062,33.85334,42.2417,31.8601,42.2417,29.34333z M17.32178,27.27326v-11.3999h11.38989v11.3999
                                                                                C25.78854,27.27326,20.24347,27.27326,17.32178,27.27326z M29.53174,40.37336h34.43994v13.94995H46.85156
                                                                                c-0.02979-0.01001-0.06982-0.01001-0.09985-0.01001s-0.07007,0-0.09985,0.01001H29.53174V40.37336z M46.75171,71.25336
                                                                                c-2.47998,0-4.51001-2.02002-4.51001-4.5c0-2.51414,2.06714-4.5,4.51001-4.5c2.4727,0,4.5,2.01278,4.5,4.5
                                                                                C51.25171,69.23335,49.23169,71.25336,46.75171,71.25336z"></path><g><circle cx="57.477" cy="8.047" r="1.687" fill="#CF95C2"></circle></g><g><circle cx="23.017" cy="21.573" r="3.204" fill="#8e54e9"></circle><circle cx="70.485" cy="21.573" r="3.204" fill="#8e54e9"></circle><circle cx="46.751" cy="29.347" r="2.068" fill="#8e54e9"></circle><circle cx="46.751" cy="66.754" r="2.068" fill="#8e54e9"></circle><circle cx="36.719" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="41.735" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="46.751" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="51.767" cy="47.325" r="1.586" fill="#8e54e9"></circle><circle cx="56.782" cy="47.325" r="1.586" fill="#8e54e9"></circle><circle cx="74.576" cy="54.592" r="1.703" fill="#8e54e9"></circle><circle cx="18.926" cy="54.592" r="1.703" fill="#8e54e9"></circle><circle cx="86.424" cy="46.875" r="1.687" fill="#8e54e9"></circle></g><g><circle cx="7.468" cy="62.093" r="1.687" fill="#F6E2EE"></circle></g><g><circle cx="45.165" cy="83.953" r="1.687" fill="#F3765D"></circle></g><g><circle cx="41.207" cy="14.875" r="1.687" fill="#FDDDD6"></circle></g><g><circle cx="7.468" cy="23.711" r="2.489" fill="#D2EDF6"></circle></g></svg>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="list-unstyled  fs-12 pt-3 mb-0">
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Storage Capacity<span class="badge bg-light text-default ms-1">5Tb</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Daily Updates<span class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Online Support</span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Visitors Monitoring<span class="badge bg-light text-default ms-1">24/7</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">10 Free Domains</span>
                                                                        </li>
                                                                        <li class="mb-4">
                                                                            <span class="text-muted">Money Back Guarentee</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="d-grid">
                                                                        <button type="button" class="btn btn-primary-light btn-wave">Get Started</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                            <div class="card custom-card overflow-hidden">
                                                                <div class="card-body p-0">
                                                                    <div class="p-4">
                                                                        <h6 class="fw-semibold ">BASIC</h6>
                                                                        <div class="pb-4 pt-2 d-flex">
                                                                            <div class="">
                                                                                <p class="mt-2 text-xxl fw-semibold mb-0">$199</p>
                                                                                <p class="text-muted op-5 fs-11 fw-semibold mb-0">per month</p>
                                                                            </div>
                                                                            <div class="pricing-svg1 ms-auto">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 92 92" viewBox="0 0 92 92"><path fill="#f3eefd" d="M41.20752 46.41242c0-4.73499-3.83838-8.57336-8.57324-8.57336H9.57349C4.83862 37.83905 1 41.67743 1 46.41242v.00012c0 4.73486 3.83862 8.57324 8.57349 8.57324h23.06079c4.73486 0 8.57324-3.83838 8.57324-8.57324V46.41242zM77.82178 64.81879H48.74512c-4.73486 0-8.57324 3.8385-8.57324 8.57349 0 4.73486 3.83838 8.57324 8.57324 8.57324h29.07666c4.73486 0 8.57349-3.83838 8.57349-8.57324C86.39526 68.6573 82.55664 64.81879 77.82178 64.81879zM82.42676 22.62445H67.75488c-4.73486 0-8.57349 3.83838-8.57349 8.57336s3.83862 8.57336 8.57349 8.57336h14.67188C87.16162 39.77118 91 35.9328 91 31.19782S87.16162 22.62445 82.42676 22.62445z" class="colorf6e2ee svgShape"></path><rect width="20.97" height="64" x="14" y="18.625" fill="#ffffff" class="colorffffff svgShape"></rect><rect width="12.97" height="10.419" x="18" y="22.624" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><rect width="12.97" height="10.419" x="18" y="36.957" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><rect width="12.97" height="10.419" x="18" y="51.29" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><rect width="64" height="20.97" x="13.012" y="43.21" fill="#ffffff" transform="rotate(-41.076 45.013 53.695)" class="colorffffff svgShape"></rect><rect width="10.419" height="12.97" x="56.983" y="32.235" fill="#8e54e9" transform="rotate(138.924 62.194 38.721)" class="colorcf95c2 svgShape"></rect><rect width="10.419" height="12.97" x="46.179" y="41.653" fill="#8e54e9" transform="rotate(138.924 51.39 48.138)" class="colorcf95c2 svgShape"></rect><rect width="10.419" height="12.97" x="35.374" y="51.07" fill="#8e54e9" transform="rotate(138.924 40.584 57.556)" class="colorcf95c2 svgShape"></rect><rect width="64" height="20.97" x="14" y="61.655" fill="#ffffff" class="colorffffff svgShape"></rect><rect width="10.419" height="12.97" x="63.581" y="65.655" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><rect width="10.419" height="12.97" x="49.248" y="65.655" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><rect width="10.419" height="12.97" x="34.915" y="65.655" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><circle cx="24.14" cy="72.14" r="3.485" fill="#8e54e9" class="colorcf95c2 svgShape"></circle><path fill="#010101" d="M30.9751 22.12421H18.00513c-.28003 0-.5.21997-.5.5v10.42004c0 .27991.21997.5.5.5H30.9751c.27002 0 .5-.22009.5-.5V22.62421C31.4751 22.34418 31.24512 22.12421 30.9751 22.12421zM30.4751 32.54425H18.50513v-9.42004H30.4751V32.54425zM30.9751 36.45429H18.00513c-.28003 0-.5.22998-.5.5v10.41992c0 .28003.21997.5.5.5H30.9751c.27002 0 .5-.21997.5-.5V36.95429C31.4751 36.68427 31.24512 36.45429 30.9751 36.45429zM30.4751 46.87421H18.50513v-9.41992H30.4751V46.87421zM70.75513 39.85419l-8.52002-9.77002c-.17993-.20996-.5-.22998-.69995-.04993l-7.86011 6.83997c-.09985.09009-.15991.20996-.16992.3501-.01001.12988.04004.26001.11987.35986l8.52002 9.78003c.1001.11011.24023.17004.38013.17004.11987 0 .23999-.03992.32983-.13l7.8501-6.84009c.1001-.08984.16992-.20996.16992-.33984C70.88525 40.08417 70.84521 39.95429 70.75513 39.85419zM62.5752 46.32416l-7.86011-9.0199 7.1001-6.19006 7.85986 9.02002L62.5752 46.32416zM59.95508 49.27423l-8.52002-9.77991c-.18994-.20007-.5-.2301-.70996-.05005l-7.8501 6.84998c-.09985.08997-.15991.20996-.16992.33997-.01001.14001.03003.27002.12012.37l8.52002 9.77002c.09985.12.23975.17004.37988.17004.10986 0 .22998-.04004.33008-.12012l7.84985-6.83984c.1001-.09009.16016-.21008.17017-.3501C60.08496 49.50422 60.04517 49.37421 59.95508 49.27423zM51.77515 55.74433l-7.87012-9.02002 7.1001-6.19006 7.86987 9.02002L51.77515 55.74433z" class="color010101 svgShape"></path><path fill="#010101" d="M78.00513,60.65424h-23.5l22.17993-19.33008c0.41016-0.35986,0.45996-0.98999,0.09009-1.40991
                                                                                    L62.99512,24.10419c-0.16992-0.19995-0.41992-0.31995-0.67993-0.33997c-0.27002-0.01001-0.53003,0.06995-0.73022,0.25
                                                                                    L35.9751,46.34418V18.62421c0-0.55005-0.44995-1-1-1H14.00513c-0.56006,0-1,0.44995-1,1v64c0,0.55005,0.43994,1,1,1h64
                                                                                    c0.55005,0,1-0.44995,1-1V61.65424C79.00513,61.10419,78.55518,60.65424,78.00513,60.65424z M62.14502,26.17426
                                                                                    l12.47021,14.30005L51.46509,60.65424h-3.81006l1.44995-1.26001c0.09009-0.08008,0.16016-0.20996,0.17017-0.33997
                                                                                    c0-0.13-0.04004-0.26001-0.13013-0.35999L40.625,48.91425c-0.17993-0.20996-0.5-0.22998-0.69995-0.05005l-7.85986,6.8501
                                                                                    c-0.1001,0.08997-0.16016,0.20996-0.17017,0.33997c-0.00977,0.13,0.04004,0.25989,0.12012,0.35999l3.69995,4.23999H22.59521
                                                                                    L62.14502,26.17426z M46.13525,60.65424h-9.1001l-3.93018-4.52002l7.1001-6.18994l7.86011,9.03003L46.13525,60.65424z
                                                                                    M19.54517,60.65424h-1.04004v-8.85999h11.20996L19.54517,60.65424z M15.00513,19.62421H33.9751v28.45996l-3.10986,2.71008
                                                                                    H18.00513c-0.28003,0-0.5,0.21997-0.5,0.5v9.35999h-2.5V19.62421z M77.00513,81.62421h-62V62.65424h62V81.62421z" class="color010101 svgShape"></path><path fill="#010101" d="M74.00513 65.15424H63.58496c-.27979 0-.5.21997-.5.5v12.96997c0 .28003.22021.5.5.5h10.42017c.27002 0 .5-.21997.5-.5V65.65424C74.50513 65.37421 74.27515 65.15424 74.00513 65.15424zM73.50513 78.12421h-9.42017V66.15424h9.42017V78.12421zM59.66504 65.15424H49.24512c-.27002 0-.5.21997-.5.5v12.96997c0 .28003.22998.5.5.5h10.41992c.28003 0 .5-.21997.5-.5V65.65424C60.16504 65.37421 59.94507 65.15424 59.66504 65.15424zM59.16504 78.12421h-9.41992V66.15424h9.41992V78.12421zM45.33496 65.15424H34.91504c-.27979 0-.5.21997-.5.5v12.96997c0 .28003.22021.5.5.5h10.41992c.28027 0 .5-.21997.5-.5V65.65424C45.83496 65.37421 45.61523 65.15424 45.33496 65.15424zM44.83496 78.12421h-9.41992V66.15424h9.41992V78.12421zM24.14502 68.15424c-2.19995 0-3.98999 1.79004-3.98999 3.98999 0 2.18994 1.79004 3.97998 3.98999 3.97998 2.18994 0 3.97998-1.79004 3.97998-3.97998C28.125 69.94428 26.33496 68.15424 24.14502 68.15424zM24.14502 75.12421c-1.6499 0-2.98999-1.33997-2.98999-2.97998 0-1.6499 1.34009-2.98999 2.98999-2.98999 1.64014 0 2.97998 1.34009 2.97998 2.98999C27.125 73.78425 25.78516 75.12421 24.14502 75.12421z" class="color010101 svgShape"></path><circle cx="68.791" cy="11.094" r="2.719" fill="#dff8f1" class="colordfebf8 svgShape"></circle><circle cx="48.008" cy="17.343" r="2.291" fill="#d6fdf2" class="colorfdddd6 svgShape"></circle><circle cx="85.592" cy="52.839" r="2.291" fill="#8e54e9" class="color84b0de svgShape"></circle><circle cx="7.956" cy="80.915" r="2.291" fill="#d2f6ec" class="colord2edf6 svgShape"></circle><circle cx="6.652" cy="25.369" r="1.303" fill="#5cfdd0" class="colorfdbe5c svgShape"></circle></svg>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="list-unstyled  fs-12 pt-3 mb-0">
                                                                            <li class="mb-3">
                                                                                <span class="text-muted">Storage Capacity<span class="badge bg-light text-default ms-1">1Tb</span></span>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <span class="text-muted">Daily Updates<span class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <span class="text-muted">Online Support</span>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <span class="text-muted">Visitors Monitoring<span class="badge bg-light text-default ms-1">24/7</span></span>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <span class="text-muted">2 Free Domains</span>
                                                                            </li>
                                                                            <li class="mb-4">
                                                                                <span class="text-muted">Money Back Guarentee</span>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="d-grid">
                                                                            <button type="button" class="btn btn-primary-light btn-wave">Get Started</button>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                        <div class="card custom-card overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="p-4">
                                                                    <h6 class="fw-semibold ">ADVANCED</h6>
                                                                    <div class="pb-4 pt-2 d-flex">
                                                                        <div class="">
                                                                            <p class="mt-2 text-xxl fw-semibold mb-0">$499</p>
                                                                            <p class="text-muted op-5 fs-11 fw-semibold mb-0">per month</p>
                                                                        </div>
                                                                        <div class="pricing-svg1 ms-auto">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 92 92" viewBox="0 0 92 92"><path fill="#f3eefd" d="M32.63403 32.90607H9.57324C4.83838 32.90607 1 36.74445 1 41.47956c0 4.73486 3.83838 8.57324 8.57324 8.57324h23.06079c4.73486 0 8.57324-3.83838 8.57324-8.57324C41.20728 36.74445 37.3689 32.90607 32.63403 32.90607zM77.82153 59.88581H48.74487c-4.73511 0-8.57349 3.8385-8.57349 8.57349l0 0c0 4.73486 3.83838 8.57336 8.57349 8.57336h29.07666c4.73511 0 8.57349-3.8385 8.57349-8.57336l0 0C86.39502 63.72431 82.55664 59.88581 77.82153 59.88581zM82.42651 17.69147H67.75464c-4.73511 0-8.57349 3.83838-8.57349 8.57336s3.83838 8.57336 8.57349 8.57336h14.67188C87.16162 34.8382 91 30.99982 91 26.26484S87.16162 17.69147 82.42651 17.69147z"></path><rect width="36.443" height="15.95" x="28.529" y="39.369" fill="#8e54e9"></rect><rect width="23.14" height="10.128" x="15.251" y="68.248" fill="#8e54e9"></rect><rect width="23.14" height="10.128" x="55.111" y="68.248" fill="#8e54e9"></rect><rect width="28.569" height="8.075" x="32.467" y="43.306" fill="#FFF"></rect><circle cx="21.126" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="26.821" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="32.517" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="60.985" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="66.681" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="72.376" cy="73.312" r="1.822" fill="#FFF"></circle><rect width="12.396" height="12.396" x="16.819" y="15.375" fill="#FFF"></rect><rect width="12.396" height="12.396" x="64.287" y="15.375" fill="#FFF"></rect><circle cx="46.751" cy="29.347" r="5.005" fill="#FFF"></circle><circle cx="46.751" cy="66.754" r="5.005" fill="#FFF"></circle><rect width="7.349" height="7.349" x="70.902" y="50.917" fill="#FFF"></rect><rect width="7.349" height="7.349" x="15.251" y="50.917" fill="#FFF"></rect><path fill="#010101" d="M38.3916 67.24335H19.42163v-8.47998h3.17993c.27002 0 .5-.22009.5-.5v-7.34998c0-.27002-.22998-.5-.5-.5h-7.34985c-.28003 0-.5.22998-.5.5v7.34998c0 .27991.21997.5.5.5h3.16992v8.47998h-3.16992c-.55005 0-1 .45007-1 1v10.13c0 .55005.44995 1 1 1H38.3916c.55005 0 1-.44995 1-1v-10.13C39.3916 67.69343 38.94165 67.24335 38.3916 67.24335zM15.75171 57.76337v-6.34998h6.34985v6.34998C19.90606 57.76337 18.13821 57.76337 15.75171 57.76337zM37.3916 77.37336H16.25171v-8.13H37.3916V77.37336zM78.25171 67.24335h-3.17993v-8.47998h3.17993c.28003 0 .5-.22009.5-.5v-7.34998c0-.27002-.21997-.5-.5-.5h-7.34985c-.28027 0-.5.22998-.5.5v7.34998c0 .27991.21973.5.5.5h3.16992v8.47998H55.11182c-.55005 0-1 .45007-1 1v10.13c0 .55005.44995 1 1 1h23.13989c.55005 0 1-.44995 1-1v-10.13C79.25171 67.69343 78.80176 67.24335 78.25171 67.24335zM71.40186 57.76337v-6.34998h6.34985v6.34998C75.55621 57.76337 73.78835 57.76337 71.40186 57.76337zM77.25171 77.37336H56.11182v-8.13h21.13989V77.37336z"></path><path fill="#010101" d="M47.25171,61.28327v-4.95996h17.71997c0.55005,0,1-0.44995,1-1V43.09333h4.51001
                                                                                c0.28003,0,0.5-0.21997,0.5-0.5V28.27326h5.69995c0.28003,0,0.5-0.22998,0.5-0.5v-12.3999c0-0.27002-0.21997-0.5-0.5-0.5
                                                                                H64.29175c-0.28003,0-0.5,0.22998-0.5,0.5v12.3999c0,0.27002,0.21997,0.5,0.5,0.5h5.68994v13.82007h-4.01001v-2.71997
                                                                                c0-0.56006-0.44995-1-1-1H47.25171v-3.55005c2.80005-0.25,5-2.60999,5-5.47998c0-3.03003-2.46997-5.5-5.5-5.5
                                                                                c-3.04004,0-5.51001,2.46997-5.51001,5.5c0,2.87,2.19995,5.22998,5.01001,5.47998v3.55005H28.53174c-0.55005,0-1,0.43994-1,1
                                                                                v2.71997h-4.02002V28.27326h5.69995c0.28003,0,0.5-0.22998,0.5-0.5v-12.3999c0-0.27002-0.21997-0.5-0.5-0.5H16.82178
                                                                                c-0.28003,0-0.5,0.22998-0.5,0.5v12.3999c0,0.27002,0.21997,0.5,0.5,0.5h5.68994v14.32007c0,0.28003,0.22998,0.5,0.5,0.5
                                                                                h4.52002v12.22998c0,0.55005,0.44995,1,1,1h17.71997v4.95996c-2.81006,0.25-5.01001,2.6001-5.01001,5.4701
                                                                                c0,3.03992,2.46997,5.5,5.51001,5.5c3.03003,0,5.5-2.46008,5.5-5.5C52.25171,63.88337,50.05176,61.53327,47.25171,61.28327z
                                                                                M64.79175,27.27326v-11.3999h11.38989v11.3999C75.36244,27.27326,64.30791,27.27326,64.79175,27.27326z M42.2417,29.34333
                                                                                c0-2.47998,2.03003-4.5,4.51001-4.5s4.5,2.02002,4.5,4.5c0,2.50336-2.03354,4.51001-4.5,4.51001
                                                                                C44.30062,33.85334,42.2417,31.8601,42.2417,29.34333z M17.32178,27.27326v-11.3999h11.38989v11.3999
                                                                                C25.78854,27.27326,20.24347,27.27326,17.32178,27.27326z M29.53174,40.37336h34.43994v13.94995H46.85156
                                                                                c-0.02979-0.01001-0.06982-0.01001-0.09985-0.01001s-0.07007,0-0.09985,0.01001H29.53174V40.37336z M46.75171,71.25336
                                                                                c-2.47998,0-4.51001-2.02002-4.51001-4.5c0-2.51414,2.06714-4.5,4.51001-4.5c2.4727,0,4.5,2.01278,4.5,4.5
                                                                                C51.25171,69.23335,49.23169,71.25336,46.75171,71.25336z"></path><g><circle cx="57.477" cy="8.047" r="1.687" fill="#CF95C2"></circle></g><g><circle cx="23.017" cy="21.573" r="3.204" fill="#8e54e9"></circle><circle cx="70.485" cy="21.573" r="3.204" fill="#8e54e9"></circle><circle cx="46.751" cy="29.347" r="2.068" fill="#8e54e9"></circle><circle cx="46.751" cy="66.754" r="2.068" fill="#8e54e9"></circle><circle cx="36.719" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="41.735" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="46.751" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="51.767" cy="47.325" r="1.586" fill="#8e54e9"></circle><circle cx="56.782" cy="47.325" r="1.586" fill="#8e54e9"></circle><circle cx="74.576" cy="54.592" r="1.703" fill="#8e54e9"></circle><circle cx="18.926" cy="54.592" r="1.703" fill="#8e54e9"></circle><circle cx="86.424" cy="46.875" r="1.687" fill="#8e54e9"></circle></g><g><circle cx="7.468" cy="62.093" r="1.687" fill="#F6E2EE"></circle></g><g><circle cx="45.165" cy="83.953" r="1.687" fill="#F3765D"></circle></g><g><circle cx="41.207" cy="14.875" r="1.687" fill="#FDDDD6"></circle></g><g><circle cx="7.468" cy="23.711" r="2.489" fill="#D2EDF6"></circle></g></svg>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="list-unstyled  fs-12 pt-3 mb-0">
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Storage Capacity<span class="badge bg-light text-default ms-1">5Tb</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Daily Updates<span class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Online Support</span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Visitors Monitoring<span class="badge bg-light text-default ms-1">24/7</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">10 Free Domains</span>
                                                                        </li>
                                                                        <li class="mb-4">
                                                                            <span class="text-muted">Money Back Guarentee</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="d-grid">
                                                                        <button type="button" class="btn btn-primary-light btn-wave">Get Started</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                        <div class="card custom-card overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="p-4 pricing-offer overflow-hidden">
                                                                    <span class="pricing-offer-details shadow">
                                                                        <span class="fw-semibold">10%</span> <span class="fs-10 op-8 ms-1">Off</span>
                                                                    </span>
                                                                    <h6 class="fw-semibold ">PREMIUM</h6>
                                                                    <div class="pb-4 pt-2 d-flex">
                                                                        <div class="">
                                                                            <p class="mt-2 text-xxl fw-semibold mb-0">$1,299</p>
                                                                            <p class="text-muted op-5 fs-11 fw-semibold mb-0">per month</p>
                                                                        </div>
                                                                        <div class="pricing-svg1 ms-auto">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 92 92" viewBox="0 0 92 92"><path fill="#f3eefd" d="M32.66125 30.99631H9.69348c-4.55225 0-8.24268 3.69031-8.24268 8.24255s3.69043 8.24255 8.24268 8.24255h22.96777c4.55225 0 8.24243-3.69031 8.24243-8.24255S37.2135 30.99631 32.66125 30.99631zM71.80823 35.48313h8.73999c4.55225 0 8.24243-3.69037 8.24243-8.24255v-.00006c0-4.55219-3.69019-8.24255-8.24243-8.24255h-8.73999c-4.55225 0-8.24268 3.69037-8.24268 8.24255v.00006C63.56555 31.79276 67.25598 35.48313 71.80823 35.48313zM82.30652 59.57212H67.62024c-4.55225 0-8.24243 3.69037-8.24243 8.24256v.00006c0 4.55219 3.69019 8.24255 8.24243 8.24255h14.68628c4.55225 0 8.24268-3.69037 8.24268-8.24255v-.00006C90.54919 63.26249 86.85876 59.57212 82.30652 59.57212z"></path><path fill="#8e54e9" d="M75.14807,56.70884H31.23083c-1.16602,0-2.11133,0.94525-2.11133,2.11133v17.98908
                                                                                c0,1.16608,0.94531,2.11133,2.11133,2.11133h43.91724c1.16602,0,2.11133-0.94525,2.11133-2.11133V58.82016
                                                                                C77.2594,57.65409,76.31409,56.70884,75.14807,56.70884z"></path><rect width="41.89" height="15.962" x="32.245" y="59.834" fill="#FFF"></rect><rect width="3.236" height="3.128" x="34.585" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="40.247" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="45.909" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="51.571" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="57.233" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="62.895" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="68.557" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="34.585" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="40.247" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="45.909" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="51.571" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="57.233" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="62.895" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="68.557" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="34.585" y="70.839" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="40.247" y="70.839" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="62.895" y="70.839" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="68.557" y="70.839" fill="#8e54e9"></rect><rect width="14.56" height="3.128" x="45.909" y="70.839" fill="#8e54e9"></rect><circle cx="7.375" cy="56.709" r="3.781" fill="#f3eefd"></circle><circle cx="18.12" cy="74.966" r="1.42" fill="#FDDDD6"></circle><circle cx="87.37" cy="47.993" r="1.42" fill="#8e54e9"></circle><circle cx="54.807" cy="14.921" r="1.42" fill="#F3765D"></circle><circle cx="49.733" cy="46.121" r="1.42" fill="#8e54e9"></circle><circle cx="15.654" cy="13.5" r="1.42" fill="#CF95C2"></circle><polygon fill="#8e54e9" points="49.684 26.007 31.381 51.769 13.088 26.007"></polygon><polygon fill="#8e54e9" points="38.101 26.007 31.384 51.769 24.671 26.007"></polygon><polygon fill="#FFF" points="22.638 17.587 13.088 26.007 49.684 26.007 40.129 17.587"></polygon><polygon fill="#FFF" points="28.176 17.587 24.671 26.007 38.101 26.007 34.594 17.587"></polygon><path fill="#010101" d="M75.15198,55.70981H55.30774v-0.42896c0-1.2041,0.97949-2.18359,2.18311-2.18359h7.96436
                                                                                    c2.1167,0,3.83838-1.72168,3.83838-3.83838s-1.72168-3.83838-3.83838-3.83838h-4.90039
                                                                                    c-1.46582,0-2.65869-1.19287-2.65869-2.65869s1.19287-2.6582,2.65869-2.6582h5.7168c2.1167,0,3.83838-1.72168,3.83838-3.83838
                                                                                    v-0.23486c0-2.1167-1.72168-3.83838-3.83838-3.83838H46.21033l0.00146-0.00214l4.06006-5.72003
                                                                                    c0-0.01001,0.01001-0.01996,0.02002-0.02997c0.16131-0.20139,0.22693-0.66296-0.11011-1l-9.56006-8.41003
                                                                                    c-0.12988-0.13-0.30981-0.19-0.48975-0.19c-10.80636,0-11.57661,0-17.49023,0c-0.18994,0-0.35986,0.06-0.5,0.19l-9.5498,8.41003
                                                                                    c-0.3427,0.3427-0.30229,0.82839-0.1001,1.02997l18.26001,25.70001c0,0.01001,0.01001,0.02002,0.02002,0.03003
                                                                                    c0.15686,0.26111,0.57111,0.39985,0.84985,0.27997c0.30735-0.10224,0.34944-0.29982,0.4502-0.39996l13.41846-18.88788h20.78125
                                                                                    c1.56494,0,2.83838,1.27344,2.83838,2.83838v0.23486c0,1.56494-1.27344,2.83838-2.83838,2.83838h-5.7168
                                                                                    c-2.01758,0-3.65869,1.64111-3.65869,3.6582c0,2.01758,1.64111,3.65869,3.65869,3.65869h4.90039
                                                                                    c1.56494,0,2.83838,1.27344,2.83838,2.83838s-1.27344,2.83838-2.83838,2.83838h-7.96436
                                                                                    c-1.75537,0-3.18311,1.42822-3.18311,3.18359v0.42896H31.23181c-1.71997,0-3.11011,1.39001-3.11011,3.11005v17.98999
                                                                                    c0,1.71997,1.39014,3.10999,3.11011,3.10999h43.92017c1.70996,0,3.10986-1.39001,3.10986-3.10999V58.81986
                                                                                    C78.26184,57.09983,76.86194,55.70981,75.15198,55.70981z M39.84192,18.33982l7.85986,6.92004h-9.1001l-2.88989-6.92004H39.84192z
                                                                                    M34.09192,18.33982l2.87988,6.92004H25.79187l2.87988-6.92004H34.09192z M37.13196,26.75986l-5.75,22.03998l-5.74023-22.03998
                                                                                    H37.13196z M22.92175,18.33982h4.13013l-2.88013,6.92004H15.0719L22.92175,18.33982z M14.54187,26.75986h9.55005l5.54004,21.23999
                                                                                    L14.54187,26.75986z M38.67175,26.75986h9.56006l-3.88013,5.45996l-0.00317,0.00427
                                                                                    c-0.19702,0.06714-0.34058,0.24805-0.34058,0.4679c0,0.00372,0.00195,0.00677,0.00195,0.01044L33.15198,47.98984
                                                                                    L38.67175,26.75986z M76.26184,76.80985c0,0.60999-0.5,1.10999-1.10986,1.10999H31.23181c-0.61011,0-1.11011-0.5-1.11011-1.10999
                                                                                    V58.81986c0-0.61005,0.5-1.11005,1.11011-1.11005h43.92017c0.60986,0,1.10986,0.5,1.10986,1.11005V76.80985z"></path></svg>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="list-unstyled  fs-12 pt-3 mb-0">
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Storage Capacity<span class="badge bg-light text-default ms-1">10Tb</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Daily Updates<span class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Online Support</span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Visitors Monitoring<span class="badge bg-light text-default ms-1">24/7</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">30 Free Domains</span>
                                                                        </li>
                                                                        <li class="mb-4">
                                                                            <span class="text-muted">Money Back Guarentee</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="d-grid">
                                                                        <button type="button" class="btn btn-primary btn-wave">Get Started</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-0 border-0" id="yearly-pane"
                                                role="tabpanel" aria-labelledby="yearly" tabindex="0">
                                                <div class="row">
                                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                        <div class="card custom-card overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="p-4">
                                                                    <h6 class="fw-semibold ">Free</h6>
                                                                    <div class="pb-4 pt-2 d-flex">
                                                                        <div class="">
                                                                            <p class="mt-2 text-xxl fw-semibold mb-0">$0</p>
                                                                            <p class="text-muted op-5 fs-11 fw-semibold mb-0">per year</p>
                                                                        </div>
                                                                        <div class="pricing-svg1 ms-auto">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 92 92" viewBox="0 0 92 92"><path fill="#f3eefd" d="M32.63403 32.90607H9.57324C4.83838 32.90607 1 36.74445 1 41.47956c0 4.73486 3.83838 8.57324 8.57324 8.57324h23.06079c4.73486 0 8.57324-3.83838 8.57324-8.57324C41.20728 36.74445 37.3689 32.90607 32.63403 32.90607zM77.82153 59.88581H48.74487c-4.73511 0-8.57349 3.8385-8.57349 8.57349l0 0c0 4.73486 3.83838 8.57336 8.57349 8.57336h29.07666c4.73511 0 8.57349-3.8385 8.57349-8.57336l0 0C86.39502 63.72431 82.55664 59.88581 77.82153 59.88581zM82.42651 17.69147H67.75464c-4.73511 0-8.57349 3.83838-8.57349 8.57336s3.83838 8.57336 8.57349 8.57336h14.67188C87.16162 34.8382 91 30.99982 91 26.26484S87.16162 17.69147 82.42651 17.69147z"></path><rect width="36.443" height="15.95" x="28.529" y="39.369" fill="#8e54e9"></rect><rect width="23.14" height="10.128" x="15.251" y="68.248" fill="#8e54e9"></rect><rect width="23.14" height="10.128" x="55.111" y="68.248" fill="#8e54e9"></rect><rect width="28.569" height="8.075" x="32.467" y="43.306" fill="#FFF"></rect><circle cx="21.126" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="26.821" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="32.517" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="60.985" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="66.681" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="72.376" cy="73.312" r="1.822" fill="#FFF"></circle><rect width="12.396" height="12.396" x="16.819" y="15.375" fill="#FFF"></rect><rect width="12.396" height="12.396" x="64.287" y="15.375" fill="#FFF"></rect><circle cx="46.751" cy="29.347" r="5.005" fill="#FFF"></circle><circle cx="46.751" cy="66.754" r="5.005" fill="#FFF"></circle><rect width="7.349" height="7.349" x="70.902" y="50.917" fill="#FFF"></rect><rect width="7.349" height="7.349" x="15.251" y="50.917" fill="#FFF"></rect><path fill="#010101" d="M38.3916 67.24335H19.42163v-8.47998h3.17993c.27002 0 .5-.22009.5-.5v-7.34998c0-.27002-.22998-.5-.5-.5h-7.34985c-.28003 0-.5.22998-.5.5v7.34998c0 .27991.21997.5.5.5h3.16992v8.47998h-3.16992c-.55005 0-1 .45007-1 1v10.13c0 .55005.44995 1 1 1H38.3916c.55005 0 1-.44995 1-1v-10.13C39.3916 67.69343 38.94165 67.24335 38.3916 67.24335zM15.75171 57.76337v-6.34998h6.34985v6.34998C19.90606 57.76337 18.13821 57.76337 15.75171 57.76337zM37.3916 77.37336H16.25171v-8.13H37.3916V77.37336zM78.25171 67.24335h-3.17993v-8.47998h3.17993c.28003 0 .5-.22009.5-.5v-7.34998c0-.27002-.21997-.5-.5-.5h-7.34985c-.28027 0-.5.22998-.5.5v7.34998c0 .27991.21973.5.5.5h3.16992v8.47998H55.11182c-.55005 0-1 .45007-1 1v10.13c0 .55005.44995 1 1 1h23.13989c.55005 0 1-.44995 1-1v-10.13C79.25171 67.69343 78.80176 67.24335 78.25171 67.24335zM71.40186 57.76337v-6.34998h6.34985v6.34998C75.55621 57.76337 73.78835 57.76337 71.40186 57.76337zM77.25171 77.37336H56.11182v-8.13h21.13989V77.37336z"></path><path fill="#010101" d="M47.25171,61.28327v-4.95996h17.71997c0.55005,0,1-0.44995,1-1V43.09333h4.51001
                                                                                c0.28003,0,0.5-0.21997,0.5-0.5V28.27326h5.69995c0.28003,0,0.5-0.22998,0.5-0.5v-12.3999c0-0.27002-0.21997-0.5-0.5-0.5
                                                                                H64.29175c-0.28003,0-0.5,0.22998-0.5,0.5v12.3999c0,0.27002,0.21997,0.5,0.5,0.5h5.68994v13.82007h-4.01001v-2.71997
                                                                                c0-0.56006-0.44995-1-1-1H47.25171v-3.55005c2.80005-0.25,5-2.60999,5-5.47998c0-3.03003-2.46997-5.5-5.5-5.5
                                                                                c-3.04004,0-5.51001,2.46997-5.51001,5.5c0,2.87,2.19995,5.22998,5.01001,5.47998v3.55005H28.53174c-0.55005,0-1,0.43994-1,1
                                                                                v2.71997h-4.02002V28.27326h5.69995c0.28003,0,0.5-0.22998,0.5-0.5v-12.3999c0-0.27002-0.21997-0.5-0.5-0.5H16.82178
                                                                                c-0.28003,0-0.5,0.22998-0.5,0.5v12.3999c0,0.27002,0.21997,0.5,0.5,0.5h5.68994v14.32007c0,0.28003,0.22998,0.5,0.5,0.5
                                                                                h4.52002v12.22998c0,0.55005,0.44995,1,1,1h17.71997v4.95996c-2.81006,0.25-5.01001,2.6001-5.01001,5.4701
                                                                                c0,3.03992,2.46997,5.5,5.51001,5.5c3.03003,0,5.5-2.46008,5.5-5.5C52.25171,63.88337,50.05176,61.53327,47.25171,61.28327z
                                                                                M64.79175,27.27326v-11.3999h11.38989v11.3999C75.36244,27.27326,64.30791,27.27326,64.79175,27.27326z M42.2417,29.34333
                                                                                c0-2.47998,2.03003-4.5,4.51001-4.5s4.5,2.02002,4.5,4.5c0,2.50336-2.03354,4.51001-4.5,4.51001
                                                                                C44.30062,33.85334,42.2417,31.8601,42.2417,29.34333z M17.32178,27.27326v-11.3999h11.38989v11.3999
                                                                                C25.78854,27.27326,20.24347,27.27326,17.32178,27.27326z M29.53174,40.37336h34.43994v13.94995H46.85156
                                                                                c-0.02979-0.01001-0.06982-0.01001-0.09985-0.01001s-0.07007,0-0.09985,0.01001H29.53174V40.37336z M46.75171,71.25336
                                                                                c-2.47998,0-4.51001-2.02002-4.51001-4.5c0-2.51414,2.06714-4.5,4.51001-4.5c2.4727,0,4.5,2.01278,4.5,4.5
                                                                                C51.25171,69.23335,49.23169,71.25336,46.75171,71.25336z"></path><g><circle cx="57.477" cy="8.047" r="1.687" fill="#CF95C2"></circle></g><g><circle cx="23.017" cy="21.573" r="3.204" fill="#8e54e9"></circle><circle cx="70.485" cy="21.573" r="3.204" fill="#8e54e9"></circle><circle cx="46.751" cy="29.347" r="2.068" fill="#8e54e9"></circle><circle cx="46.751" cy="66.754" r="2.068" fill="#8e54e9"></circle><circle cx="36.719" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="41.735" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="46.751" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="51.767" cy="47.325" r="1.586" fill="#8e54e9"></circle><circle cx="56.782" cy="47.325" r="1.586" fill="#8e54e9"></circle><circle cx="74.576" cy="54.592" r="1.703" fill="#8e54e9"></circle><circle cx="18.926" cy="54.592" r="1.703" fill="#8e54e9"></circle><circle cx="86.424" cy="46.875" r="1.687" fill="#8e54e9"></circle></g><g><circle cx="7.468" cy="62.093" r="1.687" fill="#F6E2EE"></circle></g><g><circle cx="45.165" cy="83.953" r="1.687" fill="#F3765D"></circle></g><g><circle cx="41.207" cy="14.875" r="1.687" fill="#FDDDD6"></circle></g><g><circle cx="7.468" cy="23.711" r="2.489" fill="#D2EDF6"></circle></g></svg>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="list-unstyled  fs-12 pt-3 mb-0">
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Storage Capacity<span class="badge bg-light text-default ms-1">5Tb</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Daily Updates<span class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Online Support</span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Visitors Monitoring<span class="badge bg-light text-default ms-1">24/7</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">10 Free Domains</span>
                                                                        </li>
                                                                        <li class="mb-4">
                                                                            <span class="text-muted">Money Back Guarentee</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="d-grid">
                                                                        <button type="button" class="btn btn-primary-light btn-wave">Get Started</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                            <div class="card custom-card overflow-hidden">
                                                                <div class="card-body p-0">
                                                                    <div class="p-4">
                                                                        <h6 class="fw-semibold ">BASIC</h6>
                                                                        <div class="pb-4 pt-2 d-flex">
                                                                            <div class="">
                                                                                <p class="mt-2 text-xxl fw-semibold mb-0">$1199</p>
                                                                                <p class="text-muted op-5 fs-11 fw-semibold mb-0">per year</p>
                                                                            </div>
                                                                            <div class="pricing-svg1 ms-auto">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 92 92" viewBox="0 0 92 92"><path fill="#f3eefd" d="M41.20752 46.41242c0-4.73499-3.83838-8.57336-8.57324-8.57336H9.57349C4.83862 37.83905 1 41.67743 1 46.41242v.00012c0 4.73486 3.83862 8.57324 8.57349 8.57324h23.06079c4.73486 0 8.57324-3.83838 8.57324-8.57324V46.41242zM77.82178 64.81879H48.74512c-4.73486 0-8.57324 3.8385-8.57324 8.57349 0 4.73486 3.83838 8.57324 8.57324 8.57324h29.07666c4.73486 0 8.57349-3.83838 8.57349-8.57324C86.39526 68.6573 82.55664 64.81879 77.82178 64.81879zM82.42676 22.62445H67.75488c-4.73486 0-8.57349 3.83838-8.57349 8.57336s3.83862 8.57336 8.57349 8.57336h14.67188C87.16162 39.77118 91 35.9328 91 31.19782S87.16162 22.62445 82.42676 22.62445z" class="colorf6e2ee svgShape"></path><rect width="20.97" height="64" x="14" y="18.625" fill="#ffffff" class="colorffffff svgShape"></rect><rect width="12.97" height="10.419" x="18" y="22.624" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><rect width="12.97" height="10.419" x="18" y="36.957" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><rect width="12.97" height="10.419" x="18" y="51.29" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><rect width="64" height="20.97" x="13.012" y="43.21" fill="#ffffff" transform="rotate(-41.076 45.013 53.695)" class="colorffffff svgShape"></rect><rect width="10.419" height="12.97" x="56.983" y="32.235" fill="#8e54e9" transform="rotate(138.924 62.194 38.721)" class="colorcf95c2 svgShape"></rect><rect width="10.419" height="12.97" x="46.179" y="41.653" fill="#8e54e9" transform="rotate(138.924 51.39 48.138)" class="colorcf95c2 svgShape"></rect><rect width="10.419" height="12.97" x="35.374" y="51.07" fill="#8e54e9" transform="rotate(138.924 40.584 57.556)" class="colorcf95c2 svgShape"></rect><rect width="64" height="20.97" x="14" y="61.655" fill="#ffffff" class="colorffffff svgShape"></rect><rect width="10.419" height="12.97" x="63.581" y="65.655" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><rect width="10.419" height="12.97" x="49.248" y="65.655" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><rect width="10.419" height="12.97" x="34.915" y="65.655" fill="#8e54e9" class="colorcf95c2 svgShape"></rect><circle cx="24.14" cy="72.14" r="3.485" fill="#8e54e9" class="colorcf95c2 svgShape"></circle><path fill="#010101" d="M30.9751 22.12421H18.00513c-.28003 0-.5.21997-.5.5v10.42004c0 .27991.21997.5.5.5H30.9751c.27002 0 .5-.22009.5-.5V22.62421C31.4751 22.34418 31.24512 22.12421 30.9751 22.12421zM30.4751 32.54425H18.50513v-9.42004H30.4751V32.54425zM30.9751 36.45429H18.00513c-.28003 0-.5.22998-.5.5v10.41992c0 .28003.21997.5.5.5H30.9751c.27002 0 .5-.21997.5-.5V36.95429C31.4751 36.68427 31.24512 36.45429 30.9751 36.45429zM30.4751 46.87421H18.50513v-9.41992H30.4751V46.87421zM70.75513 39.85419l-8.52002-9.77002c-.17993-.20996-.5-.22998-.69995-.04993l-7.86011 6.83997c-.09985.09009-.15991.20996-.16992.3501-.01001.12988.04004.26001.11987.35986l8.52002 9.78003c.1001.11011.24023.17004.38013.17004.11987 0 .23999-.03992.32983-.13l7.8501-6.84009c.1001-.08984.16992-.20996.16992-.33984C70.88525 40.08417 70.84521 39.95429 70.75513 39.85419zM62.5752 46.32416l-7.86011-9.0199 7.1001-6.19006 7.85986 9.02002L62.5752 46.32416zM59.95508 49.27423l-8.52002-9.77991c-.18994-.20007-.5-.2301-.70996-.05005l-7.8501 6.84998c-.09985.08997-.15991.20996-.16992.33997-.01001.14001.03003.27002.12012.37l8.52002 9.77002c.09985.12.23975.17004.37988.17004.10986 0 .22998-.04004.33008-.12012l7.84985-6.83984c.1001-.09009.16016-.21008.17017-.3501C60.08496 49.50422 60.04517 49.37421 59.95508 49.27423zM51.77515 55.74433l-7.87012-9.02002 7.1001-6.19006 7.86987 9.02002L51.77515 55.74433z" class="color010101 svgShape"></path><path fill="#010101" d="M78.00513,60.65424h-23.5l22.17993-19.33008c0.41016-0.35986,0.45996-0.98999,0.09009-1.40991
                                                                                    L62.99512,24.10419c-0.16992-0.19995-0.41992-0.31995-0.67993-0.33997c-0.27002-0.01001-0.53003,0.06995-0.73022,0.25
                                                                                    L35.9751,46.34418V18.62421c0-0.55005-0.44995-1-1-1H14.00513c-0.56006,0-1,0.44995-1,1v64c0,0.55005,0.43994,1,1,1h64
                                                                                    c0.55005,0,1-0.44995,1-1V61.65424C79.00513,61.10419,78.55518,60.65424,78.00513,60.65424z M62.14502,26.17426
                                                                                    l12.47021,14.30005L51.46509,60.65424h-3.81006l1.44995-1.26001c0.09009-0.08008,0.16016-0.20996,0.17017-0.33997
                                                                                    c0-0.13-0.04004-0.26001-0.13013-0.35999L40.625,48.91425c-0.17993-0.20996-0.5-0.22998-0.69995-0.05005l-7.85986,6.8501
                                                                                    c-0.1001,0.08997-0.16016,0.20996-0.17017,0.33997c-0.00977,0.13,0.04004,0.25989,0.12012,0.35999l3.69995,4.23999H22.59521
                                                                                    L62.14502,26.17426z M46.13525,60.65424h-9.1001l-3.93018-4.52002l7.1001-6.18994l7.86011,9.03003L46.13525,60.65424z
                                                                                    M19.54517,60.65424h-1.04004v-8.85999h11.20996L19.54517,60.65424z M15.00513,19.62421H33.9751v28.45996l-3.10986,2.71008
                                                                                    H18.00513c-0.28003,0-0.5,0.21997-0.5,0.5v9.35999h-2.5V19.62421z M77.00513,81.62421h-62V62.65424h62V81.62421z" class="color010101 svgShape"></path><path fill="#010101" d="M74.00513 65.15424H63.58496c-.27979 0-.5.21997-.5.5v12.96997c0 .28003.22021.5.5.5h10.42017c.27002 0 .5-.21997.5-.5V65.65424C74.50513 65.37421 74.27515 65.15424 74.00513 65.15424zM73.50513 78.12421h-9.42017V66.15424h9.42017V78.12421zM59.66504 65.15424H49.24512c-.27002 0-.5.21997-.5.5v12.96997c0 .28003.22998.5.5.5h10.41992c.28003 0 .5-.21997.5-.5V65.65424C60.16504 65.37421 59.94507 65.15424 59.66504 65.15424zM59.16504 78.12421h-9.41992V66.15424h9.41992V78.12421zM45.33496 65.15424H34.91504c-.27979 0-.5.21997-.5.5v12.96997c0 .28003.22021.5.5.5h10.41992c.28027 0 .5-.21997.5-.5V65.65424C45.83496 65.37421 45.61523 65.15424 45.33496 65.15424zM44.83496 78.12421h-9.41992V66.15424h9.41992V78.12421zM24.14502 68.15424c-2.19995 0-3.98999 1.79004-3.98999 3.98999 0 2.18994 1.79004 3.97998 3.98999 3.97998 2.18994 0 3.97998-1.79004 3.97998-3.97998C28.125 69.94428 26.33496 68.15424 24.14502 68.15424zM24.14502 75.12421c-1.6499 0-2.98999-1.33997-2.98999-2.97998 0-1.6499 1.34009-2.98999 2.98999-2.98999 1.64014 0 2.97998 1.34009 2.97998 2.98999C27.125 73.78425 25.78516 75.12421 24.14502 75.12421z" class="color010101 svgShape"></path><circle cx="68.791" cy="11.094" r="2.719" fill="#dff8f1" class="colordfebf8 svgShape"></circle><circle cx="48.008" cy="17.343" r="2.291" fill="#d6fdf2" class="colorfdddd6 svgShape"></circle><circle cx="85.592" cy="52.839" r="2.291" fill="#8e54e9" class="color84b0de svgShape"></circle><circle cx="7.956" cy="80.915" r="2.291" fill="#d2f6ec" class="colord2edf6 svgShape"></circle><circle cx="6.652" cy="25.369" r="1.303" fill="#5cfdd0" class="colorfdbe5c svgShape"></circle></svg>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="list-unstyled  fs-12 pt-3 mb-0">
                                                                            <li class="mb-3">
                                                                                <span class="text-muted">Storage Capacity<span class="badge bg-light text-default ms-1">1Tb</span></span>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <span class="text-muted">Daily Updates<span class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <span class="text-muted">Online Support</span>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <span class="text-muted">Visitors Monitoring<span class="badge bg-light text-default ms-1">24/7</span></span>
                                                                            </li>
                                                                            <li class="mb-3">
                                                                                <span class="text-muted">2 Free Domains</span>
                                                                            </li>
                                                                            <li class="mb-4">
                                                                                <span class="text-muted">Money Back Guarentee</span>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="d-grid">
                                                                            <button type="button" class="btn btn-primary-light btn-wave">Get Started</button>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                        <div class="card custom-card overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="p-4">
                                                                    <h6 class="fw-semibold ">ADVANCED</h6>
                                                                    <div class="pb-4 pt-2 d-flex">
                                                                        <div class="">
                                                                            <p class="mt-2 text-xxl fw-semibold mb-0">$1499</p>
                                                                            <p class="text-muted op-5 fs-11 fw-semibold mb-0">per year</p>
                                                                        </div>
                                                                        <div class="pricing-svg1 ms-auto">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 92 92" viewBox="0 0 92 92"><path fill="#f3eefd" d="M32.63403 32.90607H9.57324C4.83838 32.90607 1 36.74445 1 41.47956c0 4.73486 3.83838 8.57324 8.57324 8.57324h23.06079c4.73486 0 8.57324-3.83838 8.57324-8.57324C41.20728 36.74445 37.3689 32.90607 32.63403 32.90607zM77.82153 59.88581H48.74487c-4.73511 0-8.57349 3.8385-8.57349 8.57349l0 0c0 4.73486 3.83838 8.57336 8.57349 8.57336h29.07666c4.73511 0 8.57349-3.8385 8.57349-8.57336l0 0C86.39502 63.72431 82.55664 59.88581 77.82153 59.88581zM82.42651 17.69147H67.75464c-4.73511 0-8.57349 3.83838-8.57349 8.57336s3.83838 8.57336 8.57349 8.57336h14.67188C87.16162 34.8382 91 30.99982 91 26.26484S87.16162 17.69147 82.42651 17.69147z"></path><rect width="36.443" height="15.95" x="28.529" y="39.369" fill="#8e54e9"></rect><rect width="23.14" height="10.128" x="15.251" y="68.248" fill="#8e54e9"></rect><rect width="23.14" height="10.128" x="55.111" y="68.248" fill="#8e54e9"></rect><rect width="28.569" height="8.075" x="32.467" y="43.306" fill="#FFF"></rect><circle cx="21.126" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="26.821" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="32.517" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="60.985" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="66.681" cy="73.312" r="1.822" fill="#FFF"></circle><circle cx="72.376" cy="73.312" r="1.822" fill="#FFF"></circle><rect width="12.396" height="12.396" x="16.819" y="15.375" fill="#FFF"></rect><rect width="12.396" height="12.396" x="64.287" y="15.375" fill="#FFF"></rect><circle cx="46.751" cy="29.347" r="5.005" fill="#FFF"></circle><circle cx="46.751" cy="66.754" r="5.005" fill="#FFF"></circle><rect width="7.349" height="7.349" x="70.902" y="50.917" fill="#FFF"></rect><rect width="7.349" height="7.349" x="15.251" y="50.917" fill="#FFF"></rect><path fill="#010101" d="M38.3916 67.24335H19.42163v-8.47998h3.17993c.27002 0 .5-.22009.5-.5v-7.34998c0-.27002-.22998-.5-.5-.5h-7.34985c-.28003 0-.5.22998-.5.5v7.34998c0 .27991.21997.5.5.5h3.16992v8.47998h-3.16992c-.55005 0-1 .45007-1 1v10.13c0 .55005.44995 1 1 1H38.3916c.55005 0 1-.44995 1-1v-10.13C39.3916 67.69343 38.94165 67.24335 38.3916 67.24335zM15.75171 57.76337v-6.34998h6.34985v6.34998C19.90606 57.76337 18.13821 57.76337 15.75171 57.76337zM37.3916 77.37336H16.25171v-8.13H37.3916V77.37336zM78.25171 67.24335h-3.17993v-8.47998h3.17993c.28003 0 .5-.22009.5-.5v-7.34998c0-.27002-.21997-.5-.5-.5h-7.34985c-.28027 0-.5.22998-.5.5v7.34998c0 .27991.21973.5.5.5h3.16992v8.47998H55.11182c-.55005 0-1 .45007-1 1v10.13c0 .55005.44995 1 1 1h23.13989c.55005 0 1-.44995 1-1v-10.13C79.25171 67.69343 78.80176 67.24335 78.25171 67.24335zM71.40186 57.76337v-6.34998h6.34985v6.34998C75.55621 57.76337 73.78835 57.76337 71.40186 57.76337zM77.25171 77.37336H56.11182v-8.13h21.13989V77.37336z"></path><path fill="#010101" d="M47.25171,61.28327v-4.95996h17.71997c0.55005,0,1-0.44995,1-1V43.09333h4.51001
                                                                                c0.28003,0,0.5-0.21997,0.5-0.5V28.27326h5.69995c0.28003,0,0.5-0.22998,0.5-0.5v-12.3999c0-0.27002-0.21997-0.5-0.5-0.5
                                                                                H64.29175c-0.28003,0-0.5,0.22998-0.5,0.5v12.3999c0,0.27002,0.21997,0.5,0.5,0.5h5.68994v13.82007h-4.01001v-2.71997
                                                                                c0-0.56006-0.44995-1-1-1H47.25171v-3.55005c2.80005-0.25,5-2.60999,5-5.47998c0-3.03003-2.46997-5.5-5.5-5.5
                                                                                c-3.04004,0-5.51001,2.46997-5.51001,5.5c0,2.87,2.19995,5.22998,5.01001,5.47998v3.55005H28.53174c-0.55005,0-1,0.43994-1,1
                                                                                v2.71997h-4.02002V28.27326h5.69995c0.28003,0,0.5-0.22998,0.5-0.5v-12.3999c0-0.27002-0.21997-0.5-0.5-0.5H16.82178
                                                                                c-0.28003,0-0.5,0.22998-0.5,0.5v12.3999c0,0.27002,0.21997,0.5,0.5,0.5h5.68994v14.32007c0,0.28003,0.22998,0.5,0.5,0.5
                                                                                h4.52002v12.22998c0,0.55005,0.44995,1,1,1h17.71997v4.95996c-2.81006,0.25-5.01001,2.6001-5.01001,5.4701
                                                                                c0,3.03992,2.46997,5.5,5.51001,5.5c3.03003,0,5.5-2.46008,5.5-5.5C52.25171,63.88337,50.05176,61.53327,47.25171,61.28327z
                                                                                M64.79175,27.27326v-11.3999h11.38989v11.3999C75.36244,27.27326,64.30791,27.27326,64.79175,27.27326z M42.2417,29.34333
                                                                                c0-2.47998,2.03003-4.5,4.51001-4.5s4.5,2.02002,4.5,4.5c0,2.50336-2.03354,4.51001-4.5,4.51001
                                                                                C44.30062,33.85334,42.2417,31.8601,42.2417,29.34333z M17.32178,27.27326v-11.3999h11.38989v11.3999
                                                                                C25.78854,27.27326,20.24347,27.27326,17.32178,27.27326z M29.53174,40.37336h34.43994v13.94995H46.85156
                                                                                c-0.02979-0.01001-0.06982-0.01001-0.09985-0.01001s-0.07007,0-0.09985,0.01001H29.53174V40.37336z M46.75171,71.25336
                                                                                c-2.47998,0-4.51001-2.02002-4.51001-4.5c0-2.51414,2.06714-4.5,4.51001-4.5c2.4727,0,4.5,2.01278,4.5,4.5
                                                                                C51.25171,69.23335,49.23169,71.25336,46.75171,71.25336z"></path><g><circle cx="57.477" cy="8.047" r="1.687" fill="#CF95C2"></circle></g><g><circle cx="23.017" cy="21.573" r="3.204" fill="#8e54e9"></circle><circle cx="70.485" cy="21.573" r="3.204" fill="#8e54e9"></circle><circle cx="46.751" cy="29.347" r="2.068" fill="#8e54e9"></circle><circle cx="46.751" cy="66.754" r="2.068" fill="#8e54e9"></circle><circle cx="36.719" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="41.735" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="46.751" cy="47.362" r="1.586" fill="#8e54e9"></circle><circle cx="51.767" cy="47.325" r="1.586" fill="#8e54e9"></circle><circle cx="56.782" cy="47.325" r="1.586" fill="#8e54e9"></circle><circle cx="74.576" cy="54.592" r="1.703" fill="#8e54e9"></circle><circle cx="18.926" cy="54.592" r="1.703" fill="#8e54e9"></circle><circle cx="86.424" cy="46.875" r="1.687" fill="#8e54e9"></circle></g><g><circle cx="7.468" cy="62.093" r="1.687" fill="#F6E2EE"></circle></g><g><circle cx="45.165" cy="83.953" r="1.687" fill="#F3765D"></circle></g><g><circle cx="41.207" cy="14.875" r="1.687" fill="#FDDDD6"></circle></g><g><circle cx="7.468" cy="23.711" r="2.489" fill="#D2EDF6"></circle></g></svg>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="list-unstyled  fs-12 pt-3 mb-0">
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Storage Capacity<span class="badge bg-light text-default ms-1">5Tb</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Daily Updates<span class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Online Support</span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Visitors Monitoring<span class="badge bg-light text-default ms-1">24/7</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">10 Free Domains</span>
                                                                        </li>
                                                                        <li class="mb-4">
                                                                            <span class="text-muted">Money Back Guarentee</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="d-grid">
                                                                        <button type="button" class="btn btn-primary-light btn-wave">Get Started</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                        <div class="card custom-card overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="p-4 pricing-offer overflow-hidden">
                                                                    <span class="pricing-offer-details shadow">
                                                                        <span class="fw-semibold">10%</span> <span class="fs-10 op-8 ms-1">Off</span>
                                                                    </span>
                                                                    <h6 class="fw-semibold ">PREMIUM</h6>
                                                                    <div class="pb-4 pt-2 d-flex">
                                                                        <div class="">
                                                                            <p class="mt-2 text-xxl fw-semibold mb-0">$11,299</p>
                                                                            <p class="text-muted op-5 fs-11 fw-semibold mb-0">per year</p>
                                                                        </div>
                                                                        <div class="pricing-svg1 ms-auto">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 92 92" viewBox="0 0 92 92"><path fill="#f3eefd" d="M32.66125 30.99631H9.69348c-4.55225 0-8.24268 3.69031-8.24268 8.24255s3.69043 8.24255 8.24268 8.24255h22.96777c4.55225 0 8.24243-3.69031 8.24243-8.24255S37.2135 30.99631 32.66125 30.99631zM71.80823 35.48313h8.73999c4.55225 0 8.24243-3.69037 8.24243-8.24255v-.00006c0-4.55219-3.69019-8.24255-8.24243-8.24255h-8.73999c-4.55225 0-8.24268 3.69037-8.24268 8.24255v.00006C63.56555 31.79276 67.25598 35.48313 71.80823 35.48313zM82.30652 59.57212H67.62024c-4.55225 0-8.24243 3.69037-8.24243 8.24256v.00006c0 4.55219 3.69019 8.24255 8.24243 8.24255h14.68628c4.55225 0 8.24268-3.69037 8.24268-8.24255v-.00006C90.54919 63.26249 86.85876 59.57212 82.30652 59.57212z"></path><path fill="#8e54e9" d="M75.14807,56.70884H31.23083c-1.16602,0-2.11133,0.94525-2.11133,2.11133v17.98908
                                                                                c0,1.16608,0.94531,2.11133,2.11133,2.11133h43.91724c1.16602,0,2.11133-0.94525,2.11133-2.11133V58.82016
                                                                                C77.2594,57.65409,76.31409,56.70884,75.14807,56.70884z"></path><rect width="41.89" height="15.962" x="32.245" y="59.834" fill="#FFF"></rect><rect width="3.236" height="3.128" x="34.585" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="40.247" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="45.909" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="51.571" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="57.233" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="62.895" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="68.557" y="61.662" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="34.585" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="40.247" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="45.909" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="51.571" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="57.233" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="62.895" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="68.557" y="66.251" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="34.585" y="70.839" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="40.247" y="70.839" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="62.895" y="70.839" fill="#8e54e9"></rect><rect width="3.236" height="3.128" x="68.557" y="70.839" fill="#8e54e9"></rect><rect width="14.56" height="3.128" x="45.909" y="70.839" fill="#8e54e9"></rect><circle cx="7.375" cy="56.709" r="3.781" fill="#f3eefd"></circle><circle cx="18.12" cy="74.966" r="1.42" fill="#FDDDD6"></circle><circle cx="87.37" cy="47.993" r="1.42" fill="#8e54e9"></circle><circle cx="54.807" cy="14.921" r="1.42" fill="#F3765D"></circle><circle cx="49.733" cy="46.121" r="1.42" fill="#8e54e9"></circle><circle cx="15.654" cy="13.5" r="1.42" fill="#CF95C2"></circle><polygon fill="#8e54e9" points="49.684 26.007 31.381 51.769 13.088 26.007"></polygon><polygon fill="#8e54e9" points="38.101 26.007 31.384 51.769 24.671 26.007"></polygon><polygon fill="#FFF" points="22.638 17.587 13.088 26.007 49.684 26.007 40.129 17.587"></polygon><polygon fill="#FFF" points="28.176 17.587 24.671 26.007 38.101 26.007 34.594 17.587"></polygon><path fill="#010101" d="M75.15198,55.70981H55.30774v-0.42896c0-1.2041,0.97949-2.18359,2.18311-2.18359h7.96436
                                                                                    c2.1167,0,3.83838-1.72168,3.83838-3.83838s-1.72168-3.83838-3.83838-3.83838h-4.90039
                                                                                    c-1.46582,0-2.65869-1.19287-2.65869-2.65869s1.19287-2.6582,2.65869-2.6582h5.7168c2.1167,0,3.83838-1.72168,3.83838-3.83838
                                                                                    v-0.23486c0-2.1167-1.72168-3.83838-3.83838-3.83838H46.21033l0.00146-0.00214l4.06006-5.72003
                                                                                    c0-0.01001,0.01001-0.01996,0.02002-0.02997c0.16131-0.20139,0.22693-0.66296-0.11011-1l-9.56006-8.41003
                                                                                    c-0.12988-0.13-0.30981-0.19-0.48975-0.19c-10.80636,0-11.57661,0-17.49023,0c-0.18994,0-0.35986,0.06-0.5,0.19l-9.5498,8.41003
                                                                                    c-0.3427,0.3427-0.30229,0.82839-0.1001,1.02997l18.26001,25.70001c0,0.01001,0.01001,0.02002,0.02002,0.03003
                                                                                    c0.15686,0.26111,0.57111,0.39985,0.84985,0.27997c0.30735-0.10224,0.34944-0.29982,0.4502-0.39996l13.41846-18.88788h20.78125
                                                                                    c1.56494,0,2.83838,1.27344,2.83838,2.83838v0.23486c0,1.56494-1.27344,2.83838-2.83838,2.83838h-5.7168
                                                                                    c-2.01758,0-3.65869,1.64111-3.65869,3.6582c0,2.01758,1.64111,3.65869,3.65869,3.65869h4.90039
                                                                                    c1.56494,0,2.83838,1.27344,2.83838,2.83838s-1.27344,2.83838-2.83838,2.83838h-7.96436
                                                                                    c-1.75537,0-3.18311,1.42822-3.18311,3.18359v0.42896H31.23181c-1.71997,0-3.11011,1.39001-3.11011,3.11005v17.98999
                                                                                    c0,1.71997,1.39014,3.10999,3.11011,3.10999h43.92017c1.70996,0,3.10986-1.39001,3.10986-3.10999V58.81986
                                                                                    C78.26184,57.09983,76.86194,55.70981,75.15198,55.70981z M39.84192,18.33982l7.85986,6.92004h-9.1001l-2.88989-6.92004H39.84192z
                                                                                    M34.09192,18.33982l2.87988,6.92004H25.79187l2.87988-6.92004H34.09192z M37.13196,26.75986l-5.75,22.03998l-5.74023-22.03998
                                                                                    H37.13196z M22.92175,18.33982h4.13013l-2.88013,6.92004H15.0719L22.92175,18.33982z M14.54187,26.75986h9.55005l5.54004,21.23999
                                                                                    L14.54187,26.75986z M38.67175,26.75986h9.56006l-3.88013,5.45996l-0.00317,0.00427
                                                                                    c-0.19702,0.06714-0.34058,0.24805-0.34058,0.4679c0,0.00372,0.00195,0.00677,0.00195,0.01044L33.15198,47.98984
                                                                                    L38.67175,26.75986z M76.26184,76.80985c0,0.60999-0.5,1.10999-1.10986,1.10999H31.23181c-0.61011,0-1.11011-0.5-1.11011-1.10999
                                                                                    V58.81986c0-0.61005,0.5-1.11005,1.11011-1.11005h43.92017c0.60986,0,1.10986,0.5,1.10986,1.11005V76.80985z"></path></svg>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="list-unstyled  fs-12 pt-3 mb-0">
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Storage Capacity<span class="badge bg-light text-default ms-1">10Tb</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Daily Updates<span class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Online Support</span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">Visitors Monitoring<span class="badge bg-light text-default ms-1">24/7</span></span>
                                                                        </li>
                                                                        <li class="mb-3">
                                                                            <span class="text-muted">30 Free Domains</span>
                                                                        </li>
                                                                        <li class="mb-4">
                                                                            <span class="text-muted">Money Back Guarentee</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="d-grid">
                                                                        <button type="button" class="btn btn-primary btn-wave">Get Started</button>
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
                            <!-- End:: row-2 -->

                            <!-- Start:: row-3 -->
                            <div class="row mb-5">
                                <div class="col-xl-12">
                                    <div class="card bg-transparent border-0">
                                        <h5 class="fw-semibold text-center  mb-0">Pricing Plans</h5>
                                        <p class="text-muted text-center  op-7">Select best plans that fits your needs for your business growth,plans are flexible with the enterprise.Familiarize with the payment plans below</p>
                                        <div class="d-flex justify-content-center mt-4">
                                            <ul class="nav nav-tabs mb-3 tab-style-6 bg-primary-transparent" id="myTab3" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pricing-monthly3" data-bs-toggle="tab"
                                                        data-bs-target="#pricing-monthly3-pane" type="button" role="tab"
                                                        aria-controls="pricing-monthly3-pane" aria-selected="true">Monthly</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pricing-yearly3" data-bs-toggle="tab"
                                                        data-bs-target="#pricing-yearly3-pane" type="button" role="tab"
                                                        aria-controls="pricing-yearly3-pane" aria-selected="false">Yearly</button>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tab-content" id="myTabContent3">
                                        <div class="tab-pane show active p-0 border-0" id="pricing-monthly3-pane"
                                            role="tabpanel" aria-labelledby="pricing-monthly3" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-9 col-xl-12 col-md-12 col-lg-12 col-sm-12">
                                                    <div class="container-lg">
                                                        <div class="card custom-card">
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col" class="text-center">
                                                                                    <p class="fs-18 fw-semibold mb-3 h5">Chek Our Plans</p>
                                                                                    <img src="{{asset('build/assets/images/media/chooseplan.png')}}"  alt="" class="wd-150">
                                                                                </th>
                                                                                <th scope="col" class="text-center c">
                                                                                    <div class="avatar avatar-md rounded-circle bg-light mb-2">
                                                                                        <i class="bx bx-bolt-circle fs-24 text-primary"></i>
                                                                                    </div>
                                                                                    <p class="fs-18 mb-0 fw-semibold h5">Basic</p>
                                                                                    <span class="text-xxl fw-semibold text-dark">$99</span>
                                                                                    <p class="text-muted fs-12">per month</p>
                                                                                    <div class="d-grid">
                                                                                        <button type="button" class="btn btn-primary-light btn-wave">Get started</button>
                                                                                    </div>
                                                                                </th>
                                                                                <th scope="col" class="text-center ">
                                                                                    <div class="avatar avatar-md rounded-circle bg-light mb-2">
                                                                                        <i class="bx bx-data  fs-24 text-primary" ></i>
                                                                                    </div>
                                                                                    <p class="fs-18 mb-0 fw-semibold h5">Pro</p>
                                                                                    <span class="text-xxl fw-semibold text-dark">$3,499</span>
                                                                                    <p class="text-muted fs-12">per month</p>
                                                                                    <div class="d-grid">
                                                                                        <button type="button" class="btn btn-primary-light btn-wave">Get started</button>
                                                                                    </div>
                                                                                </th>
                                                                                <th scope="col" class="text-center ">
                                                                                    <div class="avatar avatar-md rounded-circle bg-light mb-2">
                                                                                        <i class="bx bx-crown  fs-24 text-primary" ></i>
                                                                                    </div>
                                                                                    <p class="fs-18 mb-0 fw-semibold h5">Premium</p>
                                                                                    <span class="text-xxl fw-semibold text-dark">$5,499</span>
                                                                                    <p class="text-muted fs-12">per month</p>
                                                                                    <div class="d-grid">
                                                                                        <button type="button" class="btn btn-primary-light btn-wave">Get started</button>
                                                                                    </div>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="text-center bg-primary-transparent">
                                                                                <td colspan="4">
                                                                                    <span class="fs-14 fw-semibold">Main Features</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>
                                                                                    <span>
                                                                                        24/7 support <span class="badge bg-primary ms-2">1
                                                                                            Year</span>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span>
                                                                                        24/7 support <span class="badge bg-primary ms-2">5
                                                                                            Year</span>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span>
                                                                                        24/7 support <span class="badge bg-primary ms-2">Life
                                                                                            Long</span>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>
                                                                                    <span>
                                                                                        Storage Capacity <span class="badge bg-success ms-2">1
                                                                                            TB</span>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span>
                                                                                        Storage Capacity <span class="badge bg-success ms-2">5
                                                                                            TB</span>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span>
                                                                                        Storage Capacity <span class="badge bg-success ms-2">10
                                                                                            TB</span>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="text-center bg-primary-transparent">
                                                                                <td colspan="4">
                                                                                    <span class="fs-14 fw-semibold">Complete Features</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Domains
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="fw-semibold">2 Free</span> Domain names
                                                                                </td>
                                                                                <td>
                                                                                    <span class="fw-semibold">5 Free</span> Domain names
                                                                                </td>
                                                                                <td>
                                                                                    <span class="fw-semibold">10 Free</span> Domain names
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Money Back Guarentee
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        App Integrations
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Future Updates
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Team Management
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Daily Updates
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                    class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                    <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Customer Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Email Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Livechat Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
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
                                        <div class="tab-pane p-0 border-0" id="pricing-yearly3-pane"
                                            role="tabpanel" aria-labelledby="pricing-yearly3" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-9 col-xl-12 col-md-12 col-lg-12 col-sm-12">
                                                    <div class="container-lg">
                                                        <div class="card custom-card">
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col" class="text-center">
                                                                                    <p class="fs-18 fw-semibold mb-3 h5">Chek Our Plans</p>
                                                                                    <img src="{{asset('build/assets/images/media/chooseplan.png')}}"  alt="" class="wd-150">
                                                                                </th>
                                                                                <th scope="col" class="text-center c">
                                                                                    <div class="avatar avatar-md rounded-circle bg-light mb-2">
                                                                                        <i class="bx bx-bolt-circle fs-24 text-primary"></i>
                                                                                    </div>
                                                                                    <p class="fs-18 mb-0 fw-semibold h5">Basic</p>
                                                                                    <span class="text-xxl fw-semibold text-dark">$999</span>
                                                                                    <p class="text-muted fs-12">per year </p>
                                                                                    <div class="d-grid">
                                                                                        <button type="button" class="btn btn-primary-light btn-wave">Get started</button>
                                                                                    </div>
                                                                                </th>
                                                                                <th scope="col" class="text-center ">
                                                                                    <div class="avatar avatar-md rounded-circle bg-light mb-2">
                                                                                        <i class="bx bx-data  fs-24 text-primary" ></i>
                                                                                    </div>
                                                                                    <p class="fs-18 mb-0 fw-semibold h5">Pro</p>
                                                                                    <span class="text-xxl fw-semibold text-dark">$93,499</span>
                                                                                    <p class="text-muted fs-12">per year </p>
                                                                                    <div class="d-grid">
                                                                                        <button type="button" class="btn btn-primary-light btn-wave">Get started</button>
                                                                                    </div>
                                                                                </th>
                                                                                <th scope="col" class="text-center ">
                                                                                    <div class="avatar avatar-md rounded-circle bg-light mb-2">
                                                                                        <i class="bx bx-crown  fs-24 text-primary" ></i>
                                                                                    </div>
                                                                                    <p class="fs-18 mb-0 fw-semibold h5">Premium</p>
                                                                                    <span class="text-xxl fw-semibold text-dark">$95,499</span>
                                                                                    <p class="text-muted fs-12">per year </p>
                                                                                    <div class="d-grid">
                                                                                        <button type="button" class="btn btn-primary-light btn-wave">Get started</button>
                                                                                    </div>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="text-center bg-primary-transparent">
                                                                                <td colspan="4">
                                                                                    <span class="fs-14 fw-semibold">Main Features</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>
                                                                                    <span>
                                                                                        24/7 support <span class="badge bg-primary ms-2">1
                                                                                            Year</span>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span>
                                                                                        24/7 support <span class="badge bg-primary ms-2">5
                                                                                            Year</span>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span>
                                                                                        24/7 support <span class="badge bg-primary ms-2">Life
                                                                                            Long</span>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>
                                                                                    <span>
                                                                                        Storage Capacity <span class="badge bg-success ms-2">1
                                                                                            TB</span>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span>
                                                                                        Storage Capacity <span class="badge bg-success ms-2">5
                                                                                            TB</span>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span>
                                                                                        Storage Capacity <span class="badge bg-success ms-2">10
                                                                                            TB</span>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="text-center bg-primary-transparent">
                                                                                <td colspan="4">
                                                                                    <span class="fs-14 fw-semibold">Complete Features</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Domains
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="fw-semibold">2 Free</span> Domain names
                                                                                </td>
                                                                                <td>
                                                                                    <span class="fw-semibold">5 Free</span> Domain names
                                                                                </td>
                                                                                <td>
                                                                                    <span class="fw-semibold">10 Free</span> Domain names
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Money Back Guarentee
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        App Integrations
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Future Updates
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Team Management
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Daily Updates
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                    class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                    <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Customer Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Email Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <span class="fw-bold fs-14">
                                                                                        Livechat Support
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-close-line align-middle fw-semibold"></i>
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success-transparent p-1 lh-1 rounded-circle">
                                                                                        <i class="ri-check-line align-middle fw-semibold"></i>
                                                                                    </span>
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
                                </div>
                            </div>
                            <!-- End:: row-3 -->

                        </div>
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')
  

@endsection