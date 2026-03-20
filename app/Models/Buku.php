<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_id',
        'judul',
        'penulis',
        'penerbit',
        'harga',
        'stok',
        'cover',
        'deskripsi'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}