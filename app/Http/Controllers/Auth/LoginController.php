<?php

namespace App\Http\Controllers\Auth;

// use auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.login');
    }


    public function store(Request $request){
        $this->validate($request,[
            'email'=> 'required|email',
            'password'=> 'required',]);

            if(!auth()->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ],             
                $request->has('remember')            
            ))
             return back()->with('status', 'invalid login details');

            return redirect()->route('dashboard');
    }



}
