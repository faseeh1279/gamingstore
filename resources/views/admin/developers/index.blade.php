@extends('layouts.admin')

@section('title', 'Developers')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-0">
                Developers
            </h3>

            <small class="text-muted">
                Manage all game developers
            </small>
        </div>

        <a
            href="{{ route('admin.developer.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-circle me-1"></i>

            Add Developer

        </a>

    </div>

    {{-- Statistics --}}
    <div class="row mb-4">

        <div class="col-lg-3 col-md-6 mb-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Total Developers
                        </small>

                        <h2 class="fw-bold mb-0">
                            {{ $developers->total() }}
                        </h2>

                    </div>

                    <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center"
                         style="width:65px;height:65px;">

                        <i class="bi bi-controller fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6 mb-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Active
                        </small>

                        <h2 class="fw-bold mb-0">
                            {{ $activeDevelopers }}
                        </h2>

                    </div>

                    <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center"
                         style="width:65px;height:65px;">

                        <i class="bi bi-check-circle fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6 mb-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Inactive
                        </small>

                        <h2 class="fw-bold mb-0">
                            {{ $inactiveDevelopers }}
                        </h2>

                    </div>

                    <div class="bg-danger text-white rounded-circle d-flex justify-content-center align-items-center"
                         style="width:65px;height:65px;">

                        <i class="bi bi-x-circle fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6 mb-3">

            <div class="card shadow-sm border-0">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            With Logo
                        </small>

                        <h2 class="fw-bold mb-0">
                            {{ $developersWithLogo }}
                        </h2>

                    </div>

                    <div class="bg-warning text-white rounded-circle d-flex justify-content-center align-items-center"
                         style="width:65px;height:65px;">

                        <i class="bi bi-image fs-3"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- Search --}}
    <div class="card shadow-sm border-0 mb-3">

        <div class="card-body">

            <form>

                <div class="row">

                    <div class="col-md-4">

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search developer...">

                    </div>

                    <div class="col-md-2">

                        <button class="btn btn-primary">

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

                        {{-- <th>Founded</th> --}}

                        <th>Status</th>

                        <th width="180">
                            Actions
                        </th>

                    </tr>

                </thead>

                <tbody>

                @forelse($developers as $developer)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>

                            @if($developer->logo)

                                <img
                                    src="{{ asset('storage/'.$developer->logo) }}"
                                    width="60"
                                    class="rounded">

                            @else

                                —

                            @endif

                        </td>

                        <td>

                            <strong>
                                {{ $developer->name }}
                            </strong>

                        </td>

                        <td>

                            @if($developer->website)

                                <a
                                    href="{{ $developer->website }}"
                                    target="_blank">

                                    Visit

                                </a>

                            @else

                                —

                            @endif

                        </td>

                        {{-- <td>

                            {{ $developer->founded_year ?? '—' }}

                        </td> --}}

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

                        <td>
                            <a href="{{ route('admin.developer.view', $developer) }}" class="btn btn-sm btn-success">
                                <i class="bi bi-eye"></i>
                            </a>

                            <a
                                href="{{ route('admin.developer.edit', $developer) }}"
                                class="btn btn-sm btn-warning">

                                <i class="bi bi-pencil"></i>

                            </a>
                           <form
                                action="{{ route('admin.developer.delete', $developer) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this developer?')">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>


                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="7"
                            class="text-center py-4">

                            No developers found.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

        <div class="card-footer">

            {{ $developers->links() }}

        </div>

    </div>

</div>

@endsection