@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Kategori</h3>

    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection