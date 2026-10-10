<?php

namespace App\Http\Controllers;

use App\Models\Infrastructure;
use App\Models\InfrastructureImage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\InfrastructureImageController;
use Illuminate\Http\Request;

class InfrastructureImageController extends Controller
{
    public function infratech(int $infrastructureId)
    {        
        $infrastructure = Infrastructure::findOrFail($infrastructureId);
        $infrastructureImages = InfrastructureImage::where('infrastructure_id', $infrastructureId)->get();
        return view('admin.infrastructure-image.index', compact('infrastructure','infrastructureImages'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request, int $infrastructureId)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);
        $infrastructure = Infrastructure::findOrFail($infrastructureId);
        $imageData = [];
        if($files = $request->file('images')){
            foreach($files as $key => $file){
                $extension = $file->getClientOriginalExtension();
                $filename = $key.'-'.time(). '.' .$extension;
                $path = "uploads/products/";
                $file->move($path, $filename);
                $imageData[] = [
                    'infrastructure_id' => $infrastructure->id,
                    'image' => $filename,
                ];
            }
        }

        InfrastructureImage::insert($imageData);

        return redirect()->back()->with('status', 'infrastructure Successfully');
    }

    public function show(InfrastructureImage $infrastructureImage)
    {
        //
    }

    public function edit(InfrastructureImage $infrastructureImage)
    {
        //
    }

    public function update(Request $request, InfrastructureImage $infrastructureImage)
    {
        //
    }

    public function destroy(InfrastructureImage $infrastructureImage, int $infrastructureImageId)
    {
        $infrastructureImages = InfrastructureImage::findOrFail($infrastructureImageId);
        if(File::exists($infrastructureImages->image)){
            File::delete($infrastructureImages->image);
        }
        $infrastructureImages->delete();

        return redirect()->back()->with('status', 'Image Deleted');
    }
}
