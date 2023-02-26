<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
    $data = array('title' => 'Homepage');
    return view('login.index', $data);
    }

         public function registerpost(Request $request)
    {
        $data = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/login');
    }
        public function loginpost(Request $request)
    {
       $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($data))
        {
            return redirect('/');
        } else {
            return redirect('/login');
        }

    }

        public function logout(){
            Auth::logout();
            return redirect('/');
        }
}
