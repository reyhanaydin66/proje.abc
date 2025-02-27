@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- PAGE HEADER -->
                    <div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                        <h4 class="fw-medium mb-0">Terms &amp; Conditions</h4>
                        <div class="ms-sm-1 ms-0">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Terms &amp; Conditions</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- APP CONTENT -->
                    <div class="main-content app-content">
                        <div class="container-fluid">

                            <div class="container-lg">
                                <!-- Start::row-1 -->
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body p-0">
                                                <div class="p-4 terms-heading-cover d-flex align-items-center text-primary bg-primary-transparent h5 fw-semibold mb-0">
                                                    <span class="avatar avatar-md me-3">
                                                        <img src="{{asset('build/assets/images/media/media-67.png')}}" alt="">
                                                    </span> Velvet- Terms & Conditions
                                                    <a href="javascript:void(0);" data-bs-toggle="card-fullscreen" class="ms-auto text-primary">
                                                        <i class="ri-fullscreen-line"></i>
                                                    </a>
                                                </div>
                                                <div class="p-4 text-muted terms-conditions" id="terms-scroll">
                                                    <div class="mb-5">
                                                        <p class="mb-3 op-7">
                                                            <span class="fw-bold text-default op-8">If you stay in the USA </span>the Velvet<a class="text-primary" href="javascript:void(0);"><u>Terms and Conditions</u></a> consists of below rules and <a class="text-primary" href="javascript:void(0);"><u>User Agreements</u></a> consists of below policies <a class="text-primary" href="javascript:void(0);"><u>VelvetRules & Privacy Policies</u></a> incorporated with the below conditions.
                                                        </p>
                                                        <p class="mb-0 op-7">
                                                            <span class="fw-bold text-default op-8">If you stay any where in the world other than USA </span>the Velvet<a class="text-primary" href="javascript:void(0);"><u>Terms and Conditions</u></a> consists of below rules and <a class="text-primary" href="javascript:void(0);"><u>User Agreements</u></a> consists of below policies <a class="text-primary" href="javascript:void(0);"><u>VelvetRules & Privacy Policies</u></a> incorporated with the below conditions.
                                                        </p>
                                                    </div>
                                                    <h6 class="fw-bold pb-3 text-default op-7"><span class="terms-heading">Terms & Services :</span></h6>
                                                    <div class="mb-4">
                                                        <p class="fw-semibold text-muted mb-2 fs-14">1 - Lorem ipsum dolor sit amet.</p>
                                                        <p class="op-7 mb-0">
                                                            Note that you'll sometimes see this agreement referred to as a Terms of Use, User Agreement or Terms of Service agreement. These terms are interchangeable and refer to the same type of agreement
                                                        </p>
                                                    </div>
                                                    <div class="mb-4">
                                                        <p class="fw-semibold text-muted mb-2 fs-14">2 - Consectetur adipisicing elit.</p>
                                                        <p class="op-7 mb-2">
                                                            While they are not legally required, terms and conditions set the stage for any successful business relationship. By making it clear and putting these guidelines in writing, business owners can avoid misunderstandings with their customers.
                                                        </p>
                                                        <p class="op-7">
                                                        It also allows you to decide what you consider acceptable and which type of conduct could lead you to terminate a relationship with a user.
                                                        </p>
                                                    </div>
                                                    <div class="mb-4">
                                                        <p class="fw-semibold text-muted mb-2 fs-14">3 - There are many variations.</p>
                                                        <p class="op-7">
                                                            Limitation of liability disclaimers is one of the main reasons why business owners take the time to include terms and conditions on their websites. When reasonable and drafted adequately, such clauses can help protect your business against claims and lawsuits and limit the amount of money that you would have to pay in damages.
                                                        </p>
                                                    </div>
                                                    <div class="mb-4">
                                                        <p class="fw-semibold text-muted mb-2 fs-14">4 - If you allow your users to share.</p>
                                                        <p class="op-7 mb-2">
                                                            If you allow your users to share comments or photos on your website or leave reviews of the products that you sell, you will want to have a section in your terms that governs their conduct and sets out what is acceptable and what isn’t.
                                                        </p>
                                                        <p class="op-7 mb-2">
                                                            In this clause, you could reserve the right to monitor the user-generated content shared on your website and remove anything that goes against your guidelines. You could expressly ask your users not to post anything that contains obscene language or any material that could be considered harmful or violent or infringes on someone else’s copyright.
                                                        </p>
                                                    </div>
                                                    <div class="mb-0">
                                                        <p class="fw-semibold text-muted mb-2 fs-14">5 - You could also make it clear.</p>
                                                        <p class="op-7 mb-2">
                                                            You could also make it clear that you reserve the right to suspend or delete the accounts of repeat infringers. This will help you make your website a safe space where people can feel comfortable sharing their opinions, which is especially important if you operate a news site, blog, or forum.
                                                        </p>
                                                        <p class="op-7 mb-0">
                                                            From a business point of view, you could reserve the right to use the submitted content for marketing purposes which a lot of big box stores and eCommerce retailers do in order to promote products that get rave reviews. It’s important for your customers to know that you plan on doing so, otherwise they could be surprised to see their words or photo used in a commercial!
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End::row-1 -->
                            </div>

                        </div>
                    </div>
                    <!-- END APP CONTENT -->

@endsection

@section('scripts')

        <!-- INTERNAL TERMS & CONDITIONS JS -->
        @vite('resources/assets/js/terms_conditions.js')
        

@endsection