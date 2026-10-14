@extends('layouts.auth')
@section('title', 'Confirm Password')

@section('content')
<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <div class="flex flex-col items-center gap-3 mb-6">
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="w-14 h-14 object-contain" alt="Logo">
            <h1 class="text-2xl font-bold">Confirm Password</h1>
            <p class="text-sm opacity-60 text-center">Please confirm your password before continuing</p>
        </div>

        <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
            @csrf
            <div class="form-control">
                <label class="label" for="password"><span class="label-text">Password</span></label>
                <label class="input input-bordered flex items-center gap-2">
                    <span class="material-icons text-base-content/50 text-lg">lock</span>
                    <input type="password" id="password" name="password" class="grow" required autocomplete="current-password" />
                </label>
                @error('password')
                    <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-full">Confirm</button>

            @if (Route::has('password.request'))
                <p class="text-center text-sm">
                    <a href="{{ route('password.request') }}" class="link link-primary">Forgot Your Password?</a>
                </p>
            @endif
        </form>
    </div>
</div>
@endsection
