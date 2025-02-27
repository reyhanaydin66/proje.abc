@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Teams</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Teams</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="team-members" id="team-members">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="team-header">
                                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="h5 fw-semibold mb-0">Team Ui</div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="Search Person Name" aria-describedby="search-team-member">
                                                                        <button class="btn btn-light  btn-primary" type="button" id="search-team-member"><i class="ri-search-line"></i></button>
                                                                    </div>
                                                                    <div class="dropdown ms-2">
                                                                        <button class="btn btn-icon btn-light btn-wave" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ti ti-dots-vertical"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Delete Team</a></li>
                                                                            <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Edit</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Add Member</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                                                <div class="card custom-card ">
                                                    <div class="card-body"> 
                                                        <div class="text-center">
                                                            <span class="avatar avatar-xxxl rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="d-flex  text-center justify-content-between mt-1 mb-3">
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold fs-16 text-truncate max-w-150 mx-auto">
                                                                    <a href="{{url('profile')}}">Alexander Smith</a>
                                                                </p>
                                                                <p class="mb-0 fs-12 text-muted text-truncate max-w-150 mx-auto">alexandersmith2135@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-facebook-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-twitter-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-github-line fw-bold"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-block-start-dashed text-center p-0">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="d-flex p-3 border-end">
                                                                <div class="text-center ">
                                                                    <p class="fw-semibold mb-0">Projects</p>
                                                                    <span class="text-muted fs-12">100</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex p-3">
                                                                <div class="text-center">
                                                                    <p class="fw-semibold mb-0">Position</p>
                                                                    <span class="text-muted fs-12">Associate</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                                                <div class="card custom-card ">
                                                    <div class="card-body"> 
                                                        <div class="text-center">
                                                            <span class="avatar avatar-xxxl rounded">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="d-flex  text-center justify-content-between mt-1 mb-3">
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold fs-16 text-truncate max-w-150 mx-auto">
                                                                    <a href="{{url('profile')}}">Alicia Sierra</a>
                                                                </p>
                                                                <p class="mb-0 fs-12 text-muted text-truncate max-w-150 mx-auto">aliciasierra1645@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-facebook-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-twitter-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-github-line fw-bold"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-block-start-dashed text-center p-0">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="d-flex p-3 border-end">
                                                                <div class="text-center ">
                                                                    <p class="fw-semibold mb-0">Projects</p>
                                                                    <span class="text-muted fs-12">120</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex p-3">
                                                                <div class="text-center">
                                                                    <p class="fw-semibold mb-0">Position</p>
                                                                    <span class="text-muted fs-12">Associate</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                                                <div class="card custom-card ">
                                                    <div class="card-body"> 
                                                        <div class="text-center">
                                                            <span class="avatar avatar-xxxl rounded">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="d-flex  text-center justify-content-between mt-1 mb-3">
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold fs-16 text-truncate max-w-150 mx-auto">
                                                                    <a href="{{url('profile')}}">Angelica Hose</a>
                                                                </p>
                                                                <p class="mb-0 fs-12 text-muted text-truncate max-w-150 mx-auto">angelica143@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-facebook-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-twitter-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-github-line fw-bold"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-block-start-dashed text-center p-0">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="d-flex p-3 border-end">
                                                                <div class="text-center ">
                                                                    <p class="fw-semibold mb-0">Projects</p>
                                                                    <span class="text-muted fs-12">220</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex p-3">
                                                                <div class="text-center">
                                                                    <p class="fw-semibold mb-0">Position</p>
                                                                    <span class="text-muted fs-12">Member</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                                                <div class="card custom-card ">
                                                    <div class="card-body"> 
                                                        <div class="text-center">
                                                            <span class="avatar avatar-xxxl rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="d-flex  text-center justify-content-between mt-1 mb-3">
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold fs-16 text-truncate max-w-150 mx-auto">
                                                                    <a href="{{url('profile')}}">Jhope Joseph</a>
                                                                </p>
                                                                <p class="mb-0 fs-12 text-muted text-truncate max-w-150 mx-auto">jhope.jhope@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-facebook-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-twitter-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-github-line fw-bold"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-block-start-dashed text-center p-0">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="d-flex p-3 border-end">
                                                                <div class="text-center ">
                                                                    <p class="fw-semibold mb-0">Projects</p>
                                                                    <span class="text-muted fs-12">200</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex p-3">
                                                                <div class="text-center">
                                                                    <p class="fw-semibold mb-0">Position</p>
                                                                    <span class="text-muted fs-12">Team Lead</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                                                <div class="card custom-card ">
                                                    <div class="card-body"> 
                                                        <div class="text-center">
                                                            <span class="avatar avatar-xxxl rounded">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="d-flex  text-center justify-content-between mt-1 mb-3">
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold fs-16 text-truncate max-w-150 mx-auto">
                                                                    <a href="{{url('profile')}}">King Martin</a>
                                                                </p>
                                                                <p class="mb-0 fs-12 text-muted text-truncate max-w-150 mx-auto">King.Martin@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-facebook-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-twitter-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-github-line fw-bold"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-block-start-dashed text-center p-0">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="d-flex p-3 border-end">
                                                                <div class="text-center ">
                                                                    <p class="fw-semibold mb-0">Projects</p>
                                                                    <span class="text-muted fs-12">140</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex p-3">
                                                                <div class="text-center">
                                                                    <p class="fw-semibold mb-0">Position</p>
                                                                    <span class="text-muted fs-12">Team Lead</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                                                <div class="card custom-card ">
                                                    <div class="card-body"> 
                                                        <div class="text-center">
                                                            <span class="avatar avatar-xxxl rounded">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="d-flex  text-center justify-content-between mt-1 mb-3">
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold fs-16 text-truncate max-w-150 mx-auto">
                                                                    <a href="{{url('profile')}}">Susan Sane</a>
                                                                </p>
                                                                <p class="mb-0 fs-12 text-muted text-truncate max-w-150 mx-auto">Susan.Sane532@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-facebook-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-twitter-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-github-line fw-bold"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-block-start-dashed text-center p-0">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="d-flex p-3 border-end">
                                                                <div class="text-center ">
                                                                    <p class="fw-semibold mb-0">Projects</p>
                                                                    <span class="text-muted fs-12">160</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex p-3">
                                                                <div class="text-center">
                                                                    <p class="fw-semibold mb-0">Position</p>
                                                                    <span class="text-muted fs-12">Develepor</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                                                <div class="card custom-card ">
                                                    <div class="card-body"> 
                                                        <div class="text-center">
                                                            <span class="avatar avatar-xxxl rounded">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="d-flex  text-center justify-content-between mt-1 mb-3">
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold fs-16 text-truncate max-w-150 mx-auto">
                                                                    <a href="{{url('profile')}}">Brenda Hops</a>
                                                                </p>
                                                                <p class="mb-0 fs-12 text-muted text-truncate max-w-150 mx-auto">Brenda432@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-facebook-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-twitter-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-github-line fw-bold"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-block-start-dashed text-center p-0">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="d-flex p-3 border-end">
                                                                <div class="text-center ">
                                                                    <p class="fw-semibold mb-0">Projects</p>
                                                                    <span class="text-muted fs-12">110</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex p-3">
                                                                <div class="text-center">
                                                                    <p class="fw-semibold mb-0">Position</p>
                                                                    <span class="text-muted fs-12">Member</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                                                <div class="card custom-card ">
                                                    <div class="card-body"> 
                                                        <div class="text-center">
                                                            <span class="avatar avatar-xxxl rounded">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div class="d-flex  text-center justify-content-between mt-1 mb-3">
                                                            <div class="flex-fill">
                                                                <p class="mb-0 fw-semibold fs-16 text-truncate max-w-150 mx-auto">
                                                                    <a href="{{url('profile')}}">Paul Rudd</a>
                                                                </p>
                                                                <p class="mb-0 fs-12 text-muted text-truncate max-w-150 mx-auto">Paulrude765@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-facebook-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-twitter-line fw-bold"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                                    <i class="ri-github-line fw-bold"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-block-start-dashed text-center p-0">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="d-flex p-3 border-end">
                                                                <div class="text-center ">
                                                                    <p class="fw-semibold mb-0">Projects</p>
                                                                    <span class="text-muted fs-12">110</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex p-3">
                                                                <div class="text-center">
                                                                    <p class="fw-semibold mb-0">Position</p>
                                                                    <span class="text-muted fs-12">Member</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start: pagination -->
                                        <div class="float-end mb-4 ms-auto">
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
                                                        <a class="page-link" href="javascript:void(0);">
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
                                        <!-- End: pagination -->
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="team-groups">
                                        <div class="card custom-card">
                                            <div class="card-header d-flex align-items-center justify-content-between">
                                                <h6 class="fw-semibold mb-0">All Teams</h6> 
                                                <div>
                                                    <button class="btn btn-sm btn-primary-light" data-bs-toggle="modal"
                                                    data-bs-target="#create-team">Create Team<i class="ri-add-line ms-1 align-middle d-inline-flex"></i></button>
                                                    <div class="modal fade" id="create-team" tabindex="-1" aria-labelledby="create-teamLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title" id="create-teamLabel">Create Team</h6>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body px-4">
                                                                    <div class="row gy-3">
                                                                        <div class="col-xl-12">
                                                                            <label for="team-name" class="form-label">Team Name</label>
                                                                            <input type="text" class="form-control" id="team-name" placeholder="Enter Name">
                                                                        </div>
                                                                        <div class="col-xl-12">
                                                                            <label class="form-label">Maximum Team Limit</label>
                                                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                                                <option value="10" selected>10</option>
                                                                                <option value="20">20</option>
                                                                                <option value="30">30</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-sm btn-primary">Create</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="teams-nav" id="teams-nav">
                                                    <ul class="list-unstyled mb-0 mt-2">
                                                        <li class="pb-0">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="fs-10 fw-semibold mb-2 text-muted">TEAM UI</div>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Member">
                                                                    <button class="btn btn-icon btn-sm btn-success-light btn-wave" data-bs-toggle="modal" data-bs-target="#create-teamui-mem"><i class="ri-add-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded online">
                                                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="" class="rounded-circle">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Angelica Hale</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded offline">
                                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Mona Magore</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            8 min
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded online">
                                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Mark Wains</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded online">
                                                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Alex Carey</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded offline">
                                                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Monika Karen</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            24 mins
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="pb-0">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="fs-10 fw-semibold mb-2 text-muted">TEAM REACT</div>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Member">
                                                                    <button class="btn btn-icon btn-sm btn-success-light btn-wave" data-bs-toggle="modal" data-bs-target="#create-teamreact-mem"><i class="ri-add-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded online">
                                                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Matthew Ray</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded online">
                                                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Melissa Blue</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded online">
                                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Brenda Sams</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded offline">
                                                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Muhammed Kher</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            13 mins
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded online">
                                                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Dorga Boavan</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded offline">
                                                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Yashna Polana</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            19 mins
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="pb-0">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="fs-10 fw-semibold mb-2 text-muted">TEAM TESTING</div>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Member">
                                                                    <button class="btn btn-icon btn-sm btn-success-light btn-wave" data-bs-toggle="modal" data-bs-target="#create-teamtesting-mem"><i class="ri-add-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded online">
                                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Jason Smith</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded offline">
                                                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Sasha Hops</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            21 mins
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded online">
                                                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Mark Zaker</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            38 mins
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded online">
                                                                            <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Suarez Adam</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2 d-flex align-items-center">
                                                                        <span class="avatar avatar-sm avatar-rounded offline">
                                                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span>Kiara Advensh</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fs-10 fw-semibold text-muted">
                                                                            1 hr 
                                                                        </span>
                                                                    </div>
                                                                </div>
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
                    <!-- END APP CONTENT -->

                    <!-- TEAM UI MODAL -->
                    <div class="modal fade" id="create-teamui-mem" tabindex="-1" aria-labelledby="create-teamuiLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="create-teamuiLabel">Add Member</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <label for="team-name3" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="team-name3" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- END TEAM UI MODAL -->

                    <!-- TEAM REACT MODAL -->
                    <div class="modal fade" id="create-teamreact-mem" tabindex="-1" aria-labelledby="create-teamreactLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="create-teamreactLabel">Add Member</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <label for="team-name1" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="team-name1" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- END TEAM REACT MODAL -->

                    <!-- TEAM TESTING MODAL -->
                    <div class="modal fade" id="create-teamtesting-mem" tabindex="-1" aria-labelledby="create-teamtestingLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="create-teamtestingLabel">Add Member</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body px-4">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <label for="team-name2" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="team-name2" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- END TEAM TESTING MODAL -->

@endsection

@section('scripts')
 
        <!-- INTERNAL TEAM JS -->
        @vite('resources/assets/js/team.js')
        

@endsection