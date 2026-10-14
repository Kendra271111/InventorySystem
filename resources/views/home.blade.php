@extends('layouts.auth')

@section('content')
<main class="authentication-content">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="authentication-card">
            <div class="card shadow-xl rounded-lg">
                <div class="flex flex-row">
    
                            {{-- Bagian kiri (gambar) --}}
                            <div class="w-1/2 lg:w-1/2 bg-login flex items-center justify-center">
                                <img src="{{ asset('assets/images/bg/netherland.jpg') }}" class="w-full h-auto" alt="landing">
                            </div>
    
                            {{-- Bagian kanan (konten) --}}
                            <div class="w-1/2 lg:w-1/2">
                                <div class="card-body p-4 sm:p-6">
                                    <div class="space-y-6">
                                        <h3 class="text-2xl font-bold text-center mb-4">
                                            Welcome,
                                            @auth
                                                {{ auth()->user()->name }}
                                            @endauth
    
                                            @guest
                                                Guest! Silakan Login! <a class="btn btn-outline-primary btn-sm" href="{{ route('login') }}">login</a>
                                            @endguest
                                        </h3>
                                        <p class="text-center text-gray-600 dark:text-gray-400">
                                            Aplikasi Inventory Managemen.
                                        </p>
                                    </div>
                                </div>
                            </div>
    
                    </div> {{-- flex flex-row --}}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection