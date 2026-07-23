@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white d-flex justify-content-between align-items-center">

                    <h4 class="mb-0">
                        Add New Tag
                    </h4>

                    <a href="{{ route('admin.tags.index') }}"
                       class="btn btn-outline-secondary btn-sm">

                        <i class="bi bi-arrow-left me-1"></i>
                        Back

                    </a>

                </div>

                <form action="{{ route('admin.tags.store') }}"
                      method="POST">

                    @csrf

                    <div class="card-body">

                        <div class="mb-3">

                            <label class="form-label">

                                Tag Name
                                <span class="text-danger">*</span>

                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Example: Open World">

                            @error('name')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label">

                                Slug

                            </label>

                            <input
                                type="text"
                                id="slug"
                                name="slug"
                                value="{{ old('slug') }}"
                                class="form-control @error('slug') is-invalid @enderror"
                                placeholder="Auto generated">

                            <small class="text-muted">

                                Leave empty to generate automatically.

                            </small>

                            @error('slug')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                    </div>

                    <div class="card-footer bg-white d-flex justify-content-end gap-2">

                        <a href="{{ route('admin.tags.index') }}"
                           class="btn btn-light">

                            Cancel

                        </a>

                        <button
                            type="submit"
                            class="btn btn-primary">

                            <i class="bi bi-check-circle me-1"></i>
                            Save Tag

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

    const name = document.querySelector('input[name="name"]');

    const slug = document.getElementById('slug');

    name.addEventListener('input', function () {

        if (slug.value.trim() !== '') {

            return;

        }

        slug.placeholder = this.value
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/^-|-$/g, '');

    });

});

</script>

@endpush