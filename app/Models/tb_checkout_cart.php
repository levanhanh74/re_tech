<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_checkout_cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'status',
        'name_product',
        'price_product',
        'quality_product',
        'image_product',
        'total_product',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
