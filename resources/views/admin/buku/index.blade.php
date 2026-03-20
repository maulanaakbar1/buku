@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Data Buku</h3>

    <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        @foreach($bukus as $buku)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->kategori->nama_kategori }}</td>
            <td>Rp {{ number_format($buku->harga) }}</td>
            <td>{{ $buku->stok }}</td>
            <td>
                <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection