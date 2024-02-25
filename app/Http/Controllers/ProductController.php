<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        return view('product.index');
    }

    public function foodBeverage(){
        return view('product.category', ['category' => 'food beverage']);
    }

    public function beautyHealth(){
        return view('product.category', ['category' => 'beauty health']);
    }

    public function homeCare(){
        return view('product.category', ['category' => 'home care']);
    }

    public function babyKid(){
        return view('product.category', ['category' => 'baby kid']);
    }
}
