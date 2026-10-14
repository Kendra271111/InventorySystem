@extends('layouts.auth')
@section('title', 'Verify Email')

@section('content')
<div class="card bg-base-100 shadow-xl">
    <div class="card-body text-center">
        <div class="flex flex-col items-center gap-3 mb-6">
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="w-14 h-14 object-contain" alt="Logo">
            <h1 class="text-2xl font-bold">Verify Your Email</h1>
        </div>

        @if (session('resent'))
            <div class="alert alert-success mb-4">
                <span>A fresh verification link has been sent to your email address.</span>
            </div>
        @endif

        <p class="opacity-70 mb-6">
            Before proceeding, please check your email for a verification link.
        </p>

        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-primary">
                Resend Verification Email
            </button>
        </form>
    </div>
</div>
@endsection
