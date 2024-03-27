<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function loginView(){
        return view('auth/login');
    }
    function login(Request $request){
        $v = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if($v->fails()){
            return back()->with('error','Email or Password wrong!');
        }

        $credential = $request->only(['email', 'password']);
        if(Auth::attempt($credential)){
            return redirect()->route('index');
        }else{
            return back()->with('error','Email or Password wrong!');
        }

    }
    function logout(){
        Auth::logout();
        return redirect()->route('loginView');
    }
}
