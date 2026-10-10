<?php

namespace App\Http\Controllers;

use App\Models\SocialactivitiesImage;
use App\Models\Socialactivities;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\InfrastructureImageController;
use Illuminate\Http\Request;

class SocialactivitiesImageController extends Controller
{
    public function index(int $socialactivitiesId)
    {
        $socialactivities = Socialactivities::findOrFail($socialactivitiesId);
        $socialactivitiesImages = SocialactivitiesImage::where('socialactivities_id', $socialactivitiesId)->get();
        return view('admin.social-activities-image.index', compact('socialactivities','socialactivitiesImages'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request, int $socialactivitiesId)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);
        $socialactivities = Socialactivities::findOrFail($socialactivitiesId);
        $imageData = [];
        if($files = $request->file('images')){
            foreach($files as $key => $file){
                $extension = $file->getClientOriginalExtension();
                $filename = $key.'-'.time(). '.' .$extension;
                $path = "uploads/products/";
                $file->move($path, $filename);
                $imageData[] = [
                    'socialactivities_id' => $socialactivities->id,
                    'image' => $filename,
                ];
            }
        }

        SocialactivitiesImage::insert($imageData);

        return redirect()->back()->with('status', 'social-activities Successfully');
    }
    public function show(SocialactivitiesImage $socialactivitiesImage)
    {
        //
    }
    public function edit(SocialactivitiesImage $socialactivitiesImage)
    {
        //
    }
    public function update(Request $request, SocialactivitiesImage $socialactivitiesImage)
    {
        //
    }
    public function destroy(SocialactivitiesImage $SocialactivitiesImage, int $socialactivitiesImageId)
    {
        $socialactivitiesImages = SocialactivitiesImage::findOrFail($socialactivitiesImageId);
        if(File::exists($socialactivitiesImages->image)){
            File::delete($socialactivitiesImages->image);
        }
        $socialactivitiesImages->delete();
        return redirect()->back()->with('status', 'Image Deleted');
    }
}
