@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
            
                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">FAQ'S</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">FAQ'S</li>
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
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xm-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body p-0">
                                            <div class="faqs-page-banner">
                                                <div class="text-center p-3 text-white mb-4">
                                                    <h5 class="mb-1  fw-semibold text-primary">F.A.Q's</h5>
                                                    <h3 class="mb-1 fw-semibold text-fixed-white">Frequently Asked Questions</h3>
                                                    <p class="fs-15  op-8 text-fixed-white">We have shared some of the most frequently asked questions to help you out! </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-8 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                                    <ul class="nav nav-pills nav-justified  mb-3 gx-3 tab-style-6 d-sm-flex d-block" id="pills-tab" role="tablist">
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link d-flex align-items-center active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true"><i class="bx bx-layer fs-20  me-2"></i><span class="d-block">General</span></button>
                                        </li>
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link d-flex align-items-center" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false"><i class="bx bx-support fs-20  me-2"></i><span class="d-block"> Support</span></button>
                                        </li>
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link d-flex align-items-center" id="pills-contact-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact" type="button" role="tab"
                                                aria-controls="pills-contact" aria-selected="false"><i class="bx bx-shield-plus fs-20  me-2"></i><span class="d-block"> Security</span></button>
                                        </li>
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link d-flex align-items-center" id="pills-disabled-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-disabled" type="button" role="tab"
                                                aria-controls="pills-disabled" aria-selected="false"><i class="bx bx-cog fs-20  me-2"></i><span class="d-block">Services</span></button>
                                        </li>
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link d-flex align-items-center" id="pills-other-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-other" type="button" role="tab"
                                                aria-controls="pills-other" aria-selected="false"><i class="bx bx-category fs-20  me-2"></i><span class="d-block"> Others</span></button>
                                        </li>
                                    </ul>
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane p-0 border-0 show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                                    <h5 class="text-center mb-3">General</h5>
                                                    <div class="accordion accordion-customicon1 accordion-primary" id="accordionFAQ1">
                                                        <div class="accordion-item">
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
                                                        <div class="accordion-item">
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
                                                        <div class="accordion-item">
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
                                                        <div class="accordion-item">
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
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon2five">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2five"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon2five">
                                                                    What are your opening hours?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon2five" class="accordion-collapse collapse"
                                                                aria-labelledby="collapsecustomicon2five"
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
                                                <div class="tab-pane p-0 border-0" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                                    <h5 class="text-center  mb-3">Support</h5>
                                                    <div class="accordion accordion-customicon1 accordion-primary" id="accordionFAQ3">
                                                        <div class="accordion-item">
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
                                                        <div class="accordion-item">
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
                                                        <div class="accordion-item">
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
                                                        <div class="accordion-item">
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
                                                <div class="tab-pane p-0 border-0" id="pills-contact" role="tabpanel"
                                                    aria-labelledby="pills-contact-tab" tabindex="0">
                                                    <h5 class="text-center  mb-3">Security</h5>
                                                    <div class="accordion accordion-customicon1 accordion-primary" id="accordionFAQ4">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon31">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsecustomicon31" aria-expanded="false"
                                                                    aria-controls="collapsecustomicon31">
                                                                    What is the order procedure?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon31" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon31"
                                                                data-bs-parent="#accordionFAQ4">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon32">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon32"
                                                                    aria-expanded="true" aria-controls="collapsecustomicon32">
                                                                    How and when do I receive the invoices?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon32" class="accordion-collapse collapse show"
                                                                aria-labelledby="headingcustomicon32"
                                                                data-bs-parent="#accordionFAQ4">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon33">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon33"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon33">
                                                                    Which method of ordering is best for me?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon33" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon33"
                                                                data-bs-parent="#accordionFAQ4">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon34">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon34"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon34">
                                                                    What does an order cost?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon34" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon34"
                                                                data-bs-parent="#accordionFAQ4">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon3five">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon3five"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon3five">
                                                                    What does an order cost?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon3five" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon3five"
                                                                data-bs-parent="#accordionFAQ4">
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
                                                <div class="tab-pane p-0 border-0" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                                                    <h5 class="text-center  mb-3">Services</h5>
                                                    <div class="accordion accordion-customicon1 accordion-primary" id="accordionFAQ5">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon311">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsecustomicon311" aria-expanded="false"
                                                                    aria-controls="collapsecustomicon311">
                                                                    What is the order procedure?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon311" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon311"
                                                                data-bs-parent="#accordionFAQ5">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon322">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon322"
                                                                    aria-expanded="true" aria-controls="collapsecustomicon322">
                                                                    How and when do I receive the invoices?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon322" class="accordion-collapse collapse show"
                                                                aria-labelledby="headingcustomicon322"
                                                                data-bs-parent="#accordionFAQ5">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon333">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon333"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon333">
                                                                    Which method of ordering is best for me?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon333" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon333"
                                                                data-bs-parent="#accordionFAQ5">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon344">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon344"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon344">
                                                                    What does an order cost?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon344" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon344"
                                                                data-bs-parent="#accordionFAQ5">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon5five">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon5five"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon5five">
                                                                    What does an order cost?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon5five" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon5five"
                                                                data-bs-parent="#accordionFAQ5">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon5six">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon5six"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon5six">
                                                                    What does an order cost?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon5six" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon5six"
                                                                data-bs-parent="#accordionFAQ5">
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
                                                <div class="tab-pane p-0 border-0" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab" tabindex="0">
                                                    <h5 class="text-center  mb-3">Others</h5>
                                                    <div class="accordion accordion-customicon1 accordion-primary" id="accordionFAQ">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon4one">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsecustomicon3" aria-expanded="false"
                                                                    aria-controls="collapsecustomicon3">
                                                                    What is the order procedure?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon3" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon4one"
                                                                data-bs-parent="#accordionFAQ">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon4Two">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon"
                                                                    aria-expanded="true" aria-controls="collapsecustomicon">
                                                                    How and when do I receive the invoices?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon" class="accordion-collapse collapse show"
                                                                aria-labelledby="headingcustomicon4Two"
                                                                data-bs-parent="#accordionFAQ5">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon4Three">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon3333"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon3333">
                                                                    Which method of ordering is best for me?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon3333" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon4Three"
                                                                data-bs-parent="#accordionFAQ5">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon4Four">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon34444"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon34444">
                                                                    What does an order cost?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon34444" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon4Four"
                                                                data-bs-parent="#accordionFAQ5">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon4five">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon5"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon5">
                                                                    What does an order cost?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon5" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon4five"
                                                                data-bs-parent="#accordionFAQ5">
                                                                <div class="accordion-body">
                                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                                    default, until the collapse plugin adds the appropriate classes that we
                                                                    use to style each element
                                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingcustomicon4six">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon56"
                                                                    aria-expanded="false" aria-controls="collapsecustomicon56">
                                                                    What does an order cost?
                                                                </button>
                                                            </h2>
                                                            <div id="collapsecustomicon56" class="accordion-collapse collapse"
                                                                aria-labelledby="headingcustomicon4six"
                                                                data-bs-parent="#accordionFAQ5">
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
                            <!--End::row-1 -->
                        </div>
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')
  

@endsection