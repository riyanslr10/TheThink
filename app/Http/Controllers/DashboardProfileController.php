<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardProfileController extends Controller
{
    /**
     * Display the user's profile.
     */
    public function index()
    {
        // Mendapatkan data profil pengguna yang login
        $User = auth()->user();

        return view('dashboard.profile.index', compact('User'));
    }

    public function show(User $user)
    {
        return view('dashboard.posts.show', [
            'user'=> $user
        ]);
    }

    public function store(Request $request)
{
    // Validasi data yang diterima dari formulir
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'username' => [
            'required',
            'string',
            'max:255',
            Rule::unique('users')->ignore(auth()->id()),
        ],
        'email' => [
            'required',
            'email',
            'max:255',
            Rule::unique('users')->ignore(auth()->id()),
        ],
        'password' => 'required|string|min:8',
        // tambahkan validasi sesuai kebutuhan lainnya
    ]);

    // Perbarui data profil pengguna yang login
    auth()->user()->update([
        'name' => $validatedData['name'],
        'username' => $validatedData['username'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
    ]);

    return redirect('/dashboard/profile')->with('success', 'Profile updated successfully!');
}

    /**
     * Show the form for editing the user's profile.
     */
    public function edit()
    {
        // Mendapatkan data profil pengguna yang login
        $user = auth()->user();

        return view('dashboard.profiles.edit', compact('User'));
    }

    /**
     * Update the user's profile in storage.
     */
    public function update(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            // tambahkan validasi sesuai kebutuhan lainnya
        ]);

        // Perbarui data profil pengguna yang login
        auth()->user()->update($validatedData);

        return redirect('/dashboard/profile')->with('success', 'Profile updated successfully!');
    }

    /**
     * Show the form for changing the user's password.
     */
    public function changePasswordForm()
    {
        return view('dashboard.profile.change-password');
    }

    /**
     * Update the user's password in storage.
     */
    public function changePassword(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'current_password' => 'required|password',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Perbarui password pengguna yang login
        auth()->user()->update(['password' => bcrypt($validatedData['new_password'])]);

        return redirect('/dashboard/profile')->with('success', 'Password changed successfully!');
    }
}
