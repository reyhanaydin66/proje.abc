@extends('layouts.custom-master')

@section('styles')
    <!-- Gerekirse özel stiller ekleyebilirsiniz -->
@endsection

@section('content')
    <div class="page error-bg" id="particles-js">
        <!-- Start::error-page -->
        <div class="error-page">
            <div class="container">
                <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                        <div class="my-5 d-flex justify-content-center">
                            <a href="{{ url('index') }}">
                                <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
                                <img src="{{ asset('build/assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
                            </a>
                        </div>
                        <div class="card custom-card rectangle2">
                            <div class="card-body p-5 rectangle3">
                                <p class="h4 fw-semibold mb-2 text-center">Sign In</p>
                                <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome back!</p>

                                <!-- Validation Errors -->
                                <x-validation-errors class="mb-4" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row gy-3">
                                        <div class="col-xl-12">
                                            <label for="email" class="form-label text-default">Email</label>
                                            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="user@example.com" value="{{ old('email') }}" required autofocus />
                                        </div>
                                        <div class="col-xl-12 mb-2">
                                            <label for="password" class="form-label text-default d-block">Password <a href="{{ route('password.request') }}" class="float-end text-primary">Forgot password?</a></label>
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required autocomplete="current-password" />
                                                <button class="btn btn-light bg-transparent" type="button" onclick="createpassword('password', this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                            </div>
                                            <div class="mt-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember">
                                                    <label class="form-check-label text-muted fw-normal" for="remember_me">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 d-grid mt-2">
                                            <button type="submit" class="btn btn-lg btn-primary">
                                                Sign In
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center">
                                        <p class="fs-12 text-muted mt-3">Dont have an account? <a href="{{url('register')}}" class="text-primary">Sign Up</a></p>
                                    </div>
                                <div class="text-center my-3 authentication-barrier">
                                    <span>OR</span>
                                </div>

                                <div class="btn-list text-center">
                                    <button class="btn btn-icon btn-light btn-wave waves-effect waves-light">
                                        <i class="ri-facebook-line fw-bold "></i>
                                    </button>
                                    <button class="btn btn-icon btn-light btn-wave waves-effect waves-light">
                                        <i class="ri-google-line fw-bold "></i>
                                    </button>
                                    <button class="btn btn-icon btn-light btn-wave waves-effect waves-light">
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
