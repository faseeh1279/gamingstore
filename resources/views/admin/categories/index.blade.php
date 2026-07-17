@extends('layouts.admin')

@section('title', 'Categories')

@section('content')

<div class="container-fluid py-4">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h2 class="fw-bold mb-1">Categories</h2>
            <p class="text-muted mb-0">
                Manage all game categories from one place.
            </p>
        </div>

        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>
            Add Category
        </a>
    </div>

    {{-- Statistics --}}
    <div class="row g-4 mb-4">

        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted text-uppercase">Total Categories</small>
                        <h3 class="fw-bold mt-2 mb-0">24</h3>
                    </div>

                    <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                        <i class="bi bi-grid fs-3 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted text-uppercase">Active</small>
                        <h3 class="fw-bold mt-2 mb-0 text-success">21</h3>
                    </div>

                    <div class="bg-success bg-opacity-10 rounded-circle p-3">
                        <i class="bi bi-check-circle fs-3 text-success"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted text-uppercase">Inactive</small>
                        <h3 class="fw-bold mt-2 mb-0 text-danger">3</h3>
                    </div>

                    <div class="bg-danger bg-opacity-10 rounded-circle p-3">
                        <i class="bi bi-x-circle fs-3 text-danger"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted text-uppercase">Games Tagged</small>
                        <h3 class="fw-bold mt-2 mb-0">438</h3>
                    </div>

                    <div class="bg-warning bg-opacity-10 rounded-circle p-3">
                        <i class="bi bi-controller fs-3 text-warning"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Categories Table --}}
    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white border-bottom">

            <div class="row align-items-center g-3">

                <div class="col-md-6">
                    <h5 class="mb-0 fw-semibold">
                        Category List
                    </h5>
                </div>

                <div class="col-md-6">

                    <div class="d-flex justify-content-md-end gap-2">

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search categories...">

                        <button class="btn btn-outline-secondary">
                            <i class="bi bi-funnel"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Games</th>
                        <th class="text-end">Actions</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>1</td>

                        <td>
                            <i class="bi bi-controller fs-4 text-primary"></i>
                        </td>

                        <td>
                            <strong>Action</strong>
                        </td>

                        <td>
                            <span class="text-muted">action</span>
                        </td>

                        <td>
                            Fast-paced combat and adventure games.
                        </td>

                        <td>
                            <span class="badge bg-success">
                                Active
                            </span>
                        </td>

                        <td>124</td>

                        <td class="text-end">

                            <div class="btn-group">

                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="#" class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>

                        </td>

                    </tr>

                    <tr>

                        <td>2</td>

                        <td>
                            <i class="bi bi-globe fs-4 text-success"></i>
                        </td>

                        <td>
                            <strong>Open World</strong>
                        </td>

                        <td>open-world</td>

                        <td>
                            Explore massive open environments.
                        </td>

                        <td>
                            <span class="badge bg-success">
                                Active
                            </span>
                        </td>

                        <td>67</td>

                        <td class="text-end">

                            <div class="btn-group">

                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="#" class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>

                        </td>

                    </tr>

                    <tr>

                        <td>3</td>

                        <td>
                            <i class="bi bi-car-front fs-4 text-danger"></i>
                        </td>

                        <td>
                            <strong>Racing</strong>
                        </td>

                        <td>racing</td>

                        <td>
                            High-speed racing games.
                        </td>

                        <td>
                            <span class="badge bg-secondary">
                                Inactive
                            </span>
                        </td>

                        <td>31</td>

                        <td class="text-end">

                            <div class="btn-group">

                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i>
                                </a>

                                <a href="#" class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

        {{-- Footer --}}
        <div class="card-footer bg-white">

            <div class="row align-items-center">

                <div class="col-md-6">
                    <small class="text-muted">
                        Showing 1 to 10 of 24 categories.
                    </small>
                </div>

                <div class="col-md-6">

                    <nav class="d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">

                        <ul class="pagination pagination-sm mb-0">

                            <li class="page-item disabled">
                                <a class="page-link" href="#">
                                    Previous
                                </a>
                            </li>

                            <li class="page-item active">
                                <a class="page-link" href="#">
                                    1
                                </a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">
                                    2
                                </a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">
                                    3
                                </a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">
                                    Next
                                </a>
                            </li>

                        </ul>

                    </nav>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection