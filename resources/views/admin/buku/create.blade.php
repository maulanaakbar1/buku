@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Buku</h3>

    <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-2">
            <label>Kategori</label>
            <select name="kategori_id" class="form-control">
                @foreach($kategoris as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-2">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control">
        </div>

        <div class="mb-2">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control">
        </div>

        <div class="mb-2">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>

        <div class="mb-2">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control">
        </div>

        <div class="mb-2">
            <label>Cover</label>
            <input type="file" name="cover" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection