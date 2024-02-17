<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
class WelcomeController extends Controller
{
    public function index()
    {
        $products = product::all();

        $carousel = $products->where('type', 'carousel')
                            ->sortByDesc('id')
                            ->take(4);

        $gallery = $products->where('type', 'gallery')
                            ->sortByDesc('id')
                            ->take(8);

        $banner = $products->where('type', 'banner')
                            ->sortByDesc('id');

        return view("welcome", compact("carousel", "gallery", "banner"));
    }
}