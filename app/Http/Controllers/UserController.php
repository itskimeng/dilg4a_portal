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
    public function login(Request $request)
    {
        $user = User::where('email', $request->input('email'))->get();
        if ($user[0]->password == $request->input('password')) {
            // $request->session()->put('user', $request->input('name'));
            return response()->json([
                'status' => true,
                'message' => 'Success',
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
