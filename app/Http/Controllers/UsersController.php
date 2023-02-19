<?php

namespace App\Http\Controllers;

use App\Models\UserPassword;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    /* 
     *  Sign Up
     */
    public function signup(Request $request)
    {
        $data = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => ['required', 'min:6', 'regex:/[0-9]/', 'regex:/[A-Z]/'],
            'confirm_password' => 'required|min:6|same:password',
        ]);

        if ($data->fails()) {
            return response()->json($data->messages(), 200);
        }

        /* 
         *  User Informations
         */

        // return response()->json(['User success' => $request ]); -- Debug
        $user = new Users();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->save();

        /* 
         *  Securities
         */
        $registeredPassword = bcrypt($request['password']);
        $password = new UserPassword();
        $password->user_id = $user->id;
        $password->password = $registeredPassword;
        $password->old_password = $registeredPassword;
        $password->save();
    }

    /* 
     *  Login
     */
    public function login(Request $request)
    {
    }

}
