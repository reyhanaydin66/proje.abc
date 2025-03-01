@extends('layouts.custom-master')

@section('styles')
    <!-- Add your custom styles here -->
@endsection

@section('content')

@section('errorbody')
<body>
@endsection

<div class="page error-bg" id="particles-js">
    <!-- Start::error-page -->
    <div class="error-page">
        <div class="container">
            <!-- Start::row-1 -->
            <div class="row align-items-center justify-content-center authentication authentication-basic">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="my-5 d-flex justify-content-center">
                        <a href="{{ url('index') }}">
                            <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
                            <img src="{{ asset('build/assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
                        </a>
                    </div>
                    <div class="card custom-card rectangle2">
                        <div class="card-body p-sm-5 p-3 rectangle3">
                            <p class="h5 fw-semibold mb-2 text-center">Reset Password</p>

                            <!-- Form to reset password -->
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <!-- E-mail Field -->
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <label for="email" class="form-label text-default">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email" value="{{ old('email', $request->email) }}" required>
                                        </div>
                                    </div>

                                    <!-- New Password Field -->
                                    <div class="col-xl-12">
                                        <label for="password" class="form-label text-default">New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg" id="create-password" name="password" placeholder="New Password" required>
                                            <button aria-label="button" type="button" class="btn btn-light bg-transparent" onclick="createpassword('create-password',this)"><i class="ri-eye-off-line align-middle text-muted"></i></button>
                                        </div>
                                    </div>

                                    <!-- Confirm Password Field -->
                                    <div class="col-xl-12 mb-2">
                                        <label for="password_confirmation" class="form-label text-default">Confirm Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg" id="create-confirmpassword" name="password_confirmation" placeholder="Confirm Password" required>
                                            <button aria-label="button" type="button" class="btn btn-light bg-transparent" onclick="createpassword('create-confirmpassword',this)"><i class="ri-eye-off-line align-middle text-muted"></i></button>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-xl-12 d-grid mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Reset Password</button>
                                    </div>
                                </form>
                            </div>
 
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->
        </div>
    </div>
    <!-- End::error-page -->
</div>

@endsection


