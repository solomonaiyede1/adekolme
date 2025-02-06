<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="products";

    protected $fillable = [
        'id',
        'product_category',
        'product_name',
        'product_price',
        'product_currency',
        'product_image',
        'product_description',
        'seller_id'
    ];
}
