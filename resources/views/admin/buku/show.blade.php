@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Detail Buku</h3>

    <div class="card mb-3" style="max-width: 800px;">
        <div class="row g-0">
            <div class="col-md-4">
                @if($buku->cover && file_exists(public_path('cover/'.$buku->cover)))
                    <img src="{{ asset('cover/'.$buku->cover) }}" class="img-fluid rounded-start" alt="Cover Buku">
                @else
                    <img src="https://via.placeholder.com/200x300?text=No+Cover" class="img-fluid rounded-start" alt="No Cover">
                @endif
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $buku->judul }}</h5>
                    <p class="card-text"><strong>Kategori:</strong> {{ $buku->kategori->nama_kategori }}</p>
                    <p class="card-text"><strong>Penulis:</strong> {{ $buku->penulis }}</p>
                    <p class="card-text"><strong>Penerbit:</strong> {{ $buku->penerbit ?? '-' }}</p>
                    <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($buku->harga) }}</p>
                    <p class="card-text"><strong>Stok:</strong> {{ $buku->stok }}</p>
                    <p class="card-text"><strong>Deskripsi:</strong> {{ $buku->deskripsi ?? '-' }}</p>

                    <a href="{{ route('buku.index') }}" class="btn btn-secondary mt-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection