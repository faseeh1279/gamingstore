@extends('layouts.admin')

@section('title', 'Edit Developer')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h4 class="mb-0">
                Edit Developer
            </h4>

            <a
                href="{{ route('admin.developer.index') }}"
                class="btn btn-secondary">

                Back

            </a>

        </div>

        <div class="card-body">

            <form
                action="{{ route('admin.developer.update', $developer) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                {{-- Name --}}

                <div class="mb-3">

                    <label class="form-label">

                        Name

                        <span class="text-danger">*</span>

                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name', $developer->name) }}"
                        class="form-control @error('name') is-invalid @enderror">

                    @error('name')

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
                        rows="4"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description', $developer->description) }}</textarea>

                    @error('description')

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
                        value="{{ old('website', $developer->website) }}"
                        class="form-control @error('website') is-invalid @enderror">

                    @error('website')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>

                

                {{-- Current Logo --}}

                @if($developer->logo)

                    <div class="mb-3">

                        <label class="form-label">

                            Current Logo

                        </label>

                        <br>

                        <img
                            src="{{ asset('storage/'.$developer->logo) }}"
                            class="img-thumbnail"
                            style="max-height:180px">

                    </div>

                @endif

                {{-- New Logo --}}

                <div class="mb-3">

                    <label class="form-label">

                        Change Logo

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

                {{-- Active --}}

                <div class="form-check form-switch mb-4">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="is_active"
                        name="is_active"
                        value="1"
                        {{ old('is_active', $developer->is_active) ? 'checked' : '' }}>

                    <label
                        class="form-check-label"
                        for="is_active">

                        Active Developer

                    </label>

                </div>

                <button
                    type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-check-circle me-1"></i>

                    Update Developer

                </button>

                <a
                    href="{{ route('admin.developer.index') }}"
                    class="btn btn-secondary">

                    Cancel

                </a>

            </form>

        </div>

    </div>

</div>

@endsection