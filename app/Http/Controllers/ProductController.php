<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = product::all();
        return response()->json(['products' => $products], 200);
    }
}
