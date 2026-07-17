@extends('layouts.admin')

@section('title', 'Add Category')

@section('content')

<div class="container-fluid py-4">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Add New Category</h2>
            <p class="text-muted mb-0">
                Create a new game category that can be assigned to games.
            </p>
        </div>

        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>
            Back to Categories
        </a>
    </div>

    <form action="#" method="POST">

        @csrf

        <div class="row">

            {{-- Left Column --}}
            <div class="col-lg-8">

                <div class="card shadow-sm border-0 mb-4">

                    <div class="card-header bg-white">
                        <h5 class="mb-0 fw-semibold">
                            General Information
                        </h5>
                    </div>

                    <div class="card-body">

                        {{-- Category Name --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Category Name
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Example: Action"
                                value="{{ old('name') }}">

                            <div class="form-text">
                                Enter a unique category name.
                            </div>
                        </div>

                        {{-- Slug --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Slug
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="slug"
                                class="form-control"
                                placeholder="example: action"
                                value="{{ old('slug') }}">

                            <div class="form-text">
                                Used in URLs. Example: action-games
                            </div>
                        </div>

                        {{-- Icon --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Icon
                            </label>

                            <input
                                type="text"
                                name="icon"
                                class="form-control"
                                placeholder="Example: bi-controller"
                                value="{{ old('icon') }}">

                            <div class="form-text">
                                Bootstrap Icon class (optional).
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Description
                            </label>

                            <textarea
                                name="description"
                                rows="5"
                                class="form-control"
                                placeholder="Write a short description...">{{ old('description') }}</textarea>

                            <div class="form-text">
                                Brief description of this category.
                            </div>
                        </div>

                        {{-- Status --}}
                        <div>
                            <label class="form-label fw-semibold d-block">
                                Status
                            </label>

                            <div class="form-check form-switch">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="is_active"
                                    value="1"
                                    checked>

                                <label class="form-check-label">
                                    Active
                                </label>

                            </div>

                            <div class="form-text">
                                Inactive categories won't be visible on the website.
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            {{-- Right Column --}}
            <div class="col-lg-4">

                {{-- Preview --}}
                <div class="card shadow-sm border-0 mb-4">

                    <div class="card-header bg-white">
                        <h5 class="mb-0 fw-semibold">
                            Category Preview
                        </h5>
                    </div>

                    <div class="card-body text-center">

                        <div class="display-3 mb-3 text-primary">
                            <i class="bi bi-controller"></i>
                        </div>

                        <h5 class="fw-bold">
                            Action
                        </h5>

                        <p class="text-muted small mb-4">
                            Fast-paced games focused on combat and adventure.
                        </p>

                        <span class="badge bg-success px-3 py-2">
                            Active
                        </span>

                    </div>

                </div>

                {{-- Guidelines --}}
                <div class="card shadow-sm border-0">

                    <div class="card-header bg-white">
                        <h5 class="mb-0 fw-semibold">
                            Guidelines
                        </h5>
                    </div>

                    <div class="card-body">

                        <ul class="list-unstyled mb-0">

                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Use unique category names.
                            </li>

                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Keep the slug lowercase.
                            </li>

                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Choose a meaningful icon.
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Keep descriptions short and informative.
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        {{-- Buttons --}}
        <div class="d-flex justify-content-end gap-2 mt-4">

            <a href="{{ route('admin.categories.index') }}" class="btn btn-light">
                Cancel
            </a>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-lg me-1"></i>
                Save Category
            </button>

        </div>

    </form>

</div>

@endsection