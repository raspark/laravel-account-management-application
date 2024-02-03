<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);
    
        // Create the user
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            // Log the user in
            Auth::login($user);
    
            // Return a success response
            return response()->json('register');
    
        } catch (\Exception $e) {
            // If there was an error, return an error response
            return response()->json('There was an error during the registration. Please try again.', 500);
        }
    }
}
