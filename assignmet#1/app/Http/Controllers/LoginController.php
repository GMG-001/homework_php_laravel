<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function registration(){
        return view('user.registration');
    }
    public function registration_save(Request $request){
        
        $user=new User($request->all());
        $user->password=bcrypt($request->input('password'));
        $user->save();
        return redirect()->back();
    }
}
