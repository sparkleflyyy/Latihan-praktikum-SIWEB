<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    public $timestamps = false; 
    protected $fillable = [
        'category_id',
        'category_name'
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'category_id','category_id');
    }
}
