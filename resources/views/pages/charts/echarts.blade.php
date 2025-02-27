@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
            
                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Echart Charts</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Echart Charts</li>
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
                                            <div id="echart-basic-line" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Smoothed Line Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-smoothed-line" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Basic Area Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-basic-area" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Stacked Line Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-stacked-line" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Stacked Area Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-stacked-area" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Step Line Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-step-line" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Basic Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-bar-basic" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Bar With Background Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-bar-background" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Style For a Single Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-bar-single" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Water Fall Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-waterfall" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Bar With Negative Values Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-negative-values" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Bar With Labels Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-bar-labels" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-bar-horizontal" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Horizontal Stacked Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-stacked-horizontal" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Pie Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-pie" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Doughnut Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-doughnut" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Basic Scatter Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-scatter" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Bubble Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-bubble" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Candlestick Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-candlestick" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Basic Radar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-basic-radar" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Heatmap Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-heatmap" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Treemap Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-treemap" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Funnel Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-funnel" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Basic Gauge Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-gauge-basic" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Simple Graph Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-simple-graph" class="echart-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Pictorial Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="echart-pictorial" class="echart-charts"></div>
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

        <!-- ECHARTS JS -->
        <script src="{{asset('build/assets/libs/echarts/echarts.min.js')}}"></script>

        <!-- INTERNAL ECHARTS JS -->
        @vite('resources/assets/js/echarts.js')
        

@endsection