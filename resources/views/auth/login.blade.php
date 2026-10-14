@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <!-- Logo + Title -->
        <div class="flex flex-col items-center gap-3 mb-6">
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="w-14 h-14 object-contain" alt="Logo">
            <h1 class="text-2xl font-bold">Login to Your Account</h1>
            <p class="text-sm opacity-60">Welcome back! Please enter your details</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div class="form-control">
                <label class="label" for="email">
                    <span class="label-text">Email Address</span>
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    <span class="material-icons text-base-content/50 text-lg">email</span>
                    <input type="email"
                           id="email"
                           name="email"
                           class="grow"
                           placeholder="you@example.com"
                           value="{{ old('email') }}"
                           required
                           autocomplete="email" />
                </label>
                @error('email')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-control">
                <label class="label" for="password">
                    <span class="label-text">Password</span>
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    <span class="material-icons text-base-content/50 text-lg">lock</span>
                    <input type="password"
                           id="password"
                           name="password"
                           class="grow"
                           placeholder="••••••••"
                           required
                           autocomplete="current-password" />
                </label>
                @error('password')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-control">
                <label class="label cursor-pointer justify-start gap-3">
                    <input type="checkbox"
                           name="remember"
                           class="checkbox checkbox-primary checkbox-sm"
                           {{ old('remember') ? 'checked' : '' }} />
                    <span class="label-text">Remember Me</span>
                </label>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary w-full">
                Login
            </button>
        </form>

        <div class="divider text-xs opacity-50">OR</div>

        <p class="text-center text-sm">
            Don't have an account?
            <a href="{{ route('register') }}" class="link link-primary font-medium">
                Register here
            </a>
        </p>
    </div>
</div>
@endsection
