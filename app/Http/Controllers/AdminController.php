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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'color_1' => 'required',
            'color_2' => 'required', 
            'color_3' => 'required',
            'color_4' => 'required',
            'color_5' => 'required',
            'color_6' => 'required',
            'sz_1' => 'required',
            'sz_2' => 'required',
            'sz_3' => 'required',
            'sz_4' => 'required',
            'sz_5' => 'required',
            'sz_6' => 'required',
            'img_1' => 'required|mimes:png,jpg,jpeg',
            'img_2' => 'required|mimes:png,jpg,jpeg',
            'img_3' => 'required|mimes:png,jpg,jpeg',
            'img_4' => 'required|mimes:png,jpg,jpeg',
        ]);

        $imageName1 = '';
        if($image1 = $request->file('img_1')){
            $imageName1 = time().'-'.uniqid().'.'.$image1->getClientOriginalExtension();
            $image1->move('product', $imageName1);
        }

        $imageName2 = '';
        if($image2 = $request->file('img_2')){
            $imageName2 = time().'-'.uniqid().'.'.$image2->getClientOriginalExtension();
            $image2->move('product', $imageName2);
        }

        $imageName3 = '';
        if($image3 = $request->file('img_3')){
            $imageName3 = time().'-'.uniqid().'.'.$image3->getClientOriginalExtension();
            $image3->move('product', $imageName3);
        }

        $imageName4 = '';
        if($image4 = $request->file('img_4')){
            $imageName4 = time().'-'.uniqid().'.'.$image4->getClientOriginalExtension();
            $image4->move('product', $imageName4);
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'quantity' => $request->quantity,
            'category' => $request->category,
            'color_1' => $request->color_1,
            'color_2' => $request->color_2, 
            'color_3' => $request->color_3,
            'color_4' => $request->color_4,
            'color_5' => $request->color_5,
            'color_6' => $request->color_6,
            'sz_1' => $request->sz_1,
            'sz_2' => $request->sz_2,
            'sz_3' => $request->sz_3,
            'sz_4' => $request->sz_4,
            'sz_5' => $request->sz_5,
            'sz_6' => $request->sz_6,
            'img_1' => $imageName1,
            'img_2' => $imageName2,
            'img_3' => $imageName3,
            'img_4' => $imageName4,
        ]);
    }
}
