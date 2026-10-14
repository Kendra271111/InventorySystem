@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <h2 class="card-title mb-4">Edit Peminjaman</h2>
            <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @csrf
                @method('PUT')

                <!-- BARANG -->
                <div>
                    <label for="barang_id" class="label text-font-weight-medium block mb-1">Barang</label>
                    <select name="barang_id" id="barang_id" class="select select-bordered w-full max-w-xs" required>
                        @foreach ($barang as $b)
                            <option value="{{ $b->id }}" {{ old('barang_id', $peminjaman->barang_id) == $b->id ? 'selected' : '' }}>
                                {{ $b->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('barang_id')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- USER -->
                <div>
                    <label for="user_id" class="label text-font-weight-medium block mb-1">User</label>
                    <select name="user_id" id="user_id" class="select select-bordered w-full max-w-xs" required>
                        @foreach ($user as $u)
                            <option value="{{ $u->id }}" {{ old('user_id', $peminjaman->user_id) == $u->id ? 'selected' : '' }}>
                                {{ $u->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- STATUS -->
                <div>
                    <label for="status" class="label text-font-weight-medium block mb-1">Status</label>
                    <input type="text" name="status" id="status" class="input input-bordered w-full max-w-xs" value="{{ old('status', $peminjaman->status) }}" required>
                    @error('status')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- TANGGAL PINJAM -->
                <div>
                    <label for="tanggal_pinjam" class="label text-font-weight-medium block mb-1">Tanggal Pinjam</label>
                    <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="input input-bordered w-full max-w-xs" value="{{ old('tanggal_pinjam', $peminjaman->tanggal_pinjam) }}" required>
                    @error('tanggal_pinjam')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- TANGGAL KEMBALI -->
                <div>
                    <label for="tanggal_kembali" class="label text-font-weight-medium block mb-1">Tanggal Kembali</label>
                    <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="input input-bordered w-full max-w-xs" value="{{ old('tanggal_kembali', $peminjaman->tanggal_kembali) }}" required>
                    @error('tanggal_kembali')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2 flex justify-end">
                    <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection