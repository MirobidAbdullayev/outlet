<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('home.userpage');
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }else{
            return view('home.userpage');
        }
        
    }

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $input = $request->all();

        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password'])
        ]);
        if(!$input){
            return redirect(route('register'))->with('error', 'registratsiya xato');
        }else{
            return view('home.userpage');
        }
        
    }
}
