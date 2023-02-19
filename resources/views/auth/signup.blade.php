@extends('layouts.index')

@section('title', 'Signup')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/auth/signup.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="container-fluid border">
        <div class="signup-container">
            <div class="signup-section d-flex justify-content-center">
                <div class="wave-section d-flex justify-content-end">
                    <svg width="" height="" viewBox="-1 0 460 1094" preserveAspectRatio="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="#FFFFFF" stroke="#FFFFFF"
                            d="M177.449 865.13C184.42 972.32 136.889 922.847 103.934 996.421C70.9794 1070 55.5951 1067.59 0 1096L462 1096L462 -2.01947e-05C449.942 42.4953 415.038 38.0555 416.942 97.0416C418.846 156.028 363.77 164.273 353.63 209.94C343.49 255.607 358.066 260.046 347.926 339.963C337.786 419.88 304.198 377.384 272.105 473.792C240.012 570.199 270.609 601.405 259.43 666.607C247.132 738.331 170.477 757.94 177.449 865.13Z" />
                    </svg>
                </div>
                
                <div class="signup-content bg-white d-flex justify-content-center align-items-center">
                    <div class="inline parent-form">
                        <div class="form-header d-flex justify-content-center">
                            <div class="auth-title">
                                <div class="stuction-text">
                                    <h1><span class="text-orange">Stuc</span><span class="text-black">tion</span>
                                    </h1>
                                </div>
                                <div class="signup-text d-flex justify-content-end">
                                    <h2>Signup</h2>
                                </div>
                            </div>
                        </div>
                        <div class="form-container d-flex justify-content-center">
                            <div class="inline d-flex justify-content-center">

                                <div class="form-content">
                                    <div class="form-element">
                                        <h5 class="text-orange">Name</h5>
                                        <div class="name-form-container">
                                            <div>
                                                <div class="input-bar d-flex">
                                                    <div class="input-icon bg-white px-3 d-flex align-items-center">
                                                        <i class="bi bi-person-fill-up"></i>
                                                    </div>
                                                    <span> </span>
                                                    <input type="text" class="auth-form bg-white p-2" name="first_name"
                                                        id="first_name" placeholder="First Name" required>
                                                </div>
                                                <span class="text-danger" id="first-name-error"></span>
                                            </div>
                                            <div>
                                                <div class="input-bar d-flex">
                                                    <div class="input-icon bg-white px-3 d-flex align-items-center">
                                                        <i class="bi bi-person-fill-down"></i>
                                                    </div>
                                                    <span> </span>
                                                    <input type="text" class="auth-form bg-white p-2" name="last_name"
                                                        id="last_name" placeholder="Last Name" required>
                                                </div>
                                                <span class="text-danger" id="last-name-error"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-element">
                                        <h5 class="text-orange">Email</h5>
                                        <div class="input-bar d-flex">
                                            <div class="input-icon bg-white px-3 d-flex align-items-center">
                                                <i class="bi bi-envelope-at-fill"></i>
                                            </div>
                                            <span> </span>
                                            <input type="email" class="auth-form bg-white p-2" name="email"
                                                id="email" placeholder="Email" required>
                                        </div>
                                        <span class="text-danger" id="email-error"></span>
                                    </div>

                                    <div class="form-element">
                                        <h5 class="text-orange">Username</h5>
                                        <div class="input-bar d-flex">
                                            <div class="input-icon bg-white px-3 d-flex align-items-center">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <span> </span>
                                            <input type="text" class="auth-form bg-white p-2" name="username"
                                                id="username" placeholder="Username" required>
                                        </div>
                                        <span class="text-danger" id="username-error"></span>
                                    </div>

                                    <div class="form-element">
                                        <h5 class="text-orange">Password</h5>
                                        <div class="input-bar d-flex">
                                            <div class="input-icon bg-white px-3 d-flex align-items-center">
                                                <i class="bi bi-key-fill"></i>
                                            </div>
                                            <span> </span>
                                            <input type="password" class="auth-form bg-white p-2" name="password"
                                                id="password" placeholder="Password" required>
                                        </div>
                                        <span class="text-danger" id="password-error"></span>
                                    </div>

                                    <div class="form-element">
                                        <h5 class="text-orange">Confirm Password</h5>
                                        <div class="input-bar d-flex">
                                            <div class="input-icon bg-white px-3 d-flex align-items-center">
                                                <i class="bi bi-key-fill"></i>
                                            </div>
                                            <span> </span>
                                            <input type="password" class="auth-form bg-white p-2" name="confirm_password"
                                                id="confirm_password" placeholder="Confirm Password" required>
                                        </div>
                                        <span class="text-danger" id="confirm-password-error"></span>
                                    </div>

                                    <div class="btn-element mt-3">
                                        <div class="btn-area">
                                            <button type="submit" class="btn auth-btn w-100 p-1"
                                                id="submit">Signup</button>
                                        </div>
                                        <div class="text-center">
                                            <a href="{{ route('page.login') }}" class="to-signup-login">
                                                <p class="h6">Already have an account?</p>
                                            </a>
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
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            const user_data = new FormData();

            $("#submit").click(function() {

                const data = {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'first_name': $('#first_name').val(),
                    'last_name': $('#last_name').val(),
                    'email': $('#email').val(),
                    'username': $('#username').val(),
                    'password': $('#password').val(),
                    'confirm_password': $('#confirm_password').val()
                }

                for (var key in data) {
                    user_data.append(key, data[key]);
                    console.log(key + '=>' + data[key]);
                    
                }

                

                $.ajax({
                    url: '{{ route('auth.signup') }}',
                    type: 'POST',
                    data: user_data,
                    processData: false,
                    contentType: false,
                    success: function(error) {

                        validateForm(error.first_name, '#first-name-error');
                        validateForm(error.last_name, '#last-name-error');
                        validateForm(error.email, '#email-error');
                        validateForm(error.username, '#username-error');
                        validateForm(error.password, '#password-error');
                        validateForm(error.password_confirmation, '#confirm-password-error');

                        console.log(error);

                        if (!error) {
                            console.log('sukses');

                            window.location.replace('{{ route('page.login') }}');
                        }

                    }
                });


            });

            function validateForm(error, formID) {
                if (error) {
                    $(formID).text(error);

                } else {
                    $(formID).text('');
                }
            }
        });


    </script>
@endsection
