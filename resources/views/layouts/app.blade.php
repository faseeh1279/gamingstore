<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    .navbar-brand{
        font-size:1.5rem;
        font-weight:bold;
    }

    .nav-link{
        color:white !important;
        margin-right:10px;
        transition:.3s;
    }

    .nav-link:hover{
        color:#ffd54f !important;
    }

    .dropdown-menu{
        border:none;
        border-radius:10px;
        box-shadow:0 8px 20px rgba(0,0,0,.15);
    }



    .badge{
        border-radius:20px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm"
     style="background: linear-gradient(90deg, #0d6efd, #4f46e5);">

    <div class="container">

        <!-- Logo / Brand -->
        <a class="navbar-brand fw-bold" href="#">
            🎮 GameStore
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0"
                type="button"
                data-toggle="collapse"
                data-target="#navbarContent"
                aria-controls="navbarContent"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarContent">

            <!-- Left Side -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Games
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Categories
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Orders
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       id="navbarDropdown"
                       role="button"
                       data-toggle="dropdown">

                        More

                    </a>

                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="#">
                            Settings
                        </a>

                        <a class="dropdown-item" href="#">
                            Profile
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#">
                            Contact Us
                        </a>

                    </div>

                </li>

            </ul>

            <!-- Right Side -->
            <ul class="navbar-nav align-items-lg-center">

                <!-- Branch 
                    <li class="nav-item mr-lg-3 my-2 my-lg-0">
                        
                        <span class="badge badge-light px-3 py-2"
                        style="font-size:15px;">
                        
                        📍 Branch:
                        <strong>Karachi</strong>
                        
                    </span>
                    
                </li>
            -->

                <!-- Search -->
                <li class="nav-item mr-lg-3">

                    <form class="form-inline">

                        <input class="form-control mr-2"
                               type="search"
                               style="border-radius: 25px;"
                               placeholder="Search games">

                        <button class="btn btn-light"  style="border-radius: 30px;">
                            Search
                        </button>

                    </form>

                </li>

                <!-- Guest Mode Buttons -->
                @guest
                    <li class="nav-item">

                        <a href="{{ route('login') }}"
                        class="btn btn-outline-light mr-2"  style="border-radius: 30px;">
                            Login
                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="{{ route('register') }}"
                        class="btn btn-warning"  style="border-radius: 30px;">
                            Register
                        </a>

                    </li>

                @endguest

                @auth

<li class="nav-item dropdown">

    <a class="nav-link dropdown-toggle d-flex align-items-center"
       href="#"
       id="userDropdown"
       role="button"
       data-toggle="dropdown"
       aria-haspopup="true"
       aria-expanded="false">

        <div class="rounded-circle bg-warning text-dark d-flex justify-content-center align-items-center mr-2"
             style="width:38px;height:38px;font-weight:bold;">

            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

        </div>

        <span class="font-weight-bold text-white">

            {{ Auth::user()->name }}

        </span>

    </a>

    <div class="dropdown-menu dropdown-menu-right">

        <h6 class="dropdown-header">

            Signed in as

            <br>

            <strong>{{ Auth::user()->email }}</strong>

        </h6>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="#">
            <i class="mr-2">👤</i>
            My Profile
        </a>

        <a class="dropdown-item" href="#">
            <i class="mr-2">🔒</i>
            Change Password
        </a>

        <div class="dropdown-divider"></div>

        <form action="{{ route('logout') }}" method="POST">

            @csrf
            <button type="submit" class="dropdown-item text-danger">

                <i class="mr-2">🚪</i>
                Logout

            </button>

        </form>

    </div>

</li>

@endauth
            </ul>

        </div>

    </div>

</nav>
    
    @yield('content')


</body>
</html>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>