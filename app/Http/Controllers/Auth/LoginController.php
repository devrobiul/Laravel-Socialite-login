<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {

        $cradentials = $request->only('email', 'password');
        if (Auth::attempt($cradentials)) {
            $user =  Auth::user();
            if ($user->hasRole('admin')) {
                return redirect()->route('dashboard');
            }
        }
    }
}
