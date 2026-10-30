<?php

namespace App\Http\Controllers;

use App\Models\ProductShowcase;

class ProductListController extends Controller
{
    public function index()
    {
        return view('product', [
            'showcaseItems' => ProductShowcase::where('is_active', true)->orderBy('sort_order')->get(),
        ]);
    }
}
