@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <div class="flex flex-col items-center gap-3 mb-6">
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="w-14 h-14 object-contain" alt="Logo">
            <h1 class="text-2xl font-bold">Create New Account</h1>
            <p class="text-sm opacity-60">Fill in the form to get started</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <!-- Name -->
            <div class="form-control">
                <label class="label" for="name">
                    <span class="label-text">Full Name</span>
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    <span class="material-icons text-base-content/50 text-lg">person</span>
                    <input type="text"
                           id="name"
                           name="name"
                           class="grow"
                           placeholder="John Doe"
                           value="{{ old('name') }}"
                           required
                           autocomplete="name" />
                </label>
                @error('name')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                @enderror
            </div>

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
                           autocomplete="new-password" />
                </label>
                @error('password')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-control">
                <label class="label" for="password_confirmation">
                    <span class="label-text">Confirm Password</span>
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    <span class="material-icons text-base-content/50 text-lg">lock</span>
                    <input type="password"
                           id="password_confirmation"
                           name="password_confirmation"
                           class="grow"
                           placeholder="••••••••"
                           required
                           autocomplete="new-password" />
                </label>
            </div>

            <button type="submit" class="btn btn-primary w-full">
                Register
            </button>
        </form>

        <p class="text-center text-sm mt-4">
            Already have an account?
            <a href="{{ route('login') }}" class="link link-primary font-medium">
                Login here
            </a>
        </p>
    </div>
</div>
@endsection
