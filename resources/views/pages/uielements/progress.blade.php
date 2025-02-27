@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Progress</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Progress</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP-CONTENT START -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <!-- Start:: row-1 -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Basic Progress
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 0%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 25%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 75%"></div>
                                            </div>
                                            <div class="progress mb-0" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Different Colored Progress 
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                            aria-valuemax="100">
                                                <div class="progress-bar bg-secondary" style="width: 20%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-info" style="width: 60%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-success" style="width: 80%"></div>
                                            </div>
                                            <div class="progress" role="progressbar"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-danger" style="width: 100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->

                            <!-- Start:: row-2 -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Striped Progress
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped" style="width: 10%">
                                                </div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-secondary" style="width: 25%">
                                                </div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-success" style="width: 50%">
                                                </div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-info" style="width: 75%">
                                                </div>
                                            </div>
                                            <div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped bg-warning" style="width: 100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Progress Height
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-xs mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 10%">
                                                </div>
                                            </div>
                                            <div class="progress progress-sm mb-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 25%">
                                                </div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 50%">
                                                </div>
                                            </div>
                                            <div class="progress progress-lg mb-3" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 75%">
                                                </div>
                                            </div>
                                            <div class="progress progress-xl" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                <div class="progress-bar bg-primary" style="width: 100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-2 -->

                            <!-- Start:: row-3 -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Animated Stripped Progress
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                    style="width: 10%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" style="width: 20%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 40%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width: 60%"></div>
                                            </div>
                                            <div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Gradient Progress
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary-gradient" style="width: 10%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-secondary-gradient" style="width: 20%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-success-gradient" style="width: 40%"></div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-info-gradient" style="width: 60%"></div>
                                            </div>
                                            <div class="progress" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-warning-gradient" style="width: 80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-3 -->

                            <!-- Start:: row-4 -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-titlte">
                                                Progress With Labels
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress mb-3" role="progressbar"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 10%;">10%</div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-secondary" style="width: 20%;">20%</div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-success" style="width: 40%;">40%</div>
                                            </div>
                                            <div class="progress mb-3" role="progressbar"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-info" style="width: 60%;">60%</div>
                                            </div>
                                            <div class="progress mb-0" role="progressbar"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-warning" style="width: 80%;">80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multiple bars With Sizes
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress-stacked progress-xs mb-3">  
                                                <div class="progress-bar" role="progressbar" style="width: 5%"
                                                    aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 15%"
                                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress-stacked progress-sm mb-3">  
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 10%"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 15%"
                                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress-stacked mb-3">  
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 15%"
                                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 20%"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress-stacked progress-lg mb-3">  
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 20%"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-teal" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-orange" role="progressbar" style="width: 30%"
                                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress-stacked progress-xl mb-0">  
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"
                                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"
                                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-4 -->

                            <!-- Start:: row-5 -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Custom Animated Progress
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary-gradient" style="width: 10%"></div>
                                            </div>
                                            <div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-secondary-gradient" style="width: 20%"></div>
                                            </div>
                                            <div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-success-gradient" style="width: 40%"></div>
                                            </div>
                                            <div class="progress mb-3 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-info-gradient" style="width: 60%"></div>
                                            </div>
                                            <div class="progress progress-animate" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-warning-gradient" style="width: 80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Custom Progress-1
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-sm progress-custom mb-5 progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <h6 class="progress-bar-title text-fixed-white">Mobiles</h6>
                                                <div class="progress-bar" style="width: 50%">
                                                    <div class="progress-bar-value">50%</div>
                                                </div>
                                            </div>
                                            <div class="progress progress-sm progress-custom mb-5 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <h6 class="progress-bar-title bg-secondary text-fixed-white">Watches</h6>
                                                <div class="progress-bar bg-secondary" style="width: 60%">
                                                    <div class="progress-bar-value bg-secondary">60%</div>
                                                </div>
                                            </div>
                                            <div class="progress progress-sm progress-custom progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <h6 class="progress-bar-title bg-success text-fixed-white">Shirts</h6>
                                                <div class="progress-bar bg-success" style="width: 70%">
                                                    <div class="progress-bar-value bg-success">70%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-5 -->

                            <!-- Start:: row-6 -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Custom Progress-2
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-item-1 bg-primary"></div><div class="progress-item-2"></div><div class="progress-item-3"></div>
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                            <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-item-1 bg-secondary"></div><div class="progress-item-2 bg-secondary"></div><div class="progress-item-3"></div>
                                                <div class="progress-bar bg-secondary" style="width: 60%"></div>
                                            </div>
                                            <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-item-1 bg-success"></div><div class="progress-item-2 bg-success"></div><div class="progress-item-3"></div>
                                                <div class="progress-bar bg-success" style="width: 70%"></div>
                                            </div>
                                            <div class="progress progress-sm mb-4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-item-1 bg-info"></div><div class="progress-item-2 bg-info"></div><div class="progress-item-3 bg-info"></div>
                                                <div class="progress-bar bg-info" style="width: 80%"></div>
                                            </div>
                                            <div class="progress progress-sm" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-item-1 bg-warning"></div><div class="progress-item-2 bg-warning"></div><div class="progress-item-3 bg-warning"></div>
                                                <div class="progress-bar bg-warning" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Custom Progress-3
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-lg mb-5 custom-progress-3 progress-animate" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%">
                                                    <div class="progress-bar-value">50%</div>
                                                </div>
                                            </div>
                                            <div class="progress progress-lg mb-5 custom-progress-3 progress-animate" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-secondary" style="width: 60%">
                                                    <div class="progress-bar-value secondary">60%</div>
                                                </div>
                                            </div>
                                            <div class="progress progress-lg custom-progress-3 progress-animate" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-success" style="width: 70%">
                                                    <div class="progress-bar-value success">70%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-6 -->

                            <!-- Start:: row-7 -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Custom Progress-4
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress progress-xl mb-3 progress-animate custom-progress-4" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-primary-gradient" style="width: 10%"></div>
                                                <div class="progress-bar-label">10%</div>
                                            </div>
                                            <div class="progress progress-xl mb-3 progress-animate custom-progress-4 secondary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-secondary-gradient" style="width: 20%"></div>
                                                    <div class="progress-bar-label">20%</div>
                                            </div>
                                            <div class="progress progress-xl mb-3 progress-animate custom-progress-4 success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-success-gradient" style="width: 40%"></div>
                                                    <div class="progress-bar-label">40%</div>
                                            </div>
                                            <div class="progress progress-xl mb-3 progress-animate custom-progress-4 info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-info-gradient" style="width: 60%"></div>
                                                    <div class="progress-bar-label">60%</div>
                                            </div>
                                            <div class="progress progress-xl mb-3 progress-animate custom-progress-4 warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-warning-gradient" style="width: 80%"></div>
                                                    <div class="progress-bar-label">80%</div>
                                            </div>
                                            <div class="progress progress-xl progress-animate custom-progress-4 danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-danger-gradient" style="width: 100%"></div>
                                                    <div class="progress-bar-label text-fixed-white">100%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Custom Progress-5
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-semibold mb-2">Project Dependencies</h6>
                                            <div class="progress-stacked progress-xl mb-5">  
                                                <div class="progress-bar" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 35%"
                                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="border p-3">
                                                        <p class="fs-12 fw-semibold mb-0 text-muted">Html<span class="float-end fs-10 fw-normal">25%</span></p>
                                                        <div class="progress progress-xs mb-4 progress-animate" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-primary" style="width: 25%">
                                                            </div>
                                                        </div>
                                                        <p class="fs-12 fw-semibold mb-0 text-muted">Css<span class="float-end fs-10 fw-normal">35%</span></p>
                                                        <div class="progress progress-xs mb-4 progress-animate" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-secondary" style="width: 35%">
                                                            </div>
                                                        </div>
                                                        <p class="fs-12 fw-semibold mb-0 text-muted">Js<span class="float-end fs-10 fw-normal">40%</span></p>
                                                        <div class="progress progress-xs mb-0 progress-animate" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-danger" style="width: 40%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-7 -->

                        </div>
                    </div>
                    <!-- APP-CONTENT CLOSE -->
          
@endsection

@section('scripts')
  

@endsection
