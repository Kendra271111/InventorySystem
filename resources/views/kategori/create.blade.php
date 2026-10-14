@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <form action="{{ route('kategori.store') }}" method="POST" class="grid grid-cols-1 gap-4">
                @csrf

                <!-- NAMA KATEGORI -->
                <div>
                    <label for="nama" class="label text-font-weight-medium block mb-1">Nama Kategori</label>
                    <input type="text" name="nama" id="nama" class="input input-bordered w-full max-w-xs"
                           value="{{ old('nama') }}" required>
                    @error('nama')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection