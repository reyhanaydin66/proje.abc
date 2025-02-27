@extends('layouts.master')

@section('styles')

        <!-- GLIGHTBOX CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Profile</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                                <div class="col-xxl-12 col-xl-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body d-sm-flex align-items-top p-4   main-profile-cover">
                                            <p class="avatar avatar-xxl avatar-rounded online me-3 my-auto">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                            </p>
                                            <div class="flex-fill main-profile-info my-auto">
                                                <h5 class="fw-semibold mb-1 ">Json Taylor</h5>
                                                <div>
                                                    <p class="mb-1 text-muted">Chief Executive Officer (C.E.O)</p>
                                                    <div class="fs-12 op-7 mb-0 d-flex">
                                                        <p class="me-3 mb-0"><i class="ri-building-line me-1 align-middle d-inline-flex"></i>Georgia</p>
                                                        <p class="mb-0"><i class="ri-map-pin-line me-1 align-middle d-inline-flex"></i>Washington D.C</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-profile-info ms-auto">
                                                <div class="">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex mb-0 ms-auto">
                                                            <div class="me-4">
                                                                <p class="fw-bold fs-20  text-shadow mb-0">113</p>
                                                                <p class="mb-0 fs-12 text-muted ">Projects</p>
                                                            </div>
                                                            <div class="me-4">
                                                                <p class="fw-bold fs-20  text-shadow mb-0">12.2k</p>
                                                                <p class="mb-0 fs-12 text-muted ">Followers</p>
                                                            </div>
                                                            <div class="">
                                                                <p class="fw-bold fs-20  text-shadow mb-0">128</p>
                                                                <p class="mb-0 fs-12 text-muted ">Following</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-0  mt-2 text-end">
                                                        <button type="button" class="btn btn-secondary btn-sm btn-wave"><i class="ri-add-line me-1 align-middle"></i>Follow</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3">
                                    <div class="card custom-card">
                                    <div class="">
                                        <div class="p-4 border-bottom border-block-end-dashed">
                                            <div>
                                                <p class="fs-15 mb-2 fw-semibold">Profile Status :</p>
                                                <p class="fw-semibold mb-2">Profile 60% completed - <a href="javscript:void(0);" class="text-primary fs-12">Finish now</a></p>
                                                <div class="progress progress-sm progress-animate ">
                                                    <div class="progress-bar bg-primary  ronded-1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-bottom border-block-end-dashed">
                                            <div class="">
                                                <p class="fs-15 mb-2 fw-semibold">Professional Bio :</p>
                                                <p class="fs-12 text-muted op-7 mb-0">
                                                    I am <b class="text-default">Sonya Taylor,</b> here by conclude that,i am the founder and managing director of the prestigeous company name laugh at all and acts as the cheif executieve officer of the company.
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="p-4  border-bottom border-block-end-dashed">
                                            <p class="fs-15 mb-2 me-4 fw-semibold">Personal Info :</p>
                                            <ul class="list-group">
                                                <li class="list-group-item border-0">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            Name :
                                                        </div>
                                                        <span class="fs-12 text-muted">Sonya Taylor</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            Email :
                                                        </div>
                                                        <span class="fs-12 text-muted">sonyataylor231@gmail.com</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            Phone :
                                                        </div>
                                                        <span class="fs-12 text-muted">+(555) 555-1234</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            Designation :
                                                        </div>
                                                        <span class="fs-12 text-muted">C.E.O</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            Age :
                                                        </div>
                                                        <span class="fs-12 text-muted">28</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="me-2 fw-semibold">
                                                            Experience :
                                                        </div>
                                                        <span class="fs-12 text-muted">10 Years</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="p-4 border-bottom border-block-end-dashed">
                                            <p class="fs-15 mb-2 me-4 fw-semibold">Contact Information :</p>
                                            <div class="text-muted">
                                                <p class="mb-3">
                                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-info-transparent">
                                                        <i class="ri-mail-line align-middle fs-14"></i>
                                                    </span>
                                                    sonyataylor2531@gmail.com
                                                </p>
                                                <p class="mb-3">
                                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-warning-transparent">
                                                        <i class="ri-phone-line align-middle fs-14"></i>
                                                    </span>
                                                    +(555) 555-1234
                                                </p>
                                                <div class="d-flex">
                                                    <p class="mb-0">
                                                        <span class="avatar avatar-sm avatar-rounded me-2 bg-success-transparent">
                                                            <i class="ri-map-pin-line align-middle fs-14"></i>
                                                        </span>
                                                    </p>
                                                    <p class="mb-0">
                                                    MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071 </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-bottom border-block-end-dashed">
                                            <p class="fs-15 mb-2 me-4 fw-semibold">Skills :</p>
                                            <div>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">Cloud computing</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">Data analysis</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">DevOps</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">Machine learning</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">Programming</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">Security</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">Python</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">JavaScript</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">Ruby</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">PowerShell</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">Statistics</span>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <span class="badge bg-light text-muted m-1">SQL</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p-4 border-bottom border-block-end-dashed d-flex align-items-center">
                                            <p class="fs-15 mb-2 me-4 fw-semibold">Social Networks :</p>
                                            <div class="btn-list mb-0">
                                                <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                    <i class="ri-facebook-line"></i>
                                                </button>
                                                <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-twitter-line"></i>
                                                </button>
                                                <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                    <i class="ri-instagram-line"></i>
                                                </button>
                                                <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                    <i class="ri-github-line"></i>
                                                </button>
                                                <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                    <i class="ri-youtube-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-xxl-9 col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class=" custom-card">
                                                <div class="card-body p-0">
                                                    <div class="border-block-end-dashed  bg-white rounded-2 p-2">
                                                        <div>
                                                            <ul class="nav nav-pills nav-justified gx-3 tab-style-6 d-sm-flex d-block " id="myTab" role="tablist">
                                                                <li class="nav-item rounded" role="presentation">
                                                                    <button class="nav-link active" id="activity-tab" data-bs-toggle="tab"
                                                                        data-bs-target="#activity-tab-pane" type="button" role="tab"
                                                                        aria-controls="activity-tab-pane" aria-selected="true"><i
                                                                            class="ri-gift-line me-1 align-middle d-inline-block fs-16"></i>Activity</button>
                                                                </li>
                                                                <li class="nav-item rounded" role="presentation">
                                                                    <button class="nav-link" id="gallery-tab" data-bs-toggle="tab"
                                                                        data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                                                        aria-controls="gallery-tab-pane" aria-selected="false"><i
                                                                            class="ri-exchange-box-line me-1 align-middle d-inline-block fs-16"></i>Gallery</button>
                                                                </li>
                                                                <li class="nav-item rounded" role="presentation">
                                                                    <button class="nav-link" id="posts-tab" data-bs-toggle="tab"
                                                                        data-bs-target="#posts-tab-pane" type="button" role="tab"
                                                                        aria-controls="posts-tab-pane" aria-selected="false"><i
                                                                            class="ri-bill-line me-1 align-middle d-inline-block fs-16"></i>Projects</button>
                                                                </li>
                                                                <li class="nav-item rounded" role="presentation">
                                                                    <button class="nav-link" id="followers-tab" data-bs-toggle="tab"
                                                                        data-bs-target="#followers-tab-pane" type="button" role="tab"
                                                                        aria-controls="followers-tab-pane" aria-selected="false"><i
                                                                            class="ri-money-dollar-box-line me-1 align-middle d-inline-block fs-16"></i>Friends</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="py-4">
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane show active fade p-0 border-0 bg-white p-4 rounded-3" id="activity-tab-pane"
                                                                role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                                                                <ul class="list-unstyled profile-timeline">
                                                                    <li>
                                                                        <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">16,Dec 2023</span>
                                                                        <div>
                                                                            <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                            </span>
                                                                            <p class="text-muted mb-2">
                                                                                <span class="text-default"><b>Barnes vare</b> Shared project</span>
                                                                            </p>
                                                                            <p class="text-muted fs-12 mb-0">Added 1 attachment <strong>docfile.doc</strong></p>
                                                                            <div class="btn-group file-attach mt-3" role="group" aria-label="Basic example">
                                                                                <button type="button" class="btn btn-sm btn-primary-light">
                                                                                    <span class="ri-file-line me-2"></span> Image_file.jpg
                                                                                </button>
                                                                                <button type="button" class="btn btn-sm btn-primary-light" aria-label="Close">
                                                                                    <span class="ri-download-2-line"></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">18,Dec 2023</span>
                                                                            <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                            </span>
                                                                            <p class="text-muted mb-2">
                                                                                <span class="text-default"><b>Alzbeth Aren</b> Shared project</span>.
                                                                            </p>
                                                                            <p class="text-muted mb-0">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam temporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                                                rerum excepturi aperiam ipsam temporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam temporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <span class="fs-12 text-muted fw-semibold text-end  ">11,Dec 2023</span>
                                                                            <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                            </span>
                                                                            <p class="text-muted mb-1">
                                                                                <span class="text-default"><b>Melissa Blue</b> liked your post <b>travel excites</b></span>.
                                                                            </p>
                                                                            <p class="text-muted">you are already feeling the tense atmosphere of the video playing in the background</p>
                                                                            <p class="profile-activity-media mb-0">
                                                                                <a aria-label="anchor" href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/media/media-48.jpg')}}" class="m-1" alt="">
                                                                                </a>
                                                                                <a aria-label="anchor" href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/media/media-53.jpg')}}" class="m-1" alt="">
                                                                                </a>
                                                                                <a aria-label="anchor" href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/media/media-27.jpg')}}" class="m-1" alt="">
                                                                                </a>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">18,Dec 2023</span>
                                                                            <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                            </span>
                                                                            <p class="text-muted mb-2">
                                                                                <span class="text-default"><b>Json Smith</b> reacted to the post &#128077;</span>.
                                                                            </p>
                                                                            <p class="text-muted mb-0">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam temporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <span class="fs-12 text-muted fw-semibold text-end  profile-timeline-time">21,Dec 2023</span>
                                                                            <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                            </span>
                                                                            <p class="text-muted mb-2">
                                                                                <span class="text-default"><b>Alicia Keys</b> shared a document with <b>you</b></span>.
                                                                            </p>
                                                                            <p class="profile-activity-media mb-0">
                                                                                <a aria-label="anchor" href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                                                </a>
                                                                                <span class="fs-11 text-muted">432.87KB</span>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <span class="fs-12 text-muted fw-semibold text-end  profile-timeline-time">24,Dec 2023</span>
                                                                            <span class="avatar avatar-sm bg-primary-transparent avatar-rounded profile-timeline-avatar">
                                                                                E
                                                                            </span>
                                                                            <p class="mb-2">
                                                                                <b>You</b> Commented on <b>alexander taylor</b> post <a class="text-secondary" href="javascript:void(0);"><u>#beautiful day</u></a>.
                                                                            </p>
                                                                            <p class="profile-activity-media mb-0">
                                                                                <a aria-label="anchor" href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="">
                                                                                </a>
                                                                                <a aria-label="anchor" href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="">
                                                                                </a>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">28,Dec 2023</span>
                                                                            <span class="avatar avatar-sm bg-success-transparent avatar-rounded profile-timeline-avatar">
                                                                                P
                                                                            </span>
                                                                            <p class="text-muted mb-2">
                                                                                <span class="text-default"><b>You</b> shared a post with 4 people <b>Simon,Sasha,Anagha,Hishen</b></span>.
                                                                            </p>
                                                                            <p class="profile-activity-media mb-2">
                                                                                <a aria-label="anchor" href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="">
                                                                                </a>
                                                                            </p>
                                                                            <div>
                                                                                <div class="avatar-list-stacked">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">24,Dec 2023 </span>
                                                                            <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                                                <img src="{{asset('build/assets/images/media/media-39.jpg')}}" alt="">
                                                                            </span>
                                                                            <p class="mb-1">
                                                                                <b>You</b> Commented on <b>Peter Engola</b> post <a class="text-secondary" href="javascript:void(0);"><u>#Mother Nature</u></a>.
                                                                            </p>
                                                                            <p class="text-muted">Technology id developing rapidly kepp uo your work &#128076;</p>
                                                                            <p class="profile-activity-media mb-0">
                                                                                <a aria-label="anchor" href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="">
                                                                                </a>
                                                                                <a aria-label="anchor" href="javascript:void(0);">
                                                                                    <img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="">
                                                                                </a>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade p-0 border-0" id="gallery-tab-pane"
                                                                role="tabpanel" aria-labelledby="gallery-tab" tabindex="0">
                                                                <div class="row">
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-41.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-43.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-44.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-45.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-46.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-47.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-47.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-26.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-44.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-45.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-46.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                        <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" >
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade p-0 border-0" id="posts-tab-pane"
                                                                role="tabpanel" aria-labelledby="posts-tab" tabindex="0">
                                                            <div class="row">
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-pending-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}"  alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2">
                                                                                            <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-secondary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor"  href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-warning-transparent d-block">Low</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-completed-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Creating Home Page Website </a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}"  alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2"><button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-success-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal2"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal2" tabindex="-1" aria-labelledby="AddModalLabel2" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel2">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-pending-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Data table Design</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-info">Pending</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2"><button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal3"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal3" tabindex="-1" aria-labelledby="AddModalLabel3" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel3">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-completed-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Design Horizontal Layout</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-success">completed</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2"><button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-success-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal4"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal4" tabindex="-1" aria-labelledby="AddModalLabel4" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel4">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-inprogress-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix  Header issue</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}"  alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2">
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal5"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal5" tabindex="-1" aria-labelledby="AddModalLabel5" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel5">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-inprogress-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Create a blog post</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}"  alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2"><button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal6"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal6" tabindex="-1" aria-labelledby="AddModalLabel6" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel6">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-pending-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}"  alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2"><button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-secondary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal7"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal7" tabindex="-1" aria-labelledby="AddModalLabel7" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel7">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-warning-transparent d-block">Low</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-completed-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}"  alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2"><button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal8"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal8" tabindex="-1" aria-labelledby="AddModalLabel8" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel8">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-pending-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}"  alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2"><button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal9"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal9" tabindex="-1" aria-labelledby="AddModalLabe9" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabe9">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-inprogress-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Data table Design</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}"  alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2"><button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal10"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal10" tabindex="-1" aria-labelledby="AddModalLabel10" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel10">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-pending-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}"  alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2"><button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal11"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal11" tabindex="-1" aria-labelledby="AddModalLabel11" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel11">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-6 task-card">
                                                                        <div class="card custom-card task-inprogress-card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Home page design</a>
                                                                                        <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                                        <p class="mb-0">Assigned To :</p>
                                                                                            <span class="avatar-list-stacked ms-1">
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                                </span>
                                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}"  alt="">
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="me-2"><button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal12"><i class="ri-add-fill"></i></button></span>
                                                                                            <div class="modal fade" id="addpromodal12" tabindex="-1" aria-labelledby="AddModalLabel12" aria-hidden="true">
                                                                                                <div class="modal-dialog ">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h6 class="modal-title" id="AddModalLabel12">Edit Assigne</h6>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                                aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="mb-3">
                                                                                                                            <label
                                                                                                                                class="col-form-label">Assigne To:</label>
                                                                                                                            <input type="text" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                                data-bs-dismiss="modal">Save</button>
                                                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="btn-list">
                                                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                            <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                                        </div>
                                                                                        <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade p-0 border-0" id="followers-tab-pane"
                                                                role="tabpanel" aria-labelledby="followers-tab" tabindex="0">
                                                                <div class="row">
                                                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="card custom-card shadow-none border">
                                                                            <div class="card-body p-4">
                                                                                <div class="text-center">
                                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                    </span>
                                                                                    <div class="mt-2">
                                                                                        <p class="mb-0 fw-semibold">Samantha May</p>
                                                                                        <p class="fs-12 op-7 mb-1 text-muted">samanthamay2912@gmail.com</p>
                                                                                        <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer text-center">
                                                                                <div class="btn-list">
                                                                                    <button type="button" class="btn btn-sm btn-light btn-wave">Block</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="card custom-card shadow-none border">
                                                                            <div class="card-body p-4">
                                                                                <div class="text-center">
                                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                                    </span>
                                                                                    <div class="mt-2">
                                                                                        <p class="mb-0 fw-semibold">Andrew Garfield</p>
                                                                                        <p class="fs-12 op-7 mb-1 text-muted">andrewgarfield98@gmail.com</p>
                                                                                        <span class="badge bg-success-transparent rounded-pill">Team Lead</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer text-center">
                                                                                <div class="btn-list">
                                                                                    <button type="button" class="btn btn-sm btn-light btn-wave">Block</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="card custom-card shadow-none border">
                                                                            <div class="card-body p-4">
                                                                                <div class="text-center">
                                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                                    </span>
                                                                                    <div class="mt-2">
                                                                                        <p class="mb-0 fw-semibold">Jessica Cashew</p>
                                                                                        <p class="fs-12 op-7 mb-1 text-muted">jessicacashew143@gmail.com</p>
                                                                                        <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer text-center">
                                                                                <div class="btn-list">
                                                                                    <button type="button" class="btn btn-sm btn-light btn-wave">Block</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="card custom-card shadow-none border">
                                                                            <div class="card-body p-4">
                                                                                <div class="text-center">
                                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                                    </span>
                                                                                    <div class="mt-2">
                                                                                        <p class="mb-0 fw-semibold">Simon Cowan</p>
                                                                                        <p class="fs-12 op-7 mb-1 text-muted">jessicacashew143@gmail.com</p>
                                                                                        <span class="badge bg-warning-transparent rounded-pill">Team Manager</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer text-center">
                                                                                <div class="btn-list">
                                                                                    <button type="button" class="btn btn-sm btn-light btn-wave">Block</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="card custom-card shadow-none border">
                                                                            <div class="card-body p-4">
                                                                                <div class="text-center">
                                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                                    </span>
                                                                                    <div class="mt-2">
                                                                                        <p class="mb-0 fw-semibold">Amanda nunes</p>
                                                                                        <p class="fs-12 op-7 mb-1 text-muted">amandanunes45@gmail.com</p>
                                                                                        <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer text-center">
                                                                                <div class="btn-list">
                                                                                    <button type="button" class="btn btn-sm btn-light btn-wave">Block</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="card custom-card shadow-none border">
                                                                            <div class="card-body p-4">
                                                                                <div class="text-center">
                                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                                    </span>
                                                                                    <div class="mt-2">
                                                                                        <p class="mb-0 fw-semibold">Mahira Hose</p>
                                                                                        <p class="fs-12 op-7 mb-1 text-muted">mahirahose9456@gmail.com</p>
                                                                                        <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer text-center">
                                                                                <div class="btn-list">
                                                                                    <button type="button" class="btn btn-sm btn-light btn-wave">Block</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="card custom-card shadow-none border">
                                                                            <div class="card-body p-4">
                                                                                <div class="text-center">
                                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                    </span>
                                                                                    <div class="mt-2">
                                                                                        <p class="mb-0 fw-semibold">Samantha May</p>
                                                                                        <p class="fs-12 op-7 mb-1 text-muted">samanthamay2912@gmail.com</p>
                                                                                        <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer text-center">
                                                                                <div class="btn-list">
                                                                                    <button type="button" class="btn btn-sm btn-light btn-wave">Block</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="card custom-card shadow-none border">
                                                                            <div class="card-body p-4">
                                                                                <div class="text-center">
                                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                                    </span>
                                                                                    <div class="mt-2">
                                                                                        <p class="mb-0 fw-semibold">Andrew Garfield</p>
                                                                                        <p class="fs-12 op-7 mb-1 text-muted">andrewgarfield98@gmail.com</p>
                                                                                        <span class="badge bg-success-transparent rounded-pill">Team Lead</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer text-center">
                                                                                <div class="btn-list">
                                                                                    <button type="button" class="btn btn-sm btn-light btn-wave">Block</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="card custom-card shadow-none border">
                                                                            <div class="card-body p-4">
                                                                                <div class="text-center">
                                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                                    </span>
                                                                                    <div class="mt-2">
                                                                                        <p class="mb-0 fw-semibold">Jessica Cashew</p>
                                                                                        <p class="fs-12 op-7 mb-1 text-muted">jessicacashew143@gmail.com</p>
                                                                                        <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer text-center">
                                                                                <div class="btn-list">
                                                                                    <button type="button" class="btn btn-sm btn-light btn-wave">Block</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary btn-wave">Unfollow</button>
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
                                    </div>
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

        <!-- INTERNAL PROFILE JS -->
        @vite('resources/assets/js/profile.js')


@endsection