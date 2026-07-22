@extends('layouts.admin')

@section('title', 'Publishers')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="mb-0">
                Publishers
            </h3>

            <small class="text-muted">
                Manage game publishers
            </small>

        </div>

        <a
            href="{{ route('admin.publisher.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-circle me-1"></i>

            Add Publisher

        </a>

    </div>

    {{-- Statistics --}}
    <div class="row mb-4">

        <div class="col-md-3 mb-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Total Publishers
                        </small>

                        <h3>

                            {{ $publishers->total() }}

                        </h3>

                    </div>

                    <div
                        class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center"
                        style="width:65px;height:65px;">

                        <i class="bi bi-building fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Active
                        </small>

                        <h3>

                            {{ $activePublishers }}

                        </h3>

                    </div>

                    <div
                        class="rounded-circle bg-success text-white d-flex justify-content-center align-items-center"
                        style="width:65px;height:65px;">

                        <i class="bi bi-check-circle fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Inactive
                        </small>

                        <h3>

                            {{ $inactivePublishers }}

                        </h3>

                    </div>

                    <div
                        class="rounded-circle bg-danger text-white d-flex justify-content-center align-items-center"
                        style="width:65px;height:65px;">

                        <i class="bi bi-x-circle fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            With Logo
                        </small>

                        <h3>

                            {{ $logoPublishers }}

                        </h3>

                    </div>

                    <div
                        class="rounded-circle bg-warning text-white d-flex justify-content-center align-items-center"
                        style="width:65px;height:65px;">

                        <i class="bi bi-image fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- Search --}}
    <div class="card shadow-sm border-0 mb-4">

        <div class="card-body">

            <form method="GET">

                <div class="row">

                    <div class="col-md-10">

                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            class="form-control"
                            placeholder="Search publishers...">

                    </div>

                    <div class="col-md-2">

                        <button
                            class="btn btn-primary w-100">

                            <i class="bi bi-search"></i>

                            Search

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

    {{-- Table --}}
    <div class="card shadow-sm border-0">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-dark">

                <tr>

                    <th>#</th>

                    <th>Logo</th>

                    <th>Name</th>

                    <th>Website</th>

                    <th>Status</th>

                    <th>Created</th>

                    <th width="180">
                        Actions
                    </th>

                </tr>

                </thead>

                <tbody>

                @forelse($publishers as $publisher)

                    <tr>

                        <td>

                            {{ $loop->iteration + ($publishers->firstItem() - 1) }}

                        </td>

                        <td>

                            @if($publisher->logo)

                                <img
                                    src="{{ asset('storage/'.$publisher->logo) }}"
                                    width="60"
                                    class="rounded border">

                            @else

                                <span class="text-muted">

                                    No Logo

                                </span>

                            @endif

                        </td>

                        <td>

                            <strong>

                                {{ $publisher->name }}

                            </strong>

                        </td>

                        <td>

                            @if($publisher->website)

                                <a
                                    href="{{ $publisher->website }}"
                                    target="_blank">

                                    Visit

                                </a>

                            @else

                                —

                            @endif

                        </td>

                        <td>

                            @if($publisher->is_active)

                                <span class="badge bg-success">

                                    Active

                                </span>

                            @else

                                <span class="badge bg-danger">

                                    Inactive

                                </span>

                            @endif

                        </td>

                        <td>

                            {{ $publisher->created_at->format('d M Y') }}

                        </td>

                        <td>

                            <a
                                href="{{ route('admin.publisher.view', $publisher) }}"
                                class="btn btn-info btn-sm">

                                <i class="bi bi-eye"></i>

                            </a>

                            <a
                                href="{{ route('admin.publisher.edit', $publisher) }}"
                                class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil"></i>

                            </a>

                            <form
                                action="{{ route('admin.publisher.delete', $publisher) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this publisher?')">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="7"
                            class="text-center py-5">

                            No publishers found.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

    {{-- Pagination --}}
    <div class="mt-4">

        {{ $publishers->links() }}

    </div>

</div>

@endsection