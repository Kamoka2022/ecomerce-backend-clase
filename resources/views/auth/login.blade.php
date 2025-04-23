@extends('layouts.app')

@section('content')
<div class="page-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card form-container">
                    <div class="card-header">
                        {{ __('Login') }}
                    </div>

                    <div class="card-body">
                        {{-- Imagen centrada --}}
                        <div class="text-center mb-4">
                            <img src="{{ asset('img/unab.png') }}" alt="Logo UNAB" class="img-fluid" style="max-height: 120px;">
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-0 row">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .page-background {
        background-color: #fcb900;
        min-height: 100vh;
        padding: 60px 0;
    }

    .form-container {
        background-color: #ffffff;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #fcb900;
        color: #fff;
        font-weight: bold;
        font-size: 1.25rem;
        text-align: center;
        border-bottom: none;
        border-radius: 12px 12px 0 0;
        padding: 1rem;
    }

    .btn-primary {
        background-color: #fcb900;
        border-color: #fcb900;
        color: #000;
        font-weight: bold;
        padding: 0.5rem 1.5rem;
        border-radius: 0.375rem;
    }

    .btn-primary:hover {
        background-color: #e0a800;
        border-color: #e0a800;
    }

    .form-control {
        border-radius: 0.375rem;
        border: 1px solid #ced4da;
        padding: 0.5rem 0.75rem;
    }

    .form-control:focus {
        border-color: #fcb900;
        box-shadow: 0 0 0 0.2rem rgba(252, 185, 0, 0.25);
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 0.875rem;
    }
</style>
@endsection