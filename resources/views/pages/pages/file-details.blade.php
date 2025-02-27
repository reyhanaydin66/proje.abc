@extends('layouts.master')

@section('styles')

        <!-- GLIGHTBOX CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">File Details</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">File Manager</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">File Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-lg ">

                            <!-- Start::row-1 -->
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/media/media-32.jpg')}}" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-header d-block border-bottom ">
                                                    <p class="fs-18 fw-semibold mb-1">Nature.jpg</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Related Files
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row mb-3">
                                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                            <div class="card border custom-card shadow-none">
                                                                <div class="card-body ">
                                                                    <div class="mb-4 folder-svg-container d-flex justify-content-between align-items-top">
                                                                        <div>
                                                                            <span class="avatar avatar-xl">
                                                                                <img src="{{asset('build/assets/images/media/file-manager/6.png')}}" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Delete</a></li>
                                                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Rename</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="fs-14 fw-semibold mb-1 lh-1">
                                                                        <a href="javascript:void(0);">Images</a>
                                                                    </p>
                                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                        <div>
                                                                            <span class="text-muted fs-12">
                                                                                246 Files
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="text-default fw-semibold">
                                                                                214.32MB
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                            <div class="card border custom-card shadow-none">
                                                                <div class="card-body">
                                                                    <div class="mb-4 folder-svg-container d-flex justify-content-between align-items-top">
                                                                        <div>
                                                                            <span class="avatar avatar-xl">
                                                                                <img src="{{asset('build/assets/images/media/file-manager/9.png')}}" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Delete</a></li>
                                                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Rename</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="fs-14 fw-semibold mb-1 lh-1">
                                                                        <a href="javascript:void(0);">Docs</a>
                                                                    </p>
                                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                        <div>
                                                                            <span class="text-muted fs-12">
                                                                                17 Files
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="text-default fw-semibold">
                                                                                432.39KB
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                            <div class="card border custom-card shadow-none">
                                                                <div class="card-body">
                                                                    <div class="mb-4 folder-svg-container d-flex justify-content-between align-items-top">
                                                                        <div>
                                                                            <span class="avatar avatar-xl">
                                                                                <img src="{{asset('build/assets/images/media/file-manager/4.png')}}" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Delete</a></li>
                                                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Rename</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="fs-14 fw-semibold mb-1 lh-1">
                                                                        <a href="javascript:void(0);">Downloads</a>
                                                                    </p>
                                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                        <div>
                                                                            <span class="text-muted fs-12">
                                                                                437 Files
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="text-default fw-semibold">
                                                                                3.12GB
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                            <div class="card border custom-card shadow-none">
                                                                <div class="card-body">
                                                                    <div class="mb-4 folder-svg-container d-flex justify-content-between align-items-top">
                                                                        <div>
                                                                            <span class="avatar avatar-xl">
                                                                                <img src="{{asset('build/assets/images/media/file-manager/5.png')}}" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Delete</a></li>
                                                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Rename</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Hide Folder</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="fs-14 fw-semibold mb-1 lh-1">
                                                                        <a href="javascript:void(0);">Apps</a>
                                                                    </p>
                                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                        <div>
                                                                            <span class="text-muted fs-12">
                                                                                165 Files
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="text-default fw-semibold">
                                                                                12.56GB
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        File Information
                                                    </div>
                                                </div>
                                                <div class="card-body ">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered text-nowrap mb-0">
                                                        <tbody class="top-selling">
                                                            <tr>
                                                                <th class="">
                                                                    <span class="fw-semibold fs-13">File Name</span>
                                                                </th>
                                                                <td><span class=" text-muted fs-13 fw-normal">Nature.jpg</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="">
                                                                    <span class="fw-semibold fs-13">File Size</span>
                                                                </th>
                                                                <td><span class=" text-muted fs-13 fw-normal">799KB</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="">
                                                                    <span class="fw-semibold fs-13">Created Date</span>
                                                                </th>
                                                                <td><span class=" text-muted fs-13 fw-normal">1-10-2023</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="">
                                                                    <span class="fw-semibold fs-13">Modified Date</span>
                                                                </th>
                                                                <td><span class=" text-muted fs-13 fw-normal">10-10-2023</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="">
                                                                    <span class="fw-semibold fs-13">File Location</span>
                                                                </th>
                                                                <td><span class=" text-muted fs-13 fw-normal">Location/file/Images/Nature.jpg</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="">
                                                                    <span class="fw-semibold fs-13">Height</span>
                                                                </th>
                                                                <td><span class=" text-muted fs-13 fw-normal">500px</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="">
                                                                    <span class="fw-semibold fs-13">Width</span>
                                                                </th>
                                                                <td><span class=" text-muted fs-13 fw-normal">750px</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th class=" ">
                                                                    <span class="fw-semibold fs-13">Uploaded by</span>
                                                                </th>
                                                                <td><span class=" text-muted fs-13 fw-normal">Ali AronJohn</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Recent Files
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="text-center demo-gallery">
                                                        <div class="">
                                                            <ul id="lightgallery" class="list-unstyled row row-sm gy-3 gx-3">
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-41.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-27.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-27.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-28.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-29.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4 ">
                                                                    <a href="{{asset('build/assets/images/media/media-30.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4 ">
                                                                    <a href="{{asset('build/assets/images/media/media-31.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4 ">
                                                                    <a href="{{asset('build/assets/images/media/media-32.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-33.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-33.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

        <!-- GALLERY JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')


@endsection