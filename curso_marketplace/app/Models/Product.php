<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Añadido por luis
    protected $fillable = [
        'name',
        'description',
        'price',
        'cover_img'
    ];
    //---------------
}
