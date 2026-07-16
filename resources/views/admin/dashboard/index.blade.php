@extends('layouts.admin')


@section('title','Dashboard')


@section('page-title','Dashboard')


@section('content')
<div class="container-fluid">

    <!-- Statistics Cards -->
    <div class="row g-4">

        <!-- Total Games -->
        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">

                    <div class="bg-primary text-white rounded-circle p-3 me-3">
                        <i class="bi bi-controller fs-3"></i>
                    </div>

                    <div>
                        <h6 class="text-muted mb-1">
                            Total Games
                        </h6>

                        <h3 class="mb-0">
                            1,250
                        </h3>
                    </div>

                </div>
            </div>
        </div>


        <!-- Total Users -->
        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0">

                <div class="card-body d-flex align-items-center">

                    <div class="bg-success text-white rounded-circle p-3 me-3">
                        <i class="bi bi-people fs-3"></i>
                    </div>

                    <div>

                        <h6 class="text-muted mb-1">
                            Total Users
                        </h6>

                        <h3 class="mb-0">
                            15,400
                        </h3>

                    </div>

                </div>

            </div>
        </div>


        <!-- Reviews -->
        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex align-items-center">

                    <div class="bg-warning text-white rounded-circle p-3 me-3">

                        <i class="bi bi-chat-square-text fs-3"></i>

                    </div>


                    <div>

                        <h6 class="text-muted mb-1">
                            Reviews
                        </h6>

                        <h3 class="mb-0">
                            8,650
                        </h3>

                    </div>

                </div>

            </div>

        </div>


        <!-- Favorites -->
        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex align-items-center">

                    <div class="bg-danger text-white rounded-circle p-3 me-3">

                        <i class="bi bi-heart fs-3"></i>

                    </div>


                    <div>

                        <h6 class="text-muted mb-1">
                            Favorites
                        </h6>

                        <h3 class="mb-0">
                            24,300
                        </h3>

                    </div>

                </div>

            </div>

        </div>


    </div>



    <!-- Second Row -->

    <div class="row g-4 mt-2">


        <!-- Categories -->

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">
                        Categories
                    </h6>

                    <h2>
                        45
                    </h2>

                    <small class="text-success">
                        +5 this month
                    </small>

                </div>

            </div>

        </div>



        <!-- Developers -->

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">
                        Developers
                    </h6>

                    <h2>
                        320
                    </h2>

                    <small>
                        Registered studios
                    </small>

                </div>

            </div>

        </div>




        <!-- Compatibility Checks -->

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">
                        Compatibility Checks
                    </h6>

                    <h2>
                        52,600
                    </h2>

                    <small>
                        User system checks
                    </small>

                </div>

            </div>

        </div>




        <!-- News -->

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">
                        News Articles
                    </h6>

                    <h2>
                        680
                    </h2>

                    <small>
                        Published articles
                    </small>

                </div>

            </div>

        </div>


    </div>




    <!-- Tables Section -->

    <div class="row mt-4 g-4">


        <!-- Latest Reviews -->

        <div class="col-lg-6">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        Latest Reviews
                    </h5>

                </div>


                <div class="card-body">

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            GTA VI received 5 stars
                        </li>

                        <li class="list-group-item">
                            Cyberpunk 2077 reviewed
                        </li>

                        <li class="list-group-item">
                            Elden Ring reviewed
                        </li>


                    </ul>


                </div>

            </div>


        </div>





        <!-- Popular Games -->


        <div class="col-lg-6">


            <div class="card shadow-sm border-0">


                <div class="card-header bg-white">

                    <h5 class="mb-0">
                        Most Popular Games
                    </h5>

                </div>


                <div class="card-body">


                    <div class="d-flex justify-content-between mb-3">

                        <span>
                            GTA V
                        </span>

                        <span>
                            15,000 views
                        </span>

                    </div>


                    <div class="d-flex justify-content-between mb-3">

                        <span>
                            Minecraft
                        </span>

                        <span>
                            12,400 views
                        </span>

                    </div>


                    <div class="d-flex justify-content-between">

                        <span>
                            Elden Ring
                        </span>

                        <span>
                            9,800 views
                        </span>

                    </div>


                </div>


            </div>


        </div>


    </div>


</div>


@endsection