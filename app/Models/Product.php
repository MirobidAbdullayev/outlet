<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;
use App\Models\Product;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
    ];

    public function images()
    {
        return $this->hasMany(Images::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
