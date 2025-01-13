<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\products;

class ProductController extends Controller
{
    public function products()
    {
        $products = product::all();
        return response()->json(['products' => $products], 200);
    }
}
