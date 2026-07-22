@extends('layouts.admin')

@section('title', 'Edit Publisher')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h4 class="mb-0">

                Edit Publisher

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
                action="{{ route('admin.publisher.update', $publisher) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                {{-- Name --}}
                <div class="mb-3">

                    <label class="form-label">

                        Publisher Name

                        <span class="text-danger">*</span>

                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name', $publisher->name) }}"
                        class="form-control @error('name') is-invalid @enderror">

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
                        value="{{ old('website', $publisher->website) }}"
                        class="form-control @error('website') is-invalid @enderror">

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
                        rows="5"
                        name="description"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description', $publisher->description) }}</textarea>

                    @error('description')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>

                {{-- Current Logo --}}
                @if($publisher->logo)

                    <div class="mb-3">

                        <label class="form-label">

                            Current Logo

                        </label>

                        <br>

                        <img
                            src="{{ asset('storage/'.$publisher->logo) }}"
                            class="img-thumbnail"
                            style="max-height:180px;">

                    </div>

                @endif

                {{-- Change Logo --}}
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

                {{-- Status --}}
                <div class="form-check form-switch mb-4">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="is_active"
                        name="is_active"
                        value="1"
                        {{ old('is_active', $publisher->is_active) ? 'checked' : '' }}>

                    <label
                        class="form-check-label"
                        for="is_active">

                        Active Publisher

                    </label>

                </div>

                <button
                    type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-check-circle me-1"></i>

                    Update Publisher

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