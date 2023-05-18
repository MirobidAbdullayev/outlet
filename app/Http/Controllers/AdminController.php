<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Image;
use Storage;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new category;
        $data->category_name=$request->category;
        $data->save();

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function view_product()
    {
        $categories=Category::all();
        return view('admin.product', compact('categories'));
    }

    public function add_product(Request $request)
   {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'quantity' => 'required',
            'color_1' => 'required',
            'color_2' => 'required',
            'color_3' => 'required',
            'color_4'  => 'required',
            'color_5'  => 'required',
            'color_6'  => 'required',
            'sz_1'  => 'required',
            'sz_2'  => 'required',
            'sz_3'  => 'required',
            'sz_4'  => 'required',
            'sz_5'  => 'required',
            'sz_6'  => 'required',
            'category_id'=>'required'
        ]);
        //create
       $product = new Product();
       $product->name = $request->name;
       $product->description = $request->description;
       $product->price = $request->price;
       $product->discount_price = $request->discount_price;
       $product->quantity = $request->quantity;
       $product->color_1 = $request->color_1;
       $product->color_2 = $request->color_2;
       $product->color_3 = $request->color_3;
       $product->color_4 = $request->color_4;
       $product->color_5 = $request->color_5;
       $product->color_6 = $request->color_6;
       $product->sz_1 = $request->sz_1;
       $product->sz_2 = $request->sz_2;
       $product->sz_3 = $request->sz_3;
       $product->sz_4 = $request->sz_4;
       $product->sz_5 = $request->sz_5;
       $product->sz_6 = $request->sz_6;
       $product->category_id = $request->category_id;
       $product->save();

        if($request->hasFile('images'))
        {
            foreach ($request->images as $image)
            {
                $name = rand(0,1000000).'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $name);
                $imageModel = new Images();
                $imageModel->product_id = $product->id;
                $imageModel->image_path = $name;
                $imageModel->save();
            }
        }

        return redirect()->back();
   }
}
