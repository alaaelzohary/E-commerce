<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'desc',
        'price',
        'quantity',
        'discount_price',
        'category_name',
    
    ];
    public function categries(){
        return $this->belongsTo(Category::class);
    }
}
