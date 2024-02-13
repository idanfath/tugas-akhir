<?php
//for api
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $item = product::all();
        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = product::find($id);

        if (!$item) {
            return response()->json(['error' => 'item not found']);
        }

        $imagePath = $item->image;
        Storage::disk('public')->delete($imagePath);

        if ($item->delete()) {
            return response()->json(['message' => 'item deleted']);
        } else {
            return response()->json(['error' => 'Failed to delete']);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:carousel,gallery,banner',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $item = product::create($validatedData);
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:carousel,gallery,banner',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $item = product::find($request->id);

        if (!$item) {
            return response()->json(['error' => 'Item not found']);
        }

        $item->name = $request->name;
        $item->type = $request->type;
        $item->image = $request->image;

        if ($item->save()) {
            return response()->json(['message' => 'Item updated']);
        } else {
            return response()->json(['error' => 'Failed to update']);
        }
    }

    public function findbyID($id)
    {
        $item = product::find($id);
        if (!$item) {
            return response()->json(['error' => 'Item not found']);
        }

        return response()->json($item, 200);
    }
}
