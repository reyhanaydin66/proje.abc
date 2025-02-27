@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Blog</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-lg my-5 mt-0">

                            <!-- Start::row-1 -->
                            <div class="row">
                                <div class="card custom-card px-0">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Popular Topics
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0">
                                                <a href="javascript:void(0);">
                                                    <div class="card custom-card shadow-none border mb-0">
                                                        <img src="{{asset('build/assets/images/media/media-78.jpg')}}" class="card-img-top" alt="...">
                                                        <div class="card-body py-3">
                                                            <h6 class="card-title fw-semibold text-center mb-0">Animals</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0">
                                                <a href="javascript:void(0);">
                                                    <div class="card custom-card shadow-none border mb-0">
                                                        <img src="{{asset('build/assets/images/media/media-77.jpg')}}" class="card-img-top" alt="...">
                                                        <div class="card-body py-3">
                                                            <h6 class="card-title fw-semibold text-center mb-0">Fashion</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0">
                                                <a href="javascript:void(0);">
                                                    <div class="card custom-card  shadow-none border mb-0">
                                                        <img src="{{asset('build/assets/images/media/media-75.jpg')}}" class="card-img-top" alt="...">
                                                        <div class="card-body py-3">
                                                            <h6 class="card-title fw-semibold text-center mb-0">Food</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0">
                                                <a href="javascript:void(0);">
                                                    <div class="card custom-card  shadow-none border mb-0">
                                                        <img src="{{asset('build/assets/images/media/media-73.jpg')}}" class="card-img-top" alt="...">
                                                        <div class="card-body py-3">
                                                            <h6 class="card-title fw-semibold text-center mb-0">Nature</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0">
                                                <a href="javascript:void(0);">
                                                    <div class="card custom-card  shadow-none border mb-0">
                                                        <img src="{{asset('build/assets/images/media/media-74.jpg')}}" class="card-img-top" alt="...">
                                                        <div class="card-body py-3">
                                                            <h6 class="card-title fw-semibold text-center mb-0">Sports</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0">
                                                <a href="javascript:void(0);">
                                                    <div class="card custom-card  shadow-none border mb-0">
                                                        <img src="{{asset('build/assets/images/media/media-76.jpg')}}" class="card-img-top" alt="...">
                                                        <div class="card-body py-3">
                                                            <h6 class="card-title fw-semibold text-center mb-0">Travel</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-7 col-xl-12 ">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body p-0">
                                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" data-bs-interval="2000">
                                                        <a href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/media-70.jpg')}}" class="d-block w-100" alt="...">
                                                            <div class="carousel-caption blog-caption text-start">
                                                                <p class="mb-2">The agency has a diverse workforce of just under 18,000 civil servants, and works with many more U.S.</p>
                                                                <h6 class="fw-semibold mb-2 text-fixed-white">N.A.S.A</h6>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar avatar-sm avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </span>
                                                                    <div class="fw-semibold">Json Taylor - <span class="fs-11 op-7 fw-normal">12,Dec 2023 - 04:34PM</span></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="2000">
                                                        <a href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/media-71.jpg')}}" class="d-block w-100" alt="...">
                                                            <div class="carousel-caption blog-caption text-start">
                                                                <p class="mb-2">NASA is committed to providing all categories of businesses in both NASA prime contracts and subcontracts. </p>
                                                                <h6 class="fw-semibold mb-2 text-fixed-white">NASA Businesses</h6>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar avatar-sm avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </span>
                                                                    <div class="fw-semibold">Elisha Keens - <span class="fs-11 op-7 fw-normal">23,Dec 2023 - 11:27AM</span></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="2000">
                                                        <a href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/media-72.jpg')}}" class="d-block w-100" alt="...">
                                                            <div class="carousel-caption blog-caption text-start">
                                                                <p class="mb-2">NASA Nelson served in the U.S. Senate for 18 years from Florida space shuttle mission 61-C in 1986.</p>
                                                                <h6 class="fw-semibold mb-2 text-fixed-white">NASA Leadership</h6>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar avatar-sm avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                    </span>
                                                                    <div class="fw-semibold">Melissa Blue - <span class="fs-11 op-7 fw-normal">16,Dec 2023 - 9:45AM</span></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="{{asset('build/assets/images/media/media-44.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <p class="card-text">This is a wider card with supporting text below as a natural .</p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Maria Bose</p>
                                                                        <p class="text-muted fs-10 mb-0">17,Dec 2023 - 12:32</p>
                                                                    </div>
                                                                </div>
                                                                <div class="btn-list">
                                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-thumb-up-line"></i></button>
                                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-chat-2-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="{{asset('build/assets/images/media/media-46.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <p class="card-text">This is a wider card with supporting text below as a natural .</p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Maria Bose</p>
                                                                        <p class="text-muted fs-10 mb-0">17,Dec 2023 - 12:32</p>
                                                                    </div>
                                                                </div>
                                                                <div class="btn-list">
                                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-thumb-up-line"></i></button>
                                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-chat-2-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="{{asset('build/assets/images/media/media-45.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <p class="card-text">This is a wider card with supporting text below as a natural .</p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Arean Bose</p>
                                                                        <p class="text-muted fs-10 mb-0">17,Dec 2023 - 12:32</p>
                                                                    </div>
                                                                </div>
                                                                <div class="btn-list">
                                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-thumb-up-line"></i></button>
                                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-chat-2-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="{{asset('build/assets/images/media/media-29.jpg')}}" class="img-fluid rounded-start h-100 w-100" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-header">
                                                    <div class="card-title">Lorem ipsum dolor sit amet consectetur</div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text">This is a wider card with supporting text below as a natural Beauti Image .</p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold">Alxire Bose</p>
                                                                <p class="text-muted fs-10 mb-0">17,Dec 2023 - 12:32</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-thumb-up-line"></i></button>
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-chat-2-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="row g-0">
                                            <div class="col-md-8">
                                                <div class="card-header">
                                                    <p class="card-title">Lorem ipsum dolor sit amet consectetur</p>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text">This is a wider card with supporting text below as a natural Beauti Image .</p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="" class="">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold">Borene Bose</p>
                                                                <p class="text-muted fs-10 mb-0">17,Dec 2023 - 12:32</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-thumb-up-line"></i></button>
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-chat-2-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{asset('build/assets/images/media/media-31.jpg')}}" class="img-fluid rounded-end h-100 w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/media/media-60.jpg')}}" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="fw-semibold fs-15 text-dark mb-1">Strawberry juice recipe.</p>
                                                    <p class="card-text text-muted mb-3">Want to have something different but healthy to drink? Then look no further!! Strawberry Juice is rich in vitamin C.</p>
                                                    <a href="javascript:void(0);" class="text-primary fw-semibold">Read More<i class="ti ti-arrow-narrow-right fs-15 align-middle fw-semibold ms-1"></i></a>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold">Vraenox Bose</p>
                                                                <p class="text-muted fs-10 mb-0">17,Dec 2023 - 12:32</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-thumb-up-line"></i></button>
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-chat-2-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/media/media-61.jpg')}}" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="fw-semibold fs-15 text-dark mb-1">Night Sky is pleasent to watch.</p>
                                                    <p class="card-text text-muted mb-3">Sky map showing the night sky tonight from any location. What planets are visible tonight? Where is Mars. </p>
                                                    <a href="javascript:void(0);" class="text-primary fw-semibold">Read More<i class="ti ti-arrow-narrow-right fs-15 align-middle fw-semibold ms-1"></i></a>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold">Helsenky</p>
                                                                <p class="text-muted fs-10 mb-0">24,Dec 2023 - 14:21</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-thumb-up-line"></i></button>
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-chat-2-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/media/media-9.jpg')}}" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="fw-semibold fs-15 text-dark mb-1">Is fashion industry growing ?</p>
                                                    <p class="card-text text-muted mb-3">The holographic principle, theorized to be a property of quantum gravity, postulates that the description.</p>
                                                    <a href="javascript:void(0);" class="text-primary fw-semibold">Read More<i class="ti ti-arrow-narrow-right fs-15 align-middle fw-semibold ms-1"></i></a>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold">Jason Mama</p>
                                                                <p class="text-muted fs-10 mb-0">19,Dec 2023 - 15:48</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-thumb-up-line"></i></button>
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-chat-2-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card custom-card">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/media/media-59.jpg')}}" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="fw-semibold fs-15 text-dark mb-1">Raising sun is a blessing to watch ..</p>
                                                    <p class="card-text text-muted mb-3">Rising Sun is a 1993 American buddy cop crime thriller film directed by Philip Kaufman.</p>
                                                    <a href="javascript:void(0);" class="text-primary fw-semibold">Read More<i class="ti ti-arrow-narrow-right fs-15 align-middle fw-semibold ms-1"></i></a>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm avatar-rounded me-2">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 fw-semibold">Stuart Hall</p>
                                                                <p class="text-muted fs-10 mb-0">13,Dec 2023 - 19:08</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-thumb-up-line"></i></button>
                                                            <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm"><i class="ri-chat-2-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-xxl-4 col-lg-12 col-md-12">
                                            <div class="card custom-card">
                                                <div class="card-header d-flex align-items-center justify-content-between">
                                                    <div class="card-title">
                                                        Featured Blogs
                                                    </div>
                                                    <div>
                                                        <span class="badge bg-primary-transparent">32 Blogs</span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="avatar avatar-xl me-3">
                                                                    <img src="{{asset('build/assets/images/media/media-39.jpg')}}" class="img-fluid" alt="...">
                                                                </span>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Samantha Jack</a>
                                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                                        There are many variations of passages of Lorem Ipsum available
                                                                    </p>
                                                                    <span class="text-muted fs-11">24,Nov 2023 - 18:27</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="avatar avatar-xl me-3">
                                                                    <img src="{{asset('build/assets/images/media/media-56.jpg')}}" class="img-fluid" alt="...">
                                                                </span>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Kirsten Sam</a>
                                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                                        Latin words, combined with a handful of model sentence
                                                                    </p>
                                                                    <span class="text-muted fs-11">28,Nov 2023 - 10:45</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="avatar avatar-xl me-3">
                                                                    <img src="{{asset('build/assets/images/media/media-54.jpg')}}" class="img-fluid" alt="...">
                                                                </span>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Jessica Karon</a>
                                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                                        Contrary to popular belief, Lorem Ipsum is not simply random
                                                                    </p>
                                                                    <span class="text-muted fs-11">30,Nov 2023 - 08:32</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="avatar avatar-xl me-3">
                                                                    <img src="{{asset('build/assets/images/media/media-52.jpg')}}" class="img-fluid" alt="...">
                                                                </span>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Broad Stuart</a>
                                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                                        It was popularised in the 1960s with the release of Letraset sheets containing
                                                                    </p>
                                                                    <span class="text-muted fs-11">3,Dec 2023 - 12:56</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item text-center">
                                                            <a href="javascript:void(0);" class="text-primary fw-semibold">Load More<i class="ti ti-arrow-narrow-right fs-15 align-middle fw-semibold ms-1"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-xxl-8 col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card">
                                                        <a href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/media-26.jpg')}}" class="card-img-top" alt="...">
                                                        </a>
                                                        <div class="card-body">
                                                            <p class="fw-semibold fs-15 text-dark mb-1">Features of new car !</p>
                                                            <p class="card-text text-muted mb-3">The holographic principle, theorized to be a property of quantum gravity, postulates that the description.</p>
                                                            <a href="javascript:void(0);" class="text-primary fw-semibold">Read More<i class="ti ti-arrow-narrow-right fs-15 align-middle fw-semibold ms-1"></i></a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Alister Chuk</p>
                                                                        <p class="text-muted fs-10 mb-0">18,Dec 2023 - 12:25</p>
                                                                    </div>
                                                                </div>
                                                                <div class="btn-list">
                                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm m-1"><i class="ri-thumb-up-line"></i></button>
                                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm m-1"><i class="ri-chat-2-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="card custom-card">
                                                        <a href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/media-31.jpg')}}" class="card-img-top" alt="...">
                                                        </a>
                                                        <div class="card-body">
                                                            <p class="fw-semibold fs-15 text-dark mb-1">Beautiful beach on a sunny day !</p>
                                                            <p class="card-text text-muted mb-3">The holographic principle, theorized to be a property of quantum gravity, postulates that the description.</p>
                                                            <a href="javascript:void(0);" class="text-primary fw-semibold">Read More<i class="ti ti-arrow-narrow-right fs-15 align-middle fw-semibold ms-1"></i></a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-sm avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                    </div>
                                                                    <div>
                                                                        <p class="mb-0 fw-semibold">Samantha Nans</p>
                                                                        <p class="text-muted fs-10 mb-0">25,Dec 2023 - 04:25</p>
                                                                    </div>
                                                                </div>
                                                                <div class="btn-list">
                                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm m-1"><i class="ri-thumb-up-line"></i></button>
                                                                    <button aria-label="button" type="button" class="btn btn-icon btn-light btn-sm m-1"><i class="ri-chat-2-line"></i></button>
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