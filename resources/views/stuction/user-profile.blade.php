@extends('layouts.index')

@section('title', 'Section - Profile')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/layouts/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/stuction/user-profile.css') }}">
    <style>
        /* .banner {
                                        background-image: url('{{ asset('sample/banner-sample.png') }} ');
                                        overflow: hidden;
                                        background-position: center;
                                        background-size: cover;
                                        height: 768px;
                                    } */
    </style>
@endsection

@section('navbar')
    @include('layouts.user-navbar')
@endsection

@section('content')

    <div class="container-fluid bg-semi-white position-relative p-0 banner">
        <img src="{{ asset('sample/banner-sample.png') }}" class="w-100">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="116" fill="none" viewBox="0 0 1440 116"
            class="position-absolute bottom-0 start-50 translate-middle-x wave" preserveAspectRatio="none">
            <path fill="#fff"
                d="M1440 7.593s-60-3.128-110 12.083c-50 15.21-130 45.03-250 32.608C960 39.862 918.5 7.593 770.5 7.593S480 51.363 360 26.858C170.613-11.103 0 2.294 0 2.294V116h1440V7.593Z" />
        </svg>
    </div>

    <div class="position-relative">
        <div class="container position-absolute translate-middle start-50 profile-info ">
            <div class="container header p-4">
                <div class="profile-picture-section position-relative">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <a href="#" class="profile-picture">
                            <img src="{{ asset('sample/banner-sample.png') }}" class="rounded-circle m-auto">
                        </a>
                    </div>
                </div>
                <div class="corner-button">
                    <button class="btn border border-dark"><i class="bi bi-pencil-square"></i></button>
                </div>
                <div class="profile-info-section">
                    <div class="account-info d-flex justify-content-center text-center">
                        <div class="element">
                            <h4>Post</h4>
                            <h4>0</h4>
                        </div>
                        <span> </span>
                        <div class="element">
                            <h4>Following</h4>
                            <h4>0</h4>
                        </div>
                        <span> </span>
                        <div class="element">
                            <h4>Followers</h4>
                            <h4>0</h4>
                        </div>
                        <span> </span>
                        <div class="element text-orange">
                            <h4>Like</h4>
                            <h4>0</h4>
                        </div>
                    </div>
                    <div class="profile-name">
                        <h1 class="text-center text-orange">John Doe</h1>
                    </div>
                    <div class="profile-description d-flex justify-content-center">
                        <div class="bio">
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi
                                doloremque
                                eligendi enim odio fugiat ducimus, nihil cupiditate consequatur velit fugit facilis, omnis
                                ratione
                                quis maxime eos dolor repellat consectetur veniam perspiciatis possimus soluta minima
                                incidunt!
                                Earum voluptate quidem neque aut laborum exercitationem aspernatur ipsa, vel molestiae
                                numquam
                                pariatur repudiandae. Fugit!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5 justify-content-center">
                <div class="content w-100">
                    <div class="card">
                        {{-- <img src="{{ asset('sample/card.jpg') }}" class="card-img-top"> --}}
                        <figure class="imghvr-fade rounded-top w-100 bg-dark">
                            <img src="{{ asset('sample/card.jpg') }}" class="card-img-top">
                            <figcaption class="bg-dark">
                                <div class="container-fluid h-100 d-flex justify-content-center">
                                    <button class="btn bg-orange text-white rounded-pill my-auto px-4">View</button>
                                </div>
                            </figcaption>
                        </figure>

                        <div class="card-body d-flex">
                            <div class="col d-flex flex-column my-auto">
                                <span>
                                    <a href="#" class="title">lorem20</a>
                                </span>
                                <span class="date">DD/MM/YYYY</span>
                            </div>

                            <div class="col d-flex justify-content-end gap-3 align-items-center">
                                <div class="author align-items-center">
                                    <a href="#">
                                        <img src="{{ asset('sample/card.jpg') }}" class="profile rounded-circle"
                                            alt="profile">
                                    </a>
                                </div>

                                <div class="d-flex comment align-items-center gap-1">
                                    <button class="bg-transparent border-0 p-0 comment-button">
                                        <i class="bi bi-chat"></i>
                                    </button>
                                    <span class="ms-1">30012003</span>
                                </div>

                                <div class="d-flex like align-items-center gap-1">
                                    <button class="bg-transparent border-0 p-0 like-button">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <span class="ms-1">120603</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        {{-- <img src="{{ asset('sample/card.jpg') }}" class="card-img-top"> --}}
                        <figure class="imghvr-fade rounded-top w-100 bg-dark">
                            <img src="{{ asset('sample/card.jpg') }}" class="card-img-top">
                            <figcaption class="bg-dark">
                                <div class="container-fluid h-100 d-flex justify-content-center">
                                    <button class="btn bg-orange text-white rounded-pill my-auto px-4">View</button>
                                </div>
                            </figcaption>
                        </figure>

                        <div class="card-body d-flex">
                            <div class="col d-flex flex-column my-auto">
                                <span>
                                    <a href="#" class="title">lorem20</a>
                                </span>
                                <span class="date">DD/MM/YYYY</span>
                            </div>

                            <div class="col d-flex justify-content-end gap-3 align-items-center">
                                <div class="author align-items-center">
                                    <a href="#">
                                        <img src="{{ asset('sample/card.jpg') }}" class="profile rounded-circle"
                                            alt="profile">
                                    </a>
                                </div>

                                <div class="d-flex comment align-items-center gap-1">
                                    <button class="bg-transparent border-0 p-0 comment-button">
                                        <i class="bi bi-chat"></i>
                                    </button>
                                    <span class="ms-1">30012003</span>
                                </div>

                                <div class="d-flex like align-items-center gap-1">
                                    <button class="bg-transparent border-0 p-0 like-button">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <span class="ms-1">120603</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        {{-- <img src="{{ asset('sample/card.jpg') }}" class="card-img-top"> --}}
                        <figure class="imghvr-fade rounded-top w-100 bg-dark">
                            <img src="{{ asset('sample/card.jpg') }}" class="card-img-top">
                            <figcaption class="bg-dark">
                                <div class="container-fluid h-100 d-flex justify-content-center">
                                    <button class="btn bg-orange text-white rounded-pill my-auto px-4">View</button>
                                </div>
                            </figcaption>
                        </figure>

                        <div class="card-body d-flex">
                            <div class="col d-flex flex-column my-auto">
                                <span>
                                    <a href="#" class="title">lorem20</a>
                                </span>
                                <span class="date">DD/MM/YYYY</span>
                            </div>

                            <div class="col d-flex justify-content-end gap-3 align-items-center">
                                <div class="author align-items-center">
                                    <a href="#">
                                        <img src="{{ asset('sample/card.jpg') }}" class="profile rounded-circle"
                                            alt="profile">
                                    </a>
                                </div>

                                <div class="d-flex comment align-items-center gap-1">
                                    <button class="bg-transparent border-0 p-0 comment-button">
                                        <i class="bi bi-chat"></i>
                                    </button>
                                    <span class="ms-1">30012003</span>
                                </div>

                                <div class="d-flex like align-items-center gap-1">
                                    <button class="bg-transparent border-0 p-0 like-button">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <span class="ms-1">120603</span>
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
    <script src="{{ asset('scripts/user-navbar.js') }}"></script>
    <script>
        const likeButtons = document.querySelectorAll('.like-button');
        const likeCounters = document.querySelectorAll('.like span');
        const commentButtons = document.querySelectorAll('.comment-button');
        const commentCounters = document.querySelectorAll('.comment span');

        function countFormat(num) {
            return new Intl.NumberFormat('en-GB', {
                notation: "compact",
                compactDisplay: "short"
            }).format(num)
        }

        likeButtons.forEach(button => {
            button.addEventListener('click', () => {

                if (!button.classList.contains('liked')) {
                    button.classList.toggle('liked');
                    button.innerHTML = '<i class="bi bi-heart-fill text-danger"></i>';
                } else {
                    button.classList.toggle('liked');
                    button.innerHTML = '<i class="bi bi-heart"></i>';
                }

            });
        });

        likeCounters.forEach(total => {
            total.innerHTML = countFormat(parseInt(total.innerHTML))
        });
        commentCounters.forEach(total => {
            total.innerHTML = countFormat(parseInt(total.innerHTML))
        });
    </script>
@endsection
