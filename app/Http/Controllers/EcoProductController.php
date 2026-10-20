<?php

namespace App\Http\Controllers;

use App\Models\EcoProduct;

class EcoProductController extends Controller
{
    public function index()
    {
        $products = EcoProduct::all();
        return view('eco-products.index', compact('products'));
    }

    public function show($id)
    {
        $ecoProduct = EcoProduct::findOrFail($id);
        return view('eco-products.show', compact('ecoProduct'));
    }
}