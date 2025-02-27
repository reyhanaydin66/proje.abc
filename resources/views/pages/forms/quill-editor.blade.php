@extends('layouts.master')

@section('styles')

        <!-- QUILL CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Quill Editor</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Editors</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quill Editor</li>
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
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Quill Snow Editor
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="editor">
                                                <h4><b class="ql-size-large">Quill Snow</b> is a free, open source <a href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/" target="_blank">modular architecture</a> and expressive API, it is completely customizable to fit any need.</h4>
                                                <p><br></p>
                                                <ol>
                                                    <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                                    <li class="">This is quill snow editor.</li>
                                                    <li class="">Easy to customize and flexible.</li>
                                                </ol>
                                                <p><br></p>
                                                <h4>Quill officially supports a standard toolbar theme <a href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a floating tooltip theme <a href="https://github.com/quilljs/quill/" target="_blank">"Bubble"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->

                            <!-- Start:: row-2 -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Quill Bubble Editor
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="editor1">
                                                <h4><b class="ql-size-large">Quill Bubble</b> is a free, open source <a href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/" target="_blank">modular architecture</a> and expressive API, it is completely customizable to fit any need.</h4>
                                                <p><br></p>
                                                <ol>
                                                    <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                                    <li class="">This is quill bubble editor.</li>
                                                    <li class="">Easy to customize and flexible.</li>
                                                </ol>
                                                <p><br></p>
                                                <h4>Quill officially supports a standard toolbar theme <a href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a floating tooltip theme <a href="https://github.com/quilljs/quill/" target="_blank">"Bubble"</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-2 -->

                        </div>
                    </div>
                    <!-- APP-CONTENT CLOSE -->
            
@endsection

@section('scripts')

        <!-- QUILL EDITOR JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- INTERNAL QUILL JS -->
        @vite('resources/assets/js/quill-editor.js')

 
@endsection