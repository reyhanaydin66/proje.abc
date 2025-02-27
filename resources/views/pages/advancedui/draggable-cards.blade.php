@extends('layouts.master')

@section('styles')

        <!-- DRAGULA CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/dragula/dragula.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Draggable Cards</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Draggable Cards</li>
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
                                <div class="col-xl-6" id="draggable-left">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Card With Fullscreen Button
                                            </div>
                                            <a href="javascript:void(0);" data-bs-toggle="card-fullscreen">
                                                <i class="ri-fullscreen-line"></i>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-text fw-semibold">FullScreen Card</h6>
                                            <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary">Read More</button>
                                        </div>
                                    </div>
                                    <div class="card custom-card card-bg-primary">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="card-body">
                                        <blockquote class="blockquote mb-0 text-center">
                                            <h6>The best and most beautiful things in the world cannot be seen or even touched — they must be felt with the heart..</h6>
                                            <footer class="blockquote-footer mt-3 fs-14 text-fixed-white op-7">Someone famous as <cite title="Source Title">-Helen Keller</cite></footer>
                                        </blockquote>
                                        </div>
                                    </div>
                                    <div class="card custom-card bg-dark overlay-card">
                                        <img src="{{asset('build/assets/images/media/media-35.jpg')}}" class="card-img" alt="...">
                                        <div class="card-img-overlay d-flex flex-column p-0">
                                            <div class="card-header text-fixed-white">
                                                <div class="card-title ">
                                                    Image Overlays Are Awesome!
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-text mb-2 text-fixed-white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                                <div class="card-text text-fixed-white op-7">Last updated 3 mins ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <span class="avatar avatar-md">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="card-text mb-0 fs-14 fw-semibold">Atharva Simon.</p>
                                                    <div class="card-title text-muted fs-12 mb-0">Correspondent Professor</div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card border border-info">
                                        <a href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xl">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="card-text text-info mb-1 fs-14 fw-semibold">Alicia Keys.</p>
                                                    <div class="card-title fs-12 mb-1">Department Of Commerce</div>
                                                    <div class="card-title text-muted fs-11 mb-0">24 Years, Female</div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6" id="draggable-right">
                                    <div class="card custom-card bg-dark overlay-card">
                                        <img src="{{asset('build/assets/images/media/media-36.jpg')}}" class="card-img" alt="...">
                                        <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom">
                                            <div class="card-body">
                                                <div class="card-text text-fixed-white">
                                                    Image Overlays Are Awesome!
                                                </div>
                                                <div class="card-text mb-2 text-fixed-white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                                <div class="card-text text-fixed-white op-7">Last updated 3 mins ago</div>
                                            </div>
                                            <div class="card-footer text-fixed-white">Last updated 3 mins ago</div>
                                        </div>
                                    </div>
                                    <div class="card custom-card card-bg-success">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center w-100">
                                                <div class="me-2">
                                                    <span class="avatar avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div class="">
                                                    <div class="fs-15 fw-semibold">Samantha sid</div>
                                                    <p class="mb-0 text-fixed-white op-7 fs-12">In leave for 1 month</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="text-fixed-white"><i class="bi bi-three-dots-vertical"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Card With Collapse Button
                                            </div>
                                            <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                <i class="ri-arrow-down-s-line fs-18 collapse-open"></i>
                                                <i class="ri-arrow-up-s-line collapse-close fs-18"></i>
                                            </a>
                                        </div>
                                        <div class="collapse show" id="collapseExample">
                                            <div class="card-body">
                                                <h6 class="card-text fw-semibold">Collapsible Card</h6>
                                                <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-primary">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Card With Close Button
                                            </div>
                                            <a href="javascript:void(0);" data-bs-toggle="card-remove">
                                                <i class="ri-close-line fs-18"></i>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-text fw-semibold">Closed Card</h6>
                                            <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary">Read More</button>
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

        <!-- DRAGULA JS -->
        <script src="{{asset('build/assets/libs/dragula/dragula.min.js')}}"></script>

        <!-- INTERNAL DRAGULA JS -->
        @vite('resources/assets/js/draggable-cards.js')
        

@endsection