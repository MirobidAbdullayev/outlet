<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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

    public function add_product(Request $req)
   {
    $req->validate([
        'imageFile' => 'required',
        'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
      ]);
  
      if($req->hasfile('imageFile')) {
          foreach($req->file('imageFile') as $file)
          {
              $name = $file->getClientOriginalName();
              $file->move(public_path().'/uploads/', $name);  
              $imgData[] = $name;  
          }
  
          $fileModal = new Product();
          $fileModal->name = json_encode($imgData);
          $fileModal->image_path = json_encode($imgData);
          
         
          $fileModal->save();
  
         return back()->with('success', 'File has successfully uploaded!');
      }
   }
}
