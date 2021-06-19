<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $request){

//        return $request->input();
        $user = User::where(['email'=>$request->email])->first();
        return $user->password;

        if (!$user || !Hash::check($request->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }

    }
}
