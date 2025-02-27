@extends('layouts.master')

@section('styles')

        <!-- FULLCALENDAR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/fullcalendar/main.min.css')}}">

@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Full Calendar</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Full Calendar</li>
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
                            <div class="col-xl-9">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Full Calendar</div>
                                    </div>
                                    <div class="card-body">
                                        <div id='calendar2'></div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-xl-3">
                                    <div class="card custom-card">
                                        <div class="card-header d-grid">
                                            <button class="btn btn-primary-light btn-wave"><i class="ri-add-line align-middle me-1 fw-semibold d-inline-flex"></i>Create New Event</button>
                                        </div>
                                        <div class="card-body p-0">
                                            <div id="external-events" class="border-bottom p-3">
                                                <div
                                                class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary border border-primary">
                                                <div class="fc-event-main">Calendar Events</div>
                                                </div>
                                                <div
                                                class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary border border-secondary"
                                                data-class="bg-secondary">
                                                <div class="fc-event-main">Birthday EVents</div>
                                                </div>
                                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-success border border-success"
                                                data-class="bg-success">
                                                <div class="fc-event-main">Holiday Calendar</div>
                                                </div>
                                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-info border border-info"
                                                data-class="bg-info">
                                                <div class="fc-event-main">Office Events</div>
                                                </div>
                                                <div
                                                class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning border border-warning"
                                                data-class="bg-warning">
                                                <div class="fc-event-main">Other Events</div>
                                                </div>
                                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger border border-danger"
                                                data-class="bg-danger">
                                                <div class="fc-event-main">Festival Events</div>
                                                </div>
                                                <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-teal border border-teal"
                                                data-class="bg-danger">
                                                <div class="fc-event-main">Timeline Events</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-4 justify-content-between">
                                    <h5 class="fw-semibold">
                                    upcoming Events
                                    </h5>
                                    <button class="btn btn-primary-light btn-sm btn-wave">View All</button>
                                    </div>
                                    <div class="card custom-card">
                                    <div class="card-body">
                                    <div class="d-flex justify-conent-between">
                                        <span class="fs-14 text-muted"><i class="text-primary  bx bxs-circle me-1"></i>10:00-30:00</span>
                                        <div class="dropdown ms-auto">
                                        <a href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                            <i class="fe fe-more-horizontal"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </div>
                                    </div>
                                    <h6 class="mb-1 mt-2">Monday, Jan 1,2023</h6>
                                    <p class="text-muted mb-0">Meeting with a client About new project</p>
                                    </div>
                                    </div>
                                    <div class="card custom-card">
                                    <div class="card-body">
                                    <div class="d-flex justify-conent-between">
                                        <span class="fs-14 text-muted"><i class="text-success  bx bxs-circle me-1"></i>11:00-01:00</span>
                                        <div class="dropdown ms-auto">
                                        <a href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                            <i class="fe fe-more-horizontal"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </div>
                                    </div>
                                    <h6 class="mb-1 mt-2">Friday, Jan 20,2023</h6>
                                    <p class="text-muted mb-0">Check about the new design styles</p>
                                    </div>
                                    </div>
                                    <div class="card custom-card">
                                    <div class="card-body">
                                    <div class="d-flex justify-conent-between">
                                        <span class="fs-14 text-muted"><i class="text-info  bx bxs-circle me-1"></i>08:00-12:00</span>
                                        <div class="dropdown ms-auto">
                                        <a href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                            <i class="fe fe-more-horizontal"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </div>
                                    </div>
                                    <h6 class="mb-1 mt-2">Saturday, Jan 23,2023</h6>
                                    <p class="text-muted mb-0">Trip with School friends</p>
                                    </div>
                                    </div>
                                    <div class="card custom-card">
                                    <div class="card-body">
                                    <div class="d-flex justify-conent-between">
                                        <span class="fs-14 text-muted"><i class="text-pink  bx bxs-circle me-1"></i>06:00-19:00</span>
                                        <div class="dropdown ms-auto">
                                        <a href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                            <i class="fe fe-more-horizontal"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li class="border-bottom"><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </div>
                                    </div>
                                    <h6 class="mb-1 mt-2">Sunday, Jan 24,2023</h6>
                                    <p class="text-muted mb-0">Birthday Party of Alizajohn</p>
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
    
        <!-- MOMENT JS -->
        <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

        <!-- FULLCALENDAR JS -->
        <script src="{{asset('build/assets/libs/fullcalendar/main.min.js')}}"></script>
        @vite('resources/assets/js/fullcalendar.js')
        

@endsection