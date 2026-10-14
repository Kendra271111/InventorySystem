@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <h2 class="card-title">Detail Peminjaman</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Barang -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Barang:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $peminjaman->barang->nama }}</span>
                </div>
                <!-- Peminjam -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Peminjam:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $peminjaman->user->name }}</span>
                </div>
                <!-- Tanggal Pinjam -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Tanggal Pinjam:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $peminjaman->tanggal_pinjam }}</span>
                </div>
                <!-- Tanggal Kembali -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Tanggal Kembali:</span>
                </div>
                <div class="flex items-center">
                    <span class="label-text">{{ $peminjaman->tanggal_kembali }}</span>
                </div>
                <!-- Status -->
                <div class="flex items-center">
                    <span class="label text-font-weight-medium">Status:</span>
                </div>
                <div class="flex items-center">
                    <span class="badge badge-primary">{{ $peminjaman->status }}</span>
                </div>
            </div>
            <div class="flex justify-end space-x-3 mt-6">
                <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection