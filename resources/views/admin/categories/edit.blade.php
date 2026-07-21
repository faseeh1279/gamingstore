@extends('layouts.admin')

@section('title', 'Edit Category')
@section('page-title', 'Edit Category')

@section('content')

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                Edit Category

            </h2>

            <p class="text-muted mb-0">

                Update the selected category.

            </p>

        </div>

        <a
            href="{{ route('admin.categories.index') }}"
            class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left me-1"></i>

            Back

        </a>

    </div>

    <form
        action="{{ route('admin.categories.update',$category) }}"
        method="POST">

        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-lg-8">

                <div class="card shadow-sm border-0">

                    <div class="card-header bg-white">

                        <h5 class="mb-0">

                            Category Information

                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="mb-4">

                            <label class="form-label">

                                Name
                                <span class="text-danger">*</span>

                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name',$category->name) }}">

                            @error('name')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Slug

                            </label>

                            <input
                                type="text"
                                name="slug"
                                class="form-control @error('slug') is-invalid @enderror"
                                value="{{ old('slug',$category->slug) }}">

                            @error('slug')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Icon

                            </label>

                            <input
                                type="text"
                                name="icon"
                                class="form-control"
                                value="{{ old('icon',$category->icon) }}"
                                placeholder="bi-controller">

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Description

                            </label>

                            <textarea
                                rows="5"
                                name="description"
                                class="form-control">{{ old('description',$category->description) }}</textarea>

                        </div>

                        <div>

                            <label class="form-label">

                                Status

                            </label>

                            <div class="form-check form-switch">

                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    name="is_active"
                                    value="1"
                                    @checked(old('is_active',$category->is_active))>

                                <label class="form-check-label">

                                    Active

                                </label>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card shadow-sm border-0 mb-4">

                    <div class="card-header bg-white">

                        <h5 class="mb-0">

                            Preview

                        </h5>

                    </div>

                    <div class="card-body text-center">

                        <div class="display-2 text-primary mb-3">

                            <i class="{{ $category->icon ?: 'bi bi-grid' }}"></i>

                        </div>

                        <h4>

                            {{ $category->name }}

                        </h4>

                        <p class="text-muted">

                            {{ $category->description ?: 'No description available.' }}

                        </p>

                        @if($category->is_active)

                            <span class="badge bg-success">

                                Active

                            </span>

                        @else

                            <span class="badge bg-danger">

                                Inactive

                            </span>

                        @endif

                    </div>

                </div>

                <div class="card shadow-sm border-0">

                    <div class="card-header bg-white">

                        <h5 class="mb-0">

                            Information

                        </h5>

                    </div>

                    <div class="card-body">

                        <p>

                            <strong>Created:</strong>

                            <br>

                            {{ $category->created_at?->format('d M Y h:i A') ?? 'N/A' }}

                        </p>

                        <p>

                            <strong>Last Updated:</strong>

                            <br>

                            {{ $category->created_at?->format('d M Y h:i A') ?? 'N/A' }}

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="mt-4 text-end">

            <a
                href="{{ route('admin.categories.index') }}"
                class="btn btn-light">

                Cancel

            </a>

            <button
                type="submit"
                class="btn btn-primary">

                <i class="bi bi-check-circle me-1"></i>

                Update Category

            </button>

        </div>

    </form>

</div>

@endsection