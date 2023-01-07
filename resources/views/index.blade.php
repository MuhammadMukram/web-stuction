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

    <nav class="navbar navbar-light navbar-expand-md bg-grey justify-content-center">
        <div class="container-fluid mx-5">
            <a href="/" class="navbar-brand">
                <span class="text-orange">Stuc</span><span class="text-black">tion</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-element">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse w-100 ms-auto" id="navbar-element">

                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item d-flex my-2">
                        <div class="form-group has-search">
                            <span class="bi bi-search text-orange d-inline-block search-icon ps-2"></span>
                            <span class="search-icon text-grey ps-5">|</span>
                            <input type="text" class="form-control nav-search-form" placeholder="Search">
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav ml-auto w-100 d-flex justify-content-end align-middle column-gap-5">
                    <div>
                        <li class="nav-item d-flex my-2">
                            <button class="btn bg-orange">
                                <i class="bi bi-plus-circle-fill text-white"></i>
                                <span class="ms-2 text-white">New Post<span>
                            </button>
                        </li>
                    </div>
                    <div>
                        <li class="nav-item my-2 profile d-flex align-middle">
                            <div>
                                <i class="bi bi-person-circle"></i>
                                <span class="text-orange">Jones Doe<span>
                            </div>
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"><img id="MDB-logo"
                    src="https://mdbcdn.b-cdn.net/wp-content/uploads/2018/06/logo-mdb-jquery-small.png" alt="MDB Logo"
                    draggable="false" height="30" /></a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-3">
                    <li class="nav-item">
                        <a class="nav-link active d-flex align-items-center" aria-current="page" href="#"><i
                                class="fas fa-bars pe-2"></i>Menu</a>
                    </li>
                </ul>
                <!-- Left links -->

                <form class="d-flex align-items-center w-100 form-search">
                    <div class="input-group">
                        <button class="btn btn-light dropdown-toggle shadow-0" type="button" data-mdb-toggle="dropdown"
                            aria-expanded="false" style="padding-bottom: 0.4rem;">
                            All
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark fa-ul">
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="fas fa-search"></i></span>All</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="fas fa-film"></i></span>Titles</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="fas fa-tv"></i></span>TV
                                    Episodes</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="fas fa-user-friends"></i></span>Celebs</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="fas fa-building"></i></span>Companies</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="fas fa-key"></i></span>Keywords</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="fas fa-search-plus"></i></span>Advanced
                                    search<i class="fas fa-chevron-right ps-2"></i></a>
                            </li>
                        </ul>
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
                    </div>
                    <a href="#!" class="text-white"><i class="fas fa-search ps-3"></i></a>
                </form>

                <ul class="navbar-nav ms-3">
                    <li class="nav-item me-3">
                        <a class="nav-link d-flex align-items-center" href="#!">IMDbPro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-3" href="#!">
                            <i class="fas fa-bookmark pe-2"></i> Watchlist
                        </a>
                    </li>
                    <li class="nav-item" style="width: 65px;">
                        <a class="nav-link d-flex align-items-center" href="#!">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


    @yield('scripts')
</body>

</html>
