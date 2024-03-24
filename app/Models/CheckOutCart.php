<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutCart extends Model
{
    use HasFactory;
    protected $table = 'tb_checkout_cart';
    protected $fillable  = [
     'name', 'email', 'phone', 'address', 'status', 'name_product','price_product',  'quality_product', 'image_product', 'total_product', 'id_user', 'id_product'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
