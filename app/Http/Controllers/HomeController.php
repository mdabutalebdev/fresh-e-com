<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Banner;
use App\Models\ProductShowcase;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'banners' => Banner::where('is_active', true)->orderBy('sort_order')->get(),
            'showcaseItems' => ProductShowcase::where('is_active', true)->orderBy('sort_order')->get(),
            'about' => AboutSection::where('is_active', true)->first(),
        ]);
    }
}
