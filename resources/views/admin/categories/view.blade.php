@extends('layouts.admin')

@section('title', 'View Category')

@section('content')

<div class="container-fluid py-4">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

        <div>
            <h2 class="fw-bold mb-1">Category Details</h2>
            <p class="text-muted mb-0">
                View detailed information about this game category.
            </p>
        </div>

        <div class="d-flex gap-2">

            <a href="#" class="btn btn-warning">
                <i class="bi bi-pencil-square me-2"></i>
                Edit
            </a>

            <a href="#" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-2"></i>
                Back
            </a>

        </div>

    </div>

    <div class="row">

        {{-- Left Column --}}
        <div class="col-lg-8">

            <div class="card shadow-sm border-0 mb-4">

                <div class="card-header bg-white">
                    <h5 class="mb-0 fw-semibold">
                        Category Information
                    </h5>
                </div>

                <div class="card-body">

                    <div class="row g-4">

                        <div class="col-md-6">

                            <label class="form-label text-muted mb-1">
                                Category Name
                            </label>

                            <h5 class="fw-semibold">
                                {{ $category->name }}
                            </h5>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label text-muted mb-1">
                                Slug
                            </label>

                            <p class="mb-0">
                                <code>{{ $category->slug }}</code>
                            </p>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label text-muted mb-1">
                                Icon
                            </label>

                            <div class="d-flex align-items-center gap-3">

                                <i class="{{ $category->icon }} fs-2 text-primary"></i>

                                <span class="text-muted">
                                    {{ $category->icon }}
                                </span>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label text-muted mb-1">
                                Status
                            </label>

                            <div>

                                @if($category->is_active)

                                    <span class="badge bg-success px-3 py-2">
                                        Active
                                    </span>

                                @else

                                    <span class="badge bg-danger px-3 py-2">
                                        Inactive
                                    </span>

                                @endif

                            </div>

                        </div>

                        <div class="col-12">

                            <label class="form-label text-muted mb-2">
                                Description
                            </label>

                            <div class="border rounded p-3 bg-light">

                                {{ $category->description ?: 'No description available.' }}

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- Right Column --}}
        <div class="col-lg-4">

            {{-- Preview Card --}}
            <div class="card shadow-sm border-0 mb-4">

                <div class="card-header bg-white">
                    <h5 class="mb-0 fw-semibold">
                        Preview
                    </h5>
                </div>

                <div class="card-body text-center">

                    <div class="display-3 text-primary mb-3">

                        <i class="{{ $category->icon }}"></i>

                    </div>

                    <h4 class="fw-bold">
                        {{ $category->name ?? 'Category Name' }} 
                    </h4>

                    <p class="text-muted">

                        {{ $category->description ?? 'Category Description'}}

                    </p>

                    @if($category->is_active)

                        <span class="badge bg-success px-3 py-2">
                            Active
                        </span>

                    @else

                        <span class="badge bg-danger px-3 py-2">
                            Inactive
                        </span>

                    @endif

                </div>

            </div>

            {{-- Statistics --}}
            <div class="card shadow-sm border-0 mb-4">

                <div class="card-header bg-white">
                    <h5 class="mb-0 fw-semibold">
                        Statistics
                    </h5>
                </div>

                <div class="card-body">

                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">Games</span>
                        <strong>{{ $category->games_count ?? 0 }}</strong>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">Created</span>
                        <strong>{{ $category->created_at->format('d M Y') }}</strong>
                    </div>

                    <div class="d-flex justify-content-between">
                        <span class="text-muted">Last Updated</span>
                        <strong>{{ $category->updated_at->format('d M Y') }}</strong>
                    </div>

                </div>

            </div>

            {{-- Quick Actions --}}
            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">
                    <h5 class="mb-0 fw-semibold">
                        Quick Actions
                    </h5>
                </div>

                <div class="card-body d-grid gap-2">

                    <a href="#"
                        class="btn btn-warning">

                        <i class="bi bi-pencil-square me-2"></i>

                        Edit Category

                    </a>

                    <form action="#"
                        method="POST">

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-danger w-100">

                            <i class="bi bi-trash me-2"></i>

                            Delete Category

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection