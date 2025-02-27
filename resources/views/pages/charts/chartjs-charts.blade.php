@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Chartjs Charts</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chartjs Charts</li>
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
                                            <div class="card-title">Chartjs Line Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="chartjs-line" class="chartjs-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Chartjs Bar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="chartjs-bar" class="chartjs-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Chartjs Pie Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="chartjs-pie" class="chartjs-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Chartjs Doughnut Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="chartjs-doughnut" class="chartjs-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Chartjs Mixed Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="chartjs-mixed" class="chartjs-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Chartjs Polar Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="chartjs-polar" class="chartjs-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Chartjs Radial Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="chartjs-radar" class="chartjs-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Chartjs Scatter Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="chartjs-scatter" class="chartjs-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Chartjs Bubble Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="chartjs-bubble" class="chartjs-chart"></canvas>
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

        <!-- CHARTJS CHART JS -->
        <script src="{{asset('build/assets/libs/chart.js/chart.min.js')}}"></script>

        <!-- INTERNAL CHARTJS JS -->
        @vite('resources/assets/js/chartjs-charts.js')
        
  
@endsection