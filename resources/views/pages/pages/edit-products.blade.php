@extends('layouts.master')

@section('styles')

        <!-- QUILL CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

        <!-- FILEPOND CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Edit Products</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Products</li>
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
                                        <div class="card-body add-products p-0">
                                            <div class="p-4">
                                                <div class="row gx-5">
                                                    <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                                        <div class="card custom-card shadow-none mb-0">
                                                            <div class="card-body p-0">
                                                                <div class="row gy-3">
                                                                    <div class="col-xl-12">
                                                                        <label for="product-name-add" class="form-label">Product Name</label>
                                                                        <input type="text" class="form-control" id="product-name-add" placeholder="Name" value="Light Blue Sweat Shirt">
                                                                        <label for="product-name-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Product Name should not exceed 30 characters</label>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="product-category-add" class="form-label">Category</label>
                                                                        <select class="form-control" data-trigger name="product-category-add" id="product-category-add">
                                                                            <option value="">Category</option>
                                                                            <option value="Clothing">Clothing</option>
                                                                            <option value="Footwear">Footwear</option>
                                                                            <option value="Accesories">Accesories</option>
                                                                            <option value="Grooming">Grooming</option>
                                                                            <option value="Watches" selected>Watches</option>
                                                                            <option value="Ethnic & Festive">Ethnic & Festive</option>
                                                                            <option value="Jewellery">Jewellery</option>
                                                                            <option value="Toys & Babycare">Toys & Babycare</option>
                                                                            <option value="Festive Gifts">Festive Gifts</option>
                                                                            <option value="Kitchen">Kitchen</option>
                                                                            <option value="Dining">Dining</option>
                                                                            <option value="Home Decors">Home Decors</option>
                                                                            <option value="Stationery">Stationery</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="product-gender-add" class="form-label">Gender</label>
                                                                        <select class="form-control" data-trigger name="product-gender-add" id="product-gender-add">
                                                                            <option value="">Select</option>
                                                                            <option value="All" selected>All</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                            <option value="Others">Others</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="product-brand-add" class="form-label">Brand</label>
                                                                        <select class="form-control" data-trigger name="product-brand-add" id="product-brand-add">
                                                                            <option value="">Select</option>
                                                                            <option value="Armani">Armani</option>
                                                                            <option value="Lacoste">Lacoste</option>
                                                                            <option value="Puma">Puma</option>
                                                                            <option value="Spykar">Spykar</option>
                                                                            <option value="Mufti" selected>Mufti</option>
                                                                            <option value="Home Town">Home Town</option>
                                                                            <option value="Arrabi">Arrabi</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="product-size-add" class="form-label">Size</label>
                                                                        <select class="form-control" data-trigger name="product-size-add" id="product-size-add">
                                                                            <option value="">Select</option>
                                                                            <option value="Extra Small">Extra Small</option>
                                                                            <option value="Small">Small</option>
                                                                            <option value="Medium" selected>Medium</option>
                                                                            <option value="Large">Large</option>
                                                                            <option value="Extra Large">Extra Large</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="product-cost-add" class="form-label">Enter Cost</label>
                                                                        <input type="text" class="form-control" id="product-cost-add" placeholder="Cost" value="$1299.99">
                                                                        <label for="product-cost-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Mention final price of the product</label>
                                                                    </div>
                                                                    <div class="col-xl-6 color-selection">
                                                                        <label for="product-color-add" class="form-label">Colors</label>
                                                                        <select class="form-control" name="product-color-add" id="product-color-add"
                                                                            multiple>
                                                                            <option value="White">White</option>
                                                                            <option value="Black">Black</option>
                                                                            <option value="Red">Red</option>
                                                                            <option value="Orange">Orange</option>
                                                                            <option value="Yellow">Yellow</option>
                                                                            <option value="Green">Green</option>
                                                                            <option value="Blue" selected>Blue</option>
                                                                            <option value="Pink">Pink</option>
                                                                            <option value="Purple">Purple</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <label for="product-description-add" class="form-label">Product Description</label>
                                                                        <textarea class="form-control" id="product-description-add" rows="2">Ultra Soft: The fabric is extremely soft and comfortable, keeping you at ease for hours</textarea>
                                                                        <label for="product-description-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Description should not exceed 500 letters</label>
                                                                    </div>
                                                                    <div class="col-xl-12 product-documents-container">
                                                                        <p class="fw-semibold mb-2 fs-14">Product Images :</p>
                                                                        <input type="file" class="product-Images" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                                                    </div>
                                                                    <label class="form-label op-8 mt-3">Minimum 0f 6 images are need to be uploaded,make sure the image size match the proper background size and all images should be uniformly maintained with width and height to the image container,image size should not exceed 2MB,once uploaded to change the image you need to wait minimum of 24hrs. </label>
                                                                    <div class="col-xl-12 product-documents-container">
                                                                        <p class="fw-semibold mb-2 fs-14">Warrenty Documents :</p>
                                                                        <input type="file" class="product-documents" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                                        <div class="card custom-card shadow-none mb-0">
                                                            <div class="card-body p-0">
                                                                <div class="row gy-4">
                                                                    <div class="col-xl-4">
                                                                        <label for="product-actual-price" class="form-label">Actual Price</label>
                                                                        <input type="text" class="form-control" id="product-actual-price" placeholder="Actual Price" value="$1,499.90">
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <label for="product-dealer-price" class="form-label">Dealer Price</label>
                                                                        <input type="text" class="form-control" id="product-dealer-price" placeholder="Dealer Price" value="$1,299.99">
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <label for="product-discount" class="form-label">Discount</label>
                                                                        <input type="text" class="form-control" id="product-discount" placeholder="Discount in %" value="0.75%">
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="product-type" class="form-label">Product Type</label>
                                                                        <input type="text" class="form-control" id="product-type" placeholder="Type" value="Watch">
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="product-weight" class="form-label">Item Weight</label>
                                                                        <input type="text" class="form-control" id="product-weight" placeholder="Weight in gms" value="180gms">
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="publish-date" class="form-label">Publish Date</label>
                                                                        <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="publish-time" class="form-label">Publish Time</label>
                                                                        <input type="text" class="form-control" id="publish-time" placeholder="Choose time">
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="product-status-add" class="form-label">Published Status</label>
                                                                        <select class="form-control" data-trigger name="product-status-add" id="product-status-add">
                                                                            <option value="">Select</option>
                                                                            <option value="Published">Published</option>
                                                                            <option value="Scheduled" selected>Scheduled</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <label for="product-tags" class="form-label">Product Tags</label>
                                                                        <select class="form-control" name="product-tags" id="product-tags" multiple>
                                                                            <option value="Relaxed" selected>Relaxed</option>
                                                                            <option value="Solid">Solid</option>
                                                                            <option value="Washed">Washed</option>
                                                                            <option value="Plain" selected>Plain</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <label for="product-availability" class="form-label">Availability</label>
                                                                        <select class="form-control" data-trigger name="product-availability" id="product-availability">
                                                                            <option value="">Select</option>
                                                                            <option value="In Stock" selected>In Stock</option>
                                                                            <option value="Out Of Stock">Out Of Stock</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <label class="form-label">Product Features</label>
                                                                        <div id="product-features">
                                                                            <ul>
                                                                                <li>Care Instructions: Machine Wash</li>
                                                                                <li>Neckline: The pullover is framed with a Crew Neck</li>
                                                                                <li>Fit Type: Regular Fit</li>
                                                                                <li>Long Sleeves: The pullover is designed with Long Sleeves.</li>
                                                                                <li>Soft Hand feel: The fabric is extremely soft and comfortable, keeping you at ease for hours.</li>
                                                                                <li>Solid: The pullover is available in solid pattern.</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                                <button class="btn btn-primary-light m-1">Add Product<i class="bi bi-plus-lg ms-2"></i></button>
                                                <button class="btn btn-success-light m-1">Save Product<i class="bi bi-download ms-2"></i></button>
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

        <!-- QUILL EDITOR JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

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

        <!-- INTERNAL ADD PRODUCTS JS -->
        @vite('resources/assets/js/edit-products.js')
        

@endsection