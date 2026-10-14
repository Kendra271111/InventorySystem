@extends('layouts.auth')
@section('title', 'Reset Password')

@section('content')
<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <div class="flex flex-col items-center gap-3 mb-6">
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="w-14 h-14 object-contain" alt="Logo">
            <h1 class="text-2xl font-bold">Reset Password</h1>
        </div>

        <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-control">
                <label class="label" for="email"><span class="label-text">Email Address</span></label>
                <label class="input input-bordered flex items-center gap-2">
                    <span class="material-icons text-base-content/50 text-lg">email</span>
                    <input type="email" id="email" name="email" class="grow"
                           value="{{ $email ?? old('email') }}" required autocomplete="email" />
                </label>
                @error('email')
                    <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                @enderror
            </div>

            <div class="form-control">
                <label class="label" for="password"><span class="label-text">New Password</span></label>
                <label class="input input-bordered flex items-center gap-2">
                    <span class="material-icons text-base-content/50 text-lg">lock</span>
                    <input type="password" id="password" name="password" class="grow" required autocomplete="new-password" />
                </label>
                @error('password')
                    <label class="label"><span class="label-text-alt text-error">{{ $message }}</span></label>
                @enderror
            </div>

            <div class="form-control">
                <label class="label" for="password_confirmation"><span class="label-text">Confirm Password</span></label>
                <label class="input input-bordered flex items-center gap-2">
                    <span class="material-icons text-base-content/50 text-lg">lock</span>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="grow" required autocomplete="new-password" />
                </label>
            </div>

            <button type="submit" class="btn btn-primary w-full">Reset Password</button>
        </form>
    </div>
</div>
@endsection
