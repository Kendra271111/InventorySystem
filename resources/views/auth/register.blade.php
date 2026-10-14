@extends('layouts.auth')

@section('content')
<main class="authentication-content">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="authentication-card">
            <div class="card shadow-xl rounded-lg">
<div class="flex flex-row">

                        {{-- Bagian kiri (gambar) --}}
                        <div class="w-1/2 lg:w-1/2 bg-login flex items-center justify-center">
                            <img src="{{ asset('assets/images/error/login-img.jpg') }}" class="w-full h-auto" alt="register">
                        </div>

                        {{-- Bagian kanan (form register) --}}
                        <div class="w-1/2 lg:w-1/2">
                            <div class="card-body p-4 p-sm-5">
                                <h5 class="text-2xl font-bold text-center mb-4">Register Akun</h5>

                                <form class="form-body" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="space-y-4">

                                        {{-- Nama --}}
                                        <div>
                                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                            <div class="flex items-center space-x-2">
                                                <i class="bi bi-person-fill text-gray-500"></i>
                                                <input type="text" id="name" name="name"
                                                     value="{{ old('name') }}" required autofocus
                                                     class="input input-bordered w-full"
                                                     placeholder="Masukkan nama">
                                            </div>
                                            @error('name')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Email --}}
                                        <div>
                                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                            <div class="flex items-center space-x-2">
                                                <i class="bi bi-envelope-fill text-gray-500"></i>
                                                <input type="email" id="email" name="email"
                                                     value="{{ old('email') }}" required
                                                     class="input input-bordered w-full"
                                                     placeholder="Masukkan email">
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
                                                     placeholder="Masukkan password">
                                            </div>
                                            @error('password')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Konfirmasi Password --}}
                                        <div>
                                            <label for="password-confirm" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                                            <div class="flex items-center space-x-2">
                                                <i class="bi bi-lock-fill text-gray-500"></i>
                                                <input type="password" id="password-confirm" name="password_confirmation"
                                                     required
                                                     class="input input-bordered w-full"
                                                     placeholder="Ulangi password">
                                            </div>
                                        </div>

                                        {{-- Tombol Daftar --}}
                                        <div class="w-full">
                                            <button type="submit" class="btn btn-primary w-full">
                                                Register
                                            </button>
                                        </div>

                                        {{-- Punya akun --}}
                                        <div class="w-full">
                                            <p class="mb-0">
                                                Sudah punya akun?
                                                <a href="{{ route('login') }}">Login</a>
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
