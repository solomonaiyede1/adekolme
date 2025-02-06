<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $table='orders';
    protected $fillable = [
        'user_id',
        'product_id',
        'product_category',
        'product_name',
        'product_price',
        'product_quantity',
        'product_image',
        'seller_id',
        'name',
        'eamil',
        'phone',
        'country',
        'state',
        'city',
        'bus_stop',
        'payment_status'
    ];

    public function order_user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
