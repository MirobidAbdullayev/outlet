<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

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
        $category=category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        $product=new product;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->quantity=$request->quantity;
        $product->category=$request->category;
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

        $image_1=$request->img_1;
        $imagename1=time().'.'.$image_1->getClientOriginalExtension();
        $request->img_1->move('product',$imagename1);
        $product->img_1=$imagename1;

        $image_2=$request->img_2;
        $imagename2=time().'.'.$image_2->getClientOriginalExtension();
        $request->img_2->move('product',$imagename2);
        $product->img_2=$imagename2;
        
        $image_3=$request->img_3;
        $imagename3=time().'.'.$image_3->getClientOriginalExtension();
        $request->img_3->move('product',$imagename3);
        $product->img_3=$imagename3;

        $image_4=$request->img_4;
        $imagename3=time().'.'.$image_4->getClientOriginalExtension();
        $request->img_4->move('product',$imagename3);
        $product->img_4=$imagename3;

        $product->save();
        return redirect()->back();
    }
}
