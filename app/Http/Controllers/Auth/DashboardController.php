<?php

namespace App\Http\Controllers\Auth;

use auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
     public function index(){
        return view('auth.dashboard');
    }
}
