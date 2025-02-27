@extends('layouts.master')

@section('styles')


@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Ratings</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ratings</li>
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
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                        <div class="card-title">
                                                Basic Rater
                                        </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="">
                                                <h6 class="fs-14 fw-semibold">Show Some <span class="text-danger">&#10084;</span> with rating </h6>
                                                <div id="rater-basic"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                5 star rater with steps
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="">
                                                <h6 class="fs-14 fw-semibold">Dont forget to rate the product </h6>
                                                <div id="rater-steps"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Custom messages
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="">
                                                <h6 class="fs-14 fw-semibold">Your rating is much appreciated&#128079; </h6>
                                                <div id="custom-messages"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                5 Star rater with custom isBusyText and simulated backend
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="">
                                                <h6 class="fs-14 fw-semibold">Thanks for rating</h6>
                                                <div id="stars-busytext"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                On hover event
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="">
                                                <h6 class="fs-14  fw-semibold">Please give your valuable rating</h6>
                                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                                    <div id="stars-hover"></div>
                                                    <span class="live-rating badge bg-success-transparent ms-3">
                                                        4
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Clear/reset rater
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="">
                                                <p class="fs-14 mb-0 fw-semibold">Thank You so much for your support :</p>
                                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                                    <div id="rater-reset"></div>
                                                    <button class="btn btn-icon btn-sm btn-danger-light ms-3" id="rater-reset-button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset">
                                                        <i class="ri-restart-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Unlimited number of stars readOnly
                                            </div> 
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="">
                                                <h6 class="fs-14  fw-semibold">Thanks for rating</h6>
                                                <div id="stars-unlimited"></div>
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
  
        <!-- RATER JS -->
        <script src="{{asset('build/assets/libs/rater-js/index.js')}}"></script>

        <!-- INTERNAL RATINGS JS -->
        @vite('resources/assets/js/ratings.js')
        

@endsection