@extends('layouts.auth')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-center">
        <div class="w-11/12 md:w-2/3 lg:w-1/2">
            <div class="card shadow-xl rounded-lg">
                <div class="card-header p-4">{{ __('Reset Password') }}</div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="space-y-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="input input-bordered w-full"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>

                            <div class="w-full">
                                <button type="submit" class="btn btn-primary w-full">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection