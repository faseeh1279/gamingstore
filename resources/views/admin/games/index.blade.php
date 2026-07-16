@extends('layouts.admin')


@section('content')
    {{-- <div class="container-fluid">
        <div class="card shadow-sm border-0 text-center">
            <div class="card-body py-5">
                <div class="mb-4">
                    <i class="bi bi-hourglass-split text-primary" style="font-size: 60px;"></i>
                </div>
                <h3 class="fw-bold mb-3">
                    Feature Coming Soon
                </h3>
                <p class="text-muted fs-5 mb-4">
                    This feature is currently under development and will be available soon.
                    We are working hard to bring you an improved experience.
                </p>
                <span class="badge bg-primary px-3 py-2">
                    Stay Tuned
                </span>
            </div>
        </div>
    </div> --}}



<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-1">Games Management</h3>
            <p class="text-muted mb-0">
                Manage all games from one place.
            </p>
        </div>

        <a href="{{ route('admin.games.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>
            Add Game
        </a>

    </div>

    {{-- Statistics --}}
    <div class="row g-4 mb-4">

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">Total Games</h6>

                    <h3 class="mb-0">1,250</h3>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">Published</h6>

                    <h3 class="mb-0 text-success">1,180</h3>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">Draft Games</h6>

                    <h3 class="mb-0 text-warning">70</h3>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">Categories</h6>

                    <h3 class="mb-0">45</h3>

                </div>

            </div>

        </div>

    </div>

    {{-- Table --}}
    <div class="d-none d-lg-block">
        <div class="card shadow-sm border-0">

            <div class="card-header bg-white">

                <div class="row g-3 align-items-center">

                    <div class="col-md-5">

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search games...">

                    </div>

                    <div class="col-md-3">

                        <select class="form-select">

                            <option>All Categories</option>
                            <option>Action</option>
                            <option>Adventure</option>
                            <option>RPG</option>

                        </select>

                    </div>

                    <div class="col-md-2">

                        <select class="form-select">

                            <option>All Status</option>
                            <option>Published</option>
                            <option>Draft</option>

                        </select>

                    </div>

                    <div class="col-md-2">

                        <button class="btn btn-primary w-100">
                            Search
                        </button>

                    </div>

                </div>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Developer</th>
                            <th>Platform</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th width="180">Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                        @for($i = 1; $i <= 10; $i++)

                        <tr>

                            <td>

                                <img
                                    src="https://placehold.co/70x90"
                                    class="rounded"
                                    width="60">

                            </td>

                            <td>

                                <strong>Grand Theft Auto {{ $i }}</strong>

                                <br>

                                <small class="text-muted">
                                    game-slug-{{ $i }}
                                </small>

                            </td>

                            <td>Action</td>

                            <td>Rockstar Games</td>

                            <td>PC</td>

                            <td>$59.99</td>

                            <td>

                                <span class="badge bg-success">

                                    Published

                                </span>

                            </td>

                            <td>

                                <div class="btn-group btn-group-sm">

                                    <a
                                        href="#"
                                        class="btn btn-outline-primary">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                    <a
                                        href="#"
                                        class="btn btn-outline-warning">

                                        <i class="bi bi-pencil"></i>

                                    </a>

                                    <button
                                        class="btn btn-outline-danger">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>

                        @endfor

                    </tbody>

                </table>

            </div>

            <div class="card-footer bg-white">

                <div class="d-flex justify-content-between align-items-center">

                    <small class="text-muted">

                        Showing 1 to 10 of 1,250 games

                    </small>

                    <nav>

                        <ul class="pagination pagination-sm mb-0">

                            <li class="page-item disabled">

                                <a class="page-link">

                                    Previous

                                </a>

                            </li>

                            <li class="page-item active">

                                <a class="page-link">

                                    1

                                </a>

                            </li>

                            <li class="page-item">

                                <a class="page-link">

                                    2

                                </a>

                            </li>

                            <li class="page-item">

                                <a class="page-link">

                                    3

                                </a>

                            </li>

                            <li class="page-item">

                                <a class="page-link">

                                    4

                                </a>

                            </li>

                            <li class="page-item">

                                <a class="page-link">

                                    Next

                                </a>

                            </li>

                        </ul>

                    </nav>

                </div>

            </div>

        </div>
    </div>

    {{-- Responsive Short Screen Display --}}
    <div class="d-lg-none">
        @for($i = 1; $i <= 10; $i++)

            <div class="card shadow-sm border-0 mb-3">

                <div class="card-body">

                    <div class="d-flex">

                        <img
                            src="https://placehold.co/90x120"
                            class="rounded me-3"
                            width="80">

                        <div class="flex-grow-1">

                            <h5 class="mb-1">
                                Grand Theft Auto {{ $i }}
                            </h5>

                            <small class="text-muted d-block mb-2">
                                game-slug-{{ $i }}
                            </small>

                            <div class="mb-2">

                                <span class="badge bg-success">
                                    Published
                                </span>

                            </div>

                            <div class="row small">

                                <div class="col-6 mb-2">
                                    <strong>Category</strong><br>
                                    Action
                                </div>

                                <div class="col-6 mb-2">
                                    <strong>Platform</strong><br>
                                    PC
                                </div>

                                <div class="col-6">
                                    <strong>Developer</strong><br>
                                    Rockstar Games
                                </div>

                                <div class="col-6">
                                    <strong>Price</strong><br>
                                    $59.99
                                </div>

                            </div>

                        </div>

                    </div>

                    <hr>

                    <div class="d-flex gap-2">

                        <a href="#"
                        class="btn btn-outline-primary btn-sm flex-fill">
                            <i class="bi bi-eye"></i>
                            View
                        </a>

                        <a href="#"
                        class="btn btn-outline-warning btn-sm flex-fill">
                            <i class="bi bi-pencil"></i>
                            Edit
                        </a>

                        <button
                            class="btn btn-outline-danger btn-sm flex-fill">
                            <i class="bi bi-trash"></i>
                            Delete
                        </button>

                    </div>

                </div>

            </div>

        @endfor
    </div>

</div>


@endsection