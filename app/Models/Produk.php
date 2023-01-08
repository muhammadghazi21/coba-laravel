<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public function produkKategori()
    {
        return $this->belongsTo(ProdukKategori::class);
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
