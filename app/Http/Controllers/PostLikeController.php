<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function store(Post $post, Request $request){
 
        if($post->likedBy($request->user())){
            $post->likes()->where('user_id',$request->user()->id)->delete();
        } else if ($post->unlikedBy($request->user())) {
            $post->unlikes()->where('user_id',$request->user()->id)->delete();
        }
    
        if(!$post->likedBy($request->user())){
            $post->likes()->create([
                'user_id'=>$request->user()->id
            ]);
        }
    
        return back();
    }
    
}
