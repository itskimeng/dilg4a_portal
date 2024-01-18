<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Hash;

class UserController extends Controller
{
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required'
    //     ]);
    //     $email = $request->email;
    //     $password = $request->password;

    //     if (Auth::attempt(['email' => $email, 'password' => $password,])) {
    //         return response()->json(Auth::user(), 200);
    //     }
    //     throw ValidationException::withMessages([
    //         'email' => ['Username and password are incorrect.' . $password . '' . $email]
    //     ]);
    // }
    public function login(Request $request)
    {
        $user = User::where('email', $request->input('email'))
            ->where('password', $request->input('password'))
            ->first();

        if ($user) {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'userId' => $user->id, // Assuming 'id' is the user ID field in your User model

            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Failed',
            ]);
        }
    }
    



    public function logout()
    {
        Auth::logout();
    }
}
