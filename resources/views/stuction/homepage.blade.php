@extends('layouts.index')

@section('title', 'Stuction')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/layouts/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/stuction/homepage.css') }}">
@endsection

@section('navbar')
    @include('layouts.user-navbar')
@endsection

@section('content')
    <div class="container my-5 pt-5 justify-content-center">
        <div class="content w-100">

            <div class="card">
                <img src="{{ asset('sample/card.jpg') }}" class="card-img-top" alt="image">
                <div class="mask text-light d-flex justify-content-center flex-column text-center position-absolute top-0 w-100 rounded-top" style="background-color: rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <button class="btn bg-orange text-white rounded-pill">View</button>
                    </div>
                </div>
                <div class="card-body d-flex">
                    <div class="col d-flex flex-column my-auto">
                        <span>
                            <a href="#" class="title ">lorem20</a>
                        </span>
                        <span class="date">DD/MM/YYYY</span>
                    </div>

                    <div class="col d-flex justify-content-end gap-3 align-items-center">
                        <div class="author align-items-center">
                            <a href="#">
                                <img src="{{ asset('sample/card.jpg') }}" class="profile rounded-circle" alt="profile">
                            </a>
                        </div>

                        <div class="d-flex comments align-items-center gap-1">
                            <i class="bi bi-chat"></i>
                            <span class="ms-1">0</span>
                        </div>

                        <div class="d-flex like align-items-center gap-1">
                            <i class="bi bi-heart"></i>
                            <span class="ms-1">0</span>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('scripts/user-navbar.js') }}"></script>
    <script></script>
@endsection
