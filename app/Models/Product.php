<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; 

    protected $fillable = [
        'name',
        'description',
        'price',
        'discount_price',
        'quantity',
        'category',
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

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
