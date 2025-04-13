<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{

    //Google Login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    //Google callback
    public function handleGoogleCallback()
    {

        $user = Socialite::driver('google')->stateless()->user();

        $this->registerOrLogin($user);
        return redirect()->route('dashboard')->with(array('message' => "Google logged in successfully", 'type' => 'success'));
    }

    //Facebook Login
    public function redirectTofacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    //facebook callback
    public function handlefacebookCallback()
    {

        $user = Socialite::driver('facebook')->stateless()->user();

        $this->registerOrLogin($user);
        return redirect()->route('dashboard')->with(array('message' => "Facebook logged in successfully", 'type' => 'success'));
    }

    //Github Login
    public function redirectToGithub()
    {
        return Socialite::driver('github')->stateless()->redirect();
    }

    //github callback
    public function handleGithubCallback()
    {

        $user = Socialite::driver('github')->stateless()->user();

        $this->registerOrLogin($user);
        return redirect()->route('dashboard')->with(array('message' => "Github logged in successfully", 'type' => 'success'));
    }

    protected function registerOrLogin($data)
    {

        $user = User::where('email', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->password = Hash::make('12345678');
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }
        Auth::login($user);
    }
}
