@extends('layouts.master')

@section('styles')

        <!-- LEAFLET MAPS CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/leaflet/leaflet.css')}}">
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Leaflet Maps</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Leaflet Maps</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- END APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <!-- Start::row-1 -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Leaflet Map</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Map With Markers,Circes and Polygons</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="map1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Map With Popup</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="map-popup"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Map With Custom Icon</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="map-custom-icon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Interactive Choropleth Map</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="interactive-map"></div>
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

        <!-- LEAFLET MAPS JS -->
        <script src="{{asset('build/assets/libs/leaflet/leaflet.js')}}"></script>
        @vite('resources/assets/js/leaflet.js')
        

@endsection