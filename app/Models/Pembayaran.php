<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'metode',
        'bukti_transfer',
        'status_verifikasi'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}