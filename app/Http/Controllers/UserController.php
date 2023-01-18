<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => ['required', 'min:6', 'regex:/[0-9]/', 'regex:/[A-Z]/'],
            'confirm_password' => 'required|min:6',
        ]);
        // dd('halo');
        // dd($data);
        if ($data['password'] !== $data['confirm_password']) {
            return redirect()->back()->with('error', 'Password does not match');
        }

        $user = new User();
        $user->first_name = $data['first_name'];
        $user->last_name = $data['first_name'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return redirect()->route('login');
    }
}
