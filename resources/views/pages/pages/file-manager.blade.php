@extends('layouts.master')

@section('styles')

        <!-- FILEPOND CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">File Manager</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">File Manager</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">File Manager</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">
                            <div class="file-manager-container p-2 gap-4 d-sm-flex">
                                <div class="file-manager-navigation">
                                    <div class="d-flex align-items-center justify-content-between w-100 p-3 border-bottom">
                                        <div>
                                            <h6 class="fw-semibold mb-0">File Manager</h6>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-settings-3-line"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Hidden Files</a></li>
                                                <li><a class="dropdown-item border-bottom" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <div class="input-group">
                                            <input type="text" class="form-control " placeholder="Search Files" aria-describedby="button-addon2">
                                            <button class="btn btn-primary" type="button" id="button-addon2"><i class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled files-main-nav" id="files-main-nav">
                                            <li class="active files-type">
                                                <a href="javascript:void(0)">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ri-folder-2-line fs-16"></i>
                                                        </div>
                                                        <span class="flex-fill text-nowrap">
                                                            My Files
                                                        </span>
                                                        <span class="badge bg-primary">322</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="files-type">
                                                <a href="javascript:void(0)">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ri-star-s-line fs-16"></i>
                                                        </div>
                                                        <span class="flex-fill text-nowrap">
                                                            Favourites
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="files-type">
                                                <a href="javascript:void(0)">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ri-share-forward-line fs-16"></i>
                                                        </div>
                                                        <span class="flex-fill text-nowrap">
                                                            Shared Files
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="files-type">
                                                <a href="javascript:void(0)">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ri-delete-bin-line fs-16"></i>
                                                        </div>
                                                        <span class="flex-fill text-nowrap">
                                                            Recycle Bin
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="files-type">
                                                <a href="javascript:void(0)">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ri-history-fill fs-16"></i>
                                                        </div>
                                                        <span class="flex-fill text-nowrap">
                                                            Recent Files
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="files-type">
                                                <a href="javascript:void(0)">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ri-settings-3-line fs-16"></i>
                                                        </div>
                                                        <span class="flex-fill text-nowrap">
                                                            Settings
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="files-type">
                                                <a href="javascript:void(0)">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ri-questionnaire-line fs-16"></i>
                                                        </div>
                                                        <span class="flex-fill text-nowrap">
                                                            Help Center
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="files-type">
                                                <a href="javascript:void(0)">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <i class="ri-folder-line fs-16"></i>
                                                        </div>
                                                        <span class="flex-fill text-nowrap">
                                                            Version
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <h6 class="mt-3 mb-0 ">Storage</h6>
                                            </li>
                                            <li class="align-items-center justify-content-center">
                                                <div class="">
                                                    <div id="filestore"></div>
                                                </div>
                                                <div class="d-flex justify-content-center border rounded-2">
                                                    <div class="d-flex p-4 border-end">
                                                        <div class="text-center">
                                                            <p class="mb-1 text-muted"> <i class="bx bxs-circle text-primary fs-13  me-1"></i> Space Used </p>
                                                            <h5 class="mb-0 text-dark op-9">350GB </h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex p-4">
                                                        <div class="text-center">
                                                            <p class="mb-1 text-muted"> <i class="bx bxs-circle text-light fs-13  me-1"></i> Free Space</p>
                                                            <h5 class=" mb-0 text-dark op-9">150GB</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="file-manager-folders">
                                    <div class="d-sm-flex p-3 align-items-center justify-content-between border-bottom gap-2">
                                        <div>
                                            <h6 class="fw-semibold mb-0">Folders</h6>
                                        </div>
                                        <div class="d-flex mt-3 mt-sm-0">
                                            <button id="folders-close-btn" class="d-sm-none d-block btn btn-icon btn-sm btn-danger-light me-1"> <i class="ri-close-fill"></i> </button>
                                            <button class="btn btn-sm btn-primary d-flex align-items-center justify-content-center btn-wave waves-light me-1"
                                                data-bs-toggle="modal" data-bs-target="#create-folder">
                                                <i class="ri-add-circle-line align-middle me-1"></i>Create Folder
                                            </button>
                                            <div class="modal fade" id="create-folder" tabindex="-1"
                                                            aria-labelledby="create-folder" data-bs-keyboard="false"
                                                            aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="staticBackdropLabel">Create Folder
                                                            </h6>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <label for="create-folder1" class="form-label">Folder Name</label>
                                                            <input type="text" class="form-control" id="create-folder1" placeholder="Folder Name">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-sm btn-icon btn-light"
                                                                data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                            <button type="button" class="btn btn-sm btn-success">Create</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-sm btn-outline-secondary d-flex align-items-center justify-content-center btn-wave waves-light"
                                                data-bs-toggle="modal" data-bs-target="#create-file">
                                                <i class="ri-add-circle-line align-middle me-1"></i>Create File
                                            </button>
                                            <div class="modal fade" id="create-file" tabindex="-1"
                                                            aria-labelledby="create-file" data-bs-keyboard="false"
                                                            aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="staticBackdropLabel1">Create File
                                                            </h6>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <label for="create-file1" class="form-label">File Name</label>
                                                            <input type="text" class="form-control" id="create-file1" placeholder="File Name">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-sm btn-icon btn-light"
                                                                data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                            <button type="button" class="btn btn-sm btn-success">Create</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 file-folders-container" id="file-folders-container">
                                        <div class="d-flex mb-3 align-items-center justify-content-between">
                                            <p class="mb-0 fw-semibold fs-14">Fileupload</p>
                                        </div>
                                        <div class="mb-3">
                                            <input type="file" class="multiple-filepond bd-gray-100 text-primary" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                        </div>
                                        <div class="d-flex mb-3 align-items-center justify-content-between">
                                            <p class="mb-0 fw-semibold fs-14">My Files</p>
                                            <button class="btn btn-sm btn-primary-light">View All</button>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                                                <div class="card custom-card shadow-none border border-dashed-primary">
                                                    <div class="card-body p-3 text-center">
                                                        <a href="javascript:void(0);">
                                                            <div class="justify-content-between">
                                                                <div class="file-format-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path opacity="0.3" d="M19 2H5a3.009 3.009 0 0 0-3 3v8.86l3.88-3.88a3.075 3.075 0 0 1 4.24 0l2.871 2.887.888-.888a3.008 3.008 0 0 1 4.242 0L22 15.86V5a3.009 3.009 0 0 0-3-3z"/><path opacity="1" d="M10.12 9.98a3.075 3.075 0 0 0-4.24 0L2 13.86V19a3.009 3.009 0 0 0 3 3h14c.815 0 1.595-.333 2.16-.92L10.12 9.98z"/><path opacity="0.1" d="m22 15.858-3.879-3.879a3.008 3.008 0 0 0-4.242 0l-.888.888 8.165 8.209c.542-.555.845-1.3.844-2.076v-3.142z"/></svg>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-semibold mb-1">
                                                                        Images
                                                                    </span>
                                                                    <span class="fs-10 d-block text-muted">
                                                                        214.32MB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                                                <div class="card custom-card shadow-none border border-dashed-primary">
                                                    <div class="card-body p-3 text-center">
                                                        <a href="javascript:void(0);">
                                                            <div class="justify-content-between">
                                                                <div class="file-format-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-secondary" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path opacity="0.3" d="M14 18H5a3.003 3.003 0 0 1-3-3V9a3.003 3.003 0 0 1 3-3h9a3.003 3.003 0 0 1 3 3v6a3.003 3.003 0 0 1-3 3z"/><path opacity="1" d="M21.895 7.554a1 1 0 0 0-1.342-.449l-3.564 1.783c.001.038.01.073.011.112v6c0 .039-.01.074-.011.112l3.564 1.783A1 1 0 0 0 22 16V8a1 1 0 0 0-.105-.446z"/></svg>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-semibold mb-1">
                                                                        Videos
                                                                    </span>
                                                                    <span class="fs-10 d-block text-muted">
                                                                        1.45GB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                                                <div class="card custom-card shadow-none border border-dashed-primary">
                                                    <div class="card-body p-3 text-center">
                                                        <a href="javascript:void(0);">
                                                            <div class="justify-content-between">
                                                                <div class="file-format-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-warning" viewBox="0 0 24 24"><path opacity="0.3" d="m20 9-7-7H7a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3Z"/><path opacity="1" d="M20 9h-5a2 2 0 0 1-2-2V2zm-5 9H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zm0-4H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zm-5-4H9a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2z"/></svg>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-semibold mb-1">
                                                                        Docs
                                                                    </span>
                                                                    <span class="fs-10 d-block text-muted">
                                                                        432.29KB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                                                <div class="card custom-card shadow-none border border-dashed-primary">
                                                    <div class="card-body p-3 text-center">
                                                        <a href="javascript:void(0);">
                                                            <div class="justify-content-between">
                                                                <div class="file-format-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-info" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path opacity="0.3" d="M6 21H3a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h3a3.003 3.003 0 0 1 3 3v2a3.003 3.003 0 0 1-3 3zm15 0h-3a3.003 3.003 0 0 1-3-3v-2a3.003 3.003 0 0 1 3-3h3a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1z"/><path opacity="1" d="M12 3C6.477 3 2 7.477 2 13v1a1 1 0 0 1 1-1h1a8 8 0 0 1 16 0h1a1 1 0 0 1 1 1v-1c0-5.523-4.477-10-10-10z"/></svg>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-semibold mb-1">
                                                                        Music
                                                                    </span>
                                                                    <span class="fs-10 d-block text-muted">
                                                                        289MB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                                                <div class="card custom-card shadow-none border border-dashed-primary">
                                                    <div class="card-body p-3 text-center">
                                                        <a href="javascript:void(0);">
                                                            <div class="justify-content-between">
                                                                <div class="file-format-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-success" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><circle cx="12" cy="4" r="2" opacity="0.3"/><path fill="#b7d7fd" d="M12 6a1.98 1.98 0 0 1-1-.277V8a1 1 0 0 0 2 0V5.723A1.98 1.98 0 0 1 12 6z"/><path opacity="0.3" d="M17 22H7a3.003 3.003 0 0 1-3-3v-9a3.003 3.003 0 0 1 3-3h10a3.003 3.003 0 0 1 3 3v9a3.003 3.003 0 0 1-3 3z"/><path opacity="1" d="M14.97 12.243 16.28 7H7.72l1.31 5.243A1 1 0 0 0 10 13h4a1 1 0 0 0 .97-.757z"/><path fill="#b7d7fd" d="M2 18a1 1 0 0 1-1-1v-2a1 1 0 1 1 2 0v2a1 1 0 0 1-1 1zm20 0a1 1 0 0 1-1-1v-2a1 1 0 1 1 2 0v2a1 1 0 0 1-1 1z"/><circle cx="9" cy="16" r="1" opacity="1"/><circle cx="15" cy="16" r="1" opacity="1"/></svg>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-semibold mb-1">
                                                                        Apps
                                                                    </span>
                                                                    <span class="fs-10 d-block text-muted">
                                                                        12.56GB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                                                <div class="card custom-card shadow-none border border-dashed-primary">
                                                    <div class="card-body p-3 text-center">
                                                        <a href="javascript:void(0);">
                                                            <div class="justify-content-between">
                                                                <div class="file-format-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-danger" viewBox="0 0 24 24"><path opacity="1" d="M15.707 13.293a1 1 0 0 0-1.414 0L13 14.586V3a1 1 0 0 0-2 0v11.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l3 3a1 1 0 0 0 1.414 0l3-3a1 1 0 0 0 0-1.414Z"/><path opacity="0.3" d="M18 9h-5v5.586l1.293-1.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L11 14.586V9H6a3.003 3.003 0 0 0-3 3v7a3.003 3.003 0 0 0 3 3h12a3.003 3.003 0 0 0 3-3v-7a3.003 3.003 0 0 0-3-3Z"/></svg>
                                                                </div>
                                                                <div>
                                                                    <span class="fw-semibold mb-1">
                                                                        Downloads
                                                                    </span>
                                                                    <span class="fs-10 d-block text-muted">
                                                                        3.12GB
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3 align-items-center justify-content-between">
                                            <p class="mb-0 fw-semibold fs-14">Folders</p>
                                            <button class="btn btn-sm btn-primary-light">View All</button>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                <div class="card border custom-card shadow-none">
                                                    <div class="card-body ">
                                                        <div class="mb-4 folder-svg-container d-flex justify-content-between align-items-top">
                                                            <a href="{{url('file-details')}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-warning" data-name="Layer 1" viewBox="0 0 24 24"><path opacity="1" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"/><path opacity="0.3" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"/></svg>
                                                            </a>
                                                            <div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-icon btn-light btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                            <a href="{{url('file-details')}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-success" data-name="Layer 1" viewBox="0 0 24 24"><path opacity="1" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"/><path opacity="0.3" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"/></svg>
                                                            </a>
                                                            <div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-icon btn-light btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                            <a href="{{url('file-details')}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-pink" data-name="Layer 1" viewBox="0 0 24 24"><path opacity="1" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"/><path opacity="0.3" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"/></svg>
                                                            </a>
                                                            <div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-icon btn-light btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                            <a href="{{url('file-details')}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-info" data-name="Layer 1" viewBox="0 0 24 24"><path opacity="1" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"/><path opacity="0.3" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"/></svg>
                                                            </a>
                                                            <div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-icon btn-light btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                        <div class="row">
                                            <div class="col-xxl-4 col-xl-5 col-lg-12 col-md-12">
                                                <div class="d-flex mb-3 align-items-center justify-content-between mt-3">
                                                    <p class="mb-0 fw-semibold fs-14">Storage</p>
                                                </div>
                                                <div class="">
                                                    <ul class="mt-4">
                                                        <li class="mb-4">
                                                            <div class="d-flex mb-4 align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-md br-5 bg-warning-transparent text-warning"><i class="fe fe-box"></i></span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="d-flex justify-content-between">
                                                                        <h6 class="fw-semibold">
                                                                            Internal Storage
                                                                        </h6>
                                                                        <div>
                                                                            <p class="mb-0 fs-13 text-muted">
                                                                                <i class="fe fe-arrow-up-right me-1 text-success brround d-inline-flex"></i>40Gb / 500GB
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-xs">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="mb-4">
                                                            <div class="d-flex mb-4 align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-md br-5 bg-pink-transparent text-pink"><i class="fe fe-layers"></i></span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="d-flex justify-content-between">
                                                                        <h6 class="fw-semibold">
                                                                            External Storage
                                                                        </h6>
                                                                        <div>
                                                                            <p class="mb-0 fs-13 text-muted">
                                                                                <i class="fe fe-arrow-up-right me-1 text-success brround d-inline-flex"></i>3Gb / 8GB
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-xs">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-pink" style="width: 60%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="mb-4">
                                                            <div class="d-flex mb-4 align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-md br-5 bg-info-transparent text-info"><i class="fe fe-cloud"></i></span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="d-flex justify-content-between">
                                                                        <h6 class="fw-semibold">
                                                                            Cloud Storage
                                                                        </h6>
                                                                        <div>
                                                                            <p class="mb-0 fs-13 text-muted">
                                                                                <i class="fe fe-arrow-up-right me-1 text-success brround d-inline-flex"></i>10Gb / 176GB
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-xs">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 60%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex mb-4 align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-md br-5 bg-primary-transparent text-primary"><i class="fe fe-grid"></i></span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <div class="d-flex justify-content-between">
                                                                        <h6 class="fw-semibold">
                                                                            Other Storage
                                                                        </h6>
                                                                        <div>
                                                                            <p class="mb-0 fs-13 text-muted">
                                                                                <i class="fe fe-arrow-up-right me-1 text-success brround d-inline-flex"></i>70Gb / 16GB
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-xs">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 90%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xxl-8 col-xl-7 col-lg-12 col-md-12">
                                                <div class="d-flex mb-3 align-items-center justify-content-between">
                                                    <p class="mb-0 fw-semibold fs-14">Recents</p>
                                                    <button class="btn btn-sm btn-primary-light">View All</button>
                                                </div>
                                                <div class="table-responsive border border-bottom-0">
                                                    <table class="table text-nowrap table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">File Name</th>
                                                                <th scope="col">Category</th>
                                                                <th scope="col">Size</th>
                                                                <th scope="col">Date Modified</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-xs">
                                                                                <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="fs-13">
                                                                            VID-00292312-SPK823.mp4
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <td>Videos</td>
                                                                <td>87MB</td>
                                                                <td>22,Nov 2022</td>
                                                                <td>
                                                                    <div class="hstack gap-2 fs-15">
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light rounded-pill"><i class="ri-eye-line"></i></a>
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-xs">
                                                                                <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="fs-13">
                                                                            IMG-09123878-SPK734.jpeg
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <td>Images</td>
                                                                <td>1.35MB</td>
                                                                <td>25,Nov 2022</td>
                                                                <td>
                                                                    <div class="hstack gap-2 fs-15">
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light rounded-pill"><i class="ri-eye-line"></i></a>
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="table-active">
                                                                <th scope="row">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-xs">
                                                                                <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="fs-13">
                                                                            AMB-2012.zip
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <td>Archives</td>
                                                                <td>422KB</td>
                                                                <td>23,Nov 2022</td>
                                                                <td>
                                                                    <div class="hstack gap-2 fs-15">
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light rounded-pill"><i class="ri-eye-line"></i></a>
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="me-2">
                                                                            <span class="avatar avatar-xs">
                                                                                <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="fs-13">
                                                                            AUD-1002-2012.mp3
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <td>Archives</td>
                                                                <td>422KB</td>
                                                                <td>23,Nov 2022</td>
                                                                <td>
                                                                    <div class="hstack gap-2 fs-15">
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light rounded-pill"><i class="ri-eye-line"></i></a>
                                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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

        <!-- FILEPOND JS -->
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- INTERNAL FILE STORE JS -->
        @vite('resources/assets/js/file-store.js')


        <!-- INTERNAL FILE MANAGER JS -->
        @vite('resources/assets/js/file-manager.js')


@endsection