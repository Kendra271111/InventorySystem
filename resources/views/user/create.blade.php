@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <h2 class="card-title mb-4">Tambah User</h2>
            <form action="{{ route('user.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @csrf

                <!-- NAMA -->
                <div>
                    <label for="name" class="label text-font-weight-medium block mb-1">Nama</label>
                    <input type="text" name="name" id="name" class="input input-bordered w-full max-w-xs"
                           value="{{ old('name') }}" required>
                    @error('name')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- EMAIL -->
                <div>
                    <label for="email" class="label text-font-weight-medium block mb-1">Email</label>
                    <input type="email" name="email" id="email" class="input input-bordered w-full max-w-xs"
                           value="{{ old('email') }}" required>
                    @error('email')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div>
                    <label for="password" class="label text-font-weight-medium block mb-1">Password</label>
                    <input type="password" name="password" id="password" class="input input-bordered w-full max-w-xs"
                           required>
                    @error('password')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- KONFIRMASI PASSWORD -->
                <div>
                    <label for="password_confirmation" class="label text-font-weight-medium block mb-1">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="input input-bordered w-full max-w-xs"
                           required>
                    @error('password_confirmation')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- ROLES -->
                <div>
                    <label for="roles" class="label text-font-weight-medium block mb-1">Roles</label>
                    <select name="roles[]" id="roles" class="select select-bordered w-full max-w-xs" multiple required>
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('roles')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2 flex justify-end">
                    <a href="{{ route('user.index') }}" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection