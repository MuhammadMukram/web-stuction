<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Web Title --}}
    <title>Stuction</title>

    {{-- Styles --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles/index.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>

    @yield('styles')

</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg bg-grey justify-content-center">
        <div class="container mx-5">
            <a href="/" class="navbar-brand d-flex w-50 mr-auto">
                <span class="text-orange">Stuc</span><span class="text-black">tion</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#stuction-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse w-100" id="stuction-navbar">

                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item">
                        <div class="form-group has-search">
                            <span class="bi bi-search text-orange d-inline-block search-icon ps-2"></span>
                            <span class="search-icon text-grey ps-5">|</span>
                            <input type="text" class="form-control nav-search-form" placeholder="Search">
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav ml-auto w-100 d-flex justify-content-end align-middle">

                    <li class="nav-item me-5">
                        <button class="btn bg-orange">
                            <i class="bi bi-plus-circle-fill text-white"></i>
                            <span class="ms-2 text-white">New Post<span>
                        </button>
                    </li>

                    <li class="nav-item profile d-flex align-middle">
                        <div>
                            <i class="bi bi-person-circle"></i>
                            <span class="text-orange">Jones Doe<span>
                        </div>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            </a>
    
                            <ul class="dropdown-menu position-absolute">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
    
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    
    @yield('scripts')
</body>

</html>