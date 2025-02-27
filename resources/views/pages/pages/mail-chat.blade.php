@extends('layouts.master')

@section('styles')

        <!-- QUILL CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Mail Chat</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mail Chat</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">
                            <div class="main-mail-container pt-2 gap-4 d-flex mb-5">
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
                                <div class="mails-information">
                                    <div class="mail-info-header d-xxl-flex align-items-center">
                                        <div class="mail-option-read d-md-flex  d-block">
                                            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="tooltip" title="" data-bs-original-title="Back to inbox">
                                                <i class="bx bx-left-arrow-alt"></i>
                                            </a>
                                            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="tooltip" title="" data-bs-original-title="Archive">
                                                <i class="bx bx-download"></i>
                                            </a>
                                            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="tooltip" title="" data-bs-original-title="Report spam">
                                                <i class="bx bx-error-alt"></i>
                                            </a>
                                            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                <i class="bx bx-trash-alt"></i>
                                            </a>
                                            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="tooltip" title="" data-bs-original-title="mark as unread">
                                                <i class="bx bx-envelope"></i>
                                            </a>
                                            <a href="javascript:void(0);" class=" vertical-phone d-none d-xl-block" data-bs-toggle="dropdown" title="Snooze">
                                                <i class="bx bx-time-five"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item  fs--14 font-weight-semibold  border-bottom" href="javascript:void(0);">Snooze Until..</a> </li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);">Today</a> </li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);">Tommaro</a> </li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);">This weekend</a> </li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);">Last weekend</a> </li>
                                            </ul>
                                            <a href="javascript:void(0);" class=" vertical-phone  profile-user d-none d-xl-block " data-bs-toggle="dropdown" title="move to">
                                                <i class="bx bx-folder-open"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item  fs--14 font-weight-semibold  border-bottom" href="javascript:void(0);">Move TO</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="fa fa-inbox me-2"></i>Inbox</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i> Sent</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="far fa-trash-alt  me-2"></i>Trash</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="far fa-file me-2"></i>Drafts</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="fas fa-download me-2"></i>  Archive</a></li>
                                            </ul>
                                            <a href="javascript:void(0);" class=" vertical-phone  profile-user d-none d-xl-block " data-bs-toggle="dropdown" title="copy to">
                                                <i class="bx bx-copy"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item  fs--14 font-weight-semibold  border-bottom" href="javascript:void(0);">Copy TO</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="fa fa-inbox me-2"></i>Inbox</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i> Sent</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="far fa-trash-alt  me-2"></i>Trash</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="far fa-file me-2"></i>Drafts</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"><i class="fas fa-download me-2"></i>  Archive</a></li>
                                            </ul>
                                            <a href="javascript:void(0);" class=" vertical-phone  profile-user d-none d-lg-block " data-bs-toggle="dropdown" title="Label as">
                                                <i class="bx bx-label"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fs--14 font-weight-semibold  border-bottom" href="javascript:void(0);">Label as</a></li>
                                                <li class="dropdown-item fs--14"><label class="ckbox"><input class="form-check-input" type="checkbox"><span class="ms-2">Main</span></label></li>
                                                <li class="dropdown-item fs--14"><label class="ckbox"><input class="form-check-input" type="checkbox"><span class="ms-2">Home</span></label></li>
                                                <li class="dropdown-item fs--14"><label class="ckbox"><input class="form-check-input" type="checkbox"><span class="ms-2">work</span></label></li>
                                                <li class="dropdown-item fs--14"><label class="ckbox"><input class="form-check-input" type="checkbox"><span class="ms-2">Friends</span></label></li>
                                            </ul>
                                            <a href="javascript:void(0);" class=" vertical-phone" data-bs-toggle="dropdown" title="more">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"> Mark As Important</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"> Unread</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"> Mark as Read</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);">Add Star</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"> delete</a></li>
                                                <li><a class="dropdown-item  fs--14" href="javascript:void(0);"> None</a></li>
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
                                    <div class="mail-info-body p-4" id="mail-info-body">
                                        <div class="d-xl-flex d-block align-items-center justify-content-between mb-4">
                                            <div>
                                                <p class="fs-20 fw-semibold mb-0">History of planets are discovered yesterday.</p>
                                            </div>
                                            <div class="float-xl-
                                            end">
                                                <span class="me-2 fs-12 text-muted">Oct-22-2022,03:05PM</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-1">
                                                <span class="avatar avatar-md online me-2 avatar-rounded mail-msg-avatar">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                            </div>    
                                            <div class="flex-fill">
                                                <h6 class="mb-0 fw-semibold">Michael Jeremy</h6>
                                                <span class="text-muted fs-12">michaeljeremy2194@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="main-mail-content my-4">
                                            <p class="fs-14 fw-semibold mb-2">Hi, Json Taylor Greetings &#128400;</p>
                                            <p class="mb-2 fs-12 text-muted">Earth, our home, is the third planet from the sun.  While scientists continue to hunt for clues of life beyond Earth,is the third planet from the sun.  While scientists continue to hunt for clues of life beyond Earth, our home planet remains the only place in the universe where we've ever identified living organisms. .</p>
                                            <p class="mb-2 fs-12 text-muted">Earth has a diameter of roughly 8,000 miles (13,000 kilometers) and is mostly round because gravity generally pulls matter into a ball. But the spin of our home planet causes it to be squashed at its poles and swollen at the equator, making the true shape of the Earth an "oblate spheroidEarth has a diameter of roughly 8,000 miles (13,000 kilometers) and is mostly round because gravity generally pulls matter into a ball. But the spin of our home planet causes it to be squashed at its poles and swollen at the equator, 
                                                making the true shape of the Earth an "oblate spheroid.".</p>
                                            <p class="mb-0 mt-4">
                                                <span class="d-block">Regards,</span>
                                                <span class="d-block">Michael Jeremy</span>
                                            </p>
                                        </div>
                                        <div class="mail-attachments mb-4">
                                            <div class="d-sm-flex justify-content-between align-items-center">
                                                <div class="mb-0"> 
                                                    <span class="fs-14 fw-semibold d-inline-flex"><i class="ri-attachment-2 me-1 align-middle"></i>Attachments (1.8mb):</span>
                                                </div>
                                                <div>
                                                    <button class="btn btn-sm btn-success">Download All</button>
                                                </div>
                                            </div>    
                                            <div class="mt-2 d-xl-flex d-lg-block d-sm-flex">
                                                <a href="javascript:void(0);" class="mail-attachment border m-1">
                                                    <div class="attachment-icon"><svg xmlns="http://www.w3.org/2000/svg" baseProfile="tiny" viewBox="0 0 512 512"><path fill="#FFF" d="M422.3 477.9c0 7.6-6.2 13.8-13.8 13.8h-305c-7.6 0-13.8-6.2-13.8-13.8V34.1c0-7.6 6.2-13.8 13.8-13.8h230.1V109h88.7v368.9z"/><path fill="#2B669F" d="M333.6 6H103.5C88 6 75.4 18.6 75.4 34.1v443.8c0 15.5 12.6 28.1 28.1 28.1h305c15.5 0 28.1-12.6 28.1-28.1V109.1L333.6 6zm88.7 471.9c0 7.6-6.2 13.8-13.8 13.8h-305c-7.6 0-13.8-6.2-13.8-13.8V34.1c0-7.6 6.2-13.8 13.8-13.8h230.1V109h88.7v368.9z"/><path fill="#084272" d="M333.6 6v103.1h103z"/><g><path fill="#084272" d="M465.9 450.8H46.1V308c0-9.8 7.9-17.7 17.7-17.7h384.3c9.8 0 17.7 7.9 17.7 17.7v142.8z"/><path fill="#1A252D" d="M436.6 450.8v19.5l29.3-19.5zM75.4 450.8v19.5l-29.3-19.5z"/><path fill="#2B669F" d="M64.1 308.4h383.7v124.5H64.1z"/></g><g fill="#2B669F"><path d="M298.3 78.6h-177a6.7 6.7 0 010-13.4h177a6.7 6.7 0 010 13.4zM298.3 110.6h-177a6.7 6.7 0 010-13.4h177a6.7 6.7 0 010 13.4zM391.8 142.5H121.3a6.7 6.7 0 010-13.4h270.5a6.7 6.7 0 010 13.4zM391.8 174.5H121.3a6.7 6.7 0 010-13.4h270.5a6.7 6.7 0 010 13.4zM391.8 206.5H121.3a6.7 6.7 0 010-13.4h270.5a6.7 6.7 0 010 13.4zM391.8 238.4H121.3a6.7 6.7 0 010-13.4h270.5a6.7 6.7 0 010 13.4zM391.8 270.4H121.3a6.7 6.7 0 010-13.4h270.5a6.7 6.7 0 010 13.4z"/></g><g fill="#FFF"><path d="M229.3 373.3c0 6.9-1.6 12.5-4.7 16.7-3.1 4.2-7.5 6.3-13.2 6.3-2.2 0-4.2-.4-5.9-1.3-1.7-.9-3.2-2.1-4.5-3.7v21.8h-14.4v-63.8h13.6l.4 5c1.3-1.9 2.8-3.3 4.6-4.3 1.8-1 3.8-1.5 6.1-1.5 5.7 0 10.1 2.2 13.3 6.6 3.1 4.4 4.7 10.2 4.7 17.4v.8zm-14.3-.9c0-3.9-.6-7-1.7-9.4-1.1-2.4-3-3.5-5.4-3.5-1.6 0-3 .3-4.1.9-1.1.6-2 1.5-2.7 2.6v19.2c.7 1 1.6 1.7 2.7 2.2 1.1.5 2.5.7 4.1.7 2.5 0 4.3-1 5.4-3.1 1.1-2.1 1.6-5 1.6-8.7v-.9zM239.8 372.4c0-7.2 1.6-13 4.7-17.4 3.1-4.4 7.6-6.6 13.3-6.6 2.1 0 4 .5 5.8 1.5 1.7 1 3.3 2.4 4.6 4.2V329h14.4v66.4H270l-1-5.6c-1.4 2.1-3 3.7-4.9 4.8-1.9 1.1-4 1.7-6.4 1.7-5.7 0-10.1-2.1-13.2-6.3-3.1-4.2-4.7-9.7-4.7-16.6v-1zm14.4.9c0 3.7.5 6.7 1.6 8.7 1.1 2.1 2.9 3.1 5.5 3.1 1.5 0 2.8-.3 4-.8 1.1-.6 2.1-1.4 2.8-2.4v-18.6c-.7-1.2-1.7-2.2-2.8-2.8-1.1-.7-2.4-1-3.9-1-2.6 0-4.4 1.2-5.5 3.5-1.1 2.4-1.7 5.5-1.7 9.4v.9zM300 395.4v-36.1h-6.6v-10h6.6v-4.8c0-5.3 1.6-9.3 4.8-12.2 3.2-2.9 7.7-4.3 13.5-4.3 1.1 0 2.2.1 3.3.2 1.1.2 2.4.4 3.8.7l-1.1 10.6c-.8-.1-1.5-.2-2.1-.3-.6-.1-1.3-.1-2.2-.1-1.8 0-3.2.5-4.2 1.4-1 .9-1.4 2.3-1.4 4v4.8h9.1v10h-9.1v36.1H300z"/></g></svg>
                                                    </div>
                                                    <div class="lh-1">
                                                        <p class="mb-1 attachment-name text-truncate">
                                                            Earth_Archeology_2.21-4.pdf
                                                        </p>
                                                        <p class="mb-0 fs-11 text-muted">
                                                            0.85MB
                                                        </p>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="mail-attachment m-1 border">
                                                    <div class="attachment-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#FFF" d="M422.3 477.9c0 7.6-6.2 13.8-13.8 13.8h-305c-7.6 0-13.8-6.2-13.8-13.8V34.1c0-7.6 6.2-13.8 13.8-13.8h230.1V109h88.7v368.9z"/><path fill="#24A885" d="M333.6 6H103.5C88 6 75.4 18.6 75.4 34.1v443.8c0 15.5 12.6 28.1 27.1 28.1h305c16.5 0 29.1-12.6 29.1-28.1V109.1L333.6 6zm88.7 471.9c0 7.6-6.2 13.8-13.8 13.8h-305c-7.6 0-13.8-6.2-13.8-13.8V34.1c0-7.6 6.2-13.8 13.8-13.8h230.1V109h88.7v368.9z"/><path fill="#16876B" d="M333.6 6v103.1h103zM465.9 450.8H46.1V308c0-9.8 7.9-17.7 17.7-17.7h384.3c9.8 0 17.7 7.9 17.7 17.7v142.8z"/><path fill="#59E0B9" d="M436.6 450.8v19.5l29.3-19.5zM75.4 450.8v19.5l-29.3-19.5z"/><path fill="#2EBA98" d="M64.1 308.4h383.7v124.5H64.1z"/><path fill="#16876B" d="M298.3 78.6h-177a6.7 6.7 0 0 1 0-13.4h177a6.7 6.7 0 0 1 0 13.4zM298.3 110.6h-177a6.7 6.7 0 0 1 0-13.4h177a6.7 6.7 0 0 1 0 13.4zM391.8 142.5H121.3a6.7 6.7 0 0 1 0-13.4h270.5a6.7 6.7 0 0 1 0 13.4zM391.8 174.5H121.3a6.7 6.7 0 0 1 0-13.4h270.5a6.7 6.7 0 0 1 0 13.4zM391.8 206.5H121.3a6.7 6.7 0 0 1 0-13.4h270.5a6.7 6.7 0 0 1 0 13.4zM391.8 238.4H121.3a6.7 6.7 0 0 1 0-13.4h270.5a6.7 6.7 0 0 1 0 13.4zM391.8 270.4H121.3a6.7 6.7 0 0 1 0-13.4h270.5a6.7 6.7 0 0 1 0 13.4z"/><path fill="#FFF" d="M191.3 349.7v43.9c0 5.4-1.4 9.6-4.3 12.5-2.9 2.9-6.9 4.4-12.1 4.4-1.2 0-2.2-.1-3.2-.2s-2-.3-3.1-.5l.6-10.2c.8.2 1.4.3 2 .4s1.2.1 2.1.1c1.5 0 2.6-.5 3.4-1.6.8-1.1 1.2-2.7 1.2-4.8v-43.9h13.4zm-.2-10h-13.6v-9.1h13.6v9.1zM244.8 372.3c0 6.5-1.5 11.7-4.4 15.7-2.9 3.9-7.1 5.9-12.4 5.9-2.1 0-3.9-.4-5.5-1.2-1.6-.8-3-2-4.2-3.5v20.5h-13.5v-60h12.8l.4 4.7c1.2-1.8 2.6-3.1 4.3-4.1 1.7-1 3.6-1.4 5.7-1.4 5.4 0 9.5 2.1 12.5 6.2s4.4 9.6 4.4 16.3v.9zm-13.5-.8c0-3.7-.5-6.6-1.6-8.8-1.1-2.2-2.8-3.3-5.1-3.3-1.5 0-2.8.3-3.9.8-1.1.6-1.9 1.4-2.5 2.4v18.1c.6.9 1.5 1.6 2.5 2.1 1.1.5 2.4.7 3.9.7 2.4 0 4.1-1 5.1-2.9 1-2 1.5-4.7 1.5-8.2v-.9zM275.7 393.9c-6.6 0-11.7-2-15.4-6-3.7-4-5.6-9-5.6-15.1v-1.5c0-6.6 1.8-12 5.3-16.2 3.5-4.2 8.6-6.2 15.2-6.2 5.8 0 10.4 1.7 13.6 5.2 3.2 3.5 4.8 8.3 4.8 14.4v7.1h-24.8l-.1.2c.2 2.3 1.1 4.1 2.5 5.5 1.5 1.4 3.6 2.1 6.3 2.1 2.6 0 4.7-.2 6.5-.6 1.7-.4 3.7-1.1 5.9-2l3.2 8.3c-1.9 1.4-4.4 2.5-7.5 3.4-3.1 1-6.4 1.4-9.9 1.4zm-.5-34.5c-2.2 0-3.8.7-4.8 2.1-1 1.4-1.6 3.2-1.8 5.6l.1.2h11.7v-1c0-2.2-.4-3.9-1.2-5.1-.7-1.3-2.1-1.8-4-1.8zM303.3 371.5c0-6.8 1.5-12.2 4.4-16.3 3-4.1 7.1-6.2 12.5-6.2 2.3 0 4.3.5 6 1.6 1.7 1.1 3.2 2.6 4.5 4.6l.9-5.4h11.9v42.9c0 5.7-2 10.1-5.9 13.3-3.9 3.1-9.3 4.7-16.2 4.7-2.2 0-4.6-.3-7.1-.9-2.5-.6-4.8-1.4-7.1-2.5l2.3-10c1.9.9 3.8 1.5 5.6 1.9 1.8.4 3.8.6 6.1.6 2.9 0 5-.6 6.4-1.7 1.4-1.1 2.1-3 2.1-5.4v-3.4c-1.2 1.6-2.7 2.8-4.3 3.6-1.6.8-3.5 1.2-5.5 1.2-5.3 0-9.5-2-12.4-5.9-2.9-4-4.4-9.2-4.4-15.7v-1zm13.5.8c0 3.5.5 6.3 1.5 8.2 1 2 2.8 2.9 5.2 2.9 1.5 0 2.7-.2 3.8-.7 1.1-.5 1.9-1.1 2.6-2v-18.2c-.7-1-1.5-1.8-2.6-2.4-1-.5-2.3-.8-3.7-.8-2.4 0-4.1 1.1-5.2 3.3-1.1 2.2-1.6 5.2-1.6 8.8v.9z"/></svg>
                                                    </div>
                                                    <div class="lh-1">
                                                        <p class="mb-1 attachment-name text-truncate">
                                                            Planets_Image.Jpeg
                                                        </p>
                                                        <p class="mb-0 fs-11 text-muted">
                                                            457KB
                                                        </p>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-outline-light m-1 btn-lg border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Image_012.jpeg">
                                                    <i class="ri-attachment-2 lh-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mb-3"> 
                                            <span class="fs-14 fw-semibold d-inline-flex"><i class="ri-reply-all-line me-1 align-middle"></i>Reply:</span>
                                        </div>
                                        <div class="mail-reply">
                                            <div id="mail-reply-editor"></div>
                                        </div>
                                    </div>
                                    <div class="mail-info-footer d-sm-flex align-items-center justify-content-between">
                                        <div class="mb-3 mb-sm-0">
                                            <button class="btn btn-icon btn-light m-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print">
                                                <i class="ri-printer-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-light  m-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mark as read">
                                                <i class="ri-mail-open-line"></i>
                                            </button>
                                            <button class="btn btn-icon btn-light  m-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reload">
                                                <i class="ri-refresh-line"></i>
                                            </button>
                                        </div>
                                        <div>
                                            <button class="btn btn-secondary d-inline-flex m-1">
                                                <i class="ri-share-forward-line me-1 align-middle"></i>Forward
                                            </button>
                                            <button class="btn btn-danger  m-1 d-inline-flex">
                                                <i class="ri-reply-all-line me-1 align-middle"></i>Reply
                                            </button>
                                        </div>
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
        @vite('resources/assets/js/mail-chat.js')


@endsection