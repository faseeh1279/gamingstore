@extends('layouts.app')

@section('title', 'Upload Document')

@section('content')

<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            <h4>Upload Document</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('documents.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Title
                    </label>

                    <input
                        type="text"
                        name="title"
                        value="{{ old('title') }}"
                        class="form-control @error('title') is-invalid @enderror">

                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Description
                    </label>

                    <textarea
                        name="description"
                        class="form-control">{{ old('description') }}</textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        File
                    </label>

                    <input
                        type="file"
                        name="file"
                        class="form-control @error('file') is-invalid @enderror">

                    @error('file')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <button class="btn btn-primary">

                    Upload

                </button>

                <a href="{{ route('documents.index') }}"
                   class="btn btn-secondary">

                    Back

                </a>

            </form>

        </div>

    </div>

</div>

@endsection