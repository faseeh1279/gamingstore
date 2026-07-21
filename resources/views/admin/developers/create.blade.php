@extends('layouts.admin')

@section('title', 'Add Developer')
@section('page-title', 'Add Developer')

@section('content')

<div class="container-fluid py-4">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                Add New Developer
            </h2>

            <p class="text-muted mb-0">
                Create a new game developer that can be assigned to games.
            </p>

        </div>

        <a
            href="{{ route('admin.developer.index') }}"
            class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left me-1"></i>

            Back to Developers

        </a>

    </div>

    <form
        action="{{ route('admin.developer.store') }}"
        method="POST"
        enctype="multipart/form-data">

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

                        {{-- Name --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                Developer Name

                                <span class="text-danger">*</span>

                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Rockstar Games"
                                value="{{ old('name') }}">

                            @error('name')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        {{-- Website --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                Website

                            </label>

                            <input
                                type="url"
                                name="website"
                                class="form-control @error('website') is-invalid @enderror"
                                placeholder="https://www.rockstargames.com"
                                value="{{ old('website') }}">

                            @error('website')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        {{-- Logo --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                Logo

                            </label>

                            <input
                                type="file"
                                name="logo"
                                class="form-control @error('logo') is-invalid @enderror"
                                accept=".jpg,.jpeg,.png,.svg,.webp">

                            <div class="form-text">

                                Supported formats: JPG, PNG, SVG, WEBP (Max: 2MB)

                            </div>

                            @error('logo')

                                <div class="invalid-feedback d-block">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        {{-- Description --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                Description

                            </label>

                            <textarea
                                name="description"
                                rows="5"
                                class="form-control @error('description') is-invalid @enderror"
                                placeholder="Write a short description...">{{ old('description') }}</textarea>

                            @error('description')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

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

                                Inactive developers cannot be assigned to new games.

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

                            Preview

                        </h5>

                    </div>

                    <div class="card-body text-center">

                        <div
                            class="rounded-circle bg-light border d-flex align-items-center justify-content-center mx-auto mb-3"
                            style="width:120px;height:120px;">

                            <i class="bi bi-building fs-1 text-secondary"></i>

                        </div>

                        <h5 class="fw-bold">

                            Developer Name

                        </h5>

                        <p class="text-muted small">

                            https://example.com

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

                                Use the official developer name.

                            </li>

                            <li class="mb-3">

                                <i class="bi bi-check-circle-fill text-success me-2"></i>

                                Upload a high-quality logo.

                            </li>

                            <li class="mb-3">

                                <i class="bi bi-check-circle-fill text-success me-2"></i>

                                Provide the official website if available.

                            </li>

                            <li class="mb-3">

                                <i class="bi bi-check-circle-fill text-success me-2"></i>

                                Keep the description concise.

                            </li>

                            <li>

                                <i class="bi bi-check-circle-fill text-success me-2"></i>

                                Only active developers can be assigned to games.

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        {{-- Buttons --}}
        <div class="d-flex justify-content-end gap-2 mt-4">

            <a
                href="{{ route('admin.developer.index') }}"
                class="btn btn-light">

                Cancel

            </a>

            <button
                type="submit"
                class="btn btn-primary">

                <i class="bi bi-check-lg me-1"></i>

                Save Developer

            </button>

        </div>

    </form>

</div>

@endsection