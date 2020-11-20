<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('user.login');
    }
    public function login(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->except(['_token']);
        if (Auth::attempt($credentials)){
            return redirect()->route('user_info');
        }else{
            abort(403);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('posts.show');
    }
}
