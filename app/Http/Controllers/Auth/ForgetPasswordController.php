<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgetPasswordController extends Controller
{
    public function forgetPassword(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            // Custom error messages
            'email.exists' => 'The provided email is not registered.', // If the email does not exist
        ]);

        // Send the password reset link
        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return response()->json('Password reset link sent to your email.');
        } else {
            return response()->json('Failed to send password reset link.', 500);
        }
    }
}
