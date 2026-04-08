<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    // use default primary key 'id' and timestamps (migrations created timestamps)
    protected $fillable = [
        'name',
        'price',
    ];

    public function categories()
    {
        return $this->belongsToMany(categories::class, 'category_product', 'product_id', 'category_id');
    }
}
