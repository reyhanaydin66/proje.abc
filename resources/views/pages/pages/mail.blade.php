@extends('layouts.master')

@section('styles')

        <!-- QUILL CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Mail</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">
                            <div class="main-mail-container p-2 gap-4 d-md-flex">
                                <div class="mail-navigation d-none d-md-block">
                                    <div class="d-grid align-items-top p-3 border-bottom">
                                        <button class="btn btn-primary d-flex align-items-center justify-content-center" data-bs-toggle="modal"
                                        data-bs-target="#mail-Compose">
                                            <i class="ri-add-circle-line fs-16 align-middle me-1"></i>Compose Mail
                                        </button>
                                        <div class="modal modal-lg fade" id="mail-Compose" tabindex="-1" aria-labelledby="mail-ComposeLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title" id="mail-ComposeLabel">Compose Mail</h6>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body px-4">
                                                        <div class="row">
                                                            <div class="col-xl-6 mb-2">
                                                                <label for="fromMail" class="form-label">From<sup><i class="ri-star-s-fill text-success fs-8"></i></sup></label>
                                                                <input type="email" class="form-control" id="fromMail" value="jsontaylor2345@gmail.com">
                                                            </div>
                                                            <div class="col-xl-6 mb-2">
                                                                <label for="toMail" class="form-label">To<sup><i class="ri-star-s-fill text-success fs-8"></i></sup></label>
                                                                <select class="form-control" name="toMail" id="toMail" multiple>
                                                                    <option value="Choice 1" selected>jay@gmail.com</option>
                                                                    <option value="Choice 2">kia@gmail.com</option>
                                                                    <option value="Choice 3">don@gmail.com</option>
                                                                    <option value="Choice 4">kimo@gmail.com</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xl-6 mb-2">
                                                                <label for="mailCC" class="form-label text-dark fw-semibold">Cc</label>
                                                                <input type="email" class="form-control" id="mailCC">
                                                            </div>
                                                            <div class="col-xl-6 mb-2">
                                                                <label for="mailBcc" class="form-label text-dark fw-semibold">Bcc</label>
                                                                <input type="email" class="form-control" id="mailBcc">
                                                            </div>
                                                            <div class="col-xl-12 mb-2">
                                                                <label for="Subject" class="form-label">Subject</label>
                                                                <input type="text" class="form-control" id="Subject" placeholder="Subject">
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <label class="col-form-label">Content :</label>
                                                                <div class="mail-compose">
                                                                    <div id="mail-compose-editor"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-primary">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled mail-main-nav" id="mail-main-nav">
                                            <li class="px-0 pt-0 mail-nav-heading">
                                                <span class="fs-11 text-muted op-7 fw-semibold">MAILS</span>
                                            </li>
                                            <li class="active">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i class="ri-inbox-archive-line align-middle fs-14"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            All Mails
                                                        </span>
                                                        <span class="badge bg-info-transparent rounded-1">789</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i class="ri-inbox-archive-line align-middle fs-14"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Inbox
                                                        </span>
                                                        <span class="badge bg-success-transparent rounded-1">5</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i class="ri-send-plane-2-line align-middle fs-14"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Sent
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i class="ri-draft-line align-middle fs-14"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Drafts
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i class="ri-spam-2-line align-middle fs-14"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Spam
                                                        </span>
                                                        <span class="badge bg-warning-transparent rounded-1">8</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i class="ri-bookmark-line align-middle fs-14"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Important
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i class="ri-delete-bin-line align-middle fs-14"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Trash
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i class="ri-archive-line align-middle fs-14"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Archive
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i class="ri-star-line align-middle fs-14"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Starred
                                                        </span>
                                                        <span class="badge bg-secondary-transparent rounded-1">2</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-0 mail-nav-heading">
                                                <span class="fs-11 text-muted op-7 fw-semibold">SETTINGS</span>
                                            </li>
                                            <li>
                                                <a href="{{url('mail-settings')}}">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i class="ri-settings-3-line align-middle fs-14"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Settings
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-0 mail-nav-heading">
                                                <span class="fs-11 text-muted op-7 fw-semibold">LABELS</span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i
                                                                class="bx bx-label align-middle fs-14 fw-semibold text-secondary"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Mail
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i
                                                                class="bx bx-label align-middle fs-14 fw-semibold text-danger"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Home
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i
                                                                class="bx bx-label align-middle fs-14 fw-semibold text-success"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Work
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 lh-1">
                                                            <i
                                                                class="bx bx-label align-middle fs-14 fw-semibold text-info"></i>
                                                        </span>
                                                        <span class="flex-fill text-nowrap">
                                                            Friends
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-0 mail-nav-heading">
                                                <span class="fs-11 text-muted op-7 fw-semibold">ONLINE USERS</span>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-top lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-sm online avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="text-default fw-semibold mb-1">Angelica</p>
                                                            <p class="fs-12 text-muted mb-0">Hello this is angelica.</p>
                                                        </div>
                                                    </div>
                                                </a>    
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-top lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-sm online avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="text-default fw-semibold mb-1">Rexha</p>
                                                            <p class="fs-12 text-muted mb-0">Thanks for sharing file &#128512;.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-top lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-sm online avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="text-default fw-semibold mb-1">Alirodse</p>
                                                            <p class="fs-12 text-muted mb-0">Hello Hiii.... &#129306;&#128525;.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="total-mails">
                                    <div class="p-3 d-flex align-items-center border-bottom">
                                        <div class="me-3">
                                            <input class="form-check-input" type="checkbox" id="checkAll" value="" aria-label="...">
                                        </div>
                                        <a href="javascript:void(0);" class="  fs-14" data-bs-toggle="tooltip" title="" data-bs-original-title="refresh">
                                            <i class="fe fe-rotate-cw text-muted"></i>
                                        </a>
                                        <div class="dropdown ms-3">
                                            <a href="javascript:void(0);" class=" text-muted border-0 fs-14" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu" data-popper-placement="bottom-start">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Read</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Unread</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Mark As Read</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Spam</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                            </ul>
                                        </div>
                                        <div class="unstyled inbox-pagination ms-auto mb-0 ps-3">
                                            <span>
                                                <a href="javascript:void(0);" class="text-muted d-inline-flex">1-50 of 234</a>
                                                <a href="javascript:void(0);" class="fs-18  op-6">
                                                    <i class="fe fe-chevron-left text-muted"></i>
                                                </a>
                                                <a href="javascript:void(0);" class=" fs-18">
                                                        <i class="fe fe-chevron-right text-muted"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mail-messages" id="mail-messages">
                                        <ul class="list-unstyled mb-0">
                                            <li class="active">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">New Project details</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                <span class="badge bg-danger rounded-1">mail</span>
                                                                &#128525;Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor&#128077; cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">Most Probable date of project completion</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="active">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">Personal Mail</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum semper  nisi enean vulputat enean commodo &#128522;&#128525;li gula eget dolor cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="active">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">Applying for bank loan?</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                <span class="badge bg-success rounded-1">Friends</span>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">
                                                                Life Insurance Corparation</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum &#129306;semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">
                                                                Life Insurance Corparation</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                <span class="badge bg-danger rounded-1">mail</span>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="active">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">
                                                                &#128522;History of planets are discovered yesterday.....</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">
                                                                New Project details</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                <span class="badge bg-info rounded-1">Home</span>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="active">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">
                                                                Life Insurance Corparation</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum semper nisi enean vulputat enean commodo &#128525;li gula eget dolor cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">
                                                                Life Insurance Corparation</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                <span class="badge bg-danger rounded-1">mail</span>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit-&#127881;&#127874; viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="border-bottom">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3 mt-1">
                                                        <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                    </div>
                                                    <div class="me-2 lh-1">
                                                        <a href="javascript:void(0);" class="main-mail-star  d-inline-block">
                                                            <i class="bx bx-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="me-1 lh-1">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" class="main-mail-star d-inline-block" data-bs-original-title="mark as Important">
                                                            <i class="bx bx-label"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-fill ms-2 subject-container">
                                                        <a href="{{url('mail-chat')}}" class="stretched-link"></a>
                                                        <p class="mb-0  main-mail-subject">
                                                            <span class="d-block mb-0 fw-semibold fs-14">
                                                                New Project details</span>
                                                            <span class="fs-12 text-muted text-truncate">
                                                                <span class="badge bg-info rounded-1">Home</span>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit- viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor  gula eget dolor
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="icons-mail">
                                                        <div class=" mail-date float-end text-muted fw-normal fs-11"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</div>
                                                        <div class="mail-hover-icons">
                                                            <div class="d-flex justify-content-end align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as read">
                                                                    <i class="fe fe-mail"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                                    <i class="fe fe-trash"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="Snooze">
                                                                    <i class="fe fe-clock"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" title="" data-bs-original-title="archive">
                                                                    <i class="fe fe-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="float-end mt-3 pe-3">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0 gap-2">
                                                <li class="page-item  bg-light rounded-5">
                                                    <a class="page-link  bg-light rounded-5" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active rounded-5"><a class="page-link rounded-5 " href="javascript:void(0);">1</a></li>
                                                <li class="page-item bg-light rounded-5 d-none d-sm-block"><a class="page-link  bg-light rounded-5" href="javascript:void(0);">2</a></li>
                                                <li class="page-item  bg-light rounded-5">
                                                    <a class="page-link  bg-light rounded-5" href="javascript:void(0);">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item   bg-light rounded-5 d-none d-sm-block"><a class="page-link  bg-light rounded-5" href="javascript:void(0);">16</a></li>
                                                <li class="page-item   bg-light rounded-5"><a class="page-link  bg-light rounded-5" href="javascript:void(0);">17</a></li>
                                                <li class="page-item   bg-light rounded-5">
                                                    <a class="page-link  bg-light rounded-5 text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="mail-recepients d-none d-md-block">
                                    <div class="p-3 border-bottom">
                                        <button class="btn btn-light btn-icon rounded-pill" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Add Recepient"><i class="ri-add-line"></i></button>
                                    </div>
                                    <div class="p-3 d-flex flex-column align-items-center total-mail-recepients" id="mail-recepients">
                                        <a href="javascript:void(0);" class="mail-recepeint-person">
                                            <span class="avatar online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Sujika">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="mail-recepeint-person">
                                            <span class="avatar online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Samantha May">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="mail-recepeint-person">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Brenda">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="mail-recepeint-person">
                                            <span class="avatar offline online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Monika">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="mail-recepeint-person">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Kiara Jah">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="mail-recepeint-person">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Sujika">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="mail-recepeint-person">
                                            <span class="avatar online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Kim Noah">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="mail-recepeint-person">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Professor">
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="mail-recepeint-person">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Alex Carey">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END APP CONTENT -->
            
@endsection

@section('scripts')

        <!-- QUILL EDITOR JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- MAIL JS -->
        @vite('resources/assets/js/mail.js')


@endsection