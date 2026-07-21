@extends('layouts.admin')

@section('title', 'Edit CPU')
@section('page-title', 'Edit CPU')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white d-flex justify-content-between align-items-center">

            <h5 class="mb-0">

                Edit CPU

            </h5>

            <a href="{{ route('admin.hardware.cpu.index') }}"
               class="btn btn-outline-secondary">

                <i class="bi bi-arrow-left me-1"></i>

                Back

            </a>

        </div>

        <div class="card-body">

            <form action="{{ route('admin.hardware.cpu.update', $cpu) }}"
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

                            <option value="Intel"
                                {{ old('manufacturer', $cpu->manufacturer) == 'Intel' ? 'selected' : '' }}>
                                Intel
                            </option>

                            <option value="AMD"
                                {{ old('manufacturer', $cpu->manufacturer) == 'AMD' ? 'selected' : '' }}>
                                AMD
                            </option>

                        </select>

                        @error('manufacturer')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Model --}}
                    <div class="col-md-6">

                        <label class="form-label">

                            CPU Model
                            <span class="text-danger">*</span>

                        </label>

                        <input
                            type="text"
                            name="model"
                            class="form-control @error('model') is-invalid @enderror"
                            value="{{ old('model', $cpu->model) }}"
                            placeholder="Intel Core i7-12700K"
                            required>

                        @error('model')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Cores --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            Cores

                        </label>

                        <input
                            type="number"
                            name="cores"
                            class="form-control @error('cores') is-invalid @enderror"
                            value="{{ old('cores', $cpu->cores) }}"
                            placeholder="8">

                        @error('cores')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Threads --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            Threads

                        </label>

                        <input
                            type="number"
                            name="threads"
                            class="form-control @error('threads') is-invalid @enderror"
                            value="{{ old('threads', $cpu->threads) }}"
                            placeholder="16">

                        @error('threads')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Score --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            Benchmark Score
                            <span class="text-danger">*</span>

                        </label>

                        <input
                            type="number"
                            name="score"
                            class="form-control @error('score') is-invalid @enderror"
                            value="{{ old('score', $cpu->score) }}"
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

                    {{-- Base Clock --}}
                    <div class="col-md-6">

                        <label class="form-label">

                            Base Clock (GHz)

                        </label>

                        <input
                            type="number"
                            step="0.01"
                            name="base_clock"
                            class="form-control @error('base_clock') is-invalid @enderror"
                            value="{{ old('base_clock', $cpu->base_clock) }}"
                            placeholder="3.60">

                        @error('base_clock')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Boost Clock --}}
                    <div class="col-md-6">

                        <label class="form-label">

                            Boost Clock (GHz)

                        </label>

                        <input
                            type="number"
                            step="0.01"
                            name="boost_clock"
                            class="form-control @error('boost_clock') is-invalid @enderror"
                            value="{{ old('boost_clock', $cpu->boost_clock) }}"
                            placeholder="5.00">

                        @error('boost_clock')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Release Year --}}
                    <div class="col-md-6">

                        <label class="form-label">

                            Release Year

                        </label>

                        <input
                            type="number"
                            name="release_year"
                            class="form-control @error('release_year') is-invalid @enderror"
                            value="{{ old('release_year', $cpu->release_year) }}"
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
                                {{ old('is_active', $cpu->is_active) == 1 ? 'selected' : '' }}>
                                Active
                            </option>

                            <option value="0"
                                {{ old('is_active', $cpu->is_active) == 0 ? 'selected' : '' }}>
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

                    <a href="{{ route('admin.hardware.cpu.index') }}"
                       class="btn btn-secondary">

                        Cancel

                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-check-circle me-1"></i>

                        Update CPU

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection