<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function products_men($category_id)
    {
        $product=Product::where('category_id', $category_id)->get();
        
        return view('admin.view_products.products_men', compact('product'));
    }

    public function men_delete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function products_women($category_id)
    {
        $product=Product::where('category_id', $category_id)->get();
        return view('admin.view_products.products_women', compact('product'));
    }

    public function women_delete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function products_children($category_id)
    {
        $product=Product::where('category_id', $category_id)->get();
        return view('admin.view_products.products_children', compact('product'));
    }

    public function child_delete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function products_sport($category_id)
    {
        $product=Product::where('category_id', $category_id)->get();
        return view('admin.view_products.products_sport', compact('product'));
    }

    public function sport_delete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function products_special($category_id)
    {
        $product=Product::where('category_id', $category_id)->get();
        return view('admin.view_products.products_special', compact('product'));
    }

    public function special_delete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
