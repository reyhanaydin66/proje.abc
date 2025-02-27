@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Apex Area Charts</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apex Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Apex Area Charts</li>
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
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Basic Area Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="area-basic"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Spline Area Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="area-spline"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Area Chart With Negative Values</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="area-negative"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Selection-Github Style Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-months"></div>
                                            <div class="github-style d-flex align-items-center">
                                                <div class="me-2">
                                                    <img class="userimg rounded" src="{{asset('build/assets/images/faces/1.jpg')}}"
                                                        data-hovercard-user-id="634573" alt="" width="38" height="38">
                                                </div>
                                                <div class="userdetails lh-1">
                                                    <a class="username fw-semibold fs-14">coder</a>
                                                    <span class="cmeta d-block mt-1">
                                                        <span class="commits"></span> commits
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="chart-years"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Stacked Area Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="area-stacked"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Irregular Time Series Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="area-irregular"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Area Chart With Null Values</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="area-null"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header d-flex">
                                            <div class="card-title">Area Chart-Datetime X-Axis Chart</div>
                                            <div class="btn-group ms-auto">
                                                <button type="button" class="btn btn-primary btn-sm" id="one_month">1M</button>
                                                <button type="button" class="btn btn-primary btn-sm" id="six_months">6M</button>
                                                <button type="button" class="btn btn-primary btn-sm" id="one_year">1Y</button>
                                                <button type="button" class="btn btn-primary btn-sm" id="all">ALL</button>
                                                <!-- <button class="btn btn-primary btn-sm" id="ytd">ALL</button> -->
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="area-datetime"></div>
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

        <!--- USED IN BASIC AREA CHART -->
        <script src="{{asset('build/assets/apexcharts-stock-prices.js')}}"></script>

        <!-- USED FOR APEX-GITHUB STYLE CHART -->
        <script src="{{asset('build/assets/apex-github-data.js')}}"></script>

        <!-- USED FOR IRREGULAR TIME SERIES CHART -->
        <script src="{{asset('build/assets/apexcharts-irregulardata.js')}}"></script>
        <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

        <!-- INTERNAL APEX AREA CHARTS JS -->
        @vite('resources/assets/js/apexcharts-area.js')


@endsection