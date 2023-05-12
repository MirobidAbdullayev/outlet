<?php

namespace App\Http\Controllers;

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
        $category=category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
   {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:855',
            'price' => 'required',
            'discount_price' => 'required',
            'quantity' => 'required',
            'category' => 'required',
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
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);

        if($request->hasfile('image')) {
            foreach($request->file('image') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/image/', $name);  
                $imgData[] = $name;  
            }
            $fileModal = new Image();
            $fileModal->name = json_encode($imgData);
            $fileModal->description = json_encode($imgData);
            $fileModal->price = json_encode($imgData);
            $fileModal->discount_price = json_encode($imgData);
            $fileModal->quantity = json_encode($imgData);
            $fileModal->category = json_encode($imgData);
            $fileModal->color_1 = json_encode($imgData);
            $fileModal->color_2 = json_encode($imgData);
            $fileModal->color_3 = json_encode($imgData);
            $fileModal->color_4 = json_encode($imgData);
            $fileModal->color_5 = json_encode($imgData);
            $fileModal->color_6 = json_encode($imgData);
            $fileModal->sz_1 = json_encode($imgData);
            $fileModal->sz_2 = json_encode($imgData);
            $fileModal->sz_3 = json_encode($imgData);
            $fileModal->sz_4 = json_encode($imgData);
            $fileModal->sz_5 = json_encode($imgData);
            $fileModal->image_path = json_encode($imgData);
            
           
            $fileModal->save();
        }

        return redirect()->back();
   }
}
