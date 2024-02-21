<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutMuseumRequest;
use App\Models\Aboutmuseum;
use Illuminate\Http\Request;

class AboutMuseumController extends Controller
{

    public function index()
    {
        return AboutMuseum::all();
    }

    public function show($id)
    {
         return AboutMuseum::find($id);
    }

    public function store(Request $request, AboutMuseumRequest $aboutMuseumRequest)
    {
        $validatedData = $request->validated();

        $about = new AboutMuseum;
        $about->title_uz = $validatedData['title_uz'];
        $about->image_url = $validatedData['image_url'];
        $about->sub_content_uz = $validatedData['sub_content_uz'];
        $about->content_uz = $validatedData['content_uz'];
        $about->video_url = $validatedData['video_url'];

        $about->save();

        return response([
            'message' => 'About created successfully',
            'data' => $about
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $aboutMuseum = AboutMuseum::find($id);
        $aboutMuseum->title_uz = $request->title_uz;
        $aboutMuseum->image_url = $request->image_url;
        $aboutMuseum->sub_content_uz = $request->sub_content_uz;
        $aboutMuseum->content_uz = $request->content_uz;
        $aboutMuseum->video_url = $request->video_url;
        $aboutMuseum->save();
        return response()->json($aboutMuseum);
    }

    public function destroy($id)
    {
        $aboutMuseum = AboutMuseum::find($id);
        $aboutMuseum->delete();
        return response()->json(['message' => 'About Museum record deleted','id'=>$id]);
    }
}
