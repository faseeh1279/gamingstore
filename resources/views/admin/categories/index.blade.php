@extends('layouts.admin')

@section('title', 'Categories')
@section('page-title', 'Categories')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold mb-1">
                Categories
            </h3>

            <p class="text-muted mb-0">
                Manage all game categories.
            </p>

        </div>

        <a
            href="{{ route('admin.categories.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-circle me-1"></i>

            Add Category

        </a>

    </div>

    {{-- Statistics --}}
    <div class="row g-3 mb-4">

        <div class="col-lg-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Total Categories
                        </small>

                        <h3 class="fw-bold mb-0">

                            {{ $stats['total'] }}

                        </h3>

                    </div>

                    <div class="bg-primary bg-opacity-10 rounded-circle p-3">

                        <i class="bi bi-grid text-primary fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Active
                        </small>

                        <h3 class="fw-bold text-success mb-0">

                            {{ $stats['active'] }}

                        </h3>

                    </div>

                    <div class="bg-success bg-opacity-10 rounded-circle p-3">

                        <i class="bi bi-check-circle text-success fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Inactive
                        </small>

                        <h3 class="fw-bold text-danger mb-0">

                            {{ $stats['inactive'] }}

                        </h3>

                    </div>

                    <div class="bg-danger bg-opacity-10 rounded-circle p-3">

                        <i class="bi bi-x-circle text-danger fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- Table --}}
    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white">

            <form method="GET">

                <div class="row g-2">

                    <div class="col-md-5">

                        <input
                            type="text"
                            name="search"
                            class="form-control"
                            placeholder="Search category..."
                            value="{{ request('search') }}">

                    </div>

                    <div class="col-md-3">

                        <select
                            name="status"
                            class="form-select">

                            <option value="">
                                All Status
                            </option>

                            <option
                                value="1"
                                @selected(request('status')=='1')>

                                Active

                            </option>

                            <option
                                value="0"
                                @selected(request('status')=='0')>

                                Inactive

                            </option>

                        </select>

                    </div>

                    <div class="col-md-4 text-md-end">

                        <button
                            class="btn btn-primary">

                            <i class="bi bi-search"></i>

                            Search

                        </button>

                        <a
                            href="{{ route('admin.categories.index') }}"
                            class="btn btn-outline-secondary">

                            Reset

                        </a>

                    </div>

                </div>

            </form>

        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                    <tr>

                        <th>#</th>

                        <th>Icon</th>

                        <th>Name</th>

                        <th>Slug</th>

                        <th>Description</th>

                        <th>Status</th>

                        <th class="text-end">
                            Actions
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($categories as $category)

                        <tr>

                            <td>

                                {{ $loop->iteration + $categories->firstItem() - 1 }}

                            </td>

                            <td>

                                @if($category->icon)

                                    <i class="{{ $category->icon }} fs-4 text-primary"></i>

                                @else

                                    <i class="bi bi-grid fs-4 text-secondary"></i>

                                @endif

                            </td>

                            <td>

                                <strong>

                                    {{ $category->name }}

                                </strong>

                            </td>

                            <td>

                                {{ $category->slug }}

                            </td>

                            <td>

                                {{ Str::limit($category->description,60) }}

                            </td>

                            <td>

                                @if($category->is_active)

                                    <span class="badge bg-success">

                                        Active

                                    </span>

                                @else

                                    <span class="badge bg-danger">

                                        Inactive

                                    </span>

                                @endif

                            </td>

                            <td class="text-end">

                                <div class="btn-group">

                                    <a
                                        href="{{ route('admin.categories.view',$category) }}"
                                        class="btn btn-sm btn-outline-primary">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                    <a
                                        href="{{ route('admin.categories.edit',$category) }}"
                                        class="btn btn-sm btn-outline-warning">

                                        <i class="bi bi-pencil"></i>

                                    </a>

                                    <form
                                        action="{{ route('admin.categories.delete',$category) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Delete this category?')">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            class="btn btn-sm btn-outline-danger">

                                            <i class="bi bi-trash"></i>

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="text-center py-5">

                                <i class="bi bi-folder2-open display-4 text-muted"></i>

                                <h5 class="mt-3">

                                    No Categories Found

                                </h5>

                                <p class="text-muted">

                                    Click the "Add Category" button to create your first category.

                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        @if($categories->hasPages())

            <div class="card-footer bg-white">

                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <small class="text-muted">

                        Showing

                        <strong>{{ $categories->firstItem() }}</strong>

                        to

                        <strong>{{ $categories->lastItem() }}</strong>

                        of

                        <strong>{{ $categories->total() }}</strong>

                        Categories

                    </small>

                    {{ $categories->withQueryString()->links() }}

                </div>

            </div>

        @endif

    </div>

</div>

@endsection