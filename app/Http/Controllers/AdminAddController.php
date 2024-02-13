<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; // For unique filename generation

class AdminAddController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view("admin-add");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'type' => 'required|in:carousel,gallery,banner',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $image = $request->file('image');
        $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
        $path = Storage::disk('public')->put('img', $image, ['as' => $imageName]); // Store image with custom name
        Product::create([
            'name' => $request->name,
            'type' => $request->type,
            'image' => $path
        ]);

        return redirect()->back();
    }
}
