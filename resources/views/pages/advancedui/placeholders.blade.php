@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Placeholders</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Placeholders</li>
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
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <img class="card-img-top" src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="">
                                                <div class="card-body">
                                                    <div class="card-title">Card title</div>
                                                    <p class="card-text">Some quick example text to build on the card title and make
                                                        up
                                                        the bulk of the card's content.</p>
                                                    <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card  custom-card" aria-hidden="true">
                                                <img class="card-img-top" src="{{asset('build/assets/images/media/media-61.jpg')}}" alt="">
                                                <div class="card-body">
                                                    <div class="h5 card-title placeholder-glow">
                                                        <span class="placeholder col-6"></span>
                                                    </div>
                                                    <p class="card-text placeholder-glow">
                                                        <span class="placeholder col-7"></span>
                                                        <span class="placeholder col-4"></span>
                                                        <span class="placeholder col-4"></span>
                                                        <span class="placeholder col-6"></span>
                                                    </p>
                                                    <a href="javascript:void(0);" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Animation
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="placeholder-glow mb-0">
                                                        <span class="placeholder col-12"></span>
                                                    </p>
                                                    <p class="placeholder-wave mb-0">
                                                        <span class="placeholder col-12"></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="card custom-card">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                Sizing
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="placeholder col-12 placeholder-xl mb-1"></span>
                                                            <span class="placeholder col-12 placeholder-lg"></span>
                                                            <span class="placeholder col-12"></span>
                                                            <span class="placeholder col-12 placeholder-sm"></span>
                                                            <span class="placeholder col-12 placeholder-xs"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Colors
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <span class="placeholder col-12"></span>
                                                    <span class="placeholder col-12 bg-primary"></span>
                                                    <span class="placeholder col-12 bg-secondary"></span>
                                                    <span class="placeholder col-12 bg-success"></span>
                                                    <span class="placeholder col-12 bg-danger"></span>
                                                    <span class="placeholder col-12 bg-warning"></span>
                                                    <span class="placeholder col-12 bg-info"></span>
                                                    <span class="placeholder col-12 bg-light"></span>
                                                    <span class="placeholder col-12 bg-dark"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->

                            <!-- Start:: row-2 -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Width
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="placeholder bg-primary col-6"></span>
                                            <span class="placeholder bg-primary w-75"></span>
                                            <span class="placeholder bg-primary" style="width: 25%;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start:: row-2 -->

                        </div>
                    </div>
                    <!-- APP-CONTENT CLOSE -->

@endsection

@section('scripts')
  

@endsection