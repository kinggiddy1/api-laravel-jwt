<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = product::all();
        return response()->json(['products' => $products], 200);
    }
}
