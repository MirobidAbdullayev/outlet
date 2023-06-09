<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
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
        $category=Category::all();
        $image=Images::find($id);
        return view('admin.update_product', compact('product','category','image'));
    }

    public function update_product_confirm(Request $request, $id)
    {
        $product=Product::find($id);

        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->quantity=$request->quantity;
        $product->color_1=$request->color_1;
        $product->color_2=$request->color_2;
        $product->color_3=$request->color_3;
        $product->color_4=$request->color_4;
        $product->color_5=$request->color_5;
        $product->color_6=$request->color_6;
        $product->sz_1=$request->sz_1;
        $product->sz_2=$request->sz_2;
        $product->sz_3=$request->sz_3;
        $product->sz_4=$request->sz_4;
        $product->sz_5=$request->sz_5;
        $product->sz_6=$request->sz_6;
        $product->category_id = $request->category_id;
        if($product){
            foreach($product->images() as $image){
                $image=$request->images;
                $name = rand(0,1000000).'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $name);
                $imageModel = new Images();
                $imageModel->product_id = $product->id;
                $imageModel->image_path = $name;
                $imageModel->save();
            }
        }
        
        $product->save();
        return redirect()->back();

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
