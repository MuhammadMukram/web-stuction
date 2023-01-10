@extends('layouts.index')

@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/auth/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="container border">
        <div class="login-container">
            <div class="login-section d-flex">
                <div class="wave-section">
                    <svg height="100%" viewBox="0 0 462 1095" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector"
                            d="M177.449 865.13C184.42 972.32 136.889 922.847 103.934 996.421C70.9794 1070 55.5951 1067.59 0 1096L462 1096L462 -2.01947e-05C449.942 42.4953 415.038 38.0555 416.942 97.0416C418.846 156.028 363.77 164.273 353.63 209.94C343.49 255.607 358.066 260.046 347.926 339.963C337.786 419.88 304.198 377.384 272.105 473.792C240.012 570.199 270.609 601.405 259.43 666.607C247.132 738.331 170.477 757.94 177.449 865.13Z"
                            fill="#FFFFFF" />
                    </svg>
                </div>
                <div class="login-content bg-white d-flex justify-content-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="inline parent-form">
                            <div class="form-header d-flex justify-content-center">
                                <div class="login-title">
                                    <div class="stuction-text">
                                        <h1><span class="text-orange">Stuc</span><span class="text-black">tion</span></h1>
                                    </div>
                                    <div class="login-text d-flex justify-content-end">
                                        <h2>Login</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="form-container d-flex justify-content-center">
                                <form method="POST" action="#" class="inline d-flex justify-content-center">
                                    <div class="form-content d-flex flex-column gap-3">
                                        <div class="form-element">
                                            <h5 class="text-orange">Username</h5>
                                            <div class="input-bar d-flex">
                                                <div class="input-icon bg-white px-3 d-flex align-items-center">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                                <span> </span>
                                                <input type="text" class="login-form bg-white p-2"
                                                    placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-element">
                                            <h5 class="text-orange">Password</h5>
                                            <div class="input-bar d-flex">
                                                <div class="input-icon bg-white px-3 d-flex align-items-center">
                                                    <i class="bi bi-key-fill"></i>
                                                </div>
                                                <span> </span>
                                                <input type="password" class="login-form bg-white p-2"
                                                    placeholder="Password">
                                            </div>
                                            <p class="h6 mt-2 forgot-password"><a href="">Forgot Password?</a></p>
                                        </div>
                                        <div class="btn-element">
                                            <div class="btn-area">
                                                <button type="button" class="btn login-btn w-100 p-1">Login</button>
                                            </div>
                                            <div class="text-center">
                                                <p class="h6 to-signup"><a href="#">Don't have account?</a></p>
                                            </div>
                                        </div>
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

@section('scripts')
    {{-- <script src="{{ asset('scripts/auth/login.js') }}"></script> --}}
@endsection
