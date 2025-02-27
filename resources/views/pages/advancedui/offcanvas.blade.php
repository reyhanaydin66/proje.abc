@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Offcanvas</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Offcanvas</li>
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
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Live demo
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a class="btn btn-primary mb-1" data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                role="button" aria-controls="offcanvasExample">
                                                Link with href
                                            </a>
                                            <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                                Button with data-bs-target
                                            </button>
                                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                                                aria-labelledby="offcanvasExampleLabel">
                                                <div class="offcanvas-header border-bottom border-block-end-dashed">
                                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Contacts</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body p-0">
                                                    <div>
                                                    <ul class="list-group list-group-flush mb-0">
                                                        <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Simon Cowall
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 8923
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Adwar Kohali
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 8913
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-info-transparent avatar-rounded me-3">
                                                                        AJ
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aliza John
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 9013
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aliza John
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 9013
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Ulda Shara
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02113
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-warning-transparent avatar-rounded me-3">
                                                                        AM
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Abrem Moses
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02876
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Elira Voreme
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02456
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aposel Somes
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 65432
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-pink-transparent avatar-rounded me-3">
                                                                        RO
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Rubek Onoke
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 5613
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Shara Alisab
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 76554 02456
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Yakebeth Jone
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 76554 02876
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Body scrolling
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable
                                            body scrolling
                                            </button>
                                            <div class="offcanvas offcanvas-start" data-bs-scroll="true"
                                                data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
                                                aria-labelledby="offcanvasScrollingLabel">
                                                <div class="offcanvas-header border-bottom border-block-end-dashed">
                                                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Contacts</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body p-0">
                                                    <div>
                                                    <ul class="list-group list-group-flush mb-0">
                                                        <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Simon Cowall
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 8923
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Adwar Kohali
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 8913
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-info-transparent avatar-rounded me-3">
                                                                        AJ
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aliza John
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 9013
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aliza John
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 9013
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Ulda Shara
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02113
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-warning-transparent avatar-rounded me-3">
                                                                        AM
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Abrem Moses
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02876
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Elira Voreme
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02456
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aposel Somes
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 65432
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-pink-transparent avatar-rounded me-3">
                                                                        RO
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Rubek Onoke
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 5613
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Shara Alisab
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 76554 02456
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Yakebeth Jone
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 76554 02876
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Static backdrop
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                                    data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                                                    Toggle static offcanvas
                                            </button>
                                            <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1"
                                                id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                                <div class="offcanvas-header border-bottom border-block-end-dashed">
                                                    <h5 class="offcanvas-title" id="staticBackdropLabel">Contacts</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body p-0">
                                                    <div>
                                                    <ul class="list-group list-group-flush mb-0">
                                                        <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Simon Cowall
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 8923
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Adwar Kohali
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 8913
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-info-transparent avatar-rounded me-3">
                                                                        AJ
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aliza John
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 9013
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aliza John
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 9013
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Ulda Shara
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02113
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-warning-transparent avatar-rounded me-3">
                                                                        AM
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Abrem Moses
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02876
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Elira Voreme
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02456
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aposel Somes
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 65432
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-pink-transparent avatar-rounded me-3">
                                                                        RO
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Rubek Onoke
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 5613
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Shara Alisab
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 76554 02456
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Yakebeth Jone
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 76554 02876
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->

                            <!-- Start:: row-2 -->
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Body scrolling and backdrop
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasWithBothOptions"
                                                aria-controls="offcanvasWithBothOptions">Enable both scrolling &amp;
                                                backdrop</button>
                                            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                                                id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                                <div class="offcanvas-header border-bottom border-block-end-dashed">
                                                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Contacts</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body p-0">
                                                    <div>
                                                    <ul class="list-group list-group-flush mb-0">
                                                        <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Simon Cowall
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 8923
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Adwar Kohali
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 8913
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-info-transparent avatar-rounded me-3">
                                                                        AJ
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aliza John
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 9013
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aliza John
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 9013
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Ulda Shara
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02113
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-warning-transparent avatar-rounded me-3">
                                                                        AM
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Abrem Moses
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02876
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Elira Voreme
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02456
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aposel Somes
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 65432
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-pink-transparent avatar-rounded me-3">
                                                                        RO
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Rubek Onoke
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 5613
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Shara Alisab
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 76554 02456
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Yakebeth Jone
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 76554 02876
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Placement
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle top
                                                offcanvas</button>
                                            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                                                aria-labelledby="offcanvasTopLabel">
                                                <div class="offcanvas-header">
                                                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas top</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body">
                                                    ...
                                                </div>
                                            </div>
                                            <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right
                                                offcanvas</button>
                                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                                aria-labelledby="offcanvasRightLabel1">
                                                <div class="offcanvas-header border-bottom border-block-end-dashed">
                                                    <h5 class="offcanvas-title" id="offcanvasRightLabel1">Contacts
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body p-0">
                                                    <div>
                                                    <ul class="list-group list-group-flush mb-0">
                                                        <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Simon Cowall
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 8923
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Adwar Kohali
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 8913
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-info-transparent avatar-rounded me-3">
                                                                        AJ
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aliza John
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 9013
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aliza John
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 9013
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Ulda Shara
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02113
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-warning-transparent avatar-rounded me-3">
                                                                        AM
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Abrem Moses
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02876
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Elira Voreme
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 02456
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Aposel Somes
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 65432
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-lg bg-pink-transparent avatar-rounded me-3">
                                                                        RO
                                                                    </span>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Rubek Onoke
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 873 5613
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Shara Alisab
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 76554 02456
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-md avatar-rounded me-3">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="flex-1  flex-between">
                                                                        <div>
                                                                            <h6 class="mb-1 fw-semibold">
                                                                                Yakebeth Jone
                                                                            </h6>
                                                                            <p class="fw-semibold fs-11 mb-0 text-muted">
                                                                                +1(555) 76554 02876
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                                                            <div class="dropdown">
                                                                                <button class="btn btn-sm btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="ri-more-2-fill"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>  
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary mb-1" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle
                                                bottom
                                                offcanvas</button>
                                            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                                                aria-labelledby="offcanvasBottomLabel">
                                                <div class="offcanvas-header">
                                                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body small">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-2 -->

                        </div>
                    </div>
                    <!-- APP-CONTENT CLOSE -->
    
@endsection

@section('scripts')
  

@endsection