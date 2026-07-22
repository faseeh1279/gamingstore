@extends('layouts.admin')

@section('title', 'Publisher Details')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="mb-0">
                {{ $publisher->name }}
            </h3>

            <small class="text-muted">
                Publisher Details
            </small>

        </div>

        <a
            href="{{ route('admin.publisher.index') }}"
            class="btn btn-secondary">

            <i class="bi bi-arrow-left me-1"></i>

            Back

        </a>

    </div>

    

    {{-- Publisher Information --}}
    <div class="card shadow-sm border-0 mb-4">

        <div class="card-header">

            <h5 class="mb-0">

                Publisher Information

            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-3 text-center">

                    @if($publisher->logo)

                        <img
                            src="{{ asset('storage/'.$publisher->logo) }}"
                            class="img-fluid rounded shadow"
                            style="max-height:220px;">

                    @else

                        <div
                            class="border rounded bg-light d-flex justify-content-center align-items-center"
                            style="height:220px;">

                            No Logo

                        </div>

                    @endif

                </div>

                <div class="col-md-9">

                    <table class="table table-bordered">

                        <tr>

                            <th width="200">
                                Name
                            </th>

                            <td>
                                {{ $publisher->name }}
                            </td>

                        </tr>

                        <tr>

                            <th>
                                Website
                            </th>

                            <td>

                                @if($publisher->website)

                                    <a
                                        href="{{ $publisher->website }}"
                                        target="_blank">

                                        {{ $publisher->website }}

                                    </a>

                                @else

                                    —

                                @endif

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Status
                            </th>

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

                        </tr>

                        <tr>

                            <th>
                                Description
                            </th>

                            <td>

                                {{ $publisher->description ?: 'No description available.' }}

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Created At
                            </th>

                            <td>

                                {{ optional($publisher->created_at)->format('d M Y') }}

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Updated At
                            </th>

                            <td>

                                {{ optional($publisher->updated_at)->format('d M Y') }}

                            </td>

                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>

    {{-- Published Games --}}
    <div class="card shadow-sm border-0">

        <div class="card-header">

            <h5 class="mb-0">

                Published Games

            </h5>

        </div>

        <div class="table-responsive">

            <table class="table table-hover mb-0">

                <thead class="table-dark">

                    <tr>

                        <th>#</th>

                        <th>Game</th>

                        <th>Release Date</th>

                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($publisher->games as $game)

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

                        <td
                            colspan="4"
                            class="text-center py-4">

                            No published games found.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection