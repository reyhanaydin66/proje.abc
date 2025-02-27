@extends('layouts.master')

@section('styles')

        <!-- GLIGHTBOX CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Blog Details</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-lg">

                            <!-- Start::row-1 -->
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card border-0">
                                                <a href="javascript:void(0);">
                                                    <img src="{{asset('build/assets/images/media/media-24.jpg')}}" class=" blog-details-img card-img-top" alt="...">
                                                </a>
                                                <div class="card-header d-block border-bottom border-block-end-dashed">
                                                    <p class="fs-22 fw-semibold mb-1">Touring excites in winter when we travel with friends !</p>
                                                    <div class="d-sm-flex align-items-cneter">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <span class="avatar avatar-sm avatar-rounded me-3">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="" class="">
                                                            </span>
                                                            <div>
                                                                <p class="mb-0 fw-semibold fs-14">Json Taylor - <span class="fs-12 text-muted fw-normal">Tue,25 Dec 2022 - 11:45</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-sm-0 mt-2">
                                                            <span class="badge bg-success-transparent me-3">
                                                                <i class="ri-thumb-up-line me-1 align-middle d-inline-block"></i> 32 Likes
                                                            </span>
                                                            <span class="badge bg-info-transparent me-3">
                                                                <i class="ri-chat-4-line me-1 align-middle d-inline-block"></i> 10 Comments
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="fw-semibold">
                                                        Seeing with “fresh eyes” – A deeper nature experience
                                                    </h6>
                                                    <p class="mb-5 text-muted">
                                                        The world is animated by the wind. This invisible Its absence can cast a calm stillness over the earth. On barren mountain tops its power is barely perceptible; in forests and seas its presence becomes manifest. Winds are wild, and sometimes destructive. When we look deeply into the surely gravity’s law, strong as an ocean current, takes hold of even the strongest thing and pulls it toward the heart of the world. Each thing- each stone, blossom, child – is held in place. Only we, in our arrogance, push out beyond what we belong to for some empty freedom. If we surrendered
                                                    </p>
                                                    <div class="card custom-card bg-light mb-5 shadow-none">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="card-anchor"></a>
                                                        <div class="card-body">
                                                        <blockquote class="blockquote mb-0 text-center">
                                                            <p class="fs-16 fw-semibold mb-2 text-dark">In nature, nothing is perfect and everything is perfect. Trees can be contorted, bent in weird ways, and they're still beautiful..</p>
                                                            <footer class="blockquote-footer mt-2 fs-14 op-7">Someone famous as <cite title="Source Title">-Alice Walker</cite></footer>
                                                        </blockquote>
                                                        </div>
                                                    </div>
                                                    <p class="mb-5 text-muted">
                                                        From enchanting nature's beauty quotes that evoke visions of lush meadows full of brilliantly-colored flowers or dense forests with sky-high trees to famous quotes about nature's ever-present—and absolutely fundamental—role in our lives, these 101 quotes about nature will have you itching to get off your couch and get outside. For famous <b>quotes about nature</b>, we have them here!
                                                    </p>
                                                    <p class="text-center">
                                                        <button class="btn btn-primary-light" type="button">
                                                            <span class="spinner-border spinner-border-sm align-middle me-1" role="status" aria-hidden="true"></span>
                                                            View More
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Comments
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="">
                                                        <div class="media mb-3 overflow-visible d-flex">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-rounded avatar-md mb-3">
                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="media-body overflow-visible  ">
                                                                <div class="border p-3 br-5">
                                                                    <nav class="nav float-end">
                                                                        <div class="dropdown">
                                                                            <a aria-label="anchor" class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <a class="dropdown-item d-flex" href="javascript:void(0);"><i class="fe fe-edit me-1"></i> Edit</a>
                                                                                <a class="dropdown-item d-flex" href="javascript:void(0);"><i class="fe fe-flag me-1"></i> Report Abuse</a>
                                                                                <a class="dropdown-item d-flex" href="javascript:void(0);"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </nav>
                                                                    <h6 class="mt-0">Gavin Murray <span class="text-muted fs-12 ms-1">1 day ago</span></h6>
                                                                    <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                                    <p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter
                                                                        what industry you’re working in, as a blogger, you should live and die by this statement.</p>
                                                                    <span class="reply">
                                                                        <a data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="btn btn-info-light btn-sm rounded-2"><i class="fe fe-corner-up-left me-1 d-inline-flex"></i>Reply</span></a>
                                                                    </span>
                                                                    <div class="collapse" id="collapseExample">
                                                                        <textarea class="form-control mb-2 mt-3" id="text-area" rows="3" placeholder="Write a reply ..."></textarea>
                                                                        <div class="text-end">
                                                                            <button type="button" class="btn btn-primary btn-wave btn-sm">Post</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media mb-3 overflow-visible d-flex ms-0 ms-lg-5">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-rounded avatar-md mb-3">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="media-body border p-3 overflow-visible br-5">
                                                                <nav class="nav float-end">
                                                                    <div class="dropdown">
                                                                        <a aria-label="anchor" class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                        <div class="dropdown-menu dropdown-menu-start">
                                                                            <a class="dropdown-item d-flex" href="javascript:void(0);"><i class="fe fe-edit me-1"></i> Edit</a>
                                                                            <a class="dropdown-item d-flex" href="javascript:void(0);"><i class="fe fe-flag me-1"></i> Report Abuse</a>
                                                                            <a class="dropdown-item d-flex" href="javascript:void(0);"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </nav>
                                                                <h6 class="mt-0">Mozelle Belt <span class="text-muted fs-12 mx-1 bg-normal-light">Reply to Gavin Murray</span><span class="text-muted fs-12 ms-1">2 min ago</span></h6>
                                                                <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                                <p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should
                                                                    live and die by this statement.</p>
                                                                <span class="reply">
                                                                    <a data-bs-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><span class="btn btn-info-light btn-sm rounded-2"><i class="fe fe-corner-up-left me-1 d-inline-flex"></i>Reply</span></a>
                                                                </span>
                                                                <div class="collapse" id="collapseExample1">
                                                                    <textarea class="form-control mb-2 mt-3" rows="3" placeholder="Write a reply ..."></textarea>
                                                                    <div class="text-end">
                                                                        <button type="button" class="btn btn-primary btn-wave btn-sm">Post</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media mb-3 overflow-visible d-flex">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-rounded avatar-md mb-3">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="media-body overflow-visible d-flex">
                                                                <div class="border mb-3 p-3 br-5">
                                                                    <nav class="nav float-end">
                                                                        <div class="dropdown">
                                                                            <a aria-label="anchor" class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                                <a class="dropdown-item d-flex" href="javascript:void(0);"><i class="fe fe-edit me-1"></i> Edit</a>
                                                                                <a class="dropdown-item d-flex" href="javascript:void(0);"><i class="fe fe-flag me-1"></i> Report Abuse</a>
                                                                                <a class="dropdown-item d-flex" href="javascript:void(0);"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </nav>
                                                                    <h6 class="mt-0">Paul Smith<span class="text-muted fs-12 ms-1">10 min ago</span></h6>
                                                                    <p class="font-13 text-muted">Very nice ! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the </p>
                                                                    <span class="reply">
                                                                        <a data-bs-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><span class="btn btn-info-light btn-sm rounded-2"><i class="fe fe-corner-up-left me-1 d-inline-flex"></i>Reply</span></a>
                                                                    </span>
                                                                    <div class="collapse" id="collapseExample2">
                                                                        <textarea class="form-control mb-2 mt-3" rows="3" placeholder="Write a reply ..."></textarea>
                                                                        <div class="text-end">
                                                                            <button type="button" class="btn btn-primary btn-wave btn-sm">Post</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Leave a Comment
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-6">
                                                            <label for="blog-first-name" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" id="blog-first-name" placeholder="Enter Name">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="blog-last-name" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" id="blog-last-name" placeholder="Enter Name">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="blog-email" class="form-label">Email ID</label>
                                                            <input type="text" class="form-control" id="blog-email" placeholder="Enter Email">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="blog-comment" class="form-label">Write Comment</label>
                                                            <textarea class="form-control" id="blog-comment" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-primary">Post Comment</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="card custom-card border-0">
                                                <img src="{{asset('build/assets/images/media/media-88.jpg')}}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title fw-semibold mb-0">Emiley Jackson</h6>
                                                    <p class="fs-12 text-muted"><span>emaileyjackson2134</span>@gmail.com</p>
                                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution </p>
                                                </div>
                                                <div class="card-footer border-block-start-dashed text-center">
                                                    <div class="btn-list">
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                                <i class="ri-twitter-line"></i>
                                                            </button>
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                                <i class="ri-github-line"></i>
                                                            </button>
                                                            <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                                <i class="ri-youtube-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Gallery
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="text-center demo-gallery">
                                                        <div class="">
                                                            <ul id="lightgallery" class="list-unstyled row row-sm gy-3 gx-3">
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-41.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-27.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-27.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-28.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-29.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4 mb-2">
                                                                    <a href="{{asset('build/assets/images/media/media-30.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4 mb-2">
                                                                    <a href="{{asset('build/assets/images/media/media-31.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-31.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4 ">
                                                                    <a href="{{asset('build/assets/images/media/media-32.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-32.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                                <li class="col-sm-6 col-lg-4">
                                                                    <a href="{{asset('build/assets/images/media/media-33.jpg')}}" class="glightbox" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/media-33.jpg')}}" alt="image" class="img-responsive br-5 w-100">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Popular Tags
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="blog-popular-tags">
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#blogger</a>
                                                        <a href="javascript:void(0);"  class="badge bg-light text-muted">#styleblogger</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#livecolorfully</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#amwriting</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#analytics</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#designblogger</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#picoftheday</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#adventure</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#landscape</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#fitnessgoals</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#foodblogger</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#vegan</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#portrait</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#canonphotography</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#fineart</a>
                                                        <a href="javascript:void(0);" class="badge bg-light text-muted">#trending</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Recent Posts
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="avatar avatar-xl me-3">
                                                                    <img src="{{asset('build/assets/images/media/media-39.jpg')}}" class="img-fluid" alt="...">
                                                                </span>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Animals</a>
                                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                                        There are many variations of passages of Lorem Ipsum available
                                                                    </p>
                                                                    <span class="text-muted fs-11">24,Nov 2022 - 18:27</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="avatar avatar-xl me-3">
                                                                    <img src="{{asset('build/assets/images/media/media-56.jpg')}}" class="img-fluid" alt="...">
                                                                </span>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Travel</a>
                                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                                        Latin words, combined with a handful of model sentence
                                                                    </p>
                                                                    <span class="text-muted fs-11">28,Nov 2022 - 10:45</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="avatar avatar-xl me-3">
                                                                    <img src="{{asset('build/assets/images/media/media-54.jpg')}}" class="img-fluid" alt="...">
                                                                </span>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Interior</a>
                                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                                        Contrary to popular belief, Lorem Ipsum is not simply random
                                                                    </p>
                                                                    <span class="text-muted fs-11">30,Nov 2022 - 08:32</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <span class="avatar avatar-xl me-3">
                                                                    <img src="{{asset('build/assets/images/media/media-52.jpg')}}" class="img-fluid" alt="...">
                                                                </span>
                                                                <div class="flex-fill">
                                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-0">Nature</a>
                                                                    <p class="mb-1 popular-blog-content text-truncate">
                                                                        It was popularised in the 1960s with the release of Letraset sheets containing
                                                                    </p>
                                                                    <span class="text-muted fs-11">3,Dec 2022 - 12:56</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item text-center d-grid">
                                                            <button type="button" class="btn btn-primary-light">Load more</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Newsletter
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h6 class="fw-semibold mb-3"><span class="text-primary fs-18">1658</span> Subscribers</h6>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Email Here" aria-label="blog-email" aria-describedby="blog-subscribe">
                                                            <button class="btn btn-primary" type="button" id="blog-subscribe">Subscribe</button>
                                                        </div>
                                                        <label class="form-check-label">
                                                            By Subscribing you accept to <a href="javascript:void(0);" class="text-success"><u>privacy policy</u></a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Explore Topics
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                            <span class="avatar avatar-xs bg-secondary avatar-rounded">
                                                                                N
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-semibold ms-2">Nature</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-light text-default rounded-pill">21</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                            <span class="avatar avatar-xs bg-success avatar-rounded">
                                                                                S
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-semibold ms-2">Sports</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-light text-default rounded-pill">16</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                            <span class="avatar avatar-xs bg-warning avatar-rounded">
                                                                                F
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-semibold ms-2">Food</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-light text-default rounded-pill">06</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                            <span class="avatar avatar-xs bg-danger avatar-rounded">
                                                                            T
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-semibold ms-2">Travel</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-light text-default rounded-pill">18</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                            <span class="avatar avatar-xs bg-primary avatar-rounded">
                                                                            F
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-semibold ms-2">Fashion</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-light text-default rounded-pill">09</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="javascript:void(0);">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <div>
                                                                            <span class="avatar avatar-xs bg-secondary avatar-rounded">
                                                                            B
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-semibold ms-2">Beauty</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-light text-default rounded-pill">11</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
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

        <!-- GALLERY JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')

  
@endsection