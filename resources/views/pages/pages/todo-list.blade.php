@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">To Do List</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">To Do List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP-CONTENT START -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                                <!-- Start::row-1 -->
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="card custom-card">
                                            <div class="card-body p-0">
                                                <div class="p-3 d-grid border-bottom border-block-end-dashed">
                                                    <button type="button" class="btn btn-primary d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#addtask">
                                                        <i class="ri-add-circle-line fs-16 align-middle me-1"></i>Create New Task
                                                    </button>
                                                    <div class="modal fade" id="addtask" tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title" id="mail-ComposeLabel">Create Task</h6>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body px-4">
                                                                    <div class="row gy-2">
                                                                        <div class="col-xl-12">
                                                                            <label for="task-name" class="form-label">Task Name</label>
                                                                            <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                                                        </div>
                                                                        <div class="col-xl-12">
                                                                            <label class="form-label">Assigned To</label>
                                                                            <select class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button" multiple>
                                                                                <option value="Choice 1" selected>Angelina May</option>
                                                                                <option value="Choice 2">Kiara advain</option>
                                                                                <option value="Choice 3">Hercules Jhon</option>
                                                                                <option value="Choice 4">Mayor Kim</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <label class="form-label">Assigned Date</label>
                                                                            <div class="form-group">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                                                    <input type="text" class="form-control" id="addignedDate" placeholder="Choose date and time">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <label class="form-label">Target Date</label>
                                                                            <div class="form-group">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                                                    <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12">
                                                                            <label class="form-label">Priority</label>
                                                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                                                <option value="">Select</option>
                                                                                <option value="Critical">Critical</option>
                                                                                <option value="High">High</option>
                                                                                <option value="Medium">Medium</option>
                                                                                <option value="Low">Low</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-primary">Create</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-bottom border-block-end-dashed">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search Task Here" aria-describedby="button-addon2">
                                                        <button aria-label="button" class="btn btn-light" type="button" id="button-addon2"><i class="ri-search-line text-primary"></i></button>
                                                    </div>
                                                </div>
                                                <div class="p-3 task-navigation border-bottom border-block-end-dashed">
                                                    <ul class="list-unstyled task-main-nav mb-0">
                                                        <li class="px-0 pt-0">
                                                            <span class="fs-11 text-muted op-7 fw-semibold">TASKS</span>
                                                        </li>
                                                        <li class="active bg-light">
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="me-2 lh-1">
                                                                        <i class="ri-task-line align-middle fs-14"></i>
                                                                    </span>
                                                                    <span class="flex-fill text-nowrap">
                                                                        All Tasks
                                                                    </span>
                                                                    <span class="badge bg-success-transparent rounded-pill">167</span>
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
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="me-2 lh-1">
                                                                        <i class="ri-delete-bin-5-line align-middle fs-14"></i>
                                                                    </span>
                                                                    <span class="flex-fill text-nowrap">
                                                                        Trash
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="px-0 pt-2">
                                                            <span class="fs-11 text-muted op-7 fw-semibold">CATEGORIES</span>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="me-2 lh-1">
                                                                        <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-primary"></i>
                                                                    </span>
                                                                    <span class="flex-fill text-nowrap">
                                                                        Personal
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="me-2 lh-1">
                                                                        <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-success"></i>
                                                                    </span>
                                                                    <span class="flex-fill text-nowrap">
                                                                        Daily Goals
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="me-2 lh-1">
                                                                        <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-secondary"></i>
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
                                                                        <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-warning"></i>
                                                                    </span>
                                                                    <span class="flex-fill text-nowrap">
                                                                        Health &amp; Fitness
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="me-2 lh-1">
                                                                        <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-danger"></i>
                                                                    </span>
                                                                    <span class="flex-fill text-nowrap">
                                                                        Financial Management
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="p-3 text-center">
                                                    <img src="{{asset('build/assets/images/media/media-66.png')}}" alt="img" class="wd-150">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card custom-card">
                                                    <div class="card-body p-0">
                                                        <div class="d-flex p-3 align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="fw-semibold mb-0">Tasks</h6>
                                                            </div>
                                                            <div>
                                                                <ul class="nav nav-tabs nav-tabs-header mb-0 d-sm-flex d-block" role="tablist">
                                                                    <li class="nav-item m-1">
                                                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                                                        href="#all-tasks" aria-selected="true">All Tasks</a>
                                                                    </li>
                                                                    <li class="nav-item m-1">
                                                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                                        href="#pending" aria-selected="true">Pending</a>
                                                                    </li>
                                                                    <li class="nav-item m-1">
                                                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                                        href="#in-progress" aria-selected="true">In Progress</a>
                                                                    </li>
                                                                    <li class="nav-item m-1">
                                                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                                        href="#completed" aria-selected="true">Completed</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <div class="dropdown">
                                                                    <button aria-label="button" class="btn btn-icon btn-sm btn-light btn-wave waves-light waves-effect" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="ti ti-dots-vertical"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Select All</a></li>
                                                                        <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Share All</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete All</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content task-tabs-container">
                                                <div class="tab-pane show active p-0" id="all-tasks"
                                                    role="tabpanel">
                                                    <div class="row" id="tasks-container">
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-inprogress-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Home page design</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                            <p class="mb-0">Assigned To : </p>
                                                                            <span class="avatar-list-stacked ms-1">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                            </span>
                                                                            <span class="me-2">
                                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal"><i class="ri-add-fill"></i></button></span>
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
                                                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-wave btn-primary-light"><i class="ri-eye-line"></i></a>
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-pending-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                            <span class="avatar-list-stacked ms-1">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                            </span>
                                                                            <span class="me-2"><button aria-label="button" type="button" class="btn btn-sm btn-icon btn-wave btn-secondary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal1"><i class="ri-add-fill"></i></button></span>
                                                                            <div class="modal fade" id="addpromodal1" tabindex="-1" aria-labelledby="AddModalLabel1" aria-hidden="true">
                                                                                <div class="modal-dialog ">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h6 class="modal-title" id="AddModalLabel1">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-warning-transparent d-block">Low</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-completed-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Creating Home Page Website </a>
                                                                            <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                            <span class="avatar-list-stacked ms-1">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                            </span>
                                                                            <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-success-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal2"><i class="ri-add-fill"></i></button></span>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-pending-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Data table Design</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-info">Pending</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2">
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal3"><i class="ri-add-fill"></i></button></span>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-completed-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Design Horizontal Layout</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-success">completed</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                            <span class="avatar-list-stacked ms-1">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                            </span>
                                                                            <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-success-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal4"><i class="ri-add-fill"></i></button></span>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-inprogress-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix  Header issue</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                            <span class="avatar-list-stacked ms-1">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                            </span>
                                                                            <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal5"><i class="ri-add-fill"></i></button></span>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-inprogress-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Create a blog post</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                            <span class="avatar-list-stacked ms-1">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                            </span>
                                                                            <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal6"><i class="ri-add-fill"></i></button></span>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-pending-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                            <span class="avatar-list-stacked ms-1">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                            </span>
                                                                            <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-secondary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal7"><i class="ri-add-fill"></i></button></span>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-warning-transparent d-block">Low</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-completed-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal8"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal8" tabindex="-1" aria-labelledby="AddModalLabe8" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabe8">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-pending-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal9"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal9" tabindex="-1" aria-labelledby="AddModalLabel9" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel9">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-inprogress-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Data table Design</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal10"><i class="ri-add-fill"></i></button></span>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-pending-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal11"><i class="ri-add-fill"></i></button></span>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane p-0" id="pending"
                                                    role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-pending-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                            <span class="avatar-list-stacked ms-1">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                            </span>
                                                                            <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-secondary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal12"><i class="ri-add-fill"></i></button></span>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-warning-transparent d-block">Low</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-pending-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                            <span class="avatar-list-stacked ms-1">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                            </span>
                                                                            <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-secondary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal13"><i class="ri-add-fill"></i></button></span>
                                                                            <div class="modal fade" id="addpromodal13" tabindex="-1" aria-labelledby="AddModalLabel13" aria-hidden="true">
                                                                                <div class="modal-dialog ">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h6 class="modal-title" id="AddModalLabel13">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-warning-transparent d-block">Low</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-pending-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-info">Pending</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal14"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal14" tabindex="-1" aria-labelledby="AddModalLabel14" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel14">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-warning-transparent d-block">Low</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane p-0" id="in-progress"
                                                    role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-inprogress-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Home page design</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                            <span class="avatar-list-stacked ms-1">
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                </span>
                                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                </span>
                                                                            </span>
                                                                            <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal15"><i class="ri-add-fill"></i></button></span>
                                                                            <div class="modal fade" id="addpromodal15" tabindex="-1" aria-labelledby="AddModalLabel15" aria-hidden="true">
                                                                                <div class="modal-dialog ">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h6 class="modal-title" id="AddModalLabel15">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-inprogress-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix  Header issue</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal16"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal16" tabindex="-1" aria-labelledby="AddModalLabel16" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel16">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-inprogress-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Data table Design</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromoda17"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromoda17" tabindex="-1" aria-labelledby="AddModalLabel17" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel17">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-inprogress-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal18"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal18" tabindex="-1" aria-labelledby="AddModalLabel18" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel18">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-inprogress-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Design Authentication pages</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal19"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal19" tabindex="-1" aria-labelledby="AddModalLabel19" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel19">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane p-0" id="completed"
                                                    role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-completed-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Home page design</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal20"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal20" tabindex="-1" aria-labelledby="AddModalLabel20" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel20">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-completed-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix  Header issue</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button"
                                                                                    class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal21"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal21" tabindex="-1" aria-labelledby="AddModalLabel21" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel21">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-completed-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Data table Design</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal22"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal22" tabindex="-1" aria-labelledby="AddModalLabel22" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel22">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-completed-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal23"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal23" tabindex="-1" aria-labelledby="AddModalLabel23" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel23">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-completed-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal24"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal24" tabindex="-1" aria-labelledby="AddModalLabel24" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel24">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-md-6 task-card">
                                                            <div class="card custom-card task-completed-card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div>
                                                                            <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Design Authentication pages</a>
                                                                            <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                                            <p class="mb-0">Assigned To :</p>
                                                                                <span class="avatar-list-stacked ms-1">
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="user-img">
                                                                                    </span>
                                                                                </span>
                                                                                <span class="me-2"><button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal25"><i class="ri-add-fill"></i></button></span>
                                                                                <div class="modal fade" id="addpromodal25" tabindex="-1" aria-labelledby="AddModalLabel25" aria-hidden="true">
                                                                                    <div class="modal-dialog ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h6 class="modal-title" id="AddModalLabel25">Edit Assigne</h6>
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
                                                                                <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-wave btn-danger-light me-0"><i class="ri-delete-bin-line"></i></button>
                                                                            </div>
                                                                            <span class="footer-badge badge bg-success-transparent d-block">Medium</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-end mb-4">
                                            <nav aria-label="Page navigation" class="pagination-style-4">
                                                <ul class="pagination mb-0  gap-2">
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
                                                    <li class="page-item d-none d-sm-flex"><a class="page-link" href="javascript:void(0);">16</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link text-primary" href="javascript:void(0);">
                                                            next
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!--End::row-1 -->

                        </div>
                    </div>
                    <!-- APP-CONTENT CLOSED -->

@endsection

@section('scripts')

        <!-- FLAT PICKER JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- INTERNAL TODO LIST JS -->
        @vite('resources/assets/js/todolist.js')
        

@endsection