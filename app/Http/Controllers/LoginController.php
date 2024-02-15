<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\support\Facades\Hash;

class LoginController extends Controller
{
    public function RegisForm(user $user){
        return view('registration.registrations');
    }
    public function LoginForm(user $user){
        return view('login.login');
    }

    public function register(request $request)
    {
        $validateData = $request->validate(
            [
                'username'=>'required|string|max:250',
                'password'=>'required|string|max:250|unique:users',
            ]);
            // user::create([
            //     'username'=>$request->username,
            //     'password'=>Hash::make($request->password)
            // ]);

            // $credentials = $request->only('username', 'password');
            Auth::attempt($validateData);
            $request->session()->regenerate();
            return redirect()->route('adminboard')
            ->withSuccess('Logged In');
        
    }
        public function login(request $request)
        {
        $validateData = $request->validate(
            [   
                $credentials = $request->validate([
                    'username'=>'required',
                    'password'=>'required'
                ])
            ],
            );
            user::create([
                'name'=>$request->username,
                'password'=>Hash::make($request->password)
            ]);

            $credentials = $request->only('username', 'password');
            Auth::attempt($credentials);
            $request->session()->regenerate();
            return redirect()->route('adminboard')
            ->withSuccess('Logged In');
        } 

        public function logout()
        {
            Auth::logout();
            Session::regenerateToken();
            return redirect('/');
        }
    }



