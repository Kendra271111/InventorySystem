@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <h2 class="card-title">Detail Barang</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Nama -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Nama:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $barang->nama }}</span>
                </div>
                <!-- Kategori -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Kategori:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $barang->kategori->nama ?? '-' }}</span>
                </div>
                <!-- Jumlah -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Jumlah:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $barang->jumlah }}</span>
                </div>
                <!-- Kondisi -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Kondisi:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $barang->kondisi }}</span>
                </div>
                <!-- Lokasi -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Lokasi:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $barang->lokasi }}</span>
                </div>
            </div>
            <div class="flex justify-end space-x-3 mt-6">
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
                @can('edit-barang')
                    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection