<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">

        {{-- Logo --}}
        <a class="navbar-brand fw-bold fs-3" href="{{ route('index') }}">
            <i class="bi bi-controller me-2 text-primary"></i>
            {{ config('app.name') }}
        </a>

        {{-- Mobile Toggle --}}
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbar">

            {{-- Left Menu --}}
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active fw-semibold' : '' }}"
                       href="{{ route('index') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('games.index') ? 'active fw-semibold' : '' }}"
                       href="{{ route('games.index') }}">
                        Games
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('categories.index') ? 'active fw-semibold' : '' }}"
                       href="{{ route('categories.index') }}">
                        Categories
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('news.index') ? 'active fw-semibold' : '' }}"
                       href="{{ route('news.index') }}">
                        News
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active fw-semibold' : '' }}"
                       href="{{ route('about') }}">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active fw-semibold' : '' }}"
                       href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>

            </ul>

            {{-- Search --}}
            <form class="d-flex me-3">

                <input class="form-control me-2"
                       type="search"
                       placeholder="Search games...">

                <button class="btn btn-primary">

                    <i class="bi bi-search"></i>

                </button>

            </form>

            {{-- Right Side --}}
            @guest

                <div class="d-flex">

                    <a href="{{ route('login') }}"
                       class="btn btn-outline-light me-2">

                        Login

                    </a>

                    <a href="#"
                       class="btn btn-primary">

                        Register

                    </a>

                </div>

            @else

                <div class="dropdown">

                    <button class="btn btn-outline-light dropdown-toggle"
                            data-bs-toggle="dropdown">

                        <i class="bi bi-person-circle me-2"></i>

                        {{ auth()->user()->name }}

                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-person me-2"></i>
                                Profile
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-pc-display me-2"></i>
                                My System
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-heart me-2"></i>
                                Favorites
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>

                            <form action="{{ route('logout') }}"
                                  method="POST">

                                @csrf

                                <button class="dropdown-item text-danger">

                                    <i class="bi bi-box-arrow-right me-2"></i>

                                    Logout

                                </button>

                            </form>

                        </li>

                    </ul>

                </div>

            @endguest

        </div>

    </div>
</nav>