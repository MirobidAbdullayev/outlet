<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'discount_price',
        'quantity',
        'category',
        'img_1',
        'img_2',
        'img_3',
        'img_4',
        'color_1',
        'color_2',
        'color_3',
        'color_4',
        'color_5',
        'color_6',
        'sz_1',
        'sz_2',
        'sz_3',
        'sz_4',
        'sz_5',
        'sz_6',
    ];
}
