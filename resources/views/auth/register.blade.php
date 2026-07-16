@extends('layouts.auth')

@section('title', 'Register')

@section('content')

<style>
    :root {
        --hud-bg: #12141c;
        --hud-panel: #191d29;
        --hud-panel-edge: #262b3a;
        --hud-amber: #f2a93b;
        --hud-teal: #35c4b0;
        --hud-text: #e8e9ee;
        --hud-muted: #7d8296;
        --hud-danger: #ff5d6c;
    }

    .hud-shell {
        min-height: 100vh;
        background:
            radial-gradient(circle at 15% 20%, rgba(242, 169, 59, 0.08), transparent 40%),
            radial-gradient(circle at 85% 80%, rgba(53, 196, 176, 0.08), transparent 40%),
            var(--hud-bg);
        display: flex;
        align-items: center;
        color: var(--hud-text);
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    .hud-panel {
        background: var(--hud-panel);
        border: 1px solid var(--hud-panel-edge);
        clip-path: polygon(0 0, 100% 0, 100% calc(100% - 24px), calc(100% - 24px) 100%, 0 100%);
        position: relative;
        overflow: hidden;
    }

    .hud-panel::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, var(--hud-amber) 0%, var(--hud-teal) 100%);
    }

    .hud-eyebrow {
        font-family: "Courier New", Courier, monospace;
        letter-spacing: 0.18em;
        font-size: 0.72rem;
        color: var(--hud-teal);
        text-transform: uppercase;
    }

    .hud-title {
        font-weight: 800;
        letter-spacing: -0.01em;
        color: #fff;
    }

    .hud-subtitle {
        color: var(--hud-muted);
        font-size: 0.92rem;
    }

    .spec-row {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        font-family: "Courier New", Courier, monospace;
        font-size: 0.75rem;
        color: var(--hud-muted);
    }

    .spec-bar {
        flex: 1;
        height: 4px;
        background: #262b3a;
        border-radius: 2px;
        overflow: hidden;
    }

    .spec-bar > span {
        display: block;
        height: 100%;
        border-radius: 2px;
    }

    .hud-form-label {
        font-family: "Courier New", Courier, monospace;
        font-size: 0.72rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--hud-muted);
        margin-bottom: 0.35rem;
    }

    .hud-shell .form-control {
        background: #0f111a;
        border: 1px solid var(--hud-panel-edge);
        color: var(--hud-text);
        border-radius: 0.4rem;
        padding: 0.7rem 0.9rem;
    }

    .hud-shell .form-control::placeholder {
        color: #4b5165;
    }

    .hud-shell .form-control:focus {
        background: #0f111a;
        color: var(--hud-text);
        border-color: var(--hud-amber);
        box-shadow: 0 0 0 0.2rem rgba(242, 169, 59, 0.15);
    }

    .hud-shell .invalid-feedback {
        color: var(--hud-danger);
        font-family: "Courier New", Courier, monospace;
        font-size: 0.78rem;
    }

    .btn-hud {
        background: var(--hud-amber);
        border: none;
        color: #191300;
        font-weight: 700;
        letter-spacing: 0.03em;
        padding: 0.75rem 1rem;
        border-radius: 0.4rem;
        transition: background 0.15s ease, transform 0.1s ease;
        clip-path: polygon(14px 0, 100% 0, 100% 100%, 0 100%, 0 14px);
    }

    .btn-hud:hover {
        background: #ffbe57;
        color: #191300;
    }

    .btn-hud:active {
        transform: scale(0.99);
    }

    .hud-alert-success {
        background: rgba(53, 196, 176, 0.12);
        border: 1px solid rgba(53, 196, 176, 0.4);
        color: var(--hud-teal);
        border-radius: 0.4rem;
        padding: 0.65rem 0.9rem;
        font-size: 0.9rem;
    }

    .hud-login-link {
        color: var(--hud-teal);
        text-decoration: none;
        font-size: 0.88rem;
    }

    .hud-login-link:hover {
        color: #6fe0d0;
    }
</style>

<div class="hud-shell">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6">

                <div class="hud-panel p-4 p-md-5">

                    {{-- Fake live spec readout - sets the "can you run it" tone --}}
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                            <div class="hud-eyebrow mb-1">New player &bull; system scan ready</div>
                            <h2 class="hud-title mb-0">Create your account</h2>
                            <p class="hud-subtitle mb-0">Register to check what your rig can run.</p>
                        </div>
                        <div style="min-width: 140px;" class="d-none d-sm-block">
                            <div class="spec-row mb-1">
                                <span>GPU</span>
                                <div class="spec-bar"><span style="width:82%; background: var(--hud-teal);"></span></div>
                            </div>
                            <div class="spec-row mb-1">
                                <span>CPU</span>
                                <div class="spec-bar"><span style="width:64%; background: var(--hud-amber);"></span></div>
                            </div>
                            <div class="spec-row">
                                <span>RAM</span>
                                <div class="spec-bar"><span style="width:90%; background: var(--hud-teal);"></span></div>
                            </div>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="hud-alert-success mb-4">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('auth.store') }}" method="POST" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label class="hud-form-label" for="name">Username</label>
                            <input
                                type="text"
                                id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                placeholder="e.g. shadow_runner"
                                value="{{ old('name') }}">

                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="hud-form-label" for="email">Email address</label>
                            <input
                                type="email"
                                id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                placeholder="you@example.com"
                                value="{{ old('email') }}">

                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="hud-form-label" for="password">Password</label>
                            <input
                                type="password"
                                id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                placeholder="Enter a password"
                                value="{{ old('password') }}">

                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-hud w-100 mb-3">Create account</button>

                        <div class="text-center">
                            <a href="{{ route('login') }}" class="hud-login-link">Already have an account? Log in</a>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection