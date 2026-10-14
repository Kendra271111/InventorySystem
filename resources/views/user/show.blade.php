@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <h2 class="card-title">Detail User</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Nama -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Nama:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $user->name }}</span>
                </div>
                <!-- Email -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Email:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $user->email }}</span>
                </div>
                <!-- Roles -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Roles:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ implode(', ', $user->getRoleNames()->toArray()) }}</span>
                </div>
            </div>
            <div class="flex justify-end space-x-3 mt-6">
                <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection