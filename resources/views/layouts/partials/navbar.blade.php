<nav class="navbar navbar-expand-lg bg-white shadow-sm px-3">

    <!-- Mobile Sidebar Button -->
    <button id="mobileSidebarToggle"
            class="btn btn-primary d-lg-none">

        <i class="bi bi-list"></i>

    </button>


    <!-- Page Title -->
    <div class="ms-3">

        <h5 class="mb-0">
            @yield('page-title', 'Dashboard')
        </h5>

    </div>



    <!-- Right Side -->
    <div class="ms-auto d-flex align-items-center">


        <!-- Notifications -->

        <div class="dropdown me-3">


            <button class="btn btn-light position-relative"
                    data-bs-toggle="dropdown">


                <i class="bi bi-bell"></i>


                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                    3

                </span>


            </button>



            <ul class="dropdown-menu dropdown-menu-end">


                <li>
                    <h6 class="dropdown-header">
                        Notifications
                    </h6>
                </li>


                <li>
                    <a href="#" class="dropdown-item">

                        New review submitted

                    </a>
                </li>


                <li>
                    <a href="#" class="dropdown-item">

                        New user registered

                    </a>
                </li>


                <li>
                    <a href="#" class="dropdown-item">

                        Game updated

                    </a>
                </li>


            </ul>


        </div>





        <!-- User Dropdown -->


        <div class="dropdown">


            <button class="btn btn-light dropdown-toggle d-flex align-items-center"
                    data-bs-toggle="dropdown">


                <i class="bi bi-person-circle fs-5 me-2"></i>


                <span class="d-none d-md-inline">

                    {{ auth()->user()->name ?? 'Admin' }}

                </span>


            </button>



            <ul class="dropdown-menu dropdown-menu-end">


                <li>

                    <a href="#"
                       class="dropdown-item">

                        <i class="bi bi-person me-2"></i>

                        Profile

                    </a>

                </li>


                <li>

                    <a href="#"
                       class="dropdown-item">

                        <i class="bi bi-gear me-2"></i>

                        Settings

                    </a>

                </li>



                <li>
                    <hr class="dropdown-divider">
                </li>



                <li>

                    <form action="{{ route('logout') }}"
                          method="POST">

                        @csrf


                        <button type="submit"
                                class="dropdown-item text-danger">


                            <i class="bi bi-box-arrow-right me-2"></i>


                            Logout


                        </button>


                    </form>


                </li>


            </ul>


        </div>


    </div>


</nav>