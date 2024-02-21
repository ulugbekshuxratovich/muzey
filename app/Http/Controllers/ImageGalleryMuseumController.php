<?php

namespace App\Http\Controllers;

use App\Models\ImageGalleryMuseum;
use Illuminate\Http\Request;

class ImageGalleryMuseumController extends Controller
{

    public function index()
    {
        $images = ImageGalleryMuseum::all();
        return response()->json(['data' => $images], 200);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image_url' => 'required|url',
            'title_uz' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
        ]);

        $image = ImageGalleryMuseum::create($validatedData);

        return response()->json(['data' => $image], 201);
    }


    public function show($id)
    {
        $image = ImageGalleryMuseum::findOrFail($id);
        return response()->json(['data' => $image], 200);
    }


    public function update(Request $request, $id)
    {
        $image = ImageGalleryMuseum::findOrFail($id);

        $validatedData = $request->validate([
            'image_url' => 'required|url',
            'title_uz' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
        ]);

        $image->update($validatedData);

        return response()->json(['data' => $image], 200);
    }


    public function destroy($id)
    {
        $image = ImageGalleryMuseum::findOrFail($id);
        $image->delete();

        return response()->json(['message' => 'Image deleted successfully'], 200);
    }
}
