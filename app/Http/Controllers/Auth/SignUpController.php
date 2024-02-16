<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index()
    {
        return view('signup.index');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required|min:8',
            'profile_pitcure' => 'required|image|mimes:jpeg,jpg,png|max:2048'

        ]);

        $image = $request->file('profile_pitcure');
        $image->storeAs('public/users', $image->hashName());

        if($validator)
        {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
                'profile_pitcure' => $image
                
            ]);

            return redirect()->to('/login');
        }

    }
}
