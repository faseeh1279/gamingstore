@extends('layouts.admin')

@section('title', 'Add CPU')
@section('page-title', 'Add CPU')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add New CPU</h5>

            <a href="{{ route('admin.hardware.cpu.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i>
                Back
            </a>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.hardware.cpu.store') }}" method="POST">
                @csrf
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">
                            Manufacturer <span class="text-danger">*</span>
                        </label>

                        <select
                            name="manufacturer"
                            class="form-select"
                            required>

                            <option value="">Select Manufacturer</option>
                            <option value="Intel">Intel</option>
                            <option value="AMD">AMD</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">
                            CPU Model <span class="text-danger">*</span>
                        </label>

                        <input
                            type="text"
                            name="model"
                            class="form-control"
                            placeholder="Intel Core i7-12700K"
                            required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">
                            Cores
                        </label>

                        <input
                            type="number"
                            name="cores"
                            class="form-control"
                            placeholder="8">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">
                            Threads
                        </label>

                        <input
                            type="number"
                            name="threads"
                            class="form-control"
                            placeholder="16">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">
                            Benchmark Score <span class="text-danger">*</span>
                        </label>

                        <input
                            type="number"
                            name="score"
                            class="form-control"
                            placeholder="29500"
                            required>

                        <small class="text-muted">
                            Used for compatibility comparison.
                        </small>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">
                            Base Clock (GHz)
                        </label>

                        <input
                            type="number"
                            step="0.1"
                            name="base_clock"
                            class="form-control"
                            placeholder="3.6">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">
                            Boost Clock (GHz)
                        </label>

                        <input
                            type="number"
                            step="0.1"
                            name="boost_clock"
                            class="form-control"
                            placeholder="5.0">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">
                            Release Year
                        </label>

                        <input
                            type="number"
                            name="release_year"
                            class="form-control"
                            placeholder="2022"
                            min="1990"
                            max="{{ date('Y') + 1 }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">
                            Status
                        </label>

                        <select
                            name="is_active"
                            class="form-select">

                            <option value="1" selected>
                                Active
                            </option>

                            <option value="0">
                                Inactive
                            </option>

                        </select>
                    </div>

                </div>

                <div class="mt-4">

                    <button
                        type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-check-circle me-1"></i>
                        Save CPU

                    </button>

                    <a
                        href="{{ route('admin.hardware.cpu.index') }}"
                        class="btn btn-secondary">

                        Cancel

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection