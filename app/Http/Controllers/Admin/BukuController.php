<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::with('kategori')->latest()->get();
        return view('admin.buku.index', compact('bukus'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.buku.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'cover' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        // upload cover
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('cover'), $filename);
            $data['cover'] = $filename;
        }

        Buku::create($data);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $kategoris = Kategori::all();

        return view('admin.buku.edit', compact('buku', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);

        $request->validate([
            'kategori_id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        $data = $request->all();

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('cover'), $filename);
            $data['cover'] = $filename;
        }

        $buku->update($data);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diupdate');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        if ($buku->cover && file_exists(public_path('cover/'.$buku->cover))) {
            unlink(public_path('cover/'.$buku->cover));
        }

        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }

    public function show($id)
    {
        $buku = Buku::with('kategori')->findOrFail($id);
        return view('admin.buku.show', compact('buku'));
    }
}