<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticated(Request $request, $user)
    {
        if (!$user->is_approved) {
            Auth::logout(); // Log out the user

            // Optionally, you can send a custom message back to the front-end here
            return redirect('/login')->withErrors(['Your account is awaiting approval by an administrator.']);
        }

        // If the user is approved, you can redirect them to the intended location or some default page
        // Define the redirect path here
        return redirect()->intended('/home'); // You can replace '/home' with your desired path
    }
}
