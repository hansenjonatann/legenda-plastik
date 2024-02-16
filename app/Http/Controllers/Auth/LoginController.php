<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $credentsials =  $request->only('username' , 'password');

        if (Auth::attempt($credentsials)) {
            $user = Auth::user(); // Retrieve the authenticated user
    
            if ($user->roles == 'admin') {
                return redirect()->intended('/products')->with('success', 'Login Admin Success');
            }
    
            if ($user->roles == 'cashier') {
                return redirect()->intended('/cashier')->with('success', 'Login Cashier Success');
            }
        }
    
        return redirect()->back()->withErrors(['invalid' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->to('/');
    }


}
