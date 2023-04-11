<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function redirect()
    {
        return view('home.userpage');
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
