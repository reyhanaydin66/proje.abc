@extends('layouts.master')

@section('styles')

        <!-- SELECT2 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Select2</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Select2</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <div class="alert alert-solid-secondary alert-dismissible fs-15 fade show mb-4">
                                We Placed <strong class="text-fixed-black">Select2</strong> only in this page by using <strong class="text-fixed-black">jquery</strong> cdn link.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
                            </div>

                            <!-- Start::row-1 -->
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Basic Select2
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <select class="js-example-basic-single" name="state">
                                                <option value="s-1">Selection-1</option>
                                                <option value="s-2">Selection-2</option>
                                                <option value="s-3">Selection-3</option>
                                                <option value="s-4">Selection-4</option>
                                                <option value="s-5">Selection-5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multiple Select
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                                <option value="m-1" selected>Multiple-1</option>
                                                <option value="m-2">Multiple-2</option>
                                                <option value="m-3">Multiple-3</option>
                                                <option value="m-4">Multiple-4</option>
                                                <option value="m-5">Multiple-5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Single Select With Placeholder
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <select class="js-example-placeholder-single js-states form-control">
                                                <option value="st-1" selected>Texas</option>
                                                <option value="st-2">Georgia</option>
                                                <option value="st-3">California</option>
                                                <option value="st-4">Washington D.C</option>
                                                <option value="st-5">Virginia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multiple Select With Placeholder
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <select class="js-example-placeholder-multiple js-states" multiple="multiple">
                                                <option value="fr-1">Andrew</option>
                                                <option value="fr-2">Maya</option>
                                                <option value="fr-3">Brodus</option>
                                                <option value="fr-4">Goldhens</option>
                                                <option value="fr-5">Angelina</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Templating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <select class="js-example-templating js-persons form-control">
                                                <option value="p-1">Andrew</option>
                                                <option value="p-2">Maya</option>
                                                <option value="p-3">Brodus Axel</option>
                                                <option value="p-4">Goldhens</option>
                                                <option value="p-5">Angelina</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Templating Selection
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <select class="select2-client-search form-control">
                                                <option value="p-1" selected>Andrew</option>
                                                <option value="p-2">Maya</option>
                                                <option value="p-3">Brodus Axel</option>
                                                <option value="p-4">Goldhens</option>
                                                <option value="p-5">Angelina</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::row-1 -->

                            <!-- Start:: row-2 -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Max Selections Limiting
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <select class="js-example-basic-multiple-limit-max form-control" multiple="multiple">
                                                <option value="p-1" selected>Andrew</option>
                                                <option value="p-2" selected>Maya</option>
                                                <option value="p-3">Brodus Axel</option>
                                                <option value="p-4">Goldhens</option>
                                                <option value="p-5">Angelina</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Disabling a Select2 control
                                            </div>
                                        </div>
                                        <div class="card-body vstack gap-3">
                                            <select class="js-example-disabled mb-3" name="state">
                                                <option value="s-1">Selection-1</option>
                                                <option value="s-2">Selection-2</option>
                                                <option value="s-3">Selection-3</option>
                                                <option value="s-4">Selection-4</option>
                                                <option value="s-5">Selection-5</option>
                                            </select>
                                            <select class="js-example-disabled-multi" name="state" multiple="multiple">
                                                <option value="s-1" selected>Selection-1</option>
                                                <option value="s-2">Selection-2</option>
                                                <option value="s-3">Selection-3</option>
                                                <option value="s-4">Selection-4</option>
                                                <option value="s-5">Selection-5</option>
                                            </select>
                                            <div>
                                                <button class="btn btn-primary-light js-programmatic-enable">Enable</button>
                                                <button class="btn btn-primary js-programmatic-disable">Disable</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-2 -->

                        </div>
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')
    
        <!-- JQUERY CDN -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous"></script>
        
        <!-- SELECT2 CDN -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- INETRNAL SELECT2 JS -->
        @vite('resources/assets/js/select2.js')
        

@endsection