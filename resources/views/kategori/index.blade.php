@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <div class="flex justify-between items-center mb-4">
                <h2 class="card-title">List Kategori</h2>
                @can('create-kategori')
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm">
                        <span class="material-icons">add</span> Kategori
                    </a>
                @endcan
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if ($kategori->count())
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td class="justify-center">
                                    <div class="flex justify-center space-x-2">
                                        @can('view-kategori')
                                            <a href="{{ route('kategori.show', $item->id) }}" class="btn btn-ghost btn-sm" title="View">
                                                <span class="material-icons">visibility</span>
                                            </a>
                                        @endcan
                                        @can('edit-kategori')
                                            <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-ghost btn-sm warning" title="Edit">
                                                <span class="material-icons">edit</span>
                                            </a>
                                        @endcan
                                        @can('delete-kategori')
                                            <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
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
                <p class="text-center text-muted my-4">Belum ada data kategori.</p>
            @endif

            @if (method_exists($kategori, 'links'))
                <div class="mt-4">
                    {{ $kategori->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
