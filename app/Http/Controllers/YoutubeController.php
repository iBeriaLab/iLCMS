<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;



class YoutubeController extends Controller
{
    public function index()
    {
        $youtube = Youtube::getVideoInfo('rie-hPVJ7Sw');
        dd($youtube);
        //return response()->json($youtube, 200);
    }
}
