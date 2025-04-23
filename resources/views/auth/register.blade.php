@extends('layouts.app')

@section('content')
<div class="page-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card form-container">
                    <div class="card-header">
                        {{ __('Register') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
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
                                        required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="mb-0 row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
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