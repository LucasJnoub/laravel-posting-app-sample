<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{

    public function __construct(){
        $this->middleware(['auth']);
    }

    
    public function index (User $user){
        return view('users.posts.index', [
            'user'=>$user
        ]);
    }
}
