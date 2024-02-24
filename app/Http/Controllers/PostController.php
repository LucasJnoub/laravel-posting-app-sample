<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Post;
use Illuminate\Http\Request;
    
class PostController extends Controller
{
    public function index(){
        $posts = Post::with('user', 'likes')->latest()->paginate(2);
        return view('posts.index',['posts'=>$posts]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'body'=>'required'
        ]);
    
        if (!empty($request->body)) {
            $request->user()->posts()->create([
                'body'=> $request->body
            ]);
        } else {
            // Handle empty body error
            return back()->with('error', 'O corpo do post não pode estar vazio.');
        }
    
        return redirect()->route('posts');
    }
    
    public function destroy(Post $post){
        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }
}
