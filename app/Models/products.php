<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
     protected $table = 'products';
    // use default primary key 'id' and timestamps (migrations created timestamps)
    protected $fillable = [
        'nama',
        'harga',
        'stok',
        'kode_produk',
        'id_user',
    ];
}
