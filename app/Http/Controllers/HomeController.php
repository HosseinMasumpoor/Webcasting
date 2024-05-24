<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (!auth()->check())
            auth()->loginUsingId(11);
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }
}
