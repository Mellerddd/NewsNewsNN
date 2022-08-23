<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    public function get()
    {
        return view('auth.login');
    }
    public function submit(LoginRequest $request){
        $user = User::where($request->validated())->first();
        if($user){
            auth()->login($user);
            return redirect()->route('home');
        }else{
            return back()->withErrors([
               'password' => 'Не верный пароль'
            ]);
        }
    }
}
