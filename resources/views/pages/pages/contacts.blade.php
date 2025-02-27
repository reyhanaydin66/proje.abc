@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Contacts</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contacts</li>
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
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="contact-header">
                                                <div class="d-sm-flex d-block align-items-center justify-content-between">
                                                    <div class="h5 fw-semibold mb-0">Contacts</div>
                                                    <div class="d-flex mt-sm-0 mt-2 align-items-center">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control bg-light" placeholder="Search Contact" aria-describedby="search-contact-member">
                                                            <button aria-label="button" class="btn btn-primary" type="button" id="search-contact-member"><i class="ri-search-line"></i></button>
                                                        </div>
                                                        <div class="dropdown ms-2">
                                                            <button aria-label="button" class="btn btn-icon btn-primary-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Delete All</a></li>
                                                                <li><a class="dropdown-item  border-bottom" href="javascript:void(0);">Copy All</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Move To</a></li>
                                                            </ul>
                                                        </div>
                                                        <button aria-label="button" type="button" class="btn btn-icon btn-secondary-light ms-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Contact"><i class="ri-add-line"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/media/media-39.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Dwayne Happy
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">dwaynehappy235@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 985 2893
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top ">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Simon Cowall
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">simoncowal111@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 873 8923
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top ">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Melissa Jane
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">melissajane2134@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 354 2345
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-fill contact-hover-fave fs-16 text-danger"></i>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Meisha Tite
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">meishatite456@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 675 4680
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Sahne Watson
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">shanewatson@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 674 7824
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Susana Sane
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">susanasane@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 347 0923
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-fill contact-hover-fave fs-16 text-danger"></i>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Andrew Gerfield
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">andrewgerfield00@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 765 8937
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Devon Convoy
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">devonconvoy65@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 693 7836
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-fill contact-hover-fave fs-16 text-danger"></i>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Samantha Melon
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">samanthamelon@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 890 5687
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Elisha Smith
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">elishasmith@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 972 9883
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded mb-1 bg-primary">
                                                        SJ
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Shensovic Jeremy
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">shensovicjeremy@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 238 2342
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Jason Mama
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">jasonmama96@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 875 6789
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Monika Karen
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">monikakaren@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 568 9234
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/media/media-13.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Tom Holland
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">tomholland98@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 892 4334
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/media/media-36.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Anelica Julie
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">angelicajulie@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 882 3445
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Aneera Khan
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">aneerakhan@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 973 8734
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Umaga Nigel
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">umaganigel89@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 783 0213
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Json Taylor
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">jsontaylor@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 234 2452
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-fill contact-hover-fave fs-16 text-danger"></i>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/media/media-34.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Gahaskar Shaik
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">gahaskarshaik@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 982 7648
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Ramika Missi
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">ramikamissi@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 982 4834
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Json Taylor
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">jsontaylor@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 234 2452
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-fill contact-hover-fave fs-16 text-danger"></i>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Karizma Tope
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">Karizmatope@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 890 2455
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Monika Karen
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">monikakaren@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 568 9234
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-sm-6">
                                    <div class="card custom-card text-center">
                                        <div class="card-body contact-action">
                                            <div class="contact-overlay"></div>
                                            <div class="align-items-top">
                                                <div class="">
                                                    <div class="avatar avatar-xl avatar-rounded">
                                                        <img src="{{asset('build/assets/images/media/media-21.jpg')}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-semibold">
                                                            Balvinder Singh
                                                        </h6>
                                                        <p class="mb-1 text-muted contact-mail text-truncate">balvindersingh@gmail.com</p>
                                                        <p class="fw-semibold fs-11 mb-0 text-primary">
                                                            +1(555) 002 1239
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button  aria-label="button" class="btn btn-sm btn-icon contact-hover-fave   btn-primary btn-wave" type="button" aria-expanded="false">
                                                    <i class="ri-heart-3-line fs-16 text-fixed-white"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown contact-hover-dropdown">
                                                <button aria-label="button" class="btn btn-sm btn-icon btn-primary btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a></li>
                                                    <li><a class="dropdown-item border-bottom" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video Call</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::row-1 -->

                            <!-- Start: pagination -->
                            <div class="float-end mb-4">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="pagination mb-0 gap-2">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:void(0);">
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item">
                                            <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a></li>
                                        <li class="page-item">
                                            <a class="page-link text-primary" href="javascript:void(0);">
                                                next
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- End: pagination -->

                        </div>
                    </div>
                    <!-- END APP CONTENT -->
                    
@endsection

@section('scripts')
  

@endsection