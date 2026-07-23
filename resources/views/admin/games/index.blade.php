@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-1">Games Management</h3>
            <p class="text-muted mb-0">
                Manage all games from one place.
            </p>
        </div>

        <a href="{{ route('admin.games.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>
            Add Game
        </a>

    </div>

    {{-- Statistics --}}
    <div class="row g-4 mb-4">

        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Total Games</h6>
                    <h3 class="mb-0">{{ $totalGames }}</h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Published</h6>
                    <h3 class="mb-0 text-success">{{ $publishedGames }}</h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Draft Games</h6>
                    <h3 class="mb-0 text-warning">{{ $draftGames }}</h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Categories</h6>
                    <h3 class="mb-0">{{ $categoriesCount }}</h3>
                </div>
            </div>
        </div>

    </div>

    {{-- Table (desktop) --}}
    <div class="d-none d-lg-block">
        <div class="card shadow-sm border-0">

            <div class="card-header bg-white">
                <div class="row g-3 align-items-center">

                    <div class="col-md-5">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search games...">
                    </div>

                    <div class="col-md-3">
                        <select class="form-select">
                            <option>All Categories</option>
                            <option>Action</option>
                            <option>Adventure</option>
                            <option>RPG</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <select class="form-select">
                            <option>All Status</option>
                            <option>Published</option>
                            <option>Draft</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <button class="btn btn-primary w-100">
                            Search
                        </button>
                    </div>

                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Developer</th>
                            <th>Platform</th>
                            <th>Status</th>
                            <th width="180">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($games as $game)
                        <tr>

                            <td>
                                @if($game->cover_image)
                                    <img
                                        src="{{ asset('storage/'.$game->cover_image) }}"
                                        width="60"
                                        class="rounded">
                                @else
                                    <img
                                        src="https://placehold.co/70x90"
                                        width="60"
                                        class="rounded">
                                @endif
                            </td>

                            <td>
                                <strong>{{ $game->title }}</strong>
                                <br>
                                <small class="text-muted">
                                    {{ $game->slug }}
                                </small>
                            </td>

                            <td>{{ $game->category->name }}</td>

                            <td>{{ $game->publisher->name }}</td>

                            <td>{{ $game->platform->name }}</td>

                            <td>
                                @if($game->is_active)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>

                            <td>
                                <div class="btn-group btn-group-sm">

                                    <a
                                        href="{{ route('admin.games.view', $game) }}"
                                        class="btn btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a
                                        href="{{ route('admin.games.edit', $game) }}"
                                        class="btn btn-outline-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form action="{{ route('admin.games.delete', $game) }}" method="post"
                                          onsubmit="return confirm('Delete this game?');">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-5">
                                No games found.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

            <div class="card-footer bg-white">
                <div class="d-flex justify-content-between align-items-center">

                    <small class="text-muted">
                        Showing {{ $games->firstItem() ?? 0 }} to {{ $games->lastItem() ?? 0 }}
                        of {{ $games->total() }} games
                    </small>

                    {{ $games->links() }}

                </div>
            </div>

        </div>
    </div>

    {{-- Responsive Short Screen Display --}}
    <div class="d-lg-none">
        @forelse($games as $game)

            <div class="card shadow-sm border-0 mb-3">

                <div class="card-body">

                    <div class="d-flex">

                        @if($game->cover_image)
                            <img
                                src="{{ asset('storage/'.$game->cover_image) }}"
                                class="rounded me-3"
                                width="80">
                        @else
                            <img
                                src="https://placehold.co/90x120"
                                class="rounded me-3"
                                width="80">
                        @endif

                        <div class="flex-grow-1">

                            <h5 class="mb-1">
                                {{ $game->title }}
                            </h5>

                            <small class="text-muted d-block mb-2">
                                {{ $game->slug }}
                            </small>

                            <div class="mb-2">
                                <span class="badge bg-success">
                                    {{ $game->publisher->name }}
                                </span>
                            </div>

                            <div class="row small">

                                <div class="col-6 mb-2">
                                    <strong>Category</strong><br>
                                    {{ $game->category->name }}
                                </div>

                                <div class="col-6 mb-2">
                                    <strong>Platform</strong><br>
                                    {{ $game->platform->name }}
                                </div>

                                <div class="col-6">
                                    <strong>Developer</strong><br>
                                    {{ $game->developer->name }}
                                </div>

                                <div class="col-6">
                                    <strong>Status</strong><br>
                                    @if($game->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </div>

                            </div>

                        </div>

                    </div>

                    <hr>

                    <div class="d-flex gap-2">

                        <a href="{{ route('admin.games.view', $game) }}"
                           class="btn btn-outline-primary btn-sm flex-fill">
                            <i class="bi bi-eye"></i>
                            View
                        </a>

                        <a href="{{ route('admin.games.edit', $game) }}"
                           class="btn btn-outline-warning btn-sm flex-fill">
                            <i class="bi bi-pencil"></i>
                            Edit
                        </a>

                        <form action="{{ route('admin.games.delete', $game) }}" method="post"
                              class="flex-fill" onsubmit="return confirm('Delete this game?');">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="btn btn-outline-danger btn-sm w-100">
                                <i class="bi bi-trash"></i>
                                Delete
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        @empty
            <div class="text-center py-5 text-muted">
                No games found.
            </div>
        @endforelse
    </div>

</div>

@endsection