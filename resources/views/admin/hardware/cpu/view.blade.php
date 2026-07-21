@extends('layouts.admin')

@section('title', 'CPU Details')
@section('page-title', 'CPU Details')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">

                {{ $cpu->model }}

            </h3>

            <p class="text-muted mb-0">

                View CPU information.

            </p>

        </div>

        <div class="d-flex gap-2">

            <a href="{{ route('admin.hardware.cpu.index') }}"
               class="btn btn-outline-secondary">

                <i class="bi bi-arrow-left me-1"></i>

                Back

            </a>

            <a href="{{ route('admin.hardware.cpu.edit', $cpu) }}"
               class="btn btn-warning">

                <i class="bi bi-pencil-square me-1"></i>

                Edit

            </a>

        </div>

    </div>

    <div class="row">

        {{-- Left Side --}}
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">

                    <h5 class="mb-0">

                        CPU Information

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

                            </tr>

                            <tr>

                                <th>

                                    Model

                                </th>

                                <td>

                                    {{ $cpu->model }}

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Cores

                                </th>

                                <td>

                                    {{ $cpu->cores ?? '-' }}

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Threads

                                </th>

                                <td>

                                    {{ $cpu->threads ?? '-' }}

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Base Clock

                                </th>

                                <td>

                                    {{ $cpu->base_clock ? $cpu->base_clock . ' GHz' : '-' }}

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Boost Clock

                                </th>

                                <td>

                                    {{ $cpu->boost_clock ? $cpu->boost_clock . ' GHz' : '-' }}

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Release Year

                                </th>

                                <td>

                                    {{ $cpu->release_year ?? '-' }}

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Status

                                </th>

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

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        {{-- Right Side --}}
        <div class="col-lg-4">

            <div class="card shadow-sm border-0 mb-4">

                <div class="card-header bg-white">

                    <h5 class="mb-0">

                        Benchmark Score

                    </h5>

                </div>

                <div class="card-body text-center">

                    <h1 class="display-4 fw-bold text-primary">

                        {{ number_format($cpu->score) }}

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

                        {{ $cpu->created_at->format('F d, Y h:i A') }}

                    </p>

                    <p class="mb-3">

                        <strong>Last Updated</strong><br>

                        {{ $cpu->updated_at->format('F d, Y h:i A') }}

                    </p>

                    <hr>

                    <form action="{{ route('admin.hardware.cpu.destroy', $cpu) }}"
                          method="POST"
                          onsubmit="return confirm('Delete this CPU?')">

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-outline-danger w-100">

                            <i class="bi bi-trash me-1"></i>

                            Delete CPU

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection