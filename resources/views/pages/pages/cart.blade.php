@extends('layouts.master')

@section('styles')

        <!-- SWEETALERTS CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Cart</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <!-- Start::row-1 -->
                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <div class="row justify-content-center" >
                                        <div class="col-xxl-8">
                                            <div class="card custom-card" id="cart-container-Deletee">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Cart Items
                                                    </div>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="d-sm-flex align-items-start p-4">
                                                        <div class="d-flex flex-wrap align-items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxxl bd-gray-200">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1">
                                                                    <a href="javascript:void(0);" class="fs-15 fw-bold">Ugoa green color big leaf with pot</a>
                                                                    <span class="badge bg-success-transparent fw-semibold  fs-11 rounded-2 ms-2">72% off</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Size:</span><span class="fw-semibold text-muted">Large</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Color:</span><span class="fw-semibold text-muted">Grey<span class="badge bg-success-transparent ms-3">In Offer</span></span>
                                                                </div>
                                                                <div class="d-flex mb-1">
                                                                    <h5 class="mb-1">$1,229</h5>
                                                                    <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$1,799</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto align-items-center">
                                                            <div class="align-items-center">
                                                                <div class="product-quantity-container text-center ">
                                                                    <div class="input-group border rounded-1 flex-nowrap">
                                                                        <button aria-label="button" type="button" class="btn btn-sm bg-transparent input-group-text flex-fill border-start-0 border-top-0 border-bottom-0 border-end product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                                        <input type="text" class="form-control form-control-sm border-0 text-center w-100" aria-label="quantity" id="product-quantity" value="2">
                                                                        <button aria-label="button" type="button" class="btn btn-sm bg-transparent input-group-text flex-fill border-end-0 border-top-0 border-bottom-0 border-start product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="btn  btn-sm btn-danger-light fw-semibold mt-2 me-1"><i class="d-inline-flex fe fe-trash me-1"></i>Delete</a>
                                                                    <a href="javascript:void(0);" class="btn  btn-sm btn-info-light fw-semibold mt-2"><i class="d-inline-flex fe fe-heart me-1"></i>Save</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="border-top"></div>
                                                    <div class="d-sm-flex align-items-start p-4">
                                                        <div class="d-flex  flex-wrap align-items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxxl bd-gray-200">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/2.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1">
                                                                    <a href="javascript:void(0);" class="fs-15 fw-bold">Colored leaf with pot</a>
                                                                    <span class="badge bg-primary-transparent  fw-semibold  fs-11 rounded-2 ms-2">20% disscount</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Size:</span><span class="fw-semibold text-muted">Medium</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Color:</span><span class="fw-semibold text-muted">Orange Color</span>
                                                                </div>
                                                                <div class="d-flex mb-1">
                                                                    <h5 class="mb-1">$8,329</h5>
                                                                    <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">2,999</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto align-items-center">
                                                            <div class="align-items-center">
                                                                <div class="product-quantity-container text-center ">
                                                                    <div class="input-group border rounded-1 flex-nowrap">
                                                                        <button aria-label="button" type="button" class="btn btn-sm bg-transparent input-group-text flex-fill border-start-0 border-top-0 border-bottom-0 border-end product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                                        <input type="text" class="form-control form-control-sm border-0 text-center w-100" aria-label="quantity" id="product-quantity1" value="2">
                                                                        <button aria-label="button" type="button" class="btn btn-sm bg-transparent input-group-text flex-fill border-end-0 border-top-0 border-bottom-0 border-start product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light fw-semibold me-1 mt-2"><i class="d-inline-flex fe fe-trash me-1"></i>Delete</a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light fw-semibold mt-2"><i class="d-inline-flex fe fe-heart me-1"></i>Save</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top"></div>
                                                    <div class="d-sm-flex align-items-start  p-4">
                                                        <div class="d-flex  flex-wrap align-items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxxl bd-gray-200">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/15.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1">
                                                                    <a href="javascript:void(0);" class="fs-15 fw-bold">Omega Sports shoes</a>
                                                                    <span class="badge bg-success-transparent  fw-semibold  fs-11 rounded-2 ms-2">56% off</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Size:</span><span class="fw-semibold text-muted">44:mm dail</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Color:</span><span class="fw-semibold text-muted">Light-pink</span>
                                                                </div>
                                                                <div class="d-flex mb-1">
                                                                    <h5 class="mb-1">$3,329</h5>
                                                                    <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$2,799</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto align-items-center">
                                                            <div class="align-items-center">
                                                                <div class="product-quantity-container text-center ">
                                                                    <div class="input-group border rounded-1 flex-nowrap">
                                                                        <button aria-label="button" type="button" class="btn btn-sm bg-transparent input-group-text flex-fill border-start-0 border-top-0 border-bottom-0 border-end product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                                        <input type="text" class="form-control form-control-sm border-0 text-center w-100" aria-label="quantity" id="product-quantity2" value="2">
                                                                        <button aria-label="button" type="button" class="btn btn-sm bg-transparent input-group-text flex-fill border-end-0 border-top-0 border-bottom-0 border-start product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="btn  btn-sm btn-danger-light fw-semibold me-1 mt-2"><i class="d-inline-flex fe fe-trash me-1"></i>Delete</a>
                                                                    <a href="javascript:void(0);" class="btn  btn-sm btn-info-light fw-semibold mt-2"><i class="d-inline-flex fe fe-heart me-1"></i>Save</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top"></div>
                                                    <div class="d-sm-flex align-items-start  p-4">
                                                        <div class="d-flex flex-wrap align-items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxxl bd-gray-200">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/40.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1">
                                                                    <a href="javascript:void(0);" class="fs-15 fw-bold">Orange colored smart watch</a>
                                                                    <span class="badge bg-success-transparent  fw-semibold  fs-11 rounded-2 ms-2">87% off</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Size:</span><span class="fw-semibold text-muted">Small</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Color:</span><span class="fw-semibold text-muted">Light pink</span>
                                                                </div>
                                                                <div class="d-flex mb-1">
                                                                    <h5 class="mb-1">$5,729</h5>
                                                                    <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$1,799</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto align-items-center">
                                                            <div class="align-items-center">
                                                                <div class="product-quantity-container text-center ">
                                                                    <div class="input-group border rounded-1 flex-nowrap">
                                                                        <button aria-label="button" type="button" class="btn btn-sm bg-transparent input-group-text flex-fill border-start-0 border-top-0 border-bottom-0 border-end product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                                        <input type="text" class="form-control form-control-sm border-0 text-center w-100" aria-label="quantity" id="product-quantity3" value="2">
                                                                        <button aria-label="button" type="button" class="btn btn-sm bg-transparent input-group-text flex-fill border-end-0 border-top-0 border-bottom-0 border-start product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light fw-semibold me-1 mt-2"><i class="d-inline-flex fe fe-trash me-1"></i>Delete</a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light fw-semibold mt-2"><i class="d-inline-flex fe fe-heart me-1"></i>Save</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="border-top"></div>
                                                    <div class="d-sm-flex align-items-start  p-4">
                                                        <div class="d-flex flex-wrap align-items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxxl bd-gray-200">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1">
                                                                    <a href="javascript:void(0);" class="fs-15 fw-bold">Green color money plat with pot</a>
                                                                    <span class="badge bg-warning-transparent  fw-semibold  fs-11 rounded-2 ms-2">Free Shipping</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Size:</span><span class="fw-semibold text-muted">Large</span>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Color:</span><span class="fw-semibold text-muted">Green </span>
                                                                </div>
                                                                <div class="d-flex mb-1">
                                                                    <h5 class="mb-1">$13,321</h5>
                                                                    <p class="mt-1 text-muted text-decoration-line-through ms-1 op-6 fs-15 mb-0">$1,199</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto align-items-center">
                                                            <div class="align-items-center">
                                                                <div class="product-quantity-container text-center ">
                                                                    <div class="input-group border rounded-1 flex-nowrap">
                                                                        <button aria-label="button" type="button" class="btn btn-sm bg-transparent input-group-text flex-fill border-start-0 border-top-0 border-bottom-0 border-end product-quantity-minus" ><i class="ri-subtract-line"></i></button>
                                                                        <input type="text" class="form-control form-control-sm border-0 text-center w-100" aria-label="quantity" id="product-quantity4" value="2">
                                                                        <button aria-label="button" type="button" class="btn btn-sm bg-transparent input-group-text flex-fill border-end-0 border-top-0 border-bottom-0 border-start product-quantity-plus" ><i class="ri-add-line"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger-light fw-semibold me-1 mt-2"><i class="d-inline-flex fe fe-trash me-1"></i>Delete</a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm btn-info-light fw-semibold mt-2"><i class="d-inline-flex fe fe-heart me-1"></i>Save</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card custom-card d-none" id="cart-empty-cart">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Empty Cart
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="cart-empty text-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-muted" width="24" height="24" viewbox="0 0 24 24"><path d="M18.6 16.5H8.9c-.9 0-1.6-.6-1.9-1.4L4.8 6.7c0-.1 0-.3.1-.4.1-.1.2-.1.4-.1h17.1c.1 0 .3.1.4.2.1.1.1.3.1.4L20.5 15c-.2.8-1 1.5-1.9 1.5zM5.9 7.1 8 14.8c.1.4.5.8 1 .8h9.7c.5 0 .9-.3 1-.8l2.1-7.7H5.9z"/><path d="M6 10.9 3.7 2.5H1.3v-.9H4c.2 0 .4.1.4.3l2.4 8.7-.8.3zM8.1 18.8 6 11l.9-.3L9 18.5z"/><path d="M20.8 20.4h-.9V20c0-.7-.6-1.3-1.3-1.3H8.9c-.7 0-1.3.6-1.3 1.3v.5h-.9V20c0-1.2 1-2.2 2.2-2.2h9.7c1.2 0 2.2 1 2.2 2.2v.4z"/><path d="M8.9 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-1 2.2-2.2 2.2zm0-3.5c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.8 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3zM18.6 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-.9 2.2-2.2 2.2zm0-3.5c-.8 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.7 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3z"/></svg>
                                                        <h3 class="fw-bold mb-1">Your Cart is Empty</h3>
                                                        <h5 class="mb-3">Add some items to make me happy :)</h5>
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-wave m-3" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
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
                                        <div class="col-xxl-4">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Have a coupon..?
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm" placeholder="Coupon Code" aria-label="coupon-code" aria-describedby="coupons">
                                                            <button type="button" class="btn btn-primary input-group-text" id="coupons">Apply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Price Details
                                                    </div>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="p-4 border-bottom border-block-end-dashed">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="text-muted ">Sub Total</div>
                                                            <div class="fw-semibold fs-14">$1,299</div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="text-muted ">Discount</div>
                                                            <div class="fw-semibold fs-14 text-success">10% - $129</div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="text-muted ">Delivery Charges</div>
                                                            <div class="fw-semibold fs-14 text-danger">- $49</div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="text-muted ">Service Tax (18%)</div>
                                                            <div class="fw-semibold fs-14">- $169</div>
                                                        </div>
                                                    </div>
                                                    <div class=" py-3 px-4">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="fw-semibold fs-18 ">Total :</div>
                                                            <div class="fw-semibold fs-18"> $1,387</div>
                                                        </div>

                                                    </div>
                                                    <div class="p-3 border-top text-center">
                                                        <a href="{{url('checkout')}}" class="btn btn-primary m-1">Proceed To Checkout</a>
                                                        <a href="{{url('products')}}" class="btn btn-light m-1 ">Countinue Shopping</a>
                                                    </div>
                                                </div>
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

        <!-- SWEETALERTS JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- INTERNAL CART JS -->
        @vite('resources/assets/js/cart.js')


@endsection