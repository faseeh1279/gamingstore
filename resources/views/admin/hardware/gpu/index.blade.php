@extends('layouts.admin')

@section('title', 'GPUs')
@section('page-title', 'GPU Management')

@section('content')

<div class="container-fluid">

    {{-- Statistics --}}
    <div class="row mb-4">

        <div class="col-lg-3 col-md-6 mb-3">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted mb-2">

                             Total GPUs

                            </h6>

                            <h2 class="fw-bold">

                                {{ $stats['total'] }}

                            </h2>
                        </div>
                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">
    
                                <i class="bi bi-gpu-card"></i>
    
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6 mb-3">

            <div class="card border-0 shadow-sm">

                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                                <h6 class="text-muted mb-2">

                            NVIDIA

                        </h6>

                        <h2 class="fw-bold text-success">

                            {{ $stats['nvidia'] }}

                        </h2>
                        </div>
                        <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">
    
                                <i class="bi bi-nvidia"></i>
    
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6 mb-3">

            <div class="card border-0 shadow-sm">

                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted mb-2">
        
                                AMD
        
                            </h6>
        
                            <h2 class="fw-bold text-danger">
        
                                {{ $stats['amd'] }}
        
                            </h2>
                        </div>
                        <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">
    
                                <i class="bi bi-amd"></i>
    
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6 mb-3">

            <div class="card border-0 shadow-sm">

                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted mb-2">

                                Active

                            </h6>

                            <h2 class="fw-bold text-primary">

                                {{ $stats['active'] }}

                            </h2>
                        </div>

                        <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                 style="width:60px;height:60px;">
                                 <i class="bi bi-check-circle text-success fs-3"></i>
                        </div>

                    </div>

                    

                </div>

            </div>

        </div>

    </div>

    {{-- Table --}}
    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white">

            <form method="GET">

                <div class="row g-3 align-items-end">

                    <div class="col-md-4">

                        <label class="form-label">

                            Search

                        </label>

                        <input
                            type="text"
                            name="search"
                            class="form-control"
                            value="{{ request('search') }}"
                            placeholder="Search GPU...">

                    </div>

                    <div class="col-md-3">

                        <label class="form-label">

                            Manufacturer

                        </label>

                        <select
                            name="manufacturer"
                            class="form-select">

                            <option value="">

                                All

                            </option>

                            <option value="NVIDIA"
                                @selected(request('manufacturer') == 'NVIDIA')>

                                NVIDIA

                            </option>

                            <option value="AMD"
                                @selected(request('manufacturer') == 'AMD')>

                                AMD

                            </option>

                            <option value="Intel"
                                @selected(request('manufacturer') == 'Intel')>

                                Intel

                            </option>

                        </select>

                    </div>

                    <div class="col-md-3">

                        <label class="form-label">

                            Status

                        </label>

                        <select
                            name="status"
                            class="form-select">

                            <option value="">

                                All

                            </option>

                            <option value="1"
                                @selected(request('status') == '1')>

                                Active

                            </option>

                            <option value="0"
                                @selected(request('status') == '0')>

                                Inactive

                            </option>

                        </select>

                    </div>

                    <div class="col-md-2 d-grid">

                        <button class="btn btn-primary">

                            <i class="bi bi-search me-1"></i>

                            Search

                        </button>

                    </div>

                </div>

            </form>

        </div>

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h5 class="mb-0">

                    GPU List

                </h5>

                <a href="{{ route('admin.hardware.gpu.create') }}"
                   class="btn btn-success">

                    <i class="bi bi-plus-circle me-1"></i>

                    Add GPU

                </a>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>

                        <tr>

                            <th>#</th>

                            <th>Model</th>

                            <th>Manufacturer</th>

                            <th>VRAM</th>

                            <th>Score</th>

                            <th>Release Year</th>

                            <th>Status</th>

                            <th width="160">

                                Actions

                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($gpus as $gpu)

                            <tr>

                                <td>

                                    {{ $loop->iteration + ($gpus->firstItem() - 1) }}

                                </td>

                                <td>

                                    {{ $gpu->model }}

                                </td>

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

                                <td>

                                    {{ $gpu->vram }} GB

                                </td>

                                <td>

                                    {{ number_format($gpu->score) }}

                                </td>

                                <td>

                                    {{ $gpu->release_year }}

                                </td>

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

                                <td>

                                    <div class="btn-group">

                                        <a href="{{ route('admin.hardware.gpu.view',$gpu) }}"
                                           class="btn btn-outline-info btn-sm">

                                            <i class="bi bi-eye"></i>

                                        </a>

                                        <a href="{{ route('admin.hardware.gpu.edit',$gpu) }}"
                                           class="btn btn-outline-warning btn-sm">

                                            <i class="bi bi-pencil"></i>

                                        </a>

                                        <form
                                            action="{{ route('admin.hardware.gpu.destroy',$gpu) }}"
                                            method="POST"
                                            onsubmit="return confirm('Delete this GPU?')">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                class="btn btn-outline-danger btn-sm">

                                                <i class="bi bi-trash"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="8"
                                    class="text-center py-5">

                                    <h5>

                                        No GPUs Found

                                    </h5>

                                    <p class="text-muted">

                                        Create your first GPU.

                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        @if($gpus->hasPages())

            <div class="card-footer bg-white">

                {{ $gpus->links() }}

            </div>

        @endif

    </div>

</div>

@endsection