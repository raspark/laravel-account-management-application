<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ], [
            // Custom error messages
            'email.exists' => 'The provided email is not registered.', // If the email does not exist
        ]);

        $credentials = $request->only('email', 'password');
        // Check if the user wants to be remembered
        $remember = $request->has('rem');

        // Attempt to log the user in
        if (Auth::attempt($credentials, $remember)) {
            // Authentication passed successfully and the user is logged in
            $response = response()->json('login');

            // If the user wants to be remembered, add a cookie to the response
            if ($remember) {
                $response->cookie('email', $request->input('email'), 60 * 24 * 7); // Cookie expires after 7 days
            }

            return $response;
        } else {
            // Authentication failed. Return an error response
            return response()->json('Incorrect credentials!! Please check email and password.', 401);
        }
    }
}
