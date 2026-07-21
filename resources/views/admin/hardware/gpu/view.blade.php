@extends('layouts.admin')

@section('title', 'GPU Details')
@section('page-title', 'GPU Details')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                {{ $gpu->model }}

            </h2>

            <p class="text-muted mb-0">

                GPU specifications and information.

            </p>

        </div>

        <div>

            <a href="{{ route('admin.hardware.gpu.index') }}"
               class="btn btn-outline-secondary">

                <i class="bi bi-arrow-left me-1"></i>

                Back

            </a>

            <a href="{{ route('admin.hardware.gpu.edit', $gpu) }}"
               class="btn btn-warning">

                <i class="bi bi-pencil-square me-1"></i>

                Edit

            </a>

        </div>

    </div>

    <div class="row">

        {{-- GPU Information --}}
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">

                    <h5 class="mb-0">

                        GPU Specifications

                    </h5>

                </div>

                <div class="card-body">

                    <table class="table table-borderless align-middle mb-0">

                        <tbody>

                            <tr>

                                <th width="250">

                                    Manufacturer

                                </th>

                                <td>

                                    @if($gpu->manufacturer == 'NVIDIA')

                                        <span class="badge bg-success">

                                            NVIDIA

                                        </span>

                                    @elseif($gpu->manufacturer == 'AMD')

                                        <span class="badge bg-danger">

                                            AMD

                                        </span>

                                    @else

                                        <span class="badge bg-primary">

                                            Intel

                                        </span>

                                    @endif

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Model

                                </th>

                                <td>

                                    {{ $gpu->model }}

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    VRAM

                                </th>

                                <td>

                                    {{ $gpu->vram ? $gpu->vram . ' GB' : '-' }}

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Benchmark Score

                                </th>

                                <td>

                                    <span class="badge bg-primary fs-6">

                                        {{ number_format($gpu->score) }}

                                    </span>

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Release Year

                                </th>

                                <td>

                                    {{ $gpu->release_year ?? '-' }}

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Status

                                </th>

                                <td>

                                    @if($gpu->is_active)

                                        <span class="badge bg-success">

                                            Active

                                        </span>

                                    @else

                                        <span class="badge bg-secondary">

                                            Inactive

                                        </span>

                                    @endif

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        {{-- Sidebar --}}
        <div class="col-lg-4">

            <div class="card shadow-sm border-0 mb-4">

                <div class="card-header bg-white">

                    <h5 class="mb-0">

                        Benchmark Score

                    </h5>

                </div>

                <div class="card-body text-center">

                    <h1 class="display-4 fw-bold text-primary">

                        {{ number_format($gpu->score) }}

                    </h1>

                    <small class="text-muted">

                        Compatibility Benchmark

                    </small>

                </div>

            </div>

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">

                    <h5 class="mb-0">

                        Record Information

                    </h5>

                </div>

                <div class="card-body">

                    <p class="mb-3">

                        <strong>Created</strong><br>

                        {{ $gpu->created_at->format('F d, Y h:i A') }}

                    </p>

                    <p class="mb-3">

                        <strong>Last Updated</strong><br>

                        {{ $gpu->updated_at->format('F d, Y h:i A') }}

                    </p>

                    <hr>

                    <form
                        action="{{ route('admin.hardware.gpu.destroy', $gpu) }}"
                        method="POST"
                        onsubmit="return confirm('Delete this GPU?')">

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-outline-danger w-100">

                            <i class="bi bi-trash me-1"></i>

                            Delete GPU

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection