<?php

namespace App\Http\Controllers;

use App\Models\GalleryMuseum;
use Illuminate\Http\Request;

class GalleryMuseumController extends Controller
{

    public function index()
    {
        return GalleryMuseum::all();
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'date' => 'required|date_format:Y-m-d',
            'image_url' => 'required|url|max:255',
        ]);
        $gallery = GalleryMuseum::create($validatedData);

        return response([
            'message' => 'Gallery created successfully',
            'data' => $gallery
        ], 201);
    }

    public function show(GalleryMuseum $id)
    {
        return GalleryMuseum::find($id);

    }


    public function update(Request $request, GalleryMuseum $id)
    {
        $aboutMuseum = GalleryMuseum::find($id);
        $aboutMuseum->title_uz = $request->title_uz;
        $aboutMuseum->title_ru = $request->title_ru;
        $aboutMuseum->title_en = $request->title_en;
        $aboutMuseum->image_url = $request->image_url;
        $aboutMuseum->save();
        return response()->json($aboutMuseum);
    }


    public function destroy(GalleryMuseum $id)
    {
        $destroyGallery = GalleryMuseum::find($id);
        $destroyGallery->delete();
        return response(['message' => 'Gallery is deleted']);
    }
}
