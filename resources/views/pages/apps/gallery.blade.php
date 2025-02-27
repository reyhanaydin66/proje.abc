@extends('layouts.master')

@section('styles')

        <!-- GLIGHTBOX CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Gallery</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox card border-0" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" >
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <a href="{{asset('build/assets/images/media/media-41.jpg')}}" class="glightbox card border-0" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image" >
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox card border-0" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" >
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <a href="{{asset('build/assets/images/media/media-43.jpg')}}" class="glightbox card border-0" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="image" >
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <a href="{{asset('build/assets/images/media/media-44.jpg')}}" class="glightbox card border-0" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image" >
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <a href="{{asset('build/assets/images/media/media-45.jpg')}}" class="glightbox card border-0" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image" >
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <a href="{{asset('build/assets/images/media/media-46.jpg')}}" class="glightbox card border-0" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image" >
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox card border-0" data-gallery="gallery1">
                                        <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" >
                                    </a>
                                </div>
                            </div>
                            <!--End::row-1 -->

                        </div>
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')

        <!-- GLIGHTBOX JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>

        <!-- GALLERY JS -->
        @vite('resources/assets/js/gallery.js')


@endsection