@extends('layouts.admin')

@section('title', 'CPUs')
@section('page-title', 'CPU Management')

@section('content')

<div class="container-fluid">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">
                CPU Management
            </h3>

            <p class="text-muted mb-0">
                Manage all processors used for game compatibility checks.
            </p>

        </div>

        <a href="{{ route('admin.hardware.cpu.create') }}"
           class="btn btn-primary">

            <i class="bi bi-plus-circle me-1"></i>

            Add CPU

        </a>

    </div>

    {{-- Statistics --}}
    <div class="row g-3 mb-4">

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                Total CPUs
                            </small>

                            <h3 class="fw-bold mt-2 mb-0">

                                {{ $stats['total'] }}

                            </h3>

                        </div>

                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                             style="width:60px;height:60px;">

                            <i class="bi bi-cpu text-primary fs-3"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                Intel CPUs
                            </small>

                            <h3 class="fw-bold mt-2 mb-0">

                                {{ $stats['intel'] }}

                            </h3>

                        </div>

                        <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                             style="width:60px;height:60px;">

                            <i class="bi bi-motherboard text-info fs-3"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                AMD CPUs
                            </small>

                            <h3 class="fw-bold mt-2 mb-0">

                                {{ $stats['amd'] }}

                            </h3>
                        </div>

                        <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                             style="width:60px;height:60px;">

                            <i class="bi bi-lightning-charge text-danger fs-3"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <small class="text-muted">
                                Active CPUs
                            </small>

                            <h3 class="fw-bold mt-2 mb-0">

                                {{ $stats['active'] }}

                            </h3>

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

    {{-- CPU Table --}}
    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white">

            <form method="GET"
                  action="{{ route('admin.hardware.cpu.index') }}">

                <div class="row g-3 align-items-end">

                    <div class="col-lg-5">

                        <label class="form-label">
                            Search
                        </label>

                        <input
                            type="text"
                            name="search"
                            class="form-control"
                            value="{{ request('search') }}"
                            placeholder="Search by CPU model...">

                    </div>

                    <div class="col-lg-3">

                        <label class="form-label">
                            Manufacturer
                        </label>

                        <select
                            name="manufacturer"
                            class="form-select">

                            <option value="">
                                All Manufacturers
                            </option>

                            <option value="Intel"
                                {{ request('manufacturer') == 'Intel' ? 'selected' : '' }}>
                                Intel
                            </option>

                            <option value="AMD"
                                {{ request('manufacturer') == 'AMD' ? 'selected' : '' }}>
                                AMD
                            </option>

                        </select>

                    </div>

                    <div class="col-lg-2">

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
                                {{ request('status') == '1' ? 'selected' : '' }}>
                                Active
                            </option>

                            <option value="0"
                                {{ request('status') == '0' ? 'selected' : '' }}>
                                Inactive
                            </option>

                        </select>

                    </div>

                    <div class="col-lg-2 d-grid">

                        <button
                            type="submit"
                            class="btn btn-primary">

                            <i class="bi bi-search me-1"></i>

                            Filter

                        </button>

                    </div>

                </div>

            </form>

        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                    <tr>

                        <th>#</th>

                        <th>CPU Model</th>

                        <th>Manufacturer</th>

                        <th>Cores / Threads</th>

                        <th>Base</th>

                        <th>Boost</th>

                        <th>Score</th>

                        <th>Year</th>

                        <th>Status</th>

                        <th width="130">
                            Actions
                        </th>

                    </tr>

                </thead>

                <tbody>

                                        @forelse ($cpus as $cpu)

                        <tr>

                            <td>

                                {{ $loop->iteration + ($cpus->firstItem() - 1) }}

                            </td>

                            <td>

                                <div class="fw-semibold">

                                    {{ $cpu->model }}

                                </div>

                            </td>

                            <td>

                                @if($cpu->manufacturer == 'Intel')

                                    <span class="badge bg-primary">

                                        Intel

                                    </span>

                                @elseif($cpu->manufacturer == 'AMD')

                                    <span class="badge bg-danger">

                                        AMD

                                    </span>

                                @else

                                    <span class="badge bg-secondary">

                                        {{ $cpu->manufacturer }}

                                    </span>

                                @endif

                            </td>

                            <td>

                                {{ $cpu->cores ?? '-' }}

                                /

                                {{ $cpu->threads ?? '-' }}

                            </td>

                            <td>

                                {{ $cpu->base_clock ?? '-' }}

                                @if($cpu->base_clock)
                                    GHz
                                @endif

                            </td>

                            <td>

                                {{ $cpu->boost_clock ?? '-' }}

                                @if($cpu->boost_clock)
                                    GHz
                                @endif

                            </td>

                            <td>

                                <span class="fw-semibold">

                                    {{ number_format($cpu->score) }}

                                </span>

                            </td>

                            <td>

                                {{ $cpu->release_year ?? '-' }}

                            </td>

                            <td>

                                @if($cpu->is_active)

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

                                    <a href="{{ route('admin.hardware.cpu.view', $cpu) }}"
                                       class="btn btn-sm btn-outline-info">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                    <a href="{{ route('admin.hardware.cpu.edit', $cpu) }}"
                                       class="btn btn-sm btn-outline-warning">

                                        <i class="bi bi-pencil"></i>

                                    </a>

                                    <form action="{{ route('admin.hardware.cpu.destroy', $cpu) }}"
                                          method="POST"
                                          onsubmit="return confirm('Delete this CPU?')">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger">

                                            <i class="bi bi-trash"></i>

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="10" class="text-center py-5">

                                <i class="bi bi-cpu fs-1 text-muted d-block mb-3"></i>

                                <h5>

                                    No CPUs Found

                                </h5>

                                <p class="text-muted">

                                    There are currently no CPUs in the database.

                                </p>

                                <a href="{{ route('admin.hardware.cpu.create') }}"
                                   class="btn btn-primary">

                                    <i class="bi bi-plus-circle me-1"></i>

                                    Add First CPU

                                </a>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        @if($cpus->hasPages())

            <div class="card-footer bg-white">

                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <div class="text-muted small">

                        Showing

                        <strong>{{ $cpus->firstItem() }}</strong>

                        to

                        <strong>{{ $cpus->lastItem() }}</strong>

                        of

                        <strong>{{ $cpus->total() }}</strong>

                        CPUs

                    </div>

                    <div>

                        {{ $cpus->withQueryString()->links() }}

                    </div>

                </div>

            </div>

        @endif

    </div>

</div>

@endsection