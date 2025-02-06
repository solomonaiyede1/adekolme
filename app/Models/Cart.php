<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'product_category',
        'product_name',
        'product_price',
        'product_quantity',
        'product_image',
        'seller_id'
    ];

    public function cart_user(){
        $this->belongsTo(App\Models\Users::class, 'id');
    }

}
