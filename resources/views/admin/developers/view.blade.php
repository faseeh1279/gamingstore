@extends('layouts.admin')

@section('title', 'Developer Details')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="mb-0">
                {{ $developer->name }}
            </h3>

            <small class="text-muted">
                Developer Details
            </small>

        </div>

        <a
            href="{{ route('admin.developer.index') }}"
            class="btn btn-secondary">

            <i class="bi bi-arrow-left me-1"></i>

            Back

        </a>

    </div>

    {{-- Statistics --}}

    <div class="row mb-4">

        <div class="col-md-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Total Games
                        </small>

                        <h3 class="mb-0">

                            {{ $developer->games->count() }}

                        </h3>

                    </div>

                    <div
                        class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center"
                        style="width:65px;height:65px;">

                        <i class="bi bi-controller fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Founded
                        </small>

                        <h3>

                            {{ $developer->founded_year ?? '—' }}

                        </h3>

                    </div>

                    <div
                        class="rounded-circle bg-success text-white d-flex justify-content-center align-items-center"
                        style="width:65px;height:65px;">

                        <i class="bi bi-calendar-event fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Status
                        </small>

                        <h5>

                            @if($developer->is_active)

                                <span class="badge bg-success">
                                    Active
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Inactive
                                </span>

                            @endif

                        </h5>

                    </div>

                    <div
                        class="rounded-circle bg-warning text-white d-flex justify-content-center align-items-center"
                        style="width:65px;height:65px;">

                        <i class="bi bi-check-circle fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Website
                        </small>

                        <h6>

                            @if($developer->website)

                                <a
                                    href="{{ $developer->website }}"
                                    target="_blank">

                                    Visit

                                </a>

                            @else

                                —

                            @endif

                        </h6>

                    </div>

                    <div
                        class="rounded-circle bg-info text-white d-flex justify-content-center align-items-center"
                        style="width:65px;height:65px;">

                        <i class="bi bi-globe fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- Developer Information --}}

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-header">

            <h5 class="mb-0">
                Developer Information
            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-3 text-center">

                    @if($developer->logo)

                        <img
                            src="{{ asset('storage/'.$developer->logo) }}"
                            class="img-fluid rounded shadow"
                            style="max-height:220px">

                    @else

                        <div
                            class="bg-light border rounded d-flex align-items-center justify-content-center"
                            style="height:220px;">

                            No Logo

                        </div>

                    @endif

                </div>

                <div class="col-md-9">

                    <table class="table table-bordered">

                        <tr>
                            <th width="200">Name</th>
                            <td>{{ $developer->name }}</td>
                        </tr>

                        <tr>
                            <th>Slug</th>
                            <td>{{ $developer->slug }}</td>
                        </tr>

                        <tr>
                            <th>Website</th>
                            <td>

                                @if($developer->website)

                                    <a
                                        href="{{ $developer->website }}"
                                        target="_blank">

                                        {{ $developer->website }}

                                    </a>

                                @else

                                    —

                                @endif

                            </td>
                        </tr>

                        <tr>
                            <th>Founded Year</th>
                            <td>{{ $developer->founded_year ?? '—' }}</td>
                        </tr>

                        <tr>
                            <th>Status</th>

                            <td>

                                @if($developer->is_active)

                                    <span class="badge bg-success">
                                        Active
                                    </span>

                                @else

                                    <span class="badge bg-danger">
                                        Inactive
                                    </span>

                                @endif

                            </td>

                        </tr>

                        <tr>

                            <th>Description</th>

                            <td>

                                {{ $developer->description ?: 'No description available.' }}

                            </td>

                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>

    {{-- Games --}}

    <div class="card shadow-sm border-0">

        <div class="card-header">

            <h5 class="mb-0">

                Games Developed

            </h5>

        </div>

        <div class="table-responsive">

            <table class="table table-hover mb-0">

                <thead class="table-dark">

                    <tr>

                        <th>#</th>

                        <th>Name</th>

                        <th>Release Date</th>

                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($developer->games as $game)

                    <tr>

                        <td>

                            {{ $loop->iteration }}

                        </td>

                        <td>

                            {{ $game->title }}

                        </td>

                        <td>

                            {{ $game->release_date ?? '—' }}

                        </td>

                        <td>

                            @if($game->is_active)

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

                @empty

                    <tr>

                        <td colspan="4" class="text-center py-4">

                            No games found for this developer.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection