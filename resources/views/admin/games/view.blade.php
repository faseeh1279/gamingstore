@extends('layouts.admin')


@section('content')


<div class="container-fluid">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">
                Game Details
            </h3>

            <p class="text-muted mb-0">
                View complete information about this game
            </p>
        </div>


        <div>
            <a href="#" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                Edit Game
            </a>

            <a href="#" class="btn btn-danger">
                <i class="bi bi-trash"></i>
                Delete
            </a>
        </div>

    </div>


    <div class="row g-4">


        <!-- Game Image -->
        <div class="col-lg-4">

            <div class="card shadow-sm border-0">

                <div class="card-body text-center">

                    <img src="{{ $game->image ?? 'https://placehold.co/400x500/212529/FFFFFF?text=No+Game+Image' }}"
                         class="img-fluid rounded mb-3"
                         style="max-height:250px; object-fit:cover;">

                    <h4 class="fw-bold">
                        {{ $game->title }}
                    </h4>

                    <span class="badge bg-primary">
                        Action
                    </span>

                </div>

            </div>

        </div>



        <!-- Game Information -->
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">

                    <h5 class="mb-0 fw-bold">
                        Game Information
                    </h5>

                </div>


                <div class="card-body">


                    <div class="row">


                        <div class="col-md-6 mb-3">

                            <label class="text-muted">
                                Game Name
                            </label>

                            <h6>
                                {{ $game->title }}
                            </h6>

                        </div>



                        <div class="col-md-6 mb-3">

                            <label class="text-muted">
                                Slug
                            </label>

                            <h6>
                                cyber-adventure
                            </h6>

                        </div>



                        <div class="col-md-6 mb-3">

                            <label class="text-muted">
                                Developer
                            </label>

                            <h6>
                                {{ $game->developer->name }}
                            </h6>

                        </div>



                        <div class="col-md-6 mb-3">

                            <label class="text-muted">
                                Publisher
                            </label>

                            <h6>
                                {{ $game->publisher->name }}
                            </h6>

                        </div>



                        <div class="col-md-6 mb-3">

                            <label class="text-muted">
                                Release Date
                            </label>

                            <h6>
                                15 July 2026
                            </h6>

                        </div>



                        <div class="col-md-6 mb-3">

                            <label class="text-muted">
                                Price
                            </label>

                            <h6>
                                $59.99
                            </h6>

                        </div>



                    </div>


                    <hr>


                    <h5 class="fw-bold">
                        Description
                    </h5>


                    <p class="text-muted">
                        {{ $game->description }}
                    </p>


                </div>

            </div>

        </div>


    </div>



    <!-- Requirements -->

    <div class="row g-4 mt-1">


        <!-- Minimum Requirements -->

        <div class="col-lg-6">


            <div class="card shadow-sm border-0">


                <div class="card-header bg-dark text-white">

                    <h5 class="mb-0">
                        <i class="bi bi-pc-display"></i>
                        Minimum Requirements
                    </h5>

                </div>


                <div class="card-body">


                    <ul class="list-group list-group-flush">


                        <li class="list-group-item d-flex justify-content-between">

                            CPU
                            <strong>
                                {{ $game->minimumRequirement->cpu->model }}
                            </strong>

                        </li>


                        <li class="list-group-item d-flex justify-content-between">

                            GPU
                            <strong>
                                {{ $game->minimumRequirement->gpu->model }}
                            </strong>

                        </li>


                        <li class="list-group-item d-flex justify-content-between">

                            RAM
                            <strong>
                                {{ $game->minimumRequirement->ram }}
                            </strong>

                        </li>


                        <li class="list-group-item d-flex justify-content-between">

                            Storage
                            <strong>
                                {{ $game->minimumRequirement->storage }}
                            </strong>

                        </li>


                    </ul>


                </div>


            </div>


        </div>





        <!-- Recommended Requirements -->

        <div class="col-lg-6">


            <div class="card shadow-sm border-0">


                <div class="card-header bg-primary text-white">

                    <h5 class="mb-0">

                        <i class="bi bi-rocket"></i>
                        Recommended Requirements

                    </h5>

                </div>


                <div class="card-body">


                    <ul class="list-group list-group-flush">


                        <li class="list-group-item d-flex justify-content-between">

                            CPU
                            <strong>
                                {{ $game->recommendedRequirement->cpu->model }}
                            </strong>

                        </li>


                        <li class="list-group-item d-flex justify-content-between">

                            GPU
                            <strong>
                                {{ $game->recommendedRequirement->gpu->model }}
                            </strong>

                        </li>


                        <li class="list-group-item d-flex justify-content-between">

                            RAM
                            <strong>
                                {{ $game->recommendedRequirement->ram }}
                            </strong>

                        </li>


                        <li class="list-group-item d-flex justify-content-between">

                            Storage
                            <strong>
                                {{ $game->recommendedRequirement->storage }}
                            </strong>

                        </li>


                    </ul>


                </div>


            </div>


        </div>


    </div>



    <!-- Tags -->

    <div class="card shadow-sm border-0 mt-4">


        <div class="card-header bg-white">

            <h5 class="mb-0 fw-bold">
                Tags
            </h5>

        </div>


        <div class="card-body">


            <span class="badge bg-secondary me-2">
                Multiplayer
            </span>


            <span class="badge bg-success me-2">
                RPG
            </span>


            <span class="badge bg-warning text-dark">
                Strategy
            </span>


        </div>


    </div>


</div>

@endsection