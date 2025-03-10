@extends('layouts.landing-master')

@section('styles')

        <!-- SWIPER CSS  -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')

                    <!-- Start:: Section-1 -->
                    <div class="landing-banner" id="home">
                        <section class="section">
                            <div class="container main-banner-container">
                                <img src="{{asset('build/assets/images/media/landing/5.png')}}" alt="img" class="banner-png">
                                <img src="{{asset('build/assets/images/media/landing/3.png')}}" alt="img" class="banner-png1">
                                <img src="{{asset('build/assets/images/media/landing/4.png')}}" alt="img" class="banner-png2">
                                <img src="{{asset('build/assets/images/media/landing/6.png')}}" alt="img" class="banner-png3">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-9 col-xl-8 col-lg-12 col-md-12">
                                        <div class="py-lg-5 text-center">
                                            <p class="landing-banner-heading text-fixed-white mb-1">Best theme ends here with <span class="">Velvet !</span></p>
                                            <div class="fs-16 mb-4 text-fixed-white op-8 px-4">Velvet - Now you can use this admin template to design stunning, good and well well-structured dashboards that will wow your target viewers or users to no end.</div>
                                            <a href="{{url('index')}}" class="m-1 btn btn-lg btn-success" target="_blank"> Get Started <i class="ri-arrow-right-line ms-2 align-middle"></i> </a>
                                            <a href="{{url('index')}}" class="m-1 btn btn-lg btn-light" target="_blank"> View Demos <i class="ri-eye-line ms-2 align-middle"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- End:: Section-1 -->

                    <!-- Start:: Section-2 -->
                    <section class="section section-background section-style " id="features">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-primary mb-1"><span class="landing-section-heading">FEATURES</span></p>
                            <h4 class="fw-semibold mb-2">Velvet is packed with many advanced features.</h4>
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <p class="text-muted fs-15 mb-5 fw-normal">Most advanced features in Velvet along with only javascript dependability and zeo jquery boosts the performance of your project.</p>
                                </div>
                            </div>
                            <div class="row text-start">
                                <div class="col-12 col-md-3">
                                    <div class="card custom-card card-style-angle border">
                                        <div class="card-body rounded m-2  text-center">
                                            <div class="features-icon m-auto mb-2 bg-primary-transparent">
                                                <svg class="svg-primary shadow-lg" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <path
                                                        d="M7.00293 8.05957a3 3 0 1 1 3-3A3.00328 3.00328 0 0 1 7.00293 8.05957zm0-4a1 1 0 1 0 1 1A1.0013 1.0013 0 0 0 7.00293 4.05957zM17.00293 12.05957a3 3 0 1 1 3-3A3.00328 3.00328 0 0 1 17.00293 12.05957zm0-4a1 1 0 1 0 1 1A1.0013 1.0013 0 0 0 17.00293 8.05957zM7.00293 22.05957a3 3 0 1 1 3-3A3.00328 3.00328 0 0 1 7.00293 22.05957zm0-4a1 1 0 1 0 1 1A1.0013 1.0013 0 0 0 7.00293 18.05957z" />
                                                    <path opacity=".3"
                                                        d="M17.00293,12.05957a2.98168,2.98168,0,0,1-1.15424-.2323,2.00186,2.00186,0,0,1-1.84576,1.2323h-4a3.95376,3.95376,0,0,0-2,.55646V7.87531a2.80519,2.80519,0,0,1-2-.00007v8.3686a2.89912,2.89912,0,0,1,2.1543.048,2.00179,2.00179,0,0,1,1.8457-1.23224h4a4.00437,4.00437,0,0,0,3.90619-3.15509A2.96013,2.96013,0,0,1,17.00293,12.05957Z" />
                                                </svg>
                                            </div>
                                            <h6 class="fw-semibold mx-1">
                                                Quality &amp; Clean Code
                                            </h6>
                                            <p class="text-muted mb-2 mx-1">
                                                In Velvet code is maintained very clean and well-structured &amp; Properly Commented.
                                            </p>
                                            <a class="fs-12 mx-1 text-primary" href="javascript:void(0);">Read More<i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="card custom-card border card-style-angle ">
                                        <div class="card-body text-center rounded m-2">
                                            <div class="features-icon mb-2 m-auto bg-secondary-transparent">
                                                <svg class="svg-secondary shadow-lg" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12,15.89355c-0.17551-0.00004-0.34792-0.04618-0.5-0.13378l-9-5.19727c-0.47839-0.27632-0.64221-0.88814-0.36589-1.36653C2.22187,9.04403,2.34806,8.91784,2.5,8.83008l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653c-0.08776,0.15194-0.21395,0.27813-0.36589,0.36589l-9,5.19727C12.34792,15.84737,12.17551,15.89351,12,15.89355z" />
                                                    <path opacity=".3"
                                                        d="M21.5,13.43359l-2.48682-1.435L12.5,15.75977c-0.1521,0.08759-0.32452,0.13373-0.5,0.13379c-0.17548-0.00006-0.3479-0.0462-0.5-0.13379L4.98682,11.9986L2.5,13.43359c-0.15192,0.08771-0.27814,0.21393-0.36591,0.36584C1.85779,14.27783,2.02161,14.88965,2.5,15.16602l9,5.19727c0.1521,0.08759,0.32452,0.13373,0.5,0.13379c0.17554-0.00006,0.3479-0.0462,0.5-0.13379l9-5.19727c0.15192-0.08777,0.27814-0.21399,0.36591-0.36591C22.14221,14.32172,21.97839,13.7099,21.5,13.43359z" />
                                                </svg>
                                            </div>
                                            <h6 class="fw-semibold mx-1">
                                                Multiple Demos
                                            </h6>
                                            <p class="text-muted mb-2 mx-1">
                                                We included multiple demos to give a quick overview of our Velvet admin template..
                                            </p>
                                            <a class="fs-12 mx-1 text-primary" href="javascript:void(0);">Read More<i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="card custom-card card-style-angle   border">
                                        <div class="card-body text-center rounded m-2">
                                            <div class="features-icon mb-2 m-auto  bg-warning-transparent">
                                                <svg class="svg-warning shadow-lg" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M16,11H8c-0.55197,0.00031-0.99969-0.44689-1-0.99886C7,10.00076,7,10.00038,7,10V6C6.99969,5.44803,7.44689,5.00031,7.99886,5C7.99924,5,7.99962,5,8,5h8c0.55197-0.00031,0.99969,0.44689,1,0.99886C17,5.99924,17,5.99962,17,6v4c0.00031,0.55197-0.44689,0.99969-0.99886,1C16.00076,11,16.00038,11,16,11z" />
                                                    <path opacity=".3"
                                                        d="M18,2H6C4.89545,2,4,2.89545,4,4v16c0,1.10455,0.89545,2,2,2h12c1.10455,0,2-0.89545,2-2V4C20,2.89545,19.10455,2,18,2z M17,6v4c0.00031,0.55194-0.4469,0.99969-0.99884,1C16.00073,11,16.00037,11,16,11H8c-0.55194,0.00031-0.99969-0.4469-1-0.99884C7,10.00073,7,10.00037,7,10V6C6.99969,5.44806,7.4469,5.00031,7.99884,5C7.99927,5,7.99963,5,8,5h8c0.55194-0.00031,0.99969,0.4469,1,0.99884C17,5.99927,17,5.99963,17,6z" />
                                                    <circle cx="8" cy="14" r="1" />
                                                    <circle cx="8" cy="18" r="1" />
                                                    <circle cx="12" cy="18" r="1" />
                                                    <circle cx="16" cy="18" r="1" />
                                                    <circle cx="16" cy="14" r="1" />
                                                    <circle cx="12" cy="14" r="1" />
                                                </svg>
                                            </div>
                                            <h6 class="fw-semibold mx-1">
                                                Bootstrap5 Framework
                                            </h6>
                                            <p class="text-muted mb-2 mx-1">
                                                Thanks to the Bootstrap 5 framework, because it gives us the ability to create responsive designs.
                                            </p>
                                            <a class="fs-12 mx-1 text-primary" href="javascript:void(0);">Read More<i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="card custom-card card-style-angle border">
                                        <div class="card-body text-center  rounded m-2">
                                            <div class="features-icon mb-2 m-auto bg-info-transparent">
                                                <svg class="svg-info shadow-lg" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <path opacity=".3"
                                                        d="M21,22H14a.99974.99974,0,0,1-1-1V14a.99974.99974,0,0,1,1-1h7a.99974.99974,0,0,1,1,1v7A.99974.99974,0,0,1,21,22Z" />
                                                    <path
                                                        d="M7.91406 17.5l2.793-2.793A.99989.99989 0 0 0 9.293 13.293L6.5 16.08594 3.707 13.293A.99989.99989 0 0 0 2.293 14.707l2.793 2.793L2.293 20.293A.99989.99989 0 1 0 3.707 21.707l2.793-2.793 2.793 2.793A.99989.99989 0 0 0 10.707 20.293zM21 11H14a1.00009 1.00009 0 0 1-.89453-1.44727l3.5-7a1.04127 1.04127 0 0 1 1.78906 0l3.5 7A1.00009 1.00009 0 0 1 21 11z" />
                                                    <path opacity=".3"
                                                        d="M6.5,11A4.5,4.5,0,1,1,11,6.5,4.50491,4.50491,0,0,1,6.5,11Z" />
                                                </svg>
                                            </div>
                                            <h6 class="fw-semibold mx-1">
                                                6 types of Icons
                                            </h6>
                                            <p class="text-muted mb-2 mx-1">
                                                More than 4 types of best Icons are included in this template to enhance design standards.
                                            </p>
                                            <a class="fs-12 mx-1 text-primary" href="javascript:void(0);">Read More<i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="card custom-card  card-style-angle border">
                                        <div class="card-body text-center rounded m-2">
                                            <div class="features-icon mb-2 m-auto bg-pink-transparent">
                                                <svg class="svg-pink shadow-lg" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path opacity=".3"
                                                        d="M8.44444,3.11121c-1.10457,0-2,0.89543-2,2v13.55556c-0.00003,1.22729-0.99493,2.22219-2.22222,2.22223h14.44445C20.50762,20.889,22,19.39662,22,17.55567c0,0,0-0.00001,0-0.00001V5.11121c0-1.10457-0.89543-2-2-2L8.44444,3.11121z" />
                                                    <path
                                                        d="M6.44446,18.66675V7.55603H4c-1.10455,0-2,0.89539-2,1.99994v9.33301c0,1.10461,0.89545,2,2,2h0.22223C5.44952,20.88898,6.4444,19.89404,6.44446,18.66675z" />
                                                    <path
                                                        d="M17,9.0001h-6c-0.55229,0-1-0.44771-1-1s0.44771-1,1-1h6c0.55228,0,1,0.44772,1,1S17.55228,9.0001,17,9.0001z M17,13.0001h-1c-0.55229,0-1-0.44771-1-1s0.44771-1,1-1h1c0.55228,0,1,0.44771,1,1S17.55228,13.0001,17,13.0001z M12,13.0001h-1c-0.55229,0-1-0.44771-1-1s0.44771-1,1-1h1c0.55229,0,1,0.44771,1,1S12.55229,13.0001,12,13.0001z M17,17.0001h-1c-0.55229,0-1-0.44772-1-1c0-0.55229,0.44771-1,1-1h1c0.55228,0,1,0.44771,1,1C18,16.55238,17.55228,17.0001,17,17.0001z M12,17.0001h-1c-0.55229,0-1-0.44772-1-1c0-0.55229,0.44771-1,1-1h1c0.55229,0,1,0.44771,1,1C13,16.55238,12.55229,17.0001,12,17.0001z" />
                                                </svg>
                                            </div>
                                            <h6 class="fw-semibold mx-1">
                                                Advanced Pages
                                            </h6>
                                            <p class="text-muted mb-2 mx-1">
                                                More advanced pages are included in this template for easy development adn customization.
                                            </p>
                                            <a class="fs-12 mx-1 text-primary" href="javascript:void(0);">Read More<i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="card custom-card  card-style-angle  border">
                                        <div class="card-body text-center rounded m-2">
                                            <div class="features-icon mb-2 m-auto bg-purple-transparent">
                                                <svg class="svg-purple shadow-lg" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <rect width="18" height="6" x="3" y="3" opacity=".3" rx="2" />
                                                    <rect width="18" height="6" x="3" y="9" opacity=".3" rx="2" />
                                                    <rect width="18" height="6" x="3" y="15" opacity=".3" rx="2" />
                                                    <circle cx="18" cy="6" r="1" />
                                                    <circle cx="18" cy="12" r="1" />
                                                    <circle cx="18" cy="18" r="1" />
                                                    <circle cx="15" cy="6" r="1" />
                                                    <circle cx="15" cy="12" r="1" />
                                                    <circle cx="15" cy="18" r="1" />
                                                    <path
                                                        d="M9 7H6A1 1 0 0 1 6 5H9A1 1 0 0 1 9 7zM9 13H6a1 1 0 0 1 0-2H9a1 1 0 0 1 0 2zM9 19H6a1 1 0 0 1 0-2H9a1 1 0 0 1 0 2z" />
                                                </svg>
                                            </div>
                                            <h6 class="fw-semibold mx-1">
                                                Built for developers
                                            </h6>
                                            <p class="text-muted mb-2 mx-1">
                                                Variables, elements, dashbords, documentation, and reusability are additional features.
                                            </p>
                                            <a class="fs-12 mx-1 text-primary" href="javascript:void(0);">Read More<i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="card custom-card card-style-angle border">
                                        <div class="card-body text-center  rounded m-2">
                                            <div class="features-icon mb-2 m-auto bg-success-transparent">
                                                <svg class="svg-success shadow-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path opacity=".3"
                                                        d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z" />
                                                    <path
                                                        d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z" />
                                                </svg>
                                            </div>
                                            <h6 class="fw-semibold mx-1">
                                                Documentation
                                            </h6>
                                            <p class="text-muted mb-2 mx-1">
                                                The documentation provides clear-cut material for the Velvet admin template user can understand .
                                            </p>
                                            <a class="fs-12 mx-1 text-primary" href="javascript:void(0);">Read More<i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="card custom-card card-style-angle  border">
                                        <div class="card-body  text-center rounded m-2">
                                            <div class="features-icon mb-2 m-auto bg-danger-transparent">
                                                <svg class="svg-danger shadow-lg" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <path opacity=".3"
                                                        d="M11,22A9,9,0,0,1,11,4a.99943.99943,0,0,1,1,1v7h7a.99943.99943,0,0,1,1,1A9.00984,9.00984,0,0,1,11,22Z" />
                                                    <path
                                                        d="M21,10H15a.99943.99943,0,0,1-1-1V3a.99943.99943,0,0,1,1-1,7.0018,7.0018,0,0,1,7,7A.99943.99943,0,0,1,21,10Z" />
                                                </svg>
                                            </div>
                                            <h6 class="fw-semibold mx-1">
                                                3 Types Of Charts
                                            </h6>
                                            <p class="text-muted mb-2 mx-1">
                                                We included three (3) types of the best possible chart options for your project..
                                            </p>
                                            <a class="fs-12 mx-1 text-primary" href="javascript:void(0);">Read More<i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-2 -->

                    <!-- Start:: Section-3 -->
                    <section class="section" id="about">
                        <img src="{{asset('build/assets/images/media/landing/4.png')}}" alt="img" class="banner-png2 op-1">
                        <img src="{{asset('build/assets/images/media/landing/7.png')}}" alt="img" class="banner-png4">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-primary mb-1"><span class="landing-section-heading">CUSTOMIZATION</span></p>
                            <h4 class="fw-semibold mb-2">Designed with precision and well documented</h4>
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <p class="text-muted fs-15 mb-5 fw-normal">Velvet comes with multiple customization options that are very easy to implement,some of customizable options are shown below.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-5 customize-image">
                                    <img src="{{asset('build/assets/images/media/landing/1.png')}}" alt="" class="custmize-img">
                                    </div>
                                <div class="col-lg-7 text-start">
                                    <p class="h4 mb-0"> Get to Know what we do?</p>
                                    <p class="mb-4 sub-text">Explore our diverse range of services and gain insight into our areas of specialization.</p>
                                    <ul class="list-unstyled fw-500 mb-4">
                                        <li class="list-item mb-2">
                                            <div class="d-flex align-items-start">
                                                <span class="me-1 text-primary op-8"><i class="bx bx-radio-circle-marked fs-20"></i></span>
                                                <div>
                                                    <h6 class="fs-15">Creative Design</h6>
                                                    <p class="op-8">Sed ut persp iciatis unde omnis iste natus er ror sit eaque ipsa quae ab illo inventore verit atis et quasi architecto beatae vitae dicta sunt explicabo sit</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-item mb-2">
                                            <div class="d-flex align-items-start">
                                                <span class="me-1 text-primary op-8"><i class="bx bx-radio-circle-marked fs-20"></i></span>
                                                <div>
                                                    <h6 class="fs-15">Quality &amp; Clean Code</h6>
                                                    <p class="op-8 mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium volup tatum delen iti, atque corrupti quos dolores</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-lg me-2">Get Started Now</a>
                                    <a href="javascript:void(0);" class="btn btn-primary-transparent btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-3 -->

                    <!-- Start:: Section-4 -->
                    <section class="section landing-Features" id="statistics">
                        <div class="container text-center position-relative  text-fixed-white">
                            <p class="fs-12 fw-semibold text-primary mb-1  text-fixed-white"><span class="landing-section-heading">STATISTICS</span></p>
                            <h4 class="fw-semibold mb-2  text-fixed-white">More than 120+ projects completed.</h4>
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <p class="op-7 fs-15 mb-5 fw-normal  text-fixed-white">We are proud to have top class clients and customers,which motivates us to work more on projects.</p>
                                </div>
                            </div>
                            <div class="row g-4 justify-content-evenly">
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="p-3 text-center rounded-2 bg-dark-transparent">
                                        <span class="mb-3 avatar avatar-lg avatar-rounded bg-dark-transparent">
                                            <i class="fs-24 bx bx-spreadsheet text-fixed-white"></i>
                                        </span>
                                        <h3 class="fw-semibold mb-0 text-fixed-white">120+</h3>
                                        <p class="mb-1 fs-14 op-7 text-fixed-white">
                                            Projects
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="p-3 text-center rounded-2 bg-dark-transparent">
                                        <span class="mb-3 avatar avatar-lg avatar-rounded bg-dark-transparent">
                                            <i class="fs-24 bx bx-user-plus text-fixed-white"></i>
                                        </span>
                                        <h3 class="fw-semibold mb-0 text-fixed-white">20K+</h3>
                                        <p class="mb-1 fs-14 op-7 text-fixed-white">
                                            Clients
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="p-3 text-center rounded-2 bg-dark-transparent">
                                        <span class="mb-3 avatar avatar-lg avatar-rounded bg-dark-transparent">
                                            <i class="fs-24 bx bx-money text-fixed-white"></i>
                                        </span>
                                        <h3 class="fw-semibold mb-0 text-fixed-white">$45.8M</h3>
                                        <p class="mb-1 fs-14 op-7 text-fixed-white">
                                            Income Earned
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="p-3 text-center rounded-2 bg-dark-transparent">
                                        <span class="mb-3 avatar avatar-lg avatar-rounded bg-dark-transparent">
                                            <i class="fs-24 bx bx-user-circle text-fixed-white"></i>
                                        </span>
                                        <h3 class="fw-semibold mb-0 text-fixed-white">854</h3>
                                        <p class="mb-1 fs-14 op-7 text-fixed-white">
                                            Employees
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                                    <div class="p-3 text-center rounded-2 bg-dark-transparent">
                                        <span class="mb-3 avatar avatar-lg avatar-rounded bg-dark-transparent">
                                            <i class="fs-24 bx bx-calendar text-fixed-white"></i>
                                        </span>
                                        <h3 class="fw-semibold mb-0 text-fixed-white">5+</h3>
                                        <p class="mb-1 fs-14 op-7 text-fixed-white">
                                            Years of Experience
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-4 -->

                    <!-- Start:: Section-5 -->
                    <section class="section landing-testimonials section-background section-style " id="clients">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-primary mb-1"><span class="landing-section-heading">OUR TEAM</span></p>
                            <h4 class="fw-semibold mb-2">Great things in business are done by a team.</h4>
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <p class="text-muted fs-15 mb-5 fw-normal">Success is best when it shared,our team consists of highly qulified employees that works hard to raise company standards.</p>
                                </div>
                            </div>

                            <div class="swiper pagination-dynamic text-start">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Samantha Taylor</p>
                                                <span class="text-primary fs-12">Founder &amp; CEO</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button aria-label="button" type="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button aria-label="button" type="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Peter Parker</p>
                                                <span class="text-primary fs-12">Director</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Andrew garfield</p>
                                                <span class="text-primary fs-12">Manager</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Elizabeth Rose</p>
                                                <span class="text-primary fs-12">HR</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Stuart Benny</p>
                                                <span class="text-primary fs-12">Team Lead</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Sasha Banks</p>
                                                <span class="text-primary fs-12">Sr UI Developer</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Alicia Keys</p>
                                                <span class="text-primary fs-12">Full Stack Developer</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4 ">Jason Mama</p>
                                                <span class="text-primary fs-12">React Developer</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Samantha Taylor</p>
                                                <span class="text-primary fs-12">Founder &amp; CEO</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Peter Parker</p>
                                                <span class="text-primary fs-12">Director</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Andrew garfield</p>
                                                <span class="text-primary fs-12">Manager</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card text-center team-card border">
                                            <div class="card-body">
                                                <span class="avatar avatar-xxl avatar-rounded mb-3 team-avatar">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                </span>
                                                <p class="fw-semibold fs-15 mb-0 text-default mt-4">Elizabeth Rose</p>
                                                <span class="text-primary fs-12">HR</span>
                                                <p class="text-muted px-1 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <div class="mt-3">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination mt-4"></div>
                            </div>
                            <div class="mt-4">
                                <div class="text-center">
                                    <a href="javascript:void(0)" class="btn  text-primary text-decoration-underline">View all</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-5 -->

                    <!-- Start:: Section-6 -->
                    <section class="section" id="our-mission">
                        <img src="{{asset('build/assets/images/media/landing/4.png')}}" alt="img" class="banner-png2 op-2">
                        <img src="{{asset('build/assets/images/media/landing/7.png')}}" alt="img" class="banner-png4">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-primary mb-1"><span class="landing-section-heading">ABOUT PRODUCT</span></p>
                            <h4 class="fw-semibold mb-2">Best in class range.</h4>
                            <div class="row justify-content-center mb-5">
                                <div class="col-xl-6">
                                    <p class="text-muted fs-15 mb-5 fw-normal">We assemble an experienced interdisciplinary team to make your vision real. We turn your ideas into great digital products.</p>
                                </div>
                            </div>
                            <div id="carouselExampleSlidesOnly">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-info">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-lg avatar-rounded bg-info-transparent">
                                                            <i class="bx bx-check-square text-info fs-20  p-2 rounded-5 "></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">
                                                            Quality &amp; Clean Code
                                                        </h6>
                                                        <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-primary">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary-transparent">
                                                        <i class="bx bx-file-blank text-primary fs-20  p-2 rounded-5 "></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Advanced Pages
                                                    </h6>
                                                    <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-warning">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-lg avatar-rounded bg-warning-transparent">
                                                        <i class="bx bx-bookmark-minus text-warning fs-20  p-2 rounded-5 "></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Design Quality
                                                    </h6>
                                                    <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-purple">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-lg avatar-rounded bg-purple-transparent">
                                                            <i class="bx bx-select-multiple text-purple fs-20  p-2 rounded-5 "></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">
                                                            Multiple Demos
                                                        </h6>
                                                        <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-pink">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-lg avatar-rounded bg-pink-transparent">
                                                            <i class="bx bx-layer text-pink fs-20  p-2 rounded-5 "></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">
                                                            Bootstrap5 Framework
                                                        </h6>
                                                        <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-secondary">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-lg avatar-rounded bg-secondary-transparent">
                                                            <i class="bx bx-smile text-secondary fs-20  p-2 rounded-5 "></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">
                                                            6 types of Icons
                                                        </h6>
                                                        <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-info">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-lg avatar-rounded bg-info-transparent">
                                                            <i class="bx bx-check-square text-info fs-20  p-2 rounded-5 "></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">
                                                            Quality &amp; Clean Code
                                                        </h6>
                                                        <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-primary">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-lg avatar-rounded bg-primary-transparent">
                                                        <i class="bx bx-file-blank text-primary fs-20  p-2 rounded-5 "></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Advanced Pages
                                                    </h6>
                                                    <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-warning">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-lg avatar-rounded bg-warning-transparent">
                                                        <i class="bx bx-bookmark-minus text-warning fs-20  p-2 rounded-5 "></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Design Quality
                                                    </h6>
                                                    <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-purple">
                                        <div class="card-body">
                                            <div class="d-flex align-items-top">
                                                <div class="me-3">
                                                    <span class="avatar avatar-lg avatar-rounded bg-purple-transparent">
                                                        <i class="bx bx-select-multiple text-purple fs-20  p-2 rounded-5 "></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">
                                                        Multiple Demos
                                                    </h6>
                                                    <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-pink">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-lg avatar-rounded bg-pink-transparent">
                                                            <i class="bx bx-layer text-pink fs-20  p-2 rounded-5 "></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-semibold mb-1">
                                                            Bootstrap5 Framework
                                                        </h6>
                                                        <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6">
                                        <div class="card custom-card text-start border landing-missions landing-missions-secondary">
                                            <div class="card-body">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3">
                                                        <span class="avatar avatar-lg avatar-rounded bg-secondary-transparent">
                                                            <i class="bx bx-smile text-secondary fs-20  p-2 rounded-5 "></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-se
                                                        
                                                        
                                                        mibold mb-1">
                                                            6 types of Icons
                                                        </h6>
                                                        <p class="mb-0 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-6 -->

                    <!-- Start:: Section-7 -->
                    <section class="section section-background section-style" id="pricing">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-primary mb-1"><span class="landing-section-heading">PRICING</span></p>
                            <h4 class="fw-semibold mb-2">Velvet comes with most affordable pricing range.</h4>
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <p class="text-muted fs-15 mb-3 fw-normal">Our plans are most affordable and are mainly placed by focussing every category in the sector even basic plan helps better.</p>
                                </div>
                                <div class="d-flex justify-content-center mt-2 mb-3">
                                    <ul class="nav nav-tabs mb-3 tab-style-6 bg-primary-transparent" id="myTab1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pricing-monthly1" data-bs-toggle="tab"
                                                data-bs-target="#pricing-monthly1-pane" type="button" role="tab"
                                                aria-controls="pricing-monthly1-pane" aria-selected="true">Monthly</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pricing-yearly1" data-bs-toggle="tab"
                                                data-bs-target="#pricing-yearly1-pane" type="button" role="tab"
                                                aria-controls="pricing-yearly1-pane" aria-selected="false">Yearly</button>
                                        </li>
                                    </ul>
                                </div>
                            </div><div class="col-xl-12">
                                <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane show active p-0 border-0" id="pricing-monthly1-pane" role="tabpanel" aria-labelledby="pricing-monthly1" tabindex="0">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="card custom-card overflow-hidden">
                                                    <div class="card-body p-0">
                                                        <div class="p-4">
                                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                                <div class="d-flex">
                                                                    <i class="ti ti-free-rights fs-24 text-primary me-1"></i>
                                                                    <div class="fs-18 fw-semibold ">Free</div>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-success-transparent">For Indivudials</span>
                                                                </div>
                                                            </div>
                                                            <div class="fs-25 fw-bold mb-1">$0<sub class="text-muted fw-semibold fs-11">/ Per Month</sub></div>
                                                            <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                            <div class="fs-12 mb-3"><u>Billed Monthly</u></div>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1 d-inline-block">2 Free</strong>Websites
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1 d-inline-block">1 GB</strong>Hard disk storage
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1 d-inline-block">1 Year</strong>Email support
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1 d-inline-block">2</strong>Licenses
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        Custom SEO optimizataion
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        Chat Support
                                                                    </span>
                                                                </li>
                                                                <li class="d-grid">
                                                                    <button type="button" aria-label="button" class="btn btn-light btn-wave waves-effect waves-light">Choose Plan</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="card custom-card overflow-hidden">
                                                    <div class="card-body p-0">
                                                        <div class="p-4">
                                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                                <div class="d-flex">
                                                                    <i class="ti ti-api-app  fs-24 text-primary me-1"></i>
                                                                    <div class="fs-18 fw-semibold">Team</div>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-success-transparent">
                                                                        For Small Teams
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="fs-25 fw-bold mb-1">$149<sub class="text-muted fw-semibold fs-11">/ Per Month</sub></div>
                                                            <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                            <div class="fs-12 mb-3"><u>Billed Monthly</u></div>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1 d-inline-block">5 Free</strong>Websites
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1 d-inline-block">5 GB</strong>Hard disk storage
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1 d-inline-block">2 Years</strong>Email support
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1 d-inline-block">5</strong>Licenses
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        Custom SEO optimizataion
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        Chat Support
                                                                    </span>
                                                                </li>
                                                                <li class="d-grid">
                                                                    <button type="button" aria-label="button" class="btn btn-light btn-wave waves-effect waves-light">Choose Plan</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="custom-card  border border-primary rounded card">
                                                    <div class="d-flex flex-column p-0">
                                                        <div class="card-body p-0">
                                                            <div class="p-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                                    <div class="d-flex">
                                                                        <i class="ti ti-businessplan text-primary fs-24 me-1"></i>
                                                                        <div class="fs-18 fw-semibold">Business</div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-primary-transparent">
                                                                            For Business Purpose
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="fs-25 fw-bold mb-1">$1,299<sub class="text-muted fw-semibold fs-11">/ Per Month</sub></div>
                                                                <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                                <div class="fs-12 mb-3 text-primary"><u>Billed Monthly</u></div>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1 d-inline-block">10 Free</strong>Websites
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1 d-inline-block">20 GB</strong>Hard disk storage
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1 d-inline-block">3 Years</strong>Email support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1 d-inline-block">15</strong>Licenses
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            Custom SEO optimizataion
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            Chat Support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-grid">
                                                                        <button type="button" aria-label="button" class="btn btn-primary btn-wave waves-effect waves-light">Choose Plan</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0 border-0" id="pricing-yearly1-pane" role="tabpanel" aria-labelledby="pricing-yearly1" tabindex="0">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="card custom-card overflow-hidden">
                                                    <div class="card-body p-0">
                                                        <div class="p-4">
                                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                                <div class="d-flex">
                                                                    <i class="ti ti-free-rights fs-24 text-primary me-1"></i>
                                                                    <div class="fs-18 fw-semibold ">Free</div>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-success-transparent">For Indivudials</span>
                                                                </div>
                                                            </div>
                                                            <div class="fs-25 fw-bold mb-1">$0<sub class="text-muted fw-semibold fs-11">/ Per Year</sub></div>
                                                            <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                            <div class="fs-12 mb-3"><u>Billed Yearly</u></div>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1">2 Free</strong>Websites
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1">1 GB</strong>Hard disk storage
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1">1 Year</strong>Email support
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1">2</strong>Licenses
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        Custom SEO optimizataion
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        Chat Support
                                                                    </span>
                                                                </li>
                                                                <li class="d-grid">
                                                                    <button type="button" aria-label="button" class="btn btn-light btn-wave waves-effect waves-light">Choose Plan</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="card custom-card overflow-hidden">
                                                    <div class="card-body p-0">
                                                        <div class="p-4">
                                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                                <div class="d-flex">
                                                                    <i class="ti ti-api-app  fs-24 text-primary me-1"></i>
                                                                    <div class="fs-18 fw-semibold">Team</div>
                                                                </div>
                                                                <div>
                                                                    <span class="badge bg-success-transparent">
                                                                        For Small Teams
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="fs-25 fw-bold mb-1">$10,49<sub class="text-muted fw-semibold fs-11">/ Per Year</sub></div>
                                                            <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                            <div class="fs-12 mb-3"><u>Billed Yearly</u></div>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1">5 Free</strong>Websites
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1">5 GB</strong>Hard disk storage
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1">2 Years</strong>Email support
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                    </span>
                                                                    <span>
                                                                        <strong class="me-1">5</strong>Licenses
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        Custom SEO optimizataion
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-3">
                                                                    <span class="me-2">
                                                                        <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                    </span>
                                                                    <span>
                                                                        Chat Support
                                                                    </span>
                                                                </li>
                                                                <li class="d-grid">
                                                                    <button type="button" aria-label="button" class="btn btn-light btn-wave waves-effect waves-light">Choose Plan</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="custom-card border border-primary rounded card">
                                                    <div class=" d-flex flex-column p-0">
                                                        <div class="card-body p-0">
                                                            <div class="p-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                                    <div class="d-flex">
                                                                        <i class="ti ti-businessplan text-primary fs-24 me-1"></i>
                                                                        <div class="fs-18 fw-semibold">Business</div>
                                                                    </div>
                                                                    <div>
                                                                        <span class="badge bg-primary-transparent">
                                                                            For Business Purpose
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="fs-25 fw-bold mb-1">$50,299<sub class="text-muted fw-semibold fs-11">/ Per Year</sub></div>
                                                                <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                                <div class="fs-12 mb-3 text-primary"><u>Billed Yearly</u></div>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">10 Free</strong>Websites
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">20 GB</strong>Hard disk storage
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">3 Years</strong>Email support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            <strong class="me-1">15</strong>Licenses
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                        </span>
                                                                        <span>
                                                                            Custom SEO optimizataion
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-3">
                                                                        <span class="me-2">
                                                                            <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                        </span>
                                                                        <span>
                                                                            Chat Support
                                                                        </span>
                                                                    </li>
                                                                    <li class="d-grid">
                                                                        <button type="button" aria-label="button" class="btn btn-primary btn-wave waves-effect waves-light">Choose Plan</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-7 -->

                    <!-- Start:: Section-8 -->
                    <section class="section landing-Features">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12  text-start">
                                    <h3 class="text-fixed-white">Get Notify When Project is Updated</h3>
                                    <p class=" fs-15 fw-normal text-fixed-white op-7">We develop modern concepts to design and develop the interface design, web development to deliver them with eye-catching innovative ideas. We believe in effective, efficient and timely solutions for various types of businesses. Our team develops a
                                        long-term strategy to bring out spark conversation with clients, and visibility to your company.</p>
                                        <span class="text-center d-flex">
                                        <input type="email" class="form-control wd-200 me-2" id="contact-address-email" placeholder="Enter Email Id">
                                            <button type="button" aria-label="button" class="text-center btn btn-wave btn-secondary">Notify me</button>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-8 -->

                    <!-- Start:: Section-9 -->
                    <section class="section  section-background section-style" id="faq">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-primary mb-1"><span class="landing-section-heading">F.A.Q</span></p>
                            <h4 class="fw-semibold mb-2">Frequently asked questions ?</h4>
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <p class="text-muted fs-15 mb-5 fw-normal">We have shared some of the most frequently asked questions to help you out.</p>
                                </div>
                            </div>
                            <div class="row text-start">
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title d-flex align-items-center">
                                                        <i class="bx bx-layer fs-20 me-1"></i>   General ?
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="accordion accordion-customicon1 accordion-primary" id="accordionFAQ1">
                                                        <div class="accordion-item shadow-none">
                                                            <h2 class="accordion-header" id="headingcustomicon2One">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsecustomicon2One" aria-expanded="true"
                                                                    aria-controls="collapsecustomicon2One">
                                                                    Where can I subscribe to your newsletter?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon2One" class="accordion-collapse collapse show"
                                                                aria-labelledby="headingcustomicon2One"
                                                                data-bs-parent="#accordionFAQ1">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item shadow-none">
                                                            <h2 class="accordion-header" id="headingcustomicon2Two">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Two"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon2Two">
                                                                    Where can in edit my address?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon2Two" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon2Two"
                                                                data-bs-parent="#accordionFAQ1">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item shadow-none">
                                                            <h2 class="accordion-header" id="headingcustomicon2Three">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Three"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon2Three">
                                                                    What are your opening hours?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon2Three" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon2Three"
                                                                data-bs-parent="#accordionFAQ1">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item shadow-none">
                                                            <h2 class="accordion-header" id="headingcustomicon2Four">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Four"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon2Four">
                                                                    Do I have the right to return an item?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon2Four" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon2Four"
                                                                data-bs-parent="#accordionFAQ1">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title d-flex align-items-center">
                                                        <i class="bx bx-support fs-20 me-1"></i>  Support ?
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="accordion accordion-customicon1 accordion-primary" id="accordionFAQ3">
                                                        <div class="accordion-item shadow-none">
                                                            <h2 class="accordion-header" id="headingcustomicon3One">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsecustomicon3One" aria-expanded="false"
                                                                    aria-controls="collapsecustomicon3One">
                                                                    What is the order procedure?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon3One" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon3One"
                                                                data-bs-parent="#accordionFAQ3">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item shadow-none">
                                                            <h2 class="accordion-header" id="headingcustomicon3Two">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon3Two"
                                                                    aria-expanded="true" aria-controls="collapsecustomicon3Two">
                                                                    How and when do I receive the invoices?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon3Two" class="accordion-collapse collapse show"
                                                                aria-labelledby="headingcustomicon3Two"
                                                                data-bs-parent="#accordionFAQ3">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item shadow-none">
                                                            <h2 class="accordion-header" id="headingcustomicon3Three">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon3Three"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon3Three">
                                                                    Which method of ordering is best for me?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon3Three" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon3Three"
                                                                data-bs-parent="#accordionFAQ3">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item shadow-none">
                                                            <h2 class="accordion-header" id="headingcustomicon3Four">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon3Four"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon3Four">
                                                                    What does an order cost?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon3Four" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon3Four"
                                                                data-bs-parent="#accordionFAQ3">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-9 -->

                    <!-- Start:: Section-10 -->
                    <section class="section" id="testimonials">
                        <img src="{{asset('build/assets/images/media/landing/4.png')}}" alt="img" class="banner-png2 op-2">
                        <img src="{{asset('build/assets/images/media/landing/7.png')}}" alt="img" class="banner-png4">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-primary mb-1"><span class="landing-section-heading">TESTIMONIALS</span></p>
                            <h4 class="fw-semibold mb-2">We never failed to reach expectations</h4>
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <p class="text-muted fs-15 mb-5 fw-normal">Some of the reviews our clients gave which brings motivation to work for future projects.</p>
                                </div>
                            </div>
                            <div class="swiper pagination-dynamic text-start pt-0">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card border">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <div class="">
                                                        <div class="">
                                                            <span class="avatar avatar-xxl mb-3">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="lh-1 ">
                                                            <p class="mb-1 fw-semibold fs-14">Alex Carey</p>
                                                            <div class="mb-1">
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 ps-2">
                                                        <span class="text-muted"><i class="ri-double-quotes-l fs-15"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r fs-15"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <div class="">
                                                        <div class="">
                                                            <span class="avatar avatar-xxl mb-3">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="lh-1 ">
                                                            <p class="mb-1 fw-semibold fs-14">Adom Sharayi</p>
                                                            <div class="mb-1">
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 ps-2">
                                                        <span class="text-muted"><i class="ri-double-quotes-l fs-15"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r fs-15"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <div class="">
                                                        <div class="">
                                                            <span class="avatar avatar-xxl mb-3">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="lh-1 ">
                                                            <p class="mb-1 fw-semibold fs-14">Davide Jonese</p>
                                                            <div class="mb-1">
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 ps-2">
                                                        <span class="text-muted"><i class="ri-double-quotes-l fs-15"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r fs-15"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <div class="">
                                                        <div class="">
                                                            <span class="avatar avatar-xxl mb-3">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="lh-1 ">
                                                            <p class="mb-1 fw-semibold fs-14">Josephw Alize</p>
                                                            <div class="mb-1">
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 ps-2">
                                                        <span class="text-muted"><i class="ri-double-quotes-l fs-15"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r fs-15"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <div class="">
                                                        <div class="">
                                                            <span class="avatar avatar-xxl mb-3">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="lh-1 ">
                                                            <p class="mb-1 fw-semibold fs-14">Alisaben Avirayi</p>
                                                            <div class="mb-1">
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 ps-2">
                                                        <span class="text-muted"><i class="ri-double-quotes-l fs-15"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r fs-15"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <div class="">
                                                        <div class="">
                                                            <span class="avatar avatar-xxl mb-3">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="lh-1 ">
                                                            <p class="mb-1 fw-semibold fs-14">Karen Vally</p>
                                                            <div class="mb-1">
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 ps-2">
                                                        <span class="text-muted"><i class="ri-double-quotes-l fs-15"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r fs-15"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <div class="">
                                                        <div class="">
                                                            <span class="avatar avatar-xxl mb-3">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="lh-1 ">
                                                            <p class="mb-1 fw-semibold fs-14">Bollyes vrasu</p>
                                                            <div class="mb-1">
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 ps-2">
                                                        <span class="text-muted"><i class="ri-double-quotes-l fs-15"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r fs-15"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card border">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <div class="">
                                                        <div class="">
                                                            <span class="avatar avatar-xxl mb-3">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="lh-1 ">
                                                            <p class="mb-1 fw-semibold fs-14">Alex Carey</p>
                                                            <div class="mb-1">
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-fill text-warning align-middle fs-13"></i>
                                                                <i class="ri-star-s-line text-warning align-middle fs-12"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 ps-2">
                                                        <span class="text-muted"><i class="ri-double-quotes-l fs-15"></i> Lorem ipsum dolor sit amet consectetur amet consectetur adipisicing elit. Earum autem  adipisicing elit. quaerat distinctio  --<i class="ri-double-quotes-r fs-15"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination mt-4"></div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-10 -->

                    <!-- Start:: Section-11 -->
                    <section class="section section-background section-style" id="contact">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-primary mb-1"><span class="landing-section-heading">CONTACT US</span></p>
                            <h4 class="fw-semibold mb-2">Have any questions ? We would love to hear from you.</h4>
                            <p class="text-muted fs-15 mb-5 fw-normal">You can contact us anytime regarding any queries or deals,dont hesitate to clear your doubts before trying our product.</p>

                            <div class="row text-start justify-content-center">


                                <div class="col-xxl-10 col-lg-12 col-md-12 col-sm-12">
                                    <div class="card custom-card contactus-form overflow-hidden">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-xl-5 p-0">
                                                    <div class="p-3">
                                                        <h5 class="card-title mb-1">Contact Information</h5>
                                                        <p class="text-muted mb-0">Fill up the Form our team will be get back to you</p>
                                                    </div>
                                                    <div class="p-3">
                                                        <div class="d-flex align-items-top mt-2">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-md p-2 bg-info-transparent">
                                                                    <i class="bx bxs-phone"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <div class=" mb-1 align-items-top">
                                                                    <h6 class="fw-semibold mb-1 lh-1">Phone number</h6>
                                                                    <span class="text-muted">+ 01 234 567 88</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top mt-4">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-md p-2 bg-pink-transparent">
                                                                    <i class="bx bxs-envelope"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <div class=" mb-1 align-items-top">
                                                                    <h6 class="fw-semibold mb-1 lh-1">Email Address</h6>
                                                                    <span class="text-muted">Alizver873@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top mt-4">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-md p-2 bg-teal-transparent">
                                                                    <i class="bx bxs-time"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <div class=" mb-1 align-items-top">
                                                                    <h6 class="fw-semibold mb-1 lh-1">Timings</h6>
                                                                    <span class="text-muted">Mon-Fri 09:00 to 06:00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top mt-4">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-md p-2 bg-warning-transparent">
                                                                    <i class="bx bxs-location-plus"></i>
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <div class=" mb-1 align-items-top">
                                                                    <h6 class="fw-semibold mb-1 lh-1">Address</h6>
                                                                    <span class="text-muted">New York, NY 10012, US-52014</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 border rounded-3  p-3">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-6">
                                                            <label for="contact-address-firstname" class="form-label ">First Name :</label>
                                                            <input type="text" class="form-control" id="contact-address-firstname" placeholder="Enter Name">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="contact-address-lastname" class="form-label ">Last Name :</label>
                                                            <input type="text" class="form-control" id="contact-address-lastname" placeholder="Enter Name">
                                                        </div>
                                                        <div class="col-xl-6 mt-4">
                                                            <label for="contact-address-phone" class="form-label ">Phone No :</label>
                                                            <input type="text" class="form-control" id="contact-address-phone" placeholder="Enter Phone No">
                                                        </div>
                                                        <div class="col-xl-6 mt-4">
                                                            <label for="contact-address-email" class="form-label ">Email Id :</label>
                                                            <input type="email" class="form-control" id="contact-address-email1" placeholder="Enter Email Id">
                                                        </div>
                                                        <div class="col-xl-6 mt-4">
                                                            <label for="contact-address-address" class="form-label ">Address :</label>
                                                            <textarea class="form-control" id="contact-address-address" rows="2"></textarea>
                                                        </div>
                                                        <div class="col-xl-6 mt-4">
                                                            <label for="contact-mail-message" class="form-label ">Message :</label>
                                                            <textarea class="form-control" id="contact-mail-message" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-top-0 ps-0 pb-0 mt-1">
                                                        <div class="text-start">
                                                            <button type="button" aria-label="button" class="btn btn-primary btn-wave">Send Message</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-11 -->

                    <!-- Start:: Section-12 -->
                    <section class="section landing-footer text-fixed-white">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="px-4">
                                        <p class="fw-semibold mb-3"><a aria-label="anchor" href="{{url('index')}}"><img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt=""></a></p>
                                        <p class="mb-2 op-6 fw-normal">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit et magnam, fuga est mollitia eius, quo illum illo inventore optio aut quas omnis rem. Dolores accusantium aspernatur minus ea incidunt.
                                        </p>
                                        <p class="mb-0 op-6 fw-normal">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem ea esse ad</p>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="px-4">
                                        <h6 class="fw-semibold mb-3">PAGES</h6>
                                        <ul class="list-unstyled op-6 fw-normal landing-footer-list">
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Email</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Profile</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Timeline</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Projects</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Contacts</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Portfolio</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="px-4">
                                        <h6 class="fw-semibold">INFO</h6>
                                        <ul class="list-unstyled op-6 fw-normal landing-footer-list">
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Our Team</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Contact US</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">About</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Services</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Blog</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white">Terms &amp; Conditions</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="px-4">
                                        <h6 class="fw-semibold">CONTACT</h6>
                                        <ul class="list-unstyled fw-normal landing-footer-list">
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-home-4-line me-1 align-middle"></i> New York, NY 10012, US</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-mail-line me-1 align-middle"></i> info@fmail.com</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-phone-line me-1 align-middle"></i> +(555)-1920 1831</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-printer-line me-1 align-middle"></i> +(123) 1293 123</a>
                                            </li>
                                            <li class="mt-3">
                                                <p class="mb-2 fw-semibold op-8">FOLLOW US ON :</p>
                                                <div class="mb-0">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                            <i class="ri-github-line fw-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                            <i class="ri-youtube-line fw-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-12 -->

@endsection

@section('scripts')

        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
        
        <!-- INTERNAL LANGING JS -->
        @vite('resources/assets/js/landing.js')
        

@endsection