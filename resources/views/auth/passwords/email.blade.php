@extends('layouts.auth')
@section('title', 'Forgot Password')

@section('content')
<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <div class="flex flex-col items-center gap-3 mb-6">
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="w-14 h-14 object-contain" alt="Logo">
            <h1 class="text-2xl font-bold">Forgot Password</h1>
            <p class="text-sm opacity-60 text-center">Enter your email and we'll send you a reset link</p>
        </div>

        <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
            @csrf
            <div class="form-control">
                <label class="label" for="email">
                    <span class="label-text">Email Address</span>
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    <span class="material-icons text-base-content/50 text-lg">email</span>
                    <input type="email" id="email" name="email" class="grow"
                           placeholder="you@example.com"
                           value="{{ old('email') }}" required autocomplete="email" />
                </label>
                @error('email')
                    <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-full">
                Send Reset Link
            </button>
        </form>

        <p class="text-center text-sm mt-4">
            <a href="{{ route('login') }}" class="link link-primary">Back to Login</a>
        </p>
    </div>
</div>
@endsection
