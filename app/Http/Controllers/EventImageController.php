<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventImage;
use App\Http\Controllers\EventImageController;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class EventImageController extends Controller
{
    public function index($id)
    {
        $event = Event::findOrFail($id);
        $eventImages = EventImage::where('event_id', $id)->get();
        return view('admin.event-image.index', compact('event','eventImages'));
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
        $event = Event::findOrFail($id);
        $imageData = [];
        if($files = $request->file('images')){
            foreach($files as $key => $file){
                $extension = $file->getClientOriginalExtension();
                $filename = $key.'-'.time(). '.' .$extension;
                $path = "public/uploads/images/";
                $file->move($path, $filename);
                $imageData[] = [
                    'event_id' => $event->id,
                    'image' => $path.$filename,
                ];
            }
        }

        EventImage::insert($imageData);

        return redirect()->back()->with('status', 'Event Successfully');
    }
    public function show(EventImage $eventImage)
    {
        //
    }
    public function edit(EventImage $eventImage)
    {
        //
    }
    public function update(Request $request, EventImage $eventImage)
    {
        //
    }
    public function destroy(EventImage $eventImage, $id)
    {
        $eventImages = EventImage::findOrFail($id);
        if(File::exists($eventImages->image)){
            File::delete($eventImages->image);
        }
        $eventImages->delete();
        return redirect()->back()->with('status', 'Image Deleted');
    }
}
