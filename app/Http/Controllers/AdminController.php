<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
        $perPage = $request->input('per_page') ?? 5; // Default to 5 if not provided
        
        $posts = product::orderBy("id", "desc")->paginate($perPage);
        return view("admin", compact("posts", "perPage"));
    }
    

}