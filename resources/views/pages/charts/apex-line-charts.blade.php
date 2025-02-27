@extends('layouts.master')

@section('styles')
 
      <!-- APEX CHARTS CSS -->
      <link rel="stylesheet" href="{{asset('build/assets/libs/apexcharts/apexcharts.css')}}">
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Apex Line Charts</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apex Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Apex Line Charts</li>
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
                                            <div class="card-title">Basic Line Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="line-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Line Chart With Data Labels</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="line-chart-datalabels"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Zoomable Time Series</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="zoom-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Line With Annotations</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="annotation-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Brush Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="brush-chart1"></div>
                                            <div id="brush-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">StepLine Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="stepline-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Gradient Line Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="gradient-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Missing/Null Values Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="null-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Real Time Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="dynamic-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Dashed Line Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="dashed-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Syncing Charts</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-line"></div>
                                            <div id="chart-line2"></div>
                                            <div id="chart-area"></div>
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

        <!-- USED IN ZOOMABLE TIME SERIES CHART -->
        <script src="{{asset('build/assets/dataseries.js')}}"></script>

        <!--- USED IN ANNOTATIONS CHART -->
        <script src="{{asset('build/assets/apexcharts-stock-prices.js')}}"></script>

        <!-- INTERNAL APEX LINE CHARTS JS -->
        @vite('resources/assets/js/apexcharts-line.js')


@endsection