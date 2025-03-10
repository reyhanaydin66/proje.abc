@extends('layouts.master')

@section('styles')

        <!-- SWEETALERTS CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Wishlist</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
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
                                        <div class="card-body d-sm-flex align-items-center justify-content-between">
                                            <div class="fs-15 mb-sm-0 mb-2">Total <span class="badge bg-success">9</span> products are wishlisted</div>
                                            <div class="d-flex" role="search">
                                                <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-sm btn-light" type="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card product-card">
                                        <div class="card-body d-sm-flex align-items-center flex-wrap">
                                            <a href="{{url('product-details')}}" class="whishlist-image mb-2">
                                                <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" class="card-img" alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-line"></i></a>
                                            </div>
                                            <div class="ms-3 mt-2 mt-sm-0">
                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Ugaoo self water plants</h5>
                                                <p class="product-description fs-13 text-muted mb-0">Ugaoo mini plant with self watring</p>
                                                <h4 class="mb-1 fw-semibold"><span>$229<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$1,799</span></span></h4>
                                                <p class="badge bg-secondary-transparent fs-11 rounded-1 mb-0">72% off</p>
                                                <span class="badge bg-warning-transparent rounded-1">4.2
                                                    <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                </span>
                                                <span class="text-muted">(12,456)</span>
                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                Free Delivery
                                                </p>
                                                <div class="mt-2">
                                                    <a href="{{url('cart')}}" class="d-inline-flex btn btn-sm btn-info-light me-2 mb-1"><i class="ri-shopping-cart-line me-2"></i>Move To Cart</a>
                                                    <a href="{{url('product-details')}}" class="d-inline-flex btn btn-sm  btn-success-light mb-1"><i class="ri-eye-line me-2"></i>View Product</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card product-card">
                                        <div class="card-body d-sm-flex align-items-center flex-wrap">
                                            <a href="{{url('product-details')}}" class="whishlist-image mb-2">
                                                <img src="{{asset('build/assets/images/ecommerce/png/2.png')}}" class="card-img" alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-line"></i></a>
                                            </div>
                                            <div class="ms-3 mt-2 mt-sm-0">
                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Red color leaf plant</h5>
                                                <p class="product-description fs-13 text-muted mb-0">Red color leaf plant with big pot</p>
                                                <h4 class="mb-1 fw-semibold"><span>$229<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$4,799</span></span></h4>
                                                <p class="badge bg-secondary-transparent fs-11 rounded-1 mb-0">78% off</p>
                                                <span class="badge bg-warning-transparent rounded-1">4.3
                                                    <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                </span>
                                                <span class="text-muted">(2,456)</span>
                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                Free Delivery
                                                </p>
                                                <div class="mt-2">
                                                    <a href="{{url('cart')}}" class="d-inline-flex btn btn-sm btn-info-light me-2 mb-1"><i class="ri-shopping-cart-line me-2"></i>Move To Cart</a>
                                                    <a href="{{url('product-details')}}" class="d-inline-flex btn btn-sm  btn-success-light mb-1"><i class="ri-eye-line me-2"></i>View Product</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card product-card">
                                        <div class="card-body d-sm-flex align-items-center flex-wrap">
                                            <a href="{{url('product-details')}}" class="whishlist-image mb-2">
                                                <img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" class="card-img" alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-line"></i></a>
                                            </div>
                                            <div class="ms-3 mt-2 mt-sm-0">
                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Lucky Money plant </h5>
                                                <p class="product-description fs-13 text-muted mb-0"> Money plant with haning pot</p>
                                                <h4 class="mb-1 fw-semibold"><span>$229<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$1,799</span></span></h4>
                                                <p class="badge bg-secondary-transparent fs-11 rounded-1 mb-0">98% off</p>
                                                <span class="badge bg-warning-transparent rounded-1">4.3
                                                    <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                </span>
                                                <span class="text-muted">(1,456)</span>
                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                Free Delivery
                                                </p>
                                                <div class="mt-2">
                                                    <a href="{{url('cart')}}" class="d-inline-flex btn btn-sm btn-info-light me-2 mb-1"><i class="ri-shopping-cart-line me-2"></i>Move To Cart</a>
                                                    <a href="{{url('product-details')}}" class="d-inline-flex btn btn-sm  btn-success-light mb-1"><i class="ri-eye-line me-2"></i>View Product</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card product-card">
                                        <div class="card-body d-sm-flex align-items-center flex-wrap">
                                            <a href="{{url('product-details')}}" class="whishlist-image mb-2">
                                                <img src="{{asset('build/assets/images/ecommerce/png/4.png')}}" class="card-img" alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-line"></i></a>
                                            </div>
                                            <div class="ms-3 mt-2 mt-sm-0">
                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Ugoa big leaf </h5>
                                                <p class="product-description fs-13 text-muted mb-0">Ugoa green color big leaf with pot </p>
                                                <h4 class="mb-1 fw-semibold"><span>$229<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$5,799</span></span></h4>
                                                <p class="badge bg-secondary-transparent fs-11 rounded-1 mb-0">98% off</p>
                                                <span class="badge bg-warning-transparent rounded-1">4.3
                                                    <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                </span>
                                                <span class="text-muted">(3,456)</span>
                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                Free Delivery
                                                </p>
                                                <div class="mt-2">
                                                    <a href="{{url('cart')}}" class="d-inline-flex btn btn-sm btn-info-light me-2 mb-1"><i class="ri-shopping-cart-line me-2"></i>Move To Cart</a>
                                                    <a href="{{url('product-details')}}" class="d-inline-flex btn btn-sm  btn-success-light mb-1"><i class="ri-eye-line me-2"></i>View Product</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card product-card">
                                        <div class="card-body d-sm-flex align-items-center flex-wrap">
                                            <a href="{{url('product-details')}}" class="whishlist-image mb-2">
                                                <img src="{{asset('build/assets/images/ecommerce/png/5.png')}}" class="card-img" alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-line"></i></a>
                                            </div>
                                            <div class="ms-3 mt-2 mt-sm-0">
                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Cactus plants</h5>
                                                <p class="product-description fs-13 text-muted mb-0">Mini Cambo Cactus plants with pots</p>
                                                <h4 class="mb-1 fw-semibold"><span>$229<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$7,799</span></span></h4>
                                                <p class="badge bg-secondary-transparent fs-11 rounded-1 mb-0">90% off</p>
                                                <span class="badge bg-warning-transparent rounded-1">4.0
                                                    <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                </span>
                                                <span class="text-muted">(2,456)</span>
                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                Free Delivery
                                                </p>
                                                <div class="mt-2">
                                                    <a href="{{url('cart')}}" class="d-inline-flex btn btn-sm btn-info-light me-2 mb-1"><i class="ri-shopping-cart-line me-2"></i>Move To Cart</a>
                                                    <a href="{{url('product-details')}}" class="d-inline-flex btn btn-sm  btn-success-light mb-1"><i class="ri-eye-line me-2"></i>View Product</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card product-card">
                                        <div class="card-body d-sm-flex align-items-center flex-wrap">
                                            <a href="{{url('product-details')}}" class="whishlist-image mb-2">
                                                <img src="{{asset('build/assets/images/ecommerce/png/6.png')}}" class="card-img" alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-line"></i></a>
                                            </div>
                                            <div class="ms-3 mt-2 mt-sm-0">
                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Cactus plants</h5>
                                                <p class="product-description fs-13 text-muted mb-0">Cambo Cactus plants with diffrent color pots</p>
                                                <h4 class="mb-1 fw-semibold"><span>$229<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$17,799</span></span></h4>
                                                <p class="badge bg-secondary-transparent fs-11 rounded-1 mb-0">85% off</p>
                                                <span class="badge bg-warning-transparent rounded-1">4.3
                                                    <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                </span>
                                                <span class="text-muted">(5,456)</span>
                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                Free Delivery
                                                </p>
                                                <div class="mt-2">
                                                    <a href="{{url('cart')}}" class="d-inline-flex btn btn-sm btn-info-light me-2 mb-1"><i class="ri-shopping-cart-line me-2"></i>Move To Cart</a>
                                                    <a href="{{url('product-details')}}" class="d-inline-flex btn btn-sm  btn-success-light mb-1"><i class="ri-eye-line me-2"></i>View Product</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card product-card">
                                        <div class="card-body d-sm-flex align-items-center flex-wrap">
                                            <a href="{{url('product-details')}}" class="whishlist-image mb-2">
                                                <img src="{{asset('build/assets/images/ecommerce/png/8.png')}}" class="card-img" alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-line"></i></a>
                                            </div>
                                            <div class="ms-3 mt-2 mt-sm-0">
                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Red colored leaf</h5>
                                                <p class="product-description fs-13 text-muted mb-0">Red colored leaf plant with stand </p>
                                                <h4 class="mb-1 fw-semibold"><span>$229<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$16,799</span></span></h4>
                                                <p class="badge bg-secondary-transparent fs-11 rounded-1 mb-0">80% off</p>
                                                <span class="badge bg-warning-transparent rounded-1">4.0
                                                    <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                </span>
                                                <span class="text-muted">(2,456)</span>
                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                Free Delivery
                                                </p>
                                                <div class="mt-2">
                                                    <a href="{{url('cart')}}" class="d-inline-flex btn btn-sm btn-info-light me-2 mb-1"><i class="ri-shopping-cart-line me-2"></i>Move To Cart</a>
                                                    <a href="{{url('product-details')}}" class="d-inline-flex btn btn-sm  btn-success-light mb-1"><i class="ri-eye-line me-2"></i>View Product</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card product-card">
                                            <div class="card-body d-sm-flex align-items-center flex-wrap">
                                                <a href="{{url('product-details')}}" class="whishlist-image mb-2">
                                                    <img src="{{asset('build/assets/images/ecommerce/png/7.png')}}" class="card-img" alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-line"></i></a>
                                                </div>
                                                <div class="ms-3 mt-2 mt-sm-0">
                                                    <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Cambo pots</h5>
                                                    <p class="product-description fs-13 text-muted mb-0">Large Cambo vases for plants</p>
                                                    <h4 class="mb-1 fw-semibold"><span>$15,900<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$1,799</span></span></h4>
                                                    <p class="badge bg-danger-transparent fs-11 rounded-1 mb-0">25% Off</p>
                                                        <span class="badge bg-warning-transparent rounded-1">4.4
                                                            <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                        </span>
                                                        <span class="text-muted">(6,456)</span>
                                                    <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                        Free Delivery
                                                    </p>
                                                    <div class="mt-2">
                                                        <a href="{{url('cart')}}" class="d-inline-flex btn btn-sm btn-info-light me-2 mb-1"><i class="ri-shopping-cart-line me-2"></i>Move To Cart</a>
                                                        <a href="{{url('product-details')}}" class="d-inline-flex btn btn-sm  btn-success-light mb-1"><i class="ri-eye-line me-2"></i>View Product</a>
                                                    </div>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card product-card">
                                        <div class="card-body d-sm-flex align-items-center flex-wrap">
                                            <a href="{{url('product-details')}}" class="whishlist-image mb-2">
                                                <img src="{{asset('build/assets/images/ecommerce/png/2.png')}}" class="card-img" alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-line"></i></a>
                                            </div>
                                            <div class="ms-3 mt-2 mt-sm-0">
                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Red leaf plants</h5>
                                                <p class="product-description fs-13 text-muted mb-0">Red color leaf plant with big pot </p>
                                                <h4 class="mb-1 fw-semibold"><span>$229<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$4,799</span></span></h4>
                                                <p class="badge bg-secondary-transparent fs-11 rounded-1 mb-0">78% off</p>
                                                <span class="badge bg-warning-transparent rounded-1">4.3
                                                    <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                </span>
                                                <span class="text-muted">(2,456)</span>
                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                Free Delivery
                                                </p>
                                                <div class="mt-2">
                                                    <a href="{{url('cart')}}" class="d-inline-flex btn btn-sm btn-info-light me-2 mb-1"><i class="ri-shopping-cart-line me-2"></i>Move To Cart</a>
                                                    <a href="{{url('product-details')}}" class="d-inline-flex btn btn-sm  btn-success-light mb-1"><i class="ri-eye-line me-2"></i>View Product</a>
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
                                            <a class="page-link" href="javascript:void(0);">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a></li>
                                        <li class="page-item d-none d-sm-flex"><a class="page-link" href="javascript:void(0);">17</a></li>
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

        <!-- SWEETALERTS JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- WISHLIST JS -->
        @vite('resources/assets/js/wishlist.js')
        

@endsection