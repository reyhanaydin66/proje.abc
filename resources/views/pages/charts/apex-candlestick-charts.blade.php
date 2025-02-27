@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Apex CandleStick Charts</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apex Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Apex CandleStick Charts</li>
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
                                            <div class="card-title">Basic Candlestick Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="candlestick-basic"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Candlestick Synced With Brush Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-candlestick"></div>
                                            <div id="chart-bar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Candlestick With Cateory X-axis</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="candlestick-categoryx"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Candlestick With Line Chart</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="candlestick-line"></div>
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

        <!-- USED FOR CANDLESTICK SYNCED WITH BRUSH CHART -->
        <script src="{{asset('build/assets/apexcharts-candlestick-seriesdata.js')}}"></script>
        
        <!-- USED FOR CANDLESTICK WITH CATEGORY X-ACIS CHART -->
        <script src="{{asset('build/assets/apexcharts-dayjs.js')}}"></script>

        <!-- INTERNAL APEX CANDLESTICK CHARTS JS -->
        @vite('resources/assets/js/apexcharts-candlestick.js')


@endsection