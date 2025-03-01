@extends('layouts.custom-master')

@section('styles')
    <!-- Burada temanın stil dosyalarını yüklemeyi unutma -->
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
                            <div class="card-body p-sm-5 p-3 rectangle3">
                                <p class="h5 fw-semibold mb-2 text-center">Forgot Your Password?</p>
                                <p class="mb-4 text-muted op-7 fw-normal text-center">No problem! Just let us know your email address and we'll send you a password reset link.</p>

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600 text-center">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <x-validation-errors class="mb-4" />

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="col-xl-12">
                                        <label for="email" class="form-label text-default">Email Address</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control form-control-lg" id="email" name="email" :value="old('email')" required autofocus placeholder="Enter your email address">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 d-grid mt-4">
                                        <button type="submit" class="btn btn-lg btn-primary">Send Password Reset Link</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

@endsection

