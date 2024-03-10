<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_product extends Model
{
    use HasFactory;
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
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
