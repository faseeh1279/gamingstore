@extends('layouts.admin')

@section('title', 'Edit GPU')
@section('page-title', 'Edit GPU')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white d-flex justify-content-between align-items-center">

            <h5 class="mb-0">

                Edit GPU

            </h5>

            <a href="{{ route('admin.hardware.gpu.index') }}"
               class="btn btn-outline-secondary">

                <i class="bi bi-arrow-left me-1"></i>

                Back

            </a>

        </div>

        <div class="card-body">

            <form action="{{ route('admin.hardware.gpu.update', $gpu) }}"
                  method="POST">

                @csrf

                @method('PUT')

                <div class="row g-3">

                    {{-- Manufacturer --}}
                    <div class="col-md-6">

                        <label class="form-label">

                            Manufacturer
                            <span class="text-danger">*</span>

                        </label>

                        <select
                            name="manufacturer"
                            class="form-select @error('manufacturer') is-invalid @enderror"
                            required>

                            <option value="">Select Manufacturer</option>

                            <option value="NVIDIA"
                                {{ old('manufacturer', $gpu->manufacturer) == 'NVIDIA' ? 'selected' : '' }}>

                                NVIDIA

                            </option>

                            <option value="AMD"
                                {{ old('manufacturer', $gpu->manufacturer) == 'AMD' ? 'selected' : '' }}>

                                AMD

                            </option>

                            <option value="Intel"
                                {{ old('manufacturer', $gpu->manufacturer) == 'Intel' ? 'selected' : '' }}>

                                Intel

                            </option>

                        </select>

                        @error('manufacturer')

                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>

                        @enderror

                    </div>

                    {{-- GPU Model --}}
                    <div class="col-md-6">

                        <label class="form-label">

                            GPU Model
                            <span class="text-danger">*</span>

                        </label>

                        <input
                            type="text"
                            name="model"
                            class="form-control @error('model') is-invalid @enderror"
                            value="{{ old('model', $gpu->model) }}"
                            placeholder="GeForce RTX 4070 Ti"
                            required>

                        @error('model')

                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>

                        @enderror

                    </div>

                    {{-- VRAM --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            VRAM (GB)

                        </label>

                        <input
                            type="number"
                            step="0.5"
                            name="vram"
                            class="form-control @error('vram') is-invalid @enderror"
                            value="{{ old('vram', $gpu->vram) }}"
                            placeholder="12">

                        @error('vram')

                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>

                        @enderror

                    </div>

                    {{-- Benchmark Score --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            Benchmark Score
                            <span class="text-danger">*</span>

                        </label>

                        <input
                            type="number"
                            name="score"
                            class="form-control @error('score') is-invalid @enderror"
                            value="{{ old('score', $gpu->score) }}"
                            required>

                        <small class="text-muted">

                            Used for compatibility comparison.

                        </small>

                        @error('score')

                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>

                        @enderror

                    </div>

                    {{-- Release Year --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            Release Year

                        </label>

                        <input
                            type="number"
                            name="release_year"
                            class="form-control @error('release_year') is-invalid @enderror"
                            value="{{ old('release_year', $gpu->release_year) }}"
                            min="1990"
                            max="{{ date('Y') + 1 }}">

                        @error('release_year')

                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>

                        @enderror

                    </div>

                    {{-- Status --}}
                    <div class="col-md-6">

                        <label class="form-label">

                            Status

                        </label>

                        <select
                            name="is_active"
                            class="form-select @error('is_active') is-invalid @enderror">

                            <option value="1"
                                {{ old('is_active', $gpu->is_active) == 1 ? 'selected' : '' }}>

                                Active

                            </option>

                            <option value="0"
                                {{ old('is_active', $gpu->is_active) == 0 ? 'selected' : '' }}>

                                Inactive

                            </option>

                        </select>

                        @error('is_active')

                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>

                        @enderror

                    </div>

                </div>

                <div class="mt-4 d-flex justify-content-end gap-2">

                    <a href="{{ route('admin.hardware.gpu.index') }}"
                       class="btn btn-secondary">

                        Cancel

                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-check-circle me-1"></i>

                        Update GPU

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection