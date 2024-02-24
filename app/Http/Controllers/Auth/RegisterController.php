<?php
namespace App\Http\Controllers\Auth;

use auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Validation\UniqueValidationException;


    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class RegisterController extends Controller
    {

        public function __construct(){
            $this->middleware(['guest']);
        }
        public function index (){
            return view('auth.register');
        }
        public function store(Request $request)
        {
            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]);
        
            try {
                DB::beginTransaction();
        
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
        
                DB::commit();
        
                auth()->attempt([
                    'email' => $request->email,
                    'password' => $request->password
                ]);
        
                return redirect()->route('dashboard');
            } catch (QueryException $e) {
                DB::rollBack();
        
                if ($e->errorInfo[1] === 1062) {
                    // Duplicate entry error, check which field caused the error
                    if (strpos($e->getMessage(), 'email') !== false) {
                        return back()->withErrors(['email' => 'This email is already in use. Please choose a different one.']);
                     }
                }
        
                // Other database errors, log the error and show a generic error message
                Log::error('Database error: ' . $e->getMessage());
                return back()->withErrors(['email' => 'An error occurred. Please try again later.']);
            }
        }
    }