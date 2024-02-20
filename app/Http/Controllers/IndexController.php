<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function jellewery(){
        return view('index');
    }

    function weight($id){
        return view('weight');
    }
    function jelleweryCreate(){
        return view('jellewery.create');
    }
}
