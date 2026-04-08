<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';
    // use default primary key 'id' and timestamps (migration created timestamps)
    protected $fillable = [
        'name',
    ];

    public function products()
    {
        return $this->belongsToMany(products::class, 'category_product', 'category_id', 'product_id');
    }
}
