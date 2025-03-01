@extends('layouts.custom-master')

@section('styles')
    <!-- Burada stil eklemelerinizi yapabilirsiniz -->
@endsection

@section('content')

@section('errorbody')
<body>
@endsection

<div class="page error-bg" id="particles-js">
    <!-- Start::error-page -->
    <div class="error-page">
        <div class="container-lg">
            <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="my-5 d-flex justify-content-center">
                        <a href="{{ url('index') }}">
                            <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
                            <img src="{{ asset('build/assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
                        </a>
                    </div>
                    <div class="card custom-card rectangle2">
                        <div class="card-body p-sm-5 p-3 rectangle3">
                            <p class="h4 fw-semibold mb-2 text-center">Sign Up</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome &amp; Join us by creating a free account!</p>
                            
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row gy-3">
                                    <!-- Name Field -->
                                    <div class="col-xl-12">
                                        <label for="name" class="form-label text-default">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Full Name" value="{{ old('name') }}" required autofocus>
                                    </div>

                                    <!-- Email Field -->
                                    <div class="col-xl-12">
                                        <label for="email" class="form-label text-default">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                    </div>

                                    <!-- Password Field -->
                                    <div class="col-xl-12">
                                        <label for="password" class="form-label text-default">Password</label>
                                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
                                    </div>

                                    <!-- Confirm Password Field -->
                                    <div class="col-xl-12">
                                        <label for="password_confirmation" class="form-label text-default">Confirm Password</label>
                                        <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                                    </div>

                                    <div class="col-xl-12 d-grid mt-2">
                                        <x-button class="btn btn-lg btn-primary mt-4">
                                            Create Account
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="fs-12 text-muted mt-3">Already have an account? <a href="{{ url('login') }}" class="text-primary">Sign In</a></p>
                            </div>
                            <div class="text-center my-3 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <div class="btn-list text-center">
                                <button aria-label="button" type="button" class="btn btn-icon btn-light btn-wave waves-effect waves-light">
                                    <i class="ri-facebook-line fw-bold "></i>
                                </button>
                                <button aria-label="button" type="button" class="btn btn-icon btn-light btn-wave waves-effect waves-light">
                                    <i class="ri-google-line fw-bold "></i>
                                </button>
                                <button aria-label="button" type="button" class="btn btn-icon btn-light btn-wave waves-effect waves-light">
                                    <i class="ri-twitter-line fw-bold "></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::error-page -->
</div>

@endsection

@section('scripts')
    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('build/assets/show-password.js') }}"></script>
@endsection
