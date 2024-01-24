<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\User;
class VideoController extends Controller
{
    //
    public function loadToPostVideo(){
        return view('video.postVideo',[
            'users'=>User::all()
        ]);
    }

    public function storeVideo(Request $request){
        $videoField=$request->validate([
            'name'=>'required',
            'filename'=>'required|mimes:mp4,ogg,webm|max:20000'
        ]);

        $video = $request->file('video');
        $filename = time() . '.' . $video->getClientOriginalExtension();
        $video->move(public_path('videos'), $filename);

        Video::create([
            'filename' => $filename,
        ]);

        return redirect('/video/showVideo')->with('success', 'Video uploaded successfully.');
    }

    public function showVideo(Video $video){
        return view('video.showVideo', compact('video'),[
            'videos'=>Video::all()
        ]);
    }
}
