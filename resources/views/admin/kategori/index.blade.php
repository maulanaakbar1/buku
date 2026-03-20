@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Data Kategori</h3>

    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>

        @foreach($kategoris as $kategori)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
            <td>
                <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display:inline;">
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