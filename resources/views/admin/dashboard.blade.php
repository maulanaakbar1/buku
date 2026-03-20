@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Dashboard Admin</h3>

    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5>Total Buku</h5>
                    <h2>{{ $totalBuku }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5>Total Kategori</h5>
                    <h2>{{ $totalKategori }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5>Total Order</h5>
                    <h2>{{ $totalOrder }}</h2>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection