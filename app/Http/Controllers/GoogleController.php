<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
class GoogleController extends Controller
{
    public function redirectToGoogle ()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback ()
    {
        $user = Socialite::driver('google')->user();
        
        $findUser = User::where('google_id', $user->getId())->first();

        if($findUser)
        {
            Auth::login($findUser);
            return redirect()->intended('register');
        }else{
            $newuser = User::create([
                'name' => $user->getName(),
                'username' => $user->getName(),
                'email'=> $user->getEmail(),
                'google_id'=> $user->getId(),
                'password'=>bcrypt('12345')
            ]);

            Auth::login($findUser);
            return redirect()->intended('register'); 
        }
    }
}
