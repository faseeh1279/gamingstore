@extends('layouts.admin')

@section('title', 'Create Publisher')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h4 class="mb-0">
                Create Publisher
            </h4>

            <a
                href="{{ route('admin.publisher.index') }}"
                class="btn btn-secondary">

                <i class="bi bi-arrow-left me-1"></i>

                Back

            </a>

        </div>

        <div class="card-body">

            <form
                action="{{ route('admin.publisher.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                {{-- Name --}}
                <div class="mb-3">

                    <label class="form-label">
                        Publisher Name
                        <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter publisher name">

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                {{-- Website --}}
                <div class="mb-3">

                    <label class="form-label">
                        Website
                    </label>

                    <input
                        type="url"
                        name="website"
                        value="{{ old('website') }}"
                        class="form-control @error('website') is-invalid @enderror"
                        placeholder="https://example.com">

                    @error('website')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                {{-- Description --}}
                <div class="mb-3">

                    <label class="form-label">
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="5"
                        class="form-control @error('description') is-invalid @enderror"
                        placeholder="Enter publisher description">{{ old('description') }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                {{-- Logo --}}
                <div class="mb-3">

                    <label class="form-label">
                        Logo
                    </label>

                    <input
                        type="file"
                        name="logo"
                        class="form-control @error('logo') is-invalid @enderror">

                    @error('logo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                {{-- Status --}}
                <div class="form-check form-switch mb-4">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="is_active"
                        name="is_active"
                        value="1"
                        {{ old('is_active', true) ? 'checked' : '' }}>

                    <label
                        class="form-check-label"
                        for="is_active">

                        Active Publisher

                    </label>

                </div>

                <button
                    type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-save me-1"></i>

                    Save Publisher

                </button>

                <a
                    href="{{ route('admin.publisher.index') }}"
                    class="btn btn-secondary">

                    Cancel

                </a>

            </form>

        </div>

    </div>

</div>

@endsection