@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="container mt-5" style="width:50%">
    <form action="{{ route('auth.loginStore') }}" method="POST">
        @csrf

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3"
                role="alert">
                {{ session('success') }}
                <button type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <h2 class="text-center">Login Page</h2>

        <div class="mb-3">
            <label>Email</label>
            <input
                type="email"
                class="form-control"
                name="email"
                placeholder="Enter email"
                value="{{ old('email') }}">

            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input
                type="password"
                class="form-control"
                name="password"
                placeholder="Password">

            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-primary">
            Login
        </button>
    </form>
</div>

@endsection