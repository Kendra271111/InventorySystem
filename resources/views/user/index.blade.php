@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="card w-full">
        <div class="card-body">
            <div class="flex justify-between items-center mb-4">
                <h2 class="card-title">Daftar User</h2>
                @can('create-user')
                    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">
                        <span class="material-icons">person_add</span> User
                    </a>
                @endcan
            </div>

            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ implode(', ', $item->getRoleNames()->toArray()) }}</td>
                            <td class="justify-center">
                                <div class="flex justify-center space-x-2">
                                    @can('show-user')
                                        <a href="{{ route('user.show', $item->id) }}" class="btn btn-ghost btn-sm" title="Lihat">
                                            <span class="material-icons">visibility</span>
                                        </a>
                                    @endcan
                                    @can('edit-user')
                                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-ghost btn-sm warning" title="Edit">
                                            <span class="material-icons">edit</span>
                                        </a>
                                    @endcan
                                    @can('delete-user')
                                        <form action="{{ route('user.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus user ini?')">
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
@endsection
