@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Products List</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <!-- Start::row-1 -->
                            <div class="row">   
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Products List
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive mb-4">
                                                <table class="table text-nowrap table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">
                                                                <input class="form-check-input" type="checkbox" id="all-products" value="" aria-label="...">
                                                            </th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Product Id</th>
                                                            <th scope="col">Category</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Seller</th>
                                                            <th scope="col">Stock</th>
                                                            <th scope="col">Gender</th>
                                                            <th scope="col">Published</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="product1" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md bg-light p-1">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fw-semibold">
                                                                        Cactus mini plant with pot
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-primary fs-12">#SPIH1230</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge  bg-info-transparent">Clothing</span>
                                                            </td>
                                                            <td>$1,299</td>
                                                            <td>Apilla.co.in</td>
                                                            <td>
                                                                <span class="badge bg-primary-transparent"> 157</span>
                                                            </td>
                                                            <td>Male</td>
                                                            <td>24,Nov 2022</td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-15">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="product2" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md bg-light p-1">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/2.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fw-semibold">
                                                                    Red leaf mini plant
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-primary fs-12">#SPIH1231</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge  bg-info-transparent">Clothing</span>
                                                            </td>
                                                            <td>$799</td>
                                                            <td>Donzo Company</td>
                                                            <td>
                                                                <span class="badge bg-purple-transparent">3,987</span> 
                                                            </td>
                                                            <td>Male</td>
                                                            <td>18,Nov 2022</td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-15">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="product3" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md bg-light p-1">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/15.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fw-semibold">
                                                                        Sports shoes for men
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-primary fs-12">#SPIH1232</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge  bg-secondary-transparent">Bags</span>
                                                            </td>
                                                            <td>$349</td>
                                                            <td>SlowTrack Company</td>
                                                            <td>
                                                                <span class="badge bg-warning-transparent">765,1</span> 
                                                            </td>
                                                            <td>Male,Female</td>
                                                            <td>21,Oct 2022</td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-15">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="product4" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md bg-light p-1">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fw-semibold">
                                                                    Money plant with hanging pot
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-primary fs-12">#SPIH1233</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge  bg-info-transparent">Clothing</span>
                                                            </td>
                                                            <td>$189</td>
                                                            <td>WoodHill.co.in</td>
                                                            <td>
                                                                <span class="badge bg-danger-transparent">887</span> 
                                                            </td>
                                                            <td>Female</td>
                                                            <td>16,Oct 2022</td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-15">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="product5" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md bg-light p-1">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/4.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fw-semibold">
                                                                        Big leaf good luck plant
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-primary fs-12">#SPIH1233</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge  bg-info-transparent">Clothing</span>
                                                            </td>
                                                            <td>$2,499</td>
                                                            <td>Watches.co.in</td>
                                                            <td>
                                                                <span class="badge bg-success-transparent">987</span> 
                                                            </td>
                                                            <td>Male,Female</td>
                                                            <td>12,Aug 2022</td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-15">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="product6" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md bg-light p-1">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/13.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fw-semibold">
                                                                        Gym shoes for men & women
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-primary fs-12">#SPIH1234</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge  bg-warning-transparent">Watches</span>
                                                            </td>
                                                            <td>$899</td>
                                                            <td>Watches.co.in</td>
                                                            <td>
                                                                <span class="badge bg-info-transparent">876</span> 
                                                            </td>
                                                            <td>Male,Female</td>
                                                            <td>05,Sep 2022</td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-15">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="product7" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md bg-light p-1">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/12.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fw-semibold">
                                                                        Stylish Show plants
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-primary fs-12">#SPIH1235</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge  bg-info-transparent">Clothing</span>
                                                            </td>
                                                            <td>$499</td>
                                                            <td>Louie Philippe</td>
                                                            <td>
                                                                <span class="badge bg-warning-transparent">145</span> 
                                                            </td>
                                                            <td>Female</td>
                                                            <td>18,Nov 2022</td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-15">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="product8" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md bg-light p-1">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/16.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fw-semibold">
                                                                        Shoes for men & women
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-primary fs-12">#SPIH1236</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge  bg-secondary-transparent">Bags</span>
                                                            </td>
                                                            <td>$999</td>
                                                            <td>Kohino.zaps.com</td>
                                                            <td>
                                                                <span class="badge bg-secondary-transparent">357</span> 
                                                            </td>
                                                            <td>Female</td>
                                                            <td>27,Nov 2022</td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-15">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="product9" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="me-2">
                                                                        <span class="avatar avatar-md bg-light p-1">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/23.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="fw-semibold">
                                                                        Appole Watch Series 5
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-primary fs-12">#SPIH1237</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge  bg-warning-transparent">Watches</span>
                                                            </td>
                                                            <td>$1,499</td>
                                                            <td>Appole Corporation</td>
                                                            <td>
                                                                <span class="badge bg-primary-transparent">257</span> 
                                                            </td>
                                                            <td>Male,Female</td>
                                                            <td>29,Nov 2022</td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-15">
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light"><i class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <nav aria-label="...">
                                                    <ul class="pagination mb-0">
                                                        <li class="page-item disabled">
                                                            <span class="page-link">Previous</span>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                        <li class="page-item active" aria-current="page">
                                                            <span class="page-link">2</span>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0);">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <button class="btn btn-danger btn-wave m-1">Delete All</button>
                                            </div>
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
  

@endsection