<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductImage;    

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     $image = ProductImage::findOrFail($id);
    //     // Delete the image file from storage
    //     Storage::disk('public')->delete($image->image_path);
    //     // Delete the database record
    //     $image->delete();

    //     return redirect()->back()->with('success', 'Image deleted successfully.');
    // }
    public function destroy($id)
    {
        $image = ProductImage::find($id);
        if (!$image) {
            return response()->json(['success' => false, 'message' => 'Image not found.'], 404);
        }

        // Delete from storage
        if (Storage::exists($image->image_path)) {
            Storage::delete($image->image_path);
        }

        // Delete from DB
        $image->delete();

        return response()->json(['success' => true, 'message' => 'Image deleted successfully.']);
    }

}
