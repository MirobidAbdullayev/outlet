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

    public function update_product($id)
    {
        $product=Product::find($id);
        return view('admin.update_product', compact('product'));
    }

    public function products_delete($id)
    {
        $product = Product::find($id);
        if ($product) {
            foreach($product->images() as $image) {
                $image->delete();
            }
            $product->delete();
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
