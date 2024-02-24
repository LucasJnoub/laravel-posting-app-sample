<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostUnlikeController extends Controller
{
    public function store(Post $post, Request $request){
    
        // Check if the user has already unliked the post, and if so, do nothing
        // if($post->unlikedBy($request->user())){
        //     return back();
        // }
    
        // Check if the user has liked the post before unliking it
        if($post->likedBy($request->user())){
            // If the user has liked the post, delete the like
            $post->likes()->where('user_id', $request->user()->id)->delete();
        }else if ($post->unlikedBy($request->user())) {
            $post->unlikes()->where('user_id',$request->user()->id)->delete();
        }
    
        // Check if the user has already unliked the post, and if so, do nothing
        if(!$post->unlikedBy($request->user())){
            // Create a new unlike for the post by the user
            $post->unlikes()->create([
                'user_id'=>$request->user()->id
            ]);
        }
    
        return back();
    }
    
}
