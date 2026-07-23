@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="mb-1">
                Tags Management
            </h3>

            <p class="text-muted mb-0">
                Organize and manage all game tags.
            </p>

        </div>

        <a href="{{ route('admin.tags.create') }}"
           class="btn btn-primary">

            <i class="bi bi-plus-circle me-2"></i>

            Add Tag

        </a>

    </div>

    {{-- Statistics --}}
    <div class="row g-4 mb-4">

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">

                        Total Tags

                    </small>

                    <h3 class="mt-2 mb-0">

                        {{ $totalTags }}

                    </h3>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">

                        Tags In Use

                    </small>

                    <h3 class="mt-2 mb-0 text-success">

                        {{ $usedTags }}

                    </h3>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">

                        Unused Tags

                    </small>

                    <h3 class="mt-2 mb-0 text-warning">

                        {{ $unusedTags }}

                    </h3>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <small class="text-muted">

                        Tag Assignments

                    </small>

                    <h3 class="mt-2 mb-0 text-primary">

                        {{ $totalTaggedGames }}

                    </h3>

                </div>

            </div>

        </div>

    </div>

    {{-- Table --}}
    <div class="card shadow-sm border-0">

        <div class="card-header bg-white">

            <form method="GET">

                <div class="row g-3">

                    <div class="col-md-10">

                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            class="form-control"
                            placeholder="Search by tag name...">

                    </div>

                    <div class="col-md-2">

                        <button
                            class="btn btn-primary w-100">

                            <i class="bi bi-search me-1"></i>

                            Search

                        </button>

                    </div>

                </div>

            </form>

        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                    <tr>

                        <th width="80">

                            #

                        </th>

                        <th>

                            Name

                        </th>

                        <th>

                            Slug

                        </th>

                        <th>

                            Games

                        </th>

                        <th width="170">

                            Actions

                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($tags as $tag)

                        <tr>

                            <td>

                                {{ $loop->iteration + $tags->firstItem() - 1 }}

                            </td>

                            <td>

                                <strong>

                                    {{ $tag->name }}

                                </strong>

                            </td>

                            <td>

                                <code>

                                    {{ $tag->slug }}

                                </code>

                            </td>

                            <td>

                                <span class="badge bg-info">

                                    {{ $tag->games_count }}

                                </span>

                            </td>

                            <td>

                                <div class="btn-group btn-group-sm">

                                    <a href="{{ route('admin.tags.edit', $tag) }}"
                                       class="btn btn-outline-warning">

                                        <i class="bi bi-pencil"></i>

                                    </a>

                                    <form
                                        action="{{ route('admin.tags.delete', $tag) }}"
                                        method="POST"
                                        onsubmit="return confirm('Delete this tag?')">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            class="btn btn-outline-danger">

                                            <i class="bi bi-trash"></i>

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="5"
                                class="text-center py-5">

                                <i class="bi bi-tags display-5 text-muted"></i>

                                <h5 class="mt-3">

                                    No Tags Found

                                </h5>

                                <p class="text-muted mb-0">

                                    Create your first tag to organize games.

                                </p>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        @if($tags->hasPages())

            <div class="card-footer bg-white">

                <div class="d-flex justify-content-between align-items-center">

                    <small class="text-muted">

                        Showing

                        {{ $tags->firstItem() }}

                        to

                        {{ $tags->lastItem() }}

                        of

                        {{ $tags->total() }}

                        tags

                    </small>

                    {{ $tags->links() }}

                </div>

            </div>

        @endif

    </div>

</div>

@endsection