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
            'category_id'=>'required'
        ]);
        //create
       $product = new Product();
       $product->name = $request->name;
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
