@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .form-container {
        background-color: #ffffff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
        background-color: #fcb900;
        border-color: #fcb900;
        color: #000;
    }
    .btn-primary:hover {
        background-color: #e0a800;
        border-color: #e0a800;
    }
    .card-header {
        padding: 1rem 2rem;
        background-color: #f8f9fa;
        border-bottom: 1px solid #eee;
        font-weight: bold;
    }
    .card-body {
        padding: 2rem;
    }
    .form-control {
        border-radius: 0.25rem;
        border: 1px solid #ced4da;
        padding: 0.375rem 0.75rem;
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