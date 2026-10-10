<?php

namespace App\Http\Controllers;

use App\Models\AchievementImage;
use App\Models\Achievement;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AchievementImageController extends Controller
{
    public function index($id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievementImages = AchievementImage::where('achievement_id', $id)->get();
        return view('admin.achievement-image.index', compact('achievement','achievementImages'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request, int $id)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);
        $achievement = Achievement::findOrFail($id);
        $imageData = [];
        if($files = $request->file('images')){
            foreach($files as $key => $file){
                $extension = $file->getClientOriginalExtension();
                $filename = $key.'-'.time(). '.' .$extension;
                $path = "uploads/products/";
                $file->move($path, $filename);
                $imageData[] = [
                    'achievement_id' => $achievement->id,
                    'image' => $filename,
                ];
            }
        }

        AchievementImage::insert($imageData);

        return redirect()->back()->with('status', 'Achievement Successfully');
    }
    public function show(AchievementImage $achievementImage)
    {
        //
    }
    public function edit(AchievementImage $achievementImage)
    {
        //
    }
    public function update(Request $request, AchievementImage $achievementImage,)
    {
        //
    }
    public function destroy(AchievementImage $achievementImage,int $id)
    {
        $achievementImages = AchievementImage::findOrFail($id);
        if(File::exists($achievementImages->image)){
            File::delete($achievementImages->image);
        }
        $achievementImages->delete();

        return redirect()->back()->with('status', 'Image Deleted');
    }
}
