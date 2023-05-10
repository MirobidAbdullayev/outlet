<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
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
        $image = $request->file('image');
        foreach($image as $multi_img)
        {
            $name_gen=hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
            Product::make($multi_img)->resize(300,300)->save('public/images'.$name_gen);

            $last_img = 'public/images'.$name_gen;

            Product::insert([
                'image' => $last_img,
            ]);
        }

        return redirect()->back();
   }
}
