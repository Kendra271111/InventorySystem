@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <div class="flex justify-between items-center mb-4">
                <h2 class="card-title">List Barang</h2>
                @can('create-barang')
                    <a href="{{ route('barang.create') }}" class="btn btn-primary btn-sm">
                        <span class="material-icons">add</span> Barang
                    </a>
                @endcan
            </div>

            @if ($barang->count())
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kat.</th>
                            <th>Jumlah</th>
                            <th>Kondisi</th>
                            <th>Lokasi</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kategori->nama ?? '-' }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->kondisi }}</td>
                                <td>{{ $item->lokasi }}</td>
                                <td class="justify-center">
                                    <div class="flex justify-center space-x-2">
                                        @can('view-barang')
                                            <a href="{{ route('barang.show', $item->id) }}" class="btn btn-ghost btn-sm" title="View">
                                                <span class="material-icons">visibility</span>
                                            </a>
                                        @endcan
                                        @can('edit-barang')
                                            <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-ghost btn-sm warning" title="Edit">
                                                <span class="material-icons">edit</span>
                                            </a>
                                        @endcan
                                        @can('delete-barang')
                                            <form action="{{ route('barang.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus barang ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-ghost btn-sm error" title="Delete">
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
            @else
                <p class="text-center text-muted my-4">Belum ada data barang.</p>
            @endif

            @if (method_exists($barang, 'links'))
                <div class="mt-4">
                    {{ $barang->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
