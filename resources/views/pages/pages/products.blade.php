@extends('layouts.master')

@section('styles')

        <!-- NOUISLIDER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/nouislider/nouislider.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Products</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">
                            <div class="my-4">

                                <!-- Start::row-1 -->
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-body p-0">
                                                <nav class="navbar navbar-expand-xxl bg-white">
                                                    <div class="container-fluid">
                                                        <a class="navbar-brand" href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="" class="d-inline-block align-text-top">
                                                        </a>
                                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#navbarSupportedContent"
                                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                                            aria-label="Toggle navigation">
                                                            <span class="navbar-toggler-icon"></span>
                                                        </button>
                                                        <div class="collapse navbar-collapse navbar-justified" id="navbarSupportedContent">
                                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-xxl-center">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" aria-current="page" href="javascript:void(0);">Men</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="javascript:void(0);">Women</a>
                                                                </li>
                                                                <li class="nav-item dropdown">
                                                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        Kids
                                                                    </a>
                                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                                        </li>
                                                                        <li>
                                                                            <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                                                here</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Today Deals</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Electronics</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Home & Kitchen</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Fashion</a>
                                                                </li>
                                                                <li class="nav-item mb-xxl-0 mb-2 ms-xxl-0 ms-3">
                                                                    <div class="btn-group d-xxl-flex d-block">
                                                                        <button class="btn btn-sm btn-primary-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            Sort By
                                                                        </button>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Featureed</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Price: High to Low</a></li>
                                                                            <li><a class="dropdown-item active" href="javascript:void(0);">Price: Low to High</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0);">Ratings</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="d-flex" role="search">
                                                                <input class="form-control form-control-sm me-2" type="search" placeholder="Search"
                                                                    aria-label="Search">
                                                                <button class="btn btn-sm btn-light"
                                                                    type="submit">Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12">
                                        <div class="card custom-card products-navigation-card">
                                            <div class="card-body p-0">
                                                <div class="p-4 border-bottom">
                                                    <p class="fw-semibold mb-0 text-muted">CATEGORIES</p>
                                                    <div class="px-2 py-3 pb-0">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="electronics">
                                                            <label class="form-check-label" for="electronics">
                                                                Electronics
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">2,712</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="Accesories">
                                                            <label class="form-check-label" for="Accesories">
                                                                Accesories
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">536</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="clothing" checked>
                                                            <label class="form-check-label" for="clothing">
                                                                Clothing
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">18,289</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="fashion">
                                                            <label class="form-check-label" for="fashion">
                                                                Fashion
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">3,453</span>
                                                        </div>
                                                        <div class="collapse" id="category-more">
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="furniture">
                                                                <label class="form-check-label" for="furniture">
                                                                    Furniture
                                                                </label>
                                                                <span class="badge bg-light text-muted float-end">7,165</span>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="footwear">
                                                                <label class="form-check-label" for="footwear">
                                                                    Footwear
                                                                </label>
                                                                <span class="badge bg-light text-muted float-end">5,964</span>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="mobiles">
                                                                <label class="form-check-label" for="mobiles">
                                                                    Mobiles
                                                                </label>
                                                                <span class="badge bg-light text-muted float-end">2,123</span>
                                                            </div>
                                                        </div>
                                                        <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#category-more" role="button" aria-expanded="false" aria-controls="category-more">MORE</a>
                                                    </div>
                                                </div>
                                                <div class="p-4  border-bottom">
                                                    <p class="fw-semibold mb-0 text-muted">PRICE</p>
                                                    <div class="px-2 py-3 pb-0">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="low">
                                                            <label class="form-check-label" for="low">
                                                                $0 - $599
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">22,873</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="low1" checked>
                                                            <label class="form-check-label" for="low1">
                                                                $599 - $1299
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">11,345</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="medium">
                                                            <label class="form-check-label" for="medium">
                                                                $1,299 - $2,199
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">6,987</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="high">
                                                            <label class="form-check-label" for="high">
                                                                $2,199 - $3,499
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">5,236</span>
                                                        </div>
                                                        <div class="form-check mb-4">
                                                            <input class="form-check-input" type="checkbox" value="" id="high1">
                                                            <label class="form-check-label" for="high1">
                                                                $3,499 & Above
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">3,735</span>
                                                        </div>
                                                        <p class="fw-semibold mb-0 text-muted">PRICE RANGE</p>
                                                        <div class="mt-5" id="product-price-range"></div>
                                                    </div>
                                                </div>
                                                <div class="p-4 border-bottom">
                                                    <p class="fw-semibold mb-0 text-muted">BRANDS</p>
                                                    <div class="px-2 py-3 pb-0">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="Jimmy-Lolfiger" checked>
                                                            <label class="form-check-label" for="Jimmy-Lolfiger">
                                                                Money plant
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">512</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="dapzem1" checked>
                                                            <label class="form-check-label" for="dapzem1">
                                                                Dapzem & Co
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">2,186</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="denim-winjo1" checked>
                                                            <label class="form-check-label" for="denim-winjo1">
                                                                Light color lilly flowers
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">734</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="Louie-Phillippe">
                                                            <label class="form-check-label" for="Louie-Phillippe">
                                                                Louie Phillippe
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">16</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="garage-clothing">
                                                            <label class="form-check-label" for="garage-clothing">
                                                                Garage & Co
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">1,432</span>
                                                        </div>
                                                        <div class="collapse" id="brands-more">
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="blueberry" checked>
                                                                <label class="form-check-label" for="blueberry">
                                                                    Blueberry & Co
                                                                </label>
                                                                <span class="badge bg-light text-muted float-end">257</span>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="aus-polo-assn" checked>
                                                                <label class="form-check-label" for="aus-polo-assn">
                                                                    Cactus plants
                                                                </label>
                                                                <span class="badge bg-light text-muted float-end">1,845</span>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="denim-corp" checked>
                                                                <label class="form-check-label" for="denim-corp">
                                                                    Denim Corp
                                                                </label>
                                                                <span class="badge bg-light text-muted float-end">5,893</span>
                                                            </div>
                                                        </div>
                                                        <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#brands-more" role="button" aria-expanded="false" aria-controls="brands-more">MORE</a>
                                                    </div>
                                                </div>
                                                <div class="p-4">
                                                    <p class="fw-semibold mb-0 text-muted">SIZES</p>
                                                    <div class="px-2 py-3 pb-0">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="extra-small">
                                                            <label class="form-check-label" for="extra-small">
                                                                Extra Small (XS)
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">23,156</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="small">
                                                            <label class="form-check-label" for="small">
                                                                Small (SM)
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">15,632</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="medium1">
                                                            <label class="form-check-label" for="medium1">
                                                                Medium (MD)
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">15,032</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="large" checked>
                                                            <label class="form-check-label" for="large">
                                                                Large (L)
                                                            </label>
                                                            <span class="badge bg-light text-muted float-end">7,154</span>
                                                        </div>
                                                        <div class="collapse" id="sizes-more">
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="extra-large">
                                                                <label class="form-check-label" for="extra-large">
                                                                    Extra Large (XL)
                                                                </label>
                                                                <span class="badge bg-light text-muted float-end">5,946</span>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="double-extralarge">
                                                                <label class="form-check-label" for="double-extralarge">
                                                                    XXL
                                                                </label>
                                                                <span class="badge bg-light text-muted float-end">3,267</span>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="triple-extralarge">
                                                                <label class="form-check-label" for="triple-extralarge">
                                                                    XXL
                                                                </label>
                                                                <span class="badge bg-light text-muted float-end">578</span>
                                                            </div>
                                                        </div>
                                                        <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#sizes-more" role="button" aria-expanded="false" aria-controls="sizes-more">MORE</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-12">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                        <a href="{{url('product-details')}}" class="product-image-1">
                                                            <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" class="card-img" alt="...">
                                                        </a>
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
                                                                <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/10.png')}}" class="card-img" alt="...">
                                                            </a>
                                                            <div class="ms-3 mt-2 mt-sm-0">
                                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Light color lilly flowers</h5>
                                                                <p class="product-description fs-13 text-muted mb-0">Light color lilly flowers with pots</p>
                                                                <h4 class="mb-1 fw-semibold"><span>$6,900<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$2,799</span></span></h4>
                                                                <p class="badge bg-success-transparent fs-11 rounded-1 mb-0">Offer Price $599</p>
                                                                    <span class="badge bg-warning-transparent rounded-1">4.2
                                                                        <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                                    </span>
                                                                    <span class="text-muted">(13,456)</span>
                                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                                Free Delivery
                                                                </p>

                                                                <div class="mt-2">
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/4.png')}}" class="card-img" alt="...">
                                                            </a>
                                                            <div class="ms-3 mt-2 mt-sm-0">
                                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Ugoa big leaf</h5>
                                                                <p class="product-description fs-13 text-muted mb-0">Ugoa green color big leaf  with pot</p>
                                                                <h4 class="mb-1 fw-semibold"><span>$4,900<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$4,799</span></span></h4>
                                                                <p class="badge bg-success-transparent fs-11 rounded-1 mb-0">Offer Price $599</p>
                                                                <span class="badge bg-warning-transparent rounded-1">4.2
                                                                    <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                                </span>
                                                                <span class="text-muted">(3,456)</span>
                                                                <div class="mt-2">
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" class="card-img" alt="...">
                                                            </a>
                                                            <div class="ms-3 mt-2 mt-sm-0">
                                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Money plant</h5>
                                                                <p class="product-description fs-13 text-muted mb-0"> Money plant with haning pot</p>
                                                                <h4 class="mb-1 fw-semibold"><span>$6,900<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$2,799</span></span></h4>
                                                                <p class="badge bg-success-transparent fs-11 rounded-1 mb-0">Offer Price $599</p>
                                                                    <span class="badge bg-warning-transparent rounded-1">4.3
                                                                        <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                                    </span>
                                                                    <span class="text-muted">(10,456)</span>
                                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                                Free Delivery
                                                                </p>

                                                                <div class="mt-2">
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/6.png')}}" class="card-img" alt="...">
                                                            </a>
                                                            <div class="ms-3 mt-2 mt-sm-0">
                                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Cactus plants</h5>
                                                                <p class="product-description fs-13 text-muted mb-0">Cambo Cactus plants   with diffrent color pots</p>
                                                                <h4 class="mb-1 fw-semibold"><span>$12,900<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$2,799</span></span></h4>
                                                                <p class="badge bg-success-transparent fs-11 rounded-1 mb-0"></p>
                                                                    <span class="badge bg-warning-transparent rounded-1">4.4
                                                                        <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                                    </span>
                                                                    <span class="text-muted">(6,456)</span>
                                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                                    Free Delivery
                                                                </p>
                                                                <div class="mt-2">
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/7.png')}}" class="card-img" alt="...">
                                                            </a>
                                                            <div class="ms-3 mt-2 mt-sm-0">
                                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Cactus plants</h5>
                                                                <p class="product-description fs-13 text-muted mb-0">Cambo Cactus plants   with diffrent color pots</p>
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
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" class="card-img" alt="...">
                                                            </a>
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
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/8.png')}}" class="card-img" alt="...">
                                                            </a>
                                                            <div class="ms-3 mt-2 mt-sm-0">
                                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Red leaf plants</h5>
                                                                <p class="product-description fs-13 text-muted mb-0">Red leaf color plant with pot</p>
                                                                <h4 class="mb-1 fw-semibold"><span>$6,900<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$2,799</span></span></h4>
                                                                <p class="badge bg-success-transparent fs-11 rounded-1 mb-0">Offer Price $599</p>
                                                                    <span class="badge bg-warning-transparent rounded-1">4.2
                                                                        <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                                    </span>
                                                                    <span class="text-muted">(13,456)</span>
                                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                                Free Delivery
                                                                </p>

                                                                <div class="mt-2">
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/9.png')}}" class="card-img" alt="...">
                                                            </a>
                                                            <div class="ms-3 mt-2 mt-sm-0">
                                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Ugoa big leaf</h5>
                                                                <p class="product-description fs-13 text-muted mb-0">Ugoa green color big leaf  with pot</p>
                                                                <h4 class="mb-1 fw-semibold"><span>$4,900<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$4,799</span></span></h4>
                                                                <p class="badge bg-success-transparent fs-11 rounded-1 mb-0">Offer Price $599</p>
                                                                    <span class="badge bg-warning-transparent rounded-1">4.2
                                                                        <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                                    </span>
                                                                    <span class="text-muted">(3,456)</span>
                                                                <div class="mt-2">
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/4.png')}}" class="card-img" alt="...">
                                                            </a>
                                                            <div class="ms-3 mt-2 mt-sm-0">
                                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Money plant</h5>
                                                                <p class="product-description fs-13 text-muted mb-0"> Money plant with haning pot</p>
                                                                <h4 class="mb-1 fw-semibold"><span>$6,900<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$2,799</span></span></h4>
                                                                <p class="badge bg-success-transparent fs-11 rounded-1 mb-0">Offer Price $599</p>
                                                                    <span class="badge bg-warning-transparent rounded-1">4.3
                                                                        <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                                    </span>
                                                                    <span class="text-muted">(10,456)</span>
                                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                                Free Delivery
                                                                </p>

                                                                <div class="mt-2">
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/10.png')}}" class="card-img" alt="...">
                                                            </a>
                                                            <div class="ms-3 mt-2 mt-sm-0">
                                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Cactus plants</h5>
                                                                <p class="product-description fs-13 text-muted mb-0">Cambo Cactus plants   with diffrent color pots</p>
                                                                <h4 class="mb-1 fw-semibold"><span>$12,900<span class="text-muted text-decoration-line-through ms-1  fs-14 op-6">$2,799</span></span></h4>
                                                                <p class="badge bg-success-transparent fs-11 rounded-1 mb-0"></p>
                                                                    <span class="badge bg-warning-transparent rounded-1">4.4
                                                                        <i class="ri-star-s-fill align-middle  d-inline-block"></i>
                                                                    </span>
                                                                    <span class="text-muted">(6,456)</span>
                                                                <p class="fs-11 text-success fw-semibold mb-0 align-items-center">
                                                                    Free Delivery
                                                                </p>
                                                                <div class="mt-2">
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                                <div class="card custom-card product-card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex align-items-center">
                                                            <a href="{{url('product-details')}}" class="product-image-1">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" class="card-img" alt="...">
                                                            </a>
                                                            <div class="ms-3 mt-2 mt-sm-0">
                                                                <h5 class="product-name fs-16 fw-semibold mb-0 align-items-center">Cactus plants</h5>
                                                                <p class="product-description fs-13 text-muted mb-0">Cambo Cactus plants   with diffrent color pots</p>
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
                                                                    <a href="{{url('wishlist')}}" class="btn btn-sm btn-danger-light me-1"><i class="ri-heart-line"></i></a>
                                                                    <a href="{{url('cart')}}" class="btn btn-sm btn-info-light me-1"><i class="ri-shopping-cart-line"></i></a>
                                                                    <a href="{{url('product-details')}}" class="btn btn-sm btn-success-light"><i class="ri-eye-line"></i></a>
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
                    </div>
                    <!-- END APP CONTENT -->
            
@endsection

@section('scripts')

        <!-- NOUISLIDER JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>

        <!-- INTERNAL PRODUCTS JS -->
        @vite('resources/assets/js/products.js')


@endsection