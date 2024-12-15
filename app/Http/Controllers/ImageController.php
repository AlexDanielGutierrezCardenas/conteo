<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048', // Máximo 2MB
        ]);
        // dd($request->file('image'));
        $imageFile = $request->file('image');
        $imageBase64 = base64_encode(file_get_contents($imageFile));

        Image::create([
            'title' => $request->title,
            'image_base64' => $imageBase64,
        ]);

        return redirect()->route('images.index')->with('success', 'Imagen subida con éxito.');
    }
}
