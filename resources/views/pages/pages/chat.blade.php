@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Chat</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chat</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">
                            <div class="main-chart-wrapper pt-0 p-2 gap-2 d-lg-flex">
                                <div class="chat-info border">
                                    <a aria-label="anchor" href="javascript:void(0)" class="btn btn-secondary btn-icon rounded-circle chat-add-icon">
                                        <i class="ri-add-line"></i>
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between w-100 p-3 border-bottom">
                                        <div>
                                            <h5 class="fw-semibold mb-0">Messages</h5>
                                        </div>
                                        <div class="dropdown">
                                            <ul class="dropdown-menu" role="menu" data-bs-toggle="dropdown" aria-expanded="false">
                                                <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chat-search p-3 border-bottom">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search Chat"
                                                aria-describedby="button-addon2">
                                            <button aria-label="button" type="button" class="btn btn-primary" id="button-addon2"><i
                                                    class="ri-search-line"></i></button>
                                        </div>
                                    </div>

                                    <div class="align-items-center justify-content-between w-100 p-3 border-bottom">
                                        <div>
                                            <h6 class="fw-semibold mb-0">Online</h6>
                                        </div>
                                        <div class="mt-3">
                                            <span class="avatar avatar-md me-2 online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-md online me-2 avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-md me-2 online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-md me-2 online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-md me-2 online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                            </span>
                                            <span class="avatar avatar-md me-2 online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs tab-style-6 p-0 nav-justified mb-0 border-bottom d-block d-sm-flex rounded-0"
                                        id="myTab1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link fs-14 active" id="users-tab" data-bs-toggle="tab"
                                                data-bs-target="#users-tab-pane" type="button" role="tab"
                                                aria-controls="users-tab-pane" aria-selected="true"><i
                                                    class="fe fe-mail me-1 align-middle d-inline-block"></i>Chats</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link  fs-14" id="groups-tab" data-bs-toggle="tab"
                                                data-bs-target="#groups-tab-pane" type="button" role="tab"
                                                aria-controls="groups-tab-pane" aria-selected="false"><i
                                                    class="fe fe-users me-1 align-middle d-inline-block"></i>Groups</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link  fs-14" id="calls-tab" data-bs-toggle="tab"
                                                data-bs-target="#calls-tab-pane" type="button" role="tab"
                                                aria-controls="calls-tab-pane" aria-selected="false"><i
                                                    class="fe fe-phone me-1 align-middle d-inline-block"></i>Calls</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active border-0 chat-users-tab" id="users-tab-pane"
                                            role="tabpanel" aria-labelledby="users-tab" tabindex="0">
                                            <ul class="list-unstyled mb-0 mt-2 chat-users-tab" id="chat-msg-scroll">
                                                <li class="pb-0">
                                                    <p class="text-muted fs-11 fw-semibold mb-2 op-7">ACTIVE CHATS</p>
                                                </li>
                                                <li class="checkforactive">
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Sujika','5','online')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md online me-2 avatar-rounded">
                                                                    <img  src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Sujika <span
                                                                        class="float-end text-muted fw-normal fs-11">1:32PM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span class="chat-msg text-truncate">Need to go for lunch?</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="checkforactive">
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Emiley Jackson','2','online')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md online me-2 avatar-rounded">
                                                                    <img  src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Emiley Jackson <span
                                                                        class="float-end text-muted fw-normal fs-11">12:24PM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0 chat-msg-typing ">
                                                                    <span class="chat-msg text-truncate">Typing...</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-circle float-end">2</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="chat-msg-unread checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'McGreggor','10','online')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md online me-2 avatar-rounded">
                                                                    <img  src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    McGreggor <span
                                                                        class="float-end text-muted fw-normal fs-11">1:16PM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span class="chat-msg text-truncate">Nice to meet you &#128522;</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="checkforactive">
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Alissa','8','online')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md online me-2 avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Alissa <span
                                                                        class="float-end text-muted fw-normal fs-11">12:45PM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span class="chat-msg text-truncate">Chat with you
                                                                        later,bye</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="pb-0">
                                                    <p class="text-muted fs-11 fw-semibold mb-2 op-7">ALL CHATS</p>
                                                </li>
                                                <li class="chat-inactive checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Andreas','11','offline')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md offline me-2 avatar-rounded" >
                                                                    <img  src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Andreas <span
                                                                        class="float-end text-muted fw-normal fs-11">11:54AM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span class="chat-msg text-truncate">Congratulations on your new
                                                                        project</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="chat-inactive checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Melissa Sean','3','offline')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                    <img  src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Melissa Sean <span
                                                                        class="float-end text-muted fw-normal fs-11">9:45AM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span class="chat-msg text-truncate">Nice work,Congrats
                                                                        &#128079;</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="chat-inactive checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Samantha Paul','6','offline')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                    <img  src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Samantha Paul <span
                                                                        class="float-end text-muted fw-normal fs-11">8:31AM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span class="chat-msg text-truncate">Great work keep it up
                                                                        :-)</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="chat-inactive checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Megan Fox','4','offline')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Megan Fox <span
                                                                        class="float-end text-muted fw-normal fs-11">7:23AM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span class="chat-msg text-truncate">You are need to be
                                                                        appreaciated for what you have done,congs</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="chat-inactive checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Nicholas Sams','13','offline')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Nicholas Sams <span
                                                                        class="float-end text-muted fw-normal fs-11">10:22AM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span class="chat-msg text-truncate">Great Project</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="chat-inactive checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Pope Johnson','15','offline')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Pope Johnson <span
                                                                        class="float-end text-muted fw-normal fs-11">9:10AM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span class="chat-msg text-truncate">Hike management
                                                                        fixed</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade border-0 chat-groups-tab" id="groups-tab-pane"
                                            role="tabpanel" aria-labelledby="groups-tab" tabindex="0">

                                            <ul class="list-unstyled mb-0 mt-2 ">
                                                <li class="pb-0">
                                                    <p class="text-muted fs-11 fw-semibold mb-1 op-7">GROUP CHATS</p>
                                                </li>
                                                <li class="checkforactive">
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Family Together &#128525;','17','online')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md online me-2 avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/17.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold" >
                                                                    Family Together &#128525; <span
                                                                        class="float-end text-muted fw-normal fs-11">12:24PM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0 chat-msg-typing ">
                                                                    <span class="chat-msg text-truncate">Hira Typing...</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-circle float-end">2</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="chat-msg-unread checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Work Buddies','18','online')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md online me-2 avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/18.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold" >
                                                                    Work Buddies <span
                                                                        class="float-end text-muted fw-normal fs-11">1:16PM</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span class="chat-msg text-truncate"><span
                                                                            class="group-indivudial">Rams:</span>Happy to be part of
                                                                        this group</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="chat-inactive checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Friends Forever &#128526;','19','offline')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/19.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Friends Forever &#128526; <span
                                                                        class="float-end text-muted fw-normal fs-11">3 days
                                                                        ago</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span
                                                                        class="chat-msg text-truncate">Simon,Melissa,Amanda,Patrick,Siddique</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="chat-inactive checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Social Media Deals','20','offline')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                    <img  src="{{asset('build/assets/images/faces/20.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Social Media Deals <span
                                                                        class="float-end text-muted fw-normal fs-11">5 days
                                                                        ago</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span
                                                                        class="chat-msg text-truncate">Kamalan,Subha,Ambrose,Kiara,Jackson</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="chat-inactive checkforactive" >
                                                    <a href="javascript:void(0);" onclick="changeTheInfo(this,'Apartment Group','21','offline')">
                                                        <div class="d-flex align-items-top">
                                                            <div class="me-1 lh-1">
                                                                <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold">
                                                                    Apartment Group <span
                                                                        class="float-end text-muted fw-normal fs-11">12 days
                                                                        ago</span>
                                                                </p>
                                                                <p class="fs-12 mb-0">
                                                                    <span
                                                                        class="chat-msg text-truncate">Subman,Rajen,Kairo,Dibasha,Alexa</span>
                                                                    <span class="chat-read-icon float-end align-middle"><i
                                                                            class="ri-check-double-fill"></i></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled mb-0 mt-2 ">
                                                <li class="pb-0">
                                                    <p class="text-muted fs-11 fw-semibold mb-1 op-7">MY CHAT GROUPS</p>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0">1) Family Together</p>
                                                            <p class="mb-0"><span class="badge bg-success-transparent">4
                                                                    Online</span></p>
                                                        </div>
                                                        <div class="avatar-list-stacked my-auto">
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
                                                            <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded fs-10"
                                                                href="javascript:void(0);">
                                                                +19
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0">2) Work Buddies </p>
                                                            <p class="mb-0"><span class="badge bg-secondary-transparent">32
                                                                    Online</span></p>
                                                        </div>
                                                        <div class="avatar-list-stacked my-auto">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded fs-10"
                                                                href="javascript:void(0);">
                                                                +12
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0">3) Friends Forever</p>
                                                            <p class="mb-0"><span class="badge bg-warning-transparent">3
                                                                    Online</span></p>
                                                        </div>
                                                        <div class="avatar-list-stacked my-auto">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded fs-10"
                                                                href="javascript:void(0);">
                                                                +15
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0">4) Social Media Deals</p>
                                                            <p class="mb-0"><span class="badge bg-danger-transparent">5
                                                                    Online</span></p>
                                                        </div>
                                                        <div class="avatar-list-stacked my-auto">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded fs-10"
                                                                href="javascript:void(0);">
                                                                +28
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0">4) Apartment Group</p>
                                                            <p class="mb-0"><span class="badge bg-light text-dark">0 Online</span>
                                                            </p>
                                                        </div>
                                                        <div class="avatar-list-stacked my-auto">
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded fs-10"
                                                                href="javascript:void(0);">
                                                                +53
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade border-0 chat-calls-tab" id="calls-tab-pane" role="tabpanel"
                                            aria-labelledby="calls-tab" tabindex="0">
                                            <ul class="list-unstyled mb-0 mt-2 chat-calls-tab">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md online me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Sujika
                                                                <span class="ms-1 incoming-call-success"><i
                                                                        class="ti ti-arrow-down-left"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">Today,12:47PM</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                                <i class="ti ti-phone"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li >
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md online me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Melissa
                                                                <span class="ms-1 outgoing-call-failed"><i
                                                                        class="ti ti-arrow-up-right"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">Today,10:27AM</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light">
                                                                <i class="ti ti-phone"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Sharukh Sam
                                                                <span class="ms-1 outgoing-call-success"><i
                                                                        class="ti ti-arrow-up-right"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">Yesterday,12:45PM</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                                <i class="ti ti-video"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Kiram Kumal
                                                                <span class="ms-1 incoming-call-success"><i
                                                                        class="ti ti-arrow-down-left"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">3 Days ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                                <i class="ti ti-phone"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Amanda Sams
                                                                <span class="ms-1 incoming-call-success"><i
                                                                        class="ti ti-arrow-down-left"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">22, Oct 2022</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                                <i class="ti ti-video"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Azimo Peter
                                                                <span class="ms-1 incoming-call-failed"><i
                                                                        class="ti ti-arrow-up-right"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">24, Oct 2022</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light">
                                                                <i class="ti ti-phone"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Sierra Adams
                                                                <span class="ms-1 incoming-call-success"><i
                                                                        class="ti ti-arrow-down-left"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">22, Oct 2022</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                                <i class="ti ti-phone"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md online me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Dimple Kanns
                                                                <span class="ms-1 incoming-call-success"><i
                                                                        class="ti ti-arrow-down-left"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">13, Oct 2022</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                                <i class="ti ti-video"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md online me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Adrea Jaremiah
                                                                <span class="ms-1 outgoing-call-failed"><i
                                                                        class="ti ti-arrow-up-right"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">13, Sep 2022</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light">
                                                                <i class="ti ti-phone"></i>
                                                            </button>
                                                        </div>
                                                        </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Anjaneliyu
                                                                <span class="ms-1 outgoing-call-success"><i
                                                                        class="ti ti-arrow-up-right"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">10, July 2022</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                                <i class="ti ti-phone"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-1 lh-1">
                                                            <span class="avatar avatar-md offline me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill my-auto">
                                                            <p class="mb-0 fw-semibold">
                                                                Jason Steph
                                                                <span class="ms-1 incoming-call-success"><i
                                                                        class="ti ti-arrow-down-left"></i></span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                                <span class="text-muted text-truncate">1, Apr 2022</span>
                                                            </p>
                                                        </div>
                                                        <div class="">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light">
                                                                <i class="ti ti-phone"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-chat-area border">
                                    <div class="d-flex align-items-center p-2 border-bottom">
                                        <div class="me-2 lh-1">
                                            <span class="avatar avatar-lg online me-2 avatar-rounded chatstatusperson">
                                                <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" class="chatnameperson responsive-userinfo-open" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Emiley Jackson
                                            <p class="text-success mb-0 chatpersonstatus">online</p>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-wrap gap-1">
                                            <button aria-label="button" type="button" class="btn btn-icon btn-light ms-2">
                                                <i class="bx bx-phone"></i>
                                            </button>
                                            <button aria-label="button" type="button" class="btn btn-icon btn-light ms-2">
                                                <i class="bx bx-video"></i>
                                            </button>
                                            <button aria-label="button" type="button" class="btn btn-icon btn-light ms-2 responsive-userinfo-open"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                <i class="bx bx-user-circle" id="responsive-chat-close"></i>
                                            </button>
                                            <div class="dropdown ms-2">
                                                <button aria-label="button" type="button" class="btn btn-icon btn-light btn-wave waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Profile</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Clear Chat</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Delete User</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Block User</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Report</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" type="button" class="btn btn-icon btn-outline-light ms-2 responsive-chat-close">
                                                <i class="ri-close-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="chat-content" id="main-chat-content">
                                        <ul class="list-unstyled">
                                            <li class="chat-day-label">
                                                <span>Today</span>
                                            </li>
                                            <li class="chat-item-start">
                                                <div class="chat-list-inner">
                                                    <div class="chat-user-profile">
                                                        <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                                                            <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="chatting-user-info">
                                                            <span class="chatnameperson">Emiley Jackson</span> <span class="msg-sent-time">11:48PM</span>
                                                        </span>
                                                        <div class="main-chat-msg">
                                                            <div>
                                                                <p class="mb-0">Nice to meet you &#128512;</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="chat-item-end">
                                                <div class="chat-list-inner">
                                                    <div class="me-3">
                                                        <span class="chatting-user-info">
                                                            <span class="msg-sent-time"><span class="chat-read-mark align-middle"><i
                                                                        class="ri-check-double-line"></i></span>11:50PM</span> You
                                                        </span>
                                                        <div class="main-chat-msg">
                                                            <div>
                                                                <p class="mb-0">It is a long established fact that a reader will be
                                                                    distracted by the readable content of a page when looking at its
                                                                    layout</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-user-profile">
                                                        <span class="avatar avatar-md online avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="chat-item-start">
                                                <div class="chat-list-inner">
                                                    <div class="chat-user-profile">
                                                        <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                                                            <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="chatting-user-info">
                                                            <span class="chatnameperson">Emiley Jackson</span> <span class="msg-sent-time">11:51PM</span>
                                                        </span>
                                                        <div class="main-chat-msg">
                                                            <div>
                                                                <p class="mb-0">Who are you ?</p>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0">I don't know anyone named jeremiah.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="chat-item-end">
                                                <div class="chat-list-inner">
                                                    <div class="me-3">
                                                        <span class="chatting-user-info">
                                                            <span class="msg-sent-time"><span class="chat-read-mark align-middle"><i
                                                                        class="ri-check-double-line"></i></span>11:52PM</span> You
                                                        </span>
                                                        <div class="main-chat-msg">
                                                            <div>
                                                                <p class="mb-0">Some of the recent images taken are nice &#128076;</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-user-profile">
                                                        <span class="avatar avatar-md online avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="chat-item-start">
                                                <div class="chat-list-inner">
                                                    <div class="chat-user-profile">
                                                        <span class="avatar avatar-md online avatar-rounded chatstatusperson">
                                                            <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="chatting-user-info">
                                                            <span class="chatnameperson">Emiley Jackson</span> <span class="msg-sent-time">11:55PM</span>
                                                        </span>
                                                        <div class="main-chat-msg">
                                                            <div>
                                                                <p class="mb-0">Here are some of them have a look</p>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 d-sm-flex d-block">
                                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="avatar avatar-xl m-1"><img src="{{asset('build/assets/images/media/media-64.jpg')}}" alt=""></a>
                                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="avatar avatar-xl m-1"><img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt=""></a>
                                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="avatar avatar-xl m-1"><img src="{{asset('build/assets/images/media/media-62.jpg')}}" alt=""></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="chat-item-end">
                                                <div class="chat-list-inner">
                                                    <div class="me-3">
                                                        <span class="chatting-user-info">
                                                            <span class="msg-sent-time"><span class="chat-read-mark align-middle"><i
                                                                        class="ri-check-double-line"></i></span>11:52PM</span> You
                                                        </span>
                                                        <div class="main-chat-msg">
                                                            <div class="">
                                                                <a aria-label="anchor" href="javascript:void(0)" class="text-fixed-white"><i
                                                                        class="ri-play-circle-line align-middle"></i></a>
                                                                <span class="mx-1">
                                                                    <svg width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                                height="20">
                                                                                <path
                                                                                    d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                                    fill="rgba(255, 255, 255, 0.5)"
                                                                                    class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                                height="20">
                                                                                <path
                                                                                    d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                                    fill="rgba(255, 255, 255, 0.5)"
                                                                                    class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                                height="20">
                                                                                <path
                                                                                    d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                                    fill="rgba(255, 255, 255, 0.5)"
                                                                                    class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                                height="20">
                                                                                <path
                                                                                    d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                                    fill="rgba(255, 255, 255, 0.5)"
                                                                                    class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                                height="20">
                                                                                <path
                                                                                    d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                                    fill="rgba(255, 255, 255, 0.5)"
                                                                                    class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                                height="20">
                                                                                <path
                                                                                    d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                                    fill="rgba(255, 255, 255, 0.5)"
                                                                                    class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                                height="20">
                                                                                <path
                                                                                    d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                                    fill="rgba(255, 255, 255, 0.5)"
                                                                                    class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                                height="20">
                                                                                <path
                                                                                    d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                                    fill="rgba(255, 255, 255, 0.5)"
                                                                                    class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                                height="20">
                                                                                <path
                                                                                    d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                                    fill="rgba(255, 255, 255, 0.5)"
                                                                                    class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                data-name="Layer 3" viewBox="0 0 24 24" width="20"
                                                                                height="20">
                                                                                <path
                                                                                    d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z"
                                                                                    fill="rgba(255, 255, 255, 0.5)"
                                                                                    class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                </span>
                                                                <a aria-label="anchor" href="javascript:void(0)" class="text-fixed-white"><i
                                                                        class="ri-download-2-line align-middle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-user-profile">
                                                        <span class="avatar avatar-md online avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="chat-item-start">
                                                <div class="chat-list-inner">
                                                    <div class="chat-user-profile">
                                                        <span class="avatar avatar-md online avatar-rounded">
                                                            <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="chatting-user-info chatnameperson">
                                                            Emiley Jackson <span class="msg-sent-time">11:45PM</span>
                                                        </span>
                                                        <div class="main-chat-msg">
                                                            <div>
                                                                <p class="mb-0">Happy to talk with you,chat you later &#128075;</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-footer">
                                        <a aria-label="anchor" class="btn btn-icon me-2 btn-warning-light" href="javascript:void(0)">
                                            <i class="ri-emotion-line"></i>
                                        </a>
                                        <input class="form-control" placeholder="Type your message here..." type="text">
                                        <a aria-label="anchor" class="btn btn-icon mx-2 btn-primary-light" href="javascript:void(0)">
                                            <i class="ri-attachment-2"></i>
                                        </a>
                                        <a aria-label="anchor" class="btn btn-icon me-2 btn-success-light" href="javascript:void(0)">
                                            <i class="ri-mic-line"></i>
                                        </a>
                                        <a class="btn btn-primary d-inline-flex" href="javascript:void(0)">
                                            <i class="ri-send-plane-2-line me-2"></i>Send
                                        </a>
                                    </div>
                                </div>
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <button type="button" class="btn-close ms-auto p-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="chat-user-details pt-0" id="chat-user-details">
                                        <div class="text-center mb-5 mb-2">
                                            <span class="avatar avatar-rounded online avatar-xxl me-2 mb-3 chatstatusperson">
                                                <img class="chatimageperson" src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                            </span>
                                            <p class="mb-1 fs-15 fw-semibold text-dark lh-1 chatnameperson">Emiley Jackson</p>
                                            <p class="fs-12 text-muted  mb-0"><span class="chatnameperson">+12(987-987-670)</span></p>
                                            <p class="fs-12 text-muted"><span class="chatnameperson">emaileyjackson2134</span>@gmail.com</p>
                                            <p class="text-center mb-0">
                                                <button aria-label="button" type="button" class="btn btn-sm rounded-2 btn-primary-light fw-semibold"><i
                                                        class="ri-phone-line"></i></button>
                                                <button aria-label="button" type="button" class="btn btn-sm rounded-2 btn-primary-light fw-semibold ms-2"><i
                                                        class="ri-video-add-line"></i></button>
                                                <button aria-label="button" type="button" class="btn btn-sm rounded-2 btn-primary-light fw-semibold ms-2"><i
                                                        class="ri-chat-1-line"></i></button>
                                                <button aria-label="button" type="button" class="btn btn-sm rounded-2 btn-primary-light fw-semibold ms-2"><i
                                                        class="ri-search-line"></i></button>
                                            </p>
                                        </div>
                                        <div class="mb-5">
                                            <div class="fw-semibold mb-4">Shared Files
                                                <span class="badge bg-success-transparent rounded-circle ms-1">5</span>
                                                <span class="float-end fs-11"><a href="javascript:void(0);" class="link-primary text-underline"><u>View All</u></a></span>
                                            </div>
                                            <ul class="shared-files list-unstyled">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="shared-file-icon">
                                                                <i class="ri-image-line bg-warning-transparent"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fs-12 fw-semibold mb-0">Img_15.Jpg</p>
                                                            <p class="mb-0 text-muted fs-11">22,Oct 2022 - 10:18AM</p>
                                                        </div>
                                                        <div class="fs-18">
                                                            <a aria-label="anchor" href="javascript:void(0)"><i class="ri-download-2-line text-muted"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="shared-file-icon">
                                                                <i class="ri-image-line bg-info-transparent"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fs-12 fw-semibold mb-0">Img_02.Jpg</p>
                                                            <p class="mb-0 text-muted fs-11">22,Oct 2022 - 10:19AM</p>
                                                        </div>
                                                        <div class="fs-18">
                                                            <a aria-label="anchor" href="javascript:void(0)"><i class="ri-download-2-line text-muted"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="shared-file-icon">
                                                                <i class="ri-video-line bg-danger-transparent"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fs-12 fw-semibold mb-0">Movie_13_02_2023.MP4</p>
                                                            <p class="mb-0 text-muted fs-11">22,Oct 2022 - 10:18AM</p>
                                                        </div>
                                                        <div class="fs-18">
                                                            <a aria-label="anchor" href="javascript:void(0)"><i class="ri-download-2-line text-muted"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="shared-file-icon">
                                                                <i class="ti ti-file-text bg-success-transparent"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fs-12 fw-semibold mb-0">Project Details.pdf</p>
                                                            <p class="mb-0 text-muted fs-11">24,Oct 2022 - 14:24PM</p>
                                                        </div>
                                                        <div class="fs-18">
                                                            <a aria-label="anchor" href="javascript:void(0)"><i class="ri-download-2-line text-muted"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <span class="shared-file-icon">
                                                                <i class="ri-video-line bg-pink-transparent"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="fs-12 fw-semibold mb-0">Video_15_02_2022.MP4</p>
                                                            <p class="mb-0 text-muted fs-11">22,Oct 2022 - 10:18AM</p>
                                                        </div>
                                                        <div class="fs-18">
                                                            <a aria-label="anchor" href="javascript:void(0)"><i class="ri-download-2-line text-muted"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-0">
                                            <div class="fw-semibold mb-4">Photos &amp; Media
                                                <span class="badge bg-primary-transparent rounded-circle ms-1">22</span>
                                                <span class="float-end fs-11"><a href="javascript:void(0);" class="link-primary text-underline"><u>View All</u></a></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-56.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-52.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-53.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-62.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-64.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-13.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-19.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-20.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-56.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-52.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-53.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-56.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-52.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-53.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <a aria-label="anchor" href="{{url('gallery')}}" class="chat-media">
                                                        <img src="{{asset('build/assets/images/media/media-20.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')

        <!-- CHAT JS -->
        <script src="{{asset('build/assets/chat.js')}}"></script>

@endsection