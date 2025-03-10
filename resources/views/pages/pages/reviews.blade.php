@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Reviews</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <div class="container-lg">
                                <!-- Start::row-1 -->
                                <div class="row justify-content-center ">
                                    <div class="card border-0 bg-transparent text-fixed-white text-center">
                                        <h5 class="mb-5 fw-semibold text-fixed-white">Reviews Style-1</h5>
                                    </div>
                                    <div class="col-xxl-10 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row gy-4">
                                            <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-3">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-semibold fs-14">Alex Carey</p>
                                                                        <div class="mb-1">
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                    <span class="badge border bd-gray-200 rounded-1 text-muted">18 hrs ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 ps-2">
                                                                <span class="text-muted"><i class="ri-double-quotes-l"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r"></i></span>
                                                            </div>
                                                            <div class="ps-2">
                                                                <a href="javascript:void(0);" class="badge border bg-primary-transparent rounded-1  me-2">
                                                                    <i class="ri-thumb-up-line align-bottom me-1 d-inline-flex"></i><span class=""> 150 </span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="badge border bg-danger-transparent rounded-1 ">
                                                                    <i class="ri-thumb-down-line align-bottom me-1 d-inline-flex"></i><span class=""> 10 </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-3">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-semibold fs-14">Adom Sharayi</p>
                                                                        <div class="mb-1">
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                    <span class="badge border bd-gray-200 rounded-1 text-muted">5 days ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 ps-2">
                                                                <span class="text-muted"><i class="ri-double-quotes-l"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r"></i></span>
                                                            </div>
                                                            <div class="ps-2">
                                                                <a href="javascript:void(0);" class="badge border bg-primary-transparent rounded-1  me-2">
                                                                    <i class="ri-thumb-up-line align-bottom me-1 d-inline-flex"></i><span class=""> 120 </span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="badge border bg-danger-transparent rounded-1 ">
                                                                    <i class="ri-thumb-down-line align-bottom me-1 d-inline-flex"></i><span class=""> 30 </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-3">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-semibold fs-14">Davide Jonese</p>
                                                                        <div class="mb-1">
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                    <span class="badge border bd-gray-200 rounded-1 text-muted">25 days ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 ps-2">
                                                                <span class="text-muted"><i class="ri-double-quotes-l"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r"></i></span>
                                                            </div>
                                                            <div class="ps-2">
                                                                <a href="javascript:void(0);" class="badge border bg-primary-transparent rounded-1  me-2">
                                                                    <i class="ri-thumb-up-line align-bottom me-1 d-inline-flex"></i><span class=""> 140 </span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="badge border bg-danger-transparent rounded-1 ">
                                                                    <i class="ri-thumb-down-line align-bottom me-1 d-inline-flex"></i><span class=""> 60 </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-3">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-semibold fs-14">Alisaben Avirayi</p>
                                                                        <div class="mb-1">
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                    <span class="badge border bd-gray-200 rounded-1 text-muted">28 day ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 ps-2">
                                                                <span class="text-muted"><i class="ri-double-quotes-l"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r"></i></span>
                                                            </div>
                                                            <div class="ps-2">
                                                                <a href="javascript:void(0);" class="badge border bg-primary-transparent rounded-1  me-2">
                                                                    <i class="ri-thumb-up-line align-bottom me-1 d-inline-flex"></i><span class=""> 100 </span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="badge border bg-danger-transparent rounded-1 ">
                                                                    <i class="ri-thumb-down-line align-bottom me-1 d-inline-flex"></i><span class=""> 20 </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-3">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-semibold fs-14">Karen Vally</p>
                                                                        <div class="mb-1">
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                    <span class="badge border bd-gray-200 rounded-1 text-muted">1 month ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 ps-2">
                                                                <span class="text-muted"><i class="ri-double-quotes-l"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r"></i></span>
                                                            </div>
                                                            <div class="ps-2">
                                                                <a href="javascript:void(0);" class="badge border bg-primary-transparent rounded-1  me-2">
                                                                    <i class="ri-thumb-up-line align-bottom me-1 d-inline-flex"></i><span class=""> 200 </span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="badge border bg-danger-transparent rounded-1 ">
                                                                    <i class="ri-thumb-down-line align-bottom me-1 d-inline-flex"></i><span class=""> 50 </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-3">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="">
                                                            <div class="d-sm-flex d-block align-items-top mb-3">
                                                                <div class="d-flex flex-fill align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="lh-1 me-2">
                                                                        <p class="mb-1 fw-semibold fs-14">Bollyes vrasu</p>
                                                                        <div class="mb-1">
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                            <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                                    <span class="badge border bd-gray-200 rounded-1 text-muted">3 months ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 ps-2">
                                                                <span class="text-muted"><i class="ri-double-quotes-l"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r"></i></span>
                                                            </div>
                                                            <div class="ps-2">
                                                                <a href="javascript:void(0);" class="badge border bg-primary-transparent rounded-1  me-2">
                                                                    <i class="ri-thumb-up-line align-bottom me-1 d-inline-flex"></i><span class=""> 170 </span>
                                                                </a>
                                                                <a href="javascript:void(0);" class="badge border bg-danger-transparent rounded-1 ">
                                                                    <i class="ri-thumb-down-line align-bottom me-1 d-inline-flex"></i><span class=""> 40 </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0 bg-transparent text-center">
                                        <h5 class="my-4 fw-semibold">Reviews Style-2</h5>
                                    </div>
                                    <div class="col-xxl-10 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row gy-4  reviews-container">
                                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <span class="avatar avatar-md avatar-rounded me-3">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <p class="mb-0 fw-semibold fs-14 text-primary">Jhonson Smith</p>
                                                                <p class="mb-0 fs-10 fw-semibold text-muted">CHIEF SECRETARY MBIO</p>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="text-muted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-semibold fs-11 text-primary"  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <span class="text-muted">Rating : </span>
                                                                <span class="text-warning d-block ms-1">
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-half-fill"></i>
                                                                </span>
                                                            </div>
                                                            <div class="float-end fs-12 fw-semibold text-muted text-end">
                                                                <span>16 hrs ago</span>
                                                                <span class="d-block fw-normal fs-12 text-success"><i>Jhonson Smith</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <span class="avatar avatar-md avatar-rounded me-3">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <p class="mb-0 fw-semibold fs-14 text-primary">Dwayne Stort</p>
                                                                <p class="mb-0 fs-10 fw-semibold text-muted">CEO ARMEDILLO</p>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="text-muted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-semibold fs-11 text-primary"  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <span class="text-muted">Rating : </span>
                                                                <span class="text-warning d-block ms-1">
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-line"></i>
                                                                </span>
                                                            </div>
                                                            <div class="float-end fs-12 fw-semibold text-muted text-end">
                                                                <span>22 days ago</span>
                                                                <span class="d-block fw-normal fs-12 text-success"><i>Dwayne Stort</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <span class="avatar avatar-md avatar-rounded me-3">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <p class="mb-0 fw-semibold fs-14 text-primary">Jasmine Kova</p>
                                                                <p class="mb-0 fs-10 fw-semibold text-muted">AGGENT AMIO</p>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="text-muted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-semibold fs-11 text-primary"  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <span class="text-muted">Rating : </span>
                                                                <span class="text-warning d-block ms-1">
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-half-fill"></i>
                                                                </span>
                                                            </div>
                                                            <div class="float-end fs-12 fw-semibold text-muted text-end">
                                                                <span>26 days ago</span>
                                                                <span class="d-block fw-normal fs-12 text-success"><i>Jasmine Kova</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <span class="avatar avatar-md avatar-rounded me-3">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <p class="mb-0 fw-semibold fs-14 text-primary">Dolph MR</p>
                                                                <p class="mb-0 fs-10 fw-semibold text-muted">CEO MR BRAND</p>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="text-muted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-semibold fs-11 text-primary"  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <span class="text-muted">Rating : </span>
                                                                <span class="text-warning d-block ms-1">
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                </span>
                                                            </div>
                                                            <div class="float-end fs-12 fw-semibold text-muted text-end">
                                                                <span>1 month ago</span>
                                                                <span class="d-block fw-normal fs-12 text-success"><i>Dolph MR</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <span class="avatar avatar-md avatar-rounded me-3">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <p class="mb-0 fw-semibold fs-14 text-primary">Brenda Simpson</p>
                                                                <p class="mb-0 fs-10 fw-semibold text-muted">CEO AIBMO</p>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="text-muted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-semibold fs-11 text-primary"  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <span class="text-muted">Rating : </span>
                                                                <span class="text-warning d-block ms-1">
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-half-fill"></i>
                                                                </span>
                                                            </div>
                                                            <div class="float-end fs-12 fw-semibold text-muted text-end">
                                                                <span>1 month ago</span>
                                                                <span class="d-block fw-normal fs-12 text-success"><i>Brenda Simpson</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <span class="avatar avatar-md avatar-rounded me-3">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                            </span>
                                                            <div>
                                                                <p class="mb-0 fw-semibold fs-14 text-primary">Julia Sams</p>
                                                                <p class="mb-0 fs-10 fw-semibold text-muted">CHIEF SECRETARY BHOL</p>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="text-muted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="fw-semibold fs-11 text-primary"  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio">Read More</a></span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <span class="text-muted">Rating : </span>
                                                                <span class="text-warning d-block ms-1">
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                </span>
                                                            </div>
                                                            <div class="float-end fs-12 fw-semibold text-muted text-end">
                                                                <span>2 month ago</span>
                                                                <span class="d-block fw-normal fs-12 text-success"><i>Julia Sams</i></span>
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
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')
  

@endsection