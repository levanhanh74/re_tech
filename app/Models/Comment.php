<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'tb_comment';
    protected $fillable = [
        'email', 'name', 'comments', 'id_product_comment',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
