<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }
    function login(Request $request){
        Session::flash('email', $request->email);
        $request->validate(
            ['name'=>'required',
            'email'=>'required',
            'password'=>'required'],
            ['name.required'=>'Nama mohon Diisi',
             'email.required'=>'Email Wajib Diisi',
             'password.required'=>'Password Wajib Diisi']
        );
        
        $infologin = [
            'email'=> $request -> email,
            'password'=>$request -> password
        ];
    if (Auth::attempt($infologin)) {
        //kalau otentikasi berhasil
        return redirect('page/dashboard')->with('success', 'Berhasil login');
        
    }else{
        //kalau otentikasi gagal
        return redirect('sesi')->withErrors('Kurang Beruntung');
    }
    }
}
