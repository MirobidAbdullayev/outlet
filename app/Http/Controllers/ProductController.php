<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function products($category_id)
    {
        $product=product::where('category_id', $category_id)->get();
        
        return view('admin.view_products.products', compact('product'));
    }

    public function women_product($category_id)
    {
        $product=product::where('category_id', $category_id)->get();
        return view('admin.view_products.women_product');
    }

    public function children_product($category_id)
    {
        $product=product::where('category_id', $category_id)->get();
        return view('admin.view_products.children_product', compact('product'));
    }

    public function sports_product($category_id)
    {
        $product=product::where('category_id', $category_id)->get();
        return view('admin.view_products.sports_product', compact('product'));
    }

    public function special_product($category_id)
    {
        $product=product::where('category_id', $category_id)->get();
        return view('admin.view_products.special_product', compact('product'));
    }
}
