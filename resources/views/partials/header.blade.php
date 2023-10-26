<header id="app_header">
    <div class="header_top">
        <div class="container d-flex justify-content-end py-1">
            <span class="mx-3">DC POWER<small>sm</small> VISA<i class="fa-regular fa-registered fa-xs"></i></span>
            <span class="mx-3">Additional DC sites <i class="fa-solid fa-sort-down"></i></span>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand justify-content-between p-0">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC_logo">
            </a>

            <div class="nav_body d-flex align-items-center">
                <div class="nav navbar-nav gx-3">
                    <a class="nav-item nav-link">characters</a>
                    <a class="nav-item nav-link" href="{{route('comics')}}">comics</a>
                    <a class="nav-item nav-link">movies</a>
                    <a class="nav-item nav-link">tv</a>
                    <a class="nav-item nav-link">games</a>
                    <a class="nav-item nav-link">collectibles</a>
                    <a class="nav-item nav-link">videos</a>
                    <a class="nav-item nav-link">fans</a>
                    <a class="nav-item nav-link">news</a>
                    <a class="nav-item nav-link">shop</a>

                </div>
                <form action="" class="d-flex ms-3">
                    <input type="search" placeholder="SEARCH" class="text-end">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>


        </nav>
    </div>
</header>