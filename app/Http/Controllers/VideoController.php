<?php

namespace App\Http\Controllers;


use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        $videos = Youtube::listChannelVideos('UCk1SpWNzOs4MYmr0uICEntg', 40);

        // = json_decode(file_get_contents($youtube), true);

        return view('admin.videos.index', compact('videos'));
    }

    public function show($id)
    {
        $video = Youtube::getVideoInfo($id);

        return view('admin.videos.show', compact('video'));
    }
}
