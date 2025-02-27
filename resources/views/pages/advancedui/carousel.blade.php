@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Carousel</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Carousel</li>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Slides Only</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('build/assets/images/media/media-26.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-27.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-33.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">With controls</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('build/assets/images/media/media-28.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-31.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-29.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">With indicators</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="0" class="active" aria-current="true"
                                                        aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('build/assets/images/media/media-25.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-29.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-30.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">With captions</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                                        aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                                        aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('build/assets/images/media/media-59.jpg')}}" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="text-fixed-white">First slide label</h5>
                                                            <p>Some representative placeholder content for the first slide.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-60.jpg')}}" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5  class="text-fixed-white">Second slide label</h5>
                                                            <p>Some representative placeholder content for the second slide.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-61.jpg')}}" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="text-fixed-white">Third slide label</h5>
                                                            <p>Some representative placeholder content for the third slide.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Crossfade</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('build/assets/images/media/media-43.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-44.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-45.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Individual .carousel-item interval</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" data-bs-interval="10000">
                                                        <img src="{{asset('build/assets/images/media/media-40.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="2000">
                                                        <img src="{{asset('build/assets/images/media/media-41.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-42.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->

                            <!-- Start:: row-2 -->
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Disable touch swiping</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                                                data-bs-interval="false">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('build/assets/images/media/media-63.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-64.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-62.jpg')}}" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Dark variant</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                                        aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                                        aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" data-bs-interval="10000">
                                                        <img src="{{asset('build/assets/images/media/media-13.jpg')}}" class="d-block w-100"
                                                            alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5  class="text-fixed-white">First slide label</h5>
                                                            <p>Some representative placeholder content for the first slide.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="2000">
                                                        <img src="{{asset('build/assets/images/media/media-14.jpg')}}" class="d-block w-100"
                                                            alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5  class="text-fixed-white">Second slide label</h5>
                                                            <p>Some representative placeholder content for the second slide.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('build/assets/images/media/media-18.jpg')}}" class="d-block w-100"
                                                            alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5  class="text-fixed-white">Third slide label</h5>
                                                            <p>Some representative placeholder content for the third slide.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
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
  

@endsection