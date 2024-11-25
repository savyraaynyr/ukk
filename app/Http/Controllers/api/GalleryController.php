<?php


namespace App\Http\Controllers\Api;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Get all galleries
    public function index()
    {
        $galleries = Gallery::with(['user', 'photos'])->get();
        return response()->json($galleries);
    }

    // Get a single gallery by ID
    public function show($id)
    {
        $gallery = Gallery::with(['user', 'photos'])->find($id);
        if (!$gallery) {
            return response()->json(['message' => 'Gallery not found'], 404);
        }
        return response()->json($gallery);
    }

    // Create a new gallery
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        $gallery = Gallery::create($validatedData);
        return response()->json($gallery, 201);
    }

    // Update an existing gallery
    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        if (!$gallery) {
            return response()->json(['message' => 'Gallery not found'], 404);
        }

        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'user_id' => 'sometimes|required|exists:users,id',
        ]);

        $gallery->update($validatedData);
        return response()->json($gallery);
    }

    // Delete a gallery
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if (!$gallery) {
            return response()->json(['message' => 'Gallery not found'], 404);
        }

        $gallery->delete();
        return response()->json(['message' => 'Gallery deleted successfully']);
    }
}