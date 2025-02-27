@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Breakpoints</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Breakpoints</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP-CONTENT START -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <!-- Start:: row-1 -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Containers
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover table-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Content</th>
                                                            <th scope="col">Extra small<div class="fw-normal">&lt;576px</div>
                                                            </th>
                                                            <th scope="col">Small<div class="fw-normal">≥576px</div>
                                                            </th>
                                                            <th scope="col">Medium<div class="fw-normal">≥768px</div>
                                                            </th>
                                                            <th scope="col">Large<div class="fw-normal">≥992px</div>
                                                            </th>
                                                            <th scope="col">X-Large<div class="fw-normal">≥1200px</div>
                                                            </th>
                                                            <th scope="col">XX-Large<div class="fw-normal">≥1400px</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code>.container</code></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td>540px</td>
                                                            <td>720px</td>
                                                            <td>960px</td>
                                                            <td>1140px</td>
                                                            <td>1320px</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.container-sm</code></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td>540px</td>
                                                            <td>720px</td>
                                                            <td>960px</td>
                                                            <td>1140px</td>
                                                            <td>1320px</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.container-md</code></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td>720px</td>
                                                            <td>960px</td>
                                                            <td>1140px</td>
                                                            <td>1320px</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.container-lg</code></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td>960px</td>
                                                            <td>1140px</td>
                                                            <td>1320px</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.container-xl</code></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td>1140px</td>
                                                            <td>1320px</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.container-xxl</code></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td>1320px</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.container-fluid</code></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                            <td><span class="text-muted">100%</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Available breakpoints
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover table-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Breakpoint</th>
                                                            <th scope="col">class infix</th>
                                                            <th scope="col">Dimensions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Extra small</td>
                                                            <td>None</td>
                                                            <td>576px</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Small</td>
                                                            <td><code>sm</code></td>
                                                            <td>≥576px</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Medium</td>
                                                            <td><code>md</code></td>
                                                            <td>≥768px</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Large</td>
                                                            <td><code>lg</code></td>
                                                            <td>≥992px</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Extra large</td>
                                                            <td><code>xl</code></td>
                                                            <td>≥1200px</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Extra extra large</td>
                                                            <td><code>xxl</code></td>
                                                            <td>≥1400px</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->

                        </div>
                    </div>
                    <!-- APP-CONTENT CLOSE -->

@endsection

@section('scripts')
  

@endsection