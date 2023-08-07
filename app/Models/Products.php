<?php

namespace App\Models;

use App\Rules\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'sku',
        'price',
        'quantity',
    ];
}
