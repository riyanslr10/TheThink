<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function GoogleLogin ()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle()
{
    try {
        $user = Socialite::driver('google')->user();
        $findUser = User::where('email', $user->email)->first();

        if (!$findUser) {
            $findUser = new User();
            $findUser->name = $user->name;
            $findUser->username = $user->name;
            $findUser->email = $user->email;
            $findUser->password = bcrypt('password');
            $findUser->type = 'customer';
            $findUser->status = 'Active';
            $findUser->remember_token = Str::random(10); // Tambahkan remember_token
            $findUser->save();
        }

        Auth::login($findUser);

        return redirect('/');

    } catch (Exception $e) {
        dd($e->getMessage());
    }
}

    
    public function index()
    {
        return view('login.index', [
            'title' => 'login',
            'active'=> 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
       $credentials = $request->validate([
        'email' => 'required|email',
        'password'=> 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

    return back()->with('LoginError', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();
        
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

}
