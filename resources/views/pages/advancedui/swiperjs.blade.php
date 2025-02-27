@extends('layouts.master')

@section('styles')

        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Swiper JS</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Swiper JS</li>
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
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Basic Swiper
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper swiper-basic">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-27.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-26.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Swiper with Pagination
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper pagination">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-33.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Swiper With Navigation
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper swiper-navigation">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::row-1 -->

                            <!-- Start:: row-2 -->
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Vertical Swiper
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper vertical swiper-vertical">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-17.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Custom Paginatioin
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper custom-pagination">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-5.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-33.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Scrollbar Swiper
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper scrollbar-swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-scrollbar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-2 -->

                            <!-- Start:: row-3  -->
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Pagination Fraction
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper pagination-fraction">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-16.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Dynamic Pagination
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper pagination-dynamic">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-15.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-17.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-16.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Pagination With Progress
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper pagination-progress">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-12.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-5.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-3  -->

                            <!-- Start:: row-4 -->
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Effect Fade
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper swiper-fade">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="{{asset('build/assets/images/media/media-18.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{asset('build/assets/images/media/media-19.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{asset('build/assets/images/media/media-14.jpg')}}" alt="img">
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Effect Cube
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper swiper-effect-cube">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="{{asset('build/assets/images/media/media-62.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{asset('build/assets/images/media/media-64.jpg')}}" alt="img">
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Effect Flip
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper swiper-flip">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="{{asset('build/assets/images/media/media-64.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{asset('build/assets/images/media/media-62.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="img">
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-4 -->

                            <!-- Start:: row-5 -->
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Nested Swiper</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper swiper-horizontal1">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                                <div class="swiper-slide">
                                                    <div class="swiper vertical swiper-vertical1">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-25.jpg')}}" alt=""></div>
                                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>
                                                        <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>
                                                    </div>
                                                    <div class="swiper-pagination"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Keyboard Control
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper keyboard-control">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-12.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Mouse Wheel Control
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper vertical vertical-mouse-control">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-5 -->

                            <!-- Start:: row-6 -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Effect Coverflow
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper swiper-overflow">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-8.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-12.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-15.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-16.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-17.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-59.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-61.jpg')}}" alt="img">
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-6 -->

                            <!-- Start:: row-7 -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Thumbs Gallery
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="swiper swiper-preview">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-1.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-2.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-3.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-6.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-7.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-10.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid rounded" src="{{asset('build/assets/images/media/media-11.jpg')}}" alt="img">
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                            <div class="swiper swiper-view">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-1.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-2.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-3.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-6.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-7.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-10.jpg')}}" alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid" src="{{asset('build/assets/images/media/media-11.jpg')}}" alt="img">
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
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')
  
        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- INTERNAL SWIPER JS -->
        @vite('resources/assets/js/swiper.js')


@endsection