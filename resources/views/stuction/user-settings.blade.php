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
                <button class="btn p-0">
                    <i class="bi bi-arrow-left interactive-icon"></i>
                </button>
                <button class="btn p-0">
                    <span>Account</span>
                </button>
                
            </div>
            <div class="w-75 h-100 bg-white rounded-end">

            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/user-navbar.js') }}"></script>
@endsection