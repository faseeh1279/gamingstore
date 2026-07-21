@extends('layouts.app')

@section('title','Edit Document')

@section('content')

<div class="container mt-4">

    <div class="card">

        <div class="card-header">

            <h4>Edit Document</h4>

        </div>

        <div class="card-body">

            <form
                action="{{ route('documents.update',$document) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')

                <div class="mb-3">

                    <label>Title</label>

                    <input
                        type="text"
                        name="title"
                        value="{{ old('title',$document->title) }}"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label>Description</label>

                    <textarea
                        name="description"
                        class="form-control">{{ old('description',$document->description) }}</textarea>

                </div>

                <div class="mb-3">

                    <label>Current File</label>

                    <br>

                    <a href="{{ asset('storage/'.$document->file) }}"
                       target="_blank">

                        <img src="{{ asset('storage/'.$document->file) }}" alt="">

                    </a>

                </div>

                <div class="mb-3">

                    <label>Replace File</label>

                    <input
                        type="file"
                        name="file"
                        class="form-control">

                </div>

                <button class="btn btn-primary">

                    Update

                </button>

            </form>

        </div>

    </div>

</div>

@endsection