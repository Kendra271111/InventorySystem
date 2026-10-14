@extends('layouts.auth')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-center">
        <div class="w-11/12 md:w-2/3 lg:w-1/2">
            <div class="card shadow-xl rounded-lg">
                <div class="card-header p-4">{{ __('Confirm Password') }}</div>

                <div class="card-body p-4">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="space-y-4">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Password') }}</label>
                                <input id="password" type="password" class="input input-bordered w-full"
                                       name="password" required autocomplete="current-password">
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1"><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>

                            <div class="flex items-center space-x-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
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
@endsection