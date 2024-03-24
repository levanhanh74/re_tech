<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'tb_category';
    protected $fillable = [
        'name'
    ];
    // function category()
    // {
    //     return $this->hasMany(Product::class, 'category_id');
    // }

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
