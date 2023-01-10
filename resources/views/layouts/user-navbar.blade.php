{{--*
    * User's Navbar
    *
    *--}}
<nav class="navbar navbar-light navbar-expand-md fixed-top bg-grey">

    <div class="container justify-content-center position-relative d-none" id="hidden-search-bar">
        <div class="hidden-search-bar">
            <input type="text" class="form-control nav-search-form" placeholder="Search">
            <button class="btn bg-danger rounded-circle" id="show-navbar-elements">
                <i class="bi bi-arrow-left text-white"></i>
            </button>
        </div>
    </div>

    <div class="container d-flex justify-content-between align-items-center" id="navbar-elements">
        <a href="/" class="navbar-brand me-auto">
            <span class="text-orange">Stuc</span><span class="text-black">tion</span>
        </a>

        <div class="search-bar mx-auto">
            <i class="bi bi-search text-orange d-inline-block search-icon ps-2"></i>
            <span class="search-icon text-grey ps-5">|</span>
            <input type="text" class="form-control nav-search-form" placeholder="Search">
        </div>

        <div class="navigations ms-auto d-flex justify-content-end align-items-center">
            <button class="btn search-button bg-semi-white rounded-circle me-2" id="show-search">
                <i class="bi bi-search text-orange"></i>
            </button>

            <button class="btn new-post bg-orange mx-2">
                <i class="bi bi-plus-circle-fill text-white"></i>
                <span class="ms-2 text-white">New Post<span>
            </button>

            <button class="btn bg-dark rounded-circle me-2">
                <i class="bi bi-person text-orange"></i>
            </button>

            <span class="text-orange profile-name">Jones Doe</span>

            <div class="dropdown m-0 p-0">
                <button class="btn bg-transparent dropdown-toggle px-1" data-bs-toggle="dropdown"
                    aria-expanded="false"></button>
                <ul class="dropdown-menu dropdown-menu-end bg-semi-white border-0">
                    <div class="container-fluid position-relative py-2">
                        <span class="triangle position-absolute translate-middle text-semi-white">&#9650;</span>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>