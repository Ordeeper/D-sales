<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'description', 'category', 'image', 'rating', 'badge', 'shipping'];

    protected $casts = [
        'rating' => 'array', // Converte o campo 'rating' para um array quando acessado
    ];
}
