<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Images;

class ProductController extends Controller
{
    public function products_men($category_id)
    {
        $product=Product::where('category_id', $category_id)->get();
        
        return view('admin.view_products.products_men', compact('product'));
    }

    public function products_delete($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();

        $images = Images::where('product_id', $id)->get();
        foreach($images as $image){
            $image->delete();
        }

        return redirect()->back();
    }

    public function products_women($category_id)
    {
        $product=Product::where('category_id', $category_id)->get();
        return view('admin.view_products.products_women', compact('product'));
    }

    public function products_children($category_id)
    {
        $product=Product::where('category_id', $category_id)->get();
        return view('admin.view_products.products_children', compact('product'));
    }

    public function products_sport($category_id)
    {
        $product=Product::where('category_id', $category_id)->get();
        return view('admin.view_products.products_sport', compact('product'));
    }

    public function products_special($category_id)
    {
        $product=Product::where('category_id', $category_id)->get();
        return view('admin.view_products.products_special', compact('product'));
    }
}
