<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
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
        $category=category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
   {
        if($request->hasFile("images")){
            $files = $request->file("images");
            foreach($files as $file){
                $imageName = time().'_'.$file->getClientOriginalName();
                $request['product_id']=$product->id;
                $request['image']=$imageName;
                $file->move(\public_path("/images"), $imageName);
                Image::create($request->all());
            }
        }

        $product = new product([
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
        ]);

        $product->save();
        return redirect()->back();
   }
}
