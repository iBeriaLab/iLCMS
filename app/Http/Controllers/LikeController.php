<?php

namespace App\Http\Controllers;

use App\Like;
use App\Posts;
use Illuminate\Http\Request;
use Auth;

class LikeController extends Controller
{

    public function index()
    {
        return null;
    }

    public function store(Request $request)
    {
       $post_id = $request['postId'];
       $isLiked = $request['isLike'] === 'true';
       $update = false;
       $post = Posts::find($post_id);
       if (!$post){
           return null;
       }
       $user = Auth::user();
       $like = $user->likes()->where('post_id', $post_id)->first();
       if($like){
           $already_like = $like->like;
           $update = true;
           if ($already_like == $isLiked){
               $like->delete();
               return null;
           }
       } else{
           $like = new Like();
       }
       $like->like = $isLiked;
       $like->user_id = $user->id;
       $like->post_id = $post->id;
       if ($update){
           $like->update();
       } else{
           $like->save();
       }
       return null;
    }
}