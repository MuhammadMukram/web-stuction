@extends('layouts.index')

@section('title', 'Stuction - Settings')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/layouts/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/stuction/user-settings.css') }}">
@endsection

@section('navbar')
    @include('layouts.user-navbar')
@endsection

@section('content')
    <div class="container pt-5 mt-5">
        <div class="display-6 text-center title">Settings</div>
        <div class="container d-flex rounded">
            <div class="w-25 h-100 bg-grey rounded-start py-4 ps-4">
                <div class="container-fluid">
                    <button class="btn p-0">
                        <i class="bi bi-arrow-left interactive-icon"></i>
                    </button>
                </div>

                <button class="btn container-fluid d-flex justify-content-between pe-0 rounded-0 py-0 mt-1">
                    <div class="p-0 me-auto my-auto">
                        <i class="bi bi-person-fill"></i>
                        <span class="ms-2">Account</span>
                    </div>
                    <rectangle class="ms-auto bg-dark pe-1 py-1">&nbsp;</rectangle>
                </button>

                <button class="btn container-fluid d-flex justify-content-between pe-0 rounded-0 py-0 mt-1">
                    <div class="p-0 me-auto my-auto">
                        <i class="bi bi-shield-lock-fill"></i>
                        <span class="ms-2">Password</span>
                    </div>
                    <rectangle class="ms-auto bg-dark pe-1 py-1">&nbsp;</rectangle>
                </button>

                <button class="btn container-fluid d-flex justify-content-between pe-0 rounded-0 py-0 mt-1">
                    <div class="p-0 me-auto my-auto">
                        <i class="bi bi-brush-fill"></i>
                        <span class="ms-2">Preferences</span>
                    </div>
                    <rectangle class="ms-auto bg-dark pe-1 py-1">&nbsp;</rectangle>
                </button>

                <button class="btn container-fluid d-flex justify-content-between pe-0 rounded-0 py-0 mt-1">
                    <div class="p-0 me-auto my-auto">
                        <i class="bi bi-power"></i>
                        <span class="ms-2">Log Out</span>
                    </div>
                    <rectangle class="ms-auto bg-dark pe-1 py-1">&nbsp;</rectangle>
                </button>

            </div>

            {{-- Settings Contents --}}
            <div class="w-75 h-100 bg-white rounded-end">

            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/user-navbar.js') }}"></script>
@endsection