@extends('layouts.app')

@section('title', 'Documents')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">

        <h3>Documents</h3>

        <a href="{{ route('documents.create') }}"
           class="btn btn-success">

            Upload Document

        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>ID</th>

                <th>Title</th>

                <th>Description</th>

                <th>File</th>

                <th width="220">

                    Action

                </th>

            </tr>

        </thead>

        <tbody>

        @forelse($documents as $document)

            <tr>

                <td>{{ $document->id }}</td>

                <td>{{ $document->title }}</td>

                <td>{{ $document->description }}</td>

                <td>

                    <a href="{{ asset('storage/'.$document->file) }}"
                       target="_blank">

                        <img src="{{ asset('storage/'.$document->file) }}" alt="Error Loading Image" style="height:150px; width: 150px;">

                    </a>

                </td>

                <td>

                    <a href="{{ route('documents.edit',$document) }}"
                       class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form
                        action="{{ route('documents.destroy',$document) }}"
                        method="POST"
                        class="d-inline">

                        @csrf

                        @method('DELETE')

                        <button
                            onclick="return confirm('Delete this document?')"
                            class="btn btn-danger btn-sm">

                            Delete

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="5" class="text-center">

                    No Documents Found

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection