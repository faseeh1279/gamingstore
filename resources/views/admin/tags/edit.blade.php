@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white d-flex justify-content-between align-items-center">

                    <h4 class="mb-0">

                        Edit Tag

                    </h4>

                    <a
                        href="{{ route('admin.tags.index') }}"
                        class="btn btn-outline-secondary btn-sm">

                        <i class="bi bi-arrow-left me-1"></i>

                        Back

                    </a>

                </div>

                <form
                    action="{{ route('admin.tags.update', $tag) }}"
                    method="POST">

                    @csrf

                    @method('PUT')

                    <div class="card-body">

                        {{-- Tag Name --}}
                        <div class="mb-3">

                            <label class="form-label">

                                Tag Name

                                <span class="text-danger">*</span>

                            </label>

                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name', $tag->name) }}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Example: Open World">

                            @error('name')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        {{-- Slug --}}
                        <div class="mb-3">

                            <label class="form-label">

                                Slug

                            </label>

                            <input
                                type="text"
                                name="slug"
                                id="slug"
                                value="{{ old('slug', $tag->slug) }}"
                                class="form-control @error('slug') is-invalid @enderror"
                                placeholder="open-world">

                            <small class="text-muted">

                                Leave unchanged if you don't want to modify it.

                            </small>

                            @error('slug')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                    </div>

                    <div class="card-footer bg-white d-flex justify-content-end gap-2">

                        <a
                            href="{{ route('admin.tags.index') }}"
                            class="btn btn-light">

                            Cancel

                        </a>

                        <button
                            type="submit"
                            class="btn btn-primary">

                            <i class="bi bi-check-circle me-1"></i>

                            Update Tag

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection

@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const name = document.getElementById('name');

    const slug = document.getElementById('slug');

    let slugManuallyChanged = false;

    slug.addEventListener('input', function () {

        slugManuallyChanged = true;

    });

    name.addEventListener('input', function () {

        if (slugManuallyChanged) {

            return;

        }

        slug.value = this.value
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/^-|-$/g, '');

    });

});

</script>

@endpush