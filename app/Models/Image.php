<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Image extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'post_id',
    ];

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
