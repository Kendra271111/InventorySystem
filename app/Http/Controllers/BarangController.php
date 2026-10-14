<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BarangController extends Controller
{
     /** */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:view-barang|create-barang|edit-barang|delete-barang', ['only' => ['index','show']]);
       $this->middleware('permission:create-barang', ['only' => ['create','store']]);
       $this->middleware('permission:edit-barang', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-barang', ['only' => ['destroy']]);
    }

    /** barang index. */
    public function index(): View
    {
        return view('barang.index', [
            'barang' => Barang::latest()->paginate(10)
        ]);
    }

    /** Show. */
    public function create(): View
    {
        return view('barang.create',[
            'kategori' => Kategori::all()
        ]);
    }

    /** Store barang */
    public function store(StoreBarangRequest $request): RedirectResponse
    {
        Barang::create($request->all());
        return redirect()->route('barang.index')
                ->withSuccess('Barang baru berhasil ditambahkan.');
    }

    /** view barang.*/
    public function show(Barang $barang): View
    {
        return view('barang.show', [
            'barang' => $barang,
            'kategori' => Kategori::all()
        ]);
    }

    /** edit barang */
    public function edit(Barang $barang): View
    {
        return view('barang.edit', [
            'barang' => $barang,
            'kategori' => Kategori::all()
        ]);
    }

    /** update barang */
    public function update(UpdateBarangRequest $request, Barang $barang): RedirectResponse
    {
        $barang->update($request->all());
        return redirect()->route('barang.index')
                ->withSuccess('Barang berhasil di update.');
    }

    /** delete barang */
    public function destroy(Barang $barang): RedirectResponse
    {
        $barang->delete();
        return redirect()->route('barang.index')
                ->withSuccess('Barang berhasil dihapus.');
    }
}
