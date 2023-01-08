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
    <div class="container border-0 mx-5 my-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <button class="bg-black btn rounded-circle">
                                        <i class="bi bi-person text-orange"></i>
                                    </button>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <span class="text-orange my-auto">Jones Doe<span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <button class="bg-black btn rounded-circle">
                                        <i class="bi bi-person text-orange"></i>
                                    </button>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <span class="text-orange my-auto">Jones Doe<span>
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

@endsection
