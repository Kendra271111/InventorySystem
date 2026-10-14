@extends('layouts.auth')

@section('content')
    <main class="authentication-content">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="authentication-card">
                <div class="card shadow-xl rounded-lg">
<div class="flex flex-row">

                        {{-- Bagian kiri (gambar) --}}
                        <div class="w-1/2 lg:w-1/2 bg-login flex items-center justify-center">
                            <img src="{{ asset('assets/images/error/login-img.jpg') }}" class="w-full h-auto" alt="login">
                        </div>

                        {{-- Bagian kanan (form login) --}}
                        <div class="w-1/2 lg:w-1/2">
                            <div class="card-body p-4 p-sm-5">
                                <h5 class="text-2xl font-bold text-center mb-4">Login</h5>

                                <form class="form-body" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="space-y-4">

                                        {{-- Email --}}
                                        <div>
                                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                            <div class="flex items-center space-x-2">
                                                <i class="bi bi-envelope-fill text-gray-500"></i>
                                                <input type="email" id="email" name="email"
                                                     value="{{ old('email') }}" required autofocus
                                                     class="input input-bordered w-full"
                                                     placeholder="Email Address">
                                            </div>
                                            @error('email')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Password --}}
                                        <div>
                                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                                            <div class="flex items-center space-x-2">
                                                <i class="bi bi-lock-fill text-gray-500"></i>
                                                <input type="password" id="password" name="password" required
                                                     class="input input-bordered w-full"
                                                     placeholder="Enter Password">
                                            </div>
                                            @error('password')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Remember Me --}}
                                        <div class="flex items-center space-x-3">
                                            <div class="flex items-center h-5">
                                                <input class="checkbox checkbox-primary" type="checkbox" name="remember"
                                                     id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            </div>
                                            <div>
                                                <label for="remember" class="cursor-select">Remember Me</label>
                                            </div>
                                        </div>

                                        {{-- Tombol Login --}}
<div class="w-full">
            <button type="submit" class="btn btn-primary w-full">
                Login
            </button>
        </div>

                                        {{-- Link Register (Opsional) --}}
<div class="w-full">
            <p class="mb-0">
                Tidak memiliki akun?
                <a href="{{ route('register') }}">Registrasi</a>
            </p>
        </div>

                                    </div> {{-- space-y-4 --}}
                                </form>

                            </div>
                        </div>

                    </div> {{-- flex flex-row --}}
                </div>
            </div>
        </div>
    </main>
@endsection
