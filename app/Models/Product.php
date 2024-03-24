<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tb_product';
    protected $fillable = [
        'name',
        'price',
        'warranty',
        'image',
        'accessories',
        'condition',
        'status',
        'promotion',
        'description',
        'feature',
        'id_category',
    ];

    // function product()
    // {
    //     return $this->belongsTo(Category::class, 'category_id');
    // }
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
