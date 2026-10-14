<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;
use App\Models\Peminjaman;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PeminjamanController extends Controller
{



    
   public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:view-peminjaman|create-peminjaman|edit-peminjaman|delete-peminjaman', ['only' => ['index','show']]);
       $this->middleware('permission:create-peminjaman', ['only' => ['create','store']]);
       $this->middleware('permission:edit-peminjaman', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-peminjaman', ['only' => ['destroy']]);
    }

    // index peminjaman
    public function index(): View
    {
        return view('peminjaman.index', [
            'peminjaman' => Peminjaman::latest()->paginate(10)
        ]);
    }

    // Show
    public function create(Peminjaman $peminjaman): View
    {
        return view('peminjaman.create', [
            'peminjaman' => $peminjaman,
            'kategori' => Kategori::all(),
            'barang' => Barang::all(),
            'user' => User::all()
        ]);
    }

    // Store
    public function store(StorePeminjamanRequest $request): RedirectResponse
    {
        Peminjaman::create($request->all());
        return redirect()->route('peminjaman.index')
                ->withSuccess('Peminjaman baru berhasil ditambahkan.');
    }

    // view
    public function show(Peminjaman $peminjaman): View
    {
        return view('peminjaman.show', [
            'peminjaman' => $peminjaman,
            'kategori' => Kategori::all(),
            'barang' => Barang::all(),
            'user' => User::all()
        ]);
    }

    // edit 
    public function edit(Peminjaman $peminjaman): View
    {
        return view('peminjaman.edit', [
            'peminjaman' => $peminjaman,
            'kategori' => Kategori::all(),
            'barang' => Barang::all(),
            'user' => User::all()
        ]);
    }

    /// update
    public function update(UpdatePeminjamanRequest $request, Peminjaman $peminjaman): RedirectResponse
    {
        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index')
                ->withSuccess('Peminjaman berhasil di update.');
    }

    /// delete 
    public function destroy(Peminjaman $peminjaman): RedirectResponse
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')
                ->withSuccess('Peminjaman berhasil dihapus.');
    }
}