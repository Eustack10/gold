<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Colors;
use App\Models\Gems;
use App\Models\Gold;
use App\Models\ProductTypes;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function jellewery()
    {
        return view('index');
    }

    function weight($id)
    {
        return view('weight');
    }
    function jelleweryCreate()
    {
        $gold = Gold::all();
        $categories = Categories::all();
        $product_types = ProductTypes::all();
        $colors = Colors::all();
        $brands = Brands::all();
        $gems = Gems::all();
        return view('weight', compact('gold', 'categories', 'product_types', 'colors', 'brands', 'gems'));
    }
}
