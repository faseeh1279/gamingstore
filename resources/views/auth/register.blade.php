@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="container mt-5" style="width:50%">
    <form action="{{ route('auth.store') }}" method="post">
        @csrf
        @method("post")
        @if(session('success'))
            <p style="color:green;">
                {{ session('success') }}
            </p>
        @endif
        <h2 align="center">Register Page</h2>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ old('email') }}">
            @error('name') 
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ old('email') }}">
            @error('email') 
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control"  placeholder="Password" name="password" value="{{ old('password') }}">
            @error('password') 
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

@endsection 