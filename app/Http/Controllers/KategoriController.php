<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class KategoriController extends Controller
{
    
    /** middleware*/
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:view-kategori|create-kategori|edit-kategori|delete-kategori', ['only' => ['index','show']]);
       $this->middleware('permission:create-kategori', ['only' => ['create','store']]);
       $this->middleware('permission:edit-kategori', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-kategori', ['only' => ['destroy']]);
    }

    /** index */
    public function index(): View
    {
        return view('kategori.index', [
            'kategori' => Kategori::latest()->paginate(10)
        ]);
    }

    /** Show */
    public function create(): View
    {
        return view('kategori.create');
    }

    /** Store  */
    public function store(StoreKategoriRequest $request): RedirectResponse
    {
        Kategori::create($request->all());
        return redirect()->route('kategori.index')->withSuccess('Kategori baru berhasil ditambahkan.');
    }

    /** view */
    public function show(Kategori $kategori): View
    {
        return view('kategori.show', [
            'kategori' => $kategori
        ]);
    }

    /** edit */
    public function edit(Kategori $kategori): View
    {
        return view('kategori.edit', [
            'kategori' => $kategori
        ]);
    }

    /** update */
    public function update(UpdateKategoriRequest $request, Kategori $kategori): RedirectResponse
    {
        $kategori->update($request->all());
        return redirect()->route('kategori.index')
                ->withSuccess('Kategori berhasil di update.');
    }

    /** delete */
    public function destroy(Kategori $kategori): RedirectResponse
    {
        $kategori->delete();
        return redirect()->route('kategori.index')
                ->withSuccess('Kategori berhasil dihapus.');
    }
}
