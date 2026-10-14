@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <form action="{{ route('barang.update', $barang->id) }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @csrf
                @method('PUT')

                <!-- NAMA -->
                <div>
                    <label for="nama" class="label text-font-weight-medium block mb-1">Nama</label>
                    <input type="text" name="nama" id="nama" class="input input-bordered w-full max-w-xs"
                           value="{{ old('nama', $barang->nama) }}" required>
                    @error('nama')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- KATEGORI -->
                <div>
                    <label for="kategori_id" class="label text-font-weight-medium block mb-1">Kategori</label>
                    <select name="kategori_id" id="kategori_id" class="select select-bordered w-full max-w-xs">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($kategori as $k)
                            <option value="{{ $k->id }}" {{ old('kategori_id', $barang->kategori_id) == $k->id ? 'selected' : '' }}>
                                {{ $k->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('kategori_id')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- JUMLAH -->
                <div>
                    <label for="jumlah" class="label text-font-weight-medium block mb-1">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="input input-bordered w-full max-w-xs"
                           value="{{ old('jumlah', $barang->jumlah) }}" required>
                    @error('jumlah')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- KONDISI -->
                <div>
                    <label for="kondisi" class="label text-font-weight-medium block mb-1">Kondisi</label>
                    <input type="text" name="kondisi" id="kondisi" class="input input-bordered w-full max-w-xs"
                           value="{{ old('kondisi', $barang->kondisi) }}" required>
                    @error('kondisi')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- LOKASI -->
                <div>
                    <label for="lokasi" class="label text-font-weight-medium block mb-1">Lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" class="input input-bordered w-full max-w-xs"
                           value="{{ old('lokasi', $barang->lokasi) }}" required>
                    @error('lokasi')
                        <p class="label-text-alt text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-2 flex justify-end">
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection