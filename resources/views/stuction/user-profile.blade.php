@extends('layouts.index')

@section('title', 'Section - Profile')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/layouts/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/stuction/user-profile.css') }}">
    <style>
        /* .banner {
            background-image: url('{{ asset('sample/banner-sample.png')}} ');
            overflow: hidden;
            background-position: center;
            background-size: cover;
            height: 768px;
        } */
    </style>
@endsection

@section('navbar')
    {{-- @include('layouts.user-navbar') --}}
@endsection

@section('content')

    <div class="container-fluid bg-semi-white position-relative p-0 banner">
        <img src="{{ asset('sample/banner-sample.png')}}" class="w-100">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="116" fill="none" viewBox="0 0 1440 116"
            class="position-absolute bottom-0 start-50 translate-middle-x wave" preserveAspectRatio="none">
            <path fill="#fff"
                d="M1440 7.593s-60-3.128-110 12.083c-50 15.21-130 45.03-250 32.608C960 39.862 918.5 7.593 770.5 7.593S480 51.363 360 26.858C170.613-11.103 0 2.294 0 2.294V116h1440V7.593Z" />
        </svg>
    </div>

    <div class="container position-relative profile-info">
        <div class="container position-absolute translate-middle start-50 p-4">
            <div class="postion-relative w-100">
                <a href="#" class="profile-picture position-absolute translate-middle start-50">
                    <img src="{{ asset('sample/banner-sample.png') }}" class="img-fluid">
                </a>
            </div>
            <button class="btn border border-dark"><i class="bi bi-pencil-square"></i></button>
            
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('scripts/user-navbar.js') }}"></script>
    <script></script>
@endsection
