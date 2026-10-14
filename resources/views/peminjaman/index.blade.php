@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <div class="flex justify-between items-center mb-4">
                <h2 class="card-title">Daftar Peminjaman</h2>
                @can('create-peminjaman')
                    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary btn-sm">
                        <span class="material-icons">add</span> Peminjaman
                    </a>
                @endcan
            </div>

            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Barang</th>
                            <th>Peminjam</th>
                            <th>Tgl Pinjam</th>
                            <th>Tgl Kembali</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjaman as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->barang->nama ?? '-' }}</td>
                                <td>{{ $item->user->name ?? '-' }}</td>
                                <td>{{ $item->tanggal_pinjam }}</td>
                                <td>{{ $item->tanggal_kembali }}</td>
                                <td>
                                    <span class="badge badge-primary">{{ $item->status }}</span>
                                </td>

                                <td class="justify-center">
                                    <div class="flex justify-center space-x-2">
                                        @can('show-peminjaman')
                                            <a href="{{ route('peminjaman.show', $item->id) }}" class="btn btn-ghost btn-sm" title="Lihat">
                                                <span class="material-icons">visibility</span>
                                            </a>
                                        @endcan
                                        @can('edit-peminjaman')
                                            <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-ghost btn-sm warning" title="Edit">
                                                <span class="material-icons">edit</span>
                                            </a>
                                        @endcan
                                        @can('delete-peminjaman')
                                            <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-ghost btn-sm error" title="Hapus">
                                                    <span class="material-icons">delete</span>
                                                </button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
