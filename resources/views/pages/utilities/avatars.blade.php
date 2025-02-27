@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Avatars</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Avatars</li>
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
                                <div class="col-xxl-4 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Avatar Sizes
                                                <p class="subtitle text-muted fs-12">
                                                    Avatars of different sizes
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="avatar avatar-xs me-2">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm me-2">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-md me-2">
                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-lg me-2">
                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-xl me-2">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-xxl me-2">
                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Classes :</td>
                                                            <td><code>.avatar-[size]</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Values :</td>
                                                            <td>xs, sm  , md , lg , xl , xxl</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Avatars
                                            </div>
                                        </div>
                                        <div class="card-body py-4">
                                            <span class="avatar me-2 avatar-radius-0">
                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar me-2">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Without radius :</td>
                                                            <td><code>.avatar.avatar-radius-0</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td>With Radius :</td>
                                                            <td><code>.avatar</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Round Avatar :</td>
                                                            <td><code>.avatar.avatar-rounded</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Avatar With Icons
                                                <p class="subtitle text-muted fs-12">
                                                    Avatar contains icons to perform respective action.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="avatar avatar-xs me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                <a aria-label="anchor" href="javascript:void(0);" class="badge bg-success rounded-pill avatar-badge"><i class="fe fe-camera"></i></a>
                                            </span>
                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-pill bg-secondary avatar-badge"><i class="fe fe-edit"></i></a>
                                            </span>
                                            <span class="avatar avatar-md me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-pill bg-warning avatar-badge"><i class="fe fe-plus"></i></a>
                                            </span>
                                            <span class="avatar avatar-lg me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-pill bg-info avatar-badge"><i class="fe fe-edit"></i></a>
                                            </span>
                                            <span class="avatar avatar-xl me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-pill bg-success avatar-badge"><i class="fe fe-camera"></i></a>
                                            </span>
                                            <span class="avatar avatar-xxl me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-pill bg-danger avatar-badge"><i class="fe fe-plus"></i></a>
                                            </span>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Class Name :</td>
                                                            <td><code>.badge.number-badge</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="row">
                                <div class="col-xxl-4 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Avatar With Ofline Status Indicators
                                                <p class="subtitle text-muted fs-12">
                                                    avatars having a offline status indicator.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="avatar avatar-xs me-2 offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm offline me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-md me-2 offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-lg me-2 offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-xl me-2 offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-xxl me-2 offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Class Name :</td>
                                                            <td><code>.avatar.offline</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Avatar With Online Status Indicators
                                                <p class="subtitle text-muted fs-12">
                                                    avatars having online status indicator.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm online me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-md me-2 online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-lg me-2 online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-xl me-2 online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-xxl me-2 online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Class Name :</td>
                                                            <td><code>.avatar.online</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Avatars With Number Badges
                                                <p class="subtitle text-muted fs-12">
                                                    Avatar numbers indicates the no. of unread notififactions/messages.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="avatar avatar-xs me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                <span class="badge rounded-pill bg-primary avatar-badge">2</span>
                                            </span>
                                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                <span class="badge rounded-pill bg-secondary avatar-badge">5</span>
                                            </span>
                                            <span class="avatar avatar-md me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                <span class="badge rounded-pill bg-warning avatar-badge">1</span>
                                            </span>
                                            <span class="avatar avatar-lg me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                <span class="badge rounded-pill bg-info avatar-badge">7</span>
                                            </span>
                                            <span class="avatar avatar-xl me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                <span class="badge rounded-pill bg-success avatar-badge">3</span>
                                            </span>
                                            <span class="avatar avatar-xxl me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                <span class="badge rounded-pill bg-danger avatar-badge">9</span>
                                            </span>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Class Name :</td>
                                                            <td><code>.badge.number-badge</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Stacked Avatars
                                                <p class="subtitle text-muted fs-12">
                                                    Group of avatars stacked together.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="avatar-list-stacked">
                                                <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                </span>
                                                <a class="avatar bg-primary text-fixed-white" href="javascript:void(0);">
                                                    +8
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Class Name :</td>
                                                            <td><code>.avatar-list-stacked</code> for parent div</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Rounded Stacked Avatars
                                                <p class="subtitle text-muted fs-12">
                                                    Group of avatars stacked together.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="avatar-list-stacked">
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                </span>
                                                <span class="avatar avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                </span>
                                                <a class="avatar bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);">
                                                    +8
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Class Name :</td>
                                                            <td><code>.avatar-list-stacked</code> for parent div &amp; <code>.avatar-rounded</code> for .avatar</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Avatar With Initials
                                                <p class="subtitle text-muted fs-12">
                                                    Avatar contains intials when user profile doesn't exist.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="mb-1 avatar avatar-xs me-2 bg-primary">
                                                xs
                                            </span>
                                            <span class="mb-1 avatar avatar-sm me-2 bg-secondary">
                                                SM
                                            </span>
                                            <span class="mb-1 avatar avatar-md me-2 bg-warning">
                                                MD
                                            </span>
                                            <span class="mb-1 avatar avatar-lg me-2 bg-danger">
                                                LG
                                            </span>
                                            <span class="mb-1 avatar avatar-xl me-2 bg-success">
                                                XL
                                            </span>
                                            <span class="mb-1 avatar avatar-xxl me-2 bg-info">
                                                XXL
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Rounded Avatar With Initials
                                                <p class="subtitle text-muted fs-12">
                                                    Avatar contains intials when user profile doesn't exist.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="avatar avatar-rounded avatar-xs me-2 bg-primary">
                                                xs
                                            </span>
                                            <span class="avatar avatar-rounded avatar-sm me-2 bg-secondary">
                                                SM
                                            </span>
                                            <span class="avatar avatar-rounded avatar-md me-2 bg-warning">
                                                MD
                                            </span>
                                            <span class="avatar avatar-rounded avatar-lg me-2 bg-danger">
                                                LG
                                            </span>
                                            <span class="avatar avatar-rounded avatar-xl me-2 bg-success">
                                                XL
                                            </span>
                                            <span class="avatar avatar-rounded avatar-xxl me-2 bg-info">
                                                XXL
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-4 -->


                        </div>
                    </div>
                    <!-- END APP CONTENT -->
        
@endsection

@section('scripts')
  

@endsection