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
                <img src="{{ asset('sample/card.jpg') }}" class="card-img-top position-absolute">
                <figure class="imghvr-fade">
                    {{-- NOTE : Nanti cari cara lain supaya gambarnya cuma perlu di load 1 saja --}}
                    <img src="{{ asset('sample/card.jpg') }}" class="overlay">
                    <figcaption>
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
                                <img src="{{ asset('sample/card.jpg') }}" class="profile rounded-circle" alt="profile">
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


@endsection


@section('scripts')
    <script src="{{ asset('scripts/user-navbar.js') }}"></script>

    <script>
        const likeButtons = document.querySelectorAll('.like-button');
        const likeCounters = document.querySelectorAll('.like span');
        const commentButtons = document.querySelectorAll('.comment-button');
        const commentCounters = document.querySelectorAll('.comment span');

        function countFormat(num) {
            return new Intl.NumberFormat('en-GB', { notation: "compact", compactDisplay: "short" }).format(num)
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

        likeCounters.forEach(total => {total.innerHTML = countFormat(parseInt(total.innerHTML))});
        commentCounters.forEach(total => {total.innerHTML = countFormat(parseInt(total.innerHTML))});

    </script>

@endsection
